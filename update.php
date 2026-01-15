<?php
include "connect.php";

$id = $_GET['id'];
if(isset($_POST['submit'])){
    $u_name = $_POST['name'];
    $u_gender = $_POST['gender'];
    $u_email = $_POST['email'];
    $u_pwd = $_POST['password'];

    $sql_update_data = "UPDATE students SET
                name='$u_name', gender='$u_gender', email='$u_email', pwd='$u_pwd'
                WHERE id=$id";
    $conn->query($sql_update_data);

    header('location: main.php');
}   


$data = mysqli_fetch_assoc($conn->query("SELECT * FROM students where id = $id"));
?>

<form action="" method="post">
    <input type="text" name="name" placeholder="Enter name" value="<?= $data['name'] ?>">
    <input type="text" name="gender" placeholder="Enter gender" value="<?= $data['gender'] ?>">
    <input type="email" name="email" placeholder="Enter email" value="<?= $data['email'] ?>">
    <input type="password" name="password" placeholder="Enter password" value="<?= $data['pwd'] ?>"> 
    <button type="submit" name="submit">Submit</button>
</form>