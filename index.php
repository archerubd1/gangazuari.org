<?php 
$page='home';
include_once('head_nav.php');
?>

	
	<section class="hero-wrap js-fullheight">
  <div class="home-slider js-fullheight owl-carousel">

    <!-- Slide 1 -->
    <div class="slider-item js-fullheight" style="background-image:url(images/banner1.jpg);">
      <div class="overlay-1"></div><div class="overlay-2"></div><div class="overlay-3"></div><div class="overlay-4"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center">
          <div class="col-md-10 col-lg-7 ftco-animate">
            <div class="text w-100">
              <h2>Celebrating Culture, Building Unity</h2>
              <h1 class="mb-3">The Ganga Zuari Academy: Where Harmony Grows</h1>
              <div class="d-flex meta">
                <div class="">
                  <p class="mb-0"><a href="volunteer.php" class="btn btn-secondary py-3 px-2 px-md-4">Join As Volunteer</a></p>
                </div>
                <a href="https://youtu.be/samplevideo" class="d-flex align-items-center button-link" target="_blank">
                  <div class="button-video d-flex align-items-center justify-content-center">
                    <span class="fa fa-play"></span>
                  </div>
                  <span>Watch Our Story</span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Slide 2 -->
    <div class="slider-item js-fullheight" style="background-image:url(images/banner2.jpg);">
      <div class="overlay-1"></div><div class="overlay-2"></div><div class="overlay-3"></div><div class="overlay-4"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center">
          <div class="col-md-10 col-lg-7 ftco-animate">
            <div class="text w-100">
              <h2>Preserving Traditions</h2>
              <h1 class="mb-3">Inclusive Growth Through Art & Culture</h1>
              <div class="d-flex meta">
                <div class="">
                  <p class="mb-0"><a href="programs.php" class="btn btn-secondary py-3 px-2 px-md-4">Explore Programs</a></p>
                </div>
                <a href="https://youtu.be/samplevideo" class="d-flex align-items-center button-link" target="_blank">
                  <div class="button-video d-flex align-items-center justify-content-center">
                    <span class="fa fa-play"></span>
                  </div>
                  <span>Experience Our Work</span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Slide 3 -->
    <div class="slider-item js-fullheight" style="background-image:url(images/banner3.jpg);">
      <div class="overlay-1"></div><div class="overlay-2"></div><div class="overlay-3"></div><div class="overlay-4"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center">
          <div class="col-md-10 col-lg-7 ftco-animate">
            <div class="text w-100">
              <h2>Together for a Better Tomorrow</h2>
              <h1 class="mb-3">Fostering Social Harmony in Goa & Beyond</h1>
              <div class="d-flex meta">
                <div class="">
                  <p class="mb-0"><a href="donate.php" class="btn btn-secondary py-3 px-2 px-md-4">Support Our Cause</a></p>
                </div>
                <a href="https://youtu.be/samplevideo" class="d-flex align-items-center button-link" target="_blank">
                  <div class="button-video d-flex align-items-center justify-content-center">
                    <span class="fa fa-play"></span>
                  </div>
                  <span>Learn More</span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
</section>


	<section class="ftco-appointment ftco-section ftco-no-pt ftco-no-pb img">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      
      <!-- Donation Form -->
      <div class="col-md-5 order-md-last d-flex align-items-stretch">
        <div class="donation-wrap">
          <div class="total-donate d-flex align-items-center">
            <span class="fa fa-heart"></span>
            <h4>Donation Campaigns <br>are ongoing</h4>
            <p class="d-flex align-items-center">
              <span>₹</span>
              <span class="number" data-number="2478100">0</span>
            </p>
          </div>
          <form action="#" class="appointment">
            <div class="row">
              
              <!-- Name -->
              <div class="col-md-12">
                <div class="form-group">
                  <label for="name">Full Name</label>
                  <div class="input-wrap">
                    <div class="icon"><span class="fa fa-user"></span></div>
                    <input type="text" class="form-control" placeholder="">
                  </div>
                </div>
              </div>
              
              <!-- Email -->
              <div class="col-md-12">
                <div class="form-group">
                  <label for="email">Email Address</label>
                  <div class="input-wrap">
                    <div class="icon"><span class="fa fa-paper-plane"></span></div>
                    <input type="email" class="form-control" placeholder="">
                  </div>
                </div>
              </div>
              
              <!-- Causes -->
              <div class="col-md-12">
                <div class="form-group">
                  <label for="cause">Select Cause</label>
                  <div class="form-field">
                    <div class="select-wrap">
                      <div class="icon"><span class="fa fa-chevron-down"></span></div>
                      <select name="cause" id="cause" class="form-control">
                        <option value="">Choose a cause...</option>
                        <option value="unmesh">Unmesh – Literary Initiatives</option>
                        <option value="chhandovani">Chhandovani – Musical Heritage</option>
                        <option value="utsav">Utsav – Cultural Festivals</option>
                        <option value="tapovan">Tapovan – Youth & Learning</option>
                      </select>
                    </div>
                  </div>
                </div>
              </div>
              
              <!-- Amount -->
              <div class="col-md-12">
                <div class="form-group">
                  <label for="amount">Donation Amount (INR)</label>
                  <div class="input-wrap">
                    <div class="icon"><span class="fa fa-inr"></span></div>
                    <input type="text" class="form-control" placeholder="₹500">
                  </div>
                </div>
              </div>
              
              <!-- Payment Method -->
              <div class="col-md-12">
                <div class="form-group">
                  <label for="payment">Payment Method</label>
                  <div class="d-lg-flex">
                    <div class="form-radio mr-3">
                      <div class="radio">
                        <label>
                          <input type="radio" name="payment" checked>
                          <span class="checkmark"></span>
                          <span class="fill-control-description">UPI / Netbanking</span>
                        </label>
                      </div>
                    </div>
                    <div class="form-radio mr-3">
                      <div class="radio">
                        <label>
                          <input type="radio" name="payment">
                          <span class="checkmark"></span>
                          <span class="fill-control-description">Credit / Debit Card</span>
                        </label>
                      </div>
                    </div>
                    <div class="form-radio">
                      <div class="radio">
                        <label>
                          <input type="radio" name="payment">
                          <span class="checkmark"></span>
                          <span class="fill-control-description">Bank Transfer</span>
                        </label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              
              <!-- Submit -->
              <div class="col-md-12">
                <div class="form-group">
                  <input type="submit" value="Donate Now" class="btn btn-secondary py-3 px-4">
                </div>
              </div>
              
            </div>
          </form>
        </div>
      </div>
      
  <!-- About GZA -->
<div class="col-md-7 wrap-about py-5">
  <div class="heading-section pr-md-5 pt-md-5">
    <span class="subheading">Welcome to The Ganga Zuari Academy</span>
    <h2 class="mb-4">A Vibrant Cultural Think Tank for 2025–2028</h2>
    <p>
      The Ganga Zuari Academy (GZA) is a vibrant cultural organization that connects diverse 
      traditions of India and abroad. Under the leadership of 
      <strong>Mr. Manguirish Pai Raiker</strong>, who was elected President at the Annual General Meeting on 
      <strong>29 June 2025</strong>, the Academy embarks on an exciting new chapter (2025–2028).
    </p>
    <p>
      The 9-member Governing Presidium includes respected figures such as Mr. Rajesh Tarcar and 
      Dr. Dinesh Verma (Vice Presidents), Ranadhir Mukhopadhyay (General Secretary), 
      and Saurav Roy (Treasurer), with support from Dr. Neeta Hede Mazumdar (Joint Secretary). 
      Event verticals are led by Dr. Anil Chatterjee <em>(Chhandovani)</em>, 
      Somnath Sarkar <em>(Unmesh)</em>, and Devinder Anand <em>(Utsav)</em>.
    </p>
    <p>
      With a vision to expand activities across Goa, including Margao and Vasco, 
      the Academy is set to launch the annual <strong>GZA Cultural Stewardship Award</strong> in 2026. 
      A year-round calendar of literary festivals, music and dance contests, culinary heritage 
      events, youth forums, and the <em>Manavnama</em> workshop on human values will foster harmony 
      and inclusivity across communities.
    </p>
  </div>

  <div class="row my-md-5">
    <div class="col-md-6 d-flex counter-wrap">
      <div class="block-18 d-flex">
        <div class="icon d-flex align-items-center justify-content-center">
          <span class="flaticon-volunteer"></span>
        </div>
        <div class="desc">
          <div class="text">
            <strong class="number" data-number="120">0</strong>
          </div>
          <div class="text">
            <span>Active Volunteers</span>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-6 d-flex counter-wrap">
      <div class="block-18 d-flex">
        <div class="icon d-flex align-items-center justify-content-center">
          <span class="flaticon-piggy-bank"></span>
        </div>
        <div class="desc">
          <div class="text">
            <strong class="number" data-number="500000">0</strong>
          </div>
          <div class="text">
            <span>Funds Raised (INR)</span>
          </div>
        </div>
      </div>
    </div>
  </div>

  <p><a href="volunteer.php" class="btn btn-secondary btn-outline-secondary">Become A Volunteer</a></p>
</div>

    </div>
  </div>
</section>




<section class="ftco-section ftco-no-pb">
  <div class="container">
    <div class="row justify-content-center pb-5 mb-3">
      <div class="col-md-7 heading-section text-center ftco-animate">
        <span class="subheading">What We Do</span>
        <h2>Our Programs & Initiatives</h2>
      </div>
    </div>
    <div class="row">
      
      <!-- UNMESH -->
      <div class="col-md-6 col-lg-3">
        <div class="causes causes-2 text-center ftco-animate">
          <a href="#" class="img w-100" style="background-image: url(images/unmesh.jpg);"></a>
          <div class="text p-3">
            <h2><a href="#">UNMESH</a></h2>
            <p>Exploring literature, language and philosophy through talks, seminars, and creative exchanges that foster critical thoughts.</p>
            <div class="goal mb-4">
              <p>Upcoming Events</p>
              <div class="progress" style="height:20px">
                <div class="progress-bar progress-bar-striped" style="width:100%; height:20px">Register Now</div>
              </div>
            </div>
            <p><a href="#" class="btn btn-light w-100">Learn More</a></p>
          </div>
        </div>
      </div>

      <!-- CHHANDOVANI -->
      <div class="col-md-6 col-lg-3">
        <div class="causes causes-2 text-center ftco-animate">
          <a href="#" class="img w-100" style="background-image: url(images/chann.jpg);"></a>
          <div class="text p-3">
            <h2><a href="#">Chhandovani</a></h2>
            <p>Promoting dance and music rooted in Indian values, with workshops and performances blending tradition and expression.</p>
            <div class="goal mb-4">
              <p>Upcoming Events</p>
              <div class="progress" style="height:20px">
                <div class="progress-bar progress-bar-striped" style="width:100%; height:20px">Register Now</div>
              </div>
            </div>
            <p><a href="#" class="btn btn-light w-100">Learn More</a></p>
          </div>
        </div>
      </div>

      <!-- UTSAV -->
      <div class="col-md-6 col-lg-3">
        <div class="causes causes-2 text-center ftco-animate">
          <a href="#" class="img w-100" style="background-image: url(images/utsav.jpg);"></a>
          <div class="text p-3">
            <h2><a href="#">UTSAV</a></h2>
            <p>Annual cultural festivals celebrating art, music, theatre, and traditions — strengthening bonds of community and inclusivity.</p>
            <div class="goal mb-4">
              <p>Upcoming Events</p>
              <div class="progress" style="height:20px">
                <div class="progress-bar progress-bar-striped" style="width:100%; height:20px">Register Now</div>
              </div>
            </div>
            <p><a href="#" class="btn btn-light w-100">Learn More</a></p>
          </div>
        </div>
      </div>

      <!-- TAPOVAN -->
      <div class="col-md-6 col-lg-3">
        <div class="causes causes-2 text-center ftco-animate">
          <a href="#" class="img w-100" style="background-image: url(images/tapovan.jpg);"></a>
          <div class="text p-3">
            <h2><a href="#">Tapovan</a></h2>
            <p>A sister organization fostering inclusive socio-economic growth, youth empowerment, and cultural training in Goa and beyond.</p>
            <div class="goal mb-4">
              <p>Upcoming Events</p>
              <div class="progress" style="height:20px">
                <div class="progress-bar progress-bar-striped" style="width:100%; height:20px">Register Now</div>
              </div>
            </div>
            <p><a href="#" class="btn btn-light w-100">Learn More</a></p>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>




	<section class="ftco-counter" id="section-counter">
  <div class="container">
    <div class="row">
      
      <!-- Intro -->
      <div class="col-md-3 mb-5 mb-md-0 text-center text-md-left">
        <h2 class="font-weight-bold" style="color: #fff; font-size: 22px;">
          Celebrating our journey of culture, community & impact
        </h2>
        <a href="#" class="btn btn-white btn-outline-white">Join Us</a>
      </div>

      <!-- Impact Stats -->
      <div class="col-md-9">
        <div class="row">

          <!-- Cultural Programs -->
          <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 text-center">
              <div class="text">
                <strong class="number" data-number="250">0</strong>
              </div>
              <div class="text">
                <span>Cultural Programs & Festivals Organized</span>
              </div>
            </div>
          </div>

          <!-- Artists & Performers -->
          <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 text-center">
              <div class="text">
                <strong class="number" data-number="1200">0</strong>
              </div>
              <div class="text">
                <span>Artists, Writers & Performers Engaged</span>
              </div>
            </div>
          </div>

          <!-- Community Reach -->
          <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 text-center">
              <div class="text">
                <strong class="number" data-number="50000">0</strong>
              </div>
              <div class="text">
                <span>People Reached Through Initiatives</span>
              </div>
            </div>
          </div>

          <!-- Years of Service -->
          <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 text-center">
              <div class="text">
                <strong class="number" data-number="18"></strong>
              </div>
              <div class="text">
                <span>Years of Promoting Arts & Culture</span>
              </div>
            </div>
          </div>

        </div>
      </div>

    </div>
  </div>
</section>



<section class="ftco-section testimony-section">
  <div class="overlay"></div>
  <div class="container">
    <div class="row justify-content-center pb-5">
      <div class="col-md-7 heading-section heading-section-white text-center ftco-animate">
        <span class="subheading">Testimonials</span>
        <h2>Voices from Our Journey</h2>
      </div>
    </div>
    <div class="row ftco-animate">
      <div class="col-md-12">
        <div class="carousel-testimony owl-carousel">

          <!-- Unmesh -->
          <div class="item">
            <div class="testimony-wrap d-flex">
              <div class="user-img" style="background-image: url(images/team-1.jpg)">
              </div>
              <div class="text pl-4">
                <span class="quote d-flex align-items-center justify-content-center">
                  <i class="fa fa-quote-left"></i>
                </span>
                <p>“Unmesh opened my mind to new ways of thinking about literature and philosophy. 
                It felt like an intellectual festival where ideas flowed as freely as music.”</p>
                <p class="name">Ananya Chatterjee</p>
                <span class="position">Professor, Kolkata</span>
              </div>
            </div>
          </div>

          <!-- Chhandovani -->
          <div class="item">
            <div class="testimony-wrap d-flex">
              <div class="user-img" style="background-image: url(images/team-2.jpg)">
              </div>
              <div class="text pl-4">
                <span class="quote d-flex align-items-center justify-content-center">
                  <i class="fa fa-quote-left"></i>
                </span>
                <p>“Through Chhandovani, I reconnected with my roots in dance and rhythm. 
                The blend of Indian values with contemporary movement was truly inspiring.”</p>
                <p class="name">Riya Naik</p>
                <span class="position">Classical Dancer, Goa</span>
              </div>
            </div>
          </div>

          <!-- Utsav -->
          <div class="item">
            <div class="testimony-wrap d-flex">
              <div class="user-img" style="background-image: url(images/team-3.jpg)">
              </div>
              <div class="text pl-4">
                <span class="quote d-flex align-items-center justify-content-center">
                  <i class="fa fa-quote-left"></i>
                </span>
                <p>“UTSAV brought together people from all walks of life. 
                The music, theatre, and art created a true spirit of unity and celebration.”</p>
                <p class="name">Rohit Verma</p>
                <span class="position">Theatre Artist, Delhi</span>
              </div>
            </div>
          </div>

          <!-- Tapovan -->
          <div class="item">
            <div class="testimony-wrap d-flex">
              <div class="user-img" style="background-image: url(images/team-4.jpg)">
              </div>
              <div class="text pl-4">
                <span class="quote d-flex align-items-center justify-content-center">
                  <i class="fa fa-quote-left"></i>
                </span>
                <p>“Tapovan gave us a platform to work on inclusive growth. 
                The workshops on youth empowerment and culture left a lasting mark on our community.”</p>
                <p class="name">Maria D’Souza</p>
                <span class="position">Social Worker, Goa</span>
              </div>
            </div>
          </div>

          <!-- Extra Testimonial -->
          <div class="item">
            <div class="testimony-wrap d-flex">
              <div class="user-img" style="background-image: url(images/team-5.jpg)">
              </div>
              <div class="text pl-4">
                <span class="quote d-flex align-items-center justify-content-center">
                  <i class="fa fa-quote-left"></i>
                </span>
                <p>“Being part of Ganga Zuari’s initiatives has been transformative. 
                It is more than culture — it is about creating belonging and community.”</p>
                <p class="name">Sayan Mukherjee</p>
                <span class="position">Writer, Bengaluru</span>
              </div>
            </div>
          </div>

          <!-- Additional 1 -->
          <div class="item">
            <div class="testimony-wrap d-flex">
              <div class="user-img" style="background-image: url(images/team-6.jpg)">
              </div>
              <div class="text pl-4">
                <span class="quote d-flex align-items-center justify-content-center">
                  <i class="fa fa-quote-left"></i>
                </span>
                <p>“The youth programs under Tapovan inspired my students to take pride in their culture while dreaming big for the future.”</p>
                <p class="name">Neha Patil</p>
                <span class="position">School Teacher, Pune</span>
              </div>
            </div>
          </div>

          <!-- Additional 2 -->
          <div class="item">
            <div class="testimony-wrap d-flex">
              <div class="user-img" style="background-image: url(images/team-7.jpg)">
              </div>
              <div class="text pl-4">
                <span class="quote d-flex align-items-center justify-content-center">
                  <i class="fa fa-quote-left"></i>
                </span>
                <p>“At UTSAV, I saw traditions from Bengal and Goa come together in perfect harmony. It reminded me of India’s true strength — unity in diversity.”</p>
                <p class="name">Arindam Ghosh</p>
                <span class="position">Entrepreneur, Kolkata</span>
              </div>
            </div>
          </div>

          <!-- Additional 3 -->
          <div class="item">
            <div class="testimony-wrap d-flex">
              <div class="user-img" style="background-image: url(images/team-8.jpg)">
              </div>
              <div class="text pl-4">
                <span class="quote d-flex align-items-center justify-content-center">
                  <i class="fa fa-quote-left"></i>
                </span>
                <p>“Chhandovani gave my daughter the confidence to perform on stage for the first time. It was a proud moment for our family.”</p>
                <p class="name">Sunil Shenoy</p>
                <span class="position">Parent, Mangalore</span>
              </div>
            </div>
          </div>

          <!-- Additional 4 -->
          <div class="item">
            <div class="testimony-wrap d-flex">
              <div class="user-img" style="background-image: url(images/team-9.jpg)">
              </div>
              <div class="text pl-4">
                <span class="quote d-flex align-items-center justify-content-center">
                  <i class="fa fa-quote-left"></i>
                </span>
                <p>“Unmesh showed me how literature can be a bridge between generations. 
                My father and I attended together, and it sparked conversations we never had before.”</p>
                <p class="name">Aditi Mehra</p>
                <span class="position">Student, Mumbai</span>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</section>

<section class="ftco-section">
  <div class="container">
    <div class="row justify-content-center pb-5 mb-3">
      <div class="col-md-7 heading-section text-center ftco-animate">
        <span class="subheading">Our Blog</span>
        <h2>Latest Stories & Updates</h2>
      </div>
    </div>
    <div class="row d-flex">

      <!-- Blog 1 -->
      <div class="col-md-6 col-lg-3 d-flex ftco-animate">
        <div class="blog-entry align-self-stretch">
          <a href="blog-single.html" class="block-20" style="background-image: url('images/blog2.jpg');">
          </a>
          <div class="text p-4">
            <div class="meta mb-2">
              <div><a href="#">March 15, 2025</a></div>
              <div><a href="#">Admin</a></div>
              <div><a href="#" class="meta-chat"><span class="fa fa-comment"></span> 5</a></div>
            </div>
            <h3 class="heading"><a href="#">Unmesh: Voices of Literature</a></h3>
            <p>Writers, poets, and thinkers came together at Unmesh to celebrate literature, free thought, and cultural dialogue.</p>
            <p><a href="#" class="btn btn-secondary">Read more</a></p>
          </div>
        </div>
      </div>

      <!-- Blog 2 -->
      <div class="col-md-6 col-lg-3 d-flex ftco-animate">
        <div class="blog-entry align-self-stretch">
          <a href="blog-single.html" class="block-20" style="background-image: url('images/blog3.jpg');">
          </a>
          <div class="text p-4">
            <div class="meta mb-2">
              <div><a href="#">February 10, 2025</a></div>
              <div><a href="#">Admin</a></div>
              <div><a href="#" class="meta-chat"><span class="fa fa-comment"></span> 8</a></div>
            </div>
            <h3 class="heading"><a href="#">Tapovan: Youth & Leadership</a></h3>
            <p>Through workshops and mentorship, Tapovan nurtures the creativity and leadership of India’s young minds.</p>
            <p><a href="#" class="btn btn-secondary">Read more</a></p>
          </div>
        </div>
      </div>

      <!-- Blog 3 -->
      <div class="col-md-6 col-lg-3 d-flex ftco-animate">
        <div class="blog-entry align-self-stretch">
          <a href="blog-single.html" class="block-20" style="background-image: url('images/blog1.jpg');">
          </a>
          <div class="text p-4">
            <div class="meta mb-2">
              <div><a href="#">January 28, 2025</a></div>
              <div><a href="#">Admin</a></div>
              <div><a href="#" class="meta-chat"><span class="fa fa-comment"></span> 12</a></div>
            </div>
            <h3 class="heading"><a href="#">Utsav: A Celebration of Unity</a></h3>
            <p>UTSAV brought together artists, musicians, and communities — showcasing the spirit of India’s diversity.</p>
            <p><a href="#" class="btn btn-secondary">Read more</a></p>
          </div>
        </div>
      </div>

      <!-- Blog 4 -->
      <div class="col-md-6 col-lg-3 d-flex ftco-animate">
        <div class="blog-entry align-self-stretch">
          <a href="blog-single.html" class="block-20" style="background-image: url('images/blog4.jpg');">
          </a>
          <div class="text p-4">
            <div class="meta mb-2">
              <div><a href="#">December 12, 2024</a></div>
              <div><a href="#">Admin</a></div>
              <div><a href="#" class="meta-chat"><span class="fa fa-comment"></span> 7</a></div>
            </div>
            <h3 class="heading"><a href="#">Chhandovani: Dance & Expression</a></h3>
            <p>Chhandovani continues to highlight classical and contemporary dance, nurturing performers across generations.</p>
            <p><a href="#" class="btn btn-secondary">Read more</a></p>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>




<style>
.flip-card {
  background: transparent;
  perspective: 1000px; /* 3D effect */
}
.flip-card-inner {
  position: relative;
  width: 100%;
  height: 350px;
  transition: transform 0.8s;
  transform-style: preserve-3d;
}
.flip-card:hover .flip-card-inner {
  transform: rotateY(180deg);
}
.flip-card-front, .flip-card-back {
  position: absolute;
  width: 100%;
  height: 100%;
  backface-visibility: hidden;
  border-radius: 8px;
  overflow: hidden;
}
.flip-card-front {
  background: #fff;
}
.flip-card-back {
  background: #007bff; /* Back color */
  color: #fff;
  display: flex;
  flex-direction: column;
  justify-content: center;
  text-align: center;
  padding: 20px;
  transform: rotateY(180deg);
}

.social-icons {
  margin-top: 15px;
}
.social-icons a {
  color: #fff;        /* white icons on back */
  font-size: 18px;    /* slightly bigger */
  margin: 0 10px;     /* spacing */
  transition: color 0.3s;
}
.social-icons a:hover {
  color: #ffdd57;     /* highlight color on hover */
}


</style>

<section class="ftco-section ftco-no-pt">
  <div class="container">
    <div class="row justify-content-center pb-5 mb-3">
      <div class="col-md-7 heading-section text-center ftco-animate">
        <span class="subheading">Our Team</span>
        <h2>Key People Who Make It Happen</h2>
      </div>
    </div>
    <div class="row">

      <!-- Person 1 -->
      <div class="col-md-6 col-lg-3">
        <div class="volunteer flip-card">
          <div class="flip-card-inner">

            <!-- Front Side -->
            <div class="flip-card-front">
              <div class="img" style="background-image: url(images/team-1.jpg);"></div>
              <div class="text text-1">
                <h3>Dr. Ananya Sen</h3>
                <span>President</span>
              </div>
            </div>

            <!-- Back Side -->
            <div class="flip-card-back">
              <h4>Dr. Ananya Sen</h4>
              <p>Cultural historian and community leader, driving initiatives to preserve Goa’s artistic heritage while fostering cross-regional collaboration.</p>
              <div class="social-icons d-flex justify-content-center">
                <a href="#"><span class="fa fa-linkedin"></span></a>
                <a href="#"><span class="fa fa-facebook"></span></a>
                <a href="#"><span class="fa fa-instagram"></span></a>
              </div>
            </div>

          </div>
        </div>
      </div>

      <!-- Person 2 -->
      <div class="col-md-6 col-lg-3">
        <div class="volunteer flip-card">
          <div class="flip-card-inner">
            <div class="flip-card-front">
              <div class="img" style="background-image: url(images/team-2.jpg);"></div>
              <div class="text text-2">
                <h3>Rajiv Naik</h3>
                <span>Vice President</span>
              </div>
            </div>
            <div class="flip-card-back">
              <h4>Rajiv Naik</h4>
              <p>Social activist and educationist, committed to strengthening cultural ties between Goa and Bengal through arts and festivals.</p>
              <div class="social-icons d-flex justify-content-center">
                <a href="#"><span class="fa fa-linkedin"></span></a>
                <a href="#"><span class="fa fa-facebook"></span></a>
                <a href="#"><span class="fa fa-instagram"></span></a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Person 3 -->
      <div class="col-md-6 col-lg-3">
        <div class="volunteer flip-card">
          <div class="flip-card-inner">
            <div class="flip-card-front">
              <div class="img" style="background-image: url(images/team-3.jpg);"></div>
              <div class="text text-3">
                <h3>Meera Chatterjee</h3>
                <span>General Secretary</span>
              </div>
            </div>
            <div class="flip-card-back">
              <h4>Meera Chatterjee</h4>
              <p>A passionate advocate for performing arts, she has curated several youth-led programs to encourage emerging artists.</p>
              <div class="social-icons d-flex justify-content-center">
                <a href="#"><span class="fa fa-linkedin"></span></a>
                <a href="#"><span class="fa fa-facebook"></span></a>
                <a href="#"><span class="fa fa-instagram"></span></a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Person 4 -->
      <div class="col-md-6 col-lg-3">
        <div class="volunteer flip-card">
          <div class="flip-card-inner">
            <div class="flip-card-front">
              <div class="img" style="background-image: url(images/team-4.jpg);"></div>
              <div class="text text-4">
                <h3>Vikram Rao</h3>
                <span>Treasurer</span>
              </div>
            </div>
            <div class="flip-card-back">
              <h4>Vikram Rao</h4>
              <p>Finance professional ensuring transparency and sustainability in cultural projects, while supporting grassroots initiatives.</p>
              <div class="social-icons d-flex justify-content-center">
                <a href="#"><span class="fa fa-linkedin"></span></a>
                <a href="#"><span class="fa fa-facebook"></span></a>
                <a href="#"><span class="fa fa-instagram"></span></a>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<section class="ftco-hireme bg-secondary">
  <div class="container">
    <div class="row justify-content-between">
      <div class="col-md-8 col-lg-8 d-flex align-items-center">
        <div class="w-100">
          <h2>Building Bridges Between Goa & Bengal Through Culture</h2>
        </div>
      </div>
      <div class="col-md-4 col-lg-4 d-flex align-items-center justify-content-end">
        <p class="mb-0"><a href="#" class="btn btn-primary py-3 px-4">Join the Movement</a></p>
      </div>
    </div>
  </div>
</section>

<?php 
include_once('footer.php');
?>
