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
        {{-- <div class="breadcrumb-item active">{{ $halaman }}</div> --}}
            {{-- <div class="breadcrumb-item"><a href="#">Parent Page</a></div> --}}
            {{-- <div class="breadcrumb-item">{{ $halaman }}</div> --}}
      </div>
    </div>

    <div class="section-body">
        <h2 class="section-title">Tampil Data Kelas</h2>
        <a href="kelas/create" class="btn btn-primary btn-icon icon-left mb-3"><i class="fa fa-plus" aria-hidden="true"></i> Tambah Data Kelas</a>
        @isset($kelas)
        <table class="table text-center" id="datatable">
            <thead>
                <tr>
                    <th>Nama Kelas</th>
                    <th>Jumlah Siswa</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($kelas as $k)
                    <tr>
                        <td>{{ $k->nama_kelas }}</td>
                        <td>{{ \App\Siswa::where(['id_kelas' => $k->id])->count() }}</td>
                        <td>
                            <div class="box-button">
                                <a href="kelas/{{$k->id}}" class="btn btn-success btn-sm btn-icon icon-left"><i class="fas fa-info-circle">
                                </i> Detail</a>
                            </div>
                            <div class="box-button">
                                <a href="kelas/{{$k->id}}/edit" class="btn btn-warning btn-sm btn-icon icon-left"><i class="far fa-edit">
                                </i> Edit</a>
                            </div>
                            <div class="box-button">
                                {!! Form::open(['method' => 'DELETE', 'action' => ['KelasController@destroy', $k->id]]) !!}
                                    <button type="submit" class="btn btn-danger btn-sm btn-icon icon-left"><i class="fa fa-trash" aria-hidden="true"></i> Delete</button>
                                {!! Form::close() !!}
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        @empty($kelas)
            <p>Tidak ada data kelas.</p>
        @endempty
    @endisset
    </div>
  </section>
@endsection
