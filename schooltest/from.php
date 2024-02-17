<?php include('header.php') ?>
<body>
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

    <form action="./dbconnection/connect.php" method="POST">

      <input type="hidden" id="sd" name="sd" />

      <div class="form-floating mb-3">
        <input style="width: 500px" type="text" class="form-control" id="name" name="name" placeholder="Enter your name" required>
        <label for="name">Name</label>
      </div>
      <div class="form-floating mb-3">
        <input style="width: 500px;" type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
        <label for="email">Email</label>
      </div>
      <div class="form-floating mb-3">
        <input style="width: 500px;" type="text" class="form-control" id="phone" name="phone" placeholder="Enter your phone number" required>
        <label for="phone">Phone Number</label>
      </div>
      <div class="form-floating mb-3">
        <input style="width: 500px;" type="date" class="form-control" id="bd" name="bd" required>
        <label for="dob">Date of Birth</label>
      </div>
      <div class="form-floating mb-3">
        <input style="width: 500px;" type="number" class="form-control" id="age" name="age" placeholder="Enter your age" required>
        <label for="age">Age</label>
      </div>
      <div class="form-floating mb-3">
        <select style="width: 500px;" class="form-control" id="gender" name="gender" required>
          <option value="" selected disabled>--Select--</option>
          <option value="male">Male</option>
          <option value="female">Female</option>
          <option value="other">Other</option>
          <option value="nfs">Not For Say</option>
        </select>
        <label for="gender">Gender:</label>
      </div>
      <div class="form-floating mb-3">
        <select style="width: 500px;" class="form-control" id="osVersion" name="osVersion" required>
          <option value="" selected disabled>--Select--</option>
          <option value="windows11">Windows 11</option>
          <option value="windows10">Windows 10</option>
          <option value="windows7">Windows 7</option>
          <option value="mac">MAC OS</option>
          <option value="linux">Linux</option>
        </select>
        <label for="gender">Operating System</label>
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>
  </div>

  <!-- Bootstrap JS and dependencies (jQuery, Popper.js) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

<?php include('footerf.php') ?>