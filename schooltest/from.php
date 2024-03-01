<?php
include('header.php');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone_number = $_POST["phone_number"];
    $birth_date = $_POST["birth_date"];
    $age = $_POST["age"];
    $gender = $_POST["gender"];
    $os_version = $_POST["os_version"];
    $start_date = date("Y-m-d H:i:s");
    $ip_address = $_SERVER['REMOTE_ADDR'];
    $device = $_POST['device'];

    // Insert a new record into the database
    // You'll need to replace 'your_database_name' with the actual name of your database
    $conn = new mysqli("localhost", "root", "", "form");
    $stmt = $conn->prepare("INSERT IGNORE INTO users (name, email, phone_number, birth_date, age, gender, os_version, start_date, ip_address, device) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssisssss", $name, $email, $phone_number, $birth_date, $age, $gender, $os_version, $start_date, $ip_address, $device);
    $stmt->execute();

    if ($stmt->affected_rows > 0) {
        // Redirect to the submit page if a new record was inserted
        header("Location: success.php");
        exit();
    } else {
        // Display an error message if the record already exists
        $error = '<div class="alert alert-danger"role="alert"><i class="fa-duotone fa-circle-exclamation"></i>
        Email or Phone Number Already Exit!
      </div>';
    }
}
?>
          <i class="fa fa-times" onclick="hideMenu()"></i>
          <ul>
            <li><a href="index.php">HOME</a></li>
            <li><a href="about.php">ABOUT</a></li>
            <li><a href="courses.php">COURSES</a></li>
            <li><a href="blog.php">CHAT BOT</a></li>
            <li><a href="contact.php">CONTACT</a></li>
          </ul>
        </div>
        <i class="fa fa-bars" onclick="showMenu()"></i>
      </nav>
      <h1>Register From</h1>
    </section>

  <div class="container mt-5">
    <h2 style="text-align: center;">Registration Form</h2>
    <div class="center">

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" class="container-md">

    <input type="hidden" name="start_date" value="<?php echo date("Y-m-d H:i:s"); ?>">
    <input type="hidden" name="ip_address" value="<?php echo $_SERVER['REMOTE_ADDR']; ?>">
    <input type="hidden" name="device" value="<?php echo $_SERVER['HTTP_USER_AGENT']; ?>">

    <?php if (isset($error)) { echo $error; } ?>

      <div class="form-floating mb-3">
        <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" required>
        <label for="name">Name</label>
      </div>
      <div class="form-floating mb-3">
        <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
        <label for="email">Email</label>
      </div>
      <div class="form-floating mb-3">
        <input type="text" class="form-control" id="phone" name="phone_number" placeholder="Enter your phone number" required>
        <label for="phone">Phone Number</label>
      </div>
      <div class="form-floating mb-3">
        <input type="date" class="form-control" id="bd" name="birth_date" required>
        <label for="dob">Date of Birth</label>
      </div>
      <div class="form-floating mb-3">
        <input type="number" class="form-control" id="age" name="age" placeholder="Enter your age" required>
        <label for="age">Age</label>
      </div>
      <div class="form-floating mb-3">
        <select class="form-control" id="gender" name="gender" required>
          <option value="" selected disabled>--Select--</option>
          <option value="Male">Male</option>
          <option value="Female">Female</option>
          <option value="Other">Other</option>
          <option value="nfs">Not For Say</option>
        </select>
        <label for="gender">Gender:</label>
      </div>
      <div class="form-floating mb-3">
        <select class="form-control" id="osVersion" name="os_version" required>
          <option value="" selected disabled>--Select--</option>
          <option value="windows11">Windows 11</option>
          <option value="windows10">Windows 10</option>
          <option value="windows7">Windows 7</option>
          <option value="mac">MAC OS</option>
          <option value="linux">Linux</option>
        </select>
        <label for="gender">Operating System</label>
      </div>
      <button style="width: 100%;" type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
    </div>
  </div>

  <?php include('footerf.php') ?>

  <!-- Bootstrap JS and dependencies (jQuery, Popper.js) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

      <!--Javascript for Toggle Menu-->
      <script>
      var navLinks = document.getElementById("navLinks");

      function showMenu() {
        navLinks.style.right = "0";
      }

      function hideMenu() {
        navLinks.style.right = "-200px";
      }
    </script>
</body>

