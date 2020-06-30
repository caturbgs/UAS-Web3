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
                    <div class="breadcrumb-item active">Edit Kelas {{ $kelas->nama_kelas }}</div>
            </div>
        </div>
        <div class="section-body">
            <h2 class="section-title">Sunting Data kelas {{ $kelas->nama_kelas }}</h2>
                {!! Form::model($kelas, ['method' => 'PATCH', 'action' => ['KelasController@update', $kelas->id]]) !!}
                @include('kelas.form', ['submitButtonText' => 'Update'])
                {!! Form::close() !!}
        </div>
    </section>
@endsection
