<?php 

$page='unmesh';
include_once('head_nav.php');
include_once('config.php');

$page = "unmesh"; // this comes from your earlier code
$stmt = $coni->prepare("SELECT * FROM upcoming_programs WHERE program_type = ? AND program_status = 'Published'");
$stmt->bind_param("s", $page);
$stmt->execute();
$result = $stmt->get_result();
?>


<section class="hero-wrap hero-wrap-2" style="background-image: url('images/2025/8.jpg');" data-stellar-background-ratio="0.5">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text align-items-end">
      <div class="col-md-9 ftco-animate pb-5">
       <p class="breadcrumbs mb-2"><span class="mr-2"><a href="index.php">Home <i class="ion-ios-arrow-forward"></i></a></span> <span class="mr-2"><a href="#">Programs <i class="ion-ios-arrow-forward"></i></a></span> <span>Unmesh <i class="ion-ios-arrow-forward"></i></span></p>
       <h1 class="mb-0 bread">Literature, Language And Philosophy</h1>
     </div>
   </div>
 </div>
</section>

<section class="ftco-section ftco-no-pt ftco-no-pb">
  <div class="container">
    <div class="row d-flex no-gutters">
    
      <!-- Image Section -->
      <div class="col-md-5 d-flex order-md-last">
        <div class="img img-video d-flex align-self-stretch align-items-center justify-content-center justify-content-md-center mb-4 mb-sm-0" style="background-image:url(images/vol1.jpeg);">
        </div>
      </div>
      
      <!-- Text Section -->
      <div class="col-md-7 pr-md-5 py-md-5">
        <div class="heading-section pt-md-5 mb-4">
          <span class="subheading">About Unmesh</span>
          <h2 class="mb-2">Unmesh – Celebrating Literature, Language & Philosophy</h2>
          
          <p><strong>Convenor:</strong> Somnath Sarkar | <strong>Contact:</strong> unmesh@gangazuari.org</p>
          
          <p>The Ganga Zuari Unmesh program is a confluence of minds, words, and ideas. It brings together writers, thinkers, and readers to explore the essence of literature and the philosophy that shapes human expression. Unmesh is not merely about reading — it’s about questioning, interpreting, and expanding intellectual horizons.</p>
          
          <p>Through thoughtful sessions, Unmesh celebrates the depth of language and the beauty of philosophy, creating dialogues that transcend boundaries. From classical texts to contemporary voices, the program keeps alive the spirit of inquiry and storytelling that defines our cultural heritage.</p>
          
          <p><strong>Exploring New Dimensions:</strong> Unmesh is an evolving conversation. Workshops, readings, and discussions engage participants with themes that are both timeless and urgent — identity, ethics, society, and the power of imagination. Each interaction bridges the personal and the universal.</p>
          
          <p><strong>Philosophical Dialogue:</strong> At Unmesh, every dialogue is an invitation — to reflect, to challenge, and to grow. This initiative is a living movement of ideas, flowing like the river it is named after. The Blog is the <b>living voice of Unmesh</b> — an activity curated and carefully maintained by UNMESH, serves as its curated voice, capturing insights, reflections, and ongoing conversations.</p>
          
          <p><strong>Program Highlights & Impact:</strong></p>
          <ul style="padding-left:1.2rem;">
            <li>Interactive Literary Readings & Debates</li>
            <li>Workshops on Philosophy, Language & Creative Writing</li>
            <li>Exploration of Classical & Contemporary Texts</li>
            <li>Fostering Critical Thinking & Reflection</li>
            <li>Dialogue Across Cultures & Generations</li>
            <li>Platforms for Emerging Writers & Thinkers</li>
            <li>Promotion of Intellectual Curiosity & Expression</li>
          </ul>
          
          <p>Unmesh transforms every session into an opportunity to inspire thought, foster dialogue, and cultivate a deeper appreciation for literature and philosophy. By nurturing ideas and voices, it positions Ganga Zuari Academy as a hub of intellectual engagement and cultural discourse.</p>
          
          <p><a href="gallery.php" class="btn btn-primary bg-secondary mt-3">Explore the Unmesh Experience</a></p>
		  
        </div>
      </div>
      
    </div>
  </div>
</section>


<section class="ftco-section ftco-no-pt ftco-no-pb">
  <div class="container">
    <div class="row no-gutters">

      <!-- Who We Are / Unmesh Intro -->
      <div class="col-md-3 d-flex align-items-stretch">
        <div class="services">
          <div class="text text-center bg-secondary">
            <h3>Who <br>We Are</h3>
            <p><strong>Unmesh</strong> is a literary and philosophical initiative of the Ganga Zuari Academy, exploring language, thought, and human expression.</p>
            <p>Convenor: Somnath Sarkar | Contact: <a href="mailto:unmesh@gangazuari.org">unmesh@gangazuari.org</a></p>
            <p>Unmesh brings together writers, thinkers, scholars, and readers to foster dialogue, reflection, and intellectual exploration across classical and contemporary literature and philosophy.</p>
          </div>
          <div class="img border-2" style="background-image: url(images/who_unmesh.jpg);">
            <div class="icon d-flex align-items-center justify-content-center">
              <span class="flaticon-volunteer"></span>
            </div>
          </div>
        </div>
      </div>

      <!-- What We Do / Intellectual Programs -->
      <div class="col-md-3 d-flex align-items-stretch">
        <div class="services">
          <div class="text text-center bg-tertiary">
            <h3>What <br>We Do</h3>
            <p>Unmesh curates workshops, readings, and discussions that explore literature, language, and philosophy, aimed at:</p>
            <ul style="text-align:left; padding-left:1rem;">
              <li>Encouraging critical thinking and reflection</li>
              <li>Preserving classical and contemporary literary traditions</li>
              <li>Fostering cross-cultural and interdisciplinary dialogue</li>
            </ul>
            <p>Through debates, storytelling, and philosophical discourse, Unmesh nurtures a culture of inquiry, introspection, and the creative power of words.</p>
          </div>
          <div class="img border-3" style="background-image: url(images/what_unmesh.jpg);">
            <div class="icon d-flex align-items-center justify-content-center">
               <span class="flaticon-piggy-bank"></span>
            </div>
          </div>
        </div>
      </div>

      <!-- Mission / Unmesh Mission -->
      <div class="col-md-3 d-flex align-items-stretch">
        <div class="services">
          <div class="text text-center bg-primary">
            <h3>Our <br>Mission</h3>
            <p>To inspire intellectual curiosity, preserve literary and philosophical traditions, and cultivate reflective dialogue among individuals and communities.</p>
            <p>Unmesh seeks to create spaces for writers, thinkers, and readers to engage deeply with texts, ideas, and concepts that shape human understanding and creativity.</p>
          </div>
          <div class="img border-1" style="background-image: url(images/mission_unmesh.jpg);">
            <div class="icon d-flex align-items-center justify-content-center">
              <span class="flaticon-donation"></span>
            </div>
          </div>
        </div>
      </div>

      <!-- Vision, Belief & Core Values / Unmesh Vision -->
      <div class="col-md-3 d-flex align-items-stretch">
        <div class="services">
          <div class="text text-center bg-quarternary">
            <h3>Vision, Belief <br>& Core Values</h3>
            <p><strong>Vision:</strong> Establish Unmesh as a leading platform for literary and philosophical inquiry, nurturing critical thinking and creative expression across generations.</p>
            <p><strong>Belief:</strong> Literature, language, and philosophy are essential instruments for understanding humanity and fostering reflective dialogue.</p>
            <p><strong>Core Values:</strong> Intellectual Curiosity, Literary Excellence, Philosophical Reflection, Inclusivity, Dialogue, Knowledge Preservation, Cultural Insight.</p>
          </div>
          <div class="img border-4" style="background-image: url(images/vision_unmesh.jpg);">
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
        <h2>Upcoming Programs of Unmesh</h2>
        <p>Engage with literature, language, and philosophy through dialogues, workshops, and interactive sessions designed to inspire thought and foster intellectual exploration.</p>
      </div>
    </div>

    <!-- Row 1: Programs 1-2 -->
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
	  
    </div>



    <!-- Section Heading -->
    <div class="row justify-content-center pb-5">
      <div class="col-md-8 heading-section text-center ftco-animate">
        <span class="subheading">Celebrating Literature, Language & Philosophy</span>
        <h2>Impact of Unmesh</h2>
        <p>Unmesh cultivates critical thinking, nurtures linguistic appreciation, and fosters philosophical dialogue through literature, readings, and interactive discussions that engage minds across communities.</p>
      </div>
    </div>

    <!-- Core Impact Areas: Row 1 -->
    <div class="row mt-5">

      <!-- Impact 1: Literary Preservation -->
      <div class="col-md-3 text-center ftco-animate">
        <div class="icon mb-3">
          <i class="fas fa-book fa-3x" style="color:#1abc9c;"></i>
        </div>
        <h4>Literary Preservation</h4>
        <p>Safeguarding classical and contemporary texts, regional languages, and oral storytelling traditions for future generations.</p>
      </div>

      <!-- Impact 2: Philosophical Dialogue -->
      <div class="col-md-3 text-center ftco-animate">
        <div class="icon mb-3">
          <i class="fas fa-brain fa-3x" style="color:#3498db;"></i>
        </div>
        <h4>Philosophical Dialogue</h4>
        <p>Creating spaces for reflection, debate, and interpretation of timeless ideas on ethics, society, and human values.</p>
      </div>

      <!-- Impact 3: Language Enrichment -->
      <div class="col-md-3 text-center ftco-animate">
        <div class="icon mb-3">
          <i class="fas fa-language fa-3x" style="color:#e67e22;"></i>
        </div>
        <h4>Language Enrichment</h4>
        <p>Promoting linguistic diversity and encouraging fluency, expression, and appreciation of regional and global languages.</p>
      </div>

      <!-- Impact 4: Youth Engagement -->
      <div class="col-md-3 text-center ftco-animate">
        <div class="icon mb-3">
          <i class="fas fa-user-graduate fa-3x" style="color:#f39c12;"></i>
        </div>
        <h4>Youth Engagement</h4>
        <p>Empowering young readers, writers, and thinkers through workshops, mentorship, and interactive literary-philosophical sessions.</p>
      </div>

    </div>

    <!-- Core Impact Areas: Row 2 -->
    <div class="row mt-4">

      <!-- Impact 5: Creative Interpretation -->
      <div class="col-md-3 text-center ftco-animate">
        <div class="icon mb-3">
          <i class="fas fa-lightbulb fa-3x" style="color:#9b59b6;"></i>
        </div>
        <h4>Creative Interpretation</h4>
        <p>Encouraging innovative readings, reinterpretations, and new forms of literary and philosophical expression.</p>
      </div>

      <!-- Impact 6: Community Participation -->
      <div class="col-md-3 text-center ftco-animate">
        <div class="icon mb-3">
          <i class="fas fa-users fa-3x" style="color:#e74c3c;"></i>
        </div>
        <h4>Community Participation</h4>
        <p>Engaging scholars, readers, and enthusiasts in dialogues, readings, and collaborative literary projects.</p>
      </div>

      <!-- Impact 7: Interdisciplinary Knowledge -->
      <div class="col-md-3 text-center ftco-animate">
        <div class="icon mb-3">
          <i class="fas fa-project-diagram fa-3x" style="color:#8e44ad;"></i>
        </div>
        <h4>Interdisciplinary Knowledge</h4>
        <p>Bridging literature, philosophy, and other disciplines to create holistic insights on human thought and culture.</p>
      </div>

      <!-- Impact 8: Legacy & Inspiration -->
      <div class="col-md-3 text-center ftco-animate">
        <div class="icon mb-3">
          <i class="fas fa-star fa-3x" style="color:#16a085;"></i>
        </div>
        <h4>Legacy & Inspiration</h4>
        <p>Fostering a culture of inquiry, reflection, and intellectual curiosity to inspire future generations of thinkers and storytellers.</p>
      </div>

    </div>
  

  </div>
</section>

	
	
	
	
	


  </div>
  
  
  
  
  
</section>
	



	
<?php 

include_once('footer.php');
?>
