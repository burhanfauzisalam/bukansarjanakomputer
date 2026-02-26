<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description"
    content="Landing page personal branding BUKAN SARJANA KOMPUTER - IT Developer fokus pada Web-Apps, Data Automation, Containerized Web App, dan IoT.">
  <title>BUKAN SARJANA KOMPUTER | IT Developer</title>
  <link rel="icon" type="image/svg+xml" href="{{ asset('favicon.svg') }}">
  <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Sora:wght@400;500;600;700;800&family=Space+Grotesk:wght@500;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('assets/css/front-pages/landing.css') }}">
</head>
<body>
  <div class="grid-overlay"></div>

  @include('front-pages.sections.header')

  <main id="home" class="container">
    @include('front-pages.sections.hero')
    @include('front-pages.sections.stats')
    @include('front-pages.sections.focus')
    @include('front-pages.sections.stack')
    @include('front-pages.sections.workflow')
    @include('front-pages.sections.contact')
  </main>

  @include('front-pages.sections.footer')

  <script src="{{ asset('assets/js/front-pages/landing.js') }}" defer></script>
</body>
</html>
