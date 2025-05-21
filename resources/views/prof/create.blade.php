<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Professors List</title>

    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="card-body">
                <form action="{{ route('prof.store') }}" method="POST" class="row g-3">
                    @method('POST')
                    @csrf

                    <div class="col-md-6">
                        <label for="nom" class="form-label">Nom</label>
                        <input type="text" class="form-control" id="nom" name="nom" required>
                    </div>
                    <div class="col-md-6">
                        <label for="prenom" class="form-label">preNom</label>
                        <input type="text" class="form-control" id="prenom" name="prenom" required>
                    </div>
                    <div class="col-md-6">
                        <label for="email" class="form-label">Adresse e-mail</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>

                    <div class="col-md-12">
                        <label for="matiere" class="form-label">Matière</label>
                        <input type="text" class="form-control" id="matiere" name="matiere" required>
                    </div>

                    <div class="col-12">
                        <button type="submit" class="btn btn-success">Ajouter</button>
                    </div>
                </form>
            </div>
        </div>
        
</body>
</html>