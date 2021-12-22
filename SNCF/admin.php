<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon compte</title>
    <link rel="stylesheet" href="admin.css">
</head>

<body>
<div class="dbContainer">
    <div class="header">
      <div>&nbsp;</div>
      <h2>Trainsie<span style="color:green; font-size:40px;">.</span></h2>
        <p>BIENVENUE ADMIN</p>
    </div>
    <div class="dbContainerData">
    <div class="leftContainer">
        <div class="userProfile">
            <img src="images/noor.jpg" alt="dashboard header">
            <p>Administrateur</p>
        </div>
        <div class="dbViewList">
            <p title="Report One"><span>01</span>Report One</p>
            <p title="Report Two" class="active"><span>02</span>Report Two</p>
            <p title="Report Three"><span>03</span>Report Three</p>
            <p title="Report Four"><span>04</span>Report Four</p>
            <p title="Report Five"><span>05</span>Report Five</p>
            <p title="Report Six"><span>06</span>Report Six</p>
        </div>
    </div>
    <div class="rightContainer">
      

        <div class="dbControls">
    
        </form>


<form id="modify_form" action="modif.php" method="post">
  <h2>Modification</h2> &nbsp;&nbsp;
  <input id="id_value" name="id" type="text" value="" hidden> &nbsp;&nbsp;
  <label for="depart">Gare de départ :</label> &nbsp;&nbsp;&nbsp;
  <input id="depart" name="depart" value="test" type="text" placeholder="Gare de départ"> &nbsp;&nbsp;
  <label for="arrivee">Gare de destination :</label>&nbsp;&nbsp;&nbsp;
  <input id="arrivee" name="arrivee" value="" type="text" placeholder="Gare de destination">&nbsp;&nbsp;
  <label for="temps">Temps:</label>&nbsp;&nbsp;&nbsp;
  <input id="time" name="time" value="" type="text" placeholder="temps" >&nbsp;&nbsp;&nbsp;&nbsp;
  <button class="button_style" style='background-color:#03787c; border-radius:20px; color:white; ' type="submit">Valider</button>&nbsp;&nbsp;&nbsp;
</form>

  
        </div>
        <div style="clear:both"></div>
        <div class="dbViewDisplayArea">
            <h2>Affichage</h2>
            <form id="add_form" action="ajouter.php" method="post">
    <label for="t">Gare de départ :</label>
    <input name="depart" style=' border-radius:20px; padding:9px' type="text" placeholder="Gare de départ" required pattern="[A-Z][A-Za-z]+">
    <label for="">Gare de destination :</label>
    <input name="arrivee" style=' border-radius:20px; padding:9px' type="text" placeholder="Gare de destination" required pattern="[A-Z][A-Za-z]+">
    <label for="">Temps :</label>
    <input name="time" style=' border-radius:20px; padding:9px' type="text" placeholder="temps" >
    &nbsp;&nbsp;
    <button class='button_style' style='background-color:#03787c; border-radius:20px; padding:9px; color:white;' type="submit">Enregistrer</button>
  </form>
            <div  style="    padding: 10px 20px 30px;">
            <form action="delete.php" method="post">
            <table>
            
  <br> <br>
  <tr>
  <th>id</th>
  <th>depart</th>
    <th>arrivee</th>
    <th>temps</th>
    <th>Supprimer</th>
    <th>Modifier</th>
  </tr>

                <?php

                $c=mysqli_connect("localhost","root","","trainsie1");
                
                if (!$c)
                
                  {
                
                  die('Could not connect: ' . mysqli_error());
                
                  }
                
                 
                
                
                 
                
                $result = mysqli_query($c,"SELECT * FROM ville");
             
  $i = 0;
  while($row = mysqli_fetch_array($result))
  {
    $id = $row['id'];
    $depart = $row['depart'];
    $arrivee = $row['arrivee'];
    $time = $row['time'];
    $value = "'$depart'," . "'$arrivee'," . "'$id'," . "'$time'";
    $i++;
    echo "<tr><td>" .
      $id .
      "</td><td>" .
      $depart .
      "</td><td>" .
      $arrivee .
      "</td><td>" .
      $time .
      "</td><td>" .
      "<input type='checkbox' value='$id' name='check$i'>
    </td><td>" .
      "<a href='#' onclick=show($value) value='$id'>Modifier</a>" .
      "</td></tr>";
  }
  
  
    
  

 
?>

</form>

</table> <br> <br>
<button style='background-color:#03787c; border-radius:20px; padding:9px; width:200px;color:white;' class='button_style' type="submit">Supprimer</button>
<br> <br> <br>

    <script>
    // Display and hide second form
    x = document.getElementById("modify_form");
    x.style.display = "none"

    function show(depart, arrivee, id,time) {
      if (x.style.display == "none") {
        x.style.display = 'flex';
      } else {
        x.style.display = 'none';
      }
      document.getElementById("time").value = time;
      document.getElementById("arrivee").value = arrivee;
      document.getElementById("depart").value = depart;
      document.getElementById("id_value").value = id;
    }
  </script>
  
            </div>
        </div>
    </div>
</div>
</div>
    </body>
    </html>