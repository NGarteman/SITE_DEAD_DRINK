<?php
							$player = $_POST;
							$b = count($player);
							
							function random_task($array){
								return $array[array_rand($array)];
							}
						
							function random_player($int){
								return $_POST['player_' . mt_rand(1, $int)];
							}
							
							function random_player_2($int){
								return $_POST['player_' . mt_rand(1, $int)];
							}
						
							$strings = [
								
								random_player($b) . " должен(на) поцеловать в щечку игрока " . random_player($b),
	
								random_player($b) . " задай " . random_player($b) . " вопрос: тебе нравится как я пахну? Если услышишь да, задай следующий вопрос:
							    переспал(а) бы со мной? ",
	
								random_player($b) .  " ты будешь водить монетку носом по полу, а остальные игроки построят преграды",
	
								random_player($b) . " тебе придется познакомиться с игроком другого пола, строя из себя застенчивого человека",
	
								random_player($b) . " станцуй стриптиз", 
	
								random_player($b) . " ответь на вопрос: во сколько лет впервые занялся(ась) сексом?",
	
								random_player($b) . " ответь на вопрос: кого из присутствующих считаешь самым красивым? (кроме себя)",
	
								random_player($b) . " ответь на вопрос : любишь куни/минет?",
	
			                    random_player($b) . " ответь на вопрос : когда последний раз был секс? 
							    Если больше месяца, то отвечаешь на следующий вопрос: С кем бы ты переспал(a) из игроков?",
	
								random_player($b) . " ответь на вопрос какого размера у тебя член/грудь?",
	
								random_player($b) . " ответь на вопрос : хотел(а) бы секс втроем?",
	
								random_player($b) . " попытайся достать языком кончика носа",
	
								random_player($b) . " пьешь на брудершафт с " . random_player($b) . " держась за руки",
	
								random_player($b) . " ответь на вопрос: учился(ась) целоваться на помидорах?",
	
								random_player($b) . " тяжело дыша, легонько укуси за мочку уха " . random_player($b),
	
								random_player($b) . " ответь на вопрос : снимал(а) ли секс на видео? Если нет хотел(а) бы сняться в порно?",
	
								random_player($b) . " ответь на вопрос: какой у тебя вкус на другой пол?",
	
								random_player($b) . " опиши себя тремя словами.",
	
								random_player($b) . " вызови мурашки у " . random_player($b) . " любыми способами.",
	
								random_player($b) . " крутишь бутылочку, на кого попадет того и целуешь, в противном случае пьешь в четыре раза больше.",
								
								random_player($b) . " изобрази минет на бутылке",
								
								random_player($b) . " простил(а) бы измену богатой девушке/парню",
				];

 ?>

<!DOCTYPE html>
<html>
	<head>
		<title>DeadDrink | Игра</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<link rel="stylesheet"  href="css/blade.css">
	</head>

	<body>
<!--Navigation-->
<nav>
  <div class="nav-wrapper deep-purple lighten-5" id="nav-scroll">
     <span href="#" class="brand-logo" style="padding-left: 20px; font-size: 40px;">DeadDrink</span>
     <a href="#" class="sidenav-trigger" data-target="mobile-nav" style="color: black;"><i class="material-icons">menu</i></a>
     <ul id="nav-mobile" class="valign-wrapper left hide-on-med-and-down" style="padding-left:17em; ">
        <li><a href="index.html" class="pt0" style="color:black;"><i class="fas fa-home"></i> Главная</a></li>
        <li><a href="about.html" class="pt0" style="color:black;"><i class="fas fa-mobile-alt"></i> О нас</a></li>
     </ul>
  </div> 
</nav>

  <ul class="sidenav" id="mobile-nav">
    <li><a href="index.html" style="color:black;"><i class="fas fa-home"></i> Главная</a></li>
    <li><a href="about.html" style="color:black;"><i class="fas fa-mobile-alt"></i> О нас</a></li>
  </ul>
<!--Navigation-->

<!--Content-->
<main>
	<div class="row container jumbotron" style="margin-top:100px;border-radius: 0.3rem;">
			<h1 class="brand-logo-font-2" style="font-size: 90px;">Задание</h1>
			<p class="m0" style="font-size: 23px;" ><?= random_task($strings); ?></p>
			<button type="button" class="btn-large waves-effect waves-light col s12" onClick="playAudioSuccess();" style="margin-right:5em; margin-top: 30px; id="myLink">Выполнено</button>
			<button name="drink" class="btn-large waves-effect waves-light red col s12" type="button" onClick="playAudioDrink();" style="margin-top: 30px; margin-bottom: 10px;">Выпить</button>
	</div> 
</main>
<!--Content-->

<!--Footer-->
	<footer class="page-footer" style="background:#d1ccc0; padding-bottom:15px;" >
		<div class="container" style="color:gray; text-align:center;">© 2019 Все права защищены
			<a class="right" href="https://vk.com/maxlestor" style="border:0;" title="Мы Вконтакте"><i class="fab fa-vk" style="color: blue; font-size:1.2em;"></i></a>
			<a class="right" href="https://www.instagram.com/_maxlestor_/" style="margin-right:10px;" title="Мы в Instagram"><i class="fab fa-instagram" style="color: red; font-size: 1.2em;"></i></a>
		</div>
	</footer>
<!--Footer-->

		<!--JavaScript at end of body for optimized loading-->
				<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js">
				</script>
				<script src="js/add_new_input.js"></script>
				<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
				<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.9"></script>
				<script src="js/blade.js"></script>
	</body>
</html>
