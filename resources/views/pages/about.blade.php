@extends('layouts.master')
@section('content')

{{--  <!-- =======================
	Inner intro START -->  --}}
	<section class="pt-4">
		<div class="container">
			<div class="row">
		  <div class="col-12">
			<div class="card bg-dark-overlay-4 overflow-hidden card-bg-scale h-400 text-center" style="background-image:url(assets/images/blog/16by9/09.jpg); background-position: center left; background-size: cover;">
			  <!-- Card Image overlay -->
			  <div class="card-img-overlay d-flex align-items-center p-3 p-sm-4"> 
				<div class="w-100 my-auto">
				  <h1 class="text-white display-4">من نحن</h1>
				  <!-- breadcrumb -->
				  <nav class="d-flex justify-content-center" aria-label="breadcrumb">
					<ol class="breadcrumb breadcrumb-dark breadcrumb-dots mb-0">
					  <li class="breadcrumb-item"><a href="index-5.html"><i class="bi bi-house me-1"></i> الرئيسية</a></li>
					  <li class="breadcrumb-item active">من نحن</li>
					</ol>
				  </nav>
				</div>
			  </div>
			</div>
		  </div>
		</div>
		</div>
	</section>
	<!-- =======================
	Inner intro END -->
	
	<!-- =======================
	About START -->
	<section class="pt-4 pb-0">
		<div class="container">
			<div class="row">
		  <div class="col-xl-9 mx-auto">
			<h2>رؤية الكلية</h2>
			<p class="lead">
				الرؤية هي الصورة الذهنية التي تحاول المؤسسة بناءها عن نفسها في المستقبل البعيد وفي اطار  الموارد المتاحة<br> ,لها حاليا وماستصل  الية في المستقبل 
				رؤية مؤسسة كلية شيبه 
				الريادة في المجال التقني والمهني
			</p>
			<h2>رسالة الكلية</h2>
			<p class="lead">
				رسالة كلية شيبة تكمن في
				 تطوير خدمات التدريب التقني والمهني والارتقاؤ بها , لتعزيز سوق العمل بخريجين متميزين <br> في اطار من التنمية المستدامة وكفاءة الانفاق
			</p>
			<h3 class="mt-4">القيم</h3>
			<ul>
			  <li><p class="lead">الابتكار</p></li>
			  <li><p class="lead">الفعالية</p></li>
			  <li><p class="lead">الاتقان</p></li>
			  <li><p class="lead">التنافسية</p></li>
			  <li><p class="lead">المؤسسة</p></li>
			  <li><p class="lead">المرونة</p></li>
			</ul>
		  </div>  <!-- Col END -->
		 </div>
	  </div>
	</section>
	<!-- =======================
	About END -->
@endsection

@section('js')

{{--  <!-- Bootstrap JS -->  --}}
<script src="{{ asset('assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>

{{--  <!-- Template Functions -->  --}}
<script src="{{ asset('assets/js/functions.js') }}"></script
@endsection

</body>
