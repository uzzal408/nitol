
<!-- jQuery 3 -->
<script src="{{asset('/')}}admin/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{asset('/')}}admin/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="{{asset('/')}}admin/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="{{asset('/')}}admin/dist/js/adminlte.min.js"></script>
<script type="text/javascript" src="{{ asset('/admin/datatable/datatables.min.js') }}"></script>
<script>
        $(document).ready( function () {
                $('#test').DataTable();
        } );
</script>
@yield('scripts')
        <!-- AdminLTE for demo purposes -->
<script src="{{asset('/')}}admin/dist/js/demo.js"></script>
