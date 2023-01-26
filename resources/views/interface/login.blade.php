
@extends('layouts.base')

@section('content')
<main>
    <!--formulaire register-->
    <section class="services-page spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-6 m-auto col-sm-12">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 m-auto">
                            <fieldset class="mb-4">
                                <div class="card card-auth">
                                    <div class="card-header px-4 py-4 bg-bordeau">
                                        <i class="fa fa-user" id="user"></i>
                                        <h3 class="card-title text-white text-center text-login">authentification</h3>
                                    </div>
                                    <div class="card-body-login p-4">
                                        <form class="form-horizontal cash-form" action="" method="POST">
                                            <input type="hidden" name="_token"
                                                value="2EQ4TFuRvrfLXDrhNaSjBZSuCZqrBz8fMRnRZvBO">
                                            <div class="mb-3">
                                                <label for="user_email" class="form-label">Email : <span
                                                    class="text-red">*</span> </label>
                                                <input type="text" class="form-control" name="user_email"
                                                    id="user_email" placeholder="Votre adresse Email" required="">
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Mot de passe : <span
                                                    class="text-red">*</span></label>
                                                <div class="input-group auth-pass-inputgroup">
                                                    <input type="password" name="user_password" class="form-control"
                                                        placeholder="Votre mot de passe" aria-label="Password"
                                                        aria-describedby="password-addon" required="">
                                                </div>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="remember-check"
                                                    name="remember" autocomplete="off" value="remember">
                                                <label class="form-check-label" for="remember-check">
                                                    Se souvenir de moi
                                                </label>
                                            </div>
                                            <div class="mt-3 d-block text-center">
                                                <button class="btn primary-btn fw-bold waves-effect waves-light"
                                                    type="submit">Se connecter</button>
                                            </div>
                                            <div class="text-center bg-gray">
                                                <a href="{{ route('reset_password')}}" class="text-mutedd"><i class="fa fa-lock"
                                                        aria-hidden="true"></i>Réinitialiser mon mot de passe!</a>
                                            </div>

                                            <div class="mt-2 text-center">
                                                <a href="{{ route('interface.register') }}"
                                                    class="text-muted"><span>Pas encore inscrit?</span><h5 class="create_count">Créer un compte</h5></a>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </fieldset>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
