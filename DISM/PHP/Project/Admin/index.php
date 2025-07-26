<?php
include("header.php");
include("connection.php");

$selp = "SELECT COUNT(*) AS pro_count FROM products";
$p = mysqli_query($conn, $selp);
$fetchp = mysqli_fetch_assoc($p);

$selc = "SELECT COUNT(*) AS cat_count FROM category";
$c = mysqli_query($conn, $selc);
$fetchc = mysqli_fetch_assoc($c);

$selb = "SELECT COUNT(*) AS br_count FROM brand";
$b = mysqli_query($conn, $selb);
$fetchb = mysqli_fetch_assoc($b);

$selu = "SELECT COUNT(*) AS user_count FROM users";
$u = mysqli_query($conn, $selu);
$fetchu = mysqli_fetch_assoc($u);
?>


            <!-- Sale & Revenue Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-6 col-xl-6">
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-line fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Total Products</p>
                                <h6 class="mb-0"><?php echo $fetchp["pro_count"] ?></h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-6">
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-bar fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Total Categories</p>
                                <h6 class="mb-0"><?php echo $fetchc["cat_count"] ?></h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-6">
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-area fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Total Brand</p>
                                <h6 class="mb-0"><?php echo $fetchb["br_count"] ?></h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-6">
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-pie fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Total User</p>
                                <h6 class="mb-0"><?php echo $fetchu["user_count"] ?></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Sale & Revenue End -->


           


<?php
include("footer.php");
?>        