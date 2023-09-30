<!DOCTYPE html>
<html>
<body>

<head>
    <title>Intro</title>
</head>

<?php

//Print hello 
echo "Hello Pratham <hr/>";


//variable declaration
$x = 10;
echo "$x  <hr/>";




//static keyword
function test1(){
    static $y=15;
    echo $y;
    $y++;

}test1();
echo "<br>";
test1();
echo "<br>";




//global keyword
function test2(){
    global $x;
    echo $x;
}test2();
echo "<br>";

//echo v/s print

$a=10;
$txt1="Hi I am Pratham";
echo "<h1>".$txt1.$a."</h1>";


//array
$sports = array("Cricket","Football",44);
var_dump($sports);
echo"<br>";

//reverse string
echo strrev("Bahubali");
echo"<br>";

echo"<hr/>";


//find position of the word
echo strpos(" 1 MEdice","MEdice");
echo"<br>";

$car = "volvo";
switch($car){
    case "volvo":
        echo("You drive a VOLVO!");
        break;
    case "BMW":
        echo("YOu drive a BMW");
        break;
    default:
        echo("You dont drive");
};

echo"<hr/>";



//While loop
echo"<u>While Loop</u> <br>";

$ab = 5;
while($ab<=10){
echo"The numberr is $ab <br>";
$ab++;
};

echo"<hr/>";

//Do while loop

Echo"<u>Do while loop</u> <br>";
$aa=9;
do{
    echo"The number is $aa <br>";
    $aa++;
}while($aa<=10);

echo"<hr/>";


//FOR Loop
echo"<u>for loop</u><br>";
 for ($c = 0 ; $c <= 10 ; $c++) {
    echo "The number is: $c <br>";
 }

 echo"<hr/>";

 //For each array loop
 echo "<u>For Each Loop</u><br>";
 $carss = array("bmw", "merc", "audi",9);
 foreach($carss as $value){
    echo "$value <br> ";
    var_dump($value); //optional
 }
echo"<hr/>";

 
//Basic Function is declared here but the function is called on line 140
 function display_texxt(){
    echo"Helo";
}

//Custom Function
 echo"<u>Custom Function</u><br>";
function myCar($car , $color){
    echo"$car , $color<br>";
}
myCar("volvo","blue");
myCar("mercedes", null);
echo"<hr/>";



//The function display_texxt of line 124 is called here
display_texxt(); echo"<hr/>";




//Default Arguement
function myAge($minAge=10){
    echo"My Age is $minAge <br>";
}
myAge();
myAge(25);
echo"<hr/>";

//Returning Arguements
function add($x,$y){
    $z = $x + $y;
    return $z;
}
echo "1+2 =".add(1,2)."<br>";
echo "50+65=".add(50,65)."<br>"."<hr/>"; 


//Indexed Arrays
$colors= array("Blue","Green", "Red");
    echo "My Favorite Colors are ".$colors[0].", ".$colors[1]. " and ".$colors[2]."<br>";

    echo count($colors)." => Count of colors in Array"."<br>";

$arraylength = count($colors);


for($col=0 ; $col < $arraylength ; $col++){
    echo $colors[$col]."<br>";
}echo"<hr/>";


//Assosiative indexing
$tscore = array("John"=>"60","Billi"=>"80","Jason"=>"90");
foreach($tscore as $key => $score){
    echo "Name of Student:- ".$key.", Marks Scored:- ".$score."<br>";
}

//If only Billi score is to be mentioned then this could be done
foreach($tscore as $key=>$score){
    if($key === "Billi"){
        echo $score;
        break;
    }
}

echo "<br>","<hr/>";


//after stating the function we also have to run the function
function testA(){
    $abc=50;
    echo $abc;
    $abc++;
}
testA();
echo "<br>";
testA();
echo "<br>","<hr/>";


//we can also concate numbers like string with " .= Assignment operator "
$w=80;
$u=70;
$w.=$u;
echo $w,"<br>","<hr/>";


//Multidimensional Array

Echo"<u>MultiDimensional Array LIke Matrix Arrangement</u><br><br>";

$grades=array(
    array("John",57,68),
    array("Alia",82,94),
);
echo "Student's Name: <u>".$grades[0][0]."</u> , Marks Scored in English: <u>".$grades[0][1]."</u>, Marks Scored in History: <u>".$grades[0][2]."</u><br>";
echo "Students Name: <U>".$grades[1][0]."</u> , Marks Scored in English: <u>".$grades[1][1]."</u>, Marks Scored in Maths: <u>".$grades[1][2]."</u><br><hr/>";



//Sorting Arrays

echo"<u>Sorting Arrays </u><br>";
$sorts= array("Shubham","Darshan","Anand","Abhijeet");
sort($sorts);

$len= count($sorts);
for($x=0;$x<$len;$x++){
    echo $sorts[$x]."<br>";
}
echo"<hr/>";

//Assosiative Indexing ReverseSorting
$alpha=array("Yogesh"=>"70","Pranav"=>"80");
arsort($alpha);

$len=count($alpha);
foreach($alpha as $x=>$value){
    echo "Name: ".$x."Money= Rs. ".$value."<br>";
}

echo "<hr/>";

//SuperGlobal Variable
echo "<u>SuperGlobal Variables</u><br>";
echo $_SERVER['PHP_SELF'];
Echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br><hr/>";

?>


</body>
</html>