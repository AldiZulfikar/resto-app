<!-- ======= Chefs Section ======= -->
<section id="chefs" class="chefs mt-5">
  <div class="container mt-5">

    <div class="section-title">
      <h2>Our Delicious <span>Menus</span></h2>
      <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p>
    </div>

    <div class="row">
      @foreach ($menu as $item)
      <div class="col-lg-4 col-md-6 mb-5">
        <div class="member">
          <div class="pic"><img src="{{Storage::url($item->image)}}" class="img-fluid" alt=""></div>
          <div class="member-info">
            <h4>{{$item->name}}</h4>
            <div class="menu-content">
              <a href="{{route('menu.show', $item->id)}}">Check Detail</a>
            </div>
            <div class="social">
              <span>IDR {{$item->price}}</span>
            </div>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section><!-- End Chefs Section -->