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
        <div class="breadcrumb-item"><a href="/siswa">Siswa</a></div>
            {{-- <div class="breadcrumb-item active">Detail Siswa {{ $siswa->id }}</div> --}}
            <div class="breadcrumb-item active">Detail Siswa</div>
      </div>
    </div>
    <div class="section-body">
        <h2 class="section-title">Tampil Data Detail Siswa</h2>
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-12">
                @if (isset($siswa->foto))
                    <img src="{{ asset('upload/' . $siswa->foto) }}" alt="" class="img-thumbnail">
                @else
                    @if($siswa->jk == 'L')
                        <img src="{{ asset('upload/dummymale.jpg') }}" alt="" class="img-thumbnail">
                    @else
                        <img src="{{ asset('upload/dummyfemale.jpg') }}" alt="" class="img-thumbnail">
                    @endif
                @endif
            </div>
            <div class="col-lg-9 col-md-6 col-sm-12">
                <div class="card card-success">
                    <div class="card-body">
                        <h4 class="card-title">{{ $siswa->nama_siswa }}</h4>
                        <h5 class="card-subtitle mb-2 text-muted">{{ $siswa->nis }}</h5>
                        {{-- <p class="card-text">
                            {{$siswa->tgl_lahir->format('d F Y')}}
                        </p> --}}
                        <div class="table-responsive-sm">
                            <table class="table table-striped table-hover table-condensed">
                                {{-- <tr>
                                    <th>NIS</th>
                                    <td><strong>{{ $siswa->nis }}</strong></td>
                                </tr>
                                <tr>
                                    <th>Nama</th>
                                    <td>{{ $siswa->nama_siswa }}</td>
                                </tr> --}}
                                <tr>
                                    <th>Tanggal Lahir</th>
                                    <td>{{ $siswa->tgl_lahir->format('d F Y') }}</td>
                                </tr>
                                <tr>
                                    <th>Jenis Kelamin</th>
                                    <td>
                                        @if($siswa->jk == 'L')
                                        Laki-laki
                                        @else
                                            Perempuan
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <th>Kelas</th>
                                    <td>{{ $siswa->kelas->nama_kelas }}</td>
                                </tr>
                                <tr>
                                    <th>Alamat</th>
                                    <td>{{ $siswa->alamat }}</td>
                                </tr>
                                <tr>
                                    <th>Nomor Telepon</th>
                                    <td>{{ $siswa->no_telp }}</td>
                                </tr>
                                <tr>
                                    <th>Estrakulikuler</th>
                                    <td>
                                        @foreach ($siswa->eskul as $eskul)
                                            @if ($eskul->nama_eskul)
                                                <span>{{ $eskul->nama_eskul }}</span><br>
                                            @else
                                                Tidak ikut Eskul.
                                            @endif
                                        @endforeach
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
  </section>
@endsection
{{-- End 11.6.2 Langkah 3 --}}
