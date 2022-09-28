<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <title>{{ config("app.name", "Laravel") }}</title>

    <!-- Fonts -->
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap"
    />

    <!-- font awesome -->
    <link
      href="https://use.fontawesome.com/releases/v5.0.6/css/all.css"
      rel="stylesheet"
    />

    <!-- style -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />

    <!-- jquery -->
    <script
      src="https://code.jquery.com/jquery-3.6.1.js"
      integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI="
      crossorigin="anonymous"
    ></script>
  </head>
  <body class="font-sans antialiased" style="margin: 0;">
    <div class="min-h-screen bg-gray-100">
      @include('layouts.navigation')

      <!-- Page Content -->
      <main>
        {{ $slot }}
      </main>
    </div>

    <!-- script -->
    <script src="{{ asset('js/app.js') }}"></script>
  </body>
</html>
