<html  lang="en" dir="rtl">
<head>
@include('layouts.head')
</head>
<body>
    @include('layouts.header')
    
    <main>

        <!-- =======================
        Main hero START -->
        <section class="pt-3 pb-3 mb-2 card-grid">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="tiny-slider arrow-hover arrow-blur arrow-white arrow-round rounded-3 overflow-hidden">
                            <div class="tiny-slider-inner"
                            data-autoplay="true"
                            data-hoverpause="true"
                            data-gutter="1"
                            data-arrow="true"
                            data-dots="false"
                            data-items="1">
                                <!-- Slide 1 -->
                                <div class="card bg-dark-overlay-3 h-400 h-sm-500 h-md-600 rounded-0" style="background-image:url(assets/images/Students/pexels-pixabay-267885.jpg); background-position: center left; background-size: cover;">
                                    <!-- Card Image overlay -->
                          <div class="card-img-overlay d-flex align-items-center p-3 p-sm-5"> 
                            <div class="w-100 my-auto">
                                <div class="col-md-10 col-lg-7 mx-auto text-center">
                                    <!-- Card category -->
                                    <a href="#" class="badge bg-primary mb-2"><i class="fas fa-circle me-2 small fw-bold"></i>كلية بيشة </a>
                                    <!-- Card title -->
                                  <h2 class="text-white display-5"><a href="{{ route('about') }}" class="btn-link text-reset fw-normal"> الرؤية الريادة في المجال التقني والمهني</a></h2>
                                  <p class="text-white">الابتكار
        
                                    الفعالية
                                    
                                    الاتقان
                                    
                                    التنافسية
                                    
                                    المؤسسة
                                    
                                    المرونة
                                    هي اهدافنا السامية
                                </p>
                                </div>
                            </div>
                          </div>
                                </div>
                                <!-- Slide 2 -->
                                <div class="card bg-dark-overlay-3 h-400 h-sm-500 h-md-600 rounded-0" style="background-image:url(assets/images/Students/pexels-kat-wilcox-923657.jpg); background-position: center left; background-size: cover;">
                                    <!-- Card Image overlay -->
                          <div class="card-img-overlay d-flex align-items-center p-3 p-sm-5"> 
                            <div class="w-100 my-auto">
                                <div class="col-md-10 col-lg-7 mx-auto text-center">
                                    <!-- Card category -->
                                    <a href="#" class="badge bg-primary mb-2"><i class="fas fa-circle me-2 small fw-bold"></i>كلية بيشة </a>
                                    <!-- Card title -->
                                  <h2 class="text-white display-5"><a href="{{ route('about') }}" class="btn-link text-reset fw-normal">الرؤية الريادة في المجال التقني والمهني</a></h2>
                                  <p class="text-white">الابتكار
        
                                    الفعالية
                                    
                                    الاتقان
                                    
                                    التنافسية
                                    
                                    المؤسسة
                                    
                                    المرونة
                                هي اهدافنا السامية</p>
                                                        </div>
                            </div>
                          </div>
                                </div>
        
                                <!-- slide 3 -->
                                <div class="card bg-dark-overlay-3 h-400 h-sm-500 h-md-600 rounded-0" style="background-image:url(assets/images/Students/pexels-polina-zimmerman-3747518.jpg); background-position: center left; background-size: cover;">
                                    <!-- Card Image overlay -->
                          <div class="card-img-overlay d-flex align-items-center p-3 p-sm-5"> 
                            <div class="w-100 my-auto">
                                <div class="col-md-10 col-lg-7 mx-auto text-center">
                                    <!-- Card category -->
                                    <a href="#" class="badge bg-primary mb-2"><i class="fas fa-circle me-2 small fw-bold"></i>كلية بيشة </a>
                                    <!-- Card title -->
                                  <h2 class="text-white display-5"><a href="{{ route('about') }}" class="btn-link text-reset fw-normal">الرؤية الريادة في المجال التقني والمهني</a></h2>
                                  <p class="text-white">الابتكار
        
                                    الفعالية
                                    
                                    الاتقان
                                    
                                    التنافسية
                                    
                                    المؤسسة
                                    
                                    المرونة
                                هي اهدافنا السامية</p>
                                                        </div>
                            </div>
                          </div>
                                </div>
                                <!-- end slide 3 -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- =======================
        Main hero END -->
        
        <!-- =======================
        Cards START -->
        <section class="p-0">
            <div class="container">
            <div class="row g-4">
              <!-- Card item START مبنى العمادة-->
              <div class="col-sm-6 col-lg-4">
                <div class="card card-overlay-bottom card-img-scale overflow-hidden">
                  <!-- Card featured -->
                            <span class="card-featured" title="Featured post"><i class="fas fa-star"></i></span>
                  <!-- Card Image -->
                  <img src="assets/images/bulding/A.jpg" alt="">
                  <!-- Card Image overlay -->
                  <div class="card-img-overlay d-flex flex-column p-3 p-md-4"> 
                    <div>
                      <!-- Card category -->
                      <a href="#" class="badge bg-warning"><i class="fas fa-circle me-2 small fw-bold"></i>A</a>
                    </div>
                    <div class="w-100 mt-auto">
                      
                      <!-- Card title -->
                      <h4 class="text-white"><a href="{{ route('college_dean') }}" class="btn-link text-reset stretched-link">مبنى عمادة الكلية</a></h4>
                      <!-- Card info -->
                      <ul class="nav nav-divider text-white-force align-items-center small">
                        <li class="nav-item position-relative">
                          <div class="nav-link"><a href="#" class="stretched-link text-reset btn-link"> كلية بيشة </a>
                          </div>
                        </li>
                        <li class="nav-item">Aug 18, 2022</li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Card item END -->
              <!-- Card item START  مبنى اثنين-->
              <div class="col-sm-6 col-lg-4">
                <div class="card card-overlay-bottom card-img-scale overflow-hidden">
                  <!-- Card featured -->
                            <span class="card-featured" title="Featured post"><i class="fas fa-star"></i></span>
                  <!-- Card Image -->
                  <img src="{{ asset('assets/images/bulding/B.jpg') }}" alt="">
                  <!-- Card Image overlay -->
                  <div class="card-img-overlay d-flex flex-column p-3 p-md-4"> 
                    <div>
                      <!-- Card category -->
                      <a href="#" class="badge bg-success mb-2"><i class="fas fa-circle me-2 small fw-bold"></i>B</a>
                    </div>
                    <div class="w-100 mt-auto">
                      
                      <!-- Card title -->
                      <h4 class="text-white"><a href="{{ route('CATE') }}" class="btn-link text-reset stretched-link">مبنى قسم الحاسب الالي وقسم التقنية الادراي</a></h4>
                      <!-- Card info -->
                      <ul class="nav nav-divider text-white-force align-items-center small">
                        <li class="nav-item position-relative">
                          <div class="nav-link"><a href="#" class="stretched-link text-reset btn-link">كلية بيشة</a>
                          </div>
                        </li>
                        <li class="nav-item">Aug 18, 2022</li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Card item END 3-->
              <div class="col-sm-6 col-lg-4">
                <div class="card card-overlay-bottom card-img-scale overflow-hidden">
                  <!-- Card featured -->
                            <span class="card-featured" title="Featured post"><i class="fas fa-star"></i></span>
                  <!-- Card Image -->
                  <img src="{{ asset('assets/images/bulding/C.jpg')}}" alt="">
                  <!-- Card Image overlay -->
                  <div class="card-img-overlay d-flex flex-column p-3 p-md-4"> 
                    <div>
                      <!-- Card category -->
                      <a href="#" class="badge bg-success mb-2"><i class="fas fa-circle me-2 small fw-bold"></i>C</a>
                    </div>
                    <div class="w-100 mt-auto">
                      
                      <!-- Card title -->
                      <h4 class="text-white"><a href="{{ route('technical_mechanics') }}" class="btn-link text-reset stretched-link">مبنى قسم التقنية الميكانيكة وقسم الدراسات العامة</a></h4>
                      <!-- Card info -->
                      <ul class="nav nav-divider text-white-force align-items-center small">
                        <li class="nav-item position-relative">
                          <div class="nav-link"><a href="#" class="stretched-link text-reset btn-link"> كلية بيشة </a>
                          </div>
                        </li>
                        <li class="nav-item">Aug 18, 2022</li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Card item START 4-->
              <div class="col-sm-6 col-lg-4">
                <div class="card card-overlay-bottom card-img-scale overflow-hidden">
                  <!-- Card featured -->
                            <span class="card-featured" title="Featured post"><i class="fas fa-star"></i></span>
                  <!-- Card Image -->
                  <img src="{{ asset('assets/images/bulding/D.jpg') }}" alt="">
                  <!-- Card Image overlay -->
                  <div class="card-img-overlay d-flex flex-column p-3 p-md-4"> 
                    <div>
                      <!-- Card category -->
                      <a href="#" class="badge bg-success mb-2"><i class="fas fa-circle me-2 small fw-bold"></i>D</a>
                    </div>
                    <div class="w-100 mt-auto">
                      
                      <!-- Card title -->
                      <h4 class="text-white"><a href="{{ route('Electronics') }}" class="btn-link text-reset stretched-link">مبنى قسم الاكترونيات</a></h4>
                      <!-- Card info -->
                      <ul class="nav nav-divider text-white-force align-items-center small">
                        <li class="nav-item position-relative">
                          <div class="nav-link"><a href="#" class="stretched-link text-reset btn-link"> كلية بيشة </a>
                          </div>
                        </li>
                        <li class="nav-item">Aug 18, 2022</li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Card item END -->
              <!-- Card item START 5-->
              <div class="col-sm-6 col-lg-4">
                <div class="card card-overlay-bottom card-img-scale overflow-hidden">
                  <!-- Card featured -->
                            <span class="card-featured" title="Featured post"><i class="fas fa-star"></i></span>
                  <!-- Card Image -->
                  <img src="{{ asset('assets/images/bulding/H.jpg') }}" alt="">
                  <!-- Card Image overlay -->
                  <div class="card-img-overlay d-flex flex-column p-3 p-md-4"> 
                    <div>
                      <!-- Card category -->
                      <a href="#" class="badge bg-success mb-2"><i class="fas fa-circle me-2 small fw-bold"></i>H</a>
                    </div>
                    <div class="w-100 mt-auto">
                      
                      <!-- Card title -->
                      <h4 class="text-white"><a href="{{ route('multiple_purposes') }}" class="btn-link text-reset stretched-link">مبنى الاغراض المتعددة</a></h4>
                      <!-- Card info -->
                      <ul class="nav nav-divider text-white-force align-items-center small">
                        <li class="nav-item position-relative">
                          <div class="nav-link"><a href="#" class="stretched-link text-reset btn-link"> كلية بيشة </a>
                          </div>
                        </li>
                        <li class="nav-item">Aug 18, 2022</li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Card item END -->
              <!-- Card item START -->
            
              <!-- Card item END -->
              
            </div> <!-- Row END -->
            </div>
        </section>
        <!-- =======================
        Cards END -->
        
        <!-- =======================
        Adv START -->
        <section class="py-3 my-2">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <a href="#" class="d-block card-img-flash  rounded-3 overflow-hidden">
                            <img src="{{ asset('assets/images/speicialization/micanic.webp') }}" alt="صورة لمتلقى الطلاب">
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <!-- =======================
        Adv END -->
        

{{--  
        <!-- =======================
        Trending topics START -->  --}}
        <section class="p-0">
          <div class="container">
          <div class="row g-4">
            {{--  <!-- Card item START  مبنى اثنين-->  --}}
            <div class="col-sm-6 col-lg-4">
              <div class="card card-overlay-bottom card-img-scale overflow-hidden">
                <!-- Card featured -->
                          <span class="card-featured" title="Featured post"><i class="fas fa-star"></i></span>
                <!-- Card Image -->
                <img src="{{ asset('assets/images/bulding/B.jpg') }}" alt="">
                <!-- Card Image overlay -->
                <div class="card-img-overlay d-flex flex-column p-3 p-md-4"> 
                  <div>
                    <!-- Card category -->
                    <a href="#" class="badge bg-success mb-2"><i class="fas fa-circle me-2 small fw-bold"></i>B</a>
                  </div>
                  <div class="w-100 mt-auto">
                    
                    <!-- Card title -->
                    <h4 class="text-white"><a href="{{ route('section-computer') }}" class="btn-link text-reset stretched-link">مبنى قسم الحاسب الالي وقسم التقنية الادرايه
                
                     تخصصات الحاسب الالي
                    </a></h4>
                    <!-- Card info -->
                    <ul class="nav nav-divider text-white-force align-items-center small">
                      <li class="nav-item position-relative">
                        <div class="nav-link"><a href="#" class="stretched-link text-reset btn-link">كلية بيشة</a>
                        </div>
                      </li>
                      <li class="nav-item">Aug 18, 2022</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>


            {{--  <!-- Card item END 3-->  --}}
            <div class="col-sm-6 col-lg-4">
              <div class="card card-overlay-bottom card-img-scale overflow-hidden">
                {{--  <!-- Card featured -->  --}}
                          <span class="card-featured" title="Featured post"><i class="fas fa-star"></i></span>
                {{--  <!-- Card Image -->  --}}
                <img src="{{ asset('assets/images/bulding/C.jpg')}}" alt="">
                {{--  <!-- Card Image overlay -->  --}}
                <div class="card-img-overlay d-flex flex-column p-3 p-md-4"> 
                  <div>
                    <!-- Card category -->
                    <a href="#" class="badge bg-success mb-2"><i class="fas fa-circle me-2 small fw-bold"></i>C</a>
                  </div>
                  <div class="w-100 mt-auto">
                    
                    <!-- Card title -->
                    <h4 class="text-white"><a href="{{ route('section-mechanics') }}" class="btn-link text-reset stretched-link">مبنى قسم التقنية الميكانيكة وقسم الدراسات العامة تخصص ميكانيكيا ودراسات عامة</a></h4>
                    <!-- Card info -->
                    <ul class="nav nav-divider text-white-force align-items-center small">
                      <li class="nav-item position-relative">
                        <div class="nav-link"><a href="#" class="stretched-link text-reset btn-link"> كلية بيشة </a>
                        </div>
                      </li>
                      <li class="nav-item">Aug 18, 2022</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <!-- Card item START 4-->
            <div class="col-sm-6 col-lg-4">
              <div class="card card-overlay-bottom card-img-scale overflow-hidden">
                <!-- Card featured -->
                          <span class="card-featured" title="Featured post"><i class="fas fa-star"></i></span>
                <!-- Card Image -->
                <img src="{{ asset('assets/images/bulding/D.jpg') }}" alt="">
                <!-- Card Image overlay -->
                <div class="card-img-overlay d-flex flex-column p-3 p-md-4"> 
                  <div>
                    <!-- Card category -->
                    <a href="#" class="badge bg-success mb-2"><i class="fas fa-circle me-2 small fw-bold"></i>D</a>
                  </div>
                  <div class="w-100 mt-auto">
                    
                    <!-- Card title -->
                    <h4 class="text-white"><a href="{{ route('section_specialization-industrial-controlled-electronics') }}" class="btn-link text-reset stretched-link">مبنى قسم الاكترونيات تخصصات الاكترونيات</a></h4>
                    <!-- Card info -->
                    <ul class="nav nav-divider text-white-force align-items-center small">
                      <li class="nav-item position-relative">
                        <div class="nav-link"><a href="#" class="stretched-link text-reset btn-link"> كلية بيشة </a>
                        </div>
                      </li>
                      <li class="nav-item">Aug 18, 2022</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
         
            
          </div>
          </div>
      </section>
        <!-- =======================
        Trending topics END -->
        
        <!-- =======================
        Newsletter START -->
        <section class="pb-0 pt-3 mt-1">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="bg-dark p-3 p-sm-4 rounded-3 position-relative overflow-hidden">
                            <div class="row">
                                <div class="col-md-8 col-lg-6 mx-auto text-center py-5 position-relative">
                                    <!-- Title -->
                                    <h2 class="display-6 text-white">الكلية التقنية بيشة</h2>

                                    <img class="light-mode-item mx-auto" src="{{ asset('assets/images/bulding/blog.jpg') }}" alt="logo">			
                                    <img class="dark-mode-item mx-auto" src="{{ asset('assets/images/bulding/blog.jpg') }}" alt="logo">
                                    <br>
                                    <p class="text-white">نسعد دوما لزيارتك لموقعنا ونتمنا التوفيق لجميع الطلبة</p>
                                    <!-- Form -->
                                    <form class="row row-cols-sm-auto g-2 align-items-center justify-content-center mt-3">
                                    
                                      <div class="col-12">
                                        <div class="form-text text-white opacity-6 mt-2">
                                            <a href="#" class="text-decoration-underline text-reset">موقع كلية بيشة الرئيسي</a>
                                        </div>
                                      </div>
                                    
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- =======================
        Newsletter END -->
        
        </main>
    @include('layouts.footer')
    @include('layouts.footer-scripts')
</body> 
</html>