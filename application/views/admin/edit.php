<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">

        <div class="card">
            <div class="card-header">
                Form Edit Data Product
            </div>
            <?php foreach($shop as $sh) : ?>
                <form method="post" action="<?= base_url().'admin/editProduct'?>"></form>
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
                    <button type="submit"name="edit" class="btn btn-primary">Save</button>
                    </form>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>

