<pre><?php 

    class Room {
        public int $id;
        public string $name;
        public int $number;
        public float $price;
        public float $discount;



        public function __construct(int $id, string $name , int $number = 0, float $price , float $discount) {
            $this->id = $id;
            $this->name = $name;
            $this->number = $number;
            $this->price = $price;
            $this->discount = $discount;
        }

        public function get_id(){
            return $this->id;
        }
    }

    // Pass both parameters.
    $room1 = new Room(1, "Double", 101, 99.99, 0.12);
    $room2 = new Room(2, "Single", 102, 78.99, 0.1);
    $room3 = new Room(3, "Suite", 103, 129.99, 0.15);

    $roomArray = array($room1 , $room2 , $room3);

    print_r($roomArray)


?></pre>