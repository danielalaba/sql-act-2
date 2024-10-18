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
	<?php $getDevbyId = getDevbyId($pdo, $_GET['dev_id']); ?>
	<form action="core/handleForms.php" method="POST">
		<p>
			<label for="first_name">First Name</label>
			<input type="text" name="first_name" value="<?php echo $getDevbyId['first_name']; ?>">
		</p>
		<p>
			<label for="last_name">Last Name</label>
			<input type="text" name="last_name" value="<?php echo $getDevbyId['last_name']; ?>">
		</p>
		<p>
			<label for="user_name">User Name</label>
			<input type="text" name="user_name" value="<?php echo $getDevbyId['user_name']; ?>">
		</p>
		<p>
			<label for="email">Email</label>
			<input type="text" name="email" value="<?php echo $getDevbyId['email']; ?>">
		</p>
		<p>
			<label for="chosen_field">Chosen Field</label>
			<input type="text" name="chosen_field" value="<?php echo $getDevbyId['chosen_field']; ?>">
		</p>
		<p>
			<label for="fave_lang">Fave Language</label>
			<input type="text" name="fave_lang" value="<?php echo $getDevbyId['fave_lang']; ?>"></p>
		<p>
			<label for="framework">Framework</label>
			<input type="text" name="framework" value="<?php echo $getDevbyId['framework']; ?>">
		</p>
        <p>
			<label for="portfolio_link">Portfolio Link</label>
			<input type="text" name="portfolio_link" value="<?php echo $getDevbyId['portfolio_link']; ?>">
			<input type="submit" name="editStudentBtn">
		</p>
	</form>
</body>
</html>
