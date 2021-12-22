<?php 
$c=mysqli_connect("localhost","root","","trainsie");
if(!$c) echo"connexion a la bd est echoué";
$success="";
$error="";
if(isset($_POST['submit']) ){
    $mail=$_POST['adminname'];
    $mdp=$_POST['mdp'];
    if($mail=="admin"){
        if($mdp=="admin"){
            $success="Bienvenue eya!!!";
            $error="";
            header("Location: admin.php"); } 
        else{
          $success="";
          $error="mot de passe invalide!!";
        }
      }
    else{
      $success="";
      $error="Nom d'administrateur invalide!!";
    }
   

}
mysqli_close($c);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon compte</title>
    <link rel="stylesheet" href="csspage/style.css">
</head>
<body id="bodyconnect">
    <nav class="navconnect">
    <h1 style="color: rgba(0, 0, 0, 0.68); font-size:40px;">Trainsie<span style="color:green; font-size:40px;">.</span></h1>
    </nav> 
    <article>
      <center> 
        <form method="POST"  style="border-radius: 25px; background: white; width:500px ; height: 400px;  margin: 70px; padding: 50px;"> 
          <table>
           <tr><td><h1 style="color: green;">&nbsp; Bienvenue Administrateur</h1></td></tr> <br>
           <p style="color:red;" ><?php echo $error; ?></p><p style="color:green;" ><?php echo $success; ?></p>
           <tr><td> Nom d'administrateur</td></tr>
           <tr><td><input style="width: 100%; height: 40px; " type="text" name="adminname" size="45px" height="50px"></td></tr>
           <tr><td> Mot de passe</td></tr>
           <tr><td><input style="width: 100%; height: 40px; " type="password" name="mdp" size="45px" height="50px"></td></tr> <br>
           <tr><td><br><input style="background: green; color: white;" class="btn" name="submit"  type="submit" value="Se connecter"  size="45px"> </td></tr>
               
          </table>
        </form>
      </center>
    </article>
</body>
</html>