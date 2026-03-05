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

    <tr>
        <td>{{ $data->user_id }}</td>
        <td>{{ $data->level_id }}</td>
        <td>{{ $data->username }}</td>
        <td>{{ $data->nama }}</td>
    </tr>


</table>

</body>
</html>