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
    <header>
        <div class="container-fluid">
            <!-- Button trigger modal -->
            <div class="mobile-toggler d-lg-none">
                <a href="#" data-bs-toggle="modal" data-bs-target="#navbModal">
                    <i class="fa fa-bars"></i>
                </a>
            </div>
            <div class="navb-logo">
                <a href="{{ route('interface.index') }}"><img
                        src="{{ asset('assets/img/icon-android.png') }}" alt="Logo"></a>
            </div>

            <div class="mobile-toggler d-lg-none">
                <a href="{{ route('interface.login') }}">
                    <i class="fa fa-user-plus"></i>
                </a>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="navbModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <a href="{{ route('interface.index') }}"><img
                                    src="{{ asset('assets/img/ICONES-04.png') }}" alt="Logo"></a>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        </div>
                        <div class="modal-body">
                            <div class="modal-line">
                                <i class="fa fa-home" aria-hidden="true"></i><a
                                    href="{{ route('interface.index') }}">Accueil</a>
                            </div>
                            <div class="modal-line">
                                <i class="fa fa-list" aria-hidden="true"></i><a
                                    href="http://vintage.alloservice.ci/annonces/categories">Toutes Les Catégories</a>
                            </div>
                            <div class="modal-line">
                                <i class="fa fa-bullhorn" aria-hidden="true"></i><a href="">Poster Une Annonce<a>
                            </div>

                            <div class="modal-line">
                                <i class="fa fa-plus" aria-hidden="true"></i><a
                                    href="http://vintage.alloservice.ci/annonces">Toutes les annonces</a>
                            </div>

                            <div class="modal-line">
                                <i class="fa fa-plus" aria-hidden="true"></i><a
                                    href="http://vintage.alloservice.ci/annonces/pro/1">Les Annonces VIP</a>
                            </div>

                            <div class="modal-line">
                                <i class="fa fa-plus" aria-hidden="true"></i><a
                                    href="http://vintage.alloservice.ci/annonces/communes">Annonces Par Commune</a>
                            </div>

                            <div class="modal-line">
                                <i class="fa fa-credit-card" aria-hidden="true"></i><a
                                    href="http://vintage.alloservice.ci/credits">Acheter Du Crédit</a>
                            </div>

                            <div class="modal-line">
                                <i class="fa fa-question" aria-hidden="true"></i><a
                                    href="http://vintage.alloservice.ci/credits">Aide</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- As a link -->
    <section id="slide">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('assets/img/BANNIERE.jpg') }}" class="d-block w-100"
                        alt="...">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('assets/img/BANNIERE.jpg') }}" class="d-block w-100"
                        alt="...">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('assets/img/BANNIERE.jpg') }}" class="d-block w-100"
                        alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>

    <section id="section-bottom">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-10 col-lg-10 col-sm-10 d-block text-center m-auto">
                    <a href="{{ route('interface.pub_annonce') }}"
                        class="btn btn-block btn-primary text-center w-100 my-1">
                        <h6 class="text-bottom">Poster une annonce</h6>
                    </a>
                    <a href="{{ route('interface.login') }}"
                        class="btn btn-block btn-secondary text-center w-100 my-1">
                        <h6 class="text-bottom">Accéder à mon compte</h6>
                    </a>
                    <a href="{{ route('interface.register') }}"
                        class="btn btn-block btn-secondary  text-center w-100 my-1">
                        <h6 class="text-bottom">Créer un compte</h6>
                    </a>
                    <h1 id="icon-text"><i class="fa fa-info-circle" aria-hidden="true"></i>Comment ça marche ?</h1>
                </div>
            </div>
        </div>
    </section>
    
    <!--section product--->
    <section id="card w-100">
        <div class="container">
            <div class="row">
                <h5 class="title-annonce text-center">Les annonces en cours...</h5>
                <div class="col-lg-12 col-12 col-md-12 m-auto">
                    <div class="card card-item mb-3">
                        <table width="100%">
                            <tbody width="100%">
                                <tr width="100%">
                                    <td class="media-col width-25">
                                        <div class="card-media">
                                            <img src="https://plus.unsplash.com/premium_photo-1661378738488-374f27792883?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=831&q=80"
                                                class="img-fluid rounded-start" alt="...">
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
                                            <img src="https://plus.unsplash.com/premium_photo-1661378738488-374f27792883?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=831&q=80"
                                                class="img-fluid rounded-start" alt="...">
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
                                            <img src="https://plus.unsplash.com/premium_photo-1661378738488-374f27792883?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=831&q=80"
                                                class="img-fluid rounded-start" alt="...">
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
                                            <img src="https://plus.unsplash.com/premium_photo-1661378738488-374f27792883?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=831&q=80"
                                                class="img-fluid rounded-start" alt="...">
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
                                            <img src="https://plus.unsplash.com/premium_photo-1661378738488-374f27792883?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=831&q=80"
                                                class="img-fluid rounded-start" alt="...">
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
                                            <img src="https://plus.unsplash.com/premium_photo-1661378738488-374f27792883?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=831&q=80"
                                                class="img-fluid rounded-start" alt="...">
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
                                            <img src="https://plus.unsplash.com/premium_photo-1661378738488-374f27792883?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=831&q=80"
                                                class="img-fluid rounded-start" alt="...">
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
                                            <img src="https://plus.unsplash.com/premium_photo-1661378738488-374f27792883?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=831&q=80"
                                                class="img-fluid rounded-start" alt="...">
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
                                            <img src="https://plus.unsplash.com/premium_photo-1661378738488-374f27792883?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=831&q=80"
                                                class="img-fluid rounded-start" alt="...">
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
                                            <img src="https://plus.unsplash.com/premium_photo-1661378738488-374f27792883?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=831&q=80"
                                                class="img-fluid rounded-start" alt="...">
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
                                            <img src="https://plus.unsplash.com/premium_photo-1661378738488-374f27792883?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=831&q=80"
                                                class="img-fluid rounded-start" alt="...">
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
                                            <img src="https://plus.unsplash.com/premium_photo-1661964193692-061c64679d41?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=871&q=80"
                                                class="img-fluid rounded-start" alt="...">
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
                                            <img src="https://images.unsplash.com/photo-1661961110372-8a7682543120?ixlib=rb-4.0.3&ixid=MnwxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80"
                                                class="img-fluid rounded-start" alt="...">
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
                                            <img src="https://images.unsplash.com/photo-1661961110218-35af7210f803?ixlib=rb-4.0.3&ixid=MnwxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80"
                                                class="img-fluid rounded-start" alt="...">
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
                                            <img src="https://images.unsplash.com/photo-1661961110218-35af7210f803?ixlib=rb-4.0.3&ixid=MnwxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80"
                                                class="img-fluid rounded-start" alt="...">
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

                    <div class="view-plus">
                        <a class="btn btn-lg btn-success" href="{{ route('annonce-product') }}" role="button">Voir toutes les annonces »</a>
                    </div>

                </div>
            </div>
        </div>
    </section><br><br> <hr>

    <!-- Bottom Navbar -->
    <section>
        <!-- Bottom Navbar -->
        <nav class="navbar py-15 navbar-dark  navbar-expand fixed-bottom">
            <ul class="navbar-nav nav-justified w-100">
                <li class="nav-item">
                    <a href="#" class="nav-link text-center">
                        <i class="fa fa-credit-card" aria-hidden="true"></i>
                        <span class="small d-block">Acheter du crédit</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link text-center">
                        <i class="fa fa-list-alt" aria-hidden="true"></i>
                        <span class="small d-block">Toutes les catégories</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link text-center">
                        <i class="fa fa-bullhorn" aria-hidden="true"></i>
                        <span class="small d-block">Publier une annonce</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link text-center">
                        <i class="fa fa-question" aria-hidden="true"></i>
                        <span class="small d-block">Comment ça marche?</span>
                    </a>
                </li>
            </ul>
        </nav>

    </section>
    <!-- end section product--->
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
</script>

</html>