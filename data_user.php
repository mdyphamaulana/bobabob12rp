<?php 
 
session_start();
 
if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>

 
<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        body {
            background-color: violet;
        }
    </style>
    <title>Data User</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body >
    <div>
        <a href="dashboard.php">Dashboard</a>
             <div>
            
            
<h2>Data User</h2>
<table class="table-users" border="1">
    <tr><th>NO</th><th>Username</th><th>Email</th></tr>
    <?php
    include 'config.php';
    $user = mysqli_query($conn, "SELECT * from tb_user");
    $no=1;
    foreach ($user as $row){
        echo "<tr>
            <td>$no</td>
            <td>".$row['username']."</td>
            <td>".$row['email']."</td>
            <td>
            <a href='update.php?id=". $row['id'] ."' >Edit</a>
            </td>
            <td>
            <a href='delete.php?id=".$row['id']."' >Hapus</a>
            </td>
              </tr>";
              
        $no++;
        
    }

    ?>
    </table>
    </div>
    </div>

</body>
</html>
