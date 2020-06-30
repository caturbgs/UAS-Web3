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
        <div class="breadcrumb-item"><a href="/kelas">Kelas</a></div>
            {{-- <div class="breadcrumb-item active">Detail kelas {{ $kelas->id }}</div> --}}
            <div class="breadcrumb-item active">Detail Kelas {{ $kelas->nama_kelas }}</div>
      </div>
    </div>
    <div class="section-body">
        <h2 class="section-title">Tampil Data Siswa Kelas {{ $kelas->nama_kelas }}</h2>
        <table class="table text-center table-striped table-hover" id="datatable">
            <thead>
                <tr>
                    <th>NIS</th>
                    <th>Nama Siswa</th>
                    <th>Tgl Lahir</th>
                    <th>Jenis Kelamin</th>
                    <th>No. Telepon</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($siswa as $s)
                    <tr>
                        <td>{{ $s->nis }}</td>
                        <td>{{ $s->nama_siswa }}</td>
                        <td>{{ ($s->tgl_lahir)->format('d-m-Y') }}</td>
                        <td>{{ $s->jk }}</td>
                        <td>{{ $s->no_telp }}</td>
                        <td>
                            <div class="box-button">
                                <a href="/siswa/{{$s->id}}" class="btn btn-success btn-sm btn-icon icon-left"><i class="fas fa-info-circle">
                                </i> Detail</a>
                            </div>
                            <div class="box-button">
                                <a href="/siswa/{{$s->id}}/edit" class="btn btn-warning btn-sm btn-icon icon-left"><i class="far fa-edit">
                                </i> Edit</a>
                            </div>
                            <div class="box-button">
                                {!! Form::open(['method' => 'DELETE', 'action' => ['SiswaController@destroy', $s->id]]) !!}
                                {{-- {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm btn-icon icon-left']) !!} --}}
                                <button type="submit" class="btn btn-danger btn-sm btn-icon icon-left"><i class="fa fa-trash" aria-hidden="true"></i> Delete</button>
                                {!! Form::close() !!}
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
  </section>
@endsection
