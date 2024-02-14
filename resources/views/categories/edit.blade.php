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
    <form action="{{ url('/categories/$category->id') }}" method="post">
    @csrf
    @method('put')
        <input type="text" name="name" id="">
        <textarea name="desc" id="" cols="30" rows="10"></textarea>
        <input type="submit" value="add">
    </form>
</body>
</html>