@extends('layouts.master')

@section('judul', 'Input Data Siswa')

@section('title','Form Input Data')

@section('inputdata')
    <form method= "POST" action="/simpanData">
      @csrf

      @if ($message = Session::get('sukses'))
        <div class="alert alert-success alert-block">
          <button type="button" class="close" data dismiss="alert">x</button>
          <strong style="font-size: 20px">{{ $message }}</strong>
        </div>
      @endif  

      <div class="card">
        <div class="card-body">
          <div class="row">
            <div class="col">
                  <div class="form-group">
                    <label> Title </label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                          <i class="fas fa-user"></i>
                        </div>
                      </div>
                      <input type="text" class="form-control phone-number" name="title" placeholder="title">
                          @if ($errors->has('title'))
                          <div class ="class">
                            {{$errors->first('title')}}
                          </div>
                          @endif
                    </div>

                  </div>
                  <div class="form-group">
                    <label> Desc </label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                          <i class="fas fa-code"></i>
                        </div>
                      </div>
                      <input type="text" class="form-control phone-number" name="desc" placeholder="desc">
                          @if ($errors->has('desc'))
                          <div class ="class">
                            {{$errors->first('desc')}}
                          </div>
                          @endif
                    </div>

                  </div>
                  <div class="form-group">
                    <label> Harga </label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                          <i class="fas fa-briefcase"></i>
                        </div>
                      </div>
                      <input type="text" class="form-control pwstrength" name="harga" placeholder="harga">
                            @if ($errors->has('harga'))
                            <div class ="class">
                              {{$errors->first('harga')}}
                            </div>
                          @endif
                   </div>

                  </div>
                  <div class="form-group">
                    <label> Image Kamar </label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="fas fa-calendar-alt"></i>
                        </div>
                      </div>
                      <input type="file" class="form-control currency" name="image">
                      @if ($errors->has('tgl'))
                            <div class ="class">
                              {{$errors->first('tgl')}}
                            </div>
                          @endif
                   </div>
              </div>
          </div>
      </div>
      <button type="submit" class="btn btn-primary d-flex justify-content=center m-auto">Submit</button>
    </form>
@endsection