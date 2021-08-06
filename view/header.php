<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <!-- CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
    integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="view/slick-master/slick/slick-theme.css">
    <link rel="stylesheet" href="view/slick-master/slick/slick.css">
    <link rel="stylesheet" href = "view/trangchu.css">
</head>
<style>
 
</style>
<body>
  <header>
  <div class="container-fluid kaka p-3 -mt-3 text-white">
  <span>BarBer Store-LH:0987654321</span>
  </div>
    <!--end-container-fluid-->
    <div class="container-fluid block d-md-flex text-center justify-content-between p-5 -mt-2 align-items-center">
      <div class="Image">
        <img height="60px" height="50" src="view/img/io.png" alt="">
      </div>
      <div class="nav">
        <nav class="navbar navbar-expand-lg navbar-light">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto">
              <li class="nav-item">
                <a class="nav-link" href="index.php">Trang chủ</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="?abc=introduct">Giới thiệu</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="?abc=dich-vu">Dịch vụ</a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="?abc=dat-lich">Đặt lịch</a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="?abc=toc_dep">Tóc đẹp</a>
              </li>
            </ul>
          </div>
        </nav>
      </div>
      <!--end-nav-->
      <ul class="nav navbar-nav navbar-right">
            <?php session_start();
            if (empty($_SESSION['aub'])) { ?>
               <li><a href="login.php" class = "btn btn-primary">Đăng nhập</a></li>
            <?php } else { ?>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <?php echo $_SESSION['aub']['username']; ?>
                        <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu">
                         <li><a href="?abc=xem-lich">Xem lịch cắt</a></li>
                        <li><a href="logout.php">Log out</a></li>
                    </ul>
                </li>
            <?php } ?>
        </ul>



    </div>
</header>


