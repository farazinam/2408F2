<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<h1>Function - Methods</h1>
<?php 
echo "<h2> Non-Parametarized and No return </h2>";
function greet(){
    echo "Hello PHP";
}

function add(){
    $num1 = 5;
    $num2 = 10;
    echo $num1 + $num2;
}

greet();
add();

echo "<h2> Parametarized and No return </h2>";
function addition($num1 = 1, $num2 = 9){
    $res = $num1 + $num2;
    echo $res;
}

addition(12, 22);
addition(2, 6);
addition(23);
addition();

echo "<h2> Non Parametarized and Return </h2>";

function npwithRet1(){
    return "Hello return function";
}

//echo npwithRet();
// $show = npwithRet1();
// echo $show;

function npwithRet2(){
    return "Hello return function";
}
$show = npwithRet2();
echo $show . " Aptech Learning";

echo "<h2> Parametarized and Return </h2>";

function paraWithRet($fname, $lname){
    $fullname = $fname . $lname;
    return $fullname;
}

echo paraWithRet("Faraz ", "Inam");
?>
</body>
</html>