  <!-- Section -->
  <section class="container hero__section">
      <!-- Home  Page -->
      <article class="banner">
          <div>
              <div>
                  <div>
                      <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                          <div class="carousel-indicators">
                              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                          </div>
                          <div class="carousel-inner">
                              <div class="carousel-item active">
                                  <img src="assets/images/banner-slider-1.png" class="d-block w-100" alt="...">
                                  <!-- <div class="carousel-caption d-none d-md-block">
                                        <h5>First slide label</h5>
                                        <p>Some representative placeholder content for the first slide.</p>
                                    </div> -->
                              </div>
                              <div class="carousel-item">
                                  <img src="assets/images/banner-slider-2.png" class="d-block w-100" alt="...">
                                  <!-- <div class="carousel-caption d-none d-md-block">
                                        <h5>Second slide label</h5>
                                        <p>Some representative placeholder content for the second slide.</p>
                                    </div> -->
                              </div>
                              <div class="carousel-item">
                                  <img src="assets/images/banner-slider-3.png" class="d-block w-100" alt="...">
                                  <!-- <div class="carousel-caption d-none d-md-block">
                                        <h5>Third slide label</h5>
                                        <p>Some representative placeholder content for the third slide.</p>
                                    </div> -->
                              </div>
                          </div>
                          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                              <span class="visually-hidden">Previous</span>
                          </button>
                          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                              <span class="carousel-control-next-icon" aria-hidden="true"></span>
                              <span class="visually-hidden">Next</span>
                          </button>
                      </div>
                  </div>
              </div>
              <div>
                  <div><img src="assets/images/banner-center-1.png" alt=""></div>
                  <div><img src="assets/images/banner-center-2.png" alt=""></div>
              </div>
              <div>
                  <div><img src="assets/images/vertical-banner.png" alt=""></div>
              </div>
          </div>
      </article>
      <article class="cate_section">
          <nav>
              <ul>
                  <li>
                      <div>
                          <a href="">
                              <div><img src="assets/images/icons8-tea-100.png" alt=""></div>
                          </a>
                          <p>Trà</p>
                      </div>
                      <div></div>
                  </li>
                  <li>
                      <div>
                          <a href="">
                              <div><img src="assets/images/icons8-iced-coffee-100.png" alt=""></div>
                          </a>
                          <p>Coffee</p>
                      </div>
                      <div></div>
                  </li>
                  <li>
                      <div>
                          <a href="">
                              <div><img src="assets/images/icons8-bubble-tea-100.png" alt=""></div>
                          </a>
                          <p>Trà sữa</p>
                      </div>
                      <div></div>
                  </li>
                  <li>
                      <div>
                          <a href="">
                              <div><img src="assets/images/icons8-orange-juice-100.png" alt=""></div>
                          </a>
                          <p>Nước ép</p>
                      </div>
                      <div></div>
                  </li>
                  <li>
                      <div>
                          <a href="">
                              <div><img src="assets/images/icons8-milkshake-100.png" alt=""></div>
                          </a>
                          <p>Đá xay</p>
                      </div>
                      <div></div>
                  </li>
                  <li>
                      <div>
                          <a href="">
                              <div><img src="assets/images/icons8-confectionery-100.png" alt=""></div>
                          </a>
                          <p>Bánh</p>
                      </div>
                      <div></div>
                  </li>
              </ul>
          </nav>
      </article>
  </section>
  <section class="promotion">
      <article class="container promotion__section">
          <div>
              <div>
                  <img src="assets/images/banner-pr-1.png" alt="">

              </div>
              <div>
                  <img src="assets/images/banner-pr-2.png" alt="">

              </div>
              <div>
                  <img src="assets/images/banner-pr-3.png" alt="">

              </div>
          </div>
          <div>
              <div>
                  <h4>Best Deals <span>of this Week!</span></h4>
                  <p>Những Khuyến Mãi Không Thể Bỏ Lỡ Tuần Này</p>
              </div>
              <div class="count__down">
                  <!-- Countdown timer for promotion -->
              </div>
          </div>
          <div class="item__hot__deal">
            <?php
                foreach ($products_best_deal as $sp) {
                    $price = $sp["Price"] - ($sp["Price"] * $sp["Sale_Percents"] / 100);
                    echo '
                        <div class="item__pr">
                            <div class="img__pr">
                                <img src="assets\images/products/'.$sp["Image_SP"].'" alt="">
                                <div class="btn__gr">
                                    <div class="cart__btn">
                                        <button class="bi-cart-fill"></button>
                                        <span>Thêm vào giỏ</span>
                                    </div>
                                    <div class="info__btn">
                                        <a href="index.php?mod=product&act=detail&id='.$sp["ID_SP"].'"><button class="bi-info-circle-fill"></button></a>
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
                                    <h3 class="name__pr"><a href="index.php?mod=product&act=detail&id='.$sp["ID_SP"].'">' . $sp["Name"] . '</a></h3>
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
                        </div>';}
            ?>
          </div>
      </article>
  </section>
  <section class="special">
      <article class="container special__section">
          <div class="header__special">
              <div>
                  <div class="title">
                      <h5>Awesome Shop</h5>
                      <h3>Our Special Products</h3>
                  </div>
                  <div class="call__action">
                      <a class="btn" href="">Xem thêm</a>
                  </div>
              </div>
          </div>
          <div class="special__pr">
              <div class="banner">
                  <img src="assets/images/vertical-banner-special.png" alt="">
              </div>
              <div class="products">
              <?php
                foreach ($products_view as $sp) {
                    if ($sp["Sale_Percents"] == null) {
                        echo '
                        <div class="item__pr">
                            <div class="img__pr">
                                <img src="assets\images/products/'.$sp["Image_SP"].'" alt="">
                                <div class="btn__gr">
                                    <div class="cart__btn">
                                        <button class="bi-cart-fill"></button>
                                        <span>Thêm vào giỏ</span>
                                    </div>
                                    <div class="info__btn">
                                        <a href="index.php?mod=product&act=detail&id='.$sp["ID_SP"].'"><button class="bi-info-circle-fill"></button></a>
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
                                    <h3 class="name__pr"><a href="index.php?mod=product&act=detail&id='.$sp["ID_SP"].'">' . $sp["Name"] . '</a></h3>
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
                    }else {
                        $price = $sp["Price"] - ($sp["Price"] * $sp["Sale_Percents"] / 100);
                        echo '
                            <div class="item__pr">
                                <div class="img__pr">
                                    <img src="assets\images/products/'.$sp["Image_SP"].'" alt="">
                                    <div class="btn__gr">
                                        <div class="cart__btn">
                                            <button class="bi-cart-fill"></button>
                                            <span>Thêm vào giỏ</span>
                                        </div>
                                        <div class="info__btn">
                                            <a href="index.php?mod=product&act=detail&id='.$sp["ID_SP"].'"><button class="bi-info-circle-fill"></button></a>
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
                            </div>';}}
                ?>
              </div>
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
                                <img src="assets\images/products/'.$sp["Image_SP"].'" alt="">
                                <div class="btn__gr">
                                    <div class="cart__btn">
                                        <button class="bi-cart-fill"></button>
                                        <span>Thêm vào giỏ</span>
                                    </div>
                                    <div class="info__btn">
                                        <a href="index.php?mod=product&act=detail&id='.$sp["ID_SP"].'"><button class="bi-info-circle-fill"></button></a>
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
                                    <h3 class="name__pr"><a href="index.php?mod=product&act=detail&id='.$sp["ID_SP"].'">' . $sp["Name"] . '</a></h3>
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
                    }else {
                        $price = $sp["Price"] - ($sp["Price"] * $sp["Sale_Percents"] / 100);
                        echo '
                            <div class="item__pr">
                                <div class="img__pr">
                                    <img src="assets\images/products/'.$sp["Image_SP"].'" alt="">
                                    <div class="btn__gr">
                                        <div class="cart__btn">
                                            <button class="bi-cart-fill"></button>
                                            <span>Thêm vào giỏ</span>
                                        </div>
                                        <div class="info__btn">
                                            <a href="index.php?mod=product&act=detail&id='.$sp["ID_SP"].'"><button class="bi-info-circle-fill"></button></a>
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
                            </div>';}}
                ?>
          </div>
      </article>
  </section>