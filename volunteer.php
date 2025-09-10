<?php 
$page='get';
include_once('head_nav.php');
?>

<section class="hero-wrap hero-wrap-2" style="background-image: url('images/volunteer.jpeg');" data-stellar-background-ratio="0.5">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text align-items-end">
      <div class="col-md-9 ftco-animate pb-5">
       <p class="breadcrumbs mb-2"><span class="mr-2"><a href="index.php">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Get Involved <i class="ion-ios-arrow-forward"></i></span></p>
     <h1 class="mb-0 bread">Empowering Change Through Volunteering</h1>
     </div>
   </div>
 </div>
</section>

<section class="ftco-section ftco-no-pt ftco-no-pb">
  <div class="container">
    <div class="row d-flex no-gutters">
    
      <!-- Image Section -->
      <div class="col-md-6 d-flex order-md-last">
        <div class="img img-video d-flex align-self-stretch align-items-center justify-content-center justify-content-md-center mb-4 mb-sm-0" style="background-image:url(images/vol1.jpeg);">
        </div>
      </div>
    <!-- Text Section -->
<div class="col-md-6 pr-md-5 py-md-5">
  <div class="heading-section pt-md-5 mb-4">
    <span class="subheading">Be the Change</span>
    <h2 class="mb-2">Volunteer with Ganga Zuari Academy</h2>
    
    <p>At <strong>Ganga Zuari Academy</strong>, we believe that true progress is driven by people who dedicate their time, energy, and passion to a larger cause. By becoming a volunteer, you are not just giving your time – you are helping us shape culture, education, and community development.</p>
    
    <p>Our volunteers play a vital role in <strong>organizing cultural events, supporting educational initiatives, conducting workshops, and driving social impact programs</strong>. Each effort, no matter how small, creates ripples of change that inspire others.</p>
    
    <p>Volunteering with us is more than service – it is <strong>a journey of learning, collaboration, and empowerment</strong>. Together, we can nurture creativity, preserve heritage, and uplift communities.</p>
    
    <p class="font-italic" style="color:#d9534f; font-weight:600;">
      ❤️ Your time and passion are the strongest gifts you can give.
    </p>
    
    <p><a href="#" class="btn btn-primary btn-lg mt-3">❤️ Join as a Volunteer</a></p>
  </div>
</div>

      
    </div>
	<p><br><br></p>
	
	 <p><br><br></p>
	  <p><br><br></p>
	
	<!-- Volunteer Registration Form -->
<div class="col-md-12 order-md-last d-flex align-items-stretch">
  <div class="donation-wrap w-100">
    
    <!-- Heading -->
    <div class="total-donate d-flex align-items-center justify-content-center mb-4">
      <h2 class="mb-0 text-center">🌟 Join Ganga Zuari Academy as a Volunteer</h2>
    </div>

  <form action="volunteer-submit.php" method="POST" class="appointment">
  <div class="row">

    <!-- Full Name -->
    <div class="col-md-12">
      <div class="form-group">
        <label for="name">Full Name</label>
        <div class="input-wrap">
          <div class="icon"><span class="fa fa-user"></span></div>
          <input type="text" name="name" class="form-control" placeholder="Enter your full name" required>
        </div>
      </div>
    </div>

    <!-- Email -->
    <div class="col-md-12">
      <div class="form-group">
        <label for="email">Email Address</label>
        <div class="input-wrap">
          <div class="icon"><span class="fa fa-paper-plane"></span></div>
          <input type="email" name="email" class="form-control" placeholder="example@email.com" required>
        </div>
      </div>
    </div>

    <!-- Phone -->
    <div class="col-md-12">
      <div class="form-group">
        <label for="phone">Phone Number</label>
        <div class="input-wrap">
          <div class="icon"><span class="fa fa-phone"></span></div>
          <input type="tel" name="phone" class="form-control" placeholder="+91 98765 43210" required>
        </div>
      </div>
    </div>

    <!-- Areas of Interest -->
    <div class="col-md-12">
      <div class="form-group">
        <label for="interest">Areas of Interest</label>
        <div class="form-field">
          <div class="select-wrap">
            <div class="icon"><span class="fa fa-chevron-down"></span></div>
            <select name="interest" id="interest" class="form-control" required>
              <option value="">Choose an area...</option>
              <option value="events">Event Management (Cultural & Social)</option>
              <option value="teaching">Teaching / Mentorship</option>
              <option value="outreach">Community Outreach</option>
              <option value="fundraising">Fundraising & Campaigns</option>
              <option value="media">Media & Communications</option>
            </select>
          </div>
        </div>
      </div>
    </div>

    <!-- Skills / Expertise (Dropdown) -->
    <div class="col-md-12">
      <div class="form-group">
        <label for="skills">Your Skills / Expertise</label>
        <div class="form-field">
          <div class="select-wrap">
            <div class="icon"><span class="fa fa-lightbulb"></span></div>
            <select name="skills" id="skills" class="form-control" required>
              <option value="">Select a skill based on area of interest.....</option>
            </select>
          </div>
        </div>
      </div>
    </div>

    <!-- Availability -->
    <div class="col-md-12">
      <div class="form-group">
        <label for="availability">Availability</label>
        <div class="d-lg-flex">
          <div class="form-radio mr-3">
            <div class="radio">
              <label>
                <input type="radio" name="availability" value="Weekdays" checked required>
                <span class="checkmark"></span>
                <span class="fill-control-description">Weekdays</span>
              </label>
            </div>
          </div>
          <div class="form-radio mr-3">
            <div class="radio">
              <label>
                <input type="radio" name="availability" value="Weekends" required>
                <span class="checkmark"></span>
                <span class="fill-control-description">Weekends</span>
              </label>
            </div>
          </div>
          <div class="form-radio">
            <div class="radio">
              <label>
                <input type="radio" name="availability" value="Flexible" required>
                <span class="checkmark"></span>
                <span class="fill-control-description">Flexible</span>
              </label>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Motivation -->
    <div class="col-md-12">
      <div class="form-group">
        <label for="motivation">Why do you want to volunteer with us?</label>
        <textarea name="motivation" id="motivation" class="form-control" rows="4" placeholder="Share your motivation here..." required></textarea>
      </div>
    </div>

    <!-- Submit -->
    <div class="col-md-12">
      <div class="form-group text-center">
        <input type="submit" value="🌍 Become a Volunteer" class="btn btn-primary py-3 px-5 shadow">
      </div>
    </div>

  </div>
</form>

<!-- JS: Populate Skills Dynamically -->
<script>
const skillOptions = {
    "events": [
        "Event Planning",
        "Stage Management",
        "Logistics Coordination",
        "Volunteer Coordination"
    ],
    "teaching": [
        "Subject Expertise",
        "Curriculum Development",
        "Tutoring",
        "Mentorship"
    ],
    "outreach": [
        "Community Engagement",
        "Survey Collection",
        "Program Planning",
        "Relationship Building"
    ],
    "fundraising": [
        "Grant Writing",
        "Campaign Planning",
        "Donor Communication",
        "Sponsorship Management"
    ],
    "media": [
        "Photography",
        "Content Writing",
        "Social Media Management",
        "Graphic Design"
    ]
};

document.getElementById('interest').addEventListener('change', function () {
    const selectedInterest = this.value;
    const skillsDropdown = document.getElementById('skills');

    // Reset previous options
    skillsDropdown.innerHTML = '<option value="">Select a skill based on area...</option>';

    if (skillOptions[selectedInterest]) {
        skillOptions[selectedInterest].forEach(skill => {
            const option = document.createElement('option');
            option.value = skill;
            option.textContent = skill;
            skillsDropdown.appendChild(option);
        });
    }
});
</script>

	
	
	
  </div>
</div>

	  
	  <p><br><br></p>
	<!-- Section Heading -->
<div class="row justify-content-center pb-5">
  <div class="col-md-8 heading-section text-center ftco-animate">
    <span class="subheading">Volunteer with Purpose</span>
    <h2>Why Join Ganga Zuari Academy as a Volunteer?</h2>
    <p class="mt-3">Volunteering at Ganga Zuari Academy is not just about giving your time – it’s about growing, learning, and creating meaningful change. Here’s what you gain when you become part of our mission:</p>
  </div>
</div>

<!-- Volunteer Benefits -->
<div class="row mt-4">

  <!-- Benefit 1 -->
  <div class="col-md-4 ftco-animate">
    <div class="media d-block text-center">
      <i class="fas fa-hands-helping fa-3x mb-3" style="color:#3498db;"></i>
      <div class="media-body">
        <h5 class="mt-3">Make a Real Impact</h5>
        <p>Your efforts directly contribute to preserving culture, empowering youth, and driving community development.</p>
      </div>
    </div>
  </div>

  <!-- Benefit 2 -->
  <div class="col-md-4 ftco-animate">
    <div class="media d-block text-center">
      <i class="fas fa-lightbulb fa-3x mb-3" style="color:#2ecc71;"></i>
      <div class="media-body">
        <h5 class="mt-3">Learn & Grow</h5>
        <p>Develop leadership, teamwork, and creative problem-solving skills through hands-on experiences.</p>
      </div>
    </div>
  </div>

  <!-- Benefit 3 -->
  <div class="col-md-4 ftco-animate">
    <div class="media d-block text-center">
      <i class="fas fa-users fa-3x mb-3" style="color:#f1c40f;"></i>
      <div class="media-body">
        <h5 class="mt-3">Be Part of a Community</h5>
        <p>Join a network of like-minded changemakers who share your passion for culture, education, and social good.</p>
      </div>
    </div>
  </div>

  <!-- Benefit 4 -->
  <div class="col-md-4 ftco-animate mt-4">
    <div class="media d-block text-center">
      <i class="fas fa-award fa-3x mb-3" style="color:#e67e22;"></i>
      <div class="media-body">
        <h5 class="mt-3">Recognition & Certification</h5>
        <p>Gain certificates, appreciation, and acknowledgment for your valuable contributions to society.</p>
      </div>
    </div>
  </div>

  <!-- Benefit 5 -->
  <div class="col-md-4 ftco-animate mt-4">
    <div class="media d-block text-center">
      <i class="fas fa-globe fa-3x mb-3" style="color:#9b59b6;"></i>
      <div class="media-body">
        <h5 class="mt-3">Broaden Your Horizons</h5>
        <p>Engage with diverse communities and projects that expand your perspective and global outlook.</p>
      </div>
    </div>
  </div>

  <!-- Benefit 6 -->
  <div class="col-md-4 ftco-animate mt-4">
    <div class="media d-block text-center">
      <i class="fas fa-heart fa-3x mb-3" style="color:#e74c3c;"></i>
      <div class="media-body">
        <h5 class="mt-3">Fulfillment & Purpose</h5>
        <p>Experience the joy of giving back and being part of a legacy that blends tradition with modernity.</p>
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
include_once('testimonials.php');
include_once('footer.php');

?>
