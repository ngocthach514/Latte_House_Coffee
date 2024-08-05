 <!--Main section -->
 <section class="heading__page">
     <div class="container">
         <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
             <ol class="breadcrumb">
                 <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                 <li class="breadcrumb-item active" aria-current="page">Chi tiết sản phẩm</li>
             </ol>
         </nav>
     </div>
 </section>
 <section class="detail__pr__section">
     <?php
        $price = $product_detail["Price"] - ($product_detail["Price"] * $product_detail["Sale_Percents"] / 100);
        echo '
                <article class="container">
                    <div class="img__pr"><img src="assets/images/products/' . $product_detail["Image_SP"] . '" alt=""></div>
                    <div class="detail__pr">
                    <form method="post" class="product__form">
                        <div class="title__pr">
                            <input class="form-check-input" type="hidden" name="Name" value="' . $product_detail["Name"] . '">
                            <input class="form-check-input" type="hidden" name="Image" value="' . $product_detail["Image_SP"] . '">
                            <h1>' . $product_detail["Name"] . '</h1>
                            <button class="btn__wishlist">
                                <i class="bi bi-heart"></i>
                                <i class="bi bi-heart-fill"></i>
                            </button>
                            <div class="decription__pr">
                                <h5>Mô tả:</h5>
                                <p><em>Thành phần: ' . $product_detail["Describes"] . '</em></p>
                            </div>
                            <div class="price__pr">
                                <p class="price"><span>' . $price . '</span><span>đ</span></p>
                                <input class="form-check-input" type="hidden" name="Price" value="' . $price . '">
                                <div class="discount__price">';
        if ($product_detail["Sale_Percents"] !== null) {
            echo '
                                        <p class="compare__price"><span>' . $product_detail["Price"] . '</span><span>đ</span></p>   
                                        <span>' . $product_detail["Sale_Percents"] . '%</span>
                                        ';
        } else {
            echo "";
        }
        echo '</div>
                            </div>
                        </div>
                            <div class="size__select">
                                <div class="custom__title">
                                    <h5>Chọn size</h5>
                                    <i class="bi bi-chevron-down"></i>
                                </div>
                                <div>';
        foreach ($size as $s) {
            echo ' 
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="Size" value="' . $s["Name_Size"] . '" id="size' . $s["Name_Size"] . '">
                                            <input type="hidden" name="price_size" value="' . $s["Percents"] . '"id="size' . $s["Name_Size"] . '">
                                            <label class="form-check-label" for="size' . $s["Name_Size"] . '">
                                                Size ' . $s["Name_Size"] . '
                                            </label>
                                        </div>
                                        ';
        }
        echo '
                        </div> 
                            </div>
                            <div class="sugar__select">
                                <div class="custom__title">
                                    <h5>Chọn đường</h5>
                                    <i class="bi bi-chevron-down"></i>
                                </div>
                                <div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="sugar" value="1" id="lowSugar">
                                        <label class="form-check-label" for="lowSugar">
                                            50%
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="sugar" value="2" id="mediumSugar">
                                        <label class="form-check-label" for="mediumSugar">
                                            70%
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="sugar" value="3" id="highSugar">
                                        <label class="form-check-label" for="highSugar">
                                            100%
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="ice__select">
                                <div class="custom__title">
                                    <h5>Chọn đá</h5>
                                    <i class="bi bi-chevron-down"></i>
                                </div>
                                <div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="ice" value="1" id="lowIce">
                                        <label class="form-check-label" for="lowIce">
                                            50%
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="ice" value="2" id="mediumIce">
                                        <label class="form-check-label" for="mediumIce">
                                            70%
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="ice" value="3" id="highIce">
                                        <label class="form-check-label" for="highIce">
                                            100%
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="orther__offer">
                                <div class="custom__title">
                                    <h5>Chọn topping</h5>
                                    <i class="bi bi-chevron-down"></i>
                                </div>
                                <div>
                                    <div class="option">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="Thêm trân châu trắng" name="tran_chau_trang"
                                                id="flexCheckIndeterminate">
                                            <input class="form-check-input" type="hidden" value="5000" name="price_tran_chau_trang">
                                            <label class="form-check-label" for="flexCheckIndeterminate">
                                                Thêm trân châu trắng
                                            </label>
                                        </div>
                                        <div class="option__price">
                                            <span>+5000</span><span>đ</span>
                                        </div>
                                    </div>
                                    <div class="option">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="Thêm trân châu sợi" name="tran_chau_soi"
                                                id="flexCheckIndeterminate">
                                            <input class="form-check-input" type="hidden" value="9000" name="price_tran_chau_soi">
                                            <label class="form-check-label" for="flexCheckIndeterminate">
                                                Thêm trân châu sợi
                                            </label>
                                        </div>
                                        <div class="option__price">
                                            <span>+9000</span><span>đ</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="total">
                                <h5>Tổng thành tiền:</h5>
                                <div class="total__price">
                                    <span>75000</span><span>đ</span>
                                </div>
                            </div>
                            <div class="qty__pr">
                                <div class="select__qty__pr">
                                    <button onclick="decreaseQuantity(event)"><i class="bi bi-dash-lg"></i></button>
                                    <input type="number" value="1" id="quantityInput" name="Quantity">
                                    <button onclick="increaseQuantity(event)"><i class="bi bi-plus-lg"></i></button>
                                </div>
                                <button class="btn" name="add_cart">Thêm vào giỏ</button>
                            </div>
                            <button class="btn btn-danger">Mua ngay</button>
                        </form>
                    </div>
                </article>
            ';
        ?>
     <!-- <button class="btn" onclick="addToCart()" name="add_cart">Thêm vào giỏ</button> -->
     <article class="container">
         <div class="row pr-reviews-gr">
             <h3>Đánh giá sản phẩm</h3>
             <hr>
             <div class="col-3 col-reviews">
                 <div class="rate-content">
                     <h5>Đánh giá trung bình</h5>
                     <h1>5/5</h1>
                     <div class="star-box">
                         <i class="bi bi-star-fill text-warning"></i>
                         <i class="bi bi-star-fill text-warning"></i>
                         <i class="bi bi-star-fill text-warning"></i>
                         <i class="bi bi-star-fill text-warning"></i>
                         <i class="bi bi-star-half text-warning"></i>
                     </div>
                     <p>66 lượt đánh giá</p>
                 </div>
             </div>
             <div class="col-6 col-reviews rate-point">
                 <div>
                     <p>5</p>
                     <p>4</p>
                     <p>3</p>
                     <p>2</p>
                     <p>1</p>
                 </div>
                 <div>
                     <i class="bi bi-star-fill text-warning"></i><br>
                     <i class="bi bi-star-fill text-warning"></i><br>
                     <i class="bi bi-star-fill text-warning"></i><br>
                     <i class="bi bi-star-fill text-warning"></i><br>
                     <i class="bi bi-star-fill text-warning"></i>
                 </div>
                 <div class="rate-meter">
                     <meter min="0" max="100" value="45"></meter><br>
                     <meter min="0" max="100" value="19"></meter><br>
                     <meter min="0" max="100" value="2"></meter><br>
                     <meter min="0" max="100" value="0"></meter><br>
                     <meter min="0" max="100" value="0"></meter>

                 </div>
                 <div>
                     <p>45</p>
                     <p>19</p>
                     <p>2</p>
                     <p>0</p>
                     <p>0</p>
                 </div>

             </div>
             <div class="col-3 col-reviews">
                 <div class="rate-action">
                     <h5>Bạn đã sử dụng sản phẩm chưa?</h5>
                     <button>Gửi đánh giá</button>
                 </div>
             </div>
             <div class="filter-views">
                 <h5>Lọc chế độ xem theo:</h5>
                 <button>Đã từng mua</button>
                 <button>5 sao</button>
                 <button>4 sao</button>
                 <button>3 sao</button>
                 <button>2 sao</button>
                 <button>1 sao</button>
             </div>
             <?php
                if (isset($_SESSION['User'])) {
                    foreach ($comments as $cmt) {
                        if ($_SESSION['User']['ID_KH'] == $cmt["ID_KH"]) {
                            echo '
                            <form method="post">
                                <div class="cus-reviews">
                                    <div class="customer-cmt">
                                        <button class="avt">VT</button>
                                        <div class="customer">
                                            <div>
                                                <div class="name-cus">' . $cmt['Name_User'] . '</div>
                                                <div class="cus-cmt">' . $cmt['Contents'] . '</div>
                                                <input type="hidden" id="contents_cmt" name="contents_cmt" value="' . $cmt['Contents'] . '">
                                                <input type="hidden" name="id_bl" value="' . $cmt['ID_BL'] . '">
                                            </div>
                                            <div class="cmt-act">
                                                <div class="time-line">' . $cmt['Date_Crt'] . '</div>
                                                <button class="change_cmt" type="button">Chỉnh Sửa</button>
                                                <button class="cancel_cmt" type="button">Hủy Chỉnh Sửa</button>
                                                <button class="change_cmt2" name="update_cmt">Lưu</button>
                                                <button class="del_cmt" name="Del_cmt" onclick="return confirmDelete()">Xóa</button>
                                                <button class="rep">Trả Lời</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>';
                        } else {
                            echo '
                            <div class="cus-reviews">
                                <div class="customer-cmt">
                                    <button class="avt">VT</button>
                                    <div class="customer">
                                        <div>
                                            <div class="name-cus">' . $cmt['Name_User'] . '</div>
                                            <div class="cus-cmt">' . $cmt['Contents'] . '</div>
                                        </div>
                                        <div class="cmt-act">
                                            <div class="time-line">' . $cmt['Date_Crt'] . '</div>
                                            <button class="rep">Trả Lời</button>
                                        </div>
                                    </div>
                                </div>
                            </div>';
                        };
                    };
                } else {
                    foreach ($comments as $cmt) {
                        echo '
                            <div class="cus-reviews">
                                <div class="customer-cmt">
                                    <button class="avt">VT</button>
                                    <div class="customer">
                                        <div>
                                            <div class="name-cus">' . $cmt['Name_User'] . '</div>
                                            <div class="cus-cmt">' . $cmt['Contents'] . '</div>
                                        </div>
                                        <div class="cmt-act">
                                            <div class="time-line">' . $cmt['Date_Crt'] . '</div>
                                        </div>
                                    </div>
                                </div>
                            </div>';
                    };
                };
                ?>
             <form method="post">
                 <div class="form-floating">
                     <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea" style="width: 500px;" name="contents"></textarea>
                     <label for="floatingTextarea">Comments</label>
                 </div>
                 <br>
                 <input type="submit" value="Đăng Comments" class="btn-primary" name="up_comment">
             </form>
         </div>
     </article>
 </section>

 <section class="bestseller">
     <article class="bestseller_section container">
         <div class="header__bestseller">
             <div>
                 <div class="title">
                     <h5>Best Sellers</h5>
                     <h3>Best Offers View</h3>
                 </div>
                 <div class="call__action">
                     <a class="btn" href="">Xem thêm</a>
                 </div>
             </div>
         </div>
         <div class="bestseller_pr">
             <?php
                foreach ($products_sold as $sp) {
                    if ($sp["Sale_Percents"] == null) {
                        echo '
                        <div class="item__pr">
                            <div class="img__pr">
                                <img src="assets\images/products/' . $sp["Image_SP"] . '" alt="">
                                <div class="btn__gr">
                                    <div class="cart__btn">
                                        <button class="bi-cart-fill"></button>
                                        <span>Thêm vào giỏ</span>
                                    </div>
                                    <div class="info__btn">
                                        <a href="index.php?mod=product&act=detail&id=' . $sp["ID_SP"] . '"><button class="bi-info-circle-fill"></button></a>
                                        <span>Xem chi tiết</span>
                                    </div>
                                    <div class="eye__btn">
                                        <button class="bi-eye-fill"></button>
                                        <span>Xem nhanh</span>
                                    </div>
                                </div>
                            </div>
                            <div class="info__pr">
                                <div class="detail__pr">
                                    <h3 class="name__pr"><a href="#">' . $sp["Name"] . '</a></h3>
                                    <div class="price__pr">
                                        <p class="price"><span>' . $sp["Price"] . '</span><span>đ</span></p>
                                    </div>
                                </div>
                                <div>
                                    <button class="btn__wishlist">
                                        <i class="bi bi-heart"></i>
                                        <i class="bi bi-heart-fill"></i>
                                    </button>
                                </div>
                            </div>
                        </div>';
                    } else {
                        $price = $sp["Price"] - ($sp["Price"] * $sp["Sale_Percents"] / 100);
                        echo '
                            <div class="item__pr">
                                <div class="img__pr">
                                    <img src="assets\images/products/' . $sp["Image_SP"] . '" alt="">
                                    <div class="btn__gr">
                                        <div class="cart__btn">
                                            <button class="bi-cart-fill"></button>
                                            <span>Thêm vào giỏ</span>
                                        </div>
                                        <div class="info__btn">
                                            <a href="index.php?mod=product&act=detail&id=' . $sp["ID_SP"] . '"><button class="bi-info-circle-fill"></button></a>
                                            <span>Xem chi tiết</span>
                                        </div>
                                        <div class="eye__btn">
                                            <button class="bi-eye-fill"></button>
                                            <span>Xem nhanh</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="info__pr">
                                    <div class="detail__pr">
                                        <h3 class="name__pr"><a href="#">' . $sp["Name"] . '</a></h3>
                                        <div class="price__pr">
                                            <p class="price"><span>' . $price . '</span><span>đ</span></p>
                                            <div class="discount__price">
                                                <p class="compare__price"><span>' . $sp["Price"] . '</span><span>đ</span></p>
                                                <span>' . $sp["Sale_Percents"] . '%</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <button class="btn__wishlist">
                                            <i class="bi bi-heart"></i>
                                            <i class="bi bi-heart-fill"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>';
                    }
                }
                ?>
         </div>
     </article>
 </section>
 <style>
     .contents,
     .del_cmt {
         display: block;
     }

     .change_cmt2,
     .cancel_cmt {
         display: none;
     }
 </style>

 <script>
     document.addEventListener("click", function(event) {
         var cmt = document.querySelectorAll(".change_cmt");
         cmt.forEach(element => {
             if (event.target == element) {
                 var form_input_contens_hidden = element.parentNode.parentNode.children[0].childNodes[5];
                 var contents = element.parentNode.parentNode.childNodes[1].children[1];
                 var btn_chinhsua = element.parentNode.children[1];
                 var btn_huychinhsua = element.parentNode.children[2];
                 var btn_luu = element.parentNode.children[3];
                 var btn_xoa = element.parentNode.children[4];
                 // Hiện Form Chỉnh Sửa
                 form_input_contens_hidden.type = 'text';
                 contents.style.display = 'none';
                 btn_luu.style.display = 'block';
                 btn_huychinhsua.style.display = 'block';
                 btn_chinhsua.style.display = 'none';
                 btn_xoa.style.display = 'none';
                 // Hủy Chỉnh Sửa
                 btn_huychinhsua.addEventListener("click", function(event) {
                     form_input_contens_hidden.type = 'hidden';
                     contents.style.display = 'block';
                     btn_luu.style.display = 'none';
                     btn_huychinhsua.style.display = 'none';
                     btn_chinhsua.style.display = 'block';
                     btn_xoa.style.display = 'block';
                 });
             }
         });
     });
 </script>