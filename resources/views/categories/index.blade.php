@extends('layout')
@section('title')
all cat
@endsection
@section('content')
<h1>All Categories</h1>
    @foreach ($categories as $category) 
        <h3>{{$category -> name}}</h3>
        <h3>{{$category->description}}</h3>
    @endforeach
    {{$categories ->links()}}
  @endsection  