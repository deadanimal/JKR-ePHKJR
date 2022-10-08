@extends('layouts.app')
@section('content')
    <h1>Senarai Projek</h1>

    <div class="row mb-3">
        <div class="col text-end">
            <a href="/projek/cipta" class="btn btn-primary">Tambah</a>
        </div>
    </div>

    <table class="table table-bordered line-table" style="width:100%">
        <thead>
            <tr>
                <th class="text-center">ID Projek</th>
                <th class="text-center">Nama Projek</th>
                <th class="text-center">Alamat Projek</th>
                <th class="text-center">Status</th>
                <th class="text-center">Jenis Kategori</th>
                <th class="text-center">Tindakan</th> 
                <th class="text-center">Gugur Projek</th> 

            </tr>
        </thead>

        <tbody id="myTable">
            <tr class="text-black">
                <td style="text-align: center; vertical-align: middle;">1</td>
                <td style="text-align: center; vertical-align: middle;">SSS-123-456</td>
                <td style="text-align: center; vertical-align: middle;">JKR</td>
                <td style="text-align: center; vertical-align: middle;">Kuala Lumpur</td>
                <td style="text-align: center; vertical-align: middle;">Proses Penilaian</td>
                <td style="text-align: center; vertical-align: middle;">
                    <a class="btn btn-primary" href="/projek/satu" role="button"
                    data-toggle="tooltip" data-placement="bottom" title="Pilih Projek">Pilih</a>
                </td>
                <td style="text-align: center; vertical-align: middle;">Gugur</td>

                </tbody>
         </table> 






@endsection