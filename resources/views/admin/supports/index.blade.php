<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

    <h1>Listagem do Suportes</h1>

    <a href="{{ route('supports.create') }}">Criar Duvida</a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">assunto</th>
                <th scope="col">status</th>
                <th scope="col">descrição</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($supports as $support)
                <tr>
                    <td>{{ $support->subject }}</td>
                    <td>{{ $support->status }}</td>
                    <td>{{ $support->body }}</td>
                    <td> > </td>
                </tr>
            @endforeach
        </tbody>
    </table>


</body>

</html>
