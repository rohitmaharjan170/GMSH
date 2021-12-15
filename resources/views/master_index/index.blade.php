<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> Ganesh Man Singh Hospital |  @yield('sub-title')</title>

    <link rel="shortcut icon" href="{{ asset('/images/fav.jpg') }}">
    <link rel="stylesheet" href=" {{ asset('/css/bootstrap.min.css') }} ">
    <link rel="stylesheet" href=" {{ asset('/css/fontawsom-all.min.css') }} ">
    <link rel="stylesheet" href=" {{ asset('/css/owl.carousel.min.css') }} ">
    <link rel="stylesheet" href=" {{ asset('/css/owl.theme.default.css') }} ">
    <link rel="stylesheet" type="text/css" href=" {{ asset('/css/style.css') }} " />

     <script src="https://kit.fontawesome.com/4925793b17.js" crossorigin="rohitmaharjan"></script>
     

      <!-- <script src="{{ asset('/js/jquery-3.2.1.min.js') }}" defer></script>
      <script src="{{ asset('/js/popper.min.js') }}" defer></script>
      <script src="{{ asset('/js/bootstrap.min.js') }}" defer></script>
      <script src="{{ asset('/plugins/scroll-fixed/jquery-scrolltofixed-min.js') }}" defer></script>
      <script src="{{ asset('/plugins/slider/js/owl.carousel.min.js') }}" defer></script>
      <script src="{{ asset('/js/script.js') }}" defer></script> -->


      <!--     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->



  <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> -->

</head>


<body>

    <!-- ################# Header Starts Here#######################--->

    <header id="menu-jk">
        <nav  class="">
            <div class="container">
                <div class="row nav-ro">
                   <div class="col-lg-3 col-md-4 col-sm-12"> <a href="{{ url('/') }}">
                       <img src="{{ asset('/images/logo/logo-name.jpg') }}" alt="" > 
                       <a data-toggle="collapse" data-target="#menu" href="#menu"><i class="fas d-block d-md-none small-menu fa-bars"></i></a> </a>
                   </div>
                   <div id="menu" class="col-lg-8 col-md-9 d-none d-md-block no-padding">
                       <ul>
                            <li><a href="{{url('/')}}">Home</a></li>
                            <li><a href="#about">About Us</a></li>
                            <li><a href="#services">Services</a></li>
                            <li><a href="{{ url('/gallery') }}">Gallery</a></li>
                            <li><a href="#contact">Contact Us</a></li>
                            <li><a href="https://dev.ganeshmansinghhospital.com/phpTest/onlineappointment/app/#!/onlinelabreportdownload"> <button class="btn btn-success">Get Lab Report Online</button></a></li>
                        </ul>
                   </div>
                  <!--  <div class="col-sm-2 d-none d-lg-block">
                       <a href="https://dev.ganeshmansinghhospital.com/phpTest/onlineappointment/app/#!/onlinelabreportdownload"> <button class="btn btn-success">Get Lab Report Online</button> </a>
                   </div> -->
                </div>
            </div>
        </nav>
    </header>

    <!-- ################# Slider Starts Here#######################--->
     <div class="slider">
        <!-- Set up your HTML -->
        <div class="owl-carousel ">
            <div class="slider-img">
                <div class="item">
                    <div class="slider-img"><img src="{{ asset('/images/slider/slide_checkup.png') }}" alt=""></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-offset-2 col-lg-8 col-md-offset-2 col-md-8 col-sm-12 col-xs-12">
                                <div class="slider-captions">
                                    <h1 class="slider-title">We Are Here For Your Care</h1>
                                    <p class="slider-text hidden-xs">We care for your health every moment... Call us for Any Emergency Services</p>
                                    <a href="tel: 01-5530885" class="btn btn-success hidden-xs">Call Us: 01-5530885</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="slider-img"><img src="{{ asset('/images/slider/slider_hero.jpg') }}" alt=""></div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-offset-2 col-lg-8 col-md-offset-2 col-md-8 col-sm-12 col-xs-12">
                            <div class="slider-captions">
                                <h1 class="slider-title">We Provide Top Medical Services</h1>
                                <p class="slider-text hidden-xs"> Explore our different services right now.</p>
                                <a href="#services" class="btn btn-success hidden-xs">View All Services</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <section class="our-blog container-fluid" id="services">
  		<div class="container">
  		<div class="session-title row">
  		    <h2>Our Services</h2>
  		    <p>Explore our services we provide...</p>
  		</div>
  			<div class="col-sm-12 blog-cont">
  				<div class="row no-margin">

  					<div class="col-lg-4 col-md-6 blog-smk">
						<div class="blog-single">

								<img src="{{ asset('/images/services/pharmacy.jpg') }}" alt="">

							<div class="blog-single-det align-middle align-content-between">
							
								<h6>Pharmacy Service</h6>
								<p>Not the answer you're looking for? Browse other questions tagged  is simply dummy text of the printing and typesetting in</p>
								
							</div>
						</div>
					</div>

					<div class="col-lg-4 col-md-6 blog-smk">
						<div class="blog-single">

								<img src="{{ asset('/images/services/Pathology.png') }} " alt="">

							<div class="blog-single-det">
								
								<h6>Pathology Service</h6>
								<p>The hospital boasts of well-equipped state-of-art labs for accurate diagnostics. The Pathology Lab adheres to the protocols lined by the NABL and ISO.</p>
								
							</div>
						</div>
					</div>
					
					<div class="col-lg-4 col-md-6 blog-smk">
						<div class="blog-single">

								<img src="{{ asset('/images/services/Diagnostic_Imaging_icon.png') }} " alt="">

							<div class="blog-single-det">
							
								<h6>Diagnostic & Imaging</h6>
								<p>Not the answer you're looking for? Browse other questions tagged  is simply dummy text of the printing and typesetting in</p>
								
							</div>
						</div>
					</div>

          <div class="col-lg-4 col-md-6 blog-smk">
            <div class="blog-single">

                <img src="{{ asset('/images/services/emergency_Service.png') }} " alt="">

              <div class="blog-single-det">
              
                <h6>24-Hrs Emergency Service</h6>
                <p>Not the answer you're looking for? Browse other questions tagged  is simply dummy text of the printing and typesetting in</p>
               
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 blog-smk">
            <div class="blog-single">

                <img src="{{ asset('/images/services/inpatient.png') }} " alt="">

              <div class="blog-single-det">
              
                <h6> In patient Service</h6>
                <p>Not the answer you're looking for? Browse other questions tagged  is simply dummy text of the printing and typesetting in</p>
                
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 blog-smk">
            <div class="blog-single">

                <img src="{{ asset('/images/services/Radiology_icon.png') }} " alt="">

              <div class="blog-single-det">
              
                <h6>Radiology Service</h6>
                <p>The Radiology Department at Norvic International Hospital is equipped with the CT and MRI facility. The radiology department also has a computed radiography and Picture Archiving.</p>
               
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 blog-smk">
            <div class="blog-single">

                <img src="{{ asset('/images/services/ambulance_PNG18.png') }} " alt="">

              <div class="blog-single-det">
              
                <h6>Ambulance  Service</h6>
                <p>Not the answer you're looking for? Browse other questions tagged  is simply dummy text of the printing and typesetting in</p>
               
              </div>
            </div>
          </div>
					
          <div class="col-lg-4 col-md-6 blog-smk ">
            <div class="blog-single">

                <img src="{{ asset('/images/services/icu.jpg') }} " alt="">

              <div class="blog-single-det">
              
                <h6>ICU Service</h6>
                <p>Not the answer you're looking for? Browse other questions tagged  is simply dummy text of the printing and typesetting in</p>
                
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 blog-smk ">
            <div class="blog-single">

                <img src="{{ asset('/images/services/wellcare.png') }} " alt="">

              <div class="blog-single-det">
              
                <h6>Well Care</h6>
                <p>Not the answer you're looking for? Browse other questions tagged  is simply dummy text of the printing and typesetting in</p>
               
              </div>
            </div>
          </div>
					
					
				
					
					
  				</div>
  			</div>
  			
  		</div>
  	</section>  
  	
  	<!-- ################# Doctors Message Starts Here#######################--->


    <div class="doctor-message" id="about">
        <div class="inner-lay">
            <div class="container">
                <div class="row">


                    <div class="col-md-6 col-sm-12 doc-img">
                        <img  src="{{ asset('/images/about.jfif') }}" alt="">
                    </div>
                    <div class="col-md-6 col-sm-12 doc-det">
                        <h2>GANESHMAN SINGH MEMORIAL HOSPITAL </h2>
                        <span>& RESEARCH CENTER</span>

                        <p>Lorem Ipsum is simply text of the Lorem Ipsum is simply my text of the printing and Ipsum is simply text of the Ipsum is simply text of thetypesetting Ipsum is simply text of the stry simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply text of the Lorem Ipsum is simply my text of </p>

                        <h4>Call us on : 01-5530885</h4>
                    </div>
                </div>
            </div>

        </div>

    </div>

      	<!-- ################# Mission Vision Starts Here#######################--->
  	
  	<div class="mosion-vision">
  	    <div class="container">
  	        <div class="row">
  	            <div class="col-lg-4 col-md-12">
  	                <div class="single-dd">
  	                    <h4>Our Mission</h4>
  	                    <p>Committed to CARE</p> <br>

C – Compassion: Putting you in the place of another, treating others with kindness, concern and  generosity. 
<br><br>
A - Accountability: Accepting responsibility for behavior, quality of work and the outcome.
<br><br>
R – Respect: Treating others with courtesy, listening to and valuing what others have to say.
<br><br>
E - Excellence: Always striving to provide the best care and services continuously identifying opportunities to improve quality.  
  	                    
  	                    
  	                </div>
  	            </div>
  	            <div class="col-lg-4 col-md-12">
  	                 <div class="single-dd">
  	                    <h4>Key Facts</h4>
  	                    Some of the key facts about GMSH: <br><br>

  	                    100+ Beds <br><br>
Around 30+ Leading Doctors<br><br>
75+ Caring Nurses<br><br>
50+ Support Staffs<br><br>
1000+ Recovered Patients <br><br>
ISO Certified Hospital<br><br>
Dedicated on Late Ganesh Man Singh <br><br>
Pioneer Healthcare provider in Nepal
  	                    
  	                    
  	                </div>
  	            </div>
  	            <div class="col-lg-4 col-md-12">
  	                 <div class="single-dd">
  	                    <h4>Why Choos Us ?</h4>
  	                    The value system at GMSH lies at the foundation of three pillars: <br><br>

 <p>Service, Compassion and Integrity. </p><br>
Besides we also pratice, <br> <br>
Care<br><br>
Compassion<br><br>
Ethical Practices<br><br>
Learn & Lead<br><br>
Teamwork<br><br>
Trust
  	                    
  	                    
  	                </div>
  	            </div>
  	        </div>
  	    </div>
  	</div>
  	
 	<!-- ################# Our Session Starts Here#######################--->  	
  	
  	<section class="sesion-type">
  	    <div class="container">
             <div class="session-title row">
  		    <h2>Our Department Types</h2>
  		    <p>GMSH Provides many department inorder to fully execute the hospital in proper way. Some of our department are as:</p>
  		</div>
  	        <div class="row">
  	            <div class="col-md-4 col-sm-6">
  	                <div class="single-sess">
  	                    <img src="{{ asset('/images/session/dep1.jpg') }}" alt="">
  	                    <p>Medical Department</p>
  	                </div>
  	            </div>
  	            <div class="col-md-4 col-sm-6">
  	                <div class="single-sess">
  	                    <img src="{{ asset('/images/session/dep2.jpg') }}" alt="">
  	                    <p>OPD</p>
  	                </div>
  	            </div>
  	            <div class="col-md-4 col-sm-6">
  	                <div class="single-sess">
  	                    <img src="{{ asset('/images/session/dep3.jpg') }}" alt="">
  	                    <p>IPD</p>
  	                </div>
  	            </div>
  	            <div class="col-md-4 col-sm-6">
  	                <div class="single-sess">
  	                    <img src="{{ asset('/images/session/dep4.jpg') }}" alt="">
  	                    <p>X-ray</p>
  	                </div>
  	            </div>
  	            <div class="col-md-4 col-sm-6">
  	                <div class="single-sess">
  	                    <img src="{{ asset('/images/session/dep5.jpg') }}" alt="">
  	                    <p>Pathology</p>
  	                </div>
  	            </div>
  	             <div class="col-md-4 col-sm-6">
  	                <div class="single-sess">
  	                    <img src="{{ asset('/images/session/dep6.jpg') }}" alt="">
  	                    <p>Administrative Departments</p>
  	                </div>
  	            </div>
  	        </div>
  	    </div>
  	</section>
  	
  	<!-- ################# Testimonial Starts Here#######################--->
    

      <!-- ################# Footer Starts Here#######################--->


    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-12">
                    <h5>                        GANESHMAN SINGH MEMORIAL HOSPITAL & RESEARCH CENTER </h5>

                     <img src="{{ asset('/images/logo/logo-name.jpg') }}" alt="" > 
                    
                </div>

                <div class="col-md-4 col-sm-12 map-img">
                    <h2>Contact Us</h2>
                    <address class="md-margin-bottom-40">
                       	Address : Mahalaxmisthan-15,Lalitpur <br>
                        Email : ganeshmansinghhospital@gmail.com<br>
                        Phone : 015530885 <br>

                    </address>

                </div>
            </div>
        </div>
        

    </footer>
    <div class="copy">
            <div class="container">
                <a href="https://www.smarteyeapps.com/"><script>document.write(new Date().getFullYear())</script> &copy; All Rights Reserved | GaneshMan Singh Memorial Hospital</a>
                
                <span>
                <a href="https://www.facebook.com/ganeshmansinghmemorialhospital" target="_blank"><i class="fab fa-facebook-f"></i></a>
        </span>
            </div>

        </div>
    
    </body>

<script src="{{ asset('/js/jquery-3.2.1.min.js') }}" defer></script>
      <script src="{{ asset('/js/popper.min.js') }}" defer></script>
      <script src="{{ asset('/js/bootstrap.min.js') }}" defer></script>
      <script src="{{ asset('/js/jquery-scrolltofixed-min.js') }}" defer></script>
      <script src="{{ asset('/js/owl.carousel.min.js') }}" defer></script>
      <script src="{{ asset('/js/script.js') }}" defer></script>


</html>

