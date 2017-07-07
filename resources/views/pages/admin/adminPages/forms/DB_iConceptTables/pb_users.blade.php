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
  
    <!-- Main content -->
      <section class="content">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="box box-primary">
              <div class="box-header with-border">
                <h3 class="box-title"> pb_users</h3>
              </div>
              <!-- /.box-header -->
              <!-- form start -->
              <form role="form">
                <div class="box-body">


                  <div class="form-group">
                    <label for=" pb_users_name">name</label>
                    <input type="text" class="form-control" id=" pb_users_name" placeholder="name...">
                  </div>
                 
                  <div class="form-group">
                    <label for=" pb_users_firstname">firstname</label>
                    <input type="text" class="form-control" id=" pb_users_firstname" placeholder="first name ...">
                  </div>

                  
                  <div class="form-group">
                    <label for=" pb_users_username">username</label>
                    <input type="text" class="form-control" id=" pb_users_username" placeholder="username ...">
                  </div>

                  
                  <div class="form-group">
                    <label for=" pb_users_email">email</label>
                    <input type="text" class="form-control" id=" pb_users_email" placeholder="email ...">
                  </div>

                  
                  <div class="form-group">
                    <label for=" pb_users_password">password</label>
                    <input type="password" class="form-control" id=" pb_users_password" placeholder="password ...">
                  </div>


                  
                  <div class="form-group">
                    <label for=" pb_users_birthdate">birthdate</label>
                    <input type="text" class="form-control" id=" pb_users_birthdate" placeholder="birthdate ...">
                  </div>


                  
                  <div class="form-group">
                    <label for=" pb_users_birthrange">birthrange</label>
                    <input type="text" class="form-control" id=" pb_users_birthrange" placeholder="birthrange ...">
                  </div>


                  
                  <div class="form-group">
                    <label for=" pb_users_birthmonth">birthmonth</label>
                    <input type="text" class="form-control" id=" pb_users_birthmonth" placeholder="birthmonth ...">
                  </div>

                  
                  <div class="form-group">
                    <label for=" pb_users_country">country</label>
                    <input type="text" class="form-control" id=" pb_users_country" placeholder="country ...">
                  </div>

                  
                  <div class="form-group">
                    <label for=" pb_users_county">county</label>
                    <input type="text" class="form-control" id=" pb_users_county" placeholder="county ...">
                  </div>

                  
                  <div class="form-group">
                    <label for=" pb_users_suburb">suburb</label>
                    <input type="text" class="form-control" id=" pb_users_suburb" placeholder="suburb ...">
                  </div>

                  
                  <div class="form-group">
                    <label for=" pb_users_address">address</label>
                    <input type="text" class="form-control" id=" pb_users_address" placeholder="address ...">
                  </div>

                  
                  <div class="form-group">
                    <label for=" pb_users_street_name">street name</label>
                    <input type="text" class="form-control" id=" pb_users_street_name" placeholder="street name ...">
                  </div>

                  
                  <div class="form-group">
                    <label for=" pb_users_place_id">place id</label>
                    <input type="text" class="form-control" id=" pb_users_place_id" placeholder="place id ...">
                  </div>


                  <div class="form-group">
                    <label for=" pb_users_google">google</label>
                    <input type="text" class="form-control" id=" pb_users_google" placeholder="google  ...">
                  </div>
                  
                  <div class="form-group">
                    <label for=" pb_users_facebook">facebook</label>
                    <input type="text" class="form-control" id=" pb_users_facebook" placeholder="facebook ...">
                  </div>


                  <div class="form-group">
                    <label for=" pb_users_status">status</label>
                    <input type="text" class="form-control" id=" pb_users_status" placeholder="status ...">
                  </div>


                  <div class="form-group">
                    <label for=" pb_users_lastactivity">lastactivity</label>
                    <input type="text" class="form-control" id=" pb_users_lastactivity" placeholder="last activity ...">
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
      <!-- /.content -->
  </div>


  {{-- Footer --}}
  @include('pages.admin.includes.footer')
  {{-- Control Sidebar Right --}}
  @include('pages.admin.includes.controlSidebarRight')
</div>


@include('partials._scripts')

{{-- Required Scripts for This Page --}}

</body>



@endsection
