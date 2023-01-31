<?php

$tam_palavra = 0;
$palavra = '';
$letra = '';
$lacuna="_";
$vida=5;
$x = 0;
$i = 0;
$pontos=0;



$palavra = readline("\n\nDigite a palavra secreta:\n\n");


for($i=0;$i<strlen($palavra);$i++){
    $lacuna[$i]='-';
}

$tam_palavra=strlen($palavra);

while($vida>0)
{


    $x=0;
    echo "\n $lacuna \n";
    $letra = readline("\n digite uma letra: ");

    for($i=0;$i<strlen($palavra);$i++)
    {
        if($letra[0]==$palavra[$i])
        {
            $lacuna[$i]=$palavra[$i];
            $pontos++;
            $x++;
        }
    }

    if($x==0) {
        $vida=$vida-1;

        if($vida==0) {
            echo "\n\n VOCE FOI ENFORCADO!";
            echo "\n A PALAVRA ERA: " . $palavra;
            break;
        }
        else{
            echo "\n VOCE ERROU! RESTAM $vida VIDA(S)"; 
        }
    } 
    else{
        if($pontos==$tam_palavra) {
            echo "\n\n VOCE GANHOU!";
            echo "\n A PALAVRA E:" . $palavra;
            break;
        }
        else {
            echo "\n VOCE ACERTOU A LETRA!";
        }
    }
} 

echo "\n\n";
