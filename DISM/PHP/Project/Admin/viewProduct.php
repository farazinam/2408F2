<?php
include("connection.php");

$sel = "SELECT * FROM image_crud";
$fet = mysqli_query($conn, $sel);

include("header.php");
?>
      <div class="container-fluid pt-4 px-4">
          <div class="row g-4">
              <div class="col-sm-12 col-xl-12">
                  <div class="bg-light rounded h-100 p-4">
                      <h6 class="mb-4">Product Details</h6>
                      <table class="table table-striped">
                          <thead>
                          <tr class="table-dark">
            <th>Product Id</th>
            <th>Product Name</th>
            <th>Product Price</th>
            <th>Product Description</th>
            <th>Product Image</th>
            <th> Action </th>
        </tr>
                          </thead>
                          <tbody>
                          <?php       
while($data = mysqli_fetch_assoc($fet)){
    ?>

        <tr>
            <td> <?php echo $data["product_id"] ?> </td>
            <td> <?php echo $data["product_name"] ?> </td>
            <td> <?php echo $data["product_price"] ?> </td>
            <td> <?php echo $data["product_description"] ?> </td>
            <td> <img style="width:100px" src="images/<?php echo $data["product_image"] ?>" alt=""> </td>
            <td> 
            <a class="btn btn-warning" href="updateProduct.php?id=<?php echo $data["product_id"] ?>"> Edit </a>  
            <a class="btn btn-danger" href="deleteProduct.php?id=<?php echo $data["product_id"] ?>" onclick="return confirm('Are You Sure?')"> Delete </a> 
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