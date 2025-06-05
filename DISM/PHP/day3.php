<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<h1>Array</h1>
<?php 

//Array
echo "<h2> INDEXED ARRAY </h2>";
echo "<h3> One Dimentional </h3>";

$a = [1, 3, 5, 7, 9, 11, 13];
//or
$b = array(2, 4, 6, 8, 10);
$c = array("A", "B", "C", "D");
$d = array(2, "X", true, 3.9, null);

echo $a[0];
echo $a[1];
echo $a[2];
echo $a[3];
echo $a[4];

echo "<hr>";

//echo $a; -- ERROR
//print_r($a);  -- method to print elements of an array without loop or indexing

// for($i = 0; $i < 5; $i++){
//     echo $a[$i];
// }

// echo count($a);

// echo "<br>";

// for($i = 0; $i < count($b); $i++){
//     echo $b[$i];
// }

// foreach($c as $n){
//     echo $n;
// }

// echo "<h3> Multi-dimentional </h3>";
// $m = [
//     [2, 4, 6, 8 , 10],
//     ["A", "B", "C", "D"],
//     [1, 3, 5, 7, 9]
// ];

// echo $m[1][2];
// echo $m[2][4];

// echo "<hr>";

// foreach($m as $md){
//     foreach($md as $dmd){
//         echo $dmd;
//         echo "<br>";
//     }
//     //echo "<br>";
// }


// ////////////////////////////////////////////

// echo "<h2> ASSOCIATIVE ARRAY </h2>";
// echo "<h3> Single Dimentional </h3>";


// $assoc = ["name" => "Ali", "age" => 21, "city" => "Karachi"];

// echo $assoc["name"];
// echo $assoc["age"];
// echo $assoc["city"];

// echo "<br>";

// foreach($assoc as $a){
//     echo $a;
// }

// echo "<br>";

// foreach($assoc as $k => $v){
//     echo $k . ": " . $v . "<br>";
// }

// echo "<h3> Multi-dimentional </h3>";

// //$assoc = ["name" => "Ali", "age" => 21, "city" => "Karachi"];

// $students =[
//     "std1" => ["name" => "Haris", "age" => 21, "city" => "Karachi"],
//     "std2" => ["name" => "Minhaj", "age" => 25, "city" => "Lahore"],
//     "std3" => ["name" => "Owais", "age" => 29, "city" => "Multan"]
// ];

// // echo $students["std2"]["name"];
// // echo $students["std2"]["age"];
// // echo $students["std2"]["city"];

// foreach($students as $stds => $data){
//     echo $stds . "<br>";
//     foreach($data as $key => $value){
//         echo $key . " " . $value . "<br>";
//     }
// }


?>
</body>
</html>