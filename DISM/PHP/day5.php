<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- <form action="day5.php" method="post">

        <label for="">Name</label>
        <input name="name" type="text" required> <br>

        <label for="">Age</label>
        <input name="age" type="number" required> <br>

        <label for="">City</label>
        <input name="city" type="text" required> <br>

        <button name="sub" type="submit">Submit</button>

    </form> -->

<?php

// ---- GET ----
// if(ISSET($_GET["sub"])){
//     $n = $_GET["name"];
//     $a = $_GET["age"];
//     $c = $_GET["city"];

//     echo $n . " " . $a . " " . $c;
// }


// ---- POST -----

// if(ISSET($_POST["sub"])){
//     $n = $_POST["name"];
//     $a = $_POST["age"];
//     $c = $_POST["city"];

//     echo $n . " " . $a . " " . $c;

//     $ins = "INSERT INTO students (naam, age, email, city) VALUES ('$n',  '$a', '$e', '$c')";

//     $abc = mysqli_query($con, $ins);

//     if($abc){
//         echo "<script>
//         alert('REcord added successfully');
//         </script>";
//     }

//break

// for($i = 1; $i < 20; $i++){
//     echo $i . "<br>";
//     break;
// }

// for($i = 1; $i < 20; $i++){
//     if($i == 17){
//         break;
//     }
//     echo $i . "<br>";
// }

// for($i = 0; $i <= 20; $i = $i+2){
//     echo $i . "<br>";
// }

// for($i = 0; $i <= 20; $i++){
//     if($i%2 == 0){
//         echo $i . "<br>";
//     }
// }

// for($i = 0; $i <= 20; $i++){
//     if($i%2 == 1){
//         continue;
//     }
//     echo $i . "<br>";
// }


//-------  Pattern Matching -------

$text = "Hello Guys! We are Learning PHP :)";
$pattern = "/PHP/";
$replace = "HyperText Preprocessor";

// if(preg_match($pattern, $text)){
//     echo "Match Found";
// }
// else{
//     echo "Match NOT Found";
// }

$replaced = preg_replace($pattern, $replace, $text);
    echo $replaced;




?>
</body>
</html>