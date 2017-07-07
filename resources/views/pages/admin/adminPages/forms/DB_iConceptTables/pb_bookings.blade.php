@extends('layouts.master')

@section('title' , 'Admin')

@section('content')

{{-- Required Styles for This Page --}}



<body class="hold-transition skin-blue sidebar-mini">

<link href="{!! asset('css/AdminLte.css') !!}" media="all" rel="stylesheet" type="text/css" />
 
<div class="wrapper">
  {{-- header navigation --}}
  @include('pages.admin.includes.header')
  {{-- sidebar --}}
  @include('pages.admin.includes.sidebarLeft')

  {{-- Main Content Here --}}
<div class="content-wrapper">
<section class="content">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="box box-primary">
              <div class="box-header with-border">
                <h3 class="box-title">pb_bookings</h3>
              </div>
              <!-- /.box-header -->
              <!-- form start -->
              <form role="form">
                <div class="box-body">


                  <div class="form-group">
                    <label for="pb_bookings_user_id">user id</label>
                    <input type="text" class="form-control" id="pb_bookings_user_id" placeholder="Booking Number ...">
                  </div>

                  <div class="form-group">
                    <label for="pb_bookings_pp_id">pp Id</label>
                    <input type="text" class="form-control" id="pb_bookings_pp_id" placeholder="PP Id ...">
                  </div>


                  <div class="form-group">
                    <label for="pb_bookings_ss_id">ss Id</label>
                    <input type="text" class="form-control" id="pb_bookings_ss_id" placeholder="SS Id ...">
                  </div>

                  <div class="form-group">
                    <label for="pb_bookings_service_id">service Id</label>
                    <input type="text" class="form-control" id="pb_bookings_service_id" placeholder="Service Id ...">
                  </div>


                 <div class="form-group">
                    <label for="pb_bookings_service_name">service Name</label>
                    <input type="text" class="form-control" id="pb_bookings_service_name" placeholder="Service Name ...">
                  </div>

                 <div class="form-group">
                    <label for="pb_bookings_service_availed">service Availed</label>
                    <input type="text" class="form-control" id="pb_bookings_service_availed" placeholder="Service Availed ...">
                  </div>

                  <div class="form-group">
                    <label for="pb_bookings_date_start">date start</label>
                    <input type="text" class="form-control" id="pb_bookings_date_start" placeholder="Date Start ...">
                  </div>


                  <div class="form-group">
                    <label for="pb_bookings_date_end">date end</label>
                    <input type="text" class="form-control" id="pb_bookings_date_end" placeholder="Date End ...">
                  </div>

                  <div class="form-group">
                    <label for="pb_bookings_check_in">check in</label>
                    <input type="text" class="form-control" id="pb_bookings_check_in" placeholder="Check In ...">
                  </div>

                  <div class="form-group">
                    <label for="pb_bookings_check_out">Checkout</label>
                    <input type="text" class="form-control" id="pb_bookings_check_out" placeholder="Checkout ...">
                  </div>

                  <div class="form-group">
                    <label for="pb_bookings_amount">Amount</label>
                    <input type="text" class="form-control" id="pb_bookings_amount" placeholder="Amount ...">
                  </div>

                  <div class="form-group">
                    <label for="pb_bookings_status">Status</label>
                    <input type="text" class="form-control" id="pb_bookings_status" placeholder="Status ...">
                  </div>
                  
                  <div class="form-group">
                    <label for="pb_bookings_instructions">score</label>
                    <input type="text" class="form-control" id="pb_bookings_instructions" placeholder="instruction ...">
                  </div>

                <div class="box-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.box -->

        </div>
        <!-- /.row -->
      </section>
</div>
      <!-- Main content -->
      
      <!-- /.content -->

  {{-- Footer --}}
  @include('pages.admin.includes.footer')
  {{-- Control Sidebar Right --}}
  @include('pages.admin.includes.controlSidebarRight')
</div>


@include('partials._scripts')

{{-- Required Scripts for This Page --}}

</body>



@endsection
