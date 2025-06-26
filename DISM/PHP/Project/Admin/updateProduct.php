<?php
include("header.php");
include("connection.php");

$getId = $_GET["id"];

$select = "SELECT * FROM image_crud WHERE product_id = '$getId'";
$q1 = mysqli_query($conn, $select);

$dataInArray = mysqli_fetch_assoc($q1)
?>

<div class="container-fluid pt-4 px-4">
<div class="row g-4">
<div class="col-sm-12 col-xl-6">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">Basic Form</h6>
                            <form method="post" enctype="multipart/form-data">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Product Name</label>
                                    <input value="<?php echo $dataInArray['product_name'] ?>" name="pname" type="text" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp">
                                </div>

                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Product Price</label>
                                    <input value="<?php echo  $dataInArray['product_price'] ?>" name="pprice" type="number" class="form-control" id="exampleInputPassword1">
                                </div>

                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Product Description</label>
                                    <input value="<?php echo $dataInArray['product_description'] ?>" name="pdesc" type="text" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp">
                                </div>

                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Product Image</label>
                                    <input name="pimage" type="file" class="form-control" id="exampleInputPassword1">
                                </div>

                                <!-- <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">category Name</label>
                                    <input name="cname" type="text" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp">
                                </div> -->

                                <button name="sub" type="submit" class="btn btn-primary">Add Product</button>
                            </form>
                        </div>
                    </div>
                    </div>
                    </div>

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
    window.location.href = 'viewProduct.php';
     </script>";
}
}
else{
    $updated = "UPDATE `image_crud` SET `product_name`='$pn',`product_price`='$pp',`product_description`='$pd' WHERE `product_id` = '$getId'";
$done = mysqli_query($conn, $updated);

if($done){
    echo "<script>
    alert('Record Updated');
    window.location.href = 'viewProduct.php';
     </script>";
}
}
}

include("footer.php");
?>


