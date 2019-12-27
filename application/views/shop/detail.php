<div class="container">

    <div class="row mt-3">
        <div class="col-ms-6 ml-3">
            <div class="card ml-4 mt-4 border-dark" style="width: 16rem;">
                <img src="<?= base_url(); ?>assets/img/fragrance/<?= $shop["image"]; ?>" width="250" height="250">

                <div class="card-body">
                    <h5 class="card-title"><?= $shop["name"]; ?></h5>
                    <p class="card-text"><?= $shop["description"]; ?></p>
                    <span class="badge badge-success">RM<?= $shop["price"]; ?></span>
                    <h5 class="card-title"><?= $shop["stock"]; ?></h5>
                    <a href="" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#exampleModal">Add to Cart</a>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add to Cart</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <form action="<?= base_url(); ?>shop/add/<?= $shop["id"]; ?>" method="post">
                    <div class="container-flid">
                        <div class="row">
                            <div class="col-md-4">
                                <img src="<?= base_url(); ?>assets/img/fragrance/<?= $shop["image"]; ?>" class="img-fluid">
                            </div>

                            <div class="col-md-8">
                                <h5 class="card-title"><?= $shop["name"]; ?></h5>
                                <p class="card-text"><?= $shop["description"]; ?></p>
                                <span class="badge badge-success">RM<?= $shop["price"]; ?></span>
                                <h5 class="card-title"><?= $shop["stock"]; ?></h5>

                                <div class="form-group">
                                    <label for="quantity">Quantity :</label>
                                    <input type="number" min="1" name="quantity" class="form-control" id="quantity" value="1">
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Confirm</button>
                </form>
            </div>
        </div>
    </div>
</div>