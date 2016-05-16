

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
		
        </select>        
         <input type="submit" name="chercher" values="chercher"/>
          </form>
           <table>
          	<thead>
             <tr>
              <th>titre</th>
              <th>annee</th>
              <th>genre</th>
              <th>nom</th>
             </tr>
            <thead>
	
      <?php
      $link=mysqli_connect("sql7.freemysqlhosting.net","sql7118747","xXGqKMPhbi","sql7118747");// tu n'a pas besoin de cette ligne car tu n'a pas close ton link
       if(!$link){
        die("<p>connexion impossible</p>");
       }
      
      
      $result = mysqli_query($link,"SELECT titre,annee,genre,nom FROM Film , Artiste where Artiste.idArtiste=Film.idMes");
       if ($result){
        while($film=mysqli_fetch_assoc($result)){
         echo "<tr>";
         echo "<td>".$film['titre']."</td>";
         echo"<td>".$film['annee']."</td>";
         echo "<td>".$film['genre']."</td>";
         echo"<td>".$film['nom']."</td>";
         echo "</tr>";
			 } 
     }  
      else
       die("<p>Erreur dans l'éxécution de la requête.</p>");

    mysqli_close($link);
    ?>  
							
      </table>
    </body>
</html>



