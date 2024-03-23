<?php
// Enable error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);
// Start the session
session_start();


include_once "connectdb.php";

// Get user input
$userName = $_POST["user_name"];
$userPassword = $_POST["user_password"];

// Create a prepared statement
$stmt = $conn->prepare("SELECT id, firstname, lastname, password FROM users WHERE username=?");
$stmt->bind_param("s", $userName);
$stmt->execute();
$stmt->bind_result($userId, $firstname, $lastname, $storedHashedPassword);
$stmt->fetch();

// Verify the password
if ($storedHashedPassword !== null && password_verify($userPassword, $storedHashedPassword)) {
	// Login the user by putting their id in session
	$_SESSION["user_id"] = $userId;
	$_SESSION["firstname"] = $firstname;
	$_SESSION["lastname"] = $lastname;
	// After successful login, redirect the user to the profile page
	$_SESSION["isloggedin"]=true;
	$_SESSION["invalidCredentials"] = false;
	header("Location: profile.php");
	exit();
} else {
	// Authentication failed, redirect to login page
	$_SESSION["invalidCredentials"] = true;
	header("Location: index.php");
	exit();
}

// Close the statement and connection
$stmt->close();
$conn->close();
?>
