<!DOCTYPE html>
<html>
<head>
	<title>SIMAS | Sistem Informasi Manajemen Surat</title>
	
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>asset/style.css">

</head>
<body>
	<div class="container">
		<!--navbar-->
		<div class="header-area">
			  <!-- site-navbar start -->
			  <div class="navbar-area">
			  
			      <nav class="site-navbar">
			        <!-- site logo -->
   					<a href="javascript:void(0);" class="site-logo">
						<img src="https://smkn8bl.sch.id/images/skapan.png" width="80" height="100"/>
						SMKN 8 Bandar Lampung
					</a>

			        <!-- nav-toggler for mobile version only -->
			        <button class="nav-toggler">
			          <span></span>
			        </button>
			      </nav>
			  
			  </div><!-- navbar-area end -->

		</div>
		<!--login form -->
		<div id="login" class="row col-lg-12 col-md-12 col-sm-12 col-12">
			<div class="col-lg-6 col-md-6">
				<img class="pic-login-2" src="<?php echo base_url(); ?>asset/pic-login-2.svg">
			</div>
			<div class="col-lg-5 col-md-6 col-sm-12 col-12 login-form">
				<h4>Login SIMAS</h4>
				<?php if ($this->session->flashdata('error')){echo '<div class="alert alert-danger alert-dismissible fade show">Login gagal, periksa kembali Username dan Password anda</div>'; } ?>
						                <?php if ($this->session->flashdata('error_status')){echo '<div class="alert alert-danger alert-dismissible fade show">Login gagal, periksa kembali Username dan Password anda</div>'; } ?>
				<form method="post" action="<?php echo base_url(); ?>user/signin">
				<div class="form-group">
					<input type="text" class="form-control form-control-lg" name="username" placeholder="Username">
					<svg width="1.2em" height="1.2em" viewBox="0 0 16 16" class="bi bi-person-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
					  <path fill-rule="evenodd" d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
					</svg>
				</div>
				<div class="form-group">
					<input type="password" class="form-control form-control-lg" name="password" placeholder="Password">
					<svg width="1.2em" height="1.2em" viewBox="0 0 16 16" class="bi bi-lock-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
					  <path d="M2.5 9a2 2 0 0 1 2-2h7a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-7a2 2 0 0 1-2-2V9z"/>
					  <path fill-rule="evenodd" d="M4.5 4a3.5 3.5 0 1 1 7 0v3h-1V4a2.5 2.5 0 0 0-5 0v3h-1V4z"/>
					</svg>
				</div>
				<!-- <div class="remember-forgot-div">
					
					<span class="form-check">
				      <input class="form-check-input" type="checkbox" id="gridCheck">
				      <label class="form-check-label" for="gridCheck">
				        Remember
				      </label>
				    </span>
					<a href="">Forgot password?</a>
				</div> -->
				<div class="login-btn">
					<button class="btn btn-primary" type="submit">Log in</button>
				</div>
				</form>
			</div>
		</div>
		
	</div>

<!-- <div class="copyright">
    <a href="javascript:void(0);">Developed By Guru RPL</a>
</div> -->
	
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>

	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

	<script type="text/javascript" src="<?php echo base_url(); ?>asset/login.js"></script>

</body>
</html>