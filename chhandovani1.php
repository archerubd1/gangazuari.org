<?php 
$page='chhandovani';
include_once('head_nav.php');
include_once('config.php');

$stmt = $coni->prepare("SELECT * FROM upcoming_programs WHERE program_type = ? AND program_status = 'Published'");
$stmt->bind_param("s", $page);
$stmt->execute();
$result = $stmt->get_result();
?>


<section class="hero-wrap hero-wrap-2" style="background-image: url('images/banner_chha.jpg');" data-stellar-background-ratio="0.5">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text align-items-end">
      <div class="col-md-9 ftco-animate pb-5">
       <p class="breadcrumbs mb-2"><span class="mr-2"><a href="index.php">Home <i class="ion-ios-arrow-forward"></i></a></span> 
	   <span class="mr-2"><a href="#">Programs <i class="ion-ios-arrow-forward"></i></a></span> <span>Chhandovani <i class="ion-ios-arrow-forward"></i></span></p>
       <h1 class="mb-0 bread">Dance of Modern expressions, cultural roots, inspiring change.</h1>
     </div>
   </div>
 </div>
</section>

<!-- Section: About Chhandovani -->
<section class="ftco-section ftco-no-pt ftco-no-pb">
  <div class="container">
    <div class="row d-flex no-gutters">
    
      <!-- Image Section -->
      <div class="col-md-5 d-flex order-md-last">
        <div class="img img-video d-flex align-self-stretch align-items-center justify-content-center mb-4 mb-sm-0" style="background-image:url(images/chhandovani_intro.jpg); background-size:cover; background-position:center;">
        </div>
      </div>
      
      <!-- Text Section -->
      <div class="col-md-7 pr-md-5 py-md-5">
        <div class="heading-section pt-md-5 mb-4">
          <span class="subheading">About Chhandovani</span>
          <h2 class="mb-2">Chhandovani – Dance Rooted in Culture, Modern Expressions, Steps of Change</h2>
          
          <p><strong>Convenor:</strong> Dr Anil Chatterjee | <strong>Contact:</strong> chhandovani@gangazuari.org</p>
          
          <p>Chhandovani is a celebration of movement where rhythm meets meaning. It nurtures a dance culture rooted in Indian values (Saat-Sur) while embracing contemporary expressions. Not limited to classical forms, it creates space for new interpretations that inspire both the body and the soul.</p>
          
          <p>Through workshops, performances, and explorations, Chhandovani fosters harmony between tradition and innovation, making every step a dialogue between the past and the present. It invites youth and community members to experience dance as a way of life, not just as an art form.</p>
          
          <p><strong>Steps Towards Transformation:</strong> Chhandovani is a living movement. From contemporary dance practices to integrating Indian ethos into modern choreography, it promotes creativity that unites discipline with freedom. Each session awakens awareness of body, mind, and spirit, enabling dancers to find balance and self-expression.</p>
          
          <p><strong>Chhandovani Performances:</strong> Every performance and workshop is more than an event — it is an invitation to evolve. Chhandovani envisions dance as both a cultural expression and a transformative journey, rooted in values yet flowing with innovation and change.</p>
          
          <p><a href="#" class="btn btn-primary mt-3">Learn More About Chhandovani</a></p>
		  
        </div>
      </div>
      
    </div>
  </div>
</section>


<!-- Section: About Chhandovani Programs -->
<section class="ftco-section ftco-no-pt ftco-no-pb">
  <div class="container">
    <div class="row no-gutters">

      <!-- Who We Are / Chhandovani Intro -->
      <div class="col-md-3 d-flex align-items-stretch">
        <div class="services">
          <div class="text text-center bg-secondary">
            <h3>Who <br>We Are</h3>
            <p><strong>Chhandovani</strong> is a dance initiative of the Ganga Zuari Academy, celebrating rhythm, movement, and cultural expression.</p>
            <p>Convenor: Dr Anil Chatterjee | Contact: <a href="mailto:chhandovani@gangazuari.org">chhandovani@gangazuari.org</a></p>
            <p>Chhandovani brings together dancers, choreographers, and enthusiasts to nurture a dance culture rooted in Indian traditions while embracing contemporary innovations.</p>
          </div>
          <div class="img border-2" style="background-image: url(images/who_chhandovani.jpg);">
            <div class="icon d-flex align-items-center justify-content-center">
              <span class="flaticon-volunteer"></span>
            </div>
          </div>
        </div>
      </div>

      <!-- What We Do / Dance Programs -->
      <div class="col-md-3 d-flex align-items-stretch">
        <div class="services">
          <div class="text text-center bg-tertiary">
            <h3>What <br>We Do</h3>
            <p>Chhandovani conducts workshops, performances, and explorations in dance, aimed at:</p>
            <ul style="text-align:left; padding-left:1rem;">
              <li>Blending traditional Indian dance values (Saat-Sur) with contemporary forms</li>
              <li>Fostering creativity, discipline, and self-expression</li>
              <li>Engaging youth and communities in meaningful cultural experiences</li>
            </ul>
            <p>Through choreography, performances, and experiential workshops, Chhandovani creates dialogue between tradition and innovation, empowering dancers and audiences alike.</p>
          </div>
          <div class="img border-3" style="background-image: url(images/what_chhandovani.jpg);">
            <div class="icon d-flex align-items-center justify-content-center">
               <span class="flaticon-piggy-bank"></span>
            </div>
          </div>
        </div>
      </div>

      <!-- Mission / Chhandovani Mission -->
      <div class="col-md-3 d-flex align-items-stretch">
        <div class="services">
          <div class="text text-center bg-primary">
            <h3>Our <br>Mission</h3>
            <p>To inspire creativity, preserve cultural dance traditions, and nurture transformative learning through rhythm, movement, and expression.</p>
            <p>Chhandovani seeks to create platforms for performers to explore innovative choreography while staying connected to the richness of Indian dance heritage.</p>
          </div>
          <div class="img border-1" style="background-image: url(images/mission_chhandovani.jpg);">
            <div class="icon d-flex align-items-center justify-content-center">
              <span class="flaticon-donation"></span>
            </div>
          </div>
        </div>
      </div>

      <!-- Vision, Belief & Core Values / Chhandovani Vision -->
      <div class="col-md-3 d-flex align-items-stretch">
        <div class="services">
          <div class="text text-center bg-quarternary">
            <h3>Vision, Belief <br>& Core Values</h3>
            <p><strong>Vision:</strong> Position Chhandovani as a premier platform for dance innovation, cultural celebration, and youth engagement.</p>
            <p><strong>Belief:</strong> Dance is a living expression that unites tradition, creativity, and personal growth.</p>
            <p><strong>Core Values:</strong> Cultural Preservation, Creativity, Innovation, Discipline, Inclusivity, Community Engagement, Transformative Learning.</p>
          </div>
          <div class="img border-4" style="background-image: url(images/vision_chhandovani.jpg);">
            <div class="icon d-flex align-items-center justify-content-center">
              <span class="flaticon-ecological"></span>
            </div>
          </div>
        </div>
      </div>

    </div>
 
    
	
	<!-- Section Heading -->
<div class="row justify-content-center mb-5">
  <div class="col-md-8 heading-section text-center ftco-animate">
    <h2>Upcoming Programs of Chhandovani</h2>
    <p>Experience the vibrancy of rhythm, movement, and melody through our upcoming performances and cultural events, blending tradition with contemporary expressions.</p>
  </div>
</div>

<!-- Row 1: Events 1-2 -->
<div class="row">



<?php while ($row = $result->fetch_assoc()): ?>
    <div class="col-md-6 mb-4">
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


        </div>
      </div>
    </div>
  <?php endwhile; ?>




	
	
	
	
	<!-- Section Heading -->
<div class="row justify-content-center pb-5">
  <div class="col-md-8 heading-section text-center ftco-animate">
    <span class="subheading">Celebrating Rhythm, Movement & Expression</span>
    <h2>Impact of Chhandovani</h2>
    <p>Chhandovani nurtures creativity, bridges tradition with contemporary forms, and fosters cultural dialogue through dance, rhythm, and performance. It inspires individuals and communities to embrace movement as a way of life and transformation.</p>
  </div>
</div>

<!-- Core Impact Areas: Row 1 -->
<div class="row mt-5">

  <!-- Impact 1: Cultural Preservation -->
  <div class="col-md-3 text-center ftco-animate">
    <div class="icon mb-3">
      <i class="fas fa-drum fa-3x" style="color:#1abc9c;"></i>
    </div>
    <h4>Cultural Preservation</h4>
    <p>Safeguarding India’s diverse dance traditions while integrating them into modern contexts.</p>
  </div>

  <!-- Impact 2: Artistic Innovation -->
  <div class="col-md-3 text-center ftco-animate">
    <div class="icon mb-3">
      <i class="fas fa-paint-brush fa-3x" style="color:#3498db;"></i>
    </div>
    <h4>Artistic Innovation</h4>
    <p>Encouraging new choreographies that merge classical discipline with contemporary freedom.</p>
  </div>

  <!-- Impact 3: Youth Empowerment -->
  <div class="col-md-3 text-center ftco-animate">
    <div class="icon mb-3">
      <i class="fas fa-child fa-3x" style="color:#e67e22;"></i>
    </div>
    <h4>Youth Empowerment</h4>
    <p>Providing young dancers platforms to learn, perform, and express themselves creatively.</p>
  </div>

  <!-- Impact 4: Community Engagement -->
  <div class="col-md-3 text-center ftco-animate">
    <div class="icon mb-3">
      <i class="fas fa-users fa-3x" style="color:#f39c12;"></i>
    </div>
    <h4>Community Engagement</h4>
    <p>Bringing communities together through workshops, performances, and cultural celebrations.</p>
  </div>

</div>

<!-- Core Impact Areas: Row 2 -->
<div class="row mt-4">

  <!-- Impact 5: Body-Mind Awareness -->
  <div class="col-md-3 text-center ftco-animate">
    <div class="icon mb-3">
      <i class="fas fa-heartbeat fa-3x" style="color:#9b59b6;"></i>
    </div>
    <h4>Body-Mind Awareness</h4>
    <p>Promoting holistic well-being through movement, rhythm, and mindful practice.</p>
  </div>

  <!-- Impact 6: Creative Expression -->
  <div class="col-md-3 text-center ftco-animate">
    <div class="icon mb-3">
      <i class="fas fa-lightbulb fa-3x" style="color:#e74c3c;"></i>
    </div>
    <h4>Creative Expression</h4>
    <p>Encouraging dancers to find their unique voice through innovative styles and fusion forms.</p>
  </div>

  <!-- Impact 7: Interdisciplinary Fusion -->
  <div class="col-md-3 text-center ftco-animate">
    <div class="icon mb-3">
      <i class="fas fa-project-diagram fa-3x" style="color:#8e44ad;"></i>
    </div>
    <h4>Interdisciplinary Fusion</h4>
    <p>Blending dance with music, theatre, and visual arts to create powerful cultural experiences.</p>
  </div>

  <!-- Impact 8: Legacy & Inspiration -->
  <div class="col-md-3 text-center ftco-animate">
    <div class="icon mb-3">
      <i class="fas fa-star fa-3x" style="color:#16a085;"></i>
    </div>
    <h4>Legacy & Inspiration</h4>
    <p>Inspiring future generations by honoring traditions while embracing change and innovation.</p>
  </div>

</div>

	
	
	
	
	
	
	
	
	
	
	
	

  

  </div>
</section>

	
	
	
	
	


  </div>
  
  
  
  
  
</section>
	



	
<?php 

include_once('footer.php');
?>
