<?php
	include 'database.php';
?>

<?php
	//Create select query
	$query = "SELECT * FROM shouts ORDER BY id DESC";
	$shouts = mysqli_query($conn,$query);
	

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>ShoutBox</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Maven+Pro" rel="stylesheet">
</head>
<body>
	<div id="container">
		<header>
			<h1>Shout<span>Box</span></h1>
		</header>
		<div id="shouts">
			<ul>
				<?php while($row = mysqli_fetch_assoc($shouts)) : ?>
				<li class="shout"><span><?php echo $row['time'] ?> - </span><strong><?php echo $row['user'] ?>:</strong> <?php echo $row['message'] ?> </li>

				<?php endwhile; ?>
				
			</ul>
		</div>
		<div id="input">
			<?php if(isset($_GET['error'])) : ?>
					<div class="error"><?php echo $_GET['error']; ?></div>
			<?php endif; ?>

			<form method="post" action="process.php">
				<input type="text" name="user" placeholder="Enter your name">
				<input type="text" name="message" placeholder="Enter your message">
				<br>
				<input class="shout-btn" type="submit" name="submit" value="Shout It Out!"></input>
			</form>
		</div>
	</div>

</body>
</html>