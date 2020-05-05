<?php
session_start();
if($_SESSION['email']==true){

}
else{
    header('location:admin_login.php');
    
}
$page='catagory';
include('include/header.php');
?>
<div style=" width: 30% ; margin-left: 20%; margin-top: 10%">
<form action="">
<h1>Add Catagories</h1>
<hr>
  <div class="form-group">
    <label for="email">Category:</label>
    <input type="text" class="form-control" placeholder="Enter email" id="email">
  </div>
  <div class="form-group">
  <label for="comment">Description:</label>
  <textarea class="form-control" rows="5" id="comment"></textarea>
</div>
  <div class="form-group form-check">
    <label class="form-check-label">
      <input class="form-check-input" type="checkbox"> Remember me
    </label>
  </div>
  <input type="submit" class="btn btn-primary" value="Add Catagory">
</form>
</div>