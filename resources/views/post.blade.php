@extends('layout')

@section('content')

    <article>
        <h1><?= $post->title; ?></h1>

        By <a href="/user/{{$post->user->id}}">{{$post->user->name}}</a> in <a
            href="categories/{{$post->category->slug}}">{{$post->category->name}}</a>

        <div><?= $post->body; ?></div>

        <a href="/posts">Go Back</a>
    </article>
@endsection
