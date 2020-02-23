<!DOCTYPE html>
<html>
<head>
    <?php echo $__env->make('admin.includes.head', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

    <?php echo $__env->make('admin.includes.header', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo $__env->make('admin.includes.main-sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>

            <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <?php echo $__env->yieldContent('body'); ?>
    </div>
    <!-- /.content-wrapper -->

    <footer class="main-footer" style="background-color: #D0D3DD">
        <div class="pull-right hidden-xs">
            <b>Version</b> 2.4.0
        </div>
        <div class="copyright">
            <p>Powered by
                <img style="vertical-align:middle; float:none !important; margin-right:1px;" src="http://www.aamrainfotainment.com/wp-content/uploads/2015/02/poweredby-aamra-white.png">
                | <a href="http://www.aamrainfotainment.com"> infotainment ltd.</a>
            </p>

        </div>
    </footer>

    <?php echo $__env->make('admin.includes.control-sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>

</div>
<!-- ./wrapper -->
<?php echo $__env->make('admin.includes.scripts', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<script !src="">
    $(function () {
        for (var i = window.location, n = $("ul.sidebar-menu a").filter(function () {
            return this.href == i
        }).parent().addClass("active").parent(); ;) {
            if (!n.is("ul.treeview-menu"))break;
            n.css('display','block');
            n = n.parent().addClass("active menu-open").parent();

        }
    });
</script>
</body>
</html>
