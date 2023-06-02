<?php
include 'auth/config.php';

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
    <title>Maktab</title>
    <link rel="stylesheet" href="maktab1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" charset="utf-8"></script>
</head>
<body>

    <input type="checkbox" id="check">
    <!--Header area start-->
    <header>
        <label for="check">
            <i class="fas fa-bars" id="sidebar_btn"></i>
        </label>
        <div class="left_area">
            <h3>O'z<span>Ta'lim</span></h3>
        </div>
        <div class="right_area">
          <a class="profile_btn" href="auth/profil.php">PROFIL</a>
        </div>
        <div class="right_area">
          <a href="auth/logout.php" class="logout_btn">Log out</a>
        </div>
    </header>
    <!--Header area end-->
    <!--Mobile navigation bar start-->
    <div class="mobile_nav">
        <div class="nav_bar">
            <img src="img/<?php echo $row['image_url']?>" class="mobile_profile_image" alt="">
            <h4 style="padding-right: 33%; color: #fff;"><?php echo $row['fullname'] ?></h4>
            <i class="fa fa-bars nav_btn"></i>
        </div>
        <div class="mobile_nav_items">
        <a class="activee" href="#"><i class="fas fa-school"></i><span>Maktab</span></a>
        <a href="pages/abuturiyent.php"><i class="fas fa-users"></i><span>Abuturiyent</span></a>
        <a href="workpages/OTM.php"><i class="fa-solid fa-graduation-cap"></i><span>OTM</span></a>
        <a href="workpages/olimpiadist.php"><i class="fas fa-ranking-star"></i><span>Olimpiadist</span></a>
        <a href="pages/tillar.php"><i class="fas fa-language"></i><span>Chet tillar</span></a>
        <a href="workpages/reyting_st.php"><i class="fas fa-chart-simple"></i><span>Reyting</span></a>
        <a href="pages/IT.php"><i class="fas fa-desktop"></i><span>IT Sohasi</span></a>
        <a href="workpages/learning_cente.phpr"><i class="fas fa-chalkboard-user"></i><span>O'quv Markazlar</span></a>
        </div>
    </div>
    <!--Mobile navigation bar end-->
    <!--Sidebar start-->
    <div class="sidebar">
        <div class="profile_info">
            <img src="img/<?php echo $row['image_url']?>" class="profile_image" alt="">
            <h4 style="text-align: center; color: #fff;"><?php echo $row['fullname'] ?></h4>
        </div>
        <a class="activee" href="#"><i class="fas fa-school"></i><span>Maktab</span></a>
        <a href="pages/abuturiyent.php"><i class="fas fa-users"></i><span>Abuturiyent</span></a>
        <a href="workpages/OTM.php"><i class="fa-solid fa-graduation-cap"></i><span>OTM</span></a>
        <a href="workpages/olimpiadist.php"><i class="fas fa-ranking-star"></i><span>Olimpiadist</span></a>
        <a href="pages/tillar.php"><i class="fas fa-language"></i><span>Chet tillar</span></a>
        <a href="pages/reyting_st.php"><i class="fas fa-chart-simple"></i><span>Reyting</span></a>
        <a href="pages/IT.php"><i class="fas fa-desktop"></i><span>IT Sohasi</span></a>
        <a href="workpages/learning_center.php"><i class="fas fa-chalkboard-user"></i><span>O'quv Markazlar</span></a>
        </div>
    <!--Sidebar end-->

    <div class="content">
        <div class="header">
            <h3 class="index">Bo'limlardan birini tanlang ></h4>
            <div class="menu">
                <a href="maktab.php"><h3 class="activee">1-4 sinf</h3></a>
                <a href="pages/maktab/maktab_5_9.php"><h3 class="sinflar">5-9 sinf</h3></a>
                <a href="pages/maktab/maktab_10_11.php"><h3 class="sinflar">10-11 sinf</h3></a>
            </div>
        </div>
        <div class="header2">
            <div class="menu">
                <a href="maktab.php"><h3 class="activee">Matematika</h3></a>
                <a href="maktab.php"><h3 class="sinflar">Geometriya</h3></a>
                <a href="maktab.php"><h3 class="sinflar">Ona Tili</h3></a>
                <a href="maktab.php"><h3 class="sinflar">Adabiyot</h3></a>
                <a href="maktab.php"><h3 class="sinflar">Rus Tili</h3></a>
                <a href="maktab.php"><h3 class="sinflar">Ingliz Tili</h3></a>
            </div>
                <a class="book" href="workpages/kitoblar.php"><h3 class="sinflar">Kitoblar</h3></a>
        </div>
        <div class="body">
            <div class="full">
                <video src="video/Turk/1.mp4"controls></video>
                <p>1-DARS. 1-QISM. ALIFBOSI</p>
            </div>
            <div class="full">
                <video src="video/Turk/2.mp4"controls></video>
                <p>1-DARS. 2-QISM. ALIFBOSI</p>
            </div>
            <div class="full">
                <video src="video/Turk/3.mp4"controls></video>
                <p>1-DARS. 3-QISM. ALIFBOSI</p>
            </div>
            <div class="full">
                <video src="video/Turk/4.mp4"controls></video>
                <p>2-DARS. UNLI VA UNDOSH HARFLAR</p>
            </div>
            <div class="full">
                <video src="video/Turk/1.mp4"controls></video>
                <p>1-DARS. 1-QISM. ALIFBOSI</p>
            </div>
            <div class="full">
                <video src="video/Turk/2.mp4"controls></video>
                <p>1-DARS. 2-QISM. ALIFBOSI</p>
            </div>
            <div class="full">
                <video src="video/Turk/3.mp4"controls></video>
                <p>1-DARS. 3-QISM. ALIFBOSI</p>
            </div>
            <div class="full">
                <video src="video/Turk/4.mp4"controls></video>
                <p>2-DARS. UNLI VA UNDOSH HARFLAR</p>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function(){
            $('.nav_btn').click(function(){
                $('.mobile_nav_items').toggleClass('active');
            });
        });
    </script>
</body>
</html>