<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible">
    <title>@yield('title') - LARAVEL 1</title>
</head>
<body>
    <header>
        <h1>Header.</h1>
    </header>
    <hr/>
    <section>
        @yield('content')
    </section>
    <hr/>
    <footer>
        Rodapé.
    </footer>
</body>
</html>