@extends('master')

@section('title')
    {{ $halaman }}
@endsection

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>{{ $halaman }}</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item"><a href="/kelas">Kelas</a></div>
                    <div class="breadcrumb-item active">{{ $halaman }}</div>
            </div>
        </div>
        <div class="section-body">
            <h2 class="section-title">Tambah Data Kelas</h2>
                {!! Form::open(['url' => 'kelas']) !!}
                @include('kelas.form', ['submitButtonText' => 'Simpan'])
                {!! Form::close() !!}
        </div>
    </section>
@endsection
