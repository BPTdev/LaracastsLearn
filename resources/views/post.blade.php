@extends('layout')

@section('content')

    <article>
        <h1><?= $post->title; ?></h1>
        <div><?= $post->body; ?></div>

        <a href="/ex/hardroutes/posts">Go Back</a>
    </article>
@endsection
