<?php
$page="resources";
include_once('head_nav.php');
?>

<section class="hero-wrap hero-wrap-2" style="background-image: url('images/science_1.jpg');" data-stellar-background-ratio="0.5">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text align-items-end">
      <div class="col-md-9 ftco-animate pb-5">
        <p class="breadcrumbs mb-2">
          <span class="mr-2"><a href="index.php">Mélange <i class="ion-ios-arrow-forward"></i></a></span> 
          <span>Article <i class="ion-ios-arrow-forward"></i></span>
        </p>
        <h1 class="mb-0 bread">The Mystery of the Universe | Prof. (Dr.) Shibaji Roy</h1>
      </div>
    </div>
  </div>
</section>

<section class="ftco-section ftco-degree-bg">
  <div class="container">
    <div class="row">

      <!-- Main Article -->
      <div class="col-lg-8 ftco-animate">


<!-- Translator -->
  <div id="google_translate_element" class="mb-4"></div>
        <!-- Article Image -->
        <p><img src="images/science_1.jpg" alt="Science Article" class="img-fluid mb-4"></p>

<!-- Google Translate Scripts -->
<script type="text/javascript">
  function googleTranslateElementInit() {
    new google.translate.TranslateElement(
      {pageLanguage: 'bn', includedLanguages: 'en,hi,fr,de,es', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 
      'google_translate_element'
    );
  }
</script>
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

        <!-- Article Text -->
        <p><strong>For those who love to read popular science articles:</strong></p>
        <p>(This is a translated version of the same article written and posted earlier in Bengali)</p>
        <p>~~ Sr. Professor Shibaji Roy, (Ph D), Saha Institute of Nuclear Research, Specialist in String Theory</p>
        <p><em>The mystery of the creation of the universe and some thoughts</em></p>

        <p>When we look at the night sky, we see countless planets and stars. Our galaxy (the Milky Way Galaxy) is made up of several billions of such planets and stars. Similarly, our universe contains several billions of galaxies.</p>

        <p>Around 1925/26, American astronomer Edwin Hubble observed that galaxies were moving away from each other over time. This observation contradicted the “Steady State Theory” of an eternal static universe and demonstrated that the universe is actually expanding. Einstein’s general theory of relativity provides a framework for understanding this expansion.</p>

        <p>Looking backward in time, galaxies converge, indicating that the universe expanded from a very small state. Mathematically, the universe reduces to a point at the beginning, leading to infinite density and temperature. This singularity is the origin of the “Big Bang,” a term coined by Fred Hoyle.</p>

        <p>Attempts to avoid the singularity were made by Amal Kumar Raychaudhuri using the Raychaudhuri equation. Later, Hawking and Penrose mathematically proved that the singularity at the beginning of the universe is inevitable.</p>

        <p>Observations of the Cosmic Microwave Background Radiation (CMBR) by Penzias and Wilson in 1964 confirmed the Big Bang theory and disproved the Steady State Theory. The current age of the universe is estimated at 13.8 billion years.</p>

        <p>The evolution of the universe has been largely understood through the standard cosmological model. Following the Big Bang, the universe underwent rapid inflation, cooling, and formation of fundamental particles and atoms. Over time, molecules, stars, galaxies, and eventually life emerged. Earth is 4.5 billion years old, and life originated between 3.7 and 4 billion years ago. Humans appeared approximately 1.8 million years ago and evolved through natural selection.</p>

        <p>Currently, only 5% of the universe’s total energy/matter is understood. Dark matter and dark energy make up the remaining 95%, highlighting how much is still unknown. Scientists continue to explore these mysteries.</p>

        <p>Finally, the article raises philosophical questions about the universe: Can humans ever understand all cosmic mysteries? Was there a reason for the creation of complex life like humans? Is there a Creator behind it all? These questions remain open.</p>

        <!-- About Author -->
        <div class="about-author d-flex p-4 bg-light mt-5">
        <!--<div class="bio mr-5">
      <img src="images/team/m1.jpg" alt="Arijit Choudhuri" class="img-fluid mb-4">
    </div>   -->
          <div class="desc">
            <h3>Dr. Shibaji Roy</h3>
            <p>Dr. Shibaji Roy studied at prestigious Kolkata institutions, completed his BSc in Physics from Presidency College, MSc from Calcutta University, and PhD from University of Rochester in 1991. He later joined Saha Institute of Nuclear Physics, retiring as Senior Professor. He specializes in string theory and popular science writing.</p>
          </div>
        </div>

      </div> <!-- .col-lg-8 -->

      <!-- Sidebar -->
      <div class="col-lg-4 sidebar pl-lg-5 ftco-animate">

        <!-- Search -->
        <div class="sidebar-box">
          <form action="#" class="search-form">
            <div class="form-group">
              <span class="fa fa-search"></span>
              <input type="text" class="form-control" placeholder="Type a keyword and hit enter">
            </div>
          </form>
        </div>

        <!-- Also Read This -->
<div class="sidebar-box ftco-animate">
  <h3>Also Read This</h3>

  <?php
  $articles = [
      ["melange_1.php","বহু বিদ্যা, তীক্ষ্ণ বোধ, তথাপি নির্বোধ- ১ | Arijit Chowdhury","images/article_1.jpg","August 10, 2025"],
      ["melange_2.php","ज़िन्दगी और फ़ुरसत | जयंत राय","images/poetry_1.jpg","August 12, 2025"],
      ["melange_3.php","রবিগান রহস্য -৩- আমি যখন তাঁর দুয়ারে | Somnath Sarkar","images/essay_1.jpg","August 8, 2025"],
      ["melange_5.php","তোমার আছে তো হাতখানি | Dipankar Chowdhury","images/diba.jpg","August 16, 2025"],
     ["melange_6.php","প্যাকেট | Jayanta Roy","images/story_1.jpg","August 18, 2025"],
      ["melange_7.php","What Schools Did Not Teach Us | P V Sathe","images/points_to_ponder.jpg","August 20, 2025"],
	  ["melange_10.php","Nostalgia | Khushi Chodankar","images/nos_khu.jpg","August 30, 2025"]
  ];

  foreach($articles as $art){
      echo '<div class="block-21 mb-4 d-flex">
              <a class="blog-img mr-4" style="background-image: url('.$art[2].');"></a>
              <div class="text">
                <h3 class="heading"><a href="'.$art[0].'">'.$art[1].'</a></h3>
                <div class="meta"><div><a href="#"><span class="fa fa-calendar"></span> '.$art[3].'</a></div></div>
              </div>
            </div>';
  }
  ?>
</div>


        

    </div>
  </div>
</section>

<?php
include('footer.php');
?>
