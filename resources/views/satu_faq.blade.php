@extends('layouts.base')
@section('content')

<div class="row mb-3">
    <div class="col">
        <div class="card">
            <div class="card-body">
                <div class="col mb-">
                    <h2 class="h2 mb-3">MAKLUMAT FAQ</h2>
                </div>

                <div class="row mx-3 mb-2">
                    
                    <div class="col-4 mb-2">
                        <h5 class="h6">Tajuk Projek:</h5>
                    </div>
                    <div class="col-8 mb-2">
                        <h5 class="h6" style="font-weight: 700;">Projek Jalan DASH</h5>
                    </div>

                    <div class="col-4 mb-2">
                        <h5 class="h6">Soalan:</h5>
                    </div>
                    <div class="col-8 mb-2">
                        <h5 class="h6" style="font-weight: 700;">Damansara Perdana</h5>
                    </div>

                    <div class="col-4 mb-2">
                        <h5 class="h6">Jawapan:</h5>
                    </div>
                    <div class="col-8 mb-2">
                        <h5 class="h6" style="font-weight: 700;">Lulus</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row mb-3">
    <div class="col">
        <div class="card">
            <div class="card-body">
                <div class="col mb-">
                    <h2 class="h2 mb-3">EDIT FAQ</h2>
                </div>

                <div class="row mt-4 mb-3">
                    <div class="col">
                        <form action="/pengurusan_maklumat/faq" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row mx-4">
                                <div class="col-3 mb-2">
                                    <label class="col-form-label">Tajuk FAQ:</label>
                                </div>
                                <div class="col-7 mb-2">
                                    <input class="form-control" name="namaFAQ" type="text"/>
                                </div>

                                <div class="col-3 mb-2">
                                    <label class="col-form-label">Soalan:</label>
                                </div>
                                <div class="col-7 mb-2">
                                    <input class="form-control" name="soalanFAQ" type="text"/>
                                </div>

                                <div class="col-3 mb-2">
                                    <label class="col-form-label">Jawapan:</label>
                                </div>
                                <div class="col-7 mb-2">
                                    <textarea class="form-control" rows="5" name="JawapanFAQ" type="text"> </textarea>
                                </div>

                                
                
                                <div class="col-3 mb-2">
                                    
                                </div>
                                <div class="col-7 mb-2">
                                    <div class="row mt-4">
                                        <div class="col-6">
                                            <a href="/pengurusan_maklumat/senarai_pengguna" class="btn btn-outline-primary">Batal</a>
                                        </div>
                                        <div class="col-6 text-end">
                                            <button type="submit" class="btn btn-primary">Tambah</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection