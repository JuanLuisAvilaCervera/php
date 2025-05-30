<?php 

$json = file_get_contents("./Rooms.json");
  $roomArray = json_decode($json);
    

  for($i = 0 ; $i < count($roomArray) ; $i++){
    echo "<ol>";

    foreach( $roomArray[$i] as $key => $value){

        echo "<li>{$key}: {$value}</li>";
    }

    echo "</ol>";
  }
?>