{{-- 11.6.2 Langkah 3 --}}
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
        <div class="breadcrumb-item"><a href="/guru">Guru</a></div>
            <div class="breadcrumb-item active">Detail Guru</div>
      </div>
    </div>
    <div class="section-body">
        <h2 class="section-title">Tampil Data Detail Guru</h2>
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-12">
                @if (isset($guru->foto))
                    <img src="{{ asset('upload/' . $guru->foto) }}" alt="" class="img-thumbnail">
                @else
                    @if($guru->jk == 'L')
                        <img src="{{ asset('upload/dummymale.jpg') }}" alt="" class="img-thumbnail">
                    @else
                        <img src="{{ asset('upload/dummyfemale.jpg') }}" alt="" class="img-thumbnail">
                    @endif
                @endif
            </div>
            <div class="col-lg-9 col-md-6 col-sm-12">
                <div class="card card-success">
                    <div class="card-body">
                        <h4 class="card-title">{{ $guru->nama_guru }}</h4>
                        <h5 class="card-subtitle mb-2 text-muted">{{ $guru->nip }}</h5>
                        <table class="table table-striped table-hover table-condensed">
                            <tr>
                                <th>Tanggal Lahir</th>
                                <td>{{ $guru->tgl_lahir->format('d F Y') }}</td>
                            </tr>
                            <tr>
                                <th>Jenis Kelamin</th>
                                <td>
                                    @if($guru->jk == 'L')
                                        Laki-laki
                                    @else
                                        Perempuan
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <th>Jabatan</th>
                                <td>{{ !empty($guru->jabatan->nama_jabatan) ? $guru->jabatan->nama_jabatan : '-' }}</td>
                            </tr>
                            <tr>
                                <th>Mengajar Mata Pelajaran</th>
                                <td>
                                    @foreach ($guru->mapel as $mapel)
                                        @if ($mapel->nama_mapel)
                                            <span><strong>{{ $mapel->kd_mapel }} </strong> : {{ $mapel->nama_mapel }}</span><br>
                                        @else
                                            Tidak mengajar Mata Pelajaran.
                                        @endif
                                    @endforeach
                                </td>
                            </tr>
                            <tr>
                                <th>Alamat</th>
                                <td>{{ $guru->alamat }}</td>
                            </tr>
                            <tr>
                                <th>Nomor Telepon</th>
                                <td>{{ $guru->no_telp }}</td>
                            </tr>
                            <tr>
                                <th>Email</th>
                                <td>{{ $guru->email }}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </section>
@endsection
