<?php get_header(); ?>
<!-- SLIDER -->
<div class="flexslider" id="slider">
    <ul class="slides">
        <li>
            <img src="<?= THEME_URI_PATH ?>images/slider.jpg" class="img-responsive" alt="Slider Image" />
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="detail">
                            <div class="white">
                                <h2>Biệt thự nghỉ dưỡng</h2>
                                <span class="slide-location">Trần Phú, Vũng Tàu</span>
                                <div class="bar"></div>
                                <span class="slide-price">1.525.000</span>
                            </div>
                            <div class="red">
                                <span class="gym">Diện tích: 322m2</span>
                                <span class="bath">5 Phòng tắm</span>
                                <span class="bed">4 Phòng ngủ</span>
                                <span class="gym">1 Gym</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </li>
        <li>
            <img src="<?= THEME_URI_PATH ?>images/slider.jpg" class="img-responsive" alt="Slider Image" />
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="detail">
                            <div class="white">
                                <h2>Căn hộ cao cấp</h2>
                                <span class="slide-location">Trần Phú, Vũng Tàu</span>
                                <div class="bar"></div>
                                <span class="slide-price">1.525.000</span>
                            </div>
                            <div class="red">
                                <span class="gym">Diện tích: 322m2</span>
                                <span class="bath">5 Phòng tắm</span>
                                <span class="bed">4 Phòng ngủ</span>
                                <span class="gym">1 Gym</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </li>
    </ul>
</div>
<!-- SLIDER -->

<!-- FILTER -->
<div class="container">
    <div class="filter">

        <select class="location">
            <option>Chọn khu vực</option>
            <option>Vũng Tầu</option>
            <option>Bà Rịa</option>
            <option>TP HCM</option>
        </select>

        <select class="cata">
            <option>Chọn danh mục</option>
            <option>Biệt thự</option>
            <option>Căn hộ</option>
            <option>Nhà đất</option>
        </select>

        <select class="type">
            <option>Loại</option>
            <option>Bán</option>
            <option>Cho thuê</option>
            <option>Mua</option>
        </select>
        <button type="button" class="btn"><i class="fa fa-search"></i>Tìm kiếm</button>

        <div class="range">
            <p>
                <label for="price">Giá</label>
                <span>$ <input type="text" id="price" ></span>
            </p>
            <div id="price-range"></div>
        </div>
    </div>
</div>
<!-- FILTER -->

<!-- ITEMS GRID -->
<div class="container main-block">
    <div class="row">
        <div class="main-item">
            <h2>Biệt thự</h2>
            <div class="line_1"></div>
            <div class="line_2"></div>
            <div class="line_3"></div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class="item">
                <figure>
                    <img src="<?= THEME_URI_PATH ?>images/items/1.png" alt="" class="img-responsive">
                    <span class="label sale">Bán</span>
                    <div class="overlay">
                        <a href="#" class="btn btn-detail">Chi tiết</a>
                    </div>
                </figure>
                <div class="item-header clearfix">
                    <h3><a href="#">Biệt thự nghỉ dưỡng</a></h3>
                </div>
            </div>
        </div>

        <div class="col-md-4 col-sm-6">
            <div class="item">
                <figure>
                    <img src="<?= THEME_URI_PATH ?>images/items/2.png" alt="" class="img-responsive">
                    <span class="label rent">Cho thuê</span>
                    <div class="overlay">
                        <a href="#" class="btn btn-detail">Chi tiết</a>
                    </div>
                </figure>
                <div class="item-header clearfix">
                    <h3><a href="#">Biệt thự biên</a></h3>
                </div>
            </div>
        </div>

        <div class="col-md-4 col-sm-6">
            <div class="item">
                <figure>
                    <img src="<?= THEME_URI_PATH ?>images/items/3.png" alt="" class="img-responsive">
                    <span class="label rent">Cho thuê</span>
                    <div class="overlay">
                        <a href="#" class="btn btn-detail">Chi tiết</a>
                    </div>
                </figure>
                <div class="item-header clearfix">
                    <h3><a href="#">Biệt thự đôi</a></h3>
                </div>
            </div>
        </div>

        <div class="col-md-4 col-sm-6">
            <div class="item">
                <figure>
                    <img src="<?= THEME_URI_PATH ?>images/items/3.png" alt="" class="img-responsive">
                    <span class="label hot">Hot</span>
                    <div class="overlay">
                        <a href="#" class="btn btn-detail">Chi tiết</a>
                    </div>
                </figure>
                <div class="item-header clearfix">
                    <h3><a href="#">Biệt thự nội ô</a></h3>
                </div>
            </div>
        </div>

        <div class="col-md-4 col-sm-6">
            <div class="item">
                <figure>
                    <img src="<?= THEME_URI_PATH ?>images/items/3.png" alt="" class="img-responsive">
                    <span class="label rent">Cho thuê</span>
                    <div class="overlay">
                        <a href="#" class="btn btn-detail">Chi tiết</a>
                    </div>
                </figure>
                <div class="item-header clearfix">
                    <h3><a href="#">Biệt thự ngoại ô</a></h3>
                </div>
            </div>
        </div>

        <div class="col-md-4 col-sm-6">
            <div class="item">
                <figure>
                    <img src="<?= THEME_URI_PATH ?>images/items/3.png" alt="" class="img-responsive">
                    <span class="label rent">Bán</span>
                    <div class="overlay">
                        <a href="#" class="btn btn-detail">Chi tiết</a>
                    </div>
                </figure>
                <div class="item-header clearfix">
                    <h3><a href="#">PentHouse</a></h3>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- ITEMS GRID -->

<!-- ITEMS GRID -->
<div class="container main-block">
    <div class="row">
        <div class="main-item">
            <h2>Căn hộ</h2>
            <div class="line_1"></div>
            <div class="line_2"></div>
            <div class="line_3"></div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class="item">
                <figure>
                    <img src="<?= THEME_URI_PATH ?>images/items/1.png" alt="" class="img-responsive">
                    <span class="label sale">Bán</span>
                    <div class="overlay">
                        <a href="#" class="btn btn-detail">Chi tiết</a>
                    </div>
                </figure>
                <div class="item-header clearfix">
                    <h3><a href="#">Căn hộ biên</a></h3>
                </div>
            </div>
        </div>

        <div class="col-md-4 col-sm-6">
            <div class="item">
                <figure>
                    <img src="<?= THEME_URI_PATH ?>images/items/2.png" alt="" class="img-responsive">
                    <span class="label rent">Cho thuê</span>
                    <div class="overlay">
                        <a href="#" class="btn btn-detail">Chi tiết</a>
                    </div>
                </figure>
                <div class="item-header clearfix">
                    <h3><a href="#">Căn hộ cao cấp</a></h3>
                </div>
            </div>
        </div>

        <div class="col-md-4 col-sm-6">
            <div class="item">
                <figure>
                    <img src="<?= THEME_URI_PATH ?>images/items/3.png" alt="" class="img-responsive">
                    <span class="label rent">Cho thuê</span>
                    <div class="overlay">
                        <a href="#" class="btn btn-detail">Chi tiết</a>
                    </div>
                </figure>
                <div class="item-header clearfix">
                    <h3><a href="#">Căn hộ thường</a></h3>
                </div>
            </div>
        </div>

        <div class="col-md-4 col-sm-6">
            <div class="item">
                <figure>
                    <img src="<?= THEME_URI_PATH ?>images/items/3.png" alt="" class="img-responsive">
                    <span class="label hot">Hot</span>
                    <div class="overlay">
                        <a href="#" class="btn btn-detail">Chi tiết</a>
                    </div>
                </figure>
                <div class="item-header clearfix">
                    <h3><a href="#">Căn hộ dịch vụ</a></h3>
                </div>
            </div>
        </div>

        <div class="col-md-4 col-sm-6">
            <div class="item">
                <figure>
                    <img src="<?= THEME_URI_PATH ?>images/items/3.png" alt="" class="img-responsive">
                    <span class="label rent">Cho thuê</span>
                    <div class="overlay">
                        <a href="#" class="btn btn-detail">Chi tiết</a>
                    </div>
                </figure>
                <div class="item-header clearfix">
                    <h3><a href="#">Căn hộ thu nhập thấp</a></h3>
                </div>
            </div>
        </div>

        <div class="col-md-4 col-sm-6">
            <div class="item">
                <figure>
                    <img src="<?= THEME_URI_PATH ?>images/items/3.png" alt="" class="img-responsive">
                    <span class="label rent">Bán</span>
                    <div class="overlay">
                        <a href="#" class="btn btn-detail">Chi tiết</a>
                    </div>
                </figure>
                <div class="item-header clearfix">
                    <h3><a href="#">Căn hộ khác</a></h3>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ITEMS GRID -->

<!-- ITEMS GRID -->
<div class="container main-block">
    <div class="row">
        <div class="main-item">
            <h2>Đất nền</h2>
            <div class="line_1"></div>
            <div class="line_2"></div>
            <div class="line_3"></div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class="item">
                <figure>
                    <img src="<?= THEME_URI_PATH ?>images/items/1.png" alt="" class="img-responsive">
                    <span class="label sale">Bán</span>
                    <div class="overlay">
                        <a href="#" class="btn btn-detail">Chi tiết</a>
                    </div>
                </figure>
                <div class="item-header clearfix">
                    <h3><a href="#">Đất dự án</a></h3>
                </div>
            </div>
        </div>

        <div class="col-md-4 col-sm-6">
            <div class="item">
                <figure>
                    <img src="<?= THEME_URI_PATH ?>images/items/2.png" alt="" class="img-responsive">
                    <span class="label rent">Cho thuê</span>
                    <div class="overlay">
                        <a href="#" class="btn btn-detail">Chi tiết</a>
                    </div>
                </figure>
                <div class="item-header clearfix">
                    <h3><a href="#">Đất khu dân cư</a></h3>
                </div>
            </div>
        </div>

        <div class="col-md-4 col-sm-6">
            <div class="item">
                <figure>
                    <img src="<?= THEME_URI_PATH ?>images/items/3.png" alt="" class="img-responsive">
                    <span class="label rent">Cho thuê</span>
                    <div class="overlay">
                        <a href="#" class="btn btn-detail">Chi tiết</a>
                    </div>
                </figure>
                <div class="item-header clearfix">
                    <h3><a href="#">Đất biệt thự</a></h3>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ITEMS GRID -->
<!-- CALL2ACTION -->
<div class="full-width call-action">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <h4>Want to sell you property? contact us now!</h4>
            </div>
            <div class="col-md-3">
                <a href="contact.html" class="btn btn-danger">Liên hệ</a>
            </div>
        </div>
    </div>
</div>
<!-- CALL2ACTION -->
<?php get_footer(); ?>
