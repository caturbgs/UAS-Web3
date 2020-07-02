@if ($errors->any())
    <div class="form-group {{ $errors->has('nama_kelas') ? 'has-error' : 'has-success' }}">
@else
    <div class="form-group">
@endif
    @if (isset($kelas))
        {!! Form::hidden('id', $kelas->id) !!}
    @endif
    {!! Form::label('nama_kelas', 'Nama Kelas: ', ['class' => 'control-label']) !!}
    {!! Form::text('nama_kelas', null, ['class' => 'form-control']) !!}
    @if($errors->has('nama_kelas'))
        <small class="help-block text-danger">{{ $errors->first('nama_kelas') }}</small>
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
