<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        @yield('title')
    </title>
    @vite('resources/js/app.js')

    <!-- FontAwesome library import link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>

    <header>
       <div class="text-center">
            Questo è un bellissimo header!!!!!!
       </div>
    </header>

    <main>
        @foreach ( as )
            
        @endforeach
    </main>

    <footer>
        <div class="text-center">
            Questo è un bruttissimo footer
       </div>
    </footer>

</body>
</html>
