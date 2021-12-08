<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Nail KoKo - Sắc Đẹp Phái Nữ</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free Website Template" name="keywords">
    <meta content="Free Website Template" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap"
        rel="stylesheet">

    <!-- CSS Libraries -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Top Bar Start -->
    <div class="top-bar d-none d-md-block">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <div class="top-bar-left">
                        <div class="text">
                            <h2>9:00 - 21:00</h2>
                            <p>Mở cửa: Thứ 2 - Chủ Nhật</p>
                        </div>
                        <div class="text">
                            <h2>0374825925</h2>
                            <p>Liên hệ</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="top-bar-right">
                        <div class="social">
                            <a href="../dangnhap.php"><img src="img/m.png" alt=""></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Top Bar End -->

    <!-- Nav Bar Start -->
    <div class="navbar navbar-expand-lg bg-dark navbar-dark">
        <div class="container-fluid">
            <a href="index.html" class="navbar-brand">Nail <span>KoKo</span></a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="navbar-nav ml-auto">
                    <a href="trangchu.php" class="nav-item nav-link active">Trang chủ</a>
                    <a href="dichvu.php" class="nav-item nav-link">Dịch vụ</a>
                    <a href="nhanvien.php" class="nav-item nav-link">Nhân viên</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Nav Bar End -->


    <!-- Hero Start -->
    <nav>

        <section id="anh">
            <script>
                var i = 0;
                var images = [];
                var time = 2000;
                images[0] = 'img/bn1.jpg';
                images[1] = 'img/bn2.jpg';
                images[2] = 'img/bn3.jpg';

                function changeImages() {
                    document.slide.src = images[i];
                    if (i < images.length - 1) {
                        i++;
                    } else {
                        i = 0;
                    }
                    setTimeout("changeImages()", time);
                    // body...
                }
                window.onload = changeImages;
            </script>
            <img name="slide">
        </section>

        <section id="tong">
            <form action="">
                <fieldset>
                    <section id="nailkoko">Đặt Lịch Ngay Tại Nail KoKo</section>

                    <input class="ten" name="Họ & Tên" type="text" placeholder="Họ & Tên" /><br>
                    <input class="sdt" name="sdt" type="number" placeholder="Số Điện Thoại" /><br>
                    
                    <input class="ngay" type="day" placeholder="Ngày làm nail"><br>
                    <input class="gio" type="time" placeholder="Thời Gian"><br>
                    <input class="nv" list="nhanvien" name="nhân viên" type="text" placeholder="Nhân Viên" />
                    <datalist id="nhanvien">
                        <option value="Linh Phạm">
                        <option value="Tuyết Nguyễn">
                        <option value="Trang Trần">
                        <option value="Hạnh Lê">
                        <option value="Khác">
                    </datalist><br>

                    <input class="dv" list="dichvu" name="dịch vụ" type="text" placeholder="Dịch Vụ" />
                    <datalist id="dichvu">
                        <option value="Sơn Gel">
                        <option value="Vẽ Gel">
                        <option value="Đính Đá">
                        <option value="Khác">
                    </datalist><br>
                    <button class="nut">Đặt Lịch</button>
        </section>
    </nav>
    <!-- Hero End -->




    <!-- Service Start -->
    <div class="service">
        <div class="container">
            <div class="section-header text-center">
                <p>Dịch vụ tại Nail KoKo</p>
                <h2>Các Dịch Vụ Được Khách Hàng Yêu Thích</h2>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="service-item">
                        <div class="service-img">
                            <img src="img/nail3.jpg" alt="Image">
                        </div>
                        <h3>Đính Đá</h3>
                        <p class="uudai">
                            <a href="">Ưu đãi đặt sớm trước: Giảm 10%/khách</a>
                        </p>
                        <h5 class="gia">30.000đ/viên</h5>
                        <a class="btn" href="">Đặt Lịch</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-item">
                        <div class="service-img">
                            <img src="img/nail8.jpg" alt="Image">
                        </div>
                        <h3>Fill Gel</h3>
                        <p class="uudai">
                            <a href="">Ưu đãi đặt sớm trước: Giảm 10%/khách</a>
                        </p>
                        <h5 class="gia">200.000đ/bộ</h5>
                        <a class="btn" href="">Đặt Lịch</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-item">
                        <div class="service-img">
                            <img src="img/nail6.jpg" alt="Image">
                        </div>
                        <h3>Nối Móng, Đắp Gel</h3>
                        <p class="uudai">
                            <a href="">Ưu đãi đặt sớm trước: Giảm 10%/khách</a>
                        </p>
                        <h5 class="gia">350.000đ/bộ</h5>
                        <a class="btn" href="">Đặt Lịch</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- Pricing Start -->
    <div class="price">
        <div class="container">
            <div class="section-header text-center">
                <p>Bảng Giá Tại Nail KoKo</p>
                <h2>Giá Tốt Cho Khách Hàng</h2>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="price-item">
                        <div class="price-img">
                            <img src="img/p1.jpg" alt="Image">
                        </div>
                        <div class="price-text">
                            <h2>Sửa Móng</h2>
                            <h3>50.000đ</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="price-item">
                        <div class="price-img">
                            <img src="img/p2.jpg" alt="Image">
                        </div>
                        <div class="price-text">
                            <h2>Sơn Gel</h2>
                            <h3>70.000đ</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="price-item">
                        <div class="price-img">
                            <img src="img/p3.jpg" alt="Image">
                        </div>
                        <div class="price-text">
                            <h2>Sơn Gel Nhũ</h2>
                            <h3>10.000đ</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="price-item">
                        <div class="price-img">
                            <img src="img/p4.jpg" alt="Image">
                        </div>
                        <div class="price-text">
                            <h2>Móng Giả</h2>
                            <h3>100.000đ</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="price-item">
                        <div class="price-img">
                            <img src="img/p5.jpg" alt="Image">
                        </div>
                        <div class="price-text">
                            <h2>Vẽ</h2>
                            <h3>20.000đ/ngón</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="price-item">
                        <div class="price-img">
                            <img src="img/p6.jpg" alt="Image">
                        </div>
                        <div class="price-text">
                            <h2>Ombre + Vân đá</h2>
                            <h3>15.000đ/ngón</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="price-item">
                        <div class="price-img">
                            <img src="img/p7.jpg" alt="Image">
                        </div>
                        <div class="price-text">
                            <h2>Đính Đá</h2>
                            <h3>30.000đ/viên</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="price-item">
                        <div class="price-img">
                            <img src="img/p8.jpg" alt="Image">
                        </div>
                        <div class="price-text">
                            <h2>Đính Hình + Charm</h2>
                            <h3>25.000đ/viên</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="price-item">
                        <div class="price-img">
                            <img src="img/p9.jpg" alt="Image">
                        </div>
                        <div class="price-text">
                            <h2>Hoa Bột</h2>
                            <h3>30.000đ/bông</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="price-item">
                        <div class="price-img">
                            <img src="img/p10.jpg" alt="Image">
                        </div>
                        <div class="price-text">
                            <h2>Nhũ Xà Cừ</h2>
                            <h3>20.000đ/ngón</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="price-item">
                        <div class="price-img">
                            <img src="img/p11.jpg" alt="Image">
                        </div>
                        <div class="price-text">
                            <h2>Sửa Móng</h2>
                            <h3>30.000đ</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="price-item">
                        <div class="price-img">
                            <img src="img/p12.jpg" alt="Image">
                        </div>
                        <div class="price-text">
                            <h2>Cẩm Thạch</h2>
                            <h3>20.000đ/ngón</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pricing End -->





    <!-- Team Start -->
    <div class="team">
        <div class="container">
            <div class="section-header text-center">
                <p>Nhân Viên Nail KoKo</p>
                <h4>Đặt Lịch Để Gặp Gỡ Những Nhân Viên Chuyên Nghiệp Của Chúng Tôi</h4>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="img/nv1.jpg" alt="Team Image">
                        </div>
                        <div class="team-text">
                            <h2>Linh Phạm</h2>
                            <p>Sơn Gel</p>
                        </div>
                        <div>
                            <a class="btn" href="">Đặt Lịch</a>
                        </div>
                    </div>

                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="img/nv2.jpg" alt="Team Image">
                        </div>
                        <div class="team-text">
                            <h2>Tuyết Trần</h2>
                            <p>Đính Kim Tuyến</p>
                        </div>
                        <div>
                            <a class="btn" href="">Đặt Lịch</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="img/nv3.jpg" alt="Team Image">
                        </div>
                        <div class="team-text">
                            <h2>Trang Trần</h2>
                            <p>Vẽ Flat 3D cao cấp</p>
                        </div>
                        <div>
                            <a class="btn" href="">Đặt Lịch</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="img/nv4.jpg" alt="Team Image">
                        </div>
                        <div class="team-text">
                            <h2>Hạnh Lê</h2>
                            <p>Chăm sóc móng</p>
                        </div>
                        <div>
                            <a class="btn" href="">Đặt Lịch</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->



    <!-- Blog Start -->
    <div class="blog">
        <div class="container">
            <div class="section-header text-center">
                <p>Blog Nail KoKo</p>
                <h2>Các bài viết</h2>
            </div>
            <div class="owl-carousel blog-carousel">
                <div class="blog-item">
                    <div class="blog-img">
                        <img src="img/nail7.jpg" alt="Blog">
                    </div>
                    <div class="blog-meta">
                        <i class="fa fa-list-alt"></i>
                        <a href="">Sơn Gel</a>
                        <i class="fa fa-calendar-alt"></i>
                        <p>01-Jan-2045</p>
                    </div>
                    <div class="blog-text">
                        <h2>Nhung Nguyễn</h2>
                        <p>

                        </p>
                        <a class="btn" href="">Đọc Thêm <i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
                <div class="blog-item">
                    <div class="blog-img">
                        <img src="img/nail1.jpg" alt="Blog">
                    </div>
                    <div class="blog-meta">
                        <i class="fa fa-list-alt"></i>
                        <a href="">Vẽ Gel</a>
                        <i class="fa fa-calendar-alt"></i>
                        <p>01-Jan-2045</p>
                    </div>
                    <div class="blog-text">
                        <h2>Trang Phạm</h2>
                        <p>

                        </p>
                        <a class="btn" href="">Đọc Thêm <i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
                <div class="blog-item">
                    <div class="blog-img">
                        <img src="img/nail3.jpg" alt="Blog">
                    </div>
                    <div class="blog-meta">
                        <i class="fa fa-list-alt"></i>
                        <a href="">Đính Đá</a>
                        <i class="fa fa-calendar-alt"></i>
                        <p>01-Jan-2045</p>
                    </div>
                    <div class="blog-text">
                        <h2>Jun Phạm</h2>
                        <p>

                        </p>
                        <a class="btn" href="">Đọc Thêm <i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
                <div class="blog-item">
                    <div class="blog-img">
                        <img src="img/nail4.jpg" alt="Blog">
                    </div>
                    <div class="blog-meta">
                        <i class="fa fa-list-alt"></i>
                        <a href="">Sửa Móng</a>
                        <i class="fa fa-calendar-alt"></i>
                        <p>01-Jan-2045</p>
                    </div>
                    <div class="blog-text">
                        <h2>Dịu Đào</h2>
                        <p>

                        </p>
                        <a class="btn" href="">Đọc Thêm<i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
                <div class="blog-item">
                    <div class="blog-img">
                        <img src="img/nail5.jpg" alt="Blog">
                    </div>
                    <div class="blog-meta">
                        <i class="fa fa-list-alt"></i>
                        <a href="">Vẽ Móng</a>
                        <i class="fa fa-calendar-alt"></i>
                        <p>01-Jan-2045</p>
                    </div>
                    <div class="blog-text">
                        <h2>My Mèo</h2>
                        <p>

                        </p>
                        <a class="btn" href="">Đọc Thêm <i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
                <div class="blog-item">
                    <div class="blog-img">
                        <img src="img/nail6.jpg" alt="Blog">
                    </div>
                    <div class="blog-meta">
                        <i class="fa fa-list-alt"></i>
                        <a href="">Chăm sóc</a>
                        <i class="fa fa-calendar-alt"></i>
                        <p>01-Jan-2045</p>
                    </div>
                    <div class="blog-text">
                        <h2>Nguyệt Moon</h2>
                        <p>

                        </p>
                        <a class="btn" href="">Đọc Thêm <i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- Footer Start -->
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="footer-contact">
                                <h2>Địa Chỉ</h2>
                                <p><i class="fa fa-map-marker-alt"></i>123 Cầu Giấy - Hà Nội</p>
                                <div class="footer-social">
                                    <a href=""><i class="fab fa-twitter"></i></a>
                                    <a href=""><i class="fab fa-facebook-f"></i></a>
                                    <a href=""><i class="fab fa-youtube"></i></a>
                                    <a href=""><i class="fab fa-instagram"></i></a>
                                    <a href=""><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="footer-link">
                                <h2>Liên Hệ</h2>
                                <a href="">0374825925</a>
                                <a href="">abc@gmail.com</a>
                                <a href="">facebook/nailkoko</a>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="footer-newsletter">
                        <h2>Phản Hồi</h2>
                        <p>
                            Hãy để lại những đánh giá của bạn về dịch vụ tại Nail KoKo.
                        </p>
                        <div class="form">
                            <input class="form-control" placeholder="Đánh giá">
                            <button class="btn">Gửi</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container copyright">
            <div class="row">
                <div class="col-md-6">
                    <p>&copy; <a href="#">NailKoKo.com</a></p>
                </div>
                <div class="col-md-6">
                    <p> <a href="https://htmlcodex.com">Nail KoKo</a></p>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->

    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>