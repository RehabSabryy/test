<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @if($errors ->any())
    @foreach($errors ->all() as $error)
    {{$error}}
    @endforeach
    @endif()
    <form action="{{ url('/categories') }}" method="post" enctype="multipart/form-data">
    @csrf
        <input type="text" name="name" id="">
        <textarea name="desc"></textarea>
        <input type="file" name="img" id="">
        <input type="submit" value="add" name="add">
    </form>
</body>
</html>