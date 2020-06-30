@extends('master')

@section('title')
    {{ $halaman }}
@endsection

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>{{ $halaman }}</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item"><a href="/mapel">Mata Pelajaran</a></div>
                    <div class="breadcrumb-item active">{{ $halaman }}</div>
            </div>
        </div>
        <div class="section-body">
            <h2 class="section-title">Tambah Data Mata Pelajaran</h2>
                {!! Form::open(['url' => 'mapel']) !!}
                @include('mapel.form', ['submitButtonText' => 'Simpan'])
                {!! Form::close() !!}
        </div>
    </section>
@endsection
