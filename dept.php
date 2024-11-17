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

$q = "SELECT * FROM department ";
$result = $conn->query($q);


?>
    

    <div class="container">
        <h1 class="text-center mt-5">Department Data</h1>

        <table class="table text-center ">
            <thead class="table-dark">
              <th>id</th>
              <th>name</th>
              <th>room</th>
              <th>count</th>
              <th>date</th>
              <th>actions</th>
            </thead>
            <tbody>
              <?php foreach($result as $row){ ?>
              <tr>
                <td><?=$row['id']?></td>
                <td><?=$row['dept_name']?></td>
                <td><?=$row['dept_room']?></td>
                <td>
                <?php
                require "inc/conn.php";
                $id = $row["id"];
                $qc = "SELECT count(id) as count FROM employees  where department = $id";
                $result = $conn->query($qc);
                $finalc = $result->fetch_assoc();
                echo $finalc['count'];
                ?>
                </td>
                <td><?=$row['date']?></td>
                <td>
                    <a href="edit_d.php?id=<?=$row['id']?>" class="btn btn-warning" >
                        <i class="fa fa-edit"></i>
                    </a>
                    <a onclick="return confirm('do you want delete')" href="delete_d.php?id=<?=$row['id']?>" class="btn btn-danger" >
                        <i class="fa fa-trash"></i>
                    </a>
                </td>
              </tr>
              <?php }?>
            </tbody>
          </table>
    </div>
    
<?php include "inc/footer.php" ?>