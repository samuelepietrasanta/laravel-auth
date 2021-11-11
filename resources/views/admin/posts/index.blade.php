
@extends('layouts.app')

@section('content')


    <h1>QUESTO E' L'INDEX</h1>

    @foreach ($posts as $post)

    <h3>{{$post['name']}}</h3>
    <a href="{{route('admin.posts.show' , $post ->id)}}">vai al post</a>
    

    @endforeach


@endsection