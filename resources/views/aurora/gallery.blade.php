
  <style>
    .parent2{
background: #f7f7f7;
justify-content: center;
text-align: center;
 align-items: center;
 padding: 30px;
  height: 60vh;
    }
    .parent {
      display: flex;
      justify-content: center;
      align-items: center;
     
      font-family: sans-serif;
      overflow: hidden;
    }

    .gallery-container {
      width: 1600px;
      height: 600px;
      display: grid;
      grid-template-columns: repeat(6, 1fr);
      grid-template-rows: repeat(3, 1fr);
      gap: 10px;
      padding: 10px;
      background: white;
      box-sizing: border-box;
    }

    .gallery-item {
      overflow: hidden;
    }

    .gallery-item img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      display: block;
    }

    .item-1 { grid-column: span 3; grid-row: span 2; }
    .item-2 { grid-column: span 3; grid-row: span 1; }
    .item-3 { grid-column: span 3; grid-row: span 1; }
    .item-4 { grid-column: span 2; grid-row: span 1; }
    .item-5 { grid-column: span 2; grid-row: span 1; }
    .item-6 { grid-column: span 2; grid-row: span 1; }
     @media (max-width: 768px) {
    .gallery-container {
      width: 100%;
      height: auto;
      grid-template-columns: repeat(2, 1fr);
      grid-template-rows: auto;
    }

    .gallery-item {
      grid-column: span 1 !important;
      grid-row: span 1 !important;
      height: 200px;
    }

    .gallery-item img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    /* Make only item-3 smaller */
    .item-3 {
      margin-top: 70px;
      height: 50px !important;
    }

    .item-3 img {
      width: 100% !important;
      height: 100% !important;
      margin-left: 0 !important;
    }
  }
  </style>
</head>
<body>
  <div class="parent2" id="galleryAnchor">
  <div class="elegant-line-text">GALLERY</div>
  <h1 class="background-text" style="font-family: 'Playfair Display', serif; font-size: 50px;">DISCOVER AMBIANCE</h1>
<div class="parent">
<div class="gallery-container">
  
  <div class="gallery-item item-1"><img src="{{ asset('images/slide1.jpg') }}" alt="img1"></div>
  <div class="gallery-item item-2"><img src="{{ asset('images/slide2.jpg') }}" alt="img2"></div>
  <div class="gallery-item item-3"><img src="{{ asset('images/branding4.png') }}" style="height: auto;width: 630px; margin-left:80px;" alt="img3"></div>
  <div class="gallery-item item-4"><img src="{{ asset('images/slide3.jpg') }}" alt="img4"></div>
  <div class="gallery-item item-5"><img src="{{ asset('images/slide2.jpg') }}" alt="img5"></div>
  <div class="gallery-item item-6"><img src="{{ asset('images/slide1.jpg') }}" alt="img6"></div>
</div>
</div>
</div>