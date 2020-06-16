
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />

		<meta http-equiv="X-UA-Compatible" content="IE=edge" />

		<meta name="viewport" content="" />

		<meta name="viewport" content="">

		<meta name="author" content="" />

		<link rel="icon" href="{{asset('img/favicon.ico')}}" />

		<link rel="stylesheet" href="{{asset('bootstrap-milestones/dist/bootstrap-milestones.min.css')}}" />

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
				color:#F7C35F;}
   			.fa-star-o{
   				color:#F7C35F;}
   			i.fa.fa-money{
   				color:#19E321; }
   			i.mdi-poll{
   				color:#407CFB; }
   			i.mdi-clock{
   				color:#F0CCEE;}
   			.mt-40{
   				margin-top:50px;}
		</style>

	</head>
	<body class="hold-transition light-skin sidebar-mini theme-primary">
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
				<!-- row -->
				<div class="row mt-5 pt-5 ">
					<!-- col -->
					<div class="col-lg-6 col-md-6">
						<div class="box shadow">
							<div class="box-body">
								<div class="row">
									<div class="col-4 mb-3">
										<img class="rounded-circle" src="{{$airdrop->img_url}}" alt="..." style="width:100px;" />

									</div>
									<div class="col-8 mt-5 mb-3">
										@if($airdrop->pin == "popular")
											<h4 class=" mb-0 pt-0 badge badge-md badge-warning">Popular</h4>
										@elseif($airdrop->pin == "feature")
											<h4 class=" mb-0 pt-0 badge badge-md badge-success">Feature</h4>
										@else($airdrop->pin == "hot")
											<h4 class=" mb-0 pt-0 badge badge-md badge-danger">Hot</h4>
										@endif
										
										<h3>{{$airdrop->a_name}}</h3>
										
										@if($airdrop->r == "r1")
										<p class="mb-0 pt-0  mr-2" style="margin-top:-5px;">
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>																			
											<i class="fa fa-star"></i>
											<i class="fa fa-star-half-o"></i>
											<i class="fa fa-star-o"></i>
										</p>
										@elseif($airdrop->r == "r2")
										<p class="mb-0 pt-0  mr-2" style="margin-top:-5px;">
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>																			
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star-half-o"></i>
										</p>
										@else($airdrop->r == "r3")
										<p class="mb-0 pt-0  mr-2" style="margin-top:-5px;">
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>																			
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
										</p>
										@endif									
									</div>
									<p class="ml-3 text-center">A Global Digital Advertising Screen Network Open to Everyone.</p>
									<div class="ml-3">										
										<a href="{{$airdrop->a_url}}" class="btn btn-rounded btn-success mr-2">Join Airdrop</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- col end -->
					<div class="col-lg-6 col-md-6">
						<div class="box shadow">
							<div class="box-header with-border">
								<h4 class="box-title text-bold">Airdrop Details:</h4>
							</div>
							<div class="box-body">
								<div class="row">
									<div class="col-4">
										<h4>
											<i class="fa fa-money"></i>
											Free coin

										</h4>
										<h4>
											<i class="fa fa-money"></i>
											Est Value

										</h4>
										<h4>
											<i class="mdi mdi-poll"></i>
											Total Poll

										</h4>
										<h4>
											<i class="mdi mdi-clock"></i>
											End Date

										</h4>
									</div>
									<div class="col-8">
										<h4 class="text-info">
											: {{ $airdrop->free_coin}}
											
										</h4>
										<h4 class="text-info">
											: {{$airdrop->est_value}}

											<span>$</span>
										</h4>
										<h4 class="text-info">
											: {{$airdrop->poll}}								
										</h4>
										<h4 class="text-info">: <span id="day"></span>
										<script>
													CountDownTimer('{{$airdrop->created_at}}', 'day');
													function CountDownTimer(dt, id){
														var end = new Date('{{$airdrop->a_end}}'); 
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
														document.getElementById(id).innerHTML =days + 'days ';														
														
													}
													timer = setInterval(showRemaining, 1000);													
													}
												</script>
										</h4>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- col end -->
				</div>
				<!-- row end -->
				<!-- row -->
				<div class="row ">
					<div class="container">
						<div class=" col-lg-12 col-md-12 ">
							<div class="box shadow">
								<div class="box-header with-border text-center">
									<h4 class="box-title text-bold">Required Tools:</h4>
								</div>
								<div class="box-body text-center">
												@if($airdrop->fb == "facebook")
													<a href="" class="btn btn-circle btn-secondary mr-2">
														<i class="fa fa-facebook"></i>
													</a>
												@else
												@endif
												@if($airdrop->yu == "youtube")
													<a href="" class="btn btn-circle btn-secondary mr-2">
														<i class="fa fa-youtube"></i>
													</a>
												@else
												@endif
												@if($airdrop->phone == "phone")
													<a href="" class="btn btn-circle btn-secondary mr-2 ">
														<i class="fa fa-phone"></i>
													</a>
												@else
												@endif
												@if($airdrop->tw == "twitter")
													<a href="" class="btn btn-circle btn-secondary mr-2">
														<i class="fa fa-twitter"></i>
													</a>
												@else
												@endif
												@if($airdrop->te == "telegram")
													<a href="" class="btn btn-circle btn-secondary mr-2">
														<i class="fa fa-telegram"></i>
													</a>
												@else
												@endif
												@if($airdrop->li == "linkedin")
													<a href="" class="btn btn-circle btn-secondary mr-2">
														<i class="fa fa-linkedin"></i>
													</a>
												@else
												@endif
												@if($airdrop->kyc == "kyc")
													<a href="" class="btn btn-circle btn-secondary mr-2">
														<i class="fa fa-address-card"></i>
													</a>
												@else
												@endif
												@if($airdrop->mdm == "medium")
													<a href="" class="btn btn-circle btn-secondary mr-2">
														<i class="fa fa-medium"></i>
													</a>
												@else
												@endif
												@if($airdrop->email == "email")
													<a href="" class="btn btn-circle btn-secondary mr-2">
													<i class="fa fa-envelope"></i>
													</a>
												@else
												@endif	
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- row end -->
				<!-- row -->
				<div class="row mt-5 pt-5 ">
					<!-- col -->
					<div class="col-lg-12 col-md-12">
						<div class="box shadow">
							<div class="box-header with-border">
								<h4 class="box-title text-bold">Step by step:</h4>
							</div>
							<div class="box-body">
								<ul class="milestones">
									<li>
										<i class="milestone-default fa fa-circle"></i>
										{{$airdrop->s1}}										
									</li>
									<li>
										<i class="milestone-default fa fa-circle"></i>
										{{$airdrop->s2}}

									</li>
									<li>
										<i class="milestone-default fa fa-circle"></i>
										{{$airdrop->s3}}

									</li>
									<li>
										<i class="milestone-default fa fa-circle"></i>
										{{$airdrop->s4}}
									</li>
									<li>
										<i class="milestone-default fa fa-circle"></i>
										{{$airdrop->s5}}
									</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- col end -->
					<div class="col-lg-12 col-md-12">
						<div class="box shadow">
							<div class="box-header with-border">
								<h4 class="box-title text-bold">Project Information:</h4>
							</div>
							<div class="box-body">							
								<blockquote>
									<p>{{$airdrop->ai}}
									</p>
								</blockquote>
							</div>
						</div>
					</div>
					<!-- col end -->
				</div>
				<!-- row end -->
				
				<div class="row mt-5 pt-5">
					<div class="container">
						<div class="col-lg-12 col-md-12">
							<div class="box-body shadow">
								<h3 class="text-center text-bold">Newslater</h3>
								<div class="container text-center">
									<form method="post" action="/newslater">
									@csrf
										<input type="text" name="email" placeholder="your@email.com" class="text-center form-control m-auto" style="width:300px; ">
										<button type="submit"class="mt-5 pt-5 btn btn-sm btn-info">
											Subscribe Now
										</button>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Footer -->
				<footer class="page-footer font-small special-color-dark mt-40 mb-0 pt-4">
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
			
				<!-- Vendor JS -->
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
				
			</div>
		</div>
	</body>
</html>