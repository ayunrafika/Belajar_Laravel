@extends('layouts.main')

@section('content')
    {{-- {{ auth()->user()->name }} --}}

    @if (session('success'))
        <div class="alert alert-primary alert-dismissible fade show" role="alert">
            <strong>{{ session('success') }}</strong>
            {{-- <strong>{{ session('success')[0] }}</strong>{{ session('success')[1] }} --}}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @elseif(session('deleted'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>{{ session('deleted') }}</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <h5><b>{{Auth::user()->name}}</b> login sebagai <b>{{Auth::user()->role}}</b>.</h5>   


    {{-- <div class="mt-4 p-2 mb-1">
        <h5> Data Anda </h5>

        <h6> Usia: {{ $usia }} </h6> --}}

    {{-- if else if --}}
    {{-- @if ($usia >= 21)
            <h6> Kategori Usia: Dewasa </h6>
        @elseif ($usia >= 13)
            <h6> Kategori Usia: Remaja </h6>
        @else
            <h6> Kategori Usia: Anak-anak </h6>
        @endif --}}

    {{-- <h6> Member: {{ $isMember }}
            @if ($isMember)
                (Anda Adalah Member)
            @else
                (Anda Bukan Member)
        </h6>
        @endif
    
    </div> --}}

    {{-- For Loop --}}
    {{-- @for ($i = 1; $i < 10; $i++)
    item ke-{{ $i }}
@endfor --}}

    {{-- Switch --}}
    {{-- @switch ($grade)
    @case($grade >= 90)
        <h5>Nilai Anda : A</h5>
    @break

    @case($grade >= 80)
        <h5>Nilai Anda : B</h5>
    @break

    @default
        <h5>Nilai Anda : C</h5>
@endswitch --}}

    <div class="container mt-5">
    </div>

    <div class="container mt-3 mb-3 p-1">
        <x-button-link text="Tambah Mahasiswa" url="/mhs/mahasiswa/tambah" style="background-color: #212c5f" />
    </div>

    <div class="p-2 mb-1 text-white" style="background-color: #f7c82d">
        <h5> Daftar Mahasiswa </h5>
    </div>

    <table class="table table-bordered mb-3">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">NIM</th>
                <th scope="col">Nilai</th>
                <th scope="col">Kategori</th>
                <th scope="col">Keterangan</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($dataMahasiswa as $item)
                <tr>
                    <th scope="row"> {{ $loop->index + 1 }} </th>
                    {{-- <th scope="row"> {{ $item['id'] }} </th> --}}
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
                    <td>
                        <x-button-link url="/mhs/detail/{{ $item['id'] }}" text="Detail"
                            style="background-color: #212c5f" />
                        <x-button-link url="/mhs/mahasiswa/edit/{{ $item['id'] }}" text="Edit"
                            style="background-color: #212c5f" />

                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{-- Pagination --}}
    {{ $dataMahasiswa->links() }}
@endsection
