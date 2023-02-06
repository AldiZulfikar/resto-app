<!-- ======= Chefs Section ======= -->
<section id="book-a-table" class="book-a-table mt-5">
    <div class="container">
  
        <div class="section-title mt-5">
            <h2>Book a <span>Table</span></h2>
            <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p>
        </div>
        <form method="POST" action="{{route('reservations.store.step.one')}}" class="php-email-form">
            @csrf
            <div class="row">
              <div class="col-lg-6 mb-3">
                  <img src="{{asset('/frontend-assets')}}/assets/img/event-custom.jpg" class="img-fluid" alt="">
              </div>
              <div class="col-lg-6">
                  <div class="progress mb-3" role="progressbar" aria-label="Example with label" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                    <div class="progress-bar" style="width: 50%; background: #ffb03b;">Steps 1</div>
                  </div>
                  <div class="col-lg-12 col-md-12 form-group mb-3">
                    <input type="text" required name="first_name" 
                        value="{{$reservation->first_name ?? ''}}"
                        class="form-control" placeholder="First Name">
                  </div>
                  <div class="col-lg-12 col-md-12 form-group mb-3">
                    <input type="text" required name="last_name" 
                        value="{{$reservation->last_name ?? ''}}"
                        class="form-control" placeholder="Last Name">
                  </div>
                  <div class="col-lg-12 col-md-12 form-group mb-3">
                    <input required name="res_date" 
                        type="datetime-local" id="res_date"
                        min="{{ $min_date->format('Y-m-d\TH:i:s') }}"
                        max="{{ $max_date->format('Y-m-d\TH:i:s') }}"
                        value="{{ $reservation ? $reservation->res_date->format('Y-m-d\TH:i:s') : '' }}"
                        class="form-control" placeholder="Reservation Date">
                  </div>
                  <div class="col-lg-12 col-md-12 form-group mb-2">
                    <input type="number" required name="guest_number"
                        value="{{$reservation->guest_number ?? ''}}"
                        class="form-control" placeholder="Guest Number">
                  </div>
                  {{-- <div class="col-lg-12 col-md-12 form-group mb-3">
                    <span>Note: Mohon pastikan mengisi data dengan sebenar-benarnya!</span>
                  </div> --}}
                <div class="text-center">
                  <button class="book-a-table-btn animate__animated animate__fadeInUp scrollto" type="submit">Next</button>
                </div>
            </div>
        </form>
    </div>
  </section><!-- End Chefs Section -->