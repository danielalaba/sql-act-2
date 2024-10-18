<!-- Functions for interacting with the database -->

<?php

require_once 'dbConfig.php';

function insertIntoDevRecords($pdo, $firstName, $lastName, $userName, $email, $chosenField, $favLang, $framework, $portfolioLink) {

	$sql = "INSERT INTO registration (first_name, last_name, user_name, email, chosen_field, fave_lang, framework, portfolio_link) VALUES (?,?,?,?,?,?,?,?)";

	$stmt = $pdo->prepare($sql);

	$executeQuery = $stmt->execute([$firstName, $lastName, $userName, $email,
    $chosenField, $favLang, $framework, $portfolioLink]);

	if ($executeQuery) {
		return true;
	}
}

function seeAllDevRecords($pdo) {
	$sql = "SELECT * FROM registration";
	$stmt = $pdo->prepare($sql);
	$executeQuery = $stmt->execute();
	if ($executeQuery) {
		return $stmt->fetchAll();
	}
}

function getDevbyId($pdo, $devID) {
	$sql = "SELECT * FROM registration WHERE dev_id = ?";
	$stmt = $pdo->prepare($sql);
	if ($stmt->execute([$devID])) {
		return $stmt->fetch();
	}
}

function updateADev($pdo, $devID, $firstName, $lastName,
	$userName, $email, $chosenField, $favLang, $framework, $portfolioLink) {

	$sql = "UPDATE registration
				SET first_name = ?,
					last_name = ?,
					user_name = ?,
					email = ?,
					chosen_field = ?,
					fave_lang = ?,
					framework = ?,
                    portfolio_link = ?
			WHERE dev_id = ?";
	$stmt = $pdo->prepare($sql);

	$executeQuery = $stmt->execute([$firstName, $lastName, $userName,
		$email, $chosenField, $favLang, $framework, $portfolioLink, $devID]);

	if ($executeQuery) {
		return true;
	}
}



function deleteAStudent($pdo, $devID) {

	$sql = "DELETE FROM registration WHERE dev_id = ?";
	$stmt = $pdo->prepare($sql);

	$executeQuery = $stmt->execute([$devID]);

	if ($executeQuery) {
		return true;
	}

}




?>
