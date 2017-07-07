@extends('layouts.master')

@section('title' , 'Admin')

@section('content')


<body class="hold-transition skin-blue sidebar-mini">

<div class="wrapper">
  {{-- header navigation --}}
  @include('pages.admin.includes.header')
  {{-- sidebar --}}
  @include('pages.admin.includes.sidebarLeft')


  {{-- Main Content --}}

  {{--{{ URL::asset('js/scrollTo.js'); }} --}}
<link href="{!! asset('css/AdminLte.css') !!}" media="all" rel="stylesheet" type="text/css" />
 
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        General UI
        <small>Preview of UI elements</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">UI</a></li>
        <li class="active">General</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- COLOR PALETTE -->
          @include('partials.UI Elements.colorPallete')
     
      <!-- /.box -->
      <!-- START ALERTS AND CALLOUTS -->
      <h2 class="page-header">Alerts and Callouts</h2>

      <div class="row">
      
        <div class="col-md-6">
          @include('partials.UI Elements.alerts')
        </div>
        <!-- /.col -->

        <div class="col-md-6">
          @include('partials.UI Elements.callouts')
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
      <!-- END ALERTS AND CALLOUTS -->
      <!-- START CUSTOM TABS -->
      <h2 class="page-header">AdminLTE Custom Tabs</h2>

      <div class="row">

        <div class="col-md-6">
          @include('partials.UI Elements.customTabsV1')          
        </div>
        <!-- /.col -->

        <div class="col-md-6">
          <!-- Custom Tabs (Pulled to the right) -->
          @include('partials.UI Elements.customTabsV2')                    
          <!-- nav-tabs-custom -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
      <!-- END CUSTOM TABS -->
      <!-- START PROGRESS BARS -->
      <h2 class="page-header">Progress Bars</h2>
      <div class="row">
      {{-- Progress Bar --}}
        <div class="col-md-6">
          @include('partials.UI Elements.progressBarV1')                    
        </div>
        <!-- /.col (left) -->


        {{-- Progress Bar Version 2--}}
        <div class="col-md-6">
          @include('partials.UI Elements.progressBarV2')
        </div>
        <!-- /.col (right) -->
      </div>
      <!-- /.row -->

      <div class="row">
        <div class="col-md-6">

         {{-- Vertical Progress Bar --}}
          @include('partials.UI Elements.verticalProgressV1')
          <!-- /.box -->
        </div>
        <!-- /.col (left) -->

        <div class="col-md-6">
          @include('partials.UI Elements.verticalProgressV2')
          <!-- /.box -->
        </div>

        
        <!-- /.col (right) -->
      </div>
      <!-- /.row -->
      <!-- END PROGRESS BARS -->

      <!-- START ACCORDION & CAROUSEL-->
      <h2 class="page-header">Bootstrap Accordion & Carousel</h2>

      <div class="row">
        <div class="col-md-6">
          @include('partials.UI Elements.collapsibleAccordion')     
          <!-- /.box -->
        </div>
        
        <!-- /.col -->
        <div class="col-md-6">
            @include('partials.UI Elements.carousel') 
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
      <!-- END ACCORDION & CAROUSEL-->

      <!-- START TYPOGRAPHY -->
      <h2 class="page-header">Typography</h2>

      <div class="row">
        <div class="col-md-6">
        @include('partials.UI Elements.headlines')          
              
          <!-- /.box -->
        </div>
        <!-- ./col -->
        <div class="col-md-6">
        @include('partials.UI Elements.textEmphasis')          
          <!-- /.box -->
        </div>

        <!-- ./col -->
      </div>
      <!-- /.row -->

      <div class="row">
        <div class="col-md-6">
        @include('partials.UI Elements.blockQuotes')                   
          <!-- /.box -->
        </div>
        <!-- ./col -->
        <div class="col-md-6">
         @include('partials.UI Elements.blockQuotesPulledRight')
          <!-- /.box -->
        </div>
        <!-- ./col -->
      </div>
      <!-- /.row -->

      <div class="row">
        <div class="col-md-4">
         @include('partials.UI Elements.unorderedList')
          <!-- /.box -->
        </div>
        <!-- ./col -->
        <div class="col-md-4">
         @include('partials.UI Elements.orderedList')
          <!-- /.box -->
        </div>
        <!-- ./col -->
        <div class="col-md-4">
         @include('partials.UI Elements.unstyledList')
       
          <!-- /.box -->
        </div>
        <!-- ./col -->
      </div>
      <!-- /.row -->

      <div class="row">
        <div class="col-md-6">
            @include('partials.UI Elements.description')
          <!-- /.box -->
        </div>
        <!-- ./col -->
        <div class="col-md-6">
            @include('partials.UI Elements.descriptionHorizontal')
          
          <!-- /.box -->
        </div>
        <!-- ./col -->
      </div>
      <!-- /.row -->
      <!-- END TYPOGRAPHY -->

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
