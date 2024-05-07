<?php
$name="Elmer";
$isDev=true;
$age=25;

var_dump($name);
gettype($name);
$isold=$age <50;


//variable ternarias
$outputEdad=$isold
? "Es menor de 50"
: "Es mayor de 50";


$edadMatch=match($age){
    25=>"Tienes 25 años",
    26, 27, 28=>"Tienes 26 años",
    default=>"Tienes otra edad"
};
$outputmatch=match(true)
{
    $isold<25=>"Es menor de 25",
    $isold<50=>"Es menor de 50",
};

//uso de array

$idiomas=["español","ingles","frances"];


// uso diccionario

$persona=[
    "nombre"=>"Elmer",
    "edad"=>25,
    "profesion"=>"Desarrollador",
    "idiomas"=>["español","ingles","frances"],
];
//sobreescribir valores
$persona["nombre"]="Elmer";
$persona["idiomas"][0]="español";


?> 
//iterar array
<?php foreach($idiomas as $idioma): ?>
    <h1><? echo $idioma; ?></h1>
    <?php endforeach; ?>


//uso de if en php

    <?php if ($isold) : ?>
    <h1>Es menor de 50</h1>
    <?php elseif ($isDev) : ?>
    <h1>Es desarrollador</h1>
    <?php else : ?>
        <h2>eres joven felicidades </h2>
    <?php endif; ?>





