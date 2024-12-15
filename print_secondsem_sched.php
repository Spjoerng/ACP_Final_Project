<?php
session_start();
include "connsecondsem.php";
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
    ";

    $stmt = $conn->prepare($query);
    $stmt->bind_param("s", $selected_lec_name);

    if ($stmt->execute()) {
        $result = $stmt->get_result();

        // Create a new PDF instance from the custom class
        $pdf = new PDF();
        $pdf->AddPage();

        // Set the font to Times New Roman for all content
        $pdf->SetFont('Times', '', 10); // Set default font to Times New Roman, normal size 10

        // Add Header with University Info (Smaller font for the header)
        // Add the header information with different font sizes for each line
        $pdf->Image('bsu_logo.png', 8, 5, 40);
        $pdf->Image('cics_logo.png', 162, 5, 40); 

        // First line with font size 12
        $pdf->SetFont('Times', 'B', 12); // Set font size 12 for the first line
        $pdf->Cell(0, 6, 'Republic of the Philippines', 0, 1, 'C');  // Centered text

        // Second line with font size 16
        $pdf->SetFont('Times', 'B', 16); // Set font size 16 for the second line
        $pdf->Cell(0, 6, 'BATANGAS STATE UNIVERSITY', 0, 1, 'C');

        // Third line with font size 12
        $pdf->SetFont('Arial', 'B', 12); // Set font size 12 for the line
        $pdf->SetTextColor(255, 0, 0); // Set text color to red
        $pdf->Cell(0, 6, 'The National Engineering University', 0, 1, 'C');
        $pdf->SetTextColor(0, 0, 0); // Reset text color to black

        // Fourth line with font size 12
        $pdf->SetFont('Times', 'B', 12); // Set font size 12 for the fourth line
        $pdf->Cell(0, 6, 'Lipa Campus', 0, 1, 'C');

        // Fifth line with font size 10
        $pdf->SetFont('Times', 'B', 10); // Set font size 10 for the fifth line
        $pdf->Cell(0, 6, 'A. Tanco Drive, Brgy. Marawoy, Lipa, Batangas, Philippines 4217', 0, 1, 'C');

        // Sixth line with font size 10
        $pdf->SetFont('Times', '', 10); // Set font size 10 for the sixth line
        $pdf->Cell(0, 6, 'Tel Nos.: (+63 43) 980-0385; 980-0387; 980-0392 to 94 loc. 3130', 0, 1, 'C');

        // Seventh line with font size 10
        $pdf->SetFont('Times', '', 10); // Set font size 10 for the seventh line
        $pdf->Cell(0, 6, 'E-mail Address: cics.lipa@g.batstate-u.edu.ph | Website Address: http://www.batstate-u.edu.ph', 0, 1, 'C');

        $pdf->SetLineWidth(0.7); // Set the line width (increase the value for thicker lines)

        // Draw a straight line under the text
        $x1 = 0; // Starting X position of the line
        $x2 = 500; // Ending X position of the line (adjust as needed)
        $y = $pdf->GetY(); // Get the current Y position after the last cell
        $pdf->Line($x1, $y, $x2, $y); // Draw the line (horizontal line)

        // Add space after the header
        $pdf->Ln(1);  // Reduced space after the header

        $pdf->SetFont('Times', 'B', 12); // Set font size 12
        $pdf->Cell(0, 6, 'College of Informatics and Computing Sciences', 0, 1);
        $pdf->Ln(10); 

        // Center "SCHEDULE FOR FIRST SEMESTER"
        $pdf->SetFont('Arial', 'B', 12); // Set font size 12
        $pdf->Cell(0, 6, 'SCHEDULE FOR SECOND SEMESTER', 0, 1, 'C');
        $pdf->SetFont('Times', 'B', 12); // Set font size 12 for the fourth line
        $pdf->Cell(0, 6, 'AY. 2024-2025', 0, 1, 'C');

        $pdf->Ln(10);  // Reduced space after the header

        // Add Lecturer's Name and Date
        $pdf->SetFont('Times', '', 12); // Use normal font for subsequent text

        // Lecturer's Name on the left
        $pdf->Cell(95, 6, "Lecturer: " . $selected_lec_name, 0, 0, 'L');

        // Date on the right
        $current_date = date('F d, Y'); // Format the current date
        $pdf->Cell(0, 6, "Date: " . $current_date, 0, 1, 'R'); // Align to the right

        $pdf->Cell(95, 6, "Position: ", 0, 0, 'L');

        $pdf->Ln(10);  // Add space between this line and the table

        // Add Table Header
        $pdf->SetFont('Times', 'B', 10);  // Bold font for headers
        $pdf->SetFillColor(240, 240, 240); // Light gray background
        $pdf->SetTextColor(0, 0, 0); // Black text color
        $pdf->SetDrawColor(0, 0, 0); // Black border color
        $pdf->SetLineWidth(0.3);

        // Add Table Headers (Column Titles)
        $pdf->Cell(20, 10, 'Section', 1, 0, 'C', 1);
        $pdf->Cell(25, 10, 'Subject Code', 1, 0, 'C', 1);
        $pdf->Cell(60, 10, 'Subject', 1, 0, 'C', 1);
        $pdf->Cell(20, 10, 'Room', 1, 0, 'C', 1);
        $pdf->Cell(20, 10, 'Day', 1, 0, 'C', 1);
        $pdf->Cell(25, 10, 'Start Time', 1, 0, 'C', 1);
        $pdf->Cell(25, 10, 'End Time', 1, 1, 'C', 1); // Newline after header row

        // Reset font for table rows
        $pdf->SetFont('Times', '', 9); // Normal font size for data
        $pdf->SetTextColor(0, 0, 0); // Black text color

        // Add Table Rows
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $pdf->Cell(20, 10, $row['sections'], 1, 0, 'C');
                $pdf->Cell(25, 10, $row['subject_code'], 1, 0, 'C');
                $pdf->Cell(60, 10, $row['subject'], 1, 0, 'C');
                $pdf->Cell(20, 10, $row['rooms'], 1, 0, 'C');
                $pdf->Cell(20, 10, $row['day'], 1, 0, 'C');
                $pdf->Cell(25, 10, $row['start_time'], 1, 0, 'C');
                $pdf->Cell(25, 10, $row['end_time'], 1, 1, 'C');
            }
        } else {
            $pdf->Write(0, "No schedule available for this lecturer.", '', 0, 'L', true, 0, false, false, 0);
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

        // Output PDF
        $pdf->Output('schedule.pdf', 'I'); // Display PDF in browser
        exit;
    } else {
        echo "Error executing query: " . $stmt->error;
    }

    $stmt->close();
} else {
    echo "No lecturer selected.";
}

$conn->close();
?>
