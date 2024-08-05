<main class="content px-3 py-2">
                <article class="container-fluid">
                    <div class="title-page">
                        <h4>
                            Danh mục sản phẩm
                        </h4>
                        <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);"
                            aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">LatteHouse</a></li>
                                <li class="breadcrumb-item"><a href="#">Quản lý nội dung</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Danh mục sản phẩm</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="m-main">
                        <div class="apps-option">
                            <a href="admin.php?mod=categories&act=add"><i class="bi bi-plus-circle-fill"></i><span>Thêm danh mục</span></a>
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
                                                Danh mục
                                                <div class="icon-container">
                                                    <i class="bi bi-caret-up-fill"></i>
                                                    <i class="bi bi-caret-down"></i>
                                                </div>
                                            </div>
                                        </th>
                                        <th class="table-header" scope="col">
                                            <div>
                                                Mô tả
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
                                        foreach ($get_cate as $cate) {
                                            echo '
                                                <tr>
                                                    <th scope="row">'.$i.'</th>
                                                    <td>
                                                        <div class="info-pr">
                                                            <!-- <img src="" alt=""> -->
                                                            <div>
                                                                <span>'.$cate['Name_DM'].'</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>'.$cate['Decribes'].'</td>';
                                                    if($cate['Role'] == 1) {
                                                        echo '<td>Hiện</td>';
                                                        echo'
                                                            <td>
                                                                <div class="option-gr">
                                                                    <a href="admin.php?mod=categories&act=hidden&id='.$cate['ID_DM'].'"><i class="bi bi-eye-fill"></i></a>
                                                                    <a href="admin.php?mod=categories&act=edit&id='.$cate['ID_DM'].'"><i class="bi bi-pencil-square"></i></a>
                                                                    <a href="admin.php?mod=categories&act=delete&id='.$cate['ID_DM'].'"><i class="bi bi-trash"></i></a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    ';
                                                    }if($cate['Role'] == 2) {
                                                        echo '<td>Bị Ẩn</td>';
                                                        echo'
                                                            <td>
                                                                <div class="option-gr">
                                                                    <a href="admin.php?mod=categories&act=presently&id='.$cate['ID_DM'].'"><i class="bi bi-eye-fill"></i></a>
                                                                    <a href="admin.php?mod=categories&act=edit&id='.$cate['ID_DM'].'"><i class="bi bi-pencil-square"></i></a>
                                                                    <a href="admin.php?mod=categories&act=delete&id='.$cate['ID_DM'].'"><i class="bi bi-trash"></i></a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    ';
                                                    }
                                                echo'</tr>
                                            ';$i++;
                                        }
                                    ?>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </article>
            </main>