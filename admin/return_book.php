<?php
include 'db.php';

$id = intval($_GET['student_id']);

// current date
$return_date = date("Y-m-d");

// update query
$query = "UPDATE issuee_books 
          SET return_date='$return_date' 
          WHERE student_id='$student_id'";

if(mysqli_query($conn, $query)) {
    echo "Book Returned Successfully";
    header("refresh:1; url=admin_dashboard.php");
} else {
    echo "Error: " . mysqli_error($conn);
}
?>