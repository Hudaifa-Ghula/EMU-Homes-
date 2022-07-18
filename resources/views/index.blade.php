<x-layout>
  <!-- ======= Intro Section ======= -->
  <div class="intro intro-carousel swiper position-relative">
      <div class="swiper-slide carousel-item-a intro-item bg-image" style="background-image: url(/img/cyprus2.jpg)">
        <div class="overlay overlay-a"></div>
        <div class="intro-content display-table">
          <div class="table-cell">
            <div class="container">
              <div class="row">
                <div class="col-lg-8">
                  <div class="intro-body">

                  </div>

                      <form class="form-a" method="GET">
                          @csrf
                        <div class="row">
                          <div class="col-md-12 mb-2">
                            <div class="form-group">
                              <label class="pb-2" for="Type">Keyword</label>
                              <input type="text" value= "{{old('search')}}" class="form-control form-control-lg form-control-a" placeholder="Keyword" name="search">
                            </div>
                          </div>
                          <div class="col-md-6 mb-2">
                            <div class="form-group mt-3">
                              <label class="pb-2" for="Type">Looking for</label>
                              <select name="for" class="form-control form-select form-control-a" id="Type" value= "{{old('for',"")}}">
                                <option value="">Any</option>
                                <option value="rent">Rent</option>
                                <option value="sale">Sale</option>
                                <option value="open house">Open House</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-md-6 mb-2">
                            <div class="form-group mt-3">
                              <label class="pb-2" for="city">District</label>
                              <select name="area" value= "{{old('area',"")}}" class="form-control form-select form-control-a" id="city">
                                <option value="">Any</option>
                                <option value="Baykal">Baykal</option>
        <option value="Canbulat">Canbulat</option>
        <option value="Çanakkale">Çanakkale</option>
        <option value="Emu Campus">Emu Campus</option>
        <option value="Dumlupınar">Dumlupınar</option>
        <option value="Kaliland">Kaliland</option>
        <option value="Karakol">Karakol</option>
        <option value="Maraş">Maraş</option>
        <option value="Namık Kemal">Namık Kemal</option>
        <option value="Palm Beach">Palm Beach</option>
        <option value="Sakarya">Sakarya</option>
        <option value="Saklıkent">Saklıkent</option>
        <option value="Salamis Road">Salamis Road</option>
        <option value="Suriçi">Suriçi</option>
        <option value="Tekant">Tekant</option>
        <option value="Tuzla">Tuzla</option>
        <option value="Yeniboğaziçi">Yeniboğaziçi</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-md-6 mb-2">
                            <div class="form-group mt-3">
                              <label class="pb-2" for="bedrooms">Bedrooms</label>
                              <select name="bedrooms" value= "{{old('bedrooms',"")}}" class="form-control form-select form-control-a" id="bedrooms">
                                <option value="">Any</option>
                                <option value="1">01</option>
                                <option value="2">02</option>
                                <option value="3">03</option>
                                <option value="4">04</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-md-6 mb-2">
                            <div class="form-group mt-3">
                              <label class="pb-2" for="garages">Bathrooms</label>
                              <select name="bathrooms" value= "{{old('bathrooms',"")}}" class="form-control form-select form-control-a" id="garages">
                                <option value="">Any</option>
                                <option value="1">01</option>
                                <option value="2">02</option>
                                <option value="3">03</option>
                                <option value="4">04</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-md-6 mb-2">
                            <div class="form-group mt-3">
                              <label class="pb-2" for="bathrooms">Property Type</label>
                              <select name="type" value= "{{old('type',"")}}" class="form-control form-select form-control-a" id="bathrooms">
                                <option value="">Any</option>
                                <option value="villa">Villa</option>
        <option value="dorm">Dorm</option>
        <option value="house">House</option>
        <option value="apartment">Apartment</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-md-6 mb-2">
                            <div class="form-group mt-3">
                              <label class="pb-2" for="price">Max Price</label>
                              <select name = "price" value= "{{old('price',0)}}" class="form-control form-select form-control-a" id="price">
                                <option value="0">no limit</option>
                                <option value="2000">$2,000</option>

                                <option value="4000">$4,000</option>

                                <option value="6000">$6,000</option>

                                <option value="8000">$8,000</option>
                                <option value="10000">$10,000</option>
                                <option value="20000">$20,000</option>
                                <option value="40000">$40,000</option>
                                <option value="60000">$60,000</option>
                                <option value="80000">$80,000</option>
                                <option value="100000">$100,000</option>

                              </select>
                            </div>
                          </div>
                          <div class="col-md-12">
                            <button type="submit" class="btn btn-b">Search Property</button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

  </div>



<br>
    <section class="property-grid grid">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="grid-option">
                <!--
              <form method="GET" name="sort">
                <select name="sort" class="custom-select">
                  <option selected>Sort By</option>
                  <option value="1">Recently Added</option>
                  <option value="2">Price (low to high)</option>
                  <option value="3">Price (high to low)</option>
                </select>
                <input type="submit" value="Sort">
              </form>
            -->

            </div>
          </div>


@foreach ($props as $prop)
<div class="col-md-4">


            <div class="card-box-a card-shadow">
              <div class="img-box-a">

                @if ($prop->pic)
                <img class = "cropped1" src="public\image\{{$prop->pic['0']->link}}" alt="" class="img-a img-fluid">

                @endif
                </div>
              <div class="card-overlay">
                <div class="card-overlay-a-content">
                  <div class="card-header-a">
                    <h2 class="card-title-a">
                      <a href="property-single/{{$prop->id}}">{{$prop->title}}</a>
                    </h2>
                  </div>
                  <div class="card-body-a">
                    <div class="price-box d-flex">
                      <span class="price-a">{{$prop->for}} | $ {{$prop->price}}</span>
                    </div>
                    <a href="property-single/{{$prop->id}}" class="link-a">Click here to view
                      <span class="bi bi-chevron-right"></span>
                    </a>
                  </div>
                  <div class="card-footer-a">
                    <ul class="card-info d-flex justify-content-around">
                      <li>
                        <h4 class="card-info-title">Area</h4>
                        <span>{{$prop->area}}

                        </span>
                      </li>
                      <li>
                        <h4 class="card-info-title">Beds</h4>
                        <span>{{$prop->bedrooms}}</span>
                      </li>
                      <li>
                        <h4 class="card-info-title">Baths</h4>
                        <span>{{$prop->bathrooms}}</span>
                      </li>

                    </ul>
                  </div>
                </div>
              </div>
            </div>
        </div>
          @endforeach

          <div class="row">
          <div class="col-sm-12">
            <nav class="pagination-a">
              <ul class="pagination justify-content-end">
                {{$props->links()}}
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </section>
</x-layout>
