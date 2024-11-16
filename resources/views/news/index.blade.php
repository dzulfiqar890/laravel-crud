<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Ini Berita</h1>
    @foreach($news as $row )
    <img src="storage/{{ $row->picture }}"/>
    <h3>{{ $row->title }}</h3>
    <p>{{ $row->content }}</p>
    @endforeach
</body>
</html>