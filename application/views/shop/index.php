<div class="container">
  <div class="text-right mt-3">
    <button type="button" class="btn btn-link-transparent">Login / Sign Up</button>
    <button type="button" class="btn btn-link-transparent" type="submit"><img src="assets/img/shopping-cart.svg" width="30"></button>
  </div>
</div>

<!-- search -->
<div class="container">
  <div class="row mt-3 justify-content-center">
    <div class="col-lg-6">
      <form action="<?= base_url(); ?>shop" method="post">
        <div class="input-group mb-3"><input type="text" class="form-control" placeholder="Search product.." name="keyword" id="keyword" autocomplete="off">
          <div class="input-group-append">
            <button class="btn btn-secondary" type="submit" id="buttonFind">search</button>
          </div>
        </div>
      </form>
    </div>
  </div>

  <div class="row mt-3">
    <div class="col-md-3">
      <?php if (empty($shop)) : ?>
        <tr>
          <td colspan="4">
            <div class="alert alert-danger" role="alert">
              Data not found!
            </div>
          </td>
        </tr>
      <?php endif; ?>
    </div>
  </div>
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
        <img src="assets/img/slider/slider7.jpg" class="d-block w-100">
      </div>
      <div class="carousel-item">
        <img src="assets/img/slider/slider8.jpg" class="d-block w-100">
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
    <?php foreach ($shop as $sh) : ?>
      <div class="col-ms-6 ml-3">
        <div class="card ml-3 mt-3 border-dark" style="width: 14rem;">
          <img src="assets/img/fragrance/<?= $sh["image"]; ?>" width="210" height="240">

          <div class="card-body">
            <h5 class="card-title"><?= $sh["name"]; ?></h5>
            <p class="card-text"><?= $sh["description"]; ?></p>
            <span class="badge badge-success">Rp. <?= number_format($sh["price"], 0, ',', ',') ?></span>
            <h5 class="card-title"><?= $sh["stock"]; ?></h5>

            <a href="<?= base_url(); ?>shop/detail/<?= $sh['id'] ?>" class="btn btn-sm btn-primary">Detail</a>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</div>