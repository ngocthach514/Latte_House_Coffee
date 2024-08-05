<main class="content px-3 py-2">
    <article class="container-fluid">
        <div class="title-page">
            <div class="title">
                <a href="admin.php?mod=product&act=manage"><i class="bi bi-arrow-left"></i></a>
                <div>
                    <p>Quay lại danh sách sản phẩm</p>
                    <h4>
                        Thêm sản phẩm
                    </h4>
                </div>
            </div>
            <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);"
                aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">LatteHouse</a></li>
                    <li class="breadcrumb-item"><a href="#">Quản lý nội dung</a></li>
                    <li class="breadcrumb-item"><a href="#">Sản phẩm</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Thêm sản phẩm</li>
                </ol>
            </nav>
        </div>
        <form action="" method="post" class="needs-validation" novalidate>
        <div class="m-main item-form">
            <div class="submit-btn-gr d-flex justify-content-between m-2">
                <input type="submit" class="btn btn-danger" value="Hủy">
                <div class="d-flex gap-2">
                    <input type="submit" class="btn btn-outline-secondary" value="Lưu nháp">
                    <input type="submit" class="btn btn-primary" value="Thêm sản phẩm" name="add_product">
                </div>
            </div>
                <div class="form-left d-grid gap-3 align-content-start">
                    <div class="description">
                        <h5 class="title">
                            Thông tin sản phẩm
                        </h5>
                        <div class="content row m-2 border border-secondary-subtle rounded-1 pt-2 pb-2">
                            <div>
                                <label for="validationName" class="form-label">Tên sản phẩm:</label>
                                <input placeholder="Nhập tên sản phẩm" type="text" class="form-control"
                                    id="validationName" required name="Name_SP">
                                <div class="invalid-feedback">
                                    Vui lòng nhập tên sản phẩm.
                                </div>
                            </div>
                            <div>
                                <label for="validationDescription" class="form-label">Mô tả:</label>
                                <textarea class="form-control" id="validationDescription"
                                    placeholder="Nhập mô tả ngắn cho sản phẩm" required name="Describes"></textarea>
                                <div class="invalid-feedback">
                                    Vui lòng nhập mô tả cho sản phẩm.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="catalogies">
                        <h5 class="title">
                            Danh mục
                        </h5>
                        <div class="content row m-2 border border-secondary-subtle rounded-1 pt-2 pb-2">
                            <div>
                                <label class="form-label">Danh mục:</label>
                                <select class="form-select" required aria-label="select example" name="Name_DM">
                                    <option value="">Chọn danh mục</option>
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
                                    <option value="3">Trà trái cây</option>
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
                                <input placeholder="Nhập số lượng tồn kho" type="number" class="form-control"
                                    id="validationQty" required>
                                <div class="invalid-feedback">
                                    Vui lòng nhập tồn kho sản phẩm.
                                </div>
                            </div>
                            <div class="col-6">
                                <label for="validationIdPr" class="form-label">Mã sản phẩm:</label>
                                <input placeholder="Nhập mã sản phẩm" type="text" class="form-control"
                                    id="validationIdPr" required>
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
                            <div class="form-check d-grid gap-1">
                                <div>
                                    <input class="form-check-input" type="checkbox" value="M"
                                        aria-controls="collapseSizeM" data-bs-target="#collapseSizeM"
                                        data-bs-toggle="collapse" name="Size">
                                    <label class="form-check-label">
                                        Size M
                                    </label>
                                </div>
                                <div class="collapse row" id="collapseSizeM">
                                    <div class="col-6">
                                        <label for="validationMFee" class="form-label">Phí chênh lệch
                                            giá:</label>
                                        <input type="text" class="form-control" id="validationMFee"
                                            placeholder="Nhập phần trăm" required name="SizeM_Percents">
                                        <div class="invalid-feedback">
                                            Vui lòng nhập phí chênh lệch.
                                        </div>
                                    </div>
                                    <!-- <div class="col-6">
                                        <label for="validationDateStart" class="form-label">Giảm
                                            giá:</label>
                                        <input type="number" class="form-control" id="validationDateStart"
                                            placeholder="Nhập giảm giá nếu có" required>
                                    </div> -->
                                </div>
                            </div>
                            <div class="form-check d-grid gap-1">
                                <div>
                                    <input class="form-check-input" type="checkbox" value="L"
                                        aria-controls="collapseSizeL" data-bs-target="#collapseSizeL"
                                        data-bs-toggle="collapse" name="Size">
                                    <label class="form-check-label">
                                        Size L
                                    </label>
                                </div>
                                <div class="collapse row" id="collapseSizeL">
                                    <div class="col-6">
                                        <label for="validationLFee" class="form-label">Phí chênh lệch
                                            giá:</label>
                                        <input type="text" class="form-control" id="validationLFee"
                                            placeholder="Nhập phần trăm" required name="SizeL_Percents">
                                        <div class="invalid-feedback">
                                            Vui lòng nhập phí chênh lệch.
                                        </div>
                                    </div>
                                    <!-- <div class="col-6">
                                        <label for="validationDateStart" class="form-label">Giảm
                                            giá:</label>
                                        <input type="number" class="form-control" id="validationDateStart"
                                            placeholder="Nhập giảm giá nếu có" required>
                                    </div> -->
                                </div>
                            </div>
                            <div class="form-check d-grid gap-1">
                                <div>
                                    <input class="form-check-input" type="checkbox" value="XL"
                                        aria-controls="collapseSizeXL" data-bs-target="#collapseSizeXL"
                                        data-bs-toggle="collapse" name="Size">
                                    <label class="form-check-label">
                                        Size XL
                                    </label>
                                </div>
                                <div class="collapse row" id="collapseSizeXL">
                                    <div class="col-6">
                                        <label for="validationXLFee" class="form-label">Phí chênh lệch
                                            giá:</label>
                                        <input type="text" class="form-control" id="validationXLFee"
                                            placeholder="Nhập phần trăm" required name="SizeXL_Percents">
                                        <div class="invalid-feedback">
                                            Vui lòng nhập phí chênh lệch.
                                        </div>
                                    </div>
                                    <!-- <div class="col-6">
                                        <label for="validationDateStart" class="form-label">Giảm giá:</label>
                                        <input type="number" class="form-control" id="validationDateStart"
                                            placeholder="Nhập giảm giá nếu có" required>
                                    </div> -->
                                </div>
                            </div>
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
                                <img src="assets/images/cafe.png" class="img-fluid" alt="">
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
                                <!-- <div>
                                    <label for="validationImg" class="form-label">Alt hình ảnh:</label>
                                    <input placeholder="Nhập mô tả" type="text" class="form-control"
                                        id="validationImg" required name="ALT_Image_SP">
                                    <div class="invalid-feedback">
                                        Vui lòng alt ảnh.
                                    </div>
                                </div> -->
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
                                    <input type="number" class="form-control" name="Price_Sale">
                                    <span class="input-group-text">đ</span>
                                </div>
                            </div>
                            <div class="col-6">
                                <label for="validationPrice" class="form-label">Giá gốc:</label>
                                <div class="input-group mb-3">
                                    <input type="number" class="form-control" id="validationPrice" required name="Price">
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
                                        aria-controls="collapseShop" data-bs-target="#collapseShop"
                                        data-bs-toggle="collapse">
                                    <label class="form-check-label">
                                        Giảm giá tại cửa hàng
                                    </label>
                                </div>
                                <div class="collapse row" id="collapseShop">
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
                                    <input class="form-check-input" type="checkbox"
                                        aria-controls="collapseOnline" data-bs-target="#collapseOnline"
                                        data-bs-toggle="collapse" name="add_voucher">
                                    <label class="form-check-label">
                                        Giảm giá online
                                    </label>
                                </div>
                                <div class="collapse row" id="collapseOnline">
                                    <div class="col-6">
                                        <label for="validationDateStart" class="form-label">Ngày bắt
                                            đầu:</label>
                                        <input type="date" class="form-control" id="validationDateStart" required name="date_crt_voucher">
                                        <div class="invalid-feedback">
                                            Vui lòng ngày bắt đầu.
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <label for="validationDateStart" class="form-label">Ngày kết
                                            thúc:</label>
                                        <input type="date" class="form-control" id="validationDateStart" required name="date_end_voucher">
                                        <div class="invalid-feedback">
                                            Vui lòng ngày kết thúc.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-check d-grid gap-1">
                                <div>
                                    <input class="form-check-input" type="checkbox" value=""
                                        aria-controls="collapseBoth" data-bs-target="#collapseBoth"
                                        data-bs-toggle="collapse">
                                    <label class="form-check-label">
                                        Giảm giá tại cửa hàng
                                    </label>
                                </div>
                                <div class="collapse row" id="collapseBoth">
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