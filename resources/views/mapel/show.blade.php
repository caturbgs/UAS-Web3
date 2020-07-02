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
        <div class="breadcrumb-item"><a href="/home">Dashboard</a></div>
        <div class="breadcrumb-item"><a href="/mapel">Mata Pelajaran</a></div>
            <div class="breadcrumb-item active">Detail Mata Pelajaran</div>
      </div>
    </div>
    <div class="section-body">
        <h2 class="section-title">Tampil Data Mata Pelajaran</h2>
        <div class="card card-success">
            <div class="card-body">
                <h4 class="card-title">{{ $mapel->nama_mapel }}</h4>
                <h5 class="card-subtitle mb-2 text-muted">{{ $mapel->kd_mapel }}</h5>
                <div class="row">
                    <div class="col">
                        <p class="card-text">
                            Guru Ajar Mata Pelajaran
                        </p>
                    </div>
                    <div class="col">
                        @foreach ($mapel->guru as $guru)
                            @if ($guru->nama_guru)
                                <span><strong>{{ $guru->nip }} </strong> : {{ $guru->nama_guru }}</span><br>
                            @else
                                Tidak mengajar Mata Pelajaran.
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
  </section>
@endsection
