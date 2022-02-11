<?php
include ('duchoang_config/config.php');
include ('duchoang_config/header.php');
?>
<!--- Tiêu Đề --->
<title>Gói Sản Phẩm | <?php echo $duchoang_title; ?> - <?php echo $duchoang_name; ?></title>
  <?php
  if(!$_SESSION['user']){
  ?>
<div class="page-content">
    <div class="container">
        <img src="<?php echo $duchoang_banner; ?>" width="100%" alt="nạp thẻ play together">
        <div class="content-area card col-12">
            <div class="card-innr">
                <p><b><span style="color: #1c8eff;">Play Together – Topup Center</span></b></p>
                <p><b>Play Together – Gặp Gỡ Bạn Bè Khắp Năm Châu</b> - Vũ Trụ Ảo Với Những Người Bạn Trên Toàn Thế Giới Đã Đến - <b>Play Together</b> Sẽ Hiện Thực Hóa Ước Mơ Của Bạn, Giúp Bạn Thỏa Sức Giải Trí, Tham Gia Những Chuyến Đi Đặc Biệt, Đồng Thời Gặp Gỡ Những Người Bạn Mới Từ Khắp Nơi Trên Thế Giới.</p>
        <ul class="nav nav-tabs nav-tabs-line" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active show" data-toggle="tab" href="#nap-the-play-together"><span class="pay-title"><span class="pay-cur">Chọn Gói</span></span></a>
                    </li>
                </ul>
                <div class="row" style="margin-top: 10px;">
                                    <div class="col-md-12">
                                        <div class="alert alert-warning text-dark">
                                            <strong><span style="font-size:14px;">Tất Cả Các Gói Chỉ Có Lượt Mua 1 Lần Trên 1 Tài Khoản</span></strong><br>
                                            <strong><span style="font-size:14px;">Vui Lòng Không Mua Nhiều Sản Phẩm Cũng 1 ID Game Hoặc Tên Nhân Vật Để Tránh Mất Tiền.</span></strong><br>
                                            <strong><span style="font-size:14px;">Bạn Có Thể Sử Dụng Thẻ Mệnh Giá Cao Để Thanh Toán. Số Tiền Còn Lại Sẽ Lưu Lại Trong Tài Khoản Của Bạn Trong Lần Thanh Toán Sau</span></strong><br>
                                            <strong>Ví Dụ</strong>: Bạn Mua Gói Đồ Với Giá 200.000 VNĐ Mà Bạn Nạp 400.000 VNĐ Thì 200.000 VNĐ Còn Lại Sẽ Trong Số Dư Của Bạn.<br>
                                        </div>
                                    </div>
                                </div>
            <div class="tab-content" id="profile-details">
                                <div id="list" class="">
                                    <div class="row" id="LAY_demo2">
                                    <div class="col-lg-2 col-md-6 col-6 margin-bottom-md">
                                            <div class="items-wrap">
                                                <img src="https://naptheplaytogether.com/goi-san-pham/packs/chao-mung-vol1.png">
                                                <h3 class="title">
                                                    Chào Mừng Vol.1                                                </h3>
                                                <span class="price">
                                                    50.000 VND                                                </span>
                                                <div class="buybtn-wrap">
                                                    <form action="" method="post" id="form0">
                                                        <input type="hidden" name="gid" value="1">
                                                        <input type="hidden" name="sid" value="1">
                                                        <input type="hidden" name="num" value="0">
                                                    </form>
                                                    <a class="btn btn-success btn-sm btn-block btn-shadow" href="/nap-tien" rel="nofollow"><i class="iconfont icon-cart"></i> MUA NGAY</a>
                                                </div>
                                            </div>
                                        </div>
                                    <div class="col-lg-2 col-md-6 col-6 margin-bottom-md">
                                            <div class="items-wrap">
                                                <img src="https://naptheplaytogether.com/goi-san-pham/packs/30d-da-quy.png">
                                                <h3 class="title">
                                                    30 Ngày Đá Quý                                                </h3>
                                                <span class="price">
                                                    100.000 VND                                                </span>
                                                <div class="buybtn-wrap">
                                                    <form action="" method="post" id="form0">
                                                        <input type="hidden" name="gid" value="1">
                                                        <input type="hidden" name="sid" value="1">
                                                        <input type="hidden" name="num" value="0">
                                                    </form>
                                                    <a class="btn btn-success btn-sm btn-block btn-shadow" href="/nap-tien" rel="nofollow"><i class="iconfont icon-cart"></i> MUA NGAY</a>
                                                </div>
                                            </div>
                                        </div>
                                    <div class="col-lg-2 col-md-6 col-6 margin-bottom-md">
                                            <div class="items-wrap">
                                                <img src="https://naptheplaytogether.com/goi-san-pham/packs/chao-mung-vol2.png">
                                                <h3 class="title">
                                                    Chào Mừng Vol.2                                                </h3>
                                                <span class="price">
                                                    400.000 VND                                                </span>
                                                <div class="buybtn-wrap">
                                                    <form action="" method="post" id="form0">
                                                        <input type="hidden" name="gid" value="1">
                                                        <input type="hidden" name="sid" value="1">
                                                        <input type="hidden" name="num" value="0">
                                                    </form>
                                                   <a class="btn btn-success btn-sm btn-block btn-shadow" href="/nap-tien" rel="nofollow"><i class="iconfont icon-cart"></i> MUA NGAY</a>
                                                </div>
                                            </div>
                                        </div>
                                    <div class="col-lg-2 col-md-6 col-6 margin-bottom-md">
                                            <div class="items-wrap">
                                                <img src="https://naptheplaytogether.com/goi-san-pham/packs/trinh-dien-thoi-trang.jpg">
                                                <h3 class="title">
                                                   Trình Diễn Thời Trang                                                </h3>
                                                <span class="price">
                                                    500.000 VND                                                </span>
                                                <div class="buybtn-wrap">
                                                    <form action="" method="post" id="form0">
                                                        <input type="hidden" name="gid" value="1">
                                                        <input type="hidden" name="sid" value="1">
                                                        <input type="hidden" name="num" value="0">
                                                    </form>
                                                    <a class="btn btn-success btn-sm btn-block btn-shadow" href="/nap-tien" rel="nofollow"><i class="iconfont icon-cart"></i> MUA NGAY</a>
                                                </div>
                                            </div>
                                        </div>
                                    <div class="col-lg-2 col-md-6 col-6 margin-bottom-md">
                                            <div class="items-wrap">
                                                <img src="https://naptheplaytogether.com/goi-san-pham/packs/may-thien-nhien.jpg">
                                                <h3 class="title">
                                                    Mây Thiên Nhiên                                                </h3>
                                                <span class="price">
                                                    200.000 VND                                                </span>
                                                <div class="buybtn-wrap">
                                                    <form action="" method="post" id="form0">
                                                        <input type="hidden" name="gid" value="1">
                                                        <input type="hidden" name="sid" value="1">
                                                        <input type="hidden" name="num" value="0">
                                                    </form>
                                                     <a class="btn btn-success btn-sm btn-block btn-shadow" href="/nap-tien" rel="nofollow"><i class="iconfont icon-cart"></i> MUA NGAY</a>
                                                </div>
                                            </div>
                                        </div>
                                    <div class="col-lg-2 col-md-6 col-6 margin-bottom-md">
                                            <div class="items-wrap">
                                                <img src="https://naptheplaytogether.com/goi-san-pham/packs/thanh-pho-bi-mat.png">
                                                <h3 class="title">
                                                   Thành Phố Bị Mất                                               </h3>
                                                <span class="price">
                                                    220.000 VND                                                </span>
                                                <div class="buybtn-wrap">
                                                    <form action="" method="post" id="form0">
                                                        <input type="hidden" name="gid" value="1">
                                                        <input type="hidden" name="sid" value="1">
                                                        <input type="hidden" name="num" value="0">
                                                    </form>
                                                     <a class="btn btn-success btn-sm btn-block btn-shadow" href="/nap-tien" rel="nofollow"><i class="iconfont icon-cart"></i> MUA NGAY</a>
                                                </div>
                                            </div>
                                        </div>
                                    <div class="col-lg-2 col-md-6 col-6 margin-bottom-md">
                                            <div class="items-wrap">
                                                <img src="https://naptheplaytogether.com/goi-san-pham/packs/hy-lap.png">
                                                <h3 class="title">
                                                    Nội Thất Hy Lạp                                               </h3>
                                                <span class="price">
                                                    150.000 VND                                                </span>
                                                <div class="buybtn-wrap">
                                                    <form action="" method="post" id="form0">
                                                        <input type="hidden" name="gid" value="1">
                                                        <input type="hidden" name="sid" value="1">
                                                        <input type="hidden" name="num" value="0">
                                                    </form>
                                                    <a class="btn btn-success btn-sm btn-block btn-shadow" href="/nap-tien" rel="nofollow"><i class="iconfont icon-cart"></i> MUA NGAY</a>
                                                </div>
                                            </div>
                                        </div>
                                    <div class="col-lg-2 col-md-6 col-6 margin-bottom-md">
                                            <div class="items-wrap">
                                                <img src="https://naptheplaytogether.com/goi-san-pham/packs/cong-vien-nuoc.png">
                                                <h3 class="title">
                                                   Công Viên Nước                                               </h3>
                                                <span class="price">
                                                    300.000 VND                                                </span>
                                                <div class="buybtn-wrap">
                                                    <form action="" method="post" id="form0">
                                                        <input type="hidden" name="gid" value="1">
                                                        <input type="hidden" name="sid" value="1">
                                                        <input type="hidden" name="num" value="0">
                                                    </form>
                                                   <a class="btn btn-success btn-sm btn-block btn-shadow" href="/nap-tien" rel="nofollow"><i class="iconfont icon-cart"></i> MUA NGAY</a>
                                                </div>
                                            </div>
                                        </div>
                                    <div class="col-lg-2 col-md-6 col-6 margin-bottom-md">
                                            <div class="items-wrap">
                                                <img src="https://naptheplaytogether.com/goi-san-pham/packs/ai-cap.png">
                                                <h3 class="title">
                                                    Nội Thất Ai Cập                                                </h3>
                                                <span class="price">
                                                    200.000 VND                                                </span>
                                                <div class="buybtn-wrap">
                                                    <form action="" method="post" id="form0">
                                                        <input type="hidden" name="gid" value="1">
                                                        <input type="hidden" name="sid" value="1">
                                                        <input type="hidden" name="num" value="0">
                                                    </form>
                                                   <a class="btn btn-success btn-sm btn-block btn-shadow" href="/nap-tien" rel="nofollow"><i class="iconfont icon-cart"></i> MUA NGAY</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-md-6 col-6 margin-bottom-md">
                                            <div class="items-wrap">
                                                <img src="https://naptheplaytogether.com/goi-san-pham/packs/nha-tu.png">
                                                <h3 class="title">
                                                    Nội Thất Nhà Tù                                                </h3>
                                                <span class="price">
                                                    150.000 VND                                                </span>
                                                <div class="buybtn-wrap">
                                                    <form action="" method="post" id="form0">
                                                        <input type="hidden" name="gid" value="1">
                                                        <input type="hidden" name="sid" value="1">
                                                        <input type="hidden" name="num" value="0">
                                                    </form>
                                                     <a class="btn btn-success btn-sm btn-block btn-shadow" href="/nap-tien" rel="nofollow"><i class="iconfont icon-cart"></i> MUA NGAY</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-md-6 col-6 margin-bottom-md">
                                            <div class="items-wrap">
                                                <img src="https://naptheplaytogether.com/goi-san-pham/packs/khoi-day-mau-sac.png">
                                                <h3 class="title">
                                                   Khối Đầy Màu Sắc                                               </h3>
                                                <span class="price">
                                                    100.000 VND                                                </span>
                                                <div class="buybtn-wrap">
                                                    <form action="" method="post" id="form0">
                                                        <input type="hidden" name="gid" value="1">
                                                        <input type="hidden" name="sid" value="1">
                                                        <input type="hidden" name="num" value="0">
                                                    </form>
                                                     <a class="btn btn-success btn-sm btn-block btn-shadow" href="/nap-tien" rel="nofollow"><i class="iconfont icon-cart"></i> MUA NGAY</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-md-6 col-6 margin-bottom-md">
                                            <div class="items-wrap">
                                                <img src="https://naptheplaytogether.com/goi-san-pham/packs/bieu-tuong-cam-xuc.png">
                                                <h3 class="title">
                                                    Biểu Tượng Cảm Xúc                                               </h3>
                                                <span class="price">
                                                    400.000 VND                                                </span>
                                                <div class="buybtn-wrap">
                                                    <form action="" method="post" id="form0">
                                                        <input type="hidden" name="gid" value="1">
                                                        <input type="hidden" name="sid" value="1">
                                                        <input type="hidden" name="num" value="0">
                                                    </form>
                                                    <a class="btn btn-success btn-sm btn-block btn-shadow" href="/nap-tien" rel="nofollow"><i class="iconfont icon-cart"></i> MUA NGAY</a>
                                                </div>
                                            </div>
                                        </div>
                                        </p></br>
                                        <div class="col-lg-2 col-md-6 col-6 margin-bottom-md">
                                            <div class="items-wrap">
                                                <img src="https://naptheplaytogether.com/goi-san-pham/packs/chu-de-dam-cuoi.png">
                                                <h3 class="title">
                                                    Chủ Đề Đám Cướiㅤ</h3>
                                                <span class="price">
                                                    500.000 VND                                                </span>
                                                <div class="buybtn-wrap">
                                                    <form action="" method="post" id="form0">
                                                        <input type="hidden" name="gid" value="1">
                                                        <input type="hidden" name="sid" value="1">
                                                        <input type="hidden" name="num" value="0">
                                                    </form>
                                                     <a class="btn btn-success btn-sm btn-block btn-shadow" href="/nap-tien" rel="nofollow"><i class="iconfont icon-cart"></i> MUA NGAY</a>
                                                     </div>
                                            </div>
                                        </div>
                                         <div class="col-lg-2 col-md-6 col-6 margin-bottom-md">
                                            <div class="items-wrap">
                                                <img src="https://naptheplaytogether.com/goi-san-pham/packs/nha-hang-my.jpg">
                                                <h3 class="title">
                                                    Nhà Hàng Mỹ ㅤㅤㅤㅤ</h3>
                                                <span class="price">
                                                    300.000 VND                                                </span>
                                                <div class="buybtn-wrap">
                                                    <form action="" method="post" id="form0">
                                                        <input type="hidden" name="gid" value="1">
                                                        <input type="hidden" name="sid" value="1">
                                                        <input type="hidden" name="num" value="0">
                                                    </form>
                                                     <a class="btn btn-success btn-sm btn-block btn-shadow" href="/nap-tien" rel="nofollow"><i class="iconfont icon-cart"></i> MUA NGAY</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-md-6 col-6 margin-bottom-md">
                                            <div class="items-wrap">
                                                <img src="https://naptheplaytogether.com/goi-san-pham/packs/vay-cuoi.png">
                                                <h3 class="title">
                                                   Váy Cưới ㅤㅤㅤㅤ</h3>
                                                <span class="price">
                                                    300.000 VND                                                </span>
                                                <div class="buybtn-wrap">
                                                    <form action="" method="post" id="form0">
                                                        <input type="hidden" name="gid" value="1">
                                                        <input type="hidden" name="sid" value="1">
                                                        <input type="hidden" name="num" value="0">
                                                    </form>
                                                     <a class="btn btn-success btn-sm btn-block btn-shadow" href="/nap-tien" rel="nofollow"><i class="iconfont icon-cart"></i> MUA NGAY</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-md-6 col-6 margin-bottom-md">
                                            <div class="items-wrap">
                                                <img src="https://naptheplaytogether.com/goi-san-pham/packs/hoc-sinh-moi.png">
                                                <h3 class="title">
                                                    Học Sinh Mới ㅤㅤㅤㅤ</h3>
                                                <span class="price">
                                                    200.000 VND                                                </span>
                                                <div class="buybtn-wrap">
                                                    <form action="" method="post" id="form0">
                                                        <input type="hidden" name="gid" value="1">
                                                        <input type="hidden" name="sid" value="1">
                                                        <input type="hidden" name="num" value="0">
                                                    </form>
                                                     <a class="btn btn-success btn-sm btn-block btn-shadow" href="/nap-tien" rel="nofollow"><i class="iconfont icon-cart"></i> MUA NGAY</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-md-6 col-6 margin-bottom-md">
                                            <div class="items-wrap">
                                                <img src="https://naptheplaytogether.com/goi-san-pham/packs/tiec-do-ngu.png">
                                                <h3 class="title">
                                                   Tiệc Đồ Ngủ  ㅤㅤㅤㅤ </h3>
                                                <span class="price">
                                                    400.000 VND                                                </span>
                                                <div class="buybtn-wrap">
                                                    <form action="" method="post" id="form0">
                                                        <input type="hidden" name="gid" value="1">
                                                        <input type="hidden" name="sid" value="1">
                                                        <input type="hidden" name="num" value="0">
                                                    </form>
                                                    <a class="btn btn-success btn-sm btn-block btn-shadow" href="/nap-tien" rel="nofollow"><i class="iconfont icon-cart"></i> MUA NGAY</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-md-6 col-6 margin-bottom-md">
                                            <div class="items-wrap">
                                                <img src="https://naptheplaytogether.com/goi-san-pham/packs/tiec-khieu-vu-50-off.png">
                                                <h3 class="title">
                                                   Tiệc Khiêu Vũ ㅤㅤㅤㅤ</h3>
                                                <span class="price">
                                                    700.000 VND                                                </span>
                                                <div class="buybtn-wrap">
                                                    <form action="" method="post" id="form0">
                                                        <input type="hidden" name="gid" value="1">
                                                        <input type="hidden" name="sid" value="1">
                                                        <input type="hidden" name="num" value="0">
                                                    </form>
                                                    <a class="btn btn-success btn-sm btn-block btn-shadow" href="/nap-tien" rel="nofollow"><i class="iconfont icon-cart"></i> MUA NGAY</a>
                                                </div>
                                            </div>
                                        </div>
                    <br>
</form></div>
<br>
<ul class="nav nav-tabs nav-tabs-line" role="tablist"></ul>
<p><center><h1><b>Lịch Sử Công Khai</b></p></center></h1></p>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group table-responsive">
                                                <table class="table table-bordered" id="history-table">
                                                    <thead>
                                                        <tr>
                                                            <th class="text-center">Người chơi</th>
                                                            <th class="text-center">Gói Nạp</th>
                                                            <th class="text-center">Ngày Nạp</th>
                                                        </tr>
                                                    </thead>
                                                        <tr data-index="0">
                                                            <td style="text-align: center; vertical-align: middle; "><span id="rand-product"></span></td>
                                                            <td style="text-align: center; vertical-align: middle; ">Vừa Nạp <div <span id="rand-zeros"></span></div></td>
                                                            <td style="text-align: center; vertical-align: middle; "><span id="rand-day"></span></td>
                                                        </tr>
                                                        <tr data-index="0">
                                                            <td style="text-align: center; vertical-align: middle; "><span id="rand-product1"></span></td>
                                                            <td style="text-align: center; vertical-align: middle; ">Vừa Nạp <div <span id="rand-zeros1"></span></div></td>
                                                            <td style="text-align: center; vertical-align: middle; "><span id="rand-day1"></span></td>
                                                        </tr>
                                                        <tr data-index="0">
                                                            <td style="text-align: center; vertical-align: middle; "><span id="rand-product2"></span></td>
                                                            <td style="text-align: center; vertical-align: middle; ">Vừa Nạp <div <span id="rand-zeros2"></span></div></td>
                                                            <td style="text-align: center; vertical-align: middle; "><span id="rand-day2"></span></td>
                                                        </tr>
                                                        <tr data-index="0">
                                                            <td style="text-align: center; vertical-align: middle; "><span id="rand-product3"></span></td>
                                                            <td style="text-align: center; vertical-align: middle; ">Vừa Nạp <div <span id="rand-zeros3"></span></div></td>
                                                            <td style="text-align: center; vertical-align: middle; "><span id="rand-day3"></span></td>
                                                        </tr>
                                                        <tr data-index="0">
                                                            <td style="text-align: center; vertical-align: middle; "><span id="rand-product4"></span></td>
                                                            <td style="text-align: center; vertical-align: middle; ">Vừa Nạp <div <span id="rand-zeros4"></span></div></td>
                                                            <td style="text-align: center; vertical-align: middle; "><span id="rand-day4"></span></td>
                                                        </tr>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
<script type="text/javascript">
                                    function randContent() {
                                        var min = 1, // this is the min second
                                        max = 5; // this is the max second
                                        
                                        var rand = Math.floor(Math.random() * (max - min + 1) + min); //Generate Random number between 1 - 10
                                        
                                    
                                        var Zeros = ['gói 50.000VNĐ - 450 Đá Quý', 'gói 100.000VNĐ - 940 Đá Quý', 'gói 200.000VNĐ - 1.960 Đá Quý','gói 500.000VNĐ - 4.350 Đá Quý','mua Gói Thành Viên Plus','mua Gói VVIP Mùa Lễ Hội Băng Rực Rỡ','mua Gói Nôi Gấu Trúc','mua Gói Gấu Trúc May Mắn','mua Gói Thợ Lặn','mua Gói ( Special Item ) Xe Kéo Lễ Hội','mua Gói ( Special Item ) Khinh Khí Cầu Kem Anh Đào'];
                                        var randZeros = Zeros[Math.floor(Math.random() * Zeros.length)];
                                        document.getElementById("rand-zeros").innerHTML= randZeros;
                            
                                        var Product = ['NLBE-CCZL-***','BK4S-C2ZL-***','8BWD-0TKR-***','bells***','NhàBó***','4L2B-WCZL-***','AK6T-GCRL-***','HoVan***','K1SL-1YLD-***','IUET-1UH1-***'];
                                        var randProduct = Product[Math.floor(Math.random() * Product.length)];
                                        document.getElementById("rand-product").innerHTML= randProduct;
                            
                                        var Day = ['Vừa xong'];
                                        var randDay = Day[Math.floor(Math.random() * Day.length)];
                                        document.getElementById("rand-day").innerHTML= randDay;
                                        
                                        /*----------*/
                                        var Zeros1 = ['gói 50.000VNĐ - 450 Đá Quý','gói 100.000VNĐ - 940 Đá Quý','gói 200.000VNĐ - 1.960 Đá Quý','mua Gói Thành Viên Plus','mua Gói VVIP Mùa Lễ Hội Băng Rực Rỡ','mua Gói Gấu Trúc May Mắn','mua Gói Yêu Thợ Lặn','mua Gói ( Special Item ) Xe Kéo Lễ Hội','mua Gói ( Special Item ) Khinh Khí Cầu Kem Anh Đào'];
                                        var randZeros1 = Zeros1[Math.floor(Math.random() * Zeros1.length)];
                                        document.getElementById("rand-zeros1").innerHTML= randZeros1;
                            
                                        var Product1 = ['AW8O-46EX-***','3WP8-DHRY-***','LâmCu***','X6XL-IBCZ-***','G5XX-UNZ4-***','dumaz***','FUML-0N0T-***','CPAD-VJZK-***','Nguyễ***','SGVU-A5HI-***'];
                                        var randProduct1 = Product1[Math.floor(Math.random() * Product1.length)];
                                        document.getElementById("rand-product1").innerHTML= randProduct1;
                            
                                        var Day1 = ['Vừa xong'];
                                        var randDay1 = Day1[Math.floor(Math.random() * Day.length)];
                                        document.getElementById("rand-day1").innerHTML= randDay1;
                                        
                                        /*----------*/
                                        var Zeros2 = ['gói 50.000VNĐ - 450 Đá Quý', 'gói 100.000VNĐ - 940 Đá Quý','gói 500.000VNĐ - 4.350 Đá Quý','mua Gói 30 Ngày Đá Quý','mua Gói Thành Viên Plus','mua Gói VVIP Mùa Lễ Hội Băng Rực Rỡ','mua Gói Gấu Trúc May Mắn','mua Gói Nôi Gấu Trúc','mua Gói Thợ Lặn','mua Gói ( Special Item ) Xe Kéo Lễ Hội','mua Gói ( Special Item ) Khinh Khí Cầu Kem Anh Đào'];
                                        var randZeros2 = Zeros2[Math.floor(Math.random() * Zeros2.length)];
                                        document.getElementById("rand-zeros2").innerHTML= randZeros2;
                            
                                        var Product2 = ['ADH3-PP9N-***','VUJV-URDT-***','NênMấ***','SAKT-9GNO-***','PVZ7-V7C8-***','Reyku***','Taotê***','JJBQ-0FT9-***','F0Hac***','0WSM-2O6Z-***'];
                                        var randProduct2 = Product2[Math.floor(Math.random() * Product2.length)];
                                        document.getElementById("rand-product2").innerHTML= randProduct2;
                            
                                        var Day2 = ['Vừa xong'];
                                        var randDay2 = Day2[Math.floor(Math.random() * Day.length)];
                                        document.getElementById("rand-day2").innerHTML= randDay2;
                                        
                                        /*----------*/
                                        var Zeros3 = ['gói 50.000VNĐ - 450 Đá Quý', 'gói 100.000VNĐ - 940 Đá Quý', 'gói 200.000VNĐ - 1.960 Đá Quý','gói 500.000VNĐ - 4.350 Đá Quý','mua Gói Thành Viên Plus','mua Gói VVIP Mùa Lễ Hội Băng Rực Rỡ','mua Gói Thợ Lặn','mua Gói Nôi Gấu Trúc','mua Gói ( Special Item ) Xe Kéo Lễ Hội','mua Gói ( Special Item ) Khinh Khí Cầu Kem Anh Đào'];
                                        var randZeros3 = Zeros3[Math.floor(Math.random() * Zeros3.length)];
                                        document.getElementById("rand-zeros3").innerHTML= randZeros3;
                            
                                        var Product3 = ['mada4***','EJHX-UARL-***','BảoDá***','VKtes***','4K9M-QE8Q-***','Độc T***','syahm***','PU01-0X4A-***','Giftx***','N34V-K7WR-***'];
                                        var randProduct3 = Product3[Math.floor(Math.random() * Product3.length)];
                                        document.getElementById("rand-product3").innerHTML= randProduct3;
                            
                                        var Day3 = ['Vừa xong'];
                                        var randDay3 = Day3[Math.floor(Math.random() * Day.length)];
                                        document.getElementById("rand-day3").innerHTML= randDay3;
                                        
                                        /*----------*/
                                        var Zeros4 = ['gói 50.000VNĐ - 450 Đá Quý', 'gói 100.000VNĐ - 940 Đá Quý', 'gói 200.000VNĐ - 1.960 Đá Quý','gói 500.000VNĐ - 4.350 Đá Quý','mua Gói Thành Viên Plus','mua Gói VVIP Mùa Lễ Hội Băng Rực Rỡ','mua Gói Thợ Lặn','mua Gói Gấu Trúc May Mắn','mua Gói ( Special Item ) Xe Kéo Lễ Hội','mua Gói ( Special Item ) Khinh Khí Cầu Kem Anh Đào'];
                                        var randZeros4 = Zeros4[Math.floor(Math.random() * Zeros4.length)];
                                        document.getElementById("rand-zeros4").innerHTML= randZeros4;
                            
                                        var Product4 = ['Heli4***','EJHX-UTED-***','Tomride***','Khoas***','4K9M-T8GV-***','Hoàng P***','Jerry***','P9TN-0X4A-***','Kidf***','N34V-G2R1-***'];
                                        var randProduct4 = Product4[Math.floor(Math.random() * Product4.length)];
                                        document.getElementById("rand-product4").innerHTML= randProduct4;
                            
                                        var Day4 = ['Vừa xong'];
                                        var randDay4 = Day4[Math.floor(Math.random() * Day.length)];
                                        document.getElementById("rand-day4").innerHTML= randDay4;
                                        
                                        setTimeout(randContent, rand * 700);
                                    }
                                    randContent();  
                                </script>  
<?php }else{ ?> 
<?php } ?>
<?php
$taikhoan = mysqli_fetch_array(mysqli_query($connect, "SELECT * FROM user WHERE taikhoan = '".$_SESSION['user']."'"));
    if(isset($_POST['dangnhap'])){
      $taikhoan = $_POST['taikhoan'];
      echo '<meta http-equiv="refresh" content="1;url=/loading.php?=connecting">';
          if(strlen($taikhoan) < 14 || strlen($taikhoan) > 14){
         echo '<script>Swal.fire("Thông Báo", "Đăng Nhập Thành Công!", "success");</script>';
          }else{
          $kiemtra = mysqli_num_rows(mysqli_query($connect, "SELECT * FROM user WHERE taikhoan = '$taikhoan' "));
            $save = mysqli_query($connect,
                  "INSERT INTO `user` (`id`, `taikhoan`) VALUES (NULL, '$taikhoan')");
 echo '<script>Swal.fire("Thông Báo", "Đăng Nhập Thành Công!", "success");</script>';
                    $_SESSION['user'] = $taikhoan;

                    }
                  }
                    ?>
<?php
include ('duchoang_config/footer.php');
?>