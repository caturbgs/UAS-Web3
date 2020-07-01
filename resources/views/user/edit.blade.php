@extends('master')

@section('title')
    {{ $halaman }}
@endsection

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>{{ $halaman }}</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item"><a href="/user">User</a></div>
                    <div class="breadcrumb-item active">Edit User</div>
            </div>
        </div>
        <div class="section-body">
            <h2 class="section-title">Sunting Data User</h2>
                {!! Form::model($user, ['method' => 'PATCH', 'action' => ['UserController@update', $user->id]]) !!}
                @include('user.form', ['submitButtonText' => 'Update'])
                {!! Form::close() !!}
        </div>
    </section>
@endsection
