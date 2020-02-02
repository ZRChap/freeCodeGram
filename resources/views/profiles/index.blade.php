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
            <a href="#">Add New Post</a>
            </div>
            <div class="d-flex">
                <div class="pr-5"><strong>261</strong> posts</div>
                <div class="pr-5"><strong>37.5k</strong> followers</div> 
                <div class="pr-5"><strong>233</strong> following</div>
            </div>
            <div class="pt-3" style="font-weight: bold">{{ $user->profile->title }}</div>
            <div>{{ $user->profile->description }}</div>
            <div><a href="#">{{ $user->profile->url }}</div>
        </div>
    </div>
    <div class="row pt-4">
        <div class="col-4">
            <img src="https://instagram.fmia1-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/c0.111.928.928a/s640x640/82967728_222124025469517_5532436576170466152_n.jpg?_nc_ht=instagram.fmia1-1.fna.fbcdn.net&_nc_cat=101&_nc_ohc=-Gj6yghlXy0AX_31ije&oh=b4aa4c284a57d384451862b48a892bf9&oe=5EC3C23B" alt="" class="w-100">
        </div>
        <div class="col-4">
            <img src="https://instagram.fmia1-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/c0.17.782.782a/s640x640/83882094_189688875767629_4724838109548338712_n.jpg?_nc_ht=instagram.fmia1-1.fna.fbcdn.net&_nc_cat=101&_nc_ohc=3fCURgyOH_AAX-YDjz3&oh=f59a8356efcea21e4299ff56f2046ee2&oe=5EBD4006" alt="" class="w-100">
        </div>
        <div class="col-4" class="w-100">
            <img src="https://instagram.fmia1-2.fna.fbcdn.net/v/t51.2885-15/e35/c95.0.560.560a/83685533_642392923240008_2402831147948054363_n.jpg?_nc_ht=instagram.fmia1-2.fna.fbcdn.net&_nc_cat=100&_nc_ohc=BDv2G-RkoyAAX8Fa0WT&oh=1ea41c065b7966b51097db59274b728e&oe=5ED4D373" alt="" class="w-100">
        </div>
</div>
@endsection
