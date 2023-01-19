<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Vintage Ci</title>
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
        <script src="https://unpkg.com/dropzone@6.0.0-beta.1/dist/dropzone-min.js"></script>
        <link href="https://unpkg.com/dropzone@6.0.0-beta.1/dist/dropzone.css" rel="stylesheet" type="text/css" />

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
                                    href="{{ route('catergorie-product')}}">Toutes Les Catégories</a>
                            </div>
                            <div class="modal-line">
                                <i class="fa fa-bullhorn" aria-hidden="true"></i><a href="">Poster Une Annonce<a>
                            </div>

                            <div class="modal-line">
                                <i class="fa fa-plus" aria-hidden="true"></i><a
                                    href="#">Toutes les annonces</a>
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
    </header><br>

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
@yield('content')

</body>
<script type="text/javascript">
    var myDropzone = new Dropzone("#kt_dropzonejs_example_1", {
     url: "https://keenthemes.com/scripts/void.php", // Set the url for your upload script location
     paramName: "file", // The name that will be used to transfer the file
     maxFiles: 10,
     maxFilesize: 10, // MB
     addRemoveLinks: true,
     accept: function(file, done) {
         if (file.name == "wow.jpg") {
             done("Naha, you don't.");
         } else {
             done();
         }
     }
 });
 </script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
</script>
</html>