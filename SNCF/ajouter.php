<?php

$c=mysqli_connect("localhost","root","","trainsie1");

if (!$c)

  {

  die('Could not connect: ' . mysqli_error());

  }

$depart = $_POST["depart"];
$arrivee = $_POST["arrivee"];
$time = $_POST["time"];

$query = mysqli_query($c,"insert into ville  values (NULL,'$depart', '$arrivee','$time')") or die ("erreur");

header("Location:admin.php");

mysqli_close($c); 
?>