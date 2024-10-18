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
	<h3>Welcome to the Web Developer Management System. Input your details here to register</h3>
	<form action="core/handleForms.php" method="POST">
        <p><label for="first_name">First Name</label> <input type="text" name="first_name"></p>
        <p><label for="last_name">Last Name</label> <input type="text" name="last_name"></p>
        <p><label for="user_name">User Name</label> <input type="text" name="user_name"></p>
        <p><label for="email">Email</label> <input type="text" name="email"></p>
        <p><label for="chosen_field">Chosen Field</label> <input type="text" name="chosen_field"></p>
        <p><label for="fave_lang">Fave Language</label> <input type="text" name="fave_lang"></p>
        <p><label for="framework">Framework</label> <input type="text" name="framework"></p>
        <p><label for="portfolio_link">Portfolio Link</label> <input type="text" name="portfolio_link">
            <input type="submit" name="insertNewStudentBtn">
        </p>

	</form>

	<table style="width:50%; margin-top: 50px;">
	  <tr>
	    <th>Developer ID</th>
	    <th>First Name</th>
        <th>Last Name</th>
	    <th>User Name</th>
	    <th>Email</th>
	    <th>Chosen Field</th>
	    <th>Fave Language</th>
	    <th>Framework</th>
	    <th>Portfolio Link</th>
	  </tr>

	  <?php $seeAllDevRecords = seeAllDevRecords($pdo); ?>
	  <?php foreach ($seeAllDevRecords as $row) { ?>
	  <tr>
	  	<td><?php echo $row['dev_id']; ?></td>
	  	<td><?php echo $row['first_name']; ?></td>
	  	<td><?php echo $row['last_name']; ?></td>
	  	<td><?php echo $row['user_name']; ?></td>
	  	<td><?php echo $row['email']; ?></td>
	  	<td><?php echo $row['chosen_field']; ?></td>
	  	<td><?php echo $row['fave_lang']; ?></td>
	  	<td><?php echo $row['framework']; ?></td>
          <td><?php echo $row['portfolio_link']; ?></td>
	  	<td>
	  		<a href="editStudent.php?dev_id=<?php echo $row['dev_id'];?>">Edit</a>
	  		<a href="deleteStudent.php?dev_id=<?php echo $row['dev_id'];?>">Delete</a>
	  	</td>
	  </tr>
	  <?php } ?>
	</table>



</body>
</html>
