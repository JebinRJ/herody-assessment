<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Assessment</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet" />
    <style>
        body {
            background: linear-gradient(135deg, #f8f9fa, #e0e0e0);
            font-family: 'Figtree', sans-serif;
        }
        .center-content {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .card {
            background-color: #ffffff;
            border: none;
            border-radius: 15px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
            padding: 40px;
            max-width: 400px;
            width: 100%;
        }
        .btn-custom {
            width: 100%;
            margin-bottom: 15px;
            padding: 12px 20px;
            font-size: 18px;
            font-weight: 600;
            border-radius: 50px;
            border: none;
            transition: background-color 0.3s ease, color 0.3s ease;
        }
        .btn-custom-primary {
            background-color: #007bff;
            color: #fff;
        }
        .btn-custom-primary:hover {
            background-color: #0056b3;
        }
        .btn-custom-secondary {
            background-color: #6c757d;
            color: #fff;
        }
        .btn-custom-secondary:hover {
            background-color: #5a6268;
        }
    </style>
</head>
<body>
    <div class="container center-content">
        @if (Route::has('login'))
            <div class="card text-center">
                @auth
                    <a href="{{ url('/dashboard') }}" class="btn btn-custom btn-custom-primary">Dashboard</a>
                @else
                    <a href="{{ route('login') }}" class="btn btn-custom btn-custom-primary">Log in</a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="btn btn-custom btn-custom-secondary">Register</a>
                    @endif
                @endauth
            </div>
        @endif
    </div>
    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
