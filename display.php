<?php
include 'connect.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>crud operation</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <button class="btn btn-primary my-5"><a href="user.php"class="text-light">add user</a>
    </button>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">sl no</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">address</th>
      <th scope="col">password</th>
      <th scope="col">gender</th>
      <th scope="col">operations</th>
    </tr>
  </thead>
  <tbody>
    <?php

$sql="select * from `crud`";
$result=mysqli_query($con,$sql);
if($result){
  
    while($row=mysqli_fetch_assoc($result))
    {
        $id=$row['id'];
        $name=$row['name'];
        $email=$row['email'];
        $address=$row['address'];
        $password=$row['password'];
        $gender=$row['gender'];
        echo '<tr>
      <th scope="row">'.$id.'</th>
      <td>'.$name.'</td>
      <td>'.$email.'</td>
      <td>'.$address.'</td>
      <td>'.$password.'</td>
        <td>'.$gender.'</td>
         <td>
         <button class="btn btn-primary"><a href="update.php? updateid='.$id.'"class="text-light">update</a></button>
         <button class="btn btn-primary"><a href="delete.php? deleteid='.$id.'"class="text-light">delete</a></button></td>
    </tr>';
    }
}



?>
  </tbody>
</table>
</body>
</html>