@extends('frontend.layouts.app')

@section('content')
    <div
        style="max-width: 800px; margin: 20px auto; padding: 20px; background-color: #fff; border-radius: 10px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
        <h1 style="text-align: center;">Vision and Mission</h1>

        <div style="margin-bottom: 30px;">
            <h2 style="text-align: center; color: #333;">Vision</h2>
            <p style="text-align: center;">Our vision is to nurture students who are intellectually curious, morally upright,
                and socially responsible individuals.</p>
        </div>

        <div style="margin-bottom: 30px;">
            <h2 style="text-align: center; color: #333;">Mission</h2>
            <p style="text-align: center;">Our mission is to provide a dynamic learning environment that fosters critical
                thinking, creativity, and lifelong learning while instilling values of respect, integrity, and compassion.
            </p>
        </div>

        <div style="text-align: center;">
            <img src="{{Vite::asset('resources/images/IMG_20200123_163957.jpg')}}" style="max-width: 100%; height: auto; border-radius: 10px;">
        </div>
    </div>
@endsection
