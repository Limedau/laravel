<!DOCTYPE html>
<html lang="en">
	<head>
		<script data-ad-client="ca-pub-4047009242768375" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
		
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="" />
		<meta name="author" content="" />
		<link rel="icon" href="img/favicon.ico" />
		
		<title>Crypto Tokenizer UI Interface & Cryptocurrency Admin Template</title>

		<link rel="stylesheet" href="{{asset('css/vendors_css.css')}}" />
		<link rel="stylesheet" href="{{asset('css/style.css')}}" />
		<link rel="stylesheet" href="{{asset('css/card.css')}}" />
		<link rel="stylesheet" href="{{asset('css/skin_color.css')}}" />
		<style>
   i.fa.fa-star{
    color:#F7C35F;
   }
   .fa-star-half-o{
    color:#F7C35F;
   }
   .fa-star-o{
    color:#F7C35F;
   }
   
   i.fa.fa-money{
   	color:success;
   }

		</style>


	</head>
	<body class="hold-transition light-skin sidebar-mini theme-primary">
		<!-- Mirrored from www.multipurposethemes.com/admin/crypto-tokenizer/main-dark/forms_editors.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 03 Jun 2020 12:19:29 GMT -->
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
				<div class="container-fluid">
					<div class="box-body text-center">
						<a href="https://www.binance.com/en/register?ref=38335667
">
							<img src="{{url('https://airdrops.io/wp-content/uploads/2019/04/brave-browser.gif')}}" alt="ads" class="animation" data-animation="tada" style="width:100%;" />

						</a>
					</div>
					
					
					<div class="row">
						<!-- col -->
						@foreach($data as $dat)
						<div class="col-lg-4 col-md-6 m-auto">
							<div class="box ribbon-box">
								@if($dat->pin == "feature")
								<div class="ribbon-two ribbon-two-success">																		
										<span>Feature</span>
								</div>
								@elseif($dat->pin == "popular")
								<div class="ribbon-two ribbon-two-warning">																		
										<span>Popular</span>
								</div>
								@elseif($dat->pin == "hot")	
								<div class="ribbon-two ribbon-two-danger">																		
										<span>Hot</span>
								</div>
								@endif
									
								<div class="tags ">
									<p class="mb-0 pt-0 pull-right badge badge-md badge-secondary mr-2" style="margin-top:-5px;">
										@if($dat->r == "r1")
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>																			
											<i class="fa fa-star"></i>
											<i class="fa fa-star-half-o"></i>
											<i class="fa fa-star-o"></i>
										@elseif($dat->r == "r2")
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>																			
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star-half-o"></i>
										@elseif($dat->r == "r3")
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>																			
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
										@endif
									</p>
									<span class="mb-0 pt-0 pull-right badge badge-md badge-warning mr-2" style="margin-top:-5px;" id="{{$dat->id}}"></span>
									<script>
													CountDownTimer('{{$dat->created_at}}', '{{$dat->id}}');
													function CountDownTimer(dt, id){
														var end = new Date('{{$dat->a_end}}'); 
														var _second = 1000;
														var _minute = _second * 60;
														var _hour = _minute * 60;
														var _day = _hour * 24;
														var timer; 					
													function showRemaining() { 						
														var now = new Date(); 						
														var distance = end - now; 						
														if (distance < 0) {
															clearInterval(timer);
															document.getElementById(id).innerHTML = 'Close';
															return;
														} 	
														var days = Math.floor(distance / _day);														
														document.getElementById(id).innerHTML ='Running ';														
														
													}
													timer = setInterval(showRemaining, 1000);													
													}
												</script>
								</div>
								<div class="box-body ">
									<div class="row ">
										<div class="col-sm-4 col-4">
											<img class="rounded-circle" src="{{$dat->img_url}}" alt="..." style="width:100px;" />

										</div>
										<div class="col-sm-8 col-8">
											<h4 class="mb-0 pt-2 mt-2">
												<a href="http://localhost:8000/airdrop/{{$dat->slug}}" class="">{{ $dat->a_name}}</a>
											</h4>
											<div class="mb-0 pt-10">
												<p class="mb-0 pt-0">
													<strong class="badge-lg">
														<i class="fa fa-money"></i>
													</strong>
													:

													<span class="text-info">{{$dat->free_coin}}</span>
												</p>
												<p class="float-left mt-2">
												@if($dat->fb == "facebook")
													<a href="" class="badge-lg">
														<i class="fa fa-facebook"></i>
													</a>
												@else
												@endif
												@if($dat->yu == "youtube")
													<a href="" class="badge-lg">
														<i class="fa fa-youtube"></i>
													</a>
												@else
												@endif
												@if($dat->phone == "phone")
													<a href="" class="badge-lg ">
														<i class="fa fa-phone"></i>
													</a>
												@else
												@endif
												@if($dat->tw == "twitter")
													<a href="" class="badge-lg">
														<i class="fa fa-twitter"></i>
													</a>
												@else
												@endif
												@if($dat->te == "telegram")
													<a href="" class="badge-lg">
														<i class="fa fa-telegram"></i>
													</a>
												@else
												@endif
												@if($dat->li == "linkedin")
													<a href="" class="badge-lg">
														<i class="fa fa-linkedin"></i>
													</a>
												@else
												@endif
												@if($dat->kyc == "kyc")
													<a href="" class="badge-lg">
														<i class="fa fa-address-card"></i>
													</a>
												@else
												@endif
												@if($dat->mdm == "medium")
													<a href="" class="badge-lg">
														<i class="fa fa-medium"></i>
													</a>
												@else
												@endif
												@if($dat->email == "email")
													<a href="" class="badge-lg">
													<i class="fa fa-envelope"></i>
													</a>
												@else
												@endif
												</p>
												<time class="float-right badge badge-secondary mt-2" id="{{$dat->a_name}}"></time>
												<script>
													CountDownTimer('{{$dat->created_at}}', '{{$dat->a_name}}');
													function CountDownTimer(dt, id){
														var end = new Date('{{$dat->a_end}}'); 
														var _second = 1000;
														var _minute = _second * 60;
														var _hour = _minute * 60;
														var _day = _hour * 24;
														var timer; 					
													function showRemaining() { 						
														var now = new Date(); 						
														var distance = end - now; 						
														if (distance < 0) {
															clearInterval(timer);
															document.getElementById(id).innerHTML = '0 days';
															return;
														} 	
														var days = Math.floor(distance / _day);														
														document.getElementById(id).innerHTML = days + 'days ';														
														
													}
													timer = setInterval(showRemaining, 1000);													
													}
												</script>
												
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- end col -->
						@endforeach
												
					</div>
				</div>
				<nav aria-label="Page navigation example">
					<ul class="pagination justify-content-center">
						<li class="page-item disabled">
							<a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
						</li>
						<li class="page-item">
							<a class="page-link" href="#">1</a>
						</li>
						<li class="page-item">
							<a class="page-link" href="#">2</a>
						</li>
						<li class="page-item">
							<a class="page-link" href="#">3</a>
						</li>
						<li class="page-item">
							<a class="page-link" href="#">Next</a>
						</li>
					</ul>
				</nav>
			</div>

			<div class="row mb-5">
					<div class="container">
						<div class="col-lg-12 col-md-12">
							<div class=" shadow">
								<a href="#"><img src="{{url('https://airdrops.io/wp-content/uploads/2019/04/brave-browser.gif')}}" alt=""></a>
							</div>
						</div>
					</div>
				</div>
				<div class="row mt-5 pt-5">
					<div class="container">
						<div class="col-lg-12 col-md-12">
							<div class="box-body shadow">
								<h3 class="text-center text-bold">Newslater</h3>
								<div class="container text-center">
									<form>
										<input type="text" class="form-control m-auto" style="width:300px; ">
										<button type="button"class="mt-5 pt-5 btn btn-sm btn-info">
											Subscribe Now
										</button>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
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
	</body>
</html>