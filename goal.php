<?php
include("connection.php");
if ($_POST['Goal']) {
  $goal = $_POST['goal'];

  $data= "INSERT INTO data values('$goal')";
  $query = mysqli_query($conn,$data);

  if ($query) {
    echo "<script>alert(' insert data'); </script>";

  }else {
    echo "<script>alert('Field to insert data'); </script>";

  }
}
?>