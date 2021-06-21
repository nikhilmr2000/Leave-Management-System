<!DOCTYPE html>
<html>
<head>
	   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
       <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

       <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


	<title>Saved Data</title>
</head>
<body>
	<h2 style="margin-left:20px;">Data</h2>
	<br>
	<?php

	$mysqli= new mysqli('localhost','root','','crud')or die (mysqli_error($mysqli));

	$result=$mysqli->query("SELECT * FROM data")or die(mysqli_error($mysqli));

	?>

	<table cellpadding="15">
		<thead>
		<tr>
			<th>Name </th>
			<th>  Registration Number</th>
			<th>Action</th>
		</tr>
        </thead>
		<?php while($row = $result->fetch_assoc()): ?>
			<thead>
			<tr>
				<td>
					<?php echo $row['Name'] ?> 
				</td>
				<td><?php echo $row['Regno'] ?>
				</td>
				<td><a href="index.php?edit=<?php echo $row['id'] ?>" class="btn btn-info">Edit</a></td><td><a href="process.php?delete=<?php echo $row['id'] ?>" class="btn btn-danger">Delete</a></td>
			</tr>
            </thead>
        <?php endwhile; ?>
	</table>

</body>
</html>