function temporizador(segundos) {
    while(segundos>0)
    tiempo=pasarSegundo (segundos);
}


function temporizador(minutos, segundos){

    tiempo=minutos*60+segundos;
    while(segundos>0)
    tiempo=pasarSegundo (tiempo);
}

function pasarSegundo(tiempo){

    setTimeout(console.log(tiempo),1000)
    return tiempo -1;

}

temporizador (77);




