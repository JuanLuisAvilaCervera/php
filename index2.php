<pre><?php 

$json = file_get_contents("./Rooms.json");
  $roomArray = json_decode($json);

    print_r($roomArray)


?></pre>