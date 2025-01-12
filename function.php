<hml>
    <body>
        <?php
        //function
        function firstfunction(){
            echo "hello world";
        }
        firstfunction();
        
        //with parameter function
        function greet ($name){
            echo "<br>Hello" . $name;
        }
        greet("class");

        //with default paremeter function
        function defaultparameter($name = "Guest"){
            echo"<br> hello" . $name;
        }
        defaultparameter();
        defaultparameter("Default parameter !");

        //function that returns a value 
        function multiply($a,$b){
            return $a*$b;
        }
        $result = multiply(8,9);
        echo "<br>" . $result;

        //function by value example
        function addten($num){
            $num+=10;
            echo "<br> function value:". $num;
        }
        $x=5;
        addten($x);
        echo "<br> function value:". $x;
        echo "<br>";


        //function by reference example

        function addtenbyrefer($num){
            $num+=10;
            echo "<br> function value:". $num;
        }
        $y=5;
        addtenbyrefer($y);
        echo "<br> function value:". $y;
        echo "<br>";

        //early returning the values and functions(conditional return)

        function checkEvenOdd($num){
            if ($num % 2 == 0){
                return  "Even";
            }
              return "Odd";
        }
            echo "<br>";
            echo checkEvenOdd(18);
            echo"<br>";
            echo checkEvenOdd(15);
        
            ?>
</body>
<html>