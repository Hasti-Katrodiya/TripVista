<!-- Header File -->
<?php include('./includes/header.html'); ?>

<!-- Data Connection -->
<?php include('./Configuration/DataConnection.php'); ?>

<!-- carousel starts-->
<div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner carousel_custom">
    <div class="carousel-item active">
      <img src="./images/slide1.jpg" class="d-block w-100 carousel_img" alt="slide1">
      <div class="carousel-caption d-none d-md-block">
        <p class="caption_p py-5 display-2">Culinary Adventures Await</p>
        <p class="caption_detail display-6 py-4">Immerse yourself in the diversity of cultures that
          shape
          our world</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="./images/slide2.jpg" class="d-block w-100 carousel_img" alt="slide2">
      <div class="carousel-caption d-none d-md-block">
        <p class="caption_p  py-5 display-2 ">Embrace Adventure</p>
        <p class="caption_detail display-6 py-4">Challenge your limits, seek thrills, and create stories that will be
          told for
          generations.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="./images/slide3.jpg" class="d-block w-100 carousel_img" alt="slide3">
      <div class="carousel-caption d-none d-md-block">
        <p class="caption_p py-5 display-2">Explore Cultural Richness</p>
        <p class="caption_detail display-6 py-4">Savor the world's flavors as you embark on a gastronomic
          journey,diverse cuisines and
          culinary delights.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<!-- carousel End!!-->

<!-- Content Section starts  -->
<div class="container-fluid mx-auto  mb-4">
  <div class="row my-4">
    <div class="col-lg-6 col-md-6 col-sm-12 slide-right">
      <h1 class="content_para ">Discover New Horizons.
        <span class="color-change">Explore the Unexplored.</span>
        Your Journey Begins Here.
      </h1>
      <p class="div_para">"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
        been..."</p>
      <button class="btn-explore">Let's Explore >></button>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-12">
      <img src="./images/banner.jpg" alt="img" class="container img_banner">
      <p class="para_content">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Corporis obcaecati molestiae
        tenetur
        ea modi quaerat
        quae repudiandae fuga pariatur delectus!</p>
    </div>
  </div>
</div>
<!-- Content Section ENds!!  -->

<br>

<!-- Counter Starts  -->
<div class="container-fluid banner_img my-4 py-4">

  <h2 class="text-center my-4 py-4 text-light display-2">We Have Achieve</h2>

  <div class="row">
    <div class="col-lg-3 col-md-6 col-sm-12 ">
      <div class="card counter_card">
        <div class="card-body text-center">
          <i class="fa-solid fa-paper-plane counter-icons"></i>
          <h4 class="card-title counter_card_title">Flight Bookings</h4>
          <p class="card-text counter_para" data-countto="760" data-duration="8000">0+</p>
        </div>
      </div>
    </div>

    <div class="col-lg-3 col-md-6 col-sm-12">
      <div class="card counter_card">
        <div class="card-body text-center">
          <i class='fa-solid fa-place-of-worship counter-icons'></i>
          <h4 class="card-title counter_card_title">Amazing Tours</h4>
          <p class="card-text counter_para" data-countto="350" data-duration="8000">0+
          </p>
        </div>
      </div>
    </div>

    <div class="col-lg-3 col-md-6 col-sm-12">
      <div class="card counter_card">
        <div class="card-body text-center ">
          <i class='fas fa-ship counter-icons'></i>
          <h4 class="card-title counter_card_title">Cruises Book</h4>
          <p class="card-text counter_para" data-countto="750" data-duration="8000">0+</p>
        </div>
      </div>
    </div>

    <div class="col-lg-3 col-md-6 col-sm-12">
      <div class="card counter_card">
        <div class="card-body text-center">
          <i class='	fa-solid fa-ticket counter-icons'></i>
          <h4 class="card-title counter_card_title">Ticket Booking</h4>
          <p class="card-text counter_para" data-countto="840" data-duration="8000">0+</p>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Counter Ends!!  -->
<br>
<br>

<!-- Packages detail starts -->
<h2 class="text-center h2_custom py-4 my-4 display-4">Featured <span class="color-change"> PACKAGES</span></h2>
<div class="container">
  <div class="row">
    <!-- Package 1 -->
    <div class="col-md-4">
      <div class="package-card">
        <img src="./images/pack1.jpg" alt="Package 1" class="package-img">
        <h3 class="package-title">Explore Paradise Island</h3>
        <p class="package-title">$8500</p>
        <p class="package-description">Discover the stunning beauty of Paradise Island with our exclusive package. Enjoy
          pristine beaches, crystal-clear waters, and luxurious accommodations.
        </p>
      </div>
    </div>

    <!-- Package 2 -->
    <div class="col-md-4">
      <div class="package-card">
        <img src="./images/pack2.jpg" alt="Package 2" class="package-img">
        <h3 class="package-title">Adventure at Sea </h3>
        <p class="package-title">$3280</p>
        <p class="package-description">Set sail on an unforgettable adventure at sea. Explore multiple destinations,
          enjoy onboard entertainment, and relax in luxurious cabins. </p>
      </div>
    </div>

    <!-- Package 3 -->
    <div class="col-md-4">
      <div class="package-card">
        <img src="./images/pack3.jpg" alt="Package 3" class="package-img">
        <h3 class="package-title"> Fun and Adventure</h3>
        <p class="package-title">$2360</p>
        <p class="package-description">Create lasting memories with your family on an adventure-packed vacation. Go on
          thrilling excursions, explore family-friendly attractions, and stay in comfortable family suites. </p>
      </div>
    </div>
  </div>
</div>
<!-- Packages detail Ends!! -->

<br>
<br>

<!-- content with image start-->

<h2 class="text-center h2_custom py-4 my-4  display-4">Roaming the Globe:<span class="color-change"> Adventures
    Await</span></h2>
<div class="container-fluid row  ">
  <div class="col-lg-6 col-md-12 col-sm-12">
    <img class=" img-fluid adventure_img" src="./images/SVGs/plantrip.svg" alt="img">
  </div>
  <div class="col-lg-6 col-md-12 col-sm-12">
    <div class="contetnt_div  py-4 px-4 my-4 ">

      <!-- <p class="para_custom container-fluid"> -->
      One of the most rewarding aspects of our travel tours is the opportunity to
      connect with fellow travelers who share your sense of adventure. Forge new friendships, share stories, and create
      bonds that often last long after the journey ends.
      <!-- </p> -->
      <!-- <p class="para_custom container-fluid"> -->
      Engage with local communities and learn about their customs and way of life.
      Our tours prioritize meaningful interactions and create memories that last a lifetime.
      <!-- </p> -->
    </div>
  </div>
</div>
<!-- content with image End!!-->

<!-- Country Display -Animated Starts -->
<div class="container">
  <!-- <p class="text-left">TOP DESTINATIONS</p> -->
  <h2 class="text-left h2_custom my-4 py-4 display-2">EXPLORE POPULAR <span class="color-change"> DESTINATIONS</span> !!
  </h2>
</div>
<!-- Country Display with Animation start -->
<div class="container-fluid ">
  <div class="row">
    <?php
    $sql = "SELECT * FROM `country`";
    $result = mysqli_query($connection, $sql);

    if (mysqli_num_rows($result) > 0) {
      while ($row = mysqli_fetch_array($result)) {
        ?>
        <div class="col-lg-3 col-md-4 col-sm-6 container-fluid country_container my-4">
          <div class="country_name_box">
            <h5 class="text-center ">
              <?php
              echo $row['Country_Name'];
              ?>
            </h5>
          </div>
          <a href="./country_detail.php?id=
            <?php
            echo $row['Country_id'];
            ?>
                
                ">
            <img src="
                <?php
                echo $row['Country_img'];
                ?>
                    " alt="img" class="country_imgs">
          </a>
        </div>
        <?php
      }
    }
    ?>
  </div>
</div>
</div>
<!-- Country Display -Animated Ends!! -->

<br>
<br>

<!-- Footer File -->
<?php include('./includes/footer.html'); ?>

</body>

</html>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
<script src="./js/script.js"></script>