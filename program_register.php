<?php 
$page='get';
include_once('head_nav.php');

include 'config.php'; // your DB connection

$program_id   = isset($_POST['id']) ? intval($_POST['id']) : 0;
$program_type = isset($_POST['type']) ? trim($_POST['type']) : '';
$program_title = '';

if ($program_id > 0 && !empty($program_type)) {
    $sql = "SELECT program_title 
            FROM upcoming_programs 
            WHERE program_id = ? AND program_type = ? 
            LIMIT 1";

    if ($stmt = $coni->prepare($sql)) {
        $stmt->bind_param("is", $program_id, $program_type);
        $stmt->execute();
        $stmt->bind_result($program_title);
        $stmt->fetch();
        $stmt->close();
    }
}

?>

<section class="hero-wrap hero-wrap-2" 
         style="background-image: url('images/member.jpg'); 
                height: 40vh; 
                background-size: cover; 
                background-position: center;" 
         data-stellar-background-ratio="0.5">


  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text align-items-end">
      <div class="col-md-9 ftco-animate pb-5">
       <p class="breadcrumbs mb-2"><span class="mr-2"><a href="index.php">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Get Involved <i class="ion-ios-arrow-forward"></i></span></p>
     <h1 class="mb-0 bread">Strength in Unity: Membership That Drives Change</h1>
     </div>
   </div>
 </div>
</section>

<section class="ftco-section ftco-no-pt ftco-no-pb">
  <div class="container">
  
	
		

<p><br><br></p>

<!-- Program Registration Form -->
<div class="col-md-12 order-md-last d-flex align-items-stretch">
  <div class="donation-wrap w-100">
    
    <!-- Heading -->
    <div class="total-donate d-flex align-items-center justify-content-center mb-4">
     <h2 class="mb-0 text-center">
  🌟 Register for 
  <?= ucfirst(str_replace('_',' ', $program_type)) . ' - ' . htmlspecialchars($program_title) ?>
</h2>

    </div>

    <form action="process_registration.php" method="POST" class="appointment">
  <!-- Hidden values to carry program context -->
  <input type="hidden" name="program_id" value="<?= htmlspecialchars($program_id) ?>">
  <input type="hidden" name="program_type" value="<?= htmlspecialchars($program_type) ?>">
  <input type="hidden" name="program_title" value="<?= htmlspecialchars($program_title) ?>">


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
              <input type="text" name="phone" class="form-control" placeholder="+91 98765 43210" required>
            </div>
          </div>
        </div>
        
        <!-- Participant Type -->
        <div class="col-md-12">
          <div class="form-group">
            <label for="participant_type">I am registering as</label>
            <div class="form-field">
              <div class="select-wrap">
                <div class="icon"><span class="fa fa-chevron-down"></span></div>
                <select name="participant_type" id="participant_type" class="form-control" required>
                  <option value="">Select one...</option>
                  <option value="individual">Individual Participant</option>
                  <option value="group">Group / Family</option>
                  <option value="student">Student</option>
                  <option value="professional">Professional</option>
				   <option value="corporate">Corporate</option>
                </select>
              </div>
            </div>
          </div>
        </div>

        <!-- Expectations -->
        <div class="col-md-12">
          <div class="form-group">
            <label for="expectations">What do you look forward to in this program?</label>
            <textarea name="expectations" id="expectations" class="form-control" rows="3" placeholder="Describe your expectations..." required></textarea>
          </div>
        </div>

        <!-- Contribution -->
        <div class="col-md-12">
          <div class="form-group">
            <label for="contribution">How would you like to contribute?</label>
            <textarea name="contribution" id="contribution" class="form-control" rows="3" placeholder="E.g., volunteering, knowledge-sharing, sponsorship..." required></textarea>
          </div>
        </div>
        
        <!-- Submit -->
        <div class="col-md-12">
          <div class="form-group text-center">
            <input type="submit" value="🌟 Register Now" class="btn btn-success py-3 px-5 shadow">
          </div>
        </div>
        
      </div>
    </form>
  </div>
</div>



	  
	  <p><br><br></p>
	  
<!-- Section Heading -->
<div class="row justify-content-center pb-5">
  <div class="col-md-8 heading-section text-center ftco-animate">
    <span class="subheading">Program Participation</span>
    <h2>What Participants Will Experience</h2>
    <p class="mt-3">Registering for our programs at <strong>Ganga Zuari Academy</strong> is about much more than attending an event. It’s about immersing yourself in learning, culture, and community. Here’s what you will experience:</p>
  </div>
</div>

<!-- Participant Experiences -->
<div class="row mt-4">

  <!-- Experience 1 -->
  <div class="col-md-4 ftco-animate">
    <div class="media d-block text-center">
      <i class="fas fa-lightbulb fa-3x mb-3" style="color:#2ecc71;"></i>
      <div class="media-body">
        <h5 class="mt-3">Learning & Creativity</h5>
        <p>Engage in thought-provoking workshops, interactive sessions, and cultural programs that spark creativity and expand your knowledge.</p>
      </div>
    </div>
  </div>

  <!-- Experience 2 -->
  <div class="col-md-4 ftco-animate">
    <div class="media d-block text-center">
      <i class="fas fa-users fa-3x mb-3" style="color:#3498db;"></i>
      <div class="media-body">
        <h5 class="mt-3">Connection & Community</h5>
        <p>Meet like-minded individuals, collaborate with peers, and build lasting connections with thought leaders and changemakers.</p>
      </div>
    </div>
  </div>

  <!-- Experience 3 -->
  <div class="col-md-4 ftco-animate">
    <div class="media d-block text-center">
      <i class="fas fa-globe fa-3x mb-3" style="color:#9b59b6;"></i>
      <div class="media-body">
        <h5 class="mt-3">Global & Cultural Perspective</h5>
        <p>Immerse yourself in programs that celebrate heritage while opening doors to fresh, global perspectives on culture and innovation.</p>
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
