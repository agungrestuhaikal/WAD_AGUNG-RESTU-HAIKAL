<!DOCTYPE html>
<html>
<head>
    <title>Daftar Pemenang Ballon d'Or</title>
</head>
<body>
    <h1>Daftar Pemenang Ballon d'Or</h1>
    <table border="1">
        <tr>
            <th>Nama</th>
            <th>Negara</th>
            <th>Tahun</th>
        </tr>
        @foreach($pemenangs as $p)
        <tr>
            <td>{{ $p->nama }}</td>
            <td>{{ $p->negara }}</td>
            <td>{{ $p->tahun }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>
