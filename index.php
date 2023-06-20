<?php
    $nome = "esther";
    $idade = 17;
    $altura = 1.53;
    $peso = 53;

    $imc = $peso/($altura*$altura);

    if($imc <18.5){
        echo "Peso abaixo";
    }else if($imc >=18.6 && $imc <=24.9){
        echo "Peso normal";
    }else if($imc >=25 && $imc <=29.9){
        echo "Sobre peso";
    }else if($imc >=30 && $imc <=34.9){
        echo "Obsidade grau 1";
    }else if($imc >=35 && $imc <=39.9){
        echo "Obsidade grau 2";
    }else{
        echo "Obsidade grau 3";
    }

    echo "<h1>".intval($imc)."<h1>";
    

?>