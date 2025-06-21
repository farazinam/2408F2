<?php
include("connection.php");

$getId = $_GET["id"];

$select = "SELECT * FROM image_crud WHERE product_id = '$getId'";
$q1 = mysqli_query($conn, $select);

$dataInArray = mysqli_fetch_assoc($q1)
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    </head>
</head>
<body>

<form method="post" enctype="multipart/form-data">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Product Name</label>
    <input name="pname" value="<?php echo $dataInArray["product_name"] ?>" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Product Price</label>
    <input name="pprice" value="<?php echo $dataInArray["product_price"] ?>" type="number" class="form-control" id="exampleInputPassword1">
  </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Product Description</label>
    <input name="pdesc" value="<?php echo $dataInArray["product_description"] ?>" type="text" class="form-control" id="exampleInputPassword1">
  </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Product Image</label>
    <input name="pimage" type="file" class="form-control" id="exampleInputPassword1">
  </div>

  <div>
   <!-- <input name="pimage" type="hidden" class="form-control" id="exampleInputPassword1"> -->
    <img style="width:100px" src="images/<?php echo $dataInArray["product_image"] ?>" alt="">
  </div>

  <button name="sub" type="submit" class="btn btn-primary">Submit</button>
</form>

<?php 
if(isset($_POST["sub"])){
    $pn = $_POST["pname"];
    $pp = $_POST["pprice"];
    $pd = $_POST["pdesc"];
    $pi = $_FILES["pimage"];

    $img_name = $pi["name"];
    $img_tmp = $pi["tmp_name"];

    $path = 'images/' . $img_name;

if(is_uploaded_file($img_tmp)){

    $moved = move_uploaded_file($img_tmp, $path);
    $updated = "UPDATE `image_crud` SET `product_name`='$pn',`product_price`='$pp',`product_description`='$pd', `product_image`='$img_name' WHERE `product_id` = '$getId'";
$done = mysqli_query($conn, $updated);

if($done){
    echo "<script>
    alert('Record Updated');
    window.location.href = 'read.php';
     </script>";
}
}
else{
    $updated = "UPDATE `image_crud` SET `product_name`='$pn',`product_price`='$pp',`product_description`='$pd' WHERE `product_id` = '$getId'";
$done = mysqli_query($conn, $updated);

if($done){
    echo "<script>
    alert('Record Updated');
    window.location.href = 'read.php';
     </script>";
}
}
}
?>
  
</body>
</html>