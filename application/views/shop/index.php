<div class="container">
  <button class="btn btn-outline-transparent my-2 my-sm-1" type="submit" ><img src="assets/img/search.svg" width="20" ></button><br>
  <button type="button" class="btn btn-link-transparent">Login / Register</button><br>
  <button type="button" class="btn btn-link-transparent">Carts</button>
</div>



 <!-- slider -->
 <div class="container">
 <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
            <img src="assets/img/slider/slider4.jpg" class="d-block w-100">
            </div>
            <div class="carousel-item">
            <img src="assets/img/slider/slider4.jpg" class="d-block w-100">
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
  </div>  

<!-- card -->
<div class="container">
    <div class="row text-center mt-3">
    <?php foreach ( $shop as $sh ) : ?>
        <div class="col-ms-6 ml-3">
            <div class="card ml-4 mt-4 border-dark" style="width: 16rem;">
            <img src="assets/img/fragrance/<?= $sh["image"]; ?>" width="250" height="250">

                <div class="card-body">
                    <h5 class="card-title"><?= $sh["name"]; ?></h5>
                    <p class="card-text"><?= $sh["description"]; ?></p>
                    <span class="badge badge-success">RM<?= $sh["price"]; ?></span>
                    <h5 class="card-title"><?= $sh["stock"]; ?></h5>
                    <a href="#" class="btn btn-sm btn-primary">Add to Cart</a>
                    <a href="#" class="btn btn-sm btn-primary">Detail</a>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
    </div>
</div>


