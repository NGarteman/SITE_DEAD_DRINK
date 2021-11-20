//Прелоадер
window.onload = function() {
    setTimeout(function(){
       var preloader = document.getElementById('page-preloader');
       if( !preloader.classList.contains('done'))
       {
           preloader.classList.add('done');	
       }
   }, 1250);
   }


//Печатание текста
   var typed = new Typed("#type", 
        {
            strings: ['^1000 Это не просто блять игра, это то <br>что превратит вашу скучную тусу в нечто невообразимо<br> эпичное, хардкорное и иногда доводящее, до слез приключение<br> на вашу жопу. Лол удачи че.'],
            typeSpeed: 20,
        }
   );

//audio
 function playAudioSuccess(){

   
        var myAudio = new Audio;
        myAudio.src = "audio/1.mp3";
        myAudio.play();
    
    setTimeout(function(){
        location.reload()        
    }, 600)

}

function playAudioDrink(){

   
    var myAudio = new Audio;
    myAudio.src = "audio/2.mp3";
    myAudio.play();

setTimeout(function(){
    location.reload()        
}, 2000)


}
$(function(){
	$('.jumbotron').animate({
		 
	}, 3000)
})



   

 

