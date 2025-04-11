<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <style>
        body { font-family: Arial, sans-serif; padding: 20px; }
        .container { max-width: 800px; margin: auto; }
        .header, .footer { background:rgb(245, 168, 238); color: white; text-align: center; padding: 10px; }
    </style>
</head>
<body>
    <div class="header">
        <h2>@yield('header')</h2>
    </div>

    <div class="container">
        @yield('content')
    </div>

    <div class="footer">
        <p>© 2025 Laravel Layout Tutorial</p>
    </div>
</body>
</html>