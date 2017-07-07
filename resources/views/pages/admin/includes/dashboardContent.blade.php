<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

     @include('pages.admin.includes.contents.statbox')
    
      <!-- Main row -->
      <div class="row">
        <!-- Left col -->
        <section class="col-lg-7 connectedSortable">

            @include('pages.admin.includes.contents.salesChart')

            @include('pages.admin.includes.contents.chatBox')

            @include('pages.admin.includes.contents.toDoList')

            @include('pages.admin.includes.contents.quickEmailWidget')

        </section>
        <!-- /.Left col -->
        <!-- right col (We are only adding the ID to make the widgets sortable)-->
        <section class="col-lg-5 connectedSortable">

            @include('pages.admin.includes.contents.visitors')

            @include('pages.admin.includes.contents.salesGraph')
            
            @include('pages.admin.includes.contents.calendar')

        </section>
        <!-- right col -->
      </div>
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->