<?php 
$page='home';
include_once('head_nav.php');
?>



<section class="hero-wrap js-fullheight">
  <div class="home-slider js-fullheight owl-carousel">

    <!-- Slide 1 -->
    <div class="slider-item js-fullheight" style="background-image:url(images/2025/4.jpg);">
      <div class="overlay-1"></div><div class="overlay-2"></div><div class="overlay-3"></div><div class="overlay-4"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center">
          <div class="col-md-10 col-lg-7 ftco-animate">
            <div class="text w-100">
              <h2>From Local Roots to Global Connections</h2>
              <h1 class="mb-3">The Ganga Zuari Academy: Bridging Communities Worldwide</h1>
              <div class="d-flex meta">
                <div>
                  <p class="mb-0">
                    <a href="volunteer.php" class="btn btn-secondary py-3 px-2 px-md-4">Join As Volunteer</a>
                  </p>
                </div>
                <a href="#" class="d-flex align-items-center button-link" 
                   data-toggle="modal" data-target="#videoModal" 
                   data-video="https://www.youtube.com/embed/szVNhowVfss">
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
    <div class="slider-item js-fullheight" style="background-image:url(images/2025/7.jpg);">
      <div class="overlay-1"></div><div class="overlay-2"></div><div class="overlay-3"></div><div class="overlay-4"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center">
          <div class="col-md-10 col-lg-7 ftco-animate">
            <div class="text w-100">
              <h2>Honoring Traditions, Inspiring the World</h2>
              <h1 class="mb-3">Cultural Exchange for Global Harmony</h1>
              <div class="d-flex meta">
                <div>
                  <p class="mb-0">
                    <a href="programs.php" class="btn btn-secondary py-3 px-2 px-md-4">Explore Programs</a>
                  </p>
                </div>
                <a href="#" class="d-flex align-items-center button-link" 
                   data-toggle="modal" data-target="#videoModal" 
                   data-video="https://www.youtube.com/embed/WPvoGVTwXi0">
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
    <div class="slider-item js-fullheight" style="background-image:url(images/2025/19.jpg);">
      <div class="overlay-1"></div><div class="overlay-2"></div><div class="overlay-3"></div><div class="overlay-4"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center">
          <div class="col-md-10 col-lg-7 ftco-animate">
            <div class="text w-100">
              <h2>Local Voices, Global Harmony</h2>
              <h1 class="mb-3">Growing Across Continents for a Better Tomorrow</h1>
              <div class="d-flex meta">
                <div>
                  <p class="mb-0">
                    <a href="donate.php" class="btn btn-secondary py-3 px-2 px-md-4">Support Our Cause</a>
                  </p>
                </div>
                <a href="#" class="d-flex align-items-center button-link" 
                   data-toggle="modal" data-target="#videoModal" 
                   data-video="https://www.youtube.com/embed/pp10KSmKJ2g">
                  <div class="button-video d-flex align-items-center justify-content-center">
                    <span class="fa fa-play"></span>
                  </div>
                  <span>Explore</span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
</section>

<!-- Video Modal -->
<div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content bg-dark">
      <!-- Close button -->
      <button type="button" class="close text-white ml-auto mt-2 mr-2" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
      <div class="modal-body p-0">
        <iframe id="videoFrame" width="100%" height="500"
                frameborder="0" allow="autoplay; encrypted-media"
                allowfullscreen></iframe>
      </div>
    </div>
  </div>
</div>

<!-- Scripts -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

<script>
  // Play video when modal opens
  $('#videoModal').on('shown.bs.modal', function (event) {
    var button = $(event.relatedTarget);
    var videoSrc = button.data('video');
    $('#videoFrame').attr('src', videoSrc + "?autoplay=1&mute=1&rel=0&modestbranding=1");
  });

  // Stop video when modal closes
  $('#videoModal').on('hidden.bs.modal', function () {
    $('#videoFrame').attr('src', '');
  });
</script>



<!-- Include Uicons CDN -->
<link rel="stylesheet" href="https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css">

<section class="ftco-appointment ftco-section ftco-no-pt ftco-no-pb img" style="padding-top:0; padding-bottom:0;">
  <div class="overlay"></div>
  <div class="container py-4">
    <div class="row g-4">


<div class="col-md-5 order-md-last">
  <div class="testimonial-wrap p-3 bg-light w-100">
    <!-- Fixed Header -->
    <h4 class="mb-3"><span class="fa fa-comments"></span> What People Say</h4>

    <!-- Scrollable Testimonials -->
    <div class="testimonial-container" style="height: calc(100% - 50px); overflow: hidden; position: relative;">
      <div class="testimonial-list auto-scroll">
        <!-- Testimonial Items -->
        <div class="testimonial-item d-flex mb-3">
          <img src="images/testimonial/asen.jpeg" alt="Amartya Sen" class="testimonial-img">
          <div class="testimonial-text">
            <p>Ganga Zuari Academy nurtures dialogue across cultures, embodying India’s pluralism while enriching global conversations.</p>
            <strong>- Amartya Sen (Economist, Nobel Laureate)</strong>
          </div>
        </div>

        <div class="testimonial-item d-flex mb-3">
          <img src="images/testimonial/scjamir.jpeg" alt="Senayangba Chubatoshi Jamir" class="testimonial-img">
          <div class="testimonial-text">
            <p>I am pleased to inaugurate the Ganga Zuari Academy. When rivers meet, they enrich without conflict. Here, unity in diversity is the guiding principle. With an apolitical stance and a commitment to the public, let knowledge be GZA’s boat and dialogue your destination.</p>
            <strong>- Senayangba Chubatoshi Jamir (Former Governor of Goa)</strong>
          </div>
        </div>

        <div class="testimonial-item d-flex mb-3">
          <img src="images/testimonial/psrane.jpeg" alt="Pratap Singh Rane" class="testimonial-img">
          <div class="testimonial-text">
            <p>An apolitical stage where voices mingle, GZA transforms cultural confluences into meaningful, democratic imagination.</p>
            <strong>- Pratap Singh Rane (Former Chief Minister, Goa)</strong>
          </div>
        </div>

        <div class="testimonial-item d-flex mb-3">
          <img src="images/testimonial/memenezes.jpeg" alt="Maria Emelia Menezes" class="testimonial-img">
          <div class="testimonial-text">
            <p>By connecting traditions and ideas, GZA builds bridges essential for inclusive growth and social harmony.</p>
            <strong>- Maria Emelia Menezes (Industrialist, Philanthropist)</strong>
          </div>
        </div>

        <div class="testimonial-item d-flex mb-3">
          <img src="images/testimonial/aghosh.jpeg" alt="Amitav Ghosh" class="testimonial-img">
          <div class="testimonial-text">
            <p>GZA recalls India’s timeless civilizational dialogues, turning heritage into living thought and artistic engagement.</p>
            <strong>- Amitav Ghosh (Novelist, Historian of Culture)</strong>
          </div>
        </div>

        <div class="testimonial-item d-flex mb-3">
          <img src="images/testimonial/mparrikar.jpeg" alt="Manohar Parrikar" class="testimonial-img">
          <div class="testimonial-text">
            <p>Few platforms embody India’s cultural continuum like GZA—fostering unity while celebrating diversity.</p>
            <strong>- Manohar Parrikar (Former Chief Minister- Goa, and Union Minister)</strong>
          </div>
        </div>

        <div class="testimonial-item d-flex mb-3">
          <img src="images/testimonial/hshukla.jpeg" alt="Haimanti Shukla" class="testimonial-img">
          <div class="testimonial-text">
            <p>GZA creates resonant spaces where music, memory, and meaning inspire deeper human connection.</p>
            <strong>- Haimanti Shukla (Musician, Global Artist)</strong>
          </div>
        </div>

        <div class="testimonial-item d-flex mb-3">
          <img src="images/testimonial/nkunkolienkar.jpeg" alt="Nitin Kunkolienkar" class="testimonial-img">
          <div class="testimonial-text">
            <p>Supporting GZA strengthens not just culture, but innovation, leadership, and inclusive social responsibility.</p>
            <strong>- Nitin Kunkolienkar (Industrialist)</strong>
          </div>
        </div>

        <div class="testimonial-item d-flex mb-3">
          <img src="images/testimonial/achaudhuri.jpeg" alt="Arijit Chaudhuri" class="testimonial-img">
          <div class="testimonial-text">
            <p>Academy’s initiatives decentralise knowledge, ensuring marginal voices shape national and global conversations.</p>
            <strong>- Arijit Chaudhuri (Literary Theorist, Scholar)</strong>
          </div>
        </div>

        <div class="testimonial-item d-flex mb-3">
          <img src="images/testimonial/mpraikar.jpeg" alt="Manguirish Pai Raiker" class="testimonial-img">
          <div class="testimonial-text">
            <p>By linking heritage and sustainability, GZA inspires ecological consciousness within India’s future generations.</p>
            <strong>- Manguirish Pai Raiker (President- GCCI, Chair- India-MSME)</strong>
          </div>
        </div>

        <div class="testimonial-item d-flex mb-3">
          <img src="images/testimonial/swanaqvi.jpeg" alt="Syed Wajih Ahmad Naqvi" class="testimonial-img">
          <div class="testimonial-text">
            <p>In promoting intellectual and cultural plurality, GZA safeguards democracy’s most precious lifeblood—dialogue.</p>
            <strong>- Syed Wajih Ahmad Naqvi (Scientist and Academician)</strong>
          </div>
        </div>

        <div class="testimonial-item d-flex mb-3">
          <img src="images/testimonial/msinha.jpeg" alt="Mridula Sinha" class="testimonial-img">
          <div class="testimonial-text">
            <p>GZA reflects humanity’s universal search: connecting diverse voices, weaving stories into shared meaning.</p>
            <strong>- Mridula Sinha (Former Governor- Goa, Author)</strong>
          </div>
        </div>

        <div class="testimonial-item d-flex mb-3">
          <img src="images/testimonial/ssingh.jpeg" alt="Sunil Singh" class="testimonial-img">
          <div class="testimonial-text">
            <p>GZA embodies people-centred knowledge, fostering dialogue where economics, culture, and society converge productively.</p>
            <strong>- Sunil Singh (Director, Scientist, Academician)</strong>
          </div>
        </div>

        <div class="testimonial-item d-flex mb-3">
          <img src="images/testimonial/sprabhu.jpeg" alt="Suresh Prabhu" class="testimonial-img">
          <div class="testimonial-text">
            <p>GZA reclaims dialogue as India’s civilizational strength, where past and present converse fruitfully.</p>
            <strong>- Suresh Prabhu (Former Union Minister, Vice-Chancellor)</strong>
          </div>
        </div>

        <div class="testimonial-item d-flex mb-3">
          <img src="images/team/f8.jpg" alt="Alka Deo Marulkar" class="testimonial-img">
          <div class="testimonial-text">
            <p>Through melody, we weave cultures. Ganga and Zuari flow together in song, reminding us that music unites hearts beyond boundaries.</p>
            <strong>- Alka Deo Marulkar (Versatile vocalist, purist and experimentalist)</strong>
          </div>
        </div>

        <div class="testimonial-item d-flex mb-3">
          <img src="images/testimonial/rppai.jpeg" alt="Rajendra Prasad Pal" class="testimonial-img">
          <div class="testimonial-text">
            <p>Through GZA, young minds discover that creativity, compassion, and culture can transform communities.</p>
            <strong>- Rajendra Prasad Pal (IAS, Former Secretary, Poet)</strong>
          </div>
        </div>

        <div class="testimonial-item d-flex mb-3">
          <img src="images/testimonial/rnigam.jpeg" alt="Rajiv Nigam" class="testimonial-img">
          <div class="testimonial-text">
            <p>GZA’s inspiring vision weaves art, environment, and heritage together like a vibrant tapestry, creating a collective journey toward a brighter future.</p>
            <strong>- Rajiv Nigam (Philosopher, Geoarchaeologist)</strong>
          </div>
        </div>

      </div>
    </div>
  </div>
</div>

<style>
.testimonial-wrap {
  height: 600px; /* fixed height */
  display: flex;
  flex-direction: column;
  position: relative;
}

/* Smooth auto-scroll for testimonial items */
.testimonial-list.auto-scroll {
  display: flex;
  flex-direction: column;
  animation: scrollTestimonials 40s linear infinite;
}

.testimonial-wrap:hover .testimonial-list.auto-scroll {
  animation-play-state: paused;
}

@keyframes scrollTestimonials {
  0% { transform: translateY(0); }
  100% { transform: translateY(-50%); } /* adjust if more items */
}

.testimonial-item {
  display: flex;
  align-items: flex-start;
  padding: 12px;
  background: #fff;
  border-left: 4px solid #6c63ff;
  border-radius: 6px;
  box-shadow: 0 2px 4px rgba(0,0,0,0.06);
  margin-bottom: 10px;
}

.testimonial-img {
  width: 50px;
  height: 50px;
  border-radius: 50%;
  object-fit: cover;
  margin-right: 12px;
  border: 2px solid #6c63ff;
}

.testimonial-text p {
  margin: 0 0 5px;
  font-style: italic;
  font-size: 14px;
}

.testimonial-text strong {
  font-size: 13px;
  color: #555;
}

@media (max-width: 768px) {
  .testimonial-wrap { height: 400px; }
}
</style>





      <!-- About Section -->
<div class="col-md-7 wrap-about pt-0">
  <div class="heading-section pe-md-3">
    <span class="subheading">Welcome to The Ganga Zuari Academy</span>
    <h2 class="mb-3">A Global Cultural Think Tank</h2>
    <p>
      The <strong>Ganga Zuari Academy (GZA)</strong> is a cultural platform that unites traditions, ideas, and communities. 
      Rooted in India’s heritage and open to the world, GZA serves as a hub for dialogue, creativity, and collaboration across borders.
    </p>
    <p>
      Guided by dedicated Presidium leaders and event verticals like <em>Chhandovani</em> (music), <em>Unmesh</em> (literature), and <em>Utsav</em> (festivals), 
      the Academy curates programs that blend classical wisdom with contemporary expression. From performances and literary forums to culinary showcases and youth engagement, 
      every initiative fosters cultural understanding and human values.
    </p>

   <p><strong>We at GZA</strong> are committed to creating meaningful global impact through our initiatives:</p>
<ul class="list-unstyled ms-3"> 
  <li>🌍 <strong>Connect cultures globally</strong> through programs in music, literature, festivals, and art.</li>
  <li>🤝 <strong>Facilitate cross-border dialogues</strong> to advance peace, inclusivity, and mutual respect.</li>
  <li>📚 <strong>Serve as a knowledge hub</strong> by driving research, workshops, and international cultural exchange.</li>
  <li>💡 <strong>Ignite creativity</strong> by merging traditional wisdom with contemporary innovation.</li>
  <li>🎯 <strong>Empower youth</strong> to become cultural ambassadors and global changemakers.</li>
  <li>🌱 <strong>Promote sustainable cultural development</strong> aligned with international goals and values.</li>
</ul>


    
  </div>
</div>


	  

    </div>
  </div>
</section>



<section class="ftco-section ftco-no-pt ftco-no-pb">
  <div class="container">
    <div class="row no-gutters">
      
      <!-- Connecting Cultures -->
      <div class="col-md-4 d-flex align-items-stretch">
        <div class="services">
          <div class="text text-center bg-primary">
            <h3>Connecting <br>Cultures</h3>
            <p>We celebrate cultural diversity by creating opportunities for people from 
               different backgrounds to come together, learn from one another, and 
               build mutual respect. </p>
            <p>Our initiatives foster inclusivity and strengthen the bonds of a 
               shared global community.</p>
          </div>
          <div class="img border-1" style="background-image: url(images/connect.jpg);">
            <div class="icon d-flex align-items-center justify-content-center">
              <span class="flaticon-ecological"></span>
            </div>
          </div>
        </div>
      </div>

<!-- Igniting Ideas -->
      <div class="col-md-4 d-flex align-items-stretch">
        <div class="services">
          <div class="text text-center bg-tertiary">
            <h3>Igniting <br>Ideas</h3>
            <p>We empower individuals and communities to turn creativity into action. 
               By supporting innovation and cultural entrepreneurship, we transform 
               ideas into solutions that make a global impact. </p>
            <p>Our work inspires new ways of thinking to address challenges in 
               sustainability, inclusion, and human development.</p>
          </div>
          <div class="img border-3" style="background-image: url(images/ideas.jpg);">
            <div class="icon d-flex align-items-center justify-content-center">
              <span class="flaticon-donation"></span>
            </div>
          </div>
        </div>
      </div>
	  
      <!-- Fostering Dialogues -->
      <div class="col-md-4 d-flex align-items-stretch">
        <div class="services">
          <div class="text text-center bg-secondary">
            <h3>Fostering <br>Dialogues</h3>
            <p>Through international exchanges, forums, and collaborations, we create 
               platforms for dialogue that address pressing global challenges. </p>
            <p>By encouraging conversations across cultures and disciplines, we build 
               understanding and inspire collective action for a better future.</p>
          </div>
          <div class="img border-2" style="background-image: url(images/dialogue.jpg);">
            <div class="icon d-flex align-items-center justify-content-center">
              <span class="flaticon-volunteer"></span>
            </div>
          </div>
        </div>
      </div>

      

    </div>
  </div>
</section>

<section class="ftco-section ftco-no-pt ftco-no-pb">
  <div class="container">
    <div class="row no-gutters">
      
      <!-- Connecting Cultures -->
      <div class="col-md-4 d-flex align-items-stretch">
        <div class="services">
          <div class="text text-center bg-primary">
            <h3>Connecting <br>Cultures</h3>
            <ul class="list-unstyled">
              <li>🌍 Celebrate global diversity</li>
              <li>🤝 Build mutual respect & trust</li>
              <li>🌐 Promote cultural exchange programs</li>
              <li>🎭 Share art, music & traditions worldwide</li>
              <li>📚 Encourage intercultural learning</li>
              <li>🕊️ Strengthen unity through shared values</li>
            </ul>
          </div>
          <div class="img border-1" style="background-image: url(images/connect.jpg);">
            <div class="icon d-flex align-items-center justify-content-center">
              <span class="flaticon-ecological"></span>
            </div>
          </div>
        </div>
      </div>

      <!-- Fostering Dialogues -->
      <div class="col-md-4 d-flex align-items-stretch">
        <div class="services">
          <div class="text text-center bg-secondary">
            <h3>Fostering <br>Dialogues</h3>
            <ul class="list-unstyled">
              <li>💬 Create global platforms for exchange</li>
              <li>🌎 Address shared challenges collectively</li>
              <li>🔗 Encourage cross-cultural collaboration</li>
              <li>📢 Amplify voices of youth & communities</li>
              <li>🤔 Promote critical thinking & empathy</li>
              <li>📝 Document and share global learnings</li>
            </ul>
          </div>
          <div class="img border-2" style="background-image: url(images/dialogue.jpg);">
            <div class="icon d-flex align-items-center justify-content-center">
              <span class="flaticon-volunteer"></span>
            </div>
          </div>
        </div>
      </div>

      <!-- Igniting Ideas -->
      <div class="col-md-4 d-flex align-items-stretch">
        <div class="services">
          <div class="text text-center bg-tertiary">
            <h3>Igniting <br>Ideas</h3>
            <ul class="list-unstyled">
              <li>💡 Inspire creativity & innovation</li>
              <li>🚀 Transform ideas to solutions</li>
              <li>🌱 Promote sustainability & green practices</li>
              <li>📊 Cultural entrepreneurship</li>
              <li>🎯 Empower communities with knowledge</li>
              <li>🌐 Share scalable models for social impact</li>
            </ul>
          </div>
          <div class="img border-3" style="background-image: url(images/ideas.jpg);">
            <div class="icon d-flex align-items-center justify-content-center">
              <span class="flaticon-donation"></span>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>




<!-- Programs Section -->
<section class="ftco-section ftco-no-pb" style="padding-top:2rem; padding-bottom:2rem;">
  <div class="container">
    <div class="row justify-content-center pb-3 mb-2">
      <div class="col-md-7 heading-section text-center">
        <span class="subheading">Activities</span>
        <h2>Programs & Initiatives</h2>
      </div>
    </div>
    <div class="row g-3">

      <!-- Program Card -->
      <div class="col-md-6 col-lg-3">
        <div class="causes causes-2 text-center">
          <a href="#" class="img w-100" style="background-image: url(images/unmesh.jpg);"></a>
          <div class="text p-3">
            <h2><a href="#">UNMESH</a></h2>
            <p>Exploring literature, language and philosophy through talks, seminars, and creative exchanges that foster critical thoughts.</p>
            <p><a href="#" class="btn btn-light w-100">Explore</a></p>
          </div>
        </div>
      </div>

      <div class="col-md-6 col-lg-3">
        <div class="causes causes-2 text-center">
          <a href="#" class="img w-100" style="background-image: url(images/chann.jpg);"></a>
          <div class="text p-3">
            <h2><a href="#">CHHANDOVANI</a></h2>
            <p>Promoting dance and music rooted in Indian values, with workshops and performances blending tradition and expression.</p>
            <p><a href="#" class="btn btn-light w-100">Explore</a></p>
          </div>
        </div>
      </div>

      <div class="col-md-6 col-lg-3">
        <div class="causes causes-2 text-center">
          <a href="#" class="img w-100" style="background-image: url(images/utsav.jpg);"></a>
          <div class="text p-3">
            <h2><a href="#">UTSAV</a></h2>
            <p>Annual cultural festivals celebrating art, music, theatre, and traditions — strengthening bonds of community and inclusivity.</p>
            <p><a href="#" class="btn btn-light w-100">Explore</a></p>
          </div>
        </div>
      </div>

      <div class="col-md-6 col-lg-3">
        <div class="causes causes-2 text-center">
          <a href="#" class="img w-100" style="background-image: url(images/tapovan.jpg);"></a>
          <div class="text p-3">
            <h2><a href="#">KSHITIJ</a></h2>
            <p>fglkfgjfd gfdlkgjfdgjfdl ffdgj gfjdlgfdgfdgfd g </p>
            <p><a href="#" class="btn btn-light w-100">Explore</a></p>
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



<?php

//include_once('testimonials.php');
?>



<section class="ftco-section">
  <div class="container">
    <div class="row justify-content-center pb-5 mb-3">
      <div class="col-md-7 heading-section text-center ftco-animate">
        <span class="subheading">Where stories find their hues and paintings find their voices</span>
        <h2>Mélange</h2>
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
	
	
   <div class="row text-center">

  <!-- Person 1 -->
  <div class="col-md-6 col-lg">
    <div class="volunteer flip-card">
      <div class="flip-card-inner">
        <div class="flip-card-front">
          <div class="img" style="background-image: url(images/team/m1.jpg);"></div>
          <div class="text">
            <h3>Manguirish Pai Raikar</h3>
            <span>President</span>
          </div>
        </div>
        <div class="flip-card-back">
          <h4>Manguirish Pai Raikar</h4>
          <p>Cultural historian and community leader, driving initiatives to preserve artistic heritage while fostering global collaboration.</p>
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
  <div class="col-md-6 col-lg">
    <div class="volunteer flip-card">
      <div class="flip-card-inner">
        <div class="flip-card-front">
          <div class="img" style="background-image: url(images/team/m1.jpg);"></div>
          <div class="text">
            <h3>Rajesh Tarkar</h3>
            <span>Vice President</span>
          </div>
        </div>
        <div class="flip-card-back">
          <h4>Rajesh Tarkar</h4>
          <p>Social activist and educationist, committed to strengthening cultural ties through arts and festivals.</p>
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
  <div class="col-md-6 col-lg">
    <div class="volunteer flip-card">
      <div class="flip-card-inner">
        <div class="flip-card-front">
          <div class="img" style="background-image: url(images/team/m1.jpg);"></div>
          <div class="text">
            <h3>DV</h3>
            <span>Joint Secretary</span>
          </div>
        </div>
        <div class="flip-card-back">
          <h4>DV</h4>
          <p>Dedicated to fostering cultural diversity and mentoring initiatives that inspire future leaders in the arts.</p>
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
  <div class="col-md-6 col-lg">
    <div class="volunteer flip-card">
      <div class="flip-card-inner">
        <div class="flip-card-front">
          <div class="img" style="background-image: url(images/team/m1.jpg);"></div>
          <div class="text">
            <h3>Ranadhir Mukhopadhyay</h3>
            <span>General Secretary</span>
          </div>
        </div>
        <div class="flip-card-back">
          <h4>Ranadhir Mukhopadhyay</h4>
          <p>Passionate advocate for performing arts, curating youth-led programs to encourage emerging artists.</p>
          <div class="social-icons d-flex justify-content-center">
            <a href="#"><span class="fa fa-linkedin"></span></a>
            <a href="#"><span class="fa fa-facebook"></span></a>
            <a href="#"><span class="fa fa-instagram"></span></a>
          </div>
        </div>
      </div>
    </div>
  </div>


  <!-- Person 5 -->
  <div class="col-md-6 col-lg">
    <div class="volunteer flip-card">
      <div class="flip-card-inner">
        <div class="flip-card-front">
          <div class="img" style="background-image: url(images/team/m1.jpg);"></div>
          <div class="text">
            <h3>Hari Krishna Kaul</h3>
            <span>Treasurer</span>
          </div>
        </div>
        <div class="flip-card-back">
          <h4>Hari Krishna Kaul</h4>
          <p>Finance professional ensuring transparency and sustainability in projects, while supporting grassroots initiatives.</p>
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

<div class="row text-center mt-4">

  <!-- Person 6 -->
  <div class="col-md-6 col-lg-3">
    <div class="volunteer flip-card">
      <div class="flip-card-inner">
        <div class="flip-card-front">
          <div class="img" style="background-image: url(images/team/m1.jpg);"></div>
          <div class="text">
            <h3>Ashwin Mehta</h3>
            <span>Program Director</span>
          </div>
        </div>
        <div class="flip-card-back">
          <h4>Ashwin Mehta</h4>
          <p>Oversees cultural programs with a focus on global outreach, ensuring diversity and inclusivity in all initiatives.</p>
          <div class="social-icons d-flex justify-content-center">
            <a href="#"><span class="fa fa-linkedin"></span></a>
            <a href="#"><span class="fa fa-facebook"></span></a>
            <a href="#"><span class="fa fa-instagram"></span></a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Person 7 -->
  <div class="col-md-6 col-lg-3">
    <div class="volunteer flip-card">
      <div class="flip-card-inner">
        <div class="flip-card-front">
          <div class="img" style="background-image: url(images/team/m1.jpg);"></div>
          <div class="text">
            <h3>Priya Sharma</h3>
            <span>Communications Head</span>
          </div>
        </div>
        <div class="flip-card-back">
          <h4>Priya Sharma</h4>
          <p>Leads global communications, building networks and amplifying GZA’s voice across international platforms.</p>
          <div class="social-icons d-flex justify-content-center">
            <a href="#"><span class="fa fa-linkedin"></span></a>
            <a href="#"><span class="fa fa-facebook"></span></a>
            <a href="#"><span class="fa fa-instagram"></span></a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Person 8 -->
  <div class="col-md-6 col-lg-3">
    <div class="volunteer flip-card">
      <div class="flip-card-inner">
        <div class="flip-card-front">
          <div class="img" style="background-image: url(images/team/m1.jpg);"></div>
          <div class="text">
            <h3>Michael Rodrigues</h3>
            <span>International Relations</span>
          </div>
        </div>
        <div class="flip-card-back">
          <h4>Michael Rodrigues</h4>
          <p>Specialist in building partnerships with global cultural organizations and supporting cross-border collaborations.</p>
          <div class="social-icons d-flex justify-content-center">
            <a href="#"><span class="fa fa-linkedin"></span></a>
            <a href="#"><span class="fa fa-facebook"></span></a>
            <a href="#"><span class="fa fa-instagram"></span></a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Person 9 -->
  <div class="col-md-6 col-lg-3">
    <div class="volunteer flip-card">
      <div class="flip-card-inner">
        <div class="flip-card-front">
          <div class="img" style="background-image: url(images/team/m1.jpg);"></div>
          <div class="text">
            <h3>Sofia Khan</h3>
            <span>Outreach Coordinator</span>
          </div>
        </div>
        <div class="flip-card-back">
          <h4>Sofia Khan</h4>
          <p>Coordinates outreach initiatives, engaging communities worldwide and ensuring meaningful participation in projects.</p>
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


<section class="ftco-counter" id="section-partners" style="background-color:#111;">
 <div class="container">
  <div class="row">
  
   <!-- Intro Text -->
   <div class="col-md-3 mb-5 mb-md-0 text-center text-md-left">
    <h2 class="font-weight-bold" style="color: #fff; font-size: 22px;">
      Our Partners & Supporters
     </div>
  
   <!-- Logos Carousel -->
   <div class="col-md-9">
     <div class="partner-logos">
       <div class="logos-track">
        
         <img src="images/logos/goa.jpeg" alt="Directorate of Art & Culture Goa">
         <img src="images/logos/goat.jpeg" alt="Goa Tourism Development Corporation">
         <img src="images/logos/kala-academy.png" alt="Kala Academy Goa">
         <img src="images/logos/wallace.png" alt="Wallace Pharmaceuticals Goa">
         <img src="images/logos/bluecross.png" alt="BlueCross Pharmaceuticals Goa">
         <img src="images/logos/rajdeep.png" alt="Rajdeep Builders Goa">
         <img src="images/logos/drag.png" alt="DRAG Clothing Goa">
         <img src="images/logos/pnb.png" alt="Punjab National Bank Goa">
         <img src="images/logos/acgl.png" alt="Automobile Corporation of Goa">
         <img src="images/logos/bandhan.png" alt="Bandhan Bank Goa">
         
         <!-- duplicate logos for seamless loop -->
         <img src="images/logos/goa.jpeg" alt="">
         <img src="images/logos/goat.jpeg" alt="">
         <img src="images/logos/kala-academy.png" alt="">
         <img src="images/logos/wallace.png" alt="">
         <img src="images/logos/bluecross.png" alt="">
         <img src="images/logos/rajdeep.png" alt="">
         <img src="images/logos/drag.png" alt="">
         <img src="images/logos/pnb.png" alt="">
         <img src="images/logos/acgl.png" alt="">
         <img src="images/logos/bandhan.png" alt="">
         
       </div>
     </div>
   </div>
   
  </div>
 </div>
</section>

<!-- CSS -->
<style>
.partner-logos {
  overflow: hidden;
  position: relative;
}

.logos-track {
  display: flex;
  width: max-content;
  animation: scroll 30s linear infinite;
}

.logos-track img {
  height: 60px;
  margin: 0 40px;
  flex-shrink: 0;
  /* removed filter so logos stay in original color */
}

@keyframes scroll {
  0% { transform: translateX(0); }
  100% { transform: translateX(-50%); }
}
</style>



<?php 
include_once('footer.php');
?>
