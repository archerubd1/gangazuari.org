<?php
$page="resources";
include_once('head_nav.php');
?>

<section class="hero-wrap hero-wrap-2" style="background-image: url('images/points_to_ponder.jpg');" data-stellar-background-ratio="0.5">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text align-items-end">
      <div class="col-md-9 ftco-animate pb-5">
        <p class="breadcrumbs mb-2">
          <span class="mr-2"><a href="index.php">Mélange <i class="ion-ios-arrow-forward"></i></a></span> 
          <span>Article <i class="ion-ios-arrow-forward"></i></span>
        </p>
        <h1 class="mb-0 bread">What Schools Did Not Teach Us | P V Sathe</h1>
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
        <p><img src="images/points_to_ponder.jpg" alt="What Schools Did Not Teach Us" class="img-fluid mb-4"></p>

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
<p><strong>Life Lessons Often Missed in Schools:</strong></p>

<ol class="list-group list-group-numbered mb-4">
  <li class="list-group-item"><i class="fa fa-exclamation-circle mr-2 text-primary"></i>70% of WhatsApp forwards are fake</li>
  <li class="list-group-item"><i class="fa fa-tv mr-2 text-success"></i>Do not believe whatever they show in TV ads</li>
  <li class="list-group-item"><i class="fa fa-door-closed mr-2 text-warning"></i>When you ring a doorbell, stand away from the door</li>
  <li class="list-group-item"><i class="fa fa-volume-mute mr-2 text-info"></i>Do not talk loudly in public places</li>
  <li class="list-group-item"><i class="fa fa-user-secret mr-2 text-danger"></i>If you have enemies? Good. It means you stood up for something in life</li>
  <li class="list-group-item"><i class="fa fa-lightbulb mr-2 text-primary"></i>Understanding is always only one-sided</li>
  <li class="list-group-item"><i class="fa fa-hourglass-half mr-2 text-success"></i>Every relationship has an expiry date (un/fortunately)</li>
  <li class="list-group-item"><i class="fa fa-balance-scale mr-2 text-warning"></i>Truth does not always win</li>
  <li class="list-group-item"><i class="fa fa-globe mr-2 text-info"></i>Universe is under no obligation to make sense to you</li>
  <li class="list-group-item"><i class="fa fa-peace mr-2 text-danger"></i>Be selective in your battles. Sometimes peace is better than being right</li>
  <li class="list-group-item"><i class="fa fa-users mr-2 text-primary"></i>The boy has his own story. The girl is telling another one. The family makes a new story. The society has already made one</li>
  <li class="list-group-item"><i class="fa fa-flag-checkered mr-2 text-success"></i>We need to lose some battles before we can win them</li>
  <li class="list-group-item"><i class="fa fa-weight-hanging mr-2 text-warning"></i>It’s not the hundredth blow that broke Camel’s back. They were the first ninety-nine</li>
  <li class="list-group-item"><i class="fa fa-book mr-2 text-info"></i>History can have many versions. All of them can be true</li>
  <li class="list-group-item"><i class="fa fa-ban mr-2 text-danger"></i>No flag is large enough to hide the shame of killing innocent citizens</li>
  <li class="list-group-item"><i class="fa fa-university mr-2 text-primary"></i>People should not be afraid of their government. Government should be afraid of its people</li>
</ol>


        <!-- Author Introduction -->
        <div class="about-author d-flex p-4 bg-light mt-5">
         <!--<div class="bio mr-5">
      <img src="images/team/m1.jpg" alt="Arijit Choudhuri" class="img-fluid mb-4">
    </div>   -->
          <div class="desc">
            <h3>Padmanava Sathe</h3>
            <p>Padmanava Sathe is a retired scientist from the National Institute of Oceanography, specializing in marine Remote Sensing. He has been a visiting faculty to many colleges and universities and is a distinguished educator with multi-faceted knowledge and an immense logical mind.</p>
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
    ["melange_4.php","[Title for Melange 4] | [Author]","images/science_1.jpg","August 14, 2025"],
    ["melange_5.php","তোমার আছে তো হাতখানি | Dipankar Chowdhury","images/diba.jpg","August 16, 2025"],
    ["melange_6.php","প্যাকেট | Jayanta Roy","images/story_1.jpg","August 18, 2025"],
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

      </div> <!-- .col-lg-4 -->

    </div>
	
	
	

<!-- CSS (for subtle enhancements) -->
<style>
.end-edition {
  background: linear-gradient(90deg, #6c63ff 0%, #4834d4 100%);
}
.end-edition h2 {
  font-weight: 700;
}
.end-edition img {
  max-width: 150px;
}
.end-edition p {
  color: #f0f0f0;
}
</style>


  </div>
</section>



<?php 
include_once('footer.php');
?>