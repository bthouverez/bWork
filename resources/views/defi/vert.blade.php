<!DOCTYPE html>
<html>
<head>
    <title>Défi2 : Vert</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        table {
            width: 250px;
            margin: auto;
            border-collapse: collapse;
            text-align: center;
            font-size: 25pt;
        }

        td, th {
            border: 1px solid black;
        }
    </style>

</head>

<body>
<table>
    <tr>
        <th>Vert</th>
    </tr>
@foreach($vert as $v)
    <tr>
        <td>{{ $v }}</td>
    </tr>
@endforeach
</table>
</body>
</html>