    <!-- ======= Menu Section ======= -->
    <section id="menu" class="menu">
        <div class="container">
  
          <div class="section-title">
            <h2>Check our tasty <span>Menu</span></h2>
          </div>
  
          <div class="row">
            <div class="col-lg-12 d-flex justify-content-center">
              <ul id="menu-flters">
                <li data-filter="*" class="filter-active">Show All</li>
                @foreach ($categories as $category)
                  <li data-filter=".filter-category{{$category->id}}">{{$category->name}}</li>
                @endforeach
              </ul>
            </div>
          </div>
  
          <div class="row menu-container">
            @foreach ($menu as $item)
              @foreach ($item -> categories as $items)
                <div class="col-lg-6 menu-item filter-category{{$items->id}}">
                  <div class="menu-content">
                    <a href="{{route('menu.show', $item->id)}}">{{$item->name}}</a><span>IDR {{$item->price}}</span>
                  </div>
                  <div class="menu-ingredients">
                    {{$item->description}}
                  </div>
                </div>
              @endforeach
            @endforeach
  
          </div>
  
        </div>
      </section><!-- End Menu Section -->