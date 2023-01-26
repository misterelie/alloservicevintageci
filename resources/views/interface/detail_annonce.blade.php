@extends('layouts.base')
@section('content')
<section id="section-detail">
    <div class="container-fluid">
        <div class="card detail-annonce">
            <div class="wrapper row">
                <div class="preview col-md-6">
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-ongletUn" role="tabpanel"
                            aria-labelledby="pills-ongletUn-tab" tabindex="0">
                            <div class="image-content">
                                <img src="https://images.unsplash.com/photo-1511707171634-5f897ff02aa9?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=580&q=80"
                                    alt="">
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-ongletDeux" role="tabpanel"
                            aria-labelledby="pills-ongletDeux-tab" tabindex="0">
                            <div class="image-content">
                                <img src="https://images.unsplash.com/photo-1517694712202-14dd9538aa97?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80"
                                    class="img-fluid" alt="">
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-ongletTrois" role="tabpanel"
                            aria-labelledby="pills-ongletTrois-tab" tabindex="0">
                            <div class="image-content">
                                <img src="https://plus.unsplash.com/premium_photo-1670274606895-f2dc713f8a90?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=773&q=80"
                                    class="img-fluid" alt="">
                            </div>
                        </div>
                    </div>
                    <ul class="nav nav-pills text-center details-pills mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="pills-ongletUn-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-ongletUn" type="button" role="tab" aria-controls="pills-ongletUn"
                                aria-selected="true">
                                <div class="gallery-small">
                                    <img src="https://images.unsplash.com/photo-1511707171634-5f897ff02aa9?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=580&q=80"
                                        class="img-fluid" alt="">
                                </div>
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-ongletDeux-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-ongletDeux" type="button" role="tab"
                                aria-controls="pills-ongletDeux" aria-selected="true">
                                <div class="gallery-small">
                                    <img src="https://images.unsplash.com/photo-1517694712202-14dd9538aa97?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80"
                                        class="img-fluid" alt="">
                                </div>
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-ongletTrois-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-ongletTrois" type="button" role="tab"
                                aria-controls="pills-ongletTrois" aria-selected="true">
                                <div class="gallery-small">
                                    <img src="https://plus.unsplash.com/premium_photo-1670274606895-f2dc713f8a90?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=773&q=80"
                                        class="img-fluid" alt="">
                                </div>
                            </button>
                        </li>

                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-ongletTrois-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-ongletTrois" type="button" role="tab"
                                aria-controls="pills-ongletTrois" aria-selected="true">
                                <div class="gallery-small">
                                    <img src="https://plus.unsplash.com/premium_photo-1670274606895-f2dc713f8a90?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=773&q=80"
                                        class="img-fluid" alt="">
                                </div>
                            </button>
                        </li>

                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-ongletTrois-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-ongletTrois" type="button" role="tab"
                                aria-controls="pills-ongletTrois" aria-selected="true">
                                <div class="gallery-small">
                                    <img src="https://plus.unsplash.com/premium_photo-1670274606895-f2dc713f8a90?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=773&q=80"
                                        class="img-fluid" alt="">
                                </div>
                            </button>
                        </li>

                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-ongletTrois-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-ongletTrois" type="button" role="tab"
                                aria-controls="pills-ongletTrois" aria-selected="true">
                                <div class="gallery-small">
                                    <img src="https://plus.unsplash.com/premium_photo-1670274606895-f2dc713f8a90?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=773&q=80"
                                        class="img-fluid" alt="">
                                </div>
                            </button>
                        </li>

                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-ongletTrois-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-ongletTrois" type="button" role="tab"
                                aria-controls="pills-ongletTrois" aria-selected="true">
                                <div class="gallery-small">
                                    <img src="https://plus.unsplash.com/premium_photo-1670274606895-f2dc713f8a90?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=773&q=80"
                                        class="img-fluid" alt="">
                                </div>
                            </button>
                        </li>

                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-ongletTrois-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-ongletTrois" type="button" role="tab"
                                aria-controls="pills-ongletTrois" aria-selected="true">
                                <div class="gallery-small">
                                    <img src="https://plus.unsplash.com/premium_photo-1670274606895-f2dc713f8a90?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=773&q=80"
                                        class="img-fluid" alt="">
                                </div>
                            </button>
                        </li>
                    </ul>
                </div>
                <div class="card-body details col-md-6">
                    <h3 class="product-title">l’iPhone 14 Pro</h3>
                    <h4 class="price">Prix: <span>310 000<sup>F</sup></span></h4>
                    <h4 class="price">Catégorie: <span>........</span></h4>
                    <h4 class="price">Lieu: <span>.............</span></h4>
                    <h4 class="price">Publiée le: <span>.......</span></h4>

                    <div class="action">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary add-to-cart btn btn-default" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">
                            Contacter le vendeur
                        </button>
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content modal-dialog-centered modal-infos">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Infos vendeur
                                        </h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <h5 class="vendeur-name"><span class="text-black">
                                                Nom: </span>Elie Kouadio</h5>
                                        <h5 class="vendeur-number">
                                            <span class="text-black">Numéro: </span>+2250143592125</h5>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Fermer</button> 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="rating">
                        <div class="stars">
                            <span class="checked"><a class="btn text-white btn-floating m-1"
                                    style="background-color: #4267B2;" href="#!" role="button">
                                    <i class="fa fa-facebook" aria-hidden="true"></i></a>
                            </span>
                            <span class="checked"><a class="btn text-white btn-floating m-1"
                                    style="background-color: #24a223;" href="#!" role="button">
                                    <i class="fa fa-whatsapp" aria-hidden="true"></i></a>
                            </span>
                            <span class="checked">
                                <a class="btn text-white btn-floating m-1" style="background-color: #0082ca;" href="#!"
                                    role="button"><i class="fa fa-linkedin"></i>
                                </a>
                            </span>
                            <span>
                                <a class="btn text-white btn-floating m-1" style="background-color: #0082ca;" href="#!"
                                    role="button"><img alt="messenger sharing button"
                                        src="https://platform-cdn.sharethis.com/img/messenger.svg">
                                </a>
                            </span>
                        </div>
                    </div><br>
                    <h5 class="product-description"><span>Description:</span>
                        <p> L'écran de l'iPhone 14 Pro a des angles arrondis
                            qui suivent la ligne élégante de l'appareil et s'inscrivent dans un rectangle standard
                        </p>
                    </h5>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection