  <!--Main section -->
  <section class="heading__page">
        <div class="container">
            <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);"
                aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Đăng ký</li>
                </ol>
            </nav>
        </div>
    </section>
    <section class="form__section">
        <article class="container">
            <div class="title__form">
                <h1>Đăng ký tài khoản</h1>
                <p>Bạn đã có tài khoản ? <a class="link-primary" href="index.php?mod=user&act=login">Đăng nhập ngay</a></p>
            </div>
            <form method="post">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Họ và tên<span
                            class="requires">*</span></label>
                    <input type="text" placeholder="Vui lòng nhập họ và tên của bạn" class="form-control"
                        id="exampleInputEmail1" aria-describedby="emailHelp" name="Name">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Số điện thoại</label>
                    <input type="number" placeholder="Vui lòng nhập số điện thoại của bạn" class="form-control"
                        id="exampleInputEmail1" aria-describedby="emailHelp" name="Phone_Number">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Địa chỉ email<span
                            class="requires">*</span></label>
                    <input type="text" placeholder="Vui lòng nhập email của bạn" class="form-control"
                        id="exampleInputEmail1" aria-describedby="emailHelp" name="Email">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Địa chỉ<span
                            class="requires">*</span></label>
                    <input type="text" placeholder="Vui lòng nhập địa chỉ của bạn" class="form-control"
                        id="exampleInputEmail1" aria-describedby="emailHelp" name="Address">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">User Name<span
                            class="requires">*</span></label>
                    <input type="text" placeholder="Vui lòng nhập User Name của bạn" class="form-control"
                        id="exampleInputPassword1" name="User_Name">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password<span
                            class="requires">*</span></label>
                    <input type="password" placeholder="Vui lòng nhập mật khẩu của bạn" class="form-control"
                        id="exampleInputPassword1" name="Pass_Word">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Xác thực Password<span
                            class="requires">*</span></label>
                    <input type="password" placeholder="Vui lòng nhập lại mật khẩu của bạn" class="form-control"
                        id="exampleInputPassword1" name="Re_Pass_Word">
                </div>
                <div>
                    <input type="submit" name="Register" class="btn btn-primary" value="Đăng Ký">
                </div>
            </form>
            <div class="social__login">
                <p>Hoặc đăng nhập bằng</p>
                <div class="social__gr">
                    <button class="btn btn-danger">
                        <div class="pre-btn-login"><i class="bi bi-google"></i></div>
                        <div class="label-btn-login">Đăng nhập Google</div>
                    </button>
                    <button class="btn btn-primary">
                        <div class="pre-btn-login"><i class="bi bi-facebook"></i></div>
                        <div class="label-btn-login">Đăng nhập Facebook</div>
                    </button>
                </div>
            </div>
        </article>
    </section>