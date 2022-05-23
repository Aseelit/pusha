@extends('layouts.master')
<body>
@section('content')


	{{--  تخصص الكترونيات صناعية وتحكم   --}}
<!-- Divider -->
<div class="border-bottom border-primary border-1 opacity-1"></div>

<!-- =======================
Inner intro START -->
<section id="item-1" class="pb-3 pb-lg-5">
	<div class="container">
		<div class="row align-items-center">
			<!-- Image -->
			<div class="col-md-6 position-relative">
				<img class="rounded" src="{{ asset('assets/images/Students/pexels-pixabay-267885 (1).jpg') }}" alt="Image">
				<!-- Card format icon -->
				<h5 class="p-3 pe-4 position-absolute top-0 end-0">
					<span class="badge bg-success text-white fw-bold rounded-pill">تخصص الالكترونيات </span>
				</h5>
			</div>
			<!-- Content -->
			<div class="col-md-6 mt-4 mt-md-0">
        <a href="#" class="badge bg-primary-soft text-primary mb-2"><i class="fas fa-circle me-2 small fw-bold"></i>الاكترونيات</a>
				<h1 class="display-6">الكترونيات صناعية وتحكم</h1>
				<p class="lead">Saw met applauded favorite deficient engrossed concealed and her. Concluded boy perpetual old supposing 
					Saw met applauded favorite deficient engrossed concealed and her. Concluded boy perpetual old supposing Saw met applauded favorite deficient engrossed concealed and her. Concluded boy perpetual old supposing
					Saw met applauded favorite deficient engrossed concealed and her. Concluded boy perpetual old supposing Saw met applauded favorite deficient engrossed concealed and her. Concluded boy perpetual old supposing.
				</p>
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
							<h4>المسمى الوضيفي</h4>
							<p>Saw met applauded favorite deficient engrossed concealed and her. Concluded boy perpetual old supposing.
							</p>
						</div>
						<div class="col-md-6">
							<h4>المسمى للبكلاريوس</h4>
							<p>Meant balls it if up doubt small purse. Required his you put the outlived answered position.</p>
						</div>
					
					
					</div>
				</div>



				<div id="item-2">
					<div class="row mt-5">
					<div class="col-md-6">
						<h4>عدد الطلاب المقبولين</h4>
						<p>Saw met applauded favorite deficient engrossed concealed and her. Concluded boy perpetual old supposing.
						</p>
					</div>
					<div class="col-md-6">
						<h4>عدد الطلاب الخريجين</h4>
						<p>عدد الطلاب الخريجين لكل ترم 150 طالب</p>
					</div>
				
				
				</div>
			</div>
				<div id="item-3">
						<div class="row mt-5">
						<div class="col-md-6">
							<h4>النسبة الموزوزنه للقبول في التخصص</h4>
							<p>Saw met applauded favorite deficient engrossed concealed and her. Concluded boy perpetual old supposing.
							</p>
						</div>
						
					</div>
				</div>
			

			</div>
			<!-- Main Content END -->
			<!-- Right sidebar START -->
			<div class="col-lg-4 d-none d-lg-block">
				<div data-sticky data-margin-top="80" data-sticky-for="991">
					<nav id="nav-scroll" class="navbar">
						<nav class="nav nav-pills flex-column">
							<a class="nav-link" href="#item-1">المسمى الوضيفي ومسمى البكالاريوس</a>
							<a class="nav-link" href="#item-2">الخريجين والمقبولين</a>
							<a class="nav-link" href="#item-3">النسبة الموزونة  للقبول في التخصص</a>
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
