<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>danh sach danh muc</h1>
    <table border="1">
        <tr>
            <th>#id</th>
            <th>name</th>
            <th><a href="">them moi</a></th>
        </tr>
        @foreach ($categories as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->name }}</td>
            </tr>
        @endforeach
    </table>
</body>

</html>
