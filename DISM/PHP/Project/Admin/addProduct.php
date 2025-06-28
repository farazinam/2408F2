      <?php
include("connection.php");
include("header.php");

$selCat = "SELECT * FROM category";
$q1 = mysqli_query($conn, $selCat);

$selBra = "SELECT * FROM brand";
$q2 = mysqli_query($conn, $selBra);
?>

      <div class="container-fluid pt-4 px-4">
          <div class="row g-4">
              <div class="col-sm-12 col-xl-6">
                  <div class="bg-light rounded h-100 p-4">
                      <h6 class="mb-4">Add Product</h6>
                      <form method="post" enctype="multipart/form-data">
                          <div class="mb-3">
                              <label for="exampleInputEmail1" class="form-label">Product Name</label>
                              <input name="pname" type="text" class="form-control" id="exampleInputEmail1"
                                  aria-describedby="emailHelp">
                          </div>

                          <div class="mb-3">
                              <label for="exampleInputPassword1" class="form-label">Product Price</label>
                              <input name="pprice" type="number" class="form-control" id="exampleInputPassword1">
                          </div>

                          <div class="mb-3">
                              <label for="exampleInputEmail1" class="form-label">Product Description</label>
                              <input name="pdesc" type="text" class="form-control" id="exampleInputEmail1"
                                  aria-describedby="emailHelp">
                          </div>

                          <div class="mb-3">
                              <label for="exampleInputPassword1" class="form-label">Product Image</label>
                              <input name="pimage" type="file" class="form-control" id="exampleInputPassword1">
                          </div>

                          <div class="mb-3">
                              <label for="disabledSelect" class="form-label">Select Category</label>
                              <select name="cid" id="disabledSelect" class="form-select">
                                  <option value="" disabled selected>Select Category</option>
                                  <?php while($data1 = mysqli_fetch_assoc($q1)){
                                ?>
                                  <option value=" <?php echo $data1["category_id"] ?> ">
                                      <?php echo $data1["category_name"] ?></option>
                                  <?php } ?>
                              </select>
                          </div>

                          <div class="mb-3">
                              <label for="disabledSelect" class="form-label">Select Brand</label>
                              <select name="bid" id="disabledSelect" class="form-select">
                                  <option value="" disabled selected>Select Brand</option>
                                  <?php while($data2 = mysqli_fetch_assoc($q2)){
                                ?>
                                  <option value=" <?php echo $data2["brand_id"] ?> ">
                                      <?php echo $data2["brand_name"] ?></option>
                                  <?php } ?>
                              </select>
                          </div>

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
    $pi = $_FILES["pimage"];
    $pd = $_POST["pdesc"];
    $cid = $_POST["cid"];
    $bid = $_POST["bid"];

    $img_name = $pi["name"];
    $img_tmp = $pi["tmp_name"];
    // $img_size = $pi["size"];
    // $img_error = $pi["error"];
    // $img_type = $pi["type"];

    //print_r($pi);
    //echo $pn . $pp . $pd . $pi;

    $path = 'images/' . $img_name;
    $moved = move_uploaded_file($img_tmp, $path);
    if($moved){
    $insrec = "INSERT INTO image_crud (product_name, product_price, product_image, product_description, category_id, brand_id)
    VALUES ('$pn', '$pp', '$img_name', '$pd', '$cid', '$bid')";
    
    $done = mysqli_query($conn, $insrec);

    if($done){
        echo "<script>
        alert('Record Inserted Successfully');
        window.location.href = 'viewProduct.php';
        </script>";
    }
}
}


include("footer.php");
?>