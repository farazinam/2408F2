 <?php 
include("../Admin/connection.php");
include("header.php");

$getId = $_GET["id"];

$sel = "SELECT * FROM image_crud 
INNER JOIN category
ON image_crud.category_id = category.category_id
INNER JOIN brand
ON image_crud.brand_id = brand.brand_id WHERE product_id = '$getId'";
$fet = mysqli_query($conn, $sel);
$data = mysqli_fetch_assoc($fet);

?>     
    
    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="about-img position-relative overflow-hidden p-5 pe-0">
                        <img class="img-fluid w-100" src="../Admin/images/<?php echo $data["product_image"] ?>">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <h1 class="display-5 mb-4"><?php echo $data["product_name"] ?></h1>
                    <p class="mb-4"><?php echo $data["product_description"] ?></p>
                    <p><i class="fa fa-check text-primary me-3"></i><?php echo $data["product_price"] ?></p>
                    <p><i class="fa fa-check text-primary me-3"></i><?php echo $data["category_name"] ?></p>
                    <p><i class="fa fa-check text-primary me-3"></i><?php echo $data["brand_name"] ?></p>
                    <a class="btn btn-secondary rounded-pill py-3 px-5 mt-3" href="">Add To Cart</a>
                    <a class="btn btn-success rounded-pill py-3 px-5 mt-3" href="mail.php?id=<?php echo $data["product_id"] ?>">Buy Now</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <?php 
include("footer.php");
?>