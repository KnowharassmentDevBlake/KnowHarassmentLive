<?php
require('dbconnect.php');
include 'sanitize.php';
?>
<DOCTYPE HTML>
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
<div align="center" style="margin-top: 5em; margin-bottom: 5em; font-family: helvetica, arial, sanserif;">
<?php
	$user = $_GET["question"];
	//if statement will evaluate which query to run and then return the answer to the user.
	if ($user=="one") {
		echo "<p>" . "Thank you for your question. The average age of our survey participants is: ";
		$result = mysqli_query($link,"SELECT AVG(Q5) FROM KnowHarassment_Results");
		//$pass = mysqli_fetch_array($result);
		while($row = mysqli_fetch_array($result)) {
			echo $row['AVG(Q5)'];
			echo "years old." ."<br>";
			} 
	} elseif ($user=="two") {
		echo "<p>" . "Thank you for your question. We were surprised to find out that ";
		$result = mysqli_query($link,"SELECT COUNT(Q10) FROM KnowHarassment_Results WHERE Q10='yes'");
		//$pass = mysqli_fetch_array($result);
		while($row = mysqli_fetch_array($result)) {
			echo "<strong>" . $row['COUNT(Q10)'] . "</strong>";
			echo " people reported that they had been sexually assaulted" . "<br>";
			}
	} elseif ($user=="three") {
		echo "<p>" . "Thank you for your question. We were surprised to find out that ";
		$result = mysqli_query($link,"SELECT COUNT(Q16) FROM KnowHarassment_Results WHERE Q16='yes'");
		//$pass = mysqli_fetch_array($result);
		while($row = mysqli_fetch_array($result)) {
			echo "<strong>" . $row['COUNT(Q16)'] . "</strong>";
			echo " people reported that they had been sexually harassed" . "<br>";
			}
	} elseif ($user=="four") {
		echo "<p>" . "Thank you for your question. We were surprised to find out that ";
		$result = mysqli_query($link,"SELECT COUNT(Q22) FROM KnowHarassment_Results WHERE Q22='yes'");
		//$pass = mysqli_fetch_array($result);
		while($row = mysqli_fetch_array($result)) {
			echo "<strong>" . $row['COUNT(Q22)'] . "</strong>";
			echo " people reported that they had been sexually harassed" . "<br>";
			}
	} else {
		echo "five";
	};
?>


</div>



<hr>
<br><br><br><br><br><br><br><br><br><br><br>
<h3> Look below for our full survey set.</h3>
<?php

$result = mysqli_query($link,"SELECT * FROM KnowHarassment_Questions");
echo "<table>";

while($row = mysqli_fetch_array($result)) {
  echo "<tr>";
  echo "<td>" . $row['Question_ID'] . "</td>";
  echo "<td>" . $row['Question_Text'] . "</td>";
  echo "</tr>";
};

echo "</table>";
?>
</body>
</html>