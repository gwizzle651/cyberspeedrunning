<?php
if ($_POST["username"]) {
	$username = htmlspecialchars($_POST["username"]);
}

if ($_POST["password"]) {
	$plainTextPassword = htmlspecialchars($_POST["password"]);
}

if ($_POST["confirm-password"]) {
	$plainTextPassword = htmlspecialchars($_POST["confirm-password"]);
}

if ($_POST["runLink"]) {
	$runLink = htmlspecialchars($_POST["runLink"]);
}

if ($_POST["runTime"]) {
	$runTime = htmlspecialchars($_POST["runTime"]);
}

// figure out how to identify which form the data is coming from.
// write functions to interact with the database. 
