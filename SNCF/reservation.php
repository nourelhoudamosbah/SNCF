<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Trainsie</title>
    <link rel="stylesheet" href="csspage/style.css">
</head>
<body>
    <nav>
      <h2>Trainsie<span style="color:green; font-size:40px;">.</span></h2>
      <div class="onglets">
      
        <a href="inscription.php" target="_blank"><b>Créer un compte</b></a>&nbsp;&nbsp;&nbsp;
        <a href="connecter.php" target="_blank"><button style="background: green; border: green; border-radius: 10px; color: white;"> <b> Se connecter</b> </button></a>&nbsp;&nbsp;&nbsp;
        <a href="loginadmin.php" target="_blank"><b>Administrateur</b></a>&nbsp;&nbsp;&nbsp;
      </div>

     
    </nav>
    
      <header> 
      
        <div class="row">
          
            <div class="col-md-6">
      <div class="fo">
      
        <form name="monform" method="POST" action ="filtre.php" >
          <center>
        
          <table id="mytable">
            
              <tr>  
                  <td>
                   <b> Ville de départ:</b>
                  </td>
                  
                  <td>
                    <select name="app"   style="width: 100%; height: 40px; border-radius: 10px;">
                    <?
          $c=mysqli_connect("localhost","root","","trainsie1");
          if ($c)
          {while($donnes=mysqli_fetch_array($reponse)){

            echo"<option value='".$donnes['depart']."</option>";} 
            ?> 
                      <option value="Sousse">Sousse</option>
                      <option value="Tunis">Tunis</option>
                      <option value="Monastir">Monastir</option>
                  </select>
                  </td>
              </tr>
              <tr></tr>
              <tr>  
                <td>
                 <b> Ville d'arrivée :</b>
                </td>
                <td>
                  <select name="app"   style="width: 100%; height: 40px; border-radius: 10px;">
                  <?
          $c=mysqli_connect("localhost","root","","trainsie1");
          if ($c)
          { $reponse=mysqli_query ($c,"select arrivee from ville ");
         while($donnes=mysqli_fetch_array($reponse)){

          echo"<option value='".$donnes['arrivee']."</option>";} 
          ?> 
                    <option value="Sousse">Sousse</option>
                    <option value="Tunis">Tunis</option>
                    <option value="Monastir">Monastir</option>
                </select>
                </td>

            </tr>
            <tr></tr>
            <tr>  
                <td>
                 <b> Date de départ:</b>
                </td>
                <td>
                  <input style="text-align: center; width: 100%; height: 40px;border-radius: 10px; " class="in" name="t1" type="date"  >
               </td>
            </tr>
            <tr></tr>
            <tr>  
                <td>
                 <b> Date de retour:(optionel)</b>
                </td>
                <td>
                  <input style="text-align: center; width: 100%; height: 40px;border-radius: 10px; " class="in" name="t1" type="date"  >
                </td>
                
            </tr>
            <tr></tr>
           
            <tr></tr>
            <tr>  
                <td>
                 
                </td>
                <td>
                  <br>
                  <input style="background: green; text-align: center; width: 100%; height: 40px;border-radius: 10px;" class="in" type="submit" value="Rechecher" >
                </td>
            </tr>
          </table>
        </center>  
       </form>
       </div>
      </div>
      <div class="col-md-6">
      <h1  style="color: green ;  font-size: 40px; padding-left:30px; box-shadow: 0px 5px 5px 5px white;
  background-color:rgba(0, 0, 0, 0.692); margin-top:130px; border:2px solid white; border-radius:25px;
  padding-top: 50px; padding-bottom:50px "id="page_title"><b> Vos billets de train en ligne </b> </h1>
        </div>
      </header> 
      
      <section style="margin: 30px;">
        <div class="container">
          <div class="row">
           
             <div class="col-md-4">
              <center> <img src="images/temps.png" style="width: 20vh; height: 20vh;"  alt="temps"></center>
         </div>
         
         <div class="col-md-4">
          
          <center> <img src="images/tel.png"  style="width: 20vh; height: 20vh;" alt="telephone"></center>
         </div>
         
         <div class="col-md-4">
          <center><img src="images/prix.png" style="width: 20vh; height: 20vh;" width="100%" alt="prix"></center> 
         </div>
         </div>
         </div>
         <div class="container">
         <div class="row">
         
           <div class="col-md-4">
            
             <br>
             <h3>Voyagez plus, payez moins</h3> Notre page Billet de train pas cher. vous présente plein d'astuces pour réserver vos billets à petits prix. Et avec Récup'Retard nous vous aidons à obtenir des remboursements sur les retards.
         </div>
         
         <div class="col-md-4">
         
         
           <br>
           <h3>Horaires SNCF en direct</h3> Consultez les horaires et suivez votre train en direct depuis notre page Horaire SNCF. Et pour les dernières infos trafic, consultez notre page Grève SNCF.
         </div>
         
         <div class="col-md-4">
         
           <br>
           <h3>Profitez des petit prix</h3> Et pour faire encore plus de bonnes affaires sur vos billets SNCF, consultez notre page bons plans et gardez un œil sur notre page ouverture des ventes.
         </div>
         </div>
         </div>
         <hr>
        <center>
        <center>
<table border="3" style="background: rgb(216, 216, 216);">
  <tr>
    <td></td>
    <td> <b> <center> Horaire </b>  </td>
    
    
    
  </tr>
  </tr>
  <tr><td><b> Lundi </b></td>
    <td><pre>
    <?php

$c=mysqli_connect("localhost","root","","trainsie1");

if (!$c)

  {

  die('Could not connect: ' . mysqli_error());

  }

 


 

$result = mysqli_query($c,"SELECT * FROM ville");

 

echo "<table border='3' style='background: rgb(216, 216, 216);'>

<tr>


<th>depart</th>

<th>arrivee</th>

<th>temps</th>

</tr>";

 

while($row = mysqli_fetch_array($result))

  {

  echo "<tr>";

  echo "<td>" . $row['depart'] . "</td>";

  echo "<td>" . $row['arrivee'] . "</td>";

  echo "<td>" . $row['time'] . "</td>";

  echo "</tr>";

  }

echo "</table>";

 

mysqli_close($c);

?></tr>
  <tr>
    <td><b> Mardi </b></td>
    <td><pre>
    <?php

$c=mysqli_connect("localhost","root","","trainsie1");

if (!$c)

  {

  die('Could not connect: ' . mysqli_error());

  }

 


 

$result = mysqli_query($c,"SELECT * FROM ville");

 

echo "<table border='3' style='background: rgb(216, 216, 216);'>

<tr>


<th>depart</th>

<th>arrivee</th>

<th>temps</th>

</tr>";

 

while($row = mysqli_fetch_array($result))

  {

  echo "<tr>";

  echo "<td>" . $row['depart'] . "</td>";

  echo "<td>" . $row['arrivee'] . "</td>";

  echo "<td>" . $row['time'] . "</td>";

  echo "</tr>";

  }

echo "</table>";

 

mysqli_close($c);

?>
  </tr>
  <tr>
    <td ><b> Mercredi </b></td>
    <td><pre>
    <?php

$c=mysqli_connect("localhost","root","","trainsie1");

if (!$c)

  {

  die('Could not connect: ' . mysqli_error());

  }

 


 

$result = mysqli_query($c,"SELECT * FROM ville");

 

echo "<table border='3' style='background: rgb(216, 216, 216);'>

<tr>


<th>depart</th>

<th>arrivee</th>

<th>temps</th>

</tr>";

 

while($row = mysqli_fetch_array($result))

  {

  echo "<tr>";

  echo "<td>" . $row['depart'] . "</td>";

  echo "<td>" . $row['arrivee'] . "</td>";

  echo "<td>" . $row['time'] . "</td>";

  echo "</tr>";

  }

echo "</table>";

 

mysqli_close($c);

?>
  </tr>
  <tr>
    <td ><b> Jeudi </b></td>
    <td><pre>
    <?php

$c=mysqli_connect("localhost","root","","trainsie1");

if (!$c)

  {

  die('Could not connect: ' . mysqli_error());

  }

 


 

$result = mysqli_query($c,"SELECT * FROM ville");

 

echo "<table border='3' style='background: rgb(216, 216, 216);'>

<tr>


<th>depart</th>

<th>arrivee</th>

<th>temps</th>

</tr>";

 

while($row = mysqli_fetch_array($result))

  {

  echo "<tr>";

  echo "<td>" . $row['depart'] . "</td>";

  echo "<td>" . $row['arrivee'] . "</td>";

  echo "<td>" . $row['time'] . "</td>";

  echo "</tr>";

  }

echo "</table>";

 

mysqli_close($c);

?>
  </tr>
  <tr>
    <td ><b> Vendredi </b></td>
    <td><pre>
    <?php

$c=mysqli_connect("localhost","root","","trainsie1");

if (!$c)

  {

  die('Could not connect: ' . mysqli_error());

  }

 


 

$result = mysqli_query($c,"SELECT * FROM ville");

 

echo "<table border='3' style='background: rgb(216, 216, 216);'>

<tr>


<th>depart</th>

<th>arrivee</th>

<th>temps</th>

</tr>";

 

while($row = mysqli_fetch_array($result))

  {

  echo "<tr>";

  echo "<td>" . $row['depart'] . "</td>";

  echo "<td>" . $row['arrivee'] . "</td>";

  echo "<td>" . $row['time'] . "</td>";

  echo "</tr>";

  }

echo "</table>";

 

mysqli_close($c);

?>
  </tr>
  <tr>
    <td ><b> Samedi </b></td>
    <td><pre>
    <?php

$c=mysqli_connect("localhost","root","","trainsie1");

if (!$c)

  {

  die('Could not connect: ' . mysqli_error());

  }

 


 

$result = mysqli_query($c,"SELECT * FROM ville");

 

echo "<table border='3' style='background: rgb(216, 216, 216);'>

<tr>


<th>depart</th>

<th>arrivee</th>

<th>temps</th>

</tr>";

 

while($row = mysqli_fetch_array($result))

  {

  echo "<tr>";

  echo "<td>" . $row['depart'] . "</td>";

  echo "<td>" . $row['arrivee'] . "</td>";

  echo "<td>" . $row['time'] . "</td>";

  echo "</tr>";

  }

echo "</table>";

 

mysqli_close($c);

?>
  </tr>
  <tr>
    <td ><b> Dimanche </b></td>
    <td><pre>
    <?php

$c=mysqli_connect("localhost","root","","trainsie1");

if (!$c)

  {

  die('Could not connect: ' . mysqli_error());

  }

 


 

$result = mysqli_query($c,"SELECT * FROM ville");

 

echo "<table border='3' style='background: rgb(216, 216, 216);'>

<tr>


<th>depart</th>

<th>arrivee</th>

<th>temps</th>

</tr>";

 

while($row = mysqli_fetch_array($result))

  {

  echo "<tr>";

  echo "<td>" . $row['depart'] . "</td>";

  echo "<td>" . $row['arrivee'] . "</td>";

  echo "<td>" . $row['time'] . "</td>";

  echo "</tr>";

  }

echo "</table>";

 

mysqli_close($c);

?>
  </tr>

</table>




</center>
<hr>
<center><h2 style="color: green;">Nos services supplimentaires (repas):</h2></center>
<br>
        <div class="container">
 <div class="row">
  
    <div class="col-md-4">
     <center> <img src="images/grand burg.jpg" style="width: 20vh; height: 20vh;"  alt="temps"></center>
</div>

<div class="col-md-4">
 
 <center> <img src="images/03-MenuVeggieOrange.jpg"  style="width: 20vh; height: 20vh;" alt="telephone"></center>
</div>

<div class="col-md-4">
 <center><img src="images/Boco.jpg" style="width: 20vh; height: 20vh;" width="100%" alt="prix"></center> 
</div>
</div>
</div>
<div class="container">
  <div class="row">
  
    <div class="col-md-4">
     
      <br>
     <center> <b>Menu Comptoir</b> </center>
  </div>
  
  <div class="col-md-4">
  
  
    <br>
   <center> <b>Menu Veggie </b> </center>
  </div>
  
  <div class="col-md-4">
  
    <br>
   <center> <b>Menu Boco</b></center>
  </div>
  </div>
  </div>
<div class="container">
  <div class="row">
   
     <div class="col-md-4">
      <center> <img src="images/03-gouterkids.jpg" style="width: 20vh; height: 20vh;"  alt="temps"></center>
 </div>
 
 <div class="col-md-4">
  
  <center> <img src="images/formule.jpg"  style="width: 20vh; height: 20vh;" alt="telephone"></center>
 </div>
 
 <div class="col-md-4">
  <center><img src="images/Bistro korma.jpg" style="width: 20vh; height: 20vh;" width="100%" alt="prix"></center> 
 </div>
 </div>
 </div>
<div class="container">
<div class="row">

  <div class="col-md-4">
   
    <br>
   <center> <b>Gouter Kids</b> </center>
</div>

<div class="col-md-4">


  <br>
 <center> <b>Formule Réveil </b> </center>
</div>

<div class="col-md-4">

  <br>
 <center> <b>Menu Bistro</b></center>
</div>
</div>
</div>
<hr>
<center>
  <br>
<h2 style="color: green;">Billets de train SNCF</h2>
<b>
<pre>
 Avec Trainsie, comparez en quelques clics les prix des différents billets de train SNCF 
  Nous vous aidons à comparer les tarifs et à trouver les billets qui vous conviennent en 
  fonction de la flexibilité, de la date et de l’heure de votre voyage.Pour plus d’infos 
   sur les prix et conditions des billets, consultez notre page Tarifs SNCF et pour 
   l'horaire de votre train en direct, consultez notre Horaires.</pre></b> </center>
<br>

      </section>
      <footer>
        
        <div class="container">
            
            <div class="row">
                <div class="col-md-4">
                  <h1 style=" font-size:80px;">Trainsie<span style="color:green; font-size:100px;">.</span></h1>
                  </div>
                    <div class="col-md-4">
                        <b><span style="color:green; font-size:40px;">|</span> Nous suivre: </b>
                       <br>
                       <br>
                       <p>Vous nous trouver sur:</p>
                      
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16 ">
                            <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
                          </svg> 
                          &nbsp; &nbsp; &nbsp;
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                                <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
                              </svg>
                              &nbsp; &nbsp; &nbsp;
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16">
                                <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z"/>
                              </svg>
                          
                    </div>
                    <div class="col-md-4">
<form method="GET" action="process.php"> 
    <label for ="OUR NEWSLETTER"><b><span style="color:green; font-size:40px;">|</span>Souscrivez à notre newsletter :</b></label> <br>
    <input type="email"> <button style="background-color: green;" type="submit" value="subscribe">Subscribe</button>
</form>
                    </div>
            </div>

        </div>
        <div id="copy">
           <center> <p>All Rights reserved by <b>Trainsie<span style="color:green; font-size:30px;">.</span></b>&copy;2021 copyright.</p> </center>
        </div>
    </footer>
</body>
</html>