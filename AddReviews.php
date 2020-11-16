<?php
//connect to mysqlii
$db = mysqli_connect(gethostname(), 'root', 'root') or 
    die ('Unable to connect. Check your connection parameters.');

// make sure you're using the right database
mysqli_select_db($db, 'moviesite') or die(mysqli_error($db));

$idPelicula = $_POST['id'];
$nombre = $_POST['name'];
$comment = $_POST['comentario'];
$puntuacion = $_POST['rating'];
$dia = date('d');
$mes = date('m');
$anyo = date('Y');
//insert new data into the reviews table
$query = <<<ENDSQL
INSERT INTO reviews
    (review_movie_id, review_date, reviewer_name, review_comment,
        review_rating)
VALUES 
    ($idPelicula,"2020-11-16", "$nombre", "$comment", $puntuacion)
ENDSQL;
mysqli_query($db,$query) or die(mysqli_error($db));

echo 'Movie database successfully updated!<br>';
echo "<a href='N3P308details.php?movie_id=$idPelicula'> Ver cambios </a>";
?>