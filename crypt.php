<?php
// Algoritmo similar ou ate mesmo igual usado pelo laravel para auth.
$input_senha = 'haluch';
$bd_senha    = 'haluch';
$salto  = bin2hex(openssl_random_pseudo_bytes(22));
$hash = crypt($input_senha,"$2a$12$". $salto);
echo  ( crypt($bd_senha, $hash) == $hash ) ? '1' : '0';
// Fim...

exit;
$string = '12540010JR';
$acao   = 'encode';
$pass   = '10';

switch ($acao) {
    case 'encode':
    function encode($string,$pass = 5){
        $pass > 10 ?  exit('error...') : '';
        for ($i=1 ; $i<=$pass ; $i++){
           $string = base64_encode($string);
        } 
        return $string;
    }

    echo encode ($string,$pass);
    break;

    case 'decode':
    function decode($string,$pass = 5){
        $pass > 10  ? exit('Error...') : '';
        for ($i=1 ; $i<=$pass ; $i++){
            $string = base64_decode($string);
        }        
        return $string;
    }

    echo decode ($string,$pass);
    break;
}
   


   