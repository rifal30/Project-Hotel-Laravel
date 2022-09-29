@extends('layouts.master')

@section('judul', 'Data Kelas')

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
      
    <div class="card card-primary mr-4 col ">
      <div class="card-header">
        <h4>RESULT</h4>
      <div class="card-body">
        <table class="table">
          <thead>
            <tr>
              <th scope="col"> Nama </th>
              <th scope="col"> Kelas </th>
              <th scope="col"> NIS </th>
              <th scope="col"> Tanggal </th>
              <th scope="col"> Aksi </th>
            </tr>
          </thead>
          <tbody>
            @foreach($bio as $p)
            <tr>
              <td> {{$p->nama}} </td>
              <td> {{$p->kelas}} </td>
              <td> {{$p->nis}} </td>
              <td> {{$p->tgl}} </td>
              <td>
                <form action="{{route('hapus',$p->id)}}" method="POST">
                  @csrf
                  @method('DELETE')
                  <a href="/ubah/{{$p->id}}" class="btn btn-warning btn-sm">Edit</a>
                  <Button type="submit" class="btn btn-danger btn-sm">Hapus</Button>
                </form> 
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
  </div>

@endsection