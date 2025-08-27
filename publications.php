<?php
$page="resources";
include_once('head_nav.php');
?>

<section class="hero-wrap hero-wrap-2" style="background-image: url('images/banner_all.jpg');" data-stellar-background-ratio="0.5">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text align-items-end">
      <div class="col-md-9 ftco-animate pb-5">
        <p class="breadcrumbs mb-2">
          <span class="mr-2"><a href="index.php">Home <i class="ion-ios-arrow-forward"></i></a></span> 
          <span>Resources <i class="ion-ios-arrow-forward"></i></span>
        </p>
        <h1 class="mb-0 bread">Publications – Books, Magazines & Research</h1>
      </div>
    </div>
  </div>
</section>




<section class="ftco-section">
  <div class="container">

    <!-- Publication 1 -->
    <div class="row mb-5 align-items-center">
      <!-- Text -->
      <div class="col-md-6 ftco-animate">
        <div class="p-4">
          <div class="meta mb-2">
            <div><a href="#">Ranadhir Mukhopadhyay</a></div>
            <div><a href="#">2025</a></div>
          </div>
          <h3 class="heading">Heritage is Our Soul</h3>
          <p>
            This book is a profound reflection on India’s living traditions and timeless heritage.  
            Ranadhir Mukhopadhyay traces how cultural roots have shaped not only communities,  
            but also the country’s evolving identity across centuries.
          </p>
          <p>
            The author highlights India’s intangible heritage—festivals, rituals, oral traditions,  
            and artistic expressions—that continue to connect generations. He argues that heritage  
            is not just about the past, but also a foundation for the future.
          </p>
          <p>
            Through real-life narratives and research, the book demonstrates how cultural preservation  
            can empower communities and strengthen a sense of belonging. It is both a cultural analysis  
            and a call to action for safeguarding traditions in modern times.
          </p>
          <p>
            <a href="https://www.amazon.in/Heritage-Our-Soul-Ranadhir-Mukhopadhyay/dp/9357334254" target="_blank" class="btn btn-secondary">Buy / Read</a>
            <button class="btn btn-primary" onclick="document.getElementById('audio-heritage').play()">Listen to Audio</button>
          </p>
          <audio id="audio-heritage" src="audio/heritage-soul-sample.mp3"></audio>
        </div>
      </div>
      <!-- Image -->
      <div class="col-md-6 ftco-animate text-center">
        <img src="images/heritage-soul.jpg" alt="Heritage is Our Soul" class="img-fluid shadow-lg rounded">
      </div>
    </div>

    <!-- Publication 2 -->
    <div class="row mb-5 align-items-center">
      <!-- Image -->
      <div class="col-md-6 ftco-animate text-center order-md-2">
        <img src="images/unmeshp.jpg" alt="Unmesh" class="img-fluid shadow-lg rounded">
      </div>
      <!-- Text -->
      <div class="col-md-6 ftco-animate order-md-1">
        <div class="p-4">
          <div class="meta mb-2">
            <div><a href="#">Amitabh Moitro</a></div>
            <div><a href="#">2024</a></div>
          </div>
          <h3 class="heading">Unmesh</h3>
          <p>
            <em>Unmesh</em> is a cultural magazine-style book that brings together  
            essays, poetry, and stories from diverse voices. It captures the essence  
            of India’s pluralism and celebrates the beauty of dialogue and reflection.
          </p>
          <p>
            The collection highlights themes of identity, community, and resilience,  
            weaving narratives that connect the past with the present. It includes  
            contributions from writers, poets, and thinkers across different fields.
          </p>
          <p>
            More than just a publication, <em>Unmesh</em> serves as a platform for cultural  
            conversations, inspiring readers to engage with both tradition and modernity.  
            It embodies the spirit of creativity and inclusivity that defines our times.
          </p>
          <p>
            <a href="https://www.amazon.in/Unmesh-Amitabh-Moitro/dp/9356649634" target="_blank" class="btn btn-secondary">Buy / Read</a>
            <button class="btn btn-primary" onclick="document.getElementById('audio-unmesh').play()">Listen to Audio</button>
          </p>
          <audio id="audio-unmesh" src="audio/unmesh-sample.mp3"></audio>
        </div>
      </div>
    </div>

  </div>
</section>







<?php
include_once('footer.php');
?>
