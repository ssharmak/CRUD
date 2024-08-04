<?php
session_start();
include 'connect.php'; // Assuming this file contains your database connection

if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    // To prevent SQL injection, use prepared statements instead of directly injecting variables
    $sql = "SELECT * FROM `crud` WHERE email='$email' AND password='$password'";
    $result = mysqli_query($con, $sql);
    if($result){
        $row = mysqli_fetch_assoc($result);
        if($row){
            // Login successful
            $_SESSION['user_id'] = $row['id']; // Assuming 'id' is your user ID column
            header('Location: user.php');
            exit();
        } else {
            // Login failed
            echo "Invalid email or password.";
        }
    } else {
        die(mysqli_error($con));
    }
}
?>
