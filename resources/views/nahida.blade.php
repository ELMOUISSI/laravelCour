<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT"
     crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    
hello from nahida page
<table class="table table-striped">
    <thead class="table-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nom</th>
            <th scope="col">Prenom</th>
            <th scope="col">email</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($profs as $prof)
            <tr>
              <td>{{ $prof->id }}</td>
                <td>{{ $prof->nom }}</td>
                <td>{{ $prof->prenom }}</td>
                <td>{{ $prof->email}}</td>
            </tr>
        @endforeach
    </tbody>
</table>

<a href="{{ route('welcome') }}" class="btn btn-primary">Go to Welcome Page</a>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" 
crossorigin="anonymous"></script>
</html>