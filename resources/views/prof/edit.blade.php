<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier Professeur</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="card shadow">
        <div class="card-header bg-primary text-white">
            Modifier Professeur
        </div>
        <div class="card-body">
            <form action="{{ route('prof.update', $prof->id) }}" method="POST" class="row g-3">
                @csrf
                @method('PUT')

                <div class="col-md-6">
                    <label for="nom" class="form-label">Nom</label>
                    <input type="text" class="form-control" id="nom" name="nom" value="{{ $prof->nom }}" required>
                </div>

                <div class="col-md-6">
                    <label for="prenom" class="form-label">Prénom</label>
                    <input type="text" class="form-control" id="prenom" name="prenom" value="{{ $prof->prenom }}" required>
                </div>

                <div class="col-md-6">
                    <label for="email" class="form-label">Adresse e-mail</label>
                    <input type="email" class="form-control" id="email" name="email" value="{{ $prof->email }}" required>
                </div>

                <div class="col-md-6">
                    <label for="matiere" class="form-label">Matière</label>
                    <input type="text" class="form-control" id="matiere" name="matiere" value="{{ $prof->matiere }}" required>
                </div>

                <div class="col-12 mt-4">
                    <button type="submit" class="btn btn-success">Mettre à jour</button>
                    <a href="{{ url('/profs') }}" class="btn btn-secondary">Annuler</a>
                </div>
            </form>
        </div>
    </div>
</div>

</body>
</html>
