<?php
$page="resources";
include_once('head_nav.php');
?>

<section class="hero-wrap hero-wrap-2" style="background-image: url('images/nos_khu.jpg');" data-stellar-background-ratio="0.5">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text align-items-end">
      <div class="col-md-9 ftco-animate pb-5">
        <p class="breadcrumbs mb-2">
          <span class="mr-2"><a href="index.php">Mélange <i class="ion-ios-arrow-forward"></i></a></span> 
          <span>Art | Painting <i class="ion-ios-arrow-forward"></i></span>
        </p>
        <h1 class="mb-0 bread">Nostalgia - Khushi Chodankar</h1>
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
  <p><img src="images/nos_khu.jpg" alt="Nostalgia by Khushi Chodankar" class="img-fluid mb-4"></p>

  <!-- Google Translate Scripts -->
  <script type="text/javascript">
    function googleTranslateElementInit() {
      new google.translate.TranslateElement(
        {pageLanguage: 'en', includedLanguages: 'hi,fr,de,es,bn', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 
        'google_translate_element'
      );
    }
  </script>
  <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

  <!-- Article Text -->
  <h4 class="mb-4">Nostalgia</h4>
  <p><em>– Khushi Chodankar</em></p>

  <p><strong>Nostalgia</strong> is a painting that invites viewers into a world of memories—where fleeting emotions, cherished past, and subtle sentiments come alive on canvas. Through her art, Khushi Chodankar captures the delicate balance between personal memory and universal longing.</p>

  <p>The painting evokes a timeless reflection, blending <em>color, texture, and silence</em> to create an atmosphere of intimacy and depth. Each brushstroke whispers stories of the past, yet leaves space for the viewer’s imagination to wander and find their own connection.</p>

  <p>At its heart, <strong>Nostalgia</strong> is not just an artwork but a dialogue with time itself—where memory becomes art, and art becomes memory. It resonates as both personal and collective, reminding us how deeply art can echo human experience.</p>

  <!-- About Author -->
  <div class="about-author d-flex p-4 bg-light mt-5">
     <!--<div class="bio mr-5">
      <img src="images/team/m1.jpg" alt="Arijit Choudhuri" class="img-fluid mb-4">
    </div>   -->
    <div class="desc">
  <h3>Khushi Chodankar</h3>
  <p>Khushi Chodankar is an emerging artist whose works convey sensitivity, introspection, and emotional depth. Her painting <em>Nostalgia</em> transforms memory into visual poetry, preserving fleeting moments and emotions with subtle elegance.</p>
  <p>As an illustrator and muralist, Khushi is known for her playful, story-driven creations, often populated with whimsical characters and vibrant, imaginative scenes. In this work, she turns her attention to a serene Panjim street, capturing its quiet charm through her signature warmth and gentle humor.</p>
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
	["melange_7.php","What Schools Did Not Teach Us | P V Sathe","images/points_to_ponder.jpg","August 20, 2025"]
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
  </div>
</section>

<section class="ftco-hireme bg-secondary py-5 end-edition">
  <div class="container">
    <div class="row justify-content-between align-items-center">

      <!-- End of Edition Message -->
      <div class="col-md-8 col-lg-8">
        <h2 class="text-white mb-2" style="font-family: 'Great Vibes', cursive; font-size: 2.2rem;">
          ✦✧ End of Edition I✧✦
        </h2>
        <p class="text-white-50 mt-2" style="font-family: 'Dancing Script', cursive; font-size: 1.1rem;">
          Thank you for exploring this edition of Melange. We hope the stories, essays, and reflections inspired your mind and heart.
        </p>
      </div>

      <!-- Optional Flourish / Calligraphic Image -->
      <div class="col-md-4 col-lg-4 text-md-end mt-3 mt-md-0">
        <img src="images/the_end.jpg" alt="End of Edition Flourish" class="img-fluid">
      </div>

    </div>
  </div>
</section>




	<footer class="footer">
  <div class="container">
    <div class="row">
      
      <!-- About Us -->
      <div class="col-md-6 col-lg-3 mb-4 mb-md-0">
        <h2 class="footer-heading">Ganga Zuari Academy</h2>
        <p>The Ganga Zuari Academy is a non-profit cultural organization. We aim to encourage social harmony through inclusive cultural growth and exchange between Goa and Bengal.</p>
        <ul class="ftco-footer-social p-0">
          <li class="ftco-animate"><a href="#" data-toggle="tooltip" data-placement="top" title="LinkedIn"><span class="fa fa-linkedin"></span></a></li>
          <li class="ftco-animate"><a href="#" data-toggle="tooltip" data-placement="top" title="Facebook"><span class="fa fa-facebook"></span></a></li>
          <li class="ftco-animate"><a href="#" data-toggle="tooltip" data-placement="top" title="Instagram"><span class="fa fa-instagram"></span></a></li>
        </ul>
        <p><a href="#" class="btn btn-quarternary">Support Us</a></p>
      </div>

      <!-- Latest News -->
      <div class="col-md-6 col-lg-3 mb-4 mb-md-0">
        <h2 class="footer-heading">Latest Updates</h2>
        <div class="block-21 mb-4 d-flex">
          <a class="img mr-4 rounded" style="background-image: url(images/image_1.jpg);"></a>
          <div class="text">
            <h3 class="heading"><a href="#">Highlights from our recent cultural exchange festival</a></h3>
            <div class="meta">
              <div><a href="#">Aug 15, 2025</a></div>
              <div><a href="#">Team GZA</a></div>
              <div><a href="#">12</a></div>
            </div>
          </div>
        </div>
        <div class="block-21 mb-4 d-flex">
          <a class="img mr-4 rounded" style="background-image: url(images/image_2.jpg);"></a>
          <div class="text">
            <h3 class="heading"><a href="#">Workshops for youth in arts and heritage preservation</a></h3>
            <div class="meta">
              <div><a href="#">Aug 02, 2025</a></div>
              <div><a href="#">Team GZA</a></div>
              <div><a href="#">8</a></div>
            </div>
          </div>
        </div>
      </div>

      <!-- Quick Links -->
      <div class="col-md-6 col-lg-3 pl-lg-5 mb-4 mb-md-0">
        <h2 class="footer-heading">Quick Links</h2>
        <ul class="list-unstyled">
          <li><a href="#" class="py-2 d-block">Home</a></li>
          <li><a href="#" class="py-2 d-block">About Us</a></li>
          <li><a href="#" class="py-2 d-block">Programs</a></li>
          <li><a href="#" class="py-2 d-block">Events</a></li>
          <li><a href="#" class="py-2 d-block">Blog</a></li>
          <li><a href="#" class="py-2 d-block">Get Involved</a></li>
          <li><a href="#" class="py-2 d-block">Contact</a></li>
        </ul>
      </div>

      <!-- Contact Us -->
      <div class="col-md-6 col-lg-3 mb-4 mb-md-0">
        <h2 class="footer-heading">Contact Us</h2>
        <div class="block-23 mb-3">
          <ul>
            <li><span class="icon fa fa-map"></span><span class="text">Ganga Zuari Academy, Jhinuk, 6 Ravi Raj Colony, Dona Paula 403004, Goa</span></li>
            <li><a href="tel:+919422438821"><span class="icon fa fa-phone"></span><span class="text">+91 9422438821</span></a></li>
            <li><a href="mailto:info@gangazuari.org"><span class="icon fa fa-paper-plane"></span><span class="text">info@gangazuari.org</span></a></li>
          </ul>
        </div>
      </div>

    </div>
    
    <!-- Footer -->
<div class="row mt-5">
  <div class="col-md-12 text-center">
    <p class="copyright mb-2">
      &copy; <script>document.write(new Date().getFullYear());</script> Ganga Zuari Academy | All Rights Reserved | <a href="terms-of-use.php">Terms of Use</a> | 
      <a href="privacy-policy.php">Privacy Policy</a> | 
      <a href="cookies-policy.php">Cookies Policy</a> | 
      <a href="disclaimer.php">Disclaimer</a>  |  <a href="#" onclick="localStorage.removeItem('cookieConsent'); location.reload();">Cookie Settings</a>
    </p>
    
  </div>
</div>


  </div>
</footer>

<!-- Cookie Consent Banner -->
<div id="cookieConsent" class="cookie-consent">
  <div class="cookie-content">
    <p>
      We use cookies to improve your browsing experience, deliver personalized content, 
      and analyze site traffic. By clicking <strong>“Accept All”</strong>, you consent to our use of cookies. 
      To learn more, read our <a href="cookies-policy.php">Cookies Policy</a>.
    </p>
    <div class="cookie-buttons">
      <button id="acceptCookies" class="btn btn-primary btn-sm">Accept All</button>
      <button id="rejectCookies" class="btn btn-secondary btn-sm">Reject All</button>
      <button id="manageCookies" class="btn btn-link btn-sm">Manage Preferences</button>
    </div>
  </div>
</div>

<style>
.cookie-consent {
  position: fixed;
  bottom: 0;
  left: 0;
  right: 0;
  background: #222;
  color: #fff;
  padding: 15px;
  display: none;
  z-index: 9999;
  text-align: center;
}
.cookie-consent p {
  margin: 0;
  font-size: 14px;
}
.cookie-buttons {
  margin-top: 10px;
}
.cookie-buttons button {
  margin: 0 5px;
}
</style>

<!-- Cookie Consent Banner -->
<div id="cookieConsent" style="position:fixed; bottom:0; left:0; right:0; background:#222; color:#fff; padding:15px; display:none; z-index:1000;">
  <div style="max-width:900px; margin:auto; display:flex; flex-wrap:wrap; align-items:center; justify-content:space-between;">
    <p style="margin:0; flex:1;">
      We use cookies to improve your experience. You can accept all cookies, reject non-essential ones, or manage your preferences. 
      <a href="cookies-policy.php" style="color:#ffd700; text-decoration:underline;">Learn more</a>.
    </p>
    <div style="margin-top:10px;">
      <button id="acceptCookies" class="btn btn-success btn-sm">Accept All</button>
      <button id="rejectCookies" class="btn btn-danger btn-sm">Reject All</button>
      <button id="manageCookies" class="btn btn-outline-light btn-sm">Manage Preferences</button>
    </div>
  </div>
</div>

<!-- Cookie Consent Banner -->
<div id="cookieConsent" style="position:fixed; bottom:0; left:0; right:0; background:#222; color:#fff; padding:15px; display:none; z-index:10000;">
  <div style="max-width:1000px; margin:auto; display:flex; flex-wrap:wrap; align-items:center; gap:12px; justify-content:space-between;">
    <p style="margin:0; flex:1; min-width:260px;">
      We use cookies to improve your experience. You can accept all cookies, reject non-essential ones, or manage your preferences.
      <a href="cookies-policy.php" style="color:#ffd700; text-decoration:underline;">Learn more</a>.
    </p>
    <div style="display:flex; gap:8px; flex-wrap:wrap; justify-content:flex-end;">
      <button id="acceptCookies" class="btn btn-success btn-sm" type="button">Accept All</button>
      <button id="rejectCookies" class="btn btn-danger btn-sm" type="button">Reject All</button>
      <button id="manageCookies" class="btn btn-outline-light btn-sm" type="button">Manage Preferences</button>
    </div>
  </div>
</div>

<!-- Cookie Preferences Modal -->
<div class="modal fade" id="cookiePreferencesModal" tabindex="-1" role="dialog" aria-labelledby="cookiePreferencesLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content rounded shadow">
      <div class="modal-header">
        <h5 class="modal-title" id="cookiePreferencesLabel">Manage Cookie Preferences</h5>
        <!-- Close button compatible with BS4 & BS5 -->
        <button type="button" class="btn-close close" data-bs-dismiss="modal" data-dismiss="modal" aria-label="Close" id="closePreferences">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">
        <!-- Necessary -->
        <div class="form-check form-switch mb-3">
          <input class="form-check-input" type="checkbox" id="necessaryCookies" checked disabled>
          <label class="form-check-label" for="necessaryCookies">
            <strong>Necessary Cookies</strong> – Required for core site functionality (cannot be disabled).
          </label>
        </div>
        <!-- Analytics -->
        <div class="form-check form-switch mb-3">
          <input class="form-check-input" type="checkbox" id="analyticsCookies">
          <label class="form-check-label" for="analyticsCookies">
            <strong>Analytics Cookies</strong> – Help us understand usage to improve the site.
          </label>
        </div>
        <!-- Marketing -->
        <div class="form-check form-switch mb-3">
          <input class="form-check-input" type="checkbox" id="marketingCookies">
          <label class="form-check-label" for="marketingCookies">
            <strong>Marketing Cookies</strong> – Used to deliver and measure ads.
          </label>
        </div>
        <!-- Functional -->
        <div class="form-check form-switch mb-2">
          <input class="form-check-input" type="checkbox" id="functionalCookies">
          <label class="form-check-label" for="functionalCookies">
            <strong>Functional Cookies</strong> – Enable enhanced features (e.g., video, chat).
          </label>
        </div>
      </div>

      <div class="modal-footer">
        <button type="button" id="cancelPreferences" class="btn btn-secondary" data-bs-dismiss="modal" data-dismiss="modal">Cancel</button>
        <button type="button" id="savePreferences" class="btn btn-primary">Save Preferences</button>
      </div>
    </div>
  </div>
</div>

<script>
// ---------- Utilities ----------
function isBS5() {
  return !!(window.bootstrap && typeof window.bootstrap.Modal === 'function');
}
function isBS4() {
  return !!(window.jQuery && jQuery.fn && typeof jQuery.fn.modal === 'function');
}
function openModal() {
  var el = document.getElementById('cookiePreferencesModal');
  if (isBS5()) {
    window.bootstrap.Modal.getOrCreateInstance(el).show();
  } else if (isBS4()) {
    jQuery(el).modal('show');
  } else {
    // Fallback: show as plain block if no Bootstrap JS present
    el.style.display = 'block';
  }
}
function closeModal() {
  var el = document.getElementById('cookiePreferencesModal');
  if (isBS5()) {
    window.bootstrap.Modal.getOrCreateInstance(el).hide();
  } else if (isBS4()) {
    jQuery(el).modal('hide');
  } else {
    el.style.display = 'none';
  }
}
function defaultPrefs() {
  return { necessary: true, analytics: false, marketing: false, functional: false };
}
function loadPrefs() {
  try {
    var raw = localStorage.getItem('cookieConsent');
    if (!raw) return null;
    var parsed = JSON.parse(raw);
    // sanitize
    return {
      necessary: true,
      analytics: !!parsed.analytics,
      marketing: !!parsed.marketing,
      functional: !!parsed.functional
    };
  } catch(e) {
    return null;
  }
}
function savePrefs(prefs) {
  localStorage.setItem('cookieConsent', JSON.stringify(prefs));
}
function reflectPrefsInUI(prefs) {
  document.getElementById('analyticsCookies').checked  = !!prefs.analytics;
  document.getElementById('marketingCookies').checked  = !!prefs.marketing;
  document.getElementById('functionalCookies').checked = !!prefs.functional;
}
function enableAnalytics() {
  if (window.__gaEnabled) return;
  window.__gaEnabled = true;
  // Insert your GA/Tag Manager/other scripts here conditionally
  // Example placeholder:
  // var s = document.createElement('script');
  // s.async = true;
  // s.src = 'https://www.googletagmanager.com/gtag/js?id=G-XXXXXXX';
  // document.head.appendChild(s);
  // window.dataLayer = window.dataLayer || [];
  // function gtag(){dataLayer.push(arguments);}
  // gtag('js', new Date());
  // gtag('config', 'G-XXXXXXX', { anonymize_ip: true });
  console.log('Analytics enabled (insert your scripts here).');
}

// ---------- Initial load ----------
document.addEventListener('DOMContentLoaded', function() {
  var existing = loadPrefs();

  // Show banner only if no choice saved
  if (!existing) {
    document.getElementById('cookieConsent').style.display = 'block';
  } else {
    // If analytics previously consented, enable now
    if (existing.analytics) enableAnalytics();
  }

  // Manage Preferences: open modal and prefill
  document.getElementById('manageCookies').addEventListener('click', function() {
    reflectPrefsInUI(existing || defaultPrefs());
    openModal();
  });

  // Accept All
  document.getElementById('acceptCookies').addEventListener('click', function() {
    var prefs = { necessary: true, analytics: true, marketing: true, functional: true };
    savePrefs(prefs);
    document.getElementById('cookieConsent').style.display = 'none';
    enableAnalytics();
  });

  // Reject All
  document.getElementById('rejectCookies').addEventListener('click', function() {
    var prefs = { necessary: true, analytics: false, marketing: false, functional: false };
    savePrefs(prefs);
    document.getElementById('cookieConsent').style.display = 'none';
  });

  // Save Preferences
  document.getElementById('savePreferences').addEventListener('click', function() {
    var prefs = {
      necessary: true,
      analytics:  document.getElementById('analyticsCookies').checked,
      marketing:  document.getElementById('marketingCookies').checked,
      functional: document.getElementById('functionalCookies').checked
    };
    savePrefs(prefs);
    document.getElementById('cookieConsent').style.display = 'none';
    closeModal();
    if (prefs.analytics) enableAnalytics();
  });

  // Cancel buttons (works even if Bootstrap JS is missing)
  document.getElementById('cancelPreferences').addEventListener('click', function() { closeModal(); });
  document.getElementById('closePreferences').addEventListener('click', function() { closeModal(); });
});
</script>




		<!-- loader -->
		<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


		<script src="js/jquery.min.js"></script>
		<script src="js/jquery-migrate-3.0.1.min.js"></script>
		<script src="js/popper.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/jquery.easing.1.3.js"></script>
		<script src="js/jquery.waypoints.min.js"></script>
		<script src="js/jquery.stellar.min.js"></script>
		<script src="js/jquery.animateNumber.min.js"></script>
		<script src="js/bootstrap-datepicker.js"></script>
		<script src="js/jquery.timepicker.min.js"></script>
		<script src="js/owl.carousel.min.js"></script>
		<script src="js/jquery.magnific-popup.min.js"></script>
		<script src="js/scrollax.min.js"></script>
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
		<script src="js/google-map.js"></script>
		<script src="js/main.js"></script>
		
	</body>
	</html>