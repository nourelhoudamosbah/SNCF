<?php

$c=mysqli_connect("localhost","root","","trainsie1");

if (!$c)

  {

  die('Could not connect: ' . mysqli_error());

  }
  $time = $_POST["time"];
  $depart = $_POST["depart"];
  $arrivee = $_POST["arrivee"];
  $id = $_POST["id"];
  
  $query = mysqli_query($c,"update ville set arrivee = '$arrivee', depart = '$depart',time = '$time' where id = $id") or die ("erreur");
  
  header("Location:admin.php");
 
mysqli_close($c); 
?>