@extends('layout')

@section('content')
    @foreach($posts as $post)
        <article class="{{$loop->even?'mb-4':''}}">
            <a href="/posts/{{$post->slug}}">
                <h1> {{$post->title}}</h1>
            </a>
            <div>
               <p> <a href="/categories/{{$post->category->id}}">{{$post->category->name}}</a></p>
                {!! $post->excerpt !!}

            </div>
        </article>
    @endforeach
@endsection
