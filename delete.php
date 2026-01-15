<?php
    include "connect.php";

    $id = $_GET['id'];
    // $id = 9
    $delete_sql = "DELETE FROM `students` WHERE id = $id";// $id = 9
    $conn->query($delete_sql);
    header('location: main.php');
    
?>