<x-laylay>

    <br><br>
    <br><br><br>

        <x-auth-card>
            <h2>Update Personal info</h2>
            <br><br>

            <!-- Validation Errors -->
            <x-auth-validation-errors class="mb-4" :errors="$errors" />

            <form method="POST" action="\updateprofile" enctype="multipart/form-data">
                @csrf
                @if (null != Auth::user()->pic)
                <img class="cropped4" src="{{asset('public/image')}}/{{Auth::user()->pic->link}}" alt="">
@else
<img src="{{asset('public/image')}}/default.jpg" class="cropped4" alt="">

                @endif
                <div class="mt-4">
                    <x-label for="image" value="update profile picture" />

    <br>
                    <input type="file" accept="image/*" name="image" class="form-control form-control-lg form-control-a">
                </div> <br>
                <!-- Name -->
                <div>
                    <x-label for="name" :value="__('Name')" />

                    <x-input id="name" class="form-control form-control-lg form-control-a" type="text" name="name" :value="Auth::user()->name" required autofocus />
                </div>

                <!-- Email Address -->
                <div class="mt-4">
                    <x-label for="email" :value="__('Email')" />

                    <x-input id="email" class="form-control form-control-lg form-control-a" type="email" name="email" :value="Auth::user()->email" required />
                </div>

                {{-- <!-- Password -->
                <div class="mt-4">
                    <x-label for="password" :value="__('Password')" />

                    <x-input id="password" class="form-control form-control-lg form-control-a"
                                    type="password"
                                    name="password"
                                    required autocomplete="new-password" />
                </div>
                <!-- Confirm Password -->
                <div class="mt-4">
                    <x-label for="password_confirmation" :value="__('Confirm Password')" />

                    <x-input id="password_confirmation" class="form-control form-control-lg form-control-a"
                                    type="password"
                                    name="password_confirmation" required :value="Auth::user()->email"/>
                </div> --}}


                <div class="mt-4">
                    <x-label for="number" value="Contact Number" />

    <br>

                    <input type="text"   placeholder="+901234567890"  value="{{Auth::user()->contact}}" class="form-control form-control-lg form-control-a">
                </div>



                <div class="flex items-center justify-end mt-4">


                    <input type="submit" class="btn btn-a">
                </div>
            </form>

        </x-auth-card>
        <section class="property-grid grid">
            <div class="container">
              <div class="row">
                <div class="col-sm-12">
                  

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


                  {{-- @foreach ($interests as $prop)

                  @if($prop->id == $interest->property_id)
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
                          @endif
                          @endforeach
                            @endforeach --}}

                            {{-- <div class="row">
                            <div class="col-sm-12">
                              <nav class="pagination-a">
                                <ul class="pagination justify-content-end">
                                  {{$props->links()}}
                                </ul>
                              </nav>
                            </div>
                          </div> --}}
                        </div>
                      </section>

                  </div>
                </div>
            </div>
        </div>



    </x-laylay>
