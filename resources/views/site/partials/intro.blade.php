<div class="intro intro-carousel swiper position-relative">

    <div class="swiper-wrapper">

      @foreach ($randomProperties as $property)
      <div class="swiper-slide carousel-item-a intro-item bg-image" style="background-image: url(site/assets/img/slide-1.jpg)">
        <div class="overlay overlay-a"></div>
        <div class="intro-content display-table">
          <div class="table-cell">
            <div class="container">
              <div class="row">
                <div class="col-lg-8">
                  <div class="intro-body">
                    {{-- <p class="intro-title-top">{{$property->area}}
                      <br> {{$property->rooms}}
                    </p> --}}
                    <h1 class="intro-title mb-4 ">
                      <span class="color-b">{{$property->name}} </span>
                      <br> {{$property->description}}
                    </h1>
                    <p class="intro-subtitle intro-price">
                      <a href="#"><span class="price-a">{{$property->kind != 1 ? 'RENT' : 'SALE' }} | $ {{$property->price}}</span></a>
                    </p>
                    <p class="intro-subtitle intro-price">
                      <a href="#"><span class="price-a">{{$property->area }} | {{$property->rooms}}</span></a>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      @endforeach

      {{-- <div class="swiper-slide carousel-item-a intro-item bg-image" style="background-image: url(site/assets/img/slide-2.jpg)">
        <div class="overlay overlay-a"></div>
        <div class="intro-content display-table">
          <div class="table-cell">
            <div class="container">
              <div class="row">
                <div class="col-lg-8">
                  <div class="intro-body">
                    <p class="intro-title-top">Doral, Florida
                      <br> 78345
                    </p>
                    <h1 class="intro-title mb-4">
                      <span class="color-b">204 </span> Rino
                      <br> Venda Road Five
                    </h1>
                    <p class="intro-subtitle intro-price">
                      <a href="#"><span class="price-a">rent | $ 12.000</span></a>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div> --}}

    </div>
    <div class="swiper-pagination"></div>
  </div><!-- End Intro Section -->