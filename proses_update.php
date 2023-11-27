<?php 
include 'config.php';
 
$id = $_POST['id'];
$username = $_POST['username'];
$email = $_POST['email'];
$password = md5($_POST['password']); 
mysqli_query($conn,"update tb_user set username='$username', email='$email', password='$password' where id='$id'");
 

header("location:dashboard.php");
 
?>