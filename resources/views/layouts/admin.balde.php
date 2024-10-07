<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}"> <!-- Priklausomai nuo to, kaip jūsų CSS failai yra sukonfigūruoti -->
</head>
<body>
<nav>
    <ul>
        <li><a href="{{ route('admin.conferences.index') }}">Conferences</a></li>
        <!-- Pridėkite kitų nuorodų, jei reikia -->
    </ul>
</nav>

<div class="container">
    @yield('content') <!-- Čia bus rodomas specifinis turinys -->
</div>
</body>
</html>
