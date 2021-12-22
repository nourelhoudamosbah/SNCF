<?php 
$c=mysqli_connect("localhost","root","","trainsie1");
if(!$c) echo"connexion a la bd est echoué";
$error="";
if(isset($_POST['submit'])){
  if(isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['gmail']) && isset($_POST['mdp'])  ){  
if(!empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['gmail']) && !empty($_POST['mdp'])  ){
  $nom=$_POST['nom'];
  $prenom=$_POST['prenom'];
  $gmail=$_POST['gmail'];
  $mdp=$_POST['mdp'];
 mysqli_query($c,"insert into user(nom,prenom,gmail,mdp) values('$nom','$prenom','$gmail','$mdp')");
  header('Location:connecter.php');
}
else{
  $error="Veuillez remplir tous les champs SVP!!";
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
    <title>Créer un compte</title>
    <link rel="stylesheet" href="csspage/style.css">
</head>
<body id="bodyconnect">
  <nav class="navconnect">
   <h1 style="color: rgba(0, 0, 0, 0.68); font-size:35px;">Trainsie<span style="color:green; font-size:40px;">.</span></h1>
      <div class="onglets">
         
      <a href="connecter.php" target="_blank"><button style="background: green; font-size:15px; border: green; padding:20px; border-radius: 10px; color: white;"> <b> Se connecter</b> </button></a>
       </div>
  </nav>  
  <article>
   <center> 
   <form method="POST" style="border-radius: 25px; background: white; width:500px ; height: 690px;  margin: 70px; padding: 50px;"> 
       <table>
         <tr>
           <td>
             <h1>Connexion rapide avec</h1>
            </td>
         </tr>
         <tr>
           <td>
            <a href="https://www.facebook.com/" class="btn" style="background: rgb(98, 148, 148);" ><img src="https://img.icons8.com/color/48/000000/facebook-circled--v5.png"/>&nbsp; <b>  Facebook </b></a>
            <br>
            <a href="https://mail.google.com/" class="btn" style="background: rgb(70, 191, 183);"><img src="https://img.icons8.com/fluent/48/000000/google-logo.png"/>&nbsp;<b> Google </b></a>
           </td>
         </tr>
         
         <tr><td><h1>Créer un nouveau compte</h1></td></tr> <br>
         <p style="color:red;" ><? echo $error; ?></p>
         <tr><td>Nom</td></tr>
         <tr><td><input style="width: 100%; height: 40px; " type="text" name="nom"></td></tr>
         <tr><td>Prenom</td></tr>
         <tr><td><input style="width: 100%; height: 40px; " type="text" name="prenom"></td></tr>
         <tr><td> E-mail</td></tr>
         <tr><td><input style="width: 100%; height: 40px; " type="email" name="gmail" ></td></tr>
         <tr><td> Mot de passe</td></tr>
         <tr><td><input style="width: 100%; height: 40px; " type="password" name="mdp" ></td></tr>
         <tr><td> <br><input style="background: green; color: white;" class="btn" name="submit" type="submit" value="Créer un compte"  ></td></tr>
         <tr><td>
           <form>
             <button style="background:rgba(255, 255, 255, 0.421); color: rgba(0, 0, 0, 0.694);" class="btn" value="Nouveau client? Créer un compte" formaction="connecter.php"><b>Vous avez déja un compte? Connectez-vous</b> </button>
           </form></td>
         </tr>
         
       </table>
     </form>
   </center>
 </article>
</body>
</html>


