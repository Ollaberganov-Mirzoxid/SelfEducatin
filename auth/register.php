<?php

include ('config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ro'yxatdan o'tish</title>
    <link rel="stylesheet" href="lr1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body> 
    <!--form area start--> 
    <div class="form">
        <!--signup form start-->
        <form class="signup-form" action="submit_register.php" method="POST">
            <h1 class="h1">Ro'yxatdan o'tish</h1>
            <i class="fas fa-user-plus"></i>
            <?php
                if(isset($_SESSION['successMsg']))
                {
            ?>
                    <p class="Msg" style="color:green"><?php echo $_SESSION['successMsg']; ?></p>
            <?php
                    unset($_SESSION['successMsg']);
                }
                if(isset($_SESSION['errorMsg']))
                {
            ?>
                    <p class="Msg" style="color:red"><?php echo $_SESSION['errorMsg']; ?></p>
            <?php
                    unset($_SESSION['errorMsg']);
                }
            ?>
            <input class="user-input" type="text" name="fullname" placeholder="To'liq ism" required>
            <input class="user-input" type="email" name="email" placeholder="Elektron pochta" required>
            <input class="user-input" type="password" name="password" placeholder="Parol" required>
            <input class="user-input" type="password" name="cpassword" placeholder="Parolni tasdiqlash" required>
            <input class="btn" type="submit" name="register" value="RO'YXATDAN O'TISH">
            <div class="options-02">
                <p>Ro'yxatdan o'tganmisiz?<a href="login.php">Tizimga kirish</a></p>
            </div>
        </form>
        <!--signup form end-->
    </div>
    <!--form area end-->
</body>
</html>