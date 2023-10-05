<?php
include("connection.php");

$query = "SELECT * FROM data";
$data=mysqli_query($conn, $query);

$total=mysqli_num_rows($data);
//echo $total;
$result = mysqli_fetch_assoc($data);
if ($total !=0) {
    echo "<script>alert('table has record'); </script>";

}else{
    echo"no record";
}