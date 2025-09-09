<?php 

$page='horizon';
include_once('head_nav.php');
include_once('config.php');


$stmt = $coni->prepare("SELECT * FROM upcoming_programs WHERE program_type = ? AND program_status = 'Published'");
$stmt->bind_param("s", $page);
$stmt->execute();
$result = $stmt->get_result();

?>


<section class="hero-wrap hero-wrap-2" style="background-image: url('images/banner_tapovan.jpg');" data-stellar-background-ratio="0.5">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text align-items-end">
      <div class="col-md-9 ftco-animate pb-5">
  <p class="breadcrumbs mb-2">
    <span class="mr-2"><a href="index.php">Home <i class="ion-ios-arrow-forward"></i></a></span> 
    <span class="mr-2"><a href="#">Programs <i class="ion-ios-arrow-forward"></i></a></span> 
    <span>Horizon <i class="ion-ios-arrow-forward"></i></span>
  </p>
  <h1 class="mb-0 bread">Horizon: Nurturing Research, Dialogue, and Sustainable Practice.</h1>
</div>

   </div>
 </div>
</section>



<section class="ftco-section ftco-no-pt ftco-no-pb">
  <div class="container">
    <div class="row d-flex no-gutters">
    
      <!-- Image Section -->
      <div class="col-md-6 d-flex order-md-last">
        <div class="img img-video d-flex align-self-stretch align-items-center justify-content-center justify-content-md-center mb-4 mb-sm-0" style="background-image:url(images/horizon-about.jpg);">
        </div>
      </div>
      
      <!-- Text Section -->
      <div class="col-md-6 pr-md-5 py-md-5">
        <div class="heading-section pt-md-5 mb-4">
          <span class="subheading">About Horizon</span>
          <h2 class="mb-2">Horizon – The International Wing of Ganga Zuari Academy</h2>
          
		   <p><strong>Convenor:</strong> Dr. Dinesh Verma | <strong>Contact:</strong> 7042809368</p>
		   
		   
          <p>Horizon is the fourth vertical of the Ganga Zuari Academy, following Chhandovani, Unmesh, and Utsav. It serves as a global platform connecting heritage, culture, and knowledge across borders, fostering dialogue, research, and sustainable practices for humanity’s shared legacy.</p>
          
          
          
          <p>Horizon’s initiatives aim to preserve India’s rooted heritage while integrating global legacies to innovate toward a sustainable and inclusive future. Through interdisciplinary research programs, we seek to connect communities, inspire new ideas, and empower future custodians of cultural and natural heritage.</p>
          
          <p>Our programs span six research areas, each driving meaningful impact with the following expected SPIN-OFFs:</p>
          
          <ul style="padding-left:1.2rem;">
            <li>Preservation and Documentation</li>
            <li>Cross-Border Knowledge Exchange</li>
            <li>Sustainability & Climate Consciousness</li>
            <li>Youth Engagement and Capacity Building</li>
            <li>Digital Innovation for Heritage</li>
            <li>Inclusive Global Narratives</li>
            <li>Interdisciplinary Knowledge Creation</li>
          </ul>
          
          <p>Horizon encourages collaborative research, cultural dialogue, and knowledge dissemination worldwide. By combining India’s traditions with global insights, it strengthens GZA’s role as a hub of heritage and humanistic learning, inspiring individuals and communities to create lasting, positive impact.</p>
          
          <p><a href="#" class="btn btn-primary mt-3">Learn More About Horizon</a></p>
		  
        </div>
      </div>
      
    </div>
  </div>
</section>



<section class="ftco-section ftco-no-pt ftco-no-pb">
  <div class="container">
    <div class="row no-gutters">

      <!-- Who We Are / Horizon Intro -->
      <div class="col-md-3 d-flex align-items-stretch">
        <div class="services">
          <div class="text text-center bg-secondary">
            <h3>Who <br>We Are</h3>
            <p><strong>Horizon</strong> is the International Wing of the Ganga Zuari Academy, 
               representing the fourth vertical after Chhandovani, Unmesh, and Utsav.</p>
            <p>Convenor: Dr. Dinesh Verma | Contact: 7042809368</p>
            <p>Horizon brings together scholars, artists, researchers, and visionaries 
               to create a global hub for heritage, culture, and knowledge that transcends borders.</p>
          </div>
          <div class="img border-2" style="background-image: url(images/who.jpg);">
            <div class="icon d-flex align-items-center justify-content-center">
              <span class="flaticon-volunteer"></span>
            </div>
          </div>
        </div>
      </div>

      <!-- What We Do / Research Programs -->
      <div class="col-md-3 d-flex align-items-stretch">
        <div class="services">
          <div class="text text-center bg-tertiary">
            <h3>What <br>We Do</h3>
            <p>Horizon nurtures six global research programs, each with multiple research projects, 
               aimed at:</p>
            <ul style="text-align:left; padding-left:1rem;">
              <li>Preserving India’s rooted heritage</li>
              <li>Connecting with global legacies</li>
              <li>Innovating toward a sustainable and inclusive future</li>
            </ul>
            <p>Through dialogue, workshops, collaborative studies, and publications, we link India’s traditions 
               with worldwide cultural and ecological narratives.</p>
          </div>
          <div class="img border-3" style="background-image: url(images/what.jpg);">
            <div class="icon d-flex align-items-center justify-content-center">
              <span class="flaticon-piggy-bank"></span>
            </div>
          </div>
        </div>
      </div>

      <!-- Mission / Horizon Mission -->
      <div class="col-md-3 d-flex align-items-stretch">
        <div class="services">
          <div class="text text-center bg-primary">
            <h3>Our <br>Mission</h3>
            <p>To nurture research, dialogue, and sustainable practices while fostering awareness of humanity’s shared legacy.</p>
            <p>Rooted in India’s traditions yet reaching globally, Horizon strives to preserve, innovate, and inspire 
               the next generation of custodians of cultural and natural heritage.</p>
          </div>
          <div class="img border-1" style="background-image: url(images/mission.jpg);">
            <div class="icon d-flex align-items-center justify-content-center">
              <span class="flaticon-donation"></span>
            </div>
          </div>
        </div>
      </div>

      <!-- Vision, Belief & Core Values / Horizon Vision -->
      <div class="col-md-3 d-flex align-items-stretch">
        <div class="services">
          <div class="text text-center bg-quarternary">
            <h3>Vision, Belief <br>& Core Values</h3>
            <p><strong>Vision:</strong> Strengthen GZA as a confluence of humanity beyond borders—a global hub 
               connecting the human tribe across generations.</p>
            <p><strong>Belief:</strong> Heritage, culture, and knowledge are shared legacies that must be preserved, 
               celebrated, and innovated responsibly for a sustainable, inclusive future.</p>
            <p><strong>Core Values:</strong> Inclusivity, Sustainability, Research Excellence, Cultural Dialogue, 
               Innovation, Global Connectivity.</p>
          </div>
          <div class="img border-4" style="background-image: url(images/vision.jpg);">
            <div class="icon d-flex align-items-center justify-content-center">
              <span class="flaticon-ecological"></span>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>


<section class="ftco-section ftco-degree-bg">
  <div class="container">
  <!-- Section Heading -->
  <div class="row justify-content-center mb-5">
    <div class="col-md-8 heading-section text-center ftco-animate">
      <h2>Upcoming Programs of Horizon</h2>
      <p>Explore our initiatives designed to preserve heritage, empower communities, and foster sustainable development worldwide.</p>
    </div>
  </div>


 <div class="row">
<?php while ($row = $result->fetch_assoc()): ?>
    <div class="col-md-6 col-lg-4  mb-4">
      <div class="program-card text-center ftco-animate shadow-sm rounded">
        
        <!-- Program Image -->
        <a href="#" 
           class="img w-100" 
           style="background-image: url('backoffice/<?php echo $row['image_path'] ?: 'default.jpg'; ?>'); 
                  height: 220px; display:block; background-size:cover; background-position:center;">
        </a>
        
        <div class="text p-3">
          <!-- Program Title -->
          <h3><?php echo htmlspecialchars($row['program_title']); ?></h3>
          
          <!-- Program Brief -->
          <p><?php echo nl2br(htmlspecialchars($row['program_brief'])); ?></p>
          
          <!-- Example Highlights (Optional if you store them as JSON / bullet points) -->
          <?php if (!empty($row['highlights'])): ?>
            <ul class="text-left small">
              <?php foreach (explode(";", $row['highlights']) as $highlight): ?>
                <li><?php echo htmlspecialchars(trim($highlight)); ?></li>
              <?php endforeach; ?>
            </ul>
          <?php endif; ?>
        <!-- Conditional Date & Venue Display -->
<?php if (strtolower($row['display_date_venue']) === 'yes'): ?>
    <p>
        <strong>Date & Venue:</strong>
        <?php echo date("d M Y", strtotime($row['program_date'])); ?>, 
        <?php echo htmlspecialchars($row['venue']); ?>
    </p>
<?php endif; ?>

<!-- Conditional Register Button Display -->
<?php if (strtolower($row['open_registrations_url']) === 'yes'): ?>
    <p>
        <form action="program_register.php" method="post">
            <input type="hidden" name="id" value="<?php echo $row['program_id']; ?>">
            <input type="hidden" name="type" value="<?php echo htmlspecialchars($row['program_type']); ?>">
            
            <?php 
                $today = date('Y-m-d');
                $programDate = $row['program_date'];
                $isActive = ($today <= $programDate);
            ?>
            
            <button type="submit"
                    class="btn btn-lg w-100 fw-bold shadow <?php echo $isActive ? 'btn-success' : 'btn-danger'; ?>" 
                    <?php echo $isActive ? '' : 'disabled'; ?>>
                <?php echo $isActive ? 'Register Now' : 'Registration Closed'; ?>
            </button>
        </form>
    </p>
<?php endif; ?>


</form>

            
          </p>
        </div>
      </div>
    </div>
  <?php endwhile; ?>
</div> 



</div>

	
	
	
<section class="ftco-section">
  <div class="container">

    <!-- Heading -->
    <div class="row justify-content-center pb-5">
      <div class="col-md-8 heading-section text-center ftco-animate">
        <span class="subheading">Welcome to Horizon Global Research Programs</span>
        <h2>Impacting Humanity & Heritage Worldwide</h2>
      </div>
    </div>

    <!-- Core Impact Areas / SPIN-OFFs: Row 1 -->
    <div class="row mt-5">

      <!-- Impact 1: Preservation & Documentation -->
      <div class="col-md-3 text-center ftco-animate">
        <div class="icon mb-3">
          <i class="fas fa-book fa-3x" style="color:#1abc9c;"></i>
        </div>
        <h4>Preservation & Documentation</h4>
        <p>Safeguarding cultural, ecological, and historical knowledge for future generations through meticulous research and archival practices.</p>
      </div>

      <!-- Impact 2: Cross-Border Knowledge Exchange -->
      <div class="col-md-3 text-center ftco-animate">
        <div class="icon mb-3">
          <i class="fas fa-globe fa-3x" style="color:#3498db;"></i>
        </div>
        <h4>Cross-Border Knowledge Exchange</h4>
        <p>Fostering global collaboration to share heritage insights, scientific research, and cultural wisdom across nations.</p>
      </div>

      <!-- Impact 3: Sustainability & Climate Consciousness -->
      <div class="col-md-3 text-center ftco-animate">
        <div class="icon mb-3">
          <i class="fas fa-leaf fa-3x" style="color:#27ae60;"></i>
        </div>
        <h4>Sustainability & Climate Consciousness</h4>
        <p>Driving environmentally responsible practices and climate-aware solutions rooted in traditional and contemporary knowledge systems.</p>
      </div>

      <!-- Impact 4: Youth Engagement & Capacity Building -->
      <div class="col-md-3 text-center ftco-animate">
        <div class="icon mb-3">
          <i class="fas fa-user-graduate fa-3x" style="color:#f39c12;"></i>
        </div>
        <h4>Youth Engagement & Capacity Building</h4>
        <p>Empowering the next generation with skills, mentorship, and leadership opportunities to advance heritage, sustainability, and innovation.</p>
      </div>

    </div>

    <!-- Core Impact Areas / SPIN-OFFs: Row 2 -->
    <div class="row mt-4">

      <!-- Impact 5: Digital Innovation for Heritage -->
      <div class="col-md-3 text-center ftco-animate">
        <div class="icon mb-3">
          <i class="fas fa-laptop-code fa-3x" style="color:#9b59b6;"></i>
        </div>
        <h4>Digital Innovation for Heritage</h4>
        <p>Leveraging technology to archive, visualize, and share cultural and ecological knowledge globally.</p>
      </div>

      <!-- Impact 6: Inclusive Global Narratives -->
      <div class="col-md-3 text-center ftco-animate">
        <div class="icon mb-3">
          <i class="fas fa-users-cog fa-3x" style="color:#e74c3c;"></i>
        </div>
        <h4>Inclusive Global Narratives</h4>
        <p>Creating shared stories that reflect diverse cultural perspectives and foster global understanding and empathy.</p>
      </div>

      <!-- Impact 7: Interdisciplinary Knowledge Creation -->
      <div class="col-md-3 text-center ftco-animate">
        <div class="icon mb-3">
          <i class="fas fa-project-diagram fa-3x" style="color:#8e44ad;"></i>
        </div>
        <h4>Interdisciplinary Knowledge Creation</h4>
        <p>Integrating arts, science, technology, and social studies to generate holistic insights addressing global challenges.</p>
      </div>

      <!-- Impact 8: Emerging Initiatives (Placeholder) -->
      <div class="col-md-3 text-center ftco-animate">
        <div class="icon mb-3">
          <i class="fas fa-star fa-3x" style="color:#16a085;"></i>
        </div>
        <h4>Emerging Initiatives</h4>
        <p>New programs and innovations designed to extend impact globally and explore cutting-edge approaches to heritage and sustainability.</p>
      </div>

    </div>






    <div class="open-book">

      <!-- Left Page: About Horizon -->
      <div class="page left-page" style="font-family: 'Georgia', serif; font-size: 0.9rem; line-height: 1.6; color: #2c2c2c;">
        <h2 style="font-family: 'Garamond', serif; font-size: 1.3rem; font-weight: bold; margin-bottom: 1rem; text-align: center;">
          About Horizon
        </h2>

        <p>Horizon is the International Wing of the Ganga Zuari Academy, serving as the fourth vertical after Chhandovani, Unmesh, and Utsav. It is a global hub for heritage, culture, and knowledge, connecting communities across generations and borders.</p>

        <p><strong>Convenor:</strong> Dr. Dinesh Verma | <strong>Contact:</strong> 7042809368</p>

        <p>Horizon nurtures research, dialogue, and sustainable practices to raise awareness of humanity’s shared legacy. Rooted in India’s traditions yet extending worldwide, it aims to preserve, innovate, and inspire future custodians of cultural and natural heritage.</p>

        <p>Its research programs are designed to:</p>
        <ul style="margin-left: 1.2rem; padding-left: 0.5rem; list-style: none;">
          <li><i class="fas fa-feather-pointed" style="color:#8B4513; margin-right:0.5rem;"></i> Preserve India’s rooted heritage</li>
          <li><i class="fas fa-feather-pointed" style="color:#8B4513; margin-right:0.5rem;"></i> Connect with global legacies</li>
          <li><i class="fas fa-feather-pointed" style="color:#8B4513; margin-right:0.5rem;"></i> Innovate toward a sustainable, inclusive future</li>
        </ul>

        <p>Through interdisciplinary collaboration, Horizon empowers youth, engages scholars, and promotes sustainable cultural and ecological practices worldwide.</p>
      </div>

      <!-- Right Page: Current Activities -->
      <div class="page right-page">
        <h2>📖 Horizon Current Activities</h2>

        <ul>
          <li><strong>Research Project #1:</strong> <em>Theory of India</em> – Essays on governance, HR, economy, social justice, and global dynamics. <br>
            <span class="author">Lead Researchers: RM, SDI, DV | Status: Completed, now in press (Walnut Publisher India/UK/USA)</span>
          </li>
          <li><strong>Research Project #2:</strong> <em>Sussegado Journey towards Holistic Sustainability</em> – Promoting sustainable tourism, wellness, and balanced lifestyles. <br>
            <span class="author">Lead Researchers: RPM, RM | Status: Ongoing</span>
          </li>
          <li><strong>Research Project #3:</strong> <em>Tangible Growth Index (TGI)</em> – A holistic development measure combining economy, ecology, and cultural vitality. <br>
            <span class="author">Lead Researchers: PM, DP, RM | Status: Ongoing</span>
          </li>
          <li><strong>Research Project #4:</strong> <em>Blue Economy Architecture for Islands</em> – Sustainable marine resource utilization for livelihood, climate resilience, and economic growth. <br>
            <span class="author">Lead Researchers: SDI, KS | Status: Ongoing</span>
          </li>
          <li><strong>Research Project #5:</strong> <em>Comparative Study of Riverine Civilisations</em> – Ganga, Nile, Yangtze, Amazon, and Zuari; culture, ecology, and spiritual significance. <br>
            <span class="author">Lead Researchers: KM, PKB, RBP, PS | Status: Ongoing</span>
          </li>
          <li><strong>Activity #6:</strong> <em>Civilisational Dialogue</em> – Annual international conference on rivers, pluralism, sustainable culture, and cross-border ties. <br>
            <span class="author">Lead Researchers: SK, SK | Status: Upcoming</span>
          </li>
          <li><strong>Activity #7:</strong> <em>ManavNama Cultural Ambassador Program</em> – Bi-annual program training 30 participants globally in ethics, empathy, mindfulness, and societal impact. <br>
            <span class="author">Lead Researchers: GG, DA, DV | Status: Upcoming</span>
          </li>
        </ul>

        <p style="margin-top: 1rem; font-size: 0.85rem;">Output (Projects 1-5): Conduct research, discuss in internal fora, prepare reports ([data+analysis] & [Policy paper/document]), and publish a book of ≥50,000 words. Convenor to finalise dates for Activities 6 and 7 and coordinate with Lead Researchers for 2-5 Activities.</p>
      </div>

    </div>
  

<style>
/* Open Book Layout */
.open-book {
  display: flex;
  justify-content: center;
  background: #fdf3d8;
  border: 2px solid #b58e58;
  border-radius: 10px;
  box-shadow: inset 0 0 60px rgba(0,0,0,0.2),
              10px 10px 25px rgba(0,0,0,0.3);
  position: relative;
  padding: 40px 20px;
  margin-bottom: 50px;
}

/* Middle crease effect */
.open-book:before {
  content: "";
  position: absolute;
  top: 0;
  bottom: 0;
  left: 50%;
  width: 2px;
  background: rgba(0,0,0,0.2);
  box-shadow: -5px 0 15px rgba(0,0,0,0.1), 
               5px 0 15px rgba(0,0,0,0.1);
}

.page {
  flex: 1;
  padding: 30px;
  font-family: "Garamond", "Times New Roman", serif;
  color: #3e2723;
  min-height: 700px;
}

.left-page {
  border-right: 1px dashed rgba(100,60,20,0.2);
}

.page h2 {
  font-family: "Cinzel Decorative", serif;
  color: #5a3c1a;
  margin-bottom: 20px;
  border-bottom: 2px solid #c49a6c;
  padding-bottom: 10px;
}

.page ul {
  list-style: none;
  padding: 0;
  margin-top: 20px;
}

.page li {
  margin-bottom: 18px;
  font-size: 0.95rem;
}

.page a {
  text-decoration: none;
  color: #4b2c20;
  font-weight: 600;
}

.author {
  display: block;
  font-size: 14px;
  font-style: italic;
  color: #3e2723;
  margin-top: 3px;
}
</style>

  </div>
  
  
  
  
  
</section>
	



	
<?php 

include_once('footer.php');
?>
