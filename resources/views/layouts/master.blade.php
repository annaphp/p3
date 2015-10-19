<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>@yield('title')</title>

  <link rel="stylesheet" href="css/style.css">
  <link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.5/sandstone/bootstrap.min.css" rel="stylesheet" integrity="sha256-Ay17X/itZzhUFkDfLB9MICE7tbVwtPuFhcwDpABdbEA= sha512-eTtl6Aa3v8DrTCYWH7cAfXt6QW8DpsFn0hdCcYIWe6VDMyPMikXBWd/9bZR5YZNrmHBBu4KGdVgfPs1aEEgVIw==" crossorigin="anonymous"></head>

  <body>
    <header>
      <h1>Developer's Best Friend </h1>
    </header>
    <div class="main">
      @yield('content')
    </div>
  </body>
  </html>
