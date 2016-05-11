<!DOCTYPE html>
<html>
    <head>
        <meta charset="latin1" />
        <title>Films</title>
    </head>

    <body>
    <h1>
      Films 
      </h1>
      <p>
        ----------------------------------------------------------------------------------------------------
      </p>
    
      <form>
        <select>
           <?php
      $conn=mysqli_connect("sql7.freemysqlhosting.net","sql7118747","xXGqKMPhbi","sql7118747");
      $result = mysqli_query($conn,"SELECT distinct nom From  Artiste ");
       while($artiste=mysqli_fetch_assoc($result)){
       echo"<OPTION>".$artiste['nom']; //il manque un "</option>"
       }
      
      ?>
        </select>        
        <input type="submit" name="chercher" values="chercher"/>
      </form>
      
      
      
      <?php
      $link=mysqli_connect("sql7.freemysqlhosting.net","sql7118747","xXGqKMPhbi","sql7118747");
if(!$link){
  die("<p>connexion impossible</p>");
}
      
      
$result = mysqli_query($link,"SELECT titre,annee,genre,nom FROM Film , Artiste where Artiste.idArtiste=Film.idMes");
    
if($result){
     echo "<table>";
     echo "<tr>";
     echo "<th>titre</th>";
     echo"<th>annee</th>";
     echo"<th>genre</th>";
     echo"<th>nom</th>";
     echo "</tr>";
      while($film=mysqli_fetch_assoc($result)){
       echo "<tr>";
       echo "<td>".$film['titre']."</td>";
       echo"<td>".$film['annee']."</td>";
       echo "<td>".$film['genre']."</td>";
       echo"<td>".$film['nom']."</td>";
       echo "</tr>";
           }
   echo "</table>";
   }   else
       die("<p>Erreur dans l'éxécution de la requête.</p>");
     
    ?>  
      
    </body>
</html>