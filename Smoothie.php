<?php
session_start();
include('connection.php');
include ('config.php');
$userprofile = $_SESSION['user_email'].$_SESSION['user_Email'];
if ($userprofile == true) {
  
}else{
  header('location:signin.php');
}
 ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <link rel="icon" href="/favicon.ico" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="theme-color" content="#000000" />
  <title>AI Dietician</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap">
     <link rel="stylesheet" href="ai1.css?v=<?=$version?>">
     <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins%3A400%2C500%2C700"/>
     <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro%3A400%2C500%2C700"/>
     <link rel="stylesheet" href="smoothie.css?v=<?=$version?>"/>
     <link rel="stylesheet" href="Main.css?v=<?=$version?>">
     <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..40,100..700,0..1,-50..200">
     <style>
    .circle{
    position: relative;
    width: 320px;
    height: 320px;
    margin-left: 19rem;
    border-radius: 50%;
    box-shadow:  rgba(0,0 , 0,05 ) 0px 54px 55px;;
    margin-top: 25rem;
    overflow: none;
    
}
img{
    border-radius: 50%;
    position: absolute;
    object-fit: cover;
    width: 100%;
    height: 100%;
}
  
  </style>
</head>
<body>
  <div class="sidebar close">
    <div class="logo-details">
      <div class="iocn-link">
          <i class="fa-solid fa-pan-food"></i>
      </div>
      <span class="logo_name">AI Dietician</span>
    </div>
    <ul class="nav-links">
      <li>
        <div class="iocn-link">
          <a href="Main.php">
            <i class='bx bx-pie-chart-alt-2' ></i>
            <span class="link_name">Diet</span>
          </a>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="Main.php">Diet</a></li>       
        </ul>
      </li>
      <li>
        <div class="iocn-link">
          <a href="#">
            <i class='bx bx-book-alt' ></i>
            <span class="link_name">Smoothies</span>
          </a>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">Smoothies</a></li>
        </ul>
      </li>
      <li>
        <a href="profile.php">
          <i class='bx bx-cog' ></i>
          <span class="link_name">Profile</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="profile.php">Profile</a></li>
        </ul>
      </li>
      <li>
        <div class="iocn-link">
          <a href="logout.php">
            <i class="fa fa-sign-out"></i>
            <span class="link_name">Logout</span>
          </a>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="logout.php">Logout</a></li>
        </ul>
      </li>
    </li>
  </ul>
</div>
<div class="desktop-1-e9P">
  <!-- <img class="vector-1-pi5" src="back.png"/> -->
  <p class="smoothie-vFK">
    <span class="smoothie-vFK-sub-0">SM</span>
    <span class="smoothie-vFK-sub-1">O</span>
    <span class="smoothie-vFK-sub-2">O</span>
    <span class="smoothie-vFK-sub-3">THIE</span>
  </p>
  <img class="logo" src="./images/logo.png"/>
  <p class="para">
  <br/>
  Get personalized nutrition advice from our AI-powered dietitian. we&#39;ll create a custom diet plan for you. Start your journey to better health today!
  <br>
  <!-- animation -->
  <div class="circle">
    <img src="./images/food1.jpg" alt="">
  </div>
</div>
<!-- end -->
<!-- ai -->
<div class="ai">
  <div class="main">
    <h1>CHAT WITH DIETICIAN</h1>
    <p id="output">After Submit Wait For Response</p>
    <p class="info">Note: AI dietitian are for general informational purposes only and should not replace personalized advice from a healthcare professional.</p>
    <div class="bottom-section">
      <div class="input-container">
        <input placeholder="Search According to your BMI"/>
        <div class="submit">➤</div>
      </div>
    </div>
  </div>
</div>
  <script src="ai1.js?v=<?=$version?>"></script>
  <!-- AI END -->
  
  <div class="group-1-SRF">
    <div class="frame-3-VPX">
      <img class="food" src="food.png"/>
      
    </div>
  </div>
</body>
</html>
