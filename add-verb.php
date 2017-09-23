<!DOCTYPE html>
<html lang="pl">
	<head>
		<meta charset="utf-8">
		<title>Verben | Dodaj nowy czasownik nieregularny</title>
		<link rel="stylesheet" href="https://bootswatch.com/darkly/bootstrap.min.css">	
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	</head>
	<body>
		<main class="col-md-6 col-md-offset-3">
			<h1>Dodaj nowy czasownik nieregularny</h1>
	
			<form method="POST" action="" id="form" class="form-horizontal">
				<table class="table">
					<tr>
						<td><label for="polish">Polski czasownik</label></td>
						<td><input name="polish" id="polish" class="form-control input-sm" autofocus></td>
					</tr>
					<tr>
						<td><label for="infinitiv">Infinitiv</label></td>
						<td><input name="infinitiv" id="infinitiv" class="form-control input-sm"></td>
					</tr>
					<tr>
						<td><label for="prateritum">Präteritum</label></td>
						<td><input name="prateritum" id="prateritum" class="form-control input-sm"></td>
					</tr>
					<tr>
						<td><label for="partizip">Partizip II </label></td>
						<td><input name="partizip" id="partizip" class="form-control input-sm"></td>
					</tr>
					<tr>
						<td colspan="2"><button type="submit" name="submit" class="btn btn-default">Dodaj nowy czasownik nieregularny</button></td>
					</tr>
				</table>
	
				<?php require 'src/add.php';?>
			</form>
			
			<p>
				<button class="btn btn-default character-add-button">ä</button>
				<button class="btn btn-default character-add-button">ö</button>
				<button class="btn btn-default character-add-button">ü</button>
				<button class="btn btn-default character-add-button">ß</button>
			</p>
		</main>

		<script src="js/main.js"></script>
	</body>
</html>
