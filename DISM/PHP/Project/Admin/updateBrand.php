<?php
include("header.php");
include("connection.php");

$getId = $_GET["id"];

$select = "SELECT * FROM brand WHERE brand_id = '$getId'";
$q1 = mysqli_query($conn, $select);

$dataInArray = mysqli_fetch_assoc($q1)
?>

<div class="container-fluid pt-4 px-4">
          <div class="row g-4">
              <div class="col-sm-12 col-xl-6">
                  <div class="bg-light rounded h-100 p-4">
                      <h6 class="mb-4">Add Brand</h6>
                      <form method="post" enctype="multipart/form-data">
                          <div class="mb-3">
                              <label for="exampleInputEmail1" class="form-label">Brand Name</label>
                              <input value="<?php echo $dataInArray["brand_name"]?>" name="bname" type="text" class="form-control" id="exampleInputEmail1"
                                  aria-describedby="emailHelp">
                          </div>
                          <button name="sub" type="submit" class="btn btn-primary">Update Brand</button>
                      </form>
                  </div>
              </div>
          </div>
      </div>

<?php 
if(isset($_POST["sub"])){
    $bn = $_POST["bname"];
   
    $updated = "UPDATE `brand` SET `brand_name`='$bn' WHERE `brand_id` = '$getId'";
$done = mysqli_query($conn, $updated);

if($done){
    echo "<script>
    alert('Record Updated');
    window.location.href = 'viewBrand.php';
     </script>";
}
}

include("footer.php");
?>


