<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>AURORA | About</title>
</head>
   <style>
.about-container {
  background-image: url('https://media.istockphoto.com/id/2150089015/vector/light-grey-and-white-gradient-coloured-textured-effect-old-faded-blank-empty-plain.jpg?s=612x612&w=0&k=20&c=3lRofPRUMUWXZFCmzWOpxSIyM8Mn-CDU7_OeNxikTzc=');
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
  padding: 40px 20px;
}

.about-section {
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 40px;
  max-width: 1200px;
  margin: auto;
  flex-wrap: wrap;
}

.about-image {
  position: relative;
  width: 350px;
  height: 550px;
  overflow: hidden;
  flex-shrink: 0;
}
.about-img,
.about-video {
  position: absolute;
  top: 0;
  left: 0;
  width: 350px;
  height: 100%;
  object-fit: cover;
  transition: opacity 0.5s ease;
}

.about-video {
  opacity: 0;
  z-index: 2;
  pointer-events: none;
}

.about-container:hover .about-video {
  opacity: 1;
  pointer-events: auto;
}

.about-container:hover .about-img {
  opacity: 0;
}

.about-text {
  flex: 1 1 300px;
  min-width: 280px;
  padding: 20px;
  text-align: center;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
}

.about-text h3 {
  font-size: 14px;
  letter-spacing: 1px;
  color: #555;
  margin-bottom: 10px;
}

.about-text h1 {
  font-size: 60px;
  font-weight: bold;
  color: #2c1d18;
  margin-bottom: 20px;
  position: relative;
  display: inline-block;
}

.about-text h1::after {
  content: '';
  position: absolute;
  left: 0;
  bottom: -5px;
  width: 0;
  height: 2px;
  background-color: #2c1d18;
  transition: width 0.4s ease;
}

.about-text:hover h1::after {
  width: 100%;
}

.about-text p {
  font-size: 16px;
  line-height: 1.6;
  color: #333;
  margin-bottom: 30px;
}

.read-more-btn {
  padding: 10px 20px;
  font-size: 14px;
  background: transparent;
  border: 1px solid #2c1d18;
  color: #2c1d18;
  cursor: pointer;
  transition: all 0.3s ease;
  text-transform: uppercase;
}

.read-more-btn:hover {
  background: #2c1d18;
  color: white;
}

/* Responsive adjustments */
@media (max-width: 768px) {
  .about-section {
    flex-direction: column;
    text-align: center;
    gap: 0;
  }

  .about-image {
    width: 100%;
    height: auto;
    aspect-ratio: 2 / 3;
  }

  .about-img,
  .about-video {
    position: static;
    width: 100%;
    height: auto;
    object-fit: contain;
  }

  .about-text h1 {
    font-size: 28px;
  }

  .about-text p {
    font-size: 15px;
  }

  .about-image {
    margin-bottom: 20px;
  }
}
@media (hover: none) and (pointer: coarse) {
  .about-container:hover .about-video {
    opacity: 0 !important;
    pointer-events: none !important;
  }

  .about-container:hover .about-img {
    opacity: 1 !important;
  }

  .about-text:hover h1::after {
    width: 0 !important;
  }
}
</style>
<body>

@include('aurora.header')
   @include('aurora.heading')
<div class="about-container" id="aboutAnchor">
  <div class="about-section">
    <div class="about-image">
      <img src="{{ asset('images/psb.jpg') }}" alt="About Image" class="about-img" style="width: 350px;
  height: 100%;">
      <video class="about-video" muted loop preload="none" playsinline autoplay>
  <source src="{{ asset('images/vid.mp4') }}" type="video/mp4">
  Your browser does not support the video tag.
</video>
    </div>
    <div class="about-text">

      <h1>AURORA</h1>
      <p>
        At Aurora, we pay tribute to the elegance and charm of classically-rooted Asian cooking, spotlighting the 
        robust and familiar flavors you know and love. Our plates are designed to 
        be shared—a reminder that meals are more nourishing when we gather around the table. Everyone is invited.
      </p>
  
    </div>
  </div>
   <div class="about-section">
    <div class="about-text">

      <h1>CHEF MARQUEZ</h1>
      <p>
        At Aurora, we pay tribute to the elegance and charm of classically-rooted Asian cooking, spotlighting the 
        robust and familiar flavors you know and love. Our plates are designed to 
        be shared—a reminder that meals are more nourishing when we gather around the table. Everyone is invited.
      </p>
  
    </div>
    <div class="about-image">
      <img src="https://www.theosrestaurant.us/wp-content/uploads/2017/02/1.jpg" alt="About Image" class="about-img" style="width: 350px;
  height: 100%;">
      
    </div>
   
  </div>
</div>


   @include('aurora.footer')
</body>
<script>
  const container = document.querySelector('.about-container');
  const imageBox = container.querySelector('.about-image');
  const video = container.querySelector('.about-video');
  const img = container.querySelector('.about-img');

  function playVideo() {
    if (video.paused) {
      video.play().catch((e) => {
        console.warn('Autoplay prevented:', e);
      });
    }
    video.style.opacity = 1;
    video.style.pointerEvents = 'auto';
    img.style.opacity = 0;
  }

  function resetVideo() {
    video.pause();
    video.currentTime = 0;
    video.style.opacity = 0;
    video.style.pointerEvents = 'none';
    img.style.opacity = 1;
  }

  const isMobile = window.innerWidth <= 768;

  if (!isMobile) {
    // Desktop hover
    container.addEventListener('mouseenter', playVideo);
    container.addEventListener('mouseleave', resetVideo);
  } else {
    // Mobile scroll autoplay (no interaction required)
    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          playVideo();
        } else {
          resetVideo();
        }
      });
    }, {
      threshold: 0.5
    });

    observer.observe(imageBox); // Observe image container for visibility
  }
</script>

</html>