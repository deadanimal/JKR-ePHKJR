@extends('layouts.base')
@section('content')

<div class="row mb-3">
    <div class="col">
        <div class="card">
            <div class="card-body">
                <div class="col mb-">
                    <h2 class="h2 mb-3">BORANG Faq</h2>
                </div>

                <div class="col">
                    <hr class="text-primary mb-3">

                    <div class="row mt-4 mb-3">
                        <div class="col">
                            <form action="/pengurusan_maklumat/maklum_balas" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row mx-4">
                                    <div class="col-3 mb-2">
                                        <label class="col-form-label">Nama:</label>
                                    </div>
                                    <div class="col-7 mb-2">
                                        <input class="form-control" name="nama" type="text"/>
                                    </div>
                
                                    <div class="col-3 mb-2">
                                        <label class="col-form-label">E-mel:</label>
                                    </div>
                                    <div class="col-7 mb-2">
                                        <input class="form-control" name="email" type="text"/>
                                    </div>
                
                                    <div class="col-3 mb-2">
                                        <label class="col-form-label">Subjek:</label>
                                    </div>
                                    <div class="col-7 mb-2">
                                        <input class="form-control" name="subjek" type="text"/>
                                    </div>
                
                                    <div class="col-3 mb-2">
                                        <label class="col-form-label">Kategori:</label>
                                    </div>
                                    <div class="col-7 mb-2">
                                        <input class="form-control" name="kategori" type="text"/>
                                    </div>
                
                                    <div class="col-3 mb-2">
                                        <label class="col-form-label">Keterangan:</label>
                                    </div>
                                    <div class="col-7 mb-2">
                                        <textarea class="form-control" rows="5" name="/" type="text"></textarea>
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
</div>

<div class="row mb-3">
    <div class="col">
        <div class="card">
            <div class="card-body">
                <div class="col mb-">
                    <h2 class="h2 mb-3">SENARAI MAKLUM BALAS</h2>
                </div>

                <div class="row mt-2">
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <table class="table datatable table-striped" style="width:100%">
                                    <thead class="bg-primary">
                                        <tr>
                                            <th class="sort">Bil.</th>
                                            <th class="sort">Maklum Balas</th>
                                            <th class="sort">Kategori</th>
                                            <th class="sort">Status</th>
                                            <th class="sort">Tindakan</th>
                                        </tr>
                                    </thead>
                                    <tbody class="bg-white">
                                        <td class="sort">1</td>
                                        <td class="sort">Projek Highway JKR akan go live</td>
                                        <td class="sort">GPSS JALAN</td>
                                        <td class="sort">Lulus</td>
                                        <td>
                                            <div class="row">
                                                <div class="col-auto">
                                                    <a href="/satu_maklumbalas"
                                                        class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></a>
                                                </div>
                                                <div class="col-auto">
                                                    <form action="/pengurusan_maklumat/faq" method="post">
                                                        @method('DELETE')
                                                        @csrf
                                                        <button type="submit" class="btn btn-sm btn-outline-primary"><i class="fas fa-trash-alt"></i></button>
                                                    </form>
                                                </div>
                                            </div>
                                        </td>
                                        {{-- @foreach ($faq as $f)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $f->namaFAQ }}</td>
                                                <td>{{ $f->soalanFAQ }}</td>
                                                <td>{{ $f->JawapanFAQ }}</td>
                                                
                                                <td>
                                                    <div class="row">
                                                        <div class="col-auto">
                                                            <a href="/pengurusan_maklumat/faq/{{ $f->id }}/edit"
                                                                class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></a>
                                                        </div>
                                                        <div class="col-auto">
                                                            <form action="/pengurusan_maklumat/faq/{{ $f->id }}" method="post">
                                                                @method('DELETE')
                                                                @csrf
                                                                <button type="submit" class="btn btn-sm btn-outline-primary"><i class="fas fa-trash-alt"></i></button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach --}}
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection