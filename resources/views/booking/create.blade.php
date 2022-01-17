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
            <h1>Bookings</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/home">Home</a></li>
              <li class="breadcrumb-item active">Add Bookings</li>
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
                <h3 class="card-title">Add Booking</h3>
                <h3><a href="{{url('/home/booking')}}" class="float-right btn btn-success btn-sm">View All</a></h3>
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
                <form method="post" enctype="multipart/form-data" action="{{url('/home/booking')}}">
                    @csrf
                    <table id="example1" class="table table-bordered table-hover">
                        <tr>
                            <th>Select Customers<span class="text-danger">*</span></th>
                            <td>
                              <select class="form-control" name="customer_id" >
                                <option>--- Select Customer ---</option>
                                @foreach($data as $customer)
                                  <option value="{{$customer->id}}">{{$customer->full_name}}</option>
                                @endforeach
                                <option></option>
                              </select>
                            </td>
                        </tr>
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

@section('scripts')
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
@endsection

@endsection