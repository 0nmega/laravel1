<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konferencijų Sistema - Pagrindinis Puslapis</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <!-- Studentų informacija -->
    <h1>Sveiki atvykę į Konferencijų Registracijos Sistemą!</h1>
    <p><strong>Studentas:</strong> [Dariuš Tomaševičius]</p>
    <p><strong>Grupė:</strong> [Pit-22]</p>

    <!-- Nuorodos į vaidmenų posistemius -->
    <div class="list-group">
        <a href="{{ route('conferences.index') }}" class="list-group-item list-group-item-action">
            Kliento posistemis (Peržiūrėti konferencijas)
        </a>
        <a href="{{ route('conferences.index') }}" class="list-group-item list-group-item-action">
            Darbuotojo posistemis (Peržiūrėti konferencijų sąrašą)
        </a>
        <a href="{{ route('admin.conferences.index') }}" class="list-group-item list-group-item-action">
            Administratoriaus posistemis (Valdyti konferencijas ir naudotojus)
        </a>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
