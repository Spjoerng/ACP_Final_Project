<?php
session_start();
include "connfirstsem.php";

// Process form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $lecturerName = strtoupper(trim($_POST['lecturer_name']));

    // Check if lecturer name already exists
    $check_sql = "SELECT * FROM names WHERE name = ?";
    $stmt_check = $conn->prepare($check_sql);
    $stmt_check->bind_param("s", $lecturerName);
    $stmt_check->execute();
    $result = $stmt_check->get_result();

    if ($result->num_rows > 0) {
        if (preg_match("/^[A-Z]+, [A-Z]+ [A-Z]\.$/", $lecturerName)) {
            $stmt_insert = $conn->prepare("DELETE FROM names WHERE name = ? ");
            $stmt_insert->bind_param("s", $lecturerName);
            
            if ($stmt_insert->execute()) {
                echo "Lecturer removed successfully!";
            } else {
                echo "Error: " . $stmt_insert->error;
            }
            
            $stmt_insert->close();
        } else {
            echo "Please follow the format: LASTNAME, FIRSTNAME MI.";
        }
    } else {
        echo "Error: Lecturer not found";
    }

    $stmt_check->close();
}

// Fetch all names to display after submission
$showlect_sql = "SELECT name FROM names WHERE id != 1 ORDER BY name ASC";
$showlect_result = $conn->query($showlect_sql);

// Close connection
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Remove Lecturer</title>
    <link rel="stylesheet" href="style.css">
    <style>
        /* Force uppercase input */
        #lecturer_name {
            text-transform: uppercase;
        }
    </style>
</head>
<body>
    <h2>Remove Lecturer</h2>
    <form action="" method="post">
        <label for="example">Follow this format: LASTNAME, FIRSTNAME MI.</label><br>
        <label for="lecturer_name">Lecturer Name:</label>
        <input type="text" id="lecturer_name" name="lecturer_name" required><br><br>
        <button type="submit">Remove Lecturer</button>
    </form>


    <h3>All Lecturers</h3>
    <ul>
        <?php
        if ($showlect_result->num_rows > 0) {
            while ($row = $showlect_result->fetch_assoc()) {
                echo "<li>" . htmlspecialchars($row['name']) . "</li>";
            }
        } else {
            echo "<li>No lecturers found.</li>";
        }
        ?>
    </ul>

    <a href = "menu_first_sem.html">
    <img src="back_logo.png" style="width: 30px; height: 30px;"></a>
  
    <a href="menu_first_sem.html">Back</a>










</body>
</html>
