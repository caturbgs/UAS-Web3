@if ($errors->any())
    <div class="form-group {{ $errors->has('nis') ? 'has-error' : 'has-success' }}">
@else
    <div class="form-group">
@endif
    @if (isset($siswa))
        {!! Form::hidden('id', $siswa->id) !!}
    @endif
    {!! Form::label('nis', 'NIS: ', ['class' => 'control-label']) !!}
    {!! Form::text('nis', null, ['class' => 'form-control']) !!}
    @if($errors->has('nis'))
        <small class="help-block text-danger">{{ $errors->first('nis') }}</small>
    @endif
    </div>
@if ($errors->any())
    <div class="form-group {{ $errors->has('nama_siswa') ? 'has-error' : 'has-success' }}">
@else
    <div class="form-group">
@endif
    {!! Form::label('nama_siswa', 'Nama: ', ['class' => 'control-label']) !!}
    {!! Form::text('nama_siswa', null, ['class' => 'form-control']) !!}
    @if($errors->has('nama_siswa'))
        <small class="help-block text-danger">{{ $errors->first('nama_siswa') }}</small>
    @endif
    </div>
@if ($errors->any())
    <div class="form-group {{ $errors->has('tgl_lahir') ? 'has-error' : 'has-success' }}">
@else
    <div class="form-group">
@endif
    {!! Form::label('tgl_lahir', 'Tanggal Lahir: ', ['class' => 'control-label']) !!}
    {!! Form::date('tgl_lahir', !empty($siswa) ? $siswa->tgl_lahir->format('Y-m-d') :
        null, ['class' => 'form-control', 'id' => 'tgl_lahir']) !!}
        @if($errors->has('tgl_lahir'))
            <small class="help-block text-danger">{{ $errors->first('tgl_lahir') }}</small>
        @endif
    </div>
@if ($errors->any())
    <div class="form-group {{ $errors->has('id_kelas') ? 'has-error' : 'has-success' }}">
@else
    <div class="form-group">
@endif
    {!! Form::label('id_kelas', 'Kelas: ', ['class' => 'control-label']) !!}
    @if (count($kelas_list) > 0)
        {!! Form::select('id_kelas', $kelas_list, null, ['class' => 'form-control', 'id' => 'id_kelas', 'placeholder' => 'Pilih Kelas']) !!}
    @else
        <p>Tidak ada pilihan kelas.</p>
    @endif
        @if($errors->has('id_kelas'))
            <small class="help-block text-danger">{{ $errors->first('id_kelas') }}</small>
        @endif
    </div>
@if ($errors->any())
    <div class="form-group {{ $errors->has('jk') ? 'has-error' : 'has-success' }}">
@else
    <div class="form-group">
@endif
    {!! Form::label('jk', 'Jenis Kelamin: ', ['class' => 'control-label']) !!}
    <div class="radio form-check">
        {!! Form::radio('jk', 'L', null, ['class' => 'form-check-input']) !!}
        {!! Form::label('jk', 'Laki-laki', ['class' => 'form-check-label']) !!}
    </div>
    <div class="radio form-check">
        {!! Form::radio('jk', 'P', null,['class' => 'form-check-input']) !!}
        {!! Form::label('jk', 'Perempuan', ['class' => 'form-check-label']) !!}
    </div>
    {{-- {!! Form::label('jenis_kelamin', 'Jenis Kelamin: ', ['class' => 'control-label']) !!}
    <div class="radio">
        <label>{!! Form::radio('jenis_kelamin', 'L') !!} Laki-laki</label>
    </div>
    <div class="radio">
        <label>{!! Form::radio('jenis_kelamin', 'P') !!} Perempuan</label>
    </div> --}}
    @if($errors->has('jk'))
        <small class="help-block text-danger">{{ $errors->first('jk') }}</small>
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
    {{-- <div class="form-group {{ $errors->has('eskul') ? 'has-error' : 'has-success' }}"> --}}
@else
    <div class="form-group">
@endif
    {!! Form::label('eskul', 'Esktrakulikuler: ', ['class' => 'control-label']) !!}
    @if (count($eskul_list) > 0)
        @foreach ($eskul_list as $key => $value)
            <div class="checkbox form-check">
                <label class="form-check-label">
                    {!! Form::checkbox('eskul[]', $key, null, ['class' => 'form-check-input']) !!}
                    {{ $value }}
                </label>
            </div>
        @endforeach
    @else
        <p>Tidak ada pilihan Esktrakulikuler.</p>
    @endif
    {{-- @if($errors->has('eskul'))
        <small class="help-block text-danger">{{ $errors->first('eskul') }}</small>
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
        @if (isset($siswa))
            @if (isset($siswa->foto))
                    <img src="{{ asset('upload/' . $siswa->foto) }}" class="img-thumbnail" alt="">
            @else
                @if ($siswa->jk == "L")
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
        {!! Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control']) !!}
    </div>
    <div class="col-4">
        <button type="reset" class="btn btn-danger form-control">Reset</button>
    </div>
</div>
