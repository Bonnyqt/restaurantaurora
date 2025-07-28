{% load static %}
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/png" href="{% static 'images/auroraLogo.png' %}">
<link rel="stylesheet" href="{{ asset('css/pacific2.css') }}">

  <title>BISTRO AURORA</title>
</head>
<body>
@include('loader')
@include('bistro.header')
@include('bistro.about')
@include('bistro.favorites')
@include('bistro.testimonials')
 @include('bistro.gallery')
@include('bistro.location')
@include('bistro.footer')
</body>
</html>