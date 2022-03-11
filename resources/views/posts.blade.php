@extends('layout')

@section('content')
    @foreach ($posts as $post)
        <article>
            <a href="/ex/hardroutes/posts/{{$post->slug}}">
                {{$post->title}}
            </a>
            <div>{{ $post->excerpt }}</div>
        </article>
    @endforeach
@endsection
