<?php
session_start();
include("db.php");

$user_id = $_SESSION['user_id'];
$book_id = $_GET['book_id'];

// prevent duplicate
$check = mysqli_query($conn,"SELECT * FROM book_request 
WHERE user_id='$user_id' AND book_id='$book_id'");

if(mysqli_num_rows($check) == 0){

    mysqli_query($conn,"INSERT INTO book_request(user_id,book_id,status)
    VALUES('$user_id','$book_id','pending')");

    header("Location: books.php");
}else{
    echo "Already Requested";
}
?>