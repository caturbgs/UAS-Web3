@if ($errors->any())
    <div class="form-group {{ $errors->has('nama_eskul') ? 'has-error' : 'has-success' }}">
@else
    <div class="form-group">
@endif
    @if (isset($eskul))
        {!! Form::hidden('id', $eskul->id) !!}
    @endif
    {!! Form::label('nama_eskul', 'Nama Ekstrakulikuler: ', ['class' => 'control-label']) !!}
    {!! Form::text('nama_eskul', null, ['class' => 'form-control']) !!}
    @if($errors->has('nama_eskul'))
        <small class="help-block text-danger">{{ $errors->first('nama_eskul') }}</small>
    @endif
    </div>
<div class="row">
    <span></span>
    <div class="col-8">
        {!! Form::submit($submitButtonText, ['class' => 'btn btn-success form-control']) !!}
    </div>
    <div class="col-4">
        <button type="reset" class="btn btn-danger form-control">Reset</button>
    </div>
</div>
