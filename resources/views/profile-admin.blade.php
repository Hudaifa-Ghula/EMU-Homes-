<x-laylay>
<br>
<br><br><br><br>
<section class="property-grid grid">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">

        <div class="title-single-box">
            <h2>Properties awating approval</h2>
        </div>
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


<br><br><br><br>
<div class="col-md-4">
    @if (null == $props[0])
    No approval requests available
    @endif
    @foreach ($props as $prop)

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
                  <a href="#">{{$prop->title}}</a>
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

      @endforeach
    </div>
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
</x-layay>
