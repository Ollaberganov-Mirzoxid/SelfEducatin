<?php
include 'config.php';

if(!isset($_SESSION['loggedinId']))
{
  header('location:login.php');
}

if(isset($_REQUEST['save']))
{
  $region = $_REQUEST['region'];
  $fullname = $_REQUEST['fullname'];
  $data_of_birt = $_REQUEST['data_of_birt'];
  $email = $_REQUEST['email'];
  $mobile_number = $_REQUEST['mobile_number'];
  $password = $_REQUEST['password'];
  $cpassword = $_REQUEST['cpassword'];
  $img = $_FILES['img']['name'];

  if((!empty($region)) AND (!empty($fullname)) AND (!empty($data_of_birt)) AND (!empty($email)) AND (!empty($mobile_number)))
  {
    $userId = $_SESSION['loggedinId'];
    $up = mysqli_query($db, "UPDATE data SET region = '$region', fullname = '$fullname', data_of_birt = '$data_of_birt', email = '$email', mobile_number = '$mobile_number' WHERE id = '$userId'");

    if(!empty($password))
    {
      $up = mysqli_query($db, "UPDATE data SET password = '$password' WHERE id = '$userId'");
    }
    if(!empty($img))
    {
      $tmpName = $_FILES['img']['tmp_name'];
      $uploadDir = "../img/";
      move_uploaded_file($tmpName, $uploadDir.$img);
      $up = mysqli_query($db, "UPDATE data SET image_url = '$img' WHERE id = '$userId'");
    }
    header('location:profil.php');
    $_SESSION['successMsg'] = "Ma'lumotlar yangilandi";
  }
  else
    {
      header('location:edit.php');
      $_SESSION['errorMsg'] = "Parol mos emas"; 
    }
   
}

$userId = $_SESSION['loggedinId'];
$getData = mysqli_query($db, "SELECT * FROM data WHERE id = '$userId'");
$row = mysqli_fetch_assoc($getData);
?>
<!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!---<title> Responsive Registration Form | CodingLab </title>--->
    <link rel="stylesheet" href="edit.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="container">
    <div class="title">Tahrirlash</div>  
    <div class="content">
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
      <form method="POST" action="#" enctype="multipart/form-data">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Uy manzili<p>(Xorazm viloyati Hazorasp Tumani)</p></span>
            <input type="text" name="region" id="region" value="<?php echo $row['region'] ?>" placeholder="Qayerda yashashingizni kiriting">
          </div>
          <div class="input-box">
            <span class="details">To'liq ism<p>(Ollaberganov Mirzoxid)</p></span>
            <input type="text" name="fullname" id="fullname" value="<?php echo $row['fullname'] ?>" placeholder="To'liq ismingizni kiriting">
          </div>
          <div class="input-box">
            <span class="details">Tug'ilgan yil<p>(09/17/2003)</p></span>
            <input type="date" name="data_of_birt" id="data_of_birt" value="<?php echo $row['data_of_birt'] ?>" placeholder="Tug'ilgan yilingizni kiriting">
          </div>
          <div class="input-box">
            <span class="details">Elektron pochta <p>(ollaberganovmirzoxid@gmail.com)</p></span>
            <input type="text" name="email" id="email" value="<?php echo $row['email'] ?>" placeholder="Elektron pochtangizni kiriting">
          </div>
          <div class="input-box">
            <span class="details">Telefon raqam<p>(975170917)</p></span>
            <input type="text" name="mobile_number" id="mobile_number" value="<?php echo $row['mobile_number'] ?>" placeholder="Telefon raqamingizni kiriting">
          </div>
          <div class="input-box">
            <span class="details">Profil Rasmi<p>(jpg, png)</p></span>
            <input type="file" name="img" id="img" placeholder="">
          </div>
          <div class="input-box">
            <span class="details">Yangi parol</span>
            <input type="password" name="password" id="password" placeholder="Yangi parol kiriting">
          </div>
        </div>
        <div class="button">
          <input type="submit" name="save" value="Saqlash">
        </div>
      </form>
    </div>
  </div>

</body>
</html>
