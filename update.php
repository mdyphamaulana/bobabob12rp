<!DOCTYPE html>
<html>
<head>
    <title>Update Data User</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<?php
    include 'config.php';
    $id = $_GET['id'];
    $data = mysqli_query($conn,"select * from tb_user where id='$id'");
    while($d = mysqli_fetch_array($data)){
        ?>

        <div class="container">

<form class="login-username" method="post" action="proses_update.php">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Update Data User</p>
                <div class="input-group">
                        <input type="hidden" name="id" value="<?php echo $d['id']; ?>">
                        <input placeholder="username" type="text" name="username" autofocus required value="<?php echo $d['username']; ?>">
                </div>
                
                <div class="input-group">
                    <input placeholder="Email" type="email" name="email" required value="<?php echo $d['email']; ?>">
                </div>
                  <div class="input-group">
                    <input placeholder="Password" type="password" name="password" required>
                </div>
                <div class="input-group">
                <button name="submit" class="btn">Save</button>
            </div>   
        </form>
    </div>
        <?php
    }
        ?>
</body>
</html>