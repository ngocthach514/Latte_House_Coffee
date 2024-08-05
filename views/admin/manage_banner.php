<main class="content px-3 py-2">
                <article class="container-fluid">
                    <div class="title-page">
                        <h4>
                            Banner
                        </h4>
                        <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);"
                            aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">LatteHouse</a></li>
                                <li class="breadcrumb-item"><a href="#">Quản lý nội dung</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Banner</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="m-main">
                        <div class="apps-option">
                            <a href="admin.php?mod=banner&act=add"><i class="bi bi-plus-circle-fill"></i><span>Thêm banner</span></a>
                            <div class="btn-gr">
                                <button>
                                    <i class="bi bi-gear"></i>
                                </button>
                                <button>
                                    Import
                                </button>
                                <button>
                                    Export
                                </button>
                            </div>
                        </div>
                        <div class="tools-bar">
                            <div class="display">
                                <label for="">
                                    <span>Lựa chọn hiển thị:</span>
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected>Tất cả</option>
                                        <option value="1">5</option>
                                        <option value="2">10</option>
                                        <option value="3">15</option>
                                        <option value="3">20</option>
                                    </select>

                                </label>
                            </div>
                            <div class="search-form">
                                <label for="">
                                    Search:
                                    <input type="search">
                                </label>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead class="table-secondary">
                                    <tr>
                                        <th class="table-header" scope="col">ID</th>
                                        <th class="table-header" scope="col">
                                            <div>
                                                Banner
                                                <div class="icon-container">
                                                    <i class="bi bi-caret-up-fill"></i>
                                                    <i class="bi bi-caret-down"></i>
                                                </div>
                                            </div>
                                        </th>
                                        <th class="table-header" scope="col">
                                            <div>
                                                Ngày tạo
                                                <div class="icon-container">
                                                    <i class="bi bi-caret-up-fill"></i>
                                                    <i class="bi bi-caret-down"></i>
                                                </div>
                                            </div>
                                        </th>
                                        <th class="table-header" scope="col">
                                            <div>
                                                Vị trí
                                                <div class="icon-container">
                                                    <i class="bi bi-caret-up-fill"></i>
                                                    <i class="bi bi-caret-down"></i>
                                                </div>
                                            </div>
                                        </th>
                                        <th class="table-header" scope="col">
                                            <div>
                                                Ngày bắt đầu
                                                <div class="icon-container">
                                                    <i class="bi bi-caret-up-fill"></i>
                                                    <i class="bi bi-caret-down"></i>
                                                </div>
                                            </div>
                                        </th>
                                        <th class="table-header" scope="col">
                                            <div>
                                                Ngày kết thúc
                                                <div class="icon-container">
                                                    <i class="bi bi-caret-up-fill"></i>
                                                    <i class="bi bi-caret-down"></i>
                                                </div>
                                            </div>
                                        </th>
                                        <th class="table-header" scope="col">
                                            <div>
                                                Trang hiển thị
                                                <div class="icon-container">
                                                    <i class="bi bi-caret-up-fill"></i>
                                                    <i class="bi bi-caret-down"></i>
                                                </div>
                                            </div>
                                        </th>
                                        <th class="table-header" scope="col">
                                            <div>
                                                Trạng thái
                                                <div class="icon-container">
                                                    <i class="bi bi-caret-up-fill"></i>
                                                    <i class="bi bi-caret-down"></i>
                                                </div>
                                            </div>
                                        </th>
                                        <th class="table-header" scope="col">
                                            <div>
                                                Lựa chọn
                                                <div class="icon-container">
                                                    <i class="bi bi-caret-up-fill"></i>
                                                    <i class="bi bi-caret-down"></i>
                                                </div>
                                            </div>
                                        </th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $i = 1;
                                        foreach($all_banner as $banner){
                                            echo '
                                                <tr>
                                                    <th scope="row">'.$i.'</th>
                                                    <td>
                                                        <div class="info-pr">
                                                            <img src="assets/images/'.$banner['Image_URL'].'" alt="">
                                                            <div>
                                                                <span>'.$banner['Title'].'</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>'.$banner['Date_Created'].'</td>
                                                    <td>'.$banner['Position'].'</td>
                                                    <td>'.$banner['Start_Date'].'</td>
                                                    <td>'.$banner['End_Date'].'</td>
                                                    <td>'.$banner['Page_Target'].'</td>';
                                                    if($banner['Status'] == 'Active') {
                                                        echo '<td>Hiện</td>';
                                                        echo'
                                                            <td>
                                                                <div class="option-gr">
                                                                    <a href="admin.php?mod=banner&act=hidden&id='.$banner['ID_Banner'].'"><i class="bi bi-eye-fill"></i></a>
                                                                    <a href="admin.php?mod=banner&act=delete&id='.$banner['ID_Banner'].'"><i class="bi bi-trash"></i></a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    ';
                                                    }if($banner['Status'] == 'Hidden') {
                                                        echo '<td>Bị Ẩn</td>';
                                                        echo'
                                                            <td>
                                                                <div class="option-gr">
                                                                    <a href="admin.php?mod=banner&act=presently&id='.$banner['ID_Banner'].'"><i class="bi bi-eye-fill"></i></a>
                                                                    <a href="admin.php?mod=banner&act=delete&id='.$banner['ID_Banner'].'"><i class="bi bi-trash"></i></a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    ';
                                                    }
                                                echo '</tr>
                                            ';$i++;
                                        }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </article>
            </main>