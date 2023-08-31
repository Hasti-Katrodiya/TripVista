<!-- Header File -->
<?php include('./Includes/header.html'); ?>

<!-- Data Connection -->
<?php include('./Configuration/DataConnection.php'); ?>

<!-- carousel starts-->
<div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner carousel_custom">
    <div class="carousel-item active">
      <img src="./Images/slide1.jpg" class="d-block w-100" height="900px" alt="slide1">
      <div class="carousel-caption d-none d-md-block">
        <p class="caption_p">Explore Cultural Richness</p>
        <p class="caption_detail">Immerse yourself in the diversity of cultures, traditions, and histories that shape
          our world</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="./Images/slide2.jpg" class="d-block w-100" alt="slide2" height="900px">
      <div class="carousel-caption d-none d-md-block">
        <p class="caption_p">Embrace Adventure</p>
        <p class="caption_detail">Challenge your limits, seek thrills, and create stories that will be told for
          generations.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="./Images/slide3.jpg" class="d-block w-100" alt="slide3" height="900px">
      <div class="carousel-caption d-none d-md-block">
        <p class="caption_p">Culinary Adventures Await</p>
        <p class="caption_detail">Savor the world's flavors as you embark on a gastronomic journey,diverse cuisines and
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
      <img src="./Images/banner.jpg" alt="img" class="container img_banner">
      <p class="para_content">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Corporis obcaecati molestiae
        tenetur
        ea modi quaerat
        quae repudiandae fuga pariatur delectus!</p>
    </div>
  </div>
</div>




<br>

<div class="-fluid banner_img my-4 py-4">

  <h2 class="text-center my-4 py-4 text-light display-2">We Have Achieve</h2>

  <div class="row">
    <div class="col-lg-3 col-md-6 mb-4">
      <div class="card counter_card">
        <div class="card-body text-center">
          <i class="fas fa-plane counter-icons"></i>
          <h4 class="card-title counter_card_title">Flight Bookings</h4>
          <p class="card-text counter_para" data-countto="760" data-duration="8000">0+</p>
        </div>
      </div>
    </div>

    <div class="col-lg-3 col-md-6 mb-4">
      <div class="card counter_card">
        <div class="card-body text-center">
          <i class='fas fa-place-of-worship counter-icons'></i>
          <h4 class="card-title counter_card_title">Amazing Tours</h4>
          <p class="card-text counter_para" data-countto="350" data-duration="8000">0+
          </p>
        </div>
      </div>
    </div>

    <div class="col-lg-3 col-md-6 mb-4 ">
      <div class="card counter_card">
        <div class="card-body text-center ">
          <i class='fas fa-ship counter-icons'></i>
          <h4 class="card-title counter_card_title">Cruises Book</h4>
          <p class="card-text counter_para" data-countto="750" data-duration="8000">0+</p>
        </div>
      </div>
    </div>

    <div class="col-lg-3 col-md-6 mb-4">
      <div class="card counter_card">
        <div class="card-body text-center">
          <i class='	fas fa-ticket-alt counter-icons'></i>
          <h4 class="card-title counter_card_title">Ticket Booking</h4>
          <p class="card-text counter_para" data-countto="840" data-duration="8000">0+</p>
        </div>
      </div>
    </div>
  </div>
</div>
<br>

<!-- content with image start-->
<h2 class="text-center h2_custom py-4 my-4 display-4">Roaming the Globe:<span class="color-change"> Adventures
    Await</span></h2>
<div class="container-fluid row my-3 ">
  <div class="col-lg-6 col-md-12">
    <img class="img-fluid container-fluid adventure_img" src="./Images/SVGs/plantrip.svg" alt="img">
  </div>
  <div class="col-lg-6 col-md-12">
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
<!-- Country Display with Animation End!! -->

<!-- content with image start-->
<h2 class="text-center h2_custom py-4 my-4 display-3">Explore Unique Cultures and Landscapes</h2>
<br>
<div class="container-fluid">
  <div class="row my-4 ">
    <div class="col-lg-6 col-md-12">

      <h3 class="h2_custom text-center my-3 display-5">Exploring New World</h3>
      <p class="para_custom container-fluid">


        Our Tours offer an opportunity to immerse yourself in the vibrant cultures
        and breathtaking landscapes of destinations around the world. From the bustling markets of Marrakech to the
        serene temples of Kyoto, each tour is crafted to showcase the essence of the region, allowing you to connect
        with locals, savor authentic cuisine, and witness awe-inspiring natural wonders.Our Tours offer an opportunity
        to immerse yourself in the vibrant cultures
        and breathtaking landscapes of destinations around the world. From the bustling markets of Marrakech to the
        serene temples of Kyoto, each tour is crafted to showcase the essence of the region, allowing you to connect
        with locals, savor authentic cuisine, and witness awe-inspiring natural wonders.Our Tours offer an opportunity
        to immerse yourself in the vibrant cultures
        and breathtaking landscapes of destinations around the world. From the bustling markets of Marrakech to the
        serene temples of Kyoto, each tour is crafted to showcase the essence of the region, allowing you to connect
        with locals, savor authentic cuisine, and witness awe-inspiring natural wonders.</p>
    </div>
    <div class="col-lg-6 col-md-12">
      <img class="img-fluid container-fluid" src="./Images/9.jpg" alt="img...">
    </div>
  </div>
</div>
<!-- content with image End!!-->



<!-- Footer File -->
<?php include('./Includes/footer.html'); ?>

</body>

</html>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
<script src="./JavaScript/script.js"></script>