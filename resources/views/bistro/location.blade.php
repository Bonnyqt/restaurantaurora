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
  transition: width 0.4s ease;
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
    font-size: 60px;
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
  
  <div class="about-text">
    <div class="elegant-line-text">VISIT</div>
    <h1>BISTRO AURORA</h1>
    <p>
      At Aurora, we pay tribute to the elegance and charm of classically-rooted Asian cooking, spotlighting the 
      robust and familiar flavors you know and love. Our plates are designed to 
      be shared—a reminder that meals are more nourishing when we gather around the table. Everyone is invited.
    </p>
    <div>
  <a href="https://www.google.com/maps/dir/?api=1&destination=14.585571171819153,121.05960406948323&travelmode=driving" target="_blank">
  <button class="read-more-btn">ESTIMATE TRAVEL TIME</button>
</a>

</div></div>
<div class="about-image">
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1930.6191445242603!2d121.05880477119409!3d14.585493298753635!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397c90028bae1fd%3A0x1877d15df4f49811!2sBistro%20Aurora!5e0!3m2!1sen!2sph!4v1751002795791!5m2!1sen!2sph" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>
</div>
</div>