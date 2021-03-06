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
        <div class="breadcrumb-item active">Guru</div>
            {{-- <div class="breadcrumb-item"><a href="#">Parent Page</a></div> --}}
            {{-- <div class="breadcrumb-item">{{ $halaman }}</div> --}}
      </div>
    </div>

    <div class="section-body">
        <h2 class="section-title">Tampil Data guru</h2>
        <a href="guru/create" class="btn btn-success btn-icon icon-left mb-3"><i class="fa fa-plus" aria-hidden="true"></i> Tambah Data Guru</a>
        @isset($guru)
        <div class="table-responsive-sm">
            <table class="table text-center table-striped table-hover" id="datatable">
                <thead>
                    <tr>
                        <th>NIP</th>
                        <th>Nama Guru</th>
                        <th>Tgl Lahir</th>
                        <th>JK</th>
                        <th>No. Telepon</th>
                        <th>Email</th>
                        <th>Jabatan</th>
                        <th class="sorting_asc_disabled sorting_desc_disabled">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($guru as $g)
                        <tr>
                            <td>{{ $g->nip }}</td>
                            <td>{{ $g->nama_guru }}</td>
                            <td>{{ ($g->tgl_lahir)->format('d-m-Y') }}</td>
                            <td>
                                @if($g->jk == 'L')
                                    Laki-laki
                                @else
                                    Perempuan
                                @endif
                            </td>
                            <td>{{ $g->no_telp }}</td>
                            <td> {{ $g->email }} </td>
                            <td>{{ !empty($g->jabatan->nama_jabatan) ? $g->jabatan->nama_jabatan : '-' }} </td>
                            <td>
                                <div class="box-button">
                                    <a href="guru/{{$g->id}}" class="btn btn-success btn-sm btn-icon icon-left"><i class="fas fa-info-circle">
                                    </i> Detail</a>
                                </div>
                                <div class="box-button">
                                    <a href="guru/{{$g->id}}/edit" class="btn btn-warning btn-sm btn-icon icon-left"><i class="far fa-edit">
                                    </i> Edit</a>
                                </div>
                                <div class="box-button">
                                    {!! Form::open(['method' => 'DELETE', 'action' => ['GuruController@destroy', $g->id]]) !!}
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
        @empty($guru)
            <p>Tidak ada data guru.</p>
        @endempty
    @endisset
    </div>
  </section>
@endsection
