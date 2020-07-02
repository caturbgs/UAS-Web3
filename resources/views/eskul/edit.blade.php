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
                <div class="breadcrumb-item"><a href="/eskul">Ekstrakulikuler</a></div>
                    <div class="breadcrumb-item active">Edit Ekstrakulikuler {{ $eskul->nama_eskul }}</div>
            </div>
        </div>
        <div class="section-body">
            <h2 class="section-title">Sunting Data eskul {{ $eskul->nama_eskul }}</h2>
                {!! Form::model($eskul, ['method' => 'PATCH', 'action' => ['EskulController@update', $eskul->id]]) !!}
                @include('eskul.form', ['submitButtonText' => 'Update'])
                {!! Form::close() !!}
        </div>
    </section>
@endsection
