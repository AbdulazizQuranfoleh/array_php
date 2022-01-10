<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

$color = array('white', 'green', 'red', 'blue', 'black');
echo "The memory of that scene for me is like a frame of film forever frozen at that moment: the $color[2] carpet, the $color[1] lawn, the $color[0] house, the leaden sky. The new president and his first lady. - Richard M. Nixon";
echo"<br>";
echo"<br>";

$colors=["Green","Red","white"];

foreach($colors as $colors){
   echo "<li>".$colors."</li>";
}
echo"<br>";
$cities=["Italy"=>"Rome",
"france"=>"paris",
"Germany"=>"Berlin",
"Greece"=>"Athens"];
// foreach($cities as $cities){
//     echo($cities);
//     echo"<br>";
// }

echo $cities["Greece"];
echo"<br>";
echo $cities["Germany"];
$colors=["Green","Red","white"];
echo"<br>";
echo $colors[0];

echo"<br>";
$original = array( 1, 2, 3, 4, 5 );
$inserted = array( '$' ); 
 array_splice( $original, 3,0 , $inserted );
print_r($original);



echo"<br>";
$fruits = array("d"=>"lemon", "a"=>"orange", "b"=>"banana", "c"=>"apple");
ksort($fruits);
foreach ($fruits as $key => $val) {
    echo"<br>";
    echo "$key = $val";
}
echo"<br>";
$month_temp = "78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 81, 76, 73,
68, 72, 73, 75, 65, 74, 63, 67, 65, 64, 68, 73, 75, 79, 73";
$temp_array = explode(',', $month_temp);
$tot_temp = 0;
$temp_array_length = count($temp_array);
foreach($temp_array as $temp)
{
 $tot_temp += $temp;
}
 $avg_high_temp = $tot_temp/$temp_array_length;
 echo"<br>";
 echo "Average Temperature is : ".$avg_high_temp."
"; 
sort($temp_array);
echo"<br>";
echo " List of five lowest temperatures :";
for ($i=0; $i< 5; $i++)
{ 
    
echo $temp_array[$i].", ";
}
echo"<br>";
echo "List of five highest temperatures :";
for ($i=($temp_array_length-5); $i< ($temp_array_length); $i++)
{
    
echo $temp_array[$i].", ";
}

echo"<br>"; 
$array1=array("color" => "red", 2, 4);
$array2=array("a", "b", "color" => "green", "shape"=>"trapezoid", 4);
print_r(array_merge($array1,$array2));
echo"<br>";
$colors = array("red", "blue", "white", "yellow");
for($i=0;$i<4;$i++){
    echo strtoupper($colors[$i]);
    echo"<br>"; 
};
echo"<br>";
for($i=0;$i<4;$i++){
    echo strtolower($colors[$i]);
    echo"<br>"; 
};
echo implode(",",range(200,250,4));
echo"<br>";

$my_array = array("adfbcd","absdfc","desdf","hjjjfsgha","ssg","werdvb");
$new_array = array_map('strlen', $my_array);
echo "The shortest array length is " . min($new_array) .
". The longest array length is " . max($new_array).'.';

echo"<br>";
$s=range(11,20);
shuffle($s);
for ($x=0; $x< 10; $x++)
{
echo $s[$x].' ';
}


function min_values_not_zero(Array $values) 
{
return min(array_diff(array_map('intval', $values), array(0)));
}
echo"<br>";
print_r(min_values_not_zero(array(-1,0,1,12,-100,1))."\n");















?>
</body>
</html>