
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Aurora</title>
   <style>
    html {
  scroll-behavior: smooth;
}
    @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500&family=Playfair+Display:wght@400;500&display=swap');

    html, body {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  overflow-x: hidden;
 
}

    
    .header-row .nav-left,
    .header-row .nav-right {
      flex: 1;
      display: flex;
      align-items: center;
      justify-content: center;
    }
    .header-row .nav-left {
      justify-content: flex-end;
    }
    .header-row .nav-right {
      justify-content: flex-start;
    }
    .header-row ul {
      display: flex;
      gap: 24px;
      list-style: none;
      margin: 0;
      padding: 0;
      background: transparent;
      border: none;
      box-shadow: none;
    }
    .header-row ul li a {
      color: #fff;
      text-decoration: none;
      font-family: 'Montserrat', 'Playfair Display', serif;
      font-size: 12px;
      font-weight: 300;
      letter-spacing: 0.08em;
      position: relative;
      transition: all 0.3s;
      text-transform: uppercase;
      background: transparent;
      border: none;
      box-shadow: none;
    }
    .header-row ul li a:hover {
      color: #af7f10;
      text-shadow: 0 0 5px #af7f10, 0 0 10px #af7f10;
    }
    .header-row ul li a::after {
      content: "";
      position: absolute;
      width: 0%;
      height: 2px;
      background: #af7f10;
      bottom: -5px;
      left: 0;
      transition: width 0.3s;
    }
    .header-row ul li a:hover::after {
      width: 100%;
    }
    .header-row .logo-center {
      flex: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      margin: 0 40px;
      background: transparent;
      border: none;
      box-shadow: none;
    }
    .header-row .logo-center img {
      height: 80px;
      width: auto;
      display: block;
      background: transparent;
      border: none;
      box-shadow: none;
    }
    .right-corner-logo {
      position: absolute;
      right: 24px;
      top: 50%;
      transform: translateY(-50%);
      display: flex;
      align-items: center;
      background: transparent;
      border: none;
      box-shadow: none;
    }
    .right-corner-logo img {
      height: 48px;
      width: auto;
      display: block;
      background: transparent;
      border: none;
      box-shadow: none;
    }

    .header-row {
  display: flex;
  align-items: center;
  justify-content: center;
  padding: 5px 0;
  background: linear-gradient(
    to bottom,
    rgba(0,0,0,0.70) 0%,
    rgba(0,0,0,0.5) 60%,
    rgba(0,0,0,0.20) 90%,
    rgba(0,0,0,0) 100%
  );
  position: absolute;      /* Make header overlap slideshow */
  top: 0;
  left: 0;
  width: 100vw;
  z-index: 10;
  border: none;
  box-shadow: none;
  margin-bottom: 0;
}
   
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
  height: 650px; /* Increased height */
  min-height: 500px; /* Optionally increase min-height */
  display: flex;
  align-items: center;
  justify-content: center;
}
.slide img {
  width: 100vw;
  height: 650px; /* Match container height */
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

  transition: all 0.4s ease; /* Animate width and shape */
}

.dot:hover {
  background-color: #ffffff;
}

.dot.active {
  background-color: #ffffff;
  width: 50px;

}

    .header-row ul li a.active {
  color: #af7f10;
  text-shadow: 0 0 5px #af7f10, 0 0 10px #af7f10;
}
.header-row ul li a.active::after {
  width: 100%;
}
.sticky-header {
  position: fixed;
  top: 0;
  left: 0;
  width: 100vw;
  z-index: 100;
  transition: all 0.3s ease-in-out;
  display: none;
  padding: 10px 0;
}



.logo-center-slide img {
  height: 100px;
  width: auto;
  display: block;
  filter: drop-shadow(0 4px 18px rgba(0,0,0,0.4));
}
/* Central logo on slideshow */
.logo-center-slide {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  z-index: 10;
  transition: all 0.6s ease;
  opacity: 1;
  pointer-events: none; /* keep this for container */
}

/* ✅ Enable pointer events ONLY for the button inside */
.logo-center-slide .luxury-btn {
  pointer-events: auto;
}

/* Hidden state */
.logo-center-slide.hidden {
  opacity: 0;
  transform: translate(-50%, -70%) scale(0.9);
}

/* Sticky logo */
.sticky-logo {
  display: flex;
  align-items: center;
  justify-content: center;
  opacity: 0;
  transform: translateY(-20px) scale(0.9);
  transition: all 0.6s ease;
}

.sticky-header.show .sticky-logo {
  opacity: 1;
  transform: translateY(0) scale(1);
}
.sticky-header .nav-left,
.sticky-header .nav-right {
  opacity: 0;
  transition: all 0.6s ease;
  pointer-events: none;
}

/* Left goes left, right goes right */
.sticky-header .nav-left {
  transform: translateX(40px); /* Comes from center toward left */
}

.sticky-header .nav-right {
  transform: translateX(-40px); /* Comes from center toward right */
}

/* When sticky is active: navs move outward */
.sticky-header.show .nav-left {
  opacity: 1;
  transform: translateX(0); /* Arrives in left */
  pointer-events: auto;
}

.sticky-header.show .nav-right {
  opacity: 1;
  transform: translateX(0); /* Arrives in right */
  pointer-events: auto;
}
.mobile-header {
  display: none;
}

/* Mobile Styles */
@media screen and (max-width: 768px) {
  /* Hide desktop headers */
  header,
  .sticky-header {
    display: none !important;
  }

  /* Show mobile header */
  .mobile-header {
    display: flex;
    position: fixed;
    top: 0;
    left: 0;
    width: 100vw;
    height: 60px;
    background: linear-gradient(
    to bottom,
    rgba(0,0,0,0.70) 0%,
    rgba(0,0,0,0.5) 60%,
    rgba(0,0,0,0.20) 90%,
    rgba(0,0,0,0) 100%
  );
    z-index: 999;
    align-items: center;
    justify-content: center;
 
  }

.mobile-header-row {
  position: relative;
  width: 100%;
  height: 100%;
}

/* Center the logo */
.mobile-logo {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%) scale(0.92);
  opacity: 0;
  transition: all 0.4s ease;
  height: 60px;
  width: auto;margin-top: 5px;
  pointer-events: none;
}

.mobile-logo.visible {
  opacity: 1;
  transform: translate(-50%, -50%) scale(1);
  pointer-events: auto;
}

/* Burger aligned to right */
.burger {
  position: absolute;
  top: 50%;
  right: 40px;
  transform: translateY(-50%);
  font-size: 28px;
  color: #fff;
  cursor: pointer;
  padding: 4px 8px;
  transition: transform 0.3s ease;
}
  
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
.mobile-sidebar {
  position: fixed;
  top: 0;
  right: 0;
  width: 100vw;
  height: 100vh;
  background-color: rgba(20, 20, 20, 0.95);
  z-index: 1000;
  transform: translateX(100%);
  transition: transform 0.4s ease;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
}

.mobile-sidebar.show {
  transform: translateX(0);
}

.mobile-sidebar .sidebar-content {
  text-align: center;
}

.mobile-sidebar ul {
  list-style: none;
  padding: 0;
  margin: 0;
}

.mobile-sidebar ul li {
  margin: 20px 0;
}

.mobile-sidebar ul li a {
  color: #fff;
  font-size: 20px;
  font-family: 'Montserrat', sans-serif;
  text-decoration: none;
  letter-spacing: 0.1em;
  text-transform: uppercase;
  transition: all 0.3s ease;
}

.mobile-sidebar ul li a:hover {
  color: #af7f10;
}

.close-btn {
  position: absolute;
  top: 24px;
  right: 30px;
  font-size: 34px;
  color: #fff;
  cursor: pointer;
}


@keyframes fadeGlow {
  0%, 100% {
    filter: drop-shadow(0 0 0px rgba(255, 255, 255, 0.4));
  }
  50% {
    filter: drop-shadow(0 0 10px rgba(255, 255, 255, 1));
  }
}
    .sticky-logo:hover, .right-corner-logo:hover {
  animation: fadeGlow 2s ease-in-out infinite;
  cursor: pointer;
}




@keyframes fadeGlow {
  0%, 100% {
    filter: drop-shadow(0 0 0px rgba(255, 255, 255, 0.4));
  }
  50% {
    filter: drop-shadow(0 0 10px rgba(255, 255, 255, 1));
  }
}
  </style>
</head>
<body>

<div id="mobileSidebar" class="mobile-sidebar">
  <div class="sidebar-content">
    <span class="close-btn" onclick="toggleMobileNav()">&times;</span>
    <ul>
      <li><a href="{% url 'index'%}">HOME</a></li>
      <li><a href="#aboutAnchor">ABOUT</a></li>
      <li><a href="">RESERVATIONS</a></li>
      <li><a href="#favoritesAnchor">MENU</a></li>
      <li><a href="#galleryAnchor">GALLERY</a></li>
      <li><a href="#">CONTACT US</a></li>
       <a href="#" class="luxury-btn" style="z-index: 200;">Book a Table</a>
    </ul>
  </div>
</div>

  <div class="mobile-header" id="mobileHeader">
    
  <div class="mobile-header-row">
    <!-- Logo will be added dynamically -->
    <div class="burger" onclick="toggleMobileNav()">☰</div>
  </div>
</div>
  <div class="sticky-header" id="stickyHeader">
  <div class="header-row">
    <nav class="nav-left">
      <ul>
        <li><a href="{% url 'index'%}" class="active">HOME</a></li>
        <li><a href="#aboutAnchor">ABOUT</a></li>
        <li><a href="">RESERVATIONS</a></li>
      </ul>
    </nav>
     <div class="logo-center">
          <div class="sticky-logo">
      <img src="{{ asset('images/branding.png') }}" alt="Logo">
    </div>
        </div>
    <nav class="nav-right">
      <ul>
        <li><a href="#favoritesAnchor">MENU</a></li>
        <li><a href="#galleryAnchor">GALLERY</a></li>
        <li><a href="#">CONTACT US</a></li>
      </ul>
    </nav>
    <div class="right-corner-logo">
      <img src="{{ asset('images/branding1.png') }}" alt="Logo"onclick="navigateWithLoader2('{% url 'podium2' %}')">
    </div>
  </div>
</div>
 <header>
  <div class="header-row" style="margin-top: 20px; background:transparent;">
    <nav class="nav-combined">
      <ul>
        <li><a href="{% url 'index'%}" class="active">HOME</a></li>
        <li><a href="#aboutAnchor">ABOUT</a></li>
        <li><a href="">RESERVATIONS</a></li>
        <li><a href="#favoritesAnchor">MENU</a></li>
        <li><a href="#galleryAnchor">GALLERY</a></li>
        <li><a href="#">CONTACT US</a></li>
      </ul>
    </nav>
    <div class="right-corner-logo" onclick="navigateWithLoader2('{% url 'podium2' %}')">
      <img src="{{ asset('images/branding1.png') }}" alt="Logo">
    </div>
  </div>
</header>

 <div class="slideshow-container">
  <!-- Centered logo that will disappear on scroll -->
  <div class="logo-center-slide" id="slideshowLogo">
    <img id="logoslide"src="{{ asset('images/branding5.png') }}" style="width: 300px;height: auto;" alt="Logo">
    <div style="text-align: center; margin-top: 40px;">
  <a href="#" class="luxury-btn" style="z-index: 200;">Book a Table</a>
</div>
  </div>

  <div class="slide fade" style="display:block;">
    <img src="https://carrolldesign.co.uk/wp-content/uploads/2023/05/functional-restaurant-design.jpg" alt="Sample 1">
    <div class="slide-dim"></div>
  </div>
  <div class="slide fade">
    <img src="https://destinasian.com/_next/image?url=https%3A%2F%2Fstaging.destinasian.com%2Fwp-content%2Fuploads%2FCarlos-Manila-Photo-by-Scott-A-Woodward.jpeg&w=3840&q=75" alt="Sample 2">
    <div class="slide-dim"></div>
  </div>
  <div class="slide fade">
    <img src="https://images.travelandleisureasia.com/wp-content/uploads/sites/4/2025/05/02170004/aesthetic-rest-hero-1600x900.jpeg" alt="Sample 3">
    
    <div class="slide-dim"></div>
  </div>
  
    <div class="slideshow-dots">  
      <span class="dot" onclick="showSlide(0)"></span>
      <span class="dot" onclick="showSlide(1)"></span>
      <span class="dot" onclick="showSlide(2)"></span>
    </div>
</div>

    <!-- Dots -->
  
  </div>

 
</body>

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

    // Auto slideshow
    function autoSlide() {
      nextSlide();
      setTimeout(autoSlide, 4000);
    }

    // Initialize
    document.addEventListener("DOMContentLoaded", function() {
      showSlide(0);
      setTimeout(autoSlide, 4000);
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
<script>
  let mobileLogoInserted = false;

  window.addEventListener('scroll', function () {
    const sticky = document.getElementById('stickyHeader');
    const slideshowLogo = document.getElementById('slideshowLogo');
    const mainHeader = document.querySelector('header');
    const mobileHeaderRow = document.querySelector('.mobile-header-row');

    if (window.scrollY > 100) {
      sticky.classList.add('show');
      slideshowLogo?.classList.add('hidden');
      mainHeader?.classList.add('hidden');

      // Insert mobile logo if not yet added
      if (!mobileLogoInserted) {
        const logo = document.createElement('img');
        logo.src = "{{ asset('images/branding.png') }}";
        logo.alt = "Logo";
        logo.id = "mobileLogo";
        logo.className = "mobile-logo";
        mobileHeaderRow.appendChild(logo);
        setTimeout(() => logo.classList.add('visible'), 10); // trigger transition
        mobileLogoInserted = true;
      } else {
        document.getElementById('mobileLogo')?.classList.add('visible');
      }
    } else {
      sticky.classList.remove('show');
      slideshowLogo?.classList.remove('hidden');
      mainHeader?.classList.remove('hidden');

      const logo = document.getElementById('mobileLogo');
      if (logo) logo.classList.remove('visible');
    }
  });
</script>

  </html>