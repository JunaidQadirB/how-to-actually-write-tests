@extends('layouts.app')

@section('content')
    <div class="p-8">
        <h1 class="text-6xl my-6">Posts</h1>
        <ul>
            @foreach($posts as $post)
                <li class="my-5">
                    <a class="text-3xl hover:underline hover:text-blue-500"
                       href="{{route('posts.show', $post->id)}}">{{ $post->title }}</a>
                </li>
            @endforeach
        </ul>
    </div>
@endsection
