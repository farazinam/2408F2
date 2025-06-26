      <?php
include("connection.php");
include("header.php");
?>

      <div class="container-fluid pt-4 px-4">
          <div class="row g-4">
              <div class="col-sm-12 col-xl-6">
                  <div class="bg-light rounded h-100 p-4">
                      <h6 class="mb-4">Basic Form</h6>
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
    $pi = $_FILES["pimage"];
    $pd = $_POST["pdesc"];

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
    $insrec = "INSERT INTO image_crud (product_name, product_price, product_image, product_description)
    VALUES ('$pn', '$pp', '$img_name', '$pd')";
    
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