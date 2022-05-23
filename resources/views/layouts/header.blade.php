
<header class="navbar-light navbar-sticky header-static">
	{{--  <!-- Logo Nav START -->  --}}
	<nav class="navbar navbar-expand-lg">
		<div class="container">
			{{--  <!-- Logo START -->  --}}
			{{--  <!-- <a class="navbar-brand" href="index-2.html">
				<img class="navbar-brand-item light-mode-item" src="assets/images/logo.svg" alt="logo">	
				<img class="navbar-brand-item dark-mode-item" src="assets/images/logo-light.svg" alt="logo">			
			</a> -->  --}}
			{{--  <!-- Logo END -->  --}}

			{{--  <!-- Responsive navbar toggler -->  --}}
			<button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
			  <span class="text-body h6 d-none d-sm-inline-block">Menu</span>
			  <span class="navbar-toggler-icon"></span>
		  </button>

			{{--  <!-- Main navbar START -->  --}}
			<div class="collapse navbar-collapse" id="navbarCollapse">
				<ul class="navbar-nav navbar-nav-scroll mx-auto">
					
					{{--  <!-- Nav item 1 Demos -->  --}}
					<li class="nav-item dropdown">
						<a class="nav-link active" href="{{ route('/') }}" id="homeMenu">الرئيسية</a>
					</li>

					{{--  <!-- Nav item 2 Pages -->  --}}
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="pagesMenu" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">مباني الجامعة</a>
						<ul class="dropdown-menu" aria-labelledby="pagesMenu">
							{{--  <!-- Dropdown submenu -->  --}}
							<li class="dropdown-submenu"> 
								<a class="dropdown-item" href="{{ route('college_dean') }}">مبنى عمادة الكلية</a>
							</li>
							{{--  <!-- Dropdown submenu 2 -->  --}}
							

							<li class="dropdown-divider"></li>
							<li class="dropdown-submenu dropend">
								<a class="dropdown-item dropdown-toggle" href="#">مبنى قسم الحاسب الالي  <br>والتقنيةالادارية </a>
								<ul class="dropdown-menu dropdown-menu-start" data-bs-popper="none">
									<!-- dropdown submenu open right -->
									<li class="dropdown-submenu dropend">
										<a class="dropdown-item dropdown-toggle" href="#">تخصصات الحاسب الالي</a>
										<ul class="dropdown-menu" data-bs-popper="none">
											<li> <a class="dropdown-item" href="{{ route('support') }}">دعم فني</a> </li>
											<li> <a class="dropdown-item" href="{{ route('networks') }}">شبكات</a> </li>
										</ul>
									</li>
									<!-- dropdown submenu open left -->
									<li class="dropdown-submenu dropend">
										<a class="dropdown-item dropdown-toggle" href="#"> تخصصات التقنية الادارية</a>
										<ul class="dropdown-menu dropdown-menu-end" data-bs-popper="none">
											<li> <a class="dropdown-item" href="{{ route('office-management') }}">ادارة مكتبية</a> </li>
											<li> <a class="dropdown-item" href="{{ route('accounting') }}">محاسبة</a> </li>
										</ul>
									</li>
								</ul>
							</li>




							<li class="dropdown-divider"></li>
							{{--  <!-- Dropdown submenu 3 -->  --}}
							<li class="dropdown-submenu dropend"> 
								<a class="dropdown-item dropdown-toggle" href="#">مبنى قسم التقنية الميكانيكا<br>
								وقسم الدراسات العامة</a>
								<ul class="dropdown-menu dropdown-menu-start" data-bs-popper="none">
									<li> <a class="dropdown-item" href="{{ route('mechanics') }}">التقنية الميكانيكة</a> </li>
									<li> <a class="dropdown-item" href="{{ route('general-studies') }}">الدراسات العامة</a> </li>
									
								</ul>
							</li>
							{{--  <!-- 3 -->  --}}
							<li class="dropdown-submenu dropend"> 
								<a class="dropdown-item dropdown-toggle" href="{{ route('Electronics') }}">مبنى قسمة الاكترونيات </a>
								<ul class="dropdown-menu dropdown-menu-start" data-bs-popper="none">
									<li> <a class="dropdown-item" href="{{ route('industrial-controlled-electronics') }}">اكترونيات صناعية وتحكم</a> </li>
									
								</ul>
							</li>	
								{{--  <!--end 3  -->  --}}
								{{--  <!-- start 4 -->  --}}
								<li class="dropdown-submenu"> 
									<a class="dropdown-item" href="{{ route('multiple_purposes') }}">مبنى الاغراض العاملة </a>
									
								</li>	
								{{--  <!-- end 4 -->  --}}
												{{--  <!-- bi-card-text -->  --}}
														
							
						</ul>
					</li>

					{{--  <!-- Nav item 3 Spezlistions menu -->  --}}
					{{--  <li class="nav-item dropdown dropdown-fullwidth">
						<a class="nav-link dropdown-toggle" href="#" id="megaMenu" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">التخصصات</a>
						<div class="dropdown-menu" aria-labelledby="megaMenu">
							<div class="container">
								<div class="row g-4 p-3 flex-fill">
									<div class="col-sm-6 col-lg-3">
										<div class="card bg-transparent">
											<img class="card-img rounded" src="{{ asset('assets/images/blog/16by9/small/01.jpg') }}" alt="Card image">
											<div class="card-body px-0 pt-3">
												<h6 class="card-title mb-0"><a href="#" class="btn-link text-reset fw-bold">7 common mistakes everyone makes while traveling</a></h6>
												<ul class="nav nav-divider align-items-center text-uppercase small mt-2">
													<li class="nav-item">
														<a href="#" class="text-reset btn-link">Joan Wallace</a>
													</li>
													<li class="nav-item">Feb 18, 2022</li>
												</ul>
											</div>
										</div>
									</div>
								
									<div class="col-sm-6 col-lg-3">
										<div class="card bg-transparent">
											<img class="card-img rounded" src="{{ asset('assets/images/blog/16by9/small/02.jpg') }}" alt="Card image">
											<div class="card-body px-0 pt-3">
												<h6 class="card-title mb-0"><a href="#" class="btn-link text-reset fw-bold">12 worst types of business accounts you follow on Twitter</a></h6>
												<ul class="nav nav-divider align-items-center text-uppercase small mt-2">
													<li class="nav-item">
														<a href="#" class="text-reset btn-link">Lori Stevens</a>
													</li>
													<li class="nav-item">Jun 03, 2022</li>
												</ul>
											</div>
										</div>
									</div>
								
									<div class="col-sm-6 col-lg-3">
										<div class="card bg-transparent">
											<img class="card-img rounded" src="{{ asset('assets/images/blog/16by9/small/03.jpg') }}" alt="Card image">
											<div class="card-body px-0 pt-3">
												<h6 class="card-title mb-0"><a href="#" class="btn-link text-reset fw-bold">Skills that you can learn from business</a></h6>
												<ul class="nav nav-divider align-items-center text-uppercase small mt-2">
													<li class="nav-item">
														<a href="#" class="text-reset btn-link">Judy Nguyen</a>
													</li>
													<li class="nav-item">Sep 07, 2022</li>
												</ul>
											</div>
										</div>
									</div>
									
									<div class="col-sm-6 col-lg-3">
										<div class="bg-primary-soft p-4 text-center h-100 w-100 rounded">
											<span>The Blogzine</span>
											<h3>Premium Membership</h3>
											<p>Become a Member Today!</p>
											<a href="#" class="btn btn-warning">View pricing plans</a>
										</div>
									</div>
                                    </div>
								
								<div class="row px-3">
									<div class="col-12">
										<ul class="list-inline mt-3">
											<li class="list-inline-item">Trending tags:</li>
											<li class="list-inline-item"><a href="#" class="btn btn-sm btn-primary-soft">Travel</a></li>
											<li class="list-inline-item"><a href="#" class="btn btn-sm btn-warning-soft">Business</a></li>
											<li class="list-inline-item"><a href="#" class="btn btn-sm btn-success-soft">Tech</a></li>
											<li class="list-inline-item"><a href="#" class="btn btn-sm btn-danger-soft">Gadgets</a></li>
											<li class="list-inline-item"><a href="#" class="btn btn-sm btn-info-soft">Lifestyle</a></li>
											<li class="list-inline-item"><a href="#" class="btn btn-sm btn-primary-soft">Vaccine</a></li>
											<li class="list-inline-item"><a href="#" class="btn btn-sm btn-success-soft">Sports</a></li>
											<li class="list-inline-item"><a href="#" class="btn btn-sm btn-danger-soft">Covid-19</a></li>
											<li class="list-inline-item"><a href="#" class="btn btn-sm btn-info-soft">Politics</a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</li>  --}}

					{{--  <!-- Nav item 5 link  انجازات الجامعه-->  --}}
					<li class="nav-item"> <a class="nav-link" href="{{ route('contact-us') }}">تواصل معنا</a></li>

					{{--  <!--  -->  --}}
					<li class="nav-item"> <a class="nav-link" href="{{ route('about') }}">من نحن</a></li>

				</ul>
			</div>
			{{--  <!-- Main navbar END -->  --}}

			{{--  <!-- Nav right START -->  --}}
			<div class="nav ms-sm-3 flex-nowrap align-items-center">
				{{--  <!-- Dark mode switch   --}}
				<div class="nav-item">
					<div class="modeswitch" id="darkModeSwitch">
						<div class="switch"></div>
					</div>
				</div>
				
				<div class="nav-item dropdown nav-search dropdown-toggle-icon-none">
					<a class="nav-link pe-0 dropdown-toggle" role="button" href="#" id="navSearch" data-bs-toggle="dropdown" aria-expanded="false">
						<i class="bi bi-search fs-4"> </i>
					</a>
					<div class="dropdown-menu dropdown-menu-end shadow rounded p-2" aria-labelledby="navSearch">
					  <form class="input-group">
					    <input class="form-control border-success" type="search" placeholder="Search" aria-label="Search">
					    <button class="btn btn-success m-0" type="submit">Search</button>
					  </form>
					</div>
				</div>
			</div>
			{{--  <!-- Nav right END -->  --}}
		</div>
	</nav>
	{{--  <!-- Logo Nav END -->  --}}
</header>