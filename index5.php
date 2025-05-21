<?php
    $mysqli = new mysqli("localhost","root","admin","miranda-database");

    if ($mysqli -> connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
    exit();
    }

    $sql = "SELECT * FROM room;";
    $result = $mysqli -> query($sql);



    $roomArray = $result;

    foreach($roomArray as $key => $room){
        echo "<ol>";

        foreach( $room as $key => $value){

            echo "<li>{$key}: {$value}</li>";
        }

        echo "</ol>";
  
    }
    $result -> free_result();

    $mysqli -> close();

?>
