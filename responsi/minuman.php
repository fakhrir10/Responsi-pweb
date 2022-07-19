<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>Minuman</title>
  </head>
  <body>
  <!-- Jumbotron -->
      <div class="jumbotron jumbotron-fluid text-center">
        <div class="container">
          <h1 class="display-4"><span class="font-weight-bold">EPIDEMIC DRINK</span></h1>
          <hr>
          <p class="lead font-weight-bold">Silahkan Pesan BRO!! :) <br> 
          Enjoy Your Drink</p>
        </div>
      </div>
  <!-- Akhir Jumbotron -->

  <nav class="navbar bg-dark">
    <div class="container">
      <a class="navbar-brand" href="#">
        <img src="https://images.tokopedia.net/img/cache/215-square/shops-1/2020/7/21/6734700/6734700_87b84d1c-8c07-4c92-9faf-2d1de919e479.jpg" alt="" width="30" height="24">
      </a>
      <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">EPIDEMIC DRINK</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="home.php">Home</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link active" aria-current="page" href="makanan.php">Makanan</a>
                </a>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="minuman.php">Minuman</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
  </nav>

  <!-- Menu -->
  <div class="container">
    <center><h3>DAFTAR MENU</h3></center>
    <div class="row mt-3">
      <div class="col-md-3">
        <div class="card border-dark">
          <img src="images/jusmangga.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <form action="cetak.php" method="post">
            <h5 class="card-title font-weight-bold" name = "mangga" id = "mangga">Jus mangga</h5>
           <label class="card-text harga">Rp. 9.000</label><br>
           <a href="keranjang.php" class="btn btn-success btn-sm">TAMBAHKAN</a>
           </form>
          </div>
        </div>
      </div>

      <div class="col-md-3">
        <div class="card border-dark">
          <img src="images/juspukat.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title font-weight-bold">Jus alpukat</h5>
           <label class="card-text">Rp. 10.000</label><br>
           <a href="keranjang.php" class="btn btn-success btn-sm">TAMBAHKAN</a>
          </div>
        </div>
      </div>

      <div class="col-md-3">
        <div class="card border-dark">
          <img src="images/esjeruk.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title font-weight-bold">Jus jeruk</h5>
            <label class="card-text">Rp. 8.000</label><br>
            <a href="keranjang.php" class="btn btn-success btn-sm">TAMBAHKAN</a>
          </div>
        </div>
      </div>


      <div class="col-md-3">
        <div class="card border-dark ">
          <img src="images/tehobeng.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title font-weight-bold">Es teh</h5>
            <label class="card-text">Rp. 4.000</label><br>
            <a href="keranjang.php" class="btn btn-success btn-sm">TAMBAHKAN</a>
          </div>
        </div>
      </div>        

      <div class="col-md-3">
        <div class="card border-dark">
          <img src="images/sanford.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title font-weight-bold">Air putih</h5>
            <label class="card-text">Rp. 3.000</label><br>
            <a href="keranjang.php" class="btn btn-success btn-sm">TAMBAHKAN</a>
          </div>
        </div>
      </div>   
     </div> 
  </div>
  <!-- Akhir Menu -->

   <!-- Awal Footer -->
   <hr class="footer">
   <div class="container">
     <div class="row footer-body">
       <div class="col-md-6">
       <div class="copyright">
         <strong>Responsi PWEB</strong> <i class="far fa-copyright"></i> 2022 -  Fakhrir Rahman (2100018103)</p>
       </div>
       </div>

       <div class="col-md-6 d-flex justify-content-end">
       <div class="icon-contact">
       <label class="font-weight-bold">my social media </label>
       <a href="https://www.facebook.com/fakhrir.rahman.1/"><img src="images/icon/fb.png" class="mr-3 ml-4" data-toggle="tooltip" title="Facebook"></a>
       <a href="https://www.instagram.com/fakhrirrahman/?hl=id"><img src="images/icon/ig.png" class="mr-3" data-toggle="tooltip" title="Instagram"></a>
     </div>
       </div>
     </div>
   </div>
<!-- Akhir Footer -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.js"></script>
  </body>
</html>