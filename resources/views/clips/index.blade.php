<!DOCTYPE html>
<html>
<head>
    <title>Listado de Clips</title>
</head>
<body>
    <h1>Listado de Clips</h1>
    <ul>
        @foreach($items as $item)
            <li>{{ $item }}</li>
        @endforeach
    </ul>
</body>
</html>
