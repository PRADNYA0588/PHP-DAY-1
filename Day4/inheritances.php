<html>
    <body>
        <?php
        //inheritance
        class animal{
            public function makeSound(){
                return "some genetic sound";
        }
    }
    class cat extends animal{
        public function makeSound(){
             return "meeow <br>";
        }
    }
    class dog extends animal{
    public function makeSound(){
        return "meeow <br>";
        }
    }  
    $dog = new Dog();
    echo $dog->makesound();
    $cat=new cat();
    echo $cat->makesound();
        ?>
        </html>
</body>
