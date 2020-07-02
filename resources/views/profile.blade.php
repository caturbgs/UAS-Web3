@extends('master')

@section('title')
    {{ $halaman }}
@endsection

@section('content')
<section class="section">
  <div class="section-header">
    <h1>Profile</h1>
    <div class="section-header-breadcrumb">
      <div class="breadcrumb-item active"><a href="/home">Dashboard</a></div>
      <div class="breadcrumb-item">Profile</div>
    </div>
  </div>
  <div class="section-body">
    <h2 class="section-title">Hi, {{Auth::user()->name}}!</h2>
    <p class="section-lead">
      Data informasi tentang dirimu dalam halaman ini.
    </p>

    <div class="row mt-sm-4">
      <div class="col-12 col-md-12 col-lg-5">
        <div class="card profile-widget">
          <div class="profile-widget-header">
            <img alt="image" src="{{asset('assets/img/avatar/avatar-1.png')}}" class="rounded-circle profile-widget-picture">
          </div>
          <div class="profile-widget-description">
              <div class="profile-widget-name">{{Auth::user()->name}} <div class="text-muted d-inline font-weight-normal"><div class="slash"></div> {{Auth::user()->email}}</div></div>
            </div>
        </div>
      </div>

      <div class="col-12 col-md-12 col-lg-7">
        <div class="card">
          <form method="post" class="needs-validation" novalidate="" action="profile">
              @csrf
            <div class="card-header">
              <h4 class="text-muted">Edit Profil</h4>
            </div>
            <div class="card-body">
                <div class="row">
                  <div class="form-group col-12">
                    <label>Nama</label>
                    {!! Form::hidden('id', Auth::user()->id) !!}
                    <input type="text" class="form-control" name="name" value="{{Auth::user()->name}}" required="">
                    <div class="invalid-feedback">
                      Please fill in the last name
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-12">
                    <label>Email</label>
                    <input type="email" class="form-control" name="email" value="{{Auth::user()->email}}" required="">
                    <div class="invalid-feedback">
                      Please fill in the email
                    </div>
                  </div>
                </div>
            </div>
            <div class="card-footer text-right mt-n4">
              <button class="btn btn-success btn-block">Save Changes</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
