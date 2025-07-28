

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
      <img src="https://scontent.fmnl15-1.fna.fbcdn.net/v/t39.30808-6/497110478_679086994880387_5167735145198491355_n.jpg?_nc_cat=101&ccb=1-7&_nc_sid=127cfc&_nc_ohc=e7sTxZ11cUQQ7kNvwG9EUyt&_nc_oc=AdlT9Cpuw7PJHeH8QEChydZ6FkFAS9JRC4RpMCE1JczYnn9SRaZPeeLsc1SOQASCPKw&_nc_zt=23&_nc_ht=scontent.fmnl15-1.fna&_nc_gid=Rt9LIlSgFCBagBM7jZGX1Q&oh=00_AfNqX3GdppZizip4sTdKKgEAngUmBdxMESCAiLrrrAaBSw&oe=68690BE9" alt="Food 1">
      <div class="hover-dim"></div>
      <div class="hover-text">Negroni</div>
    </div>
    <div class="image-item">
      <img src="https://scontent.fmnl15-1.fna.fbcdn.net/v/t39.30808-6/500764818_691227093666377_1272777622246674572_n.jpg?_nc_cat=102&ccb=1-7&_nc_sid=127cfc&_nc_ohc=kF19aqUnX3sQ7kNvwF3CZGK&_nc_oc=Adm1NVcppF-z3S9HKJQEJtvX01NtCtmNahm4aFBSQUjezEO_YgQTYHpkx1HD-giBr4c&_nc_zt=23&_nc_ht=scontent.fmnl15-1.fna&_nc_gid=hqx3fBCwlb9bjOBz68at_A&oh=00_AfPA-VhQkyCrtFqHONITsKFC0ajWjUebJA-ySSo-s85SgA&oe=686926F8" alt="Drink 1">
      <div class="hover-dim"></div>
      <div class="hover-text"> Crispy Betel Leaf Cups</div>
    </div>
    <div class="image-item">
      <img src="https://scontent.fmnl15-1.fna.fbcdn.net/v/t39.30808-6/484444405_635826315873122_6012874442802915385_n.jpg?_nc_cat=107&ccb=1-7&_nc_sid=127cfc&_nc_ohc=yHkRzvKdPjUQ7kNvwFZ6Du-&_nc_oc=Adm3BiIL9l8owYsmrGIVET_wVhx8lVXmKT0Dei89_71aW28Atf--vV2pGloxgHKSexw&_nc_zt=23&_nc_ht=scontent.fmnl15-1.fna&_nc_gid=IuY2BHHKhZAxb8d1HhZwAw&oh=00_AfMr9Cy3BRpARerJstMHy64feprSMJ9rAM_7Pcb8NgRhRQ&oe=68692B79" alt="Food 2">
      <div class="hover-dim"></div>
      <div class="hover-text">Singha soda</div>
    </div>
    <div class="image-item">
      <img src="https://scontent.fmnl15-1.fna.fbcdn.net/v/t39.30808-6/496844525_679172778205142_8271853939765766049_n.jpg?_nc_cat=110&ccb=1-7&_nc_sid=127cfc&_nc_ohc=cCwTEf-uwsMQ7kNvwGUkfe2&_nc_oc=AdmD5AaQsTlmNNfvPQ29kUBbA5YcjoCz7g8hh11Mm9zj_ET9MJca9aNGKi0ENtJreH8&_nc_zt=23&_nc_ht=scontent.fmnl15-1.fna&_nc_gid=b2Pi6rpVB89dQVCHa-xtSA&oh=00_AfM8JGTlNMbOD--BM0lRWXah_m3US6OafoCaHiWtdc-5eA&oe=68691FD1" alt="Drink 2">
      <div class="hover-dim"></div>
      <div class="hover-text">Salmon Donburi</div>
    </div>
    <div class="image-item">
      <img src="https://scontent.fmnl15-1.fna.fbcdn.net/v/t39.30808-6/488642529_649719901150430_7896926609901838939_n.jpg?_nc_cat=105&ccb=1-7&_nc_sid=127cfc&_nc_ohc=6vK7qPJL_EoQ7kNvwEPmTNY&_nc_oc=AdlHPlk6tJtvvKKakFQUlCKI9r3Sfa87-ma0JVlOhawO-oqTyqOfSLeSliLkZmbr7uA&_nc_zt=23&_nc_ht=scontent.fmnl15-1.fna&_nc_gid=S-b5RD6wYMnJDpbVz4ds1w&oh=00_AfMPO5LKbAS6rYaMzVOGBCZiNnnDDh175S7O41Zz7mh9Mw&oe=68691674" alt="Food 3">
      <div class="hover-dim"></div>
      <div class="hover-text">Cucumber Salad cocktail</div>
    </div>
    <div class="image-item">
      <img src="https://scontent.fcrk1-2.fna.fbcdn.net/v/t51.75761-15/472777797_17976081020798921_7797930680567044075_n.jpg?_nc_cat=110&ccb=1-7&_nc_sid=127cfc&_nc_ohc=Xb27643qPzwQ7kNvwHMKZPu&_nc_oc=AdnKhacFZ4gZphVlOKITvN_JjnT1Fc-ktqKQeyuW4sw83Q_2JMZS4x7g2QV-t5CTskg&_nc_zt=23&_nc_ht=scontent.fcrk1-2.fna&_nc_gid=EgIRbFv5YbdTTI6HAK_1Yg&oh=00_AfOFIuvEPcwduJJ7_Btugz1SMRexvKp85NkNzVJxtkFrJw&oe=6863517E" alt="Drink 3">
      <div class="hover-dim"></div>
      <div class="hover-text">Duck Leg Boat Noodle</div>
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