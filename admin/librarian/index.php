<?php include('header.php'); 
$dang_nhap = new admin();


?>

    <div class="container">
		<div class="margin-top">
			<div class="row">	
			<div class="span12">
					
				<div class="login">
				<div class="log_txt">
				<p><strong>Nhập Thông tin Tài khoản Admin</strong></p>
				</div>
						<form class="form-horizontal" method="POST">
								<div class="control-group">
									<label class="control-label" for="inputEmail">Username</label>
									<div class="controls">
									<input type="text" name="username" id="username" placeholder="Username" required>
									</div>
								</div>
								<div class="control-group">
									<label class="control-label" for="inputPassword">Password</label>
									<div class="controls">
									<input type="password" name="password" id="password" placeholder="Password" required>
								</div>
								</div>
								<div class="control-group">
									<div class="controls">
									<button id="login" name="submit_login" type="submit" class="btn"><i class="icon-signin icon-large"></i>&nbsp;Submit</button>
								</div>
								</div>
								
								<?php

								if (isset($_POST['submit_login'])){
								
								$username = $_POST['username'];
								$password = $_POST['password'];

					//làm sạch thông tin, xóa bỏ các tag html, ký tự đặc biệt 
					//mà người dùng cố tình thêm vào để tấn công theo phương thức sql injection
					
								$username = strip_tags($username);
								$username = addslashes($username);
								$password = strip_tags($password);
								$password = addslashes($password);

								$num_row=$dang_nhap->login($username,$password);
															
									if( $num_row > 0 ) {
										header('location:dashboard.php');
								
									}
									else{ ?>
								<div class="alert alert-danger">Đăng nhập thất bại</div>		
								<?php
								}}
								?>
						</form>
				
				</div>
			</div>		
			</div>
		</div>
    </div>
<?php include('footer.php') ?>