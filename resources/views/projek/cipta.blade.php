@extends('layouts.app')
@section('content')
<div class="row mt-4 mb-3">
        <div class="col">
            <form action="/pengurusan_maklumat/pendaftaran_projek" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row mx-4">
                    {{-- <div class="col-3 mb-2">
                        <label class="col-form-label">ID Projek:</label>
                    </div>
                    <div class="col-7 mb-2">
                        <input class="form-control" name="id_ruj_skala" type="text"/>
                    </div> --}}

                    <div class="col-3 mb-2">
                        <label class="col-form-label">Nama Projek:</label>
                    </div>
                    <div class="col-7 mb-2">
                        <input class="form-control" name="namaProjek" type="text" required/>
                    </div>

                    <div class="col-3 mb-2">
                        <label class="col-form-label">Alamat Projek:</label>
                    </div>
                    <div class="col-7 mb-2">
                        <input class="form-control" name="alamatProjek" type="text" required/>
                    </div>

                    <div class="col-3 mb-2">
                        <label class="col-form-label">Poskod:</label>
                    </div>
                    <div class="col-7 mb-2">
                        <input class="form-control" name="poskod" type="number" required/>
                    </div>

                    <div class="col-3 mb-2">
                        <label class="col-form-label">Bandar:</label>
                    </div>
                    <div class="col-7 mb-2">
                        <input class="form-control" name="bandar" type="text" required/>
                    </div>

                    <div class="col-3 mb-2">
                        <label class="col-form-label">Negeri:</label>
                    </div>
                    <div class="col-7 mb-2">
                        <input class="form-control" name="negeri" type="text" required/>
                    </div>

                    <div class="col-3 mb-2">
                        <label class="col-form-label">Keluasan Tapak:</label>
                    </div>
                    <div class="col-7 mb-2">
                        <input class="form-control" name="keluasanTapak" type="text" required/>
                    </div>

                    <div class="col-3 mb-2">
                        <label class="col-form-label">Jumlah Blok Bangunan:</label>
                    </div>
                    <div class="col-7 mb-2">
                        <input class="form-control" name="jumlahblokBangunan" type="text" required/>
                    </div>

                    <div class="col-3 mb-2">
                        <label class="col-form-label">Dokumen Sokongan:</label>
                    </div>
                    <div class="col-7 mb-2">
                        <input class="form-control" name="dokumenSokongan" type="file" required/>
                    </div>

                    {{-- <div class="col-3 mb-2">
                        <label class="col-form-label">Tarikh:</label>
                    </div>
                    <div class="col-7 mb-2">
                        <input class="form-control" name="tarikh" type="date"/>
                    </div> --}}

                    <div class="col-3 mb-2">
                        <label class="col-form-label">Tarikh Jangka Mula Pembinaan:</label>
                    </div>
                    <div class="col-7 mb-2">
                        <input class="form-control" name="tarikhJangkaMulaPembinaan" type="date" required/>
                    </div>

                    <div class="col-3 mb-2">
                        <label class="col-form-label">Tarikh Jangka Siap Pembinaan:</label>
                    </div>
                    <div class="col-7 mb-2">
                        <input class="form-control" name="tarikhJangkaSiapPembinaan" type="date" required/>
                    </div>

                    <div class="col-3 mb-2">
                        <label class="col-form-label">Kaedah Pelaksanaan:</label>
                    </div>
                    <div class="col-7 mb-2">
                        <input class="form-control" name="kaedahPelaksanaan" type="text" required/>
                    </div>

                    <div class="col-3 mb-2">
                        <label class="col-form-label">Jenis Perolehan:</label>
                    </div>
                    <div class="col-7 mb-2">
                        <input class="form-control" name="jenisPelaksanaan" type="text" required/>
                    </div>

                    <div class="col-3 mb-2">
                        <label class="col-form-label">Kos Projek:</label>
                    </div>
                    <div class="col-7 mb-2">
                        <input class="form-control" name="kosProjek" type="text" required/>
                    </div>

                    <div class="col-3 mb-2">
                        <label class="col-form-label">Jenis Projek:</label>
                    </div>
                    <div class="col-7 mb-2">
                        <select class="form-select" aria-label="Default select example" name="jenisProjek">
                            <option selected="">Sila Pilih</option>
                            <option value="Kerajaan">Kerajaan</option>
                            <option value="Swasta">Swasta</option>
                        </select>
                    </div>

                    {{-- <div class="col-3 mb-2">
                        <label class="col-form-label">Tarikh Kemas Kini:</label>
                    </div>
                    <div class="col-7 mb-2">
                        <input class="form-control" name="tarikh" type="date"/>
                    </div> --}}

                    <div class="col-3 mb-2">
                        <label class="col-form-label">Jenis Kategori:</label>
                    </div>
                    <div class="col-7 mb-2">
                        <select class="form-select" aria-label="Default select example" name="jenisKategoriProjek">
                            <option selected disabled="">Sila Pilih</option>
                            <option value="phJKR Bangunan">phJKR Bangunan</option>
                            <option value="phJKR Jalan">phJKR Jalan</option>
                            <option value="GPSS Bangunan">GPSS Bangunan</option>
                            <option value="GPSS Jalan">GPSS Jalan</option>
                        </select>
                    </div>

                   

                    
    
                    <div class="col-3 mb-2">
                        
                    </div>
                    <div class="col-7 mb-2">
                        <div class="row mt-4">
                            <div class="col-6">
                                <a href="/pengurusan_maklumat/senarai_pengguna" class="btn btn-outline-primary">Batal</a>
                            </div>
                            <div class="col-6 text-end">
                                <button type="submit" class="btn btn-primary">Daftar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection