@extends('layouts.main')

@section('content')
    <div class="text-dark p-2 mt-3">
        <h3> Edit Data Mahasiswa </h3>
    </div>

    <section class="text-center text-lg-start">
        <style>
            .rounded-t-5 {
                border-top-left-radius: 0.5rem;
                border-top-right-radius: 0.5rem;
            }

            @media (min-width: 992px) {
                .rounded-tr-lg-0 {
                    border-top-right-radius: 0;
                }

                .rounded-bl-lg-5 {
                    border-bottom-left-radius: 0.5rem;
                }
            }
        </style>

        <div class="card mb-3">
            <div class="row g-0 d-flex align-items-center">

                <div class="col-lg-8">
                    <div class="card-body py-5 px-md-5">

                        <form action="/mhs/mahasiswa/edit/{{ $data['id'] }}" method="POST">
                            @method('PUT')
                            @csrf
                            
                            {{-- generated --}}
                            {{-- <input type="hidden" name="token" value={{ csrf_token() }}> --}}

                            <!-- Name input -->
                            <div class="form-outline mb-2">
                                <label class="form-label" for="nama">Nama</label>
                                <input type="text" id="nama" name="nama"
                                    class="form-control @error('nama') is-invalid @enderror" value="{{ old('nama', $data['nama']) }}">
                                @error('nama')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <!-- NIM input -->
                            <div class="form-outline mb-2">
                                <label class="form-label" for="NIM">NIM</label>
                                <input type="number" id="NIM" name="NIM"
                                    class="form-control @error('NIM') is-invalid @enderror" name="NIM" value="{{ old('NIM', $data['NIM']) }}" readonly >
                                @error('NIM')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <!-- Nilai input -->
                            <div class="form-outline mb-2">
                                <label class="form-label" for="nilai">Nilai</label>
                                <input type="number" id="nilai" name="nilai"
                                    class="form-control @error('nilai') is-invalid @enderror" value="{{ old('nilai', $data['nilai']) }}">
                                @error('nilai')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <!-- Alamat input -->
                            <div class="form-outline mb-2">
                                <label class="form-label" for="alamat">Alamat</label>
                                <input type="text" id="alamat" name="alamat" rows="3"
                                    class="form-control @error('alamat') is-invalid @enderror" value="{{ old('alamat', $data['alamat']) }}">
                                @error('alamat')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <!-- Gender input -->
                            <div class="form-outline mb-2">
                                <label for="gender">Jenis Kelamin</label>
                                <select id="gender" name="gender"
                                    class="form-select @error('gender') is-invalid @enderror">
                                    <option value="{{ $data['gender'] }}" disabled selected>
                                    {{ $data['gender'] === 0 ? 'Perempuan' : 'Laki-laki'}} </option>
                                    <option value="0">Perempuan</option>
                                    <option value="1">Laki-laki</option>
                                </select>
                                @error('gender')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <!-- Usia input -->
                            <div class="form-outline mb-2">
                                <label class="form-label" for="nilai">Usia</label>
                                <input type="number" id="usia" name="usia"
                                    class="form-control @error('usia') is-invalid @enderror" value="{{ old('usia', $data['usia']) }}">
                                @error('usia')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="col-lg-15 mt-2 py-2">
                                <x-button type="submit" text="Update" color="warning" />
                                <x-button-link url="/mhs/mahasiswa" text="Kembali" btnColor="primary" />
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </section>
@endsection
