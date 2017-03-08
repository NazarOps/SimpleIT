<?php
	include("/mySQL_Connect.php");
?>
	<form action="verification.php" method="POST">
		<input type="text" name="mail" placeholder="username"><br>
		<input type="password" name="password" placeholder="password"><br>
		<input type="submit" value="submit">
	</form>