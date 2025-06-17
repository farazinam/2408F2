<?php

include("connection.php");

if(isset($_POST["sub"])){
    $pn = $_POST["pname"];
    $pp = $_POST["pprice"];
    $pd = $_POST["pdesc"];

    //echo $pn . $pp . $pd;

    $insrec = "INSERT INTO products (product_name, product_price, product_description)
    VALUES ('$pn', '$pp', '$pd')";

    $done = mysqli_query($conn, $insrec);

    if($done){
        echo "<script>
        alert('Record Inserted Successfully');
        window.location.href = 'read.php';
        </script>";
    }

}

?>