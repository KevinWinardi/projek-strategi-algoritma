<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('vendors/bootstrap/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body class="bg-light">
    @if(session('error') || $errors->any())
    <div class="alert-error toast__container hidden">
        <div class="toast__header">
            <h5>Gagal</h5>
            <button class="toast__button" onclick="$(this).closest('.toast__container').addClass('invisible')">&times;</button>
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

    <div class="d-none loader"></div>
    <div class="d-none overlay"></div>
    <div class="hidden container d-flex justify-content-center align-items-center min-vh-100">
        <div class="card shadow-sm p-4" style="width: 100%; max-width: 400px;">
            <h3 class="text-center mb-4">Login</h3>
            <form method="POST" action="{{ route('loginPost') }}">
                @csrf
                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" required autofocus>
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" minlength="8" maxlength="255" required>
                </div>

                <button type="submit" class="btn btn-primary w-100">Submit</button>
                <p class="mt-2 text-center">Belum punya akun? <a href="{{ route('register') }}" class="font-bold">Daftar disini</a></p>
            </form>
        </div>
    </div>

    <script src="{{ asset('vendors/bootstrap/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>
</body>

</html>