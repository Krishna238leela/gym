
<!doctype html>
<html lang="zxx">
<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="fitness, gym, workouts, personal training, group fitness, health, wellness" />
<meta name="keywords" content="fitness, gym, workouts, personal training, group fitness, health, wellness " />
<link rel="canonical" href="https://gym.com" />
<link rel="image_src" href="images/socialmedia-image.jpg" />
<meta property="og:title" content="Gym"/>
<meta property="og:type" content="article"/>
<meta property="og:url" content="https://gym.com" />
<meta property="og:image" content="images/socialmedia-image.jpg"/>
<meta property="og:site_name" content="fitness, gym, workouts, personal training, group fitness, health, wellness"/>
<meta property="og:description" content="fitness, gym, workouts, personal training, group fitness, health, wellness"/>
<meta name="twitter:card" value="summary" />
<meta name="twitter:site" value="@Gym" />
<meta property="twitter:url" content="https://gym.com" />
<meta property="twitter:title" content="Gym"/>
<meta property="twitter:description" content="fitness, gym, workouts, personal training, group fitness, health, wellness" />

</head>
<?php include("includes/links.php"); ?>
<body>
    
    
    
    
    

<!--================header start=================-->
<?php include("includes/header.php"); ?>





<section class="page-title title-bg7">
<div class="d-table">
<div class="d-table-cell">
<h2>Gallery</h2>
<ul>
<li>
<a href="index.php">Home</a>
</li>
<li>Gallery</li>
</ul>
</div>
</div>
<div class="lines">
<div class="line"></div>
<div class="line"></div>
<div class="line"></div>
</div>
</section>


  <section class="scemar">
    <body>
    <div id="image-modal" class="image-modal">
      <span class="close" id="close-modal">&times;</span>
      <div class="modal-container">
        <img class="modal-content" id="modal-image" />
      </div>
    </div>

    <div class="gallery">
      <div class="gallery-wrapper">
        <div class="tall">
          <img
            src="images/gallery-1.jpg"
          />
        </div>
        <div class="wide">
          <img
            src="images/gallery-2.jpg"
          />
        </div>
        <div>
          <img
            src="images/gallery-3.jpg"
          />
        </div>
        <div class="xl-wide">
          <img
            src="images/gallery-4.jpg"
          />
        </div>
        <div class="tall">
          <img
            src="images/gallery-5.jpg"
          />
        </div>
        <div>
          <img
            src="images/gallery-6.jpg"
          />
        </div>
        <div class="big">
          <img
            src="images/gallery-7.jpg"
          />
        </div>
        
        <div>
          <img
            src="images/gallery-8.jpg"
          />
        </div>
        
        
        
        
        
      </div>
     
    </div>
</body>

</section>








<div class="top-btn">
<i class="bx bx-chevrons-up bx-fade-up"></i>
</div>


<!-- Link of JS files -->
    <?php include("includes/footer.php"); ?>
    <?php include("includes/script.php"); ?>


</body></html>



<script>
document.addEventListener("DOMContentLoaded", function () {
    let modal = document.getElementById("image-modal");
    let modalImg = document.getElementById("modal-image");
    let closeModal = document.getElementById("close-modal");

    document.querySelectorAll(".gallery-wrapper > div > img").forEach((img) => {
      img.addEventListener("click", function () {
        modal.style.display = "block";
        modalImg.src = this.src;
      });
    });

    closeModal.addEventListener("click", function () {
      modal.style.display = "none";
    });
  });
</script>