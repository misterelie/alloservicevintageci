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
    <!--formulaire register-->
    <main>
        <section class="services-page spad">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 m-auto col-md-5 col-sm-12">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 m-auto">
                               <fieldset class="mb-4">
                                <div class="card ">
                                    <div class="card-header px-4 py-4 bg-bordeau">
                                        <h4 class="card-title text-white text-center">authentification</h4>
                                    </div>
                                    <div class="card-body p-4">
                                        <form class="mb-5 form-horizontal" action="" method="POST" autocomplete="off">
                                            <input type="hidden" name="_token" value="2EQ4TFuRvrfLXDrhNaSjBZSuCZqrBz8fMRnRZvBO">
                                            <div class="mb-3">
                                                <label for="user_email" class="form-label">Email : </label>
                                                <input type="text" class="form-control" name="user_email" id="user_email" placeholder="Votre adresse Email" required="">
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Mot de passe :</label>
                                                <div class="input-group auth-pass-inputgroup">
                                                    <input type="password" name="user_password" class="form-control" placeholder="Mot de passe" aria-label="Password" aria-describedby="password-addon" required="">
                                                </div>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="remember-check" name="remember" autocomplete="off" value="remember">
                                                <label class="form-check-label" for="remember-check">
                                                   Se souvenir de moi
                                                </label>
                                            </div>
                                            <div class="mt-3 d-block text-center">
                                                <button class="btn primary-btn fw-bold waves-effect waves-light" type="submit">Se connecter</button>
                                            </div>
                                            <div class="mt-4 text-center">
                                                <a href="#!" class="text-muted"><i class="fa fa-lock" aria-hidden="true"></i>Réinitialiser mon mot de passe!</a>
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

</body>
</html>
