<!-- ======= Chefs Section ======= -->
<section id="book-a-table" class="book-a-table mt-5">
    <div class="container">
  
        <div class="section-title mt-5">
            <h2>Book a <span>Table</span></h2>
            <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p>
        </div>
        <form method="POST" action="{{route('reservations.store.step.two')}}" class="php-email-form">
            @csrf
            <div class="row">
              <div class="col-lg-6 mb-3">
                  <img src="{{asset('/frontend-assets')}}/assets/img/event-custom.jpg" class="img-fluid" alt="">
              </div>
              <div class="col-lg-6">
                  <div class="progress mb-3" role="progressbar" aria-label="Example with label" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                    <div class="progress-bar" style="width: 100%; background: #ffb03b;">Steps 2</div>
                  </div>
                  <div class="col-lg-12 col-md-12 form-group mb-3">
                    <input type="text" required name="email" 
                        value="{{$reservation->email ?? ''}}"
                        class="form-control" placeholder="Email">
                  </div>
                  <div class="col-lg-12 col-md-12 form-group mb-3">
                    <input type="text" required name="tel_number" 
                        value="{{$reservation->tel_number ?? ''}}"
                        class="form-control" placeholder="Telepone">
                  </div>
                  <div class="col-lg-12 col-md-12 form-group mb-1">
                    <select id="table_id" name="table_id"
                        class="form-control">
                        @foreach ($tables as $table)
                            <option value="{{ $table->id }}" @selected($table->id == $reservation->table_id)>
                                {{ $table->name }}
                                ({{ $table->guest_number }} Guests)
                            </option>
                        @endforeach
                    </select>
                  </div>
                  <div class="col-lg-12 col-md-12 form-group mb-3">
                    <span>Note: Mohon pastikan mengisi data dengan sebenar-benarnya!</span>
                  </div>
                <div class="text-center">
                    <a href="{{route('reservations.step.one')}}" class="book-a-table-btn animate__animated animate__fadeInUp scrollto">Back</a>
                    <button class="book-a-table-btn animate__animated animate__fadeInUp scrollto" type="submit">Next</button>
                </div>
            </div>
        </form>
    </div>
  </section><!-- End Chefs Section -->