@extends('master')

@section('title')
    {{ $halaman }}
@endsection

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>{{ $halaman }}</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item"><a href="/guru">Guru</a></div>
                    <div class="breadcrumb-item active">Edit Guru</div>
            </div>
        </div>
        <div class="section-body">
            <h2 class="section-title">Sunting Data Guru</h2>
                {!! Form::model($guru, ['method' => 'PATCH', 'files' => 'true', 'action' => ['GuruController@update', $guru->id]]) !!}
                @include('guru.form', ['submitButtonText' => 'Update'])
                {!! Form::close() !!}
        </div>
    </section>
@endsection
