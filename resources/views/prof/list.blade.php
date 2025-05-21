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

    <div class="container mt-5">
        <h2 class="mb-4 text-center">List of Professors</h2>
        <div class="mb-3">
            <a href="{{ route('prof.create') }}" class="btn btn-primary">Add New Professor</a>
        </div>
        <table class="table table-bordered table-striped shadow">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>preNom</th>
                    <th>Email</th>
                    <th>Matière</th>
                    <th> Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($profs as $professor)
                    <tr>
                        <td>{{ $professor->id }}</td>
                        <td>{{ $professor->nom }}</td>
                        <td>{{ $professor->prenom }}</td>
                        <td>{{ $professor->email }}</td>
                        <td>{{ $professor->matiere }}</td>
                        <td>
                            <a class="btn btn-primary" href="{{ route('prof.edit',$professor->id) }}"> edit </a>
                            <a class="btn btn-success"> show </a>
                            <form action="{{ route('prof.delete', $professor->id) }}" method="POST" onsubmit="return confirm('Confirmer la suppression ?');" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Supprimer</button>
                        </form> </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</body>
</html>
