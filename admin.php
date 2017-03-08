<?php
	include("/mySQL_Connect.php");
?>
<form action="submit.php" method="POST">
	<input type="text">
	
</input>
<input type="text" class="input" name="username" placeholder="username" required>
	<form action="verification.php" method="POST">
	<br><br>
		Mail: <input type="text" name="mail"><br>
		Password: <input type="password" name="password"><br>
		<input type="submit" value="submit">
		</form>