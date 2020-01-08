<?php
// este script crea un password aleatorio 
//para los cambios de password de los usuarios
// $lengt = longitud del pass generado
// $characters : agregar minusculas y/o simbolos para pass ultra seguras

function generateRandomString($length = 6) {
    $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

echo generateRandomString();
?>