
<form><input type="submit" value="Send" name="submit"></form>


<?php
    $mysqli = new mysqli("localhost","root","admin","miranda-database");

    if ($mysqli -> connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
    exit();
    }

    $sql = "SELECT * FROM room;";


    if(isset($_GET["submit"])) $sql = "SELECT * FROM room WHERE idroom = 4";

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
