@extends('master')

@section('title')
    {{ $halaman }}
@endsection

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>{{ $halaman }}</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item"><a href="/home">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="/guru">Guru</a></div>
                    <div class="breadcrumb-item active">{{ $halaman }}</div>
            </div>
        </div>
        <div class="section-body">
            <h2 class="section-title">Tambah Data Guru</h2>
                {!! Form::open(['url' => 'guru', 'files' => 'true']) !!}
                @include('guru.form', ['submitButtonText' => 'Simpan'])
                {!! Form::close() !!}
        </div>
    </section>
@endsection
