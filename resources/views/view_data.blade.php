<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="{{ asset('css/test.css') }}">
</head>
<body>
    <h1>{{ $title }}</h1>
    
    <ul>
    @foreach($data as $prodi)
        <li>{{ $prodi }}</li>
    @endforeach
    </ul>
</body>
</html>