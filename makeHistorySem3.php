<?php
session_start();
include "connmidsem.php"; // Ensure this file has proper database connection logic

// Set initial table name if not already set
if (!isset($_SESSION['currentTable'])) {
    $_SESSION['currentTable'] = "data2024";
}

// Get the current table name from the session
$currentTable = $_SESSION['currentTable'];

// Extract numeric suffix from current table name
if (preg_match('/\d+$/', $currentTable, $matches)) {
    $newYear = intval($matches[0]) + 1; // Increment the year
    $newTable = "data" . $newYear;

    // Check if the new table already exists
    $checkTableQuery = "SHOW TABLES LIKE '$newTable'";
    $tableExists = $conn->query($checkTableQuery)->num_rows > 0;

    if (!$tableExists) {
        // Create new table structure based on `lecturers`
        $createTableQuery = "CREATE TABLE $newTable LIKE lecturers";
        if ($conn->query($createTableQuery)) {
            echo "Table '$newTable' created successfully.<br>";

            // Copy data from `lecturers` and `excess_load` into the new table
            $copyDataQueries = [
                "INSERT INTO $newTable SELECT * FROM lecturers",
                "INSERT INTO $newTable SELECT * FROM excess_load"
            ];
            foreach ($copyDataQueries as $query) {
                if ($conn->query($query)) {
                    echo "Data copied successfully into '$newTable'.<br>";
                } else {
                    echo "Error copying data: " . $conn->error . "<br>";
                }
            }

            // Clear contents of `lecturers` and `excess_load`
            $deleteQueries = [
                "DELETE FROM lecturers",
                "DELETE FROM excess_load"
            ];
            foreach ($deleteQueries as $query) {
                if ($conn->query($query)) {
                    echo "Table cleared successfully.<br>";
                } else {
                    echo "Error clearing table: " . $conn->error . "<br>";
                }
            }

            // Reset `checker_*` fields for multiple tables
            $tablesToReset = ["abb101", "abb103", "cecs501", "cecs502", "cecs503", "eldc2", "heb502", "hec302", "ldc304", "ldc305", "phylab"];
            $resetQuery = "UPDATE %s SET checker_mon = 0, checker_tue = 0, checker_wed = 0, checker_thu = 0, checker_fri = 0, checker_sat = 0, checker_sun = 0";
            foreach ($tablesToReset as $table) {
                $query = sprintf($resetQuery, $table);
                if ($conn->query($query)) {
                    echo "Reset `checker_*` fields for table '$table'.<br>";
                } else {
                    echo "Error resetting table '$table': " . $conn->error . "<br>";
                }
            }
        } else {
            echo "Error creating table '$newTable': " . $conn->error . "<br>";
        }
    } else {
        echo "Table '$newTable' already exists.<br>";
    }

    // Update session with the new table name
    $_SESSION['currentTable'] = $newTable;
} else {
    echo "Error extracting numeric suffix from '$currentTable'.<br>";
}

// Close the connection
$conn->close();

// Redirect back to `menu_first_sem.php`
header("Location: menu_third_sem.html");
exit;
?>