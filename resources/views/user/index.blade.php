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
        <h2 class="section-title">Tampil Data User</h2>
        <a href="user/create" class="btn btn-primary btn-icon icon-left mb-3"><i class="fa fa-plus" aria-hidden="true"></i> Tambah Data User</a>
        @isset($user)
        <table class="table text-center" id="datatable">
            <thead>
                <tr>
                    <th>Nama User</th>
                    <th>Email User</th>
                    <th class="sorting_asc_disabled sorting_desc_disabled">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($user as $u)
                    <tr>
                        <td>{{ $u->name }}</td>
                        <td>{{ $u->email }}</td>
                        <td>
                            <div class="box-button">
                                <a href="user/{{$u->id}}" class="btn btn-success btn-sm btn-icon icon-left"><i class="fas fa-info-circle">
                                </i> Detail</a>
                            </div>
                            <div class="box-button">
                                <a href="user/{{$u->id}}/edit" class="btn btn-warning btn-sm btn-icon icon-left"><i class="far fa-edit">
                                </i> Edit</a>
                            </div>
                            <div class="box-button">
                                {!! Form::open(['method' => 'DELETE', 'action' => ['UserController@destroy', $u->id]]) !!}
                                <button type="submit" class="btn btn-danger btn-sm btn-icon icon-left"><i class="fa fa-trash" aria-hidden="true"></i> Delete</button>
                                {!! Form::close() !!}
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        @empty($user)
            <p>Tidak ada data user.</p>
        @endempty
    @endisset
    </div>
  </section>
@endsection
