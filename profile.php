<?php
session_start();
include("connection.php");
include("config.php");
$userprofile = $_SESSION['user_email'].$_SESSION['user_Email'];
if ($userprofile == true) {
  
}else{
  header('location:signin.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AI Dietician</title>
    
    <link rel="stylesheet" href="profile.css?v=<?=$version?>">
    <link rel="stylesheet" href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="bmi.css?v=<?=$version?>">
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
              <a href="Smoothie.php">
                <i class='bx bx-book-alt' ></i>
                <span class="link_name">Smoothies</span>
              </a>
            </div>
            <ul class="sub-menu">
              <li><a class="link_name" href="Smoothie.php">Smoothies</a></li>
            </ul>
          </li>
          <li>
            <a href="#">
              <i class='bx bx-cog' ></i>
              <span class="link_name">Profile</span>
            </a>
            <ul class="sub-menu blank">
              <li><a class="link_name" href="#">Profile</a></li>
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
        </ul>
    </div>
    <div class="email">
      <img src="user.png" alt="">
    <?php
      echo $_SESSION['user_email'].$_SESSION['user_Email'];
    ?>
    </div>
    <form class="form" method="POST" id="form" onsubmit="validateForm(event)">
      <h3><b>B</b>ody <b>M</b>ass <b>I</b>ndex Calculator</h3>
      <div class="row-one">
        <input type="number" class="text-input" id="age" name="age" autocomplete="off" required/><p class="text">Age</p>
        <label class="container">
        <input type="radio" name="radio" value="f" id="f"><p class="text">Female</p>
          <span class="checkmark"></span>
        </label>
        <label class="container">
          <input type="radio" name="radio" id="m" value="m"><p class="text">Male</p>
          <span class="checkmark"></span>
        </label>
      </div>
      <div class="row-two">
        <input type="number" class="text-input" name="height" id="height" autocomplete="off" required><p class="text">Height (cm)</p>
        <input type="number" class="text-input" id="weight" name="weight" autocomplete="off" required><p class="text">Weight (kg)</p>
      </div>
      <button type="submit"  id="submit" name="Calculate">Submit</button>
      <h1 id="status"></h1>
      <h2 id="bmi"></h2>
    </form>
    <form action="" class="goal" method="POST">
      
        <h1> Goal</h1>
        <textarea name="text" id="goal-txt" cols="30" rows="10" required>
        <?php
          echo $_SESSION['user_goal'];
        ?> 
        </textarea>
        <!-- <button type="submit"  id="submit" name="Goal" onClick="alert('Your Goal is set')">Set Goal</button> -->
        <input class="form__button button switch-btn" type='submit' name ="goal" value="Set Goal">
    </form>
    
    
    <!-- <script src="ai1.js"></script>
    <script src="profile.js"></script> --> 
    <script src="bmi.js?v=<?=$version?>"></script>
    
</body>
</html>
<?php
  if ($_POST['goal']) {
    $goal = $_POST['text'];

      $query = "INSERT INTO goal VALUES ('$goal')";
      $stmt = mysqli_query($conn, $query);
      if ($stmt) {
        $_SESSION['user_goal']=$goal;
        
        echo "<script>alert('Your Goal Is Set.'); </script>";
      } else {
      echo "<script>alert('Field to insert data'); </script>";
      }
  }
?>
