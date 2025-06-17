<?php 
include("connection.php");

$getId = $_GET["id"];

$del = "DELETE FROM products WHERE product_id = '$getId'";
$done = mysqli_query($conn, $del);

if($done){
    echo "<script>
    alert('Mubarak Ho');
    window.location.href = 'read.php';
     </script>";
}
?>