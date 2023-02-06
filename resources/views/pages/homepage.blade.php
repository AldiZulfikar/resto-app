@extends('layouts.partials.body')
@include('layouts.partials.navbar')
@section('content')

<!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <!-- Slide 1 -->
          <div class="carousel-item active" style="background-image: url({{asset('/frontend-assets')}}/assets/img/slide/slide-1.jpg);">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown"><span>Mamyuk</span> Restaurant</h2>
                <p class="animate__animated animate__fadeInUp">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Incidunt cupiditate veritatis magni officia perspiciatis illo atque. Rerum facere repellat soluta delectus? Fugit nisi cumque odit provident molestias alias aspernatur perspiciatis!</p>
                <div>
                  <a href="{{route('menu.index')}}" class="btn-menu animate__animated animate__fadeInUp scrollto">Our Menu</a>
                  <a href="{{route('reservations.step.one')}}" class="btn-book animate__animated animate__fadeInUp scrollto">Book a Table</a>
                </div>
              </div>
            </div>
          </div>

          <!-- Slide 2 -->
          <div class="carousel-item" style="background-image: url({{asset('/frontend-assets')}}/assets/img/slide/slide-2.jpg);">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown">Weekdays seru!</h2>
                <p class="animate__animated animate__fadeInUp">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Corrupti nihil eos nesciunt. Perferendis repudiandae dolore laborum asperiores velit, similique fugiat optio minima ab reiciendis sint maiores esse at totam eum!</p>
                <div>
                  <a href="{{route('menu.index')}}" class="btn-menu animate__animated animate__fadeInUp scrollto">Our Menu</a>
                  <a href="{{route('reservations.step.one')}}" class="btn-book animate__animated animate__fadeInUp scrollto">Book a Table</a>
                </div>
              </div>
            </div>
          </div>

          <!-- Slide 3 -->
          <div class="carousel-item" style="background-image: url({{asset('/frontend-assets')}}/assets/img/slide/slide-3.jpg);">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown">Kelezatan yang Terjamin!</h2>
                <p class="animate__animated animate__fadeInUp">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Corrupti nihil eos nesciunt. Perferendis repudiandae dolore laborum asperiores velit, similique fugiat optio minima ab reiciendis sint maiores esse at totam eum!</p>
                <div>
                  <a href="{{route('menu.index')}}" class="btn-menu animate__animated animate__fadeInUp scrollto">Our Menu</a>
                  <a href="{{route('reservations.step.one')}}" class="btn-book animate__animated animate__fadeInUp scrollto">Book a Table</a>
                </div>
              </div>
            </div>
          </div>

        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

      </div>
    </div>
  </section><!-- End Hero -->
  @include('layouts.partials.about')
  @include('layouts.partials.whyus')
  @include('layouts.partials.menu')
  @include('layouts.partials.event')
  @include('layouts.partials.galeri')
  @include('layouts.partials.contact')
@endsection