<?php

require_once 'dbConfig.php';
require_once 'models.php';

if (isset($_POST['insertNewStudentBtn'])) {
	$firstName = trim($_POST['first_name']);
	$lastName = trim($_POST['last_name']);
	$userName = trim($_POST['user_name']);
	$email = trim($_POST['email']);
	$chosenField = trim($_POST['chosen_field']);
	$favLang = trim($_POST['fave_lang']);
	$framework = trim($_POST['framework']);
    $portfolioLink = trim($_POST['portfolio_link']);

	if (!empty($firstName) && !empty($lastName) && !empty($userName) && !empty($email) && !empty($chosenField)  && !empty($favLang)  && !empty($framework) && !empty($portfolioLink)) {
			$query = insertIntoDevRecords($pdo, $firstName, $lastName,
			$userName, $email, $chosenField, $favLang, $framework, $portfolioLink);

		if ($query) {
			header("Location: ../index.php");
		}

		else {
			echo "Insertion failed";
		}
	}

	else {
		echo "Make sure that no fields are empty";
	}

}


if (isset($_POST['editStudentBtn'])) {
	$devID = $_GET['dev_id'];
	$firstName = trim($_POST['first_name']);
	$lastName = trim($_POST['last_name']);
	$userName = trim($_POST['user_name']);
	$email = trim($_POST['email']);
	$chosenField = trim($_POST['chosen_field']);
	$favLang = trim($_POST['fave_lang']);
	$framework = trim($_POST['framework']);
    $portfolioLink = trim($_POST['portfolio_link']);

	if (!empty($devID) && !empty($firstName) && !empty($lastName) && !empty($userName) && !empty($email) && !empty($chosenField) && !empty($favLang) && !empty($framework) && !empty($portfolioLink)) {

		$query = updateADev($pdo, $devID, $firstName, $lastName, $userName, $email, $chosenField, $favLang, $framework, $portfolioLink);

		if ($query) {
			header("Location: ../index.php");
		}
		else {
			echo "Update failed";
		}

	}

	else {
		echo "Make sure that no fields are empty";
	}

}





if (isset($_POST['deleteStudentBtn'])) {

	$query = deleteAStudent($pdo, $_GET['dev_id']);

	if ($query) {
		header("Location: ../index.php");
	}
	else {
		echo "Deletion failed";
	}
}




?>
