<?php 
	include_once 'config.php';

	$name = "\"" . $_POST['name'] . "\"";
	$email = "\"" . $_POST['email'] . "\"";
	$shoe = "\"" . $_POST['shoe'] . "\"";
	$review = "\"" . $_POST['review'] . "\"";
	$stars = $_POST['stars'];

	shell_exec("bash addelasticsearch.sh " . $name .  " " . $email . " " . $shoe .  " " . $review . " " . $stars);
	
	header("Location: user.php");
	?>