

<style>
.favorites-section {
  position: relative;
  background-color: #fffcf3;
  padding: 60px 20px 40px;
  text-align: center;
  overflow: hidden;
}
.background-text {
  font-family: 'Playfair Display', serif;
  font-size: 50px;
  position: relative;
  display: inline-block;
  color: rgb(0, 0, 0);
  z-index: 0;
  overflow: hidden;
}
.image-gallery {
  display: flex;
  align-items: flex-end;
  justify-content: center;
  gap: 20px;
  position: relative;
  z-index: 1;
  overflow-x: auto;
  padding: 80px 10px 40px;
}

/* Staggered look */
.image-item {
  position: relative;
  display: inline-block;
  overflow: hidden;
  transition: box-shadow 0.3s;
}
.image-item:nth-child(1),
.image-item:nth-child(3),
.image-item:nth-child(5) {
  transform: translateY(-40px);
}
.image-item:nth-child(2),
.image-item:nth-child(4),
.image-item:nth-child(6) {
  transform: translateY(0);
}

.image-item img {
  width: 240px;
  height: 400px;
  box-shadow: 0 4px 10px rgba(0,0,0,0.15);
  object-fit: cover;
  display: block;
  transition: transform 0.3s cubic-bezier(.4,2,.6,1), box-shadow 0.3s, filter 0.3s;

  cursor: pointer;
  z-index: 1;
}

/* Hover effect */
.image-item .hover-dim {
  position: absolute;
  top: 0; left: 0; right: 0; bottom: 0;
  width: 100%; height: 100%;
  background: linear-gradient(to bottom, rgba(0,0,0,0.65) 60%, rgba(0,0,0,0.15) 100%);
  opacity: 0;
  transition: opacity 0.3s;
  z-index: 2;
  pointer-events: none;

}
.image-item:hover .hover-dim {
  opacity: 1;
}
.image-item .hover-text {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%,-50%);
  color: #fff;
  font-family: 'Playfair Display', serif;
  font-size: 1.5rem;
  font-weight: bold;
  opacity: 0;
  z-index: 3;
  pointer-events: none;
  text-shadow: 0 2px 12px rgba(0,0,0,0.4);
  transition: opacity 0.3s;
  text-align: center;
  padding: 0 10px;
}
.image-item:hover .hover-text {
  opacity: 1;
}
.elegant-line-text {
  display: flex;
  align-items: center;
  justify-content: center;
  font-family: 'Playfair Display', serif;
  font-size: 20px;
  color: #2c1d18;
  text-transform: uppercase;
  letter-spacing: 2px;
  position: relative;
  
}

.elegant-line-text::before,
.elegant-line-text::after {
  content: "";
  flex: 0.1;
  height: 1px;
  background: #2c1d18;
  margin: 0 20px;
  opacity: 0.5;
}
.view-menu-btn {
  padding: 10px 30px;
  border: 1px solid #000;
  background-color: transparent;
  font-family: 'MyFont2', sans-serif;
  letter-spacing: 1px;
  cursor: pointer;
  transition: 0.3s;
  margin-top: 20px;
}

.view-menu-btn:hover {
  background-color: #000;
  color: #fff;
}
.background-text::after {
  content: "";
  display: block;
  position: absolute;
  left: 0; bottom: 0;
  height: 4px;
  width: 0;
  background: linear-gradient(90deg, #000000 0%, #fffbe6 100%);
  border-radius: 2px;
  transition: width 0.5s cubic-bezier(.4,2,.6,1);
  z-index: 1;
}

.favorites-section:hover .background-text::after {
  width: 100%;
}
.modal {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0,0,0,0.5); /* semi-transparent background */
  display: flex;
  align-items: center;
  justify-content: center;
  z-index: 1000;
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
<div class="favorites-section" id="favoritesAnchor">
  <div class="elegant-line-text">Menu</div>
  <h1 class="background-text" style="font-family: 'Playfair Display', serif; font-size: 50px;">ALL-TIME FAVORITES</h1>

  <div class="image-gallery">
    <div class="image-item">
      <img src="{{ asset('images/piccolo.JPG') }}" alt="Piccolo">
      <div class="hover-dim"></div>
      <div class="hover-text">Piccolo</div>
    </div>
    <div class="image-item">
      <img src="{{ asset('images/tomahawk.JPG') }}" alt="Tomahawk Steak">
      <div class="hover-dim"></div>
      <div class="hover-text"> Tomahawk Steak</div>
    </div>
    <div class="image-item">
      <img src="{{ asset('images/matcha.JPG') }}" alt="Iced Matcha">
      <div class="hover-dim"></div>
      <div class="hover-text">Iced Matcha</div>
    </div>
    <div class="image-item">
      <img src="{{ asset('images/pata.JPG') }}" alt="Crispy Pata">
      <div class="hover-dim"></div>
      <div class="hover-text">Crispy Pata</div>
    </div>
    <div class="image-item">
      <img src="{{ asset('images/mimosa.JPG') }}" alt="Mimosa">
      <div class="hover-dim"></div>
      <div class="hover-text">Mimosa</div>
    </div>
    <div class="image-item">
      <img src="{{ asset('images/salmon.JPG') }}" alt="Salmon Donburi">
      <div class="hover-dim"></div>
      <div class="hover-text">Salmon Donburi</div>
    </div>
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
@include('aurora.menu')
  </div>
</div>
<div id="menuModal" class="modal" style="display: none;">
@include('aurora.menu')
</div>
</div>
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