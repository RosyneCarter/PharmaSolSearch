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
     <div class="container">
         <a class="navbar-brand" href="#!">PharMaSol</a>
         <div>
            <a class="navbar-brand" href="#signup">A propos</a>
            <a class="navbar-brand" href="#signup">Contact</a>
         </div>
     </div>
 </nav>
  <header class="masthead">
    <!-- Image Showcases-->
    <div align="center" id="brand-image">
        <img src="dist/img/logoA.png" class="img-circle" style="opacity: .8">
    </div>
    <br><br>
    <div class="container position-relative">
        <div class="row justify-content-center">
            <div class="col-xl-6">
                <div class="text-center text-white">
                    <!-- Page heading-->
                    <!-- Signup form-->
                    <form action="{{ route('result') }}" method="POST">
                        @csrf
                        <div class="input-group input-group-lg">
                            <input class="form-control" name="name" type="text" placeholder="Effectuez la recherche d'un produit" aria-label="Enter your email..." aria-describedby="button-submit" />
                            <button class="btn btn-primary" id="button-submit" type="submit">Search</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Footer-->
<footer class="footer bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 h-900 text-center text-lg-start my-auto">
                <footer class="main-footer" align="center">
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