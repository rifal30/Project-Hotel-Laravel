@extends('layouts.master')

@section('judul', 'Halaman Tambah')

@section('judulhalaman', 'Halaman Tambah')

@section('tabelsuhu')
            <form method='post' action="/simpanData">
              @csrf
              <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="inputName" name="nama">
                    @if ($errors -> has('nama'))
                    <div class="class">
                        {{$errors -> first('nama')}}
                      </div>
                   @endif
                </div>
              </div>
              <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">NIS</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="inputPassword" name="nis">
                  @if ($errors -> has('nis'))
                  <div class="class">
                        {{$errors -> first('nis')}}
                      </div>
                   @endif
                </div>
              </div>
              <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Kelas</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="inputPassword" name="kelas">
                  @if ($errors -> has('kelas'))
                  <div class="class">
                        {{$errors -> first('kelas')}}
                      </div>
                   @endif
                </div>
              </div>
              <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Tempat Lahir</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="inputPassword" name="tmtlhr">
                  @if ($errors -> has('tmtlhr'))
                  <div class="class">
                        {{$errors -> first('tmtlhr')}}
                      </div>
                   @endif
                </div>
              </div>
              <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                <div class="col-sm-10">
                  <input type="date" class="form-control" id="inputPassword" name="tgllhr">
                  @if ($errors -> has('tgllhr'))
                      <div class="class">
                        {{$errors -> first('tgllhr')}}
                      </div>
                   @endif
                </div>
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            
@endsection