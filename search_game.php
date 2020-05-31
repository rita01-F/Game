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
	<form method="POST">
		<input type='text' id='game_id'name='game_id' placeholder='Введите id игры' value='0'></input>
		<input type="button" id='send' name='send' value="Присоединиться"></input>
	</form>
	<script type="text/javascript" src="js/jquery-3.5.1.min.js"></script>
	<script type="text/javascript" src="js/searchgame.js" ></script>

</body>
</html>