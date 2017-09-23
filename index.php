<?php session_start();?>

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
	
			<?php
				$infinitivStatus = '';
				$prateritumStatus = '';
				$partizipStatus = '';
	
				if ($_POST) {
					$infinitivStatus = $_SESSION['drawn-verb']['infinitiv'] === $_POST['infinitiv'] ? '<span class="label label-success">Dobrze!</span>' : '<span class="label label-danger">Źle!</span>';
					$prateritumStatus = $_SESSION['drawn-verb']['prateritum'] === $_POST['prateritum'] ? '<span class="label label-success">Dobrze!</span>': '<span class="label label-danger">Źle!</span>';
					$partizipStatus = $_SESSION['drawn-verb']['partizip'] === $_POST['partizip'] ? '<span class="label label-success">Dobrze!</span>': '<span class="label label-danger">Źle!</span>';
				}
			?>
	
			<form method="POST" action="" id="form" class="form-horizontal">
				<table class="table">
					<tr>
						<td>Polski czasownik</td>
						<td><b><?php require_once 'src/randomize.php';?></b></td>
					</tr>
					<tr>
						<td><label for="infinitiv">Infinitiv</label></td>
						<td><input name="infinitiv" id="infinitiv" class="form-control input-sm" autocomplete="off" autofocus></td>
						<td><?=$infinitivStatus?></td>
					</tr>
					<tr>
						<td><label for="prateritum">Präteritum</label></td>
						<td><input name="prateritum" id="prateritum" class="form-control input-sm" autocomplete="off"></td>
						<td><?=$prateritumStatus?></td>
					</tr>
					<tr>
						<td><label for="partizip">Partizip II </label></td>
						<td><input name="partizip" id="partizip" class="form-control input-sm" autocomplete="off"></td>
						<td><?=$partizipStatus?></td>
	
					</tr>
					<tr>
						<td colspan="2"><button type="submit" name="submit" class="btn btn-default">Sprawdź!</button></td>
					</tr>
				</table>
			</form>
			<p>
				<button class="btn btn-default character-add-button">ä</button>
				<button class="btn btn-default character-add-button">ö</button>
				<button class="btn btn-default character-add-button">ü</button>
				<button class="btn btn-default character-add-button">ß</button>
			</p>

			<p>
				Zapomniałeś jakiejś formy czasownika? Nie szkodzi. Spójrz <a href="list-verbs.php">tutaj</a>
			</p>
		</main>

		<script src="js/main.js"></script>
	</body>
</html>
