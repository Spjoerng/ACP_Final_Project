<?php
session_start(); 
include "connsecondsem.php";

// Fetch lec_name 
$lec_sql_name = "SELECT id, name FROM names";  
$lec_name_result = $conn->query($lec_sql_name);

// Fetch subject_name
$lec_sql_subject = "SELECT id, subject FROM subjects";
$lec_subject_result = $conn->query( $lec_sql_subject);

// Fetch section
$lec_sql_sections = "SELECT id, sections FROM sections";  
$lec_sections_result = $conn->query($lec_sql_sections);

// Fetch day
$lec_sql_day = "SELECT id, day FROM day";
$lec_day_result = $conn->query($lec_sql_day);

// Fetch room
$lec_sql_room = "SELECT id, rooms FROM rooms";
$lec_room_result = $conn->query($lec_sql_room);

//CECS 501
$c501_mon_start = "SELECT id, start_time FROM cecs501 WHERE checker_mon = 0";
$c501_mon_start_result = $conn->query($c501_mon_start);
$c501_mon_end = "SELECT id, end_time FROM cecs501 WHERE checker_mon = 0";
$c501_mon_end_result = $conn->query($c501_mon_end);

$c501_tue_start = "SELECT id, start_time FROM cecs501 WHERE checker_tue = 0";
$c501_tue_start_result = $conn->query($c501_tue_start);
$c501_tue_end = "SELECT id, end_time FROM cecs501 WHERE checker_tue = 0";
$c501_tue_end_result = $conn->query($c501_tue_end);

$c501_wed_start = "SELECT id, start_time FROM cecs501 WHERE checker_wed = 0";
$c501_wed_start_result = $conn->query($c501_wed_start);
$c501_wed_end = "SELECT id, end_time FROM cecs501 WHERE checker_wed = 0";
$c501_wed_end_result = $conn->query($c501_wed_end);

$c501_thu_start = "SELECT id, start_time FROM cecs501 WHERE checker_thu = 0";
$c501_thu_start_result = $conn->query($c501_thu_start);
$c501_thu_end = "SELECT id, end_time FROM cecs501 WHERE checker_thu = 0";
$c501_thu_end_result = $conn->query($c501_thu_end);

$c501_fri_start = "SELECT id, start_time FROM cecs501 WHERE checker_fri = 0";
$c501_fri_start_result = $conn->query($c501_fri_start);
$c501_fri_end = "SELECT id, end_time FROM cecs501 WHERE checker_fri = 0";
$c501_fri_end_result = $conn->query($c501_fri_end);

$c501_sat_start = "SELECT id, start_time FROM cecs501 WHERE checker_sat = 0";
$c501_sat_start_result = $conn->query($c501_sat_start);
$c501_sat_end = "SELECT id, end_time FROM cecs501 WHERE checker_sat = 0";
$c501_sat_end_result = $conn->query($c501_sat_end);

$c501_sun_start = "SELECT id, start_time FROM cecs501 WHERE checker_sun = 0";
$c501_sun_start_result = $conn->query($c501_sun_start);
$c501_sun_end = "SELECT id, start_time FROM cecs501 WHERE checker_sun = 0";
$c501_sun_end_result = $conn->query($c501_sun_end);

//CECS 502
$c502_mon_start = "SELECT id, start_time FROM cecs502 WHERE checker_mon = 0";
$c502_mon_start_result = $conn->query($c502_mon_start);
$c502_mon_end = "SELECT id, end_time FROM cecs502 WHERE checker_mon = 0";
$c502_mon_end_result = $conn->query($c502_mon_end);

$c502_tue_start = "SELECT id, start_time FROM cecs502 WHERE checker_tue = 0";
$c502_tue_start_result = $conn->query($c502_tue_start);
$c502_tue_end = "SELECT id, end_time FROM cecs502 WHERE checker_tue = 0";
$c502_tue_end_result = $conn->query($c502_tue_end);

$c502_wed_start = "SELECT id, start_time FROM cecs502 WHERE checker_wed = 0";
$c502_wed_start_result = $conn->query($c502_wed_start);
$c502_wed_end = "SELECT id, end_time FROM cecs502 WHERE checker_wed = 0";
$c502_wed_end_result = $conn->query($c502_wed_end);

$c502_thu_start = "SELECT id, start_time FROM cecs502 WHERE checker_thu = 0";
$c502_thu_start_result = $conn->query($c502_thu_start);
$c502_thu_end = "SELECT id, end_time FROM cecs502 WHERE checker_thu = 0";
$c502_thu_end_result = $conn->query($c502_thu_end);

$c502_fri_start = "SELECT id, start_time FROM cecs502 WHERE checker_fri = 0";
$c502_fri_start_result = $conn->query($c502_fri_start);
$c502_fri_end = "SELECT id, end_time FROM cecs502 WHERE checker_fri = 0";
$c502_fri_end_result = $conn->query($c502_fri_end);

$c502_sat_start = "SELECT id, start_time FROM cecs502 WHERE checker_sat = 0";
$c502_sat_start_result = $conn->query($c502_sat_start);
$c502_sat_end = "SELECT id, end_time FROM cecs502 WHERE checker_sat = 0";
$c502_sat_end_result = $conn->query($c502_sat_end);

$c502_sun_start = "SELECT id, start_time FROM cecs502 WHERE checker_sun = 0";
$c502_sun_start_result = $conn->query($c502_sun_start);
$c502_sun_end = "SELECT id, start_time FROM cecs502 WHERE checker_sun = 0";
$c502_sun_end_result = $conn->query($c502_sun_end);


//CECS 503
$c503_mon_start = "SELECT id, start_time FROM cecs503 WHERE checker_mon = 0";
$c503_mon_start_result = $conn->query($c503_mon_start);
$c503_mon_end = "SELECT id, end_time FROM cecs503 WHERE checker_mon = 0";
$c503_mon_end_result = $conn->query($c503_mon_end);

$c503_tue_start = "SELECT id, start_time FROM cecs503 WHERE checker_tue = 0";
$c503_tue_start_result = $conn->query($c503_tue_start);
$c503_tue_end = "SELECT id, end_time FROM cecs503 WHERE checker_tue = 0";
$c503_tue_end_result = $conn->query($c503_tue_end);

$c503_wed_start = "SELECT id, start_time FROM cecs503 WHERE checker_wed = 0";
$c503_wed_start_result = $conn->query($c503_wed_start);
$c503_wed_end = "SELECT id, end_time FROM cecs503 WHERE checker_wed = 0";
$c503_wed_end_result = $conn->query($c503_wed_end);

$c503_thu_start = "SELECT id, start_time FROM cecs503 WHERE checker_thu = 0";
$c503_thu_start_result = $conn->query($c503_thu_start);
$c503_thu_end = "SELECT id, end_time FROM cecs503 WHERE checker_thu = 0";
$c503_thu_end_result = $conn->query($c503_thu_end);

$c503_fri_start = "SELECT id, start_time FROM cecs503 WHERE checker_fri = 0";
$c503_fri_start_result = $conn->query($c503_fri_start);
$c503_fri_end = "SELECT id, end_time FROM cecs503 WHERE checker_fri = 0";
$c503_fri_end_result = $conn->query($c503_fri_end);

$c503_sat_start = "SELECT id, start_time FROM cecs503 WHERE checker_sat = 0";
$c503_sat_start_result = $conn->query($c503_sat_start);
$c503_sat_end = "SELECT id, end_time FROM cecs503 WHERE checker_sat = 0";
$c503_sat_end_result = $conn->query($c503_sat_end);

$c503_sun_start = "SELECT id, start_time FROM cecs503 WHERE checker_sun = 0";
$c503_sun_start_result = $conn->query($c503_sun_start);
$c503_sun_end = "SELECT id, end_time FROM cecs503 WHERE checker_sun = 0";
$c503_sun_end_result = $conn->query($c503_sun_end);


//HEB 502
$h502_mon_start = "SELECT id, start_time FROM heb502 WHERE checker_mon = 0";
$h502_mon_start_result = $conn->query($h502_mon_start);
$h502_mon_end = "SELECT id, end_time FROM heb502 WHERE checker_mon = 0";
$h502_mon_end = $conn->query($h502_mon_end);

$h502_tue_start = "SELECT id, start_time FROM heb502 WHERE checker_tue = 0";
$h502_tue_start_result = $conn->query($h502_tue_start);
$h502_tue_end = "SELECT id, end_time FROM heb502 WHERE checker_tue = 0";
$h502_tue_end_result = $conn->query($h502_tue_end);

$h502_wed_start = "SELECT id, start_time FROM heb502 WHERE checker_wed = 0";
$h502_wed_start_result = $conn->query($h502_wed_start);
$h502_wed_end = "SELECT id, end_time FROM heb502 WHERE checker_wed = 0";
$h502_wed_end_result = $conn->query($h502_wed_end);

$h502_thu_start = "SELECT id, start_time FROM heb502 WHERE checker_thu = 0";
$h502_thu_start_result = $conn->query($h502_thu_start);
$h502_thu_end = "SELECT id, end_time FROM heb502 WHERE checker_thu = 0";
$h502_thu_end_result = $conn->query($h502_thu_end);

$h502_fri_start = "SELECT id, start_time FROM heb502 WHERE checker_fri = 0";
$h502_fri_start_result = $conn->query($h502_fri_start);
$h502_fri_end = "SELECT id, end_time FROM heb502 WHERE checker_fri = 0";
$h502_fri_end_result = $conn->query($h502_fri_end);

$h502_sat_start = "SELECT id, start_time FROM heb502 WHERE checker_sat = 0";
$h502_sat_start_result = $conn->query($h502_sat_start);
$h502_sat_end = "SELECT id, end_time FROM heb502 WHERE checker_sat = 0";
$h502_sat_end_result = $conn->query($h502_sat_end);

$h502_sun_start = "SELECT id, start_time FROM heb502 WHERE checker_sun = 0";
$h502_sun_start_result = $conn->query($h502_sun_start);
$h502_sun_end = "SELECT id, start_time FROM heb502 WHERE checker_sun = 0";
$h502_sun_end_result = $conn->query($h502_sun_end);


//ABB 101
$a101_mon_start = "SELECT id, start_time FROM abb101 WHERE checker_mon = 0";
$a101_mon_start_result = $conn->query($a101_mon_start);
$a101_mon_end = "SELECT id, end_time FROM abb101 WHERE checker_mon = 0";
$a101_mon_end_result = $conn->query($a101_mon_end);

$a101_tue_start = "SELECT id, start_time FROM abb101 WHERE checker_tue = 0";
$a101_tue_start_result = $conn->query($a101_tue_start);
$a101_tue_end = "SELECT id, end_time FROM abb101 WHERE checker_tue = 0";
$a101_tue_end_result = $conn->query($a101_tue_end);

$a101_wed_start = "SELECT id, start_time FROM abb101 WHERE checker_wed = 0";
$a101_wed_start_result = $conn->query($a101_wed_start);
$a101_wed_end = "SELECT id, end_time FROM abb101 WHERE checker_wed = 0";
$a101_wed_end_result = $conn->query($a101_wed_end);

$a101_thu_start = "SELECT id, start_time FROM abb101 WHERE checker_thu = 0";
$a101_thu_start_result = $conn->query($a101_thu_start);
$a101_thu_end = "SELECT id, end_time FROM abb101 WHERE checker_thu = 0";
$a101_thu_end_result = $conn->query($a101_thu_end);

$a101_fri_start = "SELECT id, start_time FROM abb101 WHERE checker_fri = 0";
$a101_fri_start_result = $conn->query($a101_fri_start);
$a101_fri_end = "SELECT id, end_time FROM abb101 WHERE checker_fri = 0";
$a101_fri_end_result = $conn->query($a101_fri_end);

$a101_sat_start = "SELECT id, start_time FROM abb101 WHERE checker_sat = 0";
$a101_sat_start_result = $conn->query($a101_sat_start);
$a101_sat_end = "SELECT id, end_time FROM abb101 WHERE checker_sat = 0";
$a101_sat_end_result = $conn->query($a101_sat_end);

$a101_sun_start = "SELECT id, start_time FROM abb101 WHERE checker_sun = 0";
$a101_sun_start_result = $conn->query($a101_sun_start);
$a101_sun_end = "SELECT id, end_time FROM abb101 WHERE checker_sun = 0";
$a101_sun_end_result = $conn->query($a101_sun_end);


//ABB 103
$a103_mon_start = "SELECT id, start_time FROM abb103 WHERE checker_mon = 0";
$a103_mon_start_result = $conn->query($a103_mon_start);
$a103_mon_end = "SELECT id, end_time FROM abb103 WHERE checker_mon = 0";
$a103_mon_end_result = $conn->query($a103_mon_end);

$a103_tue_start = "SELECT id, start_time FROM abb103 WHERE checker_tue = 0";
$a103_tue_start_result = $conn->query($a103_tue_start);
$a103_tue_end = "SELECT id, end_time FROM abb103 WHERE checker_tue = 0";
$a103_tue_end_result = $conn->query($a103_tue_end);

$a103_wed_start = "SELECT id, start_time FROM abb103 WHERE checker_wed = 0";
$a103_wed_start_result = $conn->query($a103_wed_start);
$a103_wed_end = "SELECT id, end_time FROM abb103 WHERE checker_wed = 0";
$a103_wed_end_result = $conn->query($a103_wed_end);

$a103_thu_start = "SELECT id, start_time FROM abb103 WHERE checker_thu = 0";
$a103_thu_start_result = $conn->query($a103_thu_start);
$a103_thu_end = "SELECT id, end_time FROM abb103 WHERE checker_thu = 0";
$a103_thu_end_result = $conn->query($a103_thu_end);

$a103_fri_start = "SELECT id, start_time FROM abb103 WHERE checker_fri = 0";
$a103_fri_start_result = $conn->query($a103_fri_start);
$a103_fri_end = "SELECT id, end_time FROM abb103 WHERE checker_fri = 0";
$a103_fri_end_result = $conn->query($a103_fri_end);

$a103_sat_start = "SELECT id, start_time FROM abb103 WHERE checker_sat = 0";
$a103_sat_start_result = $conn->query($a103_sat_start);
$a103_sat_end = "SELECT id, end_time FROM abb103 WHERE checker_sat = 0";
$a103_sat_end_result = $conn->query($a103_sat_end);

$a103_sun_start = "SELECT id, start_time FROM abb103 WHERE checker_sun = 0";
$a103_sun_start_result = $conn->query($a103_sun_start);
$a103_sun_end = "SELECT id, end_time FROM abb103 WHERE checker_sun = 0";
$a103_sun_end_result = $conn->query($a103_sun_end);

//LDC 304
$l304_mon_start = "SELECT id, start_time FROM ldc304 WHERE checker_mon = 0";
$l304_mon_start_result = $conn->query($l304_mon_start);
$l304_mon_end = "SELECT id, end_time FROM ldc304 WHERE checker_mon = 0";
$l304_mon_end_result = $conn->query($l304_mon_end);

$l304_tue_start = "SELECT id, start_time FROM ldc304 WHERE checker_tue = 0";
$l304_tue_start_result = $conn->query($l304_tue_start);
$l304_tue_end = "SELECT id, end_time FROM ldc304 WHERE checker_tue = 0";
$l304_tue_end_result = $conn->query($l304_tue_end);

$l304_wed_start = "SELECT id, start_time FROM ldc304 WHERE checker_wed = 0";
$l304_wed_start_result = $conn->query($l304_wed_start);
$l304_wed_end = "SELECT id, end_time FROM ldc304 WHERE checker_wed = 0";
$l304_wed_end_result = $conn->query($l304_wed_end);

$l304_thu_start = "SELECT id, start_time FROM ldc304 WHERE checker_thu = 0";
$l304_thu_start_result = $conn->query($l304_thu_start);
$l304_thu_end = "SELECT id, end_time FROM ldc304 WHERE checker_thu = 0";
$l304_thu_end_result = $conn->query($l304_thu_end);

$l304_fri_start = "SELECT id, start_time FROM ldc304 WHERE checker_fri = 0";
$l304_fri_start_result = $conn->query($l304_fri_start);
$l304_fri_end = "SELECT id, end_time FROM ldc304 WHERE checker_fri = 0";
$l304_fri_end_result = $conn->query($l304_fri_end);

$l304_sat_start = "SELECT id, start_time FROM ldc304 WHERE checker_sat = 0";
$l304_sat_start_result = $conn->query($l304_sat_start);
$l304_sat_end = "SELECT id, end_time FROM ldc304 WHERE checker_sat = 0";
$l304_sat_end_result = $conn->query($l304_sat_end);

$l304_sun_start = "SELECT id, start_time FROM ldc304 WHERE checker_sun = 0";
$l304_sun_start_result = $conn->query($l304_sun_start);
$l304_sun_end = "SELECT id, end_time FROM ldc304 WHERE checker_sun = 0";
$l304_sun_end_result = $conn->query($l304_sun_end);

//LDC 305
$l305_mon_start = "SELECT id, start_time FROM ldc305 WHERE checker_mon = 0";
$l305_mon_start_result = $conn->query($l305_mon_start);
$l305_mon_end = "SELECT id, end_time FROM ldc305 WHERE checker_mon = 0";
$l305_mon_end_result = $conn->query($l305_mon_end);

$l305_tue_start = "SELECT id, start_time FROM ldc305 WHERE checker_tue = 0";
$l305_tue_start_result = $conn->query($l305_tue_start);
$l305_tue_end = "SELECT id, end_time FROM ldc305 WHERE checker_tue = 0";
$l305_tue_end_result = $conn->query($l305_tue_end);

$l305_wed_start = "SELECT id, start_time FROM ldc305 WHERE checker_wed = 0";
$l305_wed_start_result = $conn->query($l305_wed_start);
$l305_wed_end = "SELECT id, end_time FROM ldc305 WHERE checker_wed = 0";
$l305_wed_end_result = $conn->query($l305_wed_end);

$l305_thu_start = "SELECT id, start_time FROM ldc305 WHERE checker_thu = 0";
$l305_thu_start_result = $conn->query($l305_thu_start);
$l305_thu_end = "SELECT id, end_time FROM ldc305 WHERE checker_thu = 0";
$l305_thu_end_result = $conn->query($l305_thu_end);

$l305_fri_start = "SELECT id, start_time FROM ldc305 WHERE checker_fri = 0";
$l305_fri_start_result = $conn->query($l305_fri_start);
$l305_fri_end = "SELECT id, end_time FROM ldc305 WHERE checker_fri = 0";
$l305_fri_end_result = $conn->query($l305_fri_end);

$l305_sat_start = "SELECT id, start_time FROM ldc305 WHERE checker_sat = 0";
$l305_sat_start_result = $conn->query($l305_sat_start);
$l305_sat_end = "SELECT id, end_time FROM ldc305 WHERE checker_sat = 0";
$l305_sat_end_result = $conn->query($l305_sat_end);

$l305_sun_start = "SELECT id, start_time FROM ldc305 WHERE checker_sun = 0";
$l305_sun_start_result = $conn->query($l305_sun_start);
$l305_sun_end = "SELECT id, end_time FROM ldc305 WHERE checker_sun = 0";
$l305_sun_end_result = $conn->query($l305_sun_end);

//ELDC 2
$eldc2_mon_start = "SELECT id, start_time FROM eldc2 WHERE checker_mon = 0";
$eldc2_mon_start_result = $conn->query($eldc2_mon_start);
$eldc2_mon_end = "SELECT id, end_time FROM eldc2 WHERE checker_mon = 0";
$eldc2_mon_end_result = $conn->query($eldc2_mon_end);

$eldc2_tue_start = "SELECT id, start_time FROM eldc2 WHERE checker_tue = 0";
$eldc2_tue_start_result = $conn->query($eldc2_tue_start);
$eldc2_tue_end = "SELECT id, end_time FROM eldc2 WHERE checker_tue = 0";
$eldc2_tue_end_result = $conn->query($l304_tue_end);

$eldc2_wed_start = "SELECT id, start_time FROM ldc304 WHERE checker_wed = 0";
$eldc2_wed_start_result = $conn->query($l304_wed_start);
$eldc2_wed_end = "SELECT id, end_time FROM ldc304 WHERE checker_wed = 0";
$eldc2_wed_end_result = $conn->query($l304_wed_end);

$eldc2_thu_start = "SELECT id, start_time FROM ldc304 WHERE checker_thu = 0";
$eldc2_thu_start_result = $conn->query($l304_thu_start);
$eldc2_thu_end = "SELECT id, end_time FROM ldc304 WHERE checker_thu = 0";
$eldc2_thu_end_result = $conn->query($l304_thu_end);

$eldc2_fri_start = "SELECT id, start_time FROM ldc304 WHERE checker_fri = 0";
$eldc2_fri_start_result = $conn->query($l304_fri_start);
$eldc2_fri_end = "SELECT id, end_time FROM ldc3043 WHERE checker_fri = 0";
$eldc2_fri_end_result = $conn->query($l304_fri_end);

$eldc2_sat_start = "SELECT id, start_time FROM ldc304 WHERE checker_sat = 0";
$eldc2_sat_start_result = $conn->query($l304_sat_start);
$eldc2_sat_end = "SELECT id, end_time FROM ldc304 WHERE checker_sat = 0";
$eldc2_sat_end_result = $conn->query($l304_sat_end);

$eldc2_sun_start = "SELECT id, start_time FROM ldc304 WHERE checker_sun = 0";
$eldc2_sun_start_result = $conn->query($l304_sun_start);
$eldc2_sun_end = "SELECT id, start_time FROM ldc304 WHERE checker_sun = 0";
$eldc2_sun_end_result = $conn->query($l304_sun_end);

//HEC 302
$h302_mon_start = "SELECT id, start_time FROM hec302 WHERE checker_mon = 0";
$h302_mon_start_result = $conn->query($h302_mon_start);
$h302_mon_end = "SELECT id, end_time FROM hec302 WHERE checker_mon = 0";
$h302_mon_end_result = $conn->query($h302_mon_end);

$h302_tue_start = "SELECT id, start_time FROM hec302 WHERE checker_tue = 0";
$h302_tue_start_result = $conn->query($h302_tue_start);
$h302_tue_end = "SELECT id, end_time FROM hec302 WHERE checker_tue = 0";
$h302_tue_end_result = $conn->query($h302_tue_end);

$h302_wed_start = "SELECT id, start_time FROM hec302 WHERE checker_wed = 0";
$h302_wed_start_result = $conn->query($h302_wed_start);
$h302_wed_end = "SELECT id, end_time FROM hec302 WHERE checker_wed = 0";
$h302_wed_end_result = $conn->query($h302_wed_end);

$h302_thu_start = "SELECT id, start_time FROM hec302 WHERE checker_thu = 0";
$h302_thu_start_result = $conn->query($h302_thu_start);
$h302_thu_end = "SELECT id, end_time FROM hec302 WHERE checker_thu = 0";
$h302_thu_end_result = $conn->query($h302_thu_end);

$h302_fri_start = "SELECT id, start_time FROM hec302 WHERE checker_fri = 0";
$h302_fri_start_result = $conn->query($h302_fri_start);
$h302_fri_end = "SELECT id, end_time FROM hec302 WHERE checker_fri = 0";
$h302_fri_end_result = $conn->query($h302_fri_end);

$h302_sat_start = "SELECT id, start_time FROM hec302 WHERE checker_sat = 0";
$h302_sat_start_result = $conn->query($h302_sat_start);
$h302_sat_end = "SELECT id, end_time FROM hec302 WHERE checker_sat = 0";
$h302_sat_end_result = $conn->query($h302_sat_end);

$h302_sun_start = "SELECT id, start_time FROM hec302 WHERE checker_sun = 0";
$h302_sun_start_result = $conn->query($h302_sun_start);
$h302_sun_end = "SELECT id, end_time FROM hec302 WHERE checker_sun = 0";
$h302_sun_end_result = $conn->query($h302_sun_end);

//PHYSICS
$phy_mon_start = "SELECT id, start_time FROM phylab WHERE checker_mon = 0";
$phy_mon_start_result = $conn->query($phy_mon_start);
$phy_mon_end = "SELECT id, end_time FROM phylab WHERE checker_mon = 0";
$phy_mon_end_result = $conn->query($phy_mon_end);

$phy_tue_start = "SELECT id, start_time FROM phylab WHERE checker_tue = 0";
$phy_tue_start_result = $conn->query($phy_tue_start);
$phy_tue_end = "SELECT id, end_time FROM phylab WHERE checker_tue = 0";
$phy_tue_end_result = $conn->query($phy_tue_end);

$phy_wed_start = "SELECT id, start_time FROM phylab WHERE checker_wed = 0";
$phy_wed_start_result = $conn->query($phy_wed_start);
$phy_wed_end = "SELECT id, end_time FROM phylab WHERE checker_wed = 0";
$phy_wed_end_result = $conn->query($phy_wed_end);

$phy_thu_start = "SELECT id, start_time FROM phylab WHERE checker_thu = 0";
$phy_thu_start_result = $conn->query($phy_thu_start);
$phy_thu_end = "SELECT id, end_time FROM phylab WHERE checker_thu = 0";
$phy_thu_end_result = $conn->query($phy_thu_end);

$phy_fri_start = "SELECT id, start_time FROM phylab WHERE checker_fri = 0";
$phy_fri_start_result = $conn->query($phy_fri_start);
$phy_fri_end = "SELECT id, end_time FROM phylab WHERE checker_fri = 0";
$phy_fri_end_result = $conn->query($phy_fri_end);

$phy_sat_start = "SELECT id, start_time FROM phylab WHERE checker_sat = 0";
$phy_sat_start_result = $conn->query($phy_sat_start);
$phy_sat_end = "SELECT id, end_time FROM phylab WHERE checker_sat = 0";
$phy_sat_end_result = $conn->query($phy_sat_end);

$phy_sun_start = "SELECT id, start_time FROM phylab WHERE checker_sun = 0";
$phy_sun_start_result = $conn->query($phy_sun_start);
$phy_sun_end = "SELECT id, end_time FROM phylab WHERE checker_sun = 0";
$phy_sun_end_result = $conn->query($phy_sun_end);

// Receive/get the value of lec_name, subject_id, semester_id, and section_id
$selected_lec_name = isset($_POST['name_id']) ? $_POST['name_id'] : null;
$selected_subject_id = isset($_POST['subject_id']) ? $_POST['subject_id'] : null;
$selected_section_id = isset($_POST['section_id']) ? $_POST['section_id'] : null;
$selected_room_id = isset($_POST['room_id']) ? $_POST['room_id'] : null;
$selected_day_id = isset($_POST['day_id']) ? $_POST['day_id'] : null;
$selected_sTime_id = isset($_POST['startTime_id']) ? $_POST['startTime_id'] : null;
$selected_eTime_id = isset($_POST['endTime_id']) ? $_POST['endTime_id'] : null;

function checkConflict($conn, $name_id, $section_id, $day_id, $room_id, $startTime_id, $endTime_id) {
    // Check if start time and end time are invalid
    if ($startTime_id >= $endTime_id) {
        echo "<div class='invalid_sched'><p>Invalid Schedule! Insert a valid time!</p></div>";
        return true; // Treat this as a conflict to prevent further processing
    }

    // Check for schedule conflicts for the same lecturer, section, or room on the same day
    $check_sql = "SELECT * FROM lecturers WHERE 
    day_id = ? AND 
    (
        name_id = ? OR 
        room_id = ? OR 
        section_id = ?
    ) AND 
    (
        (? < endTime_id AND ? > startTime_id)
    )";

    $stmt = $conn->prepare($check_sql);

    // Bind the parameters
    $stmt->bind_param("iiiiii", $day_id, $name_id, $room_id, $section_id, $startTime_id, $endTime_id);

    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        echo "<div class='conflict_message'><p>Conflict detected! The schedule overlaps with an existing schedule.</p></div>";
        return true; // There is a conflict
    }

    // No conflict detected
    return false;
}
// Function to insert all data to final table
function insertData($conn, $name_id, $section_id, $subject_id, $room_id, $day_id, $sTime_id, $eTime_id) {
    // First, check for conflicts
    if (checkConflict($conn, $name_id, $section_id, $day_id, $room_id,  $sTime_id, $eTime_id)) {
        return false; // Prevent insertion
    }
    
    $insert_sql = "INSERT INTO lecturers (name_id, section_id, subject_id, room_id, day_id, startTime_id, endTime_id) VALUES (?, ?, ?, ?, ?, ?, ?)";
    $insert_data = $conn->prepare($insert_sql);
    
    if (!$insert_data) {
        die("Error preparing statement: " . $conn->error);
    }
    
    $insert_data->bind_param("iiiiiii", $name_id, $section_id, $subject_id, $room_id, $day_id, $sTime_id, $eTime_id); 
    
    if ($insert_data->execute()) {
        return true; // Insertion successful
    } else {
        echo "Error executing query: " . $insert_data->error;
        return false; // Insertion failed
    }
}

// Function to show dropdown box for lecturers
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
}

// Function to show dropdown box for subjects
function subjectDropdown($lec_subject_result, $selected_subject_id) {

    echo '<div class="subject">';
    echo '<label for="subject_id">Subject:</label>';
    echo '<select class="dropdown_sub" select name="subject_id" id="subject_id">';
    
    if ($lec_subject_result->num_rows > 0) {
        while ($row = $lec_subject_result->fetch_assoc()) {
            $selected = ($row['id'] == $selected_subject_id) ? 'selected' : '';
            echo "<option value='" . $row['id'] . "' $selected>" . $row['subject'] . "</option>";
        }
    } else {
        echo "<option>No Subjects found</option>";
    }
    
    echo '</select>';
    echo '</div>';
}

// Function to show dropdown box for sections
function sectionDropdown($lec_sections_result, $selected_section_id) {

    echo '<div class="section">';
    echo '<label for="section_id">Section:</label>';
    echo '<select class="dropdown_sec" select name="section_id" id="section_id">';
    
    if ($lec_sections_result->num_rows > 0) {
        while ($row = $lec_sections_result->fetch_assoc()) {
            $selected = ($row['id'] == $selected_section_id) ? 'selected' : '';
            echo "<option value='" . $row['id'] . "' $selected>" . $row['sections'] . "</option>";
        }
    } else {
        echo "<option>No Sections found</option>";
    }
    
    echo '</select>';
    echo '</div>';
}

//Function to show dropbox for rooms
function roomDropdown($lec_room_result, $selected_room_id, ) {

    echo '<div class="room">';
    echo '<label for="room_id">Room:</label>';
    echo '<select class="dropdown_room" select name="room_id" id="room_id">';
    
    if ($lec_room_result->num_rows > 0) {
        while ($row = $lec_room_result->fetch_assoc()) {
            $selected = ($row['id'] == $selected_room_id) ? 'selected' : '';
            echo "<option value='" . $row['id'] . "' $selected>" . $row['rooms'] . "</option>";
        }
    } else {
        echo "<option>No Sections found</option>";
    }
    
    echo '</select>';
    echo '</div>';
}

// Function to show dropbox for day
function dayDropdown($lec_day_result, $selected_day_id) {

    echo '<div class="day">';
    echo '<label for="day_id">Day:</label>';
    echo '<select class="dropdown_day" select name="day_id" id="day_id">';
    
    if ($lec_day_result->num_rows > 0) {
        while ($row = $lec_day_result->fetch_assoc()) {
            $selected = ($row['id'] == $selected_day_id) ? 'selected' : '';
            echo "<option value='" . $row['id'] . "' $selected>" . $row['day'] . "</option>";
        }
    } else {
        echo "<option>No Sections found</option>";
    }

    echo '</select>';
    echo '</div>';
}

// Function to show dropdown box for start time
  function sTimeDropdown($lec_sTime_result, $selected_sTime_id) {

    echo '<div class="start_time">';
    echo '<label for="startTime_id">Start Time:</label>';
    echo '<select class="dropdown_st" select name="startTime_id" id="startTime_id">';
        
    if ($lec_sTime_result->num_rows > 0) {
        while ($row = $lec_sTime_result->fetch_assoc()) {
            $selected = ($row['id'] == $selected_sTime_id) ? 'selected' : '';
            echo "<option value='" . $row['id'] . "' $selected>" . $row['start_time'] . "</option>";
        }
    } else {
        echo "<option>No Start Times found</option>";
    }
    
    echo '</select>'; // Ensure the closing </select> tag is inside the function
    echo '</div>';
}

// Function to show dropdown box for end time 
function eTimeDropdown($lec_eTime_result, $selected_eTime_id) {

    echo '<div class="end_time">';
    echo '<label for="endTime_id">End Time:</label>';
    echo '<select class="dropdown_et" select name="endTime_id" id="endTime_id">';
        
    if ($lec_eTime_result->num_rows > 0) {
        while ($row = $lec_eTime_result->fetch_assoc()) {
            $selected = ($row['id'] == $selected_eTime_id) ? 'selected' : '';
            echo "<option value='" . $row['id'] . "' $selected>" . $row['end_time'] . "</option>";
        }
    } else {
        echo "<option>No End Times found</option>";
    }
    
    echo '</select>'; // Ensure the closing </select> tag is inside the function
    echo '</div>';
}

// CHECKERS
//CECS 501
$c501monChecker1 = "UPDATE cecs501 SET checker_mon = 1 WHERE start_time = ? AND end_time = ?";
$c501monChecker2 = "UPDATE cecs501 SET checker_mon = 1 WHERE id BETWEEN ? AND ?";

$c501tueChecker1 = "UPDATE cecs501 SET checker_tue = 1 WHERE start_time = ? AND end_time = ?";
$c501tueChecker2 = "UPDATE cecs501 SET checker_tue = 1 WHERE id BETWEEN ? AND ?";

$c501wedChecker1 = "UPDATE cecs501 SET checker_wed = 1 WHERE start_time = ? AND end_time = ?";
$c501wedChecker2 = "UPDATE cecs501 SET checker_wed = 1 WHERE id BETWEEN ? AND ?";

$c501thuChecker1 = "UPDATE cecs501 SET checker_thu = 1 WHERE start_time = ? AND end_time = ?";
$c501thuChecker2 = "UPDATE cecs501 SET checker_thu = 1 WHERE id BETWEEN ? AND ?";

$c501friChecker1 = "UPDATE cecs501 SET checker_fri = 1 WHERE start_time = ? AND end_time = ?";
$c501friChecker2 = "UPDATE cecs501 SET checker_fri = 1 WHERE id BETWEEN ? AND ?";

$c501satChecker1 = "UPDATE cecs501 SET checker_sat = 1 WHERE start_time = ? AND end_time = ?";
$c501satChecker2 = "UPDATE cecs501 SET checker_sat = 1 WHERE id BETWEEN ? AND ?";

$c501sunChecker1 = "UPDATE cecs501 SET checker_sun = 1 WHERE start_time = ? AND end_time = ?";
$c501sunChecker2 = "UPDATE cecs501 SET checker_sun = 1 WHERE id BETWEEN ? AND ?";

//CECS 502
$c502monChecker1 = "UPDATE cecs502 SET checker_mon = 1 WHERE start_time = ? AND end_time = ?";
$c502monChecker2 = "UPDATE cecs502 SET checker_mon = 1 WHERE id BETWEEN ? AND ?";

$c502tueChecker1 = "UPDATE cecs502 SET checker_tue = 1 WHERE start_time = ? AND end_time = ?";
$c502tueChecker2 = "UPDATE cecs502 SET checker_tue = 1 WHERE id BETWEEN ? AND ?";

$c502wedChecker1 = "UPDATE cecs502 SET checker_wed = 1 WHERE start_time = ? AND end_time = ?";
$c502wedChecker2 = "UPDATE cecs502 SET checker_wed = 1 WHERE id BETWEEN ? AND ?";

$c502thuChecker1 = "UPDATE cecs502 SET checker_thu = 1 WHERE start_time = ? AND end_time = ?";
$c502thuChecker2 = "UPDATE cecs502 SET checker_thu = 1 WHERE id BETWEEN ? AND ?";

$c502friChecker1 = "UPDATE cecs502 SET checker_fri = 1 WHERE start_time = ? AND end_time = ?";
$c502friChecker2 = "UPDATE cecs502 SET checker_fri = 1 WHERE id BETWEEN ? AND ?";

$c502satChecker1 = "UPDATE cecs502 SET checker_sat = 1 WHERE start_time = ? AND end_time = ?";
$c502satChecker2 = "UPDATE cecs502 SET checker_sat = 1 WHERE id BETWEEN ? AND ?";

$c502sunChecker1 = "UPDATE cecs502 SET checker_sun = 1 WHERE start_time = ? AND end_time = ?";
$c502sunChecker2 = "UPDATE cecs502 SET checker_sun = 1 WHERE id BETWEEN ? AND ?";

//CECS 503
$c503monChecker1 = "UPDATE cecs503 SET checker_mon = 1 WHERE start_time = ? AND end_time = ?";
$c503monChecker2 = "UPDATE cecs503 SET checker_mon = 1 WHERE id BETWEEN ? AND ?";

$c503tueChecker1 = "UPDATE cecs503 SET checker_tue = 1 WHERE start_time = ? AND end_time = ?";
$c503tueChecker2 = "UPDATE cecs503 SET checker_tue = 1 WHERE id BETWEEN ? AND ?";

$c503wedChecker1 = "UPDATE cecs503 SET checker_wed = 1 WHERE start_time = ? AND end_time = ?";
$c503wedChecker2 = "UPDATE cecs503 SET checker_wed = 1 WHERE id BETWEEN ? AND ?";

$c503thuChecker1 = "UPDATE cecs503 SET checker_thu = 1 WHERE start_time = ? AND end_time = ?";
$c503thuChecker2 = "UPDATE cecs503 SET checker_thu = 1 WHERE id BETWEEN ? AND ?";

$c503friChecker1 = "UPDATE cecs503 SET checker_fri = 1 WHERE start_time = ? AND end_time = ?";
$c503friChecker2 = "UPDATE cecs503 SET checker_fri = 1 WHERE id BETWEEN ? AND ?";

$c503satChecker1 = "UPDATE cecs503 SET checker_sat = 1 WHERE start_time = ? AND end_time = ?";
$c503satChecker2 = "UPDATE cecs503 SET checker_sat = 1 WHERE id BETWEEN ? AND ?";

$c503sunChecker1 = "UPDATE cecs503 SET checker_sun = 1 WHERE start_time = ? AND end_time = ?";
$c503sunChecker2 = "UPDATE cecs503 SET checker_sun = 1 WHERE id BETWEEN ? AND ?";

//HEB 502
$h502monChecker1 = "UPDATE heb502 SET checker_mon = 1 WHERE start_time = ? AND end_time = ?";
$h502monChecker2 = "UPDATE heb502 SET checker_mon = 1 WHERE id BETWEEN ? AND ?";

$h502tueChecker1 = "UPDATE heb502 SET checker_tue = 1 WHERE start_time = ? AND end_time = ?";
$h502tueChecker2 = "UPDATE heb502 SET checker_tue = 1 WHERE id BETWEEN ? AND ?";

$h502wedChecker1 = "UPDATE heb502 SET checker_wed = 1 WHERE start_time = ? AND end_time = ?";
$h502wedChecker2 = "UPDATE heb502 SET checker_wed = 1 WHERE id BETWEEN ? AND ?";

$h502thuChecker1 = "UPDATE heb502 SET checker_thu = 1 WHERE start_time = ? AND end_time = ?";
$h502thuChecker2 = "UPDATE heb502 SET checker_thu = 1 WHERE id BETWEEN ? AND ?";

$h502friChecker1 = "UPDATE heb502 SET checker_fri = 1 WHERE start_time = ? AND end_time = ?";
$h502friChecker2 = "UPDATE heb502 SET checker_fri = 1 WHERE id BETWEEN ? AND ?";

$h502satChecker1 = "UPDATE heb502 SET checker_sat = 1 WHERE start_time = ? AND end_time = ?";
$h502satChecker2 = "UPDATE heb502 SET checker_sat = 1 WHERE id BETWEEN ? AND ?";

$h502sunChecker1 = "UPDATE heb502 SET checker_sun = 1 WHERE start_time = ? AND end_time = ?";
$h502sunChecker2 = "UPDATE heb502 SET checker_sun = 1 WHERE id BETWEEN ? AND ?";

//ABB 101
$a101monChecker1 = "UPDATE abb101 SET checker_mon = 1 WHERE start_time = ? AND end_time = ?";
$a101monChecker2 = "UPDATE abb101 SET checker_mon = 1 WHERE id BETWEEN ? AND ?";

$a101tueChecker1 = "UPDATE abb101 SET checker_tue = 1 WHERE start_time = ? AND end_time = ?";
$a101tueChecker2 = "UPDATE abb101 SET checker_tue = 1 WHERE id BETWEEN ? AND ?";

$a101wedChecker1 = "UPDATE abb101 SET checker_wed = 1 WHERE start_time = ? AND end_time = ?";
$a101wedChecker2 = "UPDATE abb101 SET checker_wed = 1 WHERE id BETWEEN ? AND ?";

$a101thuChecker1 = "UPDATE abb101 SET checker_thu = 1 WHERE start_time = ? AND end_time = ?";
$a101thuChecker2 = "UPDATE abb101 SET checker_thu = 1 WHERE id BETWEEN ? AND ?";

$a101friChecker1 = "UPDATE abb101 SET checker_fri = 1 WHERE start_time = ? AND end_time = ?";
$a101friChecker2 = "UPDATE abb101 SET checker_fri = 1 WHERE id BETWEEN ? AND ?";

$a101satChecker1 = "UPDATE abb101 SET checker_sat = 1 WHERE start_time = ? AND end_time = ?";
$a101satChecker2 = "UPDATE abb101 SET checker_sat = 1 WHERE id BETWEEN ? AND ?";

$a101sunChecker1 = "UPDATE abb101 SET checker_sun = 1 WHERE start_time = ? AND end_time = ?";
$a101sunChecker2 = "UPDATE abb101 SET checker_sun = 1 WHERE id BETWEEN ? AND ?";

//ABB 103
$a103monChecker1 = "UPDATE abb103 SET checker_mon = 1 WHERE start_time = ? AND end_time = ?";
$a103monChecker2 = "UPDATE abb103 SET checker_mon = 1 WHERE id BETWEEN ? AND ?";

$a103tueChecker1 = "UPDATE abb103 SET checker_tue = 1 WHERE start_time = ? AND end_time = ?";
$a103tueChecker2 = "UPDATE abb103 SET checker_tue = 1 WHERE id BETWEEN ? AND ?";

$a103wedChecker1 = "UPDATE abb103 SET checker_wed = 1 WHERE start_time = ? AND end_time = ?";
$a103wedChecker2 = "UPDATE abb103 SET checker_wed = 1 WHERE id BETWEEN ? AND ?";

$a103thuChecker1 = "UPDATE abb103 SET checker_thu = 1 WHERE start_time = ? AND end_time = ?";
$a103thuChecker2 = "UPDATE abb103 SET checker_thu = 1 WHERE id BETWEEN ? AND ?";

$a103friChecker1 = "UPDATE abb103 SET checker_fri = 1 WHERE start_time = ? AND end_time = ?";
$a103friChecker2 = "UPDATE abb103 SET checker_fri = 1 WHERE id BETWEEN ? AND ?";

$a103satChecker1 = "UPDATE abb103 SET checker_sat = 1 WHERE start_time = ? AND end_time = ?";
$a103satChecker2 = "UPDATE abb103 SET checker_sat = 1 WHERE id BETWEEN ? AND ?";

$a103sunChecker1 = "UPDATE abb103 SET checker_sun = 1 WHERE start_time = ? AND end_time = ?";
$a103sunChecker2 = "UPDATE abb103 SET checker_sun = 1 WHERE id BETWEEN ? AND ?";

//LDC 304
$l304monChecker1 = "UPDATE ldc304 SET checker_mon = 1 WHERE start_time = ? AND end_time = ?";
$l304monChecker2 = "UPDATE ldc304 SET checker_mon = 1 WHERE id BETWEEN ? AND ?";

$l304tueChecker1 = "UPDATE ldc304 SET checker_tue = 1 WHERE start_time = ? AND end_time = ?";
$l304tueChecker2 = "UPDATE ldc304 SET checker_tue = 1 WHERE id BETWEEN ? AND ?";

$l304wedChecker1 = "UPDATE ldc304 SET checker_wed = 1 WHERE start_time = ? AND end_time = ?";
$l304wedChecker2 = "UPDATE ldc304 SET checker_wed = 1 WHERE id BETWEEN ? AND ?";

$l304thuChecker1 = "UPDATE ldc304 SET checker_thu = 1 WHERE start_time = ? AND end_time = ?";
$l304thuChecker2 = "UPDATE ldc304 SET checker_thu = 1 WHERE id BETWEEN ? AND ?";

$l304friChecker1 = "UPDATE ldc304 SET checker_fri = 1 WHERE start_time = ? AND end_time = ?";
$l304friChecker2 = "UPDATE ldc304 SET checker_fri = 1 WHERE id BETWEEN ? AND ?";

$l304satChecker1 = "UPDATE ldc304 SET checker_sat = 1 WHERE start_time = ? AND end_time = ?";
$l304satChecker2 = "UPDATE ldc304 SET checker_sat = 1 WHERE id BETWEEN ? AND ?";

$l304sunChecker1 = "UPDATE ldc304 SET checker_sun = 1 WHERE start_time = ? AND end_time = ?";
$l304sunChecker2 = "UPDATE ldc304 SET checker_sun = 1 WHERE id BETWEEN ? AND ?";

//LDC 305
$l305monChecker1 = "UPDATE ldc305 SET checker_mon = 1 WHERE start_time = ? AND end_time = ?";
$l305monChecker2 = "UPDATE ldc305 SET checker_mon = 1 WHERE id BETWEEN ? AND ?";

$l305tueChecker1 = "UPDATE ldc305 SET checker_tue = 1 WHERE start_time = ? AND end_time = ?";
$l305tueChecker2 = "UPDATE ldc305 SET checker_tue = 1 WHERE id BETWEEN ? AND ?";

$l305wedChecker1 = "UPDATE ldc305 SET checker_wed = 1 WHERE start_time = ? AND end_time = ?";
$l305wedChecker2 = "UPDATE ldc305 SET checker_wed = 1 WHERE id BETWEEN ? AND ?";

$l305thuChecker1 = "UPDATE ldc305 SET checker_thu = 1 WHERE start_time = ? AND end_time = ?";
$l305thuChecker2 = "UPDATE ldc305 SET checker_thu = 1 WHERE id BETWEEN ? AND ?";

$l305friChecker1 = "UPDATE ldc305 SET checker_fri = 1 WHERE start_time = ? AND end_time = ?";
$l305friChecker2 = "UPDATE ldc305 SET checker_fri = 1 WHERE id BETWEEN ? AND ?";

$l305satChecker1 = "UPDATE ldc305 SET checker_sat = 1 WHERE start_time = ? AND end_time = ?";
$l305satChecker2 = "UPDATE ldc305 SET checker_sat = 1 WHERE id BETWEEN ? AND ?";

$l305sunChecker1 = "UPDATE ldc305 SET checker_sun = 1 WHERE start_time = ? AND end_time = ?";
$l305sunChecker2 = "UPDATE ldc305 SET checker_sun = 1 WHERE id BETWEEN ? AND ?";


//ELDC 2
$eldc2monChecker1 = "UPDATE eldc2 SET checker_mon = 1 WHERE start_time = ? AND end_time = ?";
$eldc2monChecker2 = "UPDATE eldc2 SET checker_mon = 1 WHERE id BETWEEN ? AND ?";

$eldc2tueChecker1 = "UPDATE eldc2 SET checker_tue = 1 WHERE start_time = ? AND end_time = ?";
$eldc2tueChecker2 = "UPDATE eldc2 SET checker_tue = 1 WHERE id BETWEEN ? AND ?";

$eldc2wedChecker1 = "UPDATE eldc2 SET checker_wed = 1 WHERE start_time = ? AND end_time = ?";
$eldc2wedChecker2 = "UPDATE eldc2 SET checker_wed = 1 WHERE id BETWEEN ? AND ?";

$eldc2thuChecker1 = "UPDATE eldc2 SET checker_thu = 1 WHERE start_time = ? AND end_time = ?";
$eldc2thuChecker2 = "UPDATE eldc2 SET checker_thu = 1 WHERE id BETWEEN ? AND ?";

$eldc2friChecker1 = "UPDATE eldc2 SET checker_fri = 1 WHERE start_time = ? AND end_time = ?";
$eldc2friChecker2 = "UPDATE eldc2 SET checker_fri = 1 WHERE id BETWEEN ? AND ?";

$eldc2satChecker1 = "UPDATE eldc2 SET checker_sat = 1 WHERE start_time = ? AND end_time = ?";
$eldc2satChecker2 = "UPDATE eldc2 SET checker_sat = 1 WHERE id BETWEEN ? AND ?";

$eldc2sunChecker1 = "UPDATE eldc2 SET checker_sun = 1 WHERE start_time = ? AND end_time = ?";
$eldc2sunChecker2 = "UPDATE eldc2 SET checker_sun = 1 WHERE id BETWEEN ? AND ?";


//HEC 302   
$h302monChecker1 = "UPDATE hec302 SET checker_mon = 1 WHERE start_time = ? AND end_time = ?";
$h302monChecker2 = "UPDATE hec302 SET checker_mon = 1 WHERE id BETWEEN ? AND ?";

$h302tueChecker1 = "UPDATE hec302 SET checker_tue = 1 WHERE start_time = ? AND end_time = ?";
$h302tueChecker2 = "UPDATE hec302 SET checker_tue = 1 WHERE id BETWEEN ? AND ?";

$h302wedChecker1 = "UPDATE hec302 SET checker_wed = 1 WHERE start_time = ? AND end_time = ?";
$h302wedChecker2 = "UPDATE hec302 SET checker_wed = 1 WHERE id BETWEEN ? AND ?";

$h302thuChecker1 = "UPDATE hec302 SET checker_thu = 1 WHERE start_time = ? AND end_time = ?";
$h302thuChecker2 = "UPDATE hec302 SET checker_thu = 1 WHERE id BETWEEN ? AND ?";

$h302friChecker1 = "UPDATE hec302 SET checker_fri = 1 WHERE start_time = ? AND end_time = ?";
$h302friChecker2 = "UPDATE hec302 SET checker_fri = 1 WHERE id BETWEEN ? AND ?";

$h302satChecker1 = "UPDATE hec302 SET checker_sat = 1 WHERE start_time = ? AND end_time = ?";
$h302satChecker2 = "UPDATE hec302 SET checker_sat = 1 WHERE id BETWEEN ? AND ?";

$h302sunChecker1 = "UPDATE hec302 SET checker_sun = 1 WHERE start_time = ? AND end_time = ?";
$h302sunChecker2 = "UPDATE hec302 SET checker_sun = 1 WHERE id BETWEEN ? AND ?";


// PHYSICS LAB
$phymonChecker1 = "UPDATE phylab SET checker_mon = 1 WHERE start_time = ? AND end_time = ?";
$phymonChecker2 = "UPDATE phylab SET checker_mon = 1 WHERE id BETWEEN ? AND ?";

$phytueChecker1 = "UPDATE phylab SET checker_tue = 1 WHERE start_time = ? AND end_time = ?";
$phytueChecker2 = "UPDATE phylab SET checker_tue = 1 WHERE id BETWEEN ? AND ?";

$phywedChecker1 = "UPDATE phylab SET checker_wed = 1 WHERE start_time = ? AND end_time = ?";
$phywedChecker2 = "UPDATE phylab SET checker_wed = 1 WHERE id BETWEEN ? AND ?";

$phythuChecker1 = "UPDATE phylab SET checker_thu = 1 WHERE start_time = ? AND end_time = ?";
$phythuChecker2 = "UPDATE phylab SET checker_thu = 1 WHERE id BETWEEN ? AND ?";

$phyfriChecker1 = "UPDATE phylab SET checker_fri = 1 WHERE start_time = ? AND end_time = ?";
$phyfriChecker2 = "UPDATE phylab SET checker_fri = 1 WHERE id BETWEEN ? AND ?";

$physatChecker1 = "UPDATE phylab SET checker_sat = 1 WHERE start_time = ? AND end_time = ?";
$physatChecker2 = "UPDATE phylab SET checker_sat = 1 WHERE id BETWEEN ? AND ?";

$physunChecker1 = "UPDATE phylab SET checker_sun = 1 WHERE start_time = ? AND end_time = ?";
$physunChecker2 = "UPDATE phylab SET checker_sun = 1 WHERE id BETWEEN ? AND ?";

function selectTime($conn, $startResult, $endResult, $selected_sTime_id, $selected_eTime_id,  $selected_subject_id, $selected_lec_name, $selected_section_id, $selected_room_id, $selected_day_id, $firstchecker, $secondchecker){
    // Display the start time dropdown
    sTimeDropdown($startResult, $selected_sTime_id);
    echo "<br>";

    // Display the end time dropdown
    eTimeDropdown($endResult, $selected_eTime_id);
    echo "<br>";

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Check if the selected subject ID is one of the restricted IDs
        $restricted_subject_ids = [1, 2, 11, 20, 32];
        if (in_array($selected_subject_id, $restricted_subject_ids)) {
            echo "<div class='error_message'><p>Error: The selected subject is not allowed for scheduling. Please choose a different subject.</p></div>";
        } else {
            // Check if all required fields are filled out
            if ($selected_lec_name && $selected_section_id && $selected_subject_id && $selected_room_id && $selected_day_id && $selected_sTime_id && $selected_eTime_id) {
                // Insert data logic
                if (insertData($conn, $selected_lec_name, $selected_section_id, $selected_subject_id, $selected_room_id, $selected_day_id, $selected_sTime_id, $selected_eTime_id)) {
                    // Update the checker value in cecs501 based on the selected start and end time
                    $update_checker_sql = $firstchecker;
                    $update_checker_stmt = $conn->prepare($update_checker_sql);

                    if (!$update_checker_stmt) {
                        echo "<div class='error_message'>Error preparing statement: " . htmlspecialchars($conn->error) . "</div>";
                    } else {
                        // Bind parameters and execute the update query
                        $update_checker_stmt->bind_param("ss", $selected_sTime_id, $selected_eTime_id);

                        if ($update_checker_stmt->execute()) {
                            echo "<div class='success_message'><p>Schedule has been created successfully!</p></div>";
                        } else {
                            echo "<div class='error_message'>Error executing update query: " . htmlspecialchars($update_checker_stmt->error) . "</div>";
                        }

                        // Second update
                        $update_checker_second_sql = $secondchecker;
                        $update_checker_second_stmt = $conn->prepare($update_checker_second_sql);

                        if (!$update_checker_second_stmt) {
                            echo "<div class='error_message'>Error preparing second statement: " . htmlspecialchars($conn->error) . "</div>";
                        } else {
                            $update_checker_second_stmt->bind_param("ii", $selected_sTime_id, $selected_eTime_id);
                            
                            if ($update_checker_second_stmt->execute()) {
                                echo "<p></p>";
                            } else {
                                echo "<div class='error_message'>Error executing second update query: " . htmlspecialchars($update_checker_second_stmt->error) . "</div>";
                            }
                        }
                    }
                } else {
                    echo "<div class='error_message'><p>Error creating schedule. Please try again.</p></div>";
                }
            } else {
                echo "<div class='error_message'><p>Please fill in all fields before submitting.</p></div>";
            }
        }
    }

};

?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SmartFLO Homepage</title>
  <link rel="icon" href="SmartFLO%20Logo.png" type="image/png">
  <link rel="stylesheet" href="addloads.css">
</head>
<body>

<!--menu border-->
<div class = "homepage_border">
    <a href = "menu_second_sem.html">
    <img src = "addload_border.png"/> </a>
  </div>

  <!--sign-out button-->
  <div class="container_of_signout_button">
    <a href = "login.php">
    <img src="log-out_logo.png" style="width: 30px; height: 30px;"></a>
  
    <a href="login.php">Sign-out</a>
  </div>

  <div class="container_of_back_button">
    <a href = "menu_second_sem.html">
    <img src="back_logo.png" style="width: 30px; height: 30px;"></a>
  
    <a href="menu_second_sem.html">Back</a>
  </div>

  <!--borders-->
  <div class="gray_border">
  </div>

  <div class="title">
    <p>Smart Faculty Load Optimization and Schedule Management (SmartFLO)</p>
    <p>FOR AY 2024-2025</p>
  </div>

  <div class="info">
    <p>Excess Load Information</p>
  </div>


  <!--border for loads options-->
  <div class="menu_border"></div>


  <!--save button-->
  <div class="container_of_save_button">
    <a href = "login.php">
    <img src="save_logo.png" style="width: 30px; height: 30px;"></a>
  
    <a href="login.php">Save</a>  
  </div>

<form method="post" action="">
    <?php
    
    // Display the lecturer dropdown
    lecturerDropdown($lec_name_result, $selected_lec_name);
    echo "<br>";
    if ($selected_lec_name == 1){
        echo "<br><br>Please select a lecturer to continue.";
        return;
    }

    // count units
if (!empty($selected_lec_name)) {
    $count_units = "SELECT COUNT(name_id) AS lecturer_count FROM excess_load WHERE name_id = ?";  
    $checker_pos = "SELECT position_id FROM names where id = ?";

 // Get count
$stmt = $conn->prepare($count_units);
$stmt->bind_param("i", $selected_lec_name);  
$stmt->execute();
$stmt->bind_result($lecturer_count); 
$stmt->fetch();
$stmt->close(); 

// Get position
$stmt = $conn->prepare($checker_pos);
$stmt->bind_param("i", $selected_lec_name); 
$stmt->execute();
$stmt->bind_result($checkerpos); 
$stmt->fetch(); 
$stmt->close(); 
    
$lecturer_count = $lecturer_count *= 3;
  
//full time
    if ($checkerpos == 2) {
        if ($lecturer_count >= 9) {
        echo "<br><br>Lecturer Excess Units: $lecturer_count";
        echo "<br>Maximum Excess Load Reached!! ";
        return;
}
    else{
        sectionDropdown($lec_sections_result, $selected_section_id);
        echo "<br>";
        
            // Display the subject dropdown
        subjectDropdown($lec_subject_result, $selected_subject_id);
        echo "<br>";
            
            // Display the room dropdown
        roomDropdown($lec_room_result, $selected_room_id);
        echo "<br>";
        
        // CECS 
        if ($selected_room_id == 2) {
                // Display the day dropdown
                dayDropdown($lec_day_result, $selected_day_id);
                echo "<br>";
            
                    // MONDAY
                if ($selected_day_id == 2) {
                    selectTime($conn, $c501_mon_start_result, $c501_mon_end_result, $selected_sTime_id, $selected_eTime_id,  $selected_subject_id, $selected_lec_name, $selected_section_id, $selected_room_id, $selected_day_id, $c501monChecker1, $c501monChecker2);
                }
                   
                            
                //TUESDAY
                if ($selected_day_id == 3) {
                    selectTime($conn, $c501_tue_start_result, $c501_tue_end_result, $selected_sTime_id, $selected_eTime_id,  $selected_subject_id, $selected_lec_name, $selected_section_id, $selected_room_id, $selected_day_id, $c501tueChecker1, $c501tueChecker2);
                }
        
            //WEDNESDAY
                if ($selected_day_id == 4) {
                    selectTime($conn, $c501_wed_start_result, $c501_wed_end_result, $selected_sTime_id, $selected_eTime_id,  $selected_subject_id, $selected_lec_name, $selected_section_id, $selected_room_id, $selected_day_id, $c501wedChecker1, $c501wedChecker2);
        
                }  
            //THURSDAY
                if ($selected_day_id == 5) {
                    selectTime($conn, $c501_thu_start_result, $c501_thu_end_result, $selected_sTime_id, $selected_eTime_id,  $selected_subject_id, $selected_lec_name, $selected_section_id, $selected_room_id, $selected_day_id, $c501thuChecker1, $c501thuChecker2);
        
                }
            //FRIDAY
                if ($selected_day_id == 6) {
                    selectTime($conn, $c501_fri_start_result, $c501_fri_end_result, $selected_sTime_id, $selected_eTime_id,  $selected_subject_id, $selected_lec_name, $selected_section_id, $selected_room_id, $selected_day_id, $c501friChecker1, $c501friChecker2);
        
                }  
            //SATURDAY
                if ($selected_day_id == 7) {
                    selectTime($conn, $c501_sat_start_result, $c501_sat_end_result, $selected_sTime_id, $selected_eTime_id,  $selected_subject_id, $selected_lec_name, $selected_section_id, $selected_room_id, $selected_day_id, $c501satChecker1, $c501satChecker2);
        
                }
            //SUNDAY
                if ($selected_day_id == 8) {
                    selectTime($conn, $c501_sun_start_result, $c501_sun_end_result, $selected_sTime_id, $selected_eTime_id,  $selected_subject_id, $selected_lec_name, $selected_section_id, $selected_room_id, $selected_day_id, $c501sunChecker1, $c501sunChecker2);
        
                }
        }
            
        //CECS 502
        if($selected_room_id == 3){
            // Display the day dropdown
            dayDropdown($lec_day_result, $selected_day_id);
            echo "<br>";
        
            //MONDAY
            if ($selected_day_id == 2) {
                selectTime($conn, $c502_mon_start_result, $c502_mon_end_result, $selected_sTime_id, $selected_eTime_id,  $selected_subject_id, $selected_lec_name, $selected_section_id, $selected_room_id, $selected_day_id, $c502monChecker1, $c502monChecker2);
        
            }
        
            //TUESDAY
            if ($selected_day_id == 3) {
                selectTime($conn, $c502_tue_start_result, $c502_tue_end_result, $selected_sTime_id, $selected_eTime_id,  $selected_subject_id, $selected_lec_name, $selected_section_id, $selected_room_id, $selected_day_id, $c502tueChecker1, $c502tueChecker2);
        
            }
            //WEDNESDAY
            if ($selected_day_id == 4) {
                selectTime($conn, $c502_wed_start_result, $c502_wed_end_result, $selected_sTime_id, $selected_eTime_id,  $selected_subject_id, $selected_lec_name, $selected_section_id, $selected_room_id, $selected_day_id, $c502wedChecker1, $c502wedChecker2);
        
            }
        
            //THURSDAY
            if ($selected_day_id == 5) {
            selectTime($conn, $c502_thu_start_result, $c502_thu_end_result, $selected_sTime_id, $selected_eTime_id,  $selected_subject_id, $selected_lec_name, $selected_section_id, $selected_room_id, $selected_day_id, $c502thuChecker1, $c502thuChecker2);
        
            }
            //FRIDAY
            if ($selected_day_id == 6) {
                selectTime($conn, $c502_fri_start_result, $c502_fri_end_result, $selected_sTime_id, $selected_eTime_id,  $selected_subject_id, $selected_lec_name, $selected_section_id, $selected_room_id, $selected_day_id, $c502friChecker1, $c502friChecker2);
        
            }
            //SATURDAY
            if ($selected_day_id == 7) {
                selectTime($conn, $c502_sat_start_result, $c502_sat_end_result, $selected_sTime_id, $selected_eTime_id,  $selected_subject_id, $selected_lec_name, $selected_section_id, $selected_room_id, $selected_day_id, $c502satChecker1, $c502satChecker2);
        
            }
            //SUNDAY
            if ($selected_day_id == 8) {
                selectTime($conn, $c502_sun_start_result, $c502_sun_end_result, $selected_sTime_id, $selected_eTime_id,  $selected_subject_id, $selected_lec_name, $selected_section_id, $selected_room_id, $selected_day_id, $c502sunChecker1, $c502sunChecker2);
        
            }
        }
        
         //CECS 503
         if($selected_room_id == 4){
            // Display the day dropdown
            dayDropdown($lec_day_result, $selected_day_id);
            echo "<br>";
        
            //MONDAY
            if ($selected_day_id == 2) {
                selectTime($conn, $c503_mon_start_result, $c503_mon_end_result, $selected_sTime_id, $selected_eTime_id,  $selected_subject_id, $selected_lec_name, $selected_section_id, $selected_room_id, $selected_day_id, $c503monChecker1, $c503monChecker2);
        
            }
            //TUESDAY
            if ($selected_day_id == 3) {
                selectTime($conn, $c503_tue_start_result, $c503_tue_end_result, $selected_sTime_id, $selected_eTime_id,  $selected_subject_id, $selected_lec_name, $selected_section_id, $selected_room_id, $selected_day_id, $c503tueChecker1, $c503tueChecker2);
        
            }
                // WEDNESDAY
            if ($selected_day_id == 4) {
                selectTime($conn, $c503_wed_start_result, $c503_wed_end_result, $selected_sTime_id, $selected_eTime_id,  $selected_subject_id, $selected_lec_name, $selected_section_id, $selected_room_id, $selected_day_id, $c503wedChecker1, $c503wedChecker2);
        
            }
            //THURSDAY
            if ($selected_day_id == 5) {
                selectTime($conn, $c503_thu_start_result, $c503_thu_end_result, $selected_sTime_id, $selected_eTime_id,  $selected_subject_id, $selected_lec_name, $selected_section_id, $selected_room_id, $selected_day_id, $c503thuChecker1, $c503thuChecker2);
        
            }
            //FRIDAY  
            if ($selected_day_id == 6) {
                selectTime($conn, $c503_fri_start_result, $c503_fri_end_result, $selected_sTime_id, $selected_eTime_id,  $selected_subject_id, $selected_lec_name, $selected_section_id, $selected_room_id, $selected_day_id, $c503friChecker1, $c503friChecker2);
        
            }   
                
            // SATURDAY
            if ($selected_day_id == 7) {
                selectTime($conn, $c503_sat_start_result, $c503_sat_end_result, $selected_sTime_id, $selected_eTime_id,  $selected_subject_id, $selected_lec_name, $selected_section_id, $selected_room_id, $selected_day_id, $c503satChecker1, $c503satChecker2);
        
            }
            // SUNDAY
            if ($selected_day_id == 8) {
                selectTime($conn, $c503_sun_start_result, $c503_sun_end_result, $selected_sTime_id, $selected_eTime_id,  $selected_subject_id, $selected_lec_name, $selected_section_id, $selected_room_id, $selected_day_id, $c503sunChecker1, $c503sunChecker2);
        
            }
         }    
            
        // HEB 502
         if($selected_room_id == 5){
            // Display the day dropdown
            dayDropdown($lec_day_result, $selected_day_id);
            echo "<br>";
        
            //MONDAY
            if ($selected_day_id == 2) {
                selectTime($conn, $h502_mon_start_result, $h502_mon_end_result, $selected_sTime_id, $selected_eTime_id,  $selected_subject_id, $selected_lec_name, $selected_section_id, $selected_room_id, $selected_day_id, $h502monChecker1, $h502monChecker2);
        
            }
        
            //TUESDAY
            if ($selected_day_id == 3) {
                selectTime($conn, $h502_tue_start_result, $h502_tue_end_result, $selected_sTime_id, $selected_eTime_id,  $selected_subject_id, $selected_lec_name, $selected_section_id, $selected_room_id, $selected_day_id, $h502tueChecker1, $h502tueChecker2);
        
            }
        
            //WEDNESDAY
            if ($selected_day_id == 4) {
                selectTime($conn, $h502_wed_start_result, $h502_wed_end_result, $selected_sTime_id, $selected_eTime_id,  $selected_subject_id, $selected_lec_name, $selected_section_id, $selected_room_id, $selected_day_id, $h502wedChecker1, $h502wedChecker2);
        
            }
        
            // THURSDAY
            if ($selected_day_id == 5) {
                selectTime($conn, $h502_thu_start_result, $h502_thu_end_result, $selected_sTime_id, $selected_eTime_id,  $selected_subject_id, $selected_lec_name, $selected_section_id, $selected_room_id, $selected_day_id, $h502thuChecker1, $h502thuChecker2);
        
            }
        
            //FRIDAY
            if ($selected_day_id == 6) {
                selectTime($conn, $h502_fri_start_result, $h502_fri_end_result, $selected_sTime_id, $selected_eTime_id,  $selected_subject_id, $selected_lec_name, $selected_section_id, $selected_room_id, $selected_day_id, $h502friChecker1, $h502friChecker2);
        
            }
        
            //SATURDAY
            if ($selected_day_id == 7) {
                selectTime($conn, $h502_sat_start_result, $h502_sat_end_result, $selected_sTime_id, $selected_eTime_id,  $selected_subject_id, $selected_lec_name, $selected_section_id, $selected_room_id, $selected_day_id, $h502satChecker1, $h502satChecker2);
        
            }
        
            //SUNDAY
            if ($selected_day_id == 8) {
                selectTime($conn, $h502_sun_start_result, $h502_sun_end_result, $selected_sTime_id, $selected_eTime_id,  $selected_subject_id, $selected_lec_name, $selected_section_id, $selected_room_id, $selected_day_id, $h502sunChecker1, $h502sunChecker2);
        
            }
         }
        
        // ABB 101
        if($selected_room_id == 6){
            // Display the day dropdown
            dayDropdown($lec_day_result, $selected_day_id);
            echo "<br>";
        
            //MONDAY
            if ($selected_day_id == 2) {
                selectTime($conn, $a101_mon_start_result, $a101_mon_end_result, $selected_sTime_id, $selected_eTime_id,  $selected_subject_id, $selected_lec_name, $selected_section_id, $selected_room_id, $selected_day_id, $a101monChecker1, $a101monChecker2);
        
            }
        
                //TUESDAY
            if ($selected_day_id == 3) {
                selectTime($conn, $a101_tue_start_result, $a101_tue_end_result, $selected_sTime_id, $selected_eTime_id,  $selected_subject_id, $selected_lec_name, $selected_section_id, $selected_room_id, $selected_day_id, $a101tueChecker1, $a101tueChecker2);
        
            }
            //WEDNESDAY
            if ($selected_day_id == 4) {
                selectTime($conn, $a101_wed_start_result, $a101_wed_end_result, $selected_sTime_id, $selected_eTime_id,  $selected_subject_id, $selected_lec_name, $selected_section_id, $selected_room_id, $selected_day_id, $a101wedChecker1, $a101wedChecker2);
        
            }
        
            //THURSDAY
            if ($selected_day_id == 5) {
                selectTime($conn, $a101_thu_start_result, $a101_thu_end_result, $selected_sTime_id, $selected_eTime_id,  $selected_subject_id, $selected_lec_name, $selected_section_id, $selected_room_id, $selected_day_id, $a101thuChecker1, $a101thuChecker2);
        
            }
        
        
            // FRIDAY
            if ($selected_day_id == 6) {
                selectTime($conn, $a101_fri_start_result, $a101_fri_end_result, $selected_sTime_id, $selected_eTime_id,  $selected_subject_id, $selected_lec_name, $selected_section_id, $selected_room_id, $selected_day_id, $a101friChecker1, $a101friChecker2);
        
            }
            //SATURDAY
            if ($selected_day_id == 7) {
                selectTime($conn, $a101_sat_start_result, $a101_sat_end_result, $selected_sTime_id, $selected_eTime_id,  $selected_subject_id, $selected_lec_name, $selected_section_id, $selected_room_id, $selected_day_id, $a101satChecker1, $a101satChecker2);
        
            }
        
        
            // SUNDAY
            if ($selected_day_id == 8) {
                selectTime($conn, $a101_sun_start_result, $a101_sun_end_result, $selected_sTime_id, $selected_eTime_id,  $selected_subject_id, $selected_lec_name, $selected_section_id, $selected_room_id, $selected_day_id, $a101sunChecker1, $a101sunChecker2);
        
            }
        }
        
        // ABB 103
        if($selected_room_id == 7){
            // Display the day dropdown
            dayDropdown($lec_day_result, $selected_day_id);
            echo "<br>";
        
            //MONDAY
            if ($selected_day_id == 2) {
                selectTime($conn, $a103_mon_start_result, $a103_mon_end_result, $selected_sTime_id, $selected_eTime_id,  $selected_subject_id, $selected_lec_name, $selected_section_id, $selected_room_id, $selected_day_id, $a103monChecker1, $a103monChecker2);
        
            }
        
            //TUESDAY
            if ($selected_day_id == 3) {
                selectTime($conn, $a103_tue_start_result, $a103_tue_end_result, $selected_sTime_id, $selected_eTime_id,  $selected_subject_id, $selected_lec_name, $selected_section_id, $selected_room_id, $selected_day_id, $a103tueChecker1, $a103tueChecker2);
        
            }
        
            //WEDNESDAY
            if ($selected_day_id == 4) {
                selectTime($conn, $a103_wed_start_result, $a103_wed_end_result, $selected_sTime_id, $selected_eTime_id,  $selected_subject_id, $selected_lec_name, $selected_section_id, $selected_room_id, $selected_day_id, $a103wedChecker1, $a103wedChecker2);
        
            }
        
        
            //THURSDAY
            if ($selected_day_id == 5) {
                selectTime($conn, $a103_thu_start_result, $a103_thu_end_result, $selected_sTime_id, $selected_eTime_id,  $selected_subject_id, $selected_lec_name, $selected_section_id, $selected_room_id, $selected_day_id, $a103thuChecker1, $a103thuChecker2);
        
            }
        
        
            //FRIDAY
            if ($selected_day_id == 6) {
                selectTime($conn, $a103_fri_start_result, $a103_fri_end_result, $selected_sTime_id, $selected_eTime_id,  $selected_subject_id, $selected_lec_name, $selected_section_id, $selected_room_id, $selected_day_id, $a103friChecker1, $a103friChecker2);
        
            }
        
            //SATURDAY
            if ($selected_day_id == 7) {
                selectTime($conn, $a103_sat_start_result, $a103_sat_end_result, $selected_sTime_id, $selected_eTime_id,  $selected_subject_id, $selected_lec_name, $selected_section_id, $selected_room_id, $selected_day_id, $a103satChecker1, $a103satChecker2);
        
            }
        
            //SUNDAY
            if ($selected_day_id == 8) {
                selectTime($conn, $a103_sun_start_result, $a103_sun_end_result, $selected_sTime_id, $selected_eTime_id,  $selected_subject_id, $selected_lec_name, $selected_section_id, $selected_room_id, $selected_day_id, $a103sunChecker1, $a103sunChecker2);
        
            }
        }
        
        //LDC 304
        if($selected_room_id == 8){
            // Display the day dropdown
            dayDropdown($lec_day_result, $selected_day_id);
            echo "<br>";
        
            //MONDAY
            if ($selected_day_id == 2) {
                selectTime($conn, $l304_mon_start_result, $l304_mon_end_result, $selected_sTime_id, $selected_eTime_id,  $selected_subject_id, $selected_lec_name, $selected_section_id, $selected_room_id, $selected_day_id, $l304monChecker1, $l304monChecker2);
            }
        
        
            //TUESDAY
            if ($selected_day_id == 3) {
                selectTime($conn, $l304_tue_start_result, $l304_tue_end_result, $selected_sTime_id, $selected_eTime_id,  $selected_subject_id, $selected_lec_name, $selected_section_id, $selected_room_id, $selected_day_id, $l304tueChecker1, $l304tueChecker2);
            }
        
            //WEDNESDAY
            if ($selected_day_id == 4) {
                selectTime($conn, $l304_wed_start_result, $l304_wed_end_result, $selected_sTime_id, $selected_eTime_id,  $selected_subject_id, $selected_lec_name, $selected_section_id, $selected_room_id, $selected_day_id, $l304wedChecker1, $l304wedChecker2);
            }
        
            //THURSDAY
            if ($selected_day_id == 5) {
                selectTime($conn, $l304_thu_start_result, $l304_thu_end_result, $selected_sTime_id, $selected_eTime_id,  $selected_subject_id, $selected_lec_name, $selected_section_id, $selected_room_id, $selected_day_id, $l304thuChecker1, $l304thuChecker2);
            }
        
            //FRIDAY 
            if ($selected_day_id == 6) {
                selectTime($conn, $l304_fri_start_result, $l304_fri_end_result, $selected_sTime_id, $selected_eTime_id,  $selected_subject_id, $selected_lec_name, $selected_section_id, $selected_room_id, $selected_day_id, $l304friChecker1, $l304friChecker2);
        
            }
        
            //SATURDAY
            if ($selected_day_id == 7) {
                selectTime($conn, $l304_sat_start_result, $l304_sat_end_result, $selected_sTime_id, $selected_eTime_id,  $selected_subject_id, $selected_lec_name, $selected_section_id, $selected_room_id, $selected_day_id, $l304satChecker1, $l304satChecker2);
            }
        
            //SUNDAY
            if ($selected_day_id == 8) {
                selectTime($conn, $l304_sun_start_result, $l304_sun_end_result, $selected_sTime_id, $selected_eTime_id,  $selected_subject_id, $selected_lec_name, $selected_section_id, $selected_room_id, $selected_day_id, $l304sunChecker1, $l304sunChecker2);
            }
        }
        
        //LDC 305
        if($selected_room_id == 9){
            // Display the day dropdown
            dayDropdown($lec_day_result, $selected_day_id);
            echo "<br>";
        
            //MONDAY
            if ($selected_day_id == 2) {
                selectTime($conn, $l305_mon_start_result, $l305_mon_end_result, $selected_sTime_id, $selected_eTime_id,  $selected_subject_id, $selected_lec_name, $selected_section_id, $selected_room_id, $selected_day_id, $l305monChecker1, $l305monChecker2);
        
            }
        
        
            //TUESDAY
            if ($selected_day_id == 3) {
                selectTime($conn, $l305_tue_start_result, $l305_tue_end_result, $selected_sTime_id, $selected_eTime_id,  $selected_subject_id, $selected_lec_name, $selected_section_id, $selected_room_id, $selected_day_id, $l305tueChecker1, $l305tueChecker2);
            }
        
            //WEDNESDAY
            if ($selected_day_id == 4) {
                selectTime($conn, $l305_wed_start_result, $l305_wed_end_result, $selected_sTime_id, $selected_eTime_id,  $selected_subject_id, $selected_lec_name, $selected_section_id, $selected_room_id, $selected_day_id, $l305wedChecker1, $l305wedChecker2);
        
            }
        
            //THURSDAY
            if ($selected_day_id == 5) {
                selectTime($conn, $l305_thu_start_result, $l305_thu_end_result, $selected_sTime_id, $selected_eTime_id,  $selected_subject_id, $selected_lec_name, $selected_section_id, $selected_room_id, $selected_day_id, $l305thuChecker1, $l305thuChecker2);
        
            }
        
            //FRIDAY 
            if ($selected_day_id == 6) {
                selectTime($conn, $l305_fri_start_result, $l305_fri_end_result, $selected_sTime_id, $selected_eTime_id,  $selected_subject_id, $selected_lec_name, $selected_section_id, $selected_room_id, $selected_day_id, $l305friChecker1, $l305friChecker2);
        
            }
        
            //SATURDAY
            if ($selected_day_id == 7) {
                selectTime($conn, $l305_sat_start_result, $l305_sat_end_result, $selected_sTime_id, $selected_eTime_id,  $selected_subject_id, $selected_lec_name, $selected_section_id, $selected_room_id, $selected_day_id, $l305satChecker1, $l305satChecker2);
        
            }
        
            //SUNDAY
            if ($selected_day_id == 8) {
                selectTime($conn, $l305_sun_start_result, $l305_sun_end_result, $selected_sTime_id, $selected_eTime_id,  $selected_subject_id, $selected_lec_name, $selected_section_id, $selected_room_id, $selected_day_id, $l305sunChecker1, $l305sunChecker2);
        
            }
        }
        
        //ELDC2
        if($selected_room_id == 10){
            // Display the day dropdown
            dayDropdown($lec_day_result, $selected_day_id);
            echo "<br>";
        
            //MONDAY
            if ($selected_day_id == 2) {
                selectTime($conn, $eldc2_mon_start_result, $eldc2_mon_end_result, $selected_sTime_id, $selected_eTime_id,  $selected_subject_id, $selected_lec_name, $selected_section_id, $selected_room_id, $selected_day_id, $eldc2monChecker1, $eldc2monChecker2);
        
            }
        
        
            // TUESDAY
            if ($selected_day_id == 3) {
                selectTime($conn, $eldc2_tue_start_result, $eldc2_tue_end_result, $selected_sTime_id, $selected_eTime_id,  $selected_subject_id, $selected_lec_name, $selected_section_id, $selected_room_id, $selected_day_id, $eldc2tueChecker1, $eldc2tueChecker2);
            }
        
            //WEDNESDAY
            if ($selected_day_id == 4) {
                selectTime($conn, $eldc2_wed_start_result, $eldc2_wed_end_result, $selected_sTime_id, $selected_eTime_id,  $selected_subject_id, $selected_lec_name, $selected_section_id, $selected_room_id, $selected_day_id, $eldc2wedChecker1, $eldc2wedChecker2);
            }
        
            //THURSDAY
            if ($selected_day_id == 5) {
                selectTime($conn, $eldc2_thu_start_result, $eldc2_thu_end_result, $selected_sTime_id, $selected_eTime_id,  $selected_subject_id, $selected_lec_name, $selected_section_id, $selected_room_id, $selected_day_id, $eldc2thuChecker1, $eldc2thuChecker2);
            }
        
        
            //FRIDAY
            if ($selected_day_id == 6) {
                selectTime($conn, $eldc2_fri_start_result, $eldc2_fri_end_result, $selected_sTime_id, $selected_eTime_id,  $selected_subject_id, $selected_lec_name, $selected_section_id, $selected_room_id, $selected_day_id, $eldc2friChecker1, $eldc2friChecker2);
            }
        
            //SATURDAY
            if ($selected_day_id == 7) {
                selectTime($conn, $eldc2_sat_start_result, $eldc2_sat_end_result, $selected_sTime_id, $selected_eTime_id,  $selected_subject_id, $selected_lec_name, $selected_section_id, $selected_room_id, $selected_day_id, $eldc2satChecker1, $eldc2satChecker2);
            }
        
            //SUNDAY
            if ($selected_day_id == 8) {
                selectTime($conn, $eldc2_sun_start_result, $eldc2_sun_end_result, $selected_sTime_id, $selected_eTime_id,  $selected_subject_id, $selected_lec_name, $selected_section_id, $selected_room_id, $selected_day_id, $eldc2sunChecker1, $eldc2sunChecker2);
            }
        }
            
        //HEC 302
        if($selected_room_id == 11){
            // Display the day dropdown
            dayDropdown($lec_day_result, $selected_day_id);
            echo "<br>";
        
            //MONDAY
            if ($selected_day_id == 2) {
            // Display the start time dropdown using the correct result variable
            selectTime($conn, $h302_mon_start_result, $h302_mon_end_result, $selected_sTime_id, $selected_eTime_id,  $selected_subject_id, $selected_lec_name, $selected_section_id, $selected_room_id, $selected_day_id, $h302monChecker1, $h302monChecker2);
        
            }
            
            //TUESDAY
            if ($selected_day_id == 3) {
                selectTime($conn, $h302_tue_start_result, $h302_tue_end_result, $selected_sTime_id, $selected_eTime_id,  $selected_subject_id, $selected_lec_name, $selected_section_id, $selected_room_id, $selected_day_id, $h302tueChecker1, $h302tueChecker2);
        
            }
        
            //WEDNESDAY
            if ($selected_day_id == 4) {
                selectTime($conn, $h302_wed_start_result, $h302_wed_end_result, $selected_sTime_id, $selected_eTime_id,  $selected_subject_id, $selected_lec_name, $selected_section_id, $selected_room_id, $selected_day_id, $h302wedChecker1, $h302wedChecker2);
        
            }
        
            //THURSDAY
            if ($selected_day_id == 5) {
                selectTime($conn, $h302_thu_start_result, $h302_thu_end_result, $selected_sTime_id, $selected_eTime_id,  $selected_subject_id, $selected_lec_name, $selected_section_id, $selected_room_id, $selected_day_id, $h302thuChecker1, $h302thuChecker2);
        
            }
        
            //FRIDAY
            if ($selected_day_id == 6) {
                selectTime($conn, $h302_fri_start_result, $h302_fri_end_result, $selected_sTime_id, $selected_eTime_id,  $selected_subject_id, $selected_lec_name, $selected_section_id, $selected_room_id, $selected_day_id, $h302friChecker1, $h302friChecker2);
        
            }
        
            //SATURDAY
            if ($selected_day_id == 7) {
                selectTime($conn, $h302_sat_start_result, $h302_sat_end_result, $selected_sTime_id, $selected_eTime_id,  $selected_subject_id, $selected_lec_name, $selected_section_id, $selected_room_id, $selected_day_id, $h302satChecker1, $h302satChecker2);
        
            }
            //SUNDAY
            if ($selected_day_id == 8) {
                selectTime($conn, $h302_sun_start_result, $h302_sun_end_result, $selected_sTime_id, $selected_eTime_id,  $selected_subject_id, $selected_lec_name, $selected_section_id, $selected_room_id, $selected_day_id, $h302sunChecker1, $h302sunChecker2);
        
            }
        }   
                
        //PHYSICS LAB
        if($selected_room_id == 12){
            // Display the day dropdown
            dayDropdown($lec_day_result, $selected_day_id);
            echo "<br>";
        
            //MONDAY
            if ($selected_day_id == 2) {
                selectTime($conn, $phy_mon_start_result, $phy_mon_end_result, $selected_sTime_id, $selected_eTime_id,  $selected_subject_id, $selected_lec_name, $selected_section_id, $selected_room_id, $selected_day_id, $phymonChecker1, $phymonChecker2);
        
            }
            
        
            // TUESDAYc
            if ($selected_day_id == 3) {
                selectTime($conn, $phy_tue_start_result, $phy_tue_end_result, $selected_sTime_id, $selected_eTime_id,  $selected_subject_id, $selected_lec_name, $selected_section_id, $selected_room_id, $selected_day_id, $phytueChecker1, $phytueChecker2);
        
            }
        
        
            //WEDNESDAY
            if ($selected_day_id == 4) {
                selectTime($conn, $phy_wed_start_result, $phy_wed_end_result, $selected_sTime_id, $selected_eTime_id,  $selected_subject_id, $selected_lec_name, $selected_section_id, $selected_room_id, $selected_day_id, $phywedChecker1, $phywedChecker2);
        
            }
        
            //THURSDAY
            if ($selected_day_id == 5) {
                selectTime($conn, $phy_thu_start_result, $phy_thu_end_result, $selected_sTime_id, $selected_eTime_id,  $selected_subject_id, $selected_lec_name, $selected_section_id, $selected_room_id, $selected_day_id, $phythuChecker1, $phythuChecker2);
        
            }
        
        
            //FRIDAY
            if ($selected_day_id == 6) {
                selectTime($conn, $phy_fri_start_result, $phy_fri_end_result, $selected_sTime_id, $selected_eTime_id,  $selected_subject_id, $selected_lec_name, $selected_section_id, $selected_room_id, $selected_day_id, $phyfriChecker1, $phyfriChecker2);
        
            }
        
            //SATURDAY
            if ($selected_day_id == 7) {
                selectTime($conn, $phy_sat_start_result, $phy_sat_end_result, $selected_sTime_id, $selected_eTime_id,  $selected_subject_id, $selected_lec_name, $selected_section_id, $selected_room_id, $selected_day_id, $physatChecker1, $physatChecker2);
        
            }
        
            //SUNDAY
            if ($selected_day_id == 8) {
                selectTime($conn, $phy_sun_start_result, $phy_sun_end_result, $selected_sTime_id, $selected_eTime_id,  $selected_subject_id, $selected_lec_name, $selected_section_id, $selected_room_id, $selected_day_id, $physunChecker1, $physunChecker2);
        
            }
        }  
    }
    
} 
    
//part time
    if ($checkerpos == 3) {
        if ($lecturer_count >= 9) {
        echo "<br><br>Lecturer Excess Units: $lecturer_count";
        echo "<br>Maximum Load Reached! ";
        }
        else{
            sectionDropdown($lec_sections_result, $selected_section_id);
            echo "<br>";
            
                // Display the subject dropdown
            subjectDropdown($lec_subject_result, $selected_subject_id);
            echo "<br>";
                
                // Display the room dropdown
            roomDropdown($lec_room_result, $selected_room_id);
            echo "<br>";
            
            // CECS 
            if ($selected_room_id == 2) {
                    // Display the day dropdown
                    dayDropdown($lec_day_result, $selected_day_id);
                    echo "<br>";
                
                        // MONDAY
                    if ($selected_day_id == 2) {
                        selectTime($conn, $c501_mon_start_result, $c501_mon_end_result, $selected_sTime_id, $selected_eTime_id,  $selected_subject_id, $selected_lec_name, $selected_section_id, $selected_room_id, $selected_day_id, $c501monChecker1, $c501monChecker2);
                    }
                       
                                
                    //TUESDAY
                    if ($selected_day_id == 3) {
                        selectTime($conn, $c501_tue_start_result, $c501_tue_end_result, $selected_sTime_id, $selected_eTime_id,  $selected_subject_id, $selected_lec_name, $selected_section_id, $selected_room_id, $selected_day_id, $c501tueChecker1, $c501tueChecker2);
                    }
            
                //WEDNESDAY
                    if ($selected_day_id == 4) {
                        selectTime($conn, $c501_wed_start_result, $c501_wed_end_result, $selected_sTime_id, $selected_eTime_id,  $selected_subject_id, $selected_lec_name, $selected_section_id, $selected_room_id, $selected_day_id, $c501wedChecker1, $c501wedChecker2);
            
                    }  
                //THURSDAY
                    if ($selected_day_id == 5) {
                        selectTime($conn, $c501_thu_start_result, $c501_thu_end_result, $selected_sTime_id, $selected_eTime_id,  $selected_subject_id, $selected_lec_name, $selected_section_id, $selected_room_id, $selected_day_id, $c501thuChecker1, $c501thuChecker2);
            
                    }
                //FRIDAY
                    if ($selected_day_id == 6) {
                        selectTime($conn, $c501_fri_start_result, $c501_fri_end_result, $selected_sTime_id, $selected_eTime_id,  $selected_subject_id, $selected_lec_name, $selected_section_id, $selected_room_id, $selected_day_id, $c501friChecker1, $c501friChecker2);
            
                    }  
                //SATURDAY
                    if ($selected_day_id == 7) {
                        selectTime($conn, $c501_sat_start_result, $c501_sat_end_result, $selected_sTime_id, $selected_eTime_id,  $selected_subject_id, $selected_lec_name, $selected_section_id, $selected_room_id, $selected_day_id, $c501satChecker1, $c501satChecker2);
            
                    }
                //SUNDAY
                    if ($selected_day_id == 8) {
                        selectTime($conn, $c501_sun_start_result, $c501_sun_end_result, $selected_sTime_id, $selected_eTime_id,  $selected_subject_id, $selected_lec_name, $selected_section_id, $selected_room_id, $selected_day_id, $c501sunChecker1, $c501sunChecker2);
            
                    }
            }
                
            //CECS 502
            if($selected_room_id == 3){
                // Display the day dropdown
                dayDropdown($lec_day_result, $selected_day_id);
                echo "<br>";
            
                //MONDAY
                if ($selected_day_id == 2) {
                    selectTime($conn, $c502_mon_start_result, $c502_mon_end_result, $selected_sTime_id, $selected_eTime_id,  $selected_subject_id, $selected_lec_name, $selected_section_id, $selected_room_id, $selected_day_id, $c502monChecker1, $c502monChecker2);
            
                }
            
                //TUESDAY
                if ($selected_day_id == 3) {
                    selectTime($conn, $c502_tue_start_result, $c502_tue_end_result, $selected_sTime_id, $selected_eTime_id,  $selected_subject_id, $selected_lec_name, $selected_section_id, $selected_room_id, $selected_day_id, $c502tueChecker1, $c502tueChecker2);
            
                }
                //WEDNESDAY
                if ($selected_day_id == 4) {
                    selectTime($conn, $c502_wed_start_result, $c502_wed_end_result, $selected_sTime_id, $selected_eTime_id,  $selected_subject_id, $selected_lec_name, $selected_section_id, $selected_room_id, $selected_day_id, $c502wedChecker1, $c502wedChecker2);
            
                }
            
                //THURSDAY
                if ($selected_day_id == 5) {
                selectTime($conn, $c502_thu_start_result, $c502_thu_end_result, $selected_sTime_id, $selected_eTime_id,  $selected_subject_id, $selected_lec_name, $selected_section_id, $selected_room_id, $selected_day_id, $c502thuChecker1, $c502thuChecker2);
            
                }
                //FRIDAY
                if ($selected_day_id == 6) {
                    selectTime($conn, $c502_fri_start_result, $c502_fri_end_result, $selected_sTime_id, $selected_eTime_id,  $selected_subject_id, $selected_lec_name, $selected_section_id, $selected_room_id, $selected_day_id, $c502friChecker1, $c502friChecker2);
            
                }
                //SATURDAY
                if ($selected_day_id == 7) {
                    selectTime($conn, $c502_sat_start_result, $c502_sat_end_result, $selected_sTime_id, $selected_eTime_id,  $selected_subject_id, $selected_lec_name, $selected_section_id, $selected_room_id, $selected_day_id, $c502satChecker1, $c502satChecker2);
            
                }
                //SUNDAY
                if ($selected_day_id == 8) {
                    selectTime($conn, $c502_sun_start_result, $c502_sun_end_result, $selected_sTime_id, $selected_eTime_id,  $selected_subject_id, $selected_lec_name, $selected_section_id, $selected_room_id, $selected_day_id, $c502sunChecker1, $c502sunChecker2);
            
                }
            }
            
             //CECS 503
             if($selected_room_id == 4){
                // Display the day dropdown
                dayDropdown($lec_day_result, $selected_day_id);
                echo "<br>";
            
                //MONDAY
                if ($selected_day_id == 2) {
                    selectTime($conn, $c503_mon_start_result, $c503_mon_end_result, $selected_sTime_id, $selected_eTime_id,  $selected_subject_id, $selected_lec_name, $selected_section_id, $selected_room_id, $selected_day_id, $c503monChecker1, $c503monChecker2);
            
                }
                //TUESDAY
                if ($selected_day_id == 3) {
                    selectTime($conn, $c503_tue_start_result, $c503_tue_end_result, $selected_sTime_id, $selected_eTime_id,  $selected_subject_id, $selected_lec_name, $selected_section_id, $selected_room_id, $selected_day_id, $c503tueChecker1, $c503tueChecker2);
            
                }
                    // WEDNESDAY
                if ($selected_day_id == 4) {
                    selectTime($conn, $c503_wed_start_result, $c503_wed_end_result, $selected_sTime_id, $selected_eTime_id,  $selected_subject_id, $selected_lec_name, $selected_section_id, $selected_room_id, $selected_day_id, $c503wedChecker1, $c503wedChecker2);
            
                }
                //THURSDAY
                if ($selected_day_id == 5) {
                    selectTime($conn, $c503_thu_start_result, $c503_thu_end_result, $selected_sTime_id, $selected_eTime_id,  $selected_subject_id, $selected_lec_name, $selected_section_id, $selected_room_id, $selected_day_id, $c503thuChecker1, $c503thuChecker2);
            
                }
                //FRIDAY  
                if ($selected_day_id == 6) {
                    selectTime($conn, $c503_fri_start_result, $c503_fri_end_result, $selected_sTime_id, $selected_eTime_id,  $selected_subject_id, $selected_lec_name, $selected_section_id, $selected_room_id, $selected_day_id, $c503friChecker1, $c503friChecker2);
            
                }   
                    
                // SATURDAY
                if ($selected_day_id == 7) {
                    selectTime($conn, $c503_sat_start_result, $c503_sat_end_result, $selected_sTime_id, $selected_eTime_id,  $selected_subject_id, $selected_lec_name, $selected_section_id, $selected_room_id, $selected_day_id, $c503satChecker1, $c503satChecker2);
            
                }
                // SUNDAY
                if ($selected_day_id == 8) {
                    selectTime($conn, $c503_sun_start_result, $c503_sun_end_result, $selected_sTime_id, $selected_eTime_id,  $selected_subject_id, $selected_lec_name, $selected_section_id, $selected_room_id, $selected_day_id, $c503sunChecker1, $c503sunChecker2);
            
                }
             }    
                
            // HEB 502
             if($selected_room_id == 5){
                // Display the day dropdown
                dayDropdown($lec_day_result, $selected_day_id);
                echo "<br>";
            
                //MONDAY
                if ($selected_day_id == 2) {
                    selectTime($conn, $h502_mon_start_result, $h502_mon_end_result, $selected_sTime_id, $selected_eTime_id,  $selected_subject_id, $selected_lec_name, $selected_section_id, $selected_room_id, $selected_day_id, $h502monChecker1, $h502monChecker2);
            
                }
            
                //TUESDAY
                if ($selected_day_id == 3) {
                    selectTime($conn, $h502_tue_start_result, $h502_tue_end_result, $selected_sTime_id, $selected_eTime_id,  $selected_subject_id, $selected_lec_name, $selected_section_id, $selected_room_id, $selected_day_id, $h502tueChecker1, $h502tueChecker2);
            
                }
            
                //WEDNESDAY
                if ($selected_day_id == 4) {
                    selectTime($conn, $h502_wed_start_result, $h502_wed_end_result, $selected_sTime_id, $selected_eTime_id,  $selected_subject_id, $selected_lec_name, $selected_section_id, $selected_room_id, $selected_day_id, $h502wedChecker1, $h502wedChecker2);
            
                }
            
                // THURSDAY
                if ($selected_day_id == 5) {
                    selectTime($conn, $h502_thu_start_result, $h502_thu_end_result, $selected_sTime_id, $selected_eTime_id,  $selected_subject_id, $selected_lec_name, $selected_section_id, $selected_room_id, $selected_day_id, $h502thuChecker1, $h502thuChecker2);
            
                }
            
                //FRIDAY
                if ($selected_day_id == 6) {
                    selectTime($conn, $h502_fri_start_result, $h502_fri_end_result, $selected_sTime_id, $selected_eTime_id,  $selected_subject_id, $selected_lec_name, $selected_section_id, $selected_room_id, $selected_day_id, $h502friChecker1, $h502friChecker2);
            
                }
            
                //SATURDAY
                if ($selected_day_id == 7) {
                    selectTime($conn, $h502_sat_start_result, $h502_sat_end_result, $selected_sTime_id, $selected_eTime_id,  $selected_subject_id, $selected_lec_name, $selected_section_id, $selected_room_id, $selected_day_id, $h502satChecker1, $h502satChecker2);
            
                }
            
                //SUNDAY
                if ($selected_day_id == 8) {
                    selectTime($conn, $h502_sun_start_result, $h502_sun_end_result, $selected_sTime_id, $selected_eTime_id,  $selected_subject_id, $selected_lec_name, $selected_section_id, $selected_room_id, $selected_day_id, $h502sunChecker1, $h502sunChecker2);
            
                }
             }
            
            // ABB 101
            if($selected_room_id == 6){
                // Display the day dropdown
                dayDropdown($lec_day_result, $selected_day_id);
                echo "<br>";
            
                //MONDAY
                if ($selected_day_id == 2) {
                    selectTime($conn, $a101_mon_start_result, $a101_mon_end_result, $selected_sTime_id, $selected_eTime_id,  $selected_subject_id, $selected_lec_name, $selected_section_id, $selected_room_id, $selected_day_id, $a101monChecker1, $a101monChecker2);
            
                }
            
                    //TUESDAY
                if ($selected_day_id == 3) {
                    selectTime($conn, $a101_tue_start_result, $a101_tue_end_result, $selected_sTime_id, $selected_eTime_id,  $selected_subject_id, $selected_lec_name, $selected_section_id, $selected_room_id, $selected_day_id, $a101tueChecker1, $a101tueChecker2);
            
                }
                //WEDNESDAY
                if ($selected_day_id == 4) {
                    selectTime($conn, $a101_wed_start_result, $a101_wed_end_result, $selected_sTime_id, $selected_eTime_id,  $selected_subject_id, $selected_lec_name, $selected_section_id, $selected_room_id, $selected_day_id, $a101wedChecker1, $a101wedChecker2);
            
                }
            
                //THURSDAY
                if ($selected_day_id == 5) {
                    selectTime($conn, $a101_thu_start_result, $a101_thu_end_result, $selected_sTime_id, $selected_eTime_id,  $selected_subject_id, $selected_lec_name, $selected_section_id, $selected_room_id, $selected_day_id, $a101thuChecker1, $a101thuChecker2);
            
                }
            
            
                // FRIDAY
                if ($selected_day_id == 6) {
                    selectTime($conn, $a101_fri_start_result, $a101_fri_end_result, $selected_sTime_id, $selected_eTime_id,  $selected_subject_id, $selected_lec_name, $selected_section_id, $selected_room_id, $selected_day_id, $a101friChecker1, $a101friChecker2);
            
                }
                //SATURDAY
                if ($selected_day_id == 7) {
                    selectTime($conn, $a101_sat_start_result, $a101_sat_end_result, $selected_sTime_id, $selected_eTime_id,  $selected_subject_id, $selected_lec_name, $selected_section_id, $selected_room_id, $selected_day_id, $a101satChecker1, $a101satChecker2);
            
                }
            
            
                // SUNDAY
                if ($selected_day_id == 8) {
                    selectTime($conn, $a101_sun_start_result, $a101_sun_end_result, $selected_sTime_id, $selected_eTime_id,  $selected_subject_id, $selected_lec_name, $selected_section_id, $selected_room_id, $selected_day_id, $a101sunChecker1, $a101sunChecker2);
            
                }
            }
            
            // ABB 103
            if($selected_room_id == 7){
                // Display the day dropdown
                dayDropdown($lec_day_result, $selected_day_id);
                echo "<br>";
            
                //MONDAY
                if ($selected_day_id == 2) {
                    selectTime($conn, $a103_mon_start_result, $a103_mon_end_result, $selected_sTime_id, $selected_eTime_id,  $selected_subject_id, $selected_lec_name, $selected_section_id, $selected_room_id, $selected_day_id, $a103monChecker1, $a103monChecker2);
            
                }
            
                //TUESDAY
                if ($selected_day_id == 3) {
                    selectTime($conn, $a103_tue_start_result, $a103_tue_end_result, $selected_sTime_id, $selected_eTime_id,  $selected_subject_id, $selected_lec_name, $selected_section_id, $selected_room_id, $selected_day_id, $a103tueChecker1, $a103tueChecker2);
            
                }
            
                //WEDNESDAY
                if ($selected_day_id == 4) {
                    selectTime($conn, $a103_wed_start_result, $a103_wed_end_result, $selected_sTime_id, $selected_eTime_id,  $selected_subject_id, $selected_lec_name, $selected_section_id, $selected_room_id, $selected_day_id, $a103wedChecker1, $a103wedChecker2);
            
                }
            
            
                //THURSDAY
                if ($selected_day_id == 5) {
                    selectTime($conn, $a103_thu_start_result, $a103_thu_end_result, $selected_sTime_id, $selected_eTime_id,  $selected_subject_id, $selected_lec_name, $selected_section_id, $selected_room_id, $selected_day_id, $a103thuChecker1, $a103thuChecker2);
            
                }
            
            
                //FRIDAY
                if ($selected_day_id == 6) {
                    selectTime($conn, $a103_fri_start_result, $a103_fri_end_result, $selected_sTime_id, $selected_eTime_id,  $selected_subject_id, $selected_lec_name, $selected_section_id, $selected_room_id, $selected_day_id, $a103friChecker1, $a103friChecker2);
            
                }
            
                //SATURDAY
                if ($selected_day_id == 7) {
                    selectTime($conn, $a103_sat_start_result, $a103_sat_end_result, $selected_sTime_id, $selected_eTime_id,  $selected_subject_id, $selected_lec_name, $selected_section_id, $selected_room_id, $selected_day_id, $a103satChecker1, $a103satChecker2);
            
                }
            
                //SUNDAY
                if ($selected_day_id == 8) {
                    selectTime($conn, $a103_sun_start_result, $a103_sun_end_result, $selected_sTime_id, $selected_eTime_id,  $selected_subject_id, $selected_lec_name, $selected_section_id, $selected_room_id, $selected_day_id, $a103sunChecker1, $a103sunChecker2);
            
                }
            }
            
            //LDC 304
            if($selected_room_id == 8){
                // Display the day dropdown
                dayDropdown($lec_day_result, $selected_day_id);
                echo "<br>";
            
                //MONDAY
                if ($selected_day_id == 2) {
                    selectTime($conn, $l304_mon_start_result, $l304_mon_end_result, $selected_sTime_id, $selected_eTime_id,  $selected_subject_id, $selected_lec_name, $selected_section_id, $selected_room_id, $selected_day_id, $l304monChecker1, $l304monChecker2);
                }
            
            
                //TUESDAY
                if ($selected_day_id == 3) {
                    selectTime($conn, $l304_tue_start_result, $l304_tue_end_result, $selected_sTime_id, $selected_eTime_id,  $selected_subject_id, $selected_lec_name, $selected_section_id, $selected_room_id, $selected_day_id, $l304tueChecker1, $l304tueChecker2);
                }
            
                //WEDNESDAY
                if ($selected_day_id == 4) {
                    selectTime($conn, $l304_wed_start_result, $l304_wed_end_result, $selected_sTime_id, $selected_eTime_id,  $selected_subject_id, $selected_lec_name, $selected_section_id, $selected_room_id, $selected_day_id, $l304wedChecker1, $l304wedChecker2);
                }
            
                //THURSDAY
                if ($selected_day_id == 5) {
                    selectTime($conn, $l304_thu_start_result, $l304_thu_end_result, $selected_sTime_id, $selected_eTime_id,  $selected_subject_id, $selected_lec_name, $selected_section_id, $selected_room_id, $selected_day_id, $l304thuChecker1, $l304thuChecker2);
                }
            
                //FRIDAY 
                if ($selected_day_id == 6) {
                    selectTime($conn, $l304_fri_start_result, $l304_fri_end_result, $selected_sTime_id, $selected_eTime_id,  $selected_subject_id, $selected_lec_name, $selected_section_id, $selected_room_id, $selected_day_id, $l304friChecker1, $l304friChecker2);
            
                }
            
                //SATURDAY
                if ($selected_day_id == 7) {
                    selectTime($conn, $l304_sat_start_result, $l304_sat_end_result, $selected_sTime_id, $selected_eTime_id,  $selected_subject_id, $selected_lec_name, $selected_section_id, $selected_room_id, $selected_day_id, $l304satChecker1, $l304satChecker2);
                }
            
                //SUNDAY
                if ($selected_day_id == 8) {
                    selectTime($conn, $l304_sun_start_result, $l304_sun_end_result, $selected_sTime_id, $selected_eTime_id,  $selected_subject_id, $selected_lec_name, $selected_section_id, $selected_room_id, $selected_day_id, $l304sunChecker1, $l304sunChecker2);
                }
            }
            
            //LDC 305
            if($selected_room_id == 9){
                // Display the day dropdown
                dayDropdown($lec_day_result, $selected_day_id);
                echo "<br>";
            
                //MONDAY
                if ($selected_day_id == 2) {
                    selectTime($conn, $l305_mon_start_result, $l305_mon_end_result, $selected_sTime_id, $selected_eTime_id,  $selected_subject_id, $selected_lec_name, $selected_section_id, $selected_room_id, $selected_day_id, $l305monChecker1, $l305monChecker2);
            
                }
            
            
                //TUESDAY
                if ($selected_day_id == 3) {
                    selectTime($conn, $l305_tue_start_result, $l305_tue_end_result, $selected_sTime_id, $selected_eTime_id,  $selected_subject_id, $selected_lec_name, $selected_section_id, $selected_room_id, $selected_day_id, $l305tueChecker1, $l305tueChecker2);
                }
            
                //WEDNESDAY
                if ($selected_day_id == 4) {
                    selectTime($conn, $l305_wed_start_result, $l305_wed_end_result, $selected_sTime_id, $selected_eTime_id,  $selected_subject_id, $selected_lec_name, $selected_section_id, $selected_room_id, $selected_day_id, $l305wedChecker1, $l305wedChecker2);
            
                }
            
                //THURSDAY
                if ($selected_day_id == 5) {
                    selectTime($conn, $l305_thu_start_result, $l305_thu_end_result, $selected_sTime_id, $selected_eTime_id,  $selected_subject_id, $selected_lec_name, $selected_section_id, $selected_room_id, $selected_day_id, $l305thuChecker1, $l305thuChecker2);
            
                }
            
                //FRIDAY 
                if ($selected_day_id == 6) {
                    selectTime($conn, $l305_fri_start_result, $l305_fri_end_result, $selected_sTime_id, $selected_eTime_id,  $selected_subject_id, $selected_lec_name, $selected_section_id, $selected_room_id, $selected_day_id, $l305friChecker1, $l305friChecker2);
            
                }
            
                //SATURDAY
                if ($selected_day_id == 7) {
                    selectTime($conn, $l305_sat_start_result, $l305_sat_end_result, $selected_sTime_id, $selected_eTime_id,  $selected_subject_id, $selected_lec_name, $selected_section_id, $selected_room_id, $selected_day_id, $l305satChecker1, $l305satChecker2);
            
                }
            
                //SUNDAY
                if ($selected_day_id == 8) {
                    selectTime($conn, $l305_sun_start_result, $l305_sun_end_result, $selected_sTime_id, $selected_eTime_id,  $selected_subject_id, $selected_lec_name, $selected_section_id, $selected_room_id, $selected_day_id, $l305sunChecker1, $l305sunChecker2);
            
                }
            }
            
            //ELDC2
            if($selected_room_id == 10){
                // Display the day dropdown
                dayDropdown($lec_day_result, $selected_day_id);
                echo "<br>";
            
                //MONDAY
                if ($selected_day_id == 2) {
                    selectTime($conn, $eldc2_mon_start_result, $eldc2_mon_end_result, $selected_sTime_id, $selected_eTime_id,  $selected_subject_id, $selected_lec_name, $selected_section_id, $selected_room_id, $selected_day_id, $eldc2monChecker1, $eldc2monChecker2);
            
                }
            
            
                // TUESDAY
                if ($selected_day_id == 3) {
                    selectTime($conn, $eldc2_tue_start_result, $eldc2_tue_end_result, $selected_sTime_id, $selected_eTime_id,  $selected_subject_id, $selected_lec_name, $selected_section_id, $selected_room_id, $selected_day_id, $eldc2tueChecker1, $eldc2tueChecker2);
                }
            
                //WEDNESDAY
                if ($selected_day_id == 4) {
                    selectTime($conn, $eldc2_wed_start_result, $eldc2_wed_end_result, $selected_sTime_id, $selected_eTime_id,  $selected_subject_id, $selected_lec_name, $selected_section_id, $selected_room_id, $selected_day_id, $eldc2wedChecker1, $eldc2wedChecker2);
                }
            
                //THURSDAY
                if ($selected_day_id == 5) {
                    selectTime($conn, $eldc2_thu_start_result, $eldc2_thu_end_result, $selected_sTime_id, $selected_eTime_id,  $selected_subject_id, $selected_lec_name, $selected_section_id, $selected_room_id, $selected_day_id, $eldc2thuChecker1, $eldc2thuChecker2);
                }
            
            
                //FRIDAY
                if ($selected_day_id == 6) {
                    selectTime($conn, $eldc2_fri_start_result, $eldc2_fri_end_result, $selected_sTime_id, $selected_eTime_id,  $selected_subject_id, $selected_lec_name, $selected_section_id, $selected_room_id, $selected_day_id, $eldc2friChecker1, $eldc2friChecker2);
                }
            
                //SATURDAY
                if ($selected_day_id == 7) {
                    selectTime($conn, $eldc2_sat_start_result, $eldc2_sat_end_result, $selected_sTime_id, $selected_eTime_id,  $selected_subject_id, $selected_lec_name, $selected_section_id, $selected_room_id, $selected_day_id, $eldc2satChecker1, $eldc2satChecker2);
                }
            
                //SUNDAY
                if ($selected_day_id == 8) {
                    selectTime($conn, $eldc2_sun_start_result, $eldc2_sun_end_result, $selected_sTime_id, $selected_eTime_id,  $selected_subject_id, $selected_lec_name, $selected_section_id, $selected_room_id, $selected_day_id, $eldc2sunChecker1, $eldc2sunChecker2);
                }
            }
                
            //HEC 302
            if($selected_room_id == 11){
                // Display the day dropdown
                dayDropdown($lec_day_result, $selected_day_id);
                echo "<br>";
            
                //MONDAY
                if ($selected_day_id == 2) {
                // Display the start time dropdown using the correct result variable
                selectTime($conn, $h302_mon_start_result, $h302_mon_end_result, $selected_sTime_id, $selected_eTime_id,  $selected_subject_id, $selected_lec_name, $selected_section_id, $selected_room_id, $selected_day_id, $h302monChecker1, $h302monChecker2);
            
                }
                
                //TUESDAY
                if ($selected_day_id == 3) {
                    selectTime($conn, $h302_tue_start_result, $h302_tue_end_result, $selected_sTime_id, $selected_eTime_id,  $selected_subject_id, $selected_lec_name, $selected_section_id, $selected_room_id, $selected_day_id, $h302tueChecker1, $h302tueChecker2);
            
                }
            
                //WEDNESDAY
                if ($selected_day_id == 4) {
                    selectTime($conn, $h302_wed_start_result, $h302_wed_end_result, $selected_sTime_id, $selected_eTime_id,  $selected_subject_id, $selected_lec_name, $selected_section_id, $selected_room_id, $selected_day_id, $h302wedChecker1, $h302wedChecker2);
            
                }
            
                //THURSDAY
                if ($selected_day_id == 5) {
                    selectTime($conn, $h302_thu_start_result, $h302_thu_end_result, $selected_sTime_id, $selected_eTime_id,  $selected_subject_id, $selected_lec_name, $selected_section_id, $selected_room_id, $selected_day_id, $h302thuChecker1, $h302thuChecker2);
            
                }
            
                //FRIDAY
                if ($selected_day_id == 6) {
                    selectTime($conn, $h302_fri_start_result, $h302_fri_end_result, $selected_sTime_id, $selected_eTime_id,  $selected_subject_id, $selected_lec_name, $selected_section_id, $selected_room_id, $selected_day_id, $h302friChecker1, $h302friChecker2);
            
                }
            
                //SATURDAY
                if ($selected_day_id == 7) {
                    selectTime($conn, $h302_sat_start_result, $h302_sat_end_result, $selected_sTime_id, $selected_eTime_id,  $selected_subject_id, $selected_lec_name, $selected_section_id, $selected_room_id, $selected_day_id, $h302satChecker1, $h302satChecker2);
            
                }
                //SUNDAY
                if ($selected_day_id == 8) {
                    selectTime($conn, $h302_sun_start_result, $h302_sun_end_result, $selected_sTime_id, $selected_eTime_id,  $selected_subject_id, $selected_lec_name, $selected_section_id, $selected_room_id, $selected_day_id, $h302sunChecker1, $h302sunChecker2);
            
                }
            }   
                    
            //PHYSICS LAB
            if($selected_room_id == 12){
                // Display the day dropdown
                dayDropdown($lec_day_result, $selected_day_id);
                echo "<br>";
            
                //MONDAY
                if ($selected_day_id == 2) {
                    selectTime($conn, $phy_mon_start_result, $phy_mon_end_result, $selected_sTime_id, $selected_eTime_id,  $selected_subject_id, $selected_lec_name, $selected_section_id, $selected_room_id, $selected_day_id, $phymonChecker1, $phymonChecker2);
            
                }
                
            
                // TUESDAYc
                if ($selected_day_id == 3) {
                    selectTime($conn, $phy_tue_start_result, $phy_tue_end_result, $selected_sTime_id, $selected_eTime_id,  $selected_subject_id, $selected_lec_name, $selected_section_id, $selected_room_id, $selected_day_id, $phytueChecker1, $phytueChecker2);
            
                }
            
            
                //WEDNESDAY
                if ($selected_day_id == 4) {
                    selectTime($conn, $phy_wed_start_result, $phy_wed_end_result, $selected_sTime_id, $selected_eTime_id,  $selected_subject_id, $selected_lec_name, $selected_section_id, $selected_room_id, $selected_day_id, $phywedChecker1, $phywedChecker2);
            
                }
            
                //THURSDAY
                if ($selected_day_id == 5) {
                    selectTime($conn, $phy_thu_start_result, $phy_thu_end_result, $selected_sTime_id, $selected_eTime_id,  $selected_subject_id, $selected_lec_name, $selected_section_id, $selected_room_id, $selected_day_id, $phythuChecker1, $phythuChecker2);
            
                }
            
            
                //FRIDAY
                if ($selected_day_id == 6) {
                    selectTime($conn, $phy_fri_start_result, $phy_fri_end_result, $selected_sTime_id, $selected_eTime_id,  $selected_subject_id, $selected_lec_name, $selected_section_id, $selected_room_id, $selected_day_id, $phyfriChecker1, $phyfriChecker2);
            
                }
            
                //SATURDAY
                if ($selected_day_id == 7) {
                    selectTime($conn, $phy_sat_start_result, $phy_sat_end_result, $selected_sTime_id, $selected_eTime_id,  $selected_subject_id, $selected_lec_name, $selected_section_id, $selected_room_id, $selected_day_id, $physatChecker1, $physatChecker2);
            
                }
            
                //SUNDAY
                if ($selected_day_id == 8) {
                    selectTime($conn, $phy_sun_start_result, $phy_sun_end_result, $selected_sTime_id, $selected_eTime_id,  $selected_subject_id, $selected_lec_name, $selected_section_id, $selected_room_id, $selected_day_id, $physunChecker1, $physunChecker2);
            
                }
            }  

        }
    }
    
    //intern
    if ($checkerpos == 4) {
        if ($lecturer_count >= 3) {
        echo "<br><br>Lecturer Excess Units: $lecturer_count";
        echo "<br>Maximum Load Reached!";
        return;
        }

        else{
sectionDropdown($lec_sections_result, $selected_section_id);
echo "<br>";

    // Display the subject dropdown
subjectDropdown($lec_subject_result, $selected_subject_id);
echo "<br>";
    
    // Display the room dropdown
roomDropdown($lec_room_result, $selected_room_id);
echo "<br>";

// CECS 
if ($selected_room_id == 2) {
        // Display the day dropdown
        dayDropdown($lec_day_result, $selected_day_id);
        echo "<br>";
    
            // MONDAY
        if ($selected_day_id == 2) {
            selectTime($conn, $c501_mon_start_result, $c501_mon_end_result, $selected_sTime_id, $selected_eTime_id,  $selected_subject_id, $selected_lec_name, $selected_section_id, $selected_room_id, $selected_day_id, $c501monChecker1, $c501monChecker2);
        }
           
                    
        //TUESDAY
        if ($selected_day_id == 3) {
            selectTime($conn, $c501_tue_start_result, $c501_tue_end_result, $selected_sTime_id, $selected_eTime_id,  $selected_subject_id, $selected_lec_name, $selected_section_id, $selected_room_id, $selected_day_id, $c501tueChecker1, $c501tueChecker2);
        }

    //WEDNESDAY
        if ($selected_day_id == 4) {
            selectTime($conn, $c501_wed_start_result, $c501_wed_end_result, $selected_sTime_id, $selected_eTime_id,  $selected_subject_id, $selected_lec_name, $selected_section_id, $selected_room_id, $selected_day_id, $c501wedChecker1, $c501wedChecker2);

        }  
    //THURSDAY
        if ($selected_day_id == 5) {
            selectTime($conn, $c501_thu_start_result, $c501_thu_end_result, $selected_sTime_id, $selected_eTime_id,  $selected_subject_id, $selected_lec_name, $selected_section_id, $selected_room_id, $selected_day_id, $c501thuChecker1, $c501thuChecker2);

        }
    //FRIDAY
        if ($selected_day_id == 6) {
            selectTime($conn, $c501_fri_start_result, $c501_fri_end_result, $selected_sTime_id, $selected_eTime_id,  $selected_subject_id, $selected_lec_name, $selected_section_id, $selected_room_id, $selected_day_id, $c501friChecker1, $c501friChecker2);

        }  
    //SATURDAY
        if ($selected_day_id == 7) {
            selectTime($conn, $c501_sat_start_result, $c501_sat_end_result, $selected_sTime_id, $selected_eTime_id,  $selected_subject_id, $selected_lec_name, $selected_section_id, $selected_room_id, $selected_day_id, $c501satChecker1, $c501satChecker2);

        }
    //SUNDAY
        if ($selected_day_id == 8) {
            selectTime($conn, $c501_sun_start_result, $c501_sun_end_result, $selected_sTime_id, $selected_eTime_id,  $selected_subject_id, $selected_lec_name, $selected_section_id, $selected_room_id, $selected_day_id, $c501sunChecker1, $c501sunChecker2);

        }
}
    
//CECS 502
if($selected_room_id == 3){
    // Display the day dropdown
    dayDropdown($lec_day_result, $selected_day_id);
    echo "<br>";

    //MONDAY
    if ($selected_day_id == 2) {
        selectTime($conn, $c502_mon_start_result, $c502_mon_end_result, $selected_sTime_id, $selected_eTime_id,  $selected_subject_id, $selected_lec_name, $selected_section_id, $selected_room_id, $selected_day_id, $c502monChecker1, $c502monChecker2);

    }

    //TUESDAY
    if ($selected_day_id == 3) {
        selectTime($conn, $c502_tue_start_result, $c502_tue_end_result, $selected_sTime_id, $selected_eTime_id,  $selected_subject_id, $selected_lec_name, $selected_section_id, $selected_room_id, $selected_day_id, $c502tueChecker1, $c502tueChecker2);

    }
    //WEDNESDAY
    if ($selected_day_id == 4) {
        selectTime($conn, $c502_wed_start_result, $c502_wed_end_result, $selected_sTime_id, $selected_eTime_id,  $selected_subject_id, $selected_lec_name, $selected_section_id, $selected_room_id, $selected_day_id, $c502wedChecker1, $c502wedChecker2);

    }

    //THURSDAY
    if ($selected_day_id == 5) {
    selectTime($conn, $c502_thu_start_result, $c502_thu_end_result, $selected_sTime_id, $selected_eTime_id,  $selected_subject_id, $selected_lec_name, $selected_section_id, $selected_room_id, $selected_day_id, $c502thuChecker1, $c502thuChecker2);

    }
    //FRIDAY
    if ($selected_day_id == 6) {
        selectTime($conn, $c502_fri_start_result, $c502_fri_end_result, $selected_sTime_id, $selected_eTime_id,  $selected_subject_id, $selected_lec_name, $selected_section_id, $selected_room_id, $selected_day_id, $c502friChecker1, $c502friChecker2);

    }
    //SATURDAY
    if ($selected_day_id == 7) {
        selectTime($conn, $c502_sat_start_result, $c502_sat_end_result, $selected_sTime_id, $selected_eTime_id,  $selected_subject_id, $selected_lec_name, $selected_section_id, $selected_room_id, $selected_day_id, $c502satChecker1, $c502satChecker2);

    }
    //SUNDAY
    if ($selected_day_id == 8) {
        selectTime($conn, $c502_sun_start_result, $c502_sun_end_result, $selected_sTime_id, $selected_eTime_id,  $selected_subject_id, $selected_lec_name, $selected_section_id, $selected_room_id, $selected_day_id, $c502sunChecker1, $c502sunChecker2);

    }
}

 //CECS 503
 if($selected_room_id == 4){
    // Display the day dropdown
    dayDropdown($lec_day_result, $selected_day_id);
    echo "<br>";

    //MONDAY
    if ($selected_day_id == 2) {
        selectTime($conn, $c503_mon_start_result, $c503_mon_end_result, $selected_sTime_id, $selected_eTime_id,  $selected_subject_id, $selected_lec_name, $selected_section_id, $selected_room_id, $selected_day_id, $c503monChecker1, $c503monChecker2);

    }
    //TUESDAY
    if ($selected_day_id == 3) {
        selectTime($conn, $c503_tue_start_result, $c503_tue_end_result, $selected_sTime_id, $selected_eTime_id,  $selected_subject_id, $selected_lec_name, $selected_section_id, $selected_room_id, $selected_day_id, $c503tueChecker1, $c503tueChecker2);

    }
        // WEDNESDAY
    if ($selected_day_id == 4) {
        selectTime($conn, $c503_wed_start_result, $c503_wed_end_result, $selected_sTime_id, $selected_eTime_id,  $selected_subject_id, $selected_lec_name, $selected_section_id, $selected_room_id, $selected_day_id, $c503wedChecker1, $c503wedChecker2);

    }
    //THURSDAY
    if ($selected_day_id == 5) {
        selectTime($conn, $c503_thu_start_result, $c503_thu_end_result, $selected_sTime_id, $selected_eTime_id,  $selected_subject_id, $selected_lec_name, $selected_section_id, $selected_room_id, $selected_day_id, $c503thuChecker1, $c503thuChecker2);

    }
    //FRIDAY  
    if ($selected_day_id == 6) {
        selectTime($conn, $c503_fri_start_result, $c503_fri_end_result, $selected_sTime_id, $selected_eTime_id,  $selected_subject_id, $selected_lec_name, $selected_section_id, $selected_room_id, $selected_day_id, $c503friChecker1, $c503friChecker2);

    }   
        
    // SATURDAY
    if ($selected_day_id == 7) {
        selectTime($conn, $c503_sat_start_result, $c503_sat_end_result, $selected_sTime_id, $selected_eTime_id,  $selected_subject_id, $selected_lec_name, $selected_section_id, $selected_room_id, $selected_day_id, $c503satChecker1, $c503satChecker2);

    }
    // SUNDAY
    if ($selected_day_id == 8) {
        selectTime($conn, $c503_sun_start_result, $c503_sun_end_result, $selected_sTime_id, $selected_eTime_id,  $selected_subject_id, $selected_lec_name, $selected_section_id, $selected_room_id, $selected_day_id, $c503sunChecker1, $c503sunChecker2);

    }
 }    
    
// HEB 502
 if($selected_room_id == 5){
    // Display the day dropdown
    dayDropdown($lec_day_result, $selected_day_id);
    echo "<br>";

    //MONDAY
    if ($selected_day_id == 2) {
        selectTime($conn, $h502_mon_start_result, $h502_mon_end_result, $selected_sTime_id, $selected_eTime_id,  $selected_subject_id, $selected_lec_name, $selected_section_id, $selected_room_id, $selected_day_id, $h502monChecker1, $h502monChecker2);

    }

    //TUESDAY
    if ($selected_day_id == 3) {
        selectTime($conn, $h502_tue_start_result, $h502_tue_end_result, $selected_sTime_id, $selected_eTime_id,  $selected_subject_id, $selected_lec_name, $selected_section_id, $selected_room_id, $selected_day_id, $h502tueChecker1, $h502tueChecker2);

    }

    //WEDNESDAY
    if ($selected_day_id == 4) {
        selectTime($conn, $h502_wed_start_result, $h502_wed_end_result, $selected_sTime_id, $selected_eTime_id,  $selected_subject_id, $selected_lec_name, $selected_section_id, $selected_room_id, $selected_day_id, $h502wedChecker1, $h502wedChecker2);

    }

    // THURSDAY
    if ($selected_day_id == 5) {
        selectTime($conn, $h502_thu_start_result, $h502_thu_end_result, $selected_sTime_id, $selected_eTime_id,  $selected_subject_id, $selected_lec_name, $selected_section_id, $selected_room_id, $selected_day_id, $h502thuChecker1, $h502thuChecker2);

    }

    //FRIDAY
    if ($selected_day_id == 6) {
        selectTime($conn, $h502_fri_start_result, $h502_fri_end_result, $selected_sTime_id, $selected_eTime_id,  $selected_subject_id, $selected_lec_name, $selected_section_id, $selected_room_id, $selected_day_id, $h502friChecker1, $h502friChecker2);

    }

    //SATURDAY
    if ($selected_day_id == 7) {
        selectTime($conn, $h502_sat_start_result, $h502_sat_end_result, $selected_sTime_id, $selected_eTime_id,  $selected_subject_id, $selected_lec_name, $selected_section_id, $selected_room_id, $selected_day_id, $h502satChecker1, $h502satChecker2);

    }

    //SUNDAY
    if ($selected_day_id == 8) {
        selectTime($conn, $h502_sun_start_result, $h502_sun_end_result, $selected_sTime_id, $selected_eTime_id,  $selected_subject_id, $selected_lec_name, $selected_section_id, $selected_room_id, $selected_day_id, $h502sunChecker1, $h502sunChecker2);

    }
 }

// ABB 101
if($selected_room_id == 6){
    // Display the day dropdown
    dayDropdown($lec_day_result, $selected_day_id);
    echo "<br>";

    //MONDAY
    if ($selected_day_id == 2) {
        selectTime($conn, $a101_mon_start_result, $a101_mon_end_result, $selected_sTime_id, $selected_eTime_id,  $selected_subject_id, $selected_lec_name, $selected_section_id, $selected_room_id, $selected_day_id, $a101monChecker1, $a101monChecker2);

    }

        //TUESDAY
    if ($selected_day_id == 3) {
        selectTime($conn, $a101_tue_start_result, $a101_tue_end_result, $selected_sTime_id, $selected_eTime_id,  $selected_subject_id, $selected_lec_name, $selected_section_id, $selected_room_id, $selected_day_id, $a101tueChecker1, $a101tueChecker2);

    }
    //WEDNESDAY
    if ($selected_day_id == 4) {
        selectTime($conn, $a101_wed_start_result, $a101_wed_end_result, $selected_sTime_id, $selected_eTime_id,  $selected_subject_id, $selected_lec_name, $selected_section_id, $selected_room_id, $selected_day_id, $a101wedChecker1, $a101wedChecker2);

    }

    //THURSDAY
    if ($selected_day_id == 5) {
        selectTime($conn, $a101_thu_start_result, $a101_thu_end_result, $selected_sTime_id, $selected_eTime_id,  $selected_subject_id, $selected_lec_name, $selected_section_id, $selected_room_id, $selected_day_id, $a101thuChecker1, $a101thuChecker2);

    }


    // FRIDAY
    if ($selected_day_id == 6) {
        selectTime($conn, $a101_fri_start_result, $a101_fri_end_result, $selected_sTime_id, $selected_eTime_id,  $selected_subject_id, $selected_lec_name, $selected_section_id, $selected_room_id, $selected_day_id, $a101friChecker1, $a101friChecker2);

    }
    //SATURDAY
    if ($selected_day_id == 7) {
        selectTime($conn, $a101_sat_start_result, $a101_sat_end_result, $selected_sTime_id, $selected_eTime_id,  $selected_subject_id, $selected_lec_name, $selected_section_id, $selected_room_id, $selected_day_id, $a101satChecker1, $a101satChecker2);

    }


    // SUNDAY
    if ($selected_day_id == 8) {
        selectTime($conn, $a101_sun_start_result, $a101_sun_end_result, $selected_sTime_id, $selected_eTime_id,  $selected_subject_id, $selected_lec_name, $selected_section_id, $selected_room_id, $selected_day_id, $a101sunChecker1, $a101sunChecker2);

    }
}

// ABB 103
if($selected_room_id == 7){
    // Display the day dropdown
    dayDropdown($lec_day_result, $selected_day_id);
    echo "<br>";

    //MONDAY
    if ($selected_day_id == 2) {
        selectTime($conn, $a103_mon_start_result, $a103_mon_end_result, $selected_sTime_id, $selected_eTime_id,  $selected_subject_id, $selected_lec_name, $selected_section_id, $selected_room_id, $selected_day_id, $a103monChecker1, $a103monChecker2);

    }

    //TUESDAY
    if ($selected_day_id == 3) {
        selectTime($conn, $a103_tue_start_result, $a103_tue_end_result, $selected_sTime_id, $selected_eTime_id,  $selected_subject_id, $selected_lec_name, $selected_section_id, $selected_room_id, $selected_day_id, $a103tueChecker1, $a103tueChecker2);

    }

    //WEDNESDAY
    if ($selected_day_id == 4) {
        selectTime($conn, $a103_wed_start_result, $a103_wed_end_result, $selected_sTime_id, $selected_eTime_id,  $selected_subject_id, $selected_lec_name, $selected_section_id, $selected_room_id, $selected_day_id, $a103wedChecker1, $a103wedChecker2);

    }


    //THURSDAY
    if ($selected_day_id == 5) {
        selectTime($conn, $a103_thu_start_result, $a103_thu_end_result, $selected_sTime_id, $selected_eTime_id,  $selected_subject_id, $selected_lec_name, $selected_section_id, $selected_room_id, $selected_day_id, $a103thuChecker1, $a103thuChecker2);

    }


    //FRIDAY
    if ($selected_day_id == 6) {
        selectTime($conn, $a103_fri_start_result, $a103_fri_end_result, $selected_sTime_id, $selected_eTime_id,  $selected_subject_id, $selected_lec_name, $selected_section_id, $selected_room_id, $selected_day_id, $a103friChecker1, $a103friChecker2);

    }

    //SATURDAY
    if ($selected_day_id == 7) {
        selectTime($conn, $a103_sat_start_result, $a103_sat_end_result, $selected_sTime_id, $selected_eTime_id,  $selected_subject_id, $selected_lec_name, $selected_section_id, $selected_room_id, $selected_day_id, $a103satChecker1, $a103satChecker2);

    }

    //SUNDAY
    if ($selected_day_id == 8) {
        selectTime($conn, $a103_sun_start_result, $a103_sun_end_result, $selected_sTime_id, $selected_eTime_id,  $selected_subject_id, $selected_lec_name, $selected_section_id, $selected_room_id, $selected_day_id, $a103sunChecker1, $a103sunChecker2);

    }
}

//LDC 304
if($selected_room_id == 8){
    // Display the day dropdown
    dayDropdown($lec_day_result, $selected_day_id);
    echo "<br>";

    //MONDAY
    if ($selected_day_id == 2) {
        selectTime($conn, $l304_mon_start_result, $l304_mon_end_result, $selected_sTime_id, $selected_eTime_id,  $selected_subject_id, $selected_lec_name, $selected_section_id, $selected_room_id, $selected_day_id, $l304monChecker1, $l304monChecker2);
    }


    //TUESDAY
    if ($selected_day_id == 3) {
        selectTime($conn, $l304_tue_start_result, $l304_tue_end_result, $selected_sTime_id, $selected_eTime_id,  $selected_subject_id, $selected_lec_name, $selected_section_id, $selected_room_id, $selected_day_id, $l304tueChecker1, $l304tueChecker2);
    }

    //WEDNESDAY
    if ($selected_day_id == 4) {
        selectTime($conn, $l304_wed_start_result, $l304_wed_end_result, $selected_sTime_id, $selected_eTime_id,  $selected_subject_id, $selected_lec_name, $selected_section_id, $selected_room_id, $selected_day_id, $l304wedChecker1, $l304wedChecker2);
    }

    //THURSDAY
    if ($selected_day_id == 5) {
        selectTime($conn, $l304_thu_start_result, $l304_thu_end_result, $selected_sTime_id, $selected_eTime_id,  $selected_subject_id, $selected_lec_name, $selected_section_id, $selected_room_id, $selected_day_id, $l304thuChecker1, $l304thuChecker2);
    }

    //FRIDAY 
    if ($selected_day_id == 6) {
        selectTime($conn, $l304_fri_start_result, $l304_fri_end_result, $selected_sTime_id, $selected_eTime_id,  $selected_subject_id, $selected_lec_name, $selected_section_id, $selected_room_id, $selected_day_id, $l304friChecker1, $l304friChecker2);

    }

    //SATURDAY
    if ($selected_day_id == 7) {
        selectTime($conn, $l304_sat_start_result, $l304_sat_end_result, $selected_sTime_id, $selected_eTime_id,  $selected_subject_id, $selected_lec_name, $selected_section_id, $selected_room_id, $selected_day_id, $l304satChecker1, $l304satChecker2);
    }

    //SUNDAY
    if ($selected_day_id == 8) {
        selectTime($conn, $l304_sun_start_result, $l304_sun_end_result, $selected_sTime_id, $selected_eTime_id,  $selected_subject_id, $selected_lec_name, $selected_section_id, $selected_room_id, $selected_day_id, $l304sunChecker1, $l304sunChecker2);
    }
}

//LDC 305
if($selected_room_id == 9){
    // Display the day dropdown
    dayDropdown($lec_day_result, $selected_day_id);
    echo "<br>";

    //MONDAY
    if ($selected_day_id == 2) {
        selectTime($conn, $l305_mon_start_result, $l305_mon_end_result, $selected_sTime_id, $selected_eTime_id,  $selected_subject_id, $selected_lec_name, $selected_section_id, $selected_room_id, $selected_day_id, $l305monChecker1, $l305monChecker2);

    }


    //TUESDAY
    if ($selected_day_id == 3) {
        selectTime($conn, $l305_tue_start_result, $l305_tue_end_result, $selected_sTime_id, $selected_eTime_id,  $selected_subject_id, $selected_lec_name, $selected_section_id, $selected_room_id, $selected_day_id, $l305tueChecker1, $l305tueChecker2);
    }

    //WEDNESDAY
    if ($selected_day_id == 4) {
        selectTime($conn, $l305_wed_start_result, $l305_wed_end_result, $selected_sTime_id, $selected_eTime_id,  $selected_subject_id, $selected_lec_name, $selected_section_id, $selected_room_id, $selected_day_id, $l305wedChecker1, $l305wedChecker2);

    }

    //THURSDAY
    if ($selected_day_id == 5) {
        selectTime($conn, $l305_thu_start_result, $l305_thu_end_result, $selected_sTime_id, $selected_eTime_id,  $selected_subject_id, $selected_lec_name, $selected_section_id, $selected_room_id, $selected_day_id, $l305thuChecker1, $l305thuChecker2);

    }

    //FRIDAY 
    if ($selected_day_id == 6) {
        selectTime($conn, $l305_fri_start_result, $l305_fri_end_result, $selected_sTime_id, $selected_eTime_id,  $selected_subject_id, $selected_lec_name, $selected_section_id, $selected_room_id, $selected_day_id, $l305friChecker1, $l305friChecker2);

    }

    //SATURDAY
    if ($selected_day_id == 7) {
        selectTime($conn, $l305_sat_start_result, $l305_sat_end_result, $selected_sTime_id, $selected_eTime_id,  $selected_subject_id, $selected_lec_name, $selected_section_id, $selected_room_id, $selected_day_id, $l305satChecker1, $l305satChecker2);

    }

    //SUNDAY
    if ($selected_day_id == 8) {
        selectTime($conn, $l305_sun_start_result, $l305_sun_end_result, $selected_sTime_id, $selected_eTime_id,  $selected_subject_id, $selected_lec_name, $selected_section_id, $selected_room_id, $selected_day_id, $l305sunChecker1, $l305sunChecker2);

    }
}

//ELDC2
if($selected_room_id == 10){
    // Display the day dropdown
    dayDropdown($lec_day_result, $selected_day_id);
    echo "<br>";

    //MONDAY
    if ($selected_day_id == 2) {
        selectTime($conn, $eldc2_mon_start_result, $eldc2_mon_end_result, $selected_sTime_id, $selected_eTime_id,  $selected_subject_id, $selected_lec_name, $selected_section_id, $selected_room_id, $selected_day_id, $eldc2monChecker1, $eldc2monChecker2);

    }


    // TUESDAY
    if ($selected_day_id == 3) {
        selectTime($conn, $eldc2_tue_start_result, $eldc2_tue_end_result, $selected_sTime_id, $selected_eTime_id,  $selected_subject_id, $selected_lec_name, $selected_section_id, $selected_room_id, $selected_day_id, $eldc2tueChecker1, $eldc2tueChecker2);
    }

    //WEDNESDAY
    if ($selected_day_id == 4) {
        selectTime($conn, $eldc2_wed_start_result, $eldc2_wed_end_result, $selected_sTime_id, $selected_eTime_id,  $selected_subject_id, $selected_lec_name, $selected_section_id, $selected_room_id, $selected_day_id, $eldc2wedChecker1, $eldc2wedChecker2);
    }

    //THURSDAY
    if ($selected_day_id == 5) {
        selectTime($conn, $eldc2_thu_start_result, $eldc2_thu_end_result, $selected_sTime_id, $selected_eTime_id,  $selected_subject_id, $selected_lec_name, $selected_section_id, $selected_room_id, $selected_day_id, $eldc2thuChecker1, $eldc2thuChecker2);
    }


    //FRIDAY
    if ($selected_day_id == 6) {
        selectTime($conn, $eldc2_fri_start_result, $eldc2_fri_end_result, $selected_sTime_id, $selected_eTime_id,  $selected_subject_id, $selected_lec_name, $selected_section_id, $selected_room_id, $selected_day_id, $eldc2friChecker1, $eldc2friChecker2);
    }

    //SATURDAY
    if ($selected_day_id == 7) {
        selectTime($conn, $eldc2_sat_start_result, $eldc2_sat_end_result, $selected_sTime_id, $selected_eTime_id,  $selected_subject_id, $selected_lec_name, $selected_section_id, $selected_room_id, $selected_day_id, $eldc2satChecker1, $eldc2satChecker2);
    }

    //SUNDAY
    if ($selected_day_id == 8) {
        selectTime($conn, $eldc2_sun_start_result, $eldc2_sun_end_result, $selected_sTime_id, $selected_eTime_id,  $selected_subject_id, $selected_lec_name, $selected_section_id, $selected_room_id, $selected_day_id, $eldc2sunChecker1, $eldc2sunChecker2);
    }
}
    
//HEC 302
if($selected_room_id == 11){
    // Display the day dropdown
    dayDropdown($lec_day_result, $selected_day_id);
    echo "<br>";

    //MONDAY
    if ($selected_day_id == 2) {
    // Display the start time dropdown using the correct result variable
    selectTime($conn, $h302_mon_start_result, $h302_mon_end_result, $selected_sTime_id, $selected_eTime_id,  $selected_subject_id, $selected_lec_name, $selected_section_id, $selected_room_id, $selected_day_id, $h302monChecker1, $h302monChecker2);

    }
    
    //TUESDAY
    if ($selected_day_id == 3) {
        selectTime($conn, $h302_tue_start_result, $h302_tue_end_result, $selected_sTime_id, $selected_eTime_id,  $selected_subject_id, $selected_lec_name, $selected_section_id, $selected_room_id, $selected_day_id, $h302tueChecker1, $h302tueChecker2);

    }

    //WEDNESDAY
    if ($selected_day_id == 4) {
        selectTime($conn, $h302_wed_start_result, $h302_wed_end_result, $selected_sTime_id, $selected_eTime_id,  $selected_subject_id, $selected_lec_name, $selected_section_id, $selected_room_id, $selected_day_id, $h302wedChecker1, $h302wedChecker2);

    }

    //THURSDAY
    if ($selected_day_id == 5) {
        selectTime($conn, $h302_thu_start_result, $h302_thu_end_result, $selected_sTime_id, $selected_eTime_id,  $selected_subject_id, $selected_lec_name, $selected_section_id, $selected_room_id, $selected_day_id, $h302thuChecker1, $h302thuChecker2);

    }

    //FRIDAY
    if ($selected_day_id == 6) {
        selectTime($conn, $h302_fri_start_result, $h302_fri_end_result, $selected_sTime_id, $selected_eTime_id,  $selected_subject_id, $selected_lec_name, $selected_section_id, $selected_room_id, $selected_day_id, $h302friChecker1, $h302friChecker2);

    }

    //SATURDAY
    if ($selected_day_id == 7) {
        selectTime($conn, $h302_sat_start_result, $h302_sat_end_result, $selected_sTime_id, $selected_eTime_id,  $selected_subject_id, $selected_lec_name, $selected_section_id, $selected_room_id, $selected_day_id, $h302satChecker1, $h302satChecker2);

    }
    //SUNDAY
    if ($selected_day_id == 8) {
        selectTime($conn, $h302_sun_start_result, $h302_sun_end_result, $selected_sTime_id, $selected_eTime_id,  $selected_subject_id, $selected_lec_name, $selected_section_id, $selected_room_id, $selected_day_id, $h302sunChecker1, $h302sunChecker2);

    }
}   
        
//PHYSICS LAB
if($selected_room_id == 12){
    // Display the day dropdown
    dayDropdown($lec_day_result, $selected_day_id);
    echo "<br>";

    //MONDAY
    if ($selected_day_id == 2) {
        selectTime($conn, $phy_mon_start_result, $phy_mon_end_result, $selected_sTime_id, $selected_eTime_id,  $selected_subject_id, $selected_lec_name, $selected_section_id, $selected_room_id, $selected_day_id, $phymonChecker1, $phymonChecker2);
        
    }
    
    
    // TUESDAYc
    if ($selected_day_id == 3) {
        selectTime($conn, $phy_tue_start_result, $phy_tue_end_result, $selected_sTime_id, $selected_eTime_id,  $selected_subject_id, $selected_lec_name, $selected_section_id, $selected_room_id, $selected_day_id, $phytueChecker1, $phytueChecker2);

    }

    
    //WEDNESDAY
    if ($selected_day_id == 4) {
        selectTime($conn, $phy_wed_start_result, $phy_wed_end_result, $selected_sTime_id, $selected_eTime_id,  $selected_subject_id, $selected_lec_name, $selected_section_id, $selected_room_id, $selected_day_id, $phywedChecker1, $phywedChecker2);

    }
    
    //THURSDAY
    if ($selected_day_id == 5) {
        selectTime($conn, $phy_thu_start_result, $phy_thu_end_result, $selected_sTime_id, $selected_eTime_id,  $selected_subject_id, $selected_lec_name, $selected_section_id, $selected_room_id, $selected_day_id, $phythuChecker1, $phythuChecker2);

    }
    
    
    //FRIDAY
    if ($selected_day_id == 6) {
        selectTime($conn, $phy_fri_start_result, $phy_fri_end_result, $selected_sTime_id, $selected_eTime_id,  $selected_subject_id, $selected_lec_name, $selected_section_id, $selected_room_id, $selected_day_id, $phyfriChecker1, $phyfriChecker2);

    }
    
    //SATURDAY
    if ($selected_day_id == 7) {
        selectTime($conn, $phy_sat_start_result, $phy_sat_end_result, $selected_sTime_id, $selected_eTime_id,  $selected_subject_id, $selected_lec_name, $selected_section_id, $selected_room_id, $selected_day_id, $physatChecker1, $physatChecker2);
        
    }
    
    //SUNDAY
    if ($selected_day_id == 8) {
        selectTime($conn, $phy_sun_start_result, $phy_sun_end_result, $selected_sTime_id, $selected_eTime_id,  $selected_subject_id, $selected_lec_name, $selected_section_id, $selected_room_id, $selected_day_id, $physunChecker1, $physunChecker2);

    }
}  
}
}    
} 
?>
<!-- save button as submit -->
    <div class="container_of_save_button">
        <button type="submit" name="submit" style="background:none; border:none; cursor:pointer;">
            <img src="save_logo.png" style="width: 30px; height: 30px;">
        </button>
      
        <button type="submit" name="submit" style="background:none; border:none; cursor:pointer; color:inherit; font:inherit; text-decoration:none;">
            Save
        </button>
    </div>
</form>

<?php
    echo '<div class="error_message">';

// Close the connection
$conn->close();

echo '</div>';
?>

</body>
</html>