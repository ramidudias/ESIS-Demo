<?php
require_once './php/user.class.php';
require_once './php/session.class.php';
$user = Session::getUser();
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>About | Secure Website</title>
		<meta name="description" content="About author.">
		<meta name="keywords" content="HTML, CSS, PHP, JavaScript, jQuery, secure, website">
		<meta name="author" content="Ivan Šincek">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="icon" href="./img/favicon.ico">
		<link rel="stylesheet" href="./css/main.css" hreflang="en" type="text/css" media="all">
		<script src="./js/jquery.js"></script>
		<script src="./js/main.js" defer></script>
	</head>
	<body class="background-img">
		<?php require_once './components/navigation.php'; ?>
		<div class="about">
			<p>Made by Ramidu Dias.</p>
			<p>Made for ESIS deom</p>
			<p>This Is Purely For Study And Demo Only</p>
			<img src="./img/eth.jpg" alt="ETH Wallet">
			<p> Contactable via ramindudias98@gmail.com </p>
		</div>
		<?php require_once './components/footer.php'; ?>
	</body>
</html>
