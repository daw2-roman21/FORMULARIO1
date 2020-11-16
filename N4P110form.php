<html>
 <head>
  <title>Comentarios</title>
  <style type="text/css">
  <!--
td {vertical-align: top;}
  -->
  </style>
 </head>
 <body>
  <form action="AddReviews.php" method="post">
   <table>
    <tr>
     <td>Name</td>
     <td><input type="text" name="name" value="Introduce tu nombre"/></td>
    </tr>
    <tr>
     <td>Selecciona la pelicula<br></td>
     <td>
      <select name="id">
       <option value="">Selecciona la pelicula</option>
       <option value="1">Valerian and the City of a Thousand Planets</option>
       <option value="2">Blade Runner 2049</option>
       <option value="3">Godzilla: King of Monsters</option>
      </select>
     </td>
    </tr>
    
    <tr>
     <td>Rating<br></td>
     <td>
      <select name="rating">
       <option value="">Select the rating</option>
       <option value="1">1 star</option>
       <option value="2">2 stars</option>
       <option value="3">3 stars</option>
       <option value="4">4 stars</option>
       <option value="5">5 stars</option>
      </select>
     </td>
    </tr>
    <tr>
        <td>Comentario</td>
        <td>
            <textarea name="comentario">Introduce un comentario</textarea>
        </td>
    </tr>

    <tr>
     <td colspan="2" style="text-align: center;">
      <input type="submit" name="submit" value="Enviar Comentario" />
     </td>
    </tr>
    
   </table>
  </form>
 </body>
</html>
