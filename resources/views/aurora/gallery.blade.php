
  <style>
    .parent2{
background: #f7f7f7;
justify-content: center;
text-align: center;
 align-items: center;
 padding: 30px;
  height: 80vh;
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
  
  <div class="gallery-item item-1"><img src="https://scontent.fmnl14-1.fna.fbcdn.net/v/t39.30808-6/489822689_654455527343534_821614516300584445_n.jpg?_nc_cat=100&ccb=1-7&_nc_sid=127cfc&_nc_ohc=uuR0EZhotjEQ7kNvwHMqFfq&_nc_oc=AdnT9qeVAGfLpjsdBNEukcsTvRKl3Ct7JYkDudivVF5z3cVIqSir8Oxf-LrcuJN34Rg&_nc_zt=23&_nc_ht=scontent.fmnl14-1.fna&_nc_gid=-o6ZqRsvI2HNsMcEm6WTzQ&oh=00_AfOnH7j4aCAyw5xl3NLfZsmfq-Zqwp_gkhHuVc6N-2QnFg&oe=6863D978" alt="img1"></div>
  <div class="gallery-item item-2"><img src="https://scontent.fmnl14-1.fna.fbcdn.net/v/t51.75761-15/471825128_17974730384798921_5956543653676864578_n.jpg?_nc_cat=103&ccb=1-7&_nc_sid=127cfc&_nc_ohc=-eD0YjIWi_oQ7kNvwHnPd0k&_nc_oc=AdklZJ1rCjjBUSQuqIsh-OkZYCTIrTE_NlOB2dcjoyZVT0cKV3fe8O2wNj5RAOTTe7s&_nc_zt=23&_nc_ht=scontent.fmnl14-1.fna&_nc_gid=t_HmBBcqtY-I42aWp4bupA&oh=00_AfMGasim9r4n0iwIaeQ9rb6vAq7pGdqAqowiQokMoZ1aaw&oe=6863CD12" alt="img2"></div>
  <div class="gallery-item item-3"><img src="{% static 'images/branding4.png'%}" style="height: auto;width: 630px; margin-left:80px;" alt="img3"></div>
  <div class="gallery-item item-4"><img src="https://scontent.fmnl14-2.fna.fbcdn.net/v/t39.30808-6/482322683_631159639673123_7319806752019655407_n.jpg?_nc_cat=108&ccb=1-7&_nc_sid=127cfc&_nc_ohc=Wp2xPMTHd6QQ7kNvwEBaeD5&_nc_oc=AdlF9J4VkVVfxkv9YVsGG1-iE0n_hHyuH8zLyfwqZAx1bXqfPxVbvs3LAkxjBnrwnrI&_nc_zt=23&_nc_ht=scontent.fmnl14-2.fna&_nc_gid=MnNhuO0Awn9ZxOhYMXqF6A&oh=00_AfMuPQB3XGKgd4dHRi_yOovq-Eb3sGa-bRE8FhWiPasiLw&oe=6863F983" alt="img4"></div>
  <div class="gallery-item item-5"><img src="https://scontent.fmnl14-2.fna.fbcdn.net/v/t39.30808-6/472307555_17975778623798921_3157123321095186562_n.jpg?_nc_cat=108&ccb=1-7&_nc_sid=127cfc&_nc_ohc=Zq_kqkxKqYYQ7kNvwEsz_3Z&_nc_oc=AdnD33GyL12p-TGxI5SlQFZfUDsLdkufsSKiY8vip_2Bcy89Mlmg1aHXjx2CKB9TnZg&_nc_zt=23&_nc_ht=scontent.fmnl14-2.fna&_nc_gid=InU12Q0vEpcAf_8y1m-nvQ&oh=00_AfPw-26XY5CkqkjxCtrspft2cmzQN-catE8yFYPQYWJo5Q&oe=6863F191" alt="img5"></div>
  <div class="gallery-item item-6"><img src="https://scontent.fmnl14-1.fna.fbcdn.net/v/t39.30808-6/476209646_605077202281367_670590598643603662_n.jpg?_nc_cat=109&ccb=1-7&_nc_sid=127cfc&_nc_ohc=3JpLm6-95MMQ7kNvwEKv6-_&_nc_oc=Adn4yoF-s0r3NchMKV0jAbRyMXwF62XWzQOCqx0D7OcXbNjnfSb90X0ZC-aZfce745k&_nc_zt=23&_nc_ht=scontent.fmnl14-1.fna&_nc_gid=CmcdPq1SojjgdkZjBICZpA&oh=00_AfMkf94EDQigvvxit6HUXQTRfLbktxWXHqq_ph3mvAx16A&oe=6863E018" alt="img6"></div>
</div>
</div>
</div>