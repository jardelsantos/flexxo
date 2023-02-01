<?php

$palavra = '';
$tam_palavra = 0;
$letra = '';
$lacuna="_";
$vida=5;
$acerto = 0;
$i = 0;
$pontos=0;


function inicializa(){
	global $vida;

	obterPalavra();

	while($vida>0)
	{
			$acerto = false;
			desenhaPalavra();
			obterLetra();
			$continua = decisaoDeVitoria();
			if(!$continua){
				break;
			}
	}
}
function obterPalavra(){
	global $palavra , $tam_palavra, $lacuna;

	$palavra = readline("\n\nDigite a palavra secreta:\n\n");
	
	$tam_palavra = strlen($palavra);
	
	for($i=0;$i<$tam_palavra;$i++){
   	$lacuna[$i]='-';
	}
}
function desenhaPalavra(){
	global $lacuna;
	echo "\n $lacuna \n";
}
function obterLetra(){
	global $letra,$tam_palavra,$palavra,$lacuna,$pontos,$acerto;

	$letra = readline("\n digite uma letra: ");

	for($i=0;$i<$tam_palavra;$i++)
    {
        if($letra[0]==$palavra[$i])
        {
            $lacuna[$i]=$palavra[$i];
            $pontos++;
            $acerto = true;
        }
    }

}
function decisaoDeVitoria(){
	global $acerto, $vida, $palavra, $pontos, $tam_palavra;	
	
	if( !$acerto ) {
        $vida++;

        if($vida==0) {
			 exibirMensagem('VOCE FOI ENFORCADO!');
            exibirMensagem('A PALAVRA ERA:' . $palavra);
            return false;
        }
        else{
            exibirMensagem('VOCE ERROU! RESTAM' . $vida . 'VIDA(S)'); 
        }
    } 
    else{
        if($pontos==$tam_palavra) {
			exibirMensagem('VOCE GANHOU!');
			exibirMensagem('A PALAVRA E:' . $palavra);
           return false;
        }
        else {
			exibirMensagem('VOCE ACERTOU A LETRA!');
        }
    }
	return true;

}
function exibirMensagem( $msg ){
	 echo "\n\n $msg \n";
}


inicializa();
