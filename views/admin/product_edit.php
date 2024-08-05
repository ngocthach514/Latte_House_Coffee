<main class="content px-3 py-2">
    <article class="container-fluid">
        <div class="title-page">
            <div class="title">
                <a href="admin.php?mod=product&act=manage"><i class="bi bi-arrow-left"></i></a>
                <div>
                    <p>Quay lại danh sách sản phẩm</p>
                    <h4>
                        Sửa sản phẩm
                    </h4>
                </div>
            </div>
            <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);"
                aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">LatteHouse</a></li>
                    <li class="breadcrumb-item"><a href="#">Quản lý nội dung</a></li>
                    <li class="breadcrumb-item"><a href="#">Sản phẩm</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Sửa sản phẩm</li>
                </ol>
            </nav>
        </div>
        <form method="post" class="needs-validation" novalidate>
        <div class="m-main item-form">
            <div class="submit-btn-gr d-flex justify-content-between m-2">
                <input type="submit" class="btn btn-danger" value="Hủy">
                <div class="d-flex gap-2">
                    <input type="submit" class="btn btn-outline-secondary" value="Lưu nháp">
                    <input type="submit" class="btn btn-primary" value="Lưu thay đổi" name="update_sp">
                </div>
            </div>
                <div class="form-left d-grid gap-3 align-content-start">
                    <div class="description">
                        <h5 class="title">
                            Thông tin sản phẩm
                        </h5>
                        <div class="content row m-2 border border-secondary-subtle rounded-1 pt-2 pb-2">
                            <?php 
                            echo '
                                <div>
                                    <label for="validationName" class="form-label">Tên sản phẩm:</label>
                                    <input placeholder="'.$get_sp['Name'].'" type="text" class="form-control"
                                        id="validationName" required value="'.$get_sp['Name'].'" name="Name_SP">
                                    <div class="invalid-feedback">
                                        Vui lòng nhập tên sản phẩm.
                                    </div>
                                </div>
                                <div>
                                    <label for="validationDescription" class="form-label">Mô tả:</label>
                                    <textarea class="form-control" id="validationDescription"
                                        placeholder="'.$get_sp['Describes'].'"
                                        required name="Describes">'.$get_sp['Describes'].'</textarea>
                                    <div class="invalid-feedback">
                                        Vui lòng nhập mô tả cho sản phẩm.
                                    </div>
                                </div>';
                            ?>
                        </div>
                    </div>
                    <div class="catalogies">
                        <h5 class="title">
                            Danh mục
                        </h5>
                        <div class="content row m-2 border border-secondary-subtle rounded-1 pt-2 pb-2">
                            <div>
                                <label class="form-label">Danh mục:</label>
                                <select class="form-select" required aria-label="select example" name="Category">
                                    <?php echo '<option value="'.$get_sp['ID_DM'].'" name="cate_origin">'.$get_sp['Name_DM'].'</option>'; ?>
                                    <?php
                                        $i = 1;
                                        foreach($dm as $key) {
                                            echo '<option value="'.$i.'">'.$key['Name_DM'].'</option>';
                                            $i++;
                                        }
                                    ?>
                                </select>
                                <div class="invalid-feedback">Example invalid select feedback</div>
                            </div>
                            <!-- <div>
                                <label class="form-label">Danh mục con:</label>
                                <select class="form-select" required aria-label="select example">
                                    <option value="">Chọn danh mục con:</option>
                                    <option value="1">Không có</option>
                                    <option value="2">Trà sữa</option>
                                    <option selected value="3">Trà trái cây</option>
                                </select>
                                <div class="invalid-feedback">Example invalid select feedback</div>
                            </div> -->
                        </div>
                    </div>
                    <!-- <div class="inventory">
                        <h5 class="title">
                            Tồn kho sản phẩm
                        </h5>
                        <div class="content row row m-2 border border-secondary-subtle rounded-1 pt-2 pb-2">
                            <div class="col-6">
                                <label for="validationQty" class="form-label">Số lượng:</label>
                                <input placeholder="Nhập số lượng tồn kho" type="number" value="0"
                                    class="form-control" id="validationQty" required>
                                <div class="invalid-feedback">
                                    Vui lòng nhập tồn kho sản phẩm.
                                </div>
                            </div>
                            <div class="col-6">
                                <label for="validationIdPr" class="form-label">Mã sản phẩm:</label>
                                <input placeholder="Nhập mã sản phẩm" type="text" class="form-control"
                                    id="validationIdPr" required value="1">
                                <div class="invalid-feedback">
                                    Vui lòng nhập mã sản phẩm.
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <div class="size-type">
                        <h5 class="title">
                            Size sản phẩm
                        </h5>
                        <div class="content row m-2 border border-secondary-subtle rounded-1 p-2">
                            <?php
                            foreach ($get_size_sp as $size) {
                                echo '
                                    <div class="form-check d-grid gap-1">
                                        <div>
                                            <input class="form-check-input" type="checkbox" value="'.$size['Name_Size'].'"
                                                aria-controls="collapseSizeM" data-bs-target="#collapseSizeM" checked name="Size">
                                            <label class="form-check-label">
                                                Size '.$size['Name_Size'].'
                                            </label>
                                        </div>
                                        <div class=" row" id="collapseSizeM">
                                            <div class="col-6">
                                                <label for="validationMFee" class="form-label">Phí chênh lệch
                                                    giá:</label>
                                                <input type="text" class="form-control" id="validationMFee"
                                                    placeholder="'.$size['Percents'].'" required value="'.$size['Percents'].'" name="'.$size['Name_Size'].'">
                                                <div class="invalid-feedback">
                                                    Vui lòng nhập phí chênh lệch.
                                                </div>
                                            </div>
                                        </div>
                                    </div>';
                            };
                            ?>
                            <!-- <div class="form-check d-grid gap-1">
                                <div>
                                    <input class="form-check-input" type="checkbox" value=""
                                        aria-controls="collapseSizeXL" data-bs-target="#collapseSizeXL">
                                    <label class="form-check-label">
                                        Size XL
                                    </label>
                                </div>
                                <div class=" row" id="collapseSizeXL">
                                    <div class="col-6">
                                        <label for="validationXLFee" class="form-label">Phí chênh lệch
                                            giá:</label>
                                        <input type="text" class="form-control" id="validationXLFee"
                                            placeholder="Nhập phần trăm" required>
                                        <div class="invalid-feedback">
                                            Vui lòng nhập phí chênh lệch.
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <label for="validationDateStart" class="form-label">Giảm
                                            giá:</label>
                                        <input type="number" class="form-control" id="validationDateStart"
                                            placeholder="Nhập giảm giá nếu có" required>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                    </div>

                </div>
                <div class="form-right d-grid gap-3 align-content-start">
                    <div class="img-item">
                        <h5 class="title">
                            Hình ảnh sản phẩm
                        </h5>
                        <div class="row d-flex row m-2 border border-secondary-subtle rounded-1 pt-2 pb-2">
                            <div class="col-5">
                                <img src="assets/images/products/<?php echo''.$size['Image'].'';?>" class="img-fluid" alt="">
                            </div>
                            <div class="col-7 gap-1 d-grid">
                                <div>
                                    <label for="validationImg" class="form-label">Hình sản phẩm:</label>
                                    <input type="file" class="form-control" aria-label="file example" required name="Image_SP">
                                    <div class="invalid-feedback">Vui lòng tải ảnh sản phẩm</div>
                                </div>
                                <!-- <div>
                                    <label for="validationImg" class="form-label">Mô tả thay thế:</label>
                                    <input placeholder="Nhập mô tả" type="text" class="form-control"
                                        id="validationImg" required>
                                    <div class="invalid-feedback">
                                        Vui lòng mô tả.
                                    </div>
                                </div> -->
                                <div>
                                    <label for="validationImg" class="form-label">Alt hình ảnh:</label>
                                    <input placeholder="Nhập mô tả" type="text" class="form-control"
                                        id="validationImg" required>
                                    <div class="invalid-feedback">
                                        Vui lòng alt ảnh.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pricing p-2">
                        <h5 class="title">
                            Giá sản phẩm
                        </h5>
                        <div class="row m-2 border border-secondary-subtle rounded-1 pt-2 pb-2">
                            <div class="col-6">
                                <label class="form-label">Giá giảm:</label>
                                <div class="input-group mb-3">
                                    <?php $price_sale = $size['Price'] - ($size['Price'] * $size['Sale_Percents'] / 100) ?>
                                    <input type="number" class="form-control" value="" placeholder="<?php echo''.$price_sale.'';?>" name="Sale_Price">
                                    <span class="input-group-text">đ</span>
                                </div>
                            </div>
                            <div class="col-6">
                                <label for="validationPrice" class="form-label">Giá gốc:</label>
                                <div class="input-group mb-3">
                                    <input type="number" class="form-control" id="validationPrice" required
                                        value="" placeholder="<?php echo''.$size['Price'].''?>" name="Sale_Percents">
                                    <span class="input-group-text">đ</span>
                                </div>
                                <div class="invalid-feedback">
                                    Vui lòng nhập giá gốc sản phẩm.
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="selling type">
                        <h5 class="title">
                            Chương trình giảm giá
                        </h5>
                        <div class="content row m-2 border border-secondary-subtle rounded-1 p-2">
                            <div class="form-check d-grid gap-1">
                                <div>
                                    <input class="form-check-input" type="checkbox" value=""
                                        aria-controls="collapseShop" data-bs-target="#collapseShop">
                                    <label class="form-check-label">
                                        Giảm giá tại cửa hàng
                                    </label>
                                </div>
                                <div class=" row" id="collapseShop">
                                    <div class="col-6">
                                        <label for="validationDateStart" class="form-label">Ngày bắt
                                            đầu:</label>
                                        <input type="date" class="form-control" id="validationDateStart" required>
                                        <div class="invalid-feedback">
                                            Vui lòng ngày bắt đầu.
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <label for="validationDateStart" class="form-label">Ngày kết
                                            thúc:</label>
                                        <input type="date" class="form-control" id="validationDateStart" required>
                                        <div class="invalid-feedback">
                                            Vui lòng ngày kết thúc.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-check d-grid gap-1">
                                <div>
                                    <input class="form-check-input" type="checkbox" value=""
                                        aria-controls="collapseOnline" data-bs-target="#collapseOnline">
                                    <label class="form-check-label">
                                        Giảm giá online
                                    </label>
                                </div>
                                <div class=" row" id="collapseOnline">
                                    <div class="col-6">
                                        <label for="validationDateStart" class="form-label">Ngày bắt
                                            đầu:</label>
                                        <input type="date" class="form-control" id="validationDateStart" required>
                                        <div class="invalid-feedback">
                                            Vui lòng ngày bắt đầu.
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <label for="validationDateStart" class="form-label">Ngày kết
                                            thúc:</label>
                                        <input type="date" class="form-control" id="validationDateStart" required>
                                        <div class="invalid-feedback">
                                            Vui lòng ngày kết thúc.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-check d-grid gap-1">
                                <div>
                                    <input class="form-check-input" type="checkbox" value=""
                                        aria-controls="collapseBoth" data-bs-target="#collapseBoth">
                                    <label class="form-check-label">
                                        Giảm giá tại cửa hàng
                                    </label>
                                </div>
                                <div class=" row" id="collapseBoth">
                                    <div class="col-6">
                                        <label for="validationDateStart" class="form-label">Ngày bắt
                                            đầu:</label>
                                        <input type="date" class="form-control" id="validationDateStart" required>
                                        <div class="invalid-feedback">
                                            Vui lòng ngày bắt đầu.
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <label for="validationDateStart" class="form-label">Ngày kết
                                            thúc:</label>
                                        <input type="date" class="form-control" id="validationDateStart" required>
                                        <div class="invalid-feedback">
                                            Vui lòng ngày kết thúc.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->
                </div>
            </form>


        </div>
    </article>
</main>