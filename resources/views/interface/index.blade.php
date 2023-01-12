<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vintage Ci</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    
</head>
<body>
    <!-- As a link -->
<section id="slide">
      <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="{{ asset('assets/img/slide.png') }}" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="{{ asset('assets/img/slide.png') }}" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="{{ asset('assets/img/slide.png') }}" class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
</section>
  <section id="section-bottom">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-10 col-lg-10 col-sm-10 d-block text-center m-auto">
                <a href="" class="btn btn-block btn-primary text-center w-100 my-1"><h6 class="text-bottom">Poster une annonce</h6></a>
                <a href="" class="btn btn-block btn-default text-center w-100 my-1"><h6 class="text-bottom">Accéder à mon compte</h6></a>
                <a href="" class="btn btn-block btn-secondary  text-center w-100 my-1"><h6 class="text-bottom">Créer un compte</h6></a>
                <h1 id="icon-text"><i class="fa fa-info-circle" aria-hidden="true"></i>Comment ça marche ?</h1>
            </div>
        </div>
    </div>
  </section><br>

  <section id="card w-100">
    <h6  class="title-annonce text-center">Voir toutes les annonces en cours</h6>
    <div class="container">
      <div class="card mb-3">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="https://plus.unsplash.com/premium_photo-1661378738488-374f27792883?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=831&q=80" class="img-fluid rounded-start" alt="...">
          </div>
          <div class="col-md-8">
            <div class="product-label-group">
              <a href=""><button class="btn btn-success button-vip">VIP</button></a>
            </div>
            <div class="card-body">
              <a href=""class="card-text product-name">Cusines</a>
              <p class="card-text">Tee-shirt manche longue pour enfant de 8</p>
              <a href=""><h4 class="card-text">A Abidjan</h4></a>
              <h6 class="card-text"><small class="text-muted">Le: 30-11-2022 à 22:59</small></h6>
            </div>
          </div>
        </div>
      </div>

      <div class="card mb-3">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="https://plus.unsplash.com/premium_photo-1661378738488-374f27792883?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=831&q=80" class="img-fluid rounded-start" alt="...">
          </div>
          <div class="col-md-8">
            <div class="product-label-group">
              <a href=""><button class="btn btn-success button-vip">VIP</button></a>
            </div>
            <div class="card-body">
              <a href=""class="card-text product-name">Cusines</a>
              <p class="card-text">Tee-shirt manche longue pour enfant de 8</p>
              <a href=""><h4 class="card-text">A Abidjan</h4></a>
              <h6 class="card-text"><small class="text-muted">Le: 30-11-2022 à 22:59</small></h6>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</html>