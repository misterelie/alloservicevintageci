@extends('layouts.base')
@section('content')

<section class="category-section top-category bg-gray pt-10 pb-10 appear-animate fadeIn appear-animation-visible">
    <div class="container m-auto mx-auto">
        <div class="row mb-2">
            <h5 class="title justify-content-center pt-1 ls-normal mb-4">Toutes les catégories</h5>
            <div class="col-6">
                <div class="card category-card">
                    <a href="{{ route('interface.annonce_category') }} ">
                        <div class="category-image position-relative carre-card">
                            <img src="https://images.unsplash.com/photo-1517694712202-14dd9538aa97?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80"
                                class="card-img-top img-fluid rounded-start" alt="">
                        </div>
                        <div class="card-body">
                            <a href="">
                                <h4 class="category-name">
                                    Informatique
                                </h4>
                            </a>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-6">
                <div class="card category-card">
                    <a href="{{ route('interface.annonce_category') }}">
                        <div class="category-image position-relative carre-card">
                            <img src="https://images.unsplash.com/photo-1517694712202-14dd9538aa97?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80"
                                class="card-img-top img-fluid rounded-start" alt="">
                        </div>
                        <div class="card-body">
                            <a href="#">
                                <h4 class="category-name">
                                    Informatique
                                </h4>
                            </a>
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <div class="row mb-2">
            <div class="col-6">
                <div class="card category-card">
                    <a href="{{ route('interface.annonce_category') }}">
                        <div class="category-image position-relative carre-card">
                            <img src="https://images.unsplash.com/photo-1517694712202-14dd9538aa97?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80"
                                class="card-img-top img-fluid rounded-start" alt="">
                        </div>
                        <div class="card-body">
                            <a href="#">
                                <h4 class="category-name">
                                    Informatique
                                </h4>
                            </a>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-6">
                <div class="card category-card">
                    <a href="{{ route('interface.annonce_category') }}">
                        <div class="category-image position-relative carre-card">
                            <img src="{{ asset('/assets/img/watch.png') }}"
                                class="card-img-top img-fluid rounded-start" alt="">
                        </div>
                        <div class="card-body position-relative">
                            <a href="#">
                                <h4 class="category-name">
                                    Informatique
                                </h4>
                            </a>
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-6">
                <div class="card category-card">
                    <a href="{{ route('interface.annonce_category') }}">
                        <div class="category-image position-relative carre-card">
                            <img src="https://images.unsplash.com/photo-1489987707025-afc232f7ea0f?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80"
                                class="card-img-top img-fluid rounded-start" alt="">
                        </div>
                        <div class="card-body">
                            <a href="#">
                                <h4 class="category-name">
                                    vetements
                                </h4>
                            </a>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-6">
                <div class="card category-card">
                    <a href="{{ route('interface.annonce_category') }}">
                        <div class="category-image position-relative carre-card">
                            <img src="https://e7.pngegg.com/pngimages/426/393/png-clipart-watch-strap-watch-strap-watch-watch-accessory-accessories.png"
                                class="card-img-top img-fluid rounded-start" alt="">
                        </div>
                        <div class="card-body">
                            <a href="">
                                <h4 class="category-name">
                                    télephone
                                </h4>
                            </a>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div><br>
</section><br><br>
@endsection