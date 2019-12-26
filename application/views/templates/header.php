<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title><?= $title ?></title>
  </head>
  <body>

<nav class="navbar navbar-expand-lg navbar-light"  style="background-color: rgba(245,52,103,0.39)">
    <div class ="container">

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
          <a class="navbar-brand" href="#">
              <img src="assets/img/logo.png" width="90" >
          </a>
          <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item active">
              <a class="nav-link" href="<?= base_url(); ?>">Home </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?= base_url(); ?>about">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?= base_url('shop'); ?>">Shop</a>
            </li>
          </ul>
           
        </div>
    </div>
</nav>







