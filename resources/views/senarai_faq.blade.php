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
</div>

<div class="row mb-3">
    <div class="col">
        <div class="card">
            <div class="card-body">
                <div class="col mb-">
                    <h2 class="h2 mb-3">SENARAI FAQ</h2>
                </div>

                <div class="row mt-2">
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <table class="table datatable table-striped" style="width:100%">
                                    <thead class="bg-primary">
                                        <tr>
                                            <th class="sort">Bil.</th>
                                            <th class="sort">Tajuk FAQ</th>
                                            <th class="sort">Soalan</th>
                                            <th class="sort">Jawapan</th>
                                            <th class="sort">Tindakan</th>
                                        </tr>
                                    </thead>
                                    <tbody class="bg-white">
                                        <td class="sort">1</td>
                                        <td class="sort">Projek JKR akan go live</td>
                                        <td class="sort">Pasti Boleh go live</td>
                                        <td class="sort">Dengan Usaha PAsti boleh</td>
                                        <td>
                                            <div class="row">
                                                <div class="col-auto">
                                                    <a href="/satu_faq"
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