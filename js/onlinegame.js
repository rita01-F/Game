var boxes = document.getElementsByClassName('block');
var isFinished = 0;
var game_id= document.querySelector('#game_id');
var area = document.getElementById('area');
var move= 0;
setInterval('ajaxGetField()', 1000);
area.addEventListener('click',function(event){
	if(event.target.innerHTML=='' && !isFinished){
		console.log(event.target.id);
		ajaxClick(event.target.id);
	}
});

function check(){
	
	var arr = [
		[0,1,2],
		[3,4,5],
		[6,7,8],

		[0,3,6],
		[1,4,7],
		[2,5,8],

		[0,4,8],
		[2,4,6]
	]

	for(var i = 0; i< arr.length; i++){
		if (boxes[arr[i][0]].innerHTML=='X' && boxes[arr[i][1]].innerHTML=='X' && boxes[arr[i][2]].innerHTML=='X'){
			message.innerHTML="Победили крестики!";
			isFinished = 1;
		}else if(boxes[arr[i][0]].innerHTML=='O' && boxes[arr[i][1]].innerHTML=='O' && boxes[arr[i][2]].innerHTML=='O')	{
			message.innerHTML="Победили нолики!";
			isFinished = 1;
		}else if(!isFinished&&move==9){
			message.innerHTML="Ничья!";
			isFinished = 1;
		}	
	}
}

function ajaxClick(event){
	var request = new XMLHttpRequest();
	var params = 'game_id='+game_id.value+'&'+'event='+event;
	request.onreadystatechange = function(){
		if(request.readyState == 4) {
			if(request.responseText!=0){
			move++;
			}
		}
	}
	request.open('POST','change_game_stat.php');
	request.setRequestHeader('Content-type', 'application/x-www-form-urlencoded')
	request.send(params);
}

function ajaxGetField(){
	var request = new XMLHttpRequest();
	var params = 'game_id='+game_id.value;
	request.onreadystatechange = function(){
		if(request.readyState == 4) {
			if(request.responseText!=0){
			document.querySelector('#area').innerHTML = request.responseText;
			check();
			}
		}
	}
	request.open('POST','get_onlinegame_stat.php');
	request.setRequestHeader('Content-type', 'application/x-www-form-urlencoded')
	request.send(params);
}
