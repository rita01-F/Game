<? 
include 'db.php';
$game_id = $_POST['game_id'];
$result=$mysql->query("SELECT * FROM `games` WHERE `id`='$game_id'")->fetch_assoc();
$game_field = unserialize($result['field_status']);
$mysql->close();
for ($i = 0; $i < 9; $i++):?> 
	<div class="block" id=<?echo $i?>><? echo $game_field[$i];?></div>
<?endfor?>

