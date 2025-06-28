<?php 
include("connection.php");

$getId = $_GET["id"];

    $del = "DELETE FROM category WHERE category_id = '$getId'";
    $done = mysqli_query($conn, $del);
if($done){
    echo "<script>
    window.location.href = 'viewCategory.php';
     </script>";
}

?>