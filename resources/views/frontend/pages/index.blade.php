@extends('frontend.base.base')
@section('content')
<!--Full width header End-->
		
		<!-- Slider Area Start -->
        <div id="rs-slider" class="slider-overlay-1">     
        	<div id="home-slider">
				<!-- Item 1 -->
				<div class="item active">
					<img src="{{asset('assets/images/slider/home2/slide1.jpg')}}" alt="Slide1" />
					<div class="slide-content">
						<div class="display-table">
							<div class="display-table-cell">
								<div class="container">
									<h1 class="slider-title" data-animation-in="fadeInLeft" data-animation-out="animate-out">WELCOME<br>TO OUR UNIVERSITY</h1>
									<p data-animation-in="fadeInUp" data-animation-out="animate-out" class="slider-desc">Fusce sem dolor, interdum in efficitur at, faucibus nec lorem.Sed nec molestie justo.<br> Nunc quis sapien in arcu pharetra volutpat.Morbi nec vulputate dolor.</p>  
									<a href="#" class="sl-readmore-btn mr-30" data-animation-in="lightSpeedIn" data-animation-out="animate-out">READ MORE</a>
									<a href="#" class="sl-get-started-btn" data-animation-in="lightSpeedIn" data-animation-out="animate-out">GET STARTED NOW</a>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Item 2 -->
				<div class="item">
					<img src="{{asset('assets/images/slider/home2/slide2.jpg')}}" alt="Slide2" />
					<div class="slide-content">
						<div class="display-table">
							<div class="display-table-cell">
								<div class="container">
									<h1 class="slider-title" data-animation-in="fadeInUp" data-animation-out="animate-out">ARE YOU READY TO APPLY?</h1>
									<p data-animation-in="fadeInUp" data-animation-out="animate-out" class="slider-desc">Fusce sem dolor, interdum in efficitur at, faucibus nec lorem.Sed nec molestie justo.<br> Nunc quis sapien in arcu pharetra volutpat.Morbi nec vulputate dolor.</p>  
									<a href="#" class="sl-readmore-btn mr-30" data-animation-in="fadeInUp" data-animation-out="animate-out">READ MORE</a>
									<a href="#" class="sl-get-started-btn" data-animation-in="fadeInUp" data-animation-out="animate-out">GET STARTED NOW</a>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Item 3 -->
				<div class="item">
					<img src="{{asset('assets/images/slider/home2/slide3.jpg')}}" alt="Slide3" />
					<div class="slide-content">
						<div class="display-table">
							<div class="display-table-cell">
								<div class="container">
									<h1 class="slider-title" data-animation-in="fadeInUp" data-animation-out="animate-out">ARE YOU READY TO APPLY?</h1>
									<p data-animation-in="fadeInUp" data-animation-out="animate-out" class="slider-desc">Fusce sem dolor, interdum in efficitur at, faucibus nec lorem.Sed nec molestie justo.<br> Nunc quis sapien in arcu pharetra volutpat.Morbi nec vulputate dolor.</p>  
									<a href="#" class="sl-readmore-btn mr-30" data-animation-in="fadeInUp" data-animation-out="animate-out">READ MORE</a>
									<a href="#" class="sl-get-started-btn" data-animation-in="fadeInUp" data-animation-out="animate-out">GET STARTED NOW</a>
								</div>
							</div>
						</div>
					</div>
				</div>

        	</div>         
        </div>
        <!-- Slider Area End -->
		
		<!-- Search Courses Start -->
        <div class="rs-search-courses">
            <div class="container">
                <form class="row search-form">
                    <div class="col-md-3">
                    	<div class="categories">
                    		<select>
                    			<option>All Categories</option>
                    			<option>Computer Engineering</option>
                    			<option>Electrical Engineering</option>
                    			<option>Electronics Engineering</option>
                    			<option>Civil Engineering</option>
                    		</select>
                    	</div>
                    </div>
                    <div class="col-md-3">
                    	<div class="level">
                    		<select>
                    			<option>Select Degree</option>
                    			<option>B.Sc in EEE</option>
                    			<option>B.Sc in CSE</option>
                    			<option>BSS (Hons)</option>
                    			<option>LL.B (Hons)</option>
                    		</select>
                    	</div>
                    </div>
                    <div class="col-md-3">
                    	<div class="keyword">
                    		<input type="text" placeholder="Course Keyword...">
                    	</div>
                    </div>
                    <div class="col-md-3">
                    	<div class="search-btn">
                    	    <button type="submit">Search Courses</button>
                    	</div>
                    </div>
                </form>
            </div>
        </div>
		<!-- Search Courses End -->

		<!-- Courses Start -->
        <div id="rs-courses-2" class="rs-courses-2 sec-spacer sec-color">
			<div class="container">
				<div class="sec-title-2">
                    <h2 class="mb-30">OUR MAIN COURSES</h2>      
                	<div class="view-more">
                		<a href="/course">View All Courses <i class="fa fa-angle-double-right"></i></a>
                	</div>
                </div>
                <div class="gridFilter">
                    <button class="active" data-filter="*">ALL</button>
                    <button data-filter=".filter1">SCIENCE</button>
                    <button data-filter=".filter2">BUSINESS</button>
                    <button data-filter=".filter3">HUMANITIES</button>
                    <button data-filter=".filter4">DIPLOMA</button>
                </div>
				<div class="row grid">
					<div class="col-lg-4 col-md-6 grid-item filter1 filter3">
		                <div class="cource-item">
		                    <div class="cource-img">
		                        <img src="{{asset('assets/images/courses/4.jpg')}} " alt="" />
		                    </div>
		                    <div class="course-body">
		                    	<a href="#" class="course-category">Science</a>
		                    	<h4 class="course-title">Electrical Engineering</h4>
		                    	<div class="course-desc">
		                    		<p>
		                    			Cras ultricies lacus consectetur, consectetur
		                    			scelerisque arcu curabitur
		                    		</p>
		                    	</div>
		                    	<a href="/course_detail" class="cource-btn">Apply Now</a>
		                    </div>
		                </div>						
					</div>
					<div class="col-lg-4 col-md-6 grid-item filter1">
		                <div class="cource-item">
		                    <div class="cource-img">
		                        <img src="{{asset('assets/images/courses/5.jpg')}} " alt="" />
		                    </div>
		                    <div class="course-body">
		                    	<a href="#" class="course-category">Science</a>
		                    	<h4 class="course-title">Computer Engineering</h4>
		                    	<div class="course-desc">
		                    		<p>
		                    			Cras ultricies lacus consectetur, consectetur
		                    			scelerisque arcu curabitur
		                    		</p>
		                    	</div>
		                    	<a href="/course_detail" class="cource-btn">Apply Now</a>
		                    </div>
		                </div>						
					</div>
					<div class="col-lg-4 col-md-6 grid-item filter3">
		                <div class="cource-item">
		                    <div class="cource-img">
		                        <img src="{{asset('assets/images/courses/6.jpg')}} " alt="" />
		                    </div>
		                    <div class="course-body">
		                    	<a href="#" class="course-category">Law</a>
		                    	<h4 class="course-title">Legum nrm Baccalaureus</h4>
		                    	<div class="course-desc">
		                    		<p>
		                    			Cras ultricies lacus consectetur, consectetur
		                    			scelerisque arcu curabitur
		                    		</p>
		                    	</div>
		                    	<a href="/course_detail" class="cource-btn">Apply Now</a>
		                    </div>
		                </div>
					</div>
					<div class="col-lg-4 col-md-6 grid-item filter3 filter4">
		                <div class="cource-item">
		                    <div class="cource-img">
		                        <img src="{{asset('assets/images/courses/7.jpg')}} " alt="" />
                                <a class="image-link" href="courses-details.html" title="University Tour 2018">
                                    <i class="fa fa-link"></i>
                                </a>
		                    </div>
		                    <div class="course-body">
		                    	<a href="#" class="course-category">Arts</a>
		                    	<h4 class="course-title"><a href="#">Master of Arts</a></h4>
		                    	<div class="course-desc">
		                    		<p>
		                    			Cras ultricies lacus consectetur, consectetur
		                    			scelerisque arcu curabitur
		                    		</p>
		                    	</div>
		                    	<a href="#" class="cource-btn">Apply Now</a>
		                    </div>
		                </div>						
					</div>
					<div class="col-lg-4 col-md-6 grid-item filter2">
		                <div class="cource-item">
		                    <div class="cource-img">
		                        <img src="{{asset('assets/images/courses/8.jpg')}} " alt="" />
                                <a class="image-link" href="courses-details.html" title="University Tour 2018">
                                    <i class="fa fa-link"></i>
                                </a>
		                    </div>
		                    <div class="course-body">
		                    	<a href="#" class="course-category">Commerce</a>
		                    	<h4 class="course-title"><a href="#">Business Strategy</a></h4>
		                    	<div class="course-desc">
		                    		<p>
		                    			Cras ultricies lacus consectetur, consectetur
		                    			scelerisque arcu curabitur
		                    		</p>
		                    	</div>
		                    	<a href="#" class="cource-btn">Apply Now</a>
		                    </div>
		                </div>						
					</div>
					<div class="col-lg-4 col-md-6 grid-item filter2 filter4">
		                <div class="cource-item">
		                    <div class="cource-img">
		                        <img src="{{asset('assets/images/courses/9.jpg')}} " alt="" />
                                <a class="image-link" href="courses-details.html" title="University Tour 2018">
                                    <i class="fa fa-link"></i>
                                </a>
		                    </div>
		                    <div class="course-body">
		                    	<a href="#" class="course-category">Science</a>
		                    	<h4 class="course-title"><a href="#">Mechanical Engineering</a></h4>
		                    	<div class="course-desc">
		                    		<p>
		                    			Cras ultricies lacus consectetur, consectetur
		                    			scelerisque arcu curabitur
		                    		</p>
		                    	</div>
		                    	<a href="#" class="cource-btn">Apply Now</a>
		                    </div>
		                </div>
					</div>						
			    </div>
			</div>
        </div>
        <!-- Courses End -->
		
		<!-- Counter Up Section Start-->
        <div class="rs-counter pt-100 pb-70 bg3">
            <div class="container">
                <div class="sec-title white-text mb-50 text-center">
                    <h2>ACHEIVEMENTS</h2>      
                    <p>Fusce sem dolor, interdum in efficitur at, faucibus nec lorem. Sed nec molestie justo.</p>
                </div>
        		<div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="rs-counter-list">
                            <h2 class="counter-number plus">60</h2>                  
                            <h4 class="counter-desc">TEACHERS</h4>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="rs-counter-list">
                            <h2 class="counter-number plus">40</h2>
                            <h4 class="counter-desc">COURSES</h4>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="rs-counter-list">
                            <h2 class="counter-number plus">900</h2>                  
                            <h4 class="counter-desc">STUDENTS</h4>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="rs-counter-list">
                            <h2 class="counter-number plus">3675</h2>
                            <h4 class="counter-desc">Satisfied Client</h4>
                        </div>
                    </div>
        		</div>
            </div>
        </div>
        <!-- Counter Up Section End -->

        <!-- Why Choose Us Start-->
        <div class="rs-why-choose sec-spacer">
            <div class="container">
        		<div class="row">
                    <div class="col-lg-6 col-md-12">
                        <div class="sec-title mb-40">
		                    <h2>WHY CHOOSE US ?</h2>      
		                	<p>Fusce sem dolor, interdum in efficitur at, faucibus nec lorem.</p>
		                </div>
                        <div class="choose-desc">
                        	<p>
                        		The ship set ground on the shore of this uncharted desert isle with Gilligan the Skipper too the millionaire and his wife. These days are all Happy and Free. These days are all share them with me.
                        	</p>
                        	<p>
                        		It's time to put on makeup. It's time to dress up right. It's time to raise the curtain on the Muppet Show tonight. 
                        	</p>
                        </div>
                        <div class="row choose-list mt-50">
                        	<div class="col-md-4">
                        		<div class="choose-item rs-animation-hover">
	                    	        <i class="flaticon-book-1 rs-animation-scale-up"></i>
	                    	        <h3 class="choose-title">Experienced Faculty</h3>
	                    	    </div>
                        	</div>
                        	<div class="col-md-4">
                        		<div class="choose-item rs-animation-hover">
	                    	        <i class="flaticon-tool-1 rs-animation-scale-up"></i>
	                    	        <h3 class="choose-title">Popular Courses</h3>
	                    	    </div>
                        	</div>
                        	<div class="col-md-4">
                        		<div class="choose-item rs-animation-hover">
	                    	        <i class="flaticon-document rs-animation-scale-up"></i>
	                    	        <h3 class="choose-title">Guaranteed Career</h3>
	                    	    </div>
                        	</div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="choose-img">
                            <img src="{{asset('assets/images/choose-us/1.png')}}" alt="Why Choose Us">
                        </div>
                    </div>
        		</div>
            </div>
        </div>
        <!-- Why Choose Us End -->

        <!-- Team Start -->
        <div id="rs-team" class="rs-team sec-color sec-spacer">
            <div class="container">
                <div class="sec-title mb-50">
                    <h2>OUR EXPERIENCED STAFFS</h2>      
                	<p>Fusce sem dolor, interdum in efficitur at, faucibus nec lorem.Sed nec molestie justo.</p>
                	<div class="view-more">
                		<a href="/staff">View All Staff <i class="fa fa-angle-double-right"></i></a>
                	</div>
                </div>
				<div class="rs-carousel owl-carousel" data-loop="true" data-items="3" data-margin="30" data-autoplay="false" data-autoplay-timeout="5000" data-smart-speed="1200" data-dots="true" data-nav="true" data-nav-speed="false" data-mobile-device="1" data-mobile-device-nav="true" data-mobile-device-dots="true" data-ipad-device="2" data-ipad-device-nav="true" data-ipad-device-dots="true" data-md-device="3" data-md-device-nav="true" data-md-device-dots="true">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="{{asset('assets/images/team/1.jpg')}}" alt="team Image" />
							<div class="normal-text">
								<h3 class="team-name">ABD Rashid Khan</h3>
                                <span class="subtitle">Vice Chancellor</span>
							</div>
                        </div>
                        <div class="team-content">
							<div class="overly-border"></div>
                            <div class="display-table">
                                <div class="display-table-cell">
									<h3 class="team-name"><a href="teachers-single.html">ABD Rashid Khan</a></h3>
									<span class="team-title">Vice Chancellor</span>
                                    <p class="team-desc">Entrusted with planning, implementation and evaluation.</p>
									<div class="team-social">
										<a href="#" class="social-icon"><i class="fa fa-facebook"></i></a>
										<a href="#" class="social-icon"><i class="fa fa-google-plus"></i></a>
										<a href="#" class="social-icon"><i class="fa fa-twitter"></i></a>
										<a href="#" class="social-icon"><i class="fa fa-pinterest-p"></i></a>
									</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="team-item">
                        <div class="team-img">
                            <img src="{{asset('assets/images/team/2.jpg')}}" alt="team Image" />
							<div class="normal-text">
								<h3 class="team-name">Luyes Figery</h3>
                                <span class="subtitle">A. Professor</span>
							</div>
                        </div>
                        <div class="team-content">
							<div class="overly-border"></div>
                            <div class="display-table">
                                <div class="display-table-cell">
                                    <h3 class="team-name"><a href="teachers-single.html">Luyes Figery</a></h3>
                                    <span class="team-title">A. Professor</span>
                                    <p class="team-desc">Entrusted with planning, implementation and evaluation.</p>
									<div class="team-social">
										<a href="#" class="social-icon"><i class="fa fa-facebook"></i></a>
										<a href="#" class="social-icon"><i class="fa fa-google-plus"></i></a>
										<a href="#" class="social-icon"><i class="fa fa-twitter"></i></a>
										<a href="#" class="social-icon"><i class="fa fa-pinterest-p"></i></a>
									</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="team-item">
                        <div class="team-img">
                            <img src="{{asset('assets/images/team/3.jpg')}}" alt="team Image" />
							<div class="normal-text">
								<h3 class="team-name">Mr. Mahabub Alam</h3>
                                <span class="subtitle">Assistant Professor</span>
							</div>
                        </div>
                        <div class="team-content">
							<div class="overly-border"></div>
                            <div class="display-table">
                                <div class="display-table-cell">
                                    <h3 class="team-name"><a href="teachers-single.html">Mr. Mahabub Alam</a></h3>
                                    <span class="team-title">Assistant Professor</span>
                                    <p class="team-desc">Entrusted with planning, implementation and evaluation.</p>
									<div class="team-social">
										<a href="#" class="social-icon"><i class="fa fa-facebook"></i></a>
										<a href="#" class="social-icon"><i class="fa fa-google-plus"></i></a>
										<a href="#" class="social-icon"><i class="fa fa-twitter"></i></a>
										<a href="#" class="social-icon"><i class="fa fa-pinterest-p"></i></a>
									</div>
                                </div>
                            </div>
                        </div>
                    </div>
				</div>
			</div>
		</div>
        <!-- Team End -->

        <!-- Calltoaction Start -->
        <div id="rs-calltoaction" class="rs-calltoaction sec-spacer bg4">
            <div class="container">
                <div class="rs-cta-inner text-center">
                    <div class="sec-title mb-50 text-center">
                        <h2 class="white-color">WEB DESIGN &amp; DEVLOPMENT COURSE</h2>      
                        <p class="white-color">Fusce sem dolor, interdum in efficitur at, faucibus nec lorem.</p>
                    </div>
				    <a class="cta-button" href="#">Join Now</a>
				</div>
            </div>
        </div>
        <!-- Calltoaction End -->

        <!-- Pricing Plan Start -->
        <div id="rs-pricing" class="rs-pricing pt-100 pb-70">
			<div class="container">
				<div class="sec-title mb-50">
                    <h2>OUR BEST PRICING</h2>      
                	<p>Fusce sem dolor, interdum in efficitur at, faucibus nec lorem.Sed nec molestie justo.</p>
                </div>
				<div class="row">
			        <div class="col-md-4">
						<div class="pricing-plan">
				            <div class="pricing-head">
		                        <div class="name">
		                        	Basic
		                        </div>
		                        <div class="price">
		                       		<sup> $ </sup>
		                       		<span class="value">30</span>
		                       		<span class="duration"> / mo</span>
		                        </div>
		                    </div>
		                    <div class="pricing-body">
			                    <ul>
			                        <li>256MB Memory</li>
			                        <li>1 User</li>
			                        <li>1 Website</li>
			                        <li>1 Domain</li>
			                        <li>Unlimited Bandwidth</li>
			                        <li>24/7 Support</li>                                            
			                    </ul>
		                    </div>
	                        <div class="pricing-footer">
	                        	<a class="pricing-btn" href="#">SELECT</a>
	                        </div>
				        </div>
			        </div>
			        <div class="col-md-4">
						<div class="pricing-plan featured">
				            <div class="pricing-head">
		                        <div class="name">
		                        	Popular
		                        </div>
		                        <div class="price">
		                       		<sup> $ </sup>
		                       		<span class="value">60</span>
		                       		<span class="duration"> / mo</span>
		                        </div>
		                    </div>
		                    <div class="pricing-body">
			                    <ul>
			                        <li>512MB Memory</li>
			                        <li>2 User</li>
			                        <li>1 Website</li>
			                        <li>3 Domain</li>
			                        <li>Unlimited Bandwidth</li>
			                        <li>24/7 Support</li>                                            
			                    </ul>
		                    </div>
	                        <div class="pricing-footer">
	                        	<a class="pricing-btn" href="#">SELECT</a>
	                        </div>
				        </div>
			        </div>
			        <div class="col-md-4">
						<div class="pricing-plan">
				            <div class="pricing-head">
		                        <div class="name">
		                        	Premier
		                        </div>
		                        <div class="price">
		                       		<sup> $ </sup>
		                       		<span class="value">90</span>
		                       		<span class="duration"> / mo</span>
		                        </div>
		                    </div>
		                    <div class="pricing-body">
			                    <ul>
			                        <li>2GB Memory</li>
			                        <li>5 User</li>
			                        <li>6 Website</li>
			                        <li>4 Domain</li>
			                        <li>Unlimited Bandwidth</li>
			                        <li>24/7 Support</li>                                            
			                    </ul>
		                    </div>
	                        <div class="pricing-footer">
	                        	<a class="pricing-btn" href="#">SELECT</a>
	                        </div>
				        </div>
			        </div>
			    </div>
			</div>
        </div>
        <!-- Pricing Plan End -->

        <!-- Events Start -->
        <div id="rs-events" class="rs-events sec-spacer sec-color">
			<div class="container">
				<div class="sec-title mb-50">
                    <h2>OUR UPCOMING EVENTS</h2>      
                	<p>Fusce sem dolor, interdum in efficitur at, faucibus nec lorem. Sed nec molestie justo.</p>
                	<div class="view-more">
                		<a href="/event">View All Events <i class="fa fa-angle-double-right"></i></a>
                	</div>
                </div>
				<div class="row">
			        <div class="col-md-12">
						<div class="rs-carousel owl-carousel" data-loop="true" data-items="3" data-margin="30" data-autoplay="false" data-autoplay-timeout="5000" data-smart-speed="1200" data-dots="true" data-nav="true" data-nav-speed="false" data-mobile-device="1" data-mobile-device-nav="true" data-mobile-device-dots="true" data-ipad-device="2" data-ipad-device-nav="true" data-ipad-device-dots="true" data-md-device="3" data-md-device-nav="true" data-md-device-dots="true">
			                <div class="event-item">
			                    <div class="event-img">
			                        <img src="{{asset('assets/images/events/1.jpg')}}" alt="" />
                                    <a class="image-link" href="events-details.html" title="University Tour 2018">
                                        <i class="fa fa-link"></i>
                                    </a>
			                    </div>
                                <div class="events-details white-bg">
                                    <div class="event-date">
                                        <i class="fa fa-calendar"></i>
                                        <span>28 June 2017</span>
                                    </div>
                                    <h4 class="event-title"><a href="events-details.html">PRACTICE WORKSHOP 2018</a></h4>
                                    <div class="event-meta">
                                        <div class="event-time">
                                            <i class="fa fa-clock-o"></i>
                                            <span>12.30AM-05.30PM</span>
                                        </div>
                                        <div class="event-location">
                                            <i class="fa fa-map-marker"></i>
                                            <span>Venue A, Main Campus</span>
                                        </div>
                                    </div>
                                    <div class="event-btn">
                                        <a href="#">Join Event <i class="fa fa-angle-double-right"></i></a>
                                    </div>
		                    	</div>
			                </div>
			                <div class="event-item">
			                    <div class="event-img">
			                        <img src="{{asset('assets/images/events/2.jpg')}}" alt="" />
                                    <a class="image-link" href="events-details.html" title="University Tour 2018">
                                        <i class="fa fa-link"></i>
                                    </a>
			                    </div>
                                <div class="events-details white-bg">
                                    <div class="event-date">
                                        <i class="fa fa-calendar"></i>
                                        <span>28 April 2017</span>
                                    </div>
                                    <h4 class="event-title"><a href="events-details.html">CAMPUS EXAMINATION ROOM</a></h4>
                                    <div class="event-meta">
                                        <div class="event-time">
                                            <i class="fa fa-clock-o"></i>
                                            <span>10.30AM-03.30PM</span>
                                        </div>
                                        <div class="event-location">
                                            <i class="fa fa-map-marker"></i>
                                            <span>Venue A, Main Campus</span>
                                        </div>
                                    </div>
                                    <div class="event-btn">
                                        <a href="#">Join Event <i class="fa fa-angle-double-right"></i></a>
                                    </div>
		                    	</div>
			                </div>
			                <div class="event-item">
			                    <div class="event-img">
			                        <img src="{{asset('assets/images/events/3.jpg')}}" alt="" />
                                    <a class="image-link" href="events-details.html" title="University Tour 2018">
                                        <i class="fa fa-link"></i>
                                    </a>
			                    </div>
                                <div class="events-details white-bg">
                                    <div class="event-date">
                                        <i class="fa fa-calendar"></i>
                                        <span>28 June 2017</span>
                                    </div>
                                    <h4 class="event-title"><a href="events-details.html">BEST GRADUATION CEREMONY</a></h4>
                                    <div class="event-meta">
                                        <div class="event-time">
                                            <i class="fa fa-clock-o"></i>
                                            <span>10.30AM-03.30PM</span>
                                        </div>
                                        <div class="event-location">
                                            <i class="fa fa-map-marker"></i>
                                            <span>Venue A, Main Campus</span>
                                        </div>
                                    </div>
                                    <div class="event-btn">
                                        <a href="#">Join Event <i class="fa fa-angle-double-right"></i></a>
                                    </div>
		                    	</div>
			                </div>
			            </div>
			        </div>
			    </div>
			</div>
        </div>
        <!-- Events End -->

        <!-- Latest News Start -->
        <div id="rs-latest-news" class="rs-latest-news sec-spacer">
			<div class="container">
				<div class="sec-title mb-50">
                    <h2>OUR LASTEST NEWS</h2>      
                	<p>Fusce sem dolor, interdum in efficitur at, faucibus nec lorem. Sed nec molestie justo.</p>
                	<div class="view-more">
                		<a href="/news">View All News <i class="fa fa-angle-double-right"></i></a>
                	</div>
                </div>
				<div class="row">
			        <div class="col-md-6">
						<div class="news-normal-block">
		                    <div class="news-img">
		                    	<a href="#">
		                        	<img src="{{asset('assets/images/blog/1.jpg')}}" alt="" />
		                    	</a>
		                    </div>
	                    	<div class="news-date">
	                    		<i class="fa fa-calendar-check-o"></i>
	                    		<span>June  28,  2017</span>
	                    	</div>
	                    	<h4 class="news-title"><a href="blog-details.html">Those Other College Expenses You Aren't Thinking About</a></h4>
	                    	<div class="news-desc">
	                    		<p>
	                    			Blandit rutrum, erat et egestas ultricies, dolor tortor egestas enim, quiste rhoncus sem the purus eu sapien curabitur.Lorem Ipsum is therefore always free from repetitionetc.
	                    		</p>
	                    	</div>
	                    	<div class="news-btn">
	                    		<a href="/news_detail">Read More</a>
	                    	</div>
		                </div>
			        </div>
			        <div class="col-md-6">
						<div class="news-normal-block">
		                    <div class="news-img">
		                    	<a href="#">
		                        	<img src="{{asset('assets/images/blog/1.jpg')}}" alt="" />
		                    	</a>
		                    </div>
	                    	<div class="news-date">
	                    		<i class="fa fa-calendar-check-o"></i>
	                    		<span>June  28,  2017</span>
	                    	</div>
	                    	<h4 class="news-title"><a href="blog-details.html">Those Other College Expenses You Aren't Thinking About</a></h4>
	                    	<div class="news-desc">
	                    		<p>
	                    			Blandit rutrum, erat et egestas ultricies, dolor tortor egestas enim, quiste rhoncus sem the purus eu sapien curabitur.Lorem Ipsum is therefore always free from repetitionetc.
	                    		</p>
	                    	</div>
	                    	<div class="news-btn">
	                    		<a href="/news_detail">Read More</a>
	                    	</div>
		                </div>
			        </div>
			    </div>
			</div>
        </div>
        <!-- Latest News End -->

        <!-- Video Start -->
        <div id="rs-video" class="rs-video bg6">
			<div class="container">
				<div class="video-content">
					<a class="popup-youtube" href="https://www.youtube.com/watch?v=3f9CAMoj3Ec" title="Video Icon">
						<i class="fa fa-play"></i>
					</a>
                    <span>TAKE A TOUR</span>
				</div>
			</div>
		</div>
        <!-- Video End -->

		<!-- Testimonial Start -->
        <div id="rs-testimonial-2" class="rs-testimonial-2 pt-100 pb-70 sec-color">
			<div class="container">
				<div class="sec-title mb-50">
					<h2>WHAT PEOPLE SAYS</h2>      
					<p>Fusce sem dolor, interdum in efficitur at, faucibus nec lorem. Sed nec molestie justo.</p>
				</div>
				<div class="row">
			        <div class="col-md-12">
						<div  class="rs-carousel owl-carousel" data-loop="true" data-items="2" data-margin="30" data-autoplay="true" data-autoplay-timeout="5000" data-smart-speed="1200" data-dots="false" data-nav="true" data-nav-speed="false" data-mobile-device="1" data-mobile-device-nav="true" data-mobile-device-dots="false" data-ipad-device="2" data-ipad-device-nav="true" data-ipad-device-dots="false" data-md-device="2" data-md-device-nav="true" data-md-device-dots="false">
			                <div class="testimonial-item">
			                    <div class="testi-img">
			                        <img src="{{asset('assets/images/testimonial/1.jpg')}}" alt="Jhon Smith">
			                    </div>
			                    <div class="testi-desc">
			                        <h4 class="testi-name">Luise Henrikes</h4>
			                        <p>
			                            Etiam non elit nec augue tempor gravida et sed velit. Aliquam tempus eget lorem ut malesuada. Phasellus dictum est sed libero posuere dignissim.
			                        </p>
			                    </div>
			                </div>
					        <div class="testimonial-item">
					            <div class="testi-img">
					                <img src="{{asset('assets/images/testimonial/2.jpg')}}" alt="Jhon Smith">
					            </div>
					            <div class="testi-desc">
					                <h4 class="testi-name">Aliana D’suza</h4>
					                <p>
					                    Etiam non elit nec augue tempor gravida et sed velit. Aliquam tempus eget lorem ut malesuada. Phasellus dictum est sed libero posuere dignissim.
					                </p>
					            </div>
					        </div>
					        <div class="testimonial-item">
					            <div class="testi-img">
					                <img src="{{asset('assets/images/testimonial/3.jpg')}}" alt="Jhon Smith">
					            </div>
					            <div class="testi-desc">
					                <h4 class="testi-name">Aliana D’suza</h4>
					                <p>
					                    Etiam non elit nec augue tempor gravida et sed velit. Aliquam tempus eget lorem ut malesuada. Phasellus dictum est sed libero posuere dignissim.
					                </p>
					            </div>
					        </div>
					        <div class="testimonial-item">
					            <div class="testi-img">
					                <img src="{{asset('assets/images/testimonial/4.jpg')}}" alt="Jhon Smith">
					            </div>
					            <div class="testi-desc">
					                <h4 class="testi-name">Aliana D’suza</h4>
					                <p>
					                    Etiam non elit nec augue tempor gravida et sed velit. Aliquam tempus eget lorem ut malesuada. Phasellus dictum est sed libero posuere dignissim.
					                </p>
					            </div>
					        </div>
					        <div class="testimonial-item">
					            <div class="testi-img">
					                <img src="{{asset('assets/images/testimonial/5.jpg')}}" alt="Jhon Smith">
					            </div>
					            <div class="testi-desc">
					                <h4 class="testi-name">Aliana D’suza</h4>
					                <p>
					                    Etiam non elit nec augue tempor gravida et sed velit. Aliquam tempus eget lorem ut malesuada. Phasellus dictum est sed libero posuere dignissim.
					            </div>
					        </div>
			            </div>
			        </div>
			    </div>
			</div>
        </div>
        <!-- Testimonial End -->
		
        <!-- Partner Start -->
        <div id="rs-partner" class="rs-partner pt-70 pb-70">
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
                        <a href="#"><img src="{{asset('assets/images/partner/5.png')}} " alt="Partner Image"></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Partner End -->
       
        <!-- Footer Start -->
        <footer id="rs-footer" class="bg3 rs-footer">
			<div class="container">
				<!-- Footer Address -->
				<div>
					<div class="row footer-contact-desc">
						<div class="col-md-4">
							<div class="contact-inner">
								<i class="fa fa-map-marker"></i>
								<h4 class="contact-title">Address</h4>
								<p class="contact-desc">
									503  Old Buffalo Street<br>
									Northwest #205, New York-3087
								</p>
							</div>
						</div>
						<div class="col-md-4">
							<div class="contact-inner">
								<i class="fa fa-phone"></i>
								<h4 class="contact-title">Phone Number</h4>
								<p class="contact-desc">
									+3453-909-6565<br>
									+2390-875-2235
								</p>
							</div>
						</div>
						<div class="col-md-4">
							<div class="contact-inner">
								<i class="fa fa-map-marker"></i>
								<h4 class="contact-title">Email Address</h4>
								<p class="contact-desc">
									support@rstheme.com<br>
									www.yourname.com
								</p>
							</div>
						</div>
					</div>					
				</div>
			</div>
@endsection