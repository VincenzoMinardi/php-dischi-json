<?php
// Collegare con file_get_contents il file Json per far vedere tutto a schermo
$ArrSong = file_get_contents('cards-albums.json');
// $ArrSong = [
//     [
//         'img' => 'img/NewJersey.jpg',
//         'title' => 'New Jersey',
//         'author' => 'Bon Jovi',
//         'year' => '1988'
//     ],
//     [
//         'img' => 'img/LiveatWembley.jpg',
//         'title' => 'Live at Wembley 86',
//         'author' => 'Queen',
//         'year' => '1992'
//     ],
//     [
//         'img' => 'img/Summoner.jpg',
//         'title' => "Ten's Summoner's Tales",
//         'author' => 'Sting',
//         'year' => '1993'
//     ],
//     [
//         'img' => 'img/Stevegaddband.jpg',
//         'title' => 'Steve Gadd band',
//         'author' => 'Steve Gadd Band',
//         'year' => '2018'
//     ],
//     [
//         'img' => 'img/bravenewworld.jpg',
//         'title' => 'Brave new world',
//         'author' => 'Iron Maiden',
//         'year' => '2000'
//     ],
//     [
//         'img' => 'img/Onemorecar.jpg',
//         'title' => 'One more car one more rider',
//         'author' => 'Eric Clapton',
//         'year' => '2002'
//     ]
// ];

// Serve Per generare l'array da file PHP a file JSON

$json_string = json_encode($ArrSong);
// file_put_contents('cards-albums.json', $json_string);

// Stampare a schermo l'array

echo ($ArrSong);
