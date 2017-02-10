<!DOCTYPE html>
<html>
	<head>
		<title>Index</title>
		<meta charset="UTF-8">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<link rel="stylesheet" type="text/css" href="style.css">
		<?php
			include("/mySQL_Connect.php");
		?>
	</head>
	<body>
		<div id="wrap">
		<h1 id="banner">SIMPLE<span>IT</span></h1>
		<div class="container">
			<ul class="tabs">
				<li class="tab-link current" data-tab="tab-1">HEM</li>
				<li class="tab-link" data-tab="tab-2">KONTAKTA OSS</li>
				<li class="tab-link" data-tab="tab-3">OM OSS</li>
			</ul>
			<div id="tab-1" class="tab-content current">
				<h1>Hem</h1>
				<div>
					<p>HST.</p>
				</div>
			</div>
			<div id="tab-2" class="tab-content">
				<h1>Kontakta oss</h1>
				<div>
					<p>Curabitur ultrices diam vitae turpis accumsan, ac pellentesque quam malesuada. Sed nisi magna, molestie quis aliquam quis, pulvinar euismod nibh. Aenean dapibus nisl sit amet ante pretium, eget volutpat orci tincidunt. Phasellus pharetra mauris in quam laoreet dignissim. Nullam cursus egestas nulla sit amet interdum. Vivamus non urna eget diam porttitor vestibulum. Donec in justo in dolor tristique feugiat. Donec mattis libero finibus, finibus leo eget, blandit lacus. Suspendisse bibendum sem mi, quis fringilla justo elementum eget. Nullam ipsum felis, viverra sit amet augue sed, luctus venenatis odio. Vestibulum vel sem sit amet elit eleifend bibendum. Nulla elit eros, consequat id metus eu, feugiat posuere tellus.</p>
				</div>
				<ul id="pricelist">
					<h3>Prislista</h3>
					<li>Avancerad rådgivning Dator/Mobil = 20 kr.</li>
					<li>Support för datorer = 20 kr.</li>
					<li>Support för mobiler = 20 kr.</li>
					<li>Felsökning av datorer = 20 kr.</li>
				</ul>			
				<form id="form" action="submit.php" method="POST">
				<form id="form">
					<div id="formone">
						<h3>Kontaktuppgifter</h3>
						<input type="text" class="input" name="firstName" placeholder="Förnamn" required>
						<input type="text" class="input" name="lastName" placeholder="Efternamn" required> 
						<input type="text" class="input" name="mail" placeholder="Email" required>
						<input type="text" class="input" name="phoneNumber" placeholder="Telefonnummer" required>
						<input type="text" class="input" name="adress" placeholder="Adress" required>
						<input type="text" class="input" name="postalCode" placeholder="Postkod" required>
					</div>
					
					<div id="formtwo">
						<h3>Felbeskrivning</h3>
						<select name="platform">
							<option value="PC windows">PC Windows</option>
							<option value="PC mac">PC Mac</option>
							<option value="Linux">Linux</option>
							<option value="Mobil Android">Mobil Android</option>
							<option value="Mobil IOS">Mobil IOS</option>
						</select><br>
						<textarea rows="13" cols="65">Beskrivning</textarea><br>
						<button class="button">Skicka</button>
					</div>	
				</form>
			</div>
			<div id="tab-3" class="tab-content">
				<h1>Om oss</h1>
				<p>Vi är ett UF-företag som ger support till datorer och mobiler för en billig peng.</p>
			</div>
		</div>
		<div id="footer">
		</div>
		</div>
		<script>
			$(document).ready(function(){
				$('ul.tabs li').click(function(){
					var tab_id = $(this).attr('data-tab');
					
					$('ul.tabs li').removeClass('current');
					$('.tab-content').removeClass('current');
					
					$(this).addClass('current');
					$("#"+tab_id).addClass('current');
				});
			});
		</script>
	</body>
</html>