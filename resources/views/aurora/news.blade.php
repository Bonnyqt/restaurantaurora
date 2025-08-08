<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>AURORA | News & Updates</title>
   <style>
      body {
         font-family: Arial, sans-serif;
         margin: 0;
         padding: 0;
         background-color: #f4f4f4;
      }

      .container {
         max-width: 1500px; /* Made wider */
         margin: 0 auto;
         padding: 30px 40px;
      }

      .search-bar {
         margin-bottom: 40px;
         display: flex;
         justify-content: center;
      }

      .search-bar input {
         width: 100%;
         max-width: 700px;
         padding: 14px;
         font-size: 17px;
         border: 1px solid #ccc;
         border-radius: 6px;
      }

      .news-grid {
         display: grid;
         grid-template-columns: repeat(2, 1fr);
         gap: 40px;
      }

      .news-item {
         display: flex;
         background-color: #fff;
         border-radius: 10px;
         box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
         overflow: hidden;
         height: 260px;
         width: 100%; /* Full width of the grid cell */
      }

      .news-image {
         width: 320px;  /* Larger image */
         height: 100%;
         object-fit: cover;
      }

      .news-content {
         padding: 30px;
         flex: 1;
         display: flex;
         flex-direction: column;
         justify-content: space-between;
      }

      .news-content h3 {
         margin-top: 0;
         margin-bottom: 15px;
         font-size: 22px;
      }

      .news-content p {
         font-size: 16px;
         margin-bottom: 10px;
      }

      .news-content small {
         color: #777;
      }

      @media (max-width: 1000px) {
         .news-grid {
            grid-template-columns: 1fr;
         }

         .news-item {
            flex-direction: column;
            height: auto;
         }

         .news-image {
            width: 100%;
            height: 220px;
         }
      }
      
.elegant-line-text2 {
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

.elegant-line-text2::before,
.elegant-line-text2::after {
  content: "";
  flex: 0.1;
  height: 1px;
  background: #2c1d18;
  margin: 0 20px;
  opacity: 0.5;
}
   </style>
</head>
<body>

   @include('aurora.header')
   @include('aurora.heading')

   <div class="container">

      <!-- Search Bar -->
      <div class="search-bar">
         <input type="text" placeholder="Search news...">
      </div>
    <div class="elegant-line-text2">AUGUST 08, 2025</div>
    <br>
      <!-- News Grid -->
      <div class="news-grid">

         <div class="news-item">
            <img class="news-image" src="{{ asset('images/psb.jpg') }}" alt="News Image 1">
            <div class="news-content">
               <div>
                  <h3>New Campus Opens in Quezon City</h3>
                  <p>The AURORA institute has expanded with a new campus in Quezon City to cater to growing demand.</p>
               </div>
               <small>Published on August 1, 2025</small>
            </div>
         </div>

         <div class="news-item">
            <img class="news-image" src="{{ asset('images/psb.jpg') }}" alt="News Image 2">
            <div class="news-content">
               <div>
                  <h3>Scholarship Program for 2026 Announced</h3>
                  <p>AURORA has launched a new scholarship initiative for underprivileged students starting next year.</p>
               </div>
               <small>Published on July 20, 2025</small>
            </div>
         </div>
         <div class="news-item">
            <img class="news-image" src="{{ asset('images/psb.jpg') }}" alt="News Image 3">
            <div class="news-content">
               <div>
                  <h3>Partnership with GlobalTech Inc.</h3>
                  <p>We’ve partnered with GlobalTech Inc. to provide internship opportunities for IT and Engineering students.</p>
               </div>
               <small>Published on July 10, 2025</small>
            </div>
         </div>

         <div class="news-item">
            <img class="news-image" src="{{ asset('images/psb.jpg') }}" alt="News Image 4">
            <div class="news-content">
               <div>
                  <h3>Launch of Aurora Mobile App</h3>
                  <p>Our official mobile app is now available for iOS and Android, making student life even easier.</p>
               </div>
               <small>Published on July 5, 2025</small>
            </div>
         </div>

      </div>
   </div>
   <br><br>
   @include('aurora.footer')
</body>
</html>
