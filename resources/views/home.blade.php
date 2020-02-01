@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="https://secure.meetupstatic.com/photos/event/4/c/b/b/600_468259643.jpeg" class="rounded-circle" style="max-height: 200px;">
        </div>
        <div class="col-9 pt-5 pl-5">
            <div><h1>{{ $user->userName }}</h1></div>
            <div class="d-flex">
                <div class="pr-5"><strong>261</strong> posts</div>
                <div class="pr-5"><strong>37.5k</strong> followers</div>
                <div class="pr-5"><strong>233</strong> following</div>
            </div>
            <div class="pt-3" style="font-weight: bold">freeCodeCamp.org</div>
            <div>We're a global community of millions of people learning to code together. We're an open source, donor-supported, 501(c)(3) nonprofit.</div>
            <div><a href="#">www.freecodecamp.org</div>
        </div>
    </div>
    <div class="row pt-4">
        <div class="col-4">
            <img src="https://instagram.fmia1-2.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/s640x640/83685533_642392923240008_2402831147948054363_n.jpg?_nc_ht=instagram.fmia1-2.fna.fbcdn.net&_nc_cat=100&_nc_ohc=sBp1kLcxJr8AX_gK0KG&oh=355e9692cfda9881dac444e4c31a163e&oe=5EC6EC1F" alt="" class="w-100">
        </div>
        <div class="col-4">
            <img src="https://instagram.fmia1-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/p640x640/83882094_189688875767629_4724838109548338712_n.jpg?_nc_ht=instagram.fmia1-1.fna.fbcdn.net&_nc_cat=101&_nc_ohc=iwGHm92E4iQAX-Q0f16&oh=c8429a294ca1db4cdfa32fcf15283a56&oe=5EC17D82" alt="" class="w-100">
        </div>
        <div class="col-4" class="w-100">
            <img src="https://instagram.fmia1-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/s640x640/81567746_484126129190751_5424132848294627773_n.jpg?_nc_ht=instagram.fmia1-1.fna.fbcdn.net&_nc_cat=103&_nc_ohc=R84nvTnCS5IAX8pb3ld&oh=197b536f402450c586d4ae162f635203&oe=5EDB1DCA" alt="" class="w-100">
        </div>
</div>
@endsection
