<!-- Header File -->
<?php include('./Includes/header.html');  ?>

<!-- Data Connection -->
<?php  include('./Configuration/DataConnection.php'); ?>

<!-- carousel starts-->
<div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner carousel_custom">
    <div class="carousel-item active">
      <img src="./Images/slide1.jpg" class="d-block w-100" height="800px" alt="slide1">
      <div class="carousel-caption d-none d-md-block">
        <p class="caption_p">Explore Cultural Richness</p>
        <p class="caption_detail">Immerse yourself in the diversity of cultures, traditions, and histories that shape our world</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="./Images/slide2.jpg" class="d-block w-100" alt="slide2" height="800px">
      <div class="carousel-caption d-none d-md-block">
        <p class="caption_p">Embrace Adventure</p>
        <p class="caption_detail">Challenge your limits, seek thrills, and create stories that will be told for generations.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="./Images/slide3.jpg" class="d-block w-100" alt="slide3" height="800px">
      <div class="carousel-caption d-none d-md-block">
        <p class="caption_p">Culinary Adventures Await</p>
        <p class="caption_detail">Savor the world's flavors as you embark on a gastronomic journey,diverse cuisines and culinary delights.</p>
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

<br>

<!-- content with image start-->
<h2 class="text-center h2_custom py-2">Explore Unique Cultures and Landscapes</h2>
<br>
<div class="container-fluid row my-3">
    <div class="col-lg-6 col-md-12">
        <p class="para_custom container-fluid">Our Tours offer an opportunity to immerse yourself in the vibrant cultures and breathtaking landscapes of destinations around the world. From the bustling markets of Marrakech to the serene temples of Kyoto, each tour is crafted to showcase the essence of the region, allowing you to connect with locals, savor authentic cuisine, and witness awe-inspiring natural wonders.</p>
    </div>
    <div class="col-lg-6 col-md-12">
        <img class="img-fluid container-fluid" src="./Images/9.jpg" alt="">
    </div>
</div>
<!-- content with image End!!-->

<!-- Banner Section Start -->
<!-- <div class="row container-fluid">
  <img src="./Images/banner.jpg" alt="banner">
</div> -->
<!-- Banner Section End!! -->

<br>
<section >
  <h1>hello </h1>
  <h1>hello </h1>
  <h1>hello </h1>
  <h1>hello </h1>
  <h1>hello </h1>
</section>
<br>

<!-- content with image start-->
<h2 class="text-center h2_custom py-2">Roaming the Globe: Adventures Await</h2>
<div class="container-fluid row my-3 ">
    <div class="col-lg-6 col-md-12">
        <img class="img-fluid container-fluid" src="./Images/thailand.jpg" alt="">
    </div>
    <div class="col-lg-6 col-md-12">
        <p class="para_custom container-fluid">One of the most rewarding aspects of our travel tours is the opportunity to connect with fellow travelers who share your sense of adventure. Forge new friendships, share stories, and create bonds that often last long after the journey ends.</p>
        <p class="para_custom container-fluid">Engage with local communities and learn about their customs and way of life. Our tours prioritize meaningful interactions and create memories that last a lifetime.</p>
    </div>
</div>
<!-- content with image End!!-->

<br>

<h2 class="text-center h2_custom py-2">A Big World there to Explore</h2>

<!-- Country Display with Animation start -->
<div class="row container-fluid">
  <?php
    $sql = "SELECT * FROM `country`";
    $result = mysqli_query($connection,$sql);

    if (mysqli_num_rows($result) > 0) {
      while ($row = mysqli_fetch_array($result)) {
?>
<div class="col-lg-3 col-md-4 col-sm-6 container-fluid country_container my-4"> 
    <div class="country_name_box"> 
        <h5 class="text-center ">
          <?php 
            echo $row['Country_Name'];
        ?></h5>
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
             " alt="img" class="country_imgs" >  
    </a> </div>
<?php
      }
    }
  ?>
</div>

<!-- Country Display with Animation End!! -->

<!-- Footer File -->
<?php  include('./Includes/footer.html');?>

</body>
</html>