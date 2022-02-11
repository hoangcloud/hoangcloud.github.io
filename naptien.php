<?php
include ('duchoang_config/config.php');
include ('duchoang_config/header.php');
?>
<!--- Tiêu Đề --->
<title>Nạp Tiền | <?php echo $duchoang_title; ?> - <?php echo $duchoang_name; ?></title>
<!-- Chuyển Hướng -->
<meta http-equiv="refresh" content="1;url=/nap-the">
  <?php
  if(!$_SESSION['user']){
  ?>
<div class="page-content">
    <div class="container">
        <img src="<?php echo $duchoang_banner; ?>" width="100%" alt="nạp thẻ play together">
        <div class="content-area card col-12">
            <div class="card-innr">
                <p><b><font color=#f5b931>Play Together – Topup Center</font></b></p>
                <p><b>Play Together – Gặp Gỡ Bạn Bè Khắp Năm Châu</b> - Vũ Trụ Ảo Với Những Người Bạn Trên Toàn Thế Giới Đã Đến - <b>Play Together</b> Sẽ Hiện Thực Hóa Ước Mơ Của Bạn, Giúp Bạn Thỏa Sức Giải Trí, Tham Gia Những Chuyến Đi Đặc Biệt, Đồng Thời Gặp Gỡ Những Người Bạn Mới Từ Khắp Nơi Trên Thế Giới.</p>
                        <div class="token-statistics card card-token height-auto col-12">
                            <div class="card-innr">
                                <div class="token-balance">
                                    <div class="token-balance-text"> <center>
                                        <img src="https://dl.dropboxusercontent.com/s/6b7ctab58kg5bfp/025001-Bricks.svg" width="50" />Bạn Không Đủ Số Dư! Vui Lòng Nạp Thêm...</h6></center>
                                    </div>
                                </div>
                            </div>
                        </div>
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