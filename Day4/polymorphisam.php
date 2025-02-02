<html>
    <body>
        <?php
        //polymorphism
        class shape{
            public function calculateArea(){
                return"Area not defined!";
            }
        }
        class circle extends shape{
            public $radius;
            public function calculateArea(){
            return 3.14 *($this -> radius *$this -> radius);
            }
            }
            class rectangle extends shape{ 
                public $length;
                public $width;
                public function calculateArea(){
                    return $this->length * $this->width;
                }
            }
            $circle = new circle();
            $circle->radius = 5;
            echo "circle Area :".$circle->calculateArea()."<br>";


            $rect = new rectangle();
            $rect->length = 7;
            $rect->width = 12;
            echo "rectangle Area :".$rect->calculateArea()."<br>";
        ?>
        </body>
        </html>