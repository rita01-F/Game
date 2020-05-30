<?php 
include 'menu.php'; //[s]
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Крестики-нолики</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<form action=addto_game.php method="POST">
		<input type='text' name='game_id' placeholder='Введите id игры'></input>
		<button type='submit' name='send'>Присоедениться</button>
	</form>
	<script type="text/javascript" src="js/js.js" ></script>
	<script type="text/javascript" src="js/jquery-3.5.1.min.js"></script>
</body>
</html>