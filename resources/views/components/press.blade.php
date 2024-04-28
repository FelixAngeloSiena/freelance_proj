@extends('apps.app')
@section('content')  
    <div class="container-fluid py-3" style="padding:0; background-color:#1B1B1B">
        <p class="projects-title px-5">Press</p>
        <div class="masonry-gallery">
            <!-- Your project images here -->
            <div class="mb-4 col-xl-4 article ">
                <img src="{{'/images/press/1.webp'}}" class="img-responsive px-2" alt="..." style="display: block; margin: 0 auto; max-width: 100%;">
            </div>
            <div class="mb-4 col-xl-4 article">
                <img src="{{'/images/press/2.jpg'}}" class="img-responsive px-2" alt="..." style="display: block; margin: 0 auto; max-width: 100%;">
            </div>
            <div class="mb-4 col-xl-4 article">
                <img src="{{'/images/press/1.webp'}}" class="img-responsive px-2" alt="..." style="display: block; margin: 0 auto; max-width: 100%;">
            </div>
            <div class="mb-4 col-xl-4 article">
                <img src="{{'/images/press/2.jpg'}}" class="img-responsive px-2" alt="..." style="display: block; margin: 0 auto; max-width: 100%;">
            </div>
            <div class="mb-4 col-xl-4 article">
                <img src="{{'/images/press/1.webp'}}" class="img-responsive px-2" alt="..." style="display: block; margin: 0 auto; max-width: 100%;">
            </div>
            <div class="mb-4 col-xl-4 article">
                <img src="{{'/images/press/2.jpg'}}" class="img-responsive px-2" alt="..." style="display: block; margin: 0 auto; max-width: 100%;">
            </div>
        </div>
    </div>
    @include('inc.footer')

    @section('script')
        <script>
        window.onload = function() {
            var gallery = document.querySelector('.masonry-gallery');
            var masonry = new Masonry(gallery, {
                    itemSelector: '.article',
                    columnWidth: '.col-xl-4',
                    percentPosition: true
                });
            };
     </script>
    @endsection
@endsection
