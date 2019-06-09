<?php

include("db_connection.php");

if (isset($_POST['addRecord'])) {
    
    if (isset($_POST['last_name']) && isset($_POST['first_name']) && isset($_POST['first']) && isset($_POST['second']) && isset($_POST['third']) && isset($_POST['fourth']) && isset($_POST['final'])) {
        
        // get values 
        $last_name  = $_POST['last_name'];
        $first_name = $_POST['first_name'];
        $first      = $_POST['first'];
        $second     = $_POST['second'];
        $third      = $_POST['third'];
        $fourth     = $_POST['fourth'];
        $finalGrade = $_POST['final'];
        
        $query = "INSERT INTO students(Lastname, Firstname, first, second, third, fourth, Final) VALUES ('$last_name', '$first_name', '$first', '$second', '$third', '$fourth', '$finalGrade')";
        if (!$result = mysqli_query($db, $query)) {
            exit(mysqli_error());
        }
        header('location: ../admin.php');
    }
}



if (isset($_POST['updateUser'])) {
    // check request
    // get values
    $id         = $_POST['id'];
    $last_name  = $_POST['last_name'];
    $first_name = $_POST['first_name'];
    $updfirst   = $_POST['updfirst'];
    $updsecond  = $_POST['updsecond'];
    $updthird   = $_POST['updthird'];
    $updfourth  = $_POST['updfourth'];
    $updfinal   = $_POST['updfinal'];
    
    // Updaste User details
    $query = "UPDATE students SET Lastname = '$last_name', Firstname = '$first_name', first = '$updfirst', second = '$updsecond', third = '$updthird', fourth = '$updfourth', Final = '$updfinal' WHERE id = '$id'";
    if (!$result = mysqli_query($db, $query)) {
        exit(mysqli_error());
    }
    header('location: ../admin.php');
}

?>