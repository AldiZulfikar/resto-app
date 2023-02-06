<!-- ======= Chefs Section ======= -->
<section id="chefs" class="chefs mt-5">
  <div class="container mt-5">

    <div class="section-title">
      <h2>Mamyuk <span>Menu</span></h2>
    </div>
    <div class="row event-item">
        <div class="col-lg-6">
          <img src="{{Storage::url($menu->image)}}" class="img-fluid" style="width: 30rem; height:30rem;" alt="">
        </div>
        <div class="col-lg-6 pt-4 pt-lg-0 content">
          <h3>{{$menu->name}}</h3>
          <div class="price">
            <p><span>IDR {{$menu->price}}</span></p>
          </div>
          <p class="fst-italic">
            {{$menu->description}}
          </p>
          <ul>
            <li><i class="bi bi-check-circle"></i> Serifikat halal dari MUI.</li>
            <li><i class="bi bi-check-circle"></i> Jaminan kepuasan pelanggan adalah Nomor 1.</li>
            <li><i class="bi bi-check-circle"></i> Menggunakan bahan baku terbaik.</li>
          </ul>
          <p>
            Kenyamanan dan rasa aman pelanggan saat makan di Mamyuk adalah hal yang begitu penting, 
            termasuk saat mengonsumsi produk, konsumen mendapat jaminan bahwa produk yang dijual halal, 
            selain itu juga didukung dengan penerapan yang ketat mengenai standar keamanan dan kualitas 
            produk.
          </p>
        </div>
      </div>
  </div>
</section><!-- End Chefs Section -->