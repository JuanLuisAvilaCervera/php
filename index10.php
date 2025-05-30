<?php 
require __DIR__ . '/vendor/autoload.php';
use eftec\bladeone\BladeOne;

    $views = __DIR__ . '/views';
    $cache = __DIR__ . '/cache';
    $blade = new BladeOne($views,$cache,BladeOne::MODE_DEBUG); // MODE_DEBUG allows to pinpoint troubles.

    $json = file_get_contents("./Rooms.json");
    $roomArray = json_decode($json);

    echo $blade->run("rooms", ["Rooms" => $roomArray])

  ?>