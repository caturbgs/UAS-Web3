@extends('master')

@section('title')
    {{ $halaman }}
@endsection

@section('content')
<section class="section">
    <div class="section-header">
      <h1>{{ $halaman }}</h1>
      <!-- Breadcrumb -->
      <div class="section-header-breadcrumb">
        {{-- <div class="breadcrumb-item active">{{ $halaman }}</div> --}}
            {{-- <div class="breadcrumb-item"><a href="#">Parent Page</a></div> --}}
            {{-- <div class="breadcrumb-item">{{ $halaman }}</div> --}}
      </div>
    </div>

    <div class="section-body">
        <h2 class="section-title">Tampil Data Siswa</h2>
                <div class="container" >
                </div>

                <div class="bottom-nav" style="margin-top: 1rem">
                    <div>
                        {{-- <a href="siswa/create" class="btn btn-primary">Tambah Siswa</a> --}}
                    </div>
                </div>
                {{-- End 11.7 Langkah 1--}}
    </div>
  </section>
@endsection
