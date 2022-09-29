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
                    <label> Nama </label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                          <i class="fas fa-user"></i>
                        </div>
                      </div>
                      <input type="text" class="form-control phone-number" name="nama" placeholder="Nama">
                          @if ($errors->has('nama'))
                          <div class ="class">
                            {{$errors->first('nama')}}
                          </div>
                          @endif
                    </div>

                  </div>
                  <div class="form-group">
                    <label> Kelas </label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                          <i class="fas fa-code"></i>
                        </div>
                      </div>
                      <input type="text" class="form-control phone-number" name="kelas" placeholder="Kelas">
                          @if ($errors->has('kelas'))
                          <div class ="class">
                            {{$errors->first('kelas')}}
                          </div>
                          @endif
                    </div>

                  </div>
                  <div class="form-group">
                    <label> NIS </label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                          <i class="fas fa-briefcase"></i>
                        </div>
                      </div>
                      <input type="text" class="form-control pwstrength" name="nis" placeholder="NIS">
                            @if ($errors->has('nis'))
                            <div class ="class">
                              {{$errors->first('nis')}}
                            </div>
                          @endif
                   </div>

                  </div>
                  <div class="form-group">
                    <label> Tanggal Lahir </label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="fas fa-calendar-alt"></i>
                        </div>
                      </div>
                      <input type="date" class="form-control currency" name="tgl">
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