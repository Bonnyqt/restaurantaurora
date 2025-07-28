 <style>
      .slideshow-container {
  width: 100vw;
  max-width: 100vw;
  margin: 0;
  position: relative;
  background: #181818;
  border-radius: 0;
  box-shadow: 0 4px 24px rgba(0,0,0,0.18);
  overflow: hidden;
  left: 50%;
  right: 50%;
  transform: translateX(-50%);
  height: 750px; /* Increased height */
  min-height: 500px; /* Optionally increase min-height */
  display: flex;
  align-items: center;
  justify-content: center;
}
.slide img {
  width: 100vw;
  height: 750px; /* Match container height */
  object-fit: cover;
  display: block;
  border-radius: 0;
  animation: fadeBlurImg 1.2s;
}
 
    .slide {
    display: none;
    height: 100%;
    position: relative;
  }

  @keyframes fadeBlurImg {
    0% {
      opacity: 0.4;
      filter: blur(18px);
    }
    60% {
      filter: blur(8px);
    }
    100% {
      opacity: 1;
      filter: blur(0);
    }
  }
  .slide-dim {
  position: absolute;
  top: 0; left: 0; right: 0; bottom: 0;
  width: 100%;
  height: 100%;
  /* Black at top, transparent at bottom */
  background: linear-gradient(
    to bottom,
    rgba(0,0,0,0.80) 0%,
    rgba(0,0,0,0.6) 60%,
    rgba(0,0,0,0.30) 90%,
    rgba(0,0,0,.10) 100%
  );
  z-index: 1;
  pointer-events: none;
}
      .slide-text {
        position: absolute;
        top: 50%;
        left: 50%;
        z-index: 2;
        transform: translate(-50%, -50%);
        color: #fff;
        font-family: 'Playfair Display', serif;
        font-size: 2.2rem;
        font-weight: 500;
        text-align: center;
        text-shadow: 0 4px 24px rgba(0,0,0,0.35);
        letter-spacing: 0.04em;
        width: 90vw;
        max-width: 700px;
        padding: 0 16px;
        line-height: 1.2;
      }
    
    
 .slideshow-dots {
  text-align: center;
  padding: 12px 0 8px 0;
  background: transparent;
  position: absolute;
  width: 100vw;
  z-index: 20;
  bottom: 0;
  left: 0;
}

.dot {
  cursor: pointer;
  height: 12px;
  width: 12px;
  margin: 0 4px;
  background-color: transparent;
  display: inline-block;
  border: 2px solid #ffffff;

  transition: all 0.4s ease; 
}

.dot:hover {
  background-color: #ffffff;
}

.dot.active {
  background-color: #ffffff;
  width: 50px;

}
   .luxury-btn {
  display: inline-block;
  padding: 14px 34px;
  color: #fff;
  font-family: 'Playfair Display', serif;
  font-size: 14px;
  letter-spacing: 0.08em;
  text-transform: uppercase;
  text-decoration: none;

  border: 2px solid #af7f10; /* GOLD BORDER */
 
  background: transparent;

  transition: all 0.35s ease;
  position: relative;
  overflow: hidden;
 
  z-index: 20; 
}

.luxury-btn:hover {
  background-color: #af7f10;
  color: #fff;
  box-shadow: 0 0 16px rgba(175, 127, 16, 0.5);
}
.slideshow-arrow {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 18px;
  margin-top: -40px;
  color: #fff;
  font-weight: bold;
  font-size: 38px;
  border-radius: 0 3px 3px 0;
  user-select: none;
  z-index: 30;
  transition: background 0.3s;
  transition: all 0.4s ease; 
}
.slideshow-arrow:hover {
   color: #af7f10;
   transition: all 0.4s ease; 
}
.left-arrow {
  left: 16px;
  border-radius: 3px 0 0 3px;
}
.right-arrow {
  right: 16px;
  border-radius: 0 3px 3px 0;
}
 </style>
 
 
 <div class="slideshow-container">
  <!-- Centered logo that will disappear on scroll -->
  <div class="logo-center-slide" id="slideshowLogo">
    <img id="logoslide"src="{{ asset('images/branding5.png') }}" style="width: 300px;height: auto;" alt="Logo">
    <div style="text-align: center; margin-top: 40px;">
  <a href="#" class="luxury-btn" style="z-index: 200;">Book a Table</a>
</div>
  </div>
 <a class="slideshow-arrow left-arrow" onclick="prevSlide()">
    &#10094;
  </a>
  <!-- Right Arrow -->
  <a class="slideshow-arrow right-arrow" onclick="nextSlide()">
    &#10095;
  </a>
  <div class="slide fade" style="display:block;">
    <img src="{{ asset('images/slide1.jpg') }}" alt="Sample 1">
    <div class="slide-dim"></div>
  </div>
  <div class="slide fade">
    <img src="{{ asset('images/slide2.jpg') }}" alt="Sample 2">
    <div class="slide-dim"></div>
  </div>
  <div class="slide fade">
    <img src="{{ asset('images/slide3.jpg') }}" alt="Sample 3">
    
    <div class="slide-dim"></div>
  </div>
  <div class="slide fade" style="display:block;">
    <img src="{{ asset('images/slide1.jpg') }}" alt="Sample 1">
    <div class="slide-dim"></div>
  </div>
    <div class="slideshow-dots">  
      <span class="dot" onclick="showSlide(0)"></span>
      <span class="dot" onclick="showSlide(1)"></span>
      <span class="dot" onclick="showSlide(2)"></span>
      <span class="dot" onclick="showSlide(3)"></span>
    </div>
</div>
 
 
 <script>
    let slideIndex = 0;
    const slides = document.getElementsByClassName("slide");
    const dots = document.getElementsByClassName("dot");

    function showSlide(n) {
      for (let i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
        dots[i].classList.remove("active");
      }
      slides[n].style.display = "block";
      dots[n].classList.add("active");
      slideIndex = n;
    }

    function nextSlide() {
      slideIndex = (slideIndex + 1) % slides.length;
      showSlide(slideIndex);
    }
function prevSlide() {
  slideIndex = (slideIndex - 1 + slides.length) % slides.length;
  showSlide(slideIndex);
}
    // Auto slideshow
    function autoSlide() {
      nextSlide();
      setTimeout(autoSlide, 10000);
    }

    // Initialize
    document.addEventListener("DOMContentLoaded", function() {
      showSlide(0);
      setTimeout(autoSlide, 10000);
    });
    window.addEventListener('scroll', function () {
  const sticky = document.getElementById('stickyHeader');
  if (window.scrollY > 100) {
    sticky.style.display = 'block';
  } else {
    sticky.style.display = 'none';
  }
});

window.addEventListener('scroll', function () {
  const sticky = document.getElementById('stickyHeader');
  const slideshowLogo = document.getElementById('slideshowLogo');

  if (window.scrollY > 100) {
    sticky.classList.add('show');
    slideshowLogo.classList.add('hidden');
  } else {
    sticky.classList.remove('show');
    slideshowLogo.classList.remove('hidden');
  }
});
function toggleMobileNav() {
  const sidebar = document.getElementById('mobileSidebar');
  sidebar.classList.toggle('show');
  document.body.style.overflow = sidebar.classList.contains('show') ? 'hidden' : '';
}
  </script>