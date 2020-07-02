@if ($errors->any())
    <div class="form-group {{ $errors->has('nip') ? 'has-error' : 'has-success' }}">
@else
    <div class="form-group">
@endif
    @if (isset($guru))
        {!! Form::hidden('id', $guru->id) !!}
    @endif
    {!! Form::label('nip', 'NIP: ', ['class' => 'control-label']) !!}
    {!! Form::text('nip', null, ['class' => 'form-control']) !!}
    @if($errors->has('nip'))
        <small class="help-block text-danger">{{ $errors->first('nip') }}</small>
    @endif
    </div>
@if ($errors->any())
    <div class="form-group {{ $errors->has('nama_guru') ? 'has-error' : 'has-success' }}">
@else
    <div class="form-group">
@endif
    {!! Form::label('nama_guru', 'Nama: ', ['class' => 'control-label']) !!}
    {!! Form::text('nama_guru', null, ['class' => 'form-control']) !!}
    @if($errors->has('nama_guru'))
        <small class="help-block text-danger">{{ $errors->first('nama_guru') }}</small>
    @endif
    </div>
@if ($errors->any())
    <div class="form-group {{ $errors->has('tgl_lahir') ? 'has-error' : 'has-success' }}">
@else
    <div class="form-group">
@endif
    {!! Form::label('tgl_lahir', 'Tanggal Lahir: ', ['class' => 'control-label']) !!}
    {!! Form::date('tgl_lahir', !empty($guru) ? $guru->tgl_lahir->format('Y-m-d') :
        null, ['class' => 'form-control', 'id' => 'tgl_lahir']) !!}
        @if($errors->has('tgl_lahir'))
            <small class="help-block text-danger">{{ $errors->first('tgl_lahir') }}</small>
        @endif
    </div>
@if ($errors->any())
    <div class="form-group {{ $errors->has('jk') ? 'has-error' : 'has-success' }}">
@else
    <div class="form-group">
@endif
    {!! Form::label('jk', 'Jenip Kelamin: ', ['class' => 'control-label']) !!}
    <div class="radio form-check">
        {!! Form::radio('jk', 'L', null, ['class' => 'form-check-input']) !!}
        {!! Form::label('jk', 'Laki-laki', ['class' => 'form-check-label']) !!}
    </div>
    <div class="radio form-check">
        {!! Form::radio('jk', 'P', null,['class' => 'form-check-input']) !!}
        {!! Form::label('jk', 'Perempuan', ['class' => 'form-check-label']) !!}
    </div>
    @if($errors->has('jk'))
        <small class="help-block text-danger">{{ $errors->first('jk') }}</small>
    @endif
    </div>
@if ($errors->any())
    <div class="form-group {{ $errors->has('jabatan') ? 'has-error' : 'has-success' }}">
@else
    <div class="form-group">
@endif
    {!! Form::label('jabatan', 'Jabatan: ', ['class' => 'control-label']) !!}
    {!! Form::text('jabatan', !empty($guru->jabatan->nama_jabatan) ? $guru->nama_jabatan :
    null, ['class' => 'form-control']) !!}
    @if($errors->has('jabatan'))
        <small class="help-block text-danger">{{ $errors->first('jabatan') }}</small>
    @endif
    </div>
@if ($errors->any())
    <div class="form-group {{ $errors->has('alamat') ? 'has-error' : 'has-success' }}">
@else
    <div class="form-group">
@endif
    {!! Form::label('alamat', 'Alamat: ', ['class' => 'control-label']) !!}
    {!! Form::textarea('alamat', null, ['class' => 'form-control']) !!}
    @if($errors->has('alamat'))
        <small class="help-block text-danger">{{ $errors->first('alamat') }}</small>
    @endif
    </div>
@if ($errors->any())
    <div class="form-group {{ $errors->has('no_telp') ? 'has-error' : 'has-success' }}">
@else
    <div class="form-group">
@endif
    {!! Form::label('no_telp', 'No. Telepon: ', ['class' => 'control-label']) !!}
    {!! Form::text('no_telp', null, ['class' => 'form-control']) !!}
    @if($errors->has('no_telp'))
        <small class="help-block text-danger">{{ $errors->first('no_telp') }}</small>
    @endif
    </div>
@if ($errors->any())
    <div class="form-group {{ $errors->has('email') ? 'has-error' : 'has-success' }}">
@else
    <div class="form-group">
@endif
    {!! Form::label('email', 'Email: ', ['class' => 'control-label']) !!}
    {{-- {!! Form::text('no_telp', null, ['class' => 'form-control']) !!} --}}
    {!! Form::text('email', null, ['class' => 'form-control']) !!}
    @if($errors->has('email'))
        <small class="help-block text-danger">{{ $errors->first('email') }}</small>
    @endif
    </div>
@if ($errors->any())
    {{-- <div class="form-group {{ $errors->has('mapel') ? 'has-error' : 'has-success' }}"> --}}
@else
    <div class="form-group">
@endif
    {!! Form::label('mapel', 'Mengajar Mata Pelajaran: ', ['class' => 'control-label']) !!}
    @if (count($mapel_list) > 0)
        {{-- @foreach ($mapel_list as $key => $value)
            <div class="checkbox form-check">
                <label class="form-check-label">
                    {!! Form::checkbox('mapel[]', $key, null, ['class' => 'form-check-input']) !!}
                    {{ $value }}
                </label>
            </div>
        @endforeach --}}
        {!! Form::select('mapel[]', $mapel_list, null, ['class' => 'form-control', 'id' => 'select2', 'multiple' => 'multiple']) !!}
    @else
        <p>Tidak ada pilihan Mengajar Mapel.</p>
    @endif
    {{-- @if($errors->has('mapel'))
        <small class="help-block text-danger">{{ $errors->first('mapel') }}</small>
    @endif --}}
    </div>
@if ($errors->any())
    <div class="form-group {{ $errors->has('foto') ? 'has-error' : 'has-success' }}">
@else
    <div class="form-group">
@endif
    {!! Form::label('foto', 'Foto: ', ['class' => 'control-label']) !!}
    <div class="text-center">
        {{-- Tampil Foto --}}
        @if (isset($guru))
            @if (isset($guru->foto))
                    <img src="{{ asset('upload/' . $guru->foto) }}" class="img-thumbnail" alt="">
            @else
                @if ($guru->jk == "L")
                    <img src="{{ asset('upload/dummymale.jpg') }}" class="img-thumbnail" alt="">
                @else
                    <img src="{{ asset('upload/dummyfemale.jpg') }}" class="img-thumbnail" alt="">
                @endif
            @endif
        @endif
    </div>
    <div class="custom-file mt-n4">
        {!! Form::file('foto', ['class' => 'custom-file-input']) !!}
        {!! Form::label('foto', 'Upload file ', ['class' => 'custom-file-label']) !!}
    @if($errors->has('foto'))
        <small class="help-block text-danger">{{ $errors->first('foto') }}</small>
    @endif
    </div>
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
