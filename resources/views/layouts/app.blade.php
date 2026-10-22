<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>@yield('title', 'My Ceylon Walk | Authentic Journeys in Sri Lanka')</title>
  <meta name="description" content="@yield('meta_description', 'Discover handcrafted Sri Lanka tours, luxury boutique stays, and meaningful local experiences with My Ceylon Walk.')">
  
  <!-- Favicon -->
  <link rel="icon" type="image/svg+xml" href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'><circle cx='50' cy='50' r='45' fill='%23061A15'/><path d='M50 15C35 32 28 47 28 57C28 69 38 79 50 79C62 79 72 69 72 57C72 47 65 32 50 15Z' stroke='%23E5A93C' stroke-width='4' fill='none'/></svg>">

  <!-- Custom CSS3 Design System -->
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  @yield('styles')
</head>
<body>
  <!-- Header Partial -->
  @include('partials.header')

  <!-- Main Content -->
  <main id="main-content">
    @yield('content')
  </main>

  <!-- Global Footer -->
  @include('partials.footer')

  <!-- Itinerary Modal -->
  @include('partials.modal')

  <!-- Custom Vanilla JavaScript -->
  <script src="{{ asset('js/main.js') }}"></script>
  @yield('scripts')
</body>
</html>
