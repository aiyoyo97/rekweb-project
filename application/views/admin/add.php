
    <div class="container">
      <div class="row">
        <div class=" col-6">
          <br>
          <h3>Add Product Form</h3>
          <form method="post" action="">
              <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name">
                <small><?= form_error('name') ?></small>
                
                <label for="description">Description</label>
                <input type="text" class="form-control" id="description" name="description">
                <small><?= form_error('description') ?></small>

                <label for="price">Price</label>
                <input type="number" class="form-control" id="price" name="price">
                <small><?= form_error('price') ?></small>

                <label for="category">Category</label>
                <input type="text" class="form-control" id="category" name="category">
                <small><?= form_error('category') ?></small>

                <label for="image">Image</label>
                <input type="text" class="form-control" id="image" name="image">
                <small><?= form_error('image') ?></small>

                <label for="stock">Stock</label>
                <input type="text" class="form-control" id="stock" name="stock">
                <small><?= form_error('stock') ?></small>

              <button type="submit" class="btn btn-dark mt-3" name="tambah" >Add Product</button>
              
          </form>
        </div>
      </div>
    </div>


