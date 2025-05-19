<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Page d'accueil</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background: #f2f2f2;
            color: #333;
        }

        header {
            background-color: #4CAF50;
            padding: 20px;
            text-align: center;
            color: white;
        }

        main {
            padding: 40px;
            text-align: center;
        }

        a.button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            margin-top: 20px;
        }

        a.button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

    <header>
        <h1>Bienvenue sur notre site</h1>
    </header>

    <main>
        <h2>Page d'accueil</h2>
        <p>Ceci est une page d'accueil simple avec Laravel Blade et CSS de base.</p>
        <a href="{{ url('/nahida') }}" class="button">Nous contacter</a>
    </main>

</body>
</html>
