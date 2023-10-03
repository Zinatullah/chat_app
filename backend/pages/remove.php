<?php
session_start();
header('Content-Type: text/html; charset=utf-8');
include("./../../db/connection.php");
include("./../../db/functions.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $username = $_SESSION['user_id'];
    $query = "DELETE FROM `chat` WHERE id = $id";
    $result = mysqli_query($con, $query);
    if(!$result){
        echo mysqli_error($con);
    }

    header('location: ./backend.php');
}