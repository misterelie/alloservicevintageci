<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vintage Ci</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    
</head>
<body>
    <!-- As a link -->
<section id="slide">
      <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="https://plus.unsplash.com/premium_photo-1661378738488-374f27792883?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=831&q=80" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="https://plus.unsplash.com/premium_photo-1661378738488-374f27792883?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=831&q=80" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="https://plus.unsplash.com/premium_photo-1661378738488-374f27792883?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=831&q=80" class="d-block w-100" alt="...">
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
                <a href="" class="btn btn-block btn-secondary text-center w-100 my-1"><h6 class="text-bottom">Accéder à mon compte</h6></a>
                <a href="" class="btn btn-block btn-secondary  text-center w-100 my-1"><h6 class="text-bottom">Créer un compte</h6></a>
                <h1 id="icon-text"><i class="fa fa-info-circle" aria-hidden="true"></i>Comment ça marche ?</h1>
            </div>
        </div>
    </div>
  </section><br>

  <!--section product--->
  <section id="card w-100">
    <div class="container">
      <div class="row">
        <h5 class="title-annonce text-center">Voir toutes les annonces en cours</h5>
          <div class="col-lg-12 col-12 col-md-12 m-auto">
            <div class="card card-item mb-3">
              <table width="100%">
                <tbody width="100%">
                  <tr width="100%">
                    <td  class="media-col width-25">
                      <div class="card-media">
                        <img src="https://plus.unsplash.com/premium_photo-1661378738488-374f27792883?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=831&q=80" class="img-fluid rounded-start" alt="...">
                      </div>
                    </td>
                    <td class="width-75">
                      <div class="card-details position-relative">
                        <span class="item-category">Informatique</span>
                        <span class="vtg-badge badge-vip">VIP</span>
                        <div class="item-name">
                          <h3>Super ordinateur HP i5 en vente avec son chargeur</h3>
                        </div>
                        <div class="item-infos">
                            <div class="item-details">
                            </div>
                          <div class="item-meta">
                            <span class="date">Il y a: 6 heures</span>
                            <span class="city">Yopougon Koweit</span>
                          </div>
                          <div class="item-price">
                            <h2 class="price">135 000 <sup class="currency">FCFA</sup></h2>
                          </div>
                        </div>
                      </div>
                    </td>
                  </tr>
                </tbody>
              </table>
              
            </div>
            {{-- fin de la carte --}}

            <div class="card card-item mb-3">
              <table width="100%">
                <tbody width="100%">
                  <tr width="100%">
                    <td class="width-25" class="media-col">
                      <div class="card-media">
                        <img src="https://plus.unsplash.com/premium_photo-1661378738488-374f27792883?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=831&q=80" class="img-fluid rounded-start" alt="...">
                      </div>
                    </td>
                    <td class="width-75">
                      <div class="card-details position-relative">
                        <span class="item-category">Informatique</span>
                        <span class="vtg-badge badge-vip">VIP</span>
                        <div class="item-name">
                          <h3>Super ordinateur HP i5 en vente + écouteurs</h3>
                        </div>
                        <div class="item-infos">
                            <div class="item-details">
        
                            </div>
                          <div class="item-meta">
                            <span class="date">Il y a: 6 heures</span>
                            <span class="city">Yopougon Koweit</span>
                          </div>
                          <div class="item-price">
                            <h2 class="price">135 000 <sup class="currency">FCFA</sup></h2>
                          </div>
                        </div>
                      </div>
                    </td>
                  </tr>
                </tbody>
              </table>
              
            </div>
            {{-- fin de la carte --}}

            <div class="card card-item mb-3">
              <table width="100%">
                <tbody width="100%">
                  <tr width="100%">
                    <td class="width-25" class="media-col">
                      <div class="card-media">
                        <img src="https://plus.unsplash.com/premium_photo-1661378738488-374f27792883?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=831&q=80" class="img-fluid rounded-start" alt="...">
                      </div>
                    </td>
                    <td class="width-75">
                      <div class="card-details position-relative">
                        <span class="item-category">Informatique</span>
                        <span class="vtg-badge badge-vip">VIP</span>
                        <div class="item-name">
                          <h3>Super ordinateur HP i5 en vente</h3>
                        </div>
                        <div class="item-infos">
                            <div class="item-details">
                            </div>
                          <div class="item-meta">
                            <span class="date">Il y a: 6 heures</span>
                            <span class="city">Yopougon Koweit</span>
                          </div>
                          <div class="item-price">
                            <h2 class="price">135 000 <sup class="currency">FCFA</sup></h2>
                          </div>
                        </div>
                      </div>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
            {{-- fin de la carte --}}

            <div class="card card-item mb-3">
              <table width="100%">
                <tbody width="100%">
                  <tr width="100%">
                    <td class="width-25" class="media-col">
                      <div class="card-media">
                        <img src="https://plus.unsplash.com/premium_photo-1661378738488-374f27792883?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=831&q=80" class="img-fluid rounded-start" alt="...">
                      </div>
                    </td>
                    <td class="width-75">
                      <div class="card-details position-relative">
                        <span class="item-category">Informatique</span>
                        <span class="vtg-badge badge-vip">VIP</span>
                        <div class="item-name">
                          <h3>Super ordinateur HP i5 en vente</h3>
                        </div>
                        <div class="item-infos">
                            <div class="item-details">
                            </div>
                          <div class="item-meta">
                            <span class="date">Il y a: 6 heures</span>
                            <span class="city">Yopougon Koweit</span>
                          </div>
                          <div class="item-price">
                            <h2 class="price">135 000 <sup class="currency">FCFA</sup></h2>
                          </div>
                        </div>
                      </div>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>

            <div class="card card-item mb-3">
              <table width="100%">
                <tbody width="100%">
                  <tr width="100%">
                    <td class="width-25" class="media-col">
                      <div class="card-media">
                        <img src="https://plus.unsplash.com/premium_photo-1661378738488-374f27792883?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=831&q=80" class="img-fluid rounded-start" alt="...">
                      </div>
                    </td>
                    <td class="width-75">
                      <div class="card-details position-relative">
                        <span class="item-category">Informatique</span>
                        <span class="vtg-badge badge-vip">VIP</span>
                        <div class="item-name">
                          <h3>Super ordinateur HP i5 en vente</h3>
                        </div>
                        <div class="item-infos">
                            <div class="item-details">
                            </div>
                          <div class="item-meta">
                            <span class="date">Il y a: 6 heures</span>
                            <span class="city">Yopougon Koweit</span>
                          </div>
                          <div class="item-price">
                            <h2 class="price">135 000 <sup class="currency">FCFA</sup></h2>
                          </div>
                        </div>
                      </div>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>

            <!-- product no vip--->
            <div class="card card-item-novip mb-3">
              <table width="100%">
                <tbody width="100%">
                  <tr width="100%">
                    <td class="width-25" class="media-col">
                      <div class="card-media">
                        <img src="https://plus.unsplash.com/premium_photo-1661378738488-374f27792883?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=831&q=80" class="img-fluid rounded-start" alt="...">
                      </div>
                    </td>
                    <td class="width-75">
                      <div class="card-details position-relative">
                        <span class="item-category">Informatique</span>
                        <div class="item-name">
                          <h3>Super ordinateur HP i5 en vente</h3>
                        </div>
                        <div class="item-infos">
                            <div class="item-details">
                            </div>
                          <div class="item-meta">
                            <span class="date">Il y a: 6 heures</span>
                            <span class="city">Yopougon Koweit</span>
                          </div>
                          <div class="item-price">
                            <h2 class="price">135 000 <sup class="currency">FCFA</sup></h2>
                          </div>
                        </div>
                      </div>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="card card-item-novip mb-3">
              <table width="100%">
                <tbody width="100%">
                  <tr width="100%">
                    <td class="width-25" class="media-col">
                      <div class="card-media">
                        <img src="https://plus.unsplash.com/premium_photo-1661378738488-374f27792883?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=831&q=80" class="img-fluid rounded-start" alt="...">
                      </div>
                    </td>
                    <td class="width-75">
                      <div class="card-details position-relative">
                        <span class="item-category">Informatique</span>
                        <div class="item-name">
                          <h3>Super ordinateur HP i5 en vente</h3>
                        </div>
                        <div class="item-infos">
                            <div class="item-details">
                            </div>
                          <div class="item-meta">
                            <span class="date">Il y a: 6 heures</span>
                            <span class="city">Yopougon Koweit</span>
                          </div>
                          <div class="item-price">
                            <h2 class="price">135 000 <sup class="currency">FCFA</sup></h2>
                          </div>
                        </div>
                      </div>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>

            <div class="card card-item-novip mb-3">
              <table width="100%">
                <tbody width="100%">
                  <tr width="100%">
                    <td class="width-25" class="media-col">
                      <div class="card-media">
                        <img src="https://plus.unsplash.com/premium_photo-1661378738488-374f27792883?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=831&q=80" class="img-fluid rounded-start" alt="...">
                      </div>
                    </td>
                    <td class="width-75">
                      <div class="card-details position-relative">
                        <span class="item-category">Informatique</span>
                        <div class="item-name">
                          <h3>Super ordinateur HP i5 en vente</h3>
                        </div>
                        <div class="item-infos">
                            <div class="item-details">
                            </div>
                          <div class="item-meta">
                            <span class="date">Il y a: 6 heures</span>
                            <span class="city">Yopougon Koweit</span>
                          </div>
                          <div class="item-price">
                            <h2 class="price">135 000 <sup class="currency">FCFA</sup></h2>
                          </div>
                        </div>
                      </div>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>

            <div class="card card-item-novip mb-3">
              <table width="100%">
                <tbody width="100%">
                  <tr width="100%">
                    <td class="width-25" class="media-col">
                      <div class="card-media">
                        <img src="https://plus.unsplash.com/premium_photo-1661378738488-374f27792883?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=831&q=80" class="img-fluid rounded-start" alt="...">
                      </div>
                    </td>
                    <td class="width-75">
                      <div class="card-details position-relative">
                        <span class="item-category">Informatique</span>
                        <div class="item-name">
                          <h3>Super ordinateur HP i5 en vente</h3>
                        </div>
                        <div class="item-infos">
                            <div class="item-details">
                            </div>
                          <div class="item-meta">
                            <span class="date">Il y a: 6 heures</span>
                            <span class="city">Yopougon Koweit</span>
                          </div>
                          <div class="item-price">
                            <h2 class="price">135 000 <sup class="currency">FCFA</sup></h2>
                          </div>
                        </div>
                      </div>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>

            <div class="card card-item-novip mb-3">
              <table width="100%">
                <tbody width="100%">
                  <tr width="100%">
                    <td class="width-25" class="media-col">
                      <div class="card-media">
                        <img src="https://plus.unsplash.com/premium_photo-1661378738488-374f27792883?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=831&q=80" class="img-fluid rounded-start" alt="...">
                      </div>
                    </td>
                    <td class="width-75">
                      <div class="card-details position-relative">
                        <span class="item-category">Informatique</span>
                        <div class="item-name">
                          <h3>Super ordinateur HP i5 en vente</h3>
                        </div>
                        <div class="item-infos">
                            <div class="item-details">
                            </div>
                          <div class="item-meta">
                            <span class="date">Il y a: 6 heures</span>
                            <span class="city">Yopougon Koweit</span>
                          </div>
                          <div class="item-price">
                            <h2 class="price">135 000 <sup class="currency">FCFA</sup></h2>
                          </div>
                        </div>
                      </div>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>

            <div class="card card-item-novip mb-3">
              <table width="100%">
                <tbody width="100%">
                  <tr width="100%">
                    <td class="width-25" class="media-col">
                      <div class="card-media">
                        <img src="https://plus.unsplash.com/premium_photo-1661378738488-374f27792883?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=831&q=80" class="img-fluid rounded-start" alt="...">
                      </div>
                    </td>
                    <td class="width-75">
                      <div class="card-details position-relative">
                        <span class="item-category">Informatique</span>
                        <div class="item-name">
                          <h3>Super ordinateur HP i5 en vente</h3>
                        </div>
                        <div class="item-infos">
                            <div class="item-details">
                            </div>
                          <div class="item-meta">
                            <span class="date">Il y a: 6 heures</span>
                            <span class="city">Yopougon Koweit</span>
                          </div>
                          <div class="item-price">
                            <h2 class="price">135 000 <sup class="currency">FCFA</sup></h2>
                          </div>
                        </div>
                      </div>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>

            <div class="card card-item-novip mb-3">
              <table width="100%">
                <tbody width="100%">
                  <tr width="100%">
                    <td class="width-25" class="media-col">
                      <div class="card-media">
                        <img src="https://plus.unsplash.com/premium_photo-1661964193692-061c64679d41?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=871&q=80" class="img-fluid rounded-start" alt="...">
                      </div>
                    </td>
                    <td class="width-75">
                      <div class="card-details position-relative">
                        <span class="item-category">Informatique</span>
                        <div class="item-name">
                          <h3>Super ordinateur HP i5 en vente</h3>
                        </div>
                        <div class="item-infos">
                            <div class="item-details">
                            </div>
                          <div class="item-meta">
                            <span class="date">Il y a: 6 heures</span>
                            <span class="city">Yopougon Koweit</span>
                          </div>
                          <div class="item-price">
                            <h2 class="price">135 000 <sup class="currency">FCFA</sup></h2>
                          </div>
                        </div>
                      </div>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>

            <div class="card card-item-novip mb-3">
              <table width="100%">
                <tbody width="100%">
                  <tr width="100%">
                    <td class="width-25" class="media-col">
                      <div class="card-media">
                        <img src="https://images.unsplash.com/photo-1661961110372-8a7682543120?ixlib=rb-4.0.3&ixid=MnwxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" class="img-fluid rounded-start" alt="...">
                      </div>
                    </td>
                    <td class="width-75">
                      <div class="card-details position-relative">
                        <span class="item-category">Informatique</span>
                        <div class="item-name">
                          <h3>Super ordinateur HP i5 en vente</h3>
                        </div>
                        <div class="item-infos">
                            <div class="item-details">
                            </div>
                          <div class="item-meta">
                            <span class="date">Il y a: 6 heures</span>
                            <span class="city">Yopougon Koweit</span>
                          </div>
                          <div class="item-price">
                            <h2 class="price">135 000 <sup class="currency">FCFA</sup></h2>
                          </div>
                        </div>
                      </div>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>

            <div class="card card-item-novip mb-3">
              <table width="100%">
                <tbody width="100%">
                  <tr width="100%">
                    <td class="width-25" class="media-col">
                      <div class="card-media">
                        <img src="https://images.unsplash.com/photo-1661961110218-35af7210f803?ixlib=rb-4.0.3&ixid=MnwxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" class="img-fluid rounded-start" alt="...">
                      </div>
                    </td>
                    <td class="width-75">
                      <div class="card-details position-relative">
                        <span class="item-category">Informatique</span>
                        <div class="item-name">
                          <h3>Super ordinateur HP i5 en vente</h3>
                        </div>
                        <div class="item-infos">
                            <div class="item-details">
                            </div>
                          <div class="item-meta">
                            <span class="date">Il y a: 6 heures</span>
                            <span class="city">Yopougon Koweit</span>
                          </div>
                          <div class="item-price">
                            <h2 class="price">135 000 <sup class="currency">FCFA</sup></h2>
                          </div>
                        </div>
                      </div>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>

            <div class="card card-item-novip mb-3">
              <table width="100%">
                <tbody width="100%">
                  <tr width="100%">
                    <td class="width-25" class="media-col">
                      <div class="card-media">
                        <img src="https://images.unsplash.com/photo-1661961110218-35af7210f803?ixlib=rb-4.0.3&ixid=MnwxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" class="img-fluid rounded-start" alt="...">
                      </div>
                    </td>
                    <td class="width-75">
                      <div class="card-details position-relative">
                        <span class="item-category">Informatique</span>
                        <div class="item-name">
                          <h3>Super ordinateur HP i5 en vente</h3>
                        </div>
                        <div class="item-infos">
                            <div class="item-details">
                            </div>
                          <div class="item-meta">
                            <span class="date">Il y a: 6 heures</span>
                            <span class="city">Yopougon Koweit</span>
                          </div>
                          <div class="item-price">
                            <h2 class="price">135 000 <sup class="currency">FCFA</sup></h2>
                          </div>
                        </div>
                      </div>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>

            <div class="container">
              <nav aria-label="Pagination">
                <ul class="pagination">
                <li class="page-item">
                <a class="page-link" href="#" aria-label="Previous">
                <span aria-hidden="true">«</span>
                <span class="sr-only">Previous</span>
                </a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                <a class="page-link" href="#" aria-label="Next">
                <span aria-hidden="true">»</span>
                <span class="sr-only">Next</span>
                </a>
                </li>
                </ul>
                </nav>
            </div>
          </div>
      </div>
    </div>
  </section>



  
<!-- end section product--->
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</html>