@extends('layouts.base')

@section('content')
    <!--formulaire register-->
    <main>
        <section class="register-page spad">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 m-auto col-md-12 col-sm-12">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 m-auto">
                                <form action="" method="post" enctype="multipart/form-data">
                                    <fieldset>
                                        <div class="card card-auth">
                                            <div class="card-header px-4 py-3 bg-bordeau">
                                                <h4 class="card-title text-white">Inscrivez-vous</h4>
                                            </div>
                                            <div class="card-body p-4">
                                                <div class="row">
                                                    <div class="col-sm-6 mb-2">
                                                        <label for="user_firstname" class="form-label">Nom : <span
                                                                class="text-red">*</span> </label>
                                                        <input type="text" name="user_firstname" id="user_firstname"
                                                            class="form-control" required="">
                                                    </div>

                                                    <div class="col-sm-6 mb-2">
                                                        <label for="user_lastname" class="form-label">Prénom(s) : <span
                                                                class="text-red">*</span> </label>
                                                        <input type="text" name="user_lastname" id="user_lastname"
                                                            class="form-control" required="">
                                                    </div>
                                                </div>

                                                <div class="form-group mb-2 mt-2">
                                                    <label for="email" class="form-label">Adresse E-mail : </label>
                                                    <input type="email" name="user_email" id="user_email"
                                                        class="form-control ">
                                                </div>

                                                <div class="row mt-2">
                                                    <div class="col-sm-6 mb-2 ">
                                                        <label for="user_phone" class="form-label">Téléphone : <span
                                                                class="text-red">*</span>
                                                        </label>
                                                        <input type="text" name="user_phone" id="user_phone"
                                                            class="form-control "
                                                            placeholder="Votre numéro de téléphone">
                                                    </div>
                                                    <div class="col-sm-6 mb-2 ">
                                                        <label for="user_whatsapp" class="form-label">Contact
                                                            Whatsapp(facultatif) :
                                                        </label>
                                                        <input type="text" name="user_whatsapp" id="user_whatsapp"
                                                            class="form-control ">
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-sm-6 mb-2">
                                                        <label for="password" class="form-label">Mot de passe : <span
                                                                class="text-red">*</span> </label>
                                                        <input type="password" name="password" id="password"
                                                            class="form-control" required="">
                                                    </div>

                                                    <div class="col-sm-6 mb-2">
                                                        <label for="password_confirmation" class="form-label">Confirmez
                                                            le mot de passe : <span class="text-red">*</span> </label>
                                                        <input type="password" name="password_confirmation"
                                                            id="password_confirmation" class="form-control" required="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>

                                    <fieldset class="mb-4 lasfieldt-">
                                        <div class="card card-auth">
                                            <div class="card-header px-4 py-3 bg-bordeau">
                                                <h4 class="card-title text-white">conditions générales d'utilisation
                                                </h4>
                                            </div>
                                            <div class="card-body p-4">
                                                <div class="from-group mb-2">
                                                    <label for="genre" class="form-label">
                                                        <span>
                                                            <small>
                                                                J'accepte les conditions générales d'utilisation de Allô
                                                                Service Vintage en cliquant sur: S'inscrire.
                                                            </small>
                                                        </span>
                                                    </label>
                                                </div>
                                                <div class="form-group form-check">
                                                    <input type="checkbox" class="form-check-input" id="OUI" value="OUI"
                                                        name="adhesion" required>
                                                    <label class="form-check-label" for="OUI">J'accepte <span
                                                            class="text-red">*</span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="form-group d-block text-right">
                                                <button type="submit" class="btn submit-btn">s'inscrire</button>
                                            </div>
                                        </div>
                                       
                                    </fieldset>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
