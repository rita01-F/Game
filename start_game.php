<? 
include 'db.php';
$array = array(0=>'',1=>'',2=>'',3=>'',4=>'',5=>'',6=>'',7=>'',8=>'',);
$array = serialize($array);
$id = $_SERVER['REMOTE_ADDR'];
$unique_key=time();
$mysql->query("INSERT INTO `games` (`id_first_player`, `id_second_player`, `search_link`, `game_status`, `game_motion`, `field_status`) VALUES ('$id', 0, '$unique_key', 0, 0, '$array') ");
$result=$mysql->query("SELECT * FROM `games` WHERE `search_link`='$unique_key'")->fetch_assoc();
$mysql->close();
$path = "<script>location.replace(game/onlinegame.php?id=".$result['id'].');</script>';
echo $path; exit;
?>