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
      <h1>About Us</h1>
    </section>

    <!-- -----------------about us---------------------- -->

    <section class="about-us">
      <div class="row">
        <div class="about-col">
          <img src="Images/about_us2.jpg" alt="" />
        </div>
        <div class="about-col">
          <h1>We are the best in the industry</h1>
          <p>
            We are a team of dedicated and passionate developers who thrive on
            the challenge of crafting solutions that go beyond the norm,
            sparking a revolution in what can be achieved. Our unwavering
            commitment to innovation fuels our pursuit of excellence, enabling
            us to unravel complexities and reimagine possibilities. Through
            collaborative synergy and tireless exploration, we continuously
            strive to redefine benchmarks and pave the way for a future where
            the impossible becomes attainable.
          </p>
          <a href="" class="hero-btn red-btn">EXPLORE NOW</a>
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
