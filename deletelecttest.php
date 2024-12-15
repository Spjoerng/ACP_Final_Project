<?php
session_start();
include "connfirstsem.php";

$tablesToReset = ["cecs501", "cecs502", "cecs503", "abb101", "abb103", "eldc2", "heb502", "hec302", "ldc304", "ldc305", "phylab"];
$selected_lec_name = isset($_POST['name_id']) ? $_POST['name_id'] : null;

// Fetch all lecturers for the dropdown
$lec_sql_name = "SELECT id, name FROM names ORDER BY name ASC";
$lec_name_result = $conn->query($lec_sql_name);


function lecturerDropdown($lec_name_result, $selected_lec_name) {
    
    echo '<div class="lecturer">';
    echo '<label for="name_id">Lecturer:</label>';
    echo '<select class="dropdown_lec" name="name_id" id="name_id">';
    
    echo '<div class = "dropdown_lec">';
    if ($lec_name_result->num_rows > 0) {
        while ($row = $lec_name_result->fetch_assoc()) {
            $selected = ($row['id'] == $selected_lec_name) ? 'selected' : '';
            echo "<option value='" . $row['id'] . "' $selected>" . $row['name'] . "</option>";
        }
    } else {
        echo "<option>No Lecturers found</option>";
    }
    
    echo '</select>';
    echo '</div>';
};


// UPDATE CHECKERS
//CECS 501
$c501monChecker1 = "UPDATE cecs501 SET checker_mon = 0 WHERE id = ?";
$c501monChecker2 = "UPDATE cecs501 SET checker_mon = 0 WHERE id BETWEEN ? AND ?";
$c501monChecker3 = "UPDATE cecs501 SET checker_mon = 0 WHERE id = ?";

$c501tueChecker1 = "UPDATE cecs501 SET checker_tue = 0 WHERE id = ?";
$c501tueChecker2 = "UPDATE cecs501 SET checker_tue = 0 WHERE id BETWEEN ? AND ?";
$c501tueChecker3 = "UPDATE cecs501 SET checker_tue = 0 WHERE id = ?";

$c501wedChecker1 = "UPDATE cecs501 SET checker_wed = 0 WHERE id = ?";
$c501wedChecker2 = "UPDATE cecs501 SET checker_wed = 0 WHERE id BETWEEN ? AND ?";
$c501wedChecker3 = "UPDATE cecs501 SET checker_wed = 0 WHERE id = ?";

$c501thuChecker1 = "UPDATE cecs501 SET checker_thu = 0 WHERE id = ?";
$c501thuChecker2 = "UPDATE cecs501 SET checker_thu = 0 WHERE id BETWEEN ? AND ?";
$c501thuChecker3 = "UPDATE cecs501 SET checker_thu = 0 WHERE id = ?";

$c501friChecker1 = "UPDATE cecs501 SET checker_fri = 0 WHERE id = ?";
$c501friChecker2 = "UPDATE cecs501 SET checker_fri = 0 WHERE id BETWEEN ? AND ?";
$c501friChecker3 = "UPDATE cecs501 SET checker_fri = 0 WHERE id = ?";

$c501satChecker1 = "UPDATE cecs501 SET checker_sat = 0 WHERE id = ?";
$c501satChecker2 = "UPDATE cecs501 SET checker_sat = 0 WHERE id BETWEEN ? AND ?";
$c501satChecker3 = "UPDATE cecs501 SET checker_sat = 0 WHERE id = ?";

$c501sunChecker1 = "UPDATE cecs501 SET checker_sun = 0 WHERE id = ?";
$c501sunChecker2 = "UPDATE cecs501 SET checker_sun = 0 WHERE id BETWEEN ? AND ?";
$c501sunChecker3 = "UPDATE cecs501 SET checker_sun = 0 WHERE id = ?";

//CECS 502
$c502monChecker1 = "UPDATE cecs502 SET checker_mon = 0 WHERE id = ?";
$c502monChecker2 = "UPDATE cecs502 SET checker_mon = 0 WHERE id BETWEEN ? AND ?";
$c502monChecker3 = "UPDATE cecs502 SET checker_mon = 0 WHERE id = ?";

$c502tueChecker1 = "UPDATE cecs502 SET checker_tue = 0 WHERE id = ?";
$c502tueChecker2 = "UPDATE cecs502 SET checker_tue = 0 WHERE id BETWEEN ? AND ?";
$c502tueChecker3 = "UPDATE cecs502 SET checker_tue = 0 WHERE id = ?";

$c502wedChecker1 = "UPDATE cecs502 SET checker_wed = 0 WHERE id = ?";
$c502wedChecker2 = "UPDATE cecs502 SET checker_wed = 0 WHERE id BETWEEN ? AND ?";
$c502wedChecker3 = "UPDATE cecs502 SET checker_wed = 0 WHERE id = ?";

$c502friChecker1 = "UPDATE cecs502 SET checker_thu = 0 WHERE id = ?";
$c502friChecker2 = "UPDATE cecs502 SET checker_thu = 0 WHERE id BETWEEN ? AND ?";
$c502friChecker3 = "UPDATE cecs502 SET checker_thu = 0 WHERE id = ?";

$c502thuChecker1 = "UPDATE cecs502 SET checker_fri = 0 WHERE id = ?";
$c502thuChecker2 = "UPDATE cecs502 SET checker_fri = 0 WHERE id BETWEEN ? AND ?";
$c502thuChecker3 = "UPDATE cecs502 SET checker_fri = 0 WHERE id = ?";

$c502satChecker1 = "UPDATE cecs502 SET checker_sat = 0 WHERE id = ?";
$c502satChecker2 = "UPDATE cecs502 SET checker_sat = 0 WHERE id BETWEEN ? AND ?";
$c502satChecker3 = "UPDATE cecs502 SET checker_sat = 0 WHERE id = ?";

$c502sunChecker1 = "UPDATE cecs502 SET checker_sun = 0 WHERE id = ?";
$c502sunChecker2 = "UPDATE cecs502 SET checker_sun = 0 WHERE id BETWEEN ? AND ?";
$c502sunChecker3 = "UPDATE cecs502 SET checker_sun = 0 WHERE id = ?";

//CECS 503
$c503monChecker1 = "UPDATE cecs503 SET checker_mon = 0 WHERE id = ?";
$c503monChecker2 = "UPDATE cecs503 SET checker_mon = 0 WHERE id BETWEEN ? AND ?";
$c503monChecker3 = "UPDATE cecs503 SET checker_mon = 0 WHERE id = ?";

$c503tueChecker1 = "UPDATE cecs503 SET checker_tue = 0 WHERE id = ?";
$c503tueChecker2 = "UPDATE cecs503 SET checker_tue = 0 WHERE id BETWEEN ? AND ?";
$c503tueChecker3 = "UPDATE cecs503 SET checker_tue = 0 WHERE id = ?";

$c503wedChecker1 = "UPDATE cecs503 SET checker_wed = 0 WHERE id = ?";
$c503wedChecker2 = "UPDATE cecs503 SET checker_wed = 0 WHERE id BETWEEN ? AND ?";
$c503wedChecker3 = "UPDATE cecs503 SET checker_wed = 0 WHERE id = ?";

$c503friChecker1 = "UPDATE cecs503 SET checker_thu = 0 WHERE id = ?";
$c503friChecker2 = "UPDATE cecs503 SET checker_thu = 0 WHERE id BETWEEN ? AND ?";
$c503friChecker3 = "UPDATE cecs503 SET checker_thu = 0 WHERE id = ?";

$c503thuChecker1 = "UPDATE cecs503 SET checker_fri = 0 WHERE id = ?";
$c503thuChecker2 = "UPDATE cecs503 SET checker_fri = 0 WHERE id BETWEEN ? AND ?";
$c503thuChecker3 = "UPDATE cecs503 SET checker_fri = 0 WHERE id = ?";

$c503satChecker1 = "UPDATE cecs503 SET checker_sat = 0 WHERE id = ?";
$c503satChecker2 = "UPDATE cecs503 SET checker_sat = 0 WHERE id BETWEEN ? AND ?";
$c503satChecker3 = "UPDATE cecs503 SET checker_sat = 0 WHERE id = ?";

$c503sunChecker1 = "UPDATE cecs503 SET checker_sun = 0 WHERE id = ?";
$c503sunChecker2 = "UPDATE cecs503 SET checker_sun = 0 WHERE id BETWEEN ? AND ?";
$c503sunChecker3 = "UPDATE cecs503 SET checker_sun = 0 WHERE id = ?";

//HEB 502
$h502monChecker1 = "UPDATE heb502 SET checker_mon = 0 WHERE id = ?";
$h502monChecker2 = "UPDATE heb502 SET checker_mon = 0 WHERE id BETWEEN ? AND ?";
$h502monChecker3 = "UPDATE heb502 SET checker_mon = 0 WHERE id = ?";

$h502tueChecker1 = "UPDATE heb502 SET checker_tue = 0 WHERE id = ?";
$h502tueChecker2 = "UPDATE heb502 SET checker_tue = 0 WHERE id BETWEEN ? AND ?";
$h502tueChecker3 = "UPDATE heb502 SET checker_tue = 0 WHERE id = ?";

$h502wedChecker1 = "UPDATE heb502 SET checker_wed = 0 WHERE id = ?";
$h502wedChecker2 = "UPDATE heb502 SET checker_wed = 0 WHERE id BETWEEN ? AND ?";
$h502wedChecker3 = "UPDATE heb502 SET checker_wed = 0 WHERE id = ?";

$h502thuChecker1 = "UPDATE heb502 SET checker_thu = 0 WHERE id = ?";
$h502thuChecker2 = "UPDATE heb502 SET checker_thu = 0 WHERE id BETWEEN ? AND ?";
$h502thuChecker3 = "UPDATE heb502 SET checker_thu = 0 WHERE id = ?";

$h502friChecker1 = "UPDATE heb502 SET checker_fri = 0 WHERE id = ?";
$h502friChecker2 = "UPDATE heb502 SET checker_fri = 0 WHERE id BETWEEN ? AND ?";
$h502friChecker3 = "UPDATE heb502 SET checker_fri = 0 WHERE id = ?";

$h502satChecker1 = "UPDATE heb502 SET checker_sat = 0 WHERE id = ?";
$h502satChecker2 = "UPDATE heb502 SET checker_sat = 0 WHERE id BETWEEN ? AND ?";
$h502satChecker3 = "UPDATE heb502 SET checker_sat = 0 WHERE id = ?";

$h502sunChecker1 = "UPDATE heb502 SET checker_sun = 0 WHERE id= ?";
$h502sunChecker2 = "UPDATE heb502 SET checker_sun = 0 WHERE id BETWEEN ? AND ?";
$h502sunChecker3 = "UPDATE heb502 SET checker_sun = 0 WHERE id = ?";

//ABB 101
$a101monChecker1 = "UPDATE abb101 SET checker_mon = 0 WHERE id = ?";
$a101monChecker2 = "UPDATE abb101 SET checker_mon = 0 WHERE id BETWEEN ? AND ?";
$a101monChecker3 = "UPDATE abb101 SET checker_mon = 0 WHERE id = ?";

$a101tueChecker1 = "UPDATE abb101 SET checker_tue = 0 WHERE id = ?";
$a101tueChecker2 = "UPDATE abb101 SET checker_tue = 0 WHERE id BETWEEN ? AND ?";
$a101tueChecker3 = "UPDATE abb101 SET checker_tue = 0 WHERE id = ?";

$a101wedChecker1 = "UPDATE abb101 SET checker_wed = 0 WHERE id = ?";
$a101wedChecker2 = "UPDATE abb101 SET checker_wed = 0 WHERE id BETWEEN ? AND ?";
$a101wedChecker3 = "UPDATE abb101 SET checker_wed = 0 WHERE id = ?";

$a101thuChecker1 = "UPDATE abb101 SET checker_thu = 0 WHERE id = ?";
$a101thuChecker2 = "UPDATE abb101 SET checker_thu = 0 WHERE id BETWEEN ? AND ?";
$a101thuChecker3 = "UPDATE abb101 SET checker_thu = 0 WHERE id = ?";

$a101friChecker1 = "UPDATE abb101 SET checker_fri = 0 WHERE id = ?";
$a101friChecker2 = "UPDATE abb101 SET checker_fri = 0 WHERE id BETWEEN ? AND ?";
$a101friChecker3 = "UPDATE abb101 SET checker_fri = 0 WHERE id = ?";

$a101satChecker1 = "UPDATE abb101 SET checker_sat = 0 WHERE id = ?";
$a101satChecker2 = "UPDATE abb101 SET checker_sat = 0 WHERE id BETWEEN ? AND ?";
$a101satChecker3 = "UPDATE abb101 SET checker_sat = 0 WHERE id = ?";

$a101sunChecker1 = "UPDATE abb101 SET checker_sun = 0 WHERE id = ?";
$a101sunChecker2 = "UPDATE abb101 SET checker_sun = 0 WHERE id BETWEEN ? AND ?";
$a101sunChecker3 = "UPDATE abb101 SET checker_sun = 0 WHERE id = ?";

//ABB 103
$a103monChecker1 = "UPDATE abb103 SET checker_mon = 0 WHERE id = ?";
$a103monChecker2 = "UPDATE abb103 SET checker_mon = 0 WHERE id BETWEEN ? AND ?";
$a103monChecker3 = "UPDATE abb103 SET checker_mon = 0 WHERE id = ?";

$a103tueChecker1 = "UPDATE abb103 SET checker_tue = 0 WHERE id = ?";
$a103tueChecker2 = "UPDATE abb103 SET checker_tue = 0 WHERE id BETWEEN ? AND ?";
$a103tueChecker3 = "UPDATE abb103 SET checker_tue = 0 WHERE id = ?";

$a103wedChecker1 = "UPDATE abb103 SET checker_wed = 0 WHERE id = ?";
$a103wedChecker2 = "UPDATE abb103 SET checker_wed = 0 WHERE id BETWEEN ? AND ?";
$a103wedChecker3 = "UPDATE abb103 SET checker_wed = 0 WHERE id = ?";

$a103thuChecker1 = "UPDATE abb103 SET checker_thu = 0 WHERE id = ?";
$a103thuChecker2 = "UPDATE abb103 SET checker_thu = 0 WHERE id BETWEEN ? AND ?";
$a103thuChecker3 = "UPDATE abb103 SET checker_thu = 0 WHERE id = ?";

$a103friChecker1 = "UPDATE abb103 SET checker_fri = 0 WHERE id = ?";
$a103friChecker2 = "UPDATE abb103 SET checker_fri = 0 WHERE id BETWEEN ? AND ?";
$a103friChecker3 = "UPDATE abb103 SET checker_fri = 0 WHERE id = ?";

$a103satChecker1 = "UPDATE abb103 SET checker_sat = 0 WHERE id = ?";
$a103satChecker2 = "UPDATE abb103 SET checker_sat = 0 WHERE id BETWEEN ? AND ?";
$a103satChecker3 = "UPDATE abb103 SET checker_sat = 0 WHERE id = ?";

$a103sunChecker1 = "UPDATE abb103 SET checker_sun = 0 WHERE id = ?";
$a103sunChecker2 = "UPDATE abb103 SET checker_sun = 0 WHERE id BETWEEN ? AND ?";
$a103sunChecker3 = "UPDATE abb103 SET checker_sun = 0 WHERE id = ?";

//LDC 304
$l304monChecker1 = "UPDATE ldc304 SET checker_mon = 0 WHERE id = ?";
$l304monChecker2 = "UPDATE ldc304 SET checker_mon = 0 WHERE id BETWEEN ? AND ?";
$l304monChecker3 = "UPDATE ldc304 SET checker_mon = 0 WHERE id = ?";

$l304tueChecker1 = "UPDATE ldc304 SET checker_tue = 0 WHERE id = ?";
$l304tueChecker2 = "UPDATE ldc304 SET checker_tue = 0 WHERE id BETWEEN ? AND ?";
$l304tueChecker3 = "UPDATE ldc304 SET checker_tue = 0 WHERE id = ?";

$l304wedChecker1 = "UPDATE ldc304 SET checker_wed = 0 WHERE id = ?";
$l304wedChecker2 = "UPDATE ldc304 SET checker_wed = 0 WHERE id BETWEEN ? AND ?";
$l304wedChecker3 = "UPDATE ldc304 SET checker_wed = 0 WHERE id = ?";

$l304thuChecker1 = "UPDATE ldc304 SET checker_thu = 0 WHERE id = ?";
$l304thuChecker2 = "UPDATE ldc304 SET checker_thu = 0 WHERE id BETWEEN ? AND ?";
$l304thuChecker3 = "UPDATE ldc304 SET checker_thu = 0 WHERE id = ?";

$l304friChecker1 = "UPDATE ldc304 SET checker_fri = 0 WHERE id = ?";
$l304friChecker2 = "UPDATE ldc304 SET checker_fri = 0 WHERE id BETWEEN ? AND ?";
$l304friChecker3 = "UPDATE ldc304 SET checker_fri = 0 WHERE id = ?";

$l304satChecker1 = "UPDATE ldc304 SET checker_sat = 0 WHERE id = ?";
$l304satChecker2 = "UPDATE ldc304 SET checker_sat = 0 WHERE id BETWEEN ? AND ?";
$l304satChecker3 = "UPDATE ldc304 SET checker_sat = 0 WHERE id = ?";

$l304sunChecker1 = "UPDATE ldc304 SET checker_sun = 0 WHERE id = ?";
$l304sunChecker2 = "UPDATE ldc304 SET checker_sun = 0 WHERE id BETWEEN ? AND ?";
$l304sunChecker3 = "UPDATE ldc304 SET checker_sun = 0 WHERE id = ?";


//LDC 305
$l305monChecker1 = "UPDATE ldc305 SET checker_mon = 0 WHERE id = ?";
$l305monChecker2 = "UPDATE ldc305 SET checker_mon = 0 WHERE id BETWEEN ? AND ?";
$l305monChecker3 = "UPDATE ldc305 SET checker_mon = 0 WHERE id = ?";

$l305tueChecker1 = "UPDATE ldc305 SET checker_tue = 0 WHERE id = ?";
$l305tueChecker2 = "UPDATE ldc305 SET checker_tue = 0 WHERE id BETWEEN ? AND ?";
$l305tueChecker3 = "UPDATE ldc305 SET checker_tue = 0 WHERE id = ?";

$l305wedChecker1 = "UPDATE ldc305 SET checker_wed = 0 WHERE id = ?";
$l305wedChecker2 = "UPDATE ldc305 SET checker_wed = 0 WHERE id BETWEEN ? AND ?";
$l305wedChecker3 = "UPDATE ldc305 SET checker_wed = 0 WHERE id = ?";

$l305thuChecker1 = "UPDATE ldc305 SET checker_thu = 0 WHERE id = ?";
$l305thuChecker2 = "UPDATE ldc305 SET checker_thu = 0 WHERE id BETWEEN ? AND ?";
$l305thuChecker3 = "UPDATE ldc305 SET checker_thu = 0 WHERE id = ?";

$l305friChecker1 = "UPDATE ldc305 SET checker_fri = 0 WHERE id = ?";
$l305friChecker2 = "UPDATE ldc305 SET checker_fri = 0 WHERE id BETWEEN ? AND ?";
$l305friChecker3 = "UPDATE ldc305 SET checker_fri = 0 WHERE id = ?";

$l305satChecker1 = "UPDATE ldc305 SET checker_sat = 0 WHERE id = ?";
$l305satChecker2 = "UPDATE ldc305 SET checker_sat = 0 WHERE id BETWEEN ? AND ?";
$l305satChecker3 = "UPDATE ldc305 SET checker_sat = 0 WHERE id = ?";

$l305sunChecker1 = "UPDATE ldc305 SET checker_sun = 0 WHERE id = ?";
$l305sunChecker2 = "UPDATE ldc305 SET checker_sun = 0 WHERE id BETWEEN ? AND ?";
$l305sunChecker3 = "UPDATE ldc305 SET checker_sun = 0 WHERE id = ?";



//ELDC 2
$eldc2monChecker1 = "UPDATE eldc2 SET checker_mon = 0 WHERE id = ?";
$eldc2monChecker2 = "UPDATE eldc2 SET checker_mon = 0 WHERE id BETWEEN ? AND ?";
$eldc2monChecker3 = "UPDATE eldc2 SET checker_mon = 0 WHERE id = ?";

$eldc2tueChecker1 = "UPDATE eldc2 SET checker_tue = 0 WHERE id = ?";
$eldc2tueChecker2 = "UPDATE eldc2 SET checker_tue = 0 WHERE id BETWEEN ? AND ?";
$eldc2tueChecker3 = "UPDATE eldc2 SET checker_tue = 0 WHERE id = ?";

$eldc2wedChecker1 = "UPDATE eldc2 SET checker_wed = 0 WHERE id = ?";
$eldc2wedChecker2 = "UPDATE eldc2 SET checker_wed = 0 WHERE id BETWEEN ? AND ?";
$eldc2wedChecker3 = "UPDATE eldc2 SET checker_wed = 0 WHERE id = ?";

$eldc2thuChecker1 = "UPDATE eldc2 SET checker_thu = 0 WHERE id = ?";
$eldc2thuChecker2 = "UPDATE eldc2 SET checker_thu = 0 WHERE id BETWEEN ? AND ?";
$eldc2thuChecker3 = "UPDATE eldc2 SET checker_thu = 0 WHERE id = ?";

$eldc2friChecker1 = "UPDATE eldc2 SET checker_fri = 0 WHERE id = ?";
$eldc2friChecker2 = "UPDATE eldc2 SET checker_fri = 0 WHERE id BETWEEN ? AND ?";
$eldc2friChecker3 = "UPDATE eldc2 SET checker_fri = 0 WHERE id = ?";

$eldc2satChecker1 = "UPDATE eldc2 SET checker_sat = 0 WHERE id = ?";
$eldc2satChecker2 = "UPDATE eldc2 SET checker_sat = 0 WHERE id BETWEEN ? AND ?";
$eldc2satChecker3 = "UPDATE eldc2 SET checker_sat = 0 WHERE id = ?";

$eldc2sunChecker1 = "UPDATE eldc2 SET checker_sun = 0 WHERE id = ?";
$eldc2sunChecker2 = "UPDATE eldc2 SET checker_sun = 0 WHERE id BETWEEN ? AND ?";
$eldc2sunChecker3 = "UPDATE eldc2 SET checker_sun = 0 WHERE id = ?";


//HEC 302   
$h302monChecker1 = "UPDATE hec302 SET checker_mon = 0 WHERE id = ?";
$h302monChecker2 = "UPDATE hec302 SET checker_mon = 0 WHERE id BETWEEN ? AND ?";
$h302monChecker3 = "UPDATE hec302 SET checker_mon = 0 WHERE id = ?";

$h302tueChecker1 = "UPDATE hec302 SET checker_tue = 0 WHERE id = ?";
$h302tueChecker2 = "UPDATE hec302 SET checker_tue = 0 WHERE id BETWEEN ? AND ?";
$h302tueChecker3 = "UPDATE hec302 SET checker_tue = 0 WHERE id = ?";

$h302wedChecker1 = "UPDATE hec302 SET checker_wed = 0 WHERE id = ?";
$h302wedChecker2 = "UPDATE hec302 SET checker_wed = 0 WHERE id BETWEEN ? AND ?";
$h302wedChecker3 = "UPDATE hec302 SET checker_wed = 0 WHERE id = ?";

$h302thuChecker1 = "UPDATE hec302 SET checker_thu = 0 WHERE id = ?";
$h302thuChecker2 = "UPDATE hec302 SET checker_thu = 0 WHERE id BETWEEN ? AND ?";
$h302thuChecker3 = "UPDATE hec302 SET checker_thu = 0 WHERE id = ?";

$h302friChecker1 = "UPDATE hec302 SET checker_fri = 0 WHERE id = ?";
$h302friChecker2 = "UPDATE hec302 SET checker_fri = 0 WHERE id BETWEEN ? AND ?";
$h302friChecker3 = "UPDATE hec302 SET checker_fri = 0 WHERE id = ?";

$h302satChecker1 = "UPDATE hec302 SET checker_sat = 0 WHERE id = ?";
$h302satChecker2 = "UPDATE hec302 SET checker_sat = 0 WHERE id BETWEEN ? AND ?";
$h302satChecker3 = "UPDATE hec302 SET checker_sat = 0 WHERE id = ?";

$h302sunChecker1 = "UPDATE hec302 SET checker_sun = 0 WHERE id = ?";
$h302sunChecker2 = "UPDATE hec302 SET checker_sun = 0 WHERE id BETWEEN ? AND ?";
$h302sunChecker3 = "UPDATE hec302 SET checker_sun = 0 WHERE id = ?";


// PHYSICS LAB
$phymonChecker1 = "UPDATE phylab SET checker_mon = 0 WHERE id = ?";
$phymonChecker2 = "UPDATE phylab SET checker_mon = 0 WHERE id BETWEEN ? AND ?";
$phymonChecker3 = "UPDATE phylab SET checker_mon = 0 WHERE id = ?";

$phytueChecker1 = "UPDATE phylab SET checker_tue = 0 WHERE id = ?";
$phytueChecker2 = "UPDATE phylab SET checker_tue = 0 WHERE id BETWEEN ? AND ?";
$phytueChecker3 = "UPDATE phylab SET checker_tue = 0 WHERE id = ?";

$phywedChecker1 = "UPDATE phylab SET checker_wed = 0 WHERE id = ?";
$phywedChecker2 = "UPDATE phylab SET checker_wed = 0 WHERE id BETWEEN ? AND ?";
$phywedChecker3 = "UPDATE phylab SET checker_wed = 0 WHERE id = ?";

$phythuChecker1 = "UPDATE phylab SET checker_thu = 0 WHERE id = ?";
$phythuChecker2 = "UPDATE phylab SET checker_thu = 0 WHERE id BETWEEN ? AND ?";
$phythuChecker3 = "UPDATE phylab SET checker_thu = 0 WHERE id = ?";

$phyfriChecker1 = "UPDATE phylab SET checker_fri = 0 WHERE id = ?";
$phyfriChecker2 = "UPDATE phylab SET checker_fri = 0 WHERE id BETWEEN ? AND ?";
$phyfriChecker3 = "UPDATE phylab SET checker_fri = 0 WHERE id = ?";

$physatChecker1 = "UPDATE phylab SET checker_sat = 0 WHERE id = ?";
$physatChecker2 = "UPDATE phylab SET checker_sat = 0 WHERE id BETWEEN ? AND ?";
$physatChecker3 = "UPDATE phylab SET checker_sat = 0 WHERE id = ?";

$physunChecker1 = "UPDATE phylab SET checker_sun = 0 WHERE id = ?";
$physunChecker2 = "UPDATE phylab SET checker_sun = 0 WHERE id BETWEEN ? AND ?";
$physunChecker3 = "UPDATE phylab SET checker_sun = 0 WHERE id = ?";


function selectTime($conn, $selected_sTime_id, $selected_eTime_id, $firstchecker, $secondchecker, $thirdchecker) {
    $update_checker1_sql = $firstchecker;
    $update_checker1_stmt = $conn->prepare($update_checker1_sql);

    if (!$update_checker1_stmt) {
        echo "<div class='error_message'>Error preparing statement: " . htmlspecialchars($conn->error) . "</div>";
    } else {
        // Bind parameters and execute the update query
        $update_checker1_stmt->bind_param("i", $selected_sTime_id);

        if ($update_checker1_stmt->execute()) {
            echo "<div class='success_message'><p>Schedule Found! Proceed to Modification!</p></div>";
        } else {
            echo "<div class='error_message'>Error executing update query: " . htmlspecialchars($update_checker1_stmt->error) . "</div>";
        }

        //Third Update
        $update_checker3_sql = $thirdchecker;
        $update_checker3_stmt = $conn->prepare($update_checker3_sql);
    
        if (!$update_checker3_stmt) {
            echo "<div class='error_message'>Error preparing statement: " . htmlspecialchars($conn->error) . "</div>";
        } else {
            // Bind parameters and execute the update query
            $update_checker3_stmt->bind_param("i", $selected_eTime_id);
    
            if ($update_checker3_stmt->execute()) {
                echo "<div class='success_message'><p>Schedule Found! Proceed to Modification!</p></div>";
            } else {
                echo "<div class='error_message'>Error executing update query: " . htmlspecialchars($update_checker3_stmt->error) . "</div>";
            }
        }
        

        // Second update
        $update_checker_second_sql = $secondchecker;
        $update_checker_second_stmt = $conn->prepare($update_checker_second_sql);

        if (!$update_checker_second_stmt) {
            echo "<div class='error_message'>Error preparing second statement: " . htmlspecialchars($conn->error) . "</div>";
        } else {
            $update_checker_second_stmt->bind_param("ii",$selected_sTime_id, $selected_eTime_id);
            
            if ($update_checker_second_stmt->execute()) {
                echo "<p></p>";
            } else {
                echo "<div class='error_message'>Error executing second update query: " . htmlspecialchars($update_checker_second_stmt->error) . "</div>";
            }
        }
    }
}


// Main function to handle POST request and room/day logic
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($selected_lec_name)) {
    // Fetch the lecturer's schedule and set variables
    $getScheduleQuery = "SELECT room_id, day_id, startTime_id, endTime_id FROM lecturers WHERE name_id = ?";
    $stmt = $conn->prepare($getScheduleQuery);

    if ($stmt === false) {
        die("Error in SQL preparation: " . $conn->error);
    }

    $stmt->bind_param("i", $selected_lec_name);
    $stmt->execute();
    $stmt->bind_result($room_id, $day_id, $startTime_id, $endTime_id);
    
    $records_found = false;
    while ($stmt->fetch()) {
        $records_found = true;

        // Assign fetched values to variables
        $selected_room_id = $room_id;
        $selected_day_id = $day_id;
        $selected_sTime_id = $startTime_id;
        $selected_eTime_id = $endTime_id;

        echo "Room ID: $selected_room_id<br>";
        echo "Day ID: $selected_day_id<br>";
        echo "Start Time ID: $selected_sTime_id<br>";
        echo "End Time ID: $selected_eTime_id<br>";
        echo "<hr>"; // Separator for each record

        // Run the checker logic
        $roomDayCheckerMap = [
            2 => [ // Room CECS 501
                2 => [$c501monChecker1, $c501monChecker2, $c501monChecker3],
                3 => [$c501tueChecker1, $c501tueChecker2, $c501tueChecker3],
                4 => [$c501wedChecker1, $c501wedChecker2, $c501wedChecker3],
                5 => [$c501thuChecker1, $c501thuChecker2, $c501thuChecker3],
                6 => [$c501friChecker1, $c501friChecker2, $c501friChecker3],
                7 => [$c501satChecker1, $c501satChecker2, $c501satChecker3],
                8 => [$c501sunChecker1, $c501sunChecker2, $c501sunChecker3],
            ],
            3 => [ // Room CECS 502
                2 => [$c502monChecker1, $c502monChecker2, $c502monChecker3],
                3 => [$c502tueChecker1, $c502tueChecker2, $c502tueChecker3],
                4 => [$c502wedChecker1, $c502wedChecker2, $c502wedChecker3],
                5 => [$c502thuChecker1, $c502thuChecker2, $c502thuChecker3],
                6 => [$c502friChecker1, $c502friChecker2, $c502friChecker3],
                7 => [$c502satChecker1, $c502satChecker2, $c502satChecker3],
                8 => [$c502sunChecker1, $c502sunChecker2, $c502sunChecker3],
            ],
            4 => [ // Room CECS 503
                2 => [$c503monChecker1, $c503monChecker2, $c503monChecker3],
                3 => [$c503tueChecker1, $c503tueChecker2, $c503tueChecker3],
                4 => [$c503wedChecker1, $c503wedChecker2, $c503wedChecker3],
                5 => [$c503thuChecker1, $c503thuChecker2, $c503thuChecker3],
                6 => [$c503friChecker1, $c503friChecker2, $c503friChecker3],
                7 => [$c503satChecker1, $c503satChecker2, $c503satChecker3],
                8 => [$c503sunChecker1, $c503sunChecker2, $c503sunChecker3],
            ],
            
            5 => [ // Room HEB 502
                2 => [$h502monChecker1, $h502monChecker2, $h502monChecker3],
                3 => [$h502tueChecker1, $h502tueChecker2, $h502tueChecker3],
                4 => [$h502wedChecker1, $h502wedChecker2, $h502wedChecker3],
                5 => [$h502thuChecker1, $h502thuChecker2, $h502thuChecker3],
                6 => [$h502friChecker1, $h502friChecker2, $h502friChecker3],
                7 => [$h502satChecker1, $h502satChecker2, $h502satChecker3],
                8 => [$h502sunChecker1, $h502sunChecker2, $h502sunChecker3],
            ],
            
            6 => [ // Room ABB 101
                2 => [$a101monChecker1, $a101monChecker2, $a101monChecker3],
                3 => [$a101tueChecker1, $a101tueChecker2, $a101tueChecker3],
                4 => [$a101wedChecker1, $a101wedChecker2, $a101wedChecker3],
                5 => [$a101thuChecker1, $a101thuChecker2, $a101thuChecker3],
                6 => [$a101friChecker1, $a101friChecker2, $a101friChecker3],
                7 => [$a101satChecker1, $a101satChecker2, $a101satChecker3],
                8 => [$a101sunChecker1, $a101sunChecker2, $a101sunChecker3],
            ],
            
            7 => [ // Room ABB 103
                2 => [$a103monChecker1, $a103monChecker2, $a103monChecker3],
                3 => [$a103tueChecker1, $a103tueChecker2, $a103tueChecker3],
                4 => [$a103wedChecker1, $a103wedChecker2, $a103wedChecker3],
                5 => [$a103thuChecker1, $a103thuChecker2, $a103thuChecker3],
                6 => [$a103friChecker1, $a103friChecker2, $a103friChecker3],
                7 => [$a103satChecker1, $a103satChecker2, $a103satChecker3],
                8 => [$a103sunChecker1, $a103sunChecker2, $a103sunChecker3],
            ],
            
            8 => [ // Room LDC 304 l304
                2 => [$l304monChecker1, $l304monChecker2, $l304monChecker3],
                3 => [$l304tueChecker1, $l304tueChecker2, $l304tueChecker3],
                4 => [$l304wedChecker1, $l304wedChecker2, $l304wedChecker3],
                5 => [$l304thuChecker1, $l304thuChecker2, $l304thuChecker3],
                6 => [$l304friChecker1, $l304friChecker2, $l304friChecker3],
                7 => [$l304satChecker1, $l304satChecker2, $l304satChecker3],
                8 => [$l304sunChecker1, $l304sunChecker2, $l304sunChecker3],
            ],
            
            9 => [ // Room LDC 305
                2 => [$l305monChecker1, $l305monChecker2, $l305monChecker3],
                3 => [$l305tueChecker1, $l305tueChecker2, $l305tueChecker3],
                4 => [$l305wedChecker1, $l305wedChecker2, $l305wedChecker3],
                5 => [$l305thuChecker1, $l305thuChecker2, $l305thuChecker3],
                6 => [$l305friChecker1, $l305friChecker2, $l305friChecker3],
                7 => [$l305satChecker1, $l305satChecker2, $l305satChecker3],
                8 => [$l305sunChecker1, $l305sunChecker2, $l305sunChecker3],
            ],
            
            10 => [ // Room ELDC2
                2 => [$eldc2monChecker1, $eldc2monChecker2, $eldc2monChecker3],
                3 => [$eldc2tueChecker1, $eldc2tueChecker2, $eldc2tueChecker3],
                4 => [$eldc2wedChecker1, $eldc2wedChecker2, $eldc2wedChecker3],
                5 => [$eldc2thuChecker1, $eldc2thuChecker2, $eldc2thuChecker3],
                6 => [$eldc2friChecker1, $eldc2friChecker2, $eldc2friChecker3],
                7 => [$eldc2satChecker1, $eldc2satChecker2, $eldc2satChecker3],
                8 => [$eldc2sunChecker1, $eldc2sunChecker2, $eldc2sunChecker3],
            ],
            
            11 => [ // Room HEC 302 h302
                2 => [$h302monChecker1, $h302monChecker2, $h302monChecker3],
                3 => [$h302tueChecker1, $h302tueChecker2, $h302tueChecker3],
                4 => [$h302wedChecker1, $h302wedChecker2, $h302wedChecker3],
                5 => [$h302thuChecker1, $h302thuChecker2, $h302thuChecker3],
                6 => [$h302friChecker1, $h302friChecker2, $h302friChecker3],
                7 => [$h302satChecker1, $h302satChecker2, $h302satChecker3],
                8 => [$h302sunChecker1, $h302sunChecker2, $h302sunChecker3],
            ],
            
            12 => [ // Room PHYSICS phy
                2 => [$phymonChecker1, $phymonChecker2, $phymonChecker3],
                3 => [$phytueChecker1, $phytueChecker2, $phytueChecker3],
                4 => [$phywedChecker1, $phywedChecker2, $phywedChecker3],
                5 => [$phythuChecker1, $phythuChecker2, $phythuChecker3],
                6 => [$phyfriChecker1, $phyfriChecker2, $phyfriChecker3],
                7 => [$physatChecker1, $physatChecker2, $physatChecker3],
                8 => [$physunChecker1, $physunChecker2, $physunChecker3],
            ],
            
        ];

        if (isset($roomDayCheckerMap[$selected_room_id][$selected_day_id])) {
            // Fetch the checkers based on the room and day
            [$firstchecker, $secondchecker, $thirdchecker] = $roomDayCheckerMap[$selected_room_id][$selected_day_id];
            // Call selectTime with the appropriate parameters
            selectTime($conn, $selected_sTime_id, $selected_eTime_id, $firstchecker, $secondchecker, $thirdchecker);
        } else {
            echo "<div class='error_message'>No matching room/day checker configuration found.</div>";
        }
    }

    $stmt->close();

    if (!$records_found) {
        echo "<div class='error_message'>No records found for the selected lecturer.</div>";
    } else {
        // Delete records from excess_load
        $deleteExcessLoadQuery = "DELETE FROM excess_load WHERE name_id = ?";
        $stmt = $conn->prepare($deleteExcessLoadQuery);
        $stmt->bind_param("i", $selected_lec_name);
        if ($stmt->execute()) {
            echo "Lecturer's excess loads removed.<br>";
        } else {
            echo "Error removing lecturer's excess loads: " . $conn->error . "<br>";
        }
        $stmt->close();

        // Delete records from lecturers
        $deleteLecturerQuery = "DELETE FROM lecturers WHERE name_id = ?";
        $stmt = $conn->prepare($deleteLecturerQuery);
        $stmt->bind_param("i", $selected_lec_name);
        if ($stmt->execute()) {
            echo "Lecturer's records removed from lecturers table.<br>";
        } else {
            echo "Error removing lecturer's records: " . $conn->error . "<br>";
        }
        $stmt->close();

        // Delete lecturer from names table
        $deleteNameQuery = "DELETE FROM names WHERE id = ?";
        $stmt = $conn->prepare($deleteNameQuery);
        $stmt->bind_param("i", $selected_lec_name);
        if ($stmt->execute()) {
            echo "Lecturer removed from names table.<br>";
        } else {
            echo "Error removing lecturer from names: " . $conn->error . "<br>";
        }
        $stmt->close();
    }
}


// Fetch all names to display after submission
$showlect_sql = "SELECT * FROM names WHERE id != 1 ORDER BY name ASC";
$showlect_result = $conn->query($showlect_sql);

$conn->close();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Remove Lecturer</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Remove Lecturer</h2>
    <form action="" method="post">
        <label for="name_id">Select Lecturer:</label>
        <select name="name_id" id="name_id" required>
            <option value="">-- Select a Lecturer --</option>
            <?php
            if ($lec_name_result->num_rows > 0) {
                while ($row = $lec_name_result->fetch_assoc()) {
                    echo "<option value='" . htmlspecialchars($row['id']) . "'>" . htmlspecialchars($row['name']) . "</option>";
                }
            } else {
                echo "<option value=''>No Lecturers Found</option>";
            }
            ?>
        </select>
        <br><br>
        <button type="submit">Remove Lecturer</button>
    </form>

    <h3>All Lecturers</h3>
    <ul>
        <?php
        if ($showlect_result->num_rows > 0) {
            while ($row = $showlect_result->fetch_assoc()) {
                echo "<li>" . htmlspecialchars($row['name']);
                if ($row['position_id'] == 2) {
                    echo " - Position: Full-Time";
                    if ($row['designation_id'] == 2) echo ", Designation: Permanent Staff";
                    if ($row['designation_id'] == 3) echo ", Designation: Guest Lecturer";
                } elseif ($row['position_id'] == 3) {
                    echo " - Position: Part-Time";
                    if ($row['designation_id'] == 2) echo ", Designation: Permanent Staff";
                    if ($row['designation_id'] == 3) echo ", Designation: Guest Lecturer";
                } elseif ($row['position_id'] == 4) {
                    echo " - Position: Intern";
                    if ($row['designation_id'] == 2) echo ", Designation: Permanent Staff";
                    if ($row['designation_id'] == 3) echo ", Designation: Guest Lecturer";
                }
                echo "</li>";
            }
        } else {
            echo "<li>No lecturers found.</li>";
        }
        ?>
    </ul>

    <a href="menu_first_sem.html">
        <img src="back_logo.png" style="width: 30px; height: 30px;">
    </a>
    <a href="menu_first_sem.html">Back</a>
</body>
</html>