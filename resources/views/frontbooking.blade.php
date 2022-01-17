<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home Page</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{asset('Admin/plugins/fontawesome-free/css/all.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('Admin/dist/css/adminlte.min.css')}}">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

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
                    <h3 class="mb-5">Room Booking</h3>
                    <div class="card-body">
                        @if($errors->any())
                            @foreach($errors->all() as $error)
                                <p class="alert alert-danger">{{$error}}</p>
                            @endforeach
                        @endif

                        @if(Session::has('success'))
                        <p class="alert alert-success">{{session('success')}}</p>
                        @endif
                        <form method="post" enctype="multipart/form-data" action="{{url('/home/booking')}}">
                            @csrf
                            <table id="example1" class="table table-bordered table-hover">
                                
                                <tr>
                                    <th>CheckIn Date<span class="text-danger">*</span></th>
                                    <td><input name="checkin_date" type="date" class ="form-control checkin-date" /></td>
                                </tr>
                                <tr>
                                    <th>CheckOut Date<span class="text-danger">*</span></th>
                                    <td><input name="checkout_date" type="date" class ="form-control" /></td>
                                </tr>
                                <tr>
                                    <th>Available Rooms<span class="text-danger">*</span></th>
                                    <td>
                                    <select class="form-control room-list" name="room_id">
                                        
                                        <option></option>
                                    </select>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Total People<span class="text-danger">*</span></th>
                                    <td><input name="total_people" type="text" class="form-control" /></td>
                                </tr>
                                <tr>
                                    <td colspan = "2">
                                        <input type="hidden" name="customer_id" value= "{{session('data')[0]->id}}"/>
                                        <input type="hidden" name="ref" value= "front"/>
                                        <input type="submit" class="btn btn-primary" />
                                    </td>
                                </tr>
                            </table>
                        </form>
                    </div>
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

<script type="text/javascript">
  $(document).ready(function(){
    $(".checkin-date").on('blur', function(){
      var _checkindate=$(this).val();
      // Ajax
      $.ajax({
        url:"{{url('home/booking')}}/available-rooms/"+_checkindate,
        dataType:'json',
        beforeSend:function(){
          $(".room-list").html('<option>--- Loading ---</option>');
        },
        success:function(res){
          var _html='';
          $.each(res.data,function(index, row){
            _html+='<option value ="'+row.id+'">'+row.title+'</option>';
          });
          $(".room-list").html(_html);
        }
      });
    });
  });
</script>
</body>
</html>