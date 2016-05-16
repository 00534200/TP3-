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
        ------------------------------------------------------------------------------------------------------------------------------------------------------------
     </p>
        <FORM name = "" method="post">
    <SELECT name="realisateur" >
        <?php
        $conn=mysqli_connect("sql7.freemysqlhosting.net","sql7118747","xXGqKMPhbi","sql7118747");
        $result=mysqli_query($conn,"SELECT DISTINCT nom FROM Film , Artiste where Film.idMes = Artiste.idArtiste");
         if($result){
          echo "<Option>Tous";
           while($film=mysqli_fetch_assoc($result)){
	         echo "<Option>".$film['nom'];
           }
        }
        else{
         die("<p>Erreur dans l'éxécution de la requête. </p>");
        }
       mysqli_close($conn);
      ?>
        
        <input type="submit" value="chercher" />
				 </select>    
          </form>
           <table border = 3 >
          	<thead>
             <tr>
              <th>titre</th>
              <th>annee</th>
              <th>genre</th>
              <th>Realisateur</th>
             </tr>
            <thead>
	
      <?php
      $link=mysqli_connect("sql7.freemysqlhosting.net","sql7118747","xXGqKMPhbi","sql7118747");// tu n'a pas besoin de cette ligne car tu n'a pas close ton link

						 
						
						
						 if( empty($_POST['realisateur'])){
							   $result=mysqli_query($link,"SELECT titre,annee,genre,nom FROM Film , Artiste  Where Film.idMes = Artiste.idArtiste");
						 }
						 else{
							  $realisateur = $_POST['realisateur'];
            $result=mysqli_query($link,"SELECT titre,annee,genre,nom FROM Film, Artiste Where Film.idMes = Artiste.idArtiste and nom = \"$realisateur\"");
							 
						 }
					// }
         
         if($result)
            while($film=mysqli_fetch_assoc($result)){
         echo "<tr>";
         echo "<td>".$film['titre']."</td>";
         echo"<td>".$film['annee']."</td>";
         echo "<td>".$film['genre']."</td>";
         echo"<td>".$film['nom']."</td>";
         echo "</tr>";
			    } 
      else
       die("<p>Erreur dans l'éxécution de la requête.</p>");
			
				 mysqli_close($link);
    ?>  
							
      </table>
    </body>
</html>



