<div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="mt-3">Product List</h1>

            <a href="<?= base_url('admin/add')?>" class="btn btn-dark col-lg-3">Add Product</a>

                <div class="row mt-3">
                    <div class="col-md-6">
                        <form action="" method="post">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Find Product.." name="keyword">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="submit">Find</button>
                            </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="row mt-3">
                <div class="col-md-3">
                <?php if( empty($shop) ) : ?>
                        <div class="alert alert-danger" role="alert">
                    Data is not found. 
                    </div>
                <?php endif; ?>

                <ul class="list-group">
                    <?php foreach( $shop as $sh ) : ?>
                        <li class="list-group-item"><?= $sh['name'] ?>
                        <a href="<?= base_url(); ?>admin/delete/<?= $sh['id'] ?>" class="badge badge-danger float-right button-delete">delete</a>

                        <a href="<?= base_url(); ?>admin/edit/<?= $sh['id'] ?>" class="badge badge-success float-right">edit</a>

                        <a href="<?= base_url(); ?>admin/details/<?= $sh['id'] ?>" class="badge badge-primary float-right">details</a>
                    </li>
                    <?php endforeach; ?>
                </ul>

            </div>
        </div>
    </div>