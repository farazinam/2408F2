<?php
include("connection.php");

$sel = "SELECT * FROM category";
$fet = mysqli_query($conn, $sel);

include("header.php");
?>
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-sm-12 col-xl-12">
            <div class="bg-light rounded h-100 p-4">
                <h6 class="mb-4">Category Details</h6>
                <table class="table table-striped">
                    <thead>
                        <tr class="table-dark">
                            <th>Category Id</th>
                            <th>Category Name</th>
                            <th> Action </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php       
while($data = mysqli_fetch_assoc($fet)){
    ?>

                        <tr>
                            <td> <?php echo $data["category_id"] ?> </td>
                            <td> <?php echo $data["category_name"] ?> </td>
                            <td>
                            <a class="btn btn-warning" href="updateCategory.php?id=<?php echo $data["category_id"] ?>">
                                Edit </a>
                            <a class="btn btn-danger" href="deleteCategory.php?id=<?php echo $data["category_id"] ?>"
                                onclick="return confirm('Are You Sure?')"> Delete </a>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?php

include("footer.php");
?>