@extends('master')

@section('title')
    Dashborboard
@endsection

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Dashborboard</h1>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-primary">
                  {{-- <i class="far fa-user"></i> --}}
                  <i class="fas fa-user-friends    "></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Total Admin/User</h4>
                  </div>
                  <div class="card-body">
                    {{$user}}
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-danger">
                  <i class="far fa-user"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Total Siswa</h4>
                  </div>
                  <div class="card-body">
                    {{$siswa}}
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-warning">
                  <i class="fas fa-users"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Total Guru</h4>
                  </div>
                  <div class="card-body">
                    {{$guru}}
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-success">
                    <i class="fas fa-chalkboard-teacher"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Total Kelas</h4>
                  </div>
                  <div class="card-body">
                    {{$kelas}}
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-info">
                    <i class="fas fa-chalkboard-teacher"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Total Mata Pelajaran</h4>
                  </div>
                  <div class="card-body">
                    {{$mapel}}
                  </div>
                </div>
              </div>
            </div>
          </div>

        <div class="section-body">
        </div>
    </section>
@endsection
