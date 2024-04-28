@extends('apps.app')
@section('content')  
  <div id="carouselExampleCaptions" class="carousel slide">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="{{'/images/carousel/image1.png'}}" class="img-responsive" alt="..." style="width:100%; height:100vh">
        <div class="overlay"></div>
        <div class="carousel-caption d-none d-md-block d-flex">
          <h5>Edward Soriano</h5>
          <p>Designer</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="{{'/images/carousel/image1.png'}}" class="d-block w-100" alt="...">
        <div class="overlay"></div>
        <div class="carousel-caption d-none d-md-block d-flex">
          <h5>Edward Soriano</h5>
          <p>Designer</p>
        </div>
      </div>

      <div class="carousel-item">
        <img src="{{'/images/carousel/image1.png'}}" class="d-block w-100" alt="...">
        <div class="overlay"></div>
        <div class="carousel-caption d-none d-md-block d-flex">
          <h5>Edward Soriano</h5>
          <p>Designer</p>
        </div>
      </div>

    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>n>
</div>
@endsection
