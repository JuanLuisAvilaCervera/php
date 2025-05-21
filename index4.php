<?php 

    $json = file_get_contents("./Rooms.json");
    $roomArray = json_decode($json);


    function get_room_by_id($room){
        $selectedId = $_GET["id"];

        return $room->idroom == $selectedId;
    }

        
    $filtered = array_filter($roomArray , "get_room_by_id" );


    echo "<ol>";

    foreach($filtered as $filterKey => $filterValue){
        foreach( $filterValue as $key => $value){

            echo "<li>{$key}: {$value}</li>";
        }
    }
    

    echo "</ol>";
  
?>