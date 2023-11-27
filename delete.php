<?php 

include 'config.php';
 
$id = $_GET['id'];
 
mysqli_query($conn,"delete from tb_user where id='$id'");

header("location:data_user.php");
?>