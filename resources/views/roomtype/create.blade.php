@extends('base')
@section('contentheader')
<li class="nav-item d-none d-sm-inline-block">
    <a href="/home" class="nav-link">Home</a>
</li>
<li class="nav-item d-none d-sm-inline-block">
    <a href="/Contact" class="nav-link">Contact</a>
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
            <h1>Roomtypes</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/home">Home</a></li>
              <li class="breadcrumb-item active">Add RoomType</li>
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
                <h3 class="card-title">Add RoomType</h3>
                <h3><a href="{{url('/home/roomtype')}}" class="float-right btn btn-success btn-sm">View All</a></h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                @if(Session::has('success'))
                <p class="alert alert-success">{{session('success')}}</p>
                @endif
                <form method="post" action="{{url('/home/roomtype')}}">
                    @csrf
                    <table id="example1" class="table table-bordered table-hover">
                        <tr>
                            <th>Title</th>
                            <td><input name="title" type="text" class ="form-control" /></td>
                        </tr>
                        <tr>
                            <th>Price</th>
                            <td><input name="price" type="number" class ="form-control" /></td>
                        </tr>
                        <tr>
                            <th>Detail</th>
                            <td><textarea name="detail" class ="form-control"></textarea></td>
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