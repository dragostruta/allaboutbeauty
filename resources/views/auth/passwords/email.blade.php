
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Landrick - Saas & Software Landing Page Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Premium Bootstrap 5 Landing Page Template" />
    <meta name="keywords" content="Saas, Software, multi-uses, HTML, Clean, Modern" />
    <meta name="author" content="Shreethemes" />
    <meta name="email" content="shreethemes@gmail.com" />
    <meta name="website" content="http://shreethemes.in" />
    <meta name="Version" content="v3.0.0" />
    <!-- favicon -->
    <link rel="shortcut icon" href="images/favicon.ico">
    <!-- Bootstrap -->
    <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Icons -->
    <link href="../css/materialdesignicons.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v3.0.6/css/line.css">
    <!-- Main Css -->
    <link href="../css/style.css" rel="stylesheet" type="text/css" id="theme-opt" />
    <link href="../css/colors/default.css" rel="stylesheet" id="color-opt">

</head>

<body>

<div class="back-to-home rounded d-none d-sm-block">
    <a href="/" class="btn btn-soft-primary mt-3" style="color: white !important;">Acasă</a>
</div>


<section class="bg-home d-flex align-items-center">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7 col-md-6">
                <div class="me-lg-5">
                    <img src="../images/user/recovery.svg" class="img-fluid d-block mx-auto" alt="">
                </div>
            </div>
            <div class="col-lg-5 col-md-6">
                <div class="card shadow rounded border-0">
                    <div class="card-body">
                        <h4 class="card-title text-center">Recuperează-ti contul</h4>

                        <form method="POST" class="login-form mt-4" action="{{ route('password.email') }}">
                            @csrf
                            <div class="row">
                                <div class="col-lg-12">
                                    <p class="text-muted">Te rugăm introdu adresa de email. Vei primi un link pentru a crea o noua parolă.</p>
                                    <div class="mb-3">
                                        <label class="form-label">Adresă de email <span class="text-danger">*</span></label>
                                        <div class="form-icon position-relative">
                                            <i data-feather="mail" class="fea icon-sm icons"></i>
                                            <input type="email" class="form-control ps-5" placeholder="Adresă de email " name="email" required="">
                                        </div>
                                    </div>
                                </div><!--end col-->
                                <div class="col-lg-12">
                                    <div class="d-grid">
                                        <button class="btn btn-primary">Trimite</button>
                                    </div>
                                </div><!--end col-->
                                <div class="mx-auto">
                                    <p class="mb-0 mt-3"><small class="text-dark me-2">Îți amintești parola ?</small> <a href="/login" class="text-dark fw-bold">Autentifică-te</a></p>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div> <!--end col-->
        </div><!--end row-->
    </div> <!--end container-->
</section><!--end section-->
<!-- Hero End -->

</body>
</html>
