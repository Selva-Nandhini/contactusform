<?php
if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['message'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    $conn = mysqli_connect("localhost", "root", "", "contactus") or die("connection failed");
    $sql = "INSERT INTO users( name, email, phone, message) VALUES ('{$name}','{$email}','{$phone}','{$message}')";
    echo $sql;
    $result = mysqli_query($conn, $sql) or die('connection failed');

}



?>