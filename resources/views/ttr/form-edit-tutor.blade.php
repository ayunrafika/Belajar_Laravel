@extends('layouts.main')

@section('content')
    <div class="text-dark p-2 mt-3">
        <h3> Edit Data Tutor </h3>
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

                        <form action="/ttr/detailtutor/edit/{{ $data['id'] }}" method="POST">
                            @method('PUT')
                            @csrf

                            <!-- Name input -->
                            <div class="form-outline mb-2">
                                <label class="form-label" for="nama">Nama</label>
                                <input type="text" id="nama" name="nama"
                                    class="form-control @error('nama') is-invalid @enderror"
                                    value="{{ old('nama', $data['nama']) }}">
                                @error('nama')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <!-- ID Tutor input -->
                            <div class="form-outline mb-2">
                                <label class="form-label" for="periode_mengajar">ID Tutor</label>
                                <input type="number" id="periode_mengajar" name="periode_mengajar"
                                    class="form-control @error('periode_mengajar') is-invalid @enderror"
                                    name="periode_mengajar" value="{{ old('periode_mengajar', $data['periode_mengajar']) }}"
                                    readonly>
                                @error('periode_mengajar')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <!-- Email input -->
                            <div class="form-outline mb-2">
                                <label class="form-label" for="email">Email</label>
                                <input type="email" id="email" name="email"
                                    class="form-control @error('email') is-invalid @enderror"
                                    value="{{ old('email', $data['email']) }}" readonly>
                                @error('email')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <!-- Periode Mengajar input -->
                            <div class="form-outline mb-2">
                                <label class="form-label" for="periode_mengajar">Periode Mengajar</label>
                                <input type="number" id="periode_mengajar" name="periode_mengajar"
                                    class="form-control @error('periode_mengajar') is-invalid @enderror"
                                    name="periode_mengajar"
                                    value="{{ old('periode_mengajar', $data['periode_mengajar']) }}">
                                @error('periode_mengajar')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <!-- Alamat input -->
                            <div class="form-outline mb-2">
                                <label class="form-label" for="alamat">Alamat</label>
                                <input type="text" id="alamat" name="alamat" rows="3"
                                    class="form-control @error('alamat') is-invalid @enderror"
                                    value="{{ old('alamat', $data['alamat']) }}">
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
                                        {{ $data['gender'] === 0 ? 'Perempuan' : 'Laki-laki' }} </option>
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
                                <label class="form-label" for="email">Usia</label>
                                <input type="number" id="usia" name="usia"
                                    class="form-control @error('usia') is-invalid @enderror"
                                    value="{{ old('usia', $data['usia']) }}">
                                @error('usia')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <!-- Bidang Keahlian input -->
                            <div class="form-outline mb-2">
                                <label class="form-label" for="bidang_keahlian">Bidang Keahlian</label>
                                <input type="text" id="bidang_keahlian" name="bidang_keahlian"
                                    class="form-control @error('bidang_keahlian') is-invalid @enderror"
                                    value="{{ old('bidang_keahlian', $data['bidang_keahlian']) }}">
                                @error('bidang_keahlian')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="col-lg-15 mt-2 py-2">
                                <x-button type="submit" text="Update" color="warning" />
                                <x-button-link url="/ttr/tutor" text="Kembali" btnColor="primary" />
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </section>
@endsection
