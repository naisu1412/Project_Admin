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
                <h3 class="box-title"> pb_service_task</h3>
              </div>
              <!-- /.box-header -->
              <!-- form start -->
              <form role="form">
                <div class="box-body">


                  <div class="form-group">
                    <label for=" pb_service_task_service_id">service id</label>
                    <input type="text" class="form-control" id=" pb_service_task_service_id" placeholder="service id...">
                  </div>
                 
                 
                  <div class="form-group">
                    <label for=" pb_service_task_task_id">task id</label>
                    <input type="text" class="form-control" id=" pb_service_task_name" placeholder="task id ...">
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
