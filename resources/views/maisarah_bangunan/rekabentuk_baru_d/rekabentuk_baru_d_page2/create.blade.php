@extends('layouts.base')

@section('content')

<div class="header">
    <b class="paparan-senarai-projek">> Penilaian</b>

        <hr class="line-6">

<div class="container-fluid">
    <div class="card-body">
        <div class="table-responsive scrollbar">
                <form action="/maisarah_bangunan/simpan_skor_baru" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('POST')

                    <!--------------------------------------- MarkahKT ---------------------------------------->
                    <table id="example" class="table table-bordered line-table display">
                        <thead class="text-white">
                            <tr class="pg-2" align="center" style="background-color:#EB5500">
                                <th rowspan="3">Kod</th>
                                <th rowspan="3">Kriteria</th>
                                <th rowspan="3" colspan="6">Kategori bangunan</th>
                                <th colspan="2">Pembangunan Baru</th>
                                <th rowspan="2">Dokumen Pembuktian</th>
                                <th rowspan="3" colspan="5">Ulasan/Maklumbalas</th>
                                <th rowspan="3" colspan="4">Muat Naik Dokumen Sokongan</th>
                            </tr>

                            <tr class="pg-2" align="center" style="background-color:#EB5500">
                                <th colspan="2">Markah</th>
                            </tr>
                        
                            <tr class="pg-2" align="center" style="background-color:#EB5500">
                                <th>MM</th>
                                <th>MR</th>
                                <th>Rekabentuk (Peringkat 2)</th>
                            </tr>

                            <tr class="pg-2" style="background-color:#EB5500">
                                <th>KT</th>
                                <th colspan="21">PENGURUSAN KECEKAPAN TENAGA DAN PENGGUNAAN TENAGA BOLEH BAHARU</th>
                            </tr>
                        </thead>

                            <!--KT1-->
                            <tr class="pg-2" align="center">
                                <td>KT1</td>
                                <td>Rekabentuk bumbung</td>
                                <td colspan="6"></td>
                                <td>2</td>
                                <td><input onblur="findTotalMR_KT()" class="MR_KT" type="number" min="0" max="2" id="markahKT1_MR" name="markahKT1_MR" autocapitalize="off" required/></td>
                                <td>
                                    <span>&#183; Katalog spesifikasi U-Value bahan</span><br>
                                    <span>&#183; Pengiraan U-Value bagi rekabentuk bumbung</span><br>
                                </td>
                                <td colspan="5"><textarea maxlength="255" rows="5" cols="5" class="form-control" placeholder="Ulasan/Maklumbalas"  id="markahKT1_ULASAN_PRB" name="markahKT1_ULASAN_PRB"></textarea></td>
                                <td colspan="4">
                                    <input  id="formFileSm" type="file">                                

                                    {{-- <form class="form">
                                        <label for="form__input" class="form__label">
                                            <input class="form__input" type="file" name="dokumenSokongan" id="form__input" value="{{$dokumen_sokongan ?? ''}}">
                                            <img src="/assets/img/illustrations/Group9047.png" alt="Error" class="form__icon">
                                            <span id="custom-text">No file chosen, yet.</span>
                                        </label>
                                    </form> --}}
                                </td>

                            </tr>

                            <!--KT2--><!--NO INPUT-->
                            <tr class="pg-2" align="center">
                                <td>KT2</td>
                                <td>Orientasi bangunan</td>
                                <td colspan="6"></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td colspan="5"></td>
                                <td colspan="4"></td> 
                            </tr>

                            <!--KT2.1-->
                            <tr class="pg-2" align="center">
                                <td>KT2.1</td>
                                <td>Fasad Utama bangunan yang menghadap orientasi utara-selatan</td>
                                <td colspan="6"></td>                           
                                <td>1</td>
                                <td><input onblur="findTotalMR_KT()" class="MR_KT" type="number" min="0" max="1" id="markahKT21_MR" name="markahKT21_MR" autocapitalize="off" required/></td>
                                <td>
                                    <span>&#183; Pelan tapak berserta penunjuk arah utara
                                        menunjukkan pelan bangunan dengan meletakkan sun-path diagram</span><br>
                                    <span>&#183; Lukisan siap bina</span><br>
                                </td>
                                <td colspan="5"><textarea maxlength="255" rows="5" cols="5" class="form-control" placeholder="Ulasan/Maklumbalas" id="markahKT21_ULASAN_PRB" name="markahKT21_ULASAN_PRB"></textarea></td>
                                <td colspan="4">
                                    <input  id="formFileSm" type="file">                                

                                    {{-- <form class="form">
                                        <label for="form__input" class="form__label">
                                            <input class="form__input" type="file" name="dokumenSokongan" id="form__input" value="{{$dokumen_sokongan ?? ''}}">
                                            <img src="/assets/img/illustrations/Group9047.png" alt="Error" class="form__icon">
                                            <span id="custom-text">No file chosen, yet.</span>
                                        </label>
                                    </form> --}}
                                </td>
                            </tr>

                            <!--KT2.2-->
                            <tr class="pg-2" align="center">
                                <td>KT2.2</td>
                                <td>Meminimumkan bukaan pada fasad yang menghadap timur dan barat</td>
                                <td colspan="6"></td>
                                <td>1</td>
                                <td><input onblur="findTotalMR_KT()" class="MR_KT" type="number" min="0" max="1" id="markahKT22_MR" name="markahKT22_MR" autocapitalize="off" required/></td>
                                <td>
                                    <span>&#183; Laporan penyenggaraan cerun</span><br>
                                </td>
                                <td colspan="5"><textarea maxlength="255" rows="5" cols="5" class="form-control" placeholder="Ulasan/Maklumbalas" id="markahKT22_ULASAN_PRB" name="markahKT22_ULASAN_PRB"></textarea></td>
                                <td colspan="4">
                                    <input  id="formFileSm" type="file">                                

                                    {{-- <form class="form">
                                        <label for="form__input" class="form__label">
                                            <input class="form__input" type="file" name="dokumenSokongan" id="form__input" value="{{$dokumen_sokongan ?? ''}}">
                                            <img src="/assets/img/illustrations/Group9047.png" alt="Error" class="form__icon">
                                            <span id="custom-text">No file chosen, yet.</span>
                                        </label>
                                    </form> --}}
                                </td>
                            </tr>

                            <!--KT3--><!--NO INPUT-->
                            <tr class="pg-2" align="center">
                                <td>KT3</td>
                                <td>Rekabentuk fasad</td>
                                <td colspan="6"></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td colspan="5"></td>
                                <td colspan="4"></td> 
                            </tr>

                            <!--KT3.1-->
                            <tr class="pg-2" align="center">
                                <td>KT3.1</td>
                                <td>Dinding luar bangunan</td>
                                <td colspan="6"></td>
                                <td>1</td>
                                <td><input onblur="findTotalMR_KT()" class="MR_KT" type="number" min="0" max="1" id="markahKT31_MR" name="markahKT31_MR" autocapitalize="off" required/></td>
                                <td>
                                    <span>&#183; Katalog spesifikasi U-Value bahan</span><br>
                                    <span>&#183; Pengiraan U-Value bagi rekabentuk dinding</span><br>
                                </td>
                                <td colspan="5"><textarea maxlength="255" rows="5" cols="5" class="form-control" placeholder="Ulasan/Maklumbalas" id="markahKT31_ULASAN_PRB" name="markahKT31_ULASAN_PRB"></textarea></td>
                                <td colspan="4">
                                    <input  id="formFileSm" type="file">                                

                                    {{-- <form class="form">
                                        <label for="form__input" class="form__label">
                                            <input class="form__input" type="file" name="dokumenSokongan" id="form__input" value="{{$dokumen_sokongan ?? ''}}">
                                            <img src="/assets/img/illustrations/Group9047.png" alt="Error" class="form__icon">
                                            <span id="custom-text">No file chosen, yet.</span>
                                        </label>
                                    </form> --}}
                                </td>

                            </tr>

                            <!--KT3.2-->
                            <tr class="pg-2" align="center">
                                <td>KT3.2</td>
                                <td>Pengadang Suria Luaran</td>
                                <td colspan="6"></td>
                                <td>1</td>
                                <td><input onblur="findTotalMR_KT()" class="MR_KT" type="number" min="0" max="1" id="markahKT32_MR" name="markahKT32_MR" autocapitalize="off" required/></td>
                                <td>
                                    <span>&#183; Katalog bahan</span><br>
                                </td>
                                <td colspan="5"><textarea maxlength="255" rows="5" cols="5" class="form-control" placeholder="Ulasan/Maklumbalas" id="markahKT32_ULASAN_PRB" name="markahKT32_ULASAN_PRB"></textarea></td>
                                <td colspan="4">
                                    <input  id="formFileSm" type="file">                                
                                </td>
                            </tr>

                            <!--KT4-->
                            <tr class="pg-2" align="center">
                                <td>KT4</td>
                                <td>OTTV & RTTV</td>
                                <td colspan="6"></td>
                                <td>5</td>
                                <td><input onblur="findTotalMR_KT()" class="MR_KT" type="number" min="0" max="5" id="markahKT4_MR" name="markahKT4_MR" autocapitalize="off" required/></td>
                                <td>
                                    <span>&#183; Pengiraan OTTV dan RTTV yang disahkan</span><br>
                                </td>
                                <td colspan="5"><textarea maxlength="255" rows="5" cols="5" class="form-control" placeholder="Ulasan/Maklumbalas" id="markahKT4_ULASAN_PRB" name="markahKT4_ULASAN_PRB"></textarea></td>
                                <td colspan="4"><input  id="formFileSm" type="file"></td>
                            </tr>

                            <!--KT5--><!--NO INPUT-->
                            <tr class="pg-2" align="center">
                                <td>KT5</td>
                                <td>Kecekapan pencahayaan</td>
                                <td colspan="6"></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td colspan="5"></td>
                                <td colspan="4"></td>
                            </tr>

                            <!--KT5.1-->
                            <tr class="pg-2" align="center">
                                <td>KT5.1</td>
                                <td>Zon Pencahayaan</td>
                                <td colspan="6"></td>
                                <td>3</td>
                                <td><input onblur="findTotalMR_KT()" class="MR_KT" type="number" min="0" max="3" id="markahKT51_MR" name="markahKT51_MR" autocapitalize="off" required/></td>
                                <td>
                                    <span>&#183; Lukisan pelan lantai bagi litar lampu yang telah di zon selari dengan pencahayaan semulajadi</span><br>
                                    <span>&#183; Lukisan pelan lantai bagi lokasi pemasangan sensor</span><br>
                                    <span>&#183; Pengiraan jumlah kawasan yang dikawal oleh pengesan cahaya automatik</span><br>
                                </td>
                                <td colspan="5"><textarea maxlength="255" rows="5" cols="5" class="form-control" placeholder="Ulasan/Maklumbalas" id="markahKT51_ULASAN_PRB" name="markahKT51_ULASAN_PRB"></textarea></td>
                                <td colspan="4"><input  id="formFileSm" type="file"></td>
                                {{-- <td colspan="4">
                                    <form class="form">
                                        <label for="form__input" class="form__label">
                                            <input class="form__input" type="file" name="dokumenSokongan" id="form__input" value="{{$dokumen_sokongan ?? ''}}">
                                            <img src="/assets/img/illustrations/Group9047.png" alt="Error" class="form__icon">
                                            <span id="custom-text">No file chosen, yet.</span>
                                        </label>
                                    </form>
                                </td> --}}

                            </tr>

                            <!--KT5.2-->
                            <tr class="pg-2" align="center">
                                <td>KT5.2</td>
                                <td>Kawalan Pencahayaan (M)</td>
                                <td colspan="6"></td>
                                <td>6</td>
                                <td><input onblur="findTotalMR_KT()" class="MR_KT" type="number" min="0" max="6" id="markahKT52_MR" name="markahKT52_MR" autocapitalize="off" required/></td>
                                <td>
                                    <span>&#183; Lukisan pelan lantai yang menunjukkan lokasi dan bilangan suis</span><br>
                                    <span>&#183; Lukisan skematik rekabentuk pendawaian</span><br>
                                </td>
                                <td colspan="5"><textarea maxlength="255" rows="5" cols="5" class="form-control" placeholder="Ulasan/Maklumbalas" id="markahKT52_ULASAN_PRB" name="markahKT52_ULASAN_PRB"></textarea></td>
                                <td colspan="4"><input  id="formFileSm" type="file"></td>
                                {{-- <td colspan="4">
                                    <form class="form">
                                        <label for="form__input" class="form__label">
                                            <input class="form__input" type="file" name="dokumenSokongan" id="form__input" value="{{$dokumen_sokongan ?? ''}}">
                                            <img src="/assets/img/illustrations/Group9047.png" alt="Error" class="form__icon">
                                            <span id="custom-text">No file chosen, yet.</span>
                                        </label>
                                    </form>
                                </td> --}}

                            </tr>

                            <!--KT5.3-->
                            <tr class="pg-2" align="center">
                                <td>KT5.3</td>
                                <td>Lighting Power Density (LPD)</td>
                                <td colspan="6"></td>
                                <td>1</td>
                                <td><input onblur="findTotalMR_KT()" class="MR_KT" type="number" min="0" max="1" id="markahKT53_MR" name="markahKT53_MR" autocapitalize="off" required/></td>
                                <td>
                                    <span>&#183; Brosur/katalog produk lampu</span><br>
                                    <span>&#183; Pengiraan dan jadual LPD (kaedah manual atau simulasi) bagi setiap ruang</span><br>
                                    <span>&#183; Lukisan pelan elektrik yang menunjukkan bilangan dan jenis lampu</span><br>
                                </td>
                                <td colspan="5"><textarea maxlength="255" rows="5" cols="5" class="form-control" placeholder="Ulasan/Maklumbalas" id="markahKT53_ULASAN_PRB" name="markahKT53_ULASAN_PRB"></textarea></td>
                                <td colspan="4"><input  id="formFileSm" type="file"></td>

                                {{-- <td colspan="4">
                                    <form class="form">
                                        <label for="form__input" class="form__label">
                                            <input class="form__input" type="file" name="dokumenSokongan" id="form__input" value="{{$dokumen_sokongan ?? ''}}">
                                            <img src="/assets/img/illustrations/Group9047.png" alt="Error" class="form__icon">
                                            <span id="custom-text">No file chosen, yet.</span>
                                        </label>
                                    </form>
                                </td> --}}
                            </tr>

                            <!--KT6--><!--NO INPUT-->
                            <tr class="pg-2" align="center">
                                <td>KT6</td>
                                <td>Sistem Penyaman udara dan pengudaraan mekanikal (ACMV)</td>
                                <td colspan="6">
                                         
                                </td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td colspan="5"></td>
                                <td colspan="4">
                                    {{-- <form class="form">
                                        <label for="form__input" class="form__label">
                                            <input class="form__input" type="file" name="dokumenSokongan" id="form__input" value="{{$dokumen_sokongan ?? ''}}">
                                            <img src="/assets/img/illustrations/Group9047.png" alt="Error" class="form__icon">
                                            <span id="custom-text">No file chosen, yet.</span>
                                        </label>
                                    </form> --}}
                                </td>
                            </tr>

                            <!--KT6.1-->
                            <tr class="pg-2" align="center">
                                <td>KT6.1</td>
                                <td>Coefficient of Performance (COP)</td>
                                <td colspan="6"></td>
                                <td>1</td>
                                <td><input onblur="findTotalMR_KT()" class="MR_KT" type="number" min="0" max="1" id="markahKT61_MR" name="markahKT61_MR" autocapitalize="off" required/></td>
                                <td>
                                    <span>&#183; Jadual peralatan (equipment schedule)</span><br>
                                    <span>&#183; Pengiraan anggaran COP</span><br>
                                    <span>&#183; Susun atur skematik ACMV</span><br>
                                    <span>&#183; Brosur pembekal</span><br>
                                </td>
                                <td colspan="5"><textarea maxlength="255" rows="5" cols="5" class="form-control" placeholder="Ulasan/Maklumbalas" id="markahKT61_ULASAN_PRB" name="markahKT61_ULASAN_PRB"></textarea></td>
                                <td colspan="4"><input  id="formFileSm" type="file"></td>

                                {{-- <td colspan="4">
                                    <form class="form">
                                        <label for="form__input" class="form__label">
                                            <input class="form__input" type="file" name="dokumenSokongan" id="form__input" value="{{$dokumen_sokongan ?? ''}}">
                                            <img src="/assets/img/illustrations/Group9047.png" alt="Error" class="form__icon">
                                            <span id="custom-text">No file chosen, yet.</span>
                                        </label>
                                    </form>
                                </td> --}}
                            </tr>

                            <!--KT6.2-->
                            <tr class="pg-2" align="center">
                                <td>KT6.2</td>
                                <td>Green Refrigerant</td>
                                <td colspan="6"></td>
                                <td>1</td>
                                <td><input onblur="findTotalMR_KT()" class="MR_KT" type="number" min="0" max="1" id="markahKT62_MR" name="markahKT62_MR" autocapitalize="off" required/></td>
                                <td>
                                    <span>&#183; Equipment schedule</span><br>
                                    <span>&#183; Skematik</span><br>
                                    <span>&#183; Brosur pembekal</span><br>
                                </td>
                                <td colspan="5"><textarea maxlength="255" rows="5" cols="5" class="form-control" placeholder="Ulasan/Maklumbalas" id="markahKT62_ULASAN_PRB" name="markahKT62_ULASAN_PRB"></textarea></td>
                                <td colspan="4"><input  id="formFileSm" type="file"></td>

                                {{-- <td colspan="4">
                                    <form class="form">
                                        <label for="form__input" class="form__label">
                                            <input class="form__input" type="file" name="dokumenSokongan" id="form__input" value="{{$dokumen_sokongan ?? ''}}">
                                            <img src="/assets/img/illustrations/Group9047.png" alt="Error" class="form__icon">
                                            <span id="custom-text">No file chosen, yet.</span>
                                        </label>
                                    </form>
                                </td> --}}
                            </tr>

                            <!--KT7-->
                            <tr class="pg-2" align="center">
                                <td>KT7</td>
                                <td>Penyusupan Udara</td>
                                <td colspan="6"></td>
                                <td>3</td>
                                <td><input onblur="findTotalMR_KT()" class="MR_KT" type="number" min="0" max="3" id="markahKT7_MR" name="markahKT7_MR" autocapitalize="off" required/></td>
                                <td>
                                    <span>&#183; Rekabentuk awalan yang menunjukkan zon berhawa dingin</span><br>
                                    <span>&#183; Jadual keperluan ruang (SOA)</span><br>
                                    <span>&#183; Pelan susun atur menunjukkan ante-room, ruang berhawa dingin dan tidak berhawa dingin</span><br>
                                    <span>&#183; Lukisan rekabentuk sistem penghawa dingin</span><br>

                                </td>
                                <td colspan="5"><textarea maxlength="255" rows="5" cols="5" class="form-control" placeholder="Ulasan/Maklumbalas" id="markahKT7_ULASAN_PRB" name="markahKT7_ULASAN_PRB"></textarea></td>
                                <td colspan="4"><input  id="formFileSm" type="file"></td>

                                {{-- <td colspan="4">
                                    <form class="form">
                                        <label for="form__input" class="form__label">
                                            <input class="form__input" type="file" name="dokumenSokongan" id="form__input" value="{{$dokumen_sokongan ?? ''}}">
                                            <img src="/assets/img/illustrations/Group9047.png" alt="Error" class="form__icon">
                                            <span id="custom-text">No file chosen, yet.</span>
                                        </label>
                                    </form>
                                </td> --}}
                            </tr>

                            <!--KT8-->
                            <tr class="pg-2" align="center">
                                <td>KT8</td>
                                <td>Tenaga Boleh Baharu (TBB)</td>
                                <td colspan="6"></td>
                                <td>6</td>
                                <td><input onblur="findTotalMR_KT()" class="MR_KT" type="number" min="0" max="6" id="markahKT8_MR" name="markahKT8_MR" autocapitalize="off" required/></td>
                                <td>
                                    <span>&#183; Mengemukakan lukisan rekabentuk sistem dan simulasi pengiraan
                                        bagi anggaran tenaga baharu yang boleh dihasilkan oleh sistem tersebut</span><br>
                                </td>
                                <td colspan="5"><textarea maxlength="255" rows="5" cols="5" class="form-control" placeholder="Ulasan/Maklumbalas" id="markahKT8_ULASAN_PRB" name="markahKT8_ULASAN_PRB"></textarea></td>
                                <td colspan="4"><input  id="formFileSm" type="file"></td>

                                {{-- <td colspan="4">
                                    <form class="form">
                                        <label for="form__input" class="form__label">
                                            <input class="form__input" type="file" name="dokumenSokongan" id="form__input" value="{{$dokumen_sokongan ?? ''}}">
                                            <img src="/assets/img/illustrations/Group9047.png" alt="Error" class="form__icon">
                                            <span id="custom-text">No file chosen, yet.</span>
                                        </label>
                                    </form>
                                </td> --}}
                            </tr>

                             <!--KT9-->
                             <tr class="pg-2" align="center">
                                <td>KT9</td>
                                <td>Prestasi Penggunaan Tenaga</td>
                                <td colspan="6"></td>
                                <td>10</td>
                                <td><input onblur="findTotalMR_KT()" class="MR_KT" type="number" min="0" max="10" id="markahKT9_MR" name="markahKT9_MR" autocapitalize="off" required/></td>
                                <td>
                                    <span>&#183; Laporan simulasi pengiraan pengurangan penggunaan tenaga</span><br>
                                </td>
                                <td colspan="5"><textarea maxlength="255" rows="5" cols="5" class="form-control" placeholder="Ulasan/Maklumbalas" id="markahKT9_ULASAN_PRB" name="markahKT9_ULASAN_PRB"></textarea></td>
                                <td colspan="4"><input  id="formFileSm" type="file"></td>

                                {{-- <td colspan="4">
                                    <form class="form">
                                        <label for="form__input" class="form__label">
                                            <input class="form__input" type="file" name="dokumenSokongan" id="form__input" value="{{$dokumen_sokongan ?? ''}}">
                                            <img src="/assets/img/illustrations/Group9047.png" alt="Error" class="form__icon">
                                            <span id="custom-text">No file chosen, yet.</span>
                                        </label>
                                    </form>
                                </td> --}}

                            </tr>

                             <!--KT10--><!--NO INPUT-->
                             <tr class="pg-2" align="center">
                                <td>KT10</td>
                                <td>Paparan dan kawalan</td>
                                <td colspan="6">        
                                </td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td colspan="5"></td>
                                <td colspan="4">
                                    {{-- <form class="form">
                                        <label for="form__input" class="form__label">
                                            <input class="form__input" type="file" name="dokumenSokongan" id="form__input" value="{{$dokumen_sokongan ?? ''}}">
                                            <img src="/assets/img/illustrations/Group9047.png" alt="Error" class="form__icon">
                                            <span id="custom-text">No file chosen, yet.</span>
                                        </label>
                                    </form> --}}
                                </td>
                            </tr>

                             <!--KT10.1-->
                             <tr class="pg-2" align="center">
                                <td>KT10.1</td>
                                <td>Pemasangan sub-meter digital</td>
                                <td colspan="6"></td>
                                <td>6</td>
                                <td><input onblur="findTotalMR_KT()" class="MR_KT" type="number" min="0" max="6" id="markahKT101_MR" name="markahKT101_MR" autocapitalize="off" required/></td>
                                <td>
                                    <span>a&#41; Baru</span><br>
                                    <span>&#183; Single line drawing</span><br>
                                    <span>&#183; Lukisan skematik</span><br>
                                    <span>&#183; Brosur/katalog produk</span><br>
                                    <span>b&#41; Sedia ada</span><br>
                                    <span>&#183; Bukti bergambar</span><br>
                                    <span>&#183; Lukisan siap bina kedudukan sub-meter pada papan suis utama dan
                                        suis kecil, papan agihan bagi setiap servis yang &#8805; 100A (TCL)</span><br>
                                </td>
                                <td colspan="5"><textarea maxlength="255" rows="5" cols="5" class="form-control" placeholder="Ulasan/Maklumbalas" id="markahKT101_ULASAN_PRB" name="markahKT101_ULASAN_PRB"></textarea></td>
                                <td colspan="4"><input  id="formFileSm" type="file"></td>

                                {{-- <td colspan="4">
                                    <form class="form">
                                        <label for="form__input" class="form__label">
                                            <input class="form__input" type="file" name="dokumenSokongan" id="form__input" value="{{$dokumen_sokongan ?? ''}}">
                                            <img src="/assets/img/illustrations/Group9047.png" alt="Error" class="form__icon">
                                            <span id="custom-text">No file chosen, yet.</span>
                                        </label>
                                    </form>
                                </td> --}}
                            </tr>

                             <!--KT10.2-->
                             <tr class="pg-2" align="center">
                                <td>KT10.2</td>
                                <td>Sistem Pengurusan Kawalan Tenaga</td>
                                <td colspan="6"></td>
                                <td>5</td>
                                <td><input onblur="findTotalMR_KT()" class="MR_KT" type="number" min="0" max="5" id="markahKT102_MR" name="markahKT102_MR" autocapitalize="off" required/></td>
                                <td>
                                    <span>&#183; Input/Output (I/O) point</span><br>
                                    <span>&#183; Gambar rajah litar</span><br>
                                    <span>&#183; Brosur dan spesifikasi produk</span><br>

                                </td>
                                <td colspan="5"><textarea maxlength="255" rows="5" cols="5" class="form-control" placeholder="Ulasan/Maklumbalas" id="markahKT102_ULASAN_PRB" name="markahKT102_ULASAN_PRB"></textarea></td>
                                <td colspan="4"><input  id="formFileSm" type="file"></td>

                                {{-- <td colspan="4">
                                    <form class="form">
                                        <label for="form__input" class="form__label">
                                            <input class="form__input" type="file" name="dokumenSokongan" id="form__input" value="{{$dokumen_sokongan ?? ''}}">
                                            <img src="/assets/img/illustrations/Group9047.png" alt="Error" class="form__icon">
                                            <span id="custom-text">No file chosen, yet.</span>
                                        </label>
                                    </form>
                                </td> --}}
                            </tr>

                             <!--KT10.3-->
                             <tr class="pg-2" align="center">
                                <td>KT10.3</td>
                                <td>Verifikasi sistem paparan dan kawalan</td>
                                <td colspan="6"></td>
                                <td>1</td>
                                <td><input onblur="findTotalMR_KT()" class="MR_KT" type="number" min="0" max="1" id="markahKT103_MR" name="markahKT103_MR" autocapitalize="off" required/></td>
                                <td>
                                    <span>&#183; Mengemukakan Pelan Verifikasi</span><br>
                                </td>
                                <td colspan="5"><textarea maxlength="255" rows="5" cols="5" class="form-control" placeholder="Ulasan/Maklumbalas" id="markahKT103_ULASAN_PRB" name="markahKT103_ULASAN_PRB"></textarea></td>
                                <td colspan="4"><input  id="formFileSm" type="file"></td>

                                {{-- <td colspan="4">
                                    <form class="form">
                                        <label for="form__input" class="form__label">
                                            <input class="form__input" type="file" name="dokumenSokongan" id="form__input" value="{{$dokumen_sokongan ?? ''}}">
                                            <img src="/assets/img/illustrations/Group9047.png" alt="Error" class="form__icon">
                                            <span id="custom-text">No file chosen, yet.</span>
                                        </label>
                                    </form>
                                </td> --}}
                            </tr>

                            <!--KT11-->
                            <tr class="pg-2" align="center">
                                <td>KT11</td>
                                <td>Pengujian dan pentauliahan</td>
                                <td colspan="6"></td>
                                <td>1</td>
                                <td><input onblur="findTotalMR_KT()" class="MR_KT" type="number" min="0" max="1" id="markahKT11_MR" name="markahKT11_MR" autocapitalize="off" required/></td>
                                <td>
                                    <span>&#183; Pelan pengujian dan pentauliahan</span><br>
                                </td>
                                <td colspan="5"><textarea maxlength="255" rows="5" cols="5" class="form-control" placeholder="Ulasan/Maklumbalas" id="markahKT11_ULASAN_PRB" name="markahKT11_ULASAN_PRB"></textarea></td>
                                <td colspan="4"><input  id="formFileSm" type="file"></td>

                                {{-- <td colspan="4">
                                    <form class="form">
                                        <label for="form__input" class="form__label">
                                            <input class="form__input" type="file" name="dokumenSokongan" id="form__input" value="{{$dokumen_sokongan ?? ''}}">
                                            <img src="/assets/img/illustrations/Group9047.png" alt="Error" class="form__icon">
                                            <span id="custom-text">No file chosen, yet.</span>
                                        </label>
                                    </form>
                                </td> --}}

                            </tr>

                            <!--JUMLAH MARKAHKT-->
                            <tr class="pg-2" align="center">
                                <th colspan="6">Jumlah markah KT</th>
                                <td colspan="3">55</td>
                                <td><input id="totalMR_KT" type="number" min="0" max="55" autocapitalize="off" id="markahTOTAL_KT_MR" name="markahTOTAL_KT_MR"/></td>
                                <td colspan="9"></td>
                            </tr> 
                    </table>

        </div>      <!--Scrollbar-->

                
                    <div class="mb-3 mt-3 text-center">
                        <button class="btn btn-primary" data-toggle="tooltip" data-placement="bottom" 
                        title="Simpan" type="submit">Simpan</button>
                        <a href="/maisarah_bangunan/baru_d_page3" type="button" class="btn btn-secondary">Seterusnya</a> 
                    </div>


                
                </form> <!--Form Markah--> 
    </div>
</div>




<!--JavaScript-->
            <!--Button Simpan TOOLTIPS-->
            <script>
                var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
                var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
                return new bootstrap.Tooltip(tooltipTriggerEl)
                })
            </script>  


            <!--MARKAH REKABENTUK (MR) CALCULATION-->
            <!--MR_TL : MARKAH REKABENTUK TL-->
            <!--MR_KT : MARKAH REKABENTUK KT-->
            <!--MR_SB : MARKAH REKABENTUK SB-->
            <!--MR_PA : MARKAH REKABENTUK PA-->
            <!--MR_PD : MARKAH REKABENTUK PD-->
            <!--MR_FL : MARKAH REKABENTUK FL-->
            <!--MR_IN : MARKAH REKABENTUK IN-->
            <script>
                function findTotalMR_TL(){
                    var totalMR_TL = document.getElementById('totalMR_TL');
                    var MR_TL = document.getElementsByClassName('MR_TL');
                    var sumMR_TL = 0;

                    for( var i = 0; i < MR_TL.length; i++ ){
                        sumMR_TL += Number(MR_TL[i].value);

                    //display the total of inputs
                    totalMR_TL.value = sumMR_TL;
                }
                    document.getElementById('totalMR_TL').value = sumMR_TL;
                }

                function findTotalMR_KT(){
                    var totalMR_KT = document.getElementById('totalMR_KT');
                    var MR_KT = document.getElementsByClassName('MR_KT');
                    var sumMR_KT = 0;

                    for( var i = 0; i < MR_KT.length; i++ ){
                        sumMR_KT += Number(MR_KT[i].value);

                    //display the total of inputs
                    totalMR_KT.value = sumMR_KT;
                    }
                    document.getElementById('totalMR_KT').value = sumMR_KT;
                }

                function findTotalMR_SB(){
                    var totalMR_SB = document.getElementById('totalMR_SB');
                    var MR_SB = document.getElementsByClassName('MR_SB');
                    var sumMR_SB = 0;

                    for( var i = 0; i < MR_SB.length; i++ ){
                        sumMR_SB += Number(MR_SB[i].value);

                    //display the total of inputs
                    totalMR_SB.value = sumMR_SB;
                    }
                    document.getElementById('totalMR_SB').value = sumMR_SB;
                }

                function findTotalMR_PA(){
                    var totalMR_PA = document.getElementById('totalMR_PA');
                    var MR_PA = document.getElementsByClassName('MR_PA');
                    var sumMR_PA = 0;

                    for( var i = 0; i < MR_PA.length; i++ ){
                        sumMR_PA += Number(MR_PA[i].value);

                    //display the total of inputs
                    totalMR_PA.value = sumMR_PA;
                    }
                    document.getElementById('totalMR_PA').value = sumMR_PA;
                }

                function findTotalMR_PD(){
                    var totalMR_PD = document.getElementById('totalMR_PD');
                    var MR_PD = document.getElementsByClassName('MR_PD');
                    var sumMR_PD = 0;

                    for( var i = 0; i < MR_PD.length; i++ ){
                        sumMR_PD += Number(MR_PD[i].value);

                    //display the total of inputs
                    totalMR_PD.value = sumMR_PD;
                    }
                    document.getElementById('totalMR_PD').value = sumMR_PD;
                }

                function findTotalMR_FL(){
                    var totalMR_FL = document.getElementById('totalMR_FL');
                    var MR_FL = document.getElementsByClassName('MR_FL');
                    var sumMR_FL = 0;

                    for( var i = 0; i < MR_FL.length; i++ ){
                        sumMR_FL += Number(MR_FL[i].value);

                    //display the total of inputs
                    totalMR_FL.value = sumMR_FL;
                    }
                    document.getElementById('totalMR_FL').value = sumMR_FL;
                }

                function findTotalMR_IN(){
                    var totalMR_IN = document.getElementById('totalMR_IN');
                    var MR_IN = document.getElementsByClassName('MR_IN');
                    var sumMR_IN = 0;

                    for( var i = 0; i < MR_IN.length; i++ ){
                        sumMR_IN += Number(MR_IN[i].value);

                    //display the total of inputs
                    totalMR_IN.value = sumMR_IN;
                    }
                    document.getElementById('totalMR_IN').value = sumMR_IN;
                }

                function findTotalMR(){
                    var TL = totalMR_TL.value || 0;
                    var KT = totalMR_KT.value || 0;
                    var SB = totalMR_SB.value || 0;
                    var PA = totalMR_PA.value || 0;
                    var PD = totalMR_PD.value || 0;
                    var FL = totalMR_FL.value || 0;
                    var IN = totalMR_IN.value || 0;
                    document.getElementById('totalMR').value = Number(TL) + Number(KT) + Number(SB) 
                    + Number(PA) + Number(PD) + Number(FL) + Number(IN);
                    // document.getElementById('totalMR').value = Number(TL);
                }

                document.addEventListener('keyup', function(){
                    findTotalMR_TL();
                    findTotalMR_KT();
                    findTotalMR_SB();
                    findTotalMR_PA();
                    findTotalMR_PD();
                    findTotalMR_FL();
                    findTotalMR_IN();
                    findTotalMR();
                });
            </script>
@endsection
