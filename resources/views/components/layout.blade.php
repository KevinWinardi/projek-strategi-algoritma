<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }} - Projek SA</title>
    <link rel="stylesheet" href="{{ asset('vendors/bootstrap/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/fontawesome/css/all.min.css') }}">
    @yield('style')
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <div class="d-none loader"></div>
    <div class="d-none overlay"></div>
    <nav class="sidebar px-2 py-1 shadow-md">
        <ul class="nav-list px-2">
            <li class="d-flex flex-column">
                <span class="align-self-end px-1 sidebar-control d-md-none">X</span>
                <a href="{{ route('dashboard') }}" class="text-center"><img src="{{ asset('logo.png') }}" alt="Logo" style="max-width: 150px;"></a>
            </li>
            <li><a class="nav-link my-4 {{ $title=='Dashboard' ? 'text-warning' : 'text-white' }}" href="{{ route('dashboard') }}"><i class="fa fa-tachometer-alt" aria-hidden="true"></i> Dashboard</a></li>
            <li><a class="nav-link my-4 {{ $title=='Fibonacci' ? 'text-warning' : 'text-white' }}" href="{{ route('fibonacci.index') }}"><i class="fa fa-list-ol" aria-hidden="true"></i> Fibonacci</a></li>
            <li><a class="nav-link my-4 {{ $title=='Sorting' ? 'text-warning' : 'text-white' }}" href="{{ route('sorting.index') }}"><i class="fa fa-arrow-up-wide-short" aria-hidden="true"></i> Sorting</a></li>
            <li><a class="nav-link my-4 {{ $title=='Coin Change' ? 'text-warning' : 'text-white' }}" href="{{ route('coin-change.index') }}"><i class="fa fa-coins" aria-hidden="true"></i> Coin change</a></li>
            <li><a class="nav-link my-4 {{ $title=='Knapsack' ? 'text-warning' : 'text-white' }}" href="{{ route('knapsack.index') }}"><i class="fa fa-suitcase" aria-hidden="true"></i> Knapsack</a></li>
            <li><a class="nav-link my-4 {{ $title=='Searching' ? 'text-warning' : 'text-white' }}" href="{{ route('searching.index') }}"><i class="fa fa-search" aria-hidden="true"></i> Searching</a></li>
        </ul>

        <a href="{{ route('logout') }}" class="btn btn-danger mx-2 d-flex justify-content-between align-items-center" onclick="return confirm('Apakah kamu yakin ingin keluar?')">
            <span class="text-white">Keluar</span>
            <i class="text-white fa fa-sign-out-alt"></i>
        </a>
    </nav>

    <!-- Main Content -->
    <main class="pb-4">
        <div class="content">
            <div class="p-3 d-flex align-items-center bg-white shadow-sm" style="position: sticky;top: 0;z-index: 3">
                <i class="sidebar-control text-dark fa fa-bars fa-2xl"></i>
                <h1 class="ms-2 my-0">{{ $title }}</h1>
            </div>
            <!-- Start Content -->

            @if(session('error') || $errors->any())
            <div class="toast__container {{ session('success') ? '' : 'error'}} hidden">
                <div class="toast__header {{ session('success') ? '' : 'error'}}">
                    <h5>Gagal</h5>
                    <button class="toast__button" onclick="this.closest('.toast__container').remove()">&times;</button>
                </div>
                @if($errors->any())
                <ul class="toast__description list">
                    @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
                @else
                <div class="toast__description ">
                    {{ session('error') }}
                </div>
                @endif
            </div>
            @endif

            <div class="container-fluid start-content">{{ $slot }}</div>
        </div>
    </main>

    <script src="{{ asset('vendors/bootstrap/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>
    @yield('script')

</body>

</html>