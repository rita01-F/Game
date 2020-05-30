<?php 
include 'menu.php'; 
$id = $_GET['id'];
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Крестики-нолики</title>
	<link rel="stylesheet" href="css/style.css">
	
</head>
<body>
	<input type="hidden" id='game_id' value=<?echo $id;?>>
	<div id="message" style="float: center; color: white; font-family: Comic Sans MS; font-size: 40pt; position: absolute; "></div>	
	<br>
	<div class="field" id = 'field'>
		<div  id="area">
		</div>
	</div>

	<script type="text/javascript" src="js/onlinegame.js"></script>
	<script type="text/javascript" src="js/jquery-3.5.1.min.js"></script>
</body>
</html>