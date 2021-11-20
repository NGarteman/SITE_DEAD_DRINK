//мобильность
$(document).ready(function(){
    $(".sidenav").sidenav();
});

//добавление нового поля
$('#add').click(function(){
	var $i = $("div.input-field").length;
	if($i == 10){
		alert('Нельзя добавить больше 10 игроков');
	}else{
		var $i = $i+1;
		var $myDiv = $('<div class="input-field col s12 m0" id="fade"><input id="player_' + $i  + '" name="player_' + $i  +'" type="text" class="validate" required><label for="player_' + $i + '" style="padding-top:10px; color:white;">Имя ' + $i + ' игрока </label></div>').appendTo('#row');
	}
});

//удаление поля
$('#remove').click(function(){
	if($("div.input-field").length == 2){
		
	}else{
		$("div.input-field").last().remove();
	}
});