<?php
include 'config.php';

$userId = $_SESSION['loggedinId'];
$getData = mysqli_query($db, "SELECT * FROM data WHERE id = '$userId'");
$row = mysqli_fetch_assoc($getData);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foydalanuvchi Ma'lumotlari</title>
    <link rel="stylesheet" href="profil.css">
    <!-- Boxicons CSS -->
    <link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css"rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  </head>
  <body>
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
    <div class="profile-card">
      <div class="image">
        <img src="../img/<?php echo $row['image_url']?>" alt="" class="profile-img" />
      </div>

      <div class="text-data">
        <h3 style="text-align: center;" class="fullname"><?php echo $row['fullname']?></h3>
        <span><h4>Uy manzili:</h4><?php echo $row['region']?></span>
        <span><h4>Tug'ilgan yil:</h4><?php echo $row['data_of_birt']?></span>
        <span><h4>Elektron pochta:</h4><?php echo $row['email']?></span>
        <span><h4>Telefon raqam:</h4><?php echo $row['mobile_number']?></span>
      </div>
      <div class="buttons">
        <a href="../maktab.php"class="">
            <i class="bx bx-arrow-back">Asosiy Sahifa</i>
        </a>
        <a href="edit.php" class="edit">
            <i class="bx bxs-edit">Tahrirlash</i>
        </a>
      </div>
    </div>
  </body>
</html>
