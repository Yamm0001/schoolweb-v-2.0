<?php include('headerh.php') ?>
  <body>
    <section class="header">
      <nav>
        <a href="index.html"><img src="Images/logo-wh.png" alt="logo Network Error" /></a>
        <div class="nav-links" id="navLinks">
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
      <div class="text-box">
        <h1>Technology Learn Trainning Center</h1>
        <p>
          At DCU, we believe in empowering aspiring engineers to realize their
          full potential and shape the future with their innovative ideas.
        </p>
        <a href="" class="hero-btn">Visit Us To know More</a>
      </div>
    </section>

        <!-- ---------campus------------- -->
        <section class="campus">
      <h1>Course</h1>
      <p>
        <!-- The DCU campus is a vibrant and diverse community of students, faculty,
        and staff.  -->
        We offer a wide range of opportunities for students to
        explore their interests and develop their skills.
      </p>
      <div class="row mt-5">
        <div class="campus-col">
          <img style="height: 347px;" src="Images/computer-basic.png" alt="" />
          <div class="layer">
            <h3>Computer Basic Course</h3>
          </div>
        </div>
        <div class="campus-col">
          <img style="height: 347px;" src="Images/comming.jpg" alt="" />
          <div class="layer">
            <h3>Very Comming Soon</h3>
          </div>
        </div>
        <div class="campus-col">
          <img style="height: 347px;" src="Images/comming.jpg" alt="" />
          <div class="layer">
            <h3>Very Comming Soon</h3>
          </div>
        </div>
    </section>

    <!-- -------Teacher--------- -->
    <section class="course">
      <h1>Our Team</h1>
      <div class="course-intro">
        <p>
          Explore our programs designed to nurture
          your passion for technology and equip you with the skills to shape the
          future.
        </p>
      </div>
      <div class="row">
        <div class="course-col">
          <h3>Phone Htut Khaung</h3>
          <p>
            Developer , Server Admin , Founder
          </p>
        </div>
        <div class="course-col">
          <h3>Aung Myat Thu</h3>
          <p>
            Developer , Main Teacher
          </p>
        </div>
        <div class="course-col">
          <h3>Hein Htut Thar</h3>
          <p>
            Page Admin , Logo Maker
          </p>
        </div>
      </div>
    </section>

    <!-- --------------facilities---------------- -->

    <!-- <section class="facilities">
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
    </section> -->

    <!-- ---------testimonials-------------- -->

    <section class="testimonial">
      <h1>What Our Students Say</h1>
      <!-- <p>the college is a funcking bullshit</p> -->
      <!-- <div class="row">
        <div class="testimonial-col">
          <img src="Images/student1.jpg" alt="" />
          <div>
            <p>
              "Top-notch infrastructure and a dynamic curriculum foster
              innovation and skill development. A vibrant campus life adds a
              perfect balance to the rigorous engineering education."
            </p>
            <h3>Sayak Bal</h3>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-half-o"></i>
          </div>
        </div>

        <div class="testimonial-col">
          <img src="Images/student2.png" alt="" />
          <div>
            <p>
              "Exceptional faculty and hands-on labs make learning at this
              engineering college a rewarding experience. The strong industry
              connections provide ample opportunities for practical exposure."
            </p>
            <h3>Ranit Manik</h3>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-o"></i>
          </div>
        </div> -->
      </div>
    </section>

    <!-- --------call to action----------- -->

    <section class="cta">
      <h1>
        Enroll For Our Online Courses <br />
        from anywhere in the State!
      </h1>
      <a href="contact.php" class="hero-btn">CONTACT US</a>
    </section>

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
