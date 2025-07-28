
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/png" href="{{ asset('images/auroraLogo.png') }}">
    <link rel="stylesheet" href="{% static 'css/pacific2.css' %}">
  <title>AURORA</title>
</head>
<body>
@include('loader')
@include('aurora.header')
@include('aurora.slideshow')
@include('aurora.about')
@include('aurora.favorites')
@include('aurora.testimonials')
 @include('aurora.gallery')
@include('aurora.location')
@include('aurora.footer')
</body>
</html>