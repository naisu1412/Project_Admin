<!-- REQUIRED JS SCRIPTS -->
<!-- jQuery 2.2.3 -->
<script src="{{ asset("/admin-lte/plugins/jQuery/jquery-2.2.3.min.js") }}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>

<!-- Bootstrap 3.3.6 -->
<script src="{{ asset("/admin-lte/bootstrap/js/bootstrap.min.js") }}"></script>

<!-- AdminLTE App -->
<script src="{{ asset("/admin-lte/dist/js/app.min.js")}}"></script>

<!-- AdminLTE for demo purposes -->
<script src="{{ asset("/admin-lte/dist/js/demo.js")}}"></script>
