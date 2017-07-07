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
                <h3 class="box-title">pb_profiles</h3>
              </div>
              <!-- /.box-header -->
              <!-- form start -->
              <form role="form">
                <div class="box-body">


                  <div class="form-group">
                    <label for="pb_profiles_user_id">user id</label>
                    <input type="text" class="form-control" id="pb_profiles_user_id" placeholder="txn ...">
                  </div>

                  <div class="form-group">
                    <label for="pb_profiles_abn">abn</label>
                    <input cols="1" row="5" type="text" class="form-control" id="pb_profiles_abn" placeholder="abn ...">
                  </div>

                  <div class="form-group">
                    <label for="pb_profiles_contact_number">contact number</label>
                    <input cols="1" row="5" type="text" class="form-control" id="pb_profiles_contact_number" placeholder="contact number ...">
                  </div>

                  <div class="form-group">
                    <label for="pb_profiles_name">name</label>
                    <input cols="1" row="5" type="text" class="form-control" id="pb_profiles_name" placeholder="image ..."> 
                  </div>

                  
                  <div class="form-group">
                    <label for="pb_profiles_company">company</label>
                    <input cols="1" row="5" type="text" class="form-control" id="pb_profiles_company" placeholder="company ..."> 
                  </div>

                  
                  <div class="form-group">
                    <label for="pb_profiles_country">country</label>
                    <input cols="1" row="5" type="text" class="form-control" id="pb_profiles_country" placeholder="company ..."> 
                  </div>

                  
                  
                  <div class="form-group">
                    <label for="pb_profiles_suburb">suburb</label>
                    <input cols="1" row="5" type="text" class="form-control" id="pb_profiles_suburb" placeholder="company ..."> 
                  </div>

                  
                  <div class="form-group">
                    <label for="pb_profiles_address">address</label>
                    <input cols="1" row="5" type="text" class="form-control" id="pb_profiles_address" placeholder="company ..."> 
                  </div>

                  
                  <div class="form-group">
                    <label for="pb_profiles_street_name">street name</label>
                    <input cols="1" row="5" type="text" class="form-control" id="pb_profiles_street_name" placeholder="company ..."> 
                  </div>

                  
                  <div class="form-group">
                    <label for="pb_profiles_postal">postal</label>
                    <input cols="1" row="5" type="text" class="form-control" id="pb_profiles_postal" placeholder="postal ..."> 
                  </div>

                  
                  <div class="form-group">
                    <label for="pb_profiles_place_id">place id</label>
                    <input cols="1" row="5" type="text" class="form-control" id="pb_profiles_place_id" placeholder="place id ..."> 
                  </div>
                 
                 
                  <div class="form-group">
                    <label for="pb_profiles_description">description</label>
                    <input cols="1" row="5" type="text" class="form-control" id="pb_profiles_description" placeholder="description ..."> 
                  </div>

                  
                  <div class="form-group">
                    <label for="pb_profiles_tagline">tagline</label>
                    <input cols="1" row="5" type="text" class="form-control" id="pb_profiles_tagline" placeholder="tagline ..."> 
                  </div>

                  
                  <div class="form-group">
                    <label for="pb_profiles_guide">guide</label>
                    <input cols="1" row="5" type="text" class="form-control" id="pb_profiles_guide" placeholder="guide..."> 
                  </div>

                  
                  <div class="form-group">
                    <label for="pb_profiles_facility">facility</label>
                    <input cols="1" row="5" type="text" class="form-control" id="pb_profiles_facility" placeholder="facility..."> 
                  </div>

                  
                  <div class="form-group">
                    <label for="pb_profiles_pet_allowed">pet allowed</label>
                    <input cols="1" row="5" type="text" class="form-control" id="pb_profiles_pet_allowed" placeholder="allowed..."> 
                  </div>

                  
                  <div class="form-group">
                    <label for="pb_profiles_pet_sizes">pet sizes</label>
                    <input cols="1" row="5" type="text" class="form-control" id="pb_profiles_pet_sizes" placeholder="sizes..."> 
                  </div>

                  
                  <div class="form-group">
                    <label for="pb_profiles_pet_allowed">pet allowed</label>
                    <input cols="1" row="5" type="text" class="form-control" id="pb_profiles_pet_allowed" placeholder="guide..."> 
                  </div>

                  
                  <div class="form-group">
                    <label for="pb_profiles_cancellation_policy">cancellation policy</label>
                    <input cols="1" row="5" type="text" class="form-control" id="pb_profiles_cancellation_policy" placeholder="cancellation policy..."> 
                  </div>

                  
                  
                  <div class="form-group">
                    <label for="pb_profiles_terms_and_condition">terms and conditions</label>
                    <input cols="1" row="5" type="text" class="form-control" id="pb_profiles_terms_and_condition" placeholder="terms and condition..."> 
                  </div>

                  
                  
                  <div class="form-group">
                    <label for="pb_profiles_rating">rating</label>
                    <input cols="1" row="5" type="text" class="form-control" id="pb_profiles_rating" placeholder="rating ..."> 
                  </div>

                  
                  
                  <div class="form-group">
                    <label for="pb_profiles_respone_time">response time</label>
                    <input cols="1" row="5" type="text" class="form-control" id="pb_profiles_response_time" placeholder="response time..."> 
                  </div>


                  
                  
                  <div class="form-group">
                    <label for="pb_profiles_peakdays">peak days</label>
                    <input cols="1" row="5" type="text" class="form-control" id="pb_profiles_peakdays" placeholder="peakdays ..."> 
                  </div>

                  
                  
                  <div class="form-group">
                    <label for="pb_profiles_gmt">gmt</label>
                    <input cols="1" row="5" type="text" class="form-control" id="pb_profiles_dayoff" placeholder="dayoff ..."> 
                  </div>

                  
                  
                  <div class="form-group">
                    <label for="pb_profiles_views">views</label>
                    <input cols="1" row="5" type="text" class="form-control" id="pb_profiles_views" placeholder="views ..."> 
                  </div>

                  
                  
                  <div class="form-group">
                    <label for="pb_profiles_avaiable">available</label>
                    <input cols="1" row="5" type="text" class="form-control" id="pb_profiles_avaiable" placeholder="available ..."> 
                  </div>

                  
                  
                  <div class="form-group">
                    <label for="pb_profiles_repeat_guest">repeat guest</label>
                    <input cols="1" row="5" type="text" class="form-control" id="pb_profiles_repeat_guest" placeholder="repeat guest ..."> 
                  </div>

                  
                  <div class="form-group">
                    <label for="pb_profiles_last_booked_date">last booked date</label>
                    <input cols="1" row="5" type="text" class="form-control" id="pb_profiles_last_booked_date" placeholder="last booked date..."> 
                  </div>

 
                  <div class="form-group">
                    <label for="pb_profiles_favorite_count">last booked date</label>
                    <input cols="1" row="5" type="text" class="form-control" id="pb_profiles_favorite_count" placeholder="favorite count ..."> 
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
