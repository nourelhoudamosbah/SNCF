<?php


$c=mysqli_connect("localhost","root","","trainsie1");

if (!$c)

  {

  die('Could not connect: ' . mysqli_error());

  }

foreach ($_POST as $value) {
    mysqli_query($c,"delete from ville where id = $value");
}
mysqli_close($c);
header("Location: admin.php");

?>