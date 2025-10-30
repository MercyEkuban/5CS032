<!doctype html>
<html lang="en">
  <head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Bootstrap demo</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>
  <body>
	<div class="container">
	
	    <h1>List of movies</h1>

<?php
	// Connect to db
	include("db.php");
	  
	// Run SQL query
	$sql = "SELECT * FROM movies ORDER BY released_date";
	$results = mysqli_query($mysqli, $sql);

?>

<table class="table table-striped">
	<?php while($a_row = mysqli_fetch_assoc($results)):?>
		<tr>
          <td><a href="movie-name.php?id=<?=$a_row['movie_id']?>"><?=$a_row['movie_genre']?></a></td>
          <td><?=$a_row['rating']?></td>
		  <td><a class="btn btn-outline-danger btn-sm" href="delete-movie.php?id=<?=$a_row['movie_id']?>" role="button">Delete</a></td>
		<tr>
	<?php endwhile;?>
</table>
		
	</div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>
db.php
<?php
  $mysqli = new mysqli("localhost","2336742_user","Phenome1155&_password","db2336742");

  if ($mysqli -> connect_errno) {
	echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
	exit();
  }
?>
list-movies
<!doctype html>
<html lang="en">
 <body>
  <h1>List of ALL my movies!!!</h1>
  <?php
   // Connect to database
   include("db.php");
   
   // Run SQL query
   $sql = "SELECT * FROM movies ORDER BY released_date";
   $results = mysqli_query($mysqli, $sql);
  ?>
  
 </body>
</html>
