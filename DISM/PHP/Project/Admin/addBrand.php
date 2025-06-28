<?php
include("connection.php");
include("header.php");
?>

      <div class="container-fluid pt-4 px-4">
          <div class="row g-4">
              <div class="col-sm-12 col-xl-6">
                  <div class="bg-light rounded h-100 p-4">
                      <h6 class="mb-4">Add Brand</h6>
                      <form method="post" enctype="multipart/form-data">
                          <div class="mb-3">
                              <label for="exampleInputEmail1" class="form-label">Brand Name</label>
                              <input name="bname" type="text" class="form-control" id="exampleInputEmail1"
                                  aria-describedby="emailHelp">
                          </div>
                          <button name="sub" type="submit" class="btn btn-primary">Add Brand</button>
                      </form>
                  </div>
              </div>
          </div>
      </div>


      <?php
if(isset($_POST["sub"])){
    $bn = $_POST["bname"];

    $insrec = "INSERT INTO brand (brand_name)
    VALUES ('$bn')";
    
    $done = mysqli_query($conn, $insrec);

    if($done){
        echo "<script>
        alert('Record Inserted Successfully');
        window.location.href = 'viewBrand.php';
        </script>";
    }
}


include("footer.php");
?>