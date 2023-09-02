<!-- Header File -->
<?php include('./includes/header.html'); ?>

<!-- Data Connection -->
<?php include('./Configuration/DataConnection.php'); ?>

<div class="background_banner py-4">
  <h2 class="contactUs_h2 display-1">Contact Us</h2>
</div> <br><br><br>
<h1 class="text-center contactUs_h1 display-2  py-4">Talk To An <span class="color-change">Expert</span></h1>
<h3 class="contactUs_h3 text-center">Just Share Your Idea. It's Time to Let Your Ideas Grow.</h3>
<br>

<div class="container">
  <div class="row">
    <!-- Contact Form -->

    <div class="col-md-6 col-lg-6 col-sm-12 my-4 py-3 px-4 py-4  contact-form">
      <!-- <h3 class="contactUs_h1 text-center">Contact Us </h3> -->

      <!-- contact us form starts -->
      <form>
        <div class="form-group">
          <label for="name">Name:</label>
          <input type="text" class="form-control" id="name" placeholder="">
        </div>
        <br>
        <div class="form-group">
          <label for="email">Email:</label>
          <input type="email" class="form-control" id="email" placeholder="name@example.com" autocomplete="off">
        </div>
        <br>
        <div class="form-group">
          <label for="contactNo">Contact No.:</label>
          <input type="tel" class="form-control" id="contactNo" placeholder="">
        </div>
        <br>
        <div class="form-group">
          <label for="subject">Subject:</label>
          <input type="text" class="form-control" id="subject" placeholder="">
        </div>
        <br>
        <div class="form-group">
          <label for="message">Message:</label>
          <textarea class="form-control" id="message" rows="3"></textarea>
        </div>
        <br>
        <button type="submit" class="btn_submit">Submit >></button>
      </form>
      <!-- contact us form Ends!! -->
    </div>

    <!-- Contact Details Card starts -->
    <div class="col-md-6 col-lg-6 col-sm-12 my-4 py-3 px-4 py-4  contact-card">
      <h3 class="contactUs_h1 text-center"><span class="color-change">TripVista</span> Pvt Ltd.</h3>
      <ul class="list-unstyled py-4 my-4 contact_detail_padding">
        <li class="py-2">
          <div class="mb-3">
            <p class="contactus_p_contact_Details"><i class="fa fa-phone color-change fa-lg px-1"></i> (+91) 93270 88021
            </p>
          </div>
        </li>
        <li class="py-2">
          <div class="mb-3">
            <p class="contactus_p_contact_Details"><i class="fa fa-envelope color-change fa-lg px-1"></i>
              tripvista@gmail.com
            </p>
          </div>
        </li>
        <li class="py-2">
          <div class="mb-3">
            <p class="contactus_p_contact_Details"><i class="fas fa-map-marker-alt color-change fa-lg px-1"></i> Lorem
              ipsum
              dolor sit amet.</p>
          </div>
        </li>
      </ul>
    </div>
    <!-- Contact Details Card Ends -->
  </div>
</div>

<br>
<br>

<!-- Global presence starts -->
<h2 class="text-center contactUs_h1 display-3 my-4  py-4">Our Global <span class="color-change">Presence</span>!!</h2>

<div class="container-fluid px-5">
  <div class="row">
    <div class="col-sm-6 col-md-4 col-lg-4 py-2 global_country_div my-2">
      <img src="./images/SVGs/india.svg" alt="img" height="120px" class="text-center my-4" width="100%">
      <p class=" text-center py-4 contactus_country_P">India</p>
    </div>
    <div class="col-sm-6 col-md-4 col-lg-4 py-2 global_country_div my-2">
      <img src="./images/SVGs/australia.svg" alt="img" height="120px" class="text-center my-4" width="100%">
      <p class=" text-center py-4 contactus_country_P">Australia</p>
    </div>
    <div class="col-sm-6 col-md-4 col-lg-4 py-2 global_country_div my-2">
      <img src="./images/SVGs/dubai.svg" alt="img" height="120px" class="text-center my-4" width="100%">
      <p class=" text-center py-4 contactus_country_P">Dubai</p>
    </div>
    <div class="col-sm-6 col-md-4 col-lg-4 py-2 my-2 global_country_div">
      <img src="./images/SVGs/newzeland.svg" alt="img" height="120px" class="text-center my-4" width="100%">
      <p class=" text-center py-4 contactus_country_P">New-zealand</p>
    </div>
    <div class="col-sm-6 col-md-4 col-lg-4 py-2 my-2 global_country_div">
      <img src="./images/SVGs/uk.svg" alt="img" height="120px" class="text-center my-4" width="100%">
      <p class=" text-center py-4 contactus_country_P">UK</p>
    </div>
    <div class="col-sm-6 col-md-4 col-lg-4 py-2 my-2 global_country_div">
      <img src="./images/SVGs/usa.svg" alt="img" height="120px" class="text-center my-4" width="100%">
      <p class=" text-center py-4 contactus_country_P">USA</p>
    </div>
  </div>
</div>
<!-- Global presence Ends -->

<br>


<!-- International impact starts -->
<div class="container-fluid my-4 py-3">
  <h2 class="text-center contactUs_h1 display-3 my-4  py-4">Our International <span class="color-change">Impact
      !!</span>!!</h2>
  <div class="row py-4 my-4">
    <!-- Visual Elements -->
    <div class="text-center col-md-4 col-sm-12 col-lg-4  mt-4 International_div my-4 py-4">
      <i class="fas fa-award fa-3x color-change py-4 contactus_icons"></i>
      <p class="mt-2 contactus_country_P">Award-winning travel services</p>
    </div>
    <div class="text-center col-md-4 col-sm-12 col-lg-4 mt-4 International_div my-4 py-4">
      <i class="fas fa-comments fa-3x color-change py-4 display-6 contactus_icons"></i>
      <p class="mt-2 contactus_country_P">Responsive customer support</p>
    </div>
    <div class="text-center col-md-4 col-sm-12 col-lg-4 mt-4 International_div my-4 py-4">
      <i class="fas fa-globe fa-3x color-change py-4 contactus_icons"></i>
      <p class="mt-2 contactus_country_P">Global presence and expertise</p>
    </div>
  </div>
</div>
<!-- International impact Ends-->







<br><br><br><br><br>
<!-- Footer File -->
<?php include('./includes/footer.html'); ?>
</body>

</html>