@extends('frontend.base.base')
@section('content')
	<!--Full width header End-->
		
		<!-- Breadcrumbs Start -->
		<div class="rs-breadcrumbs bg7 breadcrumbs-overlay">
		    <div class="breadcrumbs-inner">
		        <div class="container">
		            <div class="row">
		                <div class="col-md-12 text-center">
		                    <h1 class="page-title">EVENT DETAILS</h1>
		                    <ul>
		                        <li>
		                            <a class="active" href="index.html">Home</a>
		                        </li>
		                        <li>Event Details</li>
		                    </ul>
		                </div>
		            </div>
		        </div>
		    </div>
		</div>
		<!-- Breadcrumbs End -->

        <!-- Event Details Start -->
        <div class="rs-event-details pt-100 pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-12">
                        <div class="event-details-content">
                            <h3 class="event-title"><a href="events-details.html">Freshers Day reception ceremony 2017</a></h3>
                            <div class="event-meta">
                                <div class="event-date">
                                    <i class="fa fa-calendar"></i>
                                    <span>28 June 2017</span>
                                </div>
                                <div class="event-time">
                                    <i class="fa fa-clock-o"></i>
                                    <span>12.30AM-05.30PM</span>
                                </div>
                                <div class="event-location">
                                    <i class="fa fa-map-marker"></i>
                                    <span>Venue A, Main Campus</span>
                                </div>
                            </div>
                            <div class="event-img">
                                <img src="{{asset('assets/images/events/event-details.jpg')}} " alt="Event Details Images" />
                            </div>
                            <div class="event-desc">
                                <p>
                                    A university event license follows the same format as the standard event license, except this event is co-branded with a university name (e.g., “TEDxNYU”). This means that the event is hosted by that college or university, so you’ll need permission from that school to hold the event and to use the university's name. Usually, the audience of a university event are students.
                                </p>
                                <p>
                                    For a university event type, your focus or theme should be multidisciplinary and broad, and address a variety of topics. You’ll want to feature a diversity of speakers from across several disciplines, and speakers from the university where you’re holding your event. To get an idea of what you want the focus of your event, A university event license follows the same format as the standard event license, except this event is co-branded with a university.
                                </p>
                            </div>
                            <div id="googleMap"></div>
                            <div class="share-area">
                                <div class="row rs-vertical-middle">
                                    <div class="col-md-4">
                                        <div class="book-btn">
                                            <a href="#">Book Now</a>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="share-inner">
                                            <span>SHARE:</span>
                                            <a href="#"><i class="fa fa-facebook"></i></a>
                                            <a href="#"><i class="fa fa-twitter"></i></a>
                                            <a href="#"><i class="fa fa-google"></i></a>
                                            <a href="#"><i class="fa fa-pinterest-p"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="sidebar-area">
                            <div class="search-box">
                                <h3 class="title">Search Courses</h3>
                                <div class="box-search">
                                    <input class="form-control" placeholder="Search Here ..." name="srch-term" id="srch-term" type="text">
                                    <button class="btn btn-default" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                                </div>
                            </div>
                            <div class="cate-box">
                                <h3 class="title">Categories</h3>
                                <ul>
                                    <li>
                                        <i class="fa fa-angle-right" aria-hidden="true"></i> <a href="#">Analysis & Features <span>(05)</span></a>
                                    </li>
                                    <li>
                                        <i class="fa fa-angle-right" aria-hidden="true"></i> <a href="#">Video Reviews <span>(07)</span></a>
                                    </li>
                                    <li>
                                        <i class="fa fa-angle-right" aria-hidden="true"></i> <a href="#">Engineering Tech <span>(09)</span></a>
                                    </li>
                                    <li>
                                        <i class="fa fa-angle-right" aria-hidden="true"></i> <a href="#"> Righteous Indignation <span>(08)</span></a>
                                    </li>
                                    <li>
                                        <i class="fa fa-angle-right" aria-hidden="true"></i> <a href="#">General Education <span>(04)</span></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="latest-courses">
                                <h3 class="title">Latest Courses</h3>
                                <div class="post-item">
                                    <div class="post-img">
                                        <a href="blog-details.html"><img src="{{asset('assets/images/blog-details/sm1.jpg')}} " alt="" title="News image"></a>
                                    </div>
                                    <div class="post-desc">
                                        <h4><a href="blog-details.html">Raken develops reporting The software</a></h4>
                                        <span class="duration"> 
                                            <i class="fa fa-clock-o" aria-hidden="true"></i> 4 Years
                                        </span> 
                                        <span class="price">Price: <span>$350</span></span>
                                    </div>
                                </div>
                                <div class="post-item">
                                    <div class="post-img">
                                        <a href="blog-details.html"><img src="{{asset('assets/images/blog-details/sm2.jpg')}} " alt="" title="News image"></a>
                                    </div>
                                    <div class="post-desc">
                                        <h4><a href="blog-details.html">Raken develops reporting The software</a></h4>
                                        <span class="duration"> 
                                            <i class="fa fa-clock-o" aria-hidden="true"></i> 4 Years
                                        </span> 
                                        <span class="price">Price: <span>$350</span></span>
                                    </div>
                                </div>
                                <div class="post-item">
                                    <div class="post-img">
                                        <a href="blog-details.html"><img src="{{asset('assets/images/blog-details/sm3.jpg')}} " alt="" title="News image"></a>
                                    </div>
                                    <div class="post-desc">
                                        <h4><a href="blog-details.html">Raken develops reporting The software</a></h4>
                                        <span class="duration"> 
                                            <i class="fa fa-clock-o" aria-hidden="true"></i> 4 Years
                                        </span> 
                                        <span class="price">Price: <span>$350</span></span>
                                    </div>
                                </div>
                            </div>
                            <div class="tags-cloud clearfix">
                                <h3 class="title">Product Tags</h3>
                                <ul>
                                    <li>
                                        <a href="#">SCIENCE</a>
                                    </li>
                                    <li>
                                        <a href="#">HUMANITIES</a>
                                    </li>
                                    <li>
                                        <a href="#">DIPLOMA</a>
                                    </li>
                                    <li>
                                        <a href="#">BUSINESS</a>
                                    </li>
                                    <li>
                                        <a href="#">SPROTS</a>
                                    </li>
                                    <li>
                                        <a href="#">RESEARCH</a>
                                    </li>
                                    <li>
                                        <a href="#">ARTS</a>
                                    </li>
                                    <li>
                                        <a href="#">ADMISSIONS</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Event Details End -->

        <!-- Branches Start -->
        <div id="rs-branches" class="rs-branches sec-color pt-100 pb-70">
            <div class="container">
                <div class="sec-title mb-70 text-center">
                    <h2>OUR BRANCHES</h2>      
                	<p>Considering desire as primary motivation for the generatio.</p>
                </div>
				<div class="row">
					<div class="col-lg-3 col-md-6">
						<div class="branches-item">
							<img src="{{asset('assets/images/about/australia.png')}}" alt="Australia Flag">
							<h3>
								<span>01</span>
								Australia
							</h3>
							<p>
								503  Old Buffalo Street<br>
								Northwest City #205, Australia
							</p>
						</div>
					</div>
					<div class="col-lg-3 col-md-6">
						<div class="branches-item">
							<img src="{{asset('assets/images/about/china.png')}} " alt="China Flag">
							<h3>
								<span>02</span>
								China
							</h3>
							<p>
								503  Old Buffalo Street<br>
								Northwest City #205, China
							</p>
						</div>
					</div>
					<div class="col-lg-3 col-md-6">
						<div class="branches-item">
							<img src="{{asset('assets/images/about/india.png')}}" alt="India Flag">
							<h3>
								<span>03</span>
								India
							</h3>
							<p>
								503  Old Buffalo Street<br>
								Northwest City #205, India
							</p>
						</div>
					</div>
					<div class="col-lg-3 col-md-6">
						<div class="branches-item">
							<img src="{{asset('assets/images/about/united-states.png')}}" alt="United States Flag">
							<h3>
								<span>04</span>
								United States
							</h3>
							<p>
								503  Old Buffalo Street
								Northwest City #205, United States
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
        <!-- Branches End -->
				
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