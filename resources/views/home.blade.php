<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hello World!</h1>
    <p>I have {{ $number }} {{ $animals }}</p>
    <h3>Si chiamano:</h3>
    @foreach ($cats_name as $cat_name)
        <p>
            {{ $cat_name}}
        </p>
    @endforeach
    
    <a href="/bonus">Vai al bonus</a>
</body>
</html>