<?php require_once 'core/dbConfig.php'; ?>
<?php require_once 'core/models.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<style>
		body {
			font-family: "Arial";
		}
		input {
			font-size: 1.5em;
			height: 50px;
			width: 200px;
		}
		table, th, td {
		  border:1px solid black;
		}
	</style>
</head>
<body>
	<h1>Are you sure you want to delete this user?</h1>
	<?php $getDevbyId = getDevbyId($pdo, $_GET['dev_id']); ?>
	<form action="core/handleForms.php?dev_id=<?php echo $_GET['dev_id']; ?>" method="POST">

		<div class="studentContainer" style="border-style: solid;
		font-family: 'Arial';">
			<p>First Name: <?php echo $getDevbyId['first_name']; ?></p>
			<p>Last Name: <?php echo $getDevbyId['last_name']; ?></p>
			<p>User Name: <?php echo $getDevbyId['user_name']; ?></p>
			<p>Email: <?php echo $getDevbyId['email']; ?></p>
			<p>Chosen Field: <?php echo $getDevbyId['chosen_field']; ?></p>
			<p>Fave Language: <?php echo $getDevbyId['fave_lang']; ?></p>
			<p>Framework: <?php echo $getDevbyId['framework']; ?></p>
            <p>Portfolio Link: <?php echo $getDevbyId['portfolio_link']; ?></p>
			<input type="submit" name="deleteStudentBtn" value="Delete">
		</div>
	</form>
</body>
</html>
