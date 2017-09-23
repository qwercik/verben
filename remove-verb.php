<!DOCTYPE html>
<html lang="pl">
	<head>
		<meta charset="utf-8">
		<title>Verben | Sprawdź się!</title>
		<link rel="stylesheet" href="https://bootswatch.com/darkly/bootstrap.min.css">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	</head>
	<body>
		<main class="col-md-6 col-md-offset-3">
			<h1>Sprawdź się!</h1>
	
			<form method="POST" action="" id="form" class="form-horizontal">
				<table class="table">
					<tr>
						<td><label for="verb">Wpisz czasownik (po polsku), który chcesz usunąć</td>
						<td><input name="verb" id="verb" class="form-control input-sm" autocomplete="off" autofocus></td>
					</tr>
					<tr>
						<td colspan="2"><button type="submit" name="submit" class="btn btn-default">Usuń czasownik</button></td>
					</tr>
				</table>
			</form>
			<p>
				<button class="btn btn-default character-add-button">ä</button>
				<button class="btn btn-default character-add-button">ö</button>
				<button class="btn btn-default character-add-button">ü</button>
				<button class="btn btn-default character-add-button">ß</button>
			</p>

			<?php
				require 'src/remove.php';
			?>
		</main>

		<script src="js/main.js"></script>
	</body>
</html>
