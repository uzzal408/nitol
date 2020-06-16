
<!-- jQuery 3 -->
<script src="<?php echo e(asset('/')); ?>admin/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo e(asset('/')); ?>admin/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="<?php echo e(asset('/')); ?>admin/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo e(asset('/')); ?>admin/dist/js/adminlte.min.js"></script>
<script type="text/javascript" src="<?php echo e(asset('/admin/datatable/datatables.min.js')); ?>"></script>
<script>
        $(document).ready( function () {
                $('#test').DataTable();
        } );
</script>
<?php echo $__env->yieldContent('scripts'); ?>
        <!-- AdminLTE for demo purposes -->
<script src="<?php echo e(asset('/')); ?>admin/dist/js/demo.js"></script>
