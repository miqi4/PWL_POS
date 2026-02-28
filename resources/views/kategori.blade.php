<!DOCTYPE html>
<html>
<head>
    <title>Data Kategori</title>
</head>
<body>

<h2>Data Kategori</h2>

<table border="1" cellpadding="5">
    <tr>
        <th>ID</th>
        <th>Kode</th>
        <th>Nama</th>
    </tr>

    @foreach ($data as $k)
    <tr>
        <td>{{ $k->kategori_id }}</td>
        <td>{{ $k->kategori_kode }}</td>
        <td>{{ $k->kategori_nama }}</td>
    </tr>
    @endforeach

</table>

</body>
</html>