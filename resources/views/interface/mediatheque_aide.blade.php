@extends('layouts.base')
@section('content')

<section>
    <div class="container">
        <h5 class="title justify-content-center pt-1 ls-normal mb-4">Comment ça marche ?</h5>
        
        <div class="row">
            <div class="col-lg-4 col-md-6 mb-2">
                <div class="card card-mediathek-aide">
                    <iframe src="https://www.youtube.com/embed/pWahNIMRxR0" frameborder="0"
                        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                    <div class="card-body mediathek-video">
                        <p class="card-text">Rencontre avec le président de la repubulique de la Côte d'Ivoire</p>
                        {{-- <a href="#" class="btn btn-primary">Go somewhere</a> --}}
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-5">       
                <div class="card card-mediathek-aide">
                    <iframe src="https://www.youtube.com/embed/pWahNIMRxR0" frameborder="0"
                        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                    <div class="card-body mediathek-video">
                        <p class="card-text">Rencontre avec le président de la repubulique de la Côte d'Ivoire</p>
                        {{-- <a href="#" class="btn btn-primary">Go somewhere</a> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection