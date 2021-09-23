var tempo = 0
var mexeu = 0;

setInterval(function(){
	tempo++;

document.onmousemove = function(e){
	mexeu=1;
}

console.log(tempo);

	if(tempo == 15){
		alert('Sua sessão Expirou, logue novamente');
		window.location.href = ("http://localhost/AulaSenac/controle/logout.php");
		tempo = 0;
		mexeu = 0;
	}
}, 100);