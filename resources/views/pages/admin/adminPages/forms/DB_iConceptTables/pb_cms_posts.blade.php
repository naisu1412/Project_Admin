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
                <h3 class="box-title">pb_cms_posts</h3>
              </div>
              <!-- /.box-header -->
              <!-- form start -->
              <form role="form">
                <div class="box-body">


                  <div class="form-group">
                    <label for="pb_cms_posts_title">title</label>
                    <input type="text" class="form-control" id="pb_cms_posts_title" placeholder="title ...">
                  </div>

                  <div class="form-group">
                    <label for="pb_cms_posts_post_type">post type</label>
                    <input type="text" class="form-control" id="pb_cms_posts_post_type" placeholder="Post Type ...">
                  </div>


                  <div class="form-group">
                    <label for="pb_cms_posts_featured_image">featured image</label>
                    <input cols="1" row="5" type="text" class="form-control" id="pb_cms_posts_featured_image" placeholder="Featured Image ...">
                  </div>
                  
                  <div class="form-group">
                    <label for="pb_cms_posts_template">template</label>
                    <input cols="1" row="5" type="text" class="form-control" id="pb_cms_posts_checkout_template" placeholder="Template ...">
                  </div>

                  <div class="form-group">
                    <label for="pb_cms_posts_visibilities">visibilities</label>
                    <input cols="1" row="5" type="text" class="form-control" id="pb_cms_posts_visibilities" placeholder="Visibilities ...">
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

