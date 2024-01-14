@props(['comment'])
<article class="flex p-6 bg-gray-100 border border-gray-200 rounded-xl space-x-4 mt-5">
    <div class="flex-shrink-0">
        <img src="https://i.pravatar.cc/?u={{$comment->id}}" alt="user avatar" width="60" height="60" class="rounded-xl">
    </div>
    <div>
        <header>
            <h3 class="font-bold">{{$comment->author->name}}</h3>
            <p class="text-xs">
                Posted
                <time>{{$comment->created_at->diffForHumans()}}</time>
            </p>
        </header>
        <p>
            {{$comment->body}}
        </p>
    </div>
</article>
