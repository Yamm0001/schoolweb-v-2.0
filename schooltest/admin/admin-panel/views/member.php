<?php

include_once "../Admin_config/connection.php";

date_default_timezone_set("Asia/Yangon");

error_reporting(0);
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $first_name = $_POST['first_name'];
  $last_name = $_POST['last_name'];
  $display_name = $_POST['display_name'];
  $email = $_POST['email'];
  $password = md5($_POST['password']);
  $role = $_POST['role'];
  $start_date = date("Y-m-d H:i:s");

  // Insert data into the database
  $sql = "INSERT INTO member (first_name , last_name, display_name, email, password, role, date_added) VALUES ('$first_name', '$last_name', '$display_name', '$email', '$password', '$role', '$start_date')";

  if ($conn->query($sql) === TRUE) {
      echo "New record created successfully";
  } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
  }
}

// Delete user if delete button is clicked
if (isset($_POST['delete_user'])) {
  $id = $_POST['delete_user'];
  $sql = "DELETE FROM member WHERE id=$id";
  if ($conn->query($sql) === TRUE) {
      echo '<script>alert("Delete successful"); window.close();</script>';
  } else {
      echo '<script>alert("Error deleting user"); window.close();</script> ' . $conn->error;
  }
}

$sql = "SELECT * FROM member";
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
            <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
        Add New Member
      </button>

      <!-- Modal -->
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Add Member</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
              <input type="hidden" name="start_date" value="<?php echo date("Y-m-d H:i:s"); ?>">
                <div class="row">
                  <div class="col-6 mb-3">
                    <input type="text" class="form-control" placeholder="First name" name="first_name">
                  </div>
                  <div class="col-6 mb-3">
                    <input type="text" class="form-control" placeholder="Last name" name="last_name">
                  </div>
                  <div class="col-6 mb-3">
                    <input type="text" class="form-control" placeholder="Display Name" name="display_name">
                  </div>
                  <div class="col-6 mb-3">
                    <input type="email" class="form-control" placeholder="Email" name="email">
                  </div>
                  <div class="col-12 mb-3">
                    <input type="password" class="form-control" placeholder="password" name="password" required>
                  </div>
                  <div class="form-group col-md-12">
                    <label for="inputState">Role</label>
                    <select id="inputState" class="form-control" name="role" required>
                      <option value="Page Admin" required>Page Admin</option>
                      <option value="Developer" required>Developer</option>
                    </select>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
          <div class="card-header">
            <i class="fas fa-table"></i>
            Members List</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered table-hover table-striped" id="dataTable" width="100%" cellspacing="0">
                <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Full Name</th>
                    <th scope="col">E-Mail</th>
                    <th scope="col">Role</th>
                    <th scope="col">Password (ecrypt)</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tfoot>
                  <tr>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Full Name</th>
                    <th scope="col">E-Mail</th>
                    <th scope="col">Role</th>
                    <th scope="col">Password (ecrypt)</th>
                    <th scope="col">Action</th>
                </tr>
                </tfoot>
                <tbody>
                <?php
                while($row = $result->fetch_assoc()) {
                echo "<tr>
                    <td>".$row["id"]."</td>
                    <td>".$row["first_name"]."</td>
                    <td>".$row["last_name"]."</td>
                    <td>".$row["display_name"]."</td>
                    <td>".$row["email"]."</td>
                    <td>".$row["role"]."</td>
                    <td>".$row["password"]."</td>
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
