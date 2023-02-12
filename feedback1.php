<?php 
session_start();
require_once ('process/dbh.php');

if( isset($_POST['submit'])){
    $name = $_POST['employeename'];
    $q1 = $_POST['q1'];
    $q2 = $_POST['q2'];
    $q3 = $_POST['q3'];
    $q4 = $_POST['q4'];
    $q5 = $_POST['q5'];
    $q6 = $_POST['q6'];
    $q7 = $_POST['q7'];
    $q8 = $_POST['q8'];
    $reviews = $_POST['reviews'];

    
    $query = "INSERT INTO feedback (name,q1,q2,q3,q4,q5,q6,q7,q8,remarks) VALUES ('$name','$q1','$q2','$q3','$q4','$q5','$q6','$q7','$q8','$reviews')";
    $query_run = mysqli_query($conn, $query);

    if($query_run){
        // $_SESSION['status'] = "Inserted Successfully";
        header("Location: eloginwel.php");
        
    }
    else{
        // $_SESSION['status'] = "Inserted Successfully";
        header("Location: eloginwel.php"); 
    }
}
?>