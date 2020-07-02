@if ($errors->any())
    <div class="form-group {{ $errors->has('name') ? 'has-error' : 'has-success' }}">
@else
    <div class="form-group">
@endif
    @if (isset($mapel))
        {!! Form::hidden('id', $mapel->id) !!}
    @endif
    {!! Form::label('name', 'Nama User: ', ['class' => 'control-label']) !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
    @if($errors->has('name'))
        <small class="help-block text-danger">{{ $errors->first('name') }}</small>
    @endif
    </div>
@if ($errors->any())
    <div class="form-group {{ $errors->has('email') ? 'has-error' : 'has-success' }}">
@else
    <div class="form-group">
@endif
    {!! Form::label('email', 'Email: ', ['class' => 'control-label']) !!}
    {!! Form::text('email', null, ['class' => 'form-control']) !!}
    @if($errors->has('email'))
        <small class="help-block text-danger">{{ $errors->first('email') }}</small>
    @endif
    </div>
    <div class="row">
        @if ($errors->any())
            <div class="form-group col-6 {{ $errors->has('password') ? 'has-error' : 'has-success' }}">
        @else
            <div class="form-group col-6">
        @endif
            {!! Form::label('password', 'Password: ', ['class' => 'control-label']) !!}
            {!! Form::password('password', ['class' => 'form-control']) !!}
            @if($errors->has('password'))
                <small class="help-block text-danger">{{ $errors->first('password') }}</small>
            @endif
            </div>
        @if ($errors->any())
            <div class="form-group col-6 {{ $errors->has('password_confirmation') ? 'has-error' : 'has-success' }}">
        @else
            <div class="form-group col-6">
        @endif
            {!! Form::label('password_confirmation', 'Konfirmasi Password: ', ['class' => 'control-label']) !!}
            {!! Form::password('password_confirmation', ['class' => 'form-control']) !!}
            @if($errors->has('password_confirmation'))
                <small class="help-block text-danger">{{ $errors->first('password_confirmation') }}</small>
            @endif
            </div>
    </div>
<div class="row mt-2">
    <span></span>
    <div class="col-8">
        {!! Form::submit($submitButtonText, ['class' => 'btn btn-success form-control']) !!}
    </div>
    <div class="col-4">
        <button type="reset" class="btn btn-danger form-control">Reset</button>
    </div>
</div>
