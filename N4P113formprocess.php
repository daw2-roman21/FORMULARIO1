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
  <form action="N4P113formprocess.php" method="post">
   <table>
   <tr>
    <td>
      <select name="input">
       <option value="">Selecciona un input</option>
       <option value="1"><?php echo $_POST['name1'] ?></option>
       <option value="2"><?php echo $_POST['name2'] ?></option>
       <option value="3"><?php echo $_POST['name3'] ?></option>
      </select>
     </td>
   </tr>
   </table>
  </form>
 </body>
</html>
