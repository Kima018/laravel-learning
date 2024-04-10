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
@if($errors->any())
   <h3>
       {{$errors}}
   </h3>

@endif
<form method="POST" action="/nova-ocena">
    {{csrf_field()}}
    <input type="text" name="predmet" placeholder="unesite predmet">
    <input type="number" min="1" max="5" name="ocena" placeholder="unesite ocenu">
    <input type="text" name="profesor" placeholder="ime profesora">
    <input type="submit" value="submit">
</form>

</body>
</html>
