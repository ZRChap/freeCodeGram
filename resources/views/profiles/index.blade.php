@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="https://instagram.fmia1-1.fna.fbcdn.net/v/t51.2885-19/s150x150/83213956_3360255157381124_5752385570823208960_n.jpg?_nc_ht=instagram.fmia1-1.fna.fbcdn.net&_nc_ohc=pC02Uu4z-KwAX9T-g0g&oh=05e69e0b74c7cf552d7589fe2a8e11bc&oe=5ECEBCBA" class="rounded-circle" style="max-height: 200px;">
        </div>
        <div class="col-9 pt-5 pl-5">
            <div class="d-flex justify-content-between align-items-baseline">
            <h1>{{ $user->userName }}</h1>
            <a href="/p/create">Add New Post</a>
            </div>
            <a href="/profile/{{ $user->id }}/edit">Edit Profile</a>
            <div class="d-flex">
                <div class="pr-5"><strong>{{ $user->posts->count() }}</strong> posts</div>
                <div class="pr-5"><strong>37.5k</strong> followers</div> 
                <div class="pr-5"><strong>233</strong> following</div>
            </div>
            <div class="pt-4" style="font-weight: bold">{{ $user->profile->title }}</div>
            <div>{{ $user->profile->description }}</div>
            <div><a href="#">{{ $user->profile->url }}</div>
        </div>
    </div>
    <div class="row pt-5">
    @foreach($user->posts as $post)
        <div class="col-4 pb-4">
            <a href="/p/{{ $post->id }}">
            <img src="/storage/{{ $post->image }}" class="w-100">
            </a>
        </div>
    @endforeach
    </div>
</div>
@endsection
