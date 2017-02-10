<?php
	if(isset($_POST['firstName']) AND isset($_POST['lastName']) AND isset($_POST['mail']) AND isset($_POST['phoneNumber']) AND isset($_POST['adress']) AND isset($_POST['postalCode']) AND isset($_POST['platform']) AND isset($_POST['description'])){
		
		require("/mySQL_connect.php");
		$firstName = $_POST['firstName'];
		$lastName = $_POST['lastName'];
		$mail = $_POST['mail'];
		$phoneNumber = $_POST['phoneNumber'];
		$adress = $_POST['adress'];
		$postalCode = $_POST['postalCode'];
		$platform = $_POST['platform'];
		$description = $_POST['description'];
		
		$query = "INSERT INTO costumer(First_name,Last_name, Mail, Phone_number, Adress, Postal_code, Platform, Description) VALUE('$firstName', '$lastName', '$mail', '$phoneNumber', '$adress', $postalCode, '$platform', '$description')";

		mysqli_query($dbc,$query);
		//echo mysqli_error($dbc);
	}
?>