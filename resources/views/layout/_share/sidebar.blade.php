<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item has-treeview">
            <a href="{{ route('get.list.home') }}" class="nav-link {{ \Request::route()->getName() == 'get.list.home' ? 'active' : '' }}">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                    Tổng quan
                </p>
            </a>
        </li>
        <li class="nav-item has-treeview">
            <a href="{{ route('get.list.product') }}" class="nav-link {{ \Request::route()->getName() == 'get.list.product' ? 'active' : '' }}">
                <i class="nav-icon fab fa-product-hunt"></i>
                <p>
                    Sản phẩm
                </p>
            </a>
        </li>
        <li class="nav-item has-treeview">
            <a href="{{ route('get.list.category') }}" class="nav-link {{ \Request::route()->getName() == 'get.list.category' ? 'active' : '' }}">
                <i class="nav-icon fas fa-align-justify"></i>
                <p>
                    Danh mục
                </p>
            </a>
        </li>
        <li class="nav-item has-treeview">
            <a href="{{ route('get.list.user') }}" class="nav-link {{ \Request::route()->getName() == 'get.list.user' ? 'active' : '' }}">
                <i class="nav-icon fas fa-users"></i>
                <p>
                    Thành viên
                </p>
            </a>
        </li>
        <li class="nav-item has-treeview">
            <a href="{{ route('get.list.transaction') }}" class="nav-link {{ \Request::route()->getName() == 'get.list.transaction' ? 'active' : '' }}">
                <i class="nav-icon fas fa-shopping-cart"></i>
                <p>
                    Đơn hàng
                </p>
            </a>
        </li>
    </ul>
</nav>
