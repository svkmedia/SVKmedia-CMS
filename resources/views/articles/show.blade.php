@extends('layouts.default')

@section('content')

    @if(count($article))

        <h1>{{ $article->title }}</h1>
        <p>{{ $article->body }}</p>

        @unless ($article->tags->isEmpty())
            <h4>Tags</h5>
            <ul>
                @foreach($article->tags as $tag)
                    <li>{{ $tag->name }}</li>
                @endforeach
            </ul>
        @endunless

    @endif

@stop
