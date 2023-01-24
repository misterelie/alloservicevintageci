@extends('layouts.base')
@section('content')

<section class="category-section top-category bg-gray pt-10 pb-10 appear-animate fadeIn appear-animation-visible">
    <div class="container m-auto mx-auto">
        <div class="row mb-2">
            <h5 class="title justify-content-center pt-1 ls-normal mb-4">Annonces par Commune</h5>
            <div class="col-6 commune-annonce">
                <div class="card commune-card">
                    <div class="card-body">
                        <a href="{{ route('interface.commune_annonce')}}">
                            <h4 class="commune-name">
                                Abengourou ()
                            </h4>
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="col-6 commune-annonce">
                <div class="card commune-card">
                    <div class="card-body">
                        <a href="{{ route('interface.commune_annonce')}}">
                            <h4 class="commune-name">
                                Abidjan ()
                            </h4>
                        </a>
                    </div>
                </div>
            </div>
        </div> 

        <div class="row mb-2">
            <div class="col-6 commune-annonce">
                <div class="card commune-card">
                    <div class="card-body">
                        <a href="{{ route('interface.commune_annonce')}}">
                            <h4 class="commune-name">
                                Koumassi ()
                            </h4>
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="col-6 commune-annonce">
                <div class="card commune-card">
                    <div class="card-body position-relative">
                        <a href="">
                            <h4 class="commune-name">
                               Bouaké ()
                            </h4>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-6 commune-annonce">
                <div class="card commune-card">
                    <div class="card-body">
                        <a href="">
                            <h4 class="commune-name">
                                Yopougon ()
                            </h4>
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="col-6 commune-annonce">
                <div class="card commune-card">
                    <div class="card-body">
                        <a href="">
                            <h4 class="commune-name">
                                Treichville ()
                            </h4>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div><br>
</section><br><br>
@endsection