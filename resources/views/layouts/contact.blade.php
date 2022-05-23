@extends('layouts.master')
<body>
@section('content')


{{--  تواصل معنا   --}}
<section>
	<div class="container">
		<div class="row">
      <div class="col-md-9 mx-auto text-center">
        <h1 class="display-4">تواصل معنا</h1>
        <!-- breadcrumb -->
        <nav class="d-flex justify-content-center" aria-label="breadcrumb">
          <ol class="breadcrumb breadcrumb-dots mb-0">
            <li class="breadcrumb-item"><a href="{{ route('/') }}"><i class="bi bi-house me-1"></i>الرئيسية</a></li>
            <li class="breadcrumb-item active">تواصل معنا</li>
          </ol>
        </nav>      
      </div>
    </div>
	</div>
</section>
{{--  اغلاق تواصل معنا  --}}


<section class="pt-4">
	<div class="container">
		<div class="row">
      <div class="col-xl-9 mx-auto">
		<div style="width: 100%"><iframe width="100%" height="600" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=Riyadh+(My%20Business%20Name)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"><a href="https://www.gps.ie/truck-gps/">transport gps</a></iframe></div>
        
        <div class="row mt-5">
          <div class="col-sm-6 mb-5 mb-sm-0">
            <h3>معلومات التواصل فرع المدينة المنورة</h3>
            <p>تواصل معنا لترى كيف يمكننا مساعدتك في استفسارك
			</p>
			 <address>المدينة المنور, بجوار البيت العريق</address>
			 <p>Call: <a href="#" class="text-reset"><u>0176228305 </u></a></p>
			 <p>Email: <a href="#" class="text-reset"><u>tvtc_g_bisha</u></a></p>
            <p>اوقات الدوام: من السبت الى الخميس 
              <br>
              9:30 am to 6:00 pm
            </p>
          </div>
          <div class="col-sm-6">
            <h3>معلومات التواصل	فرع الرياض		</h3>
            <p>تواصل معنا لترى كيف يمكننا مساعدتك في استفسارك
			</p>
            <address>الرياض,الخرج</address>
            <p>Call: <a href="#" class="text-reset"><u>0176228305</u></a></p>
            <p>twiter: <a href="#" class="text-reset"><u>tvtc_g_bisha</u></a></p>
            <p>اوقات الدوام: من السبت الى الخميس 
              <br>
              9:00 am to 5:30 pm
            </p>
          </div>
        </div>
        
        <hr class="my-5">
        
     
      </div>  <!-- Col END -->
     </div>
  </div>
</section>
@endsection

</body>
