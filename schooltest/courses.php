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
      <div class="row mt-5">
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
      <h1>Our Course Teaching</h1>
      <div class="facilities-intro">
        <p>
          The DCU campus is equipped with state-of-the-art facilities and
          resources to support the learning and research needs of our students.
        </p>
      </div>
      <div class="row mt-5">
        <div class="facilities-col">
          <img src="...." alt="teaching_photo network error" />
          <h3>Teaching Photo</h3>
          <p>
            Our Teaching
          </p>
        </div>

        <div class="facilities-col">
          <img src="...." alt="teaching_photo network error" />
          <h3>Teaching Photo</h3>
          <p>
            Our Teaching
          </p>
        </div>

        <div class="facilities-col">
          <img src="...." alt="teaching_photo network error" />
          <h3>Teaching Photo</h3>
          <p>
            Our Teaching
          </p>
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
