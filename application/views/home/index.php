<?php
  $data = file_get_contents('data/bestseller.json');
  $menu = json_decode($data,true);
  $menu = $menu["menu"];
?>

<div class="container">
  <div class="text-right mt-3">
    <button type="button" class="btn btn-link-transparent">Login / Sign Up</button>
    <button type="button" class="btn btn-link-transparent" type="submit" ><img src="assets/img/shopping-cart.svg" width="30" ></button>
  </div>  
</div>


<div class="container">
        <div class="row mt-3 justify-content-center">
          <div class="col-md-8">
            <div class="input-group mb-3">
              <input type="text" class="form-control input-keyword" placeholder="Search Essence Beauty"/>
              <div class="input-group-append">
                <button class="btn btn-light" type="button">Search</button>
              </div>
            </div>
          </div>
        </div>
      </div>

<div class="w-100 p-3" style="background-transparent: #eee;">
</div>


<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <div class="mx-auto" style="width: 1200px;">
        <img src="assets/img/home02.png" class="d-block-center w-100" >
      </div>  
    </div>
  <div class="carousel-item" >
    <div class="mx-auto" style="width: 1200px;">
      <img src="assets/img/home01.png" class="d-block w-100" >  
    </div>  
  </div>
  <div class="carousel-item" >
    <div class="mx-auto" style="width: 1200px;">
      <img src="assets/img/home.png" class="d-block w-100" >
    </div>  
  </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>



<div class="container">

<div class="row mt-3 justify-content-center">
  <h2 class="font-italic mt-4">/ Best Seller /</h2>
</div>
<break>
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">

    <div class="row">
        <?php foreach ($menu as $row):?>  
      <div class="col-md-4">
        <div class="card-transparent mb-3">
          <img src="assets/img/bestseller/<?= $row["image" ]; ?>" class="card-img-top">
          <div class="card-body">
            <h5 class="card-title"><?=$row["name"]; ?></h5>
            <h5 class="card-title">Rp. <?=$row["price"]; ?></h5>
            <a href="#" class="btn btn-outline-danger">Add To Cart</a>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
      
    </div>
  

    <div class="carousel-item">

      <div class="row">
        <?php foreach ($menu as $row):?>  
      <div class="col-md-4">
        <div class="card-transparent mb-3">
          <img src="assets/img/bestseller/<?= $row["image" ]; ?>" class="card-img-top">
          <div class="card-body">
            <h5 class="card-title"><?=$row["name"]; ?></h5>
            <h5 class="card-title">Rp. <?=$row["price"]; ?></h5>
            <a href="#" class="btn btn-outline-danger">Add To Cart</a>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>

    </div>
    <div class="carousel-item">
    <div class="row">
        <?php foreach ($menu as $row):?>  
      <div class="col-md-4">
        <div class="card-transparent mb-3">
          <img src="assets/img/bestseller/<?= $row["image" ]; ?>" class="card-img-top">
          <div class="card-body">
            <h5 class="card-title"><?=$row["name"]; ?></h5>
            <h5 class="card-title">Rp. <?=$row["price"]; ?></h5>
            <a href="#" class="btn btn-outline-danger">Add To Cart</a>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>





<div class="row mt-3 justify-content-center">
  <h2 class="font-italic mt-4">/ Featured Brands /</h2>
</div>
<div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active" data-interval="10000">
      <div class="text-center">
        <img src="assets/img/logo/sk-ii.jpg" class=" w-35">
        <img src="assets/img/logo/suisse.jpg" class=" w-35">
        <img src="assets/img/logo/lancome.jpg" class=" w-35">
        <img src="assets/img/logo/lamer.jpg" class=" w-35">
      </div>
    </div>
  
    <div class="carousel-item" data-interval="2000">
      <div class="text-center">
        <img src="assets/img/logo/chanel.jpg" class=" w-35">
        <img src="assets/img/logo/sisley.jpg" class=" w-35">
        <img src="assets/img/logo/shiseido.jpg" class=" w-35">
        <img src="assets/img/logo/esteelauder.jpg" class=" w-35">
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>






<div class="sticky-bottom">
  <div class="example-container">
    <div class="example-row">
      
      <p class="font-weight-bolder mt-5">CONTACT US</p>
      <div class="example-content-secondary">Monday-Friday: 10:00am-5:30pm</div>
      <div class="example-content-secondary">1-646-882-0523</div>
      <div class="example-content-secondary">service@essencebeauty.info</div>
          <img src="assets/img/instagram.svg" class="mr-3 mt-2" width="25" >
          <img src="assets/img/youtube-square.svg" class="mr-3 mt-2" width="25"  >
          <img src="assets/img/facebook-square.svg" class="mr-3 mt-2" width="25"  >
          <img src="assets/img/twitter-square.svg" class="mr-3 mt-2" width="25"  >
    </div>
</div>

<div class="container">
  <div class="row mt-5 justify-content-center">
    <img src="assets/img/copyright.svg" class="mr-2" width="18"  >
    <p class="font-weight-normal">2019 ESSENCE BEAUTY INC. ALL RIGHTS RESERVED</p>
  </div>  
</div>

</div>




