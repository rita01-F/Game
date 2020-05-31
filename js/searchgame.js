var game_id = document.querySelector('#game_id');
console.log(game_id.value);
$('#send').on('click', function(){
	var game_url = "onlinegame.php?id="+game_id.value;
	ajaxClick(game_url,game_id);
});
function ajaxClick(game_url,game_id){
	var request = new XMLHttpRequest();
	var params = 'game_id='+game_id.value;
	request.onreadystatechange = function(){
		if(request.readyState == 4) {
			console.log('перенаправление');
			document.location.href = game_url;
			}
	}
	request.open('POST','addto_game.php');
	request.setRequestHeader('Content-type', 'application/x-www-form-urlencoded')
	request.send(params);
}