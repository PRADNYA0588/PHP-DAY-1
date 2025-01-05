<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
//This is single line comment
//echo "Hello World!";
echo "Hello World";
echo"This is a comment example";
$name = "Pradnya";   //String
$age =18;            //Integer
$time =14.46;        //Float
$class = true;       //Boolean
//compound types
$Students_arr = array("Pankaj","Karan","vednya");     //Arrays
class Student{      //Class
    public $marks;
}
$Stud = new Student();   //Object
$Stud->marks = 90;
//Special Types
$null_var = null;
echo " <br> String : " ,$name;
echo " <br> Integer : " ,$age;
echo " <br> Float : " ,$time;
echo " <br> Boolean : " ,$class;
echo " <br> Array : ", $Students_arr[0];
echo "Null : " ,$null_var;
/* This is multiline comments
Developed for php session*/
?>   
</body>
</html>