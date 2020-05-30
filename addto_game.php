<? 
include 'db.php';
$id = $_POST['game_id'];
$id_second_player=$_SERVER['REMOTE_ADDR'];
$result=$mysql->query("UPDATE `games` SET `id_second_player` = '$id_second_player' WHERE `games`.`id` = '$id' ");
?>	