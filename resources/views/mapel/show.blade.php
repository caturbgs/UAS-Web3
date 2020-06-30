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
        <div class="breadcrumb-item"><a href="/mapel">Mata Pelajaran</a></div>
            {{-- <div class="breadcrumb-item active">Detail kelas {{ $mapel->id }}</div> --}}
            <div class="breadcrumb-item active">Detail Mata Pelajaran {{ $mapel->kd_mapel }}</div>
      </div>
    </div>
    <div class="section-body">
        <h2 class="section-title">Tampil Data Mata Pelajaran {{ $mapel->kd_mapel }}</h2>
            <table class="table table-striped">
                <tr>
                    <th>Kode Mata Pelajaran</th>
                    <td><strong>{{ $mapel->kd_mapel }}</strong></td>
                </tr>
                <tr>
                    <th>Nama Mata Pelajaran</th>
                    <td>{{ $mapel->nama_mapel }}</td>
                </tr>
                <tr>
                    <th>Guru Ajar Mata Pelajaran</th>
                    <td>
                        @foreach ($mapel->guru as $guru)
                            @if ($guru->nama_guru)
                                <span><strong>{{ $guru->nip }} </strong> : {{ $guru->nama_guru }}</span><br>
                            @else
                                Tidak mengajar Mata Pelajaran.
                            @endif
                        @endforeach
                    </td>
                </tr>
            </table>
    </div>
  </section>
@endsection
