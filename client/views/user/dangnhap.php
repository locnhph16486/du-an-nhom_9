<?php
require_once './dao/system_dao.php';
// session_start();
if (isset($_SESSION['user_fullname'])) {
	header("location: quantri/");
	die;
}
if (isset($_POST['login'])) {
	$user_name = $_POST['user_name'];
	$password = $_POST['password'];

	if ($user_name == "") {
		$user_name = "* Nhập Tên Đăng Nhập";
	}
	if ($password == "") {
		$password = "* Chưa Nhập Mật Khẩu";
	}

	// kiểm tra username và password
	$sql = "SELECT * FROM user WHERE user_name='$user_name' and password='$password'";
	$stmt = $conn->prepare($sql);

	$stmt->execute();
	$user = $stmt->fetch(PDO::FETCH_ASSOC);
	if ($user != false) {
		// tạo session 
		$_SESSION['user_name'] = $user_name;
		header("Location: public/home/");
		die;
	} else {
		$msg = "Tài khoản của bạn chưa đăng ký";
	}
}


?>
<!DOCTYPE HTML>
<html>

<head>
	<title>X-SPORTS</title>
	<script src="public/website/js/jquery.min.js"></script>
	<!-- Custom Theme files -->
	<link href="public/website/css/dangnhap.css" rel="stylesheet" type="text/css" media="all" />
	<!-- for-mobile-apps -->
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Classy Login form Responsive, Login form web template, Sign up Web Templates, Flat Web Templates, Login signup Responsive web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<!-- //for-mobile-apps -->
	<!--Google Fonts-->
	<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700' rel='stylesheet' type='text/css'>
</head>

<body>
	<!--header start here-->
	<div class="header">
		<div class="header-main">
			<h1>X-SPORTS</h1>
			<?php if (isset($msg)) : ?>
				<h3><?= $msg ?> </h3>
			<?php endif; ?>
			<div class="header-bottom">
				<div class="header-right w3agile">

					<div class="header-left-bottom agileinfo">

						<form action="#" method="post">
							<input type="text" value="Tên đăng nhập" name="user_name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Tên đăng nhập';}" />
							<?php if (isset($err_user_sdt)) : ?>
								<div style="color: black;"> <?= $err_user_name ?></div>
							<?php endif; ?>
							<input type="password" value="Password" name="user_pass" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'password';}" />
							<?php if (isset($err_user_pass)) : ?>
								<div style="color: black;"> <?= $err_user_pass ?></div>
							<?php endif; ?>
							<div class="remember">
								<span class="checkbox1">
									<label class="checkbox"><input type="checkbox" name="" checked=""><i> </i>Lưu Đăng Nhập</label>
								</span>
								<div class="forgot">
									<h6><a href="#">Quên Mật Khẩu ?</a> / <a href="client/views/dangky.php">Đăng Ký</a></h6>
								</div>
								<div class="clear"> </div>
							</div>
							<input type="submit" value="Đăng Nhập" name="login">
						</form>
					</div>
				</div>

			</div>
		</div>
	</div>
</body>

</html>