<?php
if (empty($_POST['submit']))
	{
	echo "Form is not submitted";
	exit;
}

if (empty($_POST['fullname']) ||
	empty ($_POST ["empty"]))
	{
	echo "Please fill the form";
	exit;
}

$name = $_POST["fullname"];
$email = $_POST["email"]


mail( 'admin@wild4fitness.com' , 'New Form Submission' , "New form submission: Name: $name, Email:$email" );

header('Location: thank-you.html');
?>