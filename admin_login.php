<?php
// in this page we will create an admin login page if admin is authanticate than it is login
// otherwise it is redircct to annother file or refused to login
?>
<?php
// in this file we are starting session and destory it into logout file
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style/admin_login.css">
</head>
<body>
<div class="container">
<form action="" method="POST">
<h3>Admin Login</h3>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" name="password" id="exampleInputPassword1">
  </div>
 
  <button type="submit" class="btn btn-primary" name="submit">LogIn</button>
</form>

</div>
</body>
</html>
<?php
include('db/connection.php');
if(isset($_POST['submit'])){
    $email=$_POST['email'];
    $password=$_POST['password'];
    $q=mysqli_query($con,"select * from admin_login where email='$email' AND password='$password'");
    if($q){
        if(mysqli_num_rows($q)>0){
            $_SESSION['email']=$email;
            header('location:home.php');
        }
        else{
            echo "<script>alert('Invalid Credential,Please Try Again')</script>";
        }
    }
}
?>