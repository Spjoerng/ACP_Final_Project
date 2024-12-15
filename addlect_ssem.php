<?php
session_start();
include "connsecondsem.php";

// Fetch positions from the database
$lec_sql_position = "SELECT id, position FROM position";
$lec_position_result = $conn->query($lec_sql_position);

$lec_sql_designation = "SELECT id, desig FROM designation";
$lec_designation_result = $conn->query($lec_sql_designation);

// Retrieve selected position ID if the form is submitted
$selected_pos_id = isset($_POST['position_id']) ? $_POST['position_id'] : null;
$selected_desig_id = isset($_POST['designation_id']) ? $_POST['designation_id'] : null;

// Dropdown function for displaying positions
function positionDropdown($lec_position_result, $selected_pos_id) {
    echo '<div class="position">';
    echo '<label for="position_id">Position:</label>';
    echo '<select class="dropdown_pos" name="position_id" id="position_id">';
    
    if ($lec_position_result->num_rows > 0) {
        while ($row = $lec_position_result->fetch_assoc()) {
            $selected = ($row['id'] == $selected_pos_id) ? 'selected' : '';
            echo "<option value='" . $row['id'] . "' $selected>" . $row['position'] . "</option>";
        }
    } else {
        echo "<option>No Positions found</option>";
    }
    
    echo '</select>';
    echo '</div>';
}

function designationDropdown($lec_designation_result, $selected_desig_id) {
    echo '<div class="designation">';
    echo '<label for="designation_id">Designation:</label>';
    echo '<select class="dropdown_desig" name="designation_id" id="designation_id">';
    
    if ($lec_designation_result->num_rows > 0) {
        while ($row = $lec_designation_result->fetch_assoc()) {
            $selected = ($row['id'] == $selected_desig_id) ? 'selected' : '';
            echo "<option value='" . $row['id'] . "' $selected>" . $row['desig'] . "</option>";
        }
    } else {
        echo "<option>No Designations found</option>";
    }
    
    echo '</select>';
    echo '</div>';
}

// Process form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $lecturerName = strtoupper(trim($_POST['lecturer_name']));
    $positionId = $_POST['position_id'];
    $designationID = $_POST['designation_id'];

    // Constraint: check if position_id is 1
    if ($positionId == 1 OR $designationID == 1) {
        echo "Please choose an appropriate position!";
    } else {
        // Check if lecturer name already exists
        $check_sql = "SELECT * FROM names WHERE name = ?";
        $stmt_check = $conn->prepare($check_sql);
        $stmt_check->bind_param("s", $lecturerName);
        $stmt_check->execute();
        $result = $stmt_check->get_result();

        if ($result->num_rows > 0) {
            echo "Error: Lecturer with this name already exists.";
        } else {
            // Check format for "LASTNAME, FIRSTNAME MI."
            if (preg_match("/^[A-Z]+, [A-Z]+ [A-Z]\.$/", $lecturerName)) {
                // Insert lecturer into the database
                $stmt_insert = $conn->prepare("INSERT INTO names (name, position_id, designation_id) VALUES (?, ?, ?)");
                $stmt_insert->bind_param("sii", $lecturerName, $positionId, $designationID);
                
                if ($stmt_insert->execute()) {
                    echo "Lecturer added successfully!";
                } else {
                    echo "Error: " . $stmt_insert->error;
                }

                $stmt_insert->close();
            } else {
                echo "Please follow the format: LASTNAME, FIRSTNAME MI.";
            }
        }
        $stmt_check->close();
    }
}

// Close connection
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Lecturer</title>
    <link rel="stylesheet" href="style.css">
    <style>
        /* Force uppercase input */
        #lecturer_name {
            text-transform: uppercase;
        }
    </style>
</head>
<body>
    <h2>Add Lecturer</h2>
    <form action="" method="post">
        <label for="example">Follow this format: LASTNAME, FIRSTNAME MI.</label><br>
        <label for="lecturer_name">Lecturer Name:</label>
        <input type="text" id="lecturer_name" name="lecturer_name" required><br><br>
        
        <?php
        positionDropdown($lec_position_result, $selected_pos_id);
        echo "<br>";

        designationDropdown($lec_designation_result, $selected_desig_id);
        echo "<br>";
        ?>
        
        <button type="submit">Add Lecturer</button>
    </form>

    <a href = "menu_second_sem.html">
    <img src="back_logo.png" style="width: 30px; height: 30px;"></a>
        
    <a href="menu_second_sem.html">Back</a>


</body>
</html>
