@extends('layouts.master')

@section('title','Data Kelas')

@section('table')

 @csrf
      @method('PUT')

      @if ($message = Session::get('sukses'))
        <div class="alert alert-success alert-block">
          <button type="button" class="close" data dismiss="alert">x</button>
          <strong style="font-size: 20px">{{ $message }}</strong>
        </div>
      @endif  

      <div class="content">    
        <div class="card">  
        </div>  
<div class="container">
        <div class="row">
            <div class="col-4 my-3 mr-n3">
                <img src="/assets/img/room-1.jpg" class="image-fluid" width="350px" height="350px">
            </div>
            <div class="col-8 my-3 ml-n3">
            <div class="card" >
            <div class="card-body" style="height:350px">
                <div class="container">
                <h2 style="margin-top:110px">Single Room</h2>
                <p>Spacious and elegantly furnished, the Grand Deluxe Room captures the indigenous spirit of Indonesia. Each room encompasses 65 sq m of living space, featuring a spacious open-air terrace and premier amenities. </p>
            </div>
            <div class="form-group text-right">
              <h5 class="float-left mt-3 ml-3">
                $ 299
              </h5>
              <div>
                <button type="submit" class="btn btn-dark btn-icon btn-right" >
                  Pesan
                </button>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>
</div>
<div class="container">
  <div class="row">
            <div class="col-8 my-3 mr-n3">
            <div class="card" >
            <div class="card-body" style="height:350px">
                <div class="container">
                <h2 style="margin-top:110px">Deluxe Room</h2>
                <p>Bathroom - 2 bathrooms, bathrobes, and a separate bathtub and shower with a rainfall showerhead Practical - Safe, free newspaper, and desk; rollaway/extra beds available on request. </p>
            </div>
            <div class="form-group">
              <h5 class="float-left ml-3 mt-3">
                $ 699
              </h5>
              <div>
                <button type="submit" class="btn btn-dark kiriin" >
                  Pesan
                </button>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="col-4 my-3 ml-n5">
                <img src="/assets/img/room-6.jpg" class="image-fluid" width="350px" height="350px">
            </div>
            </div>
</div>
</div>
<div class="container">
        <div class="row">
            <div class="col-4 my-3 mr-n3">
                <img src="/assets/img/room-5.jpg" class="image-fluid" width="350px" height="350px">
            </div>
            <div class="col-8 my-3 ml-n3">
            <div class="card" >
            <div class="card-body" style="height:350px">
                <div class="container">
                <h2 style="margin-top:110px">Simple Room</h2>
                <p>Bathroom - Private bathroom, deep soaking bathtub, and rainfall showerhead

Practical - Day bed, safe, and free newspaper; rollaway/extra beds and free cribs/infant beds available on request. </p>
            </div>
            <div class="form-group text-right">
              <h5 class="float-left ml-3 mt-2">
                $ 199
              </h5>
              <div>
                <button type="submit" class="btn btn-dark btn-icon btn-right mt-1" >
                  Pesan
                </button>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>
</div>
<div class="container">
  <div class="row">
            <div class="col-8 my-3 mr-n3">
            <div class="card" >
            <div class="card-body" style="height:350px">
                <div class="container">
                <h2 style="margin-top:50px">Super Room</h2>
                <p>Exclusive and exceptional, the spacious 100 sq m Apurva Prestige Suites are elegantly decorated and filled with luxurious furnishings. These opulent suites feature a master bedroom with separate living room, private plunge pool and spacious terrace overlooking the resort view. The statement bathroom makes the most of its space, with bathroom features including an outdoor bath, and his and hers shower room, complemented by a dressing facility. The suites guests enjoy exclusive access to the Cliff Lounge and Cliff Lounge pools. </p>
            </div>
            <div class="form-group">
              <h5 class="float-left mt-2 ml-3">
                $ 899
              </h5>
                <button type="submit" class="btn btn-dark kiriin" >
                  Pesan
                </button>
            </div>
        </div>
    </div>
    </div>
    <div class="col-4 my-3 ml-n5">
                <img src="/assets/img/room-2.jpg" class="image-fluid" width="350px" height="350px">
            </div>
            </div>
</div>
</div>
</div>
      </div>

@endsection