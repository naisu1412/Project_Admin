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
                <h3 class="box-title"> pb_task_users</h3>
              </div>
              <!-- /.box-header -->
              <!-- form start -->
              <form role="form">
                <div class="box-body">


                  <div class="form-group">
                    <label for=" pb_task_users_task_id">name</label>
                    <input type="text" class="form-control" id=" pb_task_users_task_id" placeholder="task id...">
                  </div>
                 
                  <div class="form-group">
                    <label for=" pb_task_users_user_id">user id</label>
                    <input type="text" class="form-control" id=" pb_task_users_user_id" placeholder="user id ...">
                  </div>

                  
                  <div class="form-group">
                    <label for=" pb_task_users_regular_price">regular price</label>
                    <input type="text" class="form-control" id=" pb_task_users_regular_price" placeholder="regular price ...">
                  </div>

                  
                  <div class="form-group">
                    <label for=" pb_task_users_peak_price">peak price</label>
                    <input type="text" class="form-control" id=" pb_task_users_peak_price" placeholder="peak price ...">
                  </div>

                  
                  <div class="form-group">
                    <label for=" pb_task_users_additional_pet_price">additional pet price</label>
                    <input type="text" class="form-control" id=" pb_task_users_additional_pet_price" placeholder="additional pet price ...">
                  </div>

                  
                  <div class="form-group">
                    <label for=" pb_task_users_petsize_price">petsize price</label>
                    <input type="text" class="form-control" id=" pb_task_users_petsize_price" placeholder="petsize price ...">
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
