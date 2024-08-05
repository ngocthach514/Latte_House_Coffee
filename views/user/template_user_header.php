<body>
    <!-- Header -->
    <header>
        <nav class="promotion__nav container-fluid navbar-nav">
            <p>Chương trình mua một tặng một. <a href="#">Tìm hiểu ngay!</a></p>
        </nav>
        <!-- Navigation header -->
        <div class="nav-bar nav-scroll">
            <div class="nav__bar container">
                <div class="logo">
                    <img src="assets/images/logo-w-dark.png" alt="">
                </div>
                <div class="search__gr">
                    <form method="post">
                        <div>
                            <div>
                                <!-- Change select tag to div with modal & js code -->
                                <select id="active__item">
                                    <option value="tea">Danh mục</option>
                                    <option value="tea">Trà</option>
                                    <option value="coffee">Cà phê</option>
                                    <option value="juice">Nước ép</option>
                                    <option value="milktea">Trà sữa</option>
                                </select>
                                <i class="fa-solid fa-chevron-down"></i>
                            </div>
                            <input type="text" placeholder="Tìm kiếm sản phẩm..." name="key_product">
                        </div>
                        <!-- <a href="index.php?mod=page&act=home"> -->
                        <button class="btn-search" type="submit" name="search_product">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </button>
                        <!-- </a> -->
                    </form>
                </div>
                <div class="orther__option">
                    <div class="contact">
                        <div><i class="fa-solid fa-phone-volume"></i></div>
                        <div><span>Liên hệ hỗ trợ</span><span>+84 1900 9099</span></div>
                    </div>

                    <!-- <a href="#" class="user">
                            <i class="fa-solid fa-user"></i>
                            <span>' . $_SESSION['User']['Name'] . '</span>
                        </a>
                        <a href="index.php?mod=page&act=home&logout=1">Đăng Xuất</a> -->


                    <a href="#" class="heart">
                        <i class="fa-solid fa-heart"></i>
                        <div>
                            <span class="bi-quanty">1</span>
                        </div>
                        <!-- <i class="bi bi-0-circle-fill"></i> -->
                    </a>
                    <a href="index.php?mod=page&act=cart" class="cart">
                        <i class="fa-solid fa-cart-shopping"></i>
                        <div>
                            <span class="bi-quanty">1</span>
                        </div>
                        <!-- <i class="bi bi-0-circle-fill"></i> -->
                    </a>
                    <?php
                    if (isset($_SESSION['User'])) {
                        echo ' <div class="btn-group user-login">
                        <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <a href="#" class="user">
                            <i class="fa-solid fa-user"></i></a>
                            <span>' . $_SESSION['User']['Name'] . '</span>
                        
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <li><a class="dropdown-item" href="#">Thông tin tài khoản</a></li>
                            <li><a class="dropdown-item" href="index.php?mod=page&act=home&logout=1">Đăng xuất</a></li>
                        </ul>
                    </div>';
                    } else {
                        echo '
                            <a href="index.php?mod=user&act=login" class="user">
                                <i class="fa-solid fa-user"></i>
                            </a>
                        ';
                    }
                    ;
                    ?>
                </div>
            </div>
        </div>

        <div class="menu__nav  justify-content-center">
            <nav class="nav__bar container">
                <ul class="menu">
                    <li><a href="index.php?mod=page&act=home">Trang chủ</a></li>
                    <li><a href="#">Sản Phẩm</a>
                        <ul>
                            <?php
                            foreach ($category as $dm) {
                                echo '
                                    <li><a href="index.php?mod=page&act=Category&iddm=' . $dm['ID_DM'] . '">' . $dm['Name_DM'] . '</a></li>
                                ';
                            }
                            ;
                            ?>
                        </ul>
                    </li>
                    <li><a href="#">Khuyến mãi</a></li>
                    <li><a href="#">Về chúng tôi</a>
                        <ul>
                            <li><a href="#">Công ty</a>
                                <ul>
                                    <li><a href="#">Tầm nhìn</a></li>
                                    <li><a href="#">Sứ mệnh</a></li>
                                    <li><a href="#">Giá trị cốt lõi</a></li>
                                    <li><a href="#">Lĩnh vực hoạt động</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Tuyển dụng</a>
                                <ul>
                                    <li><a href="#">Văn phòng</a></li>
                                    <li><a href="#">Nhà máy</a></li>
                                    <li><a href="#">Cửa hàng</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Liên hệ</a>
                                <ul>
                                    <li><a href="#">Địa chỉ công ty</a></li>
                                    <li><a href="#">Hệ thống cửa hàng</a></li>
                                    <li><a href="#">Góp ý & Khiếu nại</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>



    </header>