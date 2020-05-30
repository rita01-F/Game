<? 
include 'db.php';
$game_id = $_POST['game_id'];
$event = $_POST['event'];
$player = $_SERVER['REMOTE_ADDR'];
$result=$mysql->query("SELECT * FROM `games` WHERE `id`='$game_id'")->fetch_assoc();
$game_motion = $result['game_motion'];
if($game_motion == 0 && $player==$result['id_first_player']){
	$game_field = unserialize($result['field_status']);
	$game_field[$event]='X';
	echo 1;
	$ser_game_field=serialize($game_field);
	$mysql->query("UPDATE `games` SET `field_status` = '$ser_game_field',`game_motion` = 1 WHERE `games`.`id` = '$game_id' ");
	$mysql->close();
}

if($game_motion == 1 && $player==$result['id_second_player']){
	$game_field = unserialize($result['field_status']);
	$game_field[$event]='O';
	echo 1;
	$ser_game_field=serialize($game_field);
	$mysql->query("UPDATE `games` SET `field_status` = '$ser_game_field',`game_motion` = 0 WHERE `games`.`id` = '$game_id' ");
	$mysql->close();
}

