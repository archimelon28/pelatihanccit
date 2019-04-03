@extends('frontend.base.base')
@section('content')
	<!-- Breadcrumbs Start -->
		<div class="rs-breadcrumbs bg7 breadcrumbs-overlay">
		    <div class="breadcrumbs-inner">
		        <div class="container">
		            <div class="row">
		                <div class="col-md-12 text-center">
		                    <h1 class="page-title">OUR COURSES</h1>
		                    <ul>
		                        <li>
		                            <a class="active" href="index.html">Home</a>
		                        </li>
		                        <li>Our Courses</li>
		                    </ul>
		                </div>
		            </div>
		        </div>
		    </div>
		</div>
		<!-- Breadcrumbs End -->

		<!-- Courses Start -->
        <div id="rs-courses-3" class="rs-courses-3 sec-spacer">
			<div class="container">
				<div class="abt-title">
				    <h2>OUR COURSES</h2>
				</div>
                <div class="gridFilter">
                    <button class="active" data-filter="*">ALL</button>
                    <button data-filter=".filter1">SCIENCE</button>
                    <button data-filter=".filter2">BUSINESS</button>
                    <button data-filter=".filter3">HUMANITIES</button>
                    <button data-filter=".filter4">DIPLOMA</button>
                </div>
				<div class="row grid">
					<div class="col-lg-4 col-md-6 grid-item filter1">
		                <div class="course-item">
		                    <div class="course-img">
		                        <img src="{{asset('assets/images/courses/10.jpg')}} " alt="" />
		                        <span class="course-value">$450</span>
		                        <div class="course-toolbar">
		                    		<h4 class="course-category"></h4>
		                        	<div class="course-date">
		                        		<i class="fa fa-calendar"></i> 28-06-2017
		                        	</div>
		                        	<div class="course-duration">
		                        		<i class="fa fa-clock-o"></i> 4 year
		                        	</div>
		                        </div>
		                    </div>
		                    <div class="course-body">
		                    	<div class="course-desc">
		                    		<h4 class="course-title">Computer Engineering</h4>
		                    		<p>
		                    			Cras ultricies lacus consectetur, consectetur scelerisque arcu.Curabitur Aenean egestas a
		                    			Nullam augue augue.
		                    		</p>
		                    	</div>
		                    </div>
		                    <div class="course-footer">
		                    	<div class="course-seats">
		                    		<i class="fa fa-users"></i> 70 SEATS
		                    	</div>
		                    	<div class="course-button">
		                    		<a href="/course_detail">APPLY NOW</a>
		                    	</div>
		                    </div>
		                </div>						
					</div>
					<div class="col-lg-4 col-md-6 grid-item filter2">
		                <div class="course-item">
		                    <div class="course-img">
		                        <img src="{{asset('assets/images/courses/11.jpg')}} " alt="" />
		                        <span class="course-value">$450</span>
		                        <div class="course-toolbar">
		                    		<h4 class="course-category">Business</h4>
		                        	<div class="course-date">
		                        		<i class="fa fa-calendar"></i> 28-06-2017
		                        	</div>
		                        	<div class="course-duration">
		                        		<i class="fa fa-clock-o"></i> 4 year
		                        	</div>
		                        </div>
		                    </div>
		                    <div class="course-body">
		                    	<div class="course-desc">
		                    		<h3 class="course-title">Business Management</h3>
		                    		<p>
		                    			Cras ultricies lacus consectetur, consectetur scelerisque arcu.Curabitur Aenean egestas a
		                    			Nullam augue augue.
		                    		</p>
		                    	</div>
		                    </div>
		                    <div class="course-footer">
		                    	<div class="course-seats">
		                    		<i class="fa fa-users"></i> 70 SEATS
		                    	</div>
		                    	<div class="course-button">
		                    		<a href="/course_detail">APPLY NOW</a>
		                    	</div>
		                    </div>
		                </div>						
					</div>
					<div class="col-lg-4 col-md-6 grid-item filter4">
		                <div class="course-item">
		                    <div class="course-img">
		                        <img src="{{asset('assets/images/courses/12.jpg')}} " alt="" />
		                        <span class="course-value">$450</span>
		                        <div class="course-toolbar">
		                    		<h4 class="course-category">Diploma</h4>
		                        	<div class="course-date">
		                        		<i class="fa fa-calendar"></i> 28-06-2017
		                        	</div>
		                        	<div class="course-duration">
		                        		<i class="fa fa-clock-o"></i> 4 year
		                        	</div>
		                        </div>
		                    </div>
		                    <div class="course-body">
		                    	<div class="course-desc">
		                    		<h3 class="course-title">Diploma Electrical</h3>
		                    		<p>
		                    			Cras ultricies lacus consectetur, consectetur scelerisque arcu.Curabitur Aenean egestas a
		                    			Nullam augue augue.
		                    		</p>
		                    	</div>
		                    </div>
		                    <div class="course-footer">
		                    	<div class="course-seats">
		                    		<i class="fa fa-users"></i> 70 SEATS
		                    	</div>
		                    	<div class="course-button">
		                    		<a href="/course_detail">APPLY NOW</a>
		                    	</div>
		                    </div>
		                </div>						
					</div>
					<div class="col-lg-4 col-md-6 grid-item filter1">
		                <div class="course-item">
		                    <div class="course-img">
		                        <img src="{{asset('assets/images/courses/13.jpg')}} " alt="" />
		                        <span class="course-value">$450</span>
		                        <div class="course-toolbar">
		                    		<h4 class="course-category"><a href="courses-details.html">Science</a></h4>
		                        	<div class="course-date">
		                        		<i class="fa fa-calendar"></i> 28-06-2017
		                        	</div>
		                        	<div class="course-duration">
		                        		<i class="fa fa-clock-o"></i> 4 year
		                        	</div>
		                        </div>
		                    </div>
		                    <div class="course-body">
		                    	<div class="course-desc">
		                    		<h4 class="course-title"><a href="courses-details.html">Civil Engineering</a></h4>
		                    		<p>
		                    			Cras ultricies lacus consectetur, consectetur scelerisque arcu.Curabitur Aenean egestas a
		                    			Nullam augue augue.
		                    		</p>
		                    	</div>
		                    </div>
		                    <div class="course-footer">
		                    	<div class="course-seats">
		                    		<i class="fa fa-users"></i> 70 SEATS
		                    	</div>
		                    	<div class="course-button">
		                    		<a href="#">APPLY NOW</a>
		                    	</div>
		                    </div>
		                </div>						
					</div>
					<div class="col-lg-4 col-md-6 grid-item filter3">
		                <div class="course-item">
		                    <div class="course-img">
		                        <img src="{{asset('assets/images/courses/14.jpg')}} " alt="" />
		                        <span class="course-value">$450</span>
		                        <div class="course-toolbar">
		                    		<h4 class="course-category"><a href="courses-details.html">Humanities</a></h4>
		                        	<div class="course-date">
		                        		<i class="fa fa-calendar"></i> 28-06-2017
		                        	</div>
		                        	<div class="course-duration">
		                        		<i class="fa fa-clock-o"></i> 4 year
		                        	</div>
		                        </div>
		                    </div>
		                    <div class="course-body">
		                    	<div class="course-desc">
		                    		<h3 class="course-title"><a href="#">Bachelor of Arts</a></h3>
		                    		<p>
		                    			Cras ultricies lacus consectetur, consectetur scelerisque arcu.Curabitur Aenean egestas a
		                    			Nullam augue augue.
		                    		</p>
		                    	</div>
		                    </div>
		                    <div class="course-footer">
		                    	<div class="course-seats">
		                    		<i class="fa fa-users"></i> 70 SEATS
		                    	</div>
		                    	<div class="course-button">
		                    		<a href="#">APPLY NOW</a>
		                    	</div>
		                    </div>
		                </div>						
					</div>
					<div class="col-lg-4 col-md-6 grid-item filter2">
		                <div class="course-item">
		                    <div class="course-img">
		                        <img src="{{asset('assets/images/courses/15.jpg')}}" alt="" />
		                        <span class="course-value">$450</span>
		                        <div class="course-toolbar">
		                    		<h4 class="course-category"><a href="#">Business</a></h4>
		                        	<div class="course-date">
		                        		<i class="fa fa-calendar"></i> 28-06-2017
		                        	</div>
		                        	<div class="course-duration">
		                        		<i class="fa fa-clock-o"></i> 4 year
		                        	</div>
		                        </div>
		                    </div>
		                    <div class="course-body">
		                    	<div class="course-desc">
		                    		<h3 class="course-title"><a href="courses-details.html">Master of Business A.</a></h3>
		                    		<p>
		                    			Cras ultricies lacus consectetur, consectetur scelerisque arcu.Curabitur Aenean egestas a
		                    			Nullam augue augue.
		                    		</p>
		                    	</div>
		                    </div>
		                    <div class="course-footer">
		                    	<div class="course-seats">
		                    		<i class="fa fa-users"></i> 70 SEATS
		                    	</div>
		                    	<div class="course-button">
		                    		<a href="#">APPLY NOW</a>
		                    	</div>
		                    </div>
		                </div>						
					</div>
					<div class="col-lg-4 col-md-6 grid-item filter4">
		                <div class="course-item">
		                    <div class="course-img">
		                        <img src="{{asset('assets/images/courses/16.jpg')}}" alt="" />
		                        <span class="course-value">$350</span>
		                        <div class="course-toolbar">
		                    		<h4 class="course-category"><a href="#">Diploma</a></h4>
		                        	<div class="course-date">
		                        		<i class="fa fa-calendar"></i> 28-06-2017
		                        	</div>
		                        	<div class="course-duration">
		                        		<i class="fa fa-clock-o"></i> 4 year
		                        	</div>
		                        </div>
		                    </div>
		                    <div class="course-body">
		                    	<div class="course-desc">
		                    		<h3 class="course-title"><a href="courses-details.html">Diploma in Computer</a></h3>
		                    		<p>
		                    			Cras ultricies lacus consectetur, consectetur scelerisque arcu.Curabitur Aenean egestas a
		                    			Nullam augue augue.
		                    		</p>
		                    	</div>
		                    </div>
		                    <div class="course-footer">
		                    	<div class="course-seats">
		                    		<i class="fa fa-users"></i> 70 SEATS
		                    	</div>
		                    	<div class="course-button">
		                    		<a href="#">APPLY NOW</a>
		                    	</div>
		                    </div>
		                </div>						
					</div>
					<div class="col-lg-4 col-md-6 grid-item filter3 filter4">
		                <div class="course-item">
		                    <div class="course-img">
		                        <img src="{{asset('assets/images/courses/17.jpg')}}" alt="" />
		                        <span class="course-value">$450</span>
		                        <div class="course-toolbar">
		                    		<h4 class="course-category"><a href="courses-details.html">Humanities</a></h4>
		                        	<div class="course-date">
		                        		<i class="fa fa-calendar"></i> 28-06-2017
		                        	</div>
		                        	<div class="course-duration">
		                        		<i class="fa fa-clock-o"></i> 4 year
		                        	</div>
		                        </div>
		                    </div>
		                    <div class="course-body">
		                    	<div class="course-desc">
		                    		<h4 class="course-title"><a href="#">Master of Arts</a></h4>
		                    		<p>
		                    			Cras ultricies lacus consectetur, consectetur scelerisque arcu.Curabitur Aenean egestas a
		                    			Nullam augue augue.
		                    		</p>
		                    	</div>
		                    </div>
		                    <div class="course-footer">
		                    	<div class="course-seats">
		                    		<i class="fa fa-users"></i> 70 SEATS
		                    	</div>
		                    	<div class="course-button">
		                    		<a href="#">APPLY NOW</a>
		                    	</div>
		                    </div>
		                </div>						
					</div>
					<div class="col-lg-4 col-md-6 grid-item filter1">
		                <div class="course-item">
		                    <div class="course-img">
		                        <img src="{{asset('assets/images/courses/18.jpg')}}" alt="" />
		                        <span class="course-value">$425</span>
		                        <div class="course-toolbar">
		                    		<h4 class="course-category"><a href="#">Science</a></h4>
		                        	<div class="course-date">
		                        		<i class="fa fa-calendar"></i> 28-06-2017
		                        	</div>
		                        	<div class="course-duration">
		                        		<i class="fa fa-clock-o"></i> 4 year
		                        	</div>
		                        </div>
		                    </div>
		                    <div class="course-body">
		                    	<div class="course-desc">
		                    		<h3 class="course-title"><a href="courses-details.html">Electronics Engineering</a></h3>
		                    		<p>
		                    			Cras ultricies lacus consectetur, consectetur scelerisque arcu.Curabitur Aenean egestas a
		                    			Nullam augue augue.
		                    		</p>
		                    	</div>
		                    </div>
		                    <div class="course-footer">
		                    	<div class="course-seats">
		                    		<i class="fa fa-users"></i> 70 SEATS
		                    	</div>
		                    	<div class="course-button">
		                    		<a href="#">APPLY NOW</a>
		                    	</div>
		                    </div>
		                </div>						
					</div>
			    </div>
			    <nav aria-label="Page navigation example">
					<ul class="pagination">
						<li class="page-item disabled"><a class="page-link fa fa-angle-left" href="#" tabindex="-1"></a></li>
						<li class="page-item"><a class="page-link active" href="#">1</a></li>
						<li class="page-item"><a class="page-link" href="#">2</a></li>
						<li class="page-item"><a class="page-link dotted" href="#">...</a></li>
						<li class="page-item"><a class="page-link" href="#">5</a></li>
						<li class="page-item"><a class="page-link" href="#">6</a></li>
						<li class="page-item"><a class="page-link fa fa-angle-right" href="#"></a></li>
					</ul>
			    </nav>
			</div>
        </div>
        <!-- Courses End -->
				
        <!-- Partner Start -->
        <div id="rs-partner" class="rs-partner pt-70 pb-170 sec-color">
            <div class="container">
				<div class="rs-carousel owl-carousel" data-loop="true" data-items="5" data-margin="80" data-autoplay="true" data-autoplay-timeout="5000" data-smart-speed="2000" data-dots="false" data-nav="false" data-nav-speed="false" data-mobile-device="2" data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="4" data-ipad-device-nav="false" data-ipad-device-dots="false" data-md-device="5" data-md-device-nav="false" data-md-device-dots="false">
                    <div class="partner-item">
                        <a href="#"><img src="{{asset('assets/images/partner/1.png')}}" alt="Partner Image"></a>
                    </div>
                    <div class="partner-item">
                        <a href="#"><img src="{{asset('assets/images/partner/2.png')}}" alt="Partner Image"></a>
                    </div>
                    <div class="partner-item">
                        <a href="#"><img src="{{asset('assets/images/partner/3.png')}}" alt="Partner Image"></a>
                    </div>
                    <div class="partner-item">
                        <a href="#"><img src="{{asset('assets/images/partner/4.png')}}" alt="Partner Image"></a>
                    </div>
                    <div class="partner-item">
                        <a href="#"><img src="{{asset('assets/images/partner/5.png')}}" alt="Partner Image"></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Partner End -->
@endsection