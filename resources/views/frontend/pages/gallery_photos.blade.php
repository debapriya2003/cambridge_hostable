@extends('frontend.layouts.app')

@section('content')
    <div class="image_gallery">
        <img src="{{Vite::asset('resources/images/IMG_20200109_093244.jpg')}}" onclick="showImage('images/IMG_20200109_093244.jpg')">
        <img src="{{Vite::asset('resources/images/IMG_20220815_085158.jpg')}}" onclick="showImage('images/IMG_20220815_085158.jpg')">
        <img src="{{Vite::asset('resources/images/IMG_20220811_081238.jpg')}}" onclick="showImage('images/IMG_20220811_081238.jpg')">
        <img src="{{Vite::asset('resources/images/IMG_20200616_201724.jpg')}}" onclick="showImage('images/IMG_20200616_201724.jpg')">
        <img src="{{Vite::asset('resources/images/IMG_20230126_081425.jpg')}}" onclick="showImage('images/IMG_20230126_081425.jpg')">
        <img src="{{Vite::asset('resources/images/IMG_20210208_092021.jpg')}}" onclick="showImage('images/IMG_20210208_092021.jpg')">
        <img src="{{Vite::asset('resources/images/IMG_20230114_131847.jpg')}}" onclick="showImage('images/IMG_20230114_131847.jpg')">
        <img src="{{Vite::asset('resources/images/IMG-20240126-WA0039.jpg')}}" onclick="showImage('images/IMG-20240126-WA0039.jpg')">
        <img src="{{Vite::asset('resources/images/IMG_20221124_091307.jpg')}}" onclick="showImage('images/IMG_20221124_091307.jpg')">
        <img src="{{Vite::asset('resources/images/IMG_20210208_091656.jpg')}}" onclick="showImage('images/IMG_20210208_091656.jpg')">
        <img src="{{Vite::asset('resources/images/IMG_20220811_074829.jpg')}}" onclick="showImage('images/IMG_20220811_074829.jpg')">
        <img src="{{Vite::asset('resources/images/IMG_20220815_080607.jpg')}}" onclick="showImage('images/IMG_20220815_080607.jpg')">
    </div>

    <div id="expanded_img" class="single_image_display">
        <span class="close" onclick="closeImage()">&times;</span>
        <img class="image_content" id="image">
    </div>
@endsection

@section('script')
    <script>
        function showImage(src) {
            var expanded_img_element = document.getElementById("expanded_img");
            var image_element = document.getElementById("image");
            expanded_img_element.style.display = "block";
            image_element.src = "{{Vite::asset('resources/images/IMG_20200109_093244.jpg')}}";
        }

        function closeImage() {
            var expanded_img_element = document.getElementById("expanded_img");
            expanded_img_element.style.display = "none";
        }
    </script>
@endsection
