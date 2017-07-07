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
        <section class="content-header">
            Forms List
        </section>


    <div class="container">
        <div class="row">
            <li class="list-group">


                <div class="list-group-item">
                    <a href="#">
                        pb_addons
                    </a>
                </div>


                <div class="list-group-item">
                    <a href="#">
                        pb_ads
                    </a>
                </div>


                <div class="list-group-item">
                    <a href="#">
                        pb_application_service_providers
                    </a>
                </div>

                <div class="list-group-item">
                    <a href="#">
                        pb_bookings
                    </a>
                </div>

                <div class="list-group-item">
                    <a href="#">
                        pb_bookings_feedbacks
                    </a>
                </div>

                <div class="list-group-item">
                    <a href="#">
                        pb_checkouts
                    </a>
                </div>

                <div class="list-group-item">
                    <a href="#">
                        pb_cms_posts
                    </a>
                </div>

                <div class="list-group-item">
                    <a href="#">
                        pb_payment
                    </a>
                </div>

                <div class="list-group-item">
                    <a href="#">
                        pb_pets
                    </a>
                </div>

                <div class="list-group-item">
                    <a href="#">
                        pb_previous_works
                    </a>
                </div>

                <div class="list-group-item">
                    <a href="#">
                        pb_profiles
                    </a>
                </div>

                <div class="list-group-item">
                    <a href="#">
                        pb_questionaires
                    </a>
                </div>

                <div class="list-group-item">
                    <a href="#">
                        pb_questionaire_items
                    </a>
                </div>

                <div class="list-group-item">
                    <a href="#">
                        pb_schedules
                    </a>
                </div>

                <div class="list-group-item">
                    <a href="#">
                        pb_services
                    </a>
                </div>

                <div class="list-group-item">
                    <a href="#">
                        pb_service_tasks
                    </a>
                </div>

                <div class="list-group-item">
                    <a href="#">
                        pb_service_user
                    </a>
                </div>

                <div class="list-group-item">
                    <a href="#">
                        pb_site_options
                    </a>
                </div>

                <div class="list-group-item">
                    <a href="#">
                        pb_tasks
                    </a>
                </div>

                <div class="list-group-item">
                    <a href="#">
                        pb_task_users
                    </a>
                </div>

                <div class="list-group-item">
                    <a href="#">
                        pb_templates
                    </a>
                </div>

                <div class="list-group-item">
                    <a href="#">
                        pb_users
                    </a>
                </div>

                <div class="list-group-item">
                    <a href="#">
                        pb_user_logs
                    </a>
                </div>

                <div class="list-group-item">
                    <a href="#">
                        pb_vouchers
                    </a>
                </div>









            </li>
        </div>
    </div>
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
