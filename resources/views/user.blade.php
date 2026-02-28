<!DOCTYPE html>
<html>
<head>
    <title>Data User</title>
</head>
<body>

<h2>Data User</h2>

<table border="1" cellpadding="10">
    <tr>
        <th>ID</th>
        <th>Level</th>
        <th>Username</th>
        <th>Nama</th>
    </tr>

    @foreach ($data as $u)
    <tr>
        <td>{{ $u->user_id }}</td>
        <td>{{ $u->level_id }}</td>
        <td>{{ $u->username }}</td>
        <td>{{ $u->nama }}</td>
    </tr>
    @endforeach

</table>

</body>
</html>