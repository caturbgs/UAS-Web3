{{-- 11.6.2 Langkah 3 --}}
@extends('master')

@section('title')
    {{ $halaman }}
@endsection

@section('content')
<style>
    .box-button{
        display: inline-block;
    }
</style>
<section class="section">
    <div class="section-header">
      <h1>{{ $halaman }}</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item"><a href="/user">User</a></div>
            {{-- <div class="breadcrumb-item active">Detail kelas {{ $user->id }}</div> --}}
            <div class="breadcrumb-item active">Detail User</div>
      </div>
    </div>
    <div class="section-body">
        <h2 class="section-title">Tampil Data User</h2>
        <div class="card card-primary">
            <div class="card-body">
                <h4 class="card-title">{{ $user->name }}</h4>
                <h5 class="card-subtitle mb-2 text-muted">{{ $user->email }}</h5>
            </div>
        </div>
    </div>
  </section>
@endsection
