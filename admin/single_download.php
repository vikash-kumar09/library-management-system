<?php
include 'db.php';

$id = intval($_GET['student_id']);

header('Content-Type: text/csv');
header('Content-Disposition: attachment; filename="single_report.csv"');

$output = fopen("php://output", "w");

fputcsv($output, ['Student ID','Book Name','Author','Book No','Issue Date']);

$query = "SELECT * FROM issued_books WHERE student_id='$student_id'";
$result = mysqli_query($conn, $query);

while($row = mysqli_fetch_assoc($result)) {
    fputcsv($output, $row);
}

fclose($output);
exit;
?>