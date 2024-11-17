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
        <h1 class="text-center mt-5">Add New Department</h1>

        <form class="w-75 mx-auto" action="insert_d.php" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="col-md-6">
                     <div class="mb-3">
                        <label for="exampleInputname" class="form-label">name</label>
                        <input type="text" name="username" class="form-control" id="exampleInputname">
                     </div>
                </div>
                
          
            
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Room address</label>
                    <input name="room" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
            </div>


           


            </div>
            <button type="submit" class="btn btn-success mt-4 w-100">Submit</button>
        </form>

    </div>

<?php include "inc/footer.php" ?>
