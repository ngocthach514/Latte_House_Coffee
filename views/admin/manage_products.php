<main class="content px-3 py-2">
                <article class="container-fluid">
                    <div class="title-page">
                        <h4>
                            Sản phẩm
                        </h4>
                        <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);"
                            aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">LatteHouse</a></li>
                                <li class="breadcrumb-item"><a href="#">Quản lý nội dung</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Sản phẩm</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="m-main">
                        <div class="apps-option">
                            <a href="admin.php?mod=product&act=add"><i class="bi bi-plus-circle-fill"></i><span>Thêm sản phẩm</span></a>
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
                                                Sản phẩm
                                                <div class="icon-container">
                                                    <i class="bi bi-caret-up-fill"></i>
                                                    <i class="bi bi-caret-down"></i>
                                                </div>
                                            </div>
                                        </th>
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
                                                Giá
                                                <div class="icon-container">
                                                    <i class="bi bi-caret-up-fill"></i>
                                                    <i class="bi bi-caret-down"></i>
                                                </div>
                                            </div>
                                        </th>
                                        <th class="table-header" scope="col">
                                            <div>
                                                Giảm giá
                                                <div class="icon-container">
                                                    <i class="bi bi-caret-up-fill"></i>
                                                    <i class="bi bi-caret-down"></i>
                                                </div>
                                            </div>
                                        </th>
                                        <th class="table-header" scope="col">
                                            <div>
                                                Lượt xem
                                                <div class="icon-container">
                                                    <i class="bi bi-caret-up-fill"></i>
                                                    <i class="bi bi-caret-down"></i>
                                                </div>
                                            </div>
                                        </th>
                                        <th class="table-header" scope="col">
                                            <div>
                                                Lượt mua
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
                                        foreach ($sp as $key){
                                            echo '
                                            <tr>
                                            <th scope="row">'.$i.'</th>
                                            <td>
                                                <div class="info-pr">
                                                    <img src="assets/images/products/'.$key['Image_SP'].'" alt="">
                                                    <div>
                                                        <span>'.$key['Name'].'</span>
                                                        <div>
                                                            <i class="bi bi-star-fill text-warning"></i>
                                                            <i class="bi bi-star-fill text-warning"></i>
                                                            <i class="bi bi-star-fill text-warning"></i>
                                                            <i class="bi bi-star-fill text-warning"></i>
                                                            <i class="bi bi-star-fill text-warning"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>'.$key['Name_DM'].'</td>
                                            <td>'.$key['Price'].'<span>đ</span></td>
                                            <td>'.$key['Sale_Percents'].'</td>
                                            <td>'.$key['Views'].'</td>
                                            <td>'.$key['Quantity_Sold'].'</td>
                                            <td>Hiển thị</td>
                                            <td>
                                                <div class="option-gr">
                                                    <a href="#"><i class="bi bi-eye-fill"></i></a>
                                                    <a href="admin.php?mod=product&act=edit&id='.$key['ID_SP'].'"><i class="bi bi-pencil-square"></i></a>
                                                    <a href="admin.php?mod=product&act=delete&id='.$key['ID_SP'].'" onclick="return confirmDelete()"><i class="bi bi-trash"></i></a>
                                                </div>
                                            </td>
                                        </tr>';$i++;
                                        }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </article>
            </main>