<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hotel | Register</title>

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
            <div class="container mt-5">
                <div class="row mb-4">
                    <div class="col-12">
                        <h3 class="mb-5">Register</h3>

                        @if(Session::has('success'))
                           <p class="alert alert-success">{{session('success')}}</p>
                        @endif

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form action="{{url('home/customer')}}" method="POST">
                            @method("POST")
                            @csrf
                            <table class="table table-bordered">
                                <tr>
                                    <th>Full Name<span class="text-danger">*</span></th>
                                    <td><input required type="text" class="form-control" name="full_name"></td>
                                </tr>
                                <tr>
                                    <th>Email<span class="text-danger">*</span</th>
                                    <td><input required type="email" class="form-control" name="email"></td>
                                </tr>
                                <tr>
                                    <th>Password<span class="text-danger">*</span</th>
                                    <td><input required type="password" class="form-control" name="password"></td>
                                </tr>
                                <tr>
                                    <th>Address<span class="text-danger">*</span</th>
                                    <td><input type="text" class="form-control" name="address"></td>
                                </tr>
                                <tr>
                                    <input type="hidden" name="ref" value="front" />
                                    <td colspan="2"><input type="submit" class="btn btn-primary"></td>
                                </tr>
                            </table>
                        </form>
                            <h></h>    
                            <p class="text-center">Sudah Mempunyai Akun? Kembali ke Halaman <a href="/login">Login</a>!</p>
                    </div>
                </div>
            </div>
        </div>
<!--    <footer class="main-footer" width="100%">

        <div class="float-right d-none d-sm-inline">
            Anything you want
        </div>

        <div class = "text-center">
        <strong>&copy; 2022 <a href="https://medium.com/@bagusrama019">Guddd.</a></strong> All rights reserved.
        </div>
    </footer>-->

<!-- jQuery -->
<script src="{{asset('Admin/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('Admin/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('Admin/dist/js/adminlte.min.js')}}"></script>
<!-- jQuery -->
<script src="{{asset('Admin/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('Admin/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('Admin/dist/js/adminlte.min.js')}}"></script>

</body>
</html>