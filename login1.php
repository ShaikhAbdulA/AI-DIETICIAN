<?php
 session_start();
    include ('config.php');
    include ("connection.php");
  if(isset($_POST['signin']))
  {
    $Email = $_POST['email'];
    $Pwd = $_POST['password'];

    $query = "SELECT * FROM data WHERE email ='$Email' && password ='$Pwd' ";
    $Data = mysqli_query($conn,$query);

    $total = mysqli_num_rows($Data);
    if ($total == 1) {
      $_SESSION['user_email'] = $Email;
      header('location:Main.php');
    }
    else {
      echo"<script>alert('Incorrect Username or Password'); </script>";
    }
  }

?>
