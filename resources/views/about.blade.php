@extends('layouts.main')

@section('content')
    <div class="text-dark p-2 mt-3">
        <h3> Tentang Kami </h3>
    </div>

    <div class="card mb-3">
        <div class="row g-0 d-flex align-items-center">
            <div class="col-lg-4 d-none d-lg-flex">
                <img src="img/gedung-UT.jpg" alt="Gedung UT" width="400" class="w-100 rounded-t-5 rounded-tr-lg-0 rounded-bl-lg-5" />
            </div>
            <div class="col-lg-8">
                <div class="card-body py-5 px-md-5">

       
    <div class="container mt-4 mb-8 p-2">
        <h5> VISI: </h5>
        <h6> Menjadi Perguruan Tinggi Terbuka dan Jarak Jauh Berkualitas Dunia. </h6>
        <p></p>
        <h5> MISI: </h6>
        <p> Misi utama yang diamanatkan kepada UT melalui Keppres Nomor 41 Tahun 1984 yaitu UT menyediakan program pendidikan tinggi yang mudah diakses masyarakat. Selaras dengan tuntutan Tri Dharma perguruan tinggi dan perkembangan lingkungan strategis, maka rumusan misi UT adalah sebagai berikut. </p>
        <p> 1. Meningkatkan daya tampung pendidikan tinggi negeri; </p>
        <p> 2. Meningkatkan pemerataan akses pendidikan tinggi yang berkualitas dunia; </p>
        <p>3. Mengembangkan budaya belajar sepanjang hayat; </p>
        <p>4. Mendiseminasikan hasil kajian keilmuan dan pendidikan jarak jauh untuk mendukung pembangunan nasional dan global. </p>
    </div>
    <div class="container mt-2 mb-2">
        <h5> Unit Program Belajar Jarak Jauh Universitas Terbuka Yogyakarta </h5>
        <h6> Jl. Bantul 81, Mantrijeron, Yogyakarta </h6>
        <p> Email: ut-yogyakarta@ecampus.ut.ac.id </p>
    </div>
</div>
</div>
</div>
</div>
    
    
    {{-- <div class="container mt-5">
    </div>

    <div class="p-2 mb-1 text-white" style="background-color: #f7c82d">
        <h5> Daftar Kontak UPBJJ-UT </h5>
    </div>

    <div>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Telp</th>
                    <th scope="col">Alamat</th>
                </tr>
            <tbody>
                @foreach ($kontak as $item)
                <tr>
                    <th scope="row"> {{ $loop->index + 1 }} </th>
                    <td>{{ $item['nama'] }}</td>
                    <td>{{ $item['telp'] }}</td>
                    <td>{{ $item['alamat'] }}</td>
                </tr>
            </tbody>
            </thead>
        </table>
    </div> --}}

    {{-- <div class="container mb-1">
        <x-button text="Submit" color="primary" size="btn-lg" />
        <x-button text="Home" color="warning" size="btn-sm" />
        <x-button text="Login" color="success" />
    </div> --}}

     
@endsection
