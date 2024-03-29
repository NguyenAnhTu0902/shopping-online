<div class="sidebar">
    <!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
                 with font-awesome or any other icon font library -->
            <li class="nav-item">
                <a href="../admin/nguoi-dung"
                   class="nav-link " {{ (request()->segment(2) == 'nguoi-dung') ? 'active': ''}}">
                    <i class="nav-icon fas fa-users" ></i>
                    <p>
                        Quản lý người dùng
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="../admin/don-hang" class="nav-link {{ (request()->segment(2) == 'don-hang') ? 'active': ''}}">
                    <i class="nav-icon fas fa-shopping-bag"></i>
                    <p>
                        Quản lý đơn hàng
                    </p>
                </a>
            </li>

            <li class="nav-item">
                <a href="../admin/san-pham" class="nav-link {{ (request()->segment(2) == 'san-pham') ? 'active': ''}}">
                    <i class="nav-icon fas fa-bread-slice"></i>
                    <p>Quản lý sản phẩm</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="../admin/loai-san-pham" class="nav-link" {{ (request()->segment(2) == 'loai-san-pham') ? 'active': ''}}>
                    <i class="nav-icon fas fa-tags"></i>
                    <p>Quản lý loại sản phẩm</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="../admin/thuong-hieu" class="nav-link" {{ (request()->segment(2) == 'thuong-hieu') ? 'active': ''}}">
                    <i class="nav-icon fas fa-bold"></i>
                    <p>Quản lý thương hiệu</p>
                </a>
            </li>
        </ul>
    </nav>
    <!-- /.sidebar-menu -->
</div>
