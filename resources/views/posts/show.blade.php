@extends('layouts.app')

@section('content')
    <div class="p-8">
        <div class="text-center">
            <p>{{$post->created_at->format('M d, Y')}}</p>
            <h1 class="text-4xl mb-6">{{$post->title}}</h1>
        </div>

        <img src="{{$post->image}}" alt="{{$post->title}}" class="w-full"/>

        <div class="my-5">
            {{$post->content}}
        </div>
    </div>
@endsection
