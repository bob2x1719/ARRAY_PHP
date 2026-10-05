<?php

$filmes = [
    ["Filme" => "Bob Esponja: Um Herói Fora da Água", "Genero" => "Ação"],
    ["Filme" => "Bob Esponja: O Filme", "Genero" => "Animação"],
    ["Filme" => "Bob Esponja: O Íncrivel Resgate", "Genero" => "Ação"],
    ["Filme" => "Bob Esponja: Em Busca da Calça Quadrada", "Genero" => "Comédia"]
];


echo "Filmes de 2026:" . PHP_EOL;
echo $filmes[0]["Filme"] . " - " . $filmes[0]["Genero"] . PHP_EOL;
echo $filmes[1]["Filme"] . " - " . $filmes[1]["Genero"] . PHP_EOL;

?>