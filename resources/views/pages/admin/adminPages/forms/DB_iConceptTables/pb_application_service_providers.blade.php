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
  <div class="content-wrapper">

<!-- Main content -->
      <section class="content">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="box box-primary">
              <div class="box-header with-border">
                <h3 class="box-title">pb_application_service_providers</h3>
              </div>
              <!-- /.box-header -->
              <!-- form start -->
              <form role="form">
                <div class="box-body">


                  <div class="form-group">
                    <label for="pb_application_service_providers_user_id">user id</label>
                    <input type="text" class="form-control" id="pb_application_service_providers_user_id" placeholder="User Id ...">
                  </div>

                  <div class="form-group">
                    <label for="pb_application_service_providers_service_id">service id</label>
                    <input type="text" class="form-control" id="pb_application_service_providers_service_id" placeholder="Service Id ...">
                  </div>


                  <div class="form-group">
                    <label for="pb_application_service_providers_status">status</label>
                    <input type="text" class="form-control" id="pb_application_service_providers_status" placeholder="Status ...">
                  </div>

                  
                  <div class="form-group">
                    <label for="pb_application_service_providers_score">score</label>
                    <input type="text" class="form-control" id="pb_application_service_providers_score" placeholder="Score ...">
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
  {{-- Main Content Here --}}


  {{-- Footer --}}
  @include('pages.admin.includes.footer')
  {{-- Control Sidebar Right --}}
  @include('pages.admin.includes.controlSidebarRight')
</div>


@include('partials._scripts')

{{-- Required Scripts for This Page --}}

</body>



@endsection
