@extends('layouts.base')
@section('content')
<main>
    <section class="services-page spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 m-auto col-md-12 col-sm-12">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 m-auto">
                            <form action="" method="post" id="image-upload" enctype="multipart/form-data">
                                <fieldset class="mb-4">
                                    <div class="card card-auth">
                                        <div class="card-header px-4 py-3 bg-bordeau">
                                            <h4 class="card-title text-white">Publier une annonce</h4>
                                        </div>
                                        <div class="card-body p-4">
                                            <div class="row mb-2">
                                                <div class="col-sm-6   mb-2">
                                                    <label for="lieu_service" class="form-label">Titre de l'annonce
                                                        <span class="text-red">*</span>
                                                        :</label>
                                                    <input type="text" name="titre_annonce" id="titre_annonce"
                                                        class="form-control" required="Veuillez remplir ce champ!">
                                                </div>

                                                <div class="col-sm-6  mb-2">
                                                    <label for="categorie_annonce" class="form-label">Catégorie de
                                                        l'annonce
                                                        : <span class="text-red">*</span> </label>
                                                    <select name="categorie_annonce" id="categorie_annonce"
                                                        class="form-control categorie_annonce mb-2" required>
                                                        <option value="">--Catégories--</option>
                                                        <option value="Informatique">Informatique
                                                        </option>
                                                        <option value="mode-homme">Mode Homme
                                                        </option>
                                                        <option value="Produits bébé">Produits pour bébé
                                                        </option>
                                                        <option value="mode-femme">Mode Femme
                                                        </option>
                                                        <option value="beaute-hygiene-sante">Beauté & Hygiène
                                                        </option>
                                                        <option value="telephone-tablette">Téléphones & Tablettes
                                                        </option>
                                                        <option value="maison-cuisine-jardin">Maison et bureau
                                                        </option>
                                                    </select>
                                                </div>

                                                <div class="col-sm-6  mb-2">
                                                    <label for="commune_annonce" class="form-label">Commune
                                                        : <span class="text-red">*</span> </label>
                                                    <select name="commune_annonce" id="commune_annonce"
                                                        class="form-control commune_annonce mb-2" required>
                                                        <option value="">--Commune--</option>
                                                        <option value="cocody">Cocody
                                                        </option>
                                                        <option value="marcory">Marcory
                                                        </option>
                                                        <option value="abobo">Abobo
                                                        </option>
                                                        <option value="adjame">Adjamé
                                                        </option>
                                                    </select>
                                                </div>

                                                <div class="col-sm-6 mb-2">
                                                    <label for="price_annonce" class="form-label">Prix de l'annonce
                                                        : <span class="text-red">*</span></label>
                                                    <input type="number" name="price_annonce" id="price_annonce"
                                                        class="form-control" required>
                                                </div>

                                                <!--end::Input group-->
                                                <div class="form-group mb-2 mt-2">
                                                    <!--begin::Input group-->
                                                    <div class="form-group row">
                                                        <!--begin::Label-->
                                                        <label class="col-lg-2 col-form-label text-lg-right">Ajouter
                                                            la Photo de l'annonce: <span class="text-red">*</span>
                                                        </label>
                                                        <!--begin::Input group-->
                                                        <div class="fv-row">
                                                            <!--begin::Dropzone-->
                                                            <div class="dropzone" id="kt_dropzonejs_example_1">
                                                                <!--begin::Message-->
                                                                <div class="dz-message needsclick">
                                                                    <!--begin::Icon-->
                                                                    <i
                                                                        class="fa fa-camera earmark-arrow-up text-primary fs-3x"></i>
                                                                    <!--end::Icon-->

                                                                    <!--begin::Info-->
                                                                    <div class="ms-4">
                                                                        <h3 class="fs-5 fw-bold text-gray-900 mb-1">
                                                                            Déposez vos fichiers ici ou cliquez pour les
                                                                            télécharger.</h3>
                                                                        <span
                                                                            class="fs-7 fw-semibold text-gray-400">Télécharger
                                                                            jusqu'à 10 fichiers</span>
                                                                    </div>
                                                                    <!--end::Info-->
                                                                </div>
                                                            </div>
                                                            <!--end::Dropzone-->
                                                        </div>
                                                        <!--end::Input group-->
                                                    </div>
                                                </div>
                                                <div class="form-group mb-2">
                                                    <label for="details_annonce" class="form-label">Détails de
                                                        l'annonce :
                                                        <span class="text-red">*</span> </label>
                                                    <textarea rows="3" name="details_annonce" id="details_annonce"
                                                        class="form-control" required></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group d-block text-right">
                                            <button type="submit" class="btn submit-btn">Publier l'annonce</button>
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

@yield('js')
@endsection