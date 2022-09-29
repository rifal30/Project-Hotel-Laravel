@extends('layouts.master')

@section('judul', 'Profile')

@section('title','Profile')

@section('inputdata')
      
      @if ($message = Session::get('sukses'))
        <div class="alert alert-success alert-block">
          <button type="button" class="close" data dismiss="alert">x</button>
          <strong style="font-size: 20px">{{ $message }}</strong>
        </div>
      @endif  

    <div class="row m-auto">
              <div class="col-12 col-md-15 col-lg-5">
                <div class="card text-center p-5">
                  <div class="profile-widget-header">
                    <img alt="image" src="../assets/img/{{Auth::user()->image}}" class="rounded-circle profile-widget-picture" width="300">
                  </div>
                  <div class="p-4">
                    <h5 class="profile-widget-name"><strong>{{Auth::user()->name}}</strong></h5>
                    Ujang maman is a superhero name in <b>Indonesia</b>, especially in my family. He is not a fictional character but an original hero in my family, a hero for his children and for his wife. So, I use the name as a user in this template. Not a tribute, I'm just bored with <b>'John Doe'</b>.
                  </div>
                  <div class="card-footer text-center">
                    <div class="">Follow <b>{{Auth::user()->name}}</b> On</div>
                    <a href="#" class="btn btn-social-icon btn-facebook">
                      <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#" class="btn btn-social-icon btn-twitter">
                      <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#" class="btn btn-social-icon btn-github ">
                      <i class="fab fa-github"></i>
                    </a>
                    <a href="#" class="btn btn-social-icon btn-instagram">
                      <i class="fab fa-instagram"></i>
                    </a>
                  </div>
                </div>
              </div>
              <div class="col-12 col-md-12 col-lg-7">
                <div class="card">
                  <form method="post" class="needs-validation" novalidate="">
                    <div class="card-header">
                      <h4>Edit Profile</h4>
                    </div>
                    <div class="card-body">
                        <div class="column">
                          <div class="form-group col">
                            <label>Name</label>
                            <input type="text" readonly class="form-control" value="{{Auth::user()->name}}" required="">
                          </div>
                        
                          <div class="form-group col">
                            <label>Email</label>
                            <input type="email" readonly class="form-control" value="{{Auth::user()->email}}" required="">
                          </div>

                          <div class="form-group col">
                            <label>NIK</label>
                            <input type="tel" readonly class="form-control" value="{{Auth::user()->nik}}">
                          </div>

                          <div class="form-group col">
                            <label>Role</label>
                            <input type="email" readonly class="form-control" value="{{Auth::user()->role}}" required="">
                          </div>

                          <div class="form-group col">
                            <label>Tanggal Lahir</label>
                            <input type="email" readonly class="form-control" value="{{Auth::user()->tgllahir}}" required="">
                          </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>
  </div>

@endsection