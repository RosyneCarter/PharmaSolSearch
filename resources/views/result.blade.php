<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PharMaSol</title>
</head>
 <!-- Favicon-->
 <link rel="icon" type="image/x-icon" href="{{asset('assets/favicon.ico')}}"/>
 <!-- Bootstrap icons-->
 <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" type="text/css" />
 <!-- Google fonts-->
 <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css" />
 <!-- Core theme CSS (includes Bootstrap)-->
 <link href="{{asset('css/styles.css')}}" rel="stylesheet"/>
</head>
<body>
 <!-- Navigation-->
 <nav class="navbar navbar-light bg-light static-top">
    <div align="center" id="brand-image">
        <img src="dist/img/logoA.png" class="img-circle" style="opacity: .8">
    </div>
 </nav>

 <section class="features-icons bg-light text-center">
    <div class="container">
        
        <div class="text text-black">
            <!-- Page heading-->
            <h4 class="mb-5">Le produit {{ $produit->Nom_Commercial }} est disponible chez </h4>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                    <div class="features-icons-icon d-flex"><i class="bi-window m-auto text-primary"></i></div>
                    <h3>Fully Responsive</h3>
                    <p class="lead mb-0">This theme will look great on any device, no matter the size!</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                    <div class="features-icons-icon d-flex"><i class="bi-layers m-auto text-primary"></i></div>
                    <h3>Bootstrap 5 Ready</h3>
                    <p class="lead mb-0">Featuring the latest build of the new Bootstrap 5 framework!</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="features-icons-item mx-auto mb-0 mb-lg-3">
                    <div class="features-icons-icon d-flex"><i class="bi-terminal m-auto text-primary"></i></div>
                    <h3>Easy to Use</h3>
                    <p class="lead mb-0">Ready to use with your own content, or customize the source files!</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Image Showcases-->
<!-- Footer-->
<footer class="footer bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 h-100 text-center text-lg-start my-auto">
                <ul class="list-inline mb-2">
                    <li class="list-inline-item"><a href="#!">A propos</a></li>
                    <li class="list-inline-item">⋅</li>
                    <li class="list-inline-item"><a href="#!">Contact</a></li>
                    <li class="list-inline-item">⋅</li>
                </ul>
                <footer class="main-footer">
                    <strong>Copyright &copy; 2020-2021 <a href=" ">ENSET/GinfoTIC</a>.</strong>
                    Tous droits reservés.
                    <div class="float-right d-none d-sm-inline-block">
                      <b>RCP</b>
                    </div>
            </div>
            <div class="col-lg-6 h-100 text-center text-lg-end my-auto">
                <ul class="list-inline mb-0">
                    <li class="list-inline-item me-4">
                        <a href="#!"><i class="bi-facebook fs-3"></i></a>
                    </li>
                    <li class="list-inline-item me-4">
                        <a href="#!"><i class="bi-twitter fs-3"></i></a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#!"><i class="bi-instagram fs-3"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>
<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
<!-- Core theme JS-->
<script src="{{asset('js/scripts.js')}}"></script>
@include('sweetalert::alert')
</body>
</html>