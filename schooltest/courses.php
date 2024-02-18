<?php include('header.php') ?>
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
      <h1>Our Courses</h1>
    </section>

    <!-- ------------courses------------- -->

    <section class="course">
      <h1>Course We Offer</h1>
      <div class="course-intro">
        <p>
          Explore our courses and programs designed to nurture your passion for
          technology and equip you with the skills to shape the future.
        </p>
      </div>
      <div class="row">
        <div class="course-col">
          <h3>Computer Basic Course</h3>
          <p>
            The B.Tech program is designed to provide students with a strong
            foundation in engineering principles and practical skills. It offers
            a comprehensive understanding of various engineering disciplines,
            allowing students to specialize in many areas.
          </p>
          <a href="from.php"><button type="button" class="btn btn-outline-primary ">Alppy Now</button></a>
        </div>
        <div class="course-col">
          <h3>Comming Soon....</h3>
          <p>
            Comming Soon....
          </p>
        </div>
        <div class="course-col">
          <h3>Very Comming Soon....</h3>
          <p>
            Very Comming Soon....
          </p>
        </div>
      </div>
    </section>

    <!-- --------------facilities---------------- -->

    <section class="facilities">
      <h1>Our Facilities</h1>
      <div class="facilities-intro">
        <p>
          The DCU campus is equipped with state-of-the-art facilities and
          resources to support the learning and research needs of our students.
        </p>
      </div>
      <div class="row">
        <div class="facilities-col">
          <img src="Images/facilities1.jpg" alt="" />
          <h3>World Class Library</h3>
          <p>
            Our library is one of the largest and most comprehensive in the
            country.
          </p>
        </div>
        <div class="facilities-col">
          <img src="Images/facilities2.jpg" alt="" />
          <h3>Largest Playground</h3>
          <p>
            The campus has a large and well-maintained playground for students
            to enjoy.
          </p>
        </div>

        <div class="facilities-col">
          <img src="Images/facilities3.jpg" alt="" />
          <h3>Tasty and Healthy Food</h3>
          <p>
            The campus has a well-equipped cafeteria that serves a variety of
            nutritious and delicious meals.
          </p>
        </div>
      </div>
    </section>

    <!-- ----------footer---------------- -->

    <?php include('footer.php') ?>

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
</html>
