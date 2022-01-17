@extends('base')
@section('contentheader')
<li class="nav-item d-none d-sm-inline-block">
    <a href="/home" class="nav-link">Home</a>
</li>
<li class="nav-item d-none d-sm-inline-block">
    <a href="/contact" class="nav-link">Contact</a>
</li>
@endsection
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Customers</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/home">Home</a></li>
              <li class="breadcrumb-item active">Add Customer</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Add Customer</h3>
                <h3><a href="{{url('/home/customer')}}" class="float-right btn btn-success btn-sm">View All</a></h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                @if($errors->any())
                  @foreach($errors->all() as $error)
                  <p class="alert alert-danger">{{$error}}</p>
                  @endforeach
                @endif

                @if(Session::has('success'))
                <p class="alert alert-success">{{session('success')}}</p>
                @endif
                <form method="post" enctype="multipart/form-data" action="{{url('/home/customer')}}">
                    @csrf
                    <table id="example1" class="table table-bordered table-hover">
                        <tr>
                            <th>Full Name<span class="text-danger">*</span></th>
                            <td><input name="full_name" type="text" class ="form-control" /></td>
                        </tr>
                        <tr>
                            <th>Email<span class="text-danger">*</span></th>
                            <td><input name="email" type="email" class ="form-control" /></td>
                        </tr>
                        <tr>
                            <th>Password<span class="text-danger">*</span></th>
                            <td><input name="password" type="password" class ="form-control" /></td>
                        </tr>
                        <tr>
                            <th>Address</th>
                            <td><textarea name="address" class ="form-control"></textarea></td>
                        </tr>
                        <tr>
                            <td colspan = "2">
                                <input type="submit" class="btn btn-primary" />
                            </td>
                        </tr>
                    </table>
                </form>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


@endsection