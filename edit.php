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

$id = $_GET['id'];
$qq = "SELECT * FROM employees WHERE id = $id";
$result_e = $conn->query($qq);
$row = $result_e->fetch_assoc();
?> 


  
  <div class="container">
        <h1 class="text-center mt-5">Edit Empolyees <?=$row['id']?></h1>

        <form class="w-75 mx-auto" action="update.php" method="post" enctype="multipart/form-data">
            <input name="id" value="<?=$row['id']?>" hidden>
            <div class="row">
                <div class="col-md-3">
                     <div class="mb-3">
                        <label for="exampleInputname" class="form-label">name</label>
                        <input value="<?=$row['name']?>" type="text" name="username" class="form-control" id="exampleInputname">
                     </div>
                </div>
                
          
            
            <div class="col-md-3">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input value="<?=$row['email']?>" name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
            </div>


            <div class="col-md-3">
                     <div class="mb-3">
                        <label for="phone" class="form-label">phone</label>
                        <input value="<?=$row['phone']?>" type="text" name="phone" class="form-control" id="phone">
                     </div>
            </div>
            <div class="col-md-3">
                     <div class="mb-3">
                        <label for="address" class="form-label">address</label>
                        <input value="<?=$row['address']?>" type="text" name="address" class="form-control" id="address">
                     </div>
            </div>
            <div class="col-md-3">
                     <div class="mb-3">
                        <label for="Position" class="form-label">Position</label>
                        <input value="<?=$row['position']?>" type="text" name="position" class="form-control" id="Position">
                     </div>
            </div>
            <div class="col-md-3">
                     <div class="mb-3">
                        <label for="salary" class="form-label">salary</label>
                        <input value="<?=$row['salary']?>" type="number" name="salary" class="form-control" id="salary">
                     </div>
            </div>
            <div class="col-md-3">
                <div class="mb-3">
                    <label for="join date" class="form-label">join date</label>
                    <input value="<?=$row['joindate']?>" type="date" name="joindate" class="form-control" id="join date">
                    </div>
            </div>
            <div class="col-md-3">
                <div class="mb-3">
                    <label for="dateofbirth" class="form-label">date Of Birth</label>
                    <input value="<?=$row['dateofbirth']?>" type="date" name="dateofbirth" class="form-control" id="dateofbirth">
                    </div>
            </div>
            <div class="col-md-3">
                     <div class="mb-3">
                        <label for="gender" class="form-label">gender</label>
                        <br>
                        <input type="radio" name="gender" <?php if($row['gender']== 'male') echo "checked" ?> value="male"> Male
                        <input type="radio" name="gender" <?php if($row['gender']== 'female') echo "checked" ?> value="female"> Female
                     </div>
            </div>
            <div class="col-md-3">
                     <div class="mb-3">
                        <label for="exampleInputname" class="form-label">Status</label>
                        <select class="form-control" name="status" id="">

                            <option <?php if($row['status']== 'single') echo "selected" ?>>single</option>
                            <option <?php if($row['status']== 'married') echo "selected" ?>>married</option>
                        </select>
                     </div>
            </div>
            <div class="col-md-3">
                     <div class="mb-3">
                        <label for="exampleInputname" class="form-label">departments</label>
                        <select class="form-control" name="departments" id="">
                          <?php foreach($result as $d){ ?>
                            <option <?php if($row['department']== $d['id']) echo "selected"?> value="<?=$d['id']?>"><?=$d['dept_name']?></option>
                           <?php } ?>
                        </select>
                     </div>
            </div>
           

            <div class="col-md-3">
                <div class="mb-3">
                    <img src="<?=$row['photo']?>" width="50">
                  <label for="exampleCheck1" class="form-label">Choose Profile image</label>
                    <input type="file" name="img" class="form-control" id="exampleCheck1">
                </div>
            </div>


            </div>
            <button type="submit" class="btn btn-success mt-4 w-100">Submit</button>
        </form>

    </div>

<?php include "inc/footer.php" ?>


