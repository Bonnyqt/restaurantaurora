
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <link rel="icon" type="image/png" href="{{ asset('images/auroraLogo.png') }}">
  <title>AURORA</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
<link rel="stylesheet" href="{{ asset('css/pacific.css') }}">
<link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
  <style>
    /* Layout */
    .top-row {
  display: flex;
  justify-content: space-between;
  align-items: center;
  position: relative;
}


.burger {
  display: none;
  font-size: 32px;
  cursor: pointer;
  color: #ffffff;
  position: absolute;
  right: 20px;
  top: 50%;
  transform: translateY(-50%);
}
.logo {
  width: 200px;
  height: auto;
}
    .social-icons {
      display: flex;
      gap: 10px;
      align-items: center;
    }

    nav ul {
      display: flex;
      gap: 20px;
      list-style: none;
      padding: 0;
      margin: 0;
    }

    nav a {
      text-decoration: none;
      color: #333;
      transition: color 0.3s ease;
    }

    nav a:hover {
      color: #af7f10;
    }

    .switch-logo {
      display: flex;
      align-items: center;
      gap: 10px;
      margin-top: 20px;
      cursor: pointer;
    }

    .switch-logo h1 {
      font-style: italic;
      font-size: 18px;
    }

    /* Sidebar & Overlay */
   .sidebar {
  position: fixed;
  top: 0;
  right: -300px;
  text-align: center;
  width: 260px;
  height: 100%;
  background: rgba(0, 0, 0, 0.9); /* <-- Updated */
  box-shadow: -2px 0 10px rgba(0, 0, 0, 0.2);
  transition: right 0.4s ease;
  z-index: 1000;
  padding: 20px;
  color: white;
  font-family: 'MyFont2', sans-serif; /* <-- Updated */
}

    .sidebar.open {
      right: 0;
    }

    .overlay {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(0, 0, 0, 0.4);
      z-index: 999;
      display: none;
    }

    .overlay.show {
      display: block;
    }

    .sidebar ul {
      list-style: none;
      padding: 0;
      margin-top: 50px;
    }

    .sidebar ul li {
      margin-bottom: 20px;
    }

    .sidebar a {
  color: white; /* <-- Updated */
  text-decoration: none;
  font-size: 18px;
  transition: color 0.3s ease;
}

   
.sidebar a:hover {
  color: #af7f10;
}

    /* Responsive */
    @media (max-width: 768px) {
  .social-icons {
    display: none;
  }

  .burger {
    display: block;
  }

  nav {
    display: none;
  }

  .top-row {
    justify-content: center;
  }

  .logo {
    margin: 0 auto;
  }
}
.sidebar-btn {
  display: block;
  padding: 6px 15px;  
  font-size: 10px;
  color: #ffffff;
  background: transparent;
  border: 2px solid #af7f10;
  cursor: pointer;
  transition: all 0.3s ease;
  font-family: 'MyFont2', sans-serif;
  letter-spacing: 1px;
  text-transform: uppercase;
  margin: 20px auto 0;
  text-align: center;
}


.sidebar-btn:hover {
  background-color: #8c6410;
}

/* Mobile view adjustments */
@media (max-width: 768px) {
  .book-btn:not(.sidebar-btn) {
    display: none; /* hide the original book-btn on mobile */
  }

  .sidebar-btn {
    display: block; /* show the sidebar version */
  }
}

/* Sticky header styles */
.sticky-header {
  position: fixed;
  top: 0;
  left: 0;
  width: 100vw;
  background: #000000d7;
  z-index: 2000;
  box-shadow: 0 2px 12px rgba(0,0,0,0.07);
  transition: all 0.3s;
  padding: 10px 0;
  display: flex;
  justify-content: center;
  align-items: center;
  animation: fadeInSticky 0.3s;
  
}

@keyframes fadeInSticky {
  from { opacity: 0; transform: translateY(-20px);}
  to { opacity: 1; transform: translateY(0);}
}

.sticky-header .logo {
  width: 160px;
  height: auto;
  margin-left: 40px;
  margin-right: 40px;
}

.sticky-header .top-row,
.sticky-header nav,
.sticky-header .burger,
.sticky-header .social-icons,
.sticky-header .switch-logo {
  display: none !important;
}
@media (max-width: 768px) {
  #stickyHeader {
    display: none !important;
  }
}

/* ...existing code... */

/* Animated hover effect for .image-gallery images */
.image-gallery img {
  transition: 
    transform 0.4s cubic-bezier(0.4, 0.2, 0.2, 1),
    box-shadow 0.4s cubic-bezier(0.4, 0.2, 0.2, 1),
    filter 0.4s cubic-bezier(0.4, 0.2, 0.2, 1);
  will-change: transform, box-shadow, filter;
}

.image-gallery img:hover {
  transform: scale(1.07) rotate(-2deg);
  box-shadow: 0 12px 32px rgba(175, 127, 16, 0.25), 0 2px 8px rgba(0,0,0,0.15);
  filter: brightness(1.08) saturate(1.2);
  z-index: 2;
}

/* Optional: smooth stacking on hover */
.image-gallery {
  position: relative;
  z-index: 1;
}
.image-gallery img {
  position: relative;
  z-index: 1;
}
.image-gallery img:hover {
  z-index: 10;
}
.modal-content {
  background: white;
  padding: 20px;
  max-width: 600px;
  width: 100%;
  border-radius: 8px;
}
@keyframes modalFadeIn {
  from { opacity: 0; }
  to { opacity: 1; }
}
@keyframes modalContentPop {
  from { transform: scale(0.95); opacity: 0; }
  to { transform: scale(1); opacity: 1; }
}
.modal {
  /* ...existing styles... */
  animation: modalFadeIn 0.3s;
}
.modal-content, #menuModal > *:not(span) {
  animation: modalContentPop 0.3s;
}

  </style>
</head>
<body>
@include('loader')

<div id="stickyHeader" class="sticky-header" style="display:none;">
  <div style="flex:1; display:flex; justify-content:flex-end;">
    <ul style="display: flex; gap: 20px; list-style: none; margin: 0; padding: 0; align-items: center;">
      <li><a href="" class="active" style="color: white; text-decoration: none; font-family: 'MyFont2', sans-serif; font-size: 10px; font-weight: 500; padding: 0 8px;">HOME</a></li>
      <li><a href="" style="color: white; text-decoration: none; font-family: 'MyFont2', sans-serif; font-size: 10px; font-weight: 500; padding: 0 8px;">ABOUT</a></li>
      <li><a href="" style="color: white; text-decoration: none; font-family: 'MyFont2', sans-serif; font-size: 10px; font-weight: 500; padding: 0 8px;">MENU</a></li>
      <li><a href="" style="color: white; text-decoration: none; font-family: 'MyFont2', sans-serif; font-size: 10px; font-weight: 500; padding: 0 8px;">RESERVATIONS</a></li>
    </ul>
  </div>
  <div style="flex:0; display:flex; justify-content:center; align-items:center;">
    <a href="{% url 'pacific' %}">
      <img src="{{ asset('images/branding.png') }}" class="logo" alt="Logo" style="display: block;">
    </a>
  </div>
  <div style="flex:1; display:flex; justify-content:flex-start;">
    <ul style="display: flex; gap: 20px; list-style: none; margin: 0; padding: 0; align-items: center;">
      <li><a href="" style="color: white; text-decoration: none; font-family: 'MyFont2', sans-serif; font-size: 10px; font-weight: 500; padding: 0 8px;">GALLERY</a></li>
      <li><a href="" style="color: white; text-decoration: none; font-family: 'MyFont2', sans-serif; font-size: 10px; font-weight: 500; padding: 0 8px;">UPDATES</a></li>
      <li><a href="" style="color: white; text-decoration: none; font-family: 'MyFont2', sans-serif; font-size: 10px; font-weight: 500; padding: 0 8px;">CONTACT US</a></li>
    </ul>
   
  </div>
  </div>


<header>
  <div class="top-row">
<a href="{% url 'pacific' %}">
  <img src="{{ asset('images/branding.png') }}" class="logo" alt="Logo">
</a>

    <i class="bi bi-list burger" onclick="toggleSidebar()"></i>
    <div class="social-icons">
      <i class="bi bi-facebook"></i>
      <i class="bi bi-instagram"></i>
      <i class="bi bi-tiktok"></i>
      <button class="book-btn">BOOK NOW</button>
    </div>
  </div>

  <nav class="desktop-nav">
    <div class="nav-container">
      <ul>
        <li><a href="" class="active">HOME</a></li>
        <li><a href="">ABOUT</a></li>
        <li><a href="">MENU</a></li>
        <li><a href="">RESERVATIONS</a></li>
        <li><a href="">GALLERY</a></li>
        <li><a href="">UPDATES</a></li>
        <li><a href="">CONTACT US</a></li>
      </ul>
      
      <div class="switch-logo" onclick="navigateWithLoader2('{% url 'podium' %}')">
        <h1><em>Switch to:</em></h1>
        <img src="{{ asset('images/branding1.png') }}" alt="" style="width: 130px; height: 40px;">
      </div>
    </div>
  </nav>


  <div id="sidebar" class="sidebar">
    <ul>
      <li><a href="">HOME</a></li>
      <li><a href="">ABOUT</a></li>
      <li><a href="">MENU</a></li>
      <li><a href="">RESERVATIONS</a></li>
      <li><a href="">GALLERY</a></li>
      <li><a href="">UPDATES</a></li>
      <li><a href="">CONTACT US</a></li>
    </ul>
    <button class="book-btn sidebar-btn">BOOK NOW</button>
    <div class="switch-logo" onclick="navigateWithLoader2('{% url 'podium' %}')">
      <h1><em>Switch to:</em></h1>
      <img src="{{ asset('images/branding1.png') }}" alt="" style="width: 130px; height: 40px;">
    </div>
  </div>

  <!-- Overlay -->
  <div id="overlay" class="overlay" onclick="toggleSidebar()"></div>

  <br><hr><br>
  <div class="carousel">
  <div class="carousel-slide" id="carouselSlide">
  </div>
  <div class="dots" id="dots"></div>
</div>

</header>
 <div class="arrow left" onclick="prevSlide()">&lt;</div>
  <div class="arrow right" onclick="nextSlide()">&gt;</div>
  
  <div class="side-by-side">
    <div class="image-content"data-aos="fade-left">
    <img src="{% static 'images/about.png' %}" style="height:auto;width: 900px;" alt="Your image">
  </div>
  <div class="text-content"data-aos="fade-right">
    <h1 style="font-family: 'MyFont2'; font-size: 60px;">"About"</h1><br>
    <h2 style="font-family: 'MyFont2';">Your Title Here</h2>
    <br>
    <p>At Aurora, we pay tribute to the elegance and charm of classically-rooted Asian cooking, spotlighting the robust and familiar flavors you know and love. Our plates are designed to be shared—a reminder that meals are more nourishing when we gather around the table. Everyone is invited.</p>
  <button class="view-menu-btn">MORE INFO</button>
  </div>
</div>


<div class="favorites-section">
  <h1 class="background-text" >All-Time Favorites</h1>

  <div class="image-gallery">
    <img src="{% static 'images/bg1.jpeg' %}" alt="Food 1">
    <img src="{% static 'images/bg1.jpeg' %}" alt="Drink 1">
    <img src="{% static 'images/bg1.jpeg' %}" alt="Food 2">
    <img src="{% static 'images/bg1.jpeg' %}" alt="Drink 2">
    <img src="{% static 'images/bg1.jpeg' %}" alt="Food 3">
    <img src="{% static 'images/bg1.jpeg' %}" alt="Drink 3">
  </div>

    <div class="button-container">
  <button class="view-menu-btn" onclick="showModal()">VIEW MENU</button>
</div>

<!-- Modal Element (Initially Hidden) -->
 <div id="menuModal" class="modal" style="display: none; position: fixed;">
  <span 
    onclick="closeModal()" 
    style="
      position: absolute;
      top: 20px;
      left: 20px;
      font-size: 2rem;
      font-weight: bold;
      color: #333;
      cursor: pointer;
      z-index: 1100;
      background: rgba(255,255,255,0.8);
      border-radius: 50%;
      width: 36px;
      height: 36px;
      display: flex;
      align-items: center;
      justify-content: center;
      box-shadow: 0 2px 8px rgba(0,0,0,0.08);
      transition: background 0.2s;
    "
    onmouseover="this.style.background='#eee'"
    onmouseout="this.style.background='rgba(255,255,255,0.8)'"
    aria-label="Close"
    >&times;</span>
  <div class="modal-content" style="background-color: transparent;">
    {% include "myapp/pacificstar/menu.html" %}
  </div>
</div>
<div id="menuModal" class="modal" style="display: none;">
  {% include "myapp/pacificstar/menu.html" %}
</div>


<div class="testimonial" style="
  background-color: black;
  padding: 70px;
  display: flex;
  flex-direction: column;
  align-items: center;
">
  <h1 style="
    color: white;
    font-family: 'MyFont2';
    font-size: 30px;
    text-align: center;
    max-width: 900px;
    margin-bottom: 10px;
  ">
    "we pay tribute to the elegance and charm of classically-rooted Asian cooking, spotlighting the robust and familiar flavors"
  </h1>

  <h5 style="
    color: white;
    font-family: 'MyFont2';
    font-size: 20px;
    text-align: center;
    max-width: 900px;
    margin-top: 0;
  ">– Jon Bon Marquez</h5>
</div>

<div class="showcase">

  <div class="image-gallery2">
    <img src="{% static 'images/bg1.jpeg' %}" alt="Food 1">
    <img src="{% static 'images/bg1.jpeg' %}" alt="Drink 1">
    <img src="{% static 'images/bg1.jpeg' %}" alt="Food 2">
    <img src="{% static 'images/bg1.jpeg' %}" alt="Drink 2">
    <img src="{% static 'images/bg1.jpeg' %}" alt="Food 3">

  </div>
</div>
 {% include "myapp/pacificstar/footer.html" %}
<script>
  function toggleSidebar() {
    const sidebar = document.getElementById('sidebar');
    const overlay = document.getElementById('overlay');
    sidebar.classList.toggle('open');
    overlay.classList.toggle('show');
  }
</script>
<script>
  const slides = [
    {
      title: 'Title Text Here',
      subtitle: 'SUBTITLE TEXT HERE',
      description: `At Aurora, we pay tribute to the elegance and charm of classically-rooted Asian cooking, spotlighting the robust and familiar flavors you know and love. Our plates are designed to be shared—a reminder that meals are more nourishing when we gather around the table. Everyone is invited.`,
      image: 'https://images.unsplash.com/photo-1555939594-58d7cb561ad1?auto=format&fit=crop&w=1000&q=80'
    },
    {
      title: 'Second Slide',
      subtitle: 'EXPERIENCE THE FLAVOR',
      description: `Fusion meets tradition. Discover bold bites and cozy elegance with every plate we serve.`,
      image: 'https://images.unsplash.com/photo-1555939594-58d7cb561ad1?auto=format&fit=crop&w=1000&q=80'
    },
    {
      title: 'Freshly Served',
      subtitle: 'SEASONAL MENU',
      description: `Our rotating seasonal menu highlights the best local ingredients for a taste that’s always fresh.`,
      image: 'https://images.unsplash.com/photo-1541544741938-0af808871cc0?auto=format&fit=crop&w=1000&q=80'
    }
  ];

  let currentIndex = 0;
  const carouselSlide = document.getElementById('carouselSlide');
  const dotsContainer = document.getElementById('dots');
  let interval;

  function renderSlide(index) {
    const slide = slides[index];
    carouselSlide.innerHTML = `
      <div class="carousel-text">
        <h1>${slide.title}</h1>
        <h3>${slide.subtitle}</h3>
        <p>${slide.description}</p>
      </div>
      <div class="carousel-image" style="background-image: url('${slide.image}')"></div>
    `;
    renderDots();
  }

  function renderDots() {
  // If dots already exist, just update classes
  if (dotsContainer.children.length === slides.length) {
    Array.from(dotsContainer.children).forEach((dot, i) => {
      dot.classList.toggle('active', i === currentIndex);
    });
    return;
  }

  // Initial render (first time only)
  dotsContainer.innerHTML = slides.map((_, i) => `
    <div class="dot ${i === currentIndex ? 'active' : ''}" onclick="goToSlide(${i})"></div>
  `).join('');
}

  function prevSlide() {
    currentIndex = (currentIndex - 1 + slides.length) % slides.length;
    renderSlide(currentIndex);
    resetInterval();
  }

  function nextSlide() {
    currentIndex = (currentIndex + 1) % slides.length;
    renderSlide(currentIndex);
    resetInterval();
  }

  function goToSlide(i) {
    currentIndex = i;
    renderSlide(currentIndex);
    resetInterval();
  }

  function autoSlide() {
    interval = setInterval(() => {
      nextSlide();
    }, 5000); // Every 5 seconds
  }

  function resetInterval() {
    clearInterval(interval);
    autoSlide(); // Restart timer
  }

  // Initial setup
  renderSlide(currentIndex);
  autoSlide();
</script>
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<script>
  AOS.init();
</script>
<script>
window.addEventListener('scroll', function() {
  const sticky = document.getElementById('stickyHeader');
  const topRow = document.querySelector('.top-row');
  if (window.scrollY > topRow.offsetHeight - 20) {
    sticky.style.display = 'flex';
    topRow.style.visibility = 'hidden';
    topRow.style.opacity = '0';
    topRow.style.pointerEvents = 'none';
  } else {
    sticky.style.display = 'none';
    topRow.style.visibility = 'visible';
    topRow.style.opacity = '1';
    topRow.style.pointerEvents = 'auto';
  }
});
</script>
<script>
   function showModal() {
    const modal = document.getElementById('menuModal');
    modal.style.display = 'flex';
    // Restart animation
    modal.classList.remove('modal-animate');
    void modal.offsetWidth; // trigger reflow
    modal.classList.add('modal-animate');
    const content = modal.querySelector('.modal-content');
    if(content){
      content.classList.remove('modal-content-animate');
      void content.offsetWidth;
      content.classList.add('modal-content-animate');
    }
  }

  function closeModal() {
    document.getElementById('menuModal').style.display = 'none';
  }
</script>
</body>
</html>
