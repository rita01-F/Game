ajaxClick();



function ajaxClick(){
	var request = new XMLHttpRequest();
	var game_id;
	request.onreadystatechange = function()
	{
		if(request.readyState == 4) 
		{
			var res=request.responseText;
			var game_url = "onlinegame.php?id="+res;
			$('#play').on('click', function(){
			document.location.href = game_url;
			});
			document.querySelector('#message').innerHTML ='Отошлите этот код другу чтобы он мог к вам подключиться - '+res;
		}
	}
	request.open('POST','start_game.php');
	request.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
	request.send();
}