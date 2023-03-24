@extends('layouts.main')

@section('content')

<div class="text-dark p-2 mt-3">
    <h3> Selamat Datang, {{ $user }}! </h3>
    <h6> Copyright {{ date('Y') }} Universitas Terbuka </h6>
</div>

<div class="mt-4 p-2 mb-1">
    <h5> Data Anda </h5>

    <h6> Usia: {{ $usia }} </h6>

    {{-- if else if --}}
    @if ($usia >= 21)
        <h6> Kategori Usia: Dewasa </h6>
    @elseif ($usia >= 13)
        <h6> Kategori Usia: Remaja </h6>
    @else
        <h6> Kategori Usia: Anak-anak </h6>
    @endif

    <h6> Member: {{ $isMember }}
        @if ($isMember)
            (Anda Adalah Member)
        @else
            (Anda Bukan Member)
    </h6>
    @endif

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

    <div class="p-2 mb-1 bg-primary text-white">
        <h5> Daftar Mahasiswa </h5>
    </div>

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

    <x-button text = "Submit"/>
    
{{-- For Each
  @foreach ($dataMahasiswa as $item)
    <ul>
        <li>Nama  : {{ $item['nama']}} </li>
        <li>NIM  : {{ $item['NIM']}} </li>
        <li>Nilai  : {{ $item['nilai']}} </li>  
    </ul>
  @endforeach --}}

@endsection

