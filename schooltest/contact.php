<?php include('header.php')?>
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
      <h1>Contact Us</h1>
    </section>

    <!-- ---------------------contact us-------------------- -->

    <section class="location">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30556.991926663017!2d96.19400449217262!3d16.795372671341223!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c1ed3fdbe25a8d%3A0xd6e831efad57e0af!2sThaketa%20Township%2C%20Yangon!5e0!3m2!1sen!2smm!4v1708276823453!5m2!1sen!2smm" 
    width="600" 
    height="450" 
    style="border:0;" 
    allowfullscreen="" 
    loading="lazy" 
    referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>

    <section class="contact-us">
      <div class="row">
        <div class="contact-col">
          <div>
            <i class="fa fa-map-location"></i>
            <span>
              <h5>Myanmar , Yangon</h5>
            </span>
          </div>

          <div>
            <i class="fa fa-phone"></i>
            <span>
              <h5>+959 262 731 518</h5>
            </span>
          </div>

          <div>
            <i class="fa fa-envelope"></i>
            <span>
              <h5>support@technologylearn.cloud</h5>
            </span>
          </div>

          <div>
            <i class="fa fa-globe"></i>
            <span>
              <h5>www.technologylearn.cloud</h5>
            </span>
          </div>

        </div>

        <div class="contact-col" >
          <form id="contact-form" action="form_handler.php" method="post">
              <input type="text" name="name" placeholder="Enter your name" required/>
              <input type="email" name="email" placeholder="Enter your email" required/>
              <input type="text" name="subject" placeholder="Enter your subject" required/>
              <textarea name="message" placeholder="Message" rows="10" required></textarea>
              <button type="submit" class="hero-btn red-btn">Send Message</button>
          </form>
      </div>
      
      <script>
      document.getElementById('contact-form').addEventListener('submit', function(event) {
          event.preventDefault();
      
          // Collect form data
          const formData = new FormData(this);
      
          // Send form data using AJAX
          const xhr = new XMLHttpRequest();
          xhr.open('POST', 'form_handler.php', true);
          xhr.onreadystatechange = function() {
              if (xhr.readyState === XMLHttpRequest.DONE) {
                  if (xhr.status === 200) {
                      alert('Message sent successfully!');
                      // You can update the UI as needed here
                  } else {
                      alert('Error sending message.');
                  }
              }
          };
          xhr.send(formData);
      });
      </script>
      
    </section>
    <!-- ----------footer---------------- -->

    <?php require include('footer.php')?>

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
