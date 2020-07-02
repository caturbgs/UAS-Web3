@if ($errors->any())
    <div class="form-group {{ $errors->has('kd_mapel') ? 'has-error' : 'has-success' }}">
@else
    <div class="form-group">
@endif
    @if (isset($mapel))
        {!! Form::hidden('id', $mapel->id) !!}
    @endif
    {!! Form::label('kd_mapel', 'Kode Mata Pelajaran: ', ['class' => 'control-label']) !!}
    {!! Form::text('kd_mapel', null, ['class' => 'form-control']) !!}
    @if($errors->has('kd_mapel'))
        <small class="help-block text-danger">{{ $errors->first('kd_mapel') }}</small>
    @endif
    </div>
@if ($errors->any())
    <div class="form-group {{ $errors->has('nama_mapel') ? 'has-error' : 'has-success' }}">
@else
    <div class="form-group">
@endif
    {!! Form::label('nama_mapel', 'Nama Mata Pelajaran: ', ['class' => 'control-label']) !!}
    {!! Form::text('nama_mapel', null, ['class' => 'form-control']) !!}
    @if($errors->has('nama_mapel'))
        <small class="help-block text-danger">{{ $errors->first('nama_mapel') }}</small>
    @endif
    </div>
@if ($errors->any())
    {{-- <div class="form-group {{ $errors->has('guru') ? 'has-error' : 'has-success' }}"> --}}
@else
    <div class="form-group">
@endif
    {!! Form::label('guru', 'Guru Ajar: ', ['class' => 'control-label']) !!}
    @if (count($guru_list) > 0)
        {!! Form::select('guru[]', $guru_list, null, ['class' => 'form-control', 'id' => 'select2', 'multiple' => 'multiple']) !!}
    @else
        <p>Tidak ada pilihan Guru Ajar.</p>
    @endif
    {{-- @if($errors->has('guru'))
        <small class="help-block text-danger">{{ $errors->first('guru') }}</small>
    @endif --}}
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
