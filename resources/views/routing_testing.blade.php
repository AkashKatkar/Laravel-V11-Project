<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Routing Testing</title>
    </head>
    <body>
        {{-- route anchor tag --}}
        <a href="{{ route("welcome_page") }}">Click here to redirect to Welcome Page</a>
        <br><br>
        <a href="{{ route("btb") }}">Blade template beginner</a>
        <br><br>
        <a href="{{ route("bti") }}">Blade template inter</a>
        <br><br>
        <a href="{{ route("bte") }}">Blade template expert</a>
        <br><br>
        <a href="{{ route("btp") }}">Blade template pro</a>
    </body>
</html>
