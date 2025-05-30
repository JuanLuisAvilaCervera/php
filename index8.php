


<?php
    $mysqli = new mysqli("localhost","root","admin","miranda-database");

    if ($mysqli -> connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
    exit();
    }


    echo '<form method="post"><input type="submit" value="Send" name="submit"></form>';


    if(isset($_POST["submit"])){ 
        $sql = "INSERT INTO room (room_number , description , offer , price , discount , cancellation_policy , room_type , photos ) 
        VALUES (200 , 'Description' , false , 99.99 , 0.14 , 'Cancelation' , 'Single Bed' , '[]')";
        $result = $mysqli -> query($sql);
        print_r($result);
    }else{
        $sql = "SELECT * FROM room;";    
        $roomArray = $result;

        foreach($roomArray as $key => $room){
            echo "<ol>";

            foreach( $room as $key => $value){

                echo "<li>{$key}: {$value}</li>";
            }

            echo "</ol>";

        }
        $result -> free_result();
    }

    $mysqli -> close();

?>
