<?php 
include("connection.php");

$getId = $_GET["id"];

    $del = "DELETE FROM `role` WHERE role_id = '$getId'";
    $done = mysqli_query($conn, $del);
if($done){
    echo "<script>
    window.location.href = 'viewRole.php';
     </script>";
}

?>