<div class="container">
    <div class="row">
    <?php foreach ( $shop as $sh ) : ?>
        <div class="col-ms-4 ml-2">
            <div class="card" style="width: 16rem;">
            <img src="" class="card-img-top">

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


