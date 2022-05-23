@extends('layouts.master')
<body>
@section('content')



<section class="pt-4">
	<div class="container">
		<div class="row">
      <div class="col-12">
				<div class="card card-overlay-bottom h-300 overflow-hidden text-center" style="background-image:url(assets/images/blog/16by9/08.jpg); background-position: center left; background-size: cover;">
          <!-- Card Image overlay -->
          <div class="card-img-overlay d-flex align-items-center p-3 pb-4 px-sm-5"> 
            <div class="col-12 mt-auto d-md-flex justify-content-between align-items-center">
							<h1 class="text-white display-5"><a href="{{ route('Electronics') }}" class="btn-link text-reset stretched-link">قسم الالكترونيات</a></h1>
							<nav class="d-flex justify-content-center" aria-label="breadcrumb">
					 
					</nav>
            </div>
          </div>
        </div>
      </div>
    </div>
	</div>
</section>
{{--  end background section  --}}

{{--  start specialization  --}}

<section class="position-relative p-0">
	<div class="container">
		<div class="row g-4">
		

				
			</div>
      {{--  <!-- Card item END -->  --}}
	 
	  <div class="col-md-12">
		<div class="card card-overlay-bottom card-img-scale">
			<img class="card-img" src="{{ asset('assets/images/blog/4by3/16.jpg') }}" alt="">
  <div class="card-img-overlay d-flex align-items-center p-3 p-sm-5"> 
	<div class="w-100 mt-auto">
		<div class="col">
			
			{{--  <a  class="badge bg-success mb-2"><i class="fas fa-circle me-2"></i>قسم الاكترونيات</a>  --}}
			<a href="{{ route('industrial-controlled-electronics') }}" class="badge bg-primary mb-2"><i class="fas fa-circle me-2"></i>تخصص اكترونيات صناعية وتحكم</a>
			<!-- Card title -->
		  <h2 class="text-white display-6"><a href="{{ route('industrial-controlled-electronics') }}" class="btn-link text-reset stretched-link fw-normal">للمزيد من التفاصيل حول تخصص اكترونيات صناعية وتحكم</a></h2>
		  <!-- Card info -->
					
		</div>
	</div>
  </div>
		</div>

		
	</div>
    
    
        </div>
		{{--  <!-- Row end -->  --}}
		

   
	</div>
</section>



@endsection

</body>
