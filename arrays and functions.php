<html>
   </body>
   <?php
   //arrays and functions
   //arrays indexed

   $fruits=["Banana","Apple","Chreey","Orange"];
   echo "selected fruit : " . $fruits[1];
   foreach($fruits as $fruit){
    echo "<br> fruit :.". $fruit;
   }

   //Associative aarays 
   echo "<br>";
   $ages=["john" => 25, "raj" => 18, "alice" => 22];
    echo "selected age :". $ages ["alice"];
   foreach ($ages as $name => $age){
    echo "<br>" . $name ." is " . $age ." years old ";
   }

   //multi dimensional array 
   echo "<br>";
   $students=[
    ["john",25,false],
    ["raj",18,true],
    ["alice",22,false]
   ];
   echo "<br> student 1 is present in the class:" .$students[0][2];

   //arrays manipulation


   $classroom = ["stuart","ben","rick"];
   foreach($classroom as $student){
    echo"<br> student: ". $student;
   }

   //adding elements


   $classroom[] = "alen";
   array_push($classroom,"xavier");
    foreach($classroom as $student){
        echo "<br> student:" . $student;
    }

    //updating
    echo "<br>";
    $classroom[2] = "raj";
    foreach($classroom as $student){
        echo "<br> student:" .$student;
    }

    //counting elements
    echo "<br><br>";
    echo "number of elements in the array are :" . count($classroom);

    //deleting elements
    unset($classroom[1]);
    echo"<br>";
    print_r($classroom);

    //re-indexing elements
    $classroom = array_values($classroom);
    echo "<br>";
    print_r($classroom);
   ?>
       </body>
   <html>