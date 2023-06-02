<?php
include 'config.php';

if(isset($_REQUEST['register']))
{
    $fullname = $_REQUEST['fullname'];
    $email = $_REQUEST['email'];
    $password = $_REQUEST['password'];
    $cpassword = $_REQUEST['cpassword'];

    
    $getData = mysqli_query($db, "SELECT * FROM data WHERE email = '$email'");
    $rowCount = mysqli_num_rows($getData);
    if ($rowCount!=0)
    {
        $_SESSION['errorMsg'] = "Bunday Elektron pochta bilan ro'yxatdan o'tilgan";
    }
    else if ($password != $cpassword) {
        $_SESSION['errorMsg'] = "Parol mos emas";  
    }

    else if($rowCount == 0)
    {
        $query = mysqli_query($db, "INSERT into data (fullname, email, password) VALUES ('$fullname', '$email', '$password')");

        $_SESSION['successMsg'] = "Siz muvaffaqiyatli Ro'yxatdan o'tdingiz";
    }
    header('Location:login.php');
}
?>