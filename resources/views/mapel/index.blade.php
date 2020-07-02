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
      <!-- Breadcrumb -->
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item"><a href="/home">Dashboard</a></div>
        <div class="breadcrumb-item active">Mata Pelajaran</div>
            {{-- <div class="breadcrumb-item"><a href="#">Parent Page</a></div> --}}
            {{-- <div class="breadcrumb-item">{{ $halaman }}</div> --}}
      </div>
    </div>

    <div class="section-body">
        <h2 class="section-title">Tampil Data Mata Pelajaran</h2>
        <a href="mapel/create" class="btn btn-success btn-icon icon-left mb-3"><i class="fa fa-plus" aria-hidden="true"></i> Tambah Data Mata Pelajaran</a>
        @isset($mapel)
        <table class="table text-center" id="datatable">
            <thead>
                <tr>
                    <th>Kode Mata Pelajaran</th>
                    <th>Nama Mata Pelajaran</th>
                    <th class="sorting_asc_disabled sorting_desc_disabled">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($mapel as $m)
                    <tr>
                        <td>{{ $m->kd_mapel }}</td>
                        <td>{{ $m->nama_mapel }}</td>
                        <td>
                            <div class="box-button">
                                <a href="mapel/{{$m->id}}" class="btn btn-success btn-sm btn-icon icon-left"><i class="fas fa-info-circle">
                                </i> Detail</a>
                            </div>
                            <div class="box-button">
                                <a href="mapel/{{$m->id}}/edit" class="btn btn-warning btn-sm btn-icon icon-left"><i class="far fa-edit">
                                </i> Edit</a>
                            </div>
                            <div class="box-button">
                                {!! Form::open(['method' => 'DELETE', 'action' => ['MapelController@destroy', $m->id]]) !!}
                                <button type="submit" class="btn btn-danger btn-sm btn-icon icon-left"><i class="fa fa-trash" aria-hidden="true"></i> Delete</button>
                                {!! Form::close() !!}
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        @empty($mapel)
            <p>Tidak ada data mapel.</p>
        @endempty
    @endisset
    </div>
  </section>
@endsection
