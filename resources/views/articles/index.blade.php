@extends('layouts.default')

@section('content')

    <h1>Articles</h1>

    @if(count($articles))

        @foreach($articles as $article)
            <article>
                <h2>
                    <a href="{{ url('/articles', $article->id) }}">{{ $article->title }}</a>
                </h2>
                <p>{{ $article->body }}</p>
            </article>
        @endforeach

    @endif

@stop
