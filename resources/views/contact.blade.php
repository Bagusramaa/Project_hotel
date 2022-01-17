<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{asset('Admin/plugins/fontawesome-free/css/all.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('Admin/dist/css/adminlte.min.css')}}">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Hotel</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    @if(Session::has('customerlogin'))
                    <li class="nav-item d-none d-sm-inline-block">
                        <a href="/logout" class="nav-link">Logout</a>        
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-sm btn-primary" aria-current="page" href="{{url('booking')}}">Booking</a>
                    </li>
                    @else
                    <li class="nav-item d-none d-sm-inline-block">
                        <a href="/login" class="nav-link">Login</a>
                    </li>
                    <li class="nav-item d-none d-sm-inline-block">
                        <a href="/register" class="nav-link">Register</a>
                    </li>
                    @endif
                    <li class="nav-item">
                    <a class="nav-link" href="/contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="card card-primary card-outline">
                        <div class="card-header">
                            <h5 class="m-0">Contact </h5>
                        </div>
                    </div>
                
                    <div class="card card-primary card-outline">
                        <div class="card-header">
                            <h5 class="m-0">Bagus Ramadhan Nanda</h5>
                        </div>
                        <div class="card-body">
                            <h6 class="card-title">Group 3</h6>

                            <p class="card-text">
                                Address : Tangerang 
                            </p>
                            <p class="card-text">
                                Number  : 082277991133
                            </p>
                        </div>
                    </div>

                    <div class="card card-primary card-outline">
                        <div class="card-header">
                            <h5 class="m-0">Thoriq </h5>
                        </div>
                        <div class="card-body">
                            <h6 class="card-title">Group 3</h6>

                            <p class="card-text">
                                Address : Jakarta
                            </p>
                        </div>
                    </div>
                </div>
            
            <!-- /.col-md-6 -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    </div>

    <!-- jQuery -->
    <script src="{{asset('Admin/plugins/jquery/jquery.min.js')}}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{asset('Admin/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <!-- AdminLTE App -->
<script src="{{asset('Admin/dist/js/adminlte.min.js')}}"></script>
</body>
</html>