<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<title>Parc Auto</title>
	<!--favicon-->
	<link rel="icon" href="assets/images/favicon-32x32.png" type="image/png" />
	<!-- Vector CSS -->
	<link href="assets/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet" />
	<!--plugins-->
	<link href="assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
	<link href="assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
	<link href="assets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />
	<!-- loader-->
	<link href="assets/css/pace.min.css" rel="stylesheet" />
	<script src="assets/js/pace.min.js"></script>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
	<!-- Icons CSS -->
	<link rel="stylesheet" href="assets/css/icons.css" />
	<!-- App CSS -->
	<link rel="stylesheet" href="assets/css/app.css" />
	<link rel="stylesheet" href="assets/css/dark-sidebar.css" />
	<link rel="stylesheet" href="assets/css/dark-theme.css" />
</head>

<body>
	<!-- wrapper -->
	<div class="wrapper">
		<!--sidebar-wrapper-->
		<div class="sidebar-wrapper" data-simplebar="true">
			<div class="sidebar-header">
				<div class="">
					<img src="assets/images/logo-icon.png" class="logo-icon-2" alt="" />
				</div>
				<div>
					<h4 class="logo-text">Parc Auto</h4>
				</div>
				<a href="javascript:;" class="toggle-btn ml-auto"> <i class="bx bx-menu"></i>
				</a>
			</div>
			<!--navigation-->
			<ul class="metismenu" id="menu">
				<li>
					<a href="javascript:;" class="has-arrow">
						<div class="parent-icon icon-color-1"><i class="bx bxs-dashboard"></i>
						</div>
						<div class="menu-title">Dashboard</div>
					</a>
					<ul>
						<li> <a href="/"><i class="bx bxs-home"></i>Accueil</a>
						</li>
						
					</ul>
				</li>
				
				<li class="menu-label">Les Services</li>
				
				<li>
					<a class="has-arrow" href="javascript:;">
						<div class="parent-icon icon-color-10"><i class="bx bx-spa"></i>
						</div>
						<div class="menu-title">Client</div>
					</a>
					<ul>
						<li> <a href="{{ route('clients.index')}}"><i class="bx bx-right-arrow-alt"></i>Afficher Client</a>
						</li>
						<li> <a href="{{ route('clients.create')}}"><i class="bx bx-right-arrow-alt"></i>Ajouter Client</a>
						</li>
						
					</ul>
				</li>
				<li>
					<a class="has-arrow" href="javascript:;">
						<div class="parent-icon icon-color-11"><i class="bx bx-repeat"></i>
						</div>
						<div class="menu-title">Status</div>
					</a>
					<ul>
						<li> <a href="{{ route('statuses.index')}}"><i class="bx bx-right-arrow-alt"></i>Afficher Status</a>
						</li>
						<li> <a href="{{ route('statuses.create')}}"><i class="bx bx-right-arrow-alt"></i>Crée status</a>
						</li>
					</ul>
				</li>
				<li>
					<a class="has-arrow" href="javascript:;">
						<div class="parent-icon icon-color-12"> <i class="bx bx-donate-blood"></i>
						</div>
						<div class="menu-title">Voitures</div>
					</a>
					<ul>
						<li> <a href="{{ route('cars.index')}}"><i class="bx bx-right-arrow-alt"></i>Afficher Voiture</a>
						</li>
						<li> <a href="{{ route('cars.create')}}"><i class="bx bx-right-arrow-alt"></i>Ajouter Voiture</a>
						</li>
		
					</ul>
				</li>
                <li>
					<a class="has-arrow" href="javascript:;">
						<div class="parent-icon icon-color-6"><i class="bx bx-task"></i>
						</div>
						<div class="menu-title">Opération</div>
					</a>
					<ul>
						<li> <a href="{{ route('alerts.index')}}"><i class="bx bx-right-arrow-alt"></i>Afficher Opération</a>
						</li>
						<li> <a href="{{ route('alerts.create')}}"><i class="bx bx-right-arrow-alt"></i>Ajouter Opération</a>
						</li>
					</ul>
				</li>
                <li>
					<a class="has-arrow" href="javascript:;">
                        <div class="parent-icon icon-color-5"><i class="bx bx-group"></i></div>
						<div class="menu-title">Employees</div>
					</a>
					<ul>
						<li> <a href="{{ route('users.index')}}"><i class="bx bx-right-arrow-alt"></i>Afficher Employer</a>
						</li>
						<li> <a href="{{ route('users.create')}}"><i class="bx bx-right-arrow-alt"></i>Ajouter Employer</a>
						</li>
					</ul>
				</li>
                                <li>
					<a class="has-arrow" href="javascript:;">
						<div class="parent-icon icon-color-7"><i class="bx bx-file"></i>
						</div>
						<div class="menu-title">Contrats</div>
					</a>
					<ul>
						<li> <a href="{{ route('contracts.index')}}"><i class="bx bx-right-arrow-alt"></i>Afficher Contrat</a>
						</li>
                        
						<li> <a href="{{ route('contracts.create')}}"><i class="bx bx-right-arrow-alt"></i>Ajouter Contrat</a>
						</li>
					</ul>
				</li>
                <li>
					<a class="has-arrow" href="javascript:;">
						<div class="parent-icon icon-color-4"><i class="bx bx-archive"></i>
						</div>
						<div class="menu-title">Documents</div>
					</a>
					<ul>
						<li> <a href="{{ route('documents.index')}}"><i class="bx bx-right-arrow-alt"></i>Afficher Documents</a>
						</li>
                        
						<li> <a href="{{ route('documents.create')}}"><i class="bx bx-right-arrow-alt"></i>Ajouter Documents</a>
						</li>
					</ul>
				</li>
                <li>
					<a class="has-arrow" href="javascript:;">
                        <div class="parent-icon icon-color-8"> <i class="bx bx-calendar-check"></i>
					
						</div>
						<div class="menu-title">Entretien</div>
					</a>
					<ul>
                      
						<li> <a href="{{ route('entretiens.index')}}"><i class="bx bx-right-arrow-alt"></i>Afficher Entretien</a>
						</li>
                        
						<li> <a href="{{ route('entretiens.create')}}"><i class="bx bx-right-arrow-alt"></i>Ajouter Entretien</a>
						</li>
					</ul>
				</li>
				
				<li class="menu-label">Others</li>
				
				<li>
					<a href="#" target="_blank">
						<div class="parent-icon icon-color-2"><i class="bx bx-cog"></i>
						</div>
						<div class="menu-title">Setting</div>
					</a>
				</li>
				<li>
					<a href="{{ route('logout') }}" onclick="event.preventDefault();
					document.getElementById('logout-form').submit();" target="_blank">
						<div class="parent-icon"><i class="bx bx-log-out"></i>
						</div>
						<span> {{ __('Logout') }}</span>
					</a>
					<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
						@csrf
					</form>
				</li>
			</ul>
			<!--end navigation-->
		</div>
		<!--end sidebar-wrapper-->
		<!--header-->
		<header class="top-header">
			<nav class="navbar navbar-expand">
				<div class="left-topbar d-flex align-items-center">
					<a href="javascript:;" class="toggle-btn">	<i class="bx bx-menu"></i>
					</a>
				</div>
				<div class="flex-grow-1 search-bar">
					<div class="input-group">
						<div class="input-group-prepend search-arrow-back">
							<button class="btn btn-search-back" type="button"><i class="bx bx-arrow-back"></i>
							</button>
						</div>
						<input type="text" class="form-control" placeholder="search" />
						<div class="input-group-append">
							<button class="btn btn-search" type="button"><i class="lni lni-search-alt"></i>
							</button>
						</div>
					</div>
				</div>
				<div class="right-topbar ml-auto">
					<ul class="navbar-nav">
						<li class="nav-item search-btn-mobile">
							<a class="nav-link position-relative" href="javascript:;">	<i class="bx bx-search vertical-align-middle"></i>
							</a>
						</li>
						<li class="nav-item dropdown dropdown-lg">
							<a class="nav-link dropdown-toggle dropdown-toggle-nocaret position-relative" href="javascript:;" data-toggle="dropdown">	<span class="msg-count">6</span>
								<i class="bx bx-comment-detail vertical-align-middle"></i>
							</a>
							<div class="dropdown-menu dropdown-menu-right">
								<a href="javascript:;">
									<div class="msg-header">
										<h6 class="msg-header-title">6 New</h6>
										<p class="msg-header-subtitle">Application Messages</p>
									</div>
								</a>
								<div class="header-message-list">
									<a class="dropdown-item" href="javascript:;">
										<div class="media align-items-center">
											<div class="user-online">
												<img src="https://via.placeholder.com/110x110" class="msg-avatar" alt="user avatar">
											</div>
											<div class="media-body">
												<h6 class="msg-name">Daisy Anderson <span class="msg-time float-right">5 sec
													ago</span></h6>
												<p class="msg-info">The standard chunk of lorem</p>
											</div>
										</div>
									</a>
									<a class="dropdown-item" href="javascript:;">
										<div class="media align-items-center">
											<div class="user-online">
												<img src="https://via.placeholder.com/110x110" class="msg-avatar" alt="user avatar">
											</div>
											<div class="media-body">
												<h6 class="msg-name">Althea Cabardo <span class="msg-time float-right">14
													sec ago</span></h6>
												<p class="msg-info">Many desktop publishing packages</p>
											</div>
										</div>
									</a>
									<a class="dropdown-item" href="javascript:;">
										<div class="media align-items-center">
											<div class="user-online">
												<img src="https://via.placeholder.com/110x110" class="msg-avatar" alt="user avatar">
											</div>
											<div class="media-body">
												<h6 class="msg-name">Oscar Garner <span class="msg-time float-right">8 min
													ago</span></h6>
												<p class="msg-info">Various versions have evolved over</p>
											</div>
										</div>
									</a>
									<a class="dropdown-item" href="javascript:;">
										<div class="media align-items-center">
											<div class="user-online">
												<img src="https://via.placeholder.com/110x110" class="msg-avatar" alt="user avatar">
											</div>
											<div class="media-body">
												<h6 class="msg-name">Katherine Pechon <span class="msg-time float-right">15
													min ago</span></h6>
												<p class="msg-info">Making this the first true generator</p>
											</div>
										</div>
									</a>
									<a class="dropdown-item" href="javascript:;">
										<div class="media align-items-center">
											<div class="user-online">
												<img src="https://via.placeholder.com/110x110" class="msg-avatar" alt="user avatar">
											</div>
											<div class="media-body">
												<h6 class="msg-name">Amelia Doe <span class="msg-time float-right">22 min
													ago</span></h6>
												<p class="msg-info">Duis aute irure dolor in reprehenderit</p>
											</div>
										</div>
									</a>
									<a class="dropdown-item" href="javascript:;">
										<div class="media align-items-center">
											<div class="user-online">
												<img src="https://via.placeholder.com/110x110" class="msg-avatar" alt="user avatar">
											</div>
											<div class="media-body">
												<h6 class="msg-name">Cristina Jhons <span class="msg-time float-right">2 hrs
													ago</span></h6>
												<p class="msg-info">The passage is attributed to an unknown</p>
											</div>
										</div>
									</a>
									<a class="dropdown-item" href="javascript:;">
										<div class="media align-items-center">
											<div class="user-online">
												<img src="https://via.placeholder.com/110x110" class="msg-avatar" alt="user avatar">
											</div>
											<div class="media-body">
												<h6 class="msg-name">James Caviness <span class="msg-time float-right">4 hrs
													ago</span></h6>
												<p class="msg-info">The point of using Lorem</p>
											</div>
										</div>
									</a>
									<a class="dropdown-item" href="javascript:;">
										<div class="media align-items-center">
											<div class="user-online">
												<img src="https://via.placeholder.com/110x110" class="msg-avatar" alt="user avatar">
											</div>
											<div class="media-body">
												<h6 class="msg-name">Peter Costanzo <span class="msg-time float-right">6 hrs
													ago</span></h6>
												<p class="msg-info">It was popularised in the 1960s</p>
											</div>
										</div>
									</a>
									<a class="dropdown-item" href="javascript:;">
										<div class="media align-items-center">
											<div class="user-online">
												<img src="https://via.placeholder.com/110x110" class="msg-avatar" alt="user avatar">
											</div>
											<div class="media-body">
												<h6 class="msg-name">David Buckley <span class="msg-time float-right">2 hrs
													ago</span></h6>
												<p class="msg-info">Various versions have evolved over</p>
											</div>
										</div>
									</a>
									<a class="dropdown-item" href="javascript:;">
										<div class="media align-items-center">
											<div class="user-online">
												<img src="https://via.placeholder.com/110x110" class="msg-avatar" alt="user avatar">
											</div>
											<div class="media-body">
												<h6 class="msg-name">Thomas Wheeler <span class="msg-time float-right">2 days
													ago</span></h6>
												<p class="msg-info">If you are going to use a passage</p>
											</div>
										</div>
									</a>
									<a class="dropdown-item" href="javascript:;">
										<div class="media align-items-center">
											<div class="user-online">
												<img src="https://via.placeholder.com/110x110" class="msg-avatar" alt="user avatar">
											</div>
											<div class="media-body">
												<h6 class="msg-name">Johnny Seitz <span class="msg-time float-right">5 days
													ago</span></h6>
												<p class="msg-info">All the Lorem Ipsum generators</p>
											</div>
										</div>
									</a>
								</div>
								<a href="javascript:;">
									<div class="text-center msg-footer">View All Messages</div>
								</a>
							</div>
						</li>
						<li class="nav-item dropdown dropdown-lg">
							<a class="nav-link dropdown-toggle dropdown-toggle-nocaret position-relative" href="javascript:;" data-toggle="dropdown">	<i class="bx bx-bell vertical-align-middle"></i>
								<span class="msg-count">8</span>
							</a>
							<div class="dropdown-menu dropdown-menu-right">
								<a href="javascript:;">
									<div class="msg-header">
										<h6 class="msg-header-title">8 New</h6>
										<p class="msg-header-subtitle">Application Notifications</p>
									</div>
								</a>
								<div class="header-notifications-list">
									<a class="dropdown-item" href="javascript:;">
										<div class="media align-items-center">
											<div class="notify bg-light-primary text-primary"><i class="bx bx-group"></i>
											</div>
											<div class="media-body">
												<h6 class="msg-name">New Customers<span class="msg-time float-right">14 Sec
													ago</span></h6>
												<p class="msg-info">5 new user registered</p>
											</div>
										</div>
									</a>
									<a class="dropdown-item" href="javascript:;">
										<div class="media align-items-center">
											<div class="notify bg-light-danger text-danger"><i class="bx bx-cart-alt"></i>
											</div>
											<div class="media-body">
												<h6 class="msg-name">New Orders <span class="msg-time float-right">2 min
													ago</span></h6>
												<p class="msg-info">You have recived new orders</p>
											</div>
										</div>
									</a>
									<a class="dropdown-item" href="javascript:;">
										<div class="media align-items-center">
											<div class="notify bg-light-shineblue text-shineblue"><i class="bx bx-file"></i>
											</div>
											<div class="media-body">
												<h6 class="msg-name">24 PDF File<span class="msg-time float-right">19 min
													ago</span></h6>
												<p class="msg-info">The pdf files generated</p>
											</div>
										</div>
									</a>
									<a class="dropdown-item" href="javascript:;">
										<div class="media align-items-center">
											<div class="notify bg-light-cyne text-cyne"><i class="bx bx-send"></i>
											</div>
											<div class="media-body">
												<h6 class="msg-name">Time Response <span class="msg-time float-right">28 min
													ago</span></h6>
												<p class="msg-info">5.1 min avarage time response</p>
											</div>
										</div>
									</a>
									<a class="dropdown-item" href="javascript:;">
										<div class="media align-items-center">
											<div class="notify bg-light-purple text-purple"><i class="bx bx-home-circle"></i>
											</div>
											<div class="media-body">
												<h6 class="msg-name">New Product Approved <span
													class="msg-time float-right">2 hrs ago</span></h6>
												<p class="msg-info">Your new product has approved</p>
											</div>
										</div>
									</a>
									<a class="dropdown-item" href="javascript:;">
										<div class="media align-items-center">
											<div class="notify bg-light-warning text-warning"><i class="bx bx-message-detail"></i>
											</div>
											<div class="media-body">
												<h6 class="msg-name">New Comments <span class="msg-time float-right">4 hrs
													ago</span></h6>
												<p class="msg-info">New customer comments recived</p>
											</div>
										</div>
									</a>
									<a class="dropdown-item" href="javascript:;">
										<div class="media align-items-center">
											<div class="notify bg-light-success text-success"><i class='bx bx-check-square'></i>
											</div>
											<div class="media-body">
												<h6 class="msg-name">Your item is shipped <span class="msg-time float-right">5 hrs
													ago</span></h6>
												<p class="msg-info">Successfully shipped your item</p>
											</div>
										</div>
									</a>
									<a class="dropdown-item" href="javascript:;">
										<div class="media align-items-center">
											<div class="notify bg-light-sinata text-sinata"><i class='bx bx-user-pin'></i>
											</div>
											<div class="media-body">
												<h6 class="msg-name">New 24 authors<span class="msg-time float-right">1 day
													ago</span></h6>
												<p class="msg-info">24 new authors joined last week</p>
											</div>
										</div>
									</a>
									<a class="dropdown-item" href="javascript:;">
										<div class="media align-items-center">
											<div class="notify bg-light-mehandi text-mehandi"><i class='bx bx-door-open'></i>
											</div>
											<div class="media-body">
												<h6 class="msg-name">Defense Alerts <span class="msg-time float-right">2 weeks
													ago</span></h6>
												<p class="msg-info">45% less alerts last 4 weeks</p>
											</div>
										</div>
									</a>
								</div>
								<a href="javascript:;">
									<div class="text-center msg-footer">View All Notifications</div>
								</a>
							</div>
						</li>
						<li class="nav-item dropdown dropdown-user-profile">
							<a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="javascript:;" data-toggle="dropdown">
								<div class="media user-box align-items-center">
									<div class="media-body user-info">
										<p class="user-name mb-0">{{ Auth::user()->name }}</p>
										<p class="designattion mb-0">{{ Auth::user()->status}}</p>
									</div>
									<img src="https://nsa40.casimages.com/img/2021/09/26/21092609201734367.png" class="user-img" alt="user avatar">
								</div>
							</a>
							<div class="dropdown-menu dropdown-menu-right">	<a class="dropdown-item" href="javascript:;"><i
										class="bx bx-user"></i><span>Profile</span></a>
								<a class="dropdown-item" href="javascript:;"><i
										class="bx bx-cog"></i><span>Settings</span></a>
								<a class="dropdown-item" href="/"><i
										class="bx bx-tachometer"></i><span>Dashboard</span></a>
								{{-- <a class="dropdown-item" href="javascript:;"><i
										class="bx bx-wallet"></i><span>Earnings</span></a>
								<a class="dropdown-item" href="javascript:;"><i
										class="bx bx-cloud-download"></i><span>Downloads</span></a> --}} 
										<div class="dropdown-divider mb-0"></div>	<a class="dropdown-item" href="{{ route('logout') }}"
										onclick="event.preventDefault();
													  document.getElementById('logout-form').submit();" ><i
												class="bx bx-power-off"></i><span> {{ __('Logout') }}</span></a>
												<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
													@csrf
												</form>
							</div>
						</li>
						<li class="nav-item dropdown dropdown-language">
							<a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="javascript:;" data-toggle="dropdown">
								<div class="lang d-flex">
									<div><i class="flag-icon flag-icon-fr"></i>
									</div>
									<div><span>Fr</span>
									</div>
								</div>
							</a>
							<div class="dropdown-menu dropdown-menu-right">	<a class="dropdown-item" href="javascript:;"><i
										class="flag-icon flag-icon-de"></i><span>German</span></a>
								
								<a class="dropdown-item" href="javascript:;"><i
										class="flag-icon flag-icon-um"></i><span>English</span></a>
								<a class="dropdown-item" href="javascript:;"><i
										class="flag-icon flag-icon-in"></i><span>Hindi</span></a>
								<a class="dropdown-item" href="javascript:;"><i
										class="flag-icon flag-icon-cn"></i><span>Chinese</span></a>
								<a class="dropdown-item" href="javascript:;"><i
										class="flag-icon flag-icon-ae"></i><span>Arabic</span></a>
							</div>
						</li>
					</ul>
				</div>
			</nav>
		</header>
		<!--end header-->
		<!--page-wrapper-->
		<div class="page-wrapper">
			<!--page-content-wrapper-->
			<div class="page-content-wrapper">
				<div class="page-content">
					<div class="row">
						<div class="col-12 col-lg-3">
							<div class="card radius-15 bg-voilet">
								<div class="card-body">
									<div class="d-flex align-items-center">
										<div>
											<h2 class="mb-0 text-white" >
												<?php 
												$count = DB::table('clients')->count();
												echo '<h3 style="color: white">'.$count.'</h3>';
												?> 
												 </h2>
										</div>
										<div class="ml-auto font-35 text-white"><i class="bx bx-body"></i>
										</div>
									</div>
									<div class="d-flex align-items-center">
										<div>
											<p class="mb-0 text-white">Clients</p>

										</div>
										<div class="ml-auto font-14 text-white">+23.4%</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-12 col-lg-3">
							<div class="card radius-15 bg-primary-blue">
								<div class="card-body">
									<div class="d-flex align-items-center">
										<div>
											<h2 class="mb-0 text-white"><?php 
												$count = DB::table('cars')->count();
												echo '<h3 style="color: white">'.$count.'</h3>';
												?>  <i class='bx bxs-down-arrow-alt font-14 text-white'></i> </h2>
										</div>
										<div class="ml-auto font-35 text-white"><i class="bx bx-car"></i>
										</div>
									</div>
									<div class="d-flex align-items-center">
										<div>
											<p class="mb-0 text-white">Voiture</p>
										</div>
										<div class="ml-auto font-14 text-white">+14.7%</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-12 col-lg-3">
							<div class="card radius-15 bg-rose">
								<div class="card-body">
									<div class="d-flex align-items-center">
										<div>
											<h2 class="mb-0 text-white">
												<?php 
												$count = DB::table('contracts')->count();
												echo '<h3 style="color: white">'.$count.'</h3>';
												?>  <i class='bx bxs-up-arrow-alt font-14 text-white'></i> </h2>
										</div>
										<div class="ml-auto font-35 text-white"><i class="bx bx-certification"></i>
										</div>
									</div>
									<div class="d-flex align-items-center">
										<div>
											<p class="mb-0 text-white">Location</p>
										</div>
										<div class="ml-auto font-14 text-white">-12.9%</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-12 col-lg-3">
							<div class="card radius-15 bg-sunset">
								<div class="card-body">
									<div class="d-flex align-items-center">
										<div>
											<h2 class="mb-0 text-white"><?php 
												$count = DB::table('users')->count();
												echo '<h3 style="color: white">'.$count.'</h3>';
												?>  <i class='bx bxs-up-arrow-alt font-14 text-white'></i> </h2>
										</div>
										<div class="ml-auto font-35 text-white"><i class="bx bx-user"></i>
										</div>
									</div>
									<div class="d-flex align-items-center">
										<div>
											<p class="mb-0 text-white">Employée</p>
										</div>
										<div class="ml-auto font-14 text-white">+13.6%</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!--end row-->
					<div class="card radius-15">
						<div class="card-header border-bottom-0">
							<div class="d-lg-flex align-items-center">
								<div>
									<h5 class="mb-2 mb-lg-0">location</h5>
								</div>
								<div class="ml-lg-auto mb-2 mb-lg-0">
									<div class="btn-group-round">
										<div class="btn-group">
											
											<button type="button" class="btn btn-white">Mensuel</button>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="card-body">
							<div id="chart2"></div>
						</div>
					</div>
					<div class="card-deck">
						<div class="card radius-15">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<div>
										<h5 class="mb-0">Revenue de location</h5>
									</div>
									<div class="dropdown ml-auto">
										<div class="cursor-pointer font-24 dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown"><i class="bx bx-dots-horizontal-rounded"></i>
										</div>
										<div class="dropdown-menu dropdown-menu-right">	<a class="dropdown-item" href="javascript:;">Action</a>
											<a class="dropdown-item" href="javascript:;">Another action</a>
											<div class="dropdown-divider"></div>	<a class="dropdown-item" href="javascript:;">Something else here</a>
										</div>
									</div>
								</div>
								<div id="chart2"></div>
								<div class="legends">
									<div class="row">
										<div class="col-12 col-lg-5">
											<div class="d-flex align-items-center justify-content-between">
												<div class="text-secondary"><i class='bx bxs-circle font-13 text-primary-blue mr-2'></i>Revenue</div>
												<div><?php 
													$count = DB::table('contracts')->sum('amount');
													echo '<h6 style="color: black">'.$count.' DH</h6>';
													?> </div>
												
											</div>
											<div class="my-2"></div>
											<div class="d-flex align-items-center justify-content-between">
												<div class="text-secondary"><i class='bx bxs-circle font-13 text-shineblue mr-2'></i>Clients</div>
												<div><?php 
													$count = DB::table('clients')->count('cin');
													echo '<h6 style="color: black">'.$count.' </h6>';
													?></div>
												
											</div>
										</div>
										<div class="col-12 col-lg-2">
											<div class="vertical-separater"></div>
										</div>
										<div class="col-12 col-lg-5">
											<div class="d-flex align-items-center justify-content-between">
												<div class="text-secondary"><i class='bx bxs-circle font-13 text-primary mr-2'></i>Tablet</div>
												<div>$687.03</div>
												<div class="text-secondary">24.7%</div>
											</div>
											<div class="my-2"></div>
											<div class="d-flex align-items-center justify-content-between">
												<div class="text-secondary"><i class='bx bxs-circle font-13 text-red mr-2'></i>Unknown</div>
												<div>$142.07</div>
												<div class="text-secondary">14.8%</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="card radius-15">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<div>
										<h5 class="mb-0">Traffic</h5>
									</div>
									<div class="dropdown ml-auto">
										<div class="cursor-pointer font-24 dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown"><i class="bx bx-dots-horizontal-rounded"></i>
										</div>
										<div class="dropdown-menu dropdown-menu-right">	<a class="dropdown-item" href="javascript:;">Action</a>
											<a class="dropdown-item" href="javascript:;">Another action</a>
											<div class="dropdown-divider"></div>	<a class="dropdown-item" href="javascript:;">Something else here</a>
										</div>
									</div>
								</div>
								<div class="row mt-3">
									<div class="col-12 col-lg-6">
										<div class="card radius-15 mx-0">
											<div class="card-body">
												<div class="d-flex align-items-center">
													<div>
														<p class="mb-0">Store Visits</p>
													</div>
													<div class="ml-auto text-success"><span>+22%</span>
													</div>
												</div>
												<h4 class="mb-0">8950</h4>
											</div>
										</div>
									</div>
									<div class="col-12 col-lg-6">
										<div class="card radius-15 mx-0">
											<div class="card-body">
												<div class="d-flex align-items-center">
													<div>
														<p class="mb-0">Visitors</p>
													</div>
													<div class="ml-auto text-purple"><span>-24%</span>
													</div>
												</div>
												<h4 class="mb-0">1520</h4>
											</div>
										</div>
									</div>
								</div>
								<div id="chart3"></div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-12 col-lg-4 d-flex align-items-stretch">
							<div class="card radius-15 w-100">
								<div class="card-body">
									<div class="d-lg-flex align-items-center">
										<div>
											<h5 class="mb-4">Top Categories</h5>
										</div>
									</div>
									<div class="progress-wrapper">
										<p class="mb-1">Electronics <span class="float-right">45%</span>
										</p>
										<div class="progress radius-15" style="height:4px;">
											<div class="progress-bar" role="progressbar" style="width: 45%"></div>
										</div>
									</div>
									<hr>
									<div class="progress-wrapper">
										<p class="mb-1">Clothing <span class="float-right">55%</span>
										</p>
										<div class="progress radius-15" style="height:4px;">
											<div class="progress-bar bg-voilet" role="progressbar" style="width: 55%"></div>
										</div>
									</div>
									<hr>
									<div class="progress-wrapper">
										<p class="mb-1">Furnitures <span class="float-right">64%</span>
										</p>
										<div class="progress radius-15" style="height:4px;">
											<div class="progress-bar bg-red-light" role="progressbar" style="width: 64%"></div>
										</div>
									</div>
									<hr>
									<div class="progress-wrapper">
										<p class="mb-1">Accessories <span class="float-right">78%</span>
										</p>
										<div class="progress radius-15" style="height:4px;">
											<div class="progress-bar bg-sunset" role="progressbar" style="width: 78%"></div>
										</div>
									</div>
									<hr>
									<div class="progress-wrapper">
										<p class="mb-1">Jewellery <span class="float-right">82%</span>
										</p>
										<div class="progress radius-15" style="height:4px;">
											<div class="progress-bar bg-wall" role="progressbar" style="width: 82%"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-12 col-lg-8 d-flex align-items-stretch">
							<div class="card radius-15 w-100">
								<div class="card-body">
									<div class="d-flex align-items-center">
										<div>
											<h5 class="mb-0">Sales Forecast</h5>
										</div>
										<div class="dropdown ml-auto">
											<div class="cursor-pointer text-dark font-24 dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown"><i class="bx bx-dots-horizontal-rounded"></i>
											</div>
											<div class="dropdown-menu dropdown-menu-right">	<a class="dropdown-item" href="javascript:;">Action</a>
												<a class="dropdown-item" href="javascript:;">Another action</a>
												<div class="dropdown-divider"></div>	<a class="dropdown-item" href="javascript:;">Something else here</a>
											</div>
										</div>
									</div>
									<div class="row mt-3">
										<div class="col-12 col-lg-6">
											<div class="card radius-15 mx-0">
												<div class="card-body">
													<div class="media align-items-center">
														<div class="media-body">
															<p class="text-secondary mb-0">Revenue</p>
															<h4 class="mb-0 ">+24.5%</h4>
														</div>
														<div id="chart4"></div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-12 col-lg-6">
											<div class="card radius-15 mx-0">
												<div class="card-body">
													<div class="media align-items-center">
														<div class="media-body">
															<p class="text-secondary mb-0">Net Profit</p>
															<h4 class="mb-0">-2.7%</h4>
														</div>
														<div id="chart5"></div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-12 col-lg-6">
											<div class="card radius-15 mx-0 mb-3 mb-md-0">
												<div class="card-body">
													<div class="media align-items-center">
														<div class="media-body">
															<p class="text-secondary mb-0">Orders</p>
															<h4 class="mb-0">+32.6%</h4>
														</div>
														<div id="chart6"></div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-12 col-lg-6">
											<div class="card radius-15 mx-0 mb-0">
												<div class="card-body">
													<div class="media align-items-center">
														<div class="media-body">
															<p class="text-secondary mb-0">Visitors</p>
															<h4 class="mb-0">+60.2%</h4>
														</div>
														<div id="chart7"></div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!--end row-->

					<!--end row-->
					<div class="card radius-15">
						<div class="card-header border-bottom-0">
							<div class="d-flex align-items-center">
								<div>
									<h5 class="mb-0">Recent Orders</h5>
								</div>
								<div class="ml-auto">
									<button type="button" class="btn btn-white radius-15">View More</button>
								</div>
							</div>
						</div>
						<div class="card-body p-0">
							<div class="table-responsive">
								<table class="table mb-0">
									<thead>
										<tr>
											<th>Photo</th>
											<th>Product Name</th>
											<th>Customer</th>
											<th>Product id</th>
											<th>Price</th>
											<th>Status</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>
												<div class="product-img bg-transparent border">
													<img src="assets/images/icons/smartphone.png" width="35" alt="">
												</div>
											</td>
											<td>Honor Mobile 7x</td>
											<td>Mitchell Daniel</td>
											<td>#835478</td>
											<td>$54.68</td>
											<td><a href="javascript:;" class="btn btn-sm btn-light-success btn-block radius-30">Delivered</a>
											</td>
										</tr>
										<tr>
											<td>
												<div class="product-img bg-transparent border">
													<img src="assets/images/icons/watch.png" width="35" alt="">
												</div>
											</td>
											<td>Hand Watch</td>
											<td>Milona Burke</td>
											<td>#987546</td>
											<td>$43.78</td>
											<td><a href="javascript:;" class="btn btn-sm btn-light-warning btn-block radius-30">Pending</a>
											</td>
										</tr>
										<tr>
											<td>
												<div class="product-img bg-transparent border">
													<img src="assets/images/icons/laptop.png" width="35" alt="">
												</div>
											</td>
											<td>Mini Laptop</td>
											<td>Craig Clayton</td>
											<td>#325687</td>
											<td>$62.21</td>
											<td><a href="javascript:;" class="btn btn-sm btn-light-success btn-block radius-30">Delivered</a>
											</td>
										</tr>
										<tr>
											<td>
												<div class="product-img bg-transparent border">
													<img src="assets/images/icons/shirt.png" width="35" alt="">
												</div>
											</td>
											<td>Slim-T-Shirt</td>
											<td>Clark Andola</td>
											<td>#658972</td>
											<td>$75.68</td>
											<td><a href="javascript:;" class="btn btn-sm btn-light-danger btn-block radius-30">Cancelled</a>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		<!--end page-wrapper-->
		<!--start overlay-->
		<div class="overlay toggle-btn-mobile"></div>
		<!--end overlay-->
		<!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
		<!--End Back To Top Button-->
		<!--footer -->
		<div class="footer">
		
		</div>
		<!-- end footer -->
	</div>
	<!-- end wrapper -->
	<!--start switcher-->
	<div class="switcher-wrapper">
		<div class="switcher-btn"> <i class='bx bx-cog bx-spin'></i>
		</div>
		<div class="switcher-body">
			<h5 class="mb-0 text-uppercase">Theme Customizer</h5>
			<hr/>
			<h6 class="mb-0">Theme Styles</h6>
			<hr/>
			<div class="d-flex align-items-center justify-content-between">
				<div class="custom-control custom-radio">
					<input type="radio" id="darkmode" name="customRadio" class="custom-control-input">
					<label class="custom-control-label" for="darkmode">Dark Mode</label>
				</div>
				<div class="custom-control custom-radio">
					<input type="radio" id="lightmode" name="customRadio" checked class="custom-control-input">
					<label class="custom-control-label" for="lightmode">Light Mode</label>
				</div>
			</div>
			<hr/>
			<div class="custom-control custom-switch">
				<input type="checkbox" class="custom-control-input" id="DarkSidebar">
				<label class="custom-control-label" for="DarkSidebar">Dark Sidebar</label>
			</div>
			<hr/>
			<div class="custom-control custom-switch">
				<input type="checkbox" class="custom-control-input" id="ColorLessIcons">
				<label class="custom-control-label" for="ColorLessIcons">Color Less Icons</label>
			</div>
		</div>
	</div>
                

                <div class="links">
                    
                    
              
                
  
             

                   
                    
            

            
                    
              	<!--end switcher-->
	<!-- JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<!--plugins-->
	<script src="assets/plugins/simplebar/js/simplebar.min.js"></script>
	<script src="assets/plugins/metismenu/js/metisMenu.min.js"></script>
	<script src="assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
	<!-- Vector map JavaScript -->
	<script src="assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js"></script>
	<script src="assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js"></script>
	<script src="assets/plugins/vectormap/jquery-jvectormap-in-mill.js"></script>
	<script src="assets/plugins/vectormap/jquery-jvectormap-us-aea-en.js"></script>
	<script src="assets/plugins/vectormap/jquery-jvectormap-uk-mill-en.js"></script>
	<script src="assets/plugins/vectormap/jquery-jvectormap-au-mill.js"></script>
	<script src="assets/plugins/apexcharts-bundle/js/apexcharts.min.js"></script>
	<script src="assets/js/index.js"></script>
	<!-- App JS -->
	<script src="assets/js/app.js"></script>
	<script>
		new PerfectScrollbar('.dashboard-social-list');
		new PerfectScrollbar('.dashboard-top-countries');
	</script>
</body>

</html>