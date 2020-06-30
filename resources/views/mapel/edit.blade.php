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
                    <div class="breadcrumb-item active">Edit Mata Pelajaran {{ $mapel->kd_mapel }}</div>
            </div>
        </div>
        <div class="section-body">
            <h2 class="section-title">Sunting Data Mata Pelajaran {{ $mapel->nama_mapel }}</h2>
                {!! Form::model($mapel, ['method' => 'PATCH', 'action' => ['MapelController@update', $mapel->id]]) !!}
                @include('mapel.form', ['submitButtonText' => 'Update'])
                {!! Form::close() !!}
        </div>
    </section>
@endsection
