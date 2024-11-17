<?php include "inc/header.php" ?>
<?php include "inc/nav.php" ?>
<?php 

  session_start();
if( !isset($_SESSION['name'])){
  header('Location: login.php');
}

?>
<?php 
require "inc/conn.php";

$q = "SELECT * FROM department";
$result = $conn->query($q);
?> 


  
  <div class="container">
        <h1 class="text-center mt-5">Add New Empolyees</h1>

        <form class="w-75 mx-auto" action="insert.php" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="col-md-3">
                     <div class="mb-3">
                        <label for="exampleInputname" class="form-label">name</label>
                        <input type="text" name="username" class="form-control" id="exampleInputname">
                     </div>
                </div>
                
          
            
            <div class="col-md-3">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
            </div>


            <div class="col-md-3">
                     <div class="mb-3">
                        <label for="phone" class="form-label">phone</label>
                        <input type="text" name="phone" class="form-control" id="phone">
                     </div>
            </div>
            <div class="col-md-3">
                     <div class="mb-3">
                        <label for="address" class="form-label">address</label>
                        <input type="text" name="address" class="form-control" id="address">
                     </div>
            </div>
            <div class="col-md-3">
                     <div class="mb-3">
                        <label for="Position" class="form-label">Position</label>
                        <input type="text" name="position" class="form-control" id="Position">
                     </div>
            </div>
            <div class="col-md-3">
                     <div class="mb-3">
                        <label for="salary" class="form-label">salary</label>
                        <input type="number" name="salary" class="form-control" id="salary">
                     </div>
            </div>
            <div class="col-md-3">
                <div class="mb-3">
                    <label for="join date" class="form-label">join date</label>
                    <input type="date" name="joindate" class="form-control" id="join date">
                    </div>
            </div>
            <div class="col-md-3">
                <div class="mb-3">
                    <label for="dateofbirth" class="form-label">date Of Birth</label>
                    <input type="date" name="dateofbirth" class="form-control" id="dateofbirth">
                    </div>
            </div>
            <div class="col-md-3">
                     <div class="mb-3">
                        <label for="gender" class="form-label">gender</label>
                        <br>
                        <input type="radio" name="gender" value="male"> Male
                        <input type="radio" name="gender" value="female"> Female
                     </div>
            </div>
            <div class="col-md-3">
                     <div class="mb-3">
                        <label for="exampleInputname" class="form-label">Status</label>
                        <select class="form-control" name="status" id="">

                            <option>single</option>
                            <option>married</option>
                        </select>
                     </div>
            </div>
            <div class="col-md-3">
                     <div class="mb-3">
                        <label for="exampleInputname" class="form-label">departments</label>
                        <select class="form-control" name="departments" id="">
                          <?php foreach($result as $d){ ?>
                            <option value="<?=$d['id']?>"><?=$d['dept_name']?></option>
                           <?php } ?>
                        </select>
                     </div>
            </div>
           

            <div class="col-md-3">
                <div class="mb-3">
                  <label for="exampleCheck1" class="form-label">Choose Profile image</label>
                    <input type="file" name="img" class="form-control" id="exampleCheck1">
                </div>
            </div>


            </div>
            <button type="submit" class="btn btn-success mt-4 w-100">Submit</button>
        </form>

    </div>

<?php include "inc/footer.php" ?>
