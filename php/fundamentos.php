<?php
//estrutura do PHP


//comentário em linha

/**
 * 
 * Comentário em bloco 
 * */

 echo"Hello, word!<br>";

 
//tipos de dados
//String tioSAM;

/**Para declarar uma variavel em php
 * devemos usar o sinal de $
 */

 $nome= "Torantina Macedo"; // string
 $idade = 18; // inteira
 $altura = 1.75; // double
 $peso = 61; // double
 $isVacinada = true; //boolean

 echo "Nome  $nome<br> idade  $idade <br>  altura  $altura <br>   peso  $peso <br>  vacinado?  $isVacinada<br> ";

 //CONDICIONAIS
 if($idade >=18){
    echo"$nome é maior de idade e possui $idade anos";
 }else{
    echo"$nome é menor de idade e possui $idade anos";
 }

 echo "<br>LAÇOS<br>";

 for($i = 1; $i <= 100; $i++){
    echo "$i <br>";
    if($i % 2== 0)
    echo " par: $i <br>";
 }

 
?>