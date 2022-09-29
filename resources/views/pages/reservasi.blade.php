@extends('layouts.master')

@section('Judul','reservasi')

@section('tabelpesan')
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">

            <div class="card card-dark">
              <div class="card-header"><h4 class="text-dark text-center ">Pesan</h4></div>

              <div class="card-body">
                <form method="POST" action="/reservasi/{{$card->id}}">
                    @csrf
                  <div class="row">
                    <div class="form-group col-6">
                      <label for="name">Name</label>
                      <input id="name" type="text" class="form-control"  value="{{Auth::user()->nama}}" name="nama" autofocus>
                    </div>
                    <div class="form-group col-6">
                      <label for="nik">NIK</label>
                      <input id="nik" type="text" class="form-control" value="{{Auth::user()->nik}}" name="nik">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="email">Email</label>
                    <input id="email" type="email" class="form-control"  value="{{Auth::user()->email}}" name="email">
                    <div class="invalid-feedback">
                    </div>
                  </div>

                    <div class="form-group">
                      <label>Type Room</label>
                      <select class="form-control selectric">
                        <option>Single Room ($199)</option>
                        <option>Deluxe Room ($699)</option>
                        <option>Simple Room ($299)</option>
                        <option>Super Room ($899)</option>
                     </select>
                    </div>

                    <div class="row">
                    <div class="form-group col-6">
                      <label for="cekin">check-in</label>
                      <input id="cekin" type="date" class="form-control" name="cekin" autofocus>
                    </div>
                    <div class="form-group col-6">
                      <label for="cekout">Check-out</label>
                      <input id="cekout" type="date" class="form-control" name="cekout">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="jumlah">Jumlah</label>
                    <input id="jumlah" type="number" class="form-control" name="jumlah">
                  </div>

                   
                  <div class="form-group">
                    <button type="submit" class="btn btn-dark btn-lg btn-block">
                     Booking Now
                    </button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection