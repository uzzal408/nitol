<!DOCTYPE html>
<html>
<head>
    @include('admin.includes.head')
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

    @include('admin.includes.header')
    @include('admin.includes.main-sidebar')

            <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        @yield('body')
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

    @include('admin.includes.control-sidebar')

</div>
<!-- ./wrapper -->
@include('admin.includes.scripts')
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
