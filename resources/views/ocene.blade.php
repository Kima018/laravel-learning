<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<table>
    <thead>
    <tr>
        <th>Predmet</th>
        <th>ocena</th>
        <th>profesor</th>
    </tr>
    </thead>
    <tbody>
    @foreach($ocene as $ocena)
        <tr>
            <td><?=$ocena->predmet?></td>
            <td><?=$ocena->ocena?></td>
            <td><?=$ocena->profesor?></td>
        </tr>
    @endforeach

    <tr>
    </tr>
    </tbody>
</table>
</body>
</html>
