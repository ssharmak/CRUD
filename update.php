<?php
include 'connect.php';
$id=$_GET['updateid'];
$sql="select *from `crud` where id=$id";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);

$name=$row['name'];
$email=$row['email'];
$address=$row['address'];
$password=$row['password'];
$gender=$row['gender'];


if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $address=$_POST['address'];
    $password=$_POST['password'];
    $gender=$_POST['gender'];

    $sql="update `crud` set id=$id, name='$name',email='$email',address='$address',password='$password',gender='$gender' where id=$id";
    $result=mysqli_query($con,$sql);
    if($result){
        //echo "updated successfully";
        header('location:display.php');
    }
    else{
        die(mysqli_error($con));
    }
}
?>
















<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" >

    <title>crud  operation</title>
  </head>
  <body>
   <div class="container my-5">
   <form method="post">
  <div class="form-group">
    <label>Name</label>
    <input type="text" class="form-control" placeholder="enter your name" name="name" autocomplete="off" value=<?php echo $name;?>>

</div>

<form method="post">
  <div class="form-group">
    <label>email</label>
    <input type="email" class="form-control" placeholder="enter your email" name="email" autocomplete="off" value=<?php echo $email;?>>

</div>
<form method="post">
  <div class="form-group">
    <label>address</label>
    <input type="text" class="form-control" placeholder="enter your address" name="address" autocomplete="off" value=<?php echo $address;?>>

</div>

<form method="post">
  <div class="form-group">
    <label>password</label>
    <input type="password" class="form-control" placeholder="enter your password" name="password" autocomplete="off" value=<?php echo $password;?>>

</div>

<form method="post">
  <div class="form-group">
    <label>gender</label>
    <input type="text" class="form-control" placeholder="enter your gender" name="gender" autocomplete="off" value=<?php echo $gender;?>>

</div>

  <button type="submit" class="btn btn-primary" name="submit">update</button>
</form>

  </body>
</html>