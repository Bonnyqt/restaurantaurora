
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>AURORA</title>
<link rel="stylesheet" href="{{ asset('css/styles.css') }}">
  <link rel="icon" type="image/png" href="{{ asset('images/auroraLogo.png') }}">

</head>
<body>

<div class="split-container">
  <!-- Left Side -->
  <div class="split left" onclick="navigateWithLoader('{% url 'pacific' %}')">
    <div class="text-overlay left-overlay">
      <span class="logo-text-combo">
        <img src="{{ asset('images/6.png') }}" style="height: 600px;width: 600px;"alt="Logo">
  
      </span>
    </div>
    <img class="bg-image" src="{{ asset('images/bg1.jpeg') }}" alt="Left Image">
  </div>

  <!-- Center Logo -->
  <div class="logo-center">
    <img src="{{ asset('images/auroraLogo.png') }}" alt="Logo">
    <p class="logo-text" style="font-family: 'MyFont', sans-serif;">Choose Your Adventure</p>
  </div>

  <!-- Right Side -->
  <div class="split right" onclick="navigateWithLoader2('{% url 'podium' %}')">
    <div class="text-overlay right-overlay">
      <h4 style="font-family: 'MyFont2', sans-serif;">BISTRO</h4>
      <h1 style="font-family: 'MyFont', sans-serif; font-size:85px;">AURORA</h1>
    </div>
    <img class="bg-image" src="{{ asset('images/bg2.webp') }}" alt="Right Image">
  </div>
</div>

<script src="{{ asset('js/js.js') }}"></script>
</body>
</html>
