<?php
include "connect.php"; // include connnect database
if (isset($_POST['submit'])) {

    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $image_name = $_FILES['image']['name'];
    
    $tmp_name = $_FILES['image']['tmp_name'];
    move_uploaded_file($tmp_name, "uploads/". $image_name);

    // print_r($file);
    // $image_name = $_FILES['image']['name'];
    // $tmp_name   = $_FILES['image']['tmp_name'];
    // $path = "uploads/" . $image_name;
    // move_uploaded_file($tmp_name, $path);
                                                    //   , `image`
                                                    // , '$image_name'
    $sql_insert = "INSERT INTO `students`
                        (`name`, `gender`, `email`, `pwd`, `image`)
                        VALUES 
                        ('$name', '$gender', '$email', '$password', '$image_name')
                        ";

    $result_insert = $conn->query($sql_insert); // execute query
    // mysqli_query($conn, $sql_insert);

    // if ($result_insert == true) {
    //     echo "<script>alert('Insert Successfully!!!')</script>";
    // }
    header('location: main.php');
}




