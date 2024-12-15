<?php
session_start();
include "connfirstsem.php";
require_once('fpdf.php'); // Include FPDF library

// Custom class to extend FPDF and override Footer()
class PDF extends FPDF {
    // Footer function is automatically called on every page
    function Footer() {
        $this->SetY(-15);  // Position 15mm from the bottom
        $this->SetFont('Arial', 'I', 12.5);  // Italic font, size 12.5
        $this->SetTextColor(255, 0, 0); // Red color for footer text
        $this->Cell(0, 10, 'Leading Innovations, Transforming Lives, Building the Nation', 0, 0, 'C'); // Centered footer
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['name'])) {
    $selected_lec_name = $_POST['name'];

    // Create a new PDF instance
    $pdf = new PDF();
    $pdf->AddPage();

    // Add Header
    $pdf->SetFont('Times', '', 10);
    $pdf->Image('bsu_logo.png', 8, 5, 40);
    $pdf->Image('cics_logo.png', 162, 5, 40);

    $pdf->SetFont('Times', 'B', 16);
    $pdf->Cell(0, 6, 'BATANGAS STATE UNIVERSITY', 0, 1, 'C');
    $pdf->SetFont('Arial', 'B', 12);
    $pdf->SetTextColor(255, 0, 0);
    $pdf->Cell(0, 6, 'The National Engineering University', 0, 1, 'C');
    $pdf->SetTextColor(0, 0, 0);
    $pdf->SetFont('Times', 'B', 12);
    $pdf->Cell(0, 6, 'Lipa Campus', 0, 1, 'C');
    $pdf->Ln(10);
    $pdf->SetFont('Arial', 'B', 12);
    $pdf->Cell(0, 6, 'SCHEDULE FOR FIRST SEMESTER', 0, 1, 'C');
    $pdf->Cell(0, 6, 'AY. 2024-2025', 0, 1, 'C');
    $pdf->Ln(10);

    if ($selected_lec_name === "All") {
        $pos_query = "
        SELECT n.id AS lecturer_id, n.name, p.position, de.desig
        FROM names n 
        JOIN position p ON n.position_id = p.id 
        JOIN designation de ON n.designation_id = de.id
        WHERE n.name = ?
    ";
    $stmt = $conn->prepare($pos_query);
    $stmt->bind_param("s", $selected_lec_name);  
    $stmt->execute();
    $stmt->bind_result($lecturer_id, $lecturer_name, $position, $designation); // Correct number of variables
    $stmt->fetch();
    $stmt->close();

    // Fetch total units
    $unit_count_query = "
        SELECT COUNT(name_id) AS unit_count 
        FROM lecturers 
        WHERE name_id = ?
    ";
    $stmt = $conn->prepare($unit_count_query);
    $stmt->bind_param("i", $lecturer_id);  
    $stmt->execute();
    $stmt->bind_result($unit_count);  
    $stmt->fetch();
    $stmt->close();

    $units = $unit_count * 3;

        // Fetch schedules for all lecturers
        $query = "
            SELECT n.name, p.position, s.subject_code, s.subject, sec.sections, r.rooms, d.day, st.start_time, et.end_time
            FROM lecturers l
            LEFT JOIN names n ON l.name_id = n.id
            LEFT JOIN position p ON n.position_id = p.id
            LEFT JOIN subjects s ON l.subject_id = s.id
            LEFT JOIN sections sec ON l.section_id = sec.id
            LEFT JOIN rooms r ON l.room_id = r.id
            LEFT JOIN day d ON l.day_id = d.id
            LEFT JOIN time_slots st ON l.startTime_id = st.id
            LEFT JOIN time_slots et ON l.endTime_id = et.id
            ORDER BY n.name, d.id, sec.id, st.id
        ";
        $result = $conn->query($query);

        if ($result->num_rows > 0) {
            $current_lecturer = '';
            while ($row = $result->fetch_assoc()) {
                if ($row['name'] !== $current_lecturer) {
                    // Add lecturer's name as a section header
                    if ($current_lecturer !== '') {
                        $pdf->Ln(10); // Space before next lecturer
                    }
                    $current_lecturer = $row['name'];
                    $pdf->SetFont('Times', 'B', 12);
                    $pdf->Cell(0, 6, "Lecturer: " . $current_lecturer, 0, 1, 'L');
                    $pdf->SetFont('Times', '', 10);
                    $pdf->Cell(0, 6, "Position: " . $row['position'], 0, 1, 'L');
                    $pdf->Ln(5);

                    // Add table header
                    $pdf->SetFont('Times', 'B', 10);
                    $pdf->SetFillColor(240, 240, 240);
                    $pdf->Cell(20, 10, 'Section', 1, 0, 'C', 1);
                    $pdf->Cell(25, 10, 'Subject Code', 1, 0, 'C', 1);
                    $pdf->Cell(60, 10, 'Subject', 1, 0, 'C', 1);
                    $pdf->Cell(20, 10, 'Room', 1, 0, 'C', 1);
                    $pdf->Cell(20, 10, 'Day', 1, 0, 'C', 1);
                    $pdf->Cell(25, 10, 'Start Time', 1, 0, 'C', 1);
                    $pdf->Cell(25, 10, 'End Time', 1, 1, 'C', 1);
                }

                // Add table rows
                $pdf->SetFont('Times', '', 9);
                $pdf->Cell(20, 10, $row['sections'], 1, 0, 'C');
                $pdf->Cell(25, 10, $row['subject_code'], 1, 0, 'C');
                $pdf->Cell(60, 10, $row['subject'], 1, 0, 'C');
                $pdf->Cell(20, 10, $row['rooms'], 1, 0, 'C');
                $pdf->Cell(20, 10, $row['day'], 1, 0, 'C');
                $pdf->Cell(25, 10, $row['start_time'], 1, 0, 'C');
                $pdf->Cell(25, 10, $row['end_time'], 1, 1, 'C');
            }
        } else {
            $pdf->Write(0, "No schedules available.", '', 0, 'L', true, 0, false, false, 0);
        }
    } else {



        $pos_query = "
        SELECT n.id AS lecturer_id, n.name, p.position, de.desig
        FROM names n 
        JOIN position p ON n.position_id = p.id 
        JOIN designation de ON n.designation_id = de.id
        WHERE n.name = ?
    ";
    $stmt = $conn->prepare($pos_query);
    $stmt->bind_param("s", $selected_lec_name);  
    $stmt->execute();
    $stmt->bind_result($lecturer_id, $lecturer_name, $position, $designation); // Correct number of variables
    $stmt->fetch();
    $stmt->close();

    // Fetch total units
    $unit_count_query = "
        SELECT COUNT(name_id) AS unit_count 
        FROM lecturers 
        WHERE name_id = ?
    ";
    $stmt = $conn->prepare($unit_count_query);
    $stmt->bind_param("i", $lecturer_id);  
    $stmt->execute();
    $stmt->bind_result($unit_count);  
    $stmt->fetch();
    $stmt->close();

    $units = $unit_count * 3;

    // Fetch schedule details
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
        ORDER BY d.id, sec.id, st.id
    ";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("s", $selected_lec_name); // Use the correct variable and datatype
    $stmt->execute();
    $result = $stmt->get_result();


  // Lecturer's Details
  $pdf->SetFont('Times', '', 12);
  $pdf->Cell(95, 6, "Lecturer: " . $lecturer_name, 0, 0, 'L');
  $pdf->Cell(0, 6, "Date: " . date('F d, Y'), 0, 1, 'R');
  $pdf->Cell(95, 6, "Position: " . $position, 0, 0, 'L');
  $pdf->Cell(0, 6, "Total Load: " . $units . " units", 0, 1, 'R');
  $pdf->Ln(10);

  // Add Table Header
  $pdf->SetFont('Times', 'B', 10);
  $pdf->SetFillColor(240, 240, 240);
  $pdf->Cell(20, 10, 'Section', 1, 0, 'C', 1);
  $pdf->Cell(25, 10, 'Subject Code', 1, 0, 'C', 1);
  $pdf->Cell(60, 10, 'Subject', 1, 0, 'C', 1);
  $pdf->Cell(20, 10, 'Room', 1, 0, 'C', 1);
  $pdf->Cell(20, 10, 'Day', 1, 0, 'C', 1);
  $pdf->Cell(25, 10, 'Start Time', 1, 0, 'C', 1);
  $pdf->Cell(25, 10, 'End Time', 1, 1, 'C', 1);

  // Populate Table Rows
  $pdf->SetFont('Times', '', 9);
  while ($row = $result->fetch_assoc()) {
      $pdf->Cell(20, 10, $row['sections'], 1, 0, 'C');
      $pdf->Cell(25, 10, $row['subject_code'], 1, 0, 'C');
      $pdf->Cell(60, 10, $row['subject'], 1, 0, 'C');
      $pdf->Cell(20, 10, $row['rooms'], 1, 0, 'C');
      $pdf->Cell(20, 10, $row['day'], 1, 0, 'C');
      $pdf->Cell(25, 10, $row['start_time'], 1, 0, 'C');
      $pdf->Cell(25, 10, $row['end_time'], 1, 1, 'C');
  }
    }
    $pdf->Ln(0);  // Add space between table content and signatories

        // Move the Y position to where the signatories will start (just above the footer)
        $pdf->SetY(230);  // Position 40mm from the bottom (adjust based on your content)

        $pdf->SetFont('Times', 'B', 12);  // Set font for lecturer
        $pdf->Cell(0, 6, $selected_lec_name, 0, 1, 'L');
        $pdf->SetFont('Times', '', 12);
        $pdf->Cell(0, 6, 'Lecturer', 0, 1, 'L');  // Lecturer name from the POST data

        // Program Chairperson
        $pdf->Ln(20);  // Add space
        $pdf->SetFont('Times', 'B', 12);  // Set font for program chairperson
        $pdf->Cell(95, 6, 'Mr. DIONECES O. ALIMOREN', 0, 0, 'L');  // Program Chairperson's name
        $pdf->SetFont('Times', 'B', 12);
        $pdf->Cell(0, 6, 'Dr. RYNDEL V. AMORADO', 0, 1, 'L');  // Dean's name

        // Titles for Program Chairperson and Dean
        $pdf->SetFont('Times', '', 12); 
        $pdf->Cell(95, 6, 'Program Chairperson, CICS', 0, 0, 'L');  // Program Chairperson's title
        $pdf->Cell(0, 6, 'Dean, CICS', 0, 1, 'L');  // Dean's title
    // Output the PDF
    $pdf->Output('schedule.pdf', 'I');
    exit;
} else {
    echo "No lecturer selected.";
}

$conn->close();
?>
