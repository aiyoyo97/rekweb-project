<div class="container">
    <div class="row m-4">
    <div class="card mb-3" style="max-width: 540px;">
 
    <div class="row">
    <div class="col-md-4">
      <img src="assets/img/fragrance/<?= $shop["image"]; ?>" width="200" height="210">
    </div>

    <div class="col-md-8">
        <table class="table table-striped">
            <tr>
                <td>Name</td>
                <td><strong><h5><?= $shop['name']; ?></h5></strong></td>
            </tr>
            <tr>
                <td>Description</td>
                <td><strong><h5><?= $shop['description']; ?></h5></strong></td>
            </tr>
            <tr>
                <td>Price</td>
                <td><strong><h5><div class="btn btn-lg btn-success" disabled>Rp. <?= number_format($shop["price"], 0,',',',')?> </div></h5></strong></td>
            </tr>
        </table>
   
      
    </div>

  </div>


</div>
    </div>
</div>
