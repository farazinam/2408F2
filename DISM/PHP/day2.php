<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<h1>Conditional Statement</h1>
<?php 
//if
//if else
//if else if (ladder)
//nested if
//switch

//if 
//$age = 22;
// if($age == 20){
// echo "You are eligible";
// }

//if else
// if($age == 22){
//     echo "You are eligible";
//     }
// else{
//     echo "You are not eligible";
// }

// if else if (ladder)

//nested if
// $num = 21;
// if($num > 10){
//     echo "Number is Greater then 10 <br>";
//     if($num > 15){
//         echo "Also Greater then 15 <br>";
//         if($num > 20){
//         echo "Janab Number to 20 se bh bara hai <br>";
//         }
//         else{
//             echo "But not greater than 20 <br>";
//         }
//     }
//     else{
//         echo "But not greater than 15 <br>";
//     }
// }

//switch
// $month = "SEPTEMBER";
// $month = strtolower($month);
// switch($month){
//     case "january":
//     case "march":
//     case "may":
//     case "july":
//     case "august":
//     case "october":
//     case "december":
//         echo $month . " Month contains 31 Days";
//         break;
//     case "february":
//         echo $month . " Month contains 28 Days";
//         break;
//     case "april":
//     case "june":
//     case "september":
//     case "november":
//         echo $month . " Month contains 30 Days";
//         break;
//     default :
//     echo "Please Provide correct Month";
// }

echo "<h1>Loop</h1>";

// echo "Hello World <br>";
// echo "Hello World <br>";
// echo "Hello World <br>";
// echo "Hello World <br>";
// echo "Hello World <br>";
// echo "Hello World <br>";
// echo "Hello World <br>";
// echo "Hello World <br>";
// echo "Hello World <br>";
// echo "Hello World <br>";

//for
//while
//do while

// for($i = 1; $i < 11; $i++){
//     echo $i . " Welcome <br>";
// }

// for($i = 11; $i < 0; $i++){
//     echo $i . " Welcome <br>";
// }

//for 
$table = 17;
for($i = 1; $i <= 10; $i++){
    echo $table . " X " . $i . " = " . $i*$table . "<br>";
}


//while
$i = 1;
while($i < 1){
    echo $i . " I am While loop <br>";
    $i++;
}


//do while
$n = 1;
do{
    echo $n . " I am While loop <br>"; 
    $n++;
}
while($n < 1)

?>

</body>
</html>