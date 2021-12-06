<!doctype html>
<html class="no-js" lang="">
    
<!-- Mirrored from template.hasthemes.com/james/james/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 13 Nov 2021 01:45:48 GMT -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title> Home || James </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- favicon
        ============================================ -->
        <?php include_once './client/views/layouts/style.php'; ?>
    </head>
    <body>
        
        <header>
            <?php include_once './client/views/layouts/header.php'; ?>
        </header>
        <!-- header area end -->
        <!-- slider area start -->
        <div class="slider-area home1">
            <div class="bend niceties preview-2">
                <div id="nivoslider" class="slides">
                    <img src="<?= HOME ?>img/slider/slider-1.jpg" alt="" title="#slider-direction-1"  />
                    <img src="<?= HOME ?>img/slider/slider-2.jpg" alt="" title="#slider-direction-2"  />
                </div>
                <!-- direction 1 -->
                <div id="slider-direction-1" class="t-cn slider-direction">
                    <div class="slider-progress"></div>
                    <div class="slider-content t-lfl s-tb slider-1">
                        <div class="title-container s-tb-c title-compress">
                            <h1 class="title1">Sale products</h1>
                            <h2 class="title2" >nike Ari max 2015</h2>
                            <h3 class="title3" >Lorem Ipsum is simply dummy text of the printing</h3>
                            <a href="#"><span>read more</span></a>
                        </div>
                    </div>
                </div>
                <!-- direction 2 -->
                <div id="slider-direction-2" class="slider-direction">
                    <div class="slider-progress"></div>
                    <div class="slider-content t-lfl s-tb slider-2">
                        <div class="title-container s-tb-c">
                            <h1 class="title1">Sale products</h1>
                            <h2 class="title2" >GET UP TO 50% SALE</h2>
                            <h3 class="title3" >Lorem Ipsum is simply dummy text of the printing</h3>
                            <a href="#"><span>read more</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- slider area end -->
        <!-- banner area start -->
        <div class="banner-area">
            <div class="single-banner">
                <div class="part-1">
                    <div class="box-1 box">
                        <h4>nike ari max 2015</h4>
                        <h2>air superiority</h2>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        <a href="#">shopping now</a>
                    </div>
                    <div class="box-2">
                        <a href="#">
                            <img src="<?= HOME ?>img/banner/banner-2.jpg" alt="">
                        </a>
                    </div>
                </div>
                <div class="part-2">
                    <div class="search-box">
                        <form action="#">
                            <input type="text">
                            <button type="submit">
                                <i class="fa fa-search"></i>
                            </button>
                        </form>
                    </div>
                    <div class="box-3">
                        <a href="#">
                            <img src="<?= HOME ?>img/banner/banner-1.jpg" alt="">
                        </a>
                    </div>
                    <div class="box-4 box">
                        <h4>nike ari max 2015</h4>
                        <h2>air superiority</h2>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        <a href="#">shopping now</a>
                    </div>
                    <div class="box-5">
                        <a href="#">
                            <img src="<?= HOME ?>img/banner/banner-3.jpg" alt="">
                        </a>
                    </div>
                    <div class="box-6">
                        <a href="#">
                            <img src="<?= HOME ?>img/banner/banner-4.jpg" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- banner area end -->
        <!-- products area start -->
        <div class="products-area">
            <div class="container">
                <div class="products">
                    <div class="row">
                        <?php include_once './client/views/layouts/sidebar.php'; ?>
                        <?php include_once $view; ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- products area end -->
        <!-- feature products area start -->
        <div class="features-product-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-heading">
                            <h2>FEATURED PRODUCTS</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="feature-product-slider">
                        <div class="col-md-12">
                            <div class="single-product">
                                <div class="level-pro-new">
                                    <span>new</span>
                                </div>
                                <div class="product-img">
                                    <a href="single-product.html">
                                        <img src="<?= HOME ?>img/product/1.png" alt="" class="primary-img">
                                        <img src="<?= HOME ?>img/product/2.png" alt="" class="secondary-img">
                                    </a>
                                </div>
                                <div class="product-name">
                                    <a href="single-product.html" title="Fusce aliquam">Fusce aliquam</a>
                                </div>
                                <div class="price-rating">
                                    <span class="old-price">$700.00</span>
                                    <span>$800.00</span>
                                    <div class="ratings">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-half-o"></i>
                                    </div>
                                </div>
                                <div class="actions">
                                    <button type="submit" class="cart-btn" title="Add to cart">add to cart</button>
                                    <ul class="add-to-link">
                                        <li><a class="modal-view" data-target="#productModal" data-toggle="modal" href="#"> <i class="fa fa-search"></i></a></li>
                                        <li><a href="#"> <i class="fa fa-heart-o"></i></a></li>
                                        <li><a href="#"> <i class="fa fa-refresh"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="single-product">
                                <div class="level-pro-sale">
                                    <span>sale</span>
                                </div>
                                <div class="product-img">
                                    <a href="single-product.html">
                                        <img src="<?= HOME ?>img/product/7.png" alt="" class="primary-img">
                                        <img src="<?= HOME ?>img/product/8.png" alt="" class="secondary-img">
                                    </a>
                                </div>
                                <div class="product-name">
                                    <a href="single-product.html" title="Fusce aliquam">Fusce aliquam</a>
                                </div>
                                <div class="price-rating">
                                    <span class="old-price">$700.00</span>
                                    <span>$800.00</span>
                                    <div class="ratings">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-half-o"></i>
                                    </div>
                                </div>
                                <div class="actions">
                                    <button type="submit" class="cart-btn" title="Add to cart">add to cart</button>
                                    <ul class="add-to-link">
                                        <li><a class="modal-view" data-target="#productModal" data-toggle="modal" href="#"> <i class="fa fa-search"></i></a></li>
                                        <li><a href="#"> <i class="fa fa-heart-o"></i></a></li>
                                        <li><a href="#"> <i class="fa fa-refresh"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="single-product">
                                <div class="level-pro-sale">
                                    <span>sale</span>
                                </div>
                                <div class="product-img">
                                    <a href="single-product.html">
                                        <img src="<?= HOME ?>img/product/3.png" alt="" class="primary-img">
                                        <img src="<?= HOME ?>img/product/4.png" alt="" class="secondary-img">
                                    </a>
                                </div>
                                <div class="product-name">
                                    <a href="single-product.html" title="Fusce aliquam">Fusce aliquam</a>
                                </div>
                                <div class="price-rating">
                                    <span class="old-price">$700.00</span>
                                    <span>$800.00</span>
                                    <div class="ratings">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-half-o"></i>
                                    </div>
                                </div>
                                <div class="actions">
                                    <button type="submit" class="cart-btn" title="Add to cart">add to cart</button>
                                    <ul class="add-to-link">
                                        <li><a class="modal-view" data-target="#productModal" data-toggle="modal" href="#"> <i class="fa fa-search"></i></a></li>
                                        <li><a href="#"> <i class="fa fa-heart-o"></i></a></li>
                                        <li><a href="#"> <i class="fa fa-refresh"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="single-product">
                                <div class="level-pro-sale">
                                    <span>sale</span>
                                </div>
                                <div class="product-img">
                                    <a href="single-product.html">
                                        <img src="<?= HOME ?>img/product/9.png" alt="" class="primary-img">
                                        <img src="<?= HOME ?>img/product/10.png" alt="" class="secondary-img">
                                    </a>
                                </div>
                                <div class="product-name">
                                    <a href="single-product.html" title="Fusce aliquam">Fusce aliquam</a>
                                </div>
                                <div class="price-rating">
                                    <span class="old-price">$700.00</span>
                                    <span>$800.00</span>
                                    <div class="ratings">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-half-o"></i>
                                    </div>
                                </div>
                                <div class="actions">
                                    <button type="submit" class="cart-btn" title="Add to cart">add to cart</button>
                                    <ul class="add-to-link">
                                        <li><a class="modal-view" data-target="#productModal" data-toggle="modal" href="#"> <i class="fa fa-search"></i></a></li>
                                        <li><a href="#"> <i class="fa fa-heart-o"></i></a></li>
                                        <li><a href="#"> <i class="fa fa-refresh"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="single-product">
                                <div class="product-img">
                                    <a href="single-product.html">
                                        <img src="<?= HOME ?>img/product/5.png" alt="" class="primary-img">
                                        <img src="<?= HOME ?>img/product/6.png" alt="" class="secondary-img">
                                    </a>
                                </div>
                                <div class="product-name">
                                    <a href="single-product.html" title="Fusce aliquam">Fusce aliquam</a>
                                </div>
                                <div class="price-rating">
                                    <span class="old-price">$700.00</span>
                                    <span>$800.00</span>
                                    <div class="ratings">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-half-o"></i>
                                    </div>
                                </div>
                                <div class="actions">
                                    <button type="submit" class="cart-btn" title="Add to cart">add to cart</button>
                                    <ul class="add-to-link">
                                        <li><a class="modal-view" data-target="#productModal" data-toggle="modal" href="#"> <i class="fa fa-search"></i></a></li>
                                        <li><a href="#"> <i class="fa fa-heart-o"></i></a></li>
                                        <li><a href="#"> <i class="fa fa-refresh"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="single-product">
                                <div class="level-pro-new">
                                    <span>new</span>
                                </div>
                                <div class="product-img">
                                    <a href="single-product.html">
                                        <img src="<?= HOME ?>img/product/3.png" alt="" class="primary-img">
                                        <img src="<?= HOME ?>img/product/4.png" alt="" class="secondary-img">
                                    </a>
                                </div>
                                <div class="product-name">
                                    <a href="single-product.html" title="Fusce aliquam">Fusce aliquam</a>
                                </div>
                                <div class="price-rating">
                                    <span class="old-price">$700.00</span>
                                    <span>$800.00</span>
                                    <div class="ratings">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-half-o"></i>
                                    </div>
                                </div>
                                <div class="actions">
                                    <button type="submit" class="cart-btn" title="Add to cart">add to cart</button>
                                    <ul class="add-to-link">
                                        <li><a class="modal-view" data-target="#productModal" data-toggle="modal" href="#"> <i class="fa fa-search"></i></a></li>
                                        <li><a href="#"> <i class="fa fa-heart-o"></i></a></li>
                                        <li><a href="#"> <i class="fa fa-refresh"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="single-product">
                                <div class="level-pro-sale">
                                    <span>sale</span>
                                </div>
                                <div class="product-img">
                                    <a href="single-product.html">
                                        <img src="<?= HOME ?>img/product/19.png" alt="" class="primary-img">
                                        <img src="<?= HOME ?>img/product/20.png" alt="" class="secondary-img">
                                    </a>
                                </div>
                                <div class="product-name">
                                    <a href="single-product.html" title="Fusce aliquam">Fusce aliquam</a>
                                </div>
                                <div class="price-rating">
                                    <span class="old-price">$700.00</span>
                                    <span>$800.00</span>
                                    <div class="ratings">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-half-o"></i>
                                    </div>
                                </div>
                                <div class="actions">
                                    <button type="submit" class="cart-btn" title="Add to cart">add to cart</button>
                                    <ul class="add-to-link">
                                        <li><a class="modal-view" data-target="#productModal" data-toggle="modal" href="#"> <i class="fa fa-search"></i></a></li>
                                        <li><a href="#"> <i class="fa fa-heart-o"></i></a></li>
                                        <li><a href="#"> <i class="fa fa-refresh"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="single-product">
                                <div class="product-img">
                                    <a href="single-product.html">
                                        <img src="<?= HOME ?>img/product/13.png" alt="" class="primary-img">
                                        <img src="<?= HOME ?>img/product/14.png" alt="" class="secondary-img">
                                    </a>
                                </div>
                                <div class="product-name">
                                    <a href="single-product.html" title="Fusce aliquam">Fusce aliquam</a>
                                </div>
                                <div class="price-rating">
                                    <span class="old-price">$700.00</span>
                                    <span>$800.00</span>
                                    <div class="ratings">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-half-o"></i>
                                    </div>
                                </div>
                                <div class="actions">
                                    <button type="submit" class="cart-btn" title="Add to cart">add to cart</button>
                                    <ul class="add-to-link">
                                        <li><a class="modal-view" data-target="#productModal" data-toggle="modal" href="#"> <i class="fa fa-search"></i></a></li>
                                        <li><a href="#"> <i class="fa fa-heart-o"></i></a></li>
                                        <li><a href="#"> <i class="fa fa-refresh"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="single-product">
                                <div class="product-img">
                                    <a href="single-product.html">
                                        <img src="<?= HOME ?>img/product/15.png" alt="" class="primary-img">
                                        <img src="<?= HOME ?>img/product/16.png" alt="" class="secondary-img">
                                    </a>
                                </div>
                                <div class="product-name">
                                    <a href="single-product.html" title="Fusce aliquam">Fusce aliquam</a>
                                </div>
                                <div class="price-rating">
                                    <span class="old-price">$700.00</span>
                                    <span>$800.00</span>
                                    <div class="ratings">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-half-o"></i>
                                    </div>
                                </div>
                                <div class="actions">
                                    <button type="submit" class="cart-btn" title="Add to cart">add to cart</button>
                                    <ul class="add-to-link">
                                        <li><a class="modal-view" data-target="#productModal" data-toggle="modal" href="#"> <i class="fa fa-search"></i></a></li>
                                        <li><a href="#"> <i class="fa fa-heart-o"></i></a></li>
                                        <li><a href="#"> <i class="fa fa-refresh"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="single-product">
                                <div class="level-pro-new">
                                    <span>new</span>
                                </div>
                                <div class="product-img">
                                    <a href="single-product.html">
                                        <img src="<?= HOME ?>img/product/17.png" alt="" class="primary-img">
                                        <img src="<?= HOME ?>img/product/18.png" alt="" class="secondary-img">
                                    </a>
                                </div>
                                <div class="product-name">
                                    <a href="single-product.html" title="Fusce aliquam">Fusce aliquam</a>
                                </div>
                                <div class="price-rating">
                                    <span class="old-price">$700.00</span>
                                    <span>$800.00</span>
                                    <div class="ratings">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-half-o"></i>
                                    </div>
                                </div>
                                <div class="actions">
                                    <button type="submit" class="cart-btn" title="Add to cart">add to cart</button>
                                    <ul class="add-to-link">
                                        <li><a class="modal-view" data-target="#productModal" data-toggle="modal" href="#"> <i class="fa fa-search"></i></a></li>
                                        <li><a href="#"> <i class="fa fa-heart-o"></i></a></li>
                                        <li><a href="#"> <i class="fa fa-refresh"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- feature products area end -->
        
        <!-- new products area start -->
        <div class="new-products-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-heading">
                            <h2>NEW PRODUCTS</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="new-product-slider">
                        <div class="col-md-12">
                            <div class="single-product">
                                <div class="level-pro-new">
                                    <span>new</span>
                                </div>
                                <div class="product-img">
                                    <a href="single-product.html">
                                        <img src="<?= HOME ?>img/product/25.png" alt="" class="primary-img">
                                        <img src="<?= HOME ?>img/product/26.png" alt="" class="secondary-img">
                                    </a>
                                </div>
                                <div class="product-name">
                                    <a href="single-product.html" title="Fusce aliquam">Fusce aliquam</a>
                                </div>
                                <div class="price-rating">
                                    <span class="old-price">$700.00</span>
                                    <span>$800.00</span>
                                    <div class="ratings">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-half-o"></i>
                                    </div>
                                </div>
                                <div class="actions">
                                    <button type="submit" class="cart-btn" title="Add to cart">add to cart</button>
                                    <ul class="add-to-link">
                                        <li><a class="modal-view" data-target="#productModal" data-toggle="modal" href="#"> <i class="fa fa-search"></i></a></li>
                                        <li><a href="#"> <i class="fa fa-heart-o"></i></a></li>
                                        <li><a href="#"> <i class="fa fa-refresh"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="single-product">
                                <div class="level-pro-sale">
                                    <span>sale</span>
                                </div>
                                <div class="product-img">
                                    <a href="single-product.html">
                                        <img src="<?= HOME ?>img/product/3.png" alt="" class="primary-img">
                                        <img src="<?= HOME ?>img/product/4.png" alt="" class="secondary-img">
                                    </a>
                                </div>
                                <div class="product-name">
                                    <a href="single-product.html" title="Fusce aliquam">Fusce aliquam</a>
                                </div>
                                <div class="price-rating">
                                    <span class="old-price">$700.00</span>
                                    <span>$800.00</span>
                                    <div class="ratings">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-half-o"></i>
                                    </div>
                                </div>
                                <div class="actions">
                                    <button type="submit" class="cart-btn" title="Add to cart">add to cart</button>
                                    <ul class="add-to-link">
                                        <li><a class="modal-view" data-target="#productModal" data-toggle="modal" href="#"> <i class="fa fa-search"></i></a></li>
                                        <li><a href="#"> <i class="fa fa-heart-o"></i></a></li>
                                        <li><a href="#"> <i class="fa fa-refresh"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="single-product">
                                <div class="level-pro-sale">
                                    <span>sale</span>
                                </div>
                                <div class="product-img">
                                    <a href="single-product.html">
                                        <img src="<?= HOME ?>img/product/2.png" alt="" class="primary-img">
                                        <img src="<?= HOME ?>img/product/8.png" alt="" class="secondary-img">
                                    </a>
                                </div>
                                <div class="product-name">
                                    <a href="single-product.html" title="Fusce aliquam">Fusce aliquam</a>
                                </div>
                                <div class="price-rating">
                                    <span class="old-price">$700.00</span>
                                    <span>$800.00</span>
                                    <div class="ratings">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-half-o"></i>
                                    </div>
                                </div>
                                <div class="actions">
                                    <button type="submit" class="cart-btn" title="Add to cart">add to cart</button>
                                    <ul class="add-to-link">
                                        <li><a class="modal-view" data-target="#productModal" data-toggle="modal" href="#"> <i class="fa fa-search"></i></a></li>
                                        <li><a href="#"> <i class="fa fa-heart-o"></i></a></li>
                                        <li><a href="#"> <i class="fa fa-refresh"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="single-product">
                                <div class="level-pro-sale">
                                    <span>sale</span>
                                </div>
                                <div class="product-img">
                                    <a href="single-product.html">
                                        <img src="<?= HOME ?>img/product/1.png" alt="" class="primary-img">
                                        <img src="<?= HOME ?>img/product/2.png" alt="" class="secondary-img">
                                    </a>
                                </div>
                                <div class="product-name">
                                    <a href="single-product.html" title="Fusce aliquam">Fusce aliquam</a>
                                </div>
                                <div class="price-rating">
                                    <span class="old-price">$700.00</span>
                                    <span>$800.00</span>
                                    <div class="ratings">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-half-o"></i>
                                    </div>
                                </div>
                                <div class="actions">
                                    <button type="submit" class="cart-btn" title="Add to cart">add to cart</button>
                                    <ul class="add-to-link">
                                        <li><a class="modal-view" data-target="#productModal" data-toggle="modal" href="#"> <i class="fa fa-search"></i></a></li>
                                        <li><a href="#"> <i class="fa fa-heart-o"></i></a></li>
                                        <li><a href="#"> <i class="fa fa-refresh"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="single-product">
                                <div class="product-img">
                                    <a href="single-product.html">
                                        <img src="<?= HOME ?>img/product/17.png" alt="" class="primary-img">
                                        <img src="<?= HOME ?>img/product/18.png" alt="" class="secondary-img">
                                    </a>
                                </div>
                                <div class="product-name">
                                    <a href="single-product.html" title="Fusce aliquam">Fusce aliquam</a>
                                </div>
                                <div class="price-rating">
                                    <span class="old-price">$700.00</span>
                                    <span>$800.00</span>
                                    <div class="ratings">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-half-o"></i>
                                    </div>
                                </div>
                                <div class="actions">
                                    <button type="submit" class="cart-btn" title="Add to cart">add to cart</button>
                                    <ul class="add-to-link">
                                        <li><a class="modal-view" data-target="#productModal" data-toggle="modal" href="#"> <i class="fa fa-search"></i></a></li>
                                        <li><a href="#"> <i class="fa fa-heart-o"></i></a></li>
                                        <li><a href="#"> <i class="fa fa-refresh"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="single-product">
                                <div class="level-pro-new">
                                    <span>new</span>
                                </div>
                                <div class="product-img">
                                    <a href="single-product.html">
                                        <img src="<?= HOME ?>img/product/19.png" alt="" class="primary-img">
                                        <img src="<?= HOME ?>img/product/20.png" alt="" class="secondary-img">
                                    </a>
                                </div>
                                <div class="product-name">
                                    <a href="single-product.html" title="Fusce aliquam">Fusce aliquam</a>
                                </div>
                                <div class="price-rating">
                                    <span class="old-price">$700.00</span>
                                    <span>$800.00</span>
                                    <div class="ratings">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-half-o"></i>
                                    </div>
                                </div>
                                <div class="actions">
                                    <button type="submit" class="cart-btn" title="Add to cart">add to cart</button>
                                    <ul class="add-to-link">
                                        <li><a class="modal-view" data-target="#productModal" data-toggle="modal" href="#"> <i class="fa fa-search"></i></a></li>
                                        <li><a href="#"> <i class="fa fa-heart-o"></i></a></li>
                                        <li><a href="#"> <i class="fa fa-refresh"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="single-product">
                                <div class="level-pro-sale">
                                    <span>sale</span>
                                </div>
                                <div class="product-img">
                                    <a href="single-product.html">
                                        <img src="<?= HOME ?>img/product/21.png" alt="" class="primary-img">
                                        <img src="<?= HOME ?>img/product/22.png" alt="" class="secondary-img">
                                    </a>
                                </div>
                                <div class="product-name">
                                    <a href="single-product.html" title="Fusce aliquam">Fusce aliquam</a>
                                </div>
                                <div class="price-rating">
                                    <span class="old-price">$700.00</span>
                                    <span>$800.00</span>
                                    <div class="ratings">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-half-o"></i>
                                    </div>
                                </div>
                                <div class="actions">
                                    <button type="submit" class="cart-btn" title="Add to cart">add to cart</button>
                                    <ul class="add-to-link">
                                        <li><a class="modal-view" data-target="#productModal" data-toggle="modal" href="#"> <i class="fa fa-search"></i></a></li>
                                        <li><a href="#"> <i class="fa fa-heart-o"></i></a></li>
                                        <li><a href="#"> <i class="fa fa-refresh"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="single-product">
                                <div class="product-img">
                                    <a href="single-product.html">
                                        <img src="<?= HOME ?>img/product/23.png" alt="" class="primary-img">
                                        <img src="<?= HOME ?>img/product/24.png" alt="" class="secondary-img">
                                    </a>
                                </div>
                                <div class="product-name">
                                    <a href="single-product.html" title="Fusce aliquam">Fusce aliquam</a>
                                </div>
                                <div class="price-rating">
                                    <span class="old-price">$700.00</span>
                                    <span>$800.00</span>
                                    <div class="ratings">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-half-o"></i>
                                    </div>
                                </div>
                                <div class="actions">
                                    <button type="submit" class="cart-btn" title="Add to cart">add to cart</button>
                                    <ul class="add-to-link">
                                        <li><a class="modal-view" data-target="#productModal" data-toggle="modal" href="#"> <i class="fa fa-search"></i></a></li>
                                        <li><a href="#"> <i class="fa fa-heart-o"></i></a></li>
                                        <li><a href="#"> <i class="fa fa-refresh"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- new products area end -->
        <!-- testimonial area start -->
       
        <!-- testimonial area end -->
        <!-- blog area start -->
        
        <!-- blog area end -->
        <!-- newsleter area start -->
       
        <!-- newsleter area end -->
        <!-- footer top area start -->
        <div class="footer-top-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-4">
                        <div class="footer-contact">
                            <img src="<?= HOME ?>img/logo-white.png" alt="">
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt.</p>
                            <ul class="address">
                                <li>
                                    <span class="fa fa-fax"></span>
                                    (800) 123 456 789
                                </li>
                                <li>
                                    <span class="fa fa-phone"></span>
                                    (800) 123 456 789
                                </li>
                                <li>
                                    <span class="fa fa-envelope-o"></span>
                                    admin@bootexperts.com
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 hidden-sm">
                        <div class="footer-tweets">
                            <div class="footer-title">
                                <h3>Latest tweets</h3>
                            </div>
                            <div class="twitter-feed">
                                <div class="twitter-article">
                                    <div class="twitter-img">
                                        <a href="#">
                                            <img src="<?= HOME ?>img/twitter/twitter-1.png" alt="">
                                        </a>
                                    </div>
                                    <div class="twitter-text">
                                        <p>Raboda Fashion #Magento #Theme comes up with pure white and grey, which great show your products. Check it: </p>
                                        <a href="#">https://t.co/iu0OYBwti8</a>
                                        <div class="twitter-time">
                                            <a href="#">16h</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="twitter-article">
                                    <div class="twitter-img">
                                        <a href="#">
                                            <img src="<?= HOME ?>img/twitter/twitter-1.png" alt="">
                                        </a>
                                    </div>
                                    <div class="twitter-text">
                                        <p>Raboda Fashion #Magento #Theme comes up with pure white and grey, which great show your products. Check it: </p>
                                        <a href="#">https://t.co/iu0OYBwti8</a>
                                        <div class="twitter-time">
                                            <a href="#">16h</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4">
                        <div class="footer-support">
                            <div class="footer-title">
                                <h3>Our support</h3>
                            </div>
                            <div class="footer-menu">
                                <ul>
                                    <li><a href="#">Sitemap</a></li>
                                    <li><a href="#">Privacy Policy</a></li>
                                    <li><a href="#">Your Account</a></li>
                                    <li><a href="#">Advanced Search</a></li>
                                    <li><a href="contact.html">Contact Us</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4">
                        <div class="footer-info">
                            <div class="footer-title">
                                <h3>Our information</h3>
                            </div>
                            <div class="footer-menu">
                                <ul>
                                    <li><a href="about-us.html">About Us</a></li>
                                    <li><a href="#">Customer Service</a></li>
                                    <li><a href="#">Privacy Policy</a></li>
                                    <li><a href="#">Orders and Returns</a></li>
                                    <li><a href="#">Site Map</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- footer top area end -->
        <!-- footer area start -->
        <footer class="footer-area">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="footer-copyright">
                            <p>Copyright &copy; 2016 <a href="#"> Bootexperts</a>. All Rights Reserved</p>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="payment-icon">
                            <img src="<?= HOME ?>img/payment.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <a href="#" id="scrollUp"><i class="fa fa fa-arrow-up"></i></a>
        </footer>
        <!-- footer area end -->
        <!-- quickview product start -->
        <div id="quickview-wrapper">
            <!-- Modal -->
            <div class="modal fade" id="productModal" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        </div>
                        <div class="modal-body">
                            <div class="modal-product">
                                <div class="product-images">
                                    <div class="main-image images">
                                        <img alt="" src="<?= HOME ?>img/product/quick-view.jpg">
                                    </div>
                                </div>

                                <div class="product-info">
                                    <h1>Diam quis cursus</h1>
                                    <div class="price-box">
                                        <p class="price"><span class="special-price"><span class="amount">$132.00</span></span></p>
                                    </div>
                                    <a href="shop.html" class="see-all">See all features</a>
                                    <div class="quick-add-to-cart">
                                        <form method="post" class="cart">
                                            <div class="numbers-row">
                                                <input type="number" id="french-hens" value="3">
                                            </div>
                                            <button class="single_add_to_cart_button" type="submit">Add to cart</button>
                                        </form>
                                    </div>
                                    <div class="quick-desc">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Donec non est at libero vulputate rutrum. Morbi ornare lectus quis justo gravida semper. Nulla tellus mi, vulputate adipiscing cursus eu, suscipit id nulla.</p>
                                    </div>
                                    <div class="share-post">
                                        <div class="share-title">
                                            <h3>share this product</h3>
                                        </div>
                                        <div class="share-social">
                                            <ul>
                                                <li><a href="#"> <i class="fa fa-facebook"></i> </a></li>
                                                <li><a href="#"> <i class="fa fa-twitter"></i> </a></li>
                                                <li><a href="#"> <i class="fa fa-pinterest"></i> </a></li>
                                                <li><a href="#"> <i class="fa fa-google-plus"></i> </a></li>
                                                <li><a href="#"> <i class="fa fa-linkedin"></i> </a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- quickview product start -->

        <!-- jquery
        ============================================ -->
        <script src="<?= HOME ?>js/vendor/jquery-1.12.4.min.js"></script>
        <!-- bootstrap JS
        ============================================ -->
        <script src="<?= HOME ?>js/bootstrap.min.js"></script>
        <!-- wow JS
        ============================================ -->
        <script src="<?= HOME ?>js/wow.min.js"></script>
        <!-- price-slider JS
        ============================================ -->
        <script src="<?= HOME ?>js/jquery-price-slider.js"></script>
        <!-- nivoslider JS
        ============================================ -->
        <script src="<?= HOME ?>lib/js/jquery.nivo.slider.js"></script>
        <script src="<?= HOME ?>lib/home.js"></script>
        <!-- meanmenu JS
        ============================================ -->
        <script src="<?= HOME ?>js/jquery.meanmenu.js"></script>
        <!-- owl.carousel JS
        ============================================ -->
        <script src="<?= HOME ?>js/owl.carousel.min.js"></script>
        <!-- elevatezoom JS
        ============================================ -->
        <script src="<?= HOME ?>js/jquery.elevatezoom.js"></script>
        <!-- scrollUp JS
        ============================================ -->
        <script src="<?= HOME ?>js/jquery.scrollUp.min.js"></script>
        <!-- plugins JS
        ============================================ -->
        <script src="<?= HOME ?>js/plugins.js"></script>
        <!-- main JS
        ============================================ -->
        <script src="<?= HOME ?>js/main.js"></script>
    </body>

<!-- Mirrored from template.hasthemes.com/james/james/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 13 Nov 2021 01:45:53 GMT -->
</html>
