@extends('layouts.master')
<body>
@section('content')


	
<!-- Divider -->
<div class="border-bottom border-primary border-1 opacity-1"></div>

<!-- =======================
Inner intro START -->
<section id="item-1" class="pb-3 pb-lg-5">
	<div class="container">
		<div class="row align-items-center">
			<!-- Image -->
			<div class="col-md-6 position-relative">
				<img class="rounded" src="{{ asset('assets/images/bulding/C.jpg') }}" alt="Image">
				<!-- Card format icon -->
				<h5 class="p-3 pe-4 position-absolute top-0 end-0">
					<span class="badge bg-success text-white fw-bold rounded-pill"> 8.5 rating</span>
				</h5>
			</div>
			<!-- Content -->
			<div class="col-md-6 mt-4 mt-md-0">
        <a href="#" class="badge bg-primary-soft text-primary mb-2"><i class="fas fa-circle me-2 small fw-bold"></i>Review</a>
				<span class="ms-2 small">Updated: 15 April 2022 07:30 IST</span>
				<h1 class="display-6">مبنى قسم التقنية الميكانيكية وقسم الدراسات العامة</h1>
				<p class="lead">Ask a quick six seven offer see among. Handsome met debating sir dwelling age material. As style lived he worse dried. Offered related so visitors we private removed. Moderate do subjects to distance. Picture for attempt joy excited ten carried manners talking how. Suspicion neglected he resolving agreement perceived at an. </p>
			</div>			 
		</div>
	</div>
</section>

<section class="pt-0">
	<div class="container position-relative" data-sticky-container>
		<div class="row">
			<!-- Left sidebar START -->
			<!-- <div class="col-md-1">
				<div class="text-start text-lg-center mb-5" data-sticky data-margin-top="80" data-sticky-for="767">
					<ul class="nav text-white-force">
						<li class="nav-item">
							<a class="nav-link icon-md rounded-circle m-1 p-0 fs-5 bg-light" href="#">
								<i class="fab fa-facebook-square align-middle text-body"></i>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link icon-md rounded-circle m-1 p-0 fs-5 bg-light" href="#">
								<i class="fab fa-twitter-square align-middle text-body"></i>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link icon-md rounded-circle m-1 p-0 fs-5 bg-light" href="#">
								<i class="fab fa-linkedin align-middle text-body"></i>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link icon-md rounded-circle m-1 p-0 fs-5 bg-light" href="#">
								<i class="fab fa-pinterest align-middle text-body"></i>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link icon-md rounded-circle m-1 p-0 fs-5 bg-light" href="#">
								<i class="far fa-envelope align-middle text-body"></i>
							</a>
						</li>
					</ul>
				</div>
			</div> -->
			{{--  <!-- Left sidebar END -->  --}}

			{{--  <!-- Main Content START -->  --}}
			<div class="col-md-10 col-lg-8 mb-5">
				<div>
					
					<div class="row mt-5">
						<div class="col-md-6">
							<h4>معامل تدريبية</h4>
							<p>Saw met applauded favorite deficient engrossed concealed and her. Concluded boy perpetual old supposing.
							</p>
						</div>
						<div class="col-md-6">
							<h4>قاعات تدريبية</h4>
							<p>Meant balls it if up doubt small purse. Required his you put the outlived answered position.</p>
						</div>
					
					
					</div>
				</div>

				<div class="text-center h5 mb-4">. . .</div>

				<div id="item-2">
					
					<div class="row mt-5">
						<div class="col-md-6">
							<h4>قاعات تدريبية</h4>
							<p>Saw met applauded favorite deficient engrossed concealed and her. Concluded boy perpetual old supposing.
							</p>
						</div>						
					</div>
				</div>

				<div class="text-center h5 mb-4">. . .</div>
				<div id="item-4">
					<h4 class="mt-4">رؤساء الاقسام</h4>
					<p>Fulfilled direction use continual set him propriety continued. Saw met applauded favorite deficient engrossed concealed and her. Concluded boy perpetual old supposing. Farther related bed and passage comfort civilly. Dashwoods see frankness objection abilities. As hastened oh produced prospect formerly up am. Placing forming nay looking old married few has. Margaret disposed of add screened rendered six say his striking confined.</p>
					<div class="row mt-5">
						<div class="col-md-6">
							<h4>اعضاء هيئة التدريب</h4>
							<p>Saw met applauded favorite deficient engrossed concealed and her. Concluded boy perpetual old supposing.
							</p>
						</div>	
						<div class="col-md-6">
							<h4>معامل تدريبية</h4>
							<p>Saw met applauded favorite deficient engrossed concealed and her. Concluded boy perpetual old supposing.
							</p>
						</div>						
					</div>
				</div>
				<div class="text-center h5 mb-4">. . .</div>

				  {{--  Images and video START     --}}
				  <div id="item-3" class="row g-3">
					<h4>Images and videos gallery</h4>
					<div class="col-md-6">
						<a href="javascript:void();">
							<img class="rounded" src="{{ asset('assets/images/blog/4by3/03.jpg') }}" alt="Image">
						</a>
					</div>
					<div class="col-md-6">
						<a href="javascript:void();" data-gallery="image-popup">
							<img class="rounded" src="{{ asset('assets/images/blog/4by3/04.jpg') }}" alt="Image">
						</a>
					</div>
					<div class="col-md-12">
						<figure class="figure mb-1">
							<a href="javascript:void();">
								<img class="rounded" src="{{ asset('assets/images/blog/16by9/07.jpg') }}" alt="Image">
							</a>
						</figure>
					</div>
					<!-- Video -->

				</div>
				<!-- Images and video END -->


			</div>
			<!-- Main Content END -->
			<!-- Right sidebar START -->
			<div class="col-lg-4 d-none d-lg-block">
				<div data-sticky data-margin-top="80" data-sticky-for="991">
					<nav id="nav-scroll" class="navbar">
						<nav class="nav nav-pills flex-column">
							<a class="nav-link" href="#item-1">الدور الاول</a>
							<a class="nav-link" href="#item-2">الور الثاني</a>
							<a class="nav-link" href="#item-4">الور الثالث</a>
							<a class="nav-link" href="#item-3">صور المبنى</a>
						</nav>
					</nav>
				</div>
			</div>
		</div>
	</div>
</section>




@endsection

@section('js')
<script src="{{ asset('assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>

<script src="{{ asset('assets/vendor/tiny-slider/tiny-slider-rtl.js') }}"></script>
<script src="{{ asset('assets/vendor/sticky-js/sticky.min.js') }}"></script>
<script src="{{ asset('assets/vendor/glightbox/js/glightbox.js') }}"></script>

<script src="{{ asset('assets/js/functions.js') }}"></script>

@endsection

</body>
