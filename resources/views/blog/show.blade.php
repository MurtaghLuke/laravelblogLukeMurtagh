@extends('layouts.app')

@section('content')
<div class="w-4/5 m-auto text-left">
    <div class="py-15">
        <h1 class="text-6xl">
            {{ $post->title }}
        </h1>
    </div>
</div>

<div class="w-4/5 m-auto pt-20">
    <span class="text-gray-500">
        By <span class="font-bold italic text-gray-800">{{ $post->user->name }}</span>, Created on {{ date('jS M Y', strtotime($post->updated_at)) }}
    </span>

    <p class="text-xl text-gray-700 pt-8 pb-10 leading-8 font-light">
        {{ $post->description }}
    </p>
</div>



<!-- Comment success message -->
@if(session('success'))
    <div class="bg-green-500 text-white p-2 rounded mb-4">
        {{ session('success') }}
    </div>
@endif

<!-- Comment form  -->
<div class="w-4/5 m-auto pt-20">
    <h3>Leave a Comment</h3>
    <form action="{{ route('comments.store', $post->id) }}" method="POST">
        @csrf
        <input type="text" name="name" placeholder="Your Name" required class="border rounded p-2 mb-4 w-full">
        <textarea name="comment" placeholder="Your Comment" required class="border rounded p-2 mb-4 w-full"></textarea>
        <button type="submit" class="bg-green-700 text-white p-2 rounded">Post Comment</button>
    </form>
</div>

<!-- Display comments -->
<div class="w-4/5 m-auto pt-10">
    <h3>Comments</h3>
    @if($post->comments->isNotEmpty())
    @foreach($post->comments as $comment)
        <p><strong>{{ $comment->name }}</strong>: {{ $comment->comment }}</p>
    @endforeach
    @else
        <p>Be the first to comment</p>
    @endif
</div>



@endsection 