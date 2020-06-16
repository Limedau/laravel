<!DOCTYPE html>
<html lang="en">
	<head>
		<script data-ad-client="ca-pub-4047009242768375" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
		
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="" />
		<meta name="description" content="" />
		<meta name="author" content="" />
		<link rel="icon" href="img/favicon.ico" />
		
		<title>Crypto Tokenizer UI Interface & Cryptocurrency Admin Template</title>

		<link rel="stylesheet" href="{{asset('css/vendors_css.css')}}" />
		<link rel="stylesheet" href="{{asset('css/style.css')}}" />
		<link rel="stylesheet" href="{{asset('css/card.css')}}" />
		<link rel="stylesheet" href="{{asset('css/skin_color.css')}}" />
		<style>
   i.fa.fa-star,i.fa.fa-star-half-empty,fa-star-o{
    color:#F7C35F;
   }
   i.fa.fa-money{
   	color:success;
   }

		</style>


	</head>
	<body class="hold-transition light-skin sidebar-mini theme-primary">
		<!-- Vendors Style-->
		<!-- Style-->
		<div class="wrapper">
			<header class="main-header">
				<coingecko-coin-price-marquee-widget coin-ids="bitcoin,ethereum,eos,ripple,litecoin,dogecoin,neo,dash,tron" currency="idr" background-color="#00000" text-color="#fffff" locale="en"></coingecko-coin-price-marquee-widget>
				<div class="d-flex align-items-center logo-box pl-20">
					<a href="#" class="waves-effect waves-light nav-link rounded d-none d-md-inline-block push-btn" data-toggle="push-menu" role="button">
						<img src="{{asset('img/collapse.svg')}}" class="img-fluid svg-icon" alt="" />

					</a>
					<!-- Logo -->
					<a href="index.html" class="logo">
						<!-- logo-->
					</a>
					<div class="logo-lg">
						<a href="index.html" class="logo">
							<span class="light-logo">
								<img src="{{asset('img/logo-dark-text.png')}}" alt="logo" />

							</span>
							<span class="dark-logo">
								<img src="{{asset('img/logo-light-text.png')}}" alt="logo" />

							</span>
						</a>
					</div>
				</div>
				<!-- Header Navbar -->
				<nav class="navbar navbar-static-top pl-10">
					<!-- Sidebar toggle button-->
					<div class="app-menu">
						<ul class="header-megamenu nav">
							<li class="btn-group nav-item d-md-none">
								<a href="#" class="waves-effect waves-light nav-link rounded push-btn" data-toggle="push-menu" role="button">
									<img src="{{asset('img/collapse.svg')}}" class="img-fluid svg-icon" alt="" />

								</a>
							</li>
							<li class="btn-group nav-item">
								<a href="#" data-provide="fullscreen" class="waves-effect waves-light nav-link rounded full-screen" title="Full Screen">
									<img src="{{asset('img/fullscreen.svg')}}" class="img-fluid svg-icon" alt="" />

								</a>
							</li>
							<li class="btn-group d-md-inline-flex d-none">
								<div class="search-bx ml-10">
									<form>
										<div class="input-group">
											<input type="search" class="form-control" placeholder="Search" aria-label="Search" aria-describedby="button-addon2" />

											<div class="input-group-append">
												<button class="btn" type="submit" id="button-addon2">
													<img src="{{asset('img/search.svg')}}" class="img-fluid" alt="search" />

												</button>
											</div>
										</div>
									</form>
								</div>
							</li>
						</ul>
					</div>
					<div class="navbar-custom-menu r-side">
						<ul class="nav navbar-nav">
							<!-- Notifications -->
							<li class="dropdown notifications-menu">
								<a href="#" class="waves-effect waves-light dropdown-toggle" data-toggle="dropdown" title="Notifications">
									<img src="{{asset('img/notifications.svg')}}" class="img-fluid svg-icon" alt="" />

								</a>
								<ul class="dropdown-menu animated bounceIn">
									<li class="header">
										<div class="p-20">
											<div class="flexbox">
												<div>
													<h4 class="mb-0 mt-0">Notifications</h4>
												</div>
												<div>
													<a href="#" class="text-danger">Clear All</a>
												</div>
											</div>
										</div>
									</li>
									<li>
										<!-- inner menu: contains the actual data -->
										<ul class="menu sm-scrol">
											<li>
												<a href="#">
													<i class="fa fa-users text-info"></i>
													Curabitur id eros quis nunc suscipit blandit.

												</a>
											</li>
											<li>
												<a href="#">
													<i class="fa fa-warning text-warning"></i>
													Duis malesuada justo eu sapien elementum, in semper diam posuere.

												</a>
											</li>
											<li>
												<a href="#">
													<i class="fa fa-users text-danger"></i>
													Donec at nisi sit amet tortor commodo porttitor pretium a erat.

												</a>
											</li>
											<li>
												<a href="#">
													<i class="fa fa-shopping-cart text-success"></i>
													In gravida mauris et nisi

												</a>
											</li>
											<li>
												<a href="#">
													<i class="fa fa-user text-danger"></i>
													Praesent eu lacus in libero dictum fermentum.

												</a>
											</li>
											<li>
												<a href="#">
													<i class="fa fa-user text-primary"></i>
													Nunc fringilla lorem

												</a>
											</li>
											<li>
												<a href="#">
													<i class="fa fa-user text-success"></i>
													Nullam euismod dolor ut quam interdum, at scelerisque ipsum imperdiet.

												</a>
											</li>
										</ul>
									</li>
									<li class="footer">
										<a href="#">View all</a>
									</li>
								</ul>
							</li>
							<!-- User Account-->
							<li class="dropdown user user-menu">
								<a href="#" class="waves-effect waves-light dropdown-toggle" data-toggle="dropdown" title="User">
									<img src="{{asset('img/user.svg')}}" class="rounded svg-icon" alt="" />

								</a>
								<ul class="dropdown-menu animated flipInX">
									<!-- User image -->
									<li class="user-header bg-img" style="background-image:url(img/user-info.jpg)" data-overlay="3">
										<div class="flexbox align-self-center">
											<img src="{{asset('img/7.jpg')}}" class="float-left rounded-circle" alt="User Image" />

											<h4 class="user-name align-self-center">
												<span>Samuel Brus</span>
												<small>samuel@gmail.com</small>
											</h4>
										</div>
									</li>
									<!-- Menu Body -->
									<li class="user-body">
										<a class="dropdown-item" href="javascript:void(0)">
											<i class="ion ion-person"></i>
											My Profile

										</a>
										<a class="dropdown-item" href="javascript:void(0)">
											<i class="ion ion-bag"></i>
											My Balance

										</a>
										<a class="dropdown-item" href="javascript:void(0)">
											<i class="ion ion-email-unread"></i>
											Inbox

										</a>
										<div class="dropdown-divider"></div>
										<a class="dropdown-item" href="javascript:void(0)">
											<i class="ion ion-settings"></i>
											Account Setting

										</a>
										<div class="dropdown-divider"></div>
										<a class="dropdown-item" href="javascript:void(0)">
											<i class="ion-log-out"></i>
											Logout

										</a>
										<div class="dropdown-divider"></div>
										<div class="p-10">
											<a href="javascript:void(0)" class="btn btn-sm btn-rounded btn-success">View Profile</a>
										</div>
									</li>
								</ul>
							</li>
							<!-- Control Sidebar Toggle Button -->
							<li>
								<a href="#" data-toggle="control-sidebar" title="Setting" class="waves-effect waves-light">
									<img src="{{asset('img/settings.svg')}}" class="img-fluid svg-icon" alt="" />

								</a>
							</li>
						</ul>
					</div>
				</nav>
			</header>
			
			<!-- Content Wrapper. Contains page content -->
			<div class="content">
				<div class="container-full">
					<!-- Content Header (Page header) -->
					<div class="content-header">
						<div class="d-flex align-items-center">
							<div class="mr-auto">
								<h3 class="page-title">Add Airdrop</h3>
								<div class="d-inline-block align-items-center">
									<nav>
										<ol class="breadcrumb">
											<li class="breadcrumb-item">
												<a href="#">
													<i class="mdi mdi-home-outline"></i>
												</a>
											</li>
											<li class="breadcrumb-item" aria-current="page">Forms</li>
											<li class="breadcrumb-item active" aria-current="page">Add Airdrop</li>
										</ol>
									</nav>
								</div>
							</div>
							<div class="right-title">
								<div class="d-flex mt-10 justify-content-end">
									<div class="d-lg-flex mr-20 ml-10 d-none">
										<div class="chart-text mr-10">
											<h6 class="mb-0">
												<small>THIS MONTH</small>
											</h6>
											<h4 class="mt-0 text-primary">$12,125</h4>
										</div>
										<div class="spark-chart">
											<div id="thismonth">
												<canvas width="60" height="35" style="display: inline-block; width: 60px; height: 35px; vertical-align: top;"></canvas>
											</div>
										</div>
									</div>
									<div class="d-lg-flex mr-20 ml-10 d-none">
										<div class="chart-text mr-10">
											<h6 class="mb-0">
												<small>LAST YEAR</small>
											</h6>
											<h4 class="mt-0 text-danger">$22,754</h4>
										</div>
										<div class="spark-chart">
											<div id="lastyear">
												<canvas width="60" height="35" style="display: inline-block; width: 60px; height: 35px; vertical-align: top;"></canvas>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- Main content -->
					<section class="content">
						<div class="row">
							<div class="col-12">
								<div class="box">
									<!-- /.box-header -->
									<div class="box-body">
										<form method="post" action="/add">
										@csrf
											<!-- Basic Forms -->
											<div class="box">
												<div class="box-header with-border">
													<h4 class="box-title">Add New Airdrop</h4>
												</div>
												<!-- /.box-header -->
												<div class="box-body">
													<div class="row">
														<div class="col-12">
															<div class="form-group row">
																<label for="example-text-input" class="col-sm-2 col-form-label">Airdrop name</label>
																<div class="col-sm-10">
																	<input class="form-control" type="text" placeholder="Airdrop name" name="a_name" id="example-text-input" />

																</div>
															</div>
															<div class="form-group row">
																<label for="example-search-input" class="col-sm-2 col-form-label">Est Value</label>
																<div class="col-sm-10">
																	<input class="form-control" type="number" placeholder="1234" name="est_value" id="example-search-input" />

																</div>
															</div>
															<div class="form-group row">
																<label for="example-email-input" class="col-sm-2 col-form-label">Free Coin</label>
																<div class="col-sm-10">
																	<input class="form-control" type="text" placeholder="0.005 BTC" name="free_coin" id="example-email-input" />

																</div>
															</div>
															<div class="form-group row">
																<label for="example-url-input" class="col-sm-2 col-form-label">Airdrop end </label>
																<div class="col-sm-10">
																	<input class="form-control" type="date" value="" name="a_end" id="example-url-input" />

																</div>
															</div>
															<div class="form-group row">
																<label for="a_end" class="col-sm-2 col-form-label">Airdrop link</label>
																<div class="col-sm-10">
																	<input class="form-control" type="url" value="" placeholder="https://" name="a_url" id="a_end">
																</div>
															</div>
															<div class="form-group row">
																<label for="poll" class="col-sm-2 col-form-label">Totl poll</label>
																<div class="col-sm-10">
																	<input class="form-control" type="text" placeholder="1000000 Token" name="poll" id="poll" />

																</div>
															</div>
															<div class="form-group row">
																<label for="file" class="col-sm-2 col-form-label">Images</label>
																<div class="col-sm-10">
																	<input class="form-control" type="url" placeholder="image url" name="img_url" id="example-text-input" />
																</div>
															</div>
															<div class="form-group row">
																<label for="" class="col-sm-2 col-form-label">Required Tools</label>
																<div class="col-sm-10">																	
																	<div class="c-inputs-stacked">
																		<input type="checkbox" id="tg" name="tg" value="telegram">
																		<label for="tg" class="mr-10">Telegram</label>
																		<input type="checkbox" name="tw" id="tw" value="twitter">
																		<label for="tw" class="mr-10">Twitter</label>
																		<input type="checkbox" name="li" id="li" value="linkedin">
																		<label for="li" class="mr-10">Likeden</label>
																		<input type="checkbox" name="mdm" id="mdm" value="medium">
																		<label for="mdm" class="mr-10">Medium</label>
																		<input type="checkbox" name="yu" id="yt" value="youtube">
																		<label for="yt" class="mr-10">Youtube</label>
																		<input type="checkbox" name="fb" id="fb" value="facebook">
																		<label for="fb" class="mr-10">Facebook</label>
																		<input type="checkbox" name="kyc" id="kyc" value="kyc">
																		<label for="kyc" class="mr-10">Kyc</label>
																		<input type="checkbox" name="email" id="email" value="email">
																		<label for="email" class="mr-10">Email</label>
																		<input type="checkbox" name="phone" id="phone" value="phone">
																		<label for="phone" class="mr-10">Phone</label>
																	</div>
																</div>
															</div>
															<div class="form-group row">
																<label for="" class="col-sm-2 col-form-label">Tags</label>
																<div class="col-sm-10">																	
																	<div class="c-inputs-stacked">
																		<input type="checkbox" name="pin" id="pin_f" value="feature">
																		<label for="pin_f" class="mr-10">Feature</label>
																		<input type="checkbox" id="pin_p" name="pin" value="popular">
																		<label for="pin_p" class="mr-10">Popular</label>
																		<input name="pin" type="checkbox" id="pin_h" value="hot">
																		<label for="pin_h" class="mr-10">Hot</label>
																		
																	</div>
																</div>
															</div>
															<div class="form-group row">
																<label for="" class="col-sm-2 col-form-label">Rating</label>
																<div class="col-sm-10">																	
																	<div class="c-inputs-stacked">
																		<input type="checkbox" name="r" id="r_1" value="r1">
																		<label for="r_1" class=" mr-30">
																			<i class="fa fa-star"></i>
																			<i class="fa fa-star"></i>																			
																			<i class="fa fa-star"></i>
																			<i class="fa fa-star-half-o"></i>
																			<i class="fa fa-star-o"></i>
																		</label>
																		<input type="checkbox" id="r_2" name="r" value="r2">
																		<label for="r_2" class="mr-30">
																			<i class="fa fa-star"></i>
																			<i class="fa fa-star"></i>
																			<i class="fa fa-star"></i>
																			<i class="fa fa-star"></i>
																			<i class="fa fa-star-half-o"></i>
																		</label>
																		<input type="checkbox" id="r_3" name="r" value="r3">
																		<label for="r_3" class="mr-30">
																			<i class="fa fa-star"></i>
																			<i class="fa fa-star"></i>
																			<i class="fa fa-star"></i>
																			<i class="fa fa-star"></i>
																			<i class="fa fa-star"></i>
																		</label>
																		
																	</div>
																</div>
															</div>
															
															<div class="form-group row">
																<label for="content" class="col-sm-2 col-form-label">Content</label>
																<div class="col-sm-10">
																	<div class="row">
																		<div class="col-sm-12 mb-3">
																			<input class="form-control" type="text" placeholder="Setep 1 " name="s1" id="example-text-input" />
																		</div>
																		<div class="col-sm-12 mb-3">
																			<input class="form-control" type="text" placeholder="Setep 2" name="s2" id="example-text-input" />
																		</div>
																		<div class="col-sm-12 mb-3">
																			<input class="form-control" type="text" placeholder="Setep 3" name="s3" id="example-text-input" />
																		</div>
																		<div class="col-sm-12 mb-3">
																			<input class="form-control" type="text" placeholder="Setep 4" name="s4" id="example-text-input" />
																		</div>
																		<div class="col-sm-12 mb-3">
																			<input class="form-control" type="text" placeholder="Setep 5" name="s5" id="example-text-input" />
																		</div>																		
																	</div>
																</div>
															</div>
															
															<div class="form-group row">
																<label for="content" class="col-sm-2 col-form-label">Airdrop information</label>
																<div class="col-sm-10 mt-3">
																	<input class="form-control" type="text" placeholder="" name="ai" id="example-text-input" />
																</div>
															</div>
																															
														</div>
														<!-- /.col -->														
													</div>
													<!-- /.row -->
												</div>
												<!-- /.box-body -->
												<div class="box-footer">
													
													<button type="submit" class="btn btn-rounded btn-outline-success pull-right">add new airdrop</button>
												</div>
											</div>
											<!-- /.box -->
										</form>
									</div>
								</div>
							</div>
							<!-- /.box -->
						</div>
						<!-- /.col-->						
					</section>
				</div>
				<!-- ./row -->
				<!-- /.content -->
				<!-- Footer -->
				<footer class="page-footer font-small special-color-dark pt-4">
					<!-- Footer Elements -->
					<div class="container">
						<!-- Social buttons -->
						<ul class="list-unstyled list-inline text-center">
							<li class="list-inline-item">
								<a href="#" class="btn btn-circle mb-5 btn-facebook">
									<i class="fa fa-facebook"></i>
								</a>
							</li>
							<li class="list-inline-item">
								<a href="#" class="btn btn-circle mb-5 btn-instagram">
									<i class="fa fa-instagram"></i>
								</a>
							</li>
							<li class="list-inline-item">
								<a href="#" class="btn btn-circle mb-5 btn-twitter">
									<i class="fa fa-twitter"></i>
								</a>
							</li>
							<li class="list-inline-item">
								<a href="#" class="btn btn-circle mb-5 btn-warning">
									<i class="fa fa-envelope"></i>
								</a>
							</li>
						</ul>
						<!-- Social buttons -->
					</div>
					<!-- Footer Elements -->
					<!-- Copyright -->
					<div class="footer-copyright text-center py-3">© 2020 Copyright:
						<a href="https://mdbootstrap.com/">MDBootstrap.com</a>
					</div>
					<!-- Copyright -->
				</footer>
		</div>
		<!-- /.control-sidebar -->
		<!-- Add the sidebar's background. This div must be placed immediately after the control sidebar -->
		<div class="control-sidebar-bg"></div>
		<!-- ./wrapper -->
		<!-- Vendor JS -->
		<script src="{{asset('js/coingecko-coin-price-marquee-widget.js')}}"></script>
		<script src="{{asset('js/vendors.min.js')}}"></script>
		<script src="{{asset('js/vendor/bootstrap-select.js')}}"></script>
		<script src="{{asset('js/vendor/bootstrap-tagsinput.js')}}"></script>
		<script src="{{asset('js/vendor/jquery.bootstrap-touchspin.min.js')}}"></script>
		<script src="{{asset('js/vendor/select2.full.js')}}"></script>
		<script src="{{asset('js/vendor/jquery.inputmask.js')}}"></script>
		<script src="{{asset('js/vendor/jquery.inputmask.date.extensions.js')}}"></script>
		<script src="{{asset('js/vendor/jquery.inputmask.extensions.js')}}"></script>
		<script src="{{asset('js/vendor/moment.min.js')}}"></script>
		<script src="{{asset('js/vendor/daterangepicker.js')}}"></script>
		<script src="{{asset('js/vendor/bootstrap-datepicker.min.js')}}"></script>
		<script src="{{asset('js/vendor/bootstrap-colorpicker.min.js')}}"></script>
		<script src="{{asset('js/vendor/bootstrap-timepicker.min.js')}}"></script>
		<script src="{{asset('js/vendor/icheck.min.js')}}"></script>
		<!-- Crypto Tokenizer Admin App -->
		<script src="{{asset('js/template.js')}}"></script>
		<script src="{{asset('js/demo.js')}}"></script>
		<script src="{{asset('js/pages/editor.js')}}"></script>
		<script src="{{asset('js/pages/advanced-form-element.js')}}"></script>
		<!-- Mirrored from www.multipurposethemes.com/admin/crypto-tokenizer/main-dark/forms_editors.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 03 Jun 2020 12:19:30 GMT -->
	</body>
</html>