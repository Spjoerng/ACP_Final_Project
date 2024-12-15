<?php
    session_start(); 
    include "connfirstsem.php";
    
    $lec_sql_name = "SELECT name FROM names";  
    $lec_name_result = $conn->query($lec_sql_name);
    
    $selected_lec_name = isset($_POST['name']) ? $_POST['name'] : null;
    
    function lecturerDropdown($lec_name_result, $selected_lec_name) {
        echo '<label for="name">Lecturer:</label>';
        echo '<select name="name" id="name">';
        
        $selected_all = ($selected_lec_name === 'All') ? 'selected' : '';
        echo "<option value='All' $selected_all>All</option>";
    
        if ($lec_name_result->num_rows > 0) {
            while ($row = $lec_name_result->fetch_assoc()) {
                $selected = ($row['name'] == $selected_lec_name) ? 'selected' : '';
                echo "<option value='" . htmlspecialchars($row['name']) . "' $selected>" . htmlspecialchars($row['name']) . "</option>";
            }
        } else {
            echo "<option>No Lecturers found</option>";
        }
        
        echo '</select>';

        
    }
    function showLecturerSchedules($conn, $lecturer_id, $lecturer_name, $is_excess_load = false) {
        $table_title = $is_excess_load ? "Excess Load for" : "Regular Schedule for";
    
        // Query for schedules
        $query = "
            SELECT s.subject_code, s.subject, sec.sections, r.rooms, d.day, st.start_time, et.end_time
            FROM " . ($is_excess_load ? "excess_load" : "lecturers") . " l
            LEFT JOIN names n ON l.name_id = n.id
            LEFT JOIN subjects s ON l.subject_id = s.id
            LEFT JOIN sections sec ON l.section_id = sec.id
            LEFT JOIN rooms r ON l.room_id = r.id
            LEFT JOIN day d ON l.day_id = d.id
            LEFT JOIN time_slots st ON l.startTime_id = st.id
            LEFT JOIN time_slots et ON l.endTime_id = et.id
            WHERE l.name_id = ?
            ORDER BY d.id, sec.id, st.id";
    
        $stmt = $conn->prepare($query);
        $stmt->bind_param("i", $lecturer_id);
        $stmt->execute();
        $result = $stmt->get_result();
    
        if ($result->num_rows > 0) {
            echo "<h5>" . htmlspecialchars($table_title) . ": " . htmlspecialchars($lecturer_name) . "</h5>";
            echo "<table class='schedule-table'>";
            echo "<thead><tr><th>Section</th><th>Subject Code</th><th>Subject</th><th>Room</th><th>Day</th><th>Start Time</th><th>End Time</th></tr></thead><tbody>";
    
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . htmlspecialchars($row['sections']) . "</td>";
                echo "<td>" . htmlspecialchars($row['subject_code']) . "</td>";
                echo "<td>" . htmlspecialchars($row['subject']) . "</td>";
                echo "<td>" . htmlspecialchars($row['rooms']) . "</td>";
                echo "<td>" . htmlspecialchars($row['day']) . "</td>";
                echo "<td>" . htmlspecialchars($row['start_time']) . "</td>";
                echo "<td>" . htmlspecialchars($row['end_time']) . "</td>";
                echo "</tr>";
            }
    
            echo "</tbody></table>";
        }
    }
    function showAllLecturers($conn) {
        // Fetch all lecturers with their positions and designations
        $query = "
            SELECT n.id AS lecturer_id, n.name, p.position, de.desig
            FROM names n 
            JOIN position p ON n.position_id = p.id 
            JOIN designation de ON n.designation_id = de.id";
        $lecturers = $conn->query($query);
    
        if ($lecturers->num_rows > 0) {
            while ($lecturer = $lecturers->fetch_assoc()) {
                $lecturer_id = $lecturer['lecturer_id'];
                $lecturer_name = $lecturer['name'];
                $lecturer_position = $lecturer['position'];
                $lecturer_desig = $lecturer['desig'];
    
    
                $unit_count=0;
    
                // Count units for the current lecturer
                $unit_count_query = "
                    SELECT COUNT(name_id) AS unit_count 
                    FROM lecturers 
                    WHERE name_id = ?";
                $stmt = $conn->prepare($unit_count_query);
                $stmt->bind_param("i", $lecturer_id);
                $stmt->execute();
                $stmt->bind_result($unit_count);
                $stmt->fetch();
                $stmt->close();
    
                // Multiply units by 3
                $units = $unit_count * 3;
    
                // Display lecturer details
                if($units!==0){
                    echo "<h4>Lecturer: " . htmlspecialchars($lecturer_name) . "</h4>";
                    echo "<h4>" . htmlspecialchars($lecturer_position) . " / " . htmlspecialchars($lecturer_desig) . "</h4>";
                    echo "<h4>Lecturer Units: " . $units . "</h4>";
                }
                // Fetch and display regular schedules
                showLecturerSchedules($conn, $lecturer_id, $lecturer_name, false);
    
                // Fetch and display excess load schedules
                showLecturerSchedules($conn, $lecturer_id, $lecturer_name, true);
    
                echo "<br><br>";
            }
        }
    }
    function showLecturer($conn, $selected_lec_name){
        $query = "
            SELECT n.id AS lecturer_id, n.name, p.position, de.desig
            FROM names n 
            JOIN position p ON n.position_id = p.id 
            JOIN designation de ON n.designation_id = de.id
            WHERE n.name = ?";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("s", $selected_lec_name);
        $stmt->execute();
        $lecturers = $stmt->get_result(); // Fetch only the selected lecturer and their position
        $row = $lecturers->fetch_assoc();
    
        $lecturer_id = $row['lecturer_id'];
        $lecturer_name = $row['name'];
        $lecturer_position = $row['position'];
        $lecturer_desig = $row['desig'];
    
    
        // count units
        $unit_count_query = "
        SELECT COUNT(name_id) AS unit_count 
        FROM lecturers 
        WHERE name_id = ?";  
    
        $unit_count=0;
        // Get count
        $stmt = $conn->prepare($unit_count_query);
        $stmt->bind_param("i", $lecturer_id);  
        $stmt->execute();
        $stmt->bind_result($unit_count);  // Fetch the unit count directly
        $stmt->fetch();
        $stmt->close();
    
        $units = $unit_count * 3;
    
        // Fetch regular schedules
        $query = "
            SELECT n.name, s.subject_code, s.subject, sec.sections, r.rooms, d.day, st.start_time, et.end_time
            FROM lecturers l
            LEFT JOIN names n ON l.name_id = n.id
            LEFT JOIN subjects s ON l.subject_id = s.id
            LEFT JOIN sections sec ON l.section_id = sec.id
            LEFT JOIN rooms r ON l.room_id = r.id
            LEFT JOIN day d ON l.day_id = d.id
            LEFT JOIN time_slots st ON l.startTime_id = st.id
            LEFT JOIN time_slots et ON l.endTime_id = et.id
            WHERE n.name = ?
            ORDER BY d.id, sec.id, st.id";
        
        $stmt = $conn->prepare($query);
        $stmt->bind_param("s", $selected_lec_name);
        $stmt->execute();
        $result = $stmt->get_result();
    
        
        if ($result->num_rows > 0) {
            echo "<h4>Lecturer: " . htmlspecialchars($lecturer_name) . "</h4>";
            echo "<h4>" . htmlspecialchars($lecturer_position) . " / " . htmlspecialchars($lecturer_desig) . "</h4>";
            echo "<h4>Lecturer Units: ". htmlspecialchars($units)."</h4>";
    
            echo "<table class='schedule-table'>";
            echo "<thead>";
            echo "<tr><th>Section</th><th>Subject Code</th><th>Subject</th><th>Room</th><th>Day</th><th>Start Time</th><th>End Time</th></tr>";
            echo "</thead><tbody>";
    
            while ($row = $result->fetch_assoc()) {
    
                echo "<tr>";
                echo "<td>" . htmlspecialchars($row['sections']) . "</td>";
                echo "<td>" . htmlspecialchars($row['subject_code']) . "</td>";
                echo "<td>" . htmlspecialchars($row['subject']) . "</td>";
                echo "<td>" . htmlspecialchars($row['rooms']) . "</td>";
                echo "<td>" . htmlspecialchars($row['day']) . "</td>";
                echo "<td>" . htmlspecialchars($row['start_time']) . "</td>";
                echo "<td>" . htmlspecialchars($row['end_time']) . "</td>";
                echo "</tr>";
            }
    
            echo "</tbody></table>";
        } else {
            echo "<p>No schedule available for " . htmlspecialchars($selected_lec_name) . ".</p>";
            }
    
        // Fetch excess load schedules
        $excessQuery = "
            SELECT n.name, s.subject_code, s.subject, sec.sections, r.rooms, d.day, st.start_time, et.end_time
            FROM excess_load l
            LEFT JOIN names n ON l.name_id = n.id
            LEFT JOIN subjects s ON l.subject_id = s.id
            LEFT JOIN sections sec ON l.section_id = sec.id
            LEFT JOIN rooms r ON l.room_id = r.id
            LEFT JOIN day d ON l.day_id = d.id
            LEFT JOIN time_slots st ON l.startTime_id = st.id
            LEFT JOIN time_slots et ON l.endTime_id = et.id
            WHERE n.name = ?
            ORDER BY d.id, st.id";
        
        $stmt = $conn->prepare($excessQuery);
        $stmt->bind_param("s", $selected_lec_name);
        $stmt->execute();
        $result = $stmt->get_result();
    
        if ($result->num_rows > 0) {
            echo "<h5>Excess Load for: " . htmlspecialchars($selected_lec_name) . "</h5>";
            echo "<table class='schedule-table'>";
            echo "<thead>";
            echo "<tr><th>Section</th><th>Subject Code</th><th>Subject</th><th>Room</th><th>Day</th><th>Start Time</th><th>End Time</th></tr>";
            echo "</thead><tbody>";
    
            while ($row = $result->fetch_assoc()) {
    
                echo "<tr>";
                echo "<td>" . htmlspecialchars($row['sections']) . "</td>";
                echo "<td>" . htmlspecialchars($row['subject_code']) . "</td>";
                echo "<td>" . htmlspecialchars($row['subject']) . "</td>";
                echo "<td>" . htmlspecialchars($row['rooms']) . "</td>";
                echo "<td>" . htmlspecialchars($row['day']) . "</td>";
                echo "<td>" . htmlspecialchars($row['start_time']) . "</td>";
                echo "<td>" . htmlspecialchars($row['end_time']) . "</td>";
                echo "</tr>";
            }
    
            echo "</tbody></table>";
        } else {
            echo "<p>No excess load available for " . htmlspecialchars($selected_lec_name) . "</p>";        
            }
    
    }    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Select a Lecturer and Subject</title>
    <link rel="icon" href="SmartFLO%20Logo.png" type="image/png">
    <link rel="stylesheet" href="printload.css">
</head>
<body>
    <div class="homepage_border">
        <a href="menu_first_sem.html">
            <img src="border.png" />
        </a>
    </div>

    <div class="container_of_signout_button">
        <a href="login.php">
            <img src="log-out_logo.png" style="width: 30px; height: 30px;">
        </a>
        <a href="login.php">Sign-out</a>
    </div>

    <div class="gray_border">
    </div>
    
    <div class='content-wrapper'></div>
    <div class='centered-title'>
    <h3>SCHEDULE FOR FIRST SEMESTER</h3>
    <h3> A.Y. 2024-2025</h3>
    </div>


    <form method="post" action="">
        <?php

        lecturerDropdown($lec_name_result, $selected_lec_name);
        echo '<br>';

        if ($_SERVER["REQUEST_METHOD"] == "POST" && $selected_lec_name) {
            // Retrieve lecturers to iterate through
            $lecturers = ($selected_lec_name === 'All') ? $conn->query($lec_sql_name) : [['name' => $selected_lec_name]];

            if($selected_lec_name === 'All'){
                showAllLecturers($conn);
            }
            else {
                showLecturer($conn, $selected_lec_name);
            }
        }
        $conn->close();

        if ($selected_lec_name) {
            echo '<div class="container_of_print_button">';
            echo '<form method="post" action="print_firstsem_sched.php" class="fixed-form">';
            echo '<input type="hidden" name="name" value="' . htmlspecialchars($selected_lec_name, ENT_QUOTES, 'UTF-8') . '">';
            echo '<button type="submit" name="print" class="print-button">Print';
            echo '</button>';
            echo '</form>';
            echo '</div>';
        }

        ?>

    <div class="container_of_search">
        <button type="submit" name="submit" style="background:none; border:none; cursor:pointer;">
            <img src="search_logo.png" style="width: 10px; height: 10px;">
        </button>
      
        <button type="submit" name="submit" style="background:none; border:none; cursor:pointer; color:inherit; font:inherit; text-decoration:none;">
            Search
        </button>
    </div>
    </form>
        
</body>
</html>