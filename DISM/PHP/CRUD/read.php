<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
</head>
<body>

<?php 
include("connection.php");

$sel = "SELECT * FROM products";
$fet = mysqli_query($conn, $sel)
?>
    <table class="table table-striped">
        <tr class="table-dark">
            <th>Product Id</th>
            <th>Product Name</th>
            <th>Product Price</th>
            <th>Product Description</th>
            <th> Action </th>
        </tr>
<?php       
while($data = mysqli_fetch_assoc($fet)){
    ?>

        <tr>
            <td> <?php echo $data["product_id"] ?> </td>
            <td> <?php echo $data["product_name"] ?> </td>
            <td> <?php echo $data["product_price"] ?> </td>
            <td> <?php echo $data["product_description"] ?> </td>
            <td> 
            <a class="btn btn-warning" href="update.php?id=<?php echo $data["product_id"] ?>"> Edit </a>  
             <a class="btn btn-danger" href="delete.php?id=<?php echo $data["product_id"] ?>"> Delete </a> 
            </td>
        </tr>
<?php } ?>
    </table>
</body>
</html>