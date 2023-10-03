<?php
session_start();
header('Content-Type: text/html; charset=utf-8');
include("./../../db/connection.php");
include("./../../db/functions.php");

if (isset($_POST['submit'])) {

    $username = $_SESSION['user_id'];
    $message = $_POST['message'];
    echo $message;
    $query = "INSERT INTO `chat`( `username`, `chat`) VALUES ('$username','$message')";
    $result = mysqli_query($con, $query);
    if (!$result) {
        echo mysqli_error($con);
    }

    header('location: ./backend.php');
}

if (isset($_POST['clear'])) {
    $query = "Truncate table chat";
    $result = mysqli_query($con, $query);
    if (!$result) {
        echo mysqli_error($con);
    }
    header('location: ./backend.php');
}
