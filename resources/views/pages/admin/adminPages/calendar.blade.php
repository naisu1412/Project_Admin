@extends('layouts.master')

@section('title' , 'Admin')

@section('content')


<body class="hold-transition skin-blue sidebar-mini">
<link href="{!! asset('css/AdminLte.css') !!}" media="all" rel="stylesheet" type="text/css" />
 
<div class="wrapper">
  {{-- header navigation --}}
  @include('pages.admin.includes.header')
  {{-- sidebar --}}
  @include('pages.admin.includes.sidebarLeft')


  {{-- Main Content Here --}}



@include('partials._scripts')

{{-- Required Scripts for This Page --}}

</body>



@endsection
