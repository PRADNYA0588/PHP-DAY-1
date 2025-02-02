<html>
    <body>
        <?php
        //Classes and Objects
        class  Car{
            public $brand;   //Property of the Car
            public $color;   //Property of the Car
            //private
            //protected
            public function startEngine(){       
                //Method
                return "The engine is starting....";
            }
        }
        //create an object
        $car = new Car();
        $car-> brand ="Mercedes";
        $car-> color ="Black";
        echo "Car Brand:",$car->brand."<br>";
        echo $car -> startEngine();
        ?>
        </html>
</body>
