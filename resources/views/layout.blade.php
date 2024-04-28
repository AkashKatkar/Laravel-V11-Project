<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Blade Template - @yield("title", "Web")</title>

        <!-- Bootstrap CSS -->
        <link href="{{ asset("bootstrap/css/bootstrap.min.css") }}" rel="stylesheet">

        <!-- Bootstrap JS -->
        <script src="{{ asset("bootstrap/js/bootstrap.bundle.min.js") }}"></script>

        <!-- Bootstrap Icon -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

        <!-- Google Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,500;1,600&family=Roboto:wght@100;500&display=swap" rel="stylesheet">

        @stack("styles")
    </head>
    <body class="d-flex flex-column" style="height: 100vh;">
        @include("header")
        <div class="p-4">
            @hasSection("content")
                @yield("content")
            @else
                <h2 class="text-center">Nothing</h2>
            @endif
        </div>
        @include("footer")

        @stack("scripts")
    </body>
</html>
