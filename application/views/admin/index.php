<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="mt-3">Product List</h1>

        <a href="<?= base_url('admin/add')?>" class="btn btn-dark col-lg-3" data-toggle="modal" data-target="#add">Add Product</a>

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


        <div class="row">
            <div class="col-md">
                <table class="table table-striped table-bordered">
                    <thead class="thead-dark md-10">
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Image</th>
                        <th scope="col">Category</th>
                        <th scope="col">Description</th>
                        <th scope="col">Price</th>
                        <th scope="col">Stock</th>
                        <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>

                    <div class="row mt-3">
                    <div class="col-md-3">
                    <?php if(empty($shop)) : ?>
                        <tr>
                        <td colspan="4">
                        <div class="alert alert-danger" role="alert">
                            Data not found!
                        </div>
                        </td>
                        </tr>
                    <?php endif; ?>

                    <?php
                    $no=1; 
                    foreach ($shop as $sh) : ?>
                        <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $sh['name'] ?></td>
                        <td><?= $sh['image'] ?></td>
                        <td><?= $sh['category'] ?></td>
                        <td><?= $sh['description'] ?></td>
                        <td><?= $sh['price'] ?></td>
                        <td><?= $sh['stock'] ?></td>
                        <td>
                            
                            <a href="<?= base_url(); ?>admin/edit/<?= $sh['id'] ?>" class="badge badge-info float-right">edit</a>

                            <a href="<?= base_url(); ?>admin/edit/<?= $sh['id'] ?>" class="badge badge-info float-right">update</a>

                            <a href="<?= base_url(); ?>admin/delete/<?= $sh['id'] ?>" class="badge badge-danger float-right button-delete">delete</a>
                        </td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">FORM ADD PRODUCT</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <form action="<?= base_url(). 'admin/add_action'?>" method="post" enctype="multipart/form-data" >
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Image</label><br>
                        <input type="file" name="image" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Category</label>
                        <input type="text" name="category" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <input type="text" name="description" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Price</label>
                        <input type="number" name="price" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Stock</label>
                        <input type="number" name="stock" class="form-control">
                    </div> 
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
                </form>
            </div>
        </div>
        </div>
    </div>
</div>
</div>