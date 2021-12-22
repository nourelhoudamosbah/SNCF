<?php

$c=mysqli_connect("localhost","root","","trainsie1");
if(!$c) echo"connexion a la bd est echoué";
$error="";
if(isset($_POST['submit'])){

 
  $gmail = mysqli_real_escape_string($c,$_POST['gmail']);
  $mdp = mysqli_real_escape_string($c,$_POST['mdp']);

  if ( $gmail != ""&& $mdp != ""){

      $sql_query = "select count(*) as cntUser from user where gmail='".$gmail."'and mdp='".$mdp."'";
      $result = mysqli_query($c,$sql_query);
      $row = mysqli_fetch_array($result);
      $count = $row['cntUser'];

      if($count > 0){
          $_SESSION['gmail'] = $gmail;
          header('Location: acheter.php');
      }else{
          echo "Invalid username and password";
      }

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
    <h1 style="color: rgba(0, 0, 0, 0.68); font-size:35px;">Trainsie<span style="color:green; font-size:40px;">.</span></h1>
     <div class="onglets">
      
     <a href="inscription.php" target="_blank"><button style="background: green; font-size:15px; border: green; padding:20px; border-radius: 10px; color: white;"> <b> Créer un compte</b> </button></a>
     </div>
    </nav> 
    <article>
      <center> 
        <form method="POST"  style="border-radius: 25px; background: white; width:500px ; height: 560px;  margin: 70px; padding: 50px;"> 
          <table>
           <tr><td><h1>Connexion rapide avec</h1></td></tr>
           <tr><td><a href="https://www.facebook.com/" class="btn" style="background: rgb(98, 148, 148);" ><img src="https://img.icons8.com/color/48/000000/facebook-circled--v5.png"/>&nbsp; <b>  Facebook </b></a><br>
                   <a href="https://mail.google.com/" class="btn" style="background: rgb(70, 191, 183);"><img src="https://img.icons8.com/fluent/48/000000/google-logo.png"/>&nbsp;<b>Google </b></a></td></tr>
           <tr><td><h1>Connexion avec votre e-mail</h1></td></tr> <br>
           <p style="color:red;" > <? echo $error; ?></p><p style="color:green;" > <? echo $success; ?></p>
           <tr><td> E-mail</td></tr>
           <tr><td><input style="width: 100%; height: 40px; " type="email" name="gmail" size="45px" height="50px"></td></tr>
           <tr><td> Mot de passe</td></tr>
           <tr><td><input style="width: 100%; height: 40px; " type="password" name="mdp" size="45px" height="50px"></td></tr>
           <tr><td><br><input style="background: green; color: white;" class="btn" name="submit"  type="submit" value="Se connecter"  size="45px"> </td></tr>
           <tr> <td>
                   <form action="home.php">
                     <button style="background:rgba(255, 255, 255, 0.421); color: rgba(0, 0, 0, 0.694);" class="btn" value="Nouveau client? Créer un compte" formaction="inscription.php"><b>Nouveau client? Créer un compte</b> </button>
                   </form></td></tr>
               
          </table>
        </form>
      </center>
    </article>
</body>
</html>


