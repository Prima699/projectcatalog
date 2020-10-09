<?php $r = \Route::current()->getAction() ?>
<?php $route = (isset($r['as'])) ? $r['as'] : ''; ?>

<ul class="sidebar-menu">
    <li class="header">MENU</li>

    <li class="<?php echo ( starts_with($route, ADMIN.'.dash') ) ? "active" : '' ?>">
        <a href="{{ route(ADMIN.'.dash') }}">
            <i class="fa fa-dashboard"></i>
            <span>Dashboard</span>
        </a>
    </li>

    @if (auth()->user()->hasRole('Superadmin|Admin'))
    <li class="<?php echo ( starts_with($route, ADMIN.'.users') ) ? "active" : '' ?>">
        <a href="{{ route(ADMIN.'.users.index') }}">
            <i class="fa fa-users"></i>
            <span>Users</span>
        </a>
    </li>
    <li class="treeview">
        <a href="#"><i class='fa fa-bars'></i> <span>Products</span> <i class="fa fa-angle-left pull-right"></i></a>
        <ul class="treeview-menu">
            <li><a href="{{ route(ADMIN.'.product.index') }}"><i class="fa fa-cubes"></i>All Product</a></li>
            <li><a href="{{ route(ADMIN.'.product.create') }}"><i class="fa fa-cube"></i>Add Product</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i>Logs</a></li>
        </ul>
    </li>
    @endif

    @if (auth()->user()->hasRole('Superadmin'))
    <li class="treeview">
        <a href="#"><i class='fa fa-link'></i> <span>Tools</span> <i class="fa fa-angle-left pull-right"></i></a>
        <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-circle-o"></i>Settings</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i>Backups</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i>Logs</a></li>
        </ul>
    </li>
    @endif
</ul>
