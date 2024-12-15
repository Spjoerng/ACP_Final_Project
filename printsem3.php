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
        <a href="menu_third_sem.html">
            <img src="border.png" />
        </a>
    </div>

    <div class="container_of_signout_button">
        <a href="login.php">
            <img src="log-out_logo.png" style="width: 30px; height: 30px;">
        </a>
        <a href="login.php">Sign-out</a>
    </div>

    <div class="gray_border"></div>

    <?php
session_start();
include "connmidsem.php";

// Fetch lecturers for dropdown
$lec_sql_name = "SELECT id, name FROM names";
$lec_name_result = $conn->query($lec_sql_name);

// Get selected lecturer
$selected_lec_name = isset($_POST['name']) ? $_POST['name'] : null;

function lecturerDropdown($lec_name_result, $selected_lec_name) {
    echo '<label for="name" class="lecturer">Lecturer:</label>';
    echo '<select name="name" id="name" class="dropdown_lec">';
    
    // "All" option
    $selected_all = ($selected_lec_name === 'All') ? 'selected' : '';
    echo "<option value='All' $selected_all>All</option>";

    // Individual lecturers
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

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit']) && $selected_lec_name) {
    echo "<div class='content-wrapper'>";
    echo "<div class='centered-title'>";
    echo "<h3>SCHEDULE FOR FIRST SEMESTER</h3>";
    echo "<h3>A.Y. 2024-2025</h3>";
    echo "</div>";

    if ($selected_lec_name === 'All') {
        // Query for all lecturers
        $query = "
            SELECT n.id AS lecturer_id, n.name, p.position, de.desig
            FROM names n
            JOIN position p ON n.position_id = p.id
            JOIN designation de ON n.designation_id = de.id
        ";
        $lecturers = $conn->query($query);

        if ($lecturers->num_rows > 0) {
            while ($lecturer = $lecturers->fetch_assoc()) {
                displayLecturerSchedule($conn, $lecturer);
            }
        } else {
            echo "<p>No lecturers found.</p>";
        }
    } else {
        // Query for a specific lecturer
        $query = "
            SELECT n.id AS lecturer_id, n.name, p.position, de.desig
            FROM names n
            JOIN position p ON n.position_id = p.id
            JOIN designation de ON n.designation_id = de.id
            WHERE n.name = ?
        ";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("s", $selected_lec_name);
        $stmt->execute();
        $lecturer = $stmt->get_result()->fetch_assoc();
        $stmt->close();

        if ($lecturer) {
            displayLecturerSchedule($conn, $lecturer);
        } else {
            echo "<p>Lecturer not found.</p>";
        }
    }
    echo "</div>";
} else {
    // Display form
    echo '<form method="post" action="" class="fixed-form">';
    lecturerDropdown($lec_name_result, $selected_lec_name);
    echo '<br>';
    echo '<div class="container_of_search">';
    echo '<button type="submit" name="submit" style="background:none; border:none; cursor:pointer;">';
    echo '<img src="search_logo.png" style="width: 10px; height: 10px;">';
    echo 'Search';
    echo '</button>';
    echo '</div>';
    echo '</form>';   
    }
    
    // Form to redirect to print
    
    if ($selected_lec_name) {
    echo '<div class="container_of_print_button">';
    echo '<form method="post" action="print_firstsem_sched.php" class="fixed-form">';
    echo '<input type="hidden" name="name" value="' . htmlspecialchars($selected_lec_name, ENT_QUOTES, 'UTF-8') . '">';
    echo '<button type="submit" name="print" class="print-button">Print</button>';
    echo '</form>';
    echo '</div>';
    } else {
    // Handle case where $selected_lec_name is not set
    echo '<p>No lecturer selected</p>';
    }

// Function to display lecturer schedule
function displayLecturerSchedule($conn, $lecturer) {
    $lecturer_id = $lecturer['lecturer_id'];
    $lecturer_name = $lecturer['name'];
    $lecturer_position = $lecturer['position'];
    $lecturer_desig = $lecturer['desig'];


    $unit_count=0;
    // Count units
    $unit_count_query = "SELECT COUNT(name_id) AS unit_count FROM lecturers WHERE name_id = ?";
    $stmt = $conn->prepare($unit_count_query);
    $stmt->bind_param("i", $lecturer_id);
    $stmt->execute();
    $stmt->bind_result($unit_count);
    $stmt->fetch();
    $stmt->close();

    $units = $unit_count * 3;

    // Display lecturer details
    if($units!==0){
    echo "<h4>Lecturer: " . htmlspecialchars($lecturer_name) . "</h4>";
    echo "<h4>" . htmlspecialchars($lecturer_position) . " / " . htmlspecialchars($lecturer_desig) . "</h4>";
    echo "<h4>Lecturer Units: $units</h4>";
    }

    // Fetch and display regular schedules
    $schedule_query = "
        SELECT sec.sections, s.subject_code, s.subject, r.rooms, d.day, st.start_time, et.end_time
        FROM lecturers l
        LEFT JOIN subjects s ON l.subject_id = s.id
        LEFT JOIN sections sec ON l.section_id = sec.id
        LEFT JOIN rooms r ON l.room_id = r.id
        LEFT JOIN day d ON l.day_id = d.id
        LEFT JOIN time_slots st ON l.startTime_id = st.id
        LEFT JOIN time_slots et ON l.endTime_id = et.id
        WHERE l.name_id = ?
        ORDER BY d.id, sec.id, st.id
    ";

    $stmt = $conn->prepare($schedule_query);
    $stmt->bind_param("i", $lecturer_id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
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

    $stmt->close();
}
$conn->close();
?>

    <div class="container_of_return_to_hp_button">
        <a href = "menu_third_sem.html">
        <button type="return" name="return_hp" style="background:none; border:none; cursor:pointer; color:inherit; font:inherit; text-decoration:none;">
            Return to Homepage
        </button>
        </a>
    </div>
    
</body>
</html>