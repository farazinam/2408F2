<?php
include("connection.php");
include("header.php");
?>

      <div class="container-fluid pt-4 px-4">
          <div class="row g-4">
              <div class="col-sm-12 col-xl-6">
                  <div class="bg-light rounded h-100 p-4">
                      <h6 class="mb-4">Add Role</h6>
                      <form method="post">
                          <div class="mb-3">
                              <label for="exampleInputEmail1" class="form-label">Role Name</label>
                              <input name="rname" type="text" class="form-control" id="exampleInputEmail1"
                                  aria-describedby="emailHelp">
                          </div>
                          <button name="sub" type="submit" class="btn btn-primary">Add Role</button>
                      </form>
                  </div>
              </div>
          </div>
      </div>


      <?php
if(isset($_POST["sub"])){
    $rn = $_POST["rname"];

    $insrec = "INSERT INTO `role` (role_name)
    VALUES ('$rn')";
    
    $done = mysqli_query($conn, $insrec);

    if($done){
        echo "<script>
        alert('Record Inserted Successfully');
        window.location.href = 'viewRole.php';
        </script>";
    }
}


include("footer.php");
?>