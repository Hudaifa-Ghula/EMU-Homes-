<x-layout>

    <!-- ======= Intro Single ======= -->
    <section class="intro-single">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-lg-8">
            <div class="title-single-box">

                <h1 class="title-single">{{$prop->title}}</h1>

              <span class="color-text-a">{{$prop->area}}</span>
            </div>
            @if (NULL != Auth::user())


            @if (Auth::user()->role == 1 or Auth::user()->id = $prop->owner_id )
            @if (Auth::user()->role == 1)
            @if (!$prop->active)
<a href="activate/{{$prop->id}}">activate</a>
@else
<a href="deactivate/{{$prop->id}}">deactivate</a>
@endif
@endif
<a href="../property-single/delete/{{$prop->id}}">delete</a>
            @endif
            @endif
          </div>
          <!--<div class="col-md-12 col-lg-4">
            <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a href="index">Home</a>
                </li>
                <li class="breadcrumb-item">
                  <a href="property-grid">Properties</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                  304 Blaster Up
                </li>
              </ol>
            </nav>
          </div>-->
        </div>
      </div>
    </section><!-- End Intro Single-->

    <!-- ======= Property Single ======= -->
    <section class="property-single nav-arrow-b">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <div id="property-single-carousel" class="swiper">
              <div class="swiper-wrapper">

                @foreach ($prop->pic as $picc)



                <div class="carousel-item-b swiper-slide">
                  <img class="cropped5" src="{{asset('public/image/')}}/{{$picc->link}}" alt="">
                </div>
                @endforeach
              </div>
            </div>
            <div class="property-single-carousel-pagination carousel-pagination"></div>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-12">

            <div class="row justify-content-between">
              <div class="col-md-5 col-lg-4">
                <div class="property-price d-flex justify-content-center foo">
                  <div class="card-header-c d-flex">
                    <div class="card-box-ico">
                      <span class="bi bi-cash">${{$prop->price}}</span>

                    </div>
                    <div class="card-title-c align-self-center">

                    </div>
                  </div>
                </div>
                <div class="property-summary">
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="title-box-d section-t4">
                        <h3 class="title-d">Quick Summary</h3>
                      </div>
                    </div>
                  </div>
                  <div class="summary-list">
                    <ul class="list">
                      <li class="d-flex justify-content-between">
                        <strong>Property ID:</strong>
                        <span>{{$prop->id}}</span>
                      </li>

                      <li class="d-flex justify-content-between">
                        <strong>Property Type:</strong>
                        <span>{{$prop->type}}</span>
                      </li>
                      <li class="d-flex justify-content-between">
                        <strong>Status:</strong>
                        <span>{{$prop->for}}</span>
                      </li>
                      <li class="d-flex justify-content-between">
                        <strong>Area:</strong>
                        {{$prop->area}}
                      </li>
                      <li class="d-flex justify-content-between">
                        <strong>Bedrooms:</strong>
                        <span>{{$prop->bedrooms}}</span>
                      </li>
                      <li class="d-flex justify-content-between">
                        <strong>Bathrooms:</strong>
                        <span>{{$prop->bathrooms}}</span>
                      </li>

                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-md-7 col-lg-7 section-md-t3">
                <div class="row">
                  <div class="col-sm-12">
                    <div class="title-box-d">
                      <h3 class="title-d">Property Description</h3>
                    </div>
                  </div>
                </div>
                <div class="property-description">
                    {{$prop->desc}}

                </div>


              </div>
            </div>
          </div>

          <div class="col-md-12">
            <div class="row section-t3">
              <div class="col-sm-12">
                <div class="title-box-d">
                  <h3 class="title-d">Agent</h3>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 col-lg-4">
                <img class = "cropped6" src="{{asset('public/image/')}}/{{$prop->owner->pic->link}}" alt="" class="img-fluid">
              </div>
              <div class="col-md-6 col-lg-4">
                <div class="property-agent">
                  <h4 class="title-agent">{{$prop->owner->name}}</h4>
                  
                  <ul class="list-unstyled">
                    <li class="d-flex justify-content-between">
                      <strong>Phone:</strong>
                      <span class="color-text-a">{{$prop->owner->contact}}</span>
                    </li>

                    <li class="d-flex justify-content-between">
                      <strong>Email:</strong>
                      <span class="color-text-a">{{$prop->owner->email}}</span>
                    </li>

                  </ul>
                  <div class="socials-a">
                    <ul class="list-inline">
                      <li class="list-inline-item">
                        <a href="https://www.facebook.com/">
                          <i class="bi bi-facebook" aria-hidden="true"></i>
                        </a>
                      </li>
                      <li class="list-inline-item">
                        <a href="https://twitter.com/i/flow/login">
                          <i class="bi bi-twitter" aria-hidden="true"></i>
                        </a>
                      </li>
                      <li class="list-inline-item">
                        <a href="https://www.instagram.com/">
                          <i class="bi bi-instagram" aria-hidden="true"></i>
                        </a>
                      </li>
                      <li class="list-inline-item">
                        <a href="https://www.linkedin.com/">
                          <i class="bi bi-linkedin" aria-hidden="true"></i>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div> <br>
              <div class="col-md-12 col-lg-4">
{{-- <br>
@if (NULL != Auth::user())
                  @if (Auth::user()->role == 3)
                  @if(null == $interests)
                  <a href="addfav/{{$prop->id}}" class="btn btn-b"><i class="bi bi-heart" aria-hidden="true"></i>
                    Add property to Favourites</a>
@else
                  <a href="removefav/{{$prop->id}}" class="btn btn-b">Remove property From Favourites</a>
@endif
                  @endif
                  @endif --}}

              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Property Single-->

</x-layout>
