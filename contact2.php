<?php

if($_POST["submit"]) {
    $recipient="mjustice111@gmail.com";
    $subject="Form to email message";
    $sender=$_POST["sender"];
    $senderEmail=$_POST["senderEmail"];
    $message=$_POST["message"];

    $mailBody="Name: $sender\nEmail: $senderEmail\n\n$message";

    mail($recipient, $subject, $mailBody, "From: $sender <$senderEmail>");

    $thankYou="<p>Thank you! Your message has been sent.</p>";
}

?><!DOCTYPE html>
<!-- Website template by freewebsitetemplates.com -->
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="user-scalable=0, width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>About - Ed Job Search</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/mobile.css">
	<script type='text/javascript' src='js/mobile.js'></script>
</head>
<body>
	<div id="header">
		<h1><a href="index.html">Ed Job Search<span>The place to find jobs in education.<br>Serving Western Washington</span></a></h1>
		<ul id="navigation">
			<li>
				<a href="index.html">Job Listings</a>
			</li>
			<li>
				<a href="about.html">About</a>
			</li>
			<!--<li>
				<a href="classes.html">Classes</a>
				<ul>
					<li>
						<a href="instructors.html">Instructors</a>
					</li>
				</ul>
			</li>-->
			<li class="current">
				<a href="contact.html">Contact</a>
			</li>
			<!--<li>
				<a href="blog.html">Blog</a>
			</li>-->
		</ul>
	</div>
	<div id="body">
		<h2>Contact</h2>
		<?=$thankYou ?>

    <form method="post" action="contact2.php">
        <label>Name:</label>
        <input name="sender">

        <label>Email address:</label>
        <input name="senderEmail">

        <label>Message:</label>
        <textarea rows="5" cols="20" name="message"></textarea>

        <input type="submit" name="submit">
    </form>
	</div>
	<div id="footer">
		<div>
			<span>123 St. City Location, Country | 987654321</span>
			<p>
				&copy; 2023 by Belle &amp; Carrie Rehabilitation Yoga. All rights reserved.
			</p>
		</div>
		<div id="connect">
			<a href="https://freewebsitetemplates.com/go/facebook/" id="facebook" target="_blank">Facebook</a>
			<a href="https://freewebsitetemplates.com/go/twitter/" id="twitter" target="_blank">Twitter</a>
			<a href="https://freewebsitetemplates.com/go/googleplus/" id="googleplus" target="_blank">Google&#43;</a>
			<a href="https://freewebsitetemplates.com/go/pinterest/" id="pinterest" target="_blank">Pinterest</a>
		</div>
	</div>
</body>
</html>