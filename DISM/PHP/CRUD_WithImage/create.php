<?php

include("connection.php");

if(isset($_POST["sub"])){
    $pn = $_POST["pname"];
    $pp = $_POST["pprice"];
    $pi = $_FILES["pimage"];
    $pd = $_POST["pdesc"];

    $img_name = $pi["name"];
    $img_tmp = $pi["tmp_name"];
    // $img_size = $pi["size"];
    // $img_error = $pi["error"];
    // $img_type = $pi["type"];

    //print_r($pi);
    //echo $pn . $pp . $pd . $pi;

    $path = 'images/' . $img_name;
    $moved = move_uploaded_file($img_tmp, $path);
    if($moved){
    $insrec = "INSERT INTO image_crud (product_name, product_price, product_image, product_description)
    VALUES ('$pn', '$pp', '$img_name', '$pd')";
    
    $done = mysqli_query($conn, $insrec);

    if($done){
        echo "<script>
        alert('Record Inserted Successfully');
        //window.location.href = 'read.php';
        </script>";
    }
}
}

?>