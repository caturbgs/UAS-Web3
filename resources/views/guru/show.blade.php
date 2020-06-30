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
        <div class="breadcrumb-item"><a href="/guru">Guru</a></div>
            {{-- <div class="breadcrumb-item active">Detail guru {{ $guru->id }}</div> --}}
            <div class="breadcrumb-item active">Detail Guru</div>
      </div>
    </div>
    <div class="section-body">
        <h2 class="section-title">Tampil Data Detail Guru</h2>
            <table class="table table-striped">
                <tr>
                    <th>Foto</th>
                    <td>
                        @if (isset($guru->foto))
                            <img src="{{ asset('upload/' . $guru->foto) }}" alt="">
                        @else
                            @if($guru->jk == 'L')
                                <img src="{{ asset('upload/dummymale.jpg') }}" alt="">
                            @else
                                <img src="{{ asset('upload/dummyfemale.jpg') }}" alt="">
                            @endif
                        @endif
                    </td>
                </tr>
                <tr>
                    <th>NIP</th>
                    <td><strong>{{ $guru->nip }}</strong></td>
                </tr>
                <tr>
                    <th>Nama</th>
                    <td>{{ $guru->nama_guru }}</td>
                </tr>
                <tr>
                    <th>Tanggal Lahir</th>
                    <td>{{ $guru->tgl_lahir->format('d F Y') }}</td>
                </tr>
                <tr>
                    <th>Jenis Kelamin</th>
                    <td>{{ $guru->jk }}</td>
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
  </section>
@endsection
{{-- End 11.6.2 Langkah 3 --}}
