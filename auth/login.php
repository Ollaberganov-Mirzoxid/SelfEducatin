<?php
include 'config.php';
if (isset($_REQUEST['Login'])) 
{
    $email = $_REQUEST['email'];
    $password = $_REQUEST['password'];

    $query = mysqli_query($db, "SELECT * FROM data WHERE email = '$email' AND password = '$password'");
    $rowCount = mysqli_num_rows($query);

    if ($rowCount > 0 ) {

        $rt = mysqli_fetch_assoc($query);
        $userId = $rt['id'];

        $_SESSION['loggedinId'] = $userId;
        header('location:../maktab.php');
    }
    else {
        $_SESSION['errorMsg'] = "Elektron pochta yoki parol noto'g'ri";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tizimga Kirish</title>
    <link rel="stylesheet" href="lr1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>    
    <div class="form">
        <!--login form start-->
        <form class="login-form" action="#" method="POST">
            <h1 class="h1">Kirish</h1>
            <i class="fas fa-user-circle"></i>
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
            <input class="user-input" type="text" name="email" placeholder="Elektron pochta" required>
            <input class="user-input" type="password" name="password" placeholder="Parol" required>
            <div class="options-01">
                <label class="remember-me"><input type="checkbox" name="checkbox">Eslab qolish</label>
                <a href="#">Parolingiz esdan chiqdimi?</a>
            </div>
            <input class="btn" type="submit" name="Login" value="TIZIMGA KIRISH">
            <div class="options-02">
                <p>Ro'yxatdan o'tmaganmisiz?<a href="register.php">Ro'yxatdan o'tish</a></p>
            </div>
        </form>
        <!--login form end-->
    </div>
</body>
</html>