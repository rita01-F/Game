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
	<div id="message" style="float: center; color: white; font-family: Comic Sans MS; font-size: 40pt; position: absolute; "></div>	
	<br>
	<div class="field">
	<div  id="area">
		<div class="block"></div>
		<div class="block"></div>
		<div class="block"></div>
		<div class="block"></div>
		<div class="block"></div>
		<div class="block"></div>
		<div class="block"></div>
		<div class="block"></div>
		<div class="block"></div>	
	</div>

	<div align="center">
		<button id="reload">Начать заново</button>
	</div>
	</div>

	<script type="text/javascript" src="js/playAI.js"></script>
	<script type="text/javascript" src="js/jquery-3.5.1.min.js"></script>
</body>
</html>