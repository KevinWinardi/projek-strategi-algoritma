<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fibonacci</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <header class="shadow-sm fixed-top">
        <nav class="navbar navbar-expand-lg bg-body-tertiary p-2">
            <div class="container-fluid">
                <a class="navbar-brand" href="/">Fibonacci</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mb-2 mb-lg-0 ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('halamanBeranda') }}">Beranda</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('halamanHitungFibonacci') }}">Hitung Fibonacci</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main style="margin-top: 100px;">
        {{ $slot }}
    </main>

    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>

</html>