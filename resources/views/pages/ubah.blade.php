@extends('layouts.master')

@section('judul', 'Input Data Siswa')

@section('title','Form Input Data')

@section('inputdata')
    <form method= "POST" action="/perbaharui/{{$bioUbah->id}}">
      @csrf
      @method('PUT')

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
                  <div class="section-title">Nama</div>
                  <div class="form-group">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                          <i class="fas fa-user"></i>
                        </div>
                      </div>
                      <input type="text" class="form-control phone-number" name="nama" value="{{$bioUbah->nama}}">
                          @if ($errors->has('nama'))
                          <div class ="class">
                            {{$errors->first('nama')}}
                          </div>
                          @endif
                    </div>

                  </div>
                  <div class="section-title">Kelas</div>
                  <div class="form-group">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                          <i class="fas fa-code"></i>
                        </div>
                      </div>
                      <input type="text" class="form-control phone-number" name="kelas" value="{{$bioUbah->kelas}}">
                          @if ($errors->has('kelas'))
                          <div class ="class">
                            {{$errors->first('kelas')}}
                          </div>
                          @endif
                    </div>

                  </div>
                  <div class="section-title">NIS</div>
                  <div class="form-group">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                          <i class="fas fa-briefcase"></i>
                        </div>
                      </div>
                      <input type="text" class="form-control pwstrength" name="nis" value="{{$bioUbah->nis}}">
                            @if ($errors->has('nis'))
                            <div class ="class">
                              {{$errors->first('nis')}}
                            </div>
                          @endif
                   </div>

                  </div>
                  <div class="section-title">Tanggal Lahir</div>
                  <div class="form-group">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="fas fa-calendar-alt"></i>
                        </div>
                      </div>
                      <input type="date" class="form-control currency" name="tgl" value="{{$bioUbah->tgl}}">
                      @if ($errors->has('tgl'))
                            <div class ="class">
                              {{$errors->first('tgl')}}
                            </div>
                          @endif
                   </div>
              </div>
          </div>
      </div>
      <button type="submit" class="btn btn-danger d-flex justify-content=center m-auto">Submit</button>
    </form>
@endsection