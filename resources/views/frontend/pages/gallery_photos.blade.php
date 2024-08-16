@extends('frontend.layouts.app')

@section('content')
<script>
    const menuToggle = document.querySelector('.menu-toggle');
    const menu = document.querySelector('.menu');

    menuToggle.addEventListener('click', () => {
      menu.classList.toggle('active');
    });
  </script>
  <style>
    .gallery {
display: flex;
flex-wrap: wrap;
justify-content: center;
}

.gallery-item {
margin: 10px;
}

.gallery-item img {
width: 300px;
height: 200px;
cursor: pointer;
}

.modal {
display: none;
position: fixed;
z-index: 1;
left: 0;
top: 0;
width: 100%;
height: 100%;
overflow: auto;
background-color: rgba(0, 0, 0, 0.9);
}

.modal-content {
margin: auto;
display: block;
max-width: 80%;
max-height: 80%;
}

.close {
color: #fff;
position: absolute;
top: 10px;
right: 25px;
font-size: 35px;
font-weight: bold;
}

.close:hover,
.close:focus {
color: #bbb;
text-decoration: none;
cursor: pointer;
}
</style>
 
<div class="gallery">
    <div class="gallery-item">
      <img src={{ Vite::asset("resources/images/IMG-20230815-WA0036.jpg")}} alt="Image 1" onclick="openModal(this.src)">
    </div>
    <div class="gallery-item">
      <img src={{ Vite::asset("resources/images/IMG-20230605-WA0009.jpg")}} alt="Image 2" onclick="openModal(this.src)">
    </div>
    <div class="gallery-item">
        <img src={{ Vite::asset("resources/images/IMG-20230908-WA0030.jpg")}} alt="Image 2" onclick="openModal(this.src)">
      </div>
      <div class="gallery-item">
        <img src={{ Vite::asset("resources/images/IMG-20231031-WA0010.jpg")}} alt="Image 2" onclick="openModal(this.src)">
      </div>
      <div class="gallery-item">
        <img src={{ Vite::asset("resources/images/IMG-20230815-WA0098.jpg")}} alt="Image 2" onclick="openModal(this.src)">
      </div>
      <div class="gallery-item">
        <img src={{ Vite::asset("resources/images/IMG-20230908-WA0030.jpg")}} alt="Image 2" onclick="openModal(this.src)">
      </div>
      <div class="gallery-item">
        <img src={{ Vite::asset("resources/images/IMG-20230908-WA0018.jpg")}} onclick="openModal(this.src)">
      </div>
      <div class="gallery-item">
        <img src={{ Vite::asset("resources/images/IMG-20230908-WA0021.jpg")}} alt="Image 2" onclick="openModal(this.src)">
      </div>
      <div class="gallery-item">
        <img src={{ Vite::asset("resources/images/IMG_20230114_101732.jpg")}} alt="Image 2" onclick="openModal(this.src)">
      </div>
      <div class="gallery-item">
        <img src={{ Vite::asset("resources/images/IMG_20230114_093548.jpg")}} alt="Image 2" onclick="openModal(this.src)">
      </div>
      <div class="gallery-item">
        <img src={{ Vite::asset("resources/images/IMG_20220815_084857.jpg")}} alt="Image 2" onclick="openModal(this.src)">
      </div>
      <div class="gallery-item">
        <img src={{ Vite::asset("resources/images/IMG_20230126_082823.jpg")}} alt="Image 2" onclick="openModal(this.src)">
      </div>
      <div class="gallery-item">
        <img src={{ Vite::asset("resources/images/IMG-20231114-WA0011.jpg")}} alt="Image 2" onclick="openModal(this.src)">
      </div>
      <div class="gallery-item">
        <img src={{ Vite::asset("resources/images/IMG-20240201-WA0051.jpg")}} alt="Image 2" onclick="openModal(this.src)">
      </div>
    
  </div>
  
  <div id="modal" class="modal">
    <span class="close" onclick="closeModal()">&times;</span>
    <img class="modal-content" id="modalImage">
  </div>

<Script>
    let modalElement = document.getElementById("modal");
let modalImage = document.getElementById("modalImage");

function openModal(src) {
modalImage.src = src;
modalElement.style.display = "block";
}

function closeModal() {
modalElement.style.display = "none";
}

window.onclick = function(event) {
if (event.target == modalElement) {
closeModal();
}
}
</SCript>
@endsection