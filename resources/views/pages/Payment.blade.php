<!DOCTYPE html>
<html lang="en">

<head>
    <title>Pembayaran</title>
    <!-- Required meta tags always come first -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="generator" content="Checkout - One Step Checkout , Responsive Bootstrap 4 template , bootstrap 4 starter template, bootstrap4 template, checkout template">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" lang="en" content="Checkout Bootstrap 4 pricing template , Responsive and Modern HTML5 Template made from bootstrap 4.">
    <meta name="keywords" lang="en" content="pricing template, bootstrap 4 template,bootstrap 4 checkout template, responsive bootstrap 4 template, bootstrap 4, bootstraping, bootstrap4, oribitthemes">
    <meta name="robots" content="index, follow">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
    <meta name="description" content="">
    <!--Font Awesome-->
    <link rel="stylesheet" href="{{ asset('app-assets/dist/font-awesome/css/font-awesome.min.css') }}" />
    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css1/main.min.css') }}">
    <!--[if IE]>
      <link href="https://cdn.jsdelivr.net/gh/coliff/bootstrap-ie8/css/bootstrap-ie9.min.css" rel="stylesheet">
      <script src="https://cdn.jsdelivr.net/g/html5shiv@3.7.3"></script>
    <![endif]-->
    <!--[if lt IE 9]>
      <link href="https://cdn.jsdelivr.net/gh/coliff/bootstrap-ie8/css/bootstrap-ie8.min.css" rel="stylesheet">
    <![endif]-->
</head>

<body>
    <div class="loader"></div>
    <header id="header">
        <nav class="navbar navbar-expand-md navbar-light bg-light border-bottom">
            <div class="container">
                <a class="navbar-brand" href="#" id="header-logo">
                    <img src="" class="img-fluid" width="200"
                        alt="Kemang">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto text-center">
                        <li class="nav-item active">
                            <a class="nav-link text-dark" href="{{ asset('/') }}">Home
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>


                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main id="main" role="main">
        <section id="checkout-container">
            <div class="container">
                <div class="py-5 text-center">
                    <i class="fa fa-credit-card fa-3x text-primary"></i>
                    <h2 class="my-1">Pembayaran</h2>
                    <p class="lead">Cepat, Mudah, Aman dan Nyaman</p>
                </div>
                <div class="row py-1">
                    <div class="col-md-4 order-md-2 mb-4">
                        <h4 class="d-flex justify-content-between align-items-center mb-3">
                            <span class="text-muted">Belanjaan Kamu</span>
                            <span class="badge badge-secondary badge-pill">1</span>
                        </h4>
                        <ul class="list-group mb-1">
                            <li class="list-group-item d-flex justify-content-between lh-condensed">
                                <div>
                                    <h6 class="my-0">Nama Produk</h6>
                                    <small class="text-muted">Risiris</small>
                                </div>
                                <span class="text-muted">Rp. 50.000</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between bg-light">
                                <div class="text-success">
                                    <h6 class="my-0">Promo code</h6>
                                    <small>Smart</small>
                                </div>
                                <span class="text-success">Rp. -10.000</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between">
                                <span>Total (Rupiah)</span>
                                <strong>Rp. 40.000</strong>
                            </li>
                        </ul>
                        <form class="card p-2">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Kode Promo">
                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-secondary">Pakai</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-8 order-md-1">
                        <h4 class="mb-3">Isi form dibawah ini</h4>
                        <form class="needs-validation" novalidate>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="firstName">Nama Depan</label>
                                    <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
                                    <div class="invalid-feedback">
                                        Masukkan nama depan anda.
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="lastName">Nama Belakang</label>
                                    <input type="text" class="form-control" id="lastName" placeholder="" value="" required>
                                    <div class="invalid-feedback">
                                        Masukkan nama belakang anda.
                                    </div>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="email">Email

                                </label>
                                <input type="email" class="form-control" id="email" placeholder="you@example.com">
                                <div class="invalid-feedback">
                                    Masukan Email untuk mendapatkan update.
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="address">Alamat</label>
                                <input type="text" class="form-control" id="address" placeholder="1234 Main St" required>
                                <div class="invalid-feedback">
                                    Tolong Masukan Alamat Anda.
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="address">Nomor Hp atau WA</label>
                                <input type="text" class="form-control" id="address" placeholder="Masukkan Nomor Handphone atau Whastapp" required>
                                <div class="invalid-feedback">
                                    Masukan Nomor handphone !
                                </div>
                            </div>
                            <hr class="mb-4">
                            <a
                            href="{{ url('/finish') }}">
                            <button type="button" class="btn btn-primary btn-lg btn-block">Lanjut</button>
                          </a>

                        </form>
                        <br>
                        <br>
                    </div>
                </div>
            </div>
            <a href="#" class="btn btn-primary scrollUp">
                <i class="fa fa-arrow-circle-o-up"></i>
            </a>
        </section>
    </main>
    <!-- Footer -->
    <footer id="footer">
        <p class="copyright">
            <i class="fa fa-heart"></i>
            <a target="_blank" title="Orbit Themes" href="http://www.orbitthemes.com"></a> &copy;
            <span id="currentYear"></span> All Rights Reserved.
        </p>

    </footer>
    <!-- jQuery first, then Bootstrap JS. -->
    <script src="{{ asset('app-assets/dist/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('app-assets/dist/popper/popper.min.js') }}" integrity=""></script>
    <script src="{{ asset('app-assets/dist/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('app-assets/js1/main.min.js') }}"></script>
</body>

</html>
