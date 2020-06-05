<!doctype html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Sivahera coffee Tradeing and consulting firm specializing in management">
  <meta name="author" content="Com'On Réal http://comon-real.fr">
  <title>Sivahera Home</title>
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <meta name="theme-color" content="#563d7c">
  <!-- Custom styles for this template -->
  <link href="css/cover/cover.css" rel="stylesheet">
</head>
<body class="text-center bg">
  <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">


          


    <header class="masthead mb-auto">
      <div class="inner">
        <h3 class="masthead-brand">Sivahera</h3>
        <nav class="nav nav-masthead justify-content-center">
        <a class="nav-link {{ (session('locale') == 'fr') ? 'active' : '' }}" href="/fr">Français</a>
            <a class="nav-link {{ (session('locale') == 'en') ? 'active' : '' }}" href="/en">English</a>
          </nav>
      </div>
    </header>
    <main role="main" class="inner cover">
      <h1 class="cover-heading">Sivahera</h1>
      {{-- <p class="lead">Cover is a one-page template for building simple and beautiful home pages. Download, edit the
        text, and add your own fullscreen background photo to make it your own.</p> --}}
      <p class="lead">
      <a href="{{ route('coffee_path') }}" class="btn btn-lg btn-secondary">{{ __('Café')}}</a>
        <a href="<?= route('home_path') ?>" class="btn btn-lg btn-secondary">Management</a>
      </p>
    </main>
    <footer class="mastfoot mt-auto">
      <div class="inner">
        <p>Site fait par <a href="https://redirect.comon-real.fr">Com'On Réal</a></p>
      </div>
    </footer>
  </div>
</body>
</html>