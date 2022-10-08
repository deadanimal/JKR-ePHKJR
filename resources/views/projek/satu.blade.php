@extends('layouts.app')
@section('content')
    <h1>Satu Projek</h1>

    <div class="row mt-4 mb-3">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <div class="row mx-4">
                        <div class="col-4 mb-2">
                            <h5 class="h6">ID Skala:</h5>
                        </div>
                        <div class="col-8 mb-2">
                            <h5 class="h6" style="font-weight: 700;">AAA-123-456</h5>
                        </div> 
                        <div class="col-4 mb-2">
                            <h5 class="h6">Nama Projek:</h5>
                        </div>
                        <div class="col-8 mb-2">
                            <h5 class="h6" style="font-weight: 700;"> Projek 1</h5>
                        </div>

                        <div class="col-4 mb-2">
                            <h5 class="h6">Alamat Projek:</h5>
                        </div>
                        <div class="col-8 mb-2">
                            <h5 class="h6" style="font-weight: 700;">Alamat 1</h5>
                        </div>

                        <div class="col-4 mb-2">
                            <h5 class="h6">Poskod:</h5>
                        </div>
                        <div class="col-8 mb-2">
                            <h5 class="h6" style="font-weight: 700;">111111</h5>
                        </div>

                        <div class="col-4 mb-2">
                            <h5 class="h6">Bandar:</h5>
                        </div>
                        <div class="col-8 mb-2">
                            <h5 class="h6" style="font-weight: 700;">Bandar 1</h5>
                        </div>

                        <div class="col-4 mb-2">
                            <h5 class="h6">Negeri:</h5>
                        </div>
                        <div class="col-8 mb-2">
                            <h5 class="h6" style="font-weight: 700;">Kuala Lumpur</h5>
                        </div>

                        <div class="col-4 mb-2">
                            <h5 class="h6">Keluasan Tapak:</h5>
                        </div>
                        <div class="col-8 mb-2">
                            <h5 class="h6" style="font-weight: 700;">10000 ha</h5>
                        </div>

                        <div class="col-4 mb-2">
                            <h5 class="h6">Jumlah Blok Bangunan:</h5>
                        </div>
                        <div class="col-8 mb-2">
                            <h5 class="h6" style="font-weight: 700;">3</h5>
                        </div>

                        <div class="col-4 mb-2">
                            <h5 class="h6">Dokumen Sokongan:</h5>
                        </div>
                        <div class="col-8 mb-2">
                            <h5 class="h6" style="font-weight: 700;">N/A</h5>
                        </div>

                        <div class="col-4 mb-2">
                            <h5 class="h6">Tarikh:</h5>
                        </div>
                        <div class="col-8 mb-2">
                            <h5 class="h6" style="font-weight: 700;">dd/mm/yy</h5>
                        </div>

                        <div class="col-4 mb-2">
                            <h5 class="h6">ID Status Projek:</h5>
                        </div>
                        <div class="col-8 mb-2">
                            <h5 class="h6" style="font-weight: 700;">N/A</h5>
                        </div>

                        <div class="col-4 mb-2">
                            <h5 class="h6">Tarikh Jangka Mula Pembinaan:</h5>
                        </div>
                        <div class="col-8 mb-2">
                            <h5 class="h6" style="font-weight: 700;">dd/mm/yy</h5>
                        </div>

                        <div class="col-4 mb-2">
                            <h5 class="h6">Tarikh Jangka Siap Pembinaan:</h5>
                        </div>
                        <div class="col-8 mb-2">
                            <h5 class="h6" style="font-weight: 700;">dd/mm/yy</h5>
                        </div>

                        <div class="col-4 mb-2">
                            <h5 class="h6">Kaedah Pelaksaan/Jenis Perolehan:</h5>
                        </div>
                        <div class="col-8 mb-2">
                            <h5 class="h6" style="font-weight: 700;">N/A</h5>
                        </div>

                        <div class="col-4 mb-2">
                            <h5 class="h6">Kod Projek:</h5>
                        </div>
                        <div class="col-8 mb-2">
                            <h5 class="h6" style="font-weight: 700;">SK100</h5>
                        </div>

                        {{-- <div class="col-4 mb-2">
                            <h5 class="h6">Tarikh Kemaskini:</h5>
                        </div>
                        <div class="col-8 mb-2">
                            <h5 class="h6" style="font-weight: 700;">dd/mm/yy</h5>
                        </div> --}}

                        <div class="col-4 mb-2">
                            <h5 class="h6">Jenis Projek:</h5>
                        </div>
                        <div class="col-8 mb-2">
                            <h5 class="h6" style="font-weight: 700;">Kerajaan/Swasta</h5>
                        </div>

                        <div class="col-4 mb-2">
                            <h5 class="h6">Jenis Kategori:</h5>
                        </div>
                        <div class="col-8 mb-2">
                            <h5 class="h6" style="font-weight: 700;">Kategori</h5>
                        </div>

                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <hr class="text-primary mb-3">

    <div class="row mt-4 mb-3">
        <div class="col">
            <form action="/pengurusan_maklumat/pendaftaran_projek" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row mx-4">
                    

                    <div class="col-3 mb-2">
                        <label class="col-form-label">Nama:</label>
                    </div>
                    <div class="col-7 mb-2">
                        <input class="form-control" name="namaProjek" type="text" required/>
                    </div>

                    <div class="col-3 mb-2">
                        <label class="col-form-label">Peranan:</label>
                    </div>
                    <div class="col-7 mb-2">
                        <input class="form-control" name="alamatProjek" type="text" required/>
                    </div>

                    <div class="col-7 mb-2">
                            <div class="col-6 text-center">
                                <button type="submit" class="btn btn-primary">Daftar</button>
                            </div>
                    </div>

                    
                </div>
            </form>
        </div>
    </div>

    <hr class="text-primary mb-3">





<!--Bangunan-->
<div class="mt-3">
    Bangunan
        <div class="col">
            <a class="btn btn-primary">Pembangunan Baru A</a>
            <a href="#" class="btn btn-primary">Pembangunan Baru B</a>
            <a href="#" class="btn btn-primary">Pembangunan Baru C</a>
            <a href="#" class="btn btn-primary">Pembangunan Baru D</a>
            <a href="#" class="btn btn-primary">Pembangunan Pemuliharaan/ Ubahsuai/ Naiktaraf (PUN) A</a>
            <a href="#" class="btn btn-primary">Pembangunan Pemuliharaan/ Ubahsuai/ Naiktaraf (PUN) B</a>
            <a href="#" class="btn btn-primary">Pembangunan Pemuliharaan/ Ubahsuai/ Naiktaraf (PUN) C</a>
            <a href="#" class="btn btn-primary">Pembangunan Pemuliharaan/ Ubahsuai/ Naiktaraf (PUN) D</a>
            <a href="#" class="btn btn-primary">Pembangunan Sedia Ada A</a>
            <a href="#" class="btn btn-primary">Pembangunan Sedia Ada B</a>
            <a href="#" class="btn btn-primary">Pembangunan Sedia Ada C</a>
            <a href="#" class="btn btn-primary">Pembangunan Sedia Ada D</a>
        </div>
</div>

<!-- GPSS Bangunan -->
<div>
    GPSS Bangunan
    <div>
        <a href="/projek/{{id}}/gpss/arkitek" class="btn btn-primary"> arkitek</a>
        <a href="/projek/{{id}}/gpss/elektrikal" class="btn btn-primary"> elektrikal</a>
        <a href="/projek/{{id}}/gpss/mekanikal" class="btn btn-primary"> mekanikal</a>
        <a href="/projek/{{id}}/gpss/sivil" class="btn btn-primary"> sivil</a>
        <!-- <a href="#" class="btn btn-primary"> Building Category 1</a>
        <a href="#" class="btn btn-primary"> Building Category 2</a>
        <a href="#" class="btn btn-primary"> Building Category 3</a> -->
    </div>
</div>

<!-- GPSS Jalan -->
<div>
    GPSS Jalan
    <div>
        <a href="#" class="btn btn-primary"> Road</a>
    </div>
</div>

<!-- Jalan -->
<div>
    Jalan
    <div>
        <a href="#" class="btn btn-primary">Reka Bentuk</a>
        <a href="#" class="btn btn-primary">Verifikasi</a>
    </div>
</div>
    

@endsection