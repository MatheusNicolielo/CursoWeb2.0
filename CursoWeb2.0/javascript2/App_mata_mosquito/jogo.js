var altura=0;
var largura=0;
var vidas = 1;
var tempo = 10;

var criaMosquitoTempo = 1500;

var nivel = window.location.search
nivel = nivel.replace('?','')

if(nivel === 'normal'){
    //1500
    criaMosquitoTempo = 1500;
}else if (nivel === 'dificil'){
    //1000
    criaMosquitoTempo = 1000;
}else if (nivel === 'chucknorris'){
    //750
    criaMosquitoTempo = 750;
}

function ajustaTamanhoPalcoJogo(){    
    altura = window.innerHeight;
    largura = window.innerWidth;
}

ajustaTamanhoPalcoJogo();

var cronometro = setInterval(function(){
    tempo--;
    if(tempo < 0){
        //Vitória
        clearInterval(cronometro);
        clearInterval(criaMosquito);
        window.location.href = "vitoria.html"
    }else
        document.getElementById('cronometro').innerHTML = tempo;
},1000)

function posicaoRandomica(){

    //remover o mosquito anterior (caso exista)
    if(document.getElementById('mosquito')){
        document.getElementById('mosquito').remove();
        if(vidas > 3){
            //Game Over
            window.location.href = 'game_over.html';
        }
        document.getElementById('v' + vidas).src="imagens/coracao_vazio.png"
        vidas++;
    }
    var posicaoX = Math.floor(Math.random()*altura) - 90
    var posicaoY = Math.floor(Math.random()*largura) - 90

    posicaoX = posicaoX < 0 ? 0 : posicaoX;
    posicaoY = posicaoY < 0 ? 0 : posicaoY;

    //Criar o elemento html

    var mosquito = document.createElement('img')
    mosquito.src = 'imagens/mosca.png';
    mosquito.className = tamanhoAleatorio() + ' ' + ladoAleatorio();
    mosquito.style.left = posicaoX + 'px';
    mosquito.style.top = posicaoY + 'px';
    mosquito.style.position = 'absolute';
    mosquito.id = 'mosquito';
    mosquito.onclick = function(){
        this.remove();
    }

    document.body.appendChild(mosquito)



}

function tamanhoAleatorio(){
    var classe = Math.floor(Math.random() * 3)
    switch(classe){
        case 0 :
            return 'mosquito1'
        case 1 : 
            return 'mosquito2'
        case 2 :
            return 'mosquito3'
    }
}

function ladoAleatorio(){
    var lado = Math.floor(Math.random() * 2)
    switch(lado){
        case 0 :
            return 'ladoA'
        case 1 : 
            return 'ladoB'
    } 
}