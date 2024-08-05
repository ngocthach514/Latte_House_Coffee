<main class="content px-3 py-2">
                <article class="container-fluid">
                    <div class="title-page">
                        <h4>
                            Comments
                        </h4>
                        <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);"
                            aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">LatteHouse</a></li>
                                <li class="breadcrumb-item"><a href="#">Quản lý nội dung</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Comments</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="m-main">
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
                                                Tên khách hàng
                                                <div class="icon-container">
                                                    <i class="bi bi-caret-up-fill"></i>
                                                    <i class="bi bi-caret-down"></i>
                                                </div>
                                            </div>
                                        </th>
                                        <th class="table-header" scope="col">
                                            <div>
                                                Nội dung
                                                <div class="icon-container">
                                                    <i class="bi bi-caret-up-fill"></i>
                                                    <i class="bi bi-caret-down"></i>
                                                </div>
                                            </div>
                                        </th>
                                        <th class="table-header" scope="col">
                                            <div>
                                                Sản phẩm
                                                <div class="icon-container">
                                                    <i class="bi bi-caret-up-fill"></i>
                                                    <i class="bi bi-caret-down"></i>
                                                </div>
                                            </div>
                                        </th>
                                        <th class="table-header" scope="col">
                                            <div>
                                                Ngày đăng
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
                                        foreach ($get_all_comment as $cmt) {
                                            echo '
                                                <tr>
                                                    <th scope="row">'.$i.'</th>
                                                    <td>
                                                        <div class="info-pr">
                                                            '.$cmt['Name_User'].'
                                                        </div>
                                                    </td>
                                                    <td>'.$cmt['Contents'].'</td>
                                                    <td>'.$cmt['Name_SP'].'</td>
                                                    <td>'.$cmt['Date_Crt'].'</td>
                                                    ';
                                                    if($cmt['Role'] == 1) {
                                                        echo '<td>Hiện</td>';
                                                        echo'
                                                            <td>
                                                                <div class="option-gr">
                                                                    <a href="admin.php?mod=comments&act=hidden&id='.$cmt['ID_BL'].'"><i class="bi bi-eye-fill"></i></a>
                                                                    <a href="admin.php?mod=comments&act=delete&id='.$cmt['ID_BL'].'"><i class="bi bi-trash"></i></a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    ';
                                                    }if($cmt['Role'] == 2) {
                                                        echo '<td>Bị Ẩn</td>';
                                                        echo'
                                                            <td>
                                                                <div class="option-gr">
                                                                    <a href="admin.php?mod=comments&act=presently&id='.$cmt['ID_BL'].'"><i class="bi bi-eye-fill"></i></a>
                                                                    <a href="admin.php?mod=comments&act=delete&id='.$cmt['ID_BL'].'"><i class="bi bi-trash"></i></a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    ';
                                                    }
                                                    ;$i++;
                                        }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </article>
            </main>