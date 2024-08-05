<main class="content px-3 py-2">
    <article class="container-fluid">
        <div class="title-page">
            <div class="title">
                <a href="admin.php?mod=categories&act=manage"><i class="bi bi-arrow-left"></i></a>
                <div>
                    <p>Quay lại danh sách danh mục</p>
                    <h4>
                        Thêm danh mục
                    </h4>
                </div>
            </div>
            <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);"
                aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">LatteHouse</a></li>
                    <li class="breadcrumb-item"><a href="#">Quản lý nội dung</a></li>
                    <li class="breadcrumb-item"><a href="#">Danh mục</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Thêm danh mục</li>
                </ol>
            </nav>
        </div>
        <form action="" class="needs-validation" novalidate method="post">
        <div class="m-main item-form">
            <div class="submit-btn-gr d-flex justify-content-between m-2">
                <input type="submit" class="btn btn-danger" value="Hủy">
                <div class="d-flex gap-2">
                    <input type="submit" class="btn btn-outline-secondary" value="Lưu nháp">
                    <input type="submit" class="btn btn-primary" value="Thêm danh mục" name="add_cate">
                </div>
            </div>
                <div class="form-left d-grid gap-3 align-content-start">
                    <div class="description">
                        <h5 class="title">
                            Thông tin danh mục
                        </h5>
                        <div class="content row m-2 border border-secondary-subtle rounded-1 pt-2 pb-2">
                            <div>
                                <label for="validationName" class="form-label">Tên danh mục:</label>
                                <input placeholder="Nhập tên danh mục" type="text" class="form-control"
                                    id="validationName" required name="Name_DM">
                                <div class="invalid-feedback">
                                    Vui lòng nhập tên danh mục.
                                </div>
                            </div>
                            <div>
                                <label for="validationDescription" class="form-label">Mô tả:</label>
                                <textarea class="form-control" id="validationDescription"
                                    placeholder="Nhập mô tả ngắn cho danh mục" required name="Describes"></textarea>
                                <div class="invalid-feedback">
                                    Vui lòng nhập mô tả cho danh mục.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-right d-grid gap-3 align-content-start">
                    <div class="img-item">
                        <h5 class="title">
                            Hình ảnh danh mục
                        </h5>
                        <div class="row d-flex row m-2 border border-secondary-subtle rounded-1 pt-2 pb-2">
                            <div class="col-5">
                                <img id="img-item" src="assets/images/cafe.png" class="img-fluid" alt="">
                            </div>
                            <div class="col-7 gap-1 d-grid">
                                <div>
                                    <label for="validationImg" class="form-label">Hình danh mục:</label>
                                    <input id="upload-item" type="file" class="form-control" aria-label="file example"
                                        required name="Image">
                                    <div class="invalid-feedback">Vui lòng tải ảnh danh mục</div>
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
                </div>
            </form>
        </div>
    </article>
</main>