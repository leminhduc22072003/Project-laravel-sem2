<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/admin" class="brand-link">
        <img src="assets/img/logo3.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
             style="opacity: .8">
        <span class="brand-text font-weight-light">Airlines Reservation</span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-user"></i>
                        <p>
                            Khách Hàng
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('admin.user.list')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Danh sách khách hàng</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('admin.user.create')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Thêm khách hàng</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-list"></i>
                        <p>
                            Hóa đơn
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('admin.hoadon.list')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Danh sách hóa đơn</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('admin.hoadon.create')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Thêm hóa đơn</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-plane-departure"></i>
                        <p>
                            Chuyến Bay
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('admin.chuyenbay.list')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Danh sách chuyến bay</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('admin.chuyenbay.create')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Thêm chuyến bay</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-plane"></i>
                        <p>
                            Sân Bay
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('admin.sanbay.list')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Danh sách sân bay</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('admin.sanbay.create')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Thêm mới sân bay</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-plane"></i>
                        <p>
                            Hãng Bay
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('admin.hangbay.list')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Danh sách hãng bay</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('admin.hangbay.create')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Thêm mới hãng bay</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-ticket"></i>
                        <p>
                            Vé
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('admin.ve.list')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Danh sách vé</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('admin.ve.create')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Thêm mới vé</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-plane"></i>
                        <p>
                            Máy Bay
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('admin.maybay.list')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Danh sách máy bay</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('admin.maybay.create')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Thêm máy bay</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-address-book"></i>
                        <p>
                            Thành phố
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('admin.thanhpho.list')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Danh sách thành phố</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('admin.thanhpho.create')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Thêm thành phố</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview">
                    <a href="{{route('auth.postLogout')}}" class="nav-link">
                        <i class="nav-icon fas fa-address-book"></i>
                        <p>
                            Đăng xuất
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
