   <!--Main section -->
   <section class="heading__page">
       <div class="container">
           <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
               <ol class="breadcrumb">
                   <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                   <li class="breadcrumb-item active" aria-current="page">Giỏ hàng (0)</li>
               </ol>
           </nav>
       </div>
   </section>
   <section class="cart__section">
       <article class="container">
           <h1>Giỏ hàng</h1>
           <div class="products__cart">
               <div>
                   <table class="table">
                       <thead>
                           <tr>
                               <th scope="col">#</th>
                               <th scope="col">Sản phẩm</th>
                               <th scope="col">Số lượng</th>
                               <th scope="col">Giá</th>
                               <th scope="col">Tùy chỉnh</th>
                           </tr>
                       </thead>
                       <form action="" method="post">
                           <tbody>
                               <?php
                                if (isset($_SESSION['Cart'])) {
                                    if (count($_SESSION['Cart']) > 0) {
                                        $i = 1;
                                        $total = 0;
                                        foreach ($_SESSION['Cart'] as $list_product) {
                                            $price = ($list_product['Price'] + ($list_product['Price'] * $list_product['Price_Size'] / 100)) * $list_product['Quantity'];
                                            echo '
                                            <tr>
                                                <th scope="row">' . $i . '</th>
                                                <td>
                                                    <div class="item__pr">
                                                        <div class="img__pr">
                                                            <img src="assets/images/products/' . $list_product['Image'] . '" alt="">
                                                            <input type="hidden" value="' . $list_product['Image'] . '" name="Image">
                                                        </div>
                                                        <div class="info__pr">
                                                            <div class="detail__pr">
                                                                <h3 class="name__pr"><a href="#">' . $list_product['Name'] . '</a></h3>
                                                                <input type="hidden" value="' . $list_product['Name'] . '" name="Name">
                                                                <div class="size__pr">
                                                                <input type="hidden" value="' . $list_product['Size'] . '" name="Size">
                                                                    <span>' . $list_product['Size'] . ' / ';
                                            if (strlen($list_product['TCT']) == 0 && strlen($list_product['TCS']) == 0) {
                                                echo ' Không Thêm + 0</span>';
                                                $Price_item = 0;
                                                echo '<input type="hidden" value="' . $Price_item . '" name="Price_item">';
                                            }
                                            if (strlen($list_product['TCT']) > 0 && strlen($list_product['TCS']) == 0) {
                                                echo '' . $list_product['TCT'] . ' + ' . $list_product['Price_TCT'] . '</span>';
                                                $Price_item = $list_product['Price_TCT'];
                                                echo '<input type="hidden" value="' . $Price_item . '" name="Price_item">';
                                            }
                                            if (strlen($list_product['TCT']) == 0 && strlen($list_product['TCS']) > 0) {
                                                echo '' . $list_product['TCS'] . ' + ' . $list_product['Price_TCS'] . '</span>';
                                                $Price_item = $list_product['Price_TCS'];
                                                echo '<input type="hidden" value="' . $Price_item . '" name="Price_item">';
                                            }
                                            if (strlen($list_product['TCT']) > 0 && strlen($list_product['TCS']) > 0) {
                                                $full_toping = intval($list_product['Price_TCT']) + intval($list_product['Price_TCS']);
                                                echo ' Full Toping + ' . $full_toping . '</span>';
                                                echo '<input type="hidden" value="' . $full_toping . '" name="Price_item">';
                                            }
                                            echo '
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="select__qty__pr">
                                                        <button onclick="adjustQuantity(this, -1)" type="button"><i
                                                                class="bi bi-dash-lg"></i></button>
                                                        <input type="number" value="' . $list_product['Quantity'] . '" name="Quantity" class="quantityInput">
                                                        <button onclick="adjustQuantity(this, 1)" type="button"><i class="bi bi-plus-lg"></i></button>
                                                    </div>
                                                </td>
                                                <td><span>' . $price . '</span><span>đ</span></td>
                                                <td><i class="bi bi-x-lg"></i></td>
                                            </tr>
                                        ';
                                            $i++;
                                            $total += $price;
                                        }
                                        echo '<input type="hidden" value="' . $total . '" name="total">';
                                    } else {
                                        echo '';
                                        $total = 0;
                                    }
                                }
                                ?>
                           </tbody>
                   </table>
                   <div>
                       <label for="exampleFormControlTextarea1" class="form-label">Ghi chú đơn hàng</label>
                       <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="note_deal"></textarea>
                   </div>
               </div>
               <div class="payment__detail">
                   <div>
                       <input class="form-check-input" type="checkbox" data-bs-toggle="collapse" value="" id="defaultCheck1" aria-controls="collapseExample" data-bs-target="#collapseExample">
                       <label class="form-check-label" for="defaultCheck1">
                           Xuất hóa đơn công ty
                       </label>
                       <div class="collapse" id="collapseExample">
                           <div class="mb-3">
                               <label for="formGroupExampleInput" class="form-label">Tên công ty</label>
                               <input type="text" class="form-control" placeholder="Nhập tên công ty" name="name_company">
                           </div>
                           <div class="mb-3">
                               <label for="formGroupExampleInput2" class="form-label">Mã số thuế</label>
                               <input type="number" class="form-control" placeholder="Nhập mã số thuế" name="MST_company">
                           </div>
                           <div class="mb-3">
                               <label for="exampleFormControlTextarea1" class="form-label">Địa chỉ công
                                   ty</label>
                               <textarea class="form-control" placeholder="Nhập địa chỉ công ty (bao gồm Phường/Xã, Quận/Huyện, Tỉnh/Thành phố nếu có)" rows="3" name="address_company"></textarea>
                           </div>
                           <div class="mb-3">
                               <label for="formGroupExampleInput" class="form-label">Email nhận hóa đơn</label>
                               <input type="text" class="form-control" placeholder="Nhập email" name="mail_company">
                           </div>
                       </div>
                   </div>
                   <div class="title__cart">
                       <div class="total__price">
                           <h3>Tổng cộng</h3>
                           <div><span>
                            <?php if($total){
                                echo '' . $total . '';
                                }else {
                               $total = 0;
                        }?>
                        </span><span>đ</span></div>
                       </div>
                       <div>
                           <p>(Đã bao gồm VAT nếu có)</p>
                       </div>
                   </div>
                   <div class="add__voucher">
                       <div><img src="assets//images/icons8-voucher-90.png" alt=""><span>Mã giảm giá</span></div>
                       <div class="offcanvas__voucher">
                           <button type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"><span>Chọn mã giảm giá</span><i class="bi bi-chevron-right"></i></button>
                           <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
                               <div class="offcanvas-header">
                                   <h5 class="offcanvas-title" id="offcanvasRightLabel">Mã giảm giá</h5>
                                   <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                               </div>
                               <div class="offcanvas-body">
                                   <?php
                                    foreach ($voucher as $vc) {
                                        echo 'Mã Voucher: ' . $vc['Voucher_Code'] . ' -- Ngày Hết Hạn: ' . $vc['Date_End'] . ' 
                                                <input type="hidden" value="' . $vc['Percents'] . '" name="Percent_Voucher">
                                                <button name="add_voucher">Add</button>
                                                    <br>';
                                    }
                                    ?>
                               </div>
                           </div>
                       </div>
                   </div>
                   <div>
                       <button class="btn btn-danger" name="thanhtoan">Thanh toán</button>
                   </div>
               </div>
               </form>
           </div>
       </article>
   </section>