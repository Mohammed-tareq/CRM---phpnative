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

$q = "SELECT employees.* , department.dept_name FROM employees , department WHERE employees.department = department.id";
$result = $conn->query($q);


?>
    

    <div class="container">
        <h1 class="text-center mt-5">Empolyees Data</h1>

        <table class="table text-center ">
            <thead class="table-dark">
              <th>id</th>
              <th>photo</th>
              <th>name</th>
              <th>email</th>
              <th>phone</th>
              <th>Department</th>
              <th>salary</th>
              <th>join Data</th>
              <th>gender</th>
              <th>status</th>
              <th>Position</th>
              <th>address</th>
              <th>dateOfBirth</th>
              <th>date</th>
              <th>actions</th>
            </thead>
            <tbody>
              <?php foreach($result as $row){ ?>
              <tr>
                <td><?=$row['id']?></td>
                <td><img src="<?=$row['photo']?>" width="50" alt="not"></td>
                <td><?=$row['name']?></td>
                <td><?=$row['email']?></td>
                <td><?=$row['phone']?></td>
                <td><?=$row['dept_name']?></td>
                <td><?=$row['salary']?></td>
                <td><?=$row['joindate']?> </td>
                <td><?=$row['gender']?></td>
                <td><?=$row['status']?></td>
                <td><?=$row['position']?></td>
                <td><?=$row['address']?></td>
                <td><?=$row['dateofbirth']?></td>
                <td><?=$row['date']?></td>
                <td>
                    <a href="edit.php?id=<?=$row['id']?>" class="btn btn-warning" >
                        <i class="fa fa-edit"></i>
                    </a>
                    <a onclick="return confirm('do you want delete')" href="delete.php?id=<?=$row['id']?>" class="btn btn-danger" >
                        <i class="fa fa-trash"></i>
                    </a>
                </td>
              </tr>
              <?php }?>
            </tbody>
          </table>
    </div>
    
<?php include "inc/footer.php" ?>