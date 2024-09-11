<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Protest+Guerrilla&family=SUSE:wght@100..800&display=swap');

        /* // <uniquifier>: Use a unique and descriptive class name */
        /* // <weight>: Use a value from 100 to 800 */
        .suse-400 {
            font-family: "SUSE", sans-serif;
            font-optical-sizing: auto;
            font-weight: 400;
            font-style: normal;
        }

        .protest-guerrilla-regular {
            font-family: "Protest Guerrilla", sans-serif;
            font-weight: 400;
            font-style: normal;
        }
    </style>
</head>

<body class="suse-400">
    @include('partials.navbar')
    <div class="container py-4 protest-guerrilla-regular">
        @yield('container')
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
