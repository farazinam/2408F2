<?php 
include("connection.php");

$getId = $_GET["id"];

    $del = "DELETE FROM image_crud WHERE product_id = '$getId'";
    $done = mysqli_query($conn, $del);
if($done){
    echo "<script>
    alert('Mubarak Ho');
    window.location.href = 'viewProduct.php';
     </script>";
}

?>