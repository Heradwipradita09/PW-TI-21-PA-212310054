<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Tabel Akademik</title>
    <style>
        table, th, tr, td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 5px;
            width: 400px;
        }
        th {
            background-color: grey;
        }
        td {
            text-align: left;
        }
        .checked {
            color: orange;
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <th>Course</th>
            <th>Type</th>
            <th>Rate</th>
        </tr>
        @foreach ($data as $d)
        <tr>
            <td>{{ $d['Course'] }}</td>
            <td>{{ $d['Type'] }}</td>
            <td>{{ $d['Rate'] }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>