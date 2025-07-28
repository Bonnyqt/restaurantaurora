<style>
  .about-section {
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 40px 40px;
      max-width: 1200px;
      margin: auto;
      
    }

    .about-image {
      flex: 1;
      max-width: 500px;
    }

    .about-image img {
      width: 100%;
      height: auto;
      border-radius: 4px;
    }

    .about-text {
      flex: 1;
      padding-left: 60px;
    }

    .about-text h3 {
      font-size: 14px;
      color: #888;
      letter-spacing: 2px;
      margin-bottom: 10px;
      position: relative;
    }

    .about-text h1 {
      font-size: 40px;
      font-weight: bold;
      color: #2c1d18;
      line-height: 1.2;
      margin-bottom: 20px;
    }

    .about-text p {
      font-size: 16px;
      color: #333;
      line-height: 1.6;
      margin-bottom: 30px;
    }

    .read-more-btn {
      padding: 12px 25px;
      font-size: 14px;
      text-transform: uppercase;
      background: transparent;
      border: 1px solid #2c1d18;
      color: #2c1d18;
          border-radius: 50px;
      cursor: pointer;
      transition: all 0.3s ease;
    }

    .read-more-btn:hover {
      background: #2c1d18;
      color: #fff;
    }
    .about-text h1 {
  position: relative;
  display: inline-block;
}

.about-text h1::after {
  content: '';
  position: absolute;
  left: 0;
  bottom: -5px; /* adjust for spacing */
  width: 0;
  height: 2px;
  background-color: #2c1d18; /* or your brand color */
  transition: width 0.1s ease;
}

.about-text:hover h1::after {
  width: 100%;
}
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

  .about-image img {
    max-width: 100%;
    height: auto;
    border-radius: 6px;
  }

  .about-image,
  .about-text {
    flex: 1 1 300px;
    min-width: 280px;
  }

  .about-text {
    padding: 20px;
    justify-content: center;
    text-align: center;
    align-items: center;
  }

  .about-text h3 {
    font-size: 14px;
    letter-spacing: 1px;
    color: #555;
    margin-bottom: 10px;
  }

  .about-text h1 {
    font-size: 36px;
    color: #2c1d18;
    margin-bottom: 20px;
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

  @media (max-width: 768px) {
    .about-section {
      flex-direction: column;
      text-align: center;
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
</style>

<div class="about-container">
<div class="about-section">
  <div class="about-image">
    <img src="https://scontent.fmnl14-2.fna.fbcdn.net/v/t39.30808-6/484095049_635824912539929_2701788863982427642_n.jpg?_nc_cat=101&ccb=1-7&_nc_sid=127cfc&_nc_ohc=Rt_D6JsWsxwQ7kNvwGlGNdW&_nc_oc=Adlp01Nn5n2mFZST2lW_5QDi6Kq2ZVJ_ukEHOwCi8FEFUq2tmdPYZagP58Zr1SnJnUU&_nc_zt=23&_nc_ht=scontent.fmnl14-2.fna&_nc_gid=ueFMP1XeVACZO3LSM4McHA&oh=00_AfN3dxcFTUekiBgY5i0PKRj0Dj1y6V41lu_V9TYn_5hhQw&oe=6863CEEF" style="width: auto;height: 550px; border-radius: 30px;" alt="About Image">
  </div>
  <div class="about-text">
    <div class="elegant-line-text">ABOUT</div>
    <h1>AURORA</h1>
    <p>
      At Aurora, we pay tribute to the elegance and charm of classically-rooted Asian cooking, spotlighting the 
      robust and familiar flavors you know and love. Our plates are designed to 
      be shared—a reminder that meals are more nourishing when we gather around the table. Everyone is invited.
    </p>
    <a href="{% url 'about' %}"><button  class="read-more-btn">READ MORE</button></a>
  </div>
</div>
</div>