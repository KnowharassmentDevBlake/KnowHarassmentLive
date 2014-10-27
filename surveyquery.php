<?php
require('dbconnect.php');
include 'sanitize.php';

$result = mysqli_query($link,"SELECT * FROM KnowHarassment_Questions");

?>
<DOCTYPE HTML>
<html lang="en">
<head>
	<title>Database</title>
	<link rel="stylesheet" href="home.css">
</head>
<body>
<!--
Start Navigation Menu
-->
<div class="webpage">
	<div class="navwrap">
		<div class="socialbar">
			<p id="fb"><a href="http://www.facebook.com/knowharassment" target="blank"><img src="images/fb512x512.png"></a></p>
			<p><a href="http://www.twitter.com/knowharassment" target="blank"><img src="images/tw512x512.png"></a></p>
		</div>
		<div class="navbar">
			<hr>
			<p><img src="images/TypeLogoMenu.png"></p>
			<p><a href="home.html">home</a></p>
			<p><a href="stories.html">stories</a></p>
			<p><a href="resources.html">resources</a></p>
			<p><a href="surveyquery.php">database</a></p>
			<p><a href="aboutus.html">about us</a></p>
		</div>
	</div>
<!--
End Navigation Menu
-->

<div align="center" style="margin-top: 1em; font-family: helvetica, arial, sanserif;">
	<form action="http://webprod01.science.kent.edu/ClassFolder/KnowHarassment/surveyresults.php" method="get" id="Query">
		<fieldset>
		<legend>What would you like to know about the data we collected?</legend>
		<select name="question" size="5">
			<option value="one">What is the average age of the survey participants?</option>
			<option value="two">How many people were sexually assaulted?</option>
			<option value="three">How many people were sexually harassed?</option>
			<option value="four">How many people were cyber-harassed?</option>
			<option value="five">Where does cyber-harassment occur?</option>
		</select>
		<br>
		<br>
		<input type="submit" name="questionsubmit" />

</fieldset>
</form>
</div>
</body>
</html>