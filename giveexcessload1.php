<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Select a Lecturer and Subject</title>
    <link rel="stylesheet" href="excess.css">
</head>
<body>

<div class = "homepage_border">
    <a href = "menu_first_sem.html">
    <img src = "border.png"/> </a>
  </div>

  <!--sign-out button-->
  <div class="container_of_signout_button">
    <a href = "login.php">
    <img src="log-out_logo.png" style="width: 30px; height: 30px;"></a>
  
    <a href="login.php">Sign-out</a>
  </div>

  <div class="container_of_back_button">
    <a href = "menu_first_sem.html">
    <img src="back_logo.png" style="width: 30px; height: 30px;"></a>
  
    <a href="menu_first_sem.html">Back</a>
  </div>

  <!--borders-->
  <div class="gray_border">
  </div>

  <div class="title">
    <p>Smart Faculty Load Optimization and Schedule Management (SmartFLO)</p>
    <p>FOR AY 2024-2025</p>
  </div>

  <div class="info">
    <p>Give Excess Load</p>
  </div>

<?php
session_start();
include "connfirstsem.php";

// Fetch lecturers for the dropdowns
$lec_sql_name = "SELECT id, name FROM names";
$lec_name_result = $conn->query($lec_sql_name);

// Initialize variables
$selected_lec_name = isset($_POST['name']) ? $_POST['name'] : null;
$substitute_lec_name = isset($_POST['name_id']) ? $_POST['name_id'] : null;

// Step 1: Display Excess Load
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
";

$stmt1 = $conn->prepare($excessQuery);
if ($stmt1->execute()) {
    $result = $stmt1->get_result();
    echo "Excess Load:";
    if ($result->num_rows > 0) {
        echo "<table class='schedule-table'>";
        echo "<thead>";
        echo "<tr><th>Section</th><th>Subject Code</th><th>Subject</th><th>Room</th><th>Day</th><th>Start Time</th><th>End Time</th></tr>";
        echo "</thead>";
        echo "<tbody>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . htmlspecialchars($row['name']) . "</td>";
            echo "<td>" . htmlspecialchars($row['sections']) . "</td>";
            echo "<td>" . htmlspecialchars($row['subject_code']) . "</td>";
            echo "<td>" . htmlspecialchars($row['subject']) . "</td>";
            echo "<td>" . htmlspecialchars($row['rooms']) . "</td>";
            echo "<td>" . htmlspecialchars($row['day']) . "</td>";
            echo "<td>" . htmlspecialchars($row['start_time']) . "</td>";
            echo "<td>" . htmlspecialchars($row['end_time']) . "</td>";
            echo "</tr>";
        }
        echo "</tbody>";
        echo "</table>";
    } else {
        echo "<p>No schedule available for this lecturer.</p>";
    }
} else {
    echo "<p>Error executing query: " . htmlspecialchars($stmt1->error) . "</p>";
}
$stmt1->close(); // Close the first statement

// Step 2: Transfer Data and Handle Post Request
if ($_SERVER["REQUEST_METHOD"] == "POST" && $selected_lec_name && $substitute_lec_name) {
    // Fetch ID of the selected lecturer
    $getLecturerIdQuery = "SELECT id FROM names WHERE name = ?";
    $stmt2 = $conn->prepare($getLecturerIdQuery);
    $stmt2->bind_param("s", $selected_lec_name);

    if ($stmt2->execute()) {
        $result = $stmt2->get_result();
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $currentLecturerId = $row['id'];

            // Transfer data
            $transferDataQuery = "INSERT INTO lecturers (subject_id, section_id, day_id, room_id, startTime_id, endTime_id, name_id) 
                                  SELECT subject_id, section_id, day_id, room_id, startTime_id, endTime_id, ? 
                                  FROM excess_load WHERE name_id = ?";
            $stmt3 = $conn->prepare($transferDataQuery);
            $stmt3->bind_param("ii", $substitute_lec_name, $currentLecturerId);

            if ($stmt3->execute()) {
                echo "<p>Data transferred successfully: Rows affected: " . $stmt3->affected_rows . "</p>";

                // Delete transferred data
                $deleteDataQuery = "DELETE FROM excess_load WHERE name_id = ?";
                $stmt4 = $conn->prepare($deleteDataQuery);
                $stmt4->bind_param("i", $currentLecturerId);

                if ($stmt4->execute()) {
                    echo "<p>Data removed successfully: Rows affected: " . $stmt4->affected_rows . "</p>";
                } else {
                    echo "<p>Error deleting data: " . htmlspecialchars($stmt4->error) . "</p>";
                }
                $stmt4->close(); // Close the delete statement
            } else {
                echo "<p>Error transferring data: " . htmlspecialchars($stmt3->error) . "</p>";
            }
            $stmt3->close(); // Close the transfer statement
        } else {
            echo "<p>No lecturer found with the name '" . htmlspecialchars($selected_lec_name) . "'.</p>";
        }
    } else {
        echo "<p>Error fetching lecturer ID: " . htmlspecialchars($stmt2->error) . "</p>";
    }
    $stmt2->close(); // Close the second statement
}

$conn->close();
?>




    <form method="post" action="">
        <!-- Dropdown for selecting the current lecturer -->
        <label for="name">Current Lecturer:</label>
        <select name="name" id="name">
            <option value="" disabled selected>Select a lecturer</option>
            <?php
            // Reset and fetch the lecturers for the first dropdown
            $lec_name_result->data_seek(0); // Reset pointer
            while ($row = $lec_name_result->fetch_assoc()) {
                $selected = (isset($selected_lec_name) && $row['name'] === $selected_lec_name) ? 'selected' : '';
                echo "<option value='" . htmlspecialchars($row['name']) . "' $selected>" . htmlspecialchars($row['name']) . "</option>";
            }
            ?>
        </select>
            <br>
            <br>
        <!-- Dropdown for selecting the substitute lecturer -->
        <label for="name_id">Substitute Lecturer:</label>
        <select name="name_id" id="name_id">
            <option value="" disabled selected>Select a substitute</option>
            <?php
            // Reset and fetch the lecturers for the second dropdown
            $lec_name_result->data_seek(0); // Reset pointer
            while ($row = $lec_name_result->fetch_assoc()) {
                $selected = (isset($substitute_lec_name) && $row['id'] == $substitute_lec_name) ? 'selected' : '';
                echo "<option value='" . $row['id'] . "' $selected>" . htmlspecialchars($row['name']) . "</option>";
            }
            ?>
        </select>

        <br>
        <br>
        <input type="submit" value="Update Excess Load">
    </form>
</body>
</html>
