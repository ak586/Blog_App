<x-layout>
    @foreach($posts as $post)
        <article class="{{$loop->even?'mb-4':''}}">
            <a href="/posts/{{$post->slug}}">
                <h1> {{$post->title}}</h1>
            </a>
            <div>
                <p> By <a href="/authors/{{$post->author->username}}"> {{$post->author->name}} </a> in <a href="/categories/{{$post->category->id}}">{{$post->category->name}}</a></p>
                {!! $post->excerpt !!}
            </div>
        </article>
    @endforeach
</x-layout>
