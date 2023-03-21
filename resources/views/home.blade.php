@extends('layouts.main')

@section('content')


    <div class="text-bg-dark p-3">
        <h3>Selamat Datang {{ $user }}!</h3>
        <p>Copyright {{ date('Y') }} Universitas Terbuka </p>
    </div>

    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Home</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Introduction</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About Us</a>
                    </li>

                    <a class="btn btn-primary" href="/login" role="button">Login</a>


                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

    <h5>Usia : {{ $usia }} </h5>

    For Loop
    @for ($i = 1; $i < 10; $i++)
        item ke-{{ $i }}
    @endfor

    {{-- if else if --}}
    @if ($usia >= 21)
        <h5>Kategori Dewasa</h5>
    @elseif ($usia >= 13)
        <h5>Kategori Remaja</h5>
    @else
        <h5>Kategori Anak-anak</h5>
    @endif

    <h5>Member : {{ $isMember }} </h5>
    @if ($isMember)
        <h5>Anda Adalah Member</h5>
    @else
        <h5>Anda Bukan Member</h5>
    @endif

    {{-- Switch --}}
    @switch ($grade)
        @case($grade >= 90)
            <h5>Nilai Anda : A</h5>
        @break

        @case($grade >= 80)
            <h5>Nilai Anda : B</h5>
        @break

        @default
            <h5>Nilai Anda : C</h5>
    @endswitch

    <h2>Daftar Mahasiswa</h2>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">NIM</th>
                <th scope="col">Nilai</th>
                <th scope="col">Kategori</th>
                <th scope="col">Keterangan</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($dataMahasiswa as $item)
                <tr>
                    <th scope="row"> {{ $loop->index + 1 }} </th>
                    <td>{{ $item['nama'] }}</td>
                    <td>{{ $item['NIM'] }}</td>
                    <td>{{ $item['nilai'] }}</td>
                    <td>
                        @switch ($nilai = $item['nilai'])
                            @case($nilai >= 100)
                                A
                            @break

                            @case($nilai >= 90)
                                B
                            @break

                            @case($nilai >= 70)
                                C
                            @break

                            @default
                                D
                        @endswitch
                    </td>
                    <td>
                        @switch ($nilai = $item['nilai'])
                            @case($nilai >= 70)
                                LL
                            @break

                            @default
                                BL
                        @endswitch
                </tr>
            @endforeach
        </tbody>
    </table>

    @endsection


    {{-- For Each
      @foreach ($dataMahasiswa as $item)
        <ul>
            <li>Nama  : {{ $item['nama']}} </li>
            <li>NIM  : {{ $item['NIM']}} </li>
            <li>Nilai  : {{ $item['nilai']}} </li>  
        </ul>
      @endforeach --}}

    
