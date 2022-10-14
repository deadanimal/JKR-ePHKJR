@extends('layouts.base')
@section('content')

<div class="row mb-3">
    <div class="col">
        <div class="card">
            <div class="card-body">
                <div class="col mb-">
                    <h2 class="h2 mb-3">BORANG MANUAL DAN STANDARD</h2>
                </div>

                <div class="col">
                    <hr class="text-primary mb-3">

                    <div class="row mt-4 mb-3">
                        <div class="col">
                            <form action="/pengurusan_maklumat/manual_dan_standard" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row mx-4">
                                    <div class="col-3 mb-2">
                                        <label class="col-form-label">Nama Manual & Standard:</label>
                                    </div>
                                    <div class="col-7 mb-2">
                                        <input class="form-control" name="namaManual" type="text"/>
                                    </div>
                
                                    <div class="col-3 mb-2">
                                        <label class="col-form-label">Muat Naik Dokumen Sokongan:</label>
                                    </div>
                                    <div class="col-7 mb-2">
                                        <input class="form-control" name="failManual" type="file"/>
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
                    <h2 class="h2 mb-3">SENARAI MANUAL DAN STANDARD</h2>
                </div>

                <div class="row mt-2">
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <table class="table datatable table-striped" style="width:100%">
                                    <thead class="bg-primary">
                                        <tr>
                                            <th class="sort">Bil.</th>
                                            <th class="sort">Nama Manual & Standard</th>
                                            <th class="sort">Muat</th>
                                            <th class="sort">Tindakan</th>
                                        </tr>
                                    </thead>
                                    <tbody class="bg-white">
                                        <td class="sort">1</td>
                                        <td class="sort">Panduan Projek JKR akan go live</td>
                                        <td class="sort">www.jkr.com.my</td>
                                        <td>
                                            <div class="row">
                                                <div class="col-auto">
                                                    <a href="/satu_manual"
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