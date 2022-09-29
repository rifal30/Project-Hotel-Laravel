@extends('layouts.master')

@section('judul', 'Input Data Siswa')

@section('title','Form Input Data')

@section('inputdata')
    <form method= "POST" action="/updateData/{{$bioUbah->id}}">
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
                  <div class="form-group">
                    <label> Nama </label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                          <i class="fas fa-user"></i>
                        </div>
                      </div>
                      <input type="text" class="form-control phone-number" name="name" placeholder="Nama" value="{{$bioUbah->name}}">
                          @if ($errors->has('name'))
                          <div class ="class">
                            {{$errors->first('name')}}
                          </div>
                          @endif
                    </div>

                  </div>
                  <div class="form-group">
                    <label> Email </label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                          <i class="fas fa-code"></i>
                        </div>
                      </div>
                      <input type="text" class="form-control phone-number" name="email" placeholder="Email" value="{{$bioUbah->email}}">
                          @if ($errors->has('email'))
                          <div class ="class">
                            {{$errors->first('email')}}
                          </div>
                          @endif
                    </div>

                   <div class="form-group mt-3">
                    <label> NIK </label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                          <i class="fas fa-code"></i>
                        </div>
                      </div>
                      <input type="text" class="form-control" name="nik" placeholder="NIK" value="{{$bioUbah->nik}}">
                          @if ($errors->has('nik'))
                          <div class ="class">
                            {{$errors->first('nik')}}
                          </div>
                          @endif
                    </div>

                    <div class="form-group mt-3">
                      <label> Tanggal Lahir </label>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <div class="input-group-text">
                            <i class="fas fa-code"></i>
                          </div>
                        </div>
                        <input type="date" class="form-control phone-number" name="tgllahir" placeholder="Tanggal lahir" value="{{$bioUbah->tgllahir}}">
                            @if ($errors->has('tgllahir'))
                            <div class ="class">
                              {{$errors->first('tgllahir')}}
                            </div>
                            @endif
                      </div>

                      <div class="form-group mt-3">
                        <label> Role </label>
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <div class="input-group-text">
                              <i class="fas fa-code"></i>
                            </div>
                          </div>
                          <input type="text" class="form-control phone-number" name="role" placeholder="Role" value="{{$bioUbah->role}}">
                              @if ($errors->has('role'))
                              <div class ="class">
                                {{$errors->first('role')}}
                              </div>
                              @endif
                        </div>
              </div>
          </div>
      </div>
      <button type="submit" class="btn btn-danger d-flex justify-content=center m-auto">Submit</button>
    </form>
@endsection