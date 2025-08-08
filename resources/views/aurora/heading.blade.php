<style>
.image-wrapper {
  position: relative;
  width: 100%;
  height: 22vh;
  overflow: hidden;
}

.image-wrapper img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  display: block;
  filter: blur(7px); /* 👈 Apply blur directly to the image */
  transform: scale(1.05); /* Slight zoom to hide blur edges */
}

.image-wrapper::before {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: rgba(0, 0, 0, 0.562); /* Dim effect */
  z-index: 1;
}

.elegant-line-text {
  display: flex;
  align-items: center;
  justify-content: center;
  font-family: 'Playfair Display', serif;
  font-size: 50px;
  color: #fafafa;
  text-transform: uppercase;
  letter-spacing: 2px;
  position: relative;
  z-index: 2; /* Make sure it stays on top of blur and overlay */
}

.elegant-line-text::before,
.elegant-line-text::after {
  content: "";
  flex: 0.1;
  height: 1px;
  background: #ffffff;
  margin: 0 10px;
  opacity: 0.5;
}

.centered-overlay {
  position: absolute;
  top: 60%;
  left: 50%;
  transform: translate(-50%, -50%);
  width: 100%;
  z-index: 4;
  pointer-events: none;
  text-align: center;
}

</style>

<div class="image-wrapper">
  <img src="{{ asset('images/slide3.jpg') }}" alt="Article Image">
  <div class="elegant-line-text centered-overlay">ABOUT</div>
</div>