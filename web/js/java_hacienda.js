window.addEventListener ('load', todo);

function todo (){
var galleta= document.querySelector ('#cookies');



var cokie =localStorage.getItem('cookies_si');

if (cokie=='aceptadas') {
	galleta.style.display='none';
}else{
	galleta.style.display='block';
}

var btn= document.querySelector ('#chao');

btn.addEventListener('click', function (){
	localStorage.setItem ('cookies_si','aceptadas');
	galleta.style.display='none';
})
	
}




