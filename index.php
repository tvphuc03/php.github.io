<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phụ Kiện Trang Trí Nội Thất</title>
    <link rel="stylesheet" href="./css/styles.css">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
</head>

<?php
include_once("./php/connect.php");
$sql = "select * from sanpham";
$result = $db->query($sql);
?>

<html>
<div id="top"></div>
<header>
    <marquee behavior="" direction="left" scrollamount="10">
        <p>Do Tình Hình Dịch Bệnh Hàng Của Quý Khách Đã Đặt có Thể Sẽ Đến Chậm Hơn Dự Kiến Mong Quý Khách Hàng Thông
            Cảm!</p>
    </marquee>
    <hr />
    <b>


        <ul class="h-menu">
            <a href="#"><img src="./images/logo/logo.png" alt=""></a>

            <li><a href="../pages/phongkhach.html">Phòng Khách</a>
                <ul class=" sub-menu">
                    <li><a href="#">Kệ TiVi</a></li>
                    <li><a href="#">Ghế Sofa</a></li>
                    <li><a href="#">Bàn</a></li>
                    <li><a href="#">kệ tủ</a></li>
                </ul>
            </li>
            <li><a href="./pages/phongan.html">Phòng ăn</a>
                <ul class="sub-menu">
                    <li><a href="#">Tủ Bếp</a></li>
                    <li><a href="#">Bàn Ghế Ăn</a></li>
                    <li><a href="#">Bồn Rửa</a></li>
                    <!-- <li><a href="#"></a></li>
                        <li><a href="#"></a></li> -->
                </ul>
            </li>
            <li><a href="./pages/phongngu.html">Phòng Ngủ</a>
                <ul class="sub-menu">
                    <li><a href="#">Giường Ngủ</a></li>
                    <li><a href="#">Tủ Quần Áo</a></li>
                    <li><a href="#">Phụ Kiện Trang Trí </a></li>
                    <li><a href="#">Kệ tủ</a></li>
                    <li><a href="#">Bàn Trang Điểm</a></li>
                </ul>
            </li>

            <li><a href="#">Giới Thiệu</a>
            </li>
            <li><a href="./pages/lienhe.html">Liên Hệ</a></li>
            <li><a href="./pages/dktk.html">Tài Khoản</a></li>
            <!-- <li><a href=""></a></li> -->
            <input type="text" placeholder=" Tìm Kiếm... ">


        </ul>
    </b>
</header>
<div class="banner">
    <!-- <img id="hinh" src="/images/tranvinhphuc_banner.jpg">
    <p onclick="nextleft()" id="left" class="nextleft"><i class='bx bx-chevron-left-circle'></i></p>
    <p onclick="nextright()" id="right" class="nextright"><i class='bx bx-chevron-right-circle'></i></p>
    <p class="vitri">
        <span id="dem"></span>
    </p> -->
    <div class="next"></div>
    <div class="contain-img">
        <img src="./images/slide/slide1.jpg">
        <img src="./images/slide/slide2.jpg">
        <img src="./images/slide/slide3.jpg">
        <img src="./images/slide/slide4.jpg">
        <img src="./images/slide/slide5.jpg">
        <img src="./images/slide/slide6.jpg">
        <img src="./images/slide/slide7.jpg">
        <img src="./images/slide/slide8.jpg">
        <img src="./images/slide/slide9.jpg">



    </div>
    <div class="prev"></div>
    <div class="img-cur-index">
        <div class="cur-index" id="1"></div>
        <div class="cur-index" id="2"></div>
        <div class="cur-index" id="3"></div>
        <div class="cur-index" id="4"></div>
        <div class="cur-index" id="5"></div>
        <div class="cur-index" id="6"></div>
        <div class="cur-index" id="7"></div>
        <div class="cur-index" id="8"></div>
        <div class="cur-index" id="9"></div>
    </div>
</div>
<div class="container">

    <aside class="menu-ngang">
        <div class="danhmuc">
            <h2>Danh Mục Sản Phẩm</h2>
            <ul>
                <li><a href="">Đèn treo tường</a></li>
                <li><a href="">Bình Hoa Trang Trí</a></li>
                <li><a href="">Bộ Trang Trí Theo Mùa</a></li>
                <li><a href="">Đồng Hồ</a></li>
                <li><a href="">Tác Phẩm Nghệ Thuật</a></li>
                <li><a href="">Bình Gỗ Mộc Trang Trí</a></li>
                <li><a href="">Gương Trang Trí</a></li>
                <li><a href="">Tranh Trang Trí</a></li>
                <li><a href="">Tiểu cảnh cây để bàn </a></li>
            </ul>
        </div>
        <div class="hotro">
            <h2>Hỗ Trợ Trực Tuyến</h2>
            <ul>
                <li><a href="">HOTLINE: 0358959353</a></li>
            </ul>
        </div>



    </aside>

    <?php
        while ($row = $result->fetch()) {
        ?>

    <article>
        <h2>Sản Phẩm </h2>
        <div class="boxsanpham1">
            <div class="sanpham">
                <div class="hinhanh"><img src="../images/ketivi4.jfif" alt=""></div>
                <div class="ten"> <span>Kệ tivi hiện đại</span></div>
                <div class="thongtin">

                    <div class="mua"><a href="#">Mua Ngay</a></div>
                    <div class="xemchitiet"><a href="#">Xem Chi Tiết</a></div>
                </div>
            </div>
            <div class="sanpham">
                <div class="hinhanh"><img src="../images/ketivi4.jfif" alt=""></div>
                <div class="ten"> <span>Kệ tivi hiện đại</span></div>
                <div class="thongtin">

                    <div class="mua"><a href="#">Mua Ngay</a></div>
                    <div class="xemchitiet"><a href="#">Xem Chi Tiết</a></div>
                </div>
            </div>
            <div class="sanpham">
                <div class="hinhanh"><img src="../images/ketivi4.jfif" alt=""></div>
                <div class="ten"> <span>Kệ tivi hiện đại</span></div>
                <div class="thongtin">

                    <div class="mua"><a href="#">Mua Ngay</a></div>
                    <div class="xemchitiet"><a href="#">Xem Chi Tiết</a></div>
                </div>
            </div>
            <div class="sanpham">
                <div class="hinhanh"><img src="../images/ketivi4.jfif" alt=""></div>
                <div class="ten"> <span>Kệ tivi hiện đại</span></div>
                <div class="thongtin">
                    <div class="mua"><a href="#">Mua Ngay</a></div>
                    <div class="xemchitiet"><a href="#">Xem Chi Tiết</a></div>
                </div>
            </div>
        </div>
        <h2>Sản Phẩm Nổi Bật</h2>
        <div class="boxsanpham2">
            <div class="sanphamlon">
                <div class="hinhanh"><img src="../images/ketivi4.jfif" alt=""></div>
                <div class="ten"> <span>Kệ tivi hiện đại</span></div>
                <div class="thongtin">

                    <div class="mua"><a href="#">Mua Ngay</a></div>
                    <div class="xemchitiet"><a href="#">Xem Chi Tiết</a></div>
                </div>
            </div>
            <div class="gop">
                <div class="sanpham">
                    <div class="hinhanh"><img src="../images/ketivi4.jfif" alt=""></div>
                    <div class="ten"> <span>Kệ tivi hiện đại</span></div>
                    <div class="thongtin">
                        <div class="mua"><a href="#">Mua Ngay</a></div>
                        <div class="xemchitiet"><a href="#">Xem Chi Tiết</a></div>
                    </div>
                </div>
                <div class="sanpham">
                    <div class="hinhanh"><img src="../images/ketivi4.jfif" alt=""></div>
                    <div class="ten"> <span>Kệ tivi hiện đại</span></div>
                    <div class="thongtin">
                        <div class="mua"><a href="#">Mua Ngay</a></div>
                        <div class="xemchitiet"><a href="#">Xem Chi Tiết</a></div>
                    </div>
                </div>
                <div class="sanpham">
                    <div class="hinhanh"><img src="../images/ketivi4.jfif" alt=""></div>
                    <div class="ten"> <span>Kệ tivi hiện đại</span></div>
                    <div class="thongtin">
                        <div class="mua"><a href="#">Mua Ngay</a></div>
                        <div class="xemchitiet"><a href="#">Xem Chi Tiết</a></div>
                    </div>
                </div>
                <div class="sanpham">
                    <div class="hinhanh"><img src="../images/ketivi4.jfif" alt=""></div>
                    <div class="ten"> <span>Kệ tivi hiện đại</span></div>
                    <div class="thongtin">
                        <div class="mua"><a href="#">Mua Ngay</a></div>
                        <div class="xemchitiet"><a href="#">Xem Chi Tiết</a></div>
                    </div>
                </div>
            </div>
        </div>

        <h2>Sản Phẩm Nổi Bật</h2>
        <div class="boxsanpham3">

            <div class="gop">
                <div class="sanpham">
                    <div class="hinhanh"><img src="../images/ketivi4.jfif" alt=""></div>
                    <div class="ten"> <span>Kệ tivi hiện đại</span></div>
                    <div class="thongtin">
                        <div class="mua"><a href="#">Mua Ngay</a></div>
                        <div class="xemchitiet"><a href="#">Xem Chi Tiết</a></div>
                    </div>
                </div>
                <div class="sanpham">
                    <div class="hinhanh"><img src="../images/ketivi4.jfif" alt=""></div>
                    <div class="ten"> <span>Kệ tivi hiện đại</span></div>
                    <div class="thongtin">
                        <div class="mua"><a href="#">Mua Ngay</a></div>
                        <div class="xemchitiet"><a href="#">Xem Chi Tiết</a></div>
                    </div>
                </div>
                <div class="sanpham">
                    <div class="hinhanh"><img src="../images/ketivi4.jfif" alt=""></div>
                    <div class="ten"> <span>Kệ tivi hiện đại</span></div>
                    <div class="thongtin">
                        <div class="mua"><a href="#">Mua Ngay</a></div>
                        <div class="xemchitiet"><a href="#">Xem Chi Tiết</a></div>
                    </div>
                </div>
                <div class="sanpham">
                    <div class="hinhanh"><img src="../images/ketivi4.jfif" alt=""></div>
                    <div class="ten"> <span>Kệ tivi hiện đại</span></div>
                    <div class="thongtin">
                        <div class="mua"><a href="#">Mua Ngay</a></div>
                        <div class="xemchitiet"><a href="#">Xem Chi Tiết</a></div>
                    </div>
                </div>
            </div>

            <div class="sanphamlon">
                <div class="hinhanh"><img src="../images/ketivi4.jfif" alt=""></div>
                <div class="ten"> <span>Kệ tivi hiện đại</span></div>
                <div class="thongtin">

                    <div class="mua"><a href="#">Mua Ngay</a></div>
                    <div class="xemchitiet"><a href="#">Xem Chi Tiết</a></div>
                </div>
            </div>

        </div>
        <h2>Xem Nhiều Nhất </h2>
        <div class="boxsanpham1">
            <div class="sanpham">
                <div class="hinhanh"><img src="../images/ketivi4.jfif" alt=""></div>
                <div class="ten"> <span>Kệ tivi hiện đại</span></div>
                <div class="thongtin">

                    <div class="mua"><a href="#">Mua Ngay</a></div>
                    <div class="xemchitiet"><a href="#">Xem Chi Tiết</a></div>
                </div>
            </div>
            <div class="sanpham">
                <div class="hinhanh"><img src="../images/ketivi4.jfif" alt=""></div>
                <div class="ten"> <span>Kệ tivi hiện đại</span></div>
                <div class="thongtin">

                    <div class="mua"><a href="#">Mua Ngay</a></div>
                    <div class="xemchitiet"><a href="#">Xem Chi Tiết</a></div>
                </div>
            </div>
            <div class="sanpham">
                <div class="hinhanh"><img src="../images/ketivi4.jfif" alt=""></div>
                <div class="ten"> <span>Kệ tivi hiện đại</span></div>
                <div class="thongtin">

                    <div class="mua"><a href="#">Mua Ngay</a></div>
                    <div class="xemchitiet"><a href="#">Xem Chi Tiết</a></div>
                </div>
            </div>
            <div class="sanpham">
                <div class="hinhanh"><img src="../images/ketivi4.jfif" alt=""></div>
                <div class="ten"> <span>Kệ tivi hiện đại</span></div>
                <div class="thongtin">
                    <div class="mua"><a href="#">Mua Ngay</a></div>
                    <div class="xemchitiet"><a href="#">Xem Chi Tiết</a></div>
                </div>
            </div>
        </div>

    </article>
    <?php }
        ?>
</div>






<div class="project">
    <div class="title">Công Trình Thực Tế </div>
    <div class="boxtintuc">
        <img src="./images/1tintuc.jpg" alt="">
        <div class="title">
            <a href="">Nội thất Biệt thự phong cách thiết kế cổ điển </a>
            <p>Ngôi biệt thự được thiết kế theo phong cách cổ điển giúp tôn lên vẻ sang trọng quý phái. </p>
        </div>
    </div>
    <div class="boxtintuc">
        <img src="./images/2tintuc.jpg" alt="">
        <div class="title">
            <a href="">Nội thất Biệt thự phong cách thiết kế cổ điển </a>
            <p>Ngôi biệt thự được thiết kế theo phong cách cổ điển giúp tôn lên vẻ sang trọng quý phái. </p>
        </div>
    </div>
    <div class="boxtintuc">
        <img src="./images/3tintuc.jpg" alt="">
        <div class="title">
            <a href="">Nội thất Biệt thự phong cách thiết kế cổ điển </a>
            <p>Ngôi biệt thự được thiết kế theo phong cách cổ điển giúp tôn lên vẻ sang trọng quý phái. </p>
        </div>
    </div>
    <div class="boxtintuc">
        <img src="./images/4tintuc.jpg" alt="">
        <div class="title">
            <a href="">Nội thất Biệt thự phong cách thiết kế cổ điển </a>
            <p>Ngôi biệt thự được thiết kế theo phong cách cổ điển giúp tôn lên vẻ sang trọng quý phái. </p>
        </div>
    </div>
    <!-- <div class="boxtintuc">
            <img src="../images/5tintuc.jpg" alt="">
            <div class="title">
                <a href="">nội thất Biệt thự phong cách thiết kế cổ điển </a>
                <p>Ngôi biệt thự được thiết kế theo phong cách cổ điển giúp tôn lên vẻ sang trọng quý phái. </p>
            </div>
        </div> -->
</div>
<div class="backtotop">
    <a href="#top"><i class='bx bx-chevron-up'></i></a>
</div>
<footer>
    <div class="box-footer">
        <div class="footer1">
            <h2>Liên Hệ</h2>
            <p>Tên:Trần Vĩnh Phúc</p>
            <p>ĐC:Tân Lập Đồng Phú Bình Phước</p>
            <p>SĐT:0358959353</p>
            <p><em>Gmail:phuctvps22224@fpt.edu.vn</em></p>
            <div class="mxh">
                <a href="https://www.facebook.com/tranvinhphuc.03"><i class='bx bxl-facebook-circle'></i></a>
                <a href="https://zalo.me/0358959353"><img src="./images/zalo.png" alt=""></a>
            </div>

        </div>
        <div class="footer2">
            <h2>Sản Phẩm</h2>
            <a href="">Phòng Khách</a>
            <a href="">Phòng Ngủ</a>
            <a href=""> Phòng ăn</a>
            <a href="">Sàn Gỗ </a>
            <a href="">Cửa gỗ</a>
        </div>

        <div class="footer3">
            <h2>Thời Gian Làm Việc</h2>
            <p>
                Chúng Tôi Hoạt Động Từ Thứ 2->Thứ 7 <br>
                Sáng: 7h30-11h30<br />
                Chiều: 13h30-17h30 <br />
                Tối: 18h30-23h30 <br />
                Chúng Tôi Luôn Sẵn Lòng Đón Tiếp Quý Khách Hàng
            </p>
        </div>
        <!-- <div class="footer4">4</div> -->
        <div class="footer5">Công Ty Trang Trí Nội THất Hàng Đầu Việt Nam</div>
    </div>
</footer>
</body>

</html>
<script src="./js/slide.js"></script>