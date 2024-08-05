<div class="wrapper">
    <aside id="sidebar" class="js-sidebar">
        <!-- Content For Sidebar -->
        <div class="h-100">
            <div class="sidebar-logo">
                <a href="#">LatteHouse</a>
            </div>

            <ul class="sidebar-nav">
                <li class="sidebar-header">
                    Quản trị hệ thống
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link">
                        <i class="fa-solid fa-list pe-2"></i>
                        Dashboard
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link collapsed" data-bs-target="#pages" data-bs-toggle="collapse" aria-expanded="false"><i class="fa-solid fa-file-lines pe-2"></i>
                        Quản lý đơn hàng
                    </a>
                    <ul id="pages" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                        <li class="sidebar-item">
                            <a href="admin.php?mod=orders&act=orders_pending" class="sidebar-link">Đơn hàng chưa xử lý</a>
                        </li>
                        <li class="sidebar-item">
                            <a href="admin.php?mod=orders&act=orders_approved" class="sidebar-link">Đơn hàng đã duyệt</a>
                        </li>
                        <li class="sidebar-item">
                            <a href="admin.php?mod=orders&act=orders_canceled" class="sidebar-link">Đơn hàng đã hủy</a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link collapsed" data-bs-target="#posts" data-bs-toggle="collapse" aria-expanded="false"><i class="fa-solid fa-sliders pe-2"></i>
                        Quản lý nội dung
                    </a>
                    <ul id="posts" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                        <li class="sidebar-item">
                            <a href="admin.php?mod=categories&act=manage" class="sidebar-link">Danh mục sản phẩm</a>
                        </li>
                        <li class="sidebar-item">
                            <a href="admin.php?mod=product&act=manage" class="sidebar-link">Sản phẩm</a>
                        </li>
                        <li class="sidebar-item">
                            <a href="admin.php?mod=banner&act=manage" class="sidebar-link">Banner</a>
                        </li>
                        <li class="sidebar-item">
                            <a href="admin.php?mod=comments&act=manage" class="sidebar-link">Comments</a>
                        </li>
                        <li class="sidebar-item">
                            <a href="admin.php?mod=feedback&act=manage" class="sidebar-link">Feedback</a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link collapsed" data-bs-target="#auth" data-bs-toggle="collapse" aria-expanded="false"><i class="fa-regular fa-user pe-2"></i>
                        Quản lý tài khoản
                    </a>
                    <ul id="auth" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                        <li class="sidebar-item">
                            <a href="admin.php?mod=user&act=admin" class="sidebar-link">Tài khoản nhân viên</a>
                        </li>
                        <li class="sidebar-item">
                            <a href="admin.php?mod=user&act=acount_user" class="sidebar-link">Tài khoản người dùng</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </aside>
    <div class="main">
        <nav class="navbar navbar-expand px-3 border-bottom d-flex justify-content-between">
            <div class="d-flex gap-2 align-items-center">
                <button id="sidebar-toggle" type="button">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            <div class="navbar-collapse navbar d-flex">
                <ul class="navbar-nav avt-gr">
                    <li class="nav-item dropdown">
                        <div href="#" data-bs-toggle="dropdown" class="nav-icon pe-md-0 d-flex align-items-center">
                            <img src="assets/images/avt-admin-1.png" class="avatar img-fluid rounded" alt="">
                            <div class="info-admin">
                                <?php

                                if (isset($_SESSION['User'])) {
                                    echo '<a href="#" class="user">
                                            <i class="fa-solid fa-user"></i>
                                            <h5>' . $_SESSION['User']['Name'] . '</h5>
                                        </a>';
                                }
                                ?>
                                <h6>Administrators</h6>
                            </div>
                        </div>
                        <div class="dropdown-menu dropdown-menu-end">
                            <a href="#" class="dropdown-item"><i class="bi bi-person-circle"></i>My Account</a>
                            <a href="#" class="dropdown-item"><i class="bi bi-person-fill-gear"></i>Settings</a>
                            <a href="index.php?mod=page&act=home&logout=1" class="dropdown-item"><i class="bi bi-box-arrow-right"></i>Logout</a>
                        </div>
                    </li>
                </ul>
            </div>
            <div>
            </div>
        </nav>