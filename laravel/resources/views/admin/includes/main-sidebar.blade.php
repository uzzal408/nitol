<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="#">
            </div>
            <div class="pull-left info">
                <p>Nitol Electronics</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat">
                    <i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MAIN NAVIGATION</li>

            <li>
                <a href="{{route('categories')}}">
                    <i class="fa fa-th"></i> <span>Categories</span>
                    {{--<span class="pull-right-container">--}}
              {{--<small class="label pull-right bg-green">new</small>--}}
            {{--</span>--}}
                </a>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-pie-chart"></i>
                    <span>Products</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('all-products')}}"><i class="fa fa-circle-o"></i> Product</a></li>
                    <li><a href="{{route('new-product')}}"><i class="fa fa-circle-o"></i> Add Product </a></li>
                </ul>
            </li>
            <li>
                <a href="{{route('manage-order')}}">
                    <i class="fa fa-envelope"></i> <span>Orders</span>
                    {{--<span class="pull-right-container">--}}
              {{--<small class="label pull-right bg-yellow">12</small>--}}
              {{--<small class="label pull-right bg-green">16</small>--}}
              {{--<small class="label pull-right bg-red">5</small>--}}
            {{--</span>--}}
                </a>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-users"></i>
                    <span>Reviews Customer</span>
                    <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{url('')}}/corporate/sales"><i class="fa fa-circle-o"></i>Corporate Sales</a></li>
                    <li><a href="{{url('')}}/customers"><i class="fa fa-circle-o"></i> Customer information </a></li>
                    <li><a href="{{url('')}}/product/review"><i class="fa fa-circle-o"></i> Product Review </a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-cog"></i>
                    <span>Settings</span>
                    <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('admin.settings.edit','brotuiar')}}"><i class="fa fa-circle-o"></i>Brotuiar Upload</a></li>
                </ul>
            </li>

            @if( Auth::user()->name == 'admin')
            <li>
                <a href="{{route('employees')}}">
                    <i class="fa fa-th"></i> <span>Employees</span>
                </a>
            </li>
            @endif

        </ul>
    </section>
    <!-- /.sidebar -->
</aside>