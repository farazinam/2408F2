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
                              <label for="exampleInputEmail1" class="form-label">Category Name</label>
                              <input name="cname" type="text" class="form-control" id="exampleInputEmail1"
                                  aria-describedby="emailHelp">
                          </div>
                          <button name="sub" type="submit" class="btn btn-primary">Add Category</button>
                      </form>
                  </div>
              </div>
          </div>
      </div>


      <?php
if(isset($_POST["sub"])){
    $cn = $_POST["cname"];

    $insrec = "INSERT INTO category (category_name)
    VALUES ('$cn')";
    
    $done = mysqli_query($conn, $insrec);

    if($done){
        echo "<script>
        alert('Record Inserted Successfully');
        window.location.href = 'viewCategory.php';
        </script>";
    }
}


include("footer.php");
?>