<?php

function saludar(){
    echo 'Hola <br>';
}

saludar();

function getSaludo(){
    return 'Hola';
}

echo getSaludo();

function saludar2($nombre){
    echo "Hola $nombre<br>";
}
saludar2("pepe");

function saludar3($nombre, $apellido){
    echo "Hola $nombre $apellido<br>";
}
saludar3("Pepe", "abc");

function saludar4($nombre, $apellido=null){
    if(empty($apellido)){
        echo "Hola $nombre<br>";
    } else {
        echo "Hola $nombre $apellido<br>";
    }
    
}
saludar3("Pepe", "abc");

/**
 * COMENTARRRRRRRRRRRRRRR
 */
function saludar5(...$params){
$nombre= $params[0];
$apellido = $params[1];
echo "Hola $nombre $apellido <br>";
}
saludar5("Pedro", "LKJ", 25, "Si", 1.80, false);

function saludar6(string $nombre, int $edad){
echo "Hola $nombre<br>";
}

