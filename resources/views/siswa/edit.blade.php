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
                <div class="breadcrumb-item"><a href="/siswa">Siswa</a></div>
                    <div class="breadcrumb-item active">Edit Siswa</div>
            </div>
        </div>
        <div class="section-body">
            <h2 class="section-title">Sunting Data Siswa</h2>
                {!! Form::model($siswa, ['method' => 'PATCH', 'files' => 'true', 'action' => ['SiswaController@update', $siswa->id]]) !!}
                @include('siswa.form', ['submitButtonText' => 'Update'])
                {!! Form::close() !!}
        </div>
    </section>
@endsection
