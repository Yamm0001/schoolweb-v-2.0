<?php

include_once "../Admin_config/connection.php";

date_default_timezone_set("Asia/Yangon");

error_reporting(0);
session_start();

// Delete user if delete button is clicked
if (isset($_POST['delete_user'])) {
  $id = $_POST['delete_user'];
  $sql = "DELETE FROM users WHERE id=$id";
  if ($conn->query($sql) === TRUE) {
      echo '<script>alert("Delete successful"); window.close();</script>';
  } else {
      echo '<script>alert("Error deleting user"); window.close();</script> ' . $conn->error;
  }
}

$sql = "SELECT * FROM users";
$result = $conn->query($sql);


if (!isset($_SESSION['adm_Id'])) {
  header('Location: login.php');
}
include 'header.php';
?>

<body id="page-top">

  <?php include 'navbar.php';?>

  <div id="wrapper">

  <?php include 'sidebar.php';?>

    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <div class="breadcrumb_custom">
          <div class="row">
            <div class="col-lg-6 col-md-6">
              <p>Current User: <b><?php echo ($_SESSION['adm_name'])?></b></p>
            </div>
            <div class="col-lg-6 col-md-6">
              <p id="datetime" style="text-align: right;">
                <?php echo date("D").", ".date("d-m-Y h-i-s ");?>
              </p>
            </div>
          </div>
        </div>
         

        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Students List</div>
          <div class="card-body">
            <div class="table-responsive col-md-12">
              <table class="table table-bordered table-hover table-striped" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                  <th scope="col">ID</th>
                    <th scope="col">Start Date</th>
                    <th scope="col">Name</th>
                    <th scope="col">Age</th>
                    <th scope="col">E-Mail</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Birth Date</th>
                    <th scope="col">Gender</th>
                    <th scope="col">OS</th>
                    <th scope="col">IP</th>
                    <th scope="col">Current Device</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                  <th scope="col">ID</th>
                    <th scope="col">Start Date</th>
                    <th scope="col">Name</th>
                    <th scope="col">Age</th>
                    <th scope="col">E-Mail</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Birth Date</th>
                    <th scope="col">Gender</th>
                    <th scope="col">OS</th>
                    <th scope="col">IP</th>
                    <th scope="col">Current Device</th>
                    <th scope="col">Action</th>
                  </tr>
                </tfoot>
                <tbody>
                <?php
                while($row = $result->fetch_assoc()) {
                echo "<tr>
                    <td>".$row["id"]."</td>
                    <td>".$row["start_date"]."</td>
                    <td>".$row["name"]."</td>
                    <td>".$row["age"]."</td>
                    <td>".$row["email"]."</td>
                    <td>".$row["phone_number"]."</td>
                    <td>".$row["birth_date"]."</td>
                    <td>".$row["gender"]."</td>
                    <td>".$row["os_version"]."</td>
                    <td>".$row["ip_address"]."</td>
                    <td>".$row["device"]."</td>
                    <td><form method='post' onsubmit='return confirmDelete()'><button type='submit' class='btn btn-primary' name='delete_user' value='" . $row["id"] . "'>Delete</button></form></td>
                </tr>";
                }
            ?>
                </tbody>
              </table>
            </div>
          </div>
         
        </div>

      </div>
      <!-- /.container-fluid -->

      <?php include 'footer.php';?>

    </div>
    <!-- /.content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <?php include 'scripts.php';?>

</body>

</html>
