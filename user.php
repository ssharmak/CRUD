<?php
include 'connect.php';
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $address=$_POST['address'];
    $password=$_POST['password'];
    $gender=$_POST['gender'];

    $sql="insert into `crud`(name,email,address,password,gender) values('$name','$email','$address','$password','$gender')";
    $result=mysqli_query($con,$sql);
    if($result){
        //echo "data inserted successfully";
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
    <input type="text" class="form-control" placeholder="enter your name" name="name" autocomplete="off">

</div>

<form method="post">
  <div class="form-group">
    <label>email</label>
    <input type="email" class="form-control" placeholder="enter your email" name="email" autocomplete="off">

</div>
<form method="post">
  <div class="form-group">
    <label>address</label>
    <input type="text" class="form-control" placeholder="enter your address" name="address" autocomplete="off">

</div>

<form method="post">
  <div class="form-group">
    <label>password</label>
    <input type="password" class="form-control" placeholder="enter your password" name="password" autocomplete="off">

</div>

<form method="post">
  <div class="form-group">
    <label>gender</label>
    <input type="text" class="form-control" placeholder="enter your gender" name="gender" autocomplete="off">

</div>

  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>

  </body>
</html>