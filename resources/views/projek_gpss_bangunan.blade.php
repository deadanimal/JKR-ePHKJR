@extends('layouts.base')
@section('content')

<div class="row mb-3">
    <div class="col-6">
        <div class="card">
            <div class="card-body">
                <div class="row mx-3 mb-2">
                    <h2 class="mb-3">Maklumat Projek</h2>
                    <div class="col-4 mb-2">
                        <h5 class="h6">Nama Projek:</h5>
                    </div>
                    <div class="col-8 mb-2">
                        <h5 class="h6" style="font-weight: 700;">Projek GPSS Bangunan Kawasan Damansara Perdana</h5>
                    </div>

                    <div class="col-4 mb-2">
                        <h5 class="h6">Alamat Projek:</h5>
                    </div>
                    <div class="col-8 mb-2">
                        <h5 class="h6" style="font-weight: 700;">Damansara Jaya</h5>
                    </div>

                    <div class="col-4 mb-2">
                        <h5 class="h6">Status Projek:</h5>
                    </div>
                    <div class="col-8 mb-2">
                        <h5 class="h6" style="font-weight: 700;">Lulus</h5>
                    </div>
                </div>
            </div>
        </div>
        {{-- <div class="card mt-2">
            <div class="card-body">
                test
            </div>
        </div> --}}
    </div>
    <div class="col-6">
        <div class="card">
            <div class="card-body">
                <div class="row mx-3 mb-2">
                    <h2 class="mb-3">Lantik PC/PN</h2>
                    <div class="col-5 mb-2">
                        <label class="col-form-label">Nama:</label>
                    </div>
                    <div class="col-7 mb-2">
                        <select class="form-select" aria-label="Default select example" name="jenisProjek">
                            <option selected="">Sila Pilih</option>
                            <option value="Kerajaan">Kerajaan</option>
                            <option value="Swasta">Swasta</option>
                        </select>
                    </div>

                    <div class="col-5 mb-2">
                        <label class="col-form-label">Peranan:</label>
                    </div>
                    <div class="col-7 mb-2">
                        <select class="form-select" aria-label="Default select example" name="jenisProjek">
                            <option selected="">Sila Pilih</option>
                            <option value="Kerajaan">Kerajaan</option>
                            <option value="Swasta">Swasta</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        {{-- <div class="card mt-2">
            <div class="card-body">
                test
            </div>
        </div> --}}
    </div>
</div>

<div class="row mb-3">
    <div class="col">
        <div class="card">
            <div class="card-body">
                <div class="col mb-">
                    <h2 class="h2 mb-3">RUMUSAN SKOR KAD</h2>
                </div>

                <div class="col">
                    <form action= "/penilaian_reka_bentuk_gpss/skor_penilaian_arkitek/{id}" method="post" enctype="multipart/form-data">
                        @method('POST')
                          @csrf
                    
                          {{-- <div class="col">
                            <table class="table table-bordered line-table text-center" style="width: 100%">
                              <thead class="text-white bg-orange-jkr">
                                
                                <tr>
                                  <th colspan="2">OVERALL GREEN PRODUCT SCORING SHEET</th>
                                </tr>
                                <tr>
                                  <th>Green Product Scoring Sheet</th>
                                </tr>
                              </thead>
                              <tbody>
        
                               <table>
                                <div class="row d-flex justify-content-center">
                                    <div class="card p-3  py-4">
                                        <div class="row g-3 mt-2">
                                            <div class="col-md-3">
                                                <label for="nama_projek">Name of evaluator:</label>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" placeholder="Name of evaluator">
                                            </div>
                                        </div>
                                        <div class="row g-3 mt-2">
                                            <div class="col-md-3">
                                                <label for="nama_projek">Date:</label>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" placeholder="DD/MM/YYYY">
                                            </div>
                                        </div>
                                        <div class="row g-3 mt-2">
                                            <div class="col-md-3">
                                                <label for="nama_projek">Time:</label>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" placeholder="00:00:00">
                                            </div>
                                        </div>
                                        <div class="row g-3 mt-2">
                                            <div class="col-md-3">
                                                <label for="nama_projek">Project:</label>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="number" class="form-control" placeholder="Project">
                                            </div>
                                        </div>
                                        <div class="row g-3 mt-2">
                                            <div class="col-md-3">
                                                <label for="nama_projek">Building/Road:</label>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="number" class="form-control" placeholder="Building/Road">
                                            </div>
                                        </div>
                                        <div class="row g-3 mt-2">
                                            <div class="col-md-3">
                                                <label for="nama_projek">Work component:</label>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="number" class="form-control" placeholder="Dropdown">
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}
        
                                <div>
                                    <div>
                                        <form action="calculation">
                                          <table>
                                            <div class="row3 mx-4 table-responsive scrollbar">
                                                <div class="col">
                                                  <table class="table table-bordered line-table text-center" style="width: 100%">
                                                    <thead class="text-white bg-orange-jkr">
                                                      <tr>
                                            
                                                        
                                                        <th >No.</th>
                                                        <th >Work Element</th>
                                                        <th >Total Point Allocated</th>
                                                        <th colspan="2">Total Points Requested</th>
                                                        <th >Total Points Awarded</th>
                                                        <th>Weightage (Refer Annex C)</th>
                                                        <th>Percentage of Green Product Scoring Score</th>
                                                        <th >Remarks</th>
                                         
                                                      </tr>
                                                      <tr>
                                                        <th></th>
                                                        <th></th>
                                                        <th></th>
                                                        <th >Design stage</th>
                                                        <th >Construction stage</th>
                                                        <th></th>
                                                        <th></th>
                                                        <th></th>
                                                        <th></th>
                                                      </tr>
                                    
                                                    </thead>
                                                    <tbody>
                                    
                                                      <tr>
                                                        <th >1</th>
                                                        <th >Architectural (Aw)</th>
                                                        <th>232</th>
                                                        <th></th>
                                                        {{-- <th>{{ $gpss_bangunan->markahPRAwRoof + $gpss_bangunan->markahPRAwWall 
                                                            + $gpss_bangunan->markahPRAwWindow + $gpss_bangunan->markahPRAwDoor+ $gpss_bangunan->markahPRAwFloor
                                                            + $gpss_bangunan->markahPRAwSystem
                                                            + $gpss_bangunan->markahPRAwSanitary}} </th> --}}
                                                        <th><input onblur="roadWorks()" type="number" min="0" max="2" class="road" name="" id=""></th>
                                                        <th><input onblur="roadWorks()" type="number" min="0" max="2" class="road" name="" id=""></th>
                                                        <th>0.00</th>
                                                        <th>0.00%</th>
                                                        <th><input onblur="roadWorks()" type="text" min="0" max="2" class="road" name="" id=""></th>
                                                        
                                                      </tr>
        
                                                      <tr>
                                                        <th >2</th>
                                                        <th >Mechanical (Mw)</th>
                                                        <th>34</th>
                                                        <th></th>
                                                        {{-- <th>{{ $gpss_bangunan->markahPRMw }} </th> --}}
                                                        <th><input onblur="roadWorks()" type="number" min="0" max="2" class="road" name="" id=""></th>
                                                        <th><input onblur="roadWorks()" type="number" min="0" max="2" class="road" name="" id=""></th>
                                                        <th>0.00</th>
                                                        <th>0.00%</th>
                                                        <th><input onblur="roadWorks()" type="text" min="0" max="2" class="road" name="" id=""></th>
                                                        
                                                      </tr>
        
                                                      <tr>
                                                        <th >3</th>
                                                        <th >Electrical (Ew)</th>
                                                        <th>110</th>
                                                        <th></th>
                                                        {{-- <th>{{ $gpss_bangunan->markahPREw }}</th> --}}
                                                        <th><input onblur="roadWorks()" type="number" min="0" max="2" class="road" name="" id=""></th>
                                                        <th><input onblur="roadWorks()" type="number" min="0" max="2" class="road" name="" id=""></th>
                                                        <th>0.33</th>
                                                        <th>0.00%</th>
                                                        <th><input onblur="roadWorks()" type="text" min="0" max="2" class="road" name="" id=""></th>
                                                        
                                                      </tr>
        
                                                      <tr>
                                                        <th >4</th>
                                                        <th >Civil & Structural (Cw)</th>
                                                        <th>124</th>
                                                        <th></th>
                                                        {{-- <th>{{ $gpss_bangunan->markahPRCw }}</th> --}}
                                                        <th><input onblur="roadWorks()" type="number" min="0" max="2" class="road" name="" id=""></th>
                                                        <th><input onblur="roadWorks()" type="number" min="0" max="2" class="road" name="" id=""></th>
                                                        <th>0.00</th>
                                                        <th>0.00%</th>
                                                        <th><input onblur="roadWorks()" type="text" min="0" max="2" class="road" name="" id=""></th>
                                                        
                                                      </tr>
        
                                                      <tr>
                                                        <th >5</th>
                                                        <th >Road & Geotechnial (Rw)</th>
                                                        <th>98</th>
                                                        <th><input onblur="roadWorks()" type="number" min="0" max="2" class="road" name="" id=""></th>
                                                        <th><input onblur="roadWorks()" type="number" min="0" max="2" class="road" name="" id=""></th>
                                                        <th><input onblur="roadWorks()" type="number" min="0" max="2" class="road" name="" id=""></th>
                                                        <th>0.33</th>
                                                        <th>0.00%</th>
                                                        <th><input onblur="roadWorks()" type="text" min="0" max="2" class="road" name="" id=""></th>
                                                        
                                                      </tr>
        
                                                      <tr>
                                                        <th >6</th>
                                                        <th >Structural(Bridge) (Sw)</th>
                                                        <th>12</th>
                                                        <th></th>
                                                        {{-- <th>{{ $gpss_bangunan->markahPRSw }}</th> --}}
                                                        <th><input onblur="roadWorks()" type="number" min="0" max="2" class="road" name="" id=""></th>
                                                        <th><input onblur="roadWorks()" type="number" min="0" max="2" class="road" name="" id=""></th>
                                                        <th>0.33</th>
                                                        <th>0.00%</th>
                                                        <th><input onblur="roadWorks()" type="text" min="0" max="2" class="road" name="" id=""></th>
                                                      </tr>
        
                                                      <tr>
                                                        <th ></th>
                                                        <th >Total points</th>
                                                        <th>610</th>
                                                        <th></th>
                                                        {{-- <th> {{$gpss_bangunan->markahPRAwRoof + $gpss_bangunan->markahPRAwWall + $gpss_bangunan->markahPRAwWindow + $gpss_bangunan->markahPRAwDoor + $gpss_bangunan->markahPRAwSystem + $gpss_bangunan->markahPRAwSanitary + $gpss_bangunan->markahPRMw + $gpss_bangunan->markahPREw + $gpss_bangunan->markahPRCw + $gpss_bangunan->markahPRSw}} </th> --}}
                                                        <th><input onblur="roadWorks()" type="number" min="0" max="2" class="road" name="" id=""></th>
                                                        <th><input onblur="roadWorks()" type="number" min="0" max="2" class="road" name="" id=""></th>
                                                        <th></th>
                                                        <th>0.00%</th>
                                                        <th><input onblur="roadWorks()" type="text" min="0" max="2" class="road" name="" id=""></th>
                                                      </tr>
                                    
                                                    </tbody>
                                                  </table>
        
                                                  {{-- <div>
                                                    <!-- Design stage -->
                                                  <div class="mb-3 form-group row">
                                                    <label class="col-sm-5 col-form-label text-black">Check by: (Project Manager)</label>
                                                        <div class="col-sm-5">
                                                            <input class="form-control" type="text" autocapitalize="off" name="namaProjek"/>
                                                        </div>
                                                </div>
                                                <!-- Construction stage -->
                                                <div class="mb-3 form-group row">
                                                    <label class="col-sm-5 col-form-label text-black">Verified by: (Secretariat)</label>
                                                        <div class="col-sm-5">
                                                            <input class="form-control" type="text" autocapitalize="off" name="namaProjek"/>
                                                        </div>
                                                </div>
                                                <!-- Checked -->
                                                <div class="mb-3 form-group row">
                                                    <label class="col-sm-5 col-form-label text-black">Muat Naik Dokumen Sokongan</label>
                                                        <div class="col-sm-5">
                                                            <input class="form-control" type="file" autocapitalize="off" name="namaProjek"/>
                                                        </div>
                                                </div>
                                                  </div>
                                  
                                                  <div align="right" >
                                                    <button class="btn btn-primary" type="submit" title="Simpan">Jana</button>
                                                  </div> --}}
                                </div>
                               </table>
        
                              </tbody>
                             
                            </table>
                    
                          </div>
                      </form>
                
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
                    <h2 class="h2 mb-3">BORANG PENILAIAN GPSS BANGUNAN</h2>
                </div>

                <div class="col">
                    <div class="card-body">
                        <div class="row3 mx-1 table-responsive scrollbar text-center">
                          <form action= "/penilaian_reka_bentuk_gpss/simpan_skor_penilaian_arkitek/{id}" method="post" enctype="multipart/form-data">
                            @method('POST')
                            @csrf
                            <div class="col">
                              <table class="table table-bordered line-table text-center" style="width: 100%">
                                <thead class="text-white bg-orange-jkr">
                                  <tr>          
                                    <th colspan="8">Green Product Scoring Sheet</th>
                                  </tr>
                                  <tr>
                                    <th colspan="8">List of products for architectural works - Roof</th>
                                  </tr>
                                  <tr>
                                    <th>No.</th>
                                    <th >Component</th>
                                    <th>Product</th>
                                    <th>Point Allocated</th>
                                    <th>Point Requested (design)</th>
                                    {{-- <th>Point Requested (construction)</th> --}}
                                    {{-- <th>Point Awarded</th> --}}
                                    <th >Remark</th>
                                    <th >Supporting Documents</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  
                                  <tr class="text-center">
                                    <td rowspan="4" >1</td>
                                    <td rowspan="4">Roof tiles</td>
                                    <td >Clay tiles</td>
                                    <td >2</td>
                                    {{-- <td >
                                        <select onblur="findTotal()" class="arkitek" name="AwRoofRoofTilesClayTiles" id="AwRoofRoofTilesClayTiles">
                                        <option selected disabled ></option>
                                        <option value="0">0</option>
                                        <option value="2" >2</option>
                                        </select>
                                    </td> --}}
                                    <td><input onblur="findTotal()" type="number" min="0" max="2" min="0" max="2" class="arkitek" name="AwRoofRoofTilesClayTiles" id="AwRoofRoofTilesClayTiles"></td>            
                                    {{-- <td><input onblur="findTotalConstructed()" type="number" min="0" max="2" min="0" max="2" class="arkitek_construction" name="Cons_AwRoofRoofTilesClayTiles" id="Cons_AwRoofRoofTilesClayTiles"> --}}
                                    {{-- <td><input onblur="findTotalAwarded()" type="number" min="0" max="2" min="0" max="2" class="arkitek_awarded" name="Awarded_AwRoofRoofTilesClayTiles" id="Awarded_AwRoofRoofTilesClayTiles"> --}}
                                    <td><input type="text" name="Remark_AwRoofRoofTilesClayTiles" id="Remark_AwRoofRoofTilesClayTiles"></td>                    
                                    <td><input type="file" name="Remark_AwRoofRoofTilesClayTiles" id="Remark_AwRoofRoofTilesClayTiles"></td>                    
                                  </tr>
                        
                                  <tr>
                                    <td >Concrete tiles</td>
                                    <td >2</td>
                                    {{-- <td >
                                      <select onblur="findTotal()" class="arkitek" name="AwRoofRoofTilesConcreteTiles" id="AwRoofRoofTilesConcreteTiles">
                                      <option selected disabled ></option>
                                      <option value="0">0</option>
                                      <option value="2" >2</option>
                                      </select>
                                  </td> --}}
                                    <td><input onblur="findTotal()" type="number" min="0" max="2" min="0" max="2" class="arkitek" name="AwRoofRoofTilesConcreteTiles" id="AwRoofRoofTilesConcreteTiles"></td>            
                                    {{-- <td><input onblur="findTotalConstructed()" type="number" min="0" max="2" min="0" max="2" class="arkitek_construction" name="Cons_AwRoofRoofTilesConcreteTiles" id="Cons_AwRoofRoofTilesConcreteTiles"> --}}
                                    {{-- <td><input onblur="findTotalAwarded()" type="number" min="0" max="2" min="0" max="2" class="arkitek_awarded" name="Awarded_AwRoofRoofTilesConcreteTiles" id="Awarded_AwRoofRoofTilesConcreteTiles"> --}}
                                    <td><input type="text" name="Remark_AwRoofRoofTilesConcreteTiles" id="Remark_AwRoofRoofTilesConcreteTiles"></td>                    
                                    <td><input type="file" name="Remark_AwRoofRoofTilesConcreteTiles" id="Remark_AwRoofRoofTilesConcreteTiles"></td>                    
                                  </tr>
                        
                                  <tr>
                                    
                                    <td >Metal roofing</td>
                                    <td >2</td>
                                    {{-- <td >
                                      <select onblur="findTotal()" class="arkitek" name="AwRoofRoofTilesMetalRoofing" id="AwRoofRoofTilesMetalRoofing">
                                      <option selected disabled ></option>
                                      <option value="0">0</option>
                                      <option value="2" >2</option>
                                      </select>
                                    </td> --}}
                                    <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="AwRoofRoofTilesMetalRoofing" id="AwRoofRoofTilesMetalRoofing"></td>            
                                    {{-- <td><input onblur="findTotalConstructed()" type="number" min="0" max="2" class="arkitek_construction" name="Cons_AwRoofRoofTilesMetalRoofing" id="Cons_AwRoofRoofTilesMetalRoofing"></td>             --}}
                                    {{-- <td><input onblur="findTotalAwarded()" type="number" min="0" max="2" class="arkitek_awarded" name="Awarded_AwRoofRoofTilesMetalRoofing" id="Awarded_AwRoofRoofTilesMetalRoofing"></td>             --}}
                                    <td><input type="text" name="Remark_AwRoofRoofTilesMetalRoofing" id="Remark_AwRoofRoofTilesMetalRoofing"></td>                    
                                    <td><input type="file" name="Remark_AwRoofRoofTilesMetalRoofing" id="Remark_AwRoofRoofTilesMetalRoofing"></td>                    
                                  </tr>
                        
                                  <tr>
                                    <td >Shingles</td>
                                    <td >2</td>
                                    {{-- <td >
                                      <select onblur="findTotal()" class="arkitek" name="AwRoofRoofTilesShingles" id="AwRoofRoofTilesShingles">
                                      <option selected disabled ></option>
                                      <option value="0">0</option>
                                      <option value="2" >2</option>
                                      </select>
                                    </td> --}}
                                    <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="AwRoofRoofTilesShingles" id="AwRoofRoofTilesShingles"></td>            
                                    {{-- <td><input onblur="findTotalConstructed()" type="number" min="0" max="2" class="arkitek_construction" name="Cons_AwRoofRoofTilesShingles" id="Cons_AwRoofRoofTilesShingles"></td>             --}}
                                    {{-- <td><input onblur="findTotalAwarded()" type="number" min="0" max="2" class="arkitek_awarded" name="Awarded_AwRoofRoofTilesShingles" id="Awarded_AwRoofRoofTilesShingles"></td>             --}}
                                    <td><input type="text" name="Remark_AwRoofRoofTilesShingles" id="Remark_AwRoofRoofTilesShingles"></td>                    
                                    <td><input type="file" name="Remark_AwRoofRoofTilesShingles" id="Remark_AwRoofRoofTilesShingles"></td>                    
                                  </tr>
                                  
                                  <tr>
                                    <td rowspan="5">2</td>
                                    <td rowspan="5">Insulation</td>
                                    <td >Rockwool</td>
                                    <td >2</td>
                                    {{-- <td >
                                      <select onblur="findTotal()" class="arkitek" name="AwRoofRoofInsulationRockwool" id="AwRoofRoofInsulationRockwool">
                                      <option selected disabled ></option>
                                      <option value="0">0</option>
                                      <option value="2" >2</option>
                                      </select>
                                    </td> --}}
                                    <td> <input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="AwRoofRoofInsulationRockwool" id="AwRoofRoofInsulationRockwool"></td>            
                                    {{-- <td><input onblur="findTotalConstructed()" type="number" min="0" max="2" class="arkitek_construction" name="Cons_AwRoofRoofInsulationRockwool" id="Cons_AwRoofRoofInsulationRockwool"></td>             --}}
                                    {{-- <td><input onblur="findTotalAwarded()" type="number" min="0" max="2" class="arkitek_awarded" name="Awarded_AwRoofRoofInsulationRockwool" id="Awarded_AwRoofRoofInsulationRockwool"></td>              --}}
                                    <td><input type="text" name="Remark_AwRoofRoofInsulationRockwool" id="Remark_AwRoofRoofInsulationRockwool"></td>                    
                                    <td><input type="file" name="Remark_AwRoofRoofInsulationRockwool" id="Remark_AwRoofRoofInsulationRockwool"></td>                    
                                  </tr>
                        
                                  <tr>
                                    <td >Glasswool</td>
                                    <td >2</td>
                                    {{-- <td >
                                      <select onblur="findTotal()" class="arkitek" name="AwRoofRoofInsulationGlasswool" id="AwRoofRoofInsulationGlasswool">
                                      <option selected disabled ></option>
                                      <option value="0">0</option>
                                      <option value="2" >2</option>
                                      </select>
                                    </td> --}}
                                    <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="AwRoofRoofInsulationGlasswool" id="AwRoofRoofInsulationGlasswool"></td>            
                                    {{-- <td><input onblur="findTotalConstructed()" type="number" min="0" max="2" class="arkitek_construction" name="Cons_AwRoofRoofInsulationGlasswool" id="Cons_AwRoofRoofInsulationGlasswool"></td>             --}}
                                    {{-- <td><input onblur="findTotalAwarded()" type="number" min="0" max="2" class="arkitek_awarded" name="Awarded_AwRoofRoofInsulationGlasswool" id="Awarded_AwRoofRoofInsulationGlasswool"></td>              --}}
                                    <td><input type="text" name="Remark_AwRoofRoofInsulationGlasswool" id="Remark_AwRoofRoofInsulationGlasswool"></td>                    
                                    <td><input type="file" name="Remark_AwRoofRoofInsulationGlasswool" id="Remark_AwRoofRoofInsulationGlasswool"></td>                    
                                  </tr>
                        
                                  <tr>
                                    <td >Foam</td>
                                    <td >2</td>
                                    {{-- <td >
                                      <select onblur="findTotal()" class="arkitek" name="AwRoofRoofInsulationFoam" id="AwRoofRoofInsulationFoam">
                                      <option selected disabled ></option>
                                      <option value="0">0</option>
                                      <option value="2" >2</option>
                                      </select>
                                    </td> --}}
                                    <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="AwRoofRoofInsulationFoam" id="AwRoofRoofInsulationFoam"></td>            
                                    {{-- <td><input onblur="findTotalConstructed()" type="number" min="0" max="2" class="arkitek_construction" name="Cons_AwRoofRoofInsulationFoam" id="Cons_AwRoofRoofInsulationFoam"></td>             --}}
                                    {{-- <td><input onblur="findTotalAwarded()" type="number" min="0" max="2" class="arkitek_awarded" name="Awarded_AwRoofRoofInsulationFoam" id="Awarded_AwRoofRoofInsulationFoam"></td>              --}}
                                    <td><input type="text"name="Remark_AwRoofRoofInsulationFoam" id="Remark_AwRoofRoofInsulationFoam"></td>                    
                                    <td><input type="file"name="Remark_AwRoofRoofInsulationFoam" id="Remark_AwRoofRoofInsulationFoam"></td>                    
                                  </tr>
                        
                                  <tr>
                                    <td >Aluminium Foil</td>
                                    <td >2</td>
                                    {{-- <td >
                                      <select onblur="findTotal()" class="arkitek" name="AwRoofRoofInsulationAlumFoil" id="AwRoofRoofInsulationAlumFoil">
                                      <option selected disabled ></option>
                                      <option value="0">0</option>
                                      <option value="2" >2</option>
                                      </select>
                                    </td> --}}
                                    <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="AwRoofRoofInsulationAlumFoil" id="AwRoofRoofInsulationAlumFoil"></td>            
                                    {{-- <td><input onblur="findTotalConstructed()" type="number" min="0" max="2" class="arkitek_construction" name="Cons_AwRoofRoofInsulationAlumFoil" id="Cons_AwRoofRoofInsulationAlumFoil"></td>             --}}
                                    {{-- <td><input onblur="findTotalAwarded()" type="number" min="0" max="2" class="arkitek_awarded" name="Awarded_AwRoofRoofInsulationAlumFoil" id="Awarded_AwRoofRoofInsulationAlumFoil"></td>              --}}
                                    <td><input type="text" name="Remark_AwRoofRoofInsulationAlumFoil" id="Remark_AwRoofRoofInsulationAlumFoil"></td>                    
                                    <td><input type="file" name="Remark_AwRoofRoofInsulationAlumFoil" id="Remark_AwRoofRoofInsulationAlumFoil"></td>                    
                                  </tr>
                        
                                  <tr>
                                    <td >Undersheeting</td>
                                    <td >2</td>
                                    {{-- <td >
                                      <select onblur="findTotal()" class="arkitek" name="AwRoofRoofInsulationUndersheeting" id="AwRoofRoofInsulationUndersheeting">
                                      <option selected disabled ></option>
                                      <option value="0">0</option>
                                      <option value="2" >2</option>
                                      </select>
                                    </td> --}}
                                    <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="AwRoofRoofInsulationUndersheeting" id="AwRoofRoofInsulationUndersheeting"></td>            
                                    {{-- <td><input onblur="findTotalConstructed()" type="number" min="0" max="2" class="arkitek_construction" name="Cons_AwRoofRoofInsulationUndersheeting" id="Cons_AwRoofRoofInsulationUndersheeting"></td>             --}}
                                    {{-- <td><input onblur="findTotalAwarded()" type="number" min="0" max="2" class="arkitek_awarded" name="Awarded_AwRoofRoofInsulationUndersheeting" id="Awarded_AwRoofRoofInsulationUndersheeting"></td>              --}}
                                    <td><input type="text" name="Remark_AwRoofRoofInsulationUndersheeting" id="Remark_AwRoofRoofInsulationUndersheeting"></td>                    
                                    <td><input type="file" name="Remark_AwRoofRoofInsulationUndersheeting" id="Remark_AwRoofRoofInsulationUndersheeting"></td>                    
                                  </tr>
                        
                                  <tr>
                                    <td rowspan="3">3</td>
                                    <td rowspan="3">Roof Eaves</td>
                                    <td >Metal</td>
                                    <td >2</td>
                                    {{-- <td >
                                      <select onblur="findTotal()" class="arkitek" name="AwRoofRoofEavesMetal" id="AwRoofRoofEavesMetal">
                                      <option selected disabled ></option>
                                      <option value="0">0</option>
                                      <option value="2" >2</option>
                                      </select>
                                    </td> --}}
                                    <td> <input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="AwRoofRoofEavesMetal" id="AwRoofRoofEavesMetal"></td>            
                                    {{-- <td><input onblur="findTotalConstructed()" type="number" min="0" max="2" class="arkitek_construction" name="Cons_AwRoofRoofEavesMetal" id="Cons_AwRoofRoofEavesMetal"></td>             --}}
                                    {{-- <td><input onblur="findTotalAwarded()" type="number" min="0" max="2" class="arkitek_awarded" name="Awarded_AwRoofRoofEavesMetal" id="Awarded_AwRoofRoofEavesMetal"></td>              --}}
                                    <td><input type="text"name="Remark_AwRoofRoofEavesMetal" id="Remark_AwRoofRoofEavesMetal"></td>                    
                                    <td><input type="file"name="Remark_AwRoofRoofEavesMetal" id="Remark_AwRoofRoofEavesMetal"></td>                    
                                  </tr>
                        
                                  <tr>
                                    <td >Fiber cement</td>
                                    <td >2</td>
                                    {{-- <td >
                                      <select onblur="findTotal()" class="arkitek" name="AwRoofRoofEavesFiberCement" id="AwRoofRoofEavesFiberCement">
                                      <option selected disabled ></option>
                                      <option value="0">0</option>
                                      <option value="2" >2</option>
                                      </select>
                                    </td> --}}
                                    <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="AwRoofRoofEavesFiberCement" id="AwRoofRoofEavesFiberCement"></td>            
                                    {{-- <td><input onblur="findTotalConstructed()" type="number" min="0" max="2" class="arkitek_construction" name="Cons_AwRoofRoofEavesFiberCement" id="Cons_AwRoofRoofEavesFiberCement"></td>             --}}
                                    {{-- <td><input onblur="findTotalAwarded()" type="number" min="0" max="2" class="arkitek_awarded" name="Awarded_AwRoofRoofEavesFiberCement" id="Awarded_AwRoofRoofEavesFiberCement"></td>              --}}
                                    <td><input type="text" name="Remark_AwRoofRoofEavesFiberCement" id="Remark_AwRoofRoofEavesFiberCement"></td>                    
                                    <td><input type="file" name="Remark_AwRoofRoofEavesFiberCement" id="Remark_AwRoofRoofEavesFiberCement"></td>                    
                                  </tr>
                        
                                  <tr>
                                    <td >Plasterboard</td>
                                    <td >2</td>
                                    {{-- <td >
                                      <select onblur="findTotal()" class="arkitek" name="AwRoofRoofEavesPlasterboard" id="AwRoofRoofEavesPlasterboard">
                                      <option selected disabled ></option>
                                      <option value="0">0</option>
                                      <option value="2" >2</option>
                                      </select>
                                    </td> --}}
                                    <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="AwRoofRoofEavesPlasterboard" id="AwRoofRoofEavesPlasterboard"></td>            
                                    {{-- <td><input onblur="findTotalConstructed()" type="number" min="0" max="2" class="arkitek_construction" name="Cons_AwRoofRoofEavesPlasterboard" id="Cons_AwRoofRoofEavesPlasterboard"></td>             --}}
                                    {{-- <td><input onblur="findTotalAwarded()" type="number" min="0" max="2" class="arkitek_awarded" name="Awarded_AwRoofRoofEavesPlasterboard" id="Awarded_AwRoofRoofEavesPlasterboard"></td>              --}}
                                    <td><input type="text" name="Remark_AwRoofRoofEavesPlasterboard" id="Remark_AwRoofRoofEavesPlasterboard"></td>                    
                                    <td><input type="file" name="Remark_AwRoofRoofEavesPlasterboard" id="Remark_AwRoofRoofEavesPlasterboard"></td>                    
                                  </tr>
                        
                                  <tr>
                                    
                                    <td rowspan="4">4</td>
                                    <td rowspan="4">Fascia boards</td>
                                    <td >Metal</td>
                                    <td >2</td>
                                    {{-- <td >
                                      <select onblur="findTotal()" class="arkitek" name="AwRoofFascialBoardsMetal" id="AwRoofFascialBoardsMetal">
                                      <option selected disabled ></option>
                                      <option value="0">0</option>
                                      <option value="2" >2</option>
                                      </select>
                                    </td> --}}
                                    <td> <input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="AwRoofFascialBoardsMetal" id="AwRoofFascialBoardsMetal"></td>            
                                    {{-- <td><input onblur="findTotalConstructed()" type="number" min="0" max="2" class="arkitek_construction" name="Cons_AwRoofFascialBoardsMetal" id="Cons_AwRoofFascialBoardsMetal"></td>             --}}
                                    {{-- <td><input onblur="findTotalAwarded()" type="number" min="0" max="2" class="arkitek_awarded" name="Awarded_AwRoofFascialBoardsMetal" id="Awarded_AwRoofFascialBoardsMetal"></td>              --}}
                                    <td><input type="text" name="Remark_AwRoofFascialBoardsMetal" id="Remark_AwRoofFascialBoardsMetal"></td> 
                                    <td><input type="file" name="Remark_AwRoofFascialBoardsMetal" id="Remark_AwRoofFascialBoardsMetal"></td> 
                        
                                  </tr>
                        
                                  <tr>
                                    <td >Fibre cement</td>
                                    <td >2</td>
                                    {{-- <td >
                                      <select onblur="findTotal()" class="arkitek" name="AwRoofFascialBoardsFiberCement" id="AwRoofFascialBoardsFiberCement">
                                      <option selected disabled ></option>
                                      <option value="0">0</option>
                                      <option value="2" >2</option>
                                      </select>
                                    </td> --}}
                                    <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="AwRoofFascialBoardsFiberCement" id="AwRoofFascialBoardsFiberCement"></td>            
                                    {{-- <td><input onblur="findTotalConstructed()" type="number" min="0" max="2" class="arkitek_construction" name="Cons_AwRoofFascialBoardsFiberCement" id="Cons_AwRoofFascialBoardsFiberCement"></td>             --}}
                                    {{-- <td><input onblur="findTotalAwarded()" type="number" min="0" max="2" class="arkitek_awarded" name="Awarded_AwRoofFascialBoardsFiberCement" id="Awarded_AwRoofFascialBoardsFiberCement"></td>              --}}
                                    <td><input type="text" name="Remark_AwRoofFascialBoardsFiberCement" id="Remark_AwRoofFascialBoardsFiberCement"></td>                    
                                    <td><input type="file" name="Remark_AwRoofFascialBoardsFiberCement" id="Remark_AwRoofFascialBoardsFiberCement"></td>                    
                                  </tr>
                        
                                  <tr>
                                    <td >Plasterboard</td>
                                    <td >2</td>
                                    {{-- <td >
                                      <select onblur="findTotal()" class="arkitek" name="AwRoofFascialBoardsPlasterboard" id="AwRoofFascialBoardsPlasterboard">
                                      <option selected disabled ></option>
                                      <option value="0">0</option>
                                      <option value="2" >2</option>
                                      </select>
                                    </td> --}}
                                    <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="AwRoofFascialBoardsPlasterboard" id="AwRoofFascialBoardsPlasterboard"></td>            
                                    {{-- <td><input onblur="findTotalConstructed()" type="number" min="0" max="2" class="arkitek_construction" name="Cons_AwRoofFascialBoardsPlasterboard" id="Cons_AwRoofFascialBoardsPlasterboard"></td>             --}}
                                    {{-- <td><input onblur="findTotalAwarded()" type="number" min="0" max="2" class="arkitek_awarded" name="Awarded_AwRoofFascialBoardsPlasterboard" id="Awarded_AwRoofFascialBoardsPlasterboard"></td>              --}}
                                    <td><input type="text" name="Remark_AwRoofFascialBoardsPlasterboard" id="Remark_AwRoofFascialBoardsPlasterboard"></td>                    
                                    <td><input type="file" name="Remark_AwRoofFascialBoardsPlasterboard" id="Remark_AwRoofFascialBoardsPlasterboard"></td>                    
                                  </tr>
                        
                                  <tr>
                                    <td >Timber</td>
                                    <td >2</td>
                                    {{-- <td >
                                      <select onblur="findTotal()" class="arkitek" name="AwRoofFascialBoardsTimber" id="AwRoofFascialBoardsTimber">
                                      <option selected disabled ></option>
                                      <option value="0">0</option>
                                      <option value="2" >2</option>
                                      </select>
                                    </td> --}}
                                    <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="AwRoofFascialBoardsTimber" id="AwRoofFascialBoardsTimber"></td>            
                                    {{-- <td><input onblur="findTotalConstructed()" type="number" min="0" max="2" class="arkitek_construction" name="Cons_AwRoofFascialBoardsTimber" id="Cons_AwRoofFascialBoardsTimber"></td>             --}}
                                    {{-- <td><input onblur="findTotalAwarded()" type="number" min="0" max="2" class="arkitek_awarded" name="Awarded_AwRoofFascialBoardsTimber" id="Awarded_AwRoofFascialBoardsTimber"></td>              --}}
                                    <td><input type="text" name="Remark_AwRoofFascialBoardsTimber" id="Remark_AwRoofFascialBoardsTimber"></td>                    
                                    <td><input type="file" name="Remark_AwRoofFascialBoardsTimber" id="Remark_AwRoofFascialBoardsTimber"></td>                    
                                  </tr>
                        
                                  <tr>
                                    
                                    <td rowspan="4">5</td>
                                    <td rowspan="4">Gutter</td>
                                    <td >Upvc</td>
                                    <td >2</td>
                                    {{-- <td >
                                      <select onblur="findTotal()" class="arkitek" name="AwRoofGutterUpvc" id="AwRoofGutterUpvc">
                                      <option selected disabled ></option>
                                      <option value="0">0</option>
                                      <option value="2" >2</option>
                                      </select>
                                    </td> --}}
                                    <td> <input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="AwRoofGutterUpvc" id="AwRoofGutterUpvc"></td>            
                                    {{-- <td><input onblur="findTotalConstructed()" type="number" min="0" max="2" class="arkitek_construction" name="Cons_AwRoofGutterUpvc" id="Cons_AwRoofGutterUpvc"></td>             --}}
                                    {{-- <td><input onblur="findTotalAwarded()" type="number" min="0" max="2" class="arkitek_awarded" name="Awarded_AwRoofGutterUpvc" id="Awarded_AwRoofGutterUpvc"></td>              --}}
                                    <td><input type="text" name="Remark_AwRoofGutterUpvc" id="Remark_AwRoofGutterUpvc"></td> 
                                    <td><input type="file" name="Remark_AwRoofGutterUpvc" id="Remark_AwRoofGutterUpvc"></td> 
                        
                                  </tr>
                        
                                  <tr>
                                    <td >Galvanised iron</td>
                                    <td >2</td>
                                    {{-- <td >
                                      <select onblur="findTotal()" class="arkitek" name="AwRoofGutterGallron" id="AwRoofGutterGallron">
                                      <option selected disabled ></option>
                                      <option value="0">0</option>
                                      <option value="2" >2</option>
                                      </select>
                                    </td> --}}
                                    <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="AwRoofGutterGallron" id="AwRoofGutterGallron"></td>            
                                    {{-- <td><input onblur="findTotalConstructed()" type="number" min="0" max="2" class="arkitek_construction" name="Cons_AwRoofGutterGallron" id="Cons_AwRoofGutterGallron"></td>             --}}
                                    {{-- <td><input onblur="findTotalAwarded()" type="number" min="0" max="2" class="arkitek_awarded" name="Awarded_AwRoofGutterGallron" id="Awarded_AwRoofGutterGallron"></td>              --}}
                                    <td><input type="text" name="Remark_AwRoofGutterGallron" id="Remark_AwRoofGutterGallron"></td>                    
                                    <td><input type="file" name="Remark_AwRoofGutterGallron" id="Remark_AwRoofGutterGallron"></td>                    
                                  </tr>
                        
                                  <tr>
                                    <td >Aluminium</td>
                                    <td >2</td>
                                    {{-- <td >
                                      <select onblur="findTotal()" class="arkitek" name="AwRoofGutterAluminium" id="AwRoofGutterAluminium">
                                      <option selected disabled ></option>
                                      <option value="0">0</option>
                                      <option value="2" >2</option>
                                      </select>
                                    </td> --}}
                                    <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="AwRoofGutterAluminium" id="AwRoofGutterAluminium"></td>            
                                    {{-- <td><input onblur="findTotalConstructed()" type="number" min="0" max="2" class="arkitek_construction" name="Cons_AwRoofGutterAluminium" id="Cons_AwRoofGutterAluminium"></td>             --}}
                                    {{-- <td><input onblur="findTotalAwarded()" type="number" min="0" max="2" class="arkitek_awarded" name="Awarded_AwRoofGutterAluminium" id="Awarded_AwRoofGutterAluminium"></td>              --}}
                                    <td><input type="text" name="Remark_AwRoofGutterAluminium" id="Remark_AwRoofGutterAluminium"></td>                    
                                    <td><input type="file" name="Remark_AwRoofGutterAluminium" id="Remark_AwRoofGutterAluminium"></td>                    
                                  </tr>
                        
                                  <tr>
                                    <td >Stainless steel</td>
                                    <td >2</td>
                                    {{-- <td >
                                      <select onblur="findTotal()" class="arkitek" name="AwRoofGutterStainSteel" id="AwRoofGutterStainSteel">
                                      <option selected disabled ></option>
                                      <option value="0">0</option>
                                      <option value="2" >2</option>
                                      </select>
                                    </td> --}}
                                    <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="AwRoofGutterStainSteel" id="AwRoofGutterStainSteel"></td>            
                                    {{-- <td><input onblur="findTotalConstructed()" type="number" min="0" max="2" class="arkitek_construction" name="Cons_AwRoofGutterStainSteel" id="Cons_AwRoofGutterStainSteel"></td>             --}}
                                    {{-- <td><input onblur="findTotalAwarded()" type="number" min="0" max="2" class="arkitek_awarded" name="Awarded_AwRoofGutterStainSteel" id="Awarded_AwRoofGutterStainSteel"></td>             --}}
                                    <td><input type="text" name="Remark_AwRoofGutterStainSteel" id="Remark_AwRoofGutterStainSteel"></td>                    
                                    <td><input type="file" name="Remark_AwRoofGutterStainSteel" id="Remark_AwRoofGutterStainSteel"></td>                    
                                  </tr>
                        
                                  <tr>
                                    
                                    <td rowspan="4">6</td>
                                    <td rowspan="4">Rainwater down pipes</td>
                                    <td >Upvc</td>
                                    <td >2</td>
                                    {{-- <td >
                                      <select onblur="findTotal()" class="arkitek" name="AwRoofRainPipesUpvc" id="AwRoofRainPipesUpvc">
                                      <option selected disabled ></option>
                                      <option value="0">0</option>
                                      <option value="2" >2</option>
                                      </select>
                                    </td> --}}
                                    <td> <input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="AwRoofRainPipesUpvc" id="AwRoofRainPipesUpvc"></td>            
                                    {{-- <td><input onblur="findTotalConstructed()" type="number" min="0" max="2" class="arkitek_construction" name="Cons_AwRoofRainPipesUpvc" id="Cons_AwRoofRainPipesUpvc"></td>             --}}
                                    {{-- <td><input onblur="findTotalAwarded()" type="number" min="0" max="2" class="arkitek_awarded" name="Awarded_AwRoofRainPipesUpvc" id="Awarded_AwRoofRainPipesUpvc"></td>              --}}
                                    <td><input type="text" name="Remark_AwRoofRainPipesUpvc" id="Remark_AwRoofRainPipesUpvc"></td> 
                                    <td><input type="file" name="Remark_AwRoofRainPipesUpvc" id="Remark_AwRoofRainPipesUpvc"></td> 
                        
                                  </tr>
                        
                                  <tr>
                                    <td >Galvanised iron</td>
                                    <td >2</td>
                                    {{-- <td >
                                      <select onblur="findTotal()" class="arkitek" name="AwRoofRainPipesGallron" id="AwRoofRainPipesGallron">
                                      <option selected disabled ></option>
                                      <option value="0">0</option>
                                      <option value="2" >2</option>
                                      </select>
                                    </td> --}}
                                    <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="AwRoofRainPipesGallron" id="AwRoofRainPipesGallron"></td>            
                                    {{-- <td><input onblur="findTotalConstructed()" type="number" min="0" max="2" class="arkitek_construction" name="Cons_AwRoofRainPipesGallron" id="Cons_AwRoofRainPipesGallron"></td>             --}}
                                    {{-- <td><input onblur="findTotalAwarded()" type="number" min="0" max="2" class="arkitek_awarded" name="Awarded_AwRoofRainPipesGallron" id="Awarded_AwRoofRainPipesGallron"></td>             --}}
                                    <td><input type="text" name="Remark_AwRoofRainPipesGallron" id="Remark_AwRoofRainPipesGallron"></td>                    
                                    <td><input type="file" name="Remark_AwRoofRainPipesGallron" id="Remark_AwRoofRainPipesGallron"></td>                    
                                  </tr>
                        
                                  <tr>
                                    <td >Aluminium</td>
                                    <td >2</td>
                                    {{-- <td >
                                      <select onblur="findTotal()" class="arkitek" name="AwRoofRainPipesAluminium" id="AwRoofRainPipesAluminium">
                                      <option selected disabled ></option>
                                      <option value="0">0</option>
                                      <option value="2" >2</option>
                                      </select>
                                    </td> --}}
                                    <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="AwRoofRainPipesAluminium" id="AwRoofRainPipesAluminium"></td>            
                                    {{-- <td><input onblur="findTotalConstructed()" type="number" min="0" max="2" class="arkitek_construction" name="Cons_AwRoofRainPipesAluminium" id="Cons_AwRoofRainPipesAluminium"></td>             --}}
                                    {{-- <td><input onblur="findTotalAwarded()" type="number" min="0" max="2" class="arkitek_awarded" name="Awarded_AwRoofRainPipesAluminium" id="Awarded_AwRoofRainPipesAluminium"></td>              --}}
                                    <td><input type="text" name="Remark_AwRoofRainPipesAluminium" id="Remark_AwRoofRainPipesAluminium"></td>                    
                                    <td><input type="file" name="Remark_AwRoofRainPipesAluminium" id="Remark_AwRoofRainPipesAluminium"></td>                    
                                  </tr>
                        
                                  <tr>
                                    <td >Stainless steel</td>
                                    <td >2</td>
                                    {{-- <td >
                                      <select onblur="findTotal()" class="arkitek" name="AwRoofRainPipesStainSteel" id="AwRoofRainPipesStainSteel">
                                      <option selected disabled ></option>
                                      <option value="0">0</option>
                                      <option value="2" >2</option>
                                      </select>
                                    </td> --}}
                                    <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="AwRoofRainPipesStainSteel" id="AwRoofRainPipesStainSteel"></td>            
                                    {{-- <td><input onblur="findTotalConstructed()" type="number" min="0" max="2" class="arkitek_construction" name="Cons_AwRoofRainPipesStainSteel" id="Cons_AwRoofRainPipesStainSteel"></td>             --}}
                                    {{-- <td><input onblur="findTotalAwarded()" type="number" min="0" max="2" class="arkitek_awarded" name="Awarded_AwRoofRainPipesStainSteel" id="Awarded_AwRoofRainPipesStainSteel"></td>              --}}
                                    <td><input type="text" name="Remark_AwRoofRainPipesStainSteel" id="Remark_AwRoofRainPipesStainSteel"></td>                    
                                    <td><input type="file" name="Remark_AwRoofRainPipesStainSteel" id="Remark_AwRoofRainPipesStainSteel"></td>                    
                                  </tr>
                        
                                  <tr>
                                    
                                    <td rowspan="3">7</td>
                                    <td rowspan="3">Gutter</td>
                                    <td >Plasterboard</td>
                                    <td >2</td>
                                    {{-- <td >
                                      <select onblur="findTotal()" class="arkitek" name="AwRoofCellingPlasterboards" id="AwRoofCellingPlasterboards">
                                      <option selected disabled ></option>
                                      <option value="0">0</option>
                                      <option value="2" >2</option>
                                      </select>
                                    </td> --}}
                                    <td> <input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="AwRoofCellingPlasterboards" id="AwRoofCellingPlasterboards"></td>            
                                    {{-- <td><input onblur="findTotalConstructed()" type="number" min="0" max="2" class="arkitek_construction" name="Cons_AwRoofCellingPlasterboards" id="Cons_AwRoofCellingPlasterboards"></td>             --}}
                                    {{-- <td><input onblur="findTotalAwarded()" type="number" min="0" max="2" class="arkitek_awarded" name="Awarded_AwRoofCellingPlasterboards" id="Awarded_AwRoofCellingPlasterboards"></td>             --}}
                                    <td><input type="text" name="Remark_AwRoofCellingPlasterboards" id="Remark_AwRoofCellingPlasterboards"></td> 
                                    <td><input type="file" name="Remark_AwRoofCellingPlasterboards" id="Remark_AwRoofCellingPlasterboards"></td> 
                        
                                  </tr>
                        
                                  <tr>
                                    <td >Fibre cement board</td>
                                    <td >2</td>
                                    {{-- <td >
                                      <select onblur="findTotal()" class="arkitek" name="AwRoofCellingFibreCement" id="AwRoofCellingFibreCement">
                                      <option selected disabled ></option>
                                      <option value="0">0</option>
                                      <option value="2" >2</option>
                                      </select>
                                    </td> --}}
                                    <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="AwRoofCellingFibreCement" id="AwRoofCellingFibreCement"></td>            
                                    {{-- <td><input onblur="findTotalConstructed()" type="number" min="0" max="2" class="arkitek_construction" name="Cons_AwRoofCellingFibreCement" id="Cons_AwRoofCellingFibreCement"></td>             --}}
                                    {{-- <td><input onblur="findTotalAwarded()" type="number" min="0" max="2" class="arkitek_awarded" name="Awarded_AwRoofCellingFibreCement" id="Awarded_AwRoofCellingFibreCement"></td>              --}}
                                    <td><input type="text" name="Remark_AwRoofCellingFibreCement" id="Remark_AwRoofCellingFibreCement"></td>                    
                                    <td><input type="file" name="Remark_AwRoofCellingFibreCement" id="Remark_AwRoofCellingFibreCement"></td>                    
                                  </tr>
                        
                                  <tr>
                                    <td >Metal strip</td>
                                    <td >2</td>
                                    {{-- <td >
                                      <select onblur="findTotal()" class="arkitek" name="AwRoofCellingMetalStrip" id="AwRoofCellingMetalStrip">
                                      <option selected disabled ></option>
                                      <option value="0">0</option>
                                      <option value="2" >2</option>
                                      </select>
                                    </td> --}}
                                    <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="AwRoofCellingMetalStrip" id="AwRoofCellingMetalStrip"></td>            
                                    {{-- <td><input onblur="findTotalConstructed()" type="number" min="0" max="2" class="arkitek_construction" name="Cons_AwRoofCellingMetalStrip" id="Cons_AwRoofCellingMetalStrip"></td>             --}}
                                    {{-- <td><input onblur="findTotalAwarded()" type="number" min="0" max="2" class="arkitek_awarded" name="Awarded_AwRoofCellingMetalStrip" id="Awarded_AwRoofCellingMetalStrip"></td>             --}}
                                    <td><input type="text" name="Remark_AwRoofCellingMetalStrip" id="Remark_AwRoofCellingMetalStrip"></td>                    
                                    <td><input type="file" name="Remark_AwRoofCellingMetalStrip" id="Remark_AwRoofCellingMetalStrip"></td>                    
                                  </tr>
                        
                                  <tr>
                                    
                                    <td rowspan="2">8</td>
                                    <td rowspan="2">Truss system</td>
                                    <td >Timber</td>
                                    <td >2</td>
                                    {{-- <td >
                                      <select onblur="findTotal()" class="arkitek" name="AwRoofTrussTimber" id="AwRoofTrussTimber">
                                      <option selected disabled ></option>
                                      <option value="0">0</option>
                                      <option value="2" >2</option>
                                      </select>
                                    </td> --}}
                                    <td> <input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="AwRoofTrussTimber" id="AwRoofTrussTimber"></td>            
                                    {{-- <td><input onblur="findTotalConstructed()" type="number" min="0" max="2" class="arkitek_construction" name="Cons_AwRoofTrussTimber" id="Cons_AwRoofTrussTimber"></td>             --}}
                                    {{-- <td><input onblur="findTotalAwarded()" type="number" min="0" max="2" class="arkitek_awarded" name="Awarded_AwRoofTrussTimber" id="Awarded_AwRoofTrussTimber"></td>              --}}
                                    <td><input type="text" name="Remark_AwRoofTrussTimber" id="Remark_AwRoofTrussTimber"></td> 
                                    <td><input type="file" name="Remark_AwRoofTrussTimber" id="Remark_AwRoofTrussTimber"></td> 
                        
                                  </tr>
                        
                                  <tr>
                                    <td >Metal</td>
                                    <td >2</td>
                                    {{-- <td >
                                      <select onblur="findTotal()" class="arkitek" name="AwRoofTrussMetal" id="AwRoofTrussMetal">
                                      <option selected disabled ></option>
                                      <option value="0">0</option>
                                      <option value="2" >2</option>
                                      </select>
                                    </td> --}}
                                    <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="AwRoofTrussMetal" id="AwRoofTrussMetal"></td>            
                                    {{-- <td><input onblur="findTotalConstructed()" type="number" min="0" max="2" class="arkitek_construction" name="Cons_AwRoofTrussMetal" id="Cons_AwRoofTrussMetal"></td>             --}}
                                    {{-- <td><input onblur="findTotalAwarded()" type="number" min="0" max="2" class="arkitek_awarded" name="Awarded_AwRoofTrussMetal" id="Awarded_AwRoofTrussMetal"></td>              --}}
                                    <td><input type="text" name="Remark_AwRoofTrussMetal" id="Remark_AwRoofTrussMetal"></td>                    
                                    <td><input type="file" name="Remark_AwRoofTrussMetal" id="Remark_AwRoofTrussMetal"></td>                    
                                  </tr>
                      
                                  <tr style="display: none">
                                    <td>markahPRAwRoof<input type="text" name="markahPRAwRoof" id="markahPRAwRoof" /></td>            
                                  </tr>
                      
                                  <tr style="display: none">
                                    <td>markahPRAwRoofConstruction<input type="text" name="Cons_markahPRAwRoof" id="Cons_markahPRAwRoof" /></td>            
                                  </tr>
                      
                                  <tr style="display: none">
                                    <td>markahPRAwRoofAwarded<input type="text" name="Awarded_markahPRAwRoof" id="Awarded_markahPRAwRoof" /></td>            
                                  </tr>
                      
                      
                                  {{-- New table for wall system --}}
                                  <tr class="text-white bg-orange-jkr">
                                    <th colspan="8">List of products for architectural works - Wall System</th>
                                  </tr>
                        
                                  <tr>
                                    
                                    <td rowspan="10">1</td>
                                    <td rowspan="10">Wall types</td>
                                    <td >Bricks</td>
                                    <td >2</td>
                                    {{-- <td >
                                      <select onblur="findTotalWall()" class="prawwall" name="AwWallWallTypesBricks" id="AwWallWallTypesBricks">
                                      <option selected disabled ></option>
                                      <option value="0">0</option>
                                      <option value="2" >2</option>
                                      </select>
                                    </td> --}}
                                    <td> <input onblur="findTotalWall()" type="number" min="0" max="2" class="prawwall" name="AwWallWallTypesBricks" id="AwWallWallTypesBricks"></td>            
                                    {{-- <td><input onblur="findTotalConstructedWall()" type="number" min="0" max="2" class="prawwall_construction" name="Cons_AwWallWallTypesBricks" id="Cons_AwWallWallTypesBricks"></td>             --}}
                                    {{-- <td><input onblur="findTotalAwardedWall()" type="number" min="0" max="2" class="prawwall_awarded" name="Awarded_AwWallWallTypesBricks" id="Awarded_AwWallWallTypesBricks"></td>              --}}
                                    <td><input type="text" name="Remark_AwWallWallTypesBricks" id="Remark_AwWallWallTypesBricks"></td> 
                                    <td><input type="file" name="Remark_AwWallWallTypesBricks" id="Remark_AwWallWallTypesBricks"></td> 
                        
                                  </tr>
                        
                                  <tr>
                                    <td >Timberwork</td>
                                    <td >2</td>
                                    {{-- <td >
                                      <select onblur="findTotalWall()" class="prawwall" name="AwWallWallTypesTimber" id="AwWallWallTypesTimber">
                                      <option selected disabled ></option>
                                      <option value="0">0</option>
                                      <option value="2" >2</option>
                                      </select>
                                    </td> --}}
                                    <td><input onblur="findTotalWall()" type="number" min="0" max="2" class="prawwall " name="AwWallWallTypesTimber" id="AwWallWallTypesTimber"></td>            
                                    {{-- <td><input onblur="findTotalConstructedWall()" type="number" min="0" max="2" class="prawwall_construction" name="Cons_AwWallWallTypesTimber" id="Cons_AwWallWallTypesTimber"></td>             --}}
                                    {{-- <td><input onblur="findTotalAwardedWall()" type="number" min="0" max="2" class="prawwall_awarded" name="Awarded_AwWallWallTypesTimber" id="Awarded_AwWallWallTypesTimber"></td>             --}}
                                    <td><input type="text" name="Remark_AwWallWallTypesTimber" id="Remark_AwWallWallTypesTimber"></td>                    
                                    <td><input type="file" name="Remark_AwWallWallTypesTimber" id="Remark_AwWallWallTypesTimber"></td>                    
                                  </tr>
                        
                                  <tr>
                                    <td >Clay bricks</td>
                                    <td >2</td>
                                    {{-- <td >
                                      <select onblur="findTotalWall()" class="prawwall" name="AwWallWallTypesClay" id="AwWallWallTypesClay">
                                      <option selected disabled ></option>
                                      <option value="0">0</option>
                                      <option value="2" >2</option>
                                      </select>
                                    </td> --}}
                                    <td><input onblur="findTotalWall()" type="number" min="0" max="2" class="prawwall" name="AwWallWallTypesClay" id="AwWallWallTypesClay"></td>            
                                    {{-- <td><input onblur="findTotalConstructedWall()" type="number" min="0" max="2" class="prawwall_construction" name="Cons_AwWallWallTypesClay" id="Cons_AwWallWallTypesClay"></td>             --}}
                                    {{-- <td><input onblur="findTotalAwardedWall()" type="number" min="0" max="2" class="prawwall_awarded" name="Awarded_AwWallWallTypesClay" id="Awarded_AwWallWallTypesClay"></td>             --}}
                                    <td><input type="text" name="Remark_AwWallWallTypesClay" id="Remark_AwWallWallTypesClay"></td>                    
                                    <td><input type="file" name="Remark_AwWallWallTypesClay" id="Remark_AwWallWallTypesClay"></td>                    
                                  </tr>
                        
                                  <tr>
                                    <td >Blockwork</td>
                                    <td >2</td>
                                    {{-- <td >
                                      <select onblur="findTotalWall()" class="prawwall" name="AwWallWallTypesBlockwork" id="AwWallWallTypesBlockwork">
                                      <option selected disabled ></option>
                                      <option value="0">0</option>
                                      <option value="2" >2</option>
                                      </select>
                                    </td> --}}
                                    <td><input onblur="findTotalWall()" type="number" min="0" max="2" class="prawwall" name="AwWallWallTypesBlockwork" id="AwWallWallTypesBlockwork"></td>            
                                    {{-- <td><input onblur="findTotalConstructedWall()" type="number" min="0" max="2" class="prawwall_construction" name="Cons_AwWallWallTypesBlockwork" id="Cons_AwWallWallTypesBlockwork"></td>             --}}
                                    {{-- <td><input onblur="findTotalAwardedWall()" type="number" min="0" max="2" class="prawwall_awarded" name="Awarded_AwWallWallTypesBlockwork" id="Awarded_AwWallWallTypesBlockwork"></td>             --}}
                                    <td><input type="text" name="Remark_AwWallWallTypesBlockwork" id="Remark_AwWallWallTypesBlockwork"></td>                    
                                    <td><input type="file" name="Remark_AwWallWallTypesBlockwork" id="Remark_AwWallWallTypesBlockwork"></td>                    
                                  </tr>
                        
                                  <tr>
                                    <td >Reinforce concrete</td>
                                    <td >2</td>
                                    {{-- <td >
                                      <select onblur="findTotalWall()" class="prawwall" name="AwWallWallTypesReinforce" id="AwWallWallTypesReinforce">
                                      <option selected disabled ></option>
                                      <option value="0">0</option>
                                      <option value="2" >2</option>
                                      </select>
                                    </td> --}}
                                    <td><input onblur="findTotalWall()" type="number" min="0" max="2" class="prawwall" name="AwWallWallTypesReinforce" id="AwWallWallTypesReinforce"></td>            
                                    {{-- <td><input onblur="findTotalConstructedWall()" type="number" min="0" max="2" class="prawwall_construction" name="Cons_AwWallWallTypesReinforce" id="Cons_AwWallWallTypesReinforce"></td>             --}}
                                    {{-- <td><input onblur="findTotalAwardedWall()" type="number" min="0" max="2" class="prawwall_awarded" name="Awarded_AwWallWallTypesReinforce" id="Awarded_AwWallWallTypesReinforce"></td>             --}}
                                    <td><input type="text" name="Remark_AwWallWallTypesReinforce" id="Remark_AwWallWallTypesReinforce"></td>                    
                                    <td><input type="file" name="Remark_AwWallWallTypesReinforce" id="Remark_AwWallWallTypesReinforce"></td>                    
                                  </tr>
                        
                                  <tr>
                                    <td >Aerated concrete</td>
                                    <td >2</td>
                                    {{-- <td >
                                      <select onblur="findTotalWall()" class="prawwall" name="AwWallWallTypesAerated" id="AwWallWallTypesAerated">
                                      <option selected disabled ></option>
                                      <option value="0">0</option>
                                      <option value="2" >2</option>
                                      </select>
                                    </td> --}}
                                    <td><input onblur="findTotalWall()" type="number" min="0" max="2" class="prawwall" name="AwWallWallTypesAerated" id="AwWallWallTypesAerated"></td>            
                                    {{-- <td><input onblur="findTotalConstructedWall()" type="number" min="0" max="2" class="prawwall_construction" name="Cons_AwWallWallTypesAerated" id="Cons_AwWallWallTypesAerated"></td>             --}}
                                    {{-- <td><input onblur="findTotalAwardedWall()" type="number" min="0" max="2" class="prawwall_awarded" name="Awarded_AwWallWallTypesAerated" id="Awarded_AwWallWallTypesAerated"></td>             --}}
                                    <td><input type="text" name="Remark_AwWallWallTypesAerated" id="Remark_AwWallWallTypesAerated"></td>                    
                                    <td><input type="file" name="Remark_AwWallWallTypesAerated" id="Remark_AwWallWallTypesAerated"></td>                    
                                  </tr>
                        
                                  <tr>
                                    <td >Glass</td>
                                    <td >2</td>
                                    {{-- <td >
                                      <select onblur="findTotalWall()" class="prawwall" name="AwWallWallTypesGlass" id="AwWallWallTypesGlass">
                                      <option selected disabled ></option>
                                      <option value="0">0</option>
                                      <option value="2" >2</option>
                                      </select>
                                    </td> --}}
                                    <td><input onblur="findTotalWall()" type="number" min="0" max="2" class="prawwall" name="AwWallWallTypesGlass" id="AwWallWallTypesGlass"></td>            
                                    {{-- <td><input onblur="findTotalConstructedWall()" type="number" min="0" max="2" class="prawwall_construction" name="Cons_AwWallWallTypesGlass" id="Cons_AwWallWallTypesGlass"></td>             --}}
                                    {{-- <td><input onblur="findTotalAwardedWall()" type="number" min="0" max="2" class="prawwall_awarded" name="Awarded_AwWallWallTypesGlass" id="Awarded_AwWallWallTypesGlass"></td>             --}}
                                    <td><input type="text" name="Remark_AwWallWallTypesGlass" id="Remark_AwWallWallTypesGlass"></td>                    
                                    <td><input type="file" name="Remark_AwWallWallTypesGlass" id="Remark_AwWallWallTypesGlass"></td>                    
                                  </tr>
                        
                                  <tr>
                                    <td >Gypsum board</td>
                                    <td >2</td>
                                    {{-- <td >
                                      <select onblur="findTotalWall()" class="prawwall" name="AwWallWallTypesGypsum" id="AwWallWallTypesGypsum">
                                      <option selected disabled ></option>
                                      <option value="0">0</option>
                                      <option value="2" >2</option>
                                      </select>
                                    </td> --}}
                                    <td><input onblur="findTotalWall()" type="number" min="0" max="2" class="prawwall" name="AwWallWallTypesGypsum" id="AwWallWallTypesGypsum"></td>            
                                    {{-- <td><input onblur="findTotalConstructedWall()" type="number" min="0" max="2" class="prawwall_construction" name="Cons_AwWallWallTypesGypsum" id="Cons_AwWallWallTypesGypsum"></td>             --}}
                                    {{-- <td><input onblur="findTotalAwardedWall()" type="number" min="0" max="2" class="prawwall_awarded" name="Awarded_AwWallWallTypesGypsum" id="Awarded_AwWallWallTypesGypsum"></td>             --}}
                                    <td><input type="text" name="Remark_AwWallWallTypesGypsum" id="Remark_AwWallWallTypesGypsum"></td>                    
                                    <td><input type="file" name="Remark_AwWallWallTypesGypsum" id="Remark_AwWallWallTypesGypsum"></td>                    
                                  </tr>
                        
                                  <tr>
                                    <td >Cement board</td>
                                    <td >2</td>
                                    {{-- <td >
                                      <select onblur="findTotalWall()" class="prawwall" name="AwWallWallTypesCement" id="AwWallWallTypesCement">
                                      <option selected disabled ></option>
                                      <option value="0">0</option>
                                      <option value="2" >2</option>
                                      </select>
                                    </td> --}}
                                    <td><input onblur="findTotalWall()" type="number" min="0" max="2" class="prawwall" name="AwWallWallTypesCement" id="AwWallWallTypesCement"></td>            
                                    {{-- <td><input onblur="findTotalConstructedWall()" type="number" min="0" max="2" class="prawwall_construction" name="Cons_AwWallWallTypesCement" id="Cons_AwWallWallTypesCement"></td>             --}}
                                    {{-- <td><input onblur="findTotalAwardedWall()" type="number" min="0" max="2" class="prawwall_awarded" name="Awarded_AwWallWallTypesCement" id="Awarded_AwWallWallTypesCement"></td>             --}}
                                    <td><input type="text" name="Remark_AwWallWallTypesCement" id="Remark_AwWallWallTypesCement"></td>                    
                                    <td><input type="file" name="Remark_AwWallWallTypesCement" id="Remark_AwWallWallTypesCement"></td>                    
                                  </tr>
                        
                                  <tr>
                                    <td >Fibre cement</td>
                                    <td >2</td>
                                    {{-- <td >
                                      <select onblur="findTotalWall()" class="prawwall" name="AwWallWallTypesFibreCement" id="AwWallWallTypesFibreCement">
                                      <option selected disabled ></option>
                                      <option value="0">0</option>
                                      <option value="2" >2</option>
                                      </select>
                                    </td> --}}
                                    <td><input onblur="findTotalWall()" type="number" min="0" max="2" class="prawwall" name="AwWallWallTypesFibreCement" id="AwWallWallTypesFibreCement"></td>            
                                    {{-- <td><input onblur="findTotalConstructedWall()" type="number" min="0" max="2" class="prawwall_construction" name="Cons_AwWallWallTypesFibreCement" id="Cons_AwWallWallTypesFibreCement"></td>             --}}
                                    {{-- <td><input onblur="findTotalAwardedWall()" type="number" min="0" max="2" class="prawwall_awarded" name="Awarded_AwWallWallTypesFibreCement" id="Awarded_AwWallWallTypesFibreCement"></td>             --}}
                                    <td><input type="text" name="Remark_AwWallWallTypesFibreCement" id="Remark_AwWallWallTypesFibreCement"></td>                    
                                    <td><input type="file" name="Remark_AwWallWallTypesFibreCement" id="Remark_AwWallWallTypesFibreCement"></td>                    
                                  </tr>
                        
                                  <tr>
                                    
                                    <td rowspan="12">2</td> 
                                    <td rowspan="12">Finishes</td>
                                    <td >Paints</td>
                                    <td >2</td>
                                    {{-- <td >
                                      <select onblur="findTotalWall()" class="prawwall" name="AwWallFinishesPaints" id="AwWallFinishesPaints">
                                      <option selected disabled ></option>
                                      <option value="0">0</option>
                                      <option value="2" >2</option>
                                      </select>
                                    </td> --}}
                                    <td> <input onblur="findTotalWall()" type="number" min="0" max="2" class="prawwall" name="AwWallFinishesPaints" id="AwWallFinishesPaints"></td>            
                                    {{-- <td><input onblur="findTotalConstructedWall()" type="number" min="0" max="2" class="prawwall_construction" name="Cons_AwWallFinishesPaints" id="Cons_AwWallFinishesPaints"></td>             --}}
                                    {{-- <td><input onblur="findTotalAwardedWall()" type="number" min="0" max="2" class="prawwall_awarded" name="Awarded_AwWallFinishesPaints" id="Awarded_AwWallFinishesPaints"></td>             --}}
                                    <td><input type="text" name="Remark_AwWallFinishesPaints" id="Remark_AwWallFinishesPaints"></td> 
                                    <td><input type="file" name="Remark_AwWallFinishesPaints" id="Remark_AwWallFinishesPaints"></td> 
                        
                        
                                  </tr>
                        
                                  <tr>
                                    <td >Composite panel</td>
                                    <td >2</td>
                                    {{-- <td >
                                      <select onblur="findTotalWall()" class="prawwall" name="AwWallFinishesComposite" id="AwWallFinishesComposite">
                                      <option selected disabled ></option>
                                      <option value="0">0</option>
                                      <option value="2" >2</option>
                                      </select>
                                    </td> --}}
                                    <td><input onblur="findTotalWall()" type="number" min="0" max="2" class="prawwall" name="AwWallFinishesComposite" id="AwWallFinishesComposite"></td>            
                                    {{-- <td><input onblur="findTotalConstructedWall()" type="number" min="0" max="2" class="prawwall_construction" name="Cons_AwWallFinishesComposite" id="Cons_AwWallFinishesComposite"></td>             --}}
                                    {{-- <td><input onblur="findTotalAwardedWall()" type="number" min="0" max="2" class="prawwall_awarded" name="Awarded_AwWallFinishesComposite" id="Awarded_AwWallFinishesComposite"></td>             --}}
                                    <td><input type="text" name="Remark_AwWallFinishesComposite" id="Remark_AwWallFinishesComposite"></td>                    
                                    <td><input type="file" name="Remark_AwWallFinishesComposite" id="Remark_AwWallFinishesComposite"></td>                    
                                  </tr>
                        
                                  <tr>
                                    <td >Wall paper</td>
                                    <td >2</td>
                                    {{-- <td >
                                      <select onblur="findTotalWall()" class="prawwall" name="AwWallFinishesWallpaper" id="AwWallFinishesWallpaper">
                                      <option selected disabled ></option>
                                      <option value="0">0</option>
                                      <option value="2" >2</option>
                                      </select>
                                    </td> --}}
                                    <td><input onblur="findTotalWall()" type="number" min="0" max="2" class="prawwall" name="AwWallFinishesWallpaper" id="AwWallFinishesWallpaper"></td>            
                                    {{-- <td><input onblur="findTotalConstructedWall()" type="number" min="0" max="2" class="prawwall_construction" name="Cons_AwWallFinishesWallpaper" id="Cons_AwWallFinishesWallpaper"></td>             --}}
                                    {{-- <td><input onblur="findTotalAwardedWall()" type="number" min="0" max="2" class="prawwall_awarded" name="Awarded_AwWallFinishesWallpaper" id="Awarded_AwWallFinishesWallpaper"></td>             --}}
                                    <td><input type="text" name="Remark_AwWallFinishesWallpaper" id="Remark_AwWallFinishesWallpaper"></td>                    
                                    <td><input type="file" name="Remark_AwWallFinishesWallpaper" id="Remark_AwWallFinishesWallpaper"></td>                    
                                  </tr>
                        
                                  <tr>
                                    <td >Ceramic tiles</td>
                                    <td >2</td>
                                    {{-- <td >
                                      <select onblur="findTotalWall()" class="prawwall" name="AwWallFinishesCeramic" id="AwWallFinishesCeramic">
                                      <option selected disabled ></option>
                                      <option value="0">0</option>
                                      <option value="2" >2</option>
                                      </select>
                                    </td> --}}
                                    <td><input onblur="findTotalWall()" type="number" min="0" max="2" class="prawwall" name="AwWallFinishesCeramic" id="AwWallFinishesCeramic"></td>            
                                    {{-- <td><input onblur="findTotalConstructedWall()" type="number" min="0" max="2" class="prawwall_construction" name="Cons_AwWallFinishesCeramic" id="Cons_AwWallFinishesCeramic"></td>             --}}
                                    {{-- <td><input onblur="findTotalAwardedWall()" type="number" min="0" max="2" class="prawwall_awarded" name="Awarded_AwWallFinishesCeramic" id="Awarded_AwWallFinishesCeramic"></td>             --}}
                                    <td><input type="text" name="Remark_AwWallFinishesCeramic" id="Remark_AwWallFinishesCeramic"></td>                    
                                    <td><input type="file" name="Remark_AwWallFinishesCeramic" id="Remark_AwWallFinishesCeramic"></td>                    
                                  </tr>
                        
                                  <tr>
                                    <td >Stones</td>
                                    <td >2</td>
                                    {{-- <td >
                                      <select onblur="findTotalWall()" class="prawwall" name="AwWallFinishesStones" id="AwWallFinishesStones">
                                      <option selected disabled ></option>
                                      <option value="0">0</option>
                                      <option value="2" >2</option>
                                      </select>
                                    </td> --}}
                                    <td><input onblur="findTotalWall()" type="number" min="0" max="2" class="prawwall" name="AwWallFinishesStones" id="AwWallFinishesStones"></td>            
                                    {{-- <td><input onblur="findTotalConstructedWall()" type="number" min="0" max="2" class="prawwall_construction" name="Cons_AwWallFinishesStones" id="Cons_AwWallFinishesStones"></td>             --}}
                                    {{-- <td><input onblur="findTotalAwardedWall()" type="number" min="0" max="2" class="prawwall_awarded" name="Awarded_AwWallFinishesStones" id="Awarded_AwWallFinishesStones"></td>             --}}
                                    <td><input type="text" name="Remark_AwWallFinishesStones" id="Remark_AwWallFinishesStones"></td>                    
                                    <td><input type="file" name="Remark_AwWallFinishesStones" id="Remark_AwWallFinishesStones"></td>                    
                                  </tr>
                        
                                  <tr>
                                    <td >Pebblewash</td>
                                    <td >2</td>
                                    {{-- <td >
                                      <select onblur="findTotalWall()" class="prawwall" name="AwWallFinishesPebblewash" id="AwWallFinishesPebblewash">
                                      <option selected disabled ></option>
                                      <option value="0">0</option>
                                      <option value="2" >2</option>
                                      </select>
                                    </td> --}}
                                    <td><input onblur="findTotalWall()" type="number" min="0" max="2" class="prawwall" name="AwWallFinishesPebblewash" id="AwWallFinishesPebblewash"></td>            
                                    {{-- <td><input onblur="findTotalConstructedWall()" type="number" min="0" max="2" class="prawwall_construction" name="Cons_AwWallFinishesPebblewash" id="Cons_AwWallFinishesPebblewash"></td>             --}}
                                    {{-- <td><input onblur="findTotalAwardedWall()" type="number" min="0" max="2" class="prawwall_awarded" name="Awarded_AwWallFinishesPebblewash" id="Awarded_AwWallFinishesPebblewash"></td>             --}}
                                    <td><input type="text" name="Remark_AwWallFinishesPebblewash" id="Remark_AwWallFinishesPebblewash"></td>                    
                                    <td><input type="file" name="Remark_AwWallFinishesPebblewash" id="Remark_AwWallFinishesPebblewash"></td>                    
                                  </tr>
                        
                                  <tr>
                                    <td >Granite</td>
                                    <td >2</td>
                                    {{-- <td >
                                      <select onblur="findTotalWall()" class="prawwall" name="AwWallFinishesGranite" id="AwWallFinishesGranite">
                                      <option selected disabled ></option>
                                      <option value="0">0</option>
                                      <option value="2" >2</option>
                                      </select>
                                    </td> --}}
                                    <td><input onblur="findTotalWall()" type="number" min="0" max="2" class="prawwall" name="AwWallFinishesGranite" id="AwWallFinishesGranite"></td>            
                                    {{-- <td><input onblur="findTotalConstructedWall()" type="number" min="0" max="2" class="prawwall_construction" name="Cons_AwWallFinishesGranite" id="Cons_AwWallFinishesGranite"></td>             --}}
                                    {{-- <td><input onblur="findTotalAwardedWall()" type="number" min="0" max="2" class="prawwall_awarded" name="Awarded_AwWallFinishesGranite" id="Awarded_AwWallFinishesGranite"></td>             --}}
                                    <td><input type="text" name="Remark_AwWallFinishesGranite" id="Remark_AwWallFinishesGranite"></td>                    
                                    <td><input type="file" name="Remark_AwWallFinishesGranite" id="Remark_AwWallFinishesGranite"></td>                    
                                  </tr>
                        
                                  <tr>
                                    <td >Glass</td>
                                    <td >2</td>
                                    {{-- <td >
                                      <select onblur="findTotalWall()" class="prawwall" name="AwWallFinishesGlass" id="AwWallFinishesGlass">
                                      <option selected disabled ></option>
                                      <option value="0">0</option>
                                      <option value="2" >2</option>
                                      </select>
                                    </td> --}}
                                    <td><input onblur="findTotalWall()" type="number" min="0" max="2" class="prawwall" name="AwWallFinishesGlass" id="AwWallFinishesGlass"></td>            
                                    {{-- <td><input onblur="findTotalConstructedWall()" type="number" min="0" max="2" class="prawwall_construction" name="Cons_AwWallFinishesGlass" id="Cons_AwWallFinishesGlass"></td>             --}}
                                    {{-- <td><input onblur="findTotalAwardedWall()" type="number" min="0" max="2" class="prawwall_awarded" name="Awarded_AwWallFinishesGlass" id="Awarded_AwWallFinishesGlass"></td>            --}}
                                    <td><input type="text" name="Remark_AwWallFinishesGlass" id="Remark_AwWallFinishesGlass"></td>                    
                                    <td><input type="file" name="Remark_AwWallFinishesGlass" id="Remark_AwWallFinishesGlass"></td>                    
                                  </tr>
                        
                                  <tr>
                                    <td >Glass block</td>
                                    <td >2</td>
                                    {{-- <td >
                                      <select onblur="findTotalWall()" class="prawwall" name="AwWallFinishesGlassBlock" id="AwWallFinishesGlassBlock">
                                      <option selected disabled ></option>
                                      <option value="0">0</option>
                                      <option value="2" >2</option>
                                      </select>
                                    </td> --}}
                                    <td><input onblur="findTotalWall()" type="number" min="0" max="2" class="prawwall" name="AwWallFinishesGlassBlock" id="AwWallFinishesGlassBlock"></td>            
                                    {{-- <td><input onblur="findTotalConstructedWall()" type="number" min="0" max="2" class="prawwall_construction" name="Cons_AwWallFinishesGlassBlock" id="Cons_AwWallFinishesGlassBlock"></td>             --}}
                                    {{-- <td><input onblur="findTotalAwardedWall()" type="number" min="0" max="2" class="prawwall_awarded" name="Awarded_AwWallFinishesGlassBlock" id="Awarded_AwWallFinishesGlassBlock"></td>            --}}
                                    <td><input type="text" name="Remark_AwWallFinishesGlassBlock" id="Remark_AwWallFinishesGlassBlock"></td>                    
                                    <td><input type="file" name="Remark_AwWallFinishesGlassBlock" id="Remark_AwWallFinishesGlassBlock"></td>                    
                                  </tr>
                        
                                  <tr>
                                    <td >Timber panelling</td>
                                    <td >2</td>
                                    {{-- <td >
                                      <select onblur="findTotalWall()" class="prawwall" name="AwWallFinishesTimber" id="AwWallFinishesTimber">
                                      <option selected disabled ></option>
                                      <option value="0">0</option>
                                      <option value="2" >2</option>
                                      </select>
                                    </td> --}}
                                    <td><input onblur="findTotalWall()" type="number" min="0" max="2" class="prawwall" name="AwWallFinishesTimber" id="AwWallFinishesTimber"></td>            
                                    {{-- <td><input onblur="findTotalConstructedWall()" type="number" min="0" max="2" class="prawwall_construction" name="Cons_AwWallFinishesTimber" id="Cons_AwWallFinishesTimber"></td>             --}}
                                    {{-- <td><input onblur="findTotalAwardedWall()" type="number" min="0" max="2" class="prawwall_awarded" name="Awarded_AwWallFinishesTimber" id="Awarded_AwWallFinishesTimber"></td>             --}}
                                    <td><input type="text" name="Remark_AwWallFinishesTimber" id="Remark_AwWallFinishesTimber"></td>                    
                                    <td><input type="file" name="Remark_AwWallFinishesTimber" id="Remark_AwWallFinishesTimber"></td>                    
                                  </tr>
                        
                                  <tr>
                                    <td >Plaster</td>
                                    <td >2</td>
                                    {{-- <td >
                                      <select onblur="findTotalWall()" class="prawwall" name="AwWallFinishesPaster" id="AwWallFinishesPaster">
                                      <option selected disabled ></option>
                                      <option value="0">0</option>
                                      <option value="2" >2</option>
                                      </select>
                                    </td> --}}
                                    <td><input onblur="findTotalWall()" type="number" min="0" max="2" class="prawwall" name="AwWallFinishesPaster" id="AwWallFinishesPaster"></td>            
                                    {{-- <td><input onblur="findTotalConstructedWall()" type="number" min="0" max="2" class="prawwall_construction" name="Cons_AwWallFinishesPaster" id="Cons_AwWallFinishesPaster"></td>             --}}
                                    {{-- <td><input onblur="findTotalAwardedWall()" type="number" min="0" max="2" class="prawwall_awarded" name="Awarded_AwWallFinishesPaster" id="Awarded_AwWallFinishesPaster"></td>             --}}
                                    <td><input type="text" name="Remark_AwWallFinishesPaster" id="Remark_AwWallFinishesPaster"></td>                    
                                    <td><input type="file" name="Remark_AwWallFinishesPaster" id="Remark_AwWallFinishesPaster"></td>                    
                                  </tr>
                        
                                  <tr>
                                    <td >Growall</td>
                                    <td >2</td>
                                    {{-- <td >
                                      <select onblur="findTotalWall()" class="prawwall" name="AwWallFinishesGrowall" id="AwWallFinishesGrowall">
                                      <option selected disabled ></option>
                                      <option value="0">0</option>
                                      <option value="2" >2</option>
                                      </select>
                                    </td> --}}
                                    <td><input onblur="findTotalWall()" type="number" min="0" max="2" class="prawwall" name="AwWallFinishesGrowall" id="AwWallFinishesGrowall"></td>            
                                    {{-- <td><input onblur="findTotalConstructedWall()" type="number" min="0" max="2" class="prawwall_construction" name="Cons_AwWallFinishesGrowall" id="Cons_AwWallFinishesGrowall"></td>             --}}
                                    {{-- <td><input onblur="findTotalAwardedWall()" type="number" min="0" max="2" class="prawwall_awarded" name="Awarded_AwWallFinishesGrowall" id="Awarded_AwWallFinishesGrowall"></td>              --}}
                                    <td><input type="text" name="Remark_AwWallFinishesGrowall" id="Remark_AwWallFinishesGrowall"></td>                    
                                    <td><input type="file" name="Remark_AwWallFinishesGrowall" id="Remark_AwWallFinishesGrowall"></td>                    
                                  </tr>
                      
                                  <tr style="display: none">
                                    <td>markahPRAwWall <input type="text" name="markahPRAwWall" id="markahPRAwWall" /></td>            
                                  </tr>
                      
                                  <tr style="display: none">
                                    <td>markahPRAwWallConstruction <input type="text" name="Cons_markahPRAwWall" id="Cons_markahPRAwWall" /></td>            
                                  </tr>
                      
                                  <tr style="display: none">
                                    <td>markahPRAwWallAwarded <input type="text" name="Awarded_markahPRAwWall" id="Awarded_markahPRAwWall" /></td>            
                                  </tr>

                                  <tr class="text-center">
                                    <td rowspan="4" >1</td>
                                    <td rowspan="4">Frames</td>
                                    <td >Aluminium</td>
                                    <td >2</td>
                                    <td><input onblur="findTotalWindow()" min="0" max="2" type="number" class="arkitek" name="AwWindowFramesAluminium" id="AwWindowFramesAluminium"></td>            
                                    {{-- <td><input onblur="findTotalWindowConstruction()" min="0" max="2" type="number" class="window_construction" name="Cons_AwWindowFramesAluminium" id="Cons_AwWindowFramesAluminium"></td>             --}}
                                    {{-- <td><input onblur="findTotalWindowAwarded()" min="0" max="2" type="number" class="window_awarded" name="Awarded_AwWindowFramesAluminium" id="Awarded_AwWindowFramesAluminium"></td>                         --}}
                                    <td><input type="text" name="Remark_AwWindowFramesAluminium" id="Remark_AwWindowFramesAluminium"></td>                    
                                    <td><input type="file" name="Remark_AwWindowFramesAluminium" id="Remark_AwWindowFramesAluminium"></td>                    
                                  </tr>
                        
                                  <tr>
                                    <td >Mild steel</td>
                                    <td >2</td>
                                    <td><input onblur="findTotalWindow()" type="number" min="0" max="2" class="arkitek" name="AwWindowFramesMildSteel" id="AwWindowFramesMildSteel"></td>            
                                    {{-- <td><input onblur="findTotalWindowConstruction()" min="0" max="2" type="number" class="window_construction" name="Cons_AwWindowFramesMildSteel" id="Cons_AwWindowFramesMildSteel"></td>             --}}
                                    {{-- <td><input onblur="findTotalWindowAwarded()" min="0" max="2" type="number" class="window_awarded" name="Awarded_AwWindowFramesMildSteel" id="Awarded_AwWindowFramesMildSteel"></td>             --}}
                                    <td><input type="text" name="Remark_AwWindowFramesMildSteel" id="Remark_AwWindowFramesMildSteel"></td>                    
                                    <td><input type="file" name="Remark_AwWindowFramesMildSteel" id="Remark_AwWindowFramesMildSteel"></td>                    
                                  </tr>
                        
                                  <tr>
                                    
                                    <td >Timber</td>
                                    <td >2</td>
                                    <td><input onblur="findTotalWindow()" type="number" min="0" max="2" class="arkitek" name="AwWindowFramesTimber" id="AwWindowFramesTimber"></td>            
                                    {{-- <td><input onblur="findTotalWindowConstruction()" min="0" max="2" type="number" class="window_construction" name="Cons_AwWindowFramesTimber" id="Cons_AwWindowFramesTimber"></td>             --}}
                                    {{-- <td><input onblur="findTotalWindowAwarded()" min="0" max="2" type="number" class="window_awarded" name="Awarded_AwWindowFramesTimber" id="Awarded_AwWindowFramesTimber"></td>             --}}
                                    <td><input type="text" name="Remark_AwWindowFramesTimber" id="Remark_AwWindowFramesTimber"></td>                    
                                    <td><input type="file" name="Remark_AwWindowFramesTimber" id="Remark_AwWindowFramesTimber"></td>                    
                                  </tr>
                        
                                  <tr>
                                    <td >UPVC</td>
                                    <td >2</td>
                                    <td><input onblur="findTotalWindow()" type="number" min="0" max="2" class="arkitek" name="AwWindowFramesUpvc" id="AwWindowFramesUpvc"></td>            
                                    {{-- <td><input onblur="findTotalWindowConstruction()" min="0" max="2" type="number" class="window_construction" name="Cons_AwWindowFramesUpvc" id="Cons_AwWindowFramesUpvc"></td>             --}}
                                    {{-- <td><input onblur="findTotalWindowAwarded()" min="0" max="2" type="number" class="window_awarded" name="Awarded_AwWindowFramesUpvc" id="Awarded_AwWindowFramesUpvc"></td>             --}}
                                    <td><input type="text" name="Remark_AwWindowFramesUpvc" id="Remark_AwWindowFramesUpvc"></td>                    
                                    <td><input type="file" name="Remark_AwWindowFramesUpvc" id="Remark_AwWindowFramesUpvc"></td>                    
                                  </tr>
                                  
                                  <tr>
                                    <td rowspan="4">2</td>
                                    <td rowspan="4">Sub component (panel)</td>
                                    <td >Glass</td>
                                    <td >2</td>
                                    <td><input onblur="findTotalWindow()" type="number" min="0" max="2" class="arkitek" name="AwWindowPanelGlass" id="AwWindowPanelGlass"></td>            
                                    {{-- <td><input onblur="findTotalWindowConstruction()" min="0" max="2" type="number" class="window_construction" name="Cons_AwWindowPanelGlass" id="Cons_AwWindowPanelGlass"></td>             --}}
                                    {{-- <td><input onblur="findTotalWindowAwarded()" min="0" max="2" type="number" class="window_awarded" name="Awarded_AwWindowPanelGlass" id="Awarded_AwWindowPanelGlass"></td>             --}}
                                    <td><input type="text" name="Remark_AwWindowPanelGlass" id="Remark_AwWindowPanelGlass"></td>                    
                                    <td><input type="file" name="Remark_AwWindowPanelGlass" id="Remark_AwWindowPanelGlass"></td>                    
                                  </tr>
                        
                                  <tr>
                                    <td >Timber</td>
                                    <td >2</td>
                                    <td><input onblur="findTotalWindow()" type="number" min="0" max="2" class="arkitek" name="AwWindowPanelTimber" id="AwWindowPanelTimber"></td>            
                                    {{-- <td><input onblur="findTotalWindowConstruction()" min="0" max="2" type="number" class="window_construction" name="Cons_AwWindowPanelTimber" id="Cons_AwWindowPanelTimber"></td>             --}}
                                    {{-- <td><input onblur="findTotalWindowAwarded()" min="0" max="2" type="number" class="window_awarded" name="Awarded_AwWindowPanelTimber" id="Awarded_AwWindowPanelTimber"></td>             --}}
                                    <td><input type="text" name="Remark_AwWindowPanelTimber" id="Remark_AwWindowPanelTimber"></td>                    
                                    <td><input type="file" name="Remark_AwWindowPanelTimber" id="Remark_AwWindowPanelTimber"></td>                    
                                  </tr>
                        
                                  <tr>
                                    <td >Aluminium</td>
                                    <td >2</td>
                                    <td><input onblur="findTotalWindow()" type="number" min="0" max="2" class="arkitek" name="AwWindowPanelAluminium" id="AwWindowPanelAluminium"></td>            
                                    {{-- <td><input onblur="findTotalWindowConstruction()" min="0" max="2" type="number" class="window_construction" name="Cons_AwWindowPanelAluminium" id="Cons_AwWindowPanelAluminium"></td>             --}}
                                    {{-- <td><input onblur="findTotalWindowAwarded()" min="0" max="2" type="number" class="window_awarded" name="Awarded_AwWindowPanelAluminium" id="Awarded_AwWindowPanelAluminium"></td>             --}}
                                    <td><input type="text" name="Remark_AwWindowPanelAluminium" id="Remark_AwWindowPanelAluminium"></td>                    
                                    <td><input type="file" name="Remark_AwWindowPanelAluminium" id="Remark_AwWindowPanelAluminium"></td>                    
                                  </tr>
                        
                                  <tr>
                                    <td >Steel</td>
                                    <td >2</td>
                                    <td><input onblur="findTotalWindow()" type="number" min="0" max="2" class="arkitek" name="AwWindowPanelSteel" id="AwWindowPanelSteel"></td>            
                                    {{-- <td><input onblur="findTotalWindowConstruction()" min="0" max="2" type="number" class="window_construction" name="Cons_AwWindowPanelAluminium" id="Cons_AwWindowPanelAluminium"></td>             --}}
                                    {{-- <td><input onblur="findTotalWindowAwarded()" min="0" max="2" type="number" class="window_awarded" name="Awarded_AwWindowPanelAluminium" id="Awarded_AwWindowPanelAluminium"></td>             --}}
                                    <td><input type="text" name="Remark_AwWindowPanelAluminium" id="Remark_AwWindowPanelAluminium"></td>                    
                                    <td><input type="FILE" name="Remark_AwWindowPanelAluminium" id="Remark_AwWindowPanelAluminium"></td>                    
                                  </tr>
                        
                                  <tr>
                                    <td rowspan="4">3</td>
                                    <td rowspan="4">Ironmongeries</td>
                                    <td >Friction Stay</td>
                                    <td >2</td>
                                    <td><input onblur="findTotalWindow()" type="number" min="0" max="2" class="arkitek" name="AwWindowIronFriction" id="AwWindowIronFriction"></td>            
                                    {{-- <td><input onblur="findTotalWindowConstruction()" min="0" max="2" type="number" class="window_construction" name="Cons_AwWindowIronFriction" id="Cons_AwWindowIronFriction"></td>             --}}
                                    {{-- <td><input onblur="findTotalWindowAwarded()" min="0" max="2" type="number" class="window_awarded" name="Awarded_AwWindowIronFriction" id="Awarded_AwWindowIronFriction"></td>             --}}
                                    <td><input type="text" name="Remark_AwWindowIronFriction" id="Remark_AwWindowIronFriction"></td>                    
                                    <td><input type="file" name="Remark_AwWindowIronFriction" id="Remark_AwWindowIronFriction"></td>                    
                                  </tr>
                        
                                  <tr>
                                    <td >Hinges</td>
                                    <td >2</td>
                                    <td><input onblur="findTotalWindow()" type="number" min="0" max="2" class="arkitek" name="AwWindowIronHinges" id="AwWindowIronHinges"></td>            
                                    {{-- <td><input onblur="findTotalWindowConstruction()" min="0" max="2" type="number" class="window_construction" name="Cons_AwWindowIronHinges" id="Cons_AwWindowIronHinges"></td>             --}}
                                    {{-- <td><input onblur="findTotalWindowAwarded()" min="0" max="2" type="number" class="window_awarded" name="Awarded_AwWindowIronHinges" id="Awarded_AwWindowIronHinges"></td>             --}}
                                    <td><input type="text" name="Remark_AwWindowIronHinges" id="Remark_AwWindowIronHinges"></td>                    
                                    <td><input type="file" name="Remark_AwWindowIronHinges" id="Remark_AwWindowIronHinges"></td>                    
                                  </tr>
                        
                                  <tr>
                                    <td >Handle</td>
                                    <td >2</td>
                                    <td><input onblur="findTotalWindow()" type="number" min="0" max="2" class="arkitek" name="AwWindowIronHandle" id="AwWindowIronHandle"></td>            
                                    {{-- <td><input onblur="findTotalWindowConstruction()" min="0" max="2" type="number" class="window_construction" name="Cons_AwWindowIronHandle" id="Cons_AwWindowIronHandle"></td>             --}}
                                    {{-- <td><input onblur="findTotalWindowAwarded()" min="0" max="2" type="number" class="window_awarded" name="Awarded_AwWindowIronHandle" id="Awarded_AwWindowIronHandle"></td>             --}}
                                    <td><input type="text" name="Remark_AwWindowIronHandle" id="Remark_AwWindowIronHandle"></td>                    
                                    <td><input type="file" name="Remark_AwWindowIronHandle" id="Remark_AwWindowIronHandle"></td>                    
                                  </tr>
                        
                                  <tr>
                                    <td >Rubber Gasket</td>
                                    <td >2</td>
                                    <td><input onblur="findTotalWindow()" type="number" min="0" max="2" class="arkitek" name="AwWindowIronRubber" id="AwWindowIronRubber"></td>            
                                    {{-- <td><input onblur="findTotalWindowConstruction()" min="0" max="2" type="number" class="window_construction" name="Cons_AwWindowIronRubber" id="Cons_AwWindowIronRubber"></td>             --}}
                                    {{-- <td><input onblur="findTotalWindowAwarded()" min="0" max="2" type="number" class="window_awarded" name="Awarded_AwWindowIronRubber" id="Awarded_AwWindowIronRubber"></td>            --}}
                                    <td><input type="text" name="Remark_AwWindowIronRubber" id="Remark_AwWindowIronRubber"></td>                    
                                    <td><input type="file" name="Remark_AwWindowIronRubber" id="Remark_AwWindowIronRubber"></td>                    
                                  </tr>
                        
                                  <tr>
                                    <td rowspan="3">4</td>
                                    <td rowspan="3">Finishes</td>
                                    <td >Anodised Coatings</td>
                                    <td >2</td>
                                    <td> <input onblur="findTotalWindow()" type="number" min="0" max="2" class="arkitek" name="AwWindowFinishesAnodised" id="AwWindowFinishesAnodised"></td>            
                                    {{-- <td><input onblur="findTotalWindowConstruction()" min="0" max="2" type="number" class="window_construction" name="Cons_AwWindowFinishesAnodised" id="Cons_AwWindowFinishesAnodised"></td>             --}}
                                    {{-- <td><input onblur="findTotalWindowAwarded()" min="0" max="2" type="number" class="window_awarded" name="Awarded_AwWindowFinishesAnodised" id="Awarded_AwWindowFinishesAnodised"></td> --}}
                                    <td><input type="text" name="Remark_AwWindowFinishesAnodised" id="Remark_AwWindowFinishesAnodised"></td>                    
                                    <td><input type="file" name="Remark_AwWindowFinishesAnodised" id="Remark_AwWindowFinishesAnodised"></td>                    
                                  </tr>
                        
                                  <tr>
                                    <td >Paint</td>
                                    <td >2</td>
                                    <td><input onblur="findTotalWindow()" type="number" min="0" max="2" class="arkitek" name="AwWindowFinishesPaint" id="AwWindowFinishesPaint"></td>            
                                    {{-- <td><input onblur="findTotalWindowConstruction()" min="0" max="2" type="number" class="window_construction" name="Cons_AwWindowFinishesPaint" id="Cons_AwWindowFinishesPaint"></td>             --}}
                                    {{-- <td><input onblur="findTotalWindowAwarded()" min="0" max="2" type="number" class="window_awarded" name="Awarded_AwWindowFinishesPaint" id="Awarded_AwWindowFinishesPaint"></td>            --}}
                                    <td><input type="text" name="Remark_AwWindowFinishesPaint" id="Remark_AwWindowFinishesPaint"></td>                    
                                    <td><input type="file" name="Remark_AwWindowFinishesPaint" id="Remark_AwWindowFinishesPaint"></td>                    
                                  </tr>
                        
                                  <tr>
                                    <td >Varnish/shellac</td>
                                    <td >2</td>
                                    <td><input onblur="findTotalWindow()" type="number" min="0" max="2" class="arkitek" name="AwWindowFinishesVarnish" id="AwWindowFinishesVarnish"></td>            
                                    {{-- <td><input onblur="findTotalWindowConstruction()" min="0" max="2" type="number" class="window_construction" name="Cons_AwWindowFinishesVarnish" id="Cons_AwWindowFinishesVarnish"></td>             --}}
                                    {{-- <td><input onblur="findTotalWindowAwarded()" min="0" max="2" type="number" class="window_awarded" name="Awarded_AwWindowFinishesVarnish" id="Awarded_AwWindowFinishesVarnish"></td>             --}}
                                    <td><input type="text" name="Remark_AwWindowFinishesVarnish" id="Remark_AwWindowFinishesVarnish"></td>                    
                                    <td><input type="file" name="Remark_AwWindowFinishesVarnish" id="Remark_AwWindowFinishesVarnish"></td>                    
                                  </tr>
                        
                                  <tr style="display: none">
                                    <td>markahPRAwWindow <input type="text" name="markahPRAwWindow" id="markahPRAwWindow" /></td>            
                                  </tr>
                        
                                  <tr style="display: none">
                                    <td>markahPRAwWindowConstruction <input type="text" name="Cons_markahPRAwWindow" id="Cons_markahPRAwWindow" /></td>            
                                  </tr>
                        
                                  <tr style="display: none">
                                    <td>markahPRAwWindowAwarded <input type="text" name="Awarded_markahPRAwWindow" id="Awarded_markahPRAwWindow" /></td>            
                                  </tr>
                        
                                  {{-- New table for door --}}
                                  <tr class="text-white bg-orange-jkr">
                                    <th colspan="8">List of products for architectural works - Door</th>
                                  </tr>
                        
                                  <tr>
                                    <td rowspan="4">1</td>
                                    <td rowspan="4">Frames</td>
                                    <td >Aluminium</td>
                                    <td >2</td>
                                    <td> <input onblur="findTotalDoor()" type="number" min="0" max="2" class="door" name="AwDoorFramesAluminium" id="AwDoorFramesAluminium"></td>            
                                    {{-- <td> <input onblur="findTotalDoorConstruction()" type="number" min="0" max="2" class="door_construction" name="Cons_AwDoorFramesAluminium" id="Cons_AwDoorFramesAluminium"></td>             --}}
                                    {{-- <td> <input onblur="findTotalDoorAwarded()" type="number" min="0" max="2" class="door_awarded" name="Awarded_AwDoorFramesAluminium" id="Awarded_AwDoorFramesAluminium"></td>             --}}
                                    <td><input type="text" name="Remark_AwDoorFramesAluminium" id="Remark_AwDoorFramesAluminium"></td>                    
                                    <td><input type="file" name="Remark_AwDoorFramesAluminium" id="Remark_AwDoorFramesAluminium"></td>                    
                                  </tr>
                        
                                  <tr>
                                    <td >Mild steel</td>
                                    <td >2</td>
                                    <td><input onblur="findTotalDoor()" type="number" min="0" max="2" class="door" name="AwDoorFramesMildSteel" id="AwDoorFramesMildSteel"></td>            
                                    {{-- <td> <input onblur="findTotalDoorConstruction()" type="number" min="0" max="2" class="door_construction" name="Cons_AwDoorFramesMildSteel" id="Cons_AwDoorFramesMildSteel"></td>             --}}
                                    {{-- <td> <input onblur="findTotalDoorAwarded()" type="number" min="0" max="2" class="door_awarded" name="Awarded_AwDoorFramesMildSteel" id="Awarded_AwDoorFramesMildSteel"></td>             --}}
                                    <td><input type="text" name="Remark_AwDoorFramesMildSteel" id="Remark_AwDoorFramesMildSteel"></td>                    
                                    <td><input type="file" name="Remark_AwDoorFramesMildSteel" id="Remark_AwDoorFramesMildSteel"></td>                    
                                  </tr>
                        
                                  <tr>
                                    <td >Timber</td>
                                    <td >2</td>
                                    <td><input onblur="findTotalDoor()" type="number" min="0" max="2" class="door" name="AwDoorFramesTimber" id="AwDoorFramesTimber"></td>            
                                    {{-- <td> <input onblur="findTotalDoorConstruction()" type="number" min="0" max="2" class="door_construction" name="Cons_AwDoorFramesTimber" id="Cons_AwDoorFramesTimber"></td>             --}}
                                    {{-- <td> <input onblur="findTotalDoorAwarded()" type="number" min="0" max="2" class="door_awarded" name="Awarded_AwDoorFramesTimber" id="Awarded_AwDoorFramesTimber"></td>             --}}
                                    <td><input type="text" name="Remark_AwDoorFramesTimber" id="Remark_AwDoorFramesTimber"></td>                    
                                    <td><input type="file" name="Remark_AwDoorFramesTimber" id="Remark_AwDoorFramesTimber"></td>                    
                                  </tr>
                        
                                  <tr>
                                    <td >Upvc</td>
                                    <td >2</td>
                                    <td><input onblur="findTotalDoor()" type="number" min="0" max="2" class="door" name="AwDoorFramesUpvc" id="AwDoorFramesUpvc"></td>            
                                    {{-- <td> <input onblur="findTotalDoorConstruction()" type="number" min="0" max="2" class="door_construction" name="Cons_AwDoorFramesUpvc" id="Cons_AwDoorFramesUpvc"></td>             --}}
                                    {{-- <td> <input onblur="findTotalDoorAwarded()" type="number" min="0" max="2" class="door_awarded" name="Awarded_AwDoorFramesUpvc" id="Awarded_AwDoorFramesUpvc"></td>             --}}
                                    <td><input type="text" name="Remark_AwDoorFramesUpvc" id="Remark_AwDoorFramesUpvc"></td>
                                    <td><input type="file" name="Remark_AwDoorFramesUpvc" id="Remark_AwDoorFramesUpvc"></td>
                                  </tr>
                        
                                  <tr>
                                    <td rowspan="5">2</td>
                                    <td rowspan="5">Sub component (Panel)</td>
                                    <td >Timber</td>
                                    <td >2</td>
                                    <td><input onblur="findTotalDoor()" type="number" min="0" max="2" class="door" name="AwDoorPanelTimber" id="AwDoorPanelTimber"></td>            
                                    {{-- <td> <input onblur="findTotalDoorConstruction()" type="number" min="0" max="2" class="door_construction" name="Cons_AwDoorPanelTimber" id="Cons_AwDoorPanelTimber"></td>             --}}
                                    {{-- <td> <input onblur="findTotalDoorAwarded()" type="number" min="0" max="2" class="door_awarded" name="Awarded_AwDoorPanelTimber" id="Awarded_AwDoorPanelTimber"></td>             --}}
                                    <td><input type="text" name="Remark_AwDoorPanelTimber" id="Remark_AwDoorPanelTimber"></td>                   
                                    <td><input type="file" name="Remark_AwDoorPanelTimber" id="Remark_AwDoorPanelTimber"></td>                   
                                  </tr>
                        
                                  <tr>
                                    <td >Aluminium</td>
                                    <td >2</td>
                                    <td><input onblur="findTotalDoor()" type="number" min="0" max="2" class="door" name="AwDoorPanelAluminium" id="AwDoorPanelAluminium"></td>            
                                    {{-- <td> <input onblur="findTotalDoorConstruction()" type="number" min="0" max="2" class="door_construction" name="Cons_AwDoorPanelAluminium" id="Cons_AwDoorPanelAluminium"></td>             --}}
                                    {{-- <td> <input onblur="findTotalDoorAwarded()" type="number" min="0" max="2" class="door_awarded" name="Awarded_AwDoorPanelAluminium" id="Awarded_AwDoorPanelAluminium"></td>             --}}
                                    <td><input type="text" name="Remark_AwDoorPanelAluminium" id="Remark_AwDoorPanelAluminium"></td>
                                    <td><input type="file" name="Remark_AwDoorPanelAluminium" id="Remark_AwDoorPanelAluminium"></td>
                                  </tr>
                        
                                  <tr>
                                    <td >Upvc</td>
                                    <td >2</td>
                                    <td><input onblur="findTotalDoor()" type="number" min="0" max="2" class="door" name="AwDoorPanelUpvc" id="AwDoorPanelUpvc"></td>            
                                    {{-- <td> <input onblur="findTotalDoorConstruction()" type="number" min="0" max="2" class="door_construction" name="Cons_AwDoorPanelAluminium" id="Cons_AwDoorPanelAluminium"></td>             --}}
                                    {{-- <td> <input onblur="findTotalDoorAwarded()" type="number" min="0" max="2" class="door_awarded" name="Awarded_AwDoorPanelAluminium" id="Awarded_AwDoorPanelAluminium"></td>             --}}
                                    <td><input type="text" name="Remark_AwDoorPanelAluminium" id="Remark_AwDoorPanelAluminium"></td>
                                    <td><input type="file" name="Remark_AwDoorPanelAluminium" id="Remark_AwDoorPanelAluminium"></td>
                                  </tr>
                        
                                  <tr>
                                    <td >Steel</td>
                                    <td >2</td>
                                    <td><input onblur="findTotalDoor()" type="number" min="0" max="2" class="door" name="AwDoorPanelSteel" id="AwDoorPanelSteel"></td>            
                                    {{-- <td> <input onblur="findTotalDoorConstruction()" type="number" min="0" max="2" class="door_construction" name="Cons_AwDoorPanelSteel" id="Cons_AwDoorPanelSteel"></td>             --}}
                                    {{-- <td> <input onblur="findTotalDoorAwarded()" type="number" min="0" max="2" class="door_awarded" name="Awarded_AwDoorPanelSteel" id="Awarded_AwDoorPanelSteel"></td>             --}}
                                    <td><input type="text" name="Remark_AwDoorPanelSteel" id="Remark_AwDoorPanelSteel"></td>                    
                                    <td><input type="file" name="Remark_AwDoorPanelSteel" id="Remark_AwDoorPanelSteel"></td>                    
                                  </tr>
                        
                                  <tr>
                                    <td >Glass</td>
                                    <td >2</td>
                                    <td><input onblur="findTotalDoor()" type="number" min="0" max="2" class="door" name="AwDoorPanelGlass" id="AwDoorPanelGlass"></td>            
                                    {{-- <td> <input onblur="findTotalDoorConstruction()" type="number" min="0" max="2" class="door_construction" name="Cons_AwDoorPanelGlass" id="Cons_AwDoorPanelGlass"></td>             --}}
                                    {{-- <td> <input onblur="findTotalDoorAwarded()" type="number" min="0" max="2" class="door_awarded" name="Awarded_AwDoorPanelGlass" id="Awarded_AwDoorPanelGlass"></td>             --}}
                                    <td><input type="text" name="Remark_AwDoorPanelGlass" id="Remark_AwDoorPanelGlass"></td>                    
                                    <td><input type="file" name="Remark_AwDoorPanelGlass" id="Remark_AwDoorPanelGlass"></td>                    
                                  </tr>
                        
                                  <tr>
                                    <td rowspan="3">3</td>
                                    <td rowspan="3">Ironmongeries</td>
                                    <td >Lockset</td>
                                    <td >2</td>
                                    <td> <input onblur="findTotalDoor()" type="number" min="0" max="2" class="door" name="AwDoorIronLockset" id="AwDoorIronLockset"></td>            
                                    {{-- <td> <input onblur="findTotalDoorConstruction()" type="number" min="0" max="2" class="door_construction" name="Cons_AwDoorIronLockset" id="Cons_AwDoorIronLockset"></td>             --}}
                                    {{-- <td> <input onblur="findTotalDoorAwarded()" type="number" min="0" max="2" class="door_awarded" name="Awarded_AwDoorIronLockset" id="Awarded_AwDoorIronLockset"></td>             --}}
                                    <td><input type="text" name="Remark_AwDoorIronLockset" id="Remark_AwDoorIronLockset"></td>
                                    <td><input type="file" name="Remark_AwDoorIronLockset" id="Remark_AwDoorIronLockset"></td>
                                  </tr>
                        
                                  <tr>
                                    <td >Door closer</td>
                                    <td >2</td>
                                    <td><input onblur="findTotalDoor()" type="number" min="0" max="2" class="door" name="AwDoorIronDoorCloser" id="AwDoorIronDoorCloser"></td>            
                                    {{-- <td> <input onblur="findTotalDoorConstruction()" type="number" min="0" max="2" class="door_construction" name="Cons_AwDoorIronDoorCloser" id="Cons_AwDoorIronDoorCloser"></td>             --}}
                                    {{-- <td> <input onblur="findTotalDoorAwarded()" type="number" min="0" max="2" class="door_awarded" name="Awarded_AwDoorIronDoorCloser" id="Awarded_AwDoorIronDoorCloser"></td>             --}}
                                    <td><input type="text" name="Remark_AwDoorIronDoorCloser" id="Remark_AwDoorIronDoorCloser"></td>                   
                                    <td><input type="file" name="Remark_AwDoorIronDoorCloser" id="Remark_AwDoorIronDoorCloser"></td>                   
                                  </tr>
                        
                                  <tr>
                                    <td >Hinges</td>
                                    <td >2</td>
                                    <td><input onblur="findTotalDoor()" type="number" min="0" max="2" class="door" name="AwDoorIronHinges" id="AwDoorIronHinges"></td>            
                                    {{-- <td> <input onblur="findTotalDoorConstruction()" type="number" min="0" max="2" class="door_construction" name="Cons_AwDoorIronHinges" id="Cons_AwDoorIronHinges"></td>             --}}
                                    {{-- <td> <input onblur="findTotalDoorAwarded()" type="number" min="0" max="2" class="door_awarded" name="Awarded_AwDoorIronHinges" id="Awarded_AwDoorIronHinges"></td>             --}}
                                    <td><input type="text" name="Remark_AwDoorIronHinges" id="Remark_AwDoorIronHinges"></td>
                                    <td><input type="file" name="Remark_AwDoorIronHinges" id="Remark_AwDoorIronHinges"></td>
                                  </tr>
                        
                                  <tr>
                                    <td rowspan="3">4</td>
                                    <td rowspan="3">Finishes</td>
                                    <td >Anodised coatings</td>
                                    <td >2</td>
                                    <td> <input onblur="findTotalDoor()" type="number" min="0" max="2" class="door" name="AwDoorFinishesAnodised" id="AwDoorFinishesAnodised"></td>            
                                    {{-- <td> <input onblur="findTotalDoorConstruction()" type="number" min="0" max="2" class="door_construction" name="Cons_AwDoorFinishesAnodised" id="Cons_AwDoorFinishesAnodised"></td>             --}}
                                    {{-- <td> <input onblur="findTotalDoorAwarded()" type="number" min="0" max="2" class="door_awarded" name="Awarded_AwDoorFinishesAnodised" id="Awarded_AwDoorFinishesAnodised"></td>             --}}
                                    <td><input type="text" name="Remark_AwDoorFinishesAnodised" id="Remark_AwDoorFinishesAnodised"></td>                   
                                    <td><input type="file" name="Remark_AwDoorFinishesAnodised" id="Remark_AwDoorFinishesAnodised"></td>                   
                                  </tr>
                        
                                  <tr>
                                    <td >Paint</td>
                                    <td >2</td>
                                    <td><input onblur="findTotalDoor()" type="number" min="0" max="2" class="door" name="AwDoorFinishesPaint" id="AwDoorFinishesPaint"></td>            
                                    {{-- <td> <input onblur="findTotalDoorConstruction()" type="number" min="0" max="2" class="door_construction" name="Cons_AwDoorFinishesPaint" id="Cons_AwDoorFinishesPaint"></td>             --}}
                                    {{-- <td> <input onblur="findTotalDoorAwarded()" type="number" min="0" max="2" class="door_awarded" name="Awarded_AwDoorFinishesPaint" id="Awarded_AwDoorFinishesPaint"></td>             --}}
                                    <td><input type="text" name="Remark_AwDoorFinishesPaint" id="Remark_AwDoorFinishesPaint"></td>                    
                                    <td><input type="file" name="Remark_AwDoorFinishesPaint" id="Remark_AwDoorFinishesPaint"></td>                    
                                  </tr>
                        
                                  <tr>
                                    <td >Varnish/shellac</td>
                                    <td >2</td>
                                    <td><input onblur="findTotalDoor()" type="number" min="0" max="2" class="door" name="AwDoorFinishesVarnish" id="AwDoorFinishesVarnish"></td>            
                                    {{-- <td> <input onblur="findTotalDoorConstruction()" type="number" min="0" max="2" class="door_construction" name="Cons_AwDoorFinishesVarnish" id="Cons_AwDoorFinishesVarnish"></td>             --}}
                                    {{-- <td> <input onblur="findTotalDoorAwarded()" type="number" min="0" max="2" class="door_awarded" name="Awarded_AwDoorFinishesVarnish" id="Awarded_AwDoorFinishesVarnish"></td>             --}}
                                    <td><input type="text" name="Remark_AwDoorFinishesVarnish" id="Remark_AwDoorFinishesVarnish"></td>
                                    <td><input type="file" name="Remark_AwDoorFinishesVarnish" id="Remark_AwDoorFinishesVarnish"></td>
                                  </tr>
                        
                                  <tr style="display: none">
                                    <td>markahPRAwDoor<input type="text" name="markahPRAwDoor" id="markahPRAwDoor" />
                                    </td>
                                  </tr>
                        
                                  <tr style="display: none">
                                    <td>Cons_markahPRAwDoor<input type="text" name="Cons_markahPRAwDoor" id="Cons_markahPRAwDoor" />
                                    </td>
                                  </tr>
                        
                                  <tr style="display: none">
                                    <td>Awarded_markahPRAwDoor<input type="text" name="Awarded_markahPRAwDoor" id="Awarded_markahPRAwDoor" />
                                    </td>
                                  </tr>

                                  <tr class="text-center">
                                    <td rowspan="18" >1</td>
                                    <td rowspan="18">Floor</td>
                                    <td >Epoxy paint</td>
                                    <td >2</td>
                                    <td><input onblur="findTotalFloor()" type="number" min="0" max="2" class="floor" name="AwFloorFloorEpoxy" id="AwFloorFloorEpoxy"></td>            
                                    {{-- <td><input onblur="findTotalFloorConstruction()" type="number" min="0" max="2" class="floor_construction" name="Cons_AwFloorFloorEpoxy" id="Cons_AwFloorFloorEpoxy"></td>             --}}
                                    {{-- <td><input onblur="findTotalFloorAwarded()" type="number" min="0" max="2" class="floor_awarded" name="Awarded_AwFloorFloorEpoxy" id="Awarded_AwFloorFloorEpoxy"></td>             --}}
                                    <td><input type="text" name="Remark_AwFloorFloorEpoxy" id="Remark_AwFloorFloorEpoxy"></td>                    
                                    <td><input type="file" name="Remark_AwFloorFloorEpoxy" id="Remark_AwFloorFloorEpoxy"></td>                    
                                  </tr>
                        
                                  <tr>
                                    <td >Floor hardener</td>
                                    <td >2</td>
                                    <td><input onblur="findTotalFloor()" type="number" min="0" max="2" class="floor" name="AwFloorFloorFloorHardener" id="AwFloorFloorFloorHardener"></td>            
                                    {{-- <td><input onblur="findTotalFloorConstruction()" type="number" min="0" max="2" class="floor_construction" name="Cons_AwFloorFloorFloorHardener" id="Cons_AwFloorFloorFloorHardener"></td>             --}}
                                    {{-- <td><input onblur="findTotalFloorAwarded()" type="number" min="0" max="2" class="floor_awarded" name="Awarded_AwFloorFloorFloorHardener" id="Awarded_AwFloorFloorFloorHardener"></td>             --}}
                                    <td><input type="text" name="Remark_AwFloorFloorFloorHardener" id="Remark_AwFloorFloorFloorHardener"></td>                   
                                    <td><input type="file" name="Remark_AwFloorFloorFloorHardener" id="Remark_AwFloorFloorFloorHardener"></td>                   
                                  </tr>
                        
                                  <tr>
                                    
                                    <td >Ceramic tiles</td>
                                    <td >2</td>
                                    <td><input onblur="findTotalFloor()" type="number" min="0" max="2" class="floor" name="AwFloorFloorCeramic" id="AwFloorFloorCeramic"></td>            
                                    {{-- <td><input onblur="findTotalFloorConstruction()" type="number" min="0" max="2" class="floor_construction" name="Cons_AwFloorFloorCeramic" id="Cons_AwFloorFloorCeramic"></td>             --}}
                                    {{-- <td><input onblur="findTotalFloorAwarded()" type="number" min="0" max="2" class="floor_awarded" name="Awarded_AwFloorFloorCeramic" id="Awarded_AwFloorFloorCeramic"></td>             --}}
                                    <td><input type="text" name="Remark_AwFloorFloorCeramic" id="Remark_AwFloorFloorCeramic"></td>                   
                                    <td><input type="file" name="Remark_AwFloorFloorCeramic" id="Remark_AwFloorFloorCeramic"></td>                   
                                  </tr>
                        
                                  <tr>
                                    <td >Stones</td>
                                    <td >2</td>
                                    <td><input onblur="findTotalFloor()" type="number" min="0" max="2" class="floor" name="AwFloorFloorStones" id="AwFloorFloorStones"></td>            
                                    {{-- <td><input onblur="findTotalFloorConstruction()" type="number" min="0" max="2" class="floor_construction" name="Cons_AwFloorFloorStones" id="Cons_AwFloorFloorStones"></td>             --}}
                                    {{-- <td><input onblur="findTotalFloorAwarded()" type="number" min="0" max="2" class="floor_awarded" name="Awarded_AwFloorFloorStones" id="Awarded_AwFloorFloorStones"></td>             --}}
                                    <td><input type="text" name="Remark_AwFloorFloorStones" id="Remark_AwFloorFloorStones"></td>                    
                                    <td><input type="file" name="Remark_AwFloorFloorStones" id="Remark_AwFloorFloorStones"></td>                    
                                  </tr>
                        
                                  <tr>
                                    <td >Granites</td>
                                    <td >2</td>
                                    <td><input onblur="findTotalFloor()" type="number" min="0" max="2" class="floor" name="AwFloorFloorGranite" id="AwFloorFloorGranite"></td>            
                                    {{-- <td><input onblur="findTotalFloorConstruction()" type="number" min="0" max="2" class="floor_construction" name="Cons_AwFloorFloorGranite" id="Cons_AwFloorFloorGranite"></td>             --}}
                                    {{-- <td><input onblur="findTotalFloorAwarded()" type="number" min="0" max="2" class="floor_awarded" name="Awarded_AwFloorFloorGranite" id="Awarded_AwFloorFloorGranite"></td>             --}}
                                    <td><input type="text" name="Remark_AwFloorFloorGranite" id="Remark_AwFloorFloorGranite"></td>                    
                                    <td><input type="file" name="Remark_AwFloorFloorGranite" id="Remark_AwFloorFloorGranite"></td>                    
                                  </tr>
                        
                                  <tr>
                                    <td >Marble</td>
                                    <td >2</td>
                                    <td><input onblur="findTotalFloor()" type="number" min="0" max="2" class="floor" name="AwFloorFloorMarble" id="AwFloorFloorMarble"></td>            
                                    {{-- <td><input onblur="findTotalFloorConstruction()" type="number" min="0" max="2" class="floor_construction" name="Cons_AwFloorFloorMarble" id="Cons_AwFloorFloorMarble"></td>             --}}
                                    {{-- <td><input onblur="findTotalFloorAwarded()" type="number" min="0" max="2" class="floor_awarded" name="Awarded_AwFloorFloorMarble" id="Awarded_AwFloorFloorMarble"></td>             --}}
                                    <td><input type="text" name="Remark_AwFloorFloorMarble" id="Remark_AwFloorFloorMarble"></td>                   
                                    <td><input type="file" name="Remark_AwFloorFloorMarble" id="Remark_AwFloorFloorMarble"></td>                   
                                  </tr>
                        
                                  <tr>
                                    <td >Carpet</td>
                                    <td >2</td>
                                    <td><input onblur="findTotalFloor()" type="number" min="0" max="2" class="floor" name="AwFloorFloorCarpet" id="AwFloorFloorCarpet"></td>            
                                    {{-- <td><input onblur="findTotalFloorConstruction()" type="number" min="0" max="2" class="floor_construction" name="Cons_AwFloorFloorCarpet" id="Cons_AwFloorFloorCarpet"></td>             --}}
                                    {{-- <td><input onblur="findTotalFloorAwarded()" type="number" min="0" max="2" class="floor_awarded" name="Awarded_AwFloorFloorCarpet" id="Awarded_AwFloorFloorCarpet"></td>             --}}
                                    <td><input type="text" name="Remark_AwFloorFloorCarpet" id="Remark_AwFloorFloorCarpet"></td>                   
                                    <td><input type="file" name="Remark_AwFloorFloorCarpet" id="Remark_AwFloorFloorCarpet"></td>                   
                                  </tr>
                        
                                  <tr>
                                    <td >Carpet underlay</td>
                                    <td >2</td>
                                    <td><input onblur="findTotalFloor()" type="number" min="0" max="2" class="floor" name="AwFloorFloorUnderlay" id="AwFloorFloorUnderlay"></td>            
                                    {{-- <td><input onblur="findTotalFloorConstruction()" type="number" min="0" max="2" class="floor_construction" name="Cons_AwFloorFloorUnderlay" id="Cons_AwFloorFloorUnderlay"></td>             --}}
                                    {{-- <td><input onblur="findTotalFloorAwarded()" type="number" min="0" max="2" class="floor_awarded" name="Awarded_AwFloorFloorUnderlay" id="Awarded_AwFloorFloorUnderlay"></td>             --}}
                                    <td><input type="text" name="Remark_AwFloorFloorUnderlay" id="Remark_AwFloorFloorUnderlay"></td>                    
                                    <td><input type="file" name="Remark_AwFloorFloorUnderlay" id="Remark_AwFloorFloorUnderlay"></td>                    
                                  </tr>
                        
                                  <tr>
                                    <td >Vinyl</td>
                                    <td >2</td>
                                    <td><input onblur="findTotalFloor()" type="number" min="0" max="2" class="floor" name="AwFloorFloorVinyl" id="AwFloorFloorVinyl"></td>            
                                    {{-- <td><input onblur="findTotalFloorConstruction()" type="number" min="0" max="2" class="floor_construction" name="Cons_AwFloorFloorVinyl" id="Cons_AwFloorFloorVinyl"></td>             --}}
                                    {{-- <td><input onblur="findTotalFloorAwarded()" type="number" min="0" max="2" class="floor_awarded" name="Awarded_AwFloorFloorVinyl" id="Awarded_AwFloorFloorVinyl"></td>             --}}
                                    <td><input type="text" name="Remark_AwFloorFloorVinyl" id="Remark_AwFloorFloorVinyl"></td>                   
                                    <td><input type="file" name="Remark_AwFloorFloorVinyl" id="Remark_AwFloorFloorVinyl"></td>                   
                                  </tr>
                        
                                  <tr>
                                    <td >Timber</td>
                                    <td >2</td>
                                    <td><input onblur="findTotalFloor()" type="number" min="0" max="2" class="floor" name="AwFloorFloorTimber" id="AwFloorFloorTimber"></td>            
                                    {{-- <td><input onblur="findTotalFloorConstruction()" type="number" min="0" max="2" class="floor_construction" name="Cons_AwFloorFloorTimber" id="Cons_AwFloorFloorTimber"></td>             --}}
                                    {{-- <td><input onblur="findTotalFloorAwarded()" type="number" min="0" max="2" class="floor_awarded" name="Awarded_AwFloorFloorTimber" id="Awarded_AwFloorFloorTimber"></td>             --}}
                                    <td><input type="text" name="Remark_AwFloorFloorTimber" id="Remark_AwFloorFloorTimber"></td>                   
                                    <td><input type="file" name="Remark_AwFloorFloorTimber" id="Remark_AwFloorFloorTimber"></td>                   
                                  </tr>
                        
                                  <tr>
                                    <td >Interlocking pavers</td>
                                    <td >2</td>
                                    <td><input onblur="findTotalFloor()" type="number" min="0" max="2" class="floor" name="AwFloorFloorPavers" id="AwFloorFloorPavers"></td>            
                                    {{-- <td><input onblur="findTotalFloorConstruction()" type="number" min="0" max="2" class="floor_construction" name="Cons_AwFloorFloorPavers" id="Cons_AwFloorFloorPavers"></td>             --}}
                                    {{-- <td><input onblur="findTotalFloorAwarded()" type="number" min="0" max="2" class="floor_awarded" name="Awarded_AwFloorFloorPavers" id="Awarded_AwFloorFloorPavers"></td>             --}}
                                    <td><input type="text" name="Remark_AwFloorFloorPavers" id="Remark_AwFloorFloorPavers"></td>                    
                                    <td><input type="file" name="Remark_AwFloorFloorPavers" id="Remark_AwFloorFloorPavers"></td>                    
                                  </tr>
                        
                                  <tr>
                                    <td >Pebble wash</td>
                                    <td >2</td>
                                    <td><input onblur="findTotalFloor()" type="number" min="0" max="2" class="floor" name="AwFloorFloorPebble" id="AwFloorFloorPebble"></td>            
                                    {{-- <td><input onblur="findTotalFloorConstruction()" type="number" min="0" max="2" class="floor_construction" name="Cons_AwFloorFloorPebble" id="Cons_AwFloorFloorPebble"></td>             --}}
                                    {{-- <td><input onblur="findTotalFloorAwarded()" type="number" min="0" max="2" class="floor_awarded" name="Awarded_AwFloorFloorPebble" id="Awarded_AwFloorFloorPebble"></td>             --}}
                                    <td><input type="text" name="Remark_AwFloorFloorPebble" id="Remark_AwFloorFloorPebble"></td>                   
                                    <td><input type="file" name="Remark_AwFloorFloorPebble" id="Remark_AwFloorFloorPebble"></td>                   
                                  </tr>
                        
                                  <tr>
                                    <td >Bamboo</td>
                                    <td >2</td>
                                    <td><input onblur="findTotalFloor()" type="number" min="0" max="2" class="floor" name="AwFloorFloorBamboo" id="AwFloorFloorBamboo"></td>            
                                    {{-- <td><input onblur="findTotalFloorConstruction()" type="number" min="0" max="2" class="floor_construction" name="Cons_AwFloorFloorBamboo" id="Cons_AwFloorFloorBamboo"></td>             --}}
                                    {{-- <td><input onblur="findTotalFloorAwarded()" type="number" min="0" max="2" class="floor_awarded" name="Awarded_AwFloorFloorBamboo" id="Awarded_AwFloorFloorBamboo"></td>             --}}
                                    <td><input type="text" name="Remark_AwFloorFloorBamboo" id="Remark_AwFloorFloorBamboo"></td>                  
                                    <td><input type="file" name="Remark_AwFloorFloorBamboo" id="Remark_AwFloorFloorBamboo"></td>                  
                                  </tr>
                        
                                  <tr>
                                    <td >Cement render</td>
                                    <td >2</td>
                                    <td><input onblur="findTotalFloor()" type="number" min="0" max="2" class="floor" name="AwFloorFloorCement" id="AwFloorFloorCement"></td>            
                                    {{-- <td><input onblur="findTotalFloorConstruction()" type="number" min="0" max="2" class="floor_construction" name="Cons_AwFloorFloorCement" id="Cons_AwFloorFloorCement"></td>             --}}
                                    {{-- <td><input onblur="findTotalFloorAwarded()" type="number" min="0" max="2" class="floor_awarded" name="Awarded_AwFloorFloorCement" id="Awarded_AwFloorFloorCement"></td>             --}}
                                    <td><input type="text" name="Remark_AwFloorFloorCement" id="Remark_AwFloorFloorCement"></td>                    
                                    <td><input type="file" name="Remark_AwFloorFloorCement" id="Remark_AwFloorFloorCement"></td>                    
                                  </tr>
                        
                                  <tr>
                                    <td >Marmoleum</td>
                                    <td >2</td>
                                    <td><input onblur="findTotalFloor()" type="number" min="0" max="2" class="floor" name="AwFloorFloorMarmoleum" id="AwFloorFloorMarmoleum"></td>            
                                    {{-- <td><input onblur="findTotalFloorConstruction()" type="number" min="0" max="2" class="floor_construction" name="Cons_AwFloorFloorMarmoleum" id="Cons_AwFloorFloorMarmoleum"></td>             --}}
                                    {{-- <td><input onblur="findTotalFloorAwarded()" type="number" min="0" max="2" class="floor_awarded" name="Awarded_AwFloorFloorMarmoleum" id="Awarded_AwFloorFloorMarmoleum"></td>             --}}
                                    <td><input type="text" name="Remark_AwFloorFloorMarmoleum" id="Remark_AwFloorFloorMarmoleum"></td>                    
                                    <td><input type="file" name="Remark_AwFloorFloorMarmoleum" id="Remark_AwFloorFloorMarmoleum"></td>                    
                                  </tr>
                        
                                  <tr>
                                    <td >Rubber mat(playgrouubd)</td>
                                    <td >2</td>
                                    <td><input onblur="findTotalFloor()" type="number" min="0" max="2" class="floor" name="AwFloorFloorRubber" id="AwFloorFloorRubber"></td>            
                                    {{-- <td><input onblur="findTotalFloorConstruction()" type="number" min="0" max="2" class="floor_construction" name="Cons_AwFloorFloorRubber" id="Cons_AwFloorFloorRubber"></td>             --}}
                                    {{-- <td><input onblur="findTotalFloorAwarded()" type="number" min="0" max="2" class="floor_awarded" name="Awarded_AwFloorFloorRubber" id="Awarded_AwFloorFloorRubber"></td>             --}}
                                    <td><input type="text" name="Remark_AwFloorFloorRubber" id="Remark_AwFloorFloorRubber"></td>                    
                                    <td><input type="file" name="Remark_AwFloorFloorRubber" id="Remark_AwFloorFloorRubber"></td>                    
                                  </tr>
                        
                                  <tr>
                                    <td >Concrete imprint</td>
                                    <td >2</td>
                                    <td><input onblur="findTotalFloor()" type="number" min="0" max="2" class="floor" name="AwFloorFloorConcrete" id="AwFloorFloorConcrete"></td>            
                                    {{-- <td><input onblur="findTotalFloorConstruction()" type="number" min="0" max="2" class="floor_construction" name="Cons_AwFloorFloorConcrete" id="Cons_AwFloorFloorConcrete"></td>             --}}
                                    {{-- <td><input onblur="findTotalFloorAwarded()" type="number" min="0" max="2" class="floor_awarded" name="Awarded_AwFloorFloorConcrete" id="Awarded_AwFloorFloorConcrete"></td>             --}}
                                    <td><input type="text" name="Remark_AwFloorFloorConcrete" id="Remark_AwFloorFloorConcrete"></td>                   
                                    <td><input type="file" name="Remark_AwFloorFloorConcrete" id="Remark_AwFloorFloorConcrete"></td>                   
                                  </tr>
                        
                                  <tr>
                                    <td >Laminated flooring</td>
                                    <td >2</td>
                                    <td><input onblur="findTotalFloor()" type="number" min="0" max="2" class="floor" name="AwFloorFloorLaminate" id="AwFloorFloorLaminate"></td>            
                                    {{-- <td><input onblur="findTotalFloorConstruction()" type="number" min="0" max="2" class="floor_construction" name="Cons_AwFloorFloorLaminate" id="Cons_AwFloorFloorLaminate"></td>             --}}
                                    {{-- <td><input onblur="findTotalFloorAwarded()" type="number" min="0" max="2" class="floor_awarded" name="Awarded_AwFloorFloorLaminate" id="Awarded_AwFloorFloorLaminate"></td>             --}}
                                    <td><input type="text" name="Remark_AwFloorFloorLaminate" id="Remark_AwFloorFloorLaminate"></td>                   
                                    <td><input type="file" name="Remark_AwFloorFloorLaminate" id="Remark_AwFloorFloorLaminate"></td>                   
                                  </tr>
                                  
                                  <tr>
                                    <td rowspan="3">2</td>
                                    <td rowspan="3">Water proofing</td>
                                    <td >Adhesive</td>
                                    <td >2</td>
                                    <td> <input onblur="findTotalFloor()" type="number" min="0" max="2" class="floor" name="AwFloorProofingAdhesive" id="AwFloorProofingAdhesive"></td>            
                                    {{-- <td><input onblur="findTotalFloorConstruction()" type="number" min="0" max="2" class="floor_construction" name="Cons_AwFloorProofingAdhesive" id="Cons_AwFloorProofingAdhesive"></td>             --}}
                                    {{-- <td><input onblur="findTotalFloorAwarded()" type="number" min="0" max="2" class="floor_awarded" name="Awarded_AwFloorProofingAdhesive" id="Awarded_AwFloorProofingAdhesive"></td>             --}}
                                    <td><input type="text" name="Remark_AwFloorProofingAdhesive" id="Remark_AwFloorProofingAdhesive"></td>                    
                                    <td><input type="file" name="Remark_AwFloorProofingAdhesive" id="Remark_AwFloorProofingAdhesive"></td>                    
                                  </tr>
                        
                                  <tr>
                                    <td >Sealant</td>
                                    <td >2</td>
                                    <td><input onblur="findTotalFloor()" type="number" min="0" max="2" class="floor" name="AwFloorProofingSealant" id="AwFloorProofingSealant"></td>            
                                    {{-- <td><input onblur="findTotalFloorConstruction()" type="number" min="0" max="2" class="floor_construction" name="Cons_AwFloorProofingSealant" id="Cons_AwFloorProofingSealant"></td>             --}}
                                    {{-- <td><input onblur="findTotalFloorAwarded()" type="number" min="0" max="2" class="floor_awarded" name="Awarded_AwFloorProofingSealant" id="Awarded_AwFloorProofingSealant"></td>             --}}
                                    <td><input type="text" name="Remark_AwFloorProofingSealant" id="Remark_AwFloorProofingSealant"></td>                  
                                    <td><input type="file" name="Remark_AwFloorProofingSealant" id="Remark_AwFloorProofingSealant"></td>                  
                                  </tr>
                        
                                  <tr>
                                    <td >Grout</td>
                                    <td >2</td>
                                    <td><input onblur="findTotalFloor()" type="number" min="0" max="2" class="floor" name="AwFloorProofingGrout" id="AwFloorProofingGrout"></td>            
                                    {{-- <td><input onblur="findTotalFloorConstruction()" type="number" min="0" max="2" class="floor_construction" name="Cons_AwFloorProofingGrout" id="Cons_AwFloorProofingGrout"></td>             --}}
                                    {{-- <td><input onblur="findTotalFloorAwarded()" type="number" min="0" max="2" class="floor_awarded" name="Awarded_AwFloorProofingGrout" id="Awarded_AwFloorProofingGrout"></td>             --}}
                                    <td><input type="text" name="Remark_AwFloorProofingGrout" id="Remark_AwFloorProofingGrout"></td>                    
                                    <td><input type="file" name="Remark_AwFloorProofingGrout" id="Remark_AwFloorProofingGrout"></td>                    
                                  </tr>
                      
                                  <tr style="display: none">
                                    <td>markahPRAwFloor<input type="text" name="markahPRAwFloor" id="markahPRAwFloor" /></td>
                                  </tr>
                      
                                  <tr style="display: none">
                                    <td> Cons_markahPRAwFloor <input type="text" name="Cons_markahPRAwFloor" id="Cons_markahPRAwFloor" /></td>
                                  </tr>
                      
                                  <tr style="display: none">
                                    <td> Awarded_markahPRAwFloor <input type="text" name="Awarded_markahPRAwFloor" id="Awarded_markahPRAwFloor" /></td>
                                  </tr>
                        
                                  {{-- New table for wall system --}}
                                  <tr class="text-white bg-orange-jkr">
                                    <th colspan="8">List of products for architectural works - System Furniture</th>
                                  </tr>
                        
                                  <tr>
                                    
                                    <td rowspan="5">1</td>
                                    <td rowspan="5">Built in furniture (system furniture)</td>
                                    <td >Office workstation</td>
                                    <td >2</td>
                                    <td> <input onblur="findTotalSystem()" type="number" min="0" max="2" class="prawsystem" name="AwSystemBuiltOffice" id="AwSystemBuiltOffice"></td>            
                                    {{-- <td> <input onblur="findTotalSystemConstruction()" type="number" min="0" max="2" class="prawsystem_construction" name="Cons_AwSystemBuiltOffice" id="Cons_AwSystemBuiltOffice"></td>             --}}
                                    {{-- <td> <input onblur="findTotalSystemAwarded()" type="number" min="0" max="2" class="prawsystem_awarded" name="Awarded_AwSystemBuiltOffice" id="Awarded_AwSystemBuiltOffice"></td>             --}}
                                    <td><input type="text" name="Remark_AwSystemBuiltOffice" id="Remark_AwSystemBuiltOffice"></td> 
                                    <td><input type="file" name="Remark_AwSystemBuiltOffice" id="Remark_AwSystemBuiltOffice"></td> 
                        
                                  </tr>
                        
                                  <tr>
                                    <td >Toilet cubicle</td>
                                    <td >2</td>
                                    <td><input onblur="findTotalSystem()" type="number" min="0" max="2" class="prawsystem " name="AwSystemBuiltToilet" id="AwSystemBuiltToilet"></td>            
                                    {{-- <td> <input onblur="findTotalSystemConstruction()" type="number" min="0" max="2" class="prawsystem_construction" name="Cons_AwSystemBuiltToilet" id="Cons_AwSystemBuiltToilet"></td>             --}}
                                    {{-- <td> <input onblur="findTotalSystemAwarded()" type="number" min="0" max="2" class="prawsystem_awarded" name="Awarded_AwSystemBuiltToilet" id="Awarded_AwSystemBuiltToilet"></td>             --}}
                                    <td><input type="text" name="Remark_AwSystemBuiltToilet" id="Remark_AwSystemBuiltToilet"></td>                   
                                    <td><input type="file" name="Remark_AwSystemBuiltToilet" id="Remark_AwSystemBuiltToilet"></td>                   
                                  </tr>
                        
                                  <tr>
                                    <td >Institutional seating</td>
                                    <td >2</td>
                                    <td><input onblur="findTotalSystem()" type="number" min="0" max="2" class="prawsystem" name="AwSystemBuiltInstitutional" id="AwSystemBuiltInstitutional"></td>            
                                    {{-- <td> <input onblur="findTotalSystemConstruction()" type="number" min="0" max="2" class="prawsystem_construction" name="Cons_AwSystemBuiltInstitutional" id="Cons_AwSystemBuiltInstitutional"></td>             --}}
                                    {{-- <td> <input onblur="findTotalSystemAwarded()" type="number" min="0" max="2" class="prawsystem_awarded" name="Awarded_AwSystemBuiltInstitutional" id="Awarded_AwSystemBuiltInstitutional"></td>             --}}
                                    <td><input type="text" name="Remark_AwSystemBuiltInstitutional" id="Remark_AwSystemBuiltInstitutional"></td>                   
                                    <td><input type="file" name="Remark_AwSystemBuiltInstitutional" id="Remark_AwSystemBuiltInstitutional"></td>                   
                                  </tr>
                        
                                  <tr>
                                    <td >Built-in cupboards</td>
                                    <td >2</td>
                                    <td><input onblur="findTotalSystem()" type="number" min="0" max="2" class="prawsystem" name="AwSystemBuiltCupboards" id="AwSystemBuiltCupboards"></td>            
                                    {{-- <td> <input onblur="findTotalSystemConstruction()" type="number" min="0" max="2" class="prawsystem_construction" name="Cons_AwSystemBuiltCupboards" id="Cons_AwSystemBuiltCupboards"></td>             --}}
                                    {{-- <td> <input onblur="findTotalSystemAwarded()" type="number" min="0" max="2" class="prawsystem_awarded" name="Awarded_AwSystemBuiltCupboards" id="Awarded_AwSystemBuiltCupboards"></td>             --}}
                                    <td><input type="text" name="Remark_AwSystemBuiltCupboards" id="Remark_AwSystemBuiltCupboards"></td>                    
                                    <td><input type="file" name="Remark_AwSystemBuiltCupboards" id="Remark_AwSystemBuiltCupboards"></td>                    
                                  </tr>
                        
                                  <tr>
                                    <td >Sport facilities seating</td>
                                    <td >2</td>
                                    <td><input onblur="findTotalSystem()" type="number" min="0" max="2" class="prawsystem" name="AwSystemBuiltSport" id="AwSystemBuiltSport"></td>            
                                    {{-- <td> <input onblur="findTotalSystemConstruction()" type="number" min="0" max="2" class="prawsystem_construction" name="Cons_AwSystemBuiltSport" id="Cons_AwSystemBuiltSport"></td>             --}}
                                    {{-- <td> <input onblur="findTotalSystemAwarded()" type="number" min="0" max="2" class="prawsystem_awarded" name="Awarded_AwSystemBuiltSport" id="Awarded_AwSystemBuiltSport"></td>             --}}
                                    <td><input type="text" name="Remark_AwSystemBuiltSport" id="Remark_AwSystemBuiltSport"></td>                    
                                    <td><input type="file" name="Remark_AwSystemBuiltSport" id="Remark_AwSystemBuiltSport"></td>                    
                                  </tr>
                      
                                  <tr style="display: none">
                                    <td>markahPRAwSystem<input type="text" name="markahPRAwSystem" id="markahPRAwSystem" /></td>
                                  </tr>
                      
                                  <tr style="display: none">
                                    <td>Cons_markahPRAwSystem<input type="text" name="Cons_markahPRAwSystem" id="Cons_markahPRAwSystem" /></td>
                                  </tr>
                      
                                  <tr style="display: none">
                                    <td>Awarded_markahPRAwSystem<input type="text" name="Awarded_markahPRAwSystem" id="Awarded_markahPRAwSystem" /></td>
                                  </tr>

                                  <tr class="text-center">
                                    <td rowspan="9" >1</td>
                                    <td rowspan="9">Sanitary Features</td>
                                    <td >Tap fitting</td>
                                    <td >2</td>
                                    <td><input onblur="findTotalSanitary()" type="number" min="0" max="2" class="sanitary" name="AwSanitaryTapFitting" id="AwSanitaryTapFitting"></td>            
                                    {{-- <td><input onblur="findTotalSanitaryConstruction()" type="number" min="0" max="2" class="sanitary_construction" name="Cons_AwSanitaryTapFitting" id="Cons_AwSanitaryTapFitting"></td>             --}}
                                    {{-- <td><input onblur="findTotalSanitaryAwarded()" type="number" min="0" max="2" class="sanitary_awarded" name="Awarded_AwSanitaryTapFitting" id="Awarded_AwSanitaryTapFitting"></td>             --}}
                                    <td><input type="text" name="Remark_AwSanitaryTapFitting" id="Remark_AwSanitaryTapFitting"></td>            
                                    <td><input type="file" name="Remark_AwSanitaryTapFitting" id="Remark_AwSanitaryTapFitting"></td>            
                                                       
                                  </tr>
                        
                                  <tr>
                                    <td >Water closet</td>
                                    <td >2</td>
                                    <td><input onblur="findTotalSanitary()" type="number" min="0" max="2" class="sanitary" name="AwSanitaryWaterCloset" id="AwSanitaryWaterCloset"></td>            
                                    {{-- <td><input onblur="findTotalSanitaryConstruction()" type="number" min="0" max="2" class="sanitary_construction" name="Cons_AwSanitaryWaterCloset" id="Cons_AwSanitaryWaterCloset"></td>             --}}
                                    {{-- <td><input onblur="findTotalSanitaryAwarded()" type="number" min="0" max="2" class="sanitary_awarded" name="Awarded_AwSanitaryWaterCloset" id="Awarded_AwSanitaryWaterCloset"></td>             --}}
                                    <td><input type="text" name="Remark_AwSanitaryWaterCloset" id="Remark_AwSanitaryWaterCloset"></td>                   
                                    <td><input type="file" name="Remark_AwSanitaryWaterCloset" id="Remark_AwSanitaryWaterCloset"></td>                   
                                  </tr>
                        
                                  <tr>
                                    
                                    <td >Water basin</td>
                                    <td >2</td>
                                    <td><input onblur="findTotalSanitary()" type="number" min="0" max="2" class="sanitary" name="AwSanitaryWaterBasin" id="AwSanitaryWaterBasin"></td>            
                                    {{-- <td><input onblur="findTotalSanitaryConstruction()" type="number" min="0" max="2" class="sanitary_construction" name="Cons_AwSanitaryWaterBasin" id="Cons_AwSanitaryWaterBasin"></td>             --}}
                                    {{-- <td><input onblur="findTotalSanitaryAwarded()" type="number" min="0" max="2" class="sanitary_awarded" name="Awarded_AwSanitaryWaterBasin" id="Awarded_AwSanitaryWaterBasin"></td>             --}}
                                    <td><input type="text" name="Remark_AwSanitaryWaterBasin" id="Remark_AwSanitaryWaterBasin"></td>                   
                                    <td><input type="file" name="Remark_AwSanitaryWaterBasin" id="Remark_AwSanitaryWaterBasin"></td>                   
                                  </tr>
                        
                                  <tr>
                                    <td >Sink</td>
                                    <td >2</td>
                                    <td><input onblur="findTotalSanitary()" type="number" min="0" max="2" class="sanitary" name="AwSanitarySink" id="AwSanitarySink"></td>            
                                    {{-- <td><input onblur="findTotalSanitaryConstruction()" type="number" min="0" max="2" class="sanitary_construction" name="Cons_AwSanitarySink" id="Cons_AwSanitarySink"></td>             --}}
                                    {{-- <td><input onblur="findTotalSanitaryAwarded()" type="number" min="0" max="2" class="sanitary_awarded" name="Awarded_AwSanitarySink" id="Awarded_AwSanitarySink"></td>             --}}
                                    <td><input type="text" name="Remark_AwSanitarySink" id="Remark_AwSanitarySink"></td>                    
                                    <td><input type="file" name="Remark_AwSanitarySink" id="Remark_AwSanitarySink"></td>                    
                                  </tr>
                        
                                  <tr>
                                    <td >Urinal</td>
                                    <td >2</td>
                                    <td><input onblur="findTotalSanitary()" type="number" min="0" max="2" class="sanitary" name="AwSanitaryUrinal" id="AwSanitaryUrinal"></td>            
                                    {{-- <td><input onblur="findTotalSanitaryConstruction()" type="number" min="0" max="2" class="sanitary_construction" name="Cons_AwSanitaryUrinal" id="Cons_AwSanitaryUrinal"></td>             --}}
                                    {{-- <td><input onblur="findTotalSanitaryAwarded()" type="number" min="0" max="2" class="sanitary_awarded" name="Awarded_AwSanitaryUrinal" id="Awarded_AwSanitaryUrinal"></td>             --}}
                                    <td><input type="text" name="Remark_AwSanitaryUrinal" id="Remark_AwSanitaryUrinal"></td>                    
                                    <td><input type="file" name="Remark_AwSanitaryUrinal" id="Remark_AwSanitaryUrinal"></td>                    
                                  </tr>
                        
                                  <tr>
                                    <td >Bidet</td>
                                    <td >2</td>
                                    <td><input onblur="findTotalSanitary()" type="number" min="0" max="2" class="sanitary" name="AwSanitaryBidet" id="AwSanitaryBidet"></td>            
                                    {{-- <td><input onblur="findTotalSanitaryConstruction()" type="number" min="0" max="2" class="sanitary_construction" name="Cons_AwSanitaryBidet" id="Cons_AwSanitaryBidet"></td>             --}}
                                    {{-- <td><input onblur="findTotalSanitaryAwarded()" type="number" min="0" max="2" class="sanitary_awarded" name="Awarded_AwSanitaryBidet" id="Awarded_AwSanitaryBidet"></td>             --}}
                                    <td><input type="text" name="Remark_AwSanitaryBidet" id="Remark_AwSanitaryBidet"></td>                   
                                    <td><input type="file" name="Remark_AwSanitaryBidet" id="Remark_AwSanitaryBidet"></td>                   
                                  </tr>
                        
                                  <tr>
                                    <td >Floor trap</td>
                                    <td >2</td>
                                    <td><input onblur="findTotalSanitary()" type="number" min="0" max="2" class="sanitary" name="AwSanitaryFloorTrap" id="AwSanitaryFloorTrap"></td>            
                                    {{-- <td><input onblur="findTotalSanitaryConstruction()" type="number" min="0" max="2" class="sanitary_construction" name="Cons_AwSanitaryFloorTrap" id="Cons_AwSanitaryFloorTrap"></td>             --}}
                                    {{-- <td><input onblur="findTotalSanitaryAwarded()" type="number" min="0" max="2" class="sanitary_awarded" name="Awarded_AwSanitaryFloorTrap" id="Awarded_AwSanitaryFloorTrap"></td>             --}}
                                    <td><input type="text" name="Remark_AwSanitaryFloorTrap" id="Remark_AwSanitaryFloorTrap"></td>                    
                                    <td><input type="file" name="Remark_AwSanitaryFloorTrap" id="Remark_AwSanitaryFloorTrap"></td>                    
                                  </tr>
                        
                                  <tr>
                                    <td >Shower</td>
                                    <td >2</td>
                                    <td><input onblur="findTotalSanitary()" type="number" min="0" max="2" class="sanitary" name="AwSanitaryShower" id="AwSanitaryShower"></td>            
                                    {{-- <td><input onblur="findTotalSanitaryConstruction()" type="number" min="0" max="2" class="sanitary_construction" name="Cons_AwSanitaryShower" id="Cons_AwSanitaryShower"></td>             --}}
                                    {{-- <td><input onblur="findTotalSanitaryAwarded()" type="number" min="0" max="2" class="sanitary_awarded" name="Awarded_AwSanitaryShower" id="Awarded_AwSanitaryShower"></td>             --}}
                                    <td><input type="text" name="Remark_AwSanitaryShower" id="Remark_AwSanitaryShower"></td>
                                    <td><input type="file" name="Remark_AwSanitaryShower" id="Remark_AwSanitaryShower"></td>
                                  </tr>
                        
                                  <tr>
                                    <td >Faucet</td>
                                    <td >2</td>
                                    <td><input onblur="findTotalSanitary()" type="number" min="0" max="2" class="sanitary" name="AwSanitaryFaucet" id="AwSanitaryFaucet"></td>            
                                    {{-- <td><input onblur="findTotalSanitaryConstruction()" type="number" min="0" max="2" class="sanitary_construction" name="Cons_AwSanitaryFaucet" id="Cons_AwSanitaryFaucet"></td>             --}}
                                    {{-- <td><input onblur="findTotalSanitaryAwarded()" type="number" min="0" max="2" class="sanitary_awarded" name="Awarded_AwSanitaryFaucet" id="Awarded_AwSanitaryFaucet"></td>             --}}
                                    <td><input type="text" name="Remark_AwSanitaryFaucet" id="Remark_AwSanitaryFaucet"></td>                   
                                    <td><input type="file" name="Remark_AwSanitaryFaucet" id="Remark_AwSanitaryFaucet"></td>                   
                                  </tr>
                      
                                  <tr style="display: none">
                                    <td><input type="text" name="markahPRAwSanitary" id="markahPRAwSanitary" /></td>
                                  </tr>
                      
                                  <tr style="display: none">
                                    <td>Cons_markahPRAwSanitary<input type="text" name="Cons_markahPRAwSanitary" id="Cons_markahPRAwSanitary" /></td>
                                  </tr>
                      
                                  <tr style="display: none">
                                    <td>Awarded_markahPRAwSanitary<input type="text" name="Awarded_markahPRAwSanitary" id="Awarded_markahPRAwSanitary" /></td>
                                  </tr>

                                  <thead class="text-white bg-orange-jkr">
            
                                    <tr>
                                      <th colspan="8">List of products for civil works</th>
                                    </tr>
                                    <tr>
                                      <th>No.</th>
                                      <th >Component</th>
                                      <th>Product</th>
                                      <th>Point Allocated</th>
                                      <th>Point Requested (design)</th>
                                      {{-- <th>Point Requested (construction)</th>
                                      <th>Point Awarded</th> --}}
                                      <th >Remark</th>
                                      <th >Supporting Documents</th>
                                    </tr>
                                  </thead>

                                  <tr class="text-center">
                                    <td rowspan="6" >1</td>
                                    <td rowspan="6">Common items</td>
                                    <td >Cement</td>
                                    <td >2</td>
                                    <td>
                                      <input onblur="findTotalmarkahPRCw()" type="number" min="0" max="2" class="civil" name="CwCommonCement" id="CwCommonCement">
                                    </td>            
                                             
                                    <td><input type="text" name="CwCommonCement" id="CwCommonCement"></td>                    
                                    <td><input type="file" name="CwCommonCement" id="CwCommonCement"></td>                    
                                  </tr>
                    
                                  <tr>
                                    <td >Timber</td>
                                    <td >2</td>
                                    <td>
                                      <input onblur="findTotalmarkahPRCw()" type="number" min="0" max="2" class="civil" name="CwCommonTimber" id="CwCommonTimber">
                                    </td>            
                                             
                                    <td><input type="text" name="CwCommonTimber" id="CwCommonTimber"></td>                    
                                    <td><input type="file" name="CwCommonTimber" id="CwCommonTimber"></td>                    
                                  </tr>
                    
                                  <tr>
                                    <td >Reinforcement bar</td>
                                    <td >2</td>
                                    <td>
                                      <input onblur="findTotalmarkahPRCw()" type="number" min="0" max="2" class="civil" name="CwCommonBar" id="CwCommonBar">
                                    </td>            
                                              
                                    <td><input type="text" name="CwCommonBar" id="CwCommonBar"></td>                    
                                    <td><input type="file" name="CwCommonBar" id="CwCommonBar"></td>                    
                                  </tr>
                    
                                  <tr>
                                    <td >Sand</td>
                                    <td >2</td>
                                    <td>
                                      <input onblur="findTotalmarkahPRCw()" type="number" min="0" max="2" class="civil" name="CwCommonSand" id="CwCommonSand">
                                    </td>            
                                              
                                    <td><input type="text" name="CwCommonSand" id="CwCommonSand"></td>                    
                                    <td><input type="file" name="CwCommonSand" id="CwCommonSand"></td>                    
                                  </tr>
                    
                                  <tr>
                                    <td >Aggregate</td>
                                    <td >2</td>
                                    <td>
                                      <input onblur="findTotalmarkahPRCw()" type="number" min="0" max="2" class="civil" name="CwCommonAggregate" id="CwCommonAggregate">
                                    </td>            
                                             
                                    <td><input type="text" name="CwCommonAggregate" id="CwCommonAggregate"></td>                    
                                    <td><input type="file" name="CwCommonAggregate" id="CwCommonAggregate"></td>                    
                                  </tr>
                    
                                  <tr>
                                    <td >Stone/rock</td>
                                    <td >2</td>
                                    <td>
                                      <input onblur="findTotalmarkahPRCw()" type="number" min="0" max="2" class="civil" name="CwCommonStone" id="CwCommonStone">
                                    </td>            
                                              
                                    <td><input type="text" name="CwCommonStone" id="CwCommonStone"></td>                    
                                    <td><input type="file" name="CwCommonStone" id="CwCommonStone"></td>                    
                                  </tr>
                    
                                  <tr class="text-center">
                                    <td rowspan="6" >2</td>
                                    <td rowspan="6">Earthworks/erosion sediment control</td>
                                    <td >Geotextile</td>
                                    <td >2</td>
                                    <td>
                                      <input onblur="findTotalmarkahPRCw()" type="number" min="0" max="2" class="civil" name="CwEarthworksGeotextile" id="CwEarthworksGeotextile">
                                    </td>            
                                               
                                    <td><input type="text" name="CwEarthworksGeotextile" id="CwEarthworksGeotextile"></td>                    
                                    <td><input type="file" name="CwEarthworksGeotextile" id="CwEarthworksGeotextile"></td>                    
                                  </tr>
                    
                                  <tr>
                                    <td >Erosion mat</td>
                                    <td >2</td>
                                    <td>
                                      <input onblur="findTotalmarkahPRCw()" type="number" min="0" max="2" class="civil" name="CwEarthworksErosion" id="CwEarthworksErosion">
                                    </td>            
                                               
                                    <td><input type="text" name="CwEarthworksErosion" id="CwEarthworksErosion"></td>                    
                                    <td><input type="file" name="CwEarthworksErosion" id="CwEarthworksErosion"></td>                    
                                  </tr>
                    
                                  <tr>
                                    <td >Geogrid</td>
                                    <td >2</td>
                                    <td>
                                      <input onblur="findTotalmarkahPRCw()" type="number" min="0" max="2" class="civil" name="CwEarthworksGeogrid" id="CwEarthworksGeogrid">
                                    </td>            
                                              
                                    <td><input type="text" name="CwEarthworksGeogrid" id="CwEarthworksGeogrid"></td>                    
                                    <td><input type="file" name="CwEarthworksGeogrid" id="CwEarthworksGeogrid"></td>                    
                                  </tr>
                    
                                  <tr>
                                    <td >Mulching</td>
                                    <td >2</td>
                                    <td>
                                      <input onblur="findTotalmarkahPRCw()" type="number" min="0" max="2" class="civil" name="CwEarthworksMulching" id="CwEarthworksMulching">
                                    </td>            
                                               
                                    <td><input type="text" name="CwEarthworksMulching" id="CwEarthworksMulching"></td>                    
                                    <td><input type="file" name="CwEarthworksMulching" id="CwEarthworksMulching"></td>                    
                                  </tr>
                    
                                  <tr>
                                    <td >Gabion</td>
                                    <td >2</td>
                                    <td>
                                      <input onblur="findTotalmarkahPRCw()" type="number" min="0" max="2" class="civil" name="CwEarthworksGabion" id="CwEarthworksGabion">
                                    </td>            
                                              
                                    <td><input type="text" name="CwEarthworksGabion" id="CwEarthworksGabion"></td>                    
                                    <td><input type="file" name="CwEarthworksGabion" id="CwEarthworksGabion"></td>                    
                                  </tr>
                    
                                  <tr>
                                    <td >Hydroseeding</td>
                                    <td >2</td>
                                    <td>
                                      <input onblur="findTotalmarkahPRCw()" type="number" min="0" max="2" class="civil" name="CwEarthworksHydroseeding" id="CwEarthworksHydroseeding">
                                    </td>            
                                             
                                    <td><input type="text" name="CwEarthworksHydroseeding" id="CwEarthworksHydroseeding"></td>                    
                                    <td><input type="file" name="CwEarthworksHydroseeding" id="CwEarthworksHydroseeding"></td>                    
                                  </tr>
                    
                                  <tr class="text-center">
                                    <td rowspan="6" >3</td>
                                    <td rowspan="6">Drainage works</td>
                                    <td >Drain culvert</td>
                                    <td >2</td>
                                    <td>
                                      <input onblur="findTotalmarkahPRCw()" type="number" min="0" max="2" class="civil" name="CwDrainageCulvert" id="CwDrainageCulvert">
                                    </td>            
                                               
                                    <td><input type="text" name="CwDrainageCulvert" id="CwDrainageCulvert"></td>                    
                                    <td><input type="file" name="CwDrainageCulvert" id="CwDrainageCulvert"></td>                    
                                  </tr>
                    
                                  <tr>
                                    <td >Sump</td>
                                    <td >2</td>
                                    <td>
                                      <input onblur="findTotalmarkahPRCw()" type="number" min="0" max="2" class="civil" name="CwDrainageSump" id="CwDrainageSump">
                                    </td>            
                                               
                                    <td><input type="text" name="CwDrainageSump" id="CwDrainageSump"></td>                    
                                    <td><input type="file" name="CwDrainageSump" id="CwDrainageSump"></td>                    
                                  </tr>
                    
                                  <tr>
                                    <td >Pipe</td>
                                    <td >2</td>
                                    <td>
                                      <input onblur="findTotalmarkahPRCw()" type="number" min="0" max="2" class="civil" name="CwDrainagePipe" id="CwDrainagePipe">
                                    </td>            
                                               
                                    <td><input type="text" name="CwDrainagePipe" id="CwDrainagePipe"></td>                    
                                    <td><input type="file" name="CwDrainagePipe" id="CwDrainagePipe"></td>                    
                                  </tr>
                    
                                  <tr>
                                    <td >Modular tank</td>
                                    <td >2</td>
                                    <td>
                                      <input onblur="findTotalmarkahPRCw()" type="number" min="0" max="2" class="civil" name="CwDrainageTank" id="CwDrainageTank">
                                    </td>            
                                              
                                    <td><input type="text" name="CwDrainageTank" id="CwDrainageTank"></td>                    
                                    <td><input type="file" name="CwDrainageTank" id="CwDrainageTank"></td>                    
                                  </tr>
                    
                                  <tr>
                                    <td >Geotextile</td>
                                    <td >2</td>
                                    <td>
                                      <input onblur="findTotalmarkahPRCw()" type="number" min="0" max="2" class="civil" name="CwDrainageGeotextile" id="CwDrainageGeotextile">
                                    </td>            
                                              
                                    <td><input type="text" name="CwDrainageGeotextile" id="CwDrainageGeotextile"></td>                    
                                    <td><input type="file" name="CwDrainageGeotextile" id="CwDrainageGeotextile"></td>                    
                                  </tr>
                    
                                  <tr>
                                    <td >Grating</td>
                                    <td >2</td>
                                    <td>
                                      <input onblur="findTotalmarkahPRCw()" type="number" min="0" max="2" class="civil" name="CwDrainageGrating" id="CwDrainageGrating">
                                    </td>            
                                               
                                    <td><input type="text" name="CwDrainageGrating" id="CwDrainageGrating"></td>                    
                                    <td><input type="file" name="CwDrainageGrating" id="CwDrainageGrating"></td>                    
                                  </tr>
                    
                                  <tr class="text-center">
                                    <td rowspan="15" >7</td>
                                    <td rowspan="15">Pavement/road furniture</td>
                                    <td >Asphalt concrete</td>
                                    <td >2</td>
                                    <td><input onblur="findTotalmarkahPRCw()" type="number" min="0" max="2" class="civil" name="" id=""></td>            
                                               
                                    <td><input type="text" name="" id=""></td>                    
                                    <td><input type="file" name="" id=""></td>                    
                                  </tr>
                    
                                  <tr>
                                    <td >Porous asphalt</td>
                                    <td >2</td>
                                    <td><input onblur="findTotalmarkahPRCw()" type="number" min="0" max="2" class="civil" name="" id=""></td>            
                                             
                                    <td><input type="text" name="" id=""></td>                    
                                    <td><input type="file" name="" id=""></td>                    
                                  </tr>
                    
                                  <tr>
                                    <td >Prime coat</td>
                                    <td >2</td>
                                    <td>
                                      <input onblur="findTotalmarkahPRCw()" type="number" min="0" max="2" class="civil" name="CwPavementsPrime" id="CwPavementsPrime">
                                    </td>            
                                            
                                    <td><input type="text" name="CwPavementsPrime" id="CwPavementsPrime"></td>                    
                                    <td><input type="file" name="CwPavementsPrime" id="CwPavementsPrime"></td>                    
                                  </tr>
                    
                                  <tr>
                                    <td >Tack coat</td>
                                    <td >2</td>
                                    <td>
                                      <input onblur="findTotalmarkahPRCw()" type="number" min="0" max="2" class="civil" name="CwPavementsTack" id="CwPavementsTack">
                                    </td>            
                                               
                                    <td><input type="text" name="CwPavementsTack" id="CwPavementsTack"></td>                    
                                    <td><input type="file" name="CwPavementsTack" id="CwPavementsTack"></td>                    
                                  </tr>
                    
                                  <tr>
                                    <td >Retroreflective sheeting</td>
                                    <td >2</td>
                                    <td>
                                      <input onblur="findTotalmarkahPRCw()" type="number" min="0" max="2" class="civil" name="" id="">
                                    </td>            
                                              
                                    <td><input type="text" name="" id=""></td>                    
                                    <td><input type="file" name="" id=""></td>                    
                                  </tr>
                    
                                  <tr>
                                    <td >Road paint</td>
                                    <td >2</td>
                                    <td>
                                      <input onblur="findTotalmarkahPRCw()" type="number" min="0" max="2" class="civil" name="CwRoadPaint" id="CwRoadPaint">
                                    </td>            
                                               
                                    <td><input type="text" name="CwRoadPaint" id="CwRoadPaint"></td>                    
                                    <td><input type="file" name="CwRoadPaint" id="CwRoadPaint"></td>                    
                                  </tr>
                    
                                  <tr>
                                    <td >Paver block</td>
                                    <td >2</td>
                                    <td>
                                      <input onblur="findTotalmarkahPRCw()" type="number" min="0" max="2" class="civil" name="" id="">
                                    </td>            
                                             
                                    <td><input type="text" name="" id=""></td>                    
                                    <td><input type="file" name="" id=""></td>                    
                                  </tr>
                    
                                  <tr>
                                    <td >Permeable paver</td>
                                    <td >2</td>
                                    <td>
                                      <input onblur="findTotalmarkahPRCw()" type="number" min="0" max="2" class="civil" name="" id="">
                                    </td>            
                                               
                                    <td><input type="text" name="" id=""></td>                    
                                    <td><input type="file" name="" id=""></td>                    
                                  </tr>
                    
                                  <tr>
                                    <td >Kerb</td>
                                    <td >2</td>
                                    <td>
                                      <input onblur="findTotalmarkahPRCw()" type="number" min="0" max="2" class="civil" name="" id="">
                                    </td>            
                                              
                                    <td><input type="text" name="" id=""></td>                    
                                    <td><input type="file" name="" id=""></td>                    
                                  </tr>
                    
                                  <tr>
                                    <td >Road stud</td>
                                    <td >2</td>
                                    <td>
                                      <input onblur="findTotalmarkahPRCw()" type="number" min="0" max="2" class="civil" name="CwRoadStud" id="CwRoadStud">
                                    </td>            
                                           
                                    <td><input type="text" name="CwRoadStud" id="CwRoadStud"></td>                    
                                    <td><input type="file" name="CwRoadStud" id="CwRoadStud"></td>                    
                                  </tr>
                    
                                  <tr>
                                    <td >Chevron delineator</td>
                                    <td >2</td>
                                    <td>
                                      <input onblur="findTotalmarkahPRCw()" type="number" min="0" max="2" class="civil" name="CwRoadChevron" id="CwRoadChevron">
                                    </td>            
                                              
                                    <td><input type="text" name="CwRoadChevron" id="CwRoadChevron"></td>                    
                                    <td><input type="file" name="CwRoadChevron" id="CwRoadChevron"></td>                    
                                  </tr>
                    
                                  <tr>
                                    <td >Guardrail</td>
                                    <td >2</td>
                                    <td>
                                      <input onblur="findTotalmarkahPRCw()" type="number" min="0" max="2" class="civil" name="CwRoadGuardrails" id="CwRoadGuardrails">
                                    </td>            
                                               
                                    <td><input type="text" name="CwRoadGuardrails" id="CwRoadGuardrails"></td>                    
                                    <td><input type="file" name="CwRoadGuardrails" id="CwRoadGuardrails"></td>                    
                                  </tr>
                    
                                  <tr>
                                    <td >Railing</td>
                                    <td >2</td>
                                    <td>
                                      <input onblur="findTotalmarkahPRCw()" type="number" min="0" max="2" class="civil" name="CwRoadRailings" id="CwRoadRailings">
                                    </td>            
                                              
                                    <td><input type="text" name="CwRoadRailings" id="CwRoadRailings"></td>                    
                                    <td><input type="file" name="CwRoadRailings" id="CwRoadRailings"></td>                    
                                  </tr>
                    
                                  <tr>
                                    <td >Wire rope</td>
                                    <td >2</td>
                                    <td>
                                      <input onblur="findTotalmarkahPRCw()" type="number" min="0" max="2" class="civil" name="CwRoadGuardrails" id="CwRoadGuardrails">
                                    </td>            
                                              
                                    <td><input type="text" name="CwRoadGuardrails" id="CwRoadGuardrails"></td>                    
                                    <td><input type="file" name="CwRoadGuardrails" id="CwRoadGuardrails"></td>                    
                                  </tr>
                    
                                  <tr>
                                    <td >Signages</td>
                                    <td >2</td>
                                    <td>
                                      <input onblur="findTotalmarkahPRCw()" type="number" min="0" max="2" class="civil" name="CwRoadSignages" id="CwRoadSignages">
                                    </td>            
                                               
                                    <td><input type="text" name="CwRoadSignages" id="CwRoadSignages"></td>                    
                                    <td><input type="file" name="CwRoadSignages" id="CwRoadSignages"></td>                    
                                  </tr>
                    
                                  <tr class="text-center">
                                    <td rowspan="7" >5</td>
                                    <td rowspan="7">Water reticulation works</td>
                                    <td >Pipes</td>
                                    <td >2</td>
                                    <td><input onblur="findTotalmarkahPRCw()" type="number" min="0" max="2" class="civil" name="CwWaterPipes" id="CwWaterPipes"></td>            
                                              
                                    <td><input type="text" name="CwWaterPipes" id="CwWaterPipes"></td>                    
                                    <td><input type="file" name="CwWaterPipes" id="CwWaterPipes"></td>                    
                                  </tr>
                    
                                  <tr>
                                    <td >Bulk meter</td>
                                    <td >2</td>
                                    <td><input onblur="findTotalmarkahPRCw()" type="number" min="0" max="2" class="civil" name="CwWaterBulk" id="CwWaterBulk"></td>            
                                               
                                    <td><input type="text" name="CwWaterBulk" id="CwWaterBulk"></td>                    
                                    <td><input type="file" name="CwWaterBulk" id="CwWaterBulk"></td>                    
                                  </tr>
                    
                                  <tr>
                                    <td >Valves</td>
                                    <td >2</td>
                                    <td>
                                      <input onblur="findTotalmarkahPRCw()" type="number" min="0" max="2" class="civil" name="CwWaterValves" id="CwWaterValves">
                                    </td>            
                                              
                                    <td><input type="text" name="CwWaterValves" id="CwWaterValves"></td>                    
                                    <td><input type="file" name="CwWaterValves" id="CwWaterValves"></td>                    
                                  </tr>
                    
                                  <tr>
                                    <td >Tank</td>
                                    <td >2</td>
                                    <td>
                                      <input onblur="findTotalmarkahPRCw()" type="number" min="0" max="2" class="civil" name="CwWaterTank" id="CwWaterTank">
                                    </td>            
                                              
                                    <td><input type="text" name="CwWaterTank" id="CwWaterTank"></td>                    
                                    <td><input type="file" name="CwWaterTank" id="CwWaterTank"></td>                    
                                  </tr>
                    
                                  <tr>
                                    <td >Pump</td>
                                    <td >2</td>
                                    <td>
                                      <input onblur="findTotalmarkahPRCw()" type="number" min="0" max="2" class="civil" name="CwWaterPump" id="CwWaterPump">
                                    </td>            
                                             
                                    <td><input type="text" name="CwWaterPump" id="CwWaterPump"></td>                    
                                    <td><input type="file" name="CwWaterPump" id="CwWaterPump"></td>                    
                                  </tr>
                    
                                  <tr>
                                    <td >First flush filter</td>
                                    <td >2</td>
                                    <td>
                                      <input onblur="findTotalmarkahPRCw()" type="number" min="0" max="2" class="civil" name="CwWaterFirstFlush" id="CwWaterFirstFlush">
                                    </td>            
                                             
                                    <td><input type="text" name="CwWaterFirstFlush" id="CwWaterFirstFlush"></td>                    
                                    <td><input type="file" name="CwWaterFirstFlush" id="CwWaterFirstFlush"></td>                    
                                  </tr>
                    
                                  <tr>
                                    <td >Sand filter</td>
                                    <td >2</td>
                                    <td>
                                      <input onblur="findTotalmarkahPRCw()" type="number" min="0" max="2" class="civil" name="CwWaterSand" id="CwWaterSand">
                                    </td>            
                                              
                                    <td><input type="text" name="CwWaterSand" id="CwWaterSand"></td>                    
                                    <td><input type="file" name="CwWaterSand" id="CwWaterSand"></td>                    
                                  </tr>
                    
                                  <tr class="text-center">
                                    <td rowspan="4" >6</td>
                                    <td rowspan="4">Sewerage works</td>
                                    <td >Pipes</td>
                                    <td >2</td>
                                    <td><input onblur="findTotalmarkahPRCw()" type="number" min="0" max="2" class="civil" name="CwSeveragePipes" id="CwSeveragePipes"></td>            
                                              
                                    <td><input type="text" name="CwSeveragePipes" id="CwSeveragePipes"></td>                    
                                    <td><input type="file" name="CwSeveragePipes" id="CwSeveragePipes"></td>                    
                                  </tr>
                    
                                  <tr>
                                    <td >Tank</td>
                                    <td >2</td>
                                    <td><input onblur="findTotalmarkahPRCw()" type="number" min="0" max="2" class="civil" name="CwSeverageTank" id="CwSeverageTank"></td>            
                                             
                                    <td><input type="text" name="CwSeverageTank" id="CwSeverageTank"></td>                    
                                    <td><input type="file" name="CwSeverageTank" id="CwSeverageTank"></td>                    
                                  </tr>
                    
                                  <tr>
                                    <td >Pump</td>
                                    <td >2</td>
                                    <td>
                                      <input onblur="findTotalmarkahPRCw()" type="number" min="0" max="2" class="civil" name="CwSeveragePump" id="CwSeveragePump">
                                    </td>            
                                              
                                    <td><input type="text" name="CwSeveragePump" id="CwSeveragePump"></td>                    
                                    <td><input type="file" name="CwSeveragePump" id="CwSeveragePump"></td>                    
                                  </tr>
                    
                                  <tr>
                                    <td >Manhole</td>
                                    <td >2</td>
                                    <td>
                                      <input onblur="findTotalmarkahPRCw()" type="number" min="0" max="2" class="civil" name="CwSeverageManhole" id="CwSeverageManhole">
                                    </td>            
                                             
                                    <td><input type="text" name="CwSeverageManhole" id="CwSeverageManhole"></td>                    
                                    <td><input type="file" name="CwSeverageManhole" id="CwSeverageManhole"></td>                    
                                  </tr>
                    
                                  <tr style="display: none">
                                    <td><input type="text" name="markahPRCw" id="markahPRCw" /></td>
                                  </tr>

                                  <tr class="text-center">
                                    <td rowspan="5" >1</td>
                                    <td rowspan="5">Common items</td>
                                    <td >Cement</td>
                                    <td >2</td>
                                    <td><input onblur="findTotalmarkahPRSw()" type="number" min="0" max="2" class="structure" name="SwCommonCement" id="SwCommonCement"></td>            
                                                
                                    <td><input type="text"></td>                    
                                    <td><input type="file"></td>                    
                                  </tr>
                      
                                  <tr>
                                    <td >Reinforcement bar</td>
                                    <td >2</td>
                                    <td>
                                      <input onblur="findTotalmarkahPRSw()" type="number" min="0" max="2" class="structure" name="SwCommonBar" id="SwCommonBar">
                                    </td>            
                                               
                                    <td><input type="text"></td>                    
                                    <td><input type="file"></td>                    
                                  </tr>
                      
                                  <tr>
                                    <td >Sand</td>
                                    <td >2</td>
                                    <td>
                                      <input onblur="findTotalmarkahPRSw()" type="number" min="0" max="2" class="structure" name="SwCommonSand" id="SwCommonSand">
                                    </td>            
                                              
                                    <td><input type="text"></td>                    
                                    <td><input type="file"></td>                    
                                  </tr>
                      
                                  <tr>
                                    <td >Aggregate</td>
                                    <td >2</td>
                                    <td>
                                      <input onblur="findTotalmarkahPRSw()" type="number" min="0" max="2" class="structure" name="SwCommonAggregate" id="SwCommonAggregate">
                                    </td>            
                                              
                                    <td><input type="text"></td>                    
                                    <td><input type="file"></td>                    
                                  </tr>
                      
                                  <tr>
                                    <td >Timber</td>
                                    <td >2</td>
                                    <td>
                                      <input onblur="findTotalmarkahPRSw()" type="number" min="0" max="2" class="structure" name="SwCommonTimber" id="SwCommonTimber">
                                    </td>            
                                             
                                    <td><input type="text"></td>                    
                                    <td><input type="file"></td>                    
                                  </tr>
                        
                                    <tr class="text-center">
                                      <td rowspan="7" >2</td>
                                      <td rowspan="7">Super structure</td>
                                      <td >Concrete</td>
                                      <td >2</td>
                                      <td>
                                        <input onblur="findTotalmarkahPRSw()" type="number" min="0" max="2" class="structure" name="SwSuperConcrete" id="SwSuperConcrete">
                                      </td>            
                                                
                                      <td><input type="text"></td>                    
                                      <td><input type="file"></td>                    
                                    </tr>
                      
                                    <tr>
                                      <td >Reinforcement bar</td>
                                      <td >2</td>
                                      <td>
                                        <input onblur="findTotalmarkahPRSw()" type="number" min="0" max="2" class="structure" name="SwSuperBar" id="SwSuperBar">
                                      </td>            
                                               
                                      <td><input type="text"></td>                    
                                      <td><input type="file"></td>                    
                                    </tr>
                      
                                    <tr>
                                      <td >Steel</td>
                                      <td >2</td>
                                      <td>
                                        <input onblur="findTotalmarkahPRSw()" type="number" min="0" max="2" class="structure" name="SwSuperSteel" id="SwSuperSteel">
                                      </td>            
                                                
                                      <td><input type="text"></td>                    
                                      <td><input type="file"></td>                    
                                    </tr>
                      
                                    <tr>
                                      <td >Water stop</td>
                                      <td >2</td>
                                      <td>
                                        <input onblur="findTotalmarkahPRSw()" type="number" min="0" max="2" class="structure" name="SwSuperWater" id="SwSuperWater">
                                      </td>            
                                                
                                      <td><input type="text"></td>                    
                                      <td><input type="file"></td>                    
                                    </tr>
                      
                                    <tr>
                                      <td >Damp proof membrane</td>
                                      <td >2</td>
                                      <td>
                                        <input onblur="findTotalmarkahPRSw()" type="number" min="0" max="2" class="structure" name="SwSuperDamp" id="SwSuperDamp">
                                      </td>            
                                              
                                      <td><input type="text"></td>                    
                                      <td><input type="file"></td>                    
                                    </tr>
                      
                                    <tr>
                                      <td >Plastic sheeting</td>
                                      <td >2</td>
                                      <td>
                                        <input onblur="findTotalmarkahPRSw()" type="number" min="0" max="2" class="structure" name="SwSuperPlastic" id="SwSuperPlastic">
                                      </td>            
                                                
                                      <td><input type="text"></td>                    
                                      <td><input type="file"></td>                    
                                    </tr>
                      
                                    <tr>
                                      <td >Sealant</td>
                                      <td >2</td>
                                      <td>
                                        <input onblur="findTotalmarkahPRSw()" type="number" min="0" max="2" class="structure" name="SwSuperSealant" id="SwSuperSealant">
                                      </td>            
                                                  
                                      <td><input type="text"></td>                    
                                      <td><input type="file"></td>                    
                                    </tr>
                      
                                    <tr class="text-center">
                                      <td rowspan="6" >3</td>
                                      <td rowspan="6">Roof trusses</td>
                                      <td >Steel</td>
                                      <td >2</td>
                                      <td>
                                        <input onblur="findTotalmarkahPRSw()" type="number" min="0" max="2" class="structure" name="SwRoofSteel" id="SwRoofSteel">
                                      </td>            
                                                 
                                      <td><input type="text"></td>                    
                                      <td><input type="file"></td>                    
                                    </tr>
                      
                                    <tr>
                                      <td >Timber</td>
                                      <td >2</td>
                                      <td>
                                        <input onblur="findTotalmarkahPRSw()" type="number" min="0" max="2" class="structure" name="SwRoofTimber" id="SwRoofTimber">
                                      </td>            
                                                  
                                      <td><input type="text"></td>                    
                                      <td><input type="file"></td>                    
                                    </tr>
                      
                                    <tr>
                                      <td >Aluminium</td>
                                      <td >2</td>
                                      <td>
                                        <input onblur="findTotalmarkahPRSw()" type="number" min="0" max="2" class="structure" name="SwRoofAluminium" id="SwRoofAluminium">
                                      </td>            
                                               
                                      <td><input type="text"></td>                    
                                      <td><input type="file"></td>                    
                                    </tr>
                      
                                    <tr>
                                      <td >Bolt</td>
                                      <td >2</td>
                                      <td>
                                        <input onblur="findTotalmarkahPRSw()" type="number" min="0" max="2" class="structure" name="SwRoofBolt" id="SwRoofBolt">
                                      </td>            
                                                 
                                      <td><input type="text"></td>                    
                                      <td><input type="file"></td>                    
                                    </tr>
                      
                                    <tr>
                                      <td >Plates</td>
                                      <td >2</td>
                                      <td>
                                        <input onblur="findTotalmarkahPRSw()" type="number" min="0" max="2" class="structure" name="SwRoofPlates" id="SwRoofPlates">
                                      </td>            
                                                 
                                      <td><input type="text"></td>                    
                                      <td><input type="file"></td>                    
                                    </tr>
                      
                                    <tr>
                                      <td >Membrane</td>
                                      <td >2</td>
                                      <td>
                                        <input onblur="findTotalmarkahPRSw()" type="number" min="0" max="2" class="structure" name="SwRoofMembrane" id="SwRoofMembrane">
                                      </td>            
                                               
                                      <td><input type="text"></td>                    
                                      <td><input type="file"></td>                    
                                    </tr>
                      
                                    <tr style="display: none">
                                      <td><input type="text" name="markahPRSw" id="markahPRSw" /></td>
                                    </tr>

                                    <thead class="text-white bg-orange-jkr">
            
                                        <tr>
                                          <th colspan="8">List of products for electrical works</th>
                                        </tr>
                                        <tr>
                                          <th>No.</th>
                                          <th >Component</th>
                                          <th>Product</th>
                                          <th>Point Allocated</th>
                                          <th>Point Requested (design)</th>
                                          {{-- <th>Point Requested (construction)</th>
                                          <th>Point Awarded</th> --}}
                                          <th >Remark</th>
                                          <th >Supporting Documents</th>
                                        </tr>
                                      </thead>

                                      <tr class="text-center">
                                        <td rowspan="1" >1</td>
                                        <td rowspan="1">Generator set</td>
                                        <td >Generator set</td>
                                        <td >2</td>
                                        <td>
                                          <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwGeneratorSet" id="EwGeneratorSet">
                                        </td>                       
                                        <td><input type="text" name="EwGeneratorSet" id="EwGeneratorSet"></td>                    
                                        <td><input type="file" name="EwGeneratorSet" id="EwGeneratorSet"></td>                    
                                      </tr>
                            
                                      
                            
                            
                                      <tr class="text-center">
                                          <td rowspan="1" >2</td>
                                          <td rowspan="1">Transformer</td>
                                          <td >11kV dry type distribution transformer</td>
                                          <td >2</td>
                                          <td>
                                            <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwTransformer" id="EwTransformer">
                                          </td>            
                                                   
                                          <td><input type="text" name="EwTransformer" id="EwTransformer"></td>                    
                                          <td><input type="file" name="EwTransformer" id="EwTransformer"></td>                    
                                        </tr>
                          
                                        <tr class="text-center">
                                          <td rowspan="1" >3</td>
                                          <td rowspan="1">Surge Protective Device (PSD)</td>
                                          <td >Surge Protective Device (PSD)</td>
                                          <td >2</td>
                                          <td>
                                            <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwSPD" id="EwSPD">
                                          </td>            
                                                    
                                          <td><input type="text" name="EwSPD" id="EwSPD"></td>                    
                                          <td><input type="file" name="EwSPD" id="EwSPD"></td>                    
                                        </tr>
                          
                                        <tr class="text-center">
                                          <td rowspan="4" >5</td>
                                          <td rowspan="4">Protection relays</td>
                                          <td >Combined overcurrent and earth fault relay</td>
                                          <td >2</td>
                                          <td>
                                            <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwRelayCombined" id="EwRelayCombined">
                                          </td>            
                                                   
                                          <td><input type="text" name="EwRelayCombined" id="EwRelayCombined"></td>                    
                                          <td><input type="file" name="EwRelayCombined" id="EwRelayCombined"></td>                    
                                        </tr>
                          
                                        <tr>
                                          <td >Overcurrent relay</td>
                                          <td >2</td>
                                          <td>
                                            <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwRelayOvercurrent" id="EwRelayOvercurrent">
                                          </td>            
                                                    
                                          <td><input type="text" name="EwRelayOvercurrent" id="EwRelayOvercurrent"></td>                    
                                          <td><input type="file" name="EwRelayOvercurrent" id="EwRelayOvercurrent"></td>                    
                                        </tr>
                          
                                        <tr>
                                          <td >Earth fault relay</td>
                                          <td >2</td>
                                          <td>
                                            <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwRelayEarthFault" id="EwRelayEarthFault">
                                          </td>            
                                                   
                                          <td><input type="text" name="EwRelayEarthFault" id="EwRelayEarthFault"></td>                    
                                          <td><input type="file" name="EwRelayEarthFault" id="EwRelayEarthFault"></td>                    
                                        </tr>
                          
                                        <tr>
                                          <td >Earth fault leakage</td>
                                          <td >2</td>
                                          <td>
                                            <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwRelayEarthLeakage" id="EwRelayEarthLeakage">
                                          </td>            
                                                  
                                          <td><input type="text" name="EwRelayEarthLeakage" id="EwRelayEarthLeakage"></td>                    
                                          <td><input type="file" name="EwRelayEarthLeakage" id="EwRelayEarthLeakage"></td>                    
                                        </tr>
                          
                                        <tr class="text-center">
                                          <td rowspan="3" >5</td>
                                          <td rowspan="3">Circuit breaker</td>
                                          <td >Air Circuit Breaker(ACB)</td>
                                          <td >2</td>
                                          <td>
                                            <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwCircuitACB" id="EwCircuitACB">
                                          </td>            
                                                 
                                          <td><input type="text" name="EwCircuitACB" id="EwCircuitACB"></td>                    
                                          <td><input type="file" name="EwCircuitACB" id="EwCircuitACB"></td>                    
                                        </tr>
                          
                                        <tr>
                                          <td >Moulded Case Circuit Breaker(MCCB)</td>
                                          <td >2</td>
                                          <td>
                                            <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwCircuitMCCB" id="EwCircuitMCCB">
                                          </td>            
                                                 
                                          <td><input type="text" name="EwCircuitMCCB" id="EwCircuitMCCB"></td>                    
                                          <td><input type="file" name="EwCircuitMCCB" id="EwCircuitMCCB"></td>                    
                                        </tr>
                          
                                        <tr>
                                          <td >Miniature Circuit Breaker(MCB)</td>
                                          <td >2</td>
                                          <td>
                                            <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwCircuitMCB" id="EwCircuitMCB">
                                          </td>            
                                                    
                                          <td><input type="text" name="EwCircuitMCB" id="EwCircuitMCB"></td>                    
                                          <td><input type="file" name="EwCircuitMCB" id="EwCircuitMCB"></td>                    
                                        </tr>
                          
                                        <tr class="text-center">
                                          <td rowspan="1" >6</td>
                                          <td rowspan="1">Residual current devices</td>
                                          <td >Residual Current Operated Circuit Breaker with Integral o/c protection(RCBO)</td>
                                          <td >2</td>
                                          <td><input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwResidualRCBO" id="EwResidualRCBO"></td>            
                                                    
                                          <td><input type="text" name="EwResidualRCBO" id="EwResidualRCBO"></td>                    
                                          <td><input type="file" name="EwResidualRCBO" id="EwResidualRCBO"></td>                    
                                        </tr>
                          
                                        <tr class="text-center">
                                          <td rowspan="5" >7</td>
                                          <td rowspan="5">Switchboard</td>
                                          <td >Metal enclosure</td>
                                          <td >2</td>
                                          <td><input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwResidualRCBO" id="EwResidualRCBO"></td>            
                                                   
                                          <td><input type="text" name="EwResidualRCBO" id="EwResidualRCBO"></td>                    
                                          <td><input type="file" name="EwResidualRCBO" id="EwResidualRCBO"></td>                    
                                        </tr>
                          
                                        <tr>
                                          <td >Busbar support</td>
                                          <td >2</td>
                                          <td><input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwSwitchboardBusbar" id="EwSwitchboardBusbar"></td>            
                                                    
                                          <td><input type="text" name="EwSwitchboardBusbar" id="EwSwitchboardBusbar"></td>                    
                                          <td><input type="file" name="EwSwitchboardBusbar" id="EwSwitchboardBusbar"></td>                    
                                        </tr>
                          
                                        <tr>
                                          <td >Cables</td>
                                          <td >2</td>
                                          <td>
                                            <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwSwitchboardCables" id="EwSwitchboardCables">
                                          </td>            
                                                    
                                          <td><input type="text" name="EwSwitchboardCables" id="EwSwitchboardCables"></td>                    
                                          <td><input type="file" name="EwSwitchboardCables" id="EwSwitchboardCables"></td>                    
                                        </tr>
                          
                                        <tr>
                                          <td >Busbar</td>
                                          <td >2</td>
                                          <td>
                                            <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwSwitchboardCables" id="EwSwitchboardCables">
                                          </td>            
                                                  
                                          <td><input type="text" name="EwSwitchboardCables" id="EwSwitchboardCables"></td>                    
                                          <td><input type="file" name="EwSwitchboardCables" id="EwSwitchboardCables"></td>                    
                                        </tr>
                          
                                        <tr>
                                          <td >Consumer unit</td>
                                          <td >2</td>
                                          <td>
                                            <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwSwitchboardConsumer" id="EwSwitchboardConsumer">
                                          </td>            
                                                 
                                          <td><input type="text" name="EwSwitchboardConsumer" id="EwSwitchboardConsumer"></td>                    
                                          <td><input type="file" name="EwSwitchboardConsumer" id="EwSwitchboardConsumer"></td>                    
                                        </tr>
                          
                                        <tr class="text-center">
                                          <td rowspan="4" >8</td>
                                          <td rowspan="4">Lamp</td>
                                          <td >Compact fluorescent lamp(CFL)</td>
                                          <td >2</td>
                                          <td><input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwLampCFL" id="EwLampCFL"></td>            
                                                   
                                          <td><input type="text" name="EwLampCFL" id="EwLampCFL"></td>                    
                                          <td><input type="file" name="EwLampCFL" id="EwLampCFL"></td>                    
                                        </tr>
                          
                                        <tr>
                                          <td >Fluorescent lamp(T5)</td>
                                          <td >2</td>
                                          <td><input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwLampT5" id="EwLampT5"></td>            
                                                   
                                          <td><input type="text" name="EwLampT5" id="EwLampT5"></td>                    
                                          <td><input type="file" name="EwLampT5" id="EwLampT5"></td>                    
                                        </tr>
                          
                                        <tr>
                                          <td >LED tubes</td>
                                          <td >2</td>
                                          <td>
                                            <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwLampLEDTube" id="EwLampLEDTube">
                                          </td>            
                                                    
                                          <td><input type="text" name="EwLampLEDTube" id="EwLampLEDTube"></td>                    
                                          <td><input type="file" name="EwLampLEDTube" id="EwLampLEDTube"></td>                    
                                        </tr>
                          
                                        <tr>
                                          <td >LED bulb</td>
                                          <td >2</td>
                                          <td>
                                            <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwLampLEDBulb" id="EwLampLEDBulb">
                                          </td>            
                                                    
                                          <td><input type="text" name="EwLampLEDBulb" id="EwLampLEDBulb"></td>                    
                                          <td><input type="file" name="EwLampLEDBulb" id="EwLampLEDBulb"></td>                    
                                        </tr>
                          
                                        <tr class="text-center">
                                          <td rowspan="6" >9</td>
                                          <td rowspan="6">Indoor luminaires</td>
                                          <td >LED downlight</td>
                                          <td >2</td>
                                          <td><input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwIndoorLEDDownlight" id="EwIndoorLEDDownlight"></td>            
                                                      
                                          <td><input type="text" name="EwIndoorLEDDownlight" id="EwIndoorLEDDownlight"></td>                    
                                          <td><input type="file" name="EwIndoorLEDDownlight" id="EwIndoorLEDDownlight"></td>                    
                                        </tr>
                          
                                        <tr>
                                          <td >LED recessed luminaires</td>
                                          <td >2</td>
                                          <td><input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwIndoorLEDRecessed" id="EwIndoorLEDRecessed"></td>            
                                                    
                                          <td><input type="text" name="EwIndoorLEDRecessed" id="EwIndoorLEDRecessed"></td>                    
                                          <td><input type="file" name="EwIndoorLEDRecessed" id="EwIndoorLEDRecessed"></td>                    
                                        </tr>
                          
                                        <tr>
                                          <td >Fluorescent luminaires(T5)</td>
                                          <td >2</td>
                                          <td>
                                            <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwIndoorT5" id="EwIndoorT5">
                                          </td>            
                                                    
                                          <td><input type="text" name="EwIndoorT5" id="EwIndoorT5"></td>                    
                                          <td><input type="file" name="EwIndoorT5" id="EwIndoorT5"></td>                    
                                        </tr>
                          
                                        <tr>
                                          <td >Fluorescent luminaires(T8) c/w electronic ballast</td>
                                          <td >2</td>
                                          <td>
                                            <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwIndoorT8" id="EwIndoorT8">
                                          </td>            
                                                    
                                          <td><input type="text" name="EwIndoorT8" id="EwIndoorT8"></td>                    
                                          <td><input type="file" name="EwIndoorT8" id="EwIndoorT8"></td>                    
                                        </tr>
                          
                                        <tr>
                                          <td >Electronic ballast</td>
                                          <td >2</td>
                                          <td>
                                            <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwIndoorBallast" id="EwIndoorBallast">
                                          </td>            
                                                    
                                          <td><input type="text" name="EwIndoorBallast" id="EwIndoorBallast"></td>                    
                                          <td><input type="file" name="EwIndoorBallast" id="EwIndoorBallast"></td>                    
                                        </tr>
                          
                                        <tr>
                                          <td >LED driver</td>
                                          <td >2</td>
                                          <td>
                                            <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwIndoorLEDDriver" id="EwIndoorLEDDriver">
                                          </td>            
                                                    
                                          <td><input type="text" name="EwIndoorLEDDriver" id="EwIndoorLEDDriver"></td>                    
                                          <td><input type="file" name="EwIndoorLEDDriver" id="EwIndoorLEDDriver"></td>                    
                                        </tr>
                          
                                        <tr class="text-center">
                                          <td rowspan="5" >10</td>
                                          <td rowspan="5">Outdoor luminaires</td>
                                          <td >Road lighting luminaires(HPSV)</td>
                                          <td >2</td>
                                          <td><input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwOutdoorHPSV" id="EwOutdoorHPSV"></td>            
                                                     
                                          <td><input type="text" name="EwOutdoorHPSV" id="EwOutdoorHPSV"></td>                    
                                          <td><input type="file" name="EwOutdoorHPSV" id="EwOutdoorHPSV"></td>                    
                                        </tr>
                          
                                        <tr>
                                          <td >Road lighting luminaires(Induction)</td>
                                          <td >2</td>
                                          <td><input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwOutdoorInduction" id="EwOutdoorInduction"></td>            
                                                    
                                          <td><input type="text" name="EwOutdoorInduction" id="EwOutdoorInduction"></td>                    
                                          <td><input type="file" name="EwOutdoorInduction" id="EwOutdoorInduction"></td>                    
                                        </tr>
                          
                                        <tr>
                                          <td >Road lighting luminaires(LED)</td>
                                          <td >2</td>
                                          <td>
                                            <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwOutdoorLED" id="EwOutdoorLED">
                                          </td>            
                                       
                                          <td><input type="text" name="EwOutdoorLED" id="EwOutdoorLED"></td>                    
                                          <td><input type="file" name="EwOutdoorLED" id="EwOutdoorLED"></td>                    
                                        </tr>
                          
                                        <tr>
                                          <td >Ballast for discharge lamp</td>
                                          <td >2</td>
                                          <td>
                                            <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwOutdoorBallast" id="EwOutdoorBallast">
                                          </td>            
                                                   
                                          <td><input type="text" name="EwOutdoorBallast" id="EwOutdoorBallast"></td>                    
                                          <td><input type="file" name="EwOutdoorBallast" id="EwOutdoorBallast"></td>                    
                                        </tr>
                          
                                        <tr>
                                          <td >Lighting columns</td>
                                          <td >2</td>
                                          <td>
                                            <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwOutdoorLighting" id="EwOutdoorLighting">
                                          </td>            
                                                    
                                          <td><input type="text" name="EwOutdoorLighting" id="EwOutdoorLighting"></td>                    
                                          <td><input type="file" name="EwOutdoorLighting" id="EwOutdoorLighting"></td>                    
                                        </tr>
                          
                                        <tr class="text-center">
                                          <td rowspan="3" >11</td>
                                          <td rowspan="3">Traffic light</td>
                                          <td > Controller</td>
                                          <td >2</td>
                                          <td><input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwTrafficController" id="EwTrafficController"></td>            
                                                   
                                          <td><input type="text" name="EwTrafficController" id="EwTrafficController"></td>                    
                                          <td><input type="file" name="EwTrafficController" id="EwTrafficController"></td>                    
                                        </tr>
                          
                                        <tr>
                                          <td >Traffic signal module</td>
                                          <td >2</td>
                                          <td><input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwTrafficSignal" id="EwTrafficSignal"></td>            
                                                  
                                          <td><input type="text" name="EwTrafficSignal" id="EwTrafficSignal"></td>                    
                                          <td><input type="file" name="EwTrafficSignal" id="EwTrafficSignal"></td>                    
                                        </tr>
                          
                                        <tr>
                                          <td >Lighting columns</td>
                                          <td >2</td>
                                          <td>
                                            <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwTrafficLighting" id="EwTrafficLighting">
                                          </td>            
                                                    
                                          <td><input type="text" name="EwTrafficLighting" id="EwTrafficLighting"></td>                    
                                          <td><input type="file" name="EwTrafficLighting" id="EwTrafficLighting"></td>                    
                                        </tr>
                          
                                        <tr class="text-center">
                                          <td rowspan="2" >12</td>
                                          <td rowspan="2">Switches and socket outlet</td>
                                          <td > Switches</td>
                                          <td >2</td>
                                          <td><input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwSwitches" id="EwSwitches"></td>            
                                                    
                                          <td><input type="text" name="EwSwitches" id="EwSwitches"></td>                    
                                          <td><input type="file" name="EwSwitches" id="EwSwitches"></td>                    
                                        </tr>
                          
                                        <tr>
                                          <td >Switches socket outlet</td>
                                          <td >2</td>
                                          <td><input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwSwitchesSocket" id="EwSwitchesSocket"></td>            
                                                    
                                          <td><input type="text" name="EwSwitchesSocket" id="EwSwitchesSocket"></td>                    
                                          <td><input type="file" name="EwSwitchesSocket" id="EwSwitchesSocket"></td>                    
                                        </tr>
                          
                                        <tr class="text-center">
                                          <td rowspan="3" >13</td>
                                          <td rowspan="3">Cables</td>
                                          <td > Low voltage cable</td>
                                          <td >2</td>
                                          <td><input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwCablesLow" id="EwCablesLow"></td>            
                                                    
                                          <td><input type="text" name="EwCablesMedium" id="EwCablesMedium"></td>                    
                                          <td><input type="file" name="EwCablesMedium" id="EwCablesMedium"></td>                    
                                        </tr>
                          
                                        <tr>
                                          <td >Medium voltage cable</td>
                                          <td >2</td>
                                          <td><input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwCablesMedium" id="EwCablesMedium"></td>            
                                                    
                                          <td><input type="text" name="EwCablesMedium" id="EwCablesMedium"></td>                    
                                          <td><input type="file" name="EwCablesMedium" id="EwCablesMedium"></td>                    
                                        </tr>
                          
                                        <tr>
                                          <td >High voltage cable</td>
                                          <td >2</td>
                                          <td>
                                            <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwCablesHigh" id="EwCablesHigh">
                                          </td>            
                                                    
                                          <td><input type="text" name="EwCablesHigh" id="EwCablesHigh"></td>                    
                                          <td><input type="file" name="EwCablesHigh" id="EwCablesHigh"></td>                    
                                        </tr>
                          
                                        <tr class="text-center">
                                          <td rowspan="4" >14</td>
                                          <td rowspan="4">G. S conduit & High Impact PVC conduit/trunking/tray</td>
                                          <td >Rigid high impact PVC conduit</td>
                                          <td >2</td>
                                          <td>
                                            <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwTrayPVC" id="EwTrayPVC">
                                          </td>            
                                                    
                                          <td><input type="text" name="EwTrayPVC" id="EwTrayPVC"></td>                    
                                          <td><input type="file" name="EwTrayPVC" id="EwTrayPVC"></td>                    
                                        </tr>
                            
                                        <tr>
                                          <td >Galvanised steel conduit</td>
                                          <td >2</td>
                                          <td>
                                            <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwTrayGalvanised" id="EwTrayGalvanised">
                                          </td>            
                                                    
                                          <td><input type="text" name="EwTrayGalvanised" id="EwTrayGalvanised"></td>                    
                                          <td><input type="file" name="EwTrayGalvanised" id="EwTrayGalvanised"></td>                    
                                        </tr>
                            
                                        <tr>
                                          <td >Trunking</td>
                                          <td >2</td>
                                          <td>
                                            <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwTrayTrunking" id="EwTrayTrunking">
                                          </td>            
                                                     
                                          <td><input type="text" name="EwTrayTrunking" id="EwTrayTrunking"></td>                    
                                          <td><input type="file" name="EwTrayTrunking" id="EwTrayTrunking"></td>                    
                                        </tr>
                            
                                        <tr>
                                          <td >Cable tray</td>
                                          <td >2</td>
                                          <td>
                                            <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwTrayCableTray" id="EwTrayCableTray">
                                          </td>            
                                                   
                                          <td><input type="text" name="EwTrayCableTray" id="EwTrayCableTray"></td>                    
                                          <td><input type="file" name="EwTrayCableTray" id="EwTrayCableTray"></td>                    
                                        </tr>
                              
                                          <tr class="text-center">
                                            <td rowspan="3" >15</td>
                                            <td rowspan="3">Fan</td>
                                            <td >Ceiling fan</td>
                                            <td >2</td>
                                            <td>
                                              <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwFanCeiling" id="EwFanCeiling">
                                            </td>            
                                                       
                                            <td><input type="text" name="EwFanCeiling" id="EwFanCeiling"></td>                    
                                            <td><input type="file" name="EwFanCeiling" id="EwFanCeiling"></td>                    
                                          </tr>
                            
                                          <tr>
                                            <td >Wall fan</td>
                                            <td >2</td>
                                            <td>
                                              <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwFanWall" id="EwFanWall">
                                            </td>            
                                                     
                                            <td><input type="text" name="EwFanWall" id="EwFanWall"></td>                    
                                            <td><input type="file" name="EwFanWall" id="EwFanWall"></td>                    
                                          </tr>
                            
                                          <tr>
                                            <td >Oscillating fan</td>
                                            <td >2</td>
                                            <td>
                                              <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwFanOscillating" id="EwFanOscillating">
                                            </td>            
                                                      
                                            <td><input type="text" name="EwFanOscillating" id="EwFanOscillating"></td>                    
                                            <td><input type="file" name="EwFanOscillating" id="EwFanOscillating"></td>                    
                                          </tr>
                            
                                          <tr class="text-center">
                                            <td rowspan="2" >16</td>
                                            <td rowspan="2">Power factor correction</td>
                                            <td >Capacitor for power factor correction</td>
                                            <td >2</td>
                                            <td>
                                              <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwPowerCapasitor" id="EwPowerCapasitor">
                                            </td>            
                                                       
                                            <td><input type="text" name="EwPowerCapasitor" id="EwPowerCapasitor"></td>                    
                                            <td><input type="file" name="EwPowerCapasitor" id="EwPowerCapasitor"></td>                    
                                          </tr>
                            
                                          <tr>
                                            <td >Power factor regulator</td>
                                            <td >2</td>
                                            <td>
                                              <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwPowerRegulator" id="EwPowerRegulator">
                                            </td>            
                                                   
                                            <td><input type="text" name="EwPowerRegulator" id="EwPowerRegulator"></td>                    
                                            <td><input type="file" name="EwPowerRegulator" id="EwPowerRegulator"></td>                    
                                          </tr>
                            
                                          <tr class="text-center">
                                            <td rowspan="2" >17</td>
                                            <td rowspan="2">Emergency light & luminous sign</td>
                                            <td >'KELUAR' sign LED</td>
                                            <td >2</td>
                                            <td>
                                              <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwEmergencyKeluar" id="EwEmergencyKeluar">
                                            </td>            
                                                      
                                            <td><input type="text" name="EwEmergencyKeluar" id="EwEmergencyKeluar"></td>                    
                                            <td><input type="file" name="EwEmergencyKeluar" id="EwEmergencyKeluar"></td>                    
                                          </tr>
                            
                                          <tr>
                                            <td >Emergency light LED</td>
                                            <td >2</td>
                                            <td>
                                              <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwEmergencyLED" id="EwEmergencyLED">
                                            </td>            
                                                       
                                            <td><input type="text" name="EwEmergencyLED" id="EwEmergencyLED"></td>                    
                                            <td><input type="file" name="EwEmergencyLED" id="EwEmergencyLED"></td>                    
                                          </tr>
                            
                                          <tr class="text-center">
                                            <td rowspan="1" >18</td>
                                            <td rowspan="1">Switchgear</td>
                                            <td >11kV metal enclosed Switchgear - VCB</td>
                                            <td >2</td>
                                            <td><input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwSwithcgearVCB" id="EwSwithcgearVCB"></td>            
                                                      
                                            <td><input type="text" name="EwSwithcgearVCB" id="EwSwithcgearVCB"></td>                    
                                            <td><input type="file" name="EwSwithcgearVCB" id="EwSwithcgearVCB"></td>                    
                                          </tr>
                            
                                          <tr class="text-center">
                                            <td rowspan="4" >19</td>
                                            <td rowspan="4">Renewable energy system</td>
                                            <td >Solar panel</td>
                                            <td >2</td>
                                            <td><input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwRenewableSolar" id="EwRenewableSolar"></td>            
                                                      
                                            <td><input type="text" name="EwRenewableSolar" id="EwRenewableSolar"></td>                    
                                            <td><input type="file" name="EwRenewableSolar" id="EwRenewableSolar"></td>                    
                                          </tr>
                            
                                          <tr>
                                            <td >Battery</td>
                                            <td >2</td>
                                            <td><input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwRenewableBattery" id="EwRenewableBattery"></td>            
                                                      
                                            <td><input type="text" name="EwRenewableBattery" id="EwRenewableBattery"></td>                    
                                            <td><input type="file" name="EwRenewableBattery" id="EwRenewableBattery"></td>                    
                                          </tr>
                            
                                          <tr>
                                            <td >Inverter</td>
                                            <td >2</td>
                                            <td>
                                              <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwRenewableInverter" id="EwRenewableInverter">
                                            </td>            
                                                      
                                            <td><input type="text" name="EwRenewableInverter" id="EwRenewableInverter"></td>                    
                                            <td><input type="file" name="EwRenewableInverter" id="EwRenewableInverter"></td>                    
                                          </tr>
                            
                                          <tr>
                                            <td >Low voltage cable</td>
                                            <td >2</td>
                                            <td>
                                              <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwRenewableLowCable" id="EwRenewableLowCable">
                                            </td>            
                                                       
                                            <td><input type="text" name="EwRenewableLowCable" id="EwRenewableLowCable"></td>                    
                                            <td><input type="file" name="EwRenewableLowCable" id="EwRenewableLowCable"></td>                    
                                          </tr>
                          
                                          <tr style="display: none">
                                            <td><input type="text" name="markahPREw" id="markahPREw" /></td>
                                          </tr>

                                          <thead class="text-white bg-orange-jkr">
            
                                            <tr>
                                              <th colspan="8">List of products for mechanical works</th>
                                            </tr>
                                            <tr>
                                              <th>No.</th>
                                              <th >Component</th>
                                              <th>Product</th>
                                              <th >Point Allocated</th>
                                              <th>Point Requested (design)</th>
                                              {{-- <th>Point Requested (construction)</th>
                                              <th>Point Awarded</th> --}}
                                              <th >Remark</th>
                                              <th >Supporting Documents</th>
                                            </tr>
                                          </thead>

                                          <tr class="text-center">
                                            <td rowspan="5">1</td>
                                            <td rowspan="5">Water cooled chiller system</td>
                                            <td>Compressor <li>Refrigerant</li></td>
                                            <td>2</td>
                                            <td><input onblur="findTotalmarkahPRMw()" type="number" min="0" max="2" class="mekanikal" name="MwWaterSystemCompressor" id="MwWaterSystemCompressor"></td>                        
                                            <td><input type="text" name="MwWaterSystemCompressor" id="MwWaterSystemCompressor"></td>                    
                                            <td><input type="file" name="MwWaterSystemCompressor" id="MwWaterSystemCompressor"></td>                    
                                          </tr>
                                
                                          <tr>
                                            <td >Air side <li>Air handling unit</li></td>
                                            <td >2</td>
                                            <td><input onblur="findTotalmarkahPRMw()" type="number" min="0" max="2" class="mekanikal" name="MwWaterSystemAirSide" id="MwWaterSystemAirSide"></td>            
                                            <td><input type="text" name="MwWaterSystemAirSide" id="MwWaterSystemAirSide"></td>                    
                                            <td><input type="file" name="MwWaterSystemAirSide" id="MwWaterSystemAirSide"></td>                    
                                          </tr>
                                
                                          <tr>
                                            <td>Water side 
                                              <li>Pump</li>
                                            </td>
                                            <td >2</td>
                                            <td><input onblur="findTotalmarkahPRMw()" type="number" min="0" max="2" class="mekanikal" name="MwWaterSystemPump" id="MwWaterSystemPump"></td>                       
                                            <td><input type="text" name="MwWaterSystemPump" id="MwWaterSystemPump"></td>                    
                                            <td><input type="file" name="MwWaterSystemPump" id="MwWaterSystemPump"></td>                    
                                          </tr>
                              
                                          <tr>
                                            <td><li>Cooling tower</li></td>
                                            <td>2</td>
                                            <td><input onblur="findTotalmarkahPRMw()" type="number" min="0" max="2" class="mekanikal" name="MwWaterSystemCoolingTower" id="MwWaterSystemCoolingTower"></td>                       
                                            <td><input type="text" name="MwWaterSystemCoolingTower" id="MwWaterSystemCoolingTower"></td>            
                                            <td><input type="file" name="MwWaterSystemCoolingTower" id="MwWaterSystemCoolingTower"></td>            
                                            
                                          </tr>
                              
                                          <tr>
                                            <td><li>Electronic water descater</li></td>
                                            <td>2</td>
                                            <td><input onblur="findTotalmarkahPRMw()" type="number" min="0" max="2" class="mekanikal" name="MwWaterSystemElectronicWater" id="MwWaterSystemElectronicWater"></td>                        
                                            <td><input type="text" name="MwWaterSystemElectronicWater" id="MwWaterSystemElectronicWater"></td>            
                                            <td><input type="file" name="MwWaterSystemElectronicWater" id="MwWaterSystemElectronicWater"></td>            
                                          </tr>
                                
                                          <tr class="text-center">
                                              <td rowspan="3" >2</td>
                                              <td rowspan="3">Multiple air-conditioning system</td>
                                              <td >Compressor <li>Refrigerant</li></td>
                                              <td >2</td>
                                              <td><input onblur="findTotalmarkahPRMw()" type="number" min="0" max="2" class="mekanikal" name="MwACCompressor" id="MwACCompressor"></td>                        
                                              <td><input type="text" name="MwACCompressor" id="MwACCompressor"></td>                    
                                              <td><input type="file" name="MwACCompressor" id="MwACCompressor"></td>                    
                                            </tr>
                                
                                          <tr>
                                            <td >Air side <li>Air handling unit</li></td>
                                            <td >2</td>
                                            <td><input onblur="findTotalmarkahPRMw()" type="number" min="0" max="2" class="mekanikal " name="MwACAirHandling" id="MwACAirHandling"></td>            
                                            <td><input type="text" name="MwACAirHandling" id="MwACAirHandling"></td>                    
                                            <td><input type="file" name="MwACAirHandling" id="MwACAirHandling"></td>                    
                                          </tr>
                              
                                          <tr>
                                            <td><li>Outdoor unit</li></td>
                                            <td>2</td>
                                            <td><input onblur="findTotalmarkahPRMw()" type="number" min="0" max="2" class="mekanikal" name="MwACOutdoorUnit" id="MwACOutdoorUnit"></td>                       
                                            <td><input type="text" name="MwACOutdoorUnit" id="MwACOutdoorUnit"></td>            
                                            <td><input type="file" name="MwACOutdoorUnit" id="MwACOutdoorUnit"></td>            
                                          </tr>
                              
                                        
                              
                                          <tr class="text-center">
                                              <td rowspan="1" >3</td>
                                              <td rowspan="1">Split unit</td>
                                              <td >Compressor <li>Refrigerant</li></td>
                                              <td >2</td>
                                              <td><input onblur="findTotalmarkahPRMw()" type="number" min="0" max="2" class="mekanikal" name="MwSplitCompressor" id="MwSplitCompressor"></td>                       
                                              <td><input type="text" name="MwSplitCompressor" id="MwSplitCompressor"></td>                    
                                              <td><input type="file" name="MwSplitCompressor" id="MwSplitCompressor"></td>                    
                                            </tr>
                              
                                            <tr class="text-center">
                                              <td rowspan="1" >4</td>
                                              <td rowspan="1">Lift</td>
                                              <td >Lift motor</td>
                                              <td >2</td>
                                              <td><input onblur="findTotalmarkahPRMw()" type="number" min="0" max="2" class="mekanikal" name="MwLiftMotor" id="MwLiftMotor"></td>            
                                              <td><input type="text" name="MwLiftMotor" id="MwLiftMotor"></td>                    
                                              <td><input type="file" name="MwLiftMotor" id="MwLiftMotor"></td>                    
                                            </tr>
                              
                                            <tr class="text-center">
                                              <td rowspan="4" >5</td>
                                              <td rowspan="4">Firefighting system</td>
                                              <td >Clean agent <li>Mist</li></td>
                                              <td >2</td>
                                              <td><input onblur="findTotalmarkahPRMw()" type="number" min="0" max="2" class="mekanikal" name="MwFireSystemMist" id="MwFireSystemMist"></td>            
                                              <td><input type="text" name="MwFireSystemMist" id="MwFireSystemMist"></td>                    
                                              <td><input type="file" name="MwFireSystemMist" id="MwFireSystemMist"></td>                    
                                            </tr>
                              
                                            <tr>
                                              <td >Hose reel <li>Pump</li></td>
                                              <td >2</td>
                                              <td><input onblur="findTotalmarkahPRMw()" type="number" min="0" max="2" class="mekanikal" name="MwFireSystemHosePump" id="MwFireSystemHosePump"></td>            
                                              <td><input type="text" name="MwFireSystemHosePump" id="MwFireSystemHosePump"></td>                    
                                              <td><input type="file" name="MwFireSystemHosePump" id="MwFireSystemHosePump"></td>                    
                                            </tr>
                              
                                            <tr>
                                              <td >Sprinkler <li>Pump</li></td>
                                              <td >2</td>
                                              <td>
                                                <input onblur="findTotalmarkahPRMw()" type="number" min="0" max="2" class="mekanikal" name="MwFireSystemSpriklerPump" id="MwFireSystemSpriklerPump">
                                              </td>                       
                                              <td><input type="text" name="MwFireSystemSpriklerPump" id="MwFireSystemSpriklerPump"></td>                    
                                              <td><input type="file" name="MwFireSystemSpriklerPump" id="MwFireSystemSpriklerPump"></td>                    
                                            </tr>
                              
                                            <tr>
                                              <td >Wet or dry riser <li>Pump</li></td>
                                              <td >2</td>
                                              <td>
                                                <input onblur="findTotalmarkahPRMw()" type="number" min="0" max="2" class="mekanikal" name="MwFireSystemWetPump" id="MwFireSystemWetPump">
                                              </td>            
                                              <td><input type="text" name="MwFireSystemWetPump" id="MwFireSystemWetPump"></td>                    
                                              <td><input type="file" name="MwFireSystemWetPump" id="MwFireSystemWetPump"></td>                    
                                            </tr>
                              
                                            <tr class="text-center">
                                              <td rowspan="2" >6</td>
                                              <td rowspan="2">Cold water system</td>
                                              <td >Pump</td>
                                              <td >2</td>
                                              <td>
                                                <input onblur="findTotalmarkahPRMw()" type="number" min="0" max="2" class="mekanikal" name="MwColdSystemPump" id="MwColdSystemPump">
                                              </td>                       
                                              <td><input type="text" name="MwColdSystemPump" id="MwColdSystemPump"></td>                    
                                              <td><input type="file" name="MwColdSystemPump" id="MwColdSystemPump"></td>                    
                                            </tr>
                              
                                            <tr>
                                              <td >Water tank</td>
                                              <td >2</td>
                                              <td>
                                                <input onblur="findTotalmarkahPRMw()" type="number" min="0" max="2" class="mekanikal" name="MwColdSystemWaterTank" id="MwColdSystemWaterTank">
                                              </td>                       
                                              <td><input type="text" name="MwColdSystemWaterTank" id="MwColdSystemWaterTank"></td>                    
                                              <td><input type="file" name="MwColdSystemWaterTank" id="MwColdSystemWaterTank"></td>                    
                                            </tr>
                              
                                            <tr class="text-center">
                                              <td rowspan="1" >7</td>
                                              <td rowspan="1">Innovation</td>
                                              <td >Rain water harvesting</td>
                                              <td >2</td>
                                              <td><input onblur="findTotalmarkahPRMw()" type="number" min="0" max="2" class="mekanikal" name="MwInnovationRainHarvesting" id="MwInnovationRainHarvesting"></td>                        
                                              <td><input type="text" name="MwInnovationRainHarvesting" id="MwInnovationRainHarvesting"></td>                    
                                              <td><input type="file" name="MwInnovationRainHarvesting" id="MwInnovationRainHarvesting"></td>                    
                                            </tr>
                              
                                            <tr style="display: none">
                                              <td><input type="text" name="markahPRMw" id="markahPRMw" /></td>
                                            </tr>
                                  
                                </tbody>
                                </form>
                              </table>

                              <div align="center" class="mt-3">
                                <button class="btn btn-primary" type="submit" title="Simpan">Simpan</button>
                                <button class="btn btn-primary" type="submit" title="Simpan">Sah</button>
                                <button class="btn btn-primary" type="submit" title="Simpan">Jana Keputusan</button>
                                <button class="btn btn-primary" type="submit" title="Simpan">Jana Sijil</button>
                                {{-- <a href="/penilaian_reka_bentuk_jalan/isi_skor_kad_page2" type="button" class="btn btn-primary">Seterusnya</a>           --}}
                              </div>
                      
                              {{-- <div align="right" class="mt-3">
                                <button class="btn btn-primary" type="submit" title="Simpan">Simpan</button>
                                <a href="/penilaian_reka_bentuk_gpss/skor_penilaian_arkitek_page2/create" type="button" class="btn btn-secondary">Seterusnya</a>          
                              </div> --}}
                      
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
                    <h2 class="h2 mb-3">BORANG VERIFIKASI PERMARKAHAN GPSS BANGUNAN</h2>
                </div>

                <div class="col">
                    <div class="card-body">
                        <div class="row3 mx-1 table-responsive scrollbar text-center">
                          <form action= "/penilaian_reka_bentuk_gpss/simpan_skor_penilaian_arkitek/{id}" method="post" enctype="multipart/form-data">
                            @method('POST')
                            @csrf
                            <div class="col">
                              <table class="table table-bordered line-table text-center" style="width: 100%">
                                <thead class="text-white bg-orange-jkr">
                                  <tr>          
                                    <th colspan="8">Green Product Scoring Sheet</th>
                                  </tr>
                                  <tr>
                                    <th colspan="8">List of products for architectural works - Roof</th>
                                  </tr>
                                  <tr>
                                    <th>No.</th>
                                    <th >Component</th>
                                    <th>Product</th>
                                    <th>Point Allocated</th>
                                    <th>Point Requested (design)</th>
                                    {{-- <th>Point Requested (construction)</th> --}}
                                    {{-- <th>Point Awarded</th> --}}
                                    <th >Remark</th>
                                    <th >Supporting Documents</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  
                                  <tr class="text-center">
                                    <td rowspan="4" >1</td>
                                    <td rowspan="4">Roof tiles</td>
                                    <td >Clay tiles</td>
                                    <td >2</td>
                                    {{-- <td >
                                        <select onblur="findTotal()" class="arkitek" name="AwRoofRoofTilesClayTiles" id="AwRoofRoofTilesClayTiles">
                                        <option selected disabled ></option>
                                        <option value="0">0</option>
                                        <option value="2" >2</option>
                                        </select>
                                    </td> --}}
                                    <td><input onblur="findTotal()" type="number" min="0" max="2" min="0" max="2" class="arkitek" name="AwRoofRoofTilesClayTiles" id="AwRoofRoofTilesClayTiles"></td>            
                                    {{-- <td><input onblur="findTotalConstructed()" type="number" min="0" max="2" min="0" max="2" class="arkitek_construction" name="Cons_AwRoofRoofTilesClayTiles" id="Cons_AwRoofRoofTilesClayTiles"> --}}
                                    {{-- <td><input onblur="findTotalAwarded()" type="number" min="0" max="2" min="0" max="2" class="arkitek_awarded" name="Awarded_AwRoofRoofTilesClayTiles" id="Awarded_AwRoofRoofTilesClayTiles"> --}}
                                    <td><input type="text" name="Remark_AwRoofRoofTilesClayTiles" id="Remark_AwRoofRoofTilesClayTiles"></td>                    
                                    <td><input type="file" name="Remark_AwRoofRoofTilesClayTiles" id="Remark_AwRoofRoofTilesClayTiles"></td>                    
                                  </tr>
                        
                                  <tr>
                                    <td >Concrete tiles</td>
                                    <td >2</td>
                                    {{-- <td >
                                      <select onblur="findTotal()" class="arkitek" name="AwRoofRoofTilesConcreteTiles" id="AwRoofRoofTilesConcreteTiles">
                                      <option selected disabled ></option>
                                      <option value="0">0</option>
                                      <option value="2" >2</option>
                                      </select>
                                  </td> --}}
                                    <td><input onblur="findTotal()" type="number" min="0" max="2" min="0" max="2" class="arkitek" name="AwRoofRoofTilesConcreteTiles" id="AwRoofRoofTilesConcreteTiles"></td>            
                                    {{-- <td><input onblur="findTotalConstructed()" type="number" min="0" max="2" min="0" max="2" class="arkitek_construction" name="Cons_AwRoofRoofTilesConcreteTiles" id="Cons_AwRoofRoofTilesConcreteTiles"> --}}
                                    {{-- <td><input onblur="findTotalAwarded()" type="number" min="0" max="2" min="0" max="2" class="arkitek_awarded" name="Awarded_AwRoofRoofTilesConcreteTiles" id="Awarded_AwRoofRoofTilesConcreteTiles"> --}}
                                    <td><input type="text" name="Remark_AwRoofRoofTilesConcreteTiles" id="Remark_AwRoofRoofTilesConcreteTiles"></td>                    
                                    <td><input type="file" name="Remark_AwRoofRoofTilesConcreteTiles" id="Remark_AwRoofRoofTilesConcreteTiles"></td>                    
                                  </tr>
                        
                                  <tr>
                                    
                                    <td >Metal roofing</td>
                                    <td >2</td>
                                    {{-- <td >
                                      <select onblur="findTotal()" class="arkitek" name="AwRoofRoofTilesMetalRoofing" id="AwRoofRoofTilesMetalRoofing">
                                      <option selected disabled ></option>
                                      <option value="0">0</option>
                                      <option value="2" >2</option>
                                      </select>
                                    </td> --}}
                                    <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="AwRoofRoofTilesMetalRoofing" id="AwRoofRoofTilesMetalRoofing"></td>            
                                    {{-- <td><input onblur="findTotalConstructed()" type="number" min="0" max="2" class="arkitek_construction" name="Cons_AwRoofRoofTilesMetalRoofing" id="Cons_AwRoofRoofTilesMetalRoofing"></td>             --}}
                                    {{-- <td><input onblur="findTotalAwarded()" type="number" min="0" max="2" class="arkitek_awarded" name="Awarded_AwRoofRoofTilesMetalRoofing" id="Awarded_AwRoofRoofTilesMetalRoofing"></td>             --}}
                                    <td><input type="text" name="Remark_AwRoofRoofTilesMetalRoofing" id="Remark_AwRoofRoofTilesMetalRoofing"></td>                    
                                    <td><input type="file" name="Remark_AwRoofRoofTilesMetalRoofing" id="Remark_AwRoofRoofTilesMetalRoofing"></td>                    
                                  </tr>
                        
                                  <tr>
                                    <td >Shingles</td>
                                    <td >2</td>
                                    {{-- <td >
                                      <select onblur="findTotal()" class="arkitek" name="AwRoofRoofTilesShingles" id="AwRoofRoofTilesShingles">
                                      <option selected disabled ></option>
                                      <option value="0">0</option>
                                      <option value="2" >2</option>
                                      </select>
                                    </td> --}}
                                    <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="AwRoofRoofTilesShingles" id="AwRoofRoofTilesShingles"></td>            
                                    {{-- <td><input onblur="findTotalConstructed()" type="number" min="0" max="2" class="arkitek_construction" name="Cons_AwRoofRoofTilesShingles" id="Cons_AwRoofRoofTilesShingles"></td>             --}}
                                    {{-- <td><input onblur="findTotalAwarded()" type="number" min="0" max="2" class="arkitek_awarded" name="Awarded_AwRoofRoofTilesShingles" id="Awarded_AwRoofRoofTilesShingles"></td>             --}}
                                    <td><input type="text" name="Remark_AwRoofRoofTilesShingles" id="Remark_AwRoofRoofTilesShingles"></td>                    
                                    <td><input type="file" name="Remark_AwRoofRoofTilesShingles" id="Remark_AwRoofRoofTilesShingles"></td>                    
                                  </tr>
                                  
                                  <tr>
                                    <td rowspan="5">2</td>
                                    <td rowspan="5">Insulation</td>
                                    <td >Rockwool</td>
                                    <td >2</td>
                                    {{-- <td >
                                      <select onblur="findTotal()" class="arkitek" name="AwRoofRoofInsulationRockwool" id="AwRoofRoofInsulationRockwool">
                                      <option selected disabled ></option>
                                      <option value="0">0</option>
                                      <option value="2" >2</option>
                                      </select>
                                    </td> --}}
                                    <td> <input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="AwRoofRoofInsulationRockwool" id="AwRoofRoofInsulationRockwool"></td>            
                                    {{-- <td><input onblur="findTotalConstructed()" type="number" min="0" max="2" class="arkitek_construction" name="Cons_AwRoofRoofInsulationRockwool" id="Cons_AwRoofRoofInsulationRockwool"></td>             --}}
                                    {{-- <td><input onblur="findTotalAwarded()" type="number" min="0" max="2" class="arkitek_awarded" name="Awarded_AwRoofRoofInsulationRockwool" id="Awarded_AwRoofRoofInsulationRockwool"></td>              --}}
                                    <td><input type="text" name="Remark_AwRoofRoofInsulationRockwool" id="Remark_AwRoofRoofInsulationRockwool"></td>                    
                                    <td><input type="file" name="Remark_AwRoofRoofInsulationRockwool" id="Remark_AwRoofRoofInsulationRockwool"></td>                    
                                  </tr>
                        
                                  <tr>
                                    <td >Glasswool</td>
                                    <td >2</td>
                                    {{-- <td >
                                      <select onblur="findTotal()" class="arkitek" name="AwRoofRoofInsulationGlasswool" id="AwRoofRoofInsulationGlasswool">
                                      <option selected disabled ></option>
                                      <option value="0">0</option>
                                      <option value="2" >2</option>
                                      </select>
                                    </td> --}}
                                    <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="AwRoofRoofInsulationGlasswool" id="AwRoofRoofInsulationGlasswool"></td>            
                                    {{-- <td><input onblur="findTotalConstructed()" type="number" min="0" max="2" class="arkitek_construction" name="Cons_AwRoofRoofInsulationGlasswool" id="Cons_AwRoofRoofInsulationGlasswool"></td>             --}}
                                    {{-- <td><input onblur="findTotalAwarded()" type="number" min="0" max="2" class="arkitek_awarded" name="Awarded_AwRoofRoofInsulationGlasswool" id="Awarded_AwRoofRoofInsulationGlasswool"></td>              --}}
                                    <td><input type="text" name="Remark_AwRoofRoofInsulationGlasswool" id="Remark_AwRoofRoofInsulationGlasswool"></td>                    
                                    <td><input type="file" name="Remark_AwRoofRoofInsulationGlasswool" id="Remark_AwRoofRoofInsulationGlasswool"></td>                    
                                  </tr>
                        
                                  <tr>
                                    <td >Foam</td>
                                    <td >2</td>
                                    {{-- <td >
                                      <select onblur="findTotal()" class="arkitek" name="AwRoofRoofInsulationFoam" id="AwRoofRoofInsulationFoam">
                                      <option selected disabled ></option>
                                      <option value="0">0</option>
                                      <option value="2" >2</option>
                                      </select>
                                    </td> --}}
                                    <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="AwRoofRoofInsulationFoam" id="AwRoofRoofInsulationFoam"></td>            
                                    {{-- <td><input onblur="findTotalConstructed()" type="number" min="0" max="2" class="arkitek_construction" name="Cons_AwRoofRoofInsulationFoam" id="Cons_AwRoofRoofInsulationFoam"></td>             --}}
                                    {{-- <td><input onblur="findTotalAwarded()" type="number" min="0" max="2" class="arkitek_awarded" name="Awarded_AwRoofRoofInsulationFoam" id="Awarded_AwRoofRoofInsulationFoam"></td>              --}}
                                    <td><input type="text"name="Remark_AwRoofRoofInsulationFoam" id="Remark_AwRoofRoofInsulationFoam"></td>                    
                                    <td><input type="file"name="Remark_AwRoofRoofInsulationFoam" id="Remark_AwRoofRoofInsulationFoam"></td>                    
                                  </tr>
                        
                                  <tr>
                                    <td >Aluminium Foil</td>
                                    <td >2</td>
                                    {{-- <td >
                                      <select onblur="findTotal()" class="arkitek" name="AwRoofRoofInsulationAlumFoil" id="AwRoofRoofInsulationAlumFoil">
                                      <option selected disabled ></option>
                                      <option value="0">0</option>
                                      <option value="2" >2</option>
                                      </select>
                                    </td> --}}
                                    <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="AwRoofRoofInsulationAlumFoil" id="AwRoofRoofInsulationAlumFoil"></td>            
                                    {{-- <td><input onblur="findTotalConstructed()" type="number" min="0" max="2" class="arkitek_construction" name="Cons_AwRoofRoofInsulationAlumFoil" id="Cons_AwRoofRoofInsulationAlumFoil"></td>             --}}
                                    {{-- <td><input onblur="findTotalAwarded()" type="number" min="0" max="2" class="arkitek_awarded" name="Awarded_AwRoofRoofInsulationAlumFoil" id="Awarded_AwRoofRoofInsulationAlumFoil"></td>              --}}
                                    <td><input type="text" name="Remark_AwRoofRoofInsulationAlumFoil" id="Remark_AwRoofRoofInsulationAlumFoil"></td>                    
                                    <td><input type="file" name="Remark_AwRoofRoofInsulationAlumFoil" id="Remark_AwRoofRoofInsulationAlumFoil"></td>                    
                                  </tr>
                        
                                  <tr>
                                    <td >Undersheeting</td>
                                    <td >2</td>
                                    {{-- <td >
                                      <select onblur="findTotal()" class="arkitek" name="AwRoofRoofInsulationUndersheeting" id="AwRoofRoofInsulationUndersheeting">
                                      <option selected disabled ></option>
                                      <option value="0">0</option>
                                      <option value="2" >2</option>
                                      </select>
                                    </td> --}}
                                    <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="AwRoofRoofInsulationUndersheeting" id="AwRoofRoofInsulationUndersheeting"></td>            
                                    {{-- <td><input onblur="findTotalConstructed()" type="number" min="0" max="2" class="arkitek_construction" name="Cons_AwRoofRoofInsulationUndersheeting" id="Cons_AwRoofRoofInsulationUndersheeting"></td>             --}}
                                    {{-- <td><input onblur="findTotalAwarded()" type="number" min="0" max="2" class="arkitek_awarded" name="Awarded_AwRoofRoofInsulationUndersheeting" id="Awarded_AwRoofRoofInsulationUndersheeting"></td>              --}}
                                    <td><input type="text" name="Remark_AwRoofRoofInsulationUndersheeting" id="Remark_AwRoofRoofInsulationUndersheeting"></td>                    
                                    <td><input type="file" name="Remark_AwRoofRoofInsulationUndersheeting" id="Remark_AwRoofRoofInsulationUndersheeting"></td>                    
                                  </tr>
                        
                                  <tr>
                                    <td rowspan="3">3</td>
                                    <td rowspan="3">Roof Eaves</td>
                                    <td >Metal</td>
                                    <td >2</td>
                                    {{-- <td >
                                      <select onblur="findTotal()" class="arkitek" name="AwRoofRoofEavesMetal" id="AwRoofRoofEavesMetal">
                                      <option selected disabled ></option>
                                      <option value="0">0</option>
                                      <option value="2" >2</option>
                                      </select>
                                    </td> --}}
                                    <td> <input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="AwRoofRoofEavesMetal" id="AwRoofRoofEavesMetal"></td>            
                                    {{-- <td><input onblur="findTotalConstructed()" type="number" min="0" max="2" class="arkitek_construction" name="Cons_AwRoofRoofEavesMetal" id="Cons_AwRoofRoofEavesMetal"></td>             --}}
                                    {{-- <td><input onblur="findTotalAwarded()" type="number" min="0" max="2" class="arkitek_awarded" name="Awarded_AwRoofRoofEavesMetal" id="Awarded_AwRoofRoofEavesMetal"></td>              --}}
                                    <td><input type="text"name="Remark_AwRoofRoofEavesMetal" id="Remark_AwRoofRoofEavesMetal"></td>                    
                                    <td><input type="file"name="Remark_AwRoofRoofEavesMetal" id="Remark_AwRoofRoofEavesMetal"></td>                    
                                  </tr>
                        
                                  <tr>
                                    <td >Fiber cement</td>
                                    <td >2</td>
                                    {{-- <td >
                                      <select onblur="findTotal()" class="arkitek" name="AwRoofRoofEavesFiberCement" id="AwRoofRoofEavesFiberCement">
                                      <option selected disabled ></option>
                                      <option value="0">0</option>
                                      <option value="2" >2</option>
                                      </select>
                                    </td> --}}
                                    <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="AwRoofRoofEavesFiberCement" id="AwRoofRoofEavesFiberCement"></td>            
                                    {{-- <td><input onblur="findTotalConstructed()" type="number" min="0" max="2" class="arkitek_construction" name="Cons_AwRoofRoofEavesFiberCement" id="Cons_AwRoofRoofEavesFiberCement"></td>             --}}
                                    {{-- <td><input onblur="findTotalAwarded()" type="number" min="0" max="2" class="arkitek_awarded" name="Awarded_AwRoofRoofEavesFiberCement" id="Awarded_AwRoofRoofEavesFiberCement"></td>              --}}
                                    <td><input type="text" name="Remark_AwRoofRoofEavesFiberCement" id="Remark_AwRoofRoofEavesFiberCement"></td>                    
                                    <td><input type="file" name="Remark_AwRoofRoofEavesFiberCement" id="Remark_AwRoofRoofEavesFiberCement"></td>                    
                                  </tr>
                        
                                  <tr>
                                    <td >Plasterboard</td>
                                    <td >2</td>
                                    {{-- <td >
                                      <select onblur="findTotal()" class="arkitek" name="AwRoofRoofEavesPlasterboard" id="AwRoofRoofEavesPlasterboard">
                                      <option selected disabled ></option>
                                      <option value="0">0</option>
                                      <option value="2" >2</option>
                                      </select>
                                    </td> --}}
                                    <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="AwRoofRoofEavesPlasterboard" id="AwRoofRoofEavesPlasterboard"></td>            
                                    {{-- <td><input onblur="findTotalConstructed()" type="number" min="0" max="2" class="arkitek_construction" name="Cons_AwRoofRoofEavesPlasterboard" id="Cons_AwRoofRoofEavesPlasterboard"></td>             --}}
                                    {{-- <td><input onblur="findTotalAwarded()" type="number" min="0" max="2" class="arkitek_awarded" name="Awarded_AwRoofRoofEavesPlasterboard" id="Awarded_AwRoofRoofEavesPlasterboard"></td>              --}}
                                    <td><input type="text" name="Remark_AwRoofRoofEavesPlasterboard" id="Remark_AwRoofRoofEavesPlasterboard"></td>                    
                                    <td><input type="file" name="Remark_AwRoofRoofEavesPlasterboard" id="Remark_AwRoofRoofEavesPlasterboard"></td>                    
                                  </tr>
                        
                                  <tr>
                                    
                                    <td rowspan="4">4</td>
                                    <td rowspan="4">Fascia boards</td>
                                    <td >Metal</td>
                                    <td >2</td>
                                    {{-- <td >
                                      <select onblur="findTotal()" class="arkitek" name="AwRoofFascialBoardsMetal" id="AwRoofFascialBoardsMetal">
                                      <option selected disabled ></option>
                                      <option value="0">0</option>
                                      <option value="2" >2</option>
                                      </select>
                                    </td> --}}
                                    <td> <input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="AwRoofFascialBoardsMetal" id="AwRoofFascialBoardsMetal"></td>            
                                    {{-- <td><input onblur="findTotalConstructed()" type="number" min="0" max="2" class="arkitek_construction" name="Cons_AwRoofFascialBoardsMetal" id="Cons_AwRoofFascialBoardsMetal"></td>             --}}
                                    {{-- <td><input onblur="findTotalAwarded()" type="number" min="0" max="2" class="arkitek_awarded" name="Awarded_AwRoofFascialBoardsMetal" id="Awarded_AwRoofFascialBoardsMetal"></td>              --}}
                                    <td><input type="text" name="Remark_AwRoofFascialBoardsMetal" id="Remark_AwRoofFascialBoardsMetal"></td> 
                                    <td><input type="file" name="Remark_AwRoofFascialBoardsMetal" id="Remark_AwRoofFascialBoardsMetal"></td> 
                        
                                  </tr>
                        
                                  <tr>
                                    <td >Fibre cement</td>
                                    <td >2</td>
                                    {{-- <td >
                                      <select onblur="findTotal()" class="arkitek" name="AwRoofFascialBoardsFiberCement" id="AwRoofFascialBoardsFiberCement">
                                      <option selected disabled ></option>
                                      <option value="0">0</option>
                                      <option value="2" >2</option>
                                      </select>
                                    </td> --}}
                                    <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="AwRoofFascialBoardsFiberCement" id="AwRoofFascialBoardsFiberCement"></td>            
                                    {{-- <td><input onblur="findTotalConstructed()" type="number" min="0" max="2" class="arkitek_construction" name="Cons_AwRoofFascialBoardsFiberCement" id="Cons_AwRoofFascialBoardsFiberCement"></td>             --}}
                                    {{-- <td><input onblur="findTotalAwarded()" type="number" min="0" max="2" class="arkitek_awarded" name="Awarded_AwRoofFascialBoardsFiberCement" id="Awarded_AwRoofFascialBoardsFiberCement"></td>              --}}
                                    <td><input type="text" name="Remark_AwRoofFascialBoardsFiberCement" id="Remark_AwRoofFascialBoardsFiberCement"></td>                    
                                    <td><input type="file" name="Remark_AwRoofFascialBoardsFiberCement" id="Remark_AwRoofFascialBoardsFiberCement"></td>                    
                                  </tr>
                        
                                  <tr>
                                    <td >Plasterboard</td>
                                    <td >2</td>
                                    {{-- <td >
                                      <select onblur="findTotal()" class="arkitek" name="AwRoofFascialBoardsPlasterboard" id="AwRoofFascialBoardsPlasterboard">
                                      <option selected disabled ></option>
                                      <option value="0">0</option>
                                      <option value="2" >2</option>
                                      </select>
                                    </td> --}}
                                    <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="AwRoofFascialBoardsPlasterboard" id="AwRoofFascialBoardsPlasterboard"></td>            
                                    {{-- <td><input onblur="findTotalConstructed()" type="number" min="0" max="2" class="arkitek_construction" name="Cons_AwRoofFascialBoardsPlasterboard" id="Cons_AwRoofFascialBoardsPlasterboard"></td>             --}}
                                    {{-- <td><input onblur="findTotalAwarded()" type="number" min="0" max="2" class="arkitek_awarded" name="Awarded_AwRoofFascialBoardsPlasterboard" id="Awarded_AwRoofFascialBoardsPlasterboard"></td>              --}}
                                    <td><input type="text" name="Remark_AwRoofFascialBoardsPlasterboard" id="Remark_AwRoofFascialBoardsPlasterboard"></td>                    
                                    <td><input type="file" name="Remark_AwRoofFascialBoardsPlasterboard" id="Remark_AwRoofFascialBoardsPlasterboard"></td>                    
                                  </tr>
                        
                                  <tr>
                                    <td >Timber</td>
                                    <td >2</td>
                                    {{-- <td >
                                      <select onblur="findTotal()" class="arkitek" name="AwRoofFascialBoardsTimber" id="AwRoofFascialBoardsTimber">
                                      <option selected disabled ></option>
                                      <option value="0">0</option>
                                      <option value="2" >2</option>
                                      </select>
                                    </td> --}}
                                    <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="AwRoofFascialBoardsTimber" id="AwRoofFascialBoardsTimber"></td>            
                                    {{-- <td><input onblur="findTotalConstructed()" type="number" min="0" max="2" class="arkitek_construction" name="Cons_AwRoofFascialBoardsTimber" id="Cons_AwRoofFascialBoardsTimber"></td>             --}}
                                    {{-- <td><input onblur="findTotalAwarded()" type="number" min="0" max="2" class="arkitek_awarded" name="Awarded_AwRoofFascialBoardsTimber" id="Awarded_AwRoofFascialBoardsTimber"></td>              --}}
                                    <td><input type="text" name="Remark_AwRoofFascialBoardsTimber" id="Remark_AwRoofFascialBoardsTimber"></td>                    
                                    <td><input type="file" name="Remark_AwRoofFascialBoardsTimber" id="Remark_AwRoofFascialBoardsTimber"></td>                    
                                  </tr>
                        
                                  <tr>
                                    
                                    <td rowspan="4">5</td>
                                    <td rowspan="4">Gutter</td>
                                    <td >Upvc</td>
                                    <td >2</td>
                                    {{-- <td >
                                      <select onblur="findTotal()" class="arkitek" name="AwRoofGutterUpvc" id="AwRoofGutterUpvc">
                                      <option selected disabled ></option>
                                      <option value="0">0</option>
                                      <option value="2" >2</option>
                                      </select>
                                    </td> --}}
                                    <td> <input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="AwRoofGutterUpvc" id="AwRoofGutterUpvc"></td>            
                                    {{-- <td><input onblur="findTotalConstructed()" type="number" min="0" max="2" class="arkitek_construction" name="Cons_AwRoofGutterUpvc" id="Cons_AwRoofGutterUpvc"></td>             --}}
                                    {{-- <td><input onblur="findTotalAwarded()" type="number" min="0" max="2" class="arkitek_awarded" name="Awarded_AwRoofGutterUpvc" id="Awarded_AwRoofGutterUpvc"></td>              --}}
                                    <td><input type="text" name="Remark_AwRoofGutterUpvc" id="Remark_AwRoofGutterUpvc"></td> 
                                    <td><input type="file" name="Remark_AwRoofGutterUpvc" id="Remark_AwRoofGutterUpvc"></td> 
                        
                                  </tr>
                        
                                  <tr>
                                    <td >Galvanised iron</td>
                                    <td >2</td>
                                    {{-- <td >
                                      <select onblur="findTotal()" class="arkitek" name="AwRoofGutterGallron" id="AwRoofGutterGallron">
                                      <option selected disabled ></option>
                                      <option value="0">0</option>
                                      <option value="2" >2</option>
                                      </select>
                                    </td> --}}
                                    <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="AwRoofGutterGallron" id="AwRoofGutterGallron"></td>            
                                    {{-- <td><input onblur="findTotalConstructed()" type="number" min="0" max="2" class="arkitek_construction" name="Cons_AwRoofGutterGallron" id="Cons_AwRoofGutterGallron"></td>             --}}
                                    {{-- <td><input onblur="findTotalAwarded()" type="number" min="0" max="2" class="arkitek_awarded" name="Awarded_AwRoofGutterGallron" id="Awarded_AwRoofGutterGallron"></td>              --}}
                                    <td><input type="text" name="Remark_AwRoofGutterGallron" id="Remark_AwRoofGutterGallron"></td>                    
                                    <td><input type="file" name="Remark_AwRoofGutterGallron" id="Remark_AwRoofGutterGallron"></td>                    
                                  </tr>
                        
                                  <tr>
                                    <td >Aluminium</td>
                                    <td >2</td>
                                    {{-- <td >
                                      <select onblur="findTotal()" class="arkitek" name="AwRoofGutterAluminium" id="AwRoofGutterAluminium">
                                      <option selected disabled ></option>
                                      <option value="0">0</option>
                                      <option value="2" >2</option>
                                      </select>
                                    </td> --}}
                                    <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="AwRoofGutterAluminium" id="AwRoofGutterAluminium"></td>            
                                    {{-- <td><input onblur="findTotalConstructed()" type="number" min="0" max="2" class="arkitek_construction" name="Cons_AwRoofGutterAluminium" id="Cons_AwRoofGutterAluminium"></td>             --}}
                                    {{-- <td><input onblur="findTotalAwarded()" type="number" min="0" max="2" class="arkitek_awarded" name="Awarded_AwRoofGutterAluminium" id="Awarded_AwRoofGutterAluminium"></td>              --}}
                                    <td><input type="text" name="Remark_AwRoofGutterAluminium" id="Remark_AwRoofGutterAluminium"></td>                    
                                    <td><input type="file" name="Remark_AwRoofGutterAluminium" id="Remark_AwRoofGutterAluminium"></td>                    
                                  </tr>
                        
                                  <tr>
                                    <td >Stainless steel</td>
                                    <td >2</td>
                                    {{-- <td >
                                      <select onblur="findTotal()" class="arkitek" name="AwRoofGutterStainSteel" id="AwRoofGutterStainSteel">
                                      <option selected disabled ></option>
                                      <option value="0">0</option>
                                      <option value="2" >2</option>
                                      </select>
                                    </td> --}}
                                    <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="AwRoofGutterStainSteel" id="AwRoofGutterStainSteel"></td>            
                                    {{-- <td><input onblur="findTotalConstructed()" type="number" min="0" max="2" class="arkitek_construction" name="Cons_AwRoofGutterStainSteel" id="Cons_AwRoofGutterStainSteel"></td>             --}}
                                    {{-- <td><input onblur="findTotalAwarded()" type="number" min="0" max="2" class="arkitek_awarded" name="Awarded_AwRoofGutterStainSteel" id="Awarded_AwRoofGutterStainSteel"></td>             --}}
                                    <td><input type="text" name="Remark_AwRoofGutterStainSteel" id="Remark_AwRoofGutterStainSteel"></td>                    
                                    <td><input type="file" name="Remark_AwRoofGutterStainSteel" id="Remark_AwRoofGutterStainSteel"></td>                    
                                  </tr>
                        
                                  <tr>
                                    
                                    <td rowspan="4">6</td>
                                    <td rowspan="4">Rainwater down pipes</td>
                                    <td >Upvc</td>
                                    <td >2</td>
                                    {{-- <td >
                                      <select onblur="findTotal()" class="arkitek" name="AwRoofRainPipesUpvc" id="AwRoofRainPipesUpvc">
                                      <option selected disabled ></option>
                                      <option value="0">0</option>
                                      <option value="2" >2</option>
                                      </select>
                                    </td> --}}
                                    <td> <input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="AwRoofRainPipesUpvc" id="AwRoofRainPipesUpvc"></td>            
                                    {{-- <td><input onblur="findTotalConstructed()" type="number" min="0" max="2" class="arkitek_construction" name="Cons_AwRoofRainPipesUpvc" id="Cons_AwRoofRainPipesUpvc"></td>             --}}
                                    {{-- <td><input onblur="findTotalAwarded()" type="number" min="0" max="2" class="arkitek_awarded" name="Awarded_AwRoofRainPipesUpvc" id="Awarded_AwRoofRainPipesUpvc"></td>              --}}
                                    <td><input type="text" name="Remark_AwRoofRainPipesUpvc" id="Remark_AwRoofRainPipesUpvc"></td> 
                                    <td><input type="file" name="Remark_AwRoofRainPipesUpvc" id="Remark_AwRoofRainPipesUpvc"></td> 
                        
                                  </tr>
                        
                                  <tr>
                                    <td >Galvanised iron</td>
                                    <td >2</td>
                                    {{-- <td >
                                      <select onblur="findTotal()" class="arkitek" name="AwRoofRainPipesGallron" id="AwRoofRainPipesGallron">
                                      <option selected disabled ></option>
                                      <option value="0">0</option>
                                      <option value="2" >2</option>
                                      </select>
                                    </td> --}}
                                    <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="AwRoofRainPipesGallron" id="AwRoofRainPipesGallron"></td>            
                                    {{-- <td><input onblur="findTotalConstructed()" type="number" min="0" max="2" class="arkitek_construction" name="Cons_AwRoofRainPipesGallron" id="Cons_AwRoofRainPipesGallron"></td>             --}}
                                    {{-- <td><input onblur="findTotalAwarded()" type="number" min="0" max="2" class="arkitek_awarded" name="Awarded_AwRoofRainPipesGallron" id="Awarded_AwRoofRainPipesGallron"></td>             --}}
                                    <td><input type="text" name="Remark_AwRoofRainPipesGallron" id="Remark_AwRoofRainPipesGallron"></td>                    
                                    <td><input type="file" name="Remark_AwRoofRainPipesGallron" id="Remark_AwRoofRainPipesGallron"></td>                    
                                  </tr>
                        
                                  <tr>
                                    <td >Aluminium</td>
                                    <td >2</td>
                                    {{-- <td >
                                      <select onblur="findTotal()" class="arkitek" name="AwRoofRainPipesAluminium" id="AwRoofRainPipesAluminium">
                                      <option selected disabled ></option>
                                      <option value="0">0</option>
                                      <option value="2" >2</option>
                                      </select>
                                    </td> --}}
                                    <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="AwRoofRainPipesAluminium" id="AwRoofRainPipesAluminium"></td>            
                                    {{-- <td><input onblur="findTotalConstructed()" type="number" min="0" max="2" class="arkitek_construction" name="Cons_AwRoofRainPipesAluminium" id="Cons_AwRoofRainPipesAluminium"></td>             --}}
                                    {{-- <td><input onblur="findTotalAwarded()" type="number" min="0" max="2" class="arkitek_awarded" name="Awarded_AwRoofRainPipesAluminium" id="Awarded_AwRoofRainPipesAluminium"></td>              --}}
                                    <td><input type="text" name="Remark_AwRoofRainPipesAluminium" id="Remark_AwRoofRainPipesAluminium"></td>                    
                                    <td><input type="file" name="Remark_AwRoofRainPipesAluminium" id="Remark_AwRoofRainPipesAluminium"></td>                    
                                  </tr>
                        
                                  <tr>
                                    <td >Stainless steel</td>
                                    <td >2</td>
                                    {{-- <td >
                                      <select onblur="findTotal()" class="arkitek" name="AwRoofRainPipesStainSteel" id="AwRoofRainPipesStainSteel">
                                      <option selected disabled ></option>
                                      <option value="0">0</option>
                                      <option value="2" >2</option>
                                      </select>
                                    </td> --}}
                                    <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="AwRoofRainPipesStainSteel" id="AwRoofRainPipesStainSteel"></td>            
                                    {{-- <td><input onblur="findTotalConstructed()" type="number" min="0" max="2" class="arkitek_construction" name="Cons_AwRoofRainPipesStainSteel" id="Cons_AwRoofRainPipesStainSteel"></td>             --}}
                                    {{-- <td><input onblur="findTotalAwarded()" type="number" min="0" max="2" class="arkitek_awarded" name="Awarded_AwRoofRainPipesStainSteel" id="Awarded_AwRoofRainPipesStainSteel"></td>              --}}
                                    <td><input type="text" name="Remark_AwRoofRainPipesStainSteel" id="Remark_AwRoofRainPipesStainSteel"></td>                    
                                    <td><input type="file" name="Remark_AwRoofRainPipesStainSteel" id="Remark_AwRoofRainPipesStainSteel"></td>                    
                                  </tr>
                        
                                  <tr>
                                    
                                    <td rowspan="3">7</td>
                                    <td rowspan="3">Gutter</td>
                                    <td >Plasterboard</td>
                                    <td >2</td>
                                    {{-- <td >
                                      <select onblur="findTotal()" class="arkitek" name="AwRoofCellingPlasterboards" id="AwRoofCellingPlasterboards">
                                      <option selected disabled ></option>
                                      <option value="0">0</option>
                                      <option value="2" >2</option>
                                      </select>
                                    </td> --}}
                                    <td> <input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="AwRoofCellingPlasterboards" id="AwRoofCellingPlasterboards"></td>            
                                    {{-- <td><input onblur="findTotalConstructed()" type="number" min="0" max="2" class="arkitek_construction" name="Cons_AwRoofCellingPlasterboards" id="Cons_AwRoofCellingPlasterboards"></td>             --}}
                                    {{-- <td><input onblur="findTotalAwarded()" type="number" min="0" max="2" class="arkitek_awarded" name="Awarded_AwRoofCellingPlasterboards" id="Awarded_AwRoofCellingPlasterboards"></td>             --}}
                                    <td><input type="text" name="Remark_AwRoofCellingPlasterboards" id="Remark_AwRoofCellingPlasterboards"></td> 
                                    <td><input type="file" name="Remark_AwRoofCellingPlasterboards" id="Remark_AwRoofCellingPlasterboards"></td> 
                        
                                  </tr>
                        
                                  <tr>
                                    <td >Fibre cement board</td>
                                    <td >2</td>
                                    {{-- <td >
                                      <select onblur="findTotal()" class="arkitek" name="AwRoofCellingFibreCement" id="AwRoofCellingFibreCement">
                                      <option selected disabled ></option>
                                      <option value="0">0</option>
                                      <option value="2" >2</option>
                                      </select>
                                    </td> --}}
                                    <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="AwRoofCellingFibreCement" id="AwRoofCellingFibreCement"></td>            
                                    {{-- <td><input onblur="findTotalConstructed()" type="number" min="0" max="2" class="arkitek_construction" name="Cons_AwRoofCellingFibreCement" id="Cons_AwRoofCellingFibreCement"></td>             --}}
                                    {{-- <td><input onblur="findTotalAwarded()" type="number" min="0" max="2" class="arkitek_awarded" name="Awarded_AwRoofCellingFibreCement" id="Awarded_AwRoofCellingFibreCement"></td>              --}}
                                    <td><input type="text" name="Remark_AwRoofCellingFibreCement" id="Remark_AwRoofCellingFibreCement"></td>                    
                                    <td><input type="file" name="Remark_AwRoofCellingFibreCement" id="Remark_AwRoofCellingFibreCement"></td>                    
                                  </tr>
                        
                                  <tr>
                                    <td >Metal strip</td>
                                    <td >2</td>
                                    {{-- <td >
                                      <select onblur="findTotal()" class="arkitek" name="AwRoofCellingMetalStrip" id="AwRoofCellingMetalStrip">
                                      <option selected disabled ></option>
                                      <option value="0">0</option>
                                      <option value="2" >2</option>
                                      </select>
                                    </td> --}}
                                    <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="AwRoofCellingMetalStrip" id="AwRoofCellingMetalStrip"></td>            
                                    {{-- <td><input onblur="findTotalConstructed()" type="number" min="0" max="2" class="arkitek_construction" name="Cons_AwRoofCellingMetalStrip" id="Cons_AwRoofCellingMetalStrip"></td>             --}}
                                    {{-- <td><input onblur="findTotalAwarded()" type="number" min="0" max="2" class="arkitek_awarded" name="Awarded_AwRoofCellingMetalStrip" id="Awarded_AwRoofCellingMetalStrip"></td>             --}}
                                    <td><input type="text" name="Remark_AwRoofCellingMetalStrip" id="Remark_AwRoofCellingMetalStrip"></td>                    
                                    <td><input type="file" name="Remark_AwRoofCellingMetalStrip" id="Remark_AwRoofCellingMetalStrip"></td>                    
                                  </tr>
                        
                                  <tr>
                                    
                                    <td rowspan="2">8</td>
                                    <td rowspan="2">Truss system</td>
                                    <td >Timber</td>
                                    <td >2</td>
                                    {{-- <td >
                                      <select onblur="findTotal()" class="arkitek" name="AwRoofTrussTimber" id="AwRoofTrussTimber">
                                      <option selected disabled ></option>
                                      <option value="0">0</option>
                                      <option value="2" >2</option>
                                      </select>
                                    </td> --}}
                                    <td> <input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="AwRoofTrussTimber" id="AwRoofTrussTimber"></td>            
                                    {{-- <td><input onblur="findTotalConstructed()" type="number" min="0" max="2" class="arkitek_construction" name="Cons_AwRoofTrussTimber" id="Cons_AwRoofTrussTimber"></td>             --}}
                                    {{-- <td><input onblur="findTotalAwarded()" type="number" min="0" max="2" class="arkitek_awarded" name="Awarded_AwRoofTrussTimber" id="Awarded_AwRoofTrussTimber"></td>              --}}
                                    <td><input type="text" name="Remark_AwRoofTrussTimber" id="Remark_AwRoofTrussTimber"></td> 
                                    <td><input type="file" name="Remark_AwRoofTrussTimber" id="Remark_AwRoofTrussTimber"></td> 
                        
                                  </tr>
                        
                                  <tr>
                                    <td >Metal</td>
                                    <td >2</td>
                                    {{-- <td >
                                      <select onblur="findTotal()" class="arkitek" name="AwRoofTrussMetal" id="AwRoofTrussMetal">
                                      <option selected disabled ></option>
                                      <option value="0">0</option>
                                      <option value="2" >2</option>
                                      </select>
                                    </td> --}}
                                    <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="AwRoofTrussMetal" id="AwRoofTrussMetal"></td>            
                                    {{-- <td><input onblur="findTotalConstructed()" type="number" min="0" max="2" class="arkitek_construction" name="Cons_AwRoofTrussMetal" id="Cons_AwRoofTrussMetal"></td>             --}}
                                    {{-- <td><input onblur="findTotalAwarded()" type="number" min="0" max="2" class="arkitek_awarded" name="Awarded_AwRoofTrussMetal" id="Awarded_AwRoofTrussMetal"></td>              --}}
                                    <td><input type="text" name="Remark_AwRoofTrussMetal" id="Remark_AwRoofTrussMetal"></td>                    
                                    <td><input type="file" name="Remark_AwRoofTrussMetal" id="Remark_AwRoofTrussMetal"></td>                    
                                  </tr>
                      
                                  <tr style="display: none">
                                    <td>markahPRAwRoof<input type="text" name="markahPRAwRoof" id="markahPRAwRoof" /></td>            
                                  </tr>
                      
                                  <tr style="display: none">
                                    <td>markahPRAwRoofConstruction<input type="text" name="Cons_markahPRAwRoof" id="Cons_markahPRAwRoof" /></td>            
                                  </tr>
                      
                                  <tr style="display: none">
                                    <td>markahPRAwRoofAwarded<input type="text" name="Awarded_markahPRAwRoof" id="Awarded_markahPRAwRoof" /></td>            
                                  </tr>
                      
                      
                                  {{-- New table for wall system --}}
                                  <tr class="text-white bg-orange-jkr">
                                    <th colspan="8">List of products for architectural works - Wall System</th>
                                  </tr>
                        
                                  <tr>
                                    
                                    <td rowspan="10">1</td>
                                    <td rowspan="10">Wall types</td>
                                    <td >Bricks</td>
                                    <td >2</td>
                                    {{-- <td >
                                      <select onblur="findTotalWall()" class="prawwall" name="AwWallWallTypesBricks" id="AwWallWallTypesBricks">
                                      <option selected disabled ></option>
                                      <option value="0">0</option>
                                      <option value="2" >2</option>
                                      </select>
                                    </td> --}}
                                    <td> <input onblur="findTotalWall()" type="number" min="0" max="2" class="prawwall" name="AwWallWallTypesBricks" id="AwWallWallTypesBricks"></td>            
                                    {{-- <td><input onblur="findTotalConstructedWall()" type="number" min="0" max="2" class="prawwall_construction" name="Cons_AwWallWallTypesBricks" id="Cons_AwWallWallTypesBricks"></td>             --}}
                                    {{-- <td><input onblur="findTotalAwardedWall()" type="number" min="0" max="2" class="prawwall_awarded" name="Awarded_AwWallWallTypesBricks" id="Awarded_AwWallWallTypesBricks"></td>              --}}
                                    <td><input type="text" name="Remark_AwWallWallTypesBricks" id="Remark_AwWallWallTypesBricks"></td> 
                                    <td><input type="file" name="Remark_AwWallWallTypesBricks" id="Remark_AwWallWallTypesBricks"></td> 
                        
                                  </tr>
                        
                                  <tr>
                                    <td >Timberwork</td>
                                    <td >2</td>
                                    {{-- <td >
                                      <select onblur="findTotalWall()" class="prawwall" name="AwWallWallTypesTimber" id="AwWallWallTypesTimber">
                                      <option selected disabled ></option>
                                      <option value="0">0</option>
                                      <option value="2" >2</option>
                                      </select>
                                    </td> --}}
                                    <td><input onblur="findTotalWall()" type="number" min="0" max="2" class="prawwall " name="AwWallWallTypesTimber" id="AwWallWallTypesTimber"></td>            
                                    {{-- <td><input onblur="findTotalConstructedWall()" type="number" min="0" max="2" class="prawwall_construction" name="Cons_AwWallWallTypesTimber" id="Cons_AwWallWallTypesTimber"></td>             --}}
                                    {{-- <td><input onblur="findTotalAwardedWall()" type="number" min="0" max="2" class="prawwall_awarded" name="Awarded_AwWallWallTypesTimber" id="Awarded_AwWallWallTypesTimber"></td>             --}}
                                    <td><input type="text" name="Remark_AwWallWallTypesTimber" id="Remark_AwWallWallTypesTimber"></td>                    
                                    <td><input type="file" name="Remark_AwWallWallTypesTimber" id="Remark_AwWallWallTypesTimber"></td>                    
                                  </tr>
                        
                                  <tr>
                                    <td >Clay bricks</td>
                                    <td >2</td>
                                    {{-- <td >
                                      <select onblur="findTotalWall()" class="prawwall" name="AwWallWallTypesClay" id="AwWallWallTypesClay">
                                      <option selected disabled ></option>
                                      <option value="0">0</option>
                                      <option value="2" >2</option>
                                      </select>
                                    </td> --}}
                                    <td><input onblur="findTotalWall()" type="number" min="0" max="2" class="prawwall" name="AwWallWallTypesClay" id="AwWallWallTypesClay"></td>            
                                    {{-- <td><input onblur="findTotalConstructedWall()" type="number" min="0" max="2" class="prawwall_construction" name="Cons_AwWallWallTypesClay" id="Cons_AwWallWallTypesClay"></td>             --}}
                                    {{-- <td><input onblur="findTotalAwardedWall()" type="number" min="0" max="2" class="prawwall_awarded" name="Awarded_AwWallWallTypesClay" id="Awarded_AwWallWallTypesClay"></td>             --}}
                                    <td><input type="text" name="Remark_AwWallWallTypesClay" id="Remark_AwWallWallTypesClay"></td>                    
                                    <td><input type="file" name="Remark_AwWallWallTypesClay" id="Remark_AwWallWallTypesClay"></td>                    
                                  </tr>
                        
                                  <tr>
                                    <td >Blockwork</td>
                                    <td >2</td>
                                    {{-- <td >
                                      <select onblur="findTotalWall()" class="prawwall" name="AwWallWallTypesBlockwork" id="AwWallWallTypesBlockwork">
                                      <option selected disabled ></option>
                                      <option value="0">0</option>
                                      <option value="2" >2</option>
                                      </select>
                                    </td> --}}
                                    <td><input onblur="findTotalWall()" type="number" min="0" max="2" class="prawwall" name="AwWallWallTypesBlockwork" id="AwWallWallTypesBlockwork"></td>            
                                    {{-- <td><input onblur="findTotalConstructedWall()" type="number" min="0" max="2" class="prawwall_construction" name="Cons_AwWallWallTypesBlockwork" id="Cons_AwWallWallTypesBlockwork"></td>             --}}
                                    {{-- <td><input onblur="findTotalAwardedWall()" type="number" min="0" max="2" class="prawwall_awarded" name="Awarded_AwWallWallTypesBlockwork" id="Awarded_AwWallWallTypesBlockwork"></td>             --}}
                                    <td><input type="text" name="Remark_AwWallWallTypesBlockwork" id="Remark_AwWallWallTypesBlockwork"></td>                    
                                    <td><input type="file" name="Remark_AwWallWallTypesBlockwork" id="Remark_AwWallWallTypesBlockwork"></td>                    
                                  </tr>
                        
                                  <tr>
                                    <td >Reinforce concrete</td>
                                    <td >2</td>
                                    {{-- <td >
                                      <select onblur="findTotalWall()" class="prawwall" name="AwWallWallTypesReinforce" id="AwWallWallTypesReinforce">
                                      <option selected disabled ></option>
                                      <option value="0">0</option>
                                      <option value="2" >2</option>
                                      </select>
                                    </td> --}}
                                    <td><input onblur="findTotalWall()" type="number" min="0" max="2" class="prawwall" name="AwWallWallTypesReinforce" id="AwWallWallTypesReinforce"></td>            
                                    {{-- <td><input onblur="findTotalConstructedWall()" type="number" min="0" max="2" class="prawwall_construction" name="Cons_AwWallWallTypesReinforce" id="Cons_AwWallWallTypesReinforce"></td>             --}}
                                    {{-- <td><input onblur="findTotalAwardedWall()" type="number" min="0" max="2" class="prawwall_awarded" name="Awarded_AwWallWallTypesReinforce" id="Awarded_AwWallWallTypesReinforce"></td>             --}}
                                    <td><input type="text" name="Remark_AwWallWallTypesReinforce" id="Remark_AwWallWallTypesReinforce"></td>                    
                                    <td><input type="file" name="Remark_AwWallWallTypesReinforce" id="Remark_AwWallWallTypesReinforce"></td>                    
                                  </tr>
                        
                                  <tr>
                                    <td >Aerated concrete</td>
                                    <td >2</td>
                                    {{-- <td >
                                      <select onblur="findTotalWall()" class="prawwall" name="AwWallWallTypesAerated" id="AwWallWallTypesAerated">
                                      <option selected disabled ></option>
                                      <option value="0">0</option>
                                      <option value="2" >2</option>
                                      </select>
                                    </td> --}}
                                    <td><input onblur="findTotalWall()" type="number" min="0" max="2" class="prawwall" name="AwWallWallTypesAerated" id="AwWallWallTypesAerated"></td>            
                                    {{-- <td><input onblur="findTotalConstructedWall()" type="number" min="0" max="2" class="prawwall_construction" name="Cons_AwWallWallTypesAerated" id="Cons_AwWallWallTypesAerated"></td>             --}}
                                    {{-- <td><input onblur="findTotalAwardedWall()" type="number" min="0" max="2" class="prawwall_awarded" name="Awarded_AwWallWallTypesAerated" id="Awarded_AwWallWallTypesAerated"></td>             --}}
                                    <td><input type="text" name="Remark_AwWallWallTypesAerated" id="Remark_AwWallWallTypesAerated"></td>                    
                                    <td><input type="file" name="Remark_AwWallWallTypesAerated" id="Remark_AwWallWallTypesAerated"></td>                    
                                  </tr>
                        
                                  <tr>
                                    <td >Glass</td>
                                    <td >2</td>
                                    {{-- <td >
                                      <select onblur="findTotalWall()" class="prawwall" name="AwWallWallTypesGlass" id="AwWallWallTypesGlass">
                                      <option selected disabled ></option>
                                      <option value="0">0</option>
                                      <option value="2" >2</option>
                                      </select>
                                    </td> --}}
                                    <td><input onblur="findTotalWall()" type="number" min="0" max="2" class="prawwall" name="AwWallWallTypesGlass" id="AwWallWallTypesGlass"></td>            
                                    {{-- <td><input onblur="findTotalConstructedWall()" type="number" min="0" max="2" class="prawwall_construction" name="Cons_AwWallWallTypesGlass" id="Cons_AwWallWallTypesGlass"></td>             --}}
                                    {{-- <td><input onblur="findTotalAwardedWall()" type="number" min="0" max="2" class="prawwall_awarded" name="Awarded_AwWallWallTypesGlass" id="Awarded_AwWallWallTypesGlass"></td>             --}}
                                    <td><input type="text" name="Remark_AwWallWallTypesGlass" id="Remark_AwWallWallTypesGlass"></td>                    
                                    <td><input type="file" name="Remark_AwWallWallTypesGlass" id="Remark_AwWallWallTypesGlass"></td>                    
                                  </tr>
                        
                                  <tr>
                                    <td >Gypsum board</td>
                                    <td >2</td>
                                    {{-- <td >
                                      <select onblur="findTotalWall()" class="prawwall" name="AwWallWallTypesGypsum" id="AwWallWallTypesGypsum">
                                      <option selected disabled ></option>
                                      <option value="0">0</option>
                                      <option value="2" >2</option>
                                      </select>
                                    </td> --}}
                                    <td><input onblur="findTotalWall()" type="number" min="0" max="2" class="prawwall" name="AwWallWallTypesGypsum" id="AwWallWallTypesGypsum"></td>            
                                    {{-- <td><input onblur="findTotalConstructedWall()" type="number" min="0" max="2" class="prawwall_construction" name="Cons_AwWallWallTypesGypsum" id="Cons_AwWallWallTypesGypsum"></td>             --}}
                                    {{-- <td><input onblur="findTotalAwardedWall()" type="number" min="0" max="2" class="prawwall_awarded" name="Awarded_AwWallWallTypesGypsum" id="Awarded_AwWallWallTypesGypsum"></td>             --}}
                                    <td><input type="text" name="Remark_AwWallWallTypesGypsum" id="Remark_AwWallWallTypesGypsum"></td>                    
                                    <td><input type="file" name="Remark_AwWallWallTypesGypsum" id="Remark_AwWallWallTypesGypsum"></td>                    
                                  </tr>
                        
                                  <tr>
                                    <td >Cement board</td>
                                    <td >2</td>
                                    {{-- <td >
                                      <select onblur="findTotalWall()" class="prawwall" name="AwWallWallTypesCement" id="AwWallWallTypesCement">
                                      <option selected disabled ></option>
                                      <option value="0">0</option>
                                      <option value="2" >2</option>
                                      </select>
                                    </td> --}}
                                    <td><input onblur="findTotalWall()" type="number" min="0" max="2" class="prawwall" name="AwWallWallTypesCement" id="AwWallWallTypesCement"></td>            
                                    {{-- <td><input onblur="findTotalConstructedWall()" type="number" min="0" max="2" class="prawwall_construction" name="Cons_AwWallWallTypesCement" id="Cons_AwWallWallTypesCement"></td>             --}}
                                    {{-- <td><input onblur="findTotalAwardedWall()" type="number" min="0" max="2" class="prawwall_awarded" name="Awarded_AwWallWallTypesCement" id="Awarded_AwWallWallTypesCement"></td>             --}}
                                    <td><input type="text" name="Remark_AwWallWallTypesCement" id="Remark_AwWallWallTypesCement"></td>                    
                                    <td><input type="file" name="Remark_AwWallWallTypesCement" id="Remark_AwWallWallTypesCement"></td>                    
                                  </tr>
                        
                                  <tr>
                                    <td >Fibre cement</td>
                                    <td >2</td>
                                    {{-- <td >
                                      <select onblur="findTotalWall()" class="prawwall" name="AwWallWallTypesFibreCement" id="AwWallWallTypesFibreCement">
                                      <option selected disabled ></option>
                                      <option value="0">0</option>
                                      <option value="2" >2</option>
                                      </select>
                                    </td> --}}
                                    <td><input onblur="findTotalWall()" type="number" min="0" max="2" class="prawwall" name="AwWallWallTypesFibreCement" id="AwWallWallTypesFibreCement"></td>            
                                    {{-- <td><input onblur="findTotalConstructedWall()" type="number" min="0" max="2" class="prawwall_construction" name="Cons_AwWallWallTypesFibreCement" id="Cons_AwWallWallTypesFibreCement"></td>             --}}
                                    {{-- <td><input onblur="findTotalAwardedWall()" type="number" min="0" max="2" class="prawwall_awarded" name="Awarded_AwWallWallTypesFibreCement" id="Awarded_AwWallWallTypesFibreCement"></td>             --}}
                                    <td><input type="text" name="Remark_AwWallWallTypesFibreCement" id="Remark_AwWallWallTypesFibreCement"></td>                    
                                    <td><input type="file" name="Remark_AwWallWallTypesFibreCement" id="Remark_AwWallWallTypesFibreCement"></td>                    
                                  </tr>
                        
                                  <tr>
                                    
                                    <td rowspan="12">2</td> 
                                    <td rowspan="12">Finishes</td>
                                    <td >Paints</td>
                                    <td >2</td>
                                    {{-- <td >
                                      <select onblur="findTotalWall()" class="prawwall" name="AwWallFinishesPaints" id="AwWallFinishesPaints">
                                      <option selected disabled ></option>
                                      <option value="0">0</option>
                                      <option value="2" >2</option>
                                      </select>
                                    </td> --}}
                                    <td> <input onblur="findTotalWall()" type="number" min="0" max="2" class="prawwall" name="AwWallFinishesPaints" id="AwWallFinishesPaints"></td>            
                                    {{-- <td><input onblur="findTotalConstructedWall()" type="number" min="0" max="2" class="prawwall_construction" name="Cons_AwWallFinishesPaints" id="Cons_AwWallFinishesPaints"></td>             --}}
                                    {{-- <td><input onblur="findTotalAwardedWall()" type="number" min="0" max="2" class="prawwall_awarded" name="Awarded_AwWallFinishesPaints" id="Awarded_AwWallFinishesPaints"></td>             --}}
                                    <td><input type="text" name="Remark_AwWallFinishesPaints" id="Remark_AwWallFinishesPaints"></td> 
                                    <td><input type="file" name="Remark_AwWallFinishesPaints" id="Remark_AwWallFinishesPaints"></td> 
                        
                        
                                  </tr>
                        
                                  <tr>
                                    <td >Composite panel</td>
                                    <td >2</td>
                                    {{-- <td >
                                      <select onblur="findTotalWall()" class="prawwall" name="AwWallFinishesComposite" id="AwWallFinishesComposite">
                                      <option selected disabled ></option>
                                      <option value="0">0</option>
                                      <option value="2" >2</option>
                                      </select>
                                    </td> --}}
                                    <td><input onblur="findTotalWall()" type="number" min="0" max="2" class="prawwall" name="AwWallFinishesComposite" id="AwWallFinishesComposite"></td>            
                                    {{-- <td><input onblur="findTotalConstructedWall()" type="number" min="0" max="2" class="prawwall_construction" name="Cons_AwWallFinishesComposite" id="Cons_AwWallFinishesComposite"></td>             --}}
                                    {{-- <td><input onblur="findTotalAwardedWall()" type="number" min="0" max="2" class="prawwall_awarded" name="Awarded_AwWallFinishesComposite" id="Awarded_AwWallFinishesComposite"></td>             --}}
                                    <td><input type="text" name="Remark_AwWallFinishesComposite" id="Remark_AwWallFinishesComposite"></td>                    
                                    <td><input type="file" name="Remark_AwWallFinishesComposite" id="Remark_AwWallFinishesComposite"></td>                    
                                  </tr>
                        
                                  <tr>
                                    <td >Wall paper</td>
                                    <td >2</td>
                                    {{-- <td >
                                      <select onblur="findTotalWall()" class="prawwall" name="AwWallFinishesWallpaper" id="AwWallFinishesWallpaper">
                                      <option selected disabled ></option>
                                      <option value="0">0</option>
                                      <option value="2" >2</option>
                                      </select>
                                    </td> --}}
                                    <td><input onblur="findTotalWall()" type="number" min="0" max="2" class="prawwall" name="AwWallFinishesWallpaper" id="AwWallFinishesWallpaper"></td>            
                                    {{-- <td><input onblur="findTotalConstructedWall()" type="number" min="0" max="2" class="prawwall_construction" name="Cons_AwWallFinishesWallpaper" id="Cons_AwWallFinishesWallpaper"></td>             --}}
                                    {{-- <td><input onblur="findTotalAwardedWall()" type="number" min="0" max="2" class="prawwall_awarded" name="Awarded_AwWallFinishesWallpaper" id="Awarded_AwWallFinishesWallpaper"></td>             --}}
                                    <td><input type="text" name="Remark_AwWallFinishesWallpaper" id="Remark_AwWallFinishesWallpaper"></td>                    
                                    <td><input type="file" name="Remark_AwWallFinishesWallpaper" id="Remark_AwWallFinishesWallpaper"></td>                    
                                  </tr>
                        
                                  <tr>
                                    <td >Ceramic tiles</td>
                                    <td >2</td>
                                    {{-- <td >
                                      <select onblur="findTotalWall()" class="prawwall" name="AwWallFinishesCeramic" id="AwWallFinishesCeramic">
                                      <option selected disabled ></option>
                                      <option value="0">0</option>
                                      <option value="2" >2</option>
                                      </select>
                                    </td> --}}
                                    <td><input onblur="findTotalWall()" type="number" min="0" max="2" class="prawwall" name="AwWallFinishesCeramic" id="AwWallFinishesCeramic"></td>            
                                    {{-- <td><input onblur="findTotalConstructedWall()" type="number" min="0" max="2" class="prawwall_construction" name="Cons_AwWallFinishesCeramic" id="Cons_AwWallFinishesCeramic"></td>             --}}
                                    {{-- <td><input onblur="findTotalAwardedWall()" type="number" min="0" max="2" class="prawwall_awarded" name="Awarded_AwWallFinishesCeramic" id="Awarded_AwWallFinishesCeramic"></td>             --}}
                                    <td><input type="text" name="Remark_AwWallFinishesCeramic" id="Remark_AwWallFinishesCeramic"></td>                    
                                    <td><input type="file" name="Remark_AwWallFinishesCeramic" id="Remark_AwWallFinishesCeramic"></td>                    
                                  </tr>
                        
                                  <tr>
                                    <td >Stones</td>
                                    <td >2</td>
                                    {{-- <td >
                                      <select onblur="findTotalWall()" class="prawwall" name="AwWallFinishesStones" id="AwWallFinishesStones">
                                      <option selected disabled ></option>
                                      <option value="0">0</option>
                                      <option value="2" >2</option>
                                      </select>
                                    </td> --}}
                                    <td><input onblur="findTotalWall()" type="number" min="0" max="2" class="prawwall" name="AwWallFinishesStones" id="AwWallFinishesStones"></td>            
                                    {{-- <td><input onblur="findTotalConstructedWall()" type="number" min="0" max="2" class="prawwall_construction" name="Cons_AwWallFinishesStones" id="Cons_AwWallFinishesStones"></td>             --}}
                                    {{-- <td><input onblur="findTotalAwardedWall()" type="number" min="0" max="2" class="prawwall_awarded" name="Awarded_AwWallFinishesStones" id="Awarded_AwWallFinishesStones"></td>             --}}
                                    <td><input type="text" name="Remark_AwWallFinishesStones" id="Remark_AwWallFinishesStones"></td>                    
                                    <td><input type="file" name="Remark_AwWallFinishesStones" id="Remark_AwWallFinishesStones"></td>                    
                                  </tr>
                        
                                  <tr>
                                    <td >Pebblewash</td>
                                    <td >2</td>
                                    {{-- <td >
                                      <select onblur="findTotalWall()" class="prawwall" name="AwWallFinishesPebblewash" id="AwWallFinishesPebblewash">
                                      <option selected disabled ></option>
                                      <option value="0">0</option>
                                      <option value="2" >2</option>
                                      </select>
                                    </td> --}}
                                    <td><input onblur="findTotalWall()" type="number" min="0" max="2" class="prawwall" name="AwWallFinishesPebblewash" id="AwWallFinishesPebblewash"></td>            
                                    {{-- <td><input onblur="findTotalConstructedWall()" type="number" min="0" max="2" class="prawwall_construction" name="Cons_AwWallFinishesPebblewash" id="Cons_AwWallFinishesPebblewash"></td>             --}}
                                    {{-- <td><input onblur="findTotalAwardedWall()" type="number" min="0" max="2" class="prawwall_awarded" name="Awarded_AwWallFinishesPebblewash" id="Awarded_AwWallFinishesPebblewash"></td>             --}}
                                    <td><input type="text" name="Remark_AwWallFinishesPebblewash" id="Remark_AwWallFinishesPebblewash"></td>                    
                                    <td><input type="file" name="Remark_AwWallFinishesPebblewash" id="Remark_AwWallFinishesPebblewash"></td>                    
                                  </tr>
                        
                                  <tr>
                                    <td >Granite</td>
                                    <td >2</td>
                                    {{-- <td >
                                      <select onblur="findTotalWall()" class="prawwall" name="AwWallFinishesGranite" id="AwWallFinishesGranite">
                                      <option selected disabled ></option>
                                      <option value="0">0</option>
                                      <option value="2" >2</option>
                                      </select>
                                    </td> --}}
                                    <td><input onblur="findTotalWall()" type="number" min="0" max="2" class="prawwall" name="AwWallFinishesGranite" id="AwWallFinishesGranite"></td>            
                                    {{-- <td><input onblur="findTotalConstructedWall()" type="number" min="0" max="2" class="prawwall_construction" name="Cons_AwWallFinishesGranite" id="Cons_AwWallFinishesGranite"></td>             --}}
                                    {{-- <td><input onblur="findTotalAwardedWall()" type="number" min="0" max="2" class="prawwall_awarded" name="Awarded_AwWallFinishesGranite" id="Awarded_AwWallFinishesGranite"></td>             --}}
                                    <td><input type="text" name="Remark_AwWallFinishesGranite" id="Remark_AwWallFinishesGranite"></td>                    
                                    <td><input type="file" name="Remark_AwWallFinishesGranite" id="Remark_AwWallFinishesGranite"></td>                    
                                  </tr>
                        
                                  <tr>
                                    <td >Glass</td>
                                    <td >2</td>
                                    {{-- <td >
                                      <select onblur="findTotalWall()" class="prawwall" name="AwWallFinishesGlass" id="AwWallFinishesGlass">
                                      <option selected disabled ></option>
                                      <option value="0">0</option>
                                      <option value="2" >2</option>
                                      </select>
                                    </td> --}}
                                    <td><input onblur="findTotalWall()" type="number" min="0" max="2" class="prawwall" name="AwWallFinishesGlass" id="AwWallFinishesGlass"></td>            
                                    {{-- <td><input onblur="findTotalConstructedWall()" type="number" min="0" max="2" class="prawwall_construction" name="Cons_AwWallFinishesGlass" id="Cons_AwWallFinishesGlass"></td>             --}}
                                    {{-- <td><input onblur="findTotalAwardedWall()" type="number" min="0" max="2" class="prawwall_awarded" name="Awarded_AwWallFinishesGlass" id="Awarded_AwWallFinishesGlass"></td>            --}}
                                    <td><input type="text" name="Remark_AwWallFinishesGlass" id="Remark_AwWallFinishesGlass"></td>                    
                                    <td><input type="file" name="Remark_AwWallFinishesGlass" id="Remark_AwWallFinishesGlass"></td>                    
                                  </tr>
                        
                                  <tr>
                                    <td >Glass block</td>
                                    <td >2</td>
                                    {{-- <td >
                                      <select onblur="findTotalWall()" class="prawwall" name="AwWallFinishesGlassBlock" id="AwWallFinishesGlassBlock">
                                      <option selected disabled ></option>
                                      <option value="0">0</option>
                                      <option value="2" >2</option>
                                      </select>
                                    </td> --}}
                                    <td><input onblur="findTotalWall()" type="number" min="0" max="2" class="prawwall" name="AwWallFinishesGlassBlock" id="AwWallFinishesGlassBlock"></td>            
                                    {{-- <td><input onblur="findTotalConstructedWall()" type="number" min="0" max="2" class="prawwall_construction" name="Cons_AwWallFinishesGlassBlock" id="Cons_AwWallFinishesGlassBlock"></td>             --}}
                                    {{-- <td><input onblur="findTotalAwardedWall()" type="number" min="0" max="2" class="prawwall_awarded" name="Awarded_AwWallFinishesGlassBlock" id="Awarded_AwWallFinishesGlassBlock"></td>            --}}
                                    <td><input type="text" name="Remark_AwWallFinishesGlassBlock" id="Remark_AwWallFinishesGlassBlock"></td>                    
                                    <td><input type="file" name="Remark_AwWallFinishesGlassBlock" id="Remark_AwWallFinishesGlassBlock"></td>                    
                                  </tr>
                        
                                  <tr>
                                    <td >Timber panelling</td>
                                    <td >2</td>
                                    {{-- <td >
                                      <select onblur="findTotalWall()" class="prawwall" name="AwWallFinishesTimber" id="AwWallFinishesTimber">
                                      <option selected disabled ></option>
                                      <option value="0">0</option>
                                      <option value="2" >2</option>
                                      </select>
                                    </td> --}}
                                    <td><input onblur="findTotalWall()" type="number" min="0" max="2" class="prawwall" name="AwWallFinishesTimber" id="AwWallFinishesTimber"></td>            
                                    {{-- <td><input onblur="findTotalConstructedWall()" type="number" min="0" max="2" class="prawwall_construction" name="Cons_AwWallFinishesTimber" id="Cons_AwWallFinishesTimber"></td>             --}}
                                    {{-- <td><input onblur="findTotalAwardedWall()" type="number" min="0" max="2" class="prawwall_awarded" name="Awarded_AwWallFinishesTimber" id="Awarded_AwWallFinishesTimber"></td>             --}}
                                    <td><input type="text" name="Remark_AwWallFinishesTimber" id="Remark_AwWallFinishesTimber"></td>                    
                                    <td><input type="file" name="Remark_AwWallFinishesTimber" id="Remark_AwWallFinishesTimber"></td>                    
                                  </tr>
                        
                                  <tr>
                                    <td >Plaster</td>
                                    <td >2</td>
                                    {{-- <td >
                                      <select onblur="findTotalWall()" class="prawwall" name="AwWallFinishesPaster" id="AwWallFinishesPaster">
                                      <option selected disabled ></option>
                                      <option value="0">0</option>
                                      <option value="2" >2</option>
                                      </select>
                                    </td> --}}
                                    <td><input onblur="findTotalWall()" type="number" min="0" max="2" class="prawwall" name="AwWallFinishesPaster" id="AwWallFinishesPaster"></td>            
                                    {{-- <td><input onblur="findTotalConstructedWall()" type="number" min="0" max="2" class="prawwall_construction" name="Cons_AwWallFinishesPaster" id="Cons_AwWallFinishesPaster"></td>             --}}
                                    {{-- <td><input onblur="findTotalAwardedWall()" type="number" min="0" max="2" class="prawwall_awarded" name="Awarded_AwWallFinishesPaster" id="Awarded_AwWallFinishesPaster"></td>             --}}
                                    <td><input type="text" name="Remark_AwWallFinishesPaster" id="Remark_AwWallFinishesPaster"></td>                    
                                    <td><input type="file" name="Remark_AwWallFinishesPaster" id="Remark_AwWallFinishesPaster"></td>                    
                                  </tr>
                        
                                  <tr>
                                    <td >Growall</td>
                                    <td >2</td>
                                    {{-- <td >
                                      <select onblur="findTotalWall()" class="prawwall" name="AwWallFinishesGrowall" id="AwWallFinishesGrowall">
                                      <option selected disabled ></option>
                                      <option value="0">0</option>
                                      <option value="2" >2</option>
                                      </select>
                                    </td> --}}
                                    <td><input onblur="findTotalWall()" type="number" min="0" max="2" class="prawwall" name="AwWallFinishesGrowall" id="AwWallFinishesGrowall"></td>            
                                    {{-- <td><input onblur="findTotalConstructedWall()" type="number" min="0" max="2" class="prawwall_construction" name="Cons_AwWallFinishesGrowall" id="Cons_AwWallFinishesGrowall"></td>             --}}
                                    {{-- <td><input onblur="findTotalAwardedWall()" type="number" min="0" max="2" class="prawwall_awarded" name="Awarded_AwWallFinishesGrowall" id="Awarded_AwWallFinishesGrowall"></td>              --}}
                                    <td><input type="text" name="Remark_AwWallFinishesGrowall" id="Remark_AwWallFinishesGrowall"></td>                    
                                    <td><input type="file" name="Remark_AwWallFinishesGrowall" id="Remark_AwWallFinishesGrowall"></td>                    
                                  </tr>
                      
                                  <tr style="display: none">
                                    <td>markahPRAwWall <input type="text" name="markahPRAwWall" id="markahPRAwWall" /></td>            
                                  </tr>
                      
                                  <tr style="display: none">
                                    <td>markahPRAwWallConstruction <input type="text" name="Cons_markahPRAwWall" id="Cons_markahPRAwWall" /></td>            
                                  </tr>
                      
                                  <tr style="display: none">
                                    <td>markahPRAwWallAwarded <input type="text" name="Awarded_markahPRAwWall" id="Awarded_markahPRAwWall" /></td>            
                                  </tr>

                                  <tr class="text-center">
                                    <td rowspan="4" >1</td>
                                    <td rowspan="4">Frames</td>
                                    <td >Aluminium</td>
                                    <td >2</td>
                                    <td><input onblur="findTotalWindow()" min="0" max="2" type="number" class="arkitek" name="AwWindowFramesAluminium" id="AwWindowFramesAluminium"></td>            
                                    {{-- <td><input onblur="findTotalWindowConstruction()" min="0" max="2" type="number" class="window_construction" name="Cons_AwWindowFramesAluminium" id="Cons_AwWindowFramesAluminium"></td>             --}}
                                    {{-- <td><input onblur="findTotalWindowAwarded()" min="0" max="2" type="number" class="window_awarded" name="Awarded_AwWindowFramesAluminium" id="Awarded_AwWindowFramesAluminium"></td>                         --}}
                                    <td><input type="text" name="Remark_AwWindowFramesAluminium" id="Remark_AwWindowFramesAluminium"></td>                    
                                    <td><input type="file" name="Remark_AwWindowFramesAluminium" id="Remark_AwWindowFramesAluminium"></td>                    
                                  </tr>
                        
                                  <tr>
                                    <td >Mild steel</td>
                                    <td >2</td>
                                    <td><input onblur="findTotalWindow()" type="number" min="0" max="2" class="arkitek" name="AwWindowFramesMildSteel" id="AwWindowFramesMildSteel"></td>            
                                    {{-- <td><input onblur="findTotalWindowConstruction()" min="0" max="2" type="number" class="window_construction" name="Cons_AwWindowFramesMildSteel" id="Cons_AwWindowFramesMildSteel"></td>             --}}
                                    {{-- <td><input onblur="findTotalWindowAwarded()" min="0" max="2" type="number" class="window_awarded" name="Awarded_AwWindowFramesMildSteel" id="Awarded_AwWindowFramesMildSteel"></td>             --}}
                                    <td><input type="text" name="Remark_AwWindowFramesMildSteel" id="Remark_AwWindowFramesMildSteel"></td>                    
                                    <td><input type="file" name="Remark_AwWindowFramesMildSteel" id="Remark_AwWindowFramesMildSteel"></td>                    
                                  </tr>
                        
                                  <tr>
                                    
                                    <td >Timber</td>
                                    <td >2</td>
                                    <td><input onblur="findTotalWindow()" type="number" min="0" max="2" class="arkitek" name="AwWindowFramesTimber" id="AwWindowFramesTimber"></td>            
                                    {{-- <td><input onblur="findTotalWindowConstruction()" min="0" max="2" type="number" class="window_construction" name="Cons_AwWindowFramesTimber" id="Cons_AwWindowFramesTimber"></td>             --}}
                                    {{-- <td><input onblur="findTotalWindowAwarded()" min="0" max="2" type="number" class="window_awarded" name="Awarded_AwWindowFramesTimber" id="Awarded_AwWindowFramesTimber"></td>             --}}
                                    <td><input type="text" name="Remark_AwWindowFramesTimber" id="Remark_AwWindowFramesTimber"></td>                    
                                    <td><input type="file" name="Remark_AwWindowFramesTimber" id="Remark_AwWindowFramesTimber"></td>                    
                                  </tr>
                        
                                  <tr>
                                    <td >UPVC</td>
                                    <td >2</td>
                                    <td><input onblur="findTotalWindow()" type="number" min="0" max="2" class="arkitek" name="AwWindowFramesUpvc" id="AwWindowFramesUpvc"></td>            
                                    {{-- <td><input onblur="findTotalWindowConstruction()" min="0" max="2" type="number" class="window_construction" name="Cons_AwWindowFramesUpvc" id="Cons_AwWindowFramesUpvc"></td>             --}}
                                    {{-- <td><input onblur="findTotalWindowAwarded()" min="0" max="2" type="number" class="window_awarded" name="Awarded_AwWindowFramesUpvc" id="Awarded_AwWindowFramesUpvc"></td>             --}}
                                    <td><input type="text" name="Remark_AwWindowFramesUpvc" id="Remark_AwWindowFramesUpvc"></td>                    
                                    <td><input type="file" name="Remark_AwWindowFramesUpvc" id="Remark_AwWindowFramesUpvc"></td>                    
                                  </tr>
                                  
                                  <tr>
                                    <td rowspan="4">2</td>
                                    <td rowspan="4">Sub component (panel)</td>
                                    <td >Glass</td>
                                    <td >2</td>
                                    <td><input onblur="findTotalWindow()" type="number" min="0" max="2" class="arkitek" name="AwWindowPanelGlass" id="AwWindowPanelGlass"></td>            
                                    {{-- <td><input onblur="findTotalWindowConstruction()" min="0" max="2" type="number" class="window_construction" name="Cons_AwWindowPanelGlass" id="Cons_AwWindowPanelGlass"></td>             --}}
                                    {{-- <td><input onblur="findTotalWindowAwarded()" min="0" max="2" type="number" class="window_awarded" name="Awarded_AwWindowPanelGlass" id="Awarded_AwWindowPanelGlass"></td>             --}}
                                    <td><input type="text" name="Remark_AwWindowPanelGlass" id="Remark_AwWindowPanelGlass"></td>                    
                                    <td><input type="file" name="Remark_AwWindowPanelGlass" id="Remark_AwWindowPanelGlass"></td>                    
                                  </tr>
                        
                                  <tr>
                                    <td >Timber</td>
                                    <td >2</td>
                                    <td><input onblur="findTotalWindow()" type="number" min="0" max="2" class="arkitek" name="AwWindowPanelTimber" id="AwWindowPanelTimber"></td>            
                                    {{-- <td><input onblur="findTotalWindowConstruction()" min="0" max="2" type="number" class="window_construction" name="Cons_AwWindowPanelTimber" id="Cons_AwWindowPanelTimber"></td>             --}}
                                    {{-- <td><input onblur="findTotalWindowAwarded()" min="0" max="2" type="number" class="window_awarded" name="Awarded_AwWindowPanelTimber" id="Awarded_AwWindowPanelTimber"></td>             --}}
                                    <td><input type="text" name="Remark_AwWindowPanelTimber" id="Remark_AwWindowPanelTimber"></td>                    
                                    <td><input type="file" name="Remark_AwWindowPanelTimber" id="Remark_AwWindowPanelTimber"></td>                    
                                  </tr>
                        
                                  <tr>
                                    <td >Aluminium</td>
                                    <td >2</td>
                                    <td><input onblur="findTotalWindow()" type="number" min="0" max="2" class="arkitek" name="AwWindowPanelAluminium" id="AwWindowPanelAluminium"></td>            
                                    {{-- <td><input onblur="findTotalWindowConstruction()" min="0" max="2" type="number" class="window_construction" name="Cons_AwWindowPanelAluminium" id="Cons_AwWindowPanelAluminium"></td>             --}}
                                    {{-- <td><input onblur="findTotalWindowAwarded()" min="0" max="2" type="number" class="window_awarded" name="Awarded_AwWindowPanelAluminium" id="Awarded_AwWindowPanelAluminium"></td>             --}}
                                    <td><input type="text" name="Remark_AwWindowPanelAluminium" id="Remark_AwWindowPanelAluminium"></td>                    
                                    <td><input type="file" name="Remark_AwWindowPanelAluminium" id="Remark_AwWindowPanelAluminium"></td>                    
                                  </tr>
                        
                                  <tr>
                                    <td >Steel</td>
                                    <td >2</td>
                                    <td><input onblur="findTotalWindow()" type="number" min="0" max="2" class="arkitek" name="AwWindowPanelSteel" id="AwWindowPanelSteel"></td>            
                                    {{-- <td><input onblur="findTotalWindowConstruction()" min="0" max="2" type="number" class="window_construction" name="Cons_AwWindowPanelAluminium" id="Cons_AwWindowPanelAluminium"></td>             --}}
                                    {{-- <td><input onblur="findTotalWindowAwarded()" min="0" max="2" type="number" class="window_awarded" name="Awarded_AwWindowPanelAluminium" id="Awarded_AwWindowPanelAluminium"></td>             --}}
                                    <td><input type="text" name="Remark_AwWindowPanelAluminium" id="Remark_AwWindowPanelAluminium"></td>                    
                                    <td><input type="FILE" name="Remark_AwWindowPanelAluminium" id="Remark_AwWindowPanelAluminium"></td>                    
                                  </tr>
                        
                                  <tr>
                                    <td rowspan="4">3</td>
                                    <td rowspan="4">Ironmongeries</td>
                                    <td >Friction Stay</td>
                                    <td >2</td>
                                    <td><input onblur="findTotalWindow()" type="number" min="0" max="2" class="arkitek" name="AwWindowIronFriction" id="AwWindowIronFriction"></td>            
                                    {{-- <td><input onblur="findTotalWindowConstruction()" min="0" max="2" type="number" class="window_construction" name="Cons_AwWindowIronFriction" id="Cons_AwWindowIronFriction"></td>             --}}
                                    {{-- <td><input onblur="findTotalWindowAwarded()" min="0" max="2" type="number" class="window_awarded" name="Awarded_AwWindowIronFriction" id="Awarded_AwWindowIronFriction"></td>             --}}
                                    <td><input type="text" name="Remark_AwWindowIronFriction" id="Remark_AwWindowIronFriction"></td>                    
                                    <td><input type="file" name="Remark_AwWindowIronFriction" id="Remark_AwWindowIronFriction"></td>                    
                                  </tr>
                        
                                  <tr>
                                    <td >Hinges</td>
                                    <td >2</td>
                                    <td><input onblur="findTotalWindow()" type="number" min="0" max="2" class="arkitek" name="AwWindowIronHinges" id="AwWindowIronHinges"></td>            
                                    {{-- <td><input onblur="findTotalWindowConstruction()" min="0" max="2" type="number" class="window_construction" name="Cons_AwWindowIronHinges" id="Cons_AwWindowIronHinges"></td>             --}}
                                    {{-- <td><input onblur="findTotalWindowAwarded()" min="0" max="2" type="number" class="window_awarded" name="Awarded_AwWindowIronHinges" id="Awarded_AwWindowIronHinges"></td>             --}}
                                    <td><input type="text" name="Remark_AwWindowIronHinges" id="Remark_AwWindowIronHinges"></td>                    
                                    <td><input type="file" name="Remark_AwWindowIronHinges" id="Remark_AwWindowIronHinges"></td>                    
                                  </tr>
                        
                                  <tr>
                                    <td >Handle</td>
                                    <td >2</td>
                                    <td><input onblur="findTotalWindow()" type="number" min="0" max="2" class="arkitek" name="AwWindowIronHandle" id="AwWindowIronHandle"></td>            
                                    {{-- <td><input onblur="findTotalWindowConstruction()" min="0" max="2" type="number" class="window_construction" name="Cons_AwWindowIronHandle" id="Cons_AwWindowIronHandle"></td>             --}}
                                    {{-- <td><input onblur="findTotalWindowAwarded()" min="0" max="2" type="number" class="window_awarded" name="Awarded_AwWindowIronHandle" id="Awarded_AwWindowIronHandle"></td>             --}}
                                    <td><input type="text" name="Remark_AwWindowIronHandle" id="Remark_AwWindowIronHandle"></td>                    
                                    <td><input type="file" name="Remark_AwWindowIronHandle" id="Remark_AwWindowIronHandle"></td>                    
                                  </tr>
                        
                                  <tr>
                                    <td >Rubber Gasket</td>
                                    <td >2</td>
                                    <td><input onblur="findTotalWindow()" type="number" min="0" max="2" class="arkitek" name="AwWindowIronRubber" id="AwWindowIronRubber"></td>            
                                    {{-- <td><input onblur="findTotalWindowConstruction()" min="0" max="2" type="number" class="window_construction" name="Cons_AwWindowIronRubber" id="Cons_AwWindowIronRubber"></td>             --}}
                                    {{-- <td><input onblur="findTotalWindowAwarded()" min="0" max="2" type="number" class="window_awarded" name="Awarded_AwWindowIronRubber" id="Awarded_AwWindowIronRubber"></td>            --}}
                                    <td><input type="text" name="Remark_AwWindowIronRubber" id="Remark_AwWindowIronRubber"></td>                    
                                    <td><input type="file" name="Remark_AwWindowIronRubber" id="Remark_AwWindowIronRubber"></td>                    
                                  </tr>
                        
                                  <tr>
                                    <td rowspan="3">4</td>
                                    <td rowspan="3">Finishes</td>
                                    <td >Anodised Coatings</td>
                                    <td >2</td>
                                    <td> <input onblur="findTotalWindow()" type="number" min="0" max="2" class="arkitek" name="AwWindowFinishesAnodised" id="AwWindowFinishesAnodised"></td>            
                                    {{-- <td><input onblur="findTotalWindowConstruction()" min="0" max="2" type="number" class="window_construction" name="Cons_AwWindowFinishesAnodised" id="Cons_AwWindowFinishesAnodised"></td>             --}}
                                    {{-- <td><input onblur="findTotalWindowAwarded()" min="0" max="2" type="number" class="window_awarded" name="Awarded_AwWindowFinishesAnodised" id="Awarded_AwWindowFinishesAnodised"></td> --}}
                                    <td><input type="text" name="Remark_AwWindowFinishesAnodised" id="Remark_AwWindowFinishesAnodised"></td>                    
                                    <td><input type="file" name="Remark_AwWindowFinishesAnodised" id="Remark_AwWindowFinishesAnodised"></td>                    
                                  </tr>
                        
                                  <tr>
                                    <td >Paint</td>
                                    <td >2</td>
                                    <td><input onblur="findTotalWindow()" type="number" min="0" max="2" class="arkitek" name="AwWindowFinishesPaint" id="AwWindowFinishesPaint"></td>            
                                    {{-- <td><input onblur="findTotalWindowConstruction()" min="0" max="2" type="number" class="window_construction" name="Cons_AwWindowFinishesPaint" id="Cons_AwWindowFinishesPaint"></td>             --}}
                                    {{-- <td><input onblur="findTotalWindowAwarded()" min="0" max="2" type="number" class="window_awarded" name="Awarded_AwWindowFinishesPaint" id="Awarded_AwWindowFinishesPaint"></td>            --}}
                                    <td><input type="text" name="Remark_AwWindowFinishesPaint" id="Remark_AwWindowFinishesPaint"></td>                    
                                    <td><input type="file" name="Remark_AwWindowFinishesPaint" id="Remark_AwWindowFinishesPaint"></td>                    
                                  </tr>
                        
                                  <tr>
                                    <td >Varnish/shellac</td>
                                    <td >2</td>
                                    <td><input onblur="findTotalWindow()" type="number" min="0" max="2" class="arkitek" name="AwWindowFinishesVarnish" id="AwWindowFinishesVarnish"></td>            
                                    {{-- <td><input onblur="findTotalWindowConstruction()" min="0" max="2" type="number" class="window_construction" name="Cons_AwWindowFinishesVarnish" id="Cons_AwWindowFinishesVarnish"></td>             --}}
                                    {{-- <td><input onblur="findTotalWindowAwarded()" min="0" max="2" type="number" class="window_awarded" name="Awarded_AwWindowFinishesVarnish" id="Awarded_AwWindowFinishesVarnish"></td>             --}}
                                    <td><input type="text" name="Remark_AwWindowFinishesVarnish" id="Remark_AwWindowFinishesVarnish"></td>                    
                                    <td><input type="file" name="Remark_AwWindowFinishesVarnish" id="Remark_AwWindowFinishesVarnish"></td>                    
                                  </tr>
                        
                                  <tr style="display: none">
                                    <td>markahPRAwWindow <input type="text" name="markahPRAwWindow" id="markahPRAwWindow" /></td>            
                                  </tr>
                        
                                  <tr style="display: none">
                                    <td>markahPRAwWindowConstruction <input type="text" name="Cons_markahPRAwWindow" id="Cons_markahPRAwWindow" /></td>            
                                  </tr>
                        
                                  <tr style="display: none">
                                    <td>markahPRAwWindowAwarded <input type="text" name="Awarded_markahPRAwWindow" id="Awarded_markahPRAwWindow" /></td>            
                                  </tr>
                        
                                  {{-- New table for door --}}
                                  <tr class="text-white bg-orange-jkr">
                                    <th colspan="8">List of products for architectural works - Door</th>
                                  </tr>
                        
                                  <tr>
                                    <td rowspan="4">1</td>
                                    <td rowspan="4">Frames</td>
                                    <td >Aluminium</td>
                                    <td >2</td>
                                    <td> <input onblur="findTotalDoor()" type="number" min="0" max="2" class="door" name="AwDoorFramesAluminium" id="AwDoorFramesAluminium"></td>            
                                    {{-- <td> <input onblur="findTotalDoorConstruction()" type="number" min="0" max="2" class="door_construction" name="Cons_AwDoorFramesAluminium" id="Cons_AwDoorFramesAluminium"></td>             --}}
                                    {{-- <td> <input onblur="findTotalDoorAwarded()" type="number" min="0" max="2" class="door_awarded" name="Awarded_AwDoorFramesAluminium" id="Awarded_AwDoorFramesAluminium"></td>             --}}
                                    <td><input type="text" name="Remark_AwDoorFramesAluminium" id="Remark_AwDoorFramesAluminium"></td>                    
                                    <td><input type="file" name="Remark_AwDoorFramesAluminium" id="Remark_AwDoorFramesAluminium"></td>                    
                                  </tr>
                        
                                  <tr>
                                    <td >Mild steel</td>
                                    <td >2</td>
                                    <td><input onblur="findTotalDoor()" type="number" min="0" max="2" class="door" name="AwDoorFramesMildSteel" id="AwDoorFramesMildSteel"></td>            
                                    {{-- <td> <input onblur="findTotalDoorConstruction()" type="number" min="0" max="2" class="door_construction" name="Cons_AwDoorFramesMildSteel" id="Cons_AwDoorFramesMildSteel"></td>             --}}
                                    {{-- <td> <input onblur="findTotalDoorAwarded()" type="number" min="0" max="2" class="door_awarded" name="Awarded_AwDoorFramesMildSteel" id="Awarded_AwDoorFramesMildSteel"></td>             --}}
                                    <td><input type="text" name="Remark_AwDoorFramesMildSteel" id="Remark_AwDoorFramesMildSteel"></td>                    
                                    <td><input type="file" name="Remark_AwDoorFramesMildSteel" id="Remark_AwDoorFramesMildSteel"></td>                    
                                  </tr>
                        
                                  <tr>
                                    <td >Timber</td>
                                    <td >2</td>
                                    <td><input onblur="findTotalDoor()" type="number" min="0" max="2" class="door" name="AwDoorFramesTimber" id="AwDoorFramesTimber"></td>            
                                    {{-- <td> <input onblur="findTotalDoorConstruction()" type="number" min="0" max="2" class="door_construction" name="Cons_AwDoorFramesTimber" id="Cons_AwDoorFramesTimber"></td>             --}}
                                    {{-- <td> <input onblur="findTotalDoorAwarded()" type="number" min="0" max="2" class="door_awarded" name="Awarded_AwDoorFramesTimber" id="Awarded_AwDoorFramesTimber"></td>             --}}
                                    <td><input type="text" name="Remark_AwDoorFramesTimber" id="Remark_AwDoorFramesTimber"></td>                    
                                    <td><input type="file" name="Remark_AwDoorFramesTimber" id="Remark_AwDoorFramesTimber"></td>                    
                                  </tr>
                        
                                  <tr>
                                    <td >Upvc</td>
                                    <td >2</td>
                                    <td><input onblur="findTotalDoor()" type="number" min="0" max="2" class="door" name="AwDoorFramesUpvc" id="AwDoorFramesUpvc"></td>            
                                    {{-- <td> <input onblur="findTotalDoorConstruction()" type="number" min="0" max="2" class="door_construction" name="Cons_AwDoorFramesUpvc" id="Cons_AwDoorFramesUpvc"></td>             --}}
                                    {{-- <td> <input onblur="findTotalDoorAwarded()" type="number" min="0" max="2" class="door_awarded" name="Awarded_AwDoorFramesUpvc" id="Awarded_AwDoorFramesUpvc"></td>             --}}
                                    <td><input type="text" name="Remark_AwDoorFramesUpvc" id="Remark_AwDoorFramesUpvc"></td>
                                    <td><input type="file" name="Remark_AwDoorFramesUpvc" id="Remark_AwDoorFramesUpvc"></td>
                                  </tr>
                        
                                  <tr>
                                    <td rowspan="5">2</td>
                                    <td rowspan="5">Sub component (Panel)</td>
                                    <td >Timber</td>
                                    <td >2</td>
                                    <td><input onblur="findTotalDoor()" type="number" min="0" max="2" class="door" name="AwDoorPanelTimber" id="AwDoorPanelTimber"></td>            
                                    {{-- <td> <input onblur="findTotalDoorConstruction()" type="number" min="0" max="2" class="door_construction" name="Cons_AwDoorPanelTimber" id="Cons_AwDoorPanelTimber"></td>             --}}
                                    {{-- <td> <input onblur="findTotalDoorAwarded()" type="number" min="0" max="2" class="door_awarded" name="Awarded_AwDoorPanelTimber" id="Awarded_AwDoorPanelTimber"></td>             --}}
                                    <td><input type="text" name="Remark_AwDoorPanelTimber" id="Remark_AwDoorPanelTimber"></td>                   
                                    <td><input type="file" name="Remark_AwDoorPanelTimber" id="Remark_AwDoorPanelTimber"></td>                   
                                  </tr>
                        
                                  <tr>
                                    <td >Aluminium</td>
                                    <td >2</td>
                                    <td><input onblur="findTotalDoor()" type="number" min="0" max="2" class="door" name="AwDoorPanelAluminium" id="AwDoorPanelAluminium"></td>            
                                    {{-- <td> <input onblur="findTotalDoorConstruction()" type="number" min="0" max="2" class="door_construction" name="Cons_AwDoorPanelAluminium" id="Cons_AwDoorPanelAluminium"></td>             --}}
                                    {{-- <td> <input onblur="findTotalDoorAwarded()" type="number" min="0" max="2" class="door_awarded" name="Awarded_AwDoorPanelAluminium" id="Awarded_AwDoorPanelAluminium"></td>             --}}
                                    <td><input type="text" name="Remark_AwDoorPanelAluminium" id="Remark_AwDoorPanelAluminium"></td>
                                    <td><input type="file" name="Remark_AwDoorPanelAluminium" id="Remark_AwDoorPanelAluminium"></td>
                                  </tr>
                        
                                  <tr>
                                    <td >Upvc</td>
                                    <td >2</td>
                                    <td><input onblur="findTotalDoor()" type="number" min="0" max="2" class="door" name="AwDoorPanelUpvc" id="AwDoorPanelUpvc"></td>            
                                    {{-- <td> <input onblur="findTotalDoorConstruction()" type="number" min="0" max="2" class="door_construction" name="Cons_AwDoorPanelAluminium" id="Cons_AwDoorPanelAluminium"></td>             --}}
                                    {{-- <td> <input onblur="findTotalDoorAwarded()" type="number" min="0" max="2" class="door_awarded" name="Awarded_AwDoorPanelAluminium" id="Awarded_AwDoorPanelAluminium"></td>             --}}
                                    <td><input type="text" name="Remark_AwDoorPanelAluminium" id="Remark_AwDoorPanelAluminium"></td>
                                    <td><input type="file" name="Remark_AwDoorPanelAluminium" id="Remark_AwDoorPanelAluminium"></td>
                                  </tr>
                        
                                  <tr>
                                    <td >Steel</td>
                                    <td >2</td>
                                    <td><input onblur="findTotalDoor()" type="number" min="0" max="2" class="door" name="AwDoorPanelSteel" id="AwDoorPanelSteel"></td>            
                                    {{-- <td> <input onblur="findTotalDoorConstruction()" type="number" min="0" max="2" class="door_construction" name="Cons_AwDoorPanelSteel" id="Cons_AwDoorPanelSteel"></td>             --}}
                                    {{-- <td> <input onblur="findTotalDoorAwarded()" type="number" min="0" max="2" class="door_awarded" name="Awarded_AwDoorPanelSteel" id="Awarded_AwDoorPanelSteel"></td>             --}}
                                    <td><input type="text" name="Remark_AwDoorPanelSteel" id="Remark_AwDoorPanelSteel"></td>                    
                                    <td><input type="file" name="Remark_AwDoorPanelSteel" id="Remark_AwDoorPanelSteel"></td>                    
                                  </tr>
                        
                                  <tr>
                                    <td >Glass</td>
                                    <td >2</td>
                                    <td><input onblur="findTotalDoor()" type="number" min="0" max="2" class="door" name="AwDoorPanelGlass" id="AwDoorPanelGlass"></td>            
                                    {{-- <td> <input onblur="findTotalDoorConstruction()" type="number" min="0" max="2" class="door_construction" name="Cons_AwDoorPanelGlass" id="Cons_AwDoorPanelGlass"></td>             --}}
                                    {{-- <td> <input onblur="findTotalDoorAwarded()" type="number" min="0" max="2" class="door_awarded" name="Awarded_AwDoorPanelGlass" id="Awarded_AwDoorPanelGlass"></td>             --}}
                                    <td><input type="text" name="Remark_AwDoorPanelGlass" id="Remark_AwDoorPanelGlass"></td>                    
                                    <td><input type="file" name="Remark_AwDoorPanelGlass" id="Remark_AwDoorPanelGlass"></td>                    
                                  </tr>
                        
                                  <tr>
                                    <td rowspan="3">3</td>
                                    <td rowspan="3">Ironmongeries</td>
                                    <td >Lockset</td>
                                    <td >2</td>
                                    <td> <input onblur="findTotalDoor()" type="number" min="0" max="2" class="door" name="AwDoorIronLockset" id="AwDoorIronLockset"></td>            
                                    {{-- <td> <input onblur="findTotalDoorConstruction()" type="number" min="0" max="2" class="door_construction" name="Cons_AwDoorIronLockset" id="Cons_AwDoorIronLockset"></td>             --}}
                                    {{-- <td> <input onblur="findTotalDoorAwarded()" type="number" min="0" max="2" class="door_awarded" name="Awarded_AwDoorIronLockset" id="Awarded_AwDoorIronLockset"></td>             --}}
                                    <td><input type="text" name="Remark_AwDoorIronLockset" id="Remark_AwDoorIronLockset"></td>
                                    <td><input type="file" name="Remark_AwDoorIronLockset" id="Remark_AwDoorIronLockset"></td>
                                  </tr>
                        
                                  <tr>
                                    <td >Door closer</td>
                                    <td >2</td>
                                    <td><input onblur="findTotalDoor()" type="number" min="0" max="2" class="door" name="AwDoorIronDoorCloser" id="AwDoorIronDoorCloser"></td>            
                                    {{-- <td> <input onblur="findTotalDoorConstruction()" type="number" min="0" max="2" class="door_construction" name="Cons_AwDoorIronDoorCloser" id="Cons_AwDoorIronDoorCloser"></td>             --}}
                                    {{-- <td> <input onblur="findTotalDoorAwarded()" type="number" min="0" max="2" class="door_awarded" name="Awarded_AwDoorIronDoorCloser" id="Awarded_AwDoorIronDoorCloser"></td>             --}}
                                    <td><input type="text" name="Remark_AwDoorIronDoorCloser" id="Remark_AwDoorIronDoorCloser"></td>                   
                                    <td><input type="file" name="Remark_AwDoorIronDoorCloser" id="Remark_AwDoorIronDoorCloser"></td>                   
                                  </tr>
                        
                                  <tr>
                                    <td >Hinges</td>
                                    <td >2</td>
                                    <td><input onblur="findTotalDoor()" type="number" min="0" max="2" class="door" name="AwDoorIronHinges" id="AwDoorIronHinges"></td>            
                                    {{-- <td> <input onblur="findTotalDoorConstruction()" type="number" min="0" max="2" class="door_construction" name="Cons_AwDoorIronHinges" id="Cons_AwDoorIronHinges"></td>             --}}
                                    {{-- <td> <input onblur="findTotalDoorAwarded()" type="number" min="0" max="2" class="door_awarded" name="Awarded_AwDoorIronHinges" id="Awarded_AwDoorIronHinges"></td>             --}}
                                    <td><input type="text" name="Remark_AwDoorIronHinges" id="Remark_AwDoorIronHinges"></td>
                                    <td><input type="file" name="Remark_AwDoorIronHinges" id="Remark_AwDoorIronHinges"></td>
                                  </tr>
                        
                                  <tr>
                                    <td rowspan="3">4</td>
                                    <td rowspan="3">Finishes</td>
                                    <td >Anodised coatings</td>
                                    <td >2</td>
                                    <td> <input onblur="findTotalDoor()" type="number" min="0" max="2" class="door" name="AwDoorFinishesAnodised" id="AwDoorFinishesAnodised"></td>            
                                    {{-- <td> <input onblur="findTotalDoorConstruction()" type="number" min="0" max="2" class="door_construction" name="Cons_AwDoorFinishesAnodised" id="Cons_AwDoorFinishesAnodised"></td>             --}}
                                    {{-- <td> <input onblur="findTotalDoorAwarded()" type="number" min="0" max="2" class="door_awarded" name="Awarded_AwDoorFinishesAnodised" id="Awarded_AwDoorFinishesAnodised"></td>             --}}
                                    <td><input type="text" name="Remark_AwDoorFinishesAnodised" id="Remark_AwDoorFinishesAnodised"></td>                   
                                    <td><input type="file" name="Remark_AwDoorFinishesAnodised" id="Remark_AwDoorFinishesAnodised"></td>                   
                                  </tr>
                        
                                  <tr>
                                    <td >Paint</td>
                                    <td >2</td>
                                    <td><input onblur="findTotalDoor()" type="number" min="0" max="2" class="door" name="AwDoorFinishesPaint" id="AwDoorFinishesPaint"></td>            
                                    {{-- <td> <input onblur="findTotalDoorConstruction()" type="number" min="0" max="2" class="door_construction" name="Cons_AwDoorFinishesPaint" id="Cons_AwDoorFinishesPaint"></td>             --}}
                                    {{-- <td> <input onblur="findTotalDoorAwarded()" type="number" min="0" max="2" class="door_awarded" name="Awarded_AwDoorFinishesPaint" id="Awarded_AwDoorFinishesPaint"></td>             --}}
                                    <td><input type="text" name="Remark_AwDoorFinishesPaint" id="Remark_AwDoorFinishesPaint"></td>                    
                                    <td><input type="file" name="Remark_AwDoorFinishesPaint" id="Remark_AwDoorFinishesPaint"></td>                    
                                  </tr>
                        
                                  <tr>
                                    <td >Varnish/shellac</td>
                                    <td >2</td>
                                    <td><input onblur="findTotalDoor()" type="number" min="0" max="2" class="door" name="AwDoorFinishesVarnish" id="AwDoorFinishesVarnish"></td>            
                                    {{-- <td> <input onblur="findTotalDoorConstruction()" type="number" min="0" max="2" class="door_construction" name="Cons_AwDoorFinishesVarnish" id="Cons_AwDoorFinishesVarnish"></td>             --}}
                                    {{-- <td> <input onblur="findTotalDoorAwarded()" type="number" min="0" max="2" class="door_awarded" name="Awarded_AwDoorFinishesVarnish" id="Awarded_AwDoorFinishesVarnish"></td>             --}}
                                    <td><input type="text" name="Remark_AwDoorFinishesVarnish" id="Remark_AwDoorFinishesVarnish"></td>
                                    <td><input type="file" name="Remark_AwDoorFinishesVarnish" id="Remark_AwDoorFinishesVarnish"></td>
                                  </tr>
                        
                                  <tr style="display: none">
                                    <td>markahPRAwDoor<input type="text" name="markahPRAwDoor" id="markahPRAwDoor" />
                                    </td>
                                  </tr>
                        
                                  <tr style="display: none">
                                    <td>Cons_markahPRAwDoor<input type="text" name="Cons_markahPRAwDoor" id="Cons_markahPRAwDoor" />
                                    </td>
                                  </tr>
                        
                                  <tr style="display: none">
                                    <td>Awarded_markahPRAwDoor<input type="text" name="Awarded_markahPRAwDoor" id="Awarded_markahPRAwDoor" />
                                    </td>
                                  </tr>

                                  <tr class="text-center">
                                    <td rowspan="18" >1</td>
                                    <td rowspan="18">Floor</td>
                                    <td >Epoxy paint</td>
                                    <td >2</td>
                                    <td><input onblur="findTotalFloor()" type="number" min="0" max="2" class="floor" name="AwFloorFloorEpoxy" id="AwFloorFloorEpoxy"></td>            
                                    {{-- <td><input onblur="findTotalFloorConstruction()" type="number" min="0" max="2" class="floor_construction" name="Cons_AwFloorFloorEpoxy" id="Cons_AwFloorFloorEpoxy"></td>             --}}
                                    {{-- <td><input onblur="findTotalFloorAwarded()" type="number" min="0" max="2" class="floor_awarded" name="Awarded_AwFloorFloorEpoxy" id="Awarded_AwFloorFloorEpoxy"></td>             --}}
                                    <td><input type="text" name="Remark_AwFloorFloorEpoxy" id="Remark_AwFloorFloorEpoxy"></td>                    
                                    <td><input type="file" name="Remark_AwFloorFloorEpoxy" id="Remark_AwFloorFloorEpoxy"></td>                    
                                  </tr>
                        
                                  <tr>
                                    <td >Floor hardener</td>
                                    <td >2</td>
                                    <td><input onblur="findTotalFloor()" type="number" min="0" max="2" class="floor" name="AwFloorFloorFloorHardener" id="AwFloorFloorFloorHardener"></td>            
                                    {{-- <td><input onblur="findTotalFloorConstruction()" type="number" min="0" max="2" class="floor_construction" name="Cons_AwFloorFloorFloorHardener" id="Cons_AwFloorFloorFloorHardener"></td>             --}}
                                    {{-- <td><input onblur="findTotalFloorAwarded()" type="number" min="0" max="2" class="floor_awarded" name="Awarded_AwFloorFloorFloorHardener" id="Awarded_AwFloorFloorFloorHardener"></td>             --}}
                                    <td><input type="text" name="Remark_AwFloorFloorFloorHardener" id="Remark_AwFloorFloorFloorHardener"></td>                   
                                    <td><input type="file" name="Remark_AwFloorFloorFloorHardener" id="Remark_AwFloorFloorFloorHardener"></td>                   
                                  </tr>
                        
                                  <tr>
                                    
                                    <td >Ceramic tiles</td>
                                    <td >2</td>
                                    <td><input onblur="findTotalFloor()" type="number" min="0" max="2" class="floor" name="AwFloorFloorCeramic" id="AwFloorFloorCeramic"></td>            
                                    {{-- <td><input onblur="findTotalFloorConstruction()" type="number" min="0" max="2" class="floor_construction" name="Cons_AwFloorFloorCeramic" id="Cons_AwFloorFloorCeramic"></td>             --}}
                                    {{-- <td><input onblur="findTotalFloorAwarded()" type="number" min="0" max="2" class="floor_awarded" name="Awarded_AwFloorFloorCeramic" id="Awarded_AwFloorFloorCeramic"></td>             --}}
                                    <td><input type="text" name="Remark_AwFloorFloorCeramic" id="Remark_AwFloorFloorCeramic"></td>                   
                                    <td><input type="file" name="Remark_AwFloorFloorCeramic" id="Remark_AwFloorFloorCeramic"></td>                   
                                  </tr>
                        
                                  <tr>
                                    <td >Stones</td>
                                    <td >2</td>
                                    <td><input onblur="findTotalFloor()" type="number" min="0" max="2" class="floor" name="AwFloorFloorStones" id="AwFloorFloorStones"></td>            
                                    {{-- <td><input onblur="findTotalFloorConstruction()" type="number" min="0" max="2" class="floor_construction" name="Cons_AwFloorFloorStones" id="Cons_AwFloorFloorStones"></td>             --}}
                                    {{-- <td><input onblur="findTotalFloorAwarded()" type="number" min="0" max="2" class="floor_awarded" name="Awarded_AwFloorFloorStones" id="Awarded_AwFloorFloorStones"></td>             --}}
                                    <td><input type="text" name="Remark_AwFloorFloorStones" id="Remark_AwFloorFloorStones"></td>                    
                                    <td><input type="file" name="Remark_AwFloorFloorStones" id="Remark_AwFloorFloorStones"></td>                    
                                  </tr>
                        
                                  <tr>
                                    <td >Granites</td>
                                    <td >2</td>
                                    <td><input onblur="findTotalFloor()" type="number" min="0" max="2" class="floor" name="AwFloorFloorGranite" id="AwFloorFloorGranite"></td>            
                                    {{-- <td><input onblur="findTotalFloorConstruction()" type="number" min="0" max="2" class="floor_construction" name="Cons_AwFloorFloorGranite" id="Cons_AwFloorFloorGranite"></td>             --}}
                                    {{-- <td><input onblur="findTotalFloorAwarded()" type="number" min="0" max="2" class="floor_awarded" name="Awarded_AwFloorFloorGranite" id="Awarded_AwFloorFloorGranite"></td>             --}}
                                    <td><input type="text" name="Remark_AwFloorFloorGranite" id="Remark_AwFloorFloorGranite"></td>                    
                                    <td><input type="file" name="Remark_AwFloorFloorGranite" id="Remark_AwFloorFloorGranite"></td>                    
                                  </tr>
                        
                                  <tr>
                                    <td >Marble</td>
                                    <td >2</td>
                                    <td><input onblur="findTotalFloor()" type="number" min="0" max="2" class="floor" name="AwFloorFloorMarble" id="AwFloorFloorMarble"></td>            
                                    {{-- <td><input onblur="findTotalFloorConstruction()" type="number" min="0" max="2" class="floor_construction" name="Cons_AwFloorFloorMarble" id="Cons_AwFloorFloorMarble"></td>             --}}
                                    {{-- <td><input onblur="findTotalFloorAwarded()" type="number" min="0" max="2" class="floor_awarded" name="Awarded_AwFloorFloorMarble" id="Awarded_AwFloorFloorMarble"></td>             --}}
                                    <td><input type="text" name="Remark_AwFloorFloorMarble" id="Remark_AwFloorFloorMarble"></td>                   
                                    <td><input type="file" name="Remark_AwFloorFloorMarble" id="Remark_AwFloorFloorMarble"></td>                   
                                  </tr>
                        
                                  <tr>
                                    <td >Carpet</td>
                                    <td >2</td>
                                    <td><input onblur="findTotalFloor()" type="number" min="0" max="2" class="floor" name="AwFloorFloorCarpet" id="AwFloorFloorCarpet"></td>            
                                    {{-- <td><input onblur="findTotalFloorConstruction()" type="number" min="0" max="2" class="floor_construction" name="Cons_AwFloorFloorCarpet" id="Cons_AwFloorFloorCarpet"></td>             --}}
                                    {{-- <td><input onblur="findTotalFloorAwarded()" type="number" min="0" max="2" class="floor_awarded" name="Awarded_AwFloorFloorCarpet" id="Awarded_AwFloorFloorCarpet"></td>             --}}
                                    <td><input type="text" name="Remark_AwFloorFloorCarpet" id="Remark_AwFloorFloorCarpet"></td>                   
                                    <td><input type="file" name="Remark_AwFloorFloorCarpet" id="Remark_AwFloorFloorCarpet"></td>                   
                                  </tr>
                        
                                  <tr>
                                    <td >Carpet underlay</td>
                                    <td >2</td>
                                    <td><input onblur="findTotalFloor()" type="number" min="0" max="2" class="floor" name="AwFloorFloorUnderlay" id="AwFloorFloorUnderlay"></td>            
                                    {{-- <td><input onblur="findTotalFloorConstruction()" type="number" min="0" max="2" class="floor_construction" name="Cons_AwFloorFloorUnderlay" id="Cons_AwFloorFloorUnderlay"></td>             --}}
                                    {{-- <td><input onblur="findTotalFloorAwarded()" type="number" min="0" max="2" class="floor_awarded" name="Awarded_AwFloorFloorUnderlay" id="Awarded_AwFloorFloorUnderlay"></td>             --}}
                                    <td><input type="text" name="Remark_AwFloorFloorUnderlay" id="Remark_AwFloorFloorUnderlay"></td>                    
                                    <td><input type="file" name="Remark_AwFloorFloorUnderlay" id="Remark_AwFloorFloorUnderlay"></td>                    
                                  </tr>
                        
                                  <tr>
                                    <td >Vinyl</td>
                                    <td >2</td>
                                    <td><input onblur="findTotalFloor()" type="number" min="0" max="2" class="floor" name="AwFloorFloorVinyl" id="AwFloorFloorVinyl"></td>            
                                    {{-- <td><input onblur="findTotalFloorConstruction()" type="number" min="0" max="2" class="floor_construction" name="Cons_AwFloorFloorVinyl" id="Cons_AwFloorFloorVinyl"></td>             --}}
                                    {{-- <td><input onblur="findTotalFloorAwarded()" type="number" min="0" max="2" class="floor_awarded" name="Awarded_AwFloorFloorVinyl" id="Awarded_AwFloorFloorVinyl"></td>             --}}
                                    <td><input type="text" name="Remark_AwFloorFloorVinyl" id="Remark_AwFloorFloorVinyl"></td>                   
                                    <td><input type="file" name="Remark_AwFloorFloorVinyl" id="Remark_AwFloorFloorVinyl"></td>                   
                                  </tr>
                        
                                  <tr>
                                    <td >Timber</td>
                                    <td >2</td>
                                    <td><input onblur="findTotalFloor()" type="number" min="0" max="2" class="floor" name="AwFloorFloorTimber" id="AwFloorFloorTimber"></td>            
                                    {{-- <td><input onblur="findTotalFloorConstruction()" type="number" min="0" max="2" class="floor_construction" name="Cons_AwFloorFloorTimber" id="Cons_AwFloorFloorTimber"></td>             --}}
                                    {{-- <td><input onblur="findTotalFloorAwarded()" type="number" min="0" max="2" class="floor_awarded" name="Awarded_AwFloorFloorTimber" id="Awarded_AwFloorFloorTimber"></td>             --}}
                                    <td><input type="text" name="Remark_AwFloorFloorTimber" id="Remark_AwFloorFloorTimber"></td>                   
                                    <td><input type="file" name="Remark_AwFloorFloorTimber" id="Remark_AwFloorFloorTimber"></td>                   
                                  </tr>
                        
                                  <tr>
                                    <td >Interlocking pavers</td>
                                    <td >2</td>
                                    <td><input onblur="findTotalFloor()" type="number" min="0" max="2" class="floor" name="AwFloorFloorPavers" id="AwFloorFloorPavers"></td>            
                                    {{-- <td><input onblur="findTotalFloorConstruction()" type="number" min="0" max="2" class="floor_construction" name="Cons_AwFloorFloorPavers" id="Cons_AwFloorFloorPavers"></td>             --}}
                                    {{-- <td><input onblur="findTotalFloorAwarded()" type="number" min="0" max="2" class="floor_awarded" name="Awarded_AwFloorFloorPavers" id="Awarded_AwFloorFloorPavers"></td>             --}}
                                    <td><input type="text" name="Remark_AwFloorFloorPavers" id="Remark_AwFloorFloorPavers"></td>                    
                                    <td><input type="file" name="Remark_AwFloorFloorPavers" id="Remark_AwFloorFloorPavers"></td>                    
                                  </tr>
                        
                                  <tr>
                                    <td >Pebble wash</td>
                                    <td >2</td>
                                    <td><input onblur="findTotalFloor()" type="number" min="0" max="2" class="floor" name="AwFloorFloorPebble" id="AwFloorFloorPebble"></td>            
                                    {{-- <td><input onblur="findTotalFloorConstruction()" type="number" min="0" max="2" class="floor_construction" name="Cons_AwFloorFloorPebble" id="Cons_AwFloorFloorPebble"></td>             --}}
                                    {{-- <td><input onblur="findTotalFloorAwarded()" type="number" min="0" max="2" class="floor_awarded" name="Awarded_AwFloorFloorPebble" id="Awarded_AwFloorFloorPebble"></td>             --}}
                                    <td><input type="text" name="Remark_AwFloorFloorPebble" id="Remark_AwFloorFloorPebble"></td>                   
                                    <td><input type="file" name="Remark_AwFloorFloorPebble" id="Remark_AwFloorFloorPebble"></td>                   
                                  </tr>
                        
                                  <tr>
                                    <td >Bamboo</td>
                                    <td >2</td>
                                    <td><input onblur="findTotalFloor()" type="number" min="0" max="2" class="floor" name="AwFloorFloorBamboo" id="AwFloorFloorBamboo"></td>            
                                    {{-- <td><input onblur="findTotalFloorConstruction()" type="number" min="0" max="2" class="floor_construction" name="Cons_AwFloorFloorBamboo" id="Cons_AwFloorFloorBamboo"></td>             --}}
                                    {{-- <td><input onblur="findTotalFloorAwarded()" type="number" min="0" max="2" class="floor_awarded" name="Awarded_AwFloorFloorBamboo" id="Awarded_AwFloorFloorBamboo"></td>             --}}
                                    <td><input type="text" name="Remark_AwFloorFloorBamboo" id="Remark_AwFloorFloorBamboo"></td>                  
                                    <td><input type="file" name="Remark_AwFloorFloorBamboo" id="Remark_AwFloorFloorBamboo"></td>                  
                                  </tr>
                        
                                  <tr>
                                    <td >Cement render</td>
                                    <td >2</td>
                                    <td><input onblur="findTotalFloor()" type="number" min="0" max="2" class="floor" name="AwFloorFloorCement" id="AwFloorFloorCement"></td>            
                                    {{-- <td><input onblur="findTotalFloorConstruction()" type="number" min="0" max="2" class="floor_construction" name="Cons_AwFloorFloorCement" id="Cons_AwFloorFloorCement"></td>             --}}
                                    {{-- <td><input onblur="findTotalFloorAwarded()" type="number" min="0" max="2" class="floor_awarded" name="Awarded_AwFloorFloorCement" id="Awarded_AwFloorFloorCement"></td>             --}}
                                    <td><input type="text" name="Remark_AwFloorFloorCement" id="Remark_AwFloorFloorCement"></td>                    
                                    <td><input type="file" name="Remark_AwFloorFloorCement" id="Remark_AwFloorFloorCement"></td>                    
                                  </tr>
                        
                                  <tr>
                                    <td >Marmoleum</td>
                                    <td >2</td>
                                    <td><input onblur="findTotalFloor()" type="number" min="0" max="2" class="floor" name="AwFloorFloorMarmoleum" id="AwFloorFloorMarmoleum"></td>            
                                    {{-- <td><input onblur="findTotalFloorConstruction()" type="number" min="0" max="2" class="floor_construction" name="Cons_AwFloorFloorMarmoleum" id="Cons_AwFloorFloorMarmoleum"></td>             --}}
                                    {{-- <td><input onblur="findTotalFloorAwarded()" type="number" min="0" max="2" class="floor_awarded" name="Awarded_AwFloorFloorMarmoleum" id="Awarded_AwFloorFloorMarmoleum"></td>             --}}
                                    <td><input type="text" name="Remark_AwFloorFloorMarmoleum" id="Remark_AwFloorFloorMarmoleum"></td>                    
                                    <td><input type="file" name="Remark_AwFloorFloorMarmoleum" id="Remark_AwFloorFloorMarmoleum"></td>                    
                                  </tr>
                        
                                  <tr>
                                    <td >Rubber mat(playgrouubd)</td>
                                    <td >2</td>
                                    <td><input onblur="findTotalFloor()" type="number" min="0" max="2" class="floor" name="AwFloorFloorRubber" id="AwFloorFloorRubber"></td>            
                                    {{-- <td><input onblur="findTotalFloorConstruction()" type="number" min="0" max="2" class="floor_construction" name="Cons_AwFloorFloorRubber" id="Cons_AwFloorFloorRubber"></td>             --}}
                                    {{-- <td><input onblur="findTotalFloorAwarded()" type="number" min="0" max="2" class="floor_awarded" name="Awarded_AwFloorFloorRubber" id="Awarded_AwFloorFloorRubber"></td>             --}}
                                    <td><input type="text" name="Remark_AwFloorFloorRubber" id="Remark_AwFloorFloorRubber"></td>                    
                                    <td><input type="file" name="Remark_AwFloorFloorRubber" id="Remark_AwFloorFloorRubber"></td>                    
                                  </tr>
                        
                                  <tr>
                                    <td >Concrete imprint</td>
                                    <td >2</td>
                                    <td><input onblur="findTotalFloor()" type="number" min="0" max="2" class="floor" name="AwFloorFloorConcrete" id="AwFloorFloorConcrete"></td>            
                                    {{-- <td><input onblur="findTotalFloorConstruction()" type="number" min="0" max="2" class="floor_construction" name="Cons_AwFloorFloorConcrete" id="Cons_AwFloorFloorConcrete"></td>             --}}
                                    {{-- <td><input onblur="findTotalFloorAwarded()" type="number" min="0" max="2" class="floor_awarded" name="Awarded_AwFloorFloorConcrete" id="Awarded_AwFloorFloorConcrete"></td>             --}}
                                    <td><input type="text" name="Remark_AwFloorFloorConcrete" id="Remark_AwFloorFloorConcrete"></td>                   
                                    <td><input type="file" name="Remark_AwFloorFloorConcrete" id="Remark_AwFloorFloorConcrete"></td>                   
                                  </tr>
                        
                                  <tr>
                                    <td >Laminated flooring</td>
                                    <td >2</td>
                                    <td><input onblur="findTotalFloor()" type="number" min="0" max="2" class="floor" name="AwFloorFloorLaminate" id="AwFloorFloorLaminate"></td>            
                                    {{-- <td><input onblur="findTotalFloorConstruction()" type="number" min="0" max="2" class="floor_construction" name="Cons_AwFloorFloorLaminate" id="Cons_AwFloorFloorLaminate"></td>             --}}
                                    {{-- <td><input onblur="findTotalFloorAwarded()" type="number" min="0" max="2" class="floor_awarded" name="Awarded_AwFloorFloorLaminate" id="Awarded_AwFloorFloorLaminate"></td>             --}}
                                    <td><input type="text" name="Remark_AwFloorFloorLaminate" id="Remark_AwFloorFloorLaminate"></td>                   
                                    <td><input type="file" name="Remark_AwFloorFloorLaminate" id="Remark_AwFloorFloorLaminate"></td>                   
                                  </tr>
                                  
                                  <tr>
                                    <td rowspan="3">2</td>
                                    <td rowspan="3">Water proofing</td>
                                    <td >Adhesive</td>
                                    <td >2</td>
                                    <td> <input onblur="findTotalFloor()" type="number" min="0" max="2" class="floor" name="AwFloorProofingAdhesive" id="AwFloorProofingAdhesive"></td>            
                                    {{-- <td><input onblur="findTotalFloorConstruction()" type="number" min="0" max="2" class="floor_construction" name="Cons_AwFloorProofingAdhesive" id="Cons_AwFloorProofingAdhesive"></td>             --}}
                                    {{-- <td><input onblur="findTotalFloorAwarded()" type="number" min="0" max="2" class="floor_awarded" name="Awarded_AwFloorProofingAdhesive" id="Awarded_AwFloorProofingAdhesive"></td>             --}}
                                    <td><input type="text" name="Remark_AwFloorProofingAdhesive" id="Remark_AwFloorProofingAdhesive"></td>                    
                                    <td><input type="file" name="Remark_AwFloorProofingAdhesive" id="Remark_AwFloorProofingAdhesive"></td>                    
                                  </tr>
                        
                                  <tr>
                                    <td >Sealant</td>
                                    <td >2</td>
                                    <td><input onblur="findTotalFloor()" type="number" min="0" max="2" class="floor" name="AwFloorProofingSealant" id="AwFloorProofingSealant"></td>            
                                    {{-- <td><input onblur="findTotalFloorConstruction()" type="number" min="0" max="2" class="floor_construction" name="Cons_AwFloorProofingSealant" id="Cons_AwFloorProofingSealant"></td>             --}}
                                    {{-- <td><input onblur="findTotalFloorAwarded()" type="number" min="0" max="2" class="floor_awarded" name="Awarded_AwFloorProofingSealant" id="Awarded_AwFloorProofingSealant"></td>             --}}
                                    <td><input type="text" name="Remark_AwFloorProofingSealant" id="Remark_AwFloorProofingSealant"></td>                  
                                    <td><input type="file" name="Remark_AwFloorProofingSealant" id="Remark_AwFloorProofingSealant"></td>                  
                                  </tr>
                        
                                  <tr>
                                    <td >Grout</td>
                                    <td >2</td>
                                    <td><input onblur="findTotalFloor()" type="number" min="0" max="2" class="floor" name="AwFloorProofingGrout" id="AwFloorProofingGrout"></td>            
                                    {{-- <td><input onblur="findTotalFloorConstruction()" type="number" min="0" max="2" class="floor_construction" name="Cons_AwFloorProofingGrout" id="Cons_AwFloorProofingGrout"></td>             --}}
                                    {{-- <td><input onblur="findTotalFloorAwarded()" type="number" min="0" max="2" class="floor_awarded" name="Awarded_AwFloorProofingGrout" id="Awarded_AwFloorProofingGrout"></td>             --}}
                                    <td><input type="text" name="Remark_AwFloorProofingGrout" id="Remark_AwFloorProofingGrout"></td>                    
                                    <td><input type="file" name="Remark_AwFloorProofingGrout" id="Remark_AwFloorProofingGrout"></td>                    
                                  </tr>
                      
                                  <tr style="display: none">
                                    <td>markahPRAwFloor<input type="text" name="markahPRAwFloor" id="markahPRAwFloor" /></td>
                                  </tr>
                      
                                  <tr style="display: none">
                                    <td> Cons_markahPRAwFloor <input type="text" name="Cons_markahPRAwFloor" id="Cons_markahPRAwFloor" /></td>
                                  </tr>
                      
                                  <tr style="display: none">
                                    <td> Awarded_markahPRAwFloor <input type="text" name="Awarded_markahPRAwFloor" id="Awarded_markahPRAwFloor" /></td>
                                  </tr>
                        
                                  {{-- New table for wall system --}}
                                  <tr class="text-white bg-orange-jkr">
                                    <th colspan="8">List of products for architectural works - System Furniture</th>
                                  </tr>
                        
                                  <tr>
                                    
                                    <td rowspan="5">1</td>
                                    <td rowspan="5">Built in furniture (system furniture)</td>
                                    <td >Office workstation</td>
                                    <td >2</td>
                                    <td> <input onblur="findTotalSystem()" type="number" min="0" max="2" class="prawsystem" name="AwSystemBuiltOffice" id="AwSystemBuiltOffice"></td>            
                                    {{-- <td> <input onblur="findTotalSystemConstruction()" type="number" min="0" max="2" class="prawsystem_construction" name="Cons_AwSystemBuiltOffice" id="Cons_AwSystemBuiltOffice"></td>             --}}
                                    {{-- <td> <input onblur="findTotalSystemAwarded()" type="number" min="0" max="2" class="prawsystem_awarded" name="Awarded_AwSystemBuiltOffice" id="Awarded_AwSystemBuiltOffice"></td>             --}}
                                    <td><input type="text" name="Remark_AwSystemBuiltOffice" id="Remark_AwSystemBuiltOffice"></td> 
                                    <td><input type="file" name="Remark_AwSystemBuiltOffice" id="Remark_AwSystemBuiltOffice"></td> 
                        
                                  </tr>
                        
                                  <tr>
                                    <td >Toilet cubicle</td>
                                    <td >2</td>
                                    <td><input onblur="findTotalSystem()" type="number" min="0" max="2" class="prawsystem " name="AwSystemBuiltToilet" id="AwSystemBuiltToilet"></td>            
                                    {{-- <td> <input onblur="findTotalSystemConstruction()" type="number" min="0" max="2" class="prawsystem_construction" name="Cons_AwSystemBuiltToilet" id="Cons_AwSystemBuiltToilet"></td>             --}}
                                    {{-- <td> <input onblur="findTotalSystemAwarded()" type="number" min="0" max="2" class="prawsystem_awarded" name="Awarded_AwSystemBuiltToilet" id="Awarded_AwSystemBuiltToilet"></td>             --}}
                                    <td><input type="text" name="Remark_AwSystemBuiltToilet" id="Remark_AwSystemBuiltToilet"></td>                   
                                    <td><input type="file" name="Remark_AwSystemBuiltToilet" id="Remark_AwSystemBuiltToilet"></td>                   
                                  </tr>
                        
                                  <tr>
                                    <td >Institutional seating</td>
                                    <td >2</td>
                                    <td><input onblur="findTotalSystem()" type="number" min="0" max="2" class="prawsystem" name="AwSystemBuiltInstitutional" id="AwSystemBuiltInstitutional"></td>            
                                    {{-- <td> <input onblur="findTotalSystemConstruction()" type="number" min="0" max="2" class="prawsystem_construction" name="Cons_AwSystemBuiltInstitutional" id="Cons_AwSystemBuiltInstitutional"></td>             --}}
                                    {{-- <td> <input onblur="findTotalSystemAwarded()" type="number" min="0" max="2" class="prawsystem_awarded" name="Awarded_AwSystemBuiltInstitutional" id="Awarded_AwSystemBuiltInstitutional"></td>             --}}
                                    <td><input type="text" name="Remark_AwSystemBuiltInstitutional" id="Remark_AwSystemBuiltInstitutional"></td>                   
                                    <td><input type="file" name="Remark_AwSystemBuiltInstitutional" id="Remark_AwSystemBuiltInstitutional"></td>                   
                                  </tr>
                        
                                  <tr>
                                    <td >Built-in cupboards</td>
                                    <td >2</td>
                                    <td><input onblur="findTotalSystem()" type="number" min="0" max="2" class="prawsystem" name="AwSystemBuiltCupboards" id="AwSystemBuiltCupboards"></td>            
                                    {{-- <td> <input onblur="findTotalSystemConstruction()" type="number" min="0" max="2" class="prawsystem_construction" name="Cons_AwSystemBuiltCupboards" id="Cons_AwSystemBuiltCupboards"></td>             --}}
                                    {{-- <td> <input onblur="findTotalSystemAwarded()" type="number" min="0" max="2" class="prawsystem_awarded" name="Awarded_AwSystemBuiltCupboards" id="Awarded_AwSystemBuiltCupboards"></td>             --}}
                                    <td><input type="text" name="Remark_AwSystemBuiltCupboards" id="Remark_AwSystemBuiltCupboards"></td>                    
                                    <td><input type="file" name="Remark_AwSystemBuiltCupboards" id="Remark_AwSystemBuiltCupboards"></td>                    
                                  </tr>
                        
                                  <tr>
                                    <td >Sport facilities seating</td>
                                    <td >2</td>
                                    <td><input onblur="findTotalSystem()" type="number" min="0" max="2" class="prawsystem" name="AwSystemBuiltSport" id="AwSystemBuiltSport"></td>            
                                    {{-- <td> <input onblur="findTotalSystemConstruction()" type="number" min="0" max="2" class="prawsystem_construction" name="Cons_AwSystemBuiltSport" id="Cons_AwSystemBuiltSport"></td>             --}}
                                    {{-- <td> <input onblur="findTotalSystemAwarded()" type="number" min="0" max="2" class="prawsystem_awarded" name="Awarded_AwSystemBuiltSport" id="Awarded_AwSystemBuiltSport"></td>             --}}
                                    <td><input type="text" name="Remark_AwSystemBuiltSport" id="Remark_AwSystemBuiltSport"></td>                    
                                    <td><input type="file" name="Remark_AwSystemBuiltSport" id="Remark_AwSystemBuiltSport"></td>                    
                                  </tr>
                      
                                  <tr style="display: none">
                                    <td>markahPRAwSystem<input type="text" name="markahPRAwSystem" id="markahPRAwSystem" /></td>
                                  </tr>
                      
                                  <tr style="display: none">
                                    <td>Cons_markahPRAwSystem<input type="text" name="Cons_markahPRAwSystem" id="Cons_markahPRAwSystem" /></td>
                                  </tr>
                      
                                  <tr style="display: none">
                                    <td>Awarded_markahPRAwSystem<input type="text" name="Awarded_markahPRAwSystem" id="Awarded_markahPRAwSystem" /></td>
                                  </tr>

                                  <tr class="text-center">
                                    <td rowspan="9" >1</td>
                                    <td rowspan="9">Sanitary Features</td>
                                    <td >Tap fitting</td>
                                    <td >2</td>
                                    <td><input onblur="findTotalSanitary()" type="number" min="0" max="2" class="sanitary" name="AwSanitaryTapFitting" id="AwSanitaryTapFitting"></td>            
                                    {{-- <td><input onblur="findTotalSanitaryConstruction()" type="number" min="0" max="2" class="sanitary_construction" name="Cons_AwSanitaryTapFitting" id="Cons_AwSanitaryTapFitting"></td>             --}}
                                    {{-- <td><input onblur="findTotalSanitaryAwarded()" type="number" min="0" max="2" class="sanitary_awarded" name="Awarded_AwSanitaryTapFitting" id="Awarded_AwSanitaryTapFitting"></td>             --}}
                                    <td><input type="text" name="Remark_AwSanitaryTapFitting" id="Remark_AwSanitaryTapFitting"></td>            
                                    <td><input type="file" name="Remark_AwSanitaryTapFitting" id="Remark_AwSanitaryTapFitting"></td>            
                                                       
                                  </tr>
                        
                                  <tr>
                                    <td >Water closet</td>
                                    <td >2</td>
                                    <td><input onblur="findTotalSanitary()" type="number" min="0" max="2" class="sanitary" name="AwSanitaryWaterCloset" id="AwSanitaryWaterCloset"></td>            
                                    {{-- <td><input onblur="findTotalSanitaryConstruction()" type="number" min="0" max="2" class="sanitary_construction" name="Cons_AwSanitaryWaterCloset" id="Cons_AwSanitaryWaterCloset"></td>             --}}
                                    {{-- <td><input onblur="findTotalSanitaryAwarded()" type="number" min="0" max="2" class="sanitary_awarded" name="Awarded_AwSanitaryWaterCloset" id="Awarded_AwSanitaryWaterCloset"></td>             --}}
                                    <td><input type="text" name="Remark_AwSanitaryWaterCloset" id="Remark_AwSanitaryWaterCloset"></td>                   
                                    <td><input type="file" name="Remark_AwSanitaryWaterCloset" id="Remark_AwSanitaryWaterCloset"></td>                   
                                  </tr>
                        
                                  <tr>
                                    
                                    <td >Water basin</td>
                                    <td >2</td>
                                    <td><input onblur="findTotalSanitary()" type="number" min="0" max="2" class="sanitary" name="AwSanitaryWaterBasin" id="AwSanitaryWaterBasin"></td>            
                                    {{-- <td><input onblur="findTotalSanitaryConstruction()" type="number" min="0" max="2" class="sanitary_construction" name="Cons_AwSanitaryWaterBasin" id="Cons_AwSanitaryWaterBasin"></td>             --}}
                                    {{-- <td><input onblur="findTotalSanitaryAwarded()" type="number" min="0" max="2" class="sanitary_awarded" name="Awarded_AwSanitaryWaterBasin" id="Awarded_AwSanitaryWaterBasin"></td>             --}}
                                    <td><input type="text" name="Remark_AwSanitaryWaterBasin" id="Remark_AwSanitaryWaterBasin"></td>                   
                                    <td><input type="file" name="Remark_AwSanitaryWaterBasin" id="Remark_AwSanitaryWaterBasin"></td>                   
                                  </tr>
                        
                                  <tr>
                                    <td >Sink</td>
                                    <td >2</td>
                                    <td><input onblur="findTotalSanitary()" type="number" min="0" max="2" class="sanitary" name="AwSanitarySink" id="AwSanitarySink"></td>            
                                    {{-- <td><input onblur="findTotalSanitaryConstruction()" type="number" min="0" max="2" class="sanitary_construction" name="Cons_AwSanitarySink" id="Cons_AwSanitarySink"></td>             --}}
                                    {{-- <td><input onblur="findTotalSanitaryAwarded()" type="number" min="0" max="2" class="sanitary_awarded" name="Awarded_AwSanitarySink" id="Awarded_AwSanitarySink"></td>             --}}
                                    <td><input type="text" name="Remark_AwSanitarySink" id="Remark_AwSanitarySink"></td>                    
                                    <td><input type="file" name="Remark_AwSanitarySink" id="Remark_AwSanitarySink"></td>                    
                                  </tr>
                        
                                  <tr>
                                    <td >Urinal</td>
                                    <td >2</td>
                                    <td><input onblur="findTotalSanitary()" type="number" min="0" max="2" class="sanitary" name="AwSanitaryUrinal" id="AwSanitaryUrinal"></td>            
                                    {{-- <td><input onblur="findTotalSanitaryConstruction()" type="number" min="0" max="2" class="sanitary_construction" name="Cons_AwSanitaryUrinal" id="Cons_AwSanitaryUrinal"></td>             --}}
                                    {{-- <td><input onblur="findTotalSanitaryAwarded()" type="number" min="0" max="2" class="sanitary_awarded" name="Awarded_AwSanitaryUrinal" id="Awarded_AwSanitaryUrinal"></td>             --}}
                                    <td><input type="text" name="Remark_AwSanitaryUrinal" id="Remark_AwSanitaryUrinal"></td>                    
                                    <td><input type="file" name="Remark_AwSanitaryUrinal" id="Remark_AwSanitaryUrinal"></td>                    
                                  </tr>
                        
                                  <tr>
                                    <td >Bidet</td>
                                    <td >2</td>
                                    <td><input onblur="findTotalSanitary()" type="number" min="0" max="2" class="sanitary" name="AwSanitaryBidet" id="AwSanitaryBidet"></td>            
                                    {{-- <td><input onblur="findTotalSanitaryConstruction()" type="number" min="0" max="2" class="sanitary_construction" name="Cons_AwSanitaryBidet" id="Cons_AwSanitaryBidet"></td>             --}}
                                    {{-- <td><input onblur="findTotalSanitaryAwarded()" type="number" min="0" max="2" class="sanitary_awarded" name="Awarded_AwSanitaryBidet" id="Awarded_AwSanitaryBidet"></td>             --}}
                                    <td><input type="text" name="Remark_AwSanitaryBidet" id="Remark_AwSanitaryBidet"></td>                   
                                    <td><input type="file" name="Remark_AwSanitaryBidet" id="Remark_AwSanitaryBidet"></td>                   
                                  </tr>
                        
                                  <tr>
                                    <td >Floor trap</td>
                                    <td >2</td>
                                    <td><input onblur="findTotalSanitary()" type="number" min="0" max="2" class="sanitary" name="AwSanitaryFloorTrap" id="AwSanitaryFloorTrap"></td>            
                                    {{-- <td><input onblur="findTotalSanitaryConstruction()" type="number" min="0" max="2" class="sanitary_construction" name="Cons_AwSanitaryFloorTrap" id="Cons_AwSanitaryFloorTrap"></td>             --}}
                                    {{-- <td><input onblur="findTotalSanitaryAwarded()" type="number" min="0" max="2" class="sanitary_awarded" name="Awarded_AwSanitaryFloorTrap" id="Awarded_AwSanitaryFloorTrap"></td>             --}}
                                    <td><input type="text" name="Remark_AwSanitaryFloorTrap" id="Remark_AwSanitaryFloorTrap"></td>                    
                                    <td><input type="file" name="Remark_AwSanitaryFloorTrap" id="Remark_AwSanitaryFloorTrap"></td>                    
                                  </tr>
                        
                                  <tr>
                                    <td >Shower</td>
                                    <td >2</td>
                                    <td><input onblur="findTotalSanitary()" type="number" min="0" max="2" class="sanitary" name="AwSanitaryShower" id="AwSanitaryShower"></td>            
                                    {{-- <td><input onblur="findTotalSanitaryConstruction()" type="number" min="0" max="2" class="sanitary_construction" name="Cons_AwSanitaryShower" id="Cons_AwSanitaryShower"></td>             --}}
                                    {{-- <td><input onblur="findTotalSanitaryAwarded()" type="number" min="0" max="2" class="sanitary_awarded" name="Awarded_AwSanitaryShower" id="Awarded_AwSanitaryShower"></td>             --}}
                                    <td><input type="text" name="Remark_AwSanitaryShower" id="Remark_AwSanitaryShower"></td>
                                    <td><input type="file" name="Remark_AwSanitaryShower" id="Remark_AwSanitaryShower"></td>
                                  </tr>
                        
                                  <tr>
                                    <td >Faucet</td>
                                    <td >2</td>
                                    <td><input onblur="findTotalSanitary()" type="number" min="0" max="2" class="sanitary" name="AwSanitaryFaucet" id="AwSanitaryFaucet"></td>            
                                    {{-- <td><input onblur="findTotalSanitaryConstruction()" type="number" min="0" max="2" class="sanitary_construction" name="Cons_AwSanitaryFaucet" id="Cons_AwSanitaryFaucet"></td>             --}}
                                    {{-- <td><input onblur="findTotalSanitaryAwarded()" type="number" min="0" max="2" class="sanitary_awarded" name="Awarded_AwSanitaryFaucet" id="Awarded_AwSanitaryFaucet"></td>             --}}
                                    <td><input type="text" name="Remark_AwSanitaryFaucet" id="Remark_AwSanitaryFaucet"></td>                   
                                    <td><input type="file" name="Remark_AwSanitaryFaucet" id="Remark_AwSanitaryFaucet"></td>                   
                                  </tr>
                      
                                  <tr style="display: none">
                                    <td><input type="text" name="markahPRAwSanitary" id="markahPRAwSanitary" /></td>
                                  </tr>
                      
                                  <tr style="display: none">
                                    <td>Cons_markahPRAwSanitary<input type="text" name="Cons_markahPRAwSanitary" id="Cons_markahPRAwSanitary" /></td>
                                  </tr>
                      
                                  <tr style="display: none">
                                    <td>Awarded_markahPRAwSanitary<input type="text" name="Awarded_markahPRAwSanitary" id="Awarded_markahPRAwSanitary" /></td>
                                  </tr>

                                  <thead class="text-white bg-orange-jkr">
            
                                    <tr>
                                      <th colspan="8">List of products for civil works</th>
                                    </tr>
                                    <tr>
                                      <th>No.</th>
                                      <th >Component</th>
                                      <th>Product</th>
                                      <th>Point Allocated</th>
                                      <th>Point Requested (design)</th>
                                      {{-- <th>Point Requested (construction)</th>
                                      <th>Point Awarded</th> --}}
                                      <th >Remark</th>
                                      <th >Supporting Documents</th>
                                    </tr>
                                  </thead>

                                  <tr class="text-center">
                                    <td rowspan="6" >1</td>
                                    <td rowspan="6">Common items</td>
                                    <td >Cement</td>
                                    <td >2</td>
                                    <td>
                                      <input onblur="findTotalmarkahPRCw()" type="number" min="0" max="2" class="civil" name="CwCommonCement" id="CwCommonCement">
                                    </td>            
                                             
                                    <td><input type="text" name="CwCommonCement" id="CwCommonCement"></td>                    
                                    <td><input type="file" name="CwCommonCement" id="CwCommonCement"></td>                    
                                  </tr>
                    
                                  <tr>
                                    <td >Timber</td>
                                    <td >2</td>
                                    <td>
                                      <input onblur="findTotalmarkahPRCw()" type="number" min="0" max="2" class="civil" name="CwCommonTimber" id="CwCommonTimber">
                                    </td>            
                                             
                                    <td><input type="text" name="CwCommonTimber" id="CwCommonTimber"></td>                    
                                    <td><input type="file" name="CwCommonTimber" id="CwCommonTimber"></td>                    
                                  </tr>
                    
                                  <tr>
                                    <td >Reinforcement bar</td>
                                    <td >2</td>
                                    <td>
                                      <input onblur="findTotalmarkahPRCw()" type="number" min="0" max="2" class="civil" name="CwCommonBar" id="CwCommonBar">
                                    </td>            
                                              
                                    <td><input type="text" name="CwCommonBar" id="CwCommonBar"></td>                    
                                    <td><input type="file" name="CwCommonBar" id="CwCommonBar"></td>                    
                                  </tr>
                    
                                  <tr>
                                    <td >Sand</td>
                                    <td >2</td>
                                    <td>
                                      <input onblur="findTotalmarkahPRCw()" type="number" min="0" max="2" class="civil" name="CwCommonSand" id="CwCommonSand">
                                    </td>            
                                              
                                    <td><input type="text" name="CwCommonSand" id="CwCommonSand"></td>                    
                                    <td><input type="file" name="CwCommonSand" id="CwCommonSand"></td>                    
                                  </tr>
                    
                                  <tr>
                                    <td >Aggregate</td>
                                    <td >2</td>
                                    <td>
                                      <input onblur="findTotalmarkahPRCw()" type="number" min="0" max="2" class="civil" name="CwCommonAggregate" id="CwCommonAggregate">
                                    </td>            
                                             
                                    <td><input type="text" name="CwCommonAggregate" id="CwCommonAggregate"></td>                    
                                    <td><input type="file" name="CwCommonAggregate" id="CwCommonAggregate"></td>                    
                                  </tr>
                    
                                  <tr>
                                    <td >Stone/rock</td>
                                    <td >2</td>
                                    <td>
                                      <input onblur="findTotalmarkahPRCw()" type="number" min="0" max="2" class="civil" name="CwCommonStone" id="CwCommonStone">
                                    </td>            
                                              
                                    <td><input type="text" name="CwCommonStone" id="CwCommonStone"></td>                    
                                    <td><input type="file" name="CwCommonStone" id="CwCommonStone"></td>                    
                                  </tr>
                    
                                  <tr class="text-center">
                                    <td rowspan="6" >2</td>
                                    <td rowspan="6">Earthworks/erosion sediment control</td>
                                    <td >Geotextile</td>
                                    <td >2</td>
                                    <td>
                                      <input onblur="findTotalmarkahPRCw()" type="number" min="0" max="2" class="civil" name="CwEarthworksGeotextile" id="CwEarthworksGeotextile">
                                    </td>            
                                               
                                    <td><input type="text" name="CwEarthworksGeotextile" id="CwEarthworksGeotextile"></td>                    
                                    <td><input type="file" name="CwEarthworksGeotextile" id="CwEarthworksGeotextile"></td>                    
                                  </tr>
                    
                                  <tr>
                                    <td >Erosion mat</td>
                                    <td >2</td>
                                    <td>
                                      <input onblur="findTotalmarkahPRCw()" type="number" min="0" max="2" class="civil" name="CwEarthworksErosion" id="CwEarthworksErosion">
                                    </td>            
                                               
                                    <td><input type="text" name="CwEarthworksErosion" id="CwEarthworksErosion"></td>                    
                                    <td><input type="file" name="CwEarthworksErosion" id="CwEarthworksErosion"></td>                    
                                  </tr>
                    
                                  <tr>
                                    <td >Geogrid</td>
                                    <td >2</td>
                                    <td>
                                      <input onblur="findTotalmarkahPRCw()" type="number" min="0" max="2" class="civil" name="CwEarthworksGeogrid" id="CwEarthworksGeogrid">
                                    </td>            
                                              
                                    <td><input type="text" name="CwEarthworksGeogrid" id="CwEarthworksGeogrid"></td>                    
                                    <td><input type="file" name="CwEarthworksGeogrid" id="CwEarthworksGeogrid"></td>                    
                                  </tr>
                    
                                  <tr>
                                    <td >Mulching</td>
                                    <td >2</td>
                                    <td>
                                      <input onblur="findTotalmarkahPRCw()" type="number" min="0" max="2" class="civil" name="CwEarthworksMulching" id="CwEarthworksMulching">
                                    </td>            
                                               
                                    <td><input type="text" name="CwEarthworksMulching" id="CwEarthworksMulching"></td>                    
                                    <td><input type="file" name="CwEarthworksMulching" id="CwEarthworksMulching"></td>                    
                                  </tr>
                    
                                  <tr>
                                    <td >Gabion</td>
                                    <td >2</td>
                                    <td>
                                      <input onblur="findTotalmarkahPRCw()" type="number" min="0" max="2" class="civil" name="CwEarthworksGabion" id="CwEarthworksGabion">
                                    </td>            
                                              
                                    <td><input type="text" name="CwEarthworksGabion" id="CwEarthworksGabion"></td>                    
                                    <td><input type="file" name="CwEarthworksGabion" id="CwEarthworksGabion"></td>                    
                                  </tr>
                    
                                  <tr>
                                    <td >Hydroseeding</td>
                                    <td >2</td>
                                    <td>
                                      <input onblur="findTotalmarkahPRCw()" type="number" min="0" max="2" class="civil" name="CwEarthworksHydroseeding" id="CwEarthworksHydroseeding">
                                    </td>            
                                             
                                    <td><input type="text" name="CwEarthworksHydroseeding" id="CwEarthworksHydroseeding"></td>                    
                                    <td><input type="file" name="CwEarthworksHydroseeding" id="CwEarthworksHydroseeding"></td>                    
                                  </tr>
                    
                                  <tr class="text-center">
                                    <td rowspan="6" >3</td>
                                    <td rowspan="6">Drainage works</td>
                                    <td >Drain culvert</td>
                                    <td >2</td>
                                    <td>
                                      <input onblur="findTotalmarkahPRCw()" type="number" min="0" max="2" class="civil" name="CwDrainageCulvert" id="CwDrainageCulvert">
                                    </td>            
                                               
                                    <td><input type="text" name="CwDrainageCulvert" id="CwDrainageCulvert"></td>                    
                                    <td><input type="file" name="CwDrainageCulvert" id="CwDrainageCulvert"></td>                    
                                  </tr>
                    
                                  <tr>
                                    <td >Sump</td>
                                    <td >2</td>
                                    <td>
                                      <input onblur="findTotalmarkahPRCw()" type="number" min="0" max="2" class="civil" name="CwDrainageSump" id="CwDrainageSump">
                                    </td>            
                                               
                                    <td><input type="text" name="CwDrainageSump" id="CwDrainageSump"></td>                    
                                    <td><input type="file" name="CwDrainageSump" id="CwDrainageSump"></td>                    
                                  </tr>
                    
                                  <tr>
                                    <td >Pipe</td>
                                    <td >2</td>
                                    <td>
                                      <input onblur="findTotalmarkahPRCw()" type="number" min="0" max="2" class="civil" name="CwDrainagePipe" id="CwDrainagePipe">
                                    </td>            
                                               
                                    <td><input type="text" name="CwDrainagePipe" id="CwDrainagePipe"></td>                    
                                    <td><input type="file" name="CwDrainagePipe" id="CwDrainagePipe"></td>                    
                                  </tr>
                    
                                  <tr>
                                    <td >Modular tank</td>
                                    <td >2</td>
                                    <td>
                                      <input onblur="findTotalmarkahPRCw()" type="number" min="0" max="2" class="civil" name="CwDrainageTank" id="CwDrainageTank">
                                    </td>            
                                              
                                    <td><input type="text" name="CwDrainageTank" id="CwDrainageTank"></td>                    
                                    <td><input type="file" name="CwDrainageTank" id="CwDrainageTank"></td>                    
                                  </tr>
                    
                                  <tr>
                                    <td >Geotextile</td>
                                    <td >2</td>
                                    <td>
                                      <input onblur="findTotalmarkahPRCw()" type="number" min="0" max="2" class="civil" name="CwDrainageGeotextile" id="CwDrainageGeotextile">
                                    </td>            
                                              
                                    <td><input type="text" name="CwDrainageGeotextile" id="CwDrainageGeotextile"></td>                    
                                    <td><input type="file" name="CwDrainageGeotextile" id="CwDrainageGeotextile"></td>                    
                                  </tr>
                    
                                  <tr>
                                    <td >Grating</td>
                                    <td >2</td>
                                    <td>
                                      <input onblur="findTotalmarkahPRCw()" type="number" min="0" max="2" class="civil" name="CwDrainageGrating" id="CwDrainageGrating">
                                    </td>            
                                               
                                    <td><input type="text" name="CwDrainageGrating" id="CwDrainageGrating"></td>                    
                                    <td><input type="file" name="CwDrainageGrating" id="CwDrainageGrating"></td>                    
                                  </tr>
                    
                                  <tr class="text-center">
                                    <td rowspan="15" >7</td>
                                    <td rowspan="15">Pavement/road furniture</td>
                                    <td >Asphalt concrete</td>
                                    <td >2</td>
                                    <td><input onblur="findTotalmarkahPRCw()" type="number" min="0" max="2" class="civil" name="" id=""></td>            
                                               
                                    <td><input type="text" name="" id=""></td>                    
                                    <td><input type="file" name="" id=""></td>                    
                                  </tr>
                    
                                  <tr>
                                    <td >Porous asphalt</td>
                                    <td >2</td>
                                    <td><input onblur="findTotalmarkahPRCw()" type="number" min="0" max="2" class="civil" name="" id=""></td>            
                                             
                                    <td><input type="text" name="" id=""></td>                    
                                    <td><input type="file" name="" id=""></td>                    
                                  </tr>
                    
                                  <tr>
                                    <td >Prime coat</td>
                                    <td >2</td>
                                    <td>
                                      <input onblur="findTotalmarkahPRCw()" type="number" min="0" max="2" class="civil" name="CwPavementsPrime" id="CwPavementsPrime">
                                    </td>            
                                            
                                    <td><input type="text" name="CwPavementsPrime" id="CwPavementsPrime"></td>                    
                                    <td><input type="file" name="CwPavementsPrime" id="CwPavementsPrime"></td>                    
                                  </tr>
                    
                                  <tr>
                                    <td >Tack coat</td>
                                    <td >2</td>
                                    <td>
                                      <input onblur="findTotalmarkahPRCw()" type="number" min="0" max="2" class="civil" name="CwPavementsTack" id="CwPavementsTack">
                                    </td>            
                                               
                                    <td><input type="text" name="CwPavementsTack" id="CwPavementsTack"></td>                    
                                    <td><input type="file" name="CwPavementsTack" id="CwPavementsTack"></td>                    
                                  </tr>
                    
                                  <tr>
                                    <td >Retroreflective sheeting</td>
                                    <td >2</td>
                                    <td>
                                      <input onblur="findTotalmarkahPRCw()" type="number" min="0" max="2" class="civil" name="" id="">
                                    </td>            
                                              
                                    <td><input type="text" name="" id=""></td>                    
                                    <td><input type="file" name="" id=""></td>                    
                                  </tr>
                    
                                  <tr>
                                    <td >Road paint</td>
                                    <td >2</td>
                                    <td>
                                      <input onblur="findTotalmarkahPRCw()" type="number" min="0" max="2" class="civil" name="CwRoadPaint" id="CwRoadPaint">
                                    </td>            
                                               
                                    <td><input type="text" name="CwRoadPaint" id="CwRoadPaint"></td>                    
                                    <td><input type="file" name="CwRoadPaint" id="CwRoadPaint"></td>                    
                                  </tr>
                    
                                  <tr>
                                    <td >Paver block</td>
                                    <td >2</td>
                                    <td>
                                      <input onblur="findTotalmarkahPRCw()" type="number" min="0" max="2" class="civil" name="" id="">
                                    </td>            
                                             
                                    <td><input type="text" name="" id=""></td>                    
                                    <td><input type="file" name="" id=""></td>                    
                                  </tr>
                    
                                  <tr>
                                    <td >Permeable paver</td>
                                    <td >2</td>
                                    <td>
                                      <input onblur="findTotalmarkahPRCw()" type="number" min="0" max="2" class="civil" name="" id="">
                                    </td>            
                                               
                                    <td><input type="text" name="" id=""></td>                    
                                    <td><input type="file" name="" id=""></td>                    
                                  </tr>
                    
                                  <tr>
                                    <td >Kerb</td>
                                    <td >2</td>
                                    <td>
                                      <input onblur="findTotalmarkahPRCw()" type="number" min="0" max="2" class="civil" name="" id="">
                                    </td>            
                                              
                                    <td><input type="text" name="" id=""></td>                    
                                    <td><input type="file" name="" id=""></td>                    
                                  </tr>
                    
                                  <tr>
                                    <td >Road stud</td>
                                    <td >2</td>
                                    <td>
                                      <input onblur="findTotalmarkahPRCw()" type="number" min="0" max="2" class="civil" name="CwRoadStud" id="CwRoadStud">
                                    </td>            
                                           
                                    <td><input type="text" name="CwRoadStud" id="CwRoadStud"></td>                    
                                    <td><input type="file" name="CwRoadStud" id="CwRoadStud"></td>                    
                                  </tr>
                    
                                  <tr>
                                    <td >Chevron delineator</td>
                                    <td >2</td>
                                    <td>
                                      <input onblur="findTotalmarkahPRCw()" type="number" min="0" max="2" class="civil" name="CwRoadChevron" id="CwRoadChevron">
                                    </td>            
                                              
                                    <td><input type="text" name="CwRoadChevron" id="CwRoadChevron"></td>                    
                                    <td><input type="file" name="CwRoadChevron" id="CwRoadChevron"></td>                    
                                  </tr>
                    
                                  <tr>
                                    <td >Guardrail</td>
                                    <td >2</td>
                                    <td>
                                      <input onblur="findTotalmarkahPRCw()" type="number" min="0" max="2" class="civil" name="CwRoadGuardrails" id="CwRoadGuardrails">
                                    </td>            
                                               
                                    <td><input type="text" name="CwRoadGuardrails" id="CwRoadGuardrails"></td>                    
                                    <td><input type="file" name="CwRoadGuardrails" id="CwRoadGuardrails"></td>                    
                                  </tr>
                    
                                  <tr>
                                    <td >Railing</td>
                                    <td >2</td>
                                    <td>
                                      <input onblur="findTotalmarkahPRCw()" type="number" min="0" max="2" class="civil" name="CwRoadRailings" id="CwRoadRailings">
                                    </td>            
                                              
                                    <td><input type="text" name="CwRoadRailings" id="CwRoadRailings"></td>                    
                                    <td><input type="file" name="CwRoadRailings" id="CwRoadRailings"></td>                    
                                  </tr>
                    
                                  <tr>
                                    <td >Wire rope</td>
                                    <td >2</td>
                                    <td>
                                      <input onblur="findTotalmarkahPRCw()" type="number" min="0" max="2" class="civil" name="CwRoadGuardrails" id="CwRoadGuardrails">
                                    </td>            
                                              
                                    <td><input type="text" name="CwRoadGuardrails" id="CwRoadGuardrails"></td>                    
                                    <td><input type="file" name="CwRoadGuardrails" id="CwRoadGuardrails"></td>                    
                                  </tr>
                    
                                  <tr>
                                    <td >Signages</td>
                                    <td >2</td>
                                    <td>
                                      <input onblur="findTotalmarkahPRCw()" type="number" min="0" max="2" class="civil" name="CwRoadSignages" id="CwRoadSignages">
                                    </td>            
                                               
                                    <td><input type="text" name="CwRoadSignages" id="CwRoadSignages"></td>                    
                                    <td><input type="file" name="CwRoadSignages" id="CwRoadSignages"></td>                    
                                  </tr>
                    
                                  <tr class="text-center">
                                    <td rowspan="7" >5</td>
                                    <td rowspan="7">Water reticulation works</td>
                                    <td >Pipes</td>
                                    <td >2</td>
                                    <td><input onblur="findTotalmarkahPRCw()" type="number" min="0" max="2" class="civil" name="CwWaterPipes" id="CwWaterPipes"></td>            
                                              
                                    <td><input type="text" name="CwWaterPipes" id="CwWaterPipes"></td>                    
                                    <td><input type="file" name="CwWaterPipes" id="CwWaterPipes"></td>                    
                                  </tr>
                    
                                  <tr>
                                    <td >Bulk meter</td>
                                    <td >2</td>
                                    <td><input onblur="findTotalmarkahPRCw()" type="number" min="0" max="2" class="civil" name="CwWaterBulk" id="CwWaterBulk"></td>            
                                               
                                    <td><input type="text" name="CwWaterBulk" id="CwWaterBulk"></td>                    
                                    <td><input type="file" name="CwWaterBulk" id="CwWaterBulk"></td>                    
                                  </tr>
                    
                                  <tr>
                                    <td >Valves</td>
                                    <td >2</td>
                                    <td>
                                      <input onblur="findTotalmarkahPRCw()" type="number" min="0" max="2" class="civil" name="CwWaterValves" id="CwWaterValves">
                                    </td>            
                                              
                                    <td><input type="text" name="CwWaterValves" id="CwWaterValves"></td>                    
                                    <td><input type="file" name="CwWaterValves" id="CwWaterValves"></td>                    
                                  </tr>
                    
                                  <tr>
                                    <td >Tank</td>
                                    <td >2</td>
                                    <td>
                                      <input onblur="findTotalmarkahPRCw()" type="number" min="0" max="2" class="civil" name="CwWaterTank" id="CwWaterTank">
                                    </td>            
                                              
                                    <td><input type="text" name="CwWaterTank" id="CwWaterTank"></td>                    
                                    <td><input type="file" name="CwWaterTank" id="CwWaterTank"></td>                    
                                  </tr>
                    
                                  <tr>
                                    <td >Pump</td>
                                    <td >2</td>
                                    <td>
                                      <input onblur="findTotalmarkahPRCw()" type="number" min="0" max="2" class="civil" name="CwWaterPump" id="CwWaterPump">
                                    </td>            
                                             
                                    <td><input type="text" name="CwWaterPump" id="CwWaterPump"></td>                    
                                    <td><input type="file" name="CwWaterPump" id="CwWaterPump"></td>                    
                                  </tr>
                    
                                  <tr>
                                    <td >First flush filter</td>
                                    <td >2</td>
                                    <td>
                                      <input onblur="findTotalmarkahPRCw()" type="number" min="0" max="2" class="civil" name="CwWaterFirstFlush" id="CwWaterFirstFlush">
                                    </td>            
                                             
                                    <td><input type="text" name="CwWaterFirstFlush" id="CwWaterFirstFlush"></td>                    
                                    <td><input type="file" name="CwWaterFirstFlush" id="CwWaterFirstFlush"></td>                    
                                  </tr>
                    
                                  <tr>
                                    <td >Sand filter</td>
                                    <td >2</td>
                                    <td>
                                      <input onblur="findTotalmarkahPRCw()" type="number" min="0" max="2" class="civil" name="CwWaterSand" id="CwWaterSand">
                                    </td>            
                                              
                                    <td><input type="text" name="CwWaterSand" id="CwWaterSand"></td>                    
                                    <td><input type="file" name="CwWaterSand" id="CwWaterSand"></td>                    
                                  </tr>
                    
                                  <tr class="text-center">
                                    <td rowspan="4" >6</td>
                                    <td rowspan="4">Sewerage works</td>
                                    <td >Pipes</td>
                                    <td >2</td>
                                    <td><input onblur="findTotalmarkahPRCw()" type="number" min="0" max="2" class="civil" name="CwSeveragePipes" id="CwSeveragePipes"></td>            
                                              
                                    <td><input type="text" name="CwSeveragePipes" id="CwSeveragePipes"></td>                    
                                    <td><input type="file" name="CwSeveragePipes" id="CwSeveragePipes"></td>                    
                                  </tr>
                    
                                  <tr>
                                    <td >Tank</td>
                                    <td >2</td>
                                    <td><input onblur="findTotalmarkahPRCw()" type="number" min="0" max="2" class="civil" name="CwSeverageTank" id="CwSeverageTank"></td>            
                                             
                                    <td><input type="text" name="CwSeverageTank" id="CwSeverageTank"></td>                    
                                    <td><input type="file" name="CwSeverageTank" id="CwSeverageTank"></td>                    
                                  </tr>
                    
                                  <tr>
                                    <td >Pump</td>
                                    <td >2</td>
                                    <td>
                                      <input onblur="findTotalmarkahPRCw()" type="number" min="0" max="2" class="civil" name="CwSeveragePump" id="CwSeveragePump">
                                    </td>            
                                              
                                    <td><input type="text" name="CwSeveragePump" id="CwSeveragePump"></td>                    
                                    <td><input type="file" name="CwSeveragePump" id="CwSeveragePump"></td>                    
                                  </tr>
                    
                                  <tr>
                                    <td >Manhole</td>
                                    <td >2</td>
                                    <td>
                                      <input onblur="findTotalmarkahPRCw()" type="number" min="0" max="2" class="civil" name="CwSeverageManhole" id="CwSeverageManhole">
                                    </td>            
                                             
                                    <td><input type="text" name="CwSeverageManhole" id="CwSeverageManhole"></td>                    
                                    <td><input type="file" name="CwSeverageManhole" id="CwSeverageManhole"></td>                    
                                  </tr>
                    
                                  <tr style="display: none">
                                    <td><input type="text" name="markahPRCw" id="markahPRCw" /></td>
                                  </tr>

                                  <tr class="text-center">
                                    <td rowspan="5" >1</td>
                                    <td rowspan="5">Common items</td>
                                    <td >Cement</td>
                                    <td >2</td>
                                    <td><input onblur="findTotalmarkahPRSw()" type="number" min="0" max="2" class="structure" name="SwCommonCement" id="SwCommonCement"></td>            
                                                
                                    <td><input type="text"></td>                    
                                    <td><input type="file"></td>                    
                                  </tr>
                      
                                  <tr>
                                    <td >Reinforcement bar</td>
                                    <td >2</td>
                                    <td>
                                      <input onblur="findTotalmarkahPRSw()" type="number" min="0" max="2" class="structure" name="SwCommonBar" id="SwCommonBar">
                                    </td>            
                                               
                                    <td><input type="text"></td>                    
                                    <td><input type="file"></td>                    
                                  </tr>
                      
                                  <tr>
                                    <td >Sand</td>
                                    <td >2</td>
                                    <td>
                                      <input onblur="findTotalmarkahPRSw()" type="number" min="0" max="2" class="structure" name="SwCommonSand" id="SwCommonSand">
                                    </td>            
                                              
                                    <td><input type="text"></td>                    
                                    <td><input type="file"></td>                    
                                  </tr>
                      
                                  <tr>
                                    <td >Aggregate</td>
                                    <td >2</td>
                                    <td>
                                      <input onblur="findTotalmarkahPRSw()" type="number" min="0" max="2" class="structure" name="SwCommonAggregate" id="SwCommonAggregate">
                                    </td>            
                                              
                                    <td><input type="text"></td>                    
                                    <td><input type="file"></td>                    
                                  </tr>
                      
                                  <tr>
                                    <td >Timber</td>
                                    <td >2</td>
                                    <td>
                                      <input onblur="findTotalmarkahPRSw()" type="number" min="0" max="2" class="structure" name="SwCommonTimber" id="SwCommonTimber">
                                    </td>            
                                             
                                    <td><input type="text"></td>                    
                                    <td><input type="file"></td>                    
                                  </tr>
                        
                                    <tr class="text-center">
                                      <td rowspan="7" >2</td>
                                      <td rowspan="7">Super structure</td>
                                      <td >Concrete</td>
                                      <td >2</td>
                                      <td>
                                        <input onblur="findTotalmarkahPRSw()" type="number" min="0" max="2" class="structure" name="SwSuperConcrete" id="SwSuperConcrete">
                                      </td>            
                                                
                                      <td><input type="text"></td>                    
                                      <td><input type="file"></td>                    
                                    </tr>
                      
                                    <tr>
                                      <td >Reinforcement bar</td>
                                      <td >2</td>
                                      <td>
                                        <input onblur="findTotalmarkahPRSw()" type="number" min="0" max="2" class="structure" name="SwSuperBar" id="SwSuperBar">
                                      </td>            
                                               
                                      <td><input type="text"></td>                    
                                      <td><input type="file"></td>                    
                                    </tr>
                      
                                    <tr>
                                      <td >Steel</td>
                                      <td >2</td>
                                      <td>
                                        <input onblur="findTotalmarkahPRSw()" type="number" min="0" max="2" class="structure" name="SwSuperSteel" id="SwSuperSteel">
                                      </td>            
                                                
                                      <td><input type="text"></td>                    
                                      <td><input type="file"></td>                    
                                    </tr>
                      
                                    <tr>
                                      <td >Water stop</td>
                                      <td >2</td>
                                      <td>
                                        <input onblur="findTotalmarkahPRSw()" type="number" min="0" max="2" class="structure" name="SwSuperWater" id="SwSuperWater">
                                      </td>            
                                                
                                      <td><input type="text"></td>                    
                                      <td><input type="file"></td>                    
                                    </tr>
                      
                                    <tr>
                                      <td >Damp proof membrane</td>
                                      <td >2</td>
                                      <td>
                                        <input onblur="findTotalmarkahPRSw()" type="number" min="0" max="2" class="structure" name="SwSuperDamp" id="SwSuperDamp">
                                      </td>            
                                              
                                      <td><input type="text"></td>                    
                                      <td><input type="file"></td>                    
                                    </tr>
                      
                                    <tr>
                                      <td >Plastic sheeting</td>
                                      <td >2</td>
                                      <td>
                                        <input onblur="findTotalmarkahPRSw()" type="number" min="0" max="2" class="structure" name="SwSuperPlastic" id="SwSuperPlastic">
                                      </td>            
                                                
                                      <td><input type="text"></td>                    
                                      <td><input type="file"></td>                    
                                    </tr>
                      
                                    <tr>
                                      <td >Sealant</td>
                                      <td >2</td>
                                      <td>
                                        <input onblur="findTotalmarkahPRSw()" type="number" min="0" max="2" class="structure" name="SwSuperSealant" id="SwSuperSealant">
                                      </td>            
                                                  
                                      <td><input type="text"></td>                    
                                      <td><input type="file"></td>                    
                                    </tr>
                      
                                    <tr class="text-center">
                                      <td rowspan="6" >3</td>
                                      <td rowspan="6">Roof trusses</td>
                                      <td >Steel</td>
                                      <td >2</td>
                                      <td>
                                        <input onblur="findTotalmarkahPRSw()" type="number" min="0" max="2" class="structure" name="SwRoofSteel" id="SwRoofSteel">
                                      </td>            
                                                 
                                      <td><input type="text"></td>                    
                                      <td><input type="file"></td>                    
                                    </tr>
                      
                                    <tr>
                                      <td >Timber</td>
                                      <td >2</td>
                                      <td>
                                        <input onblur="findTotalmarkahPRSw()" type="number" min="0" max="2" class="structure" name="SwRoofTimber" id="SwRoofTimber">
                                      </td>            
                                                  
                                      <td><input type="text"></td>                    
                                      <td><input type="file"></td>                    
                                    </tr>
                      
                                    <tr>
                                      <td >Aluminium</td>
                                      <td >2</td>
                                      <td>
                                        <input onblur="findTotalmarkahPRSw()" type="number" min="0" max="2" class="structure" name="SwRoofAluminium" id="SwRoofAluminium">
                                      </td>            
                                               
                                      <td><input type="text"></td>                    
                                      <td><input type="file"></td>                    
                                    </tr>
                      
                                    <tr>
                                      <td >Bolt</td>
                                      <td >2</td>
                                      <td>
                                        <input onblur="findTotalmarkahPRSw()" type="number" min="0" max="2" class="structure" name="SwRoofBolt" id="SwRoofBolt">
                                      </td>            
                                                 
                                      <td><input type="text"></td>                    
                                      <td><input type="file"></td>                    
                                    </tr>
                      
                                    <tr>
                                      <td >Plates</td>
                                      <td >2</td>
                                      <td>
                                        <input onblur="findTotalmarkahPRSw()" type="number" min="0" max="2" class="structure" name="SwRoofPlates" id="SwRoofPlates">
                                      </td>            
                                                 
                                      <td><input type="text"></td>                    
                                      <td><input type="file"></td>                    
                                    </tr>
                      
                                    <tr>
                                      <td >Membrane</td>
                                      <td >2</td>
                                      <td>
                                        <input onblur="findTotalmarkahPRSw()" type="number" min="0" max="2" class="structure" name="SwRoofMembrane" id="SwRoofMembrane">
                                      </td>            
                                               
                                      <td><input type="text"></td>                    
                                      <td><input type="file"></td>                    
                                    </tr>
                      
                                    <tr style="display: none">
                                      <td><input type="text" name="markahPRSw" id="markahPRSw" /></td>
                                    </tr>

                                    <thead class="text-white bg-orange-jkr">
            
                                        <tr>
                                          <th colspan="8">List of products for electrical works</th>
                                        </tr>
                                        <tr>
                                          <th>No.</th>
                                          <th >Component</th>
                                          <th>Product</th>
                                          <th>Point Allocated</th>
                                          <th>Point Requested (design)</th>
                                          {{-- <th>Point Requested (construction)</th>
                                          <th>Point Awarded</th> --}}
                                          <th >Remark</th>
                                          <th >Supporting Documents</th>
                                        </tr>
                                      </thead>

                                      <tr class="text-center">
                                        <td rowspan="1" >1</td>
                                        <td rowspan="1">Generator set</td>
                                        <td >Generator set</td>
                                        <td >2</td>
                                        <td>
                                          <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwGeneratorSet" id="EwGeneratorSet">
                                        </td>                       
                                        <td><input type="text" name="EwGeneratorSet" id="EwGeneratorSet"></td>                    
                                        <td><input type="file" name="EwGeneratorSet" id="EwGeneratorSet"></td>                    
                                      </tr>
                            
                                      
                            
                            
                                      <tr class="text-center">
                                          <td rowspan="1" >2</td>
                                          <td rowspan="1">Transformer</td>
                                          <td >11kV dry type distribution transformer</td>
                                          <td >2</td>
                                          <td>
                                            <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwTransformer" id="EwTransformer">
                                          </td>            
                                                   
                                          <td><input type="text" name="EwTransformer" id="EwTransformer"></td>                    
                                          <td><input type="file" name="EwTransformer" id="EwTransformer"></td>                    
                                        </tr>
                          
                                        <tr class="text-center">
                                          <td rowspan="1" >3</td>
                                          <td rowspan="1">Surge Protective Device (PSD)</td>
                                          <td >Surge Protective Device (PSD)</td>
                                          <td >2</td>
                                          <td>
                                            <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwSPD" id="EwSPD">
                                          </td>            
                                                    
                                          <td><input type="text" name="EwSPD" id="EwSPD"></td>                    
                                          <td><input type="file" name="EwSPD" id="EwSPD"></td>                    
                                        </tr>
                          
                                        <tr class="text-center">
                                          <td rowspan="4" >5</td>
                                          <td rowspan="4">Protection relays</td>
                                          <td >Combined overcurrent and earth fault relay</td>
                                          <td >2</td>
                                          <td>
                                            <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwRelayCombined" id="EwRelayCombined">
                                          </td>            
                                                   
                                          <td><input type="text" name="EwRelayCombined" id="EwRelayCombined"></td>                    
                                          <td><input type="file" name="EwRelayCombined" id="EwRelayCombined"></td>                    
                                        </tr>
                          
                                        <tr>
                                          <td >Overcurrent relay</td>
                                          <td >2</td>
                                          <td>
                                            <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwRelayOvercurrent" id="EwRelayOvercurrent">
                                          </td>            
                                                    
                                          <td><input type="text" name="EwRelayOvercurrent" id="EwRelayOvercurrent"></td>                    
                                          <td><input type="file" name="EwRelayOvercurrent" id="EwRelayOvercurrent"></td>                    
                                        </tr>
                          
                                        <tr>
                                          <td >Earth fault relay</td>
                                          <td >2</td>
                                          <td>
                                            <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwRelayEarthFault" id="EwRelayEarthFault">
                                          </td>            
                                                   
                                          <td><input type="text" name="EwRelayEarthFault" id="EwRelayEarthFault"></td>                    
                                          <td><input type="file" name="EwRelayEarthFault" id="EwRelayEarthFault"></td>                    
                                        </tr>
                          
                                        <tr>
                                          <td >Earth fault leakage</td>
                                          <td >2</td>
                                          <td>
                                            <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwRelayEarthLeakage" id="EwRelayEarthLeakage">
                                          </td>            
                                                  
                                          <td><input type="text" name="EwRelayEarthLeakage" id="EwRelayEarthLeakage"></td>                    
                                          <td><input type="file" name="EwRelayEarthLeakage" id="EwRelayEarthLeakage"></td>                    
                                        </tr>
                          
                                        <tr class="text-center">
                                          <td rowspan="3" >5</td>
                                          <td rowspan="3">Circuit breaker</td>
                                          <td >Air Circuit Breaker(ACB)</td>
                                          <td >2</td>
                                          <td>
                                            <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwCircuitACB" id="EwCircuitACB">
                                          </td>            
                                                 
                                          <td><input type="text" name="EwCircuitACB" id="EwCircuitACB"></td>                    
                                          <td><input type="file" name="EwCircuitACB" id="EwCircuitACB"></td>                    
                                        </tr>
                          
                                        <tr>
                                          <td >Moulded Case Circuit Breaker(MCCB)</td>
                                          <td >2</td>
                                          <td>
                                            <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwCircuitMCCB" id="EwCircuitMCCB">
                                          </td>            
                                                 
                                          <td><input type="text" name="EwCircuitMCCB" id="EwCircuitMCCB"></td>                    
                                          <td><input type="file" name="EwCircuitMCCB" id="EwCircuitMCCB"></td>                    
                                        </tr>
                          
                                        <tr>
                                          <td >Miniature Circuit Breaker(MCB)</td>
                                          <td >2</td>
                                          <td>
                                            <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwCircuitMCB" id="EwCircuitMCB">
                                          </td>            
                                                    
                                          <td><input type="text" name="EwCircuitMCB" id="EwCircuitMCB"></td>                    
                                          <td><input type="file" name="EwCircuitMCB" id="EwCircuitMCB"></td>                    
                                        </tr>
                          
                                        <tr class="text-center">
                                          <td rowspan="1" >6</td>
                                          <td rowspan="1">Residual current devices</td>
                                          <td >Residual Current Operated Circuit Breaker with Integral o/c protection(RCBO)</td>
                                          <td >2</td>
                                          <td><input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwResidualRCBO" id="EwResidualRCBO"></td>            
                                                    
                                          <td><input type="text" name="EwResidualRCBO" id="EwResidualRCBO"></td>                    
                                          <td><input type="file" name="EwResidualRCBO" id="EwResidualRCBO"></td>                    
                                        </tr>
                          
                                        <tr class="text-center">
                                          <td rowspan="5" >7</td>
                                          <td rowspan="5">Switchboard</td>
                                          <td >Metal enclosure</td>
                                          <td >2</td>
                                          <td><input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwResidualRCBO" id="EwResidualRCBO"></td>            
                                                   
                                          <td><input type="text" name="EwResidualRCBO" id="EwResidualRCBO"></td>                    
                                          <td><input type="file" name="EwResidualRCBO" id="EwResidualRCBO"></td>                    
                                        </tr>
                          
                                        <tr>
                                          <td >Busbar support</td>
                                          <td >2</td>
                                          <td><input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwSwitchboardBusbar" id="EwSwitchboardBusbar"></td>            
                                                    
                                          <td><input type="text" name="EwSwitchboardBusbar" id="EwSwitchboardBusbar"></td>                    
                                          <td><input type="file" name="EwSwitchboardBusbar" id="EwSwitchboardBusbar"></td>                    
                                        </tr>
                          
                                        <tr>
                                          <td >Cables</td>
                                          <td >2</td>
                                          <td>
                                            <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwSwitchboardCables" id="EwSwitchboardCables">
                                          </td>            
                                                    
                                          <td><input type="text" name="EwSwitchboardCables" id="EwSwitchboardCables"></td>                    
                                          <td><input type="file" name="EwSwitchboardCables" id="EwSwitchboardCables"></td>                    
                                        </tr>
                          
                                        <tr>
                                          <td >Busbar</td>
                                          <td >2</td>
                                          <td>
                                            <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwSwitchboardCables" id="EwSwitchboardCables">
                                          </td>            
                                                  
                                          <td><input type="text" name="EwSwitchboardCables" id="EwSwitchboardCables"></td>                    
                                          <td><input type="file" name="EwSwitchboardCables" id="EwSwitchboardCables"></td>                    
                                        </tr>
                          
                                        <tr>
                                          <td >Consumer unit</td>
                                          <td >2</td>
                                          <td>
                                            <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwSwitchboardConsumer" id="EwSwitchboardConsumer">
                                          </td>            
                                                 
                                          <td><input type="text" name="EwSwitchboardConsumer" id="EwSwitchboardConsumer"></td>                    
                                          <td><input type="file" name="EwSwitchboardConsumer" id="EwSwitchboardConsumer"></td>                    
                                        </tr>
                          
                                        <tr class="text-center">
                                          <td rowspan="4" >8</td>
                                          <td rowspan="4">Lamp</td>
                                          <td >Compact fluorescent lamp(CFL)</td>
                                          <td >2</td>
                                          <td><input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwLampCFL" id="EwLampCFL"></td>            
                                                   
                                          <td><input type="text" name="EwLampCFL" id="EwLampCFL"></td>                    
                                          <td><input type="file" name="EwLampCFL" id="EwLampCFL"></td>                    
                                        </tr>
                          
                                        <tr>
                                          <td >Fluorescent lamp(T5)</td>
                                          <td >2</td>
                                          <td><input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwLampT5" id="EwLampT5"></td>            
                                                   
                                          <td><input type="text" name="EwLampT5" id="EwLampT5"></td>                    
                                          <td><input type="file" name="EwLampT5" id="EwLampT5"></td>                    
                                        </tr>
                          
                                        <tr>
                                          <td >LED tubes</td>
                                          <td >2</td>
                                          <td>
                                            <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwLampLEDTube" id="EwLampLEDTube">
                                          </td>            
                                                    
                                          <td><input type="text" name="EwLampLEDTube" id="EwLampLEDTube"></td>                    
                                          <td><input type="file" name="EwLampLEDTube" id="EwLampLEDTube"></td>                    
                                        </tr>
                          
                                        <tr>
                                          <td >LED bulb</td>
                                          <td >2</td>
                                          <td>
                                            <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwLampLEDBulb" id="EwLampLEDBulb">
                                          </td>            
                                                    
                                          <td><input type="text" name="EwLampLEDBulb" id="EwLampLEDBulb"></td>                    
                                          <td><input type="file" name="EwLampLEDBulb" id="EwLampLEDBulb"></td>                    
                                        </tr>
                          
                                        <tr class="text-center">
                                          <td rowspan="6" >9</td>
                                          <td rowspan="6">Indoor luminaires</td>
                                          <td >LED downlight</td>
                                          <td >2</td>
                                          <td><input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwIndoorLEDDownlight" id="EwIndoorLEDDownlight"></td>            
                                                      
                                          <td><input type="text" name="EwIndoorLEDDownlight" id="EwIndoorLEDDownlight"></td>                    
                                          <td><input type="file" name="EwIndoorLEDDownlight" id="EwIndoorLEDDownlight"></td>                    
                                        </tr>
                          
                                        <tr>
                                          <td >LED recessed luminaires</td>
                                          <td >2</td>
                                          <td><input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwIndoorLEDRecessed" id="EwIndoorLEDRecessed"></td>            
                                                    
                                          <td><input type="text" name="EwIndoorLEDRecessed" id="EwIndoorLEDRecessed"></td>                    
                                          <td><input type="file" name="EwIndoorLEDRecessed" id="EwIndoorLEDRecessed"></td>                    
                                        </tr>
                          
                                        <tr>
                                          <td >Fluorescent luminaires(T5)</td>
                                          <td >2</td>
                                          <td>
                                            <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwIndoorT5" id="EwIndoorT5">
                                          </td>            
                                                    
                                          <td><input type="text" name="EwIndoorT5" id="EwIndoorT5"></td>                    
                                          <td><input type="file" name="EwIndoorT5" id="EwIndoorT5"></td>                    
                                        </tr>
                          
                                        <tr>
                                          <td >Fluorescent luminaires(T8) c/w electronic ballast</td>
                                          <td >2</td>
                                          <td>
                                            <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwIndoorT8" id="EwIndoorT8">
                                          </td>            
                                                    
                                          <td><input type="text" name="EwIndoorT8" id="EwIndoorT8"></td>                    
                                          <td><input type="file" name="EwIndoorT8" id="EwIndoorT8"></td>                    
                                        </tr>
                          
                                        <tr>
                                          <td >Electronic ballast</td>
                                          <td >2</td>
                                          <td>
                                            <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwIndoorBallast" id="EwIndoorBallast">
                                          </td>            
                                                    
                                          <td><input type="text" name="EwIndoorBallast" id="EwIndoorBallast"></td>                    
                                          <td><input type="file" name="EwIndoorBallast" id="EwIndoorBallast"></td>                    
                                        </tr>
                          
                                        <tr>
                                          <td >LED driver</td>
                                          <td >2</td>
                                          <td>
                                            <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwIndoorLEDDriver" id="EwIndoorLEDDriver">
                                          </td>            
                                                    
                                          <td><input type="text" name="EwIndoorLEDDriver" id="EwIndoorLEDDriver"></td>                    
                                          <td><input type="file" name="EwIndoorLEDDriver" id="EwIndoorLEDDriver"></td>                    
                                        </tr>
                          
                                        <tr class="text-center">
                                          <td rowspan="5" >10</td>
                                          <td rowspan="5">Outdoor luminaires</td>
                                          <td >Road lighting luminaires(HPSV)</td>
                                          <td >2</td>
                                          <td><input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwOutdoorHPSV" id="EwOutdoorHPSV"></td>            
                                                     
                                          <td><input type="text" name="EwOutdoorHPSV" id="EwOutdoorHPSV"></td>                    
                                          <td><input type="file" name="EwOutdoorHPSV" id="EwOutdoorHPSV"></td>                    
                                        </tr>
                          
                                        <tr>
                                          <td >Road lighting luminaires(Induction)</td>
                                          <td >2</td>
                                          <td><input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwOutdoorInduction" id="EwOutdoorInduction"></td>            
                                                    
                                          <td><input type="text" name="EwOutdoorInduction" id="EwOutdoorInduction"></td>                    
                                          <td><input type="file" name="EwOutdoorInduction" id="EwOutdoorInduction"></td>                    
                                        </tr>
                          
                                        <tr>
                                          <td >Road lighting luminaires(LED)</td>
                                          <td >2</td>
                                          <td>
                                            <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwOutdoorLED" id="EwOutdoorLED">
                                          </td>            
                                       
                                          <td><input type="text" name="EwOutdoorLED" id="EwOutdoorLED"></td>                    
                                          <td><input type="file" name="EwOutdoorLED" id="EwOutdoorLED"></td>                    
                                        </tr>
                          
                                        <tr>
                                          <td >Ballast for discharge lamp</td>
                                          <td >2</td>
                                          <td>
                                            <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwOutdoorBallast" id="EwOutdoorBallast">
                                          </td>            
                                                   
                                          <td><input type="text" name="EwOutdoorBallast" id="EwOutdoorBallast"></td>                    
                                          <td><input type="file" name="EwOutdoorBallast" id="EwOutdoorBallast"></td>                    
                                        </tr>
                          
                                        <tr>
                                          <td >Lighting columns</td>
                                          <td >2</td>
                                          <td>
                                            <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwOutdoorLighting" id="EwOutdoorLighting">
                                          </td>            
                                                    
                                          <td><input type="text" name="EwOutdoorLighting" id="EwOutdoorLighting"></td>                    
                                          <td><input type="file" name="EwOutdoorLighting" id="EwOutdoorLighting"></td>                    
                                        </tr>
                          
                                        <tr class="text-center">
                                          <td rowspan="3" >11</td>
                                          <td rowspan="3">Traffic light</td>
                                          <td > Controller</td>
                                          <td >2</td>
                                          <td><input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwTrafficController" id="EwTrafficController"></td>            
                                                   
                                          <td><input type="text" name="EwTrafficController" id="EwTrafficController"></td>                    
                                          <td><input type="file" name="EwTrafficController" id="EwTrafficController"></td>                    
                                        </tr>
                          
                                        <tr>
                                          <td >Traffic signal module</td>
                                          <td >2</td>
                                          <td><input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwTrafficSignal" id="EwTrafficSignal"></td>            
                                                  
                                          <td><input type="text" name="EwTrafficSignal" id="EwTrafficSignal"></td>                    
                                          <td><input type="file" name="EwTrafficSignal" id="EwTrafficSignal"></td>                    
                                        </tr>
                          
                                        <tr>
                                          <td >Lighting columns</td>
                                          <td >2</td>
                                          <td>
                                            <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwTrafficLighting" id="EwTrafficLighting">
                                          </td>            
                                                    
                                          <td><input type="text" name="EwTrafficLighting" id="EwTrafficLighting"></td>                    
                                          <td><input type="file" name="EwTrafficLighting" id="EwTrafficLighting"></td>                    
                                        </tr>
                          
                                        <tr class="text-center">
                                          <td rowspan="2" >12</td>
                                          <td rowspan="2">Switches and socket outlet</td>
                                          <td > Switches</td>
                                          <td >2</td>
                                          <td><input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwSwitches" id="EwSwitches"></td>            
                                                    
                                          <td><input type="text" name="EwSwitches" id="EwSwitches"></td>                    
                                          <td><input type="file" name="EwSwitches" id="EwSwitches"></td>                    
                                        </tr>
                          
                                        <tr>
                                          <td >Switches socket outlet</td>
                                          <td >2</td>
                                          <td><input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwSwitchesSocket" id="EwSwitchesSocket"></td>            
                                                    
                                          <td><input type="text" name="EwSwitchesSocket" id="EwSwitchesSocket"></td>                    
                                          <td><input type="file" name="EwSwitchesSocket" id="EwSwitchesSocket"></td>                    
                                        </tr>
                          
                                        <tr class="text-center">
                                          <td rowspan="3" >13</td>
                                          <td rowspan="3">Cables</td>
                                          <td > Low voltage cable</td>
                                          <td >2</td>
                                          <td><input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwCablesLow" id="EwCablesLow"></td>            
                                                    
                                          <td><input type="text" name="EwCablesMedium" id="EwCablesMedium"></td>                    
                                          <td><input type="file" name="EwCablesMedium" id="EwCablesMedium"></td>                    
                                        </tr>
                          
                                        <tr>
                                          <td >Medium voltage cable</td>
                                          <td >2</td>
                                          <td><input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwCablesMedium" id="EwCablesMedium"></td>            
                                                    
                                          <td><input type="text" name="EwCablesMedium" id="EwCablesMedium"></td>                    
                                          <td><input type="file" name="EwCablesMedium" id="EwCablesMedium"></td>                    
                                        </tr>
                          
                                        <tr>
                                          <td >High voltage cable</td>
                                          <td >2</td>
                                          <td>
                                            <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwCablesHigh" id="EwCablesHigh">
                                          </td>            
                                                    
                                          <td><input type="text" name="EwCablesHigh" id="EwCablesHigh"></td>                    
                                          <td><input type="file" name="EwCablesHigh" id="EwCablesHigh"></td>                    
                                        </tr>
                          
                                        <tr class="text-center">
                                          <td rowspan="4" >14</td>
                                          <td rowspan="4">G. S conduit & High Impact PVC conduit/trunking/tray</td>
                                          <td >Rigid high impact PVC conduit</td>
                                          <td >2</td>
                                          <td>
                                            <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwTrayPVC" id="EwTrayPVC">
                                          </td>            
                                                    
                                          <td><input type="text" name="EwTrayPVC" id="EwTrayPVC"></td>                    
                                          <td><input type="file" name="EwTrayPVC" id="EwTrayPVC"></td>                    
                                        </tr>
                            
                                        <tr>
                                          <td >Galvanised steel conduit</td>
                                          <td >2</td>
                                          <td>
                                            <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwTrayGalvanised" id="EwTrayGalvanised">
                                          </td>            
                                                    
                                          <td><input type="text" name="EwTrayGalvanised" id="EwTrayGalvanised"></td>                    
                                          <td><input type="file" name="EwTrayGalvanised" id="EwTrayGalvanised"></td>                    
                                        </tr>
                            
                                        <tr>
                                          <td >Trunking</td>
                                          <td >2</td>
                                          <td>
                                            <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwTrayTrunking" id="EwTrayTrunking">
                                          </td>            
                                                     
                                          <td><input type="text" name="EwTrayTrunking" id="EwTrayTrunking"></td>                    
                                          <td><input type="file" name="EwTrayTrunking" id="EwTrayTrunking"></td>                    
                                        </tr>
                            
                                        <tr>
                                          <td >Cable tray</td>
                                          <td >2</td>
                                          <td>
                                            <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwTrayCableTray" id="EwTrayCableTray">
                                          </td>            
                                                   
                                          <td><input type="text" name="EwTrayCableTray" id="EwTrayCableTray"></td>                    
                                          <td><input type="file" name="EwTrayCableTray" id="EwTrayCableTray"></td>                    
                                        </tr>
                              
                                          <tr class="text-center">
                                            <td rowspan="3" >15</td>
                                            <td rowspan="3">Fan</td>
                                            <td >Ceiling fan</td>
                                            <td >2</td>
                                            <td>
                                              <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwFanCeiling" id="EwFanCeiling">
                                            </td>            
                                                       
                                            <td><input type="text" name="EwFanCeiling" id="EwFanCeiling"></td>                    
                                            <td><input type="file" name="EwFanCeiling" id="EwFanCeiling"></td>                    
                                          </tr>
                            
                                          <tr>
                                            <td >Wall fan</td>
                                            <td >2</td>
                                            <td>
                                              <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwFanWall" id="EwFanWall">
                                            </td>            
                                                     
                                            <td><input type="text" name="EwFanWall" id="EwFanWall"></td>                    
                                            <td><input type="file" name="EwFanWall" id="EwFanWall"></td>                    
                                          </tr>
                            
                                          <tr>
                                            <td >Oscillating fan</td>
                                            <td >2</td>
                                            <td>
                                              <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwFanOscillating" id="EwFanOscillating">
                                            </td>            
                                                      
                                            <td><input type="text" name="EwFanOscillating" id="EwFanOscillating"></td>                    
                                            <td><input type="file" name="EwFanOscillating" id="EwFanOscillating"></td>                    
                                          </tr>
                            
                                          <tr class="text-center">
                                            <td rowspan="2" >16</td>
                                            <td rowspan="2">Power factor correction</td>
                                            <td >Capacitor for power factor correction</td>
                                            <td >2</td>
                                            <td>
                                              <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwPowerCapasitor" id="EwPowerCapasitor">
                                            </td>            
                                                       
                                            <td><input type="text" name="EwPowerCapasitor" id="EwPowerCapasitor"></td>                    
                                            <td><input type="file" name="EwPowerCapasitor" id="EwPowerCapasitor"></td>                    
                                          </tr>
                            
                                          <tr>
                                            <td >Power factor regulator</td>
                                            <td >2</td>
                                            <td>
                                              <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwPowerRegulator" id="EwPowerRegulator">
                                            </td>            
                                                   
                                            <td><input type="text" name="EwPowerRegulator" id="EwPowerRegulator"></td>                    
                                            <td><input type="file" name="EwPowerRegulator" id="EwPowerRegulator"></td>                    
                                          </tr>
                            
                                          <tr class="text-center">
                                            <td rowspan="2" >17</td>
                                            <td rowspan="2">Emergency light & luminous sign</td>
                                            <td >'KELUAR' sign LED</td>
                                            <td >2</td>
                                            <td>
                                              <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwEmergencyKeluar" id="EwEmergencyKeluar">
                                            </td>            
                                                      
                                            <td><input type="text" name="EwEmergencyKeluar" id="EwEmergencyKeluar"></td>                    
                                            <td><input type="file" name="EwEmergencyKeluar" id="EwEmergencyKeluar"></td>                    
                                          </tr>
                            
                                          <tr>
                                            <td >Emergency light LED</td>
                                            <td >2</td>
                                            <td>
                                              <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwEmergencyLED" id="EwEmergencyLED">
                                            </td>            
                                                       
                                            <td><input type="text" name="EwEmergencyLED" id="EwEmergencyLED"></td>                    
                                            <td><input type="file" name="EwEmergencyLED" id="EwEmergencyLED"></td>                    
                                          </tr>
                            
                                          <tr class="text-center">
                                            <td rowspan="1" >18</td>
                                            <td rowspan="1">Switchgear</td>
                                            <td >11kV metal enclosed Switchgear - VCB</td>
                                            <td >2</td>
                                            <td><input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwSwithcgearVCB" id="EwSwithcgearVCB"></td>            
                                                      
                                            <td><input type="text" name="EwSwithcgearVCB" id="EwSwithcgearVCB"></td>                    
                                            <td><input type="file" name="EwSwithcgearVCB" id="EwSwithcgearVCB"></td>                    
                                          </tr>
                            
                                          <tr class="text-center">
                                            <td rowspan="4" >19</td>
                                            <td rowspan="4">Renewable energy system</td>
                                            <td >Solar panel</td>
                                            <td >2</td>
                                            <td><input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwRenewableSolar" id="EwRenewableSolar"></td>            
                                                      
                                            <td><input type="text" name="EwRenewableSolar" id="EwRenewableSolar"></td>                    
                                            <td><input type="file" name="EwRenewableSolar" id="EwRenewableSolar"></td>                    
                                          </tr>
                            
                                          <tr>
                                            <td >Battery</td>
                                            <td >2</td>
                                            <td><input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwRenewableBattery" id="EwRenewableBattery"></td>            
                                                      
                                            <td><input type="text" name="EwRenewableBattery" id="EwRenewableBattery"></td>                    
                                            <td><input type="file" name="EwRenewableBattery" id="EwRenewableBattery"></td>                    
                                          </tr>
                            
                                          <tr>
                                            <td >Inverter</td>
                                            <td >2</td>
                                            <td>
                                              <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwRenewableInverter" id="EwRenewableInverter">
                                            </td>            
                                                      
                                            <td><input type="text" name="EwRenewableInverter" id="EwRenewableInverter"></td>                    
                                            <td><input type="file" name="EwRenewableInverter" id="EwRenewableInverter"></td>                    
                                          </tr>
                            
                                          <tr>
                                            <td >Low voltage cable</td>
                                            <td >2</td>
                                            <td>
                                              <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwRenewableLowCable" id="EwRenewableLowCable">
                                            </td>            
                                                       
                                            <td><input type="text" name="EwRenewableLowCable" id="EwRenewableLowCable"></td>                    
                                            <td><input type="file" name="EwRenewableLowCable" id="EwRenewableLowCable"></td>                    
                                          </tr>
                          
                                          <tr style="display: none">
                                            <td><input type="text" name="markahPREw" id="markahPREw" /></td>
                                          </tr>

                                          <thead class="text-white bg-orange-jkr">
            
                                            <tr>
                                              <th colspan="8">List of products for mechanical works</th>
                                            </tr>
                                            <tr>
                                              <th>No.</th>
                                              <th >Component</th>
                                              <th>Product</th>
                                              <th >Point Allocated</th>
                                              <th>Point Requested (design)</th>
                                              {{-- <th>Point Requested (construction)</th>
                                              <th>Point Awarded</th> --}}
                                              <th >Remark</th>
                                              <th >Supporting Documents</th>
                                            </tr>
                                          </thead>

                                          <tr class="text-center">
                                            <td rowspan="5">1</td>
                                            <td rowspan="5">Water cooled chiller system</td>
                                            <td>Compressor <li>Refrigerant</li></td>
                                            <td>2</td>
                                            <td><input onblur="findTotalmarkahPRMw()" type="number" min="0" max="2" class="mekanikal" name="MwWaterSystemCompressor" id="MwWaterSystemCompressor"></td>                        
                                            <td><input type="text" name="MwWaterSystemCompressor" id="MwWaterSystemCompressor"></td>                    
                                            <td><input type="file" name="MwWaterSystemCompressor" id="MwWaterSystemCompressor"></td>                    
                                          </tr>
                                
                                          <tr>
                                            <td >Air side <li>Air handling unit</li></td>
                                            <td >2</td>
                                            <td><input onblur="findTotalmarkahPRMw()" type="number" min="0" max="2" class="mekanikal" name="MwWaterSystemAirSide" id="MwWaterSystemAirSide"></td>            
                                            <td><input type="text" name="MwWaterSystemAirSide" id="MwWaterSystemAirSide"></td>                    
                                            <td><input type="file" name="MwWaterSystemAirSide" id="MwWaterSystemAirSide"></td>                    
                                          </tr>
                                
                                          <tr>
                                            <td>Water side 
                                              <li>Pump</li>
                                            </td>
                                            <td >2</td>
                                            <td><input onblur="findTotalmarkahPRMw()" type="number" min="0" max="2" class="mekanikal" name="MwWaterSystemPump" id="MwWaterSystemPump"></td>                       
                                            <td><input type="text" name="MwWaterSystemPump" id="MwWaterSystemPump"></td>                    
                                            <td><input type="file" name="MwWaterSystemPump" id="MwWaterSystemPump"></td>                    
                                          </tr>
                              
                                          <tr>
                                            <td><li>Cooling tower</li></td>
                                            <td>2</td>
                                            <td><input onblur="findTotalmarkahPRMw()" type="number" min="0" max="2" class="mekanikal" name="MwWaterSystemCoolingTower" id="MwWaterSystemCoolingTower"></td>                       
                                            <td><input type="text" name="MwWaterSystemCoolingTower" id="MwWaterSystemCoolingTower"></td>            
                                            <td><input type="file" name="MwWaterSystemCoolingTower" id="MwWaterSystemCoolingTower"></td>            
                                            
                                          </tr>
                              
                                          <tr>
                                            <td><li>Electronic water descater</li></td>
                                            <td>2</td>
                                            <td><input onblur="findTotalmarkahPRMw()" type="number" min="0" max="2" class="mekanikal" name="MwWaterSystemElectronicWater" id="MwWaterSystemElectronicWater"></td>                        
                                            <td><input type="text" name="MwWaterSystemElectronicWater" id="MwWaterSystemElectronicWater"></td>            
                                            <td><input type="file" name="MwWaterSystemElectronicWater" id="MwWaterSystemElectronicWater"></td>            
                                          </tr>
                                
                                          <tr class="text-center">
                                              <td rowspan="3" >2</td>
                                              <td rowspan="3">Multiple air-conditioning system</td>
                                              <td >Compressor <li>Refrigerant</li></td>
                                              <td >2</td>
                                              <td><input onblur="findTotalmarkahPRMw()" type="number" min="0" max="2" class="mekanikal" name="MwACCompressor" id="MwACCompressor"></td>                        
                                              <td><input type="text" name="MwACCompressor" id="MwACCompressor"></td>                    
                                              <td><input type="file" name="MwACCompressor" id="MwACCompressor"></td>                    
                                            </tr>
                                
                                          <tr>
                                            <td >Air side <li>Air handling unit</li></td>
                                            <td >2</td>
                                            <td><input onblur="findTotalmarkahPRMw()" type="number" min="0" max="2" class="mekanikal " name="MwACAirHandling" id="MwACAirHandling"></td>            
                                            <td><input type="text" name="MwACAirHandling" id="MwACAirHandling"></td>                    
                                            <td><input type="file" name="MwACAirHandling" id="MwACAirHandling"></td>                    
                                          </tr>
                              
                                          <tr>
                                            <td><li>Outdoor unit</li></td>
                                            <td>2</td>
                                            <td><input onblur="findTotalmarkahPRMw()" type="number" min="0" max="2" class="mekanikal" name="MwACOutdoorUnit" id="MwACOutdoorUnit"></td>                       
                                            <td><input type="text" name="MwACOutdoorUnit" id="MwACOutdoorUnit"></td>            
                                            <td><input type="file" name="MwACOutdoorUnit" id="MwACOutdoorUnit"></td>            
                                          </tr>
                              
                                        
                              
                                          <tr class="text-center">
                                              <td rowspan="1" >3</td>
                                              <td rowspan="1">Split unit</td>
                                              <td >Compressor <li>Refrigerant</li></td>
                                              <td >2</td>
                                              <td><input onblur="findTotalmarkahPRMw()" type="number" min="0" max="2" class="mekanikal" name="MwSplitCompressor" id="MwSplitCompressor"></td>                       
                                              <td><input type="text" name="MwSplitCompressor" id="MwSplitCompressor"></td>                    
                                              <td><input type="file" name="MwSplitCompressor" id="MwSplitCompressor"></td>                    
                                            </tr>
                              
                                            <tr class="text-center">
                                              <td rowspan="1" >4</td>
                                              <td rowspan="1">Lift</td>
                                              <td >Lift motor</td>
                                              <td >2</td>
                                              <td><input onblur="findTotalmarkahPRMw()" type="number" min="0" max="2" class="mekanikal" name="MwLiftMotor" id="MwLiftMotor"></td>            
                                              <td><input type="text" name="MwLiftMotor" id="MwLiftMotor"></td>                    
                                              <td><input type="file" name="MwLiftMotor" id="MwLiftMotor"></td>                    
                                            </tr>
                              
                                            <tr class="text-center">
                                              <td rowspan="4" >5</td>
                                              <td rowspan="4">Firefighting system</td>
                                              <td >Clean agent <li>Mist</li></td>
                                              <td >2</td>
                                              <td><input onblur="findTotalmarkahPRMw()" type="number" min="0" max="2" class="mekanikal" name="MwFireSystemMist" id="MwFireSystemMist"></td>            
                                              <td><input type="text" name="MwFireSystemMist" id="MwFireSystemMist"></td>                    
                                              <td><input type="file" name="MwFireSystemMist" id="MwFireSystemMist"></td>                    
                                            </tr>
                              
                                            <tr>
                                              <td >Hose reel <li>Pump</li></td>
                                              <td >2</td>
                                              <td><input onblur="findTotalmarkahPRMw()" type="number" min="0" max="2" class="mekanikal" name="MwFireSystemHosePump" id="MwFireSystemHosePump"></td>            
                                              <td><input type="text" name="MwFireSystemHosePump" id="MwFireSystemHosePump"></td>                    
                                              <td><input type="file" name="MwFireSystemHosePump" id="MwFireSystemHosePump"></td>                    
                                            </tr>
                              
                                            <tr>
                                              <td >Sprinkler <li>Pump</li></td>
                                              <td >2</td>
                                              <td>
                                                <input onblur="findTotalmarkahPRMw()" type="number" min="0" max="2" class="mekanikal" name="MwFireSystemSpriklerPump" id="MwFireSystemSpriklerPump">
                                              </td>                       
                                              <td><input type="text" name="MwFireSystemSpriklerPump" id="MwFireSystemSpriklerPump"></td>                    
                                              <td><input type="file" name="MwFireSystemSpriklerPump" id="MwFireSystemSpriklerPump"></td>                    
                                            </tr>
                              
                                            <tr>
                                              <td >Wet or dry riser <li>Pump</li></td>
                                              <td >2</td>
                                              <td>
                                                <input onblur="findTotalmarkahPRMw()" type="number" min="0" max="2" class="mekanikal" name="MwFireSystemWetPump" id="MwFireSystemWetPump">
                                              </td>            
                                              <td><input type="text" name="MwFireSystemWetPump" id="MwFireSystemWetPump"></td>                    
                                              <td><input type="file" name="MwFireSystemWetPump" id="MwFireSystemWetPump"></td>                    
                                            </tr>
                              
                                            <tr class="text-center">
                                              <td rowspan="2" >6</td>
                                              <td rowspan="2">Cold water system</td>
                                              <td >Pump</td>
                                              <td >2</td>
                                              <td>
                                                <input onblur="findTotalmarkahPRMw()" type="number" min="0" max="2" class="mekanikal" name="MwColdSystemPump" id="MwColdSystemPump">
                                              </td>                       
                                              <td><input type="text" name="MwColdSystemPump" id="MwColdSystemPump"></td>                    
                                              <td><input type="file" name="MwColdSystemPump" id="MwColdSystemPump"></td>                    
                                            </tr>
                              
                                            <tr>
                                              <td >Water tank</td>
                                              <td >2</td>
                                              <td>
                                                <input onblur="findTotalmarkahPRMw()" type="number" min="0" max="2" class="mekanikal" name="MwColdSystemWaterTank" id="MwColdSystemWaterTank">
                                              </td>                       
                                              <td><input type="text" name="MwColdSystemWaterTank" id="MwColdSystemWaterTank"></td>                    
                                              <td><input type="file" name="MwColdSystemWaterTank" id="MwColdSystemWaterTank"></td>                    
                                            </tr>
                              
                                            <tr class="text-center">
                                              <td rowspan="1" >7</td>
                                              <td rowspan="1">Innovation</td>
                                              <td >Rain water harvesting</td>
                                              <td >2</td>
                                              <td><input onblur="findTotalmarkahPRMw()" type="number" min="0" max="2" class="mekanikal" name="MwInnovationRainHarvesting" id="MwInnovationRainHarvesting"></td>                        
                                              <td><input type="text" name="MwInnovationRainHarvesting" id="MwInnovationRainHarvesting"></td>                    
                                              <td><input type="file" name="MwInnovationRainHarvesting" id="MwInnovationRainHarvesting"></td>                    
                                            </tr>
                              
                                            <tr style="display: none">
                                              <td><input type="text" name="markahPRMw" id="markahPRMw" /></td>
                                            </tr>
                                  
                                </tbody>
                                </form>
                              </table>

                              <div align="center" class="mt-3">
                                <button class="btn btn-primary" type="submit" title="Simpan">Simpan</button>
                                <button class="btn btn-primary" type="submit" title="Simpan">Sah</button>
                                <button class="btn btn-primary" type="submit" title="Simpan">Jana Keputusan</button>
                                <button class="btn btn-primary" type="submit" title="Simpan">Jana Sijil</button>
                                {{-- <a href="/penilaian_reka_bentuk_jalan/isi_skor_kad_page2" type="button" class="btn btn-primary">Seterusnya</a>           --}}
                              </div>
                      
                              {{-- <div align="right" class="mt-3">
                                <button class="btn btn-primary" type="submit" title="Simpan">Simpan</button>
                                <a href="/penilaian_reka_bentuk_gpss/skor_penilaian_arkitek_page2/create" type="button" class="btn btn-secondary">Seterusnya</a>          
                              </div> --}}
                      
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
                    <h2 class="h2 mb-3">BORANG PERMOHONAN RAYUAN GPSS BANGUNAN</h2>
                </div>

                <div class="col">
                    <div class="card-body">
                        <div class="row3 mx-1 table-responsive scrollbar text-center">
                          <form action= "/penilaian_reka_bentuk_gpss/simpan_skor_penilaian_arkitek/{id}" method="post" enctype="multipart/form-data">
                            @method('POST')
                            @csrf
                            <div class="col">
                              <table class="table table-bordered line-table text-center" style="width: 100%">
                                <thead class="text-white bg-orange-jkr">
                                  <tr>          
                                    <th colspan="8">Green Product Scoring Sheet</th>
                                  </tr>
                                  <tr>
                                    <th colspan="8">List of products for architectural works - Roof</th>
                                  </tr>
                                  <tr>
                                    <th>No.</th>
                                    <th >Component</th>
                                    <th>Product</th>
                                    <th>Point Allocated</th>
                                    <th>Point Requested (design)</th>
                                    {{-- <th>Point Requested (construction)</th> --}}
                                    {{-- <th>Point Awarded</th> --}}
                                    <th >Remark</th>
                                    <th >Supporting Documents</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  
                                  <tr class="text-center">
                                    <td rowspan="4" >1</td>
                                    <td rowspan="4">Roof tiles</td>
                                    <td >Clay tiles</td>
                                    <td >2</td>
                                    {{-- <td >
                                        <select onblur="findTotal()" class="arkitek" name="AwRoofRoofTilesClayTiles" id="AwRoofRoofTilesClayTiles">
                                        <option selected disabled ></option>
                                        <option value="0">0</option>
                                        <option value="2" >2</option>
                                        </select>
                                    </td> --}}
                                    <td><input onblur="findTotal()" type="number" min="0" max="2" min="0" max="2" class="arkitek" name="AwRoofRoofTilesClayTiles" id="AwRoofRoofTilesClayTiles"></td>            
                                    {{-- <td><input onblur="findTotalConstructed()" type="number" min="0" max="2" min="0" max="2" class="arkitek_construction" name="Cons_AwRoofRoofTilesClayTiles" id="Cons_AwRoofRoofTilesClayTiles"> --}}
                                    {{-- <td><input onblur="findTotalAwarded()" type="number" min="0" max="2" min="0" max="2" class="arkitek_awarded" name="Awarded_AwRoofRoofTilesClayTiles" id="Awarded_AwRoofRoofTilesClayTiles"> --}}
                                    <td><input type="text" name="Remark_AwRoofRoofTilesClayTiles" id="Remark_AwRoofRoofTilesClayTiles"></td>                    
                                    <td><input type="file" name="Remark_AwRoofRoofTilesClayTiles" id="Remark_AwRoofRoofTilesClayTiles"></td>                    
                                  </tr>
                        
                                  <tr>
                                    <td >Concrete tiles</td>
                                    <td >2</td>
                                    {{-- <td >
                                      <select onblur="findTotal()" class="arkitek" name="AwRoofRoofTilesConcreteTiles" id="AwRoofRoofTilesConcreteTiles">
                                      <option selected disabled ></option>
                                      <option value="0">0</option>
                                      <option value="2" >2</option>
                                      </select>
                                  </td> --}}
                                    <td><input onblur="findTotal()" type="number" min="0" max="2" min="0" max="2" class="arkitek" name="AwRoofRoofTilesConcreteTiles" id="AwRoofRoofTilesConcreteTiles"></td>            
                                    {{-- <td><input onblur="findTotalConstructed()" type="number" min="0" max="2" min="0" max="2" class="arkitek_construction" name="Cons_AwRoofRoofTilesConcreteTiles" id="Cons_AwRoofRoofTilesConcreteTiles"> --}}
                                    {{-- <td><input onblur="findTotalAwarded()" type="number" min="0" max="2" min="0" max="2" class="arkitek_awarded" name="Awarded_AwRoofRoofTilesConcreteTiles" id="Awarded_AwRoofRoofTilesConcreteTiles"> --}}
                                    <td><input type="text" name="Remark_AwRoofRoofTilesConcreteTiles" id="Remark_AwRoofRoofTilesConcreteTiles"></td>                    
                                    <td><input type="file" name="Remark_AwRoofRoofTilesConcreteTiles" id="Remark_AwRoofRoofTilesConcreteTiles"></td>                    
                                  </tr>
                        
                                  <tr>
                                    
                                    <td >Metal roofing</td>
                                    <td >2</td>
                                    {{-- <td >
                                      <select onblur="findTotal()" class="arkitek" name="AwRoofRoofTilesMetalRoofing" id="AwRoofRoofTilesMetalRoofing">
                                      <option selected disabled ></option>
                                      <option value="0">0</option>
                                      <option value="2" >2</option>
                                      </select>
                                    </td> --}}
                                    <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="AwRoofRoofTilesMetalRoofing" id="AwRoofRoofTilesMetalRoofing"></td>            
                                    {{-- <td><input onblur="findTotalConstructed()" type="number" min="0" max="2" class="arkitek_construction" name="Cons_AwRoofRoofTilesMetalRoofing" id="Cons_AwRoofRoofTilesMetalRoofing"></td>             --}}
                                    {{-- <td><input onblur="findTotalAwarded()" type="number" min="0" max="2" class="arkitek_awarded" name="Awarded_AwRoofRoofTilesMetalRoofing" id="Awarded_AwRoofRoofTilesMetalRoofing"></td>             --}}
                                    <td><input type="text" name="Remark_AwRoofRoofTilesMetalRoofing" id="Remark_AwRoofRoofTilesMetalRoofing"></td>                    
                                    <td><input type="file" name="Remark_AwRoofRoofTilesMetalRoofing" id="Remark_AwRoofRoofTilesMetalRoofing"></td>                    
                                  </tr>
                        
                                  <tr>
                                    <td >Shingles</td>
                                    <td >2</td>
                                    {{-- <td >
                                      <select onblur="findTotal()" class="arkitek" name="AwRoofRoofTilesShingles" id="AwRoofRoofTilesShingles">
                                      <option selected disabled ></option>
                                      <option value="0">0</option>
                                      <option value="2" >2</option>
                                      </select>
                                    </td> --}}
                                    <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="AwRoofRoofTilesShingles" id="AwRoofRoofTilesShingles"></td>            
                                    {{-- <td><input onblur="findTotalConstructed()" type="number" min="0" max="2" class="arkitek_construction" name="Cons_AwRoofRoofTilesShingles" id="Cons_AwRoofRoofTilesShingles"></td>             --}}
                                    {{-- <td><input onblur="findTotalAwarded()" type="number" min="0" max="2" class="arkitek_awarded" name="Awarded_AwRoofRoofTilesShingles" id="Awarded_AwRoofRoofTilesShingles"></td>             --}}
                                    <td><input type="text" name="Remark_AwRoofRoofTilesShingles" id="Remark_AwRoofRoofTilesShingles"></td>                    
                                    <td><input type="file" name="Remark_AwRoofRoofTilesShingles" id="Remark_AwRoofRoofTilesShingles"></td>                    
                                  </tr>
                                  
                                  <tr>
                                    <td rowspan="5">2</td>
                                    <td rowspan="5">Insulation</td>
                                    <td >Rockwool</td>
                                    <td >2</td>
                                    {{-- <td >
                                      <select onblur="findTotal()" class="arkitek" name="AwRoofRoofInsulationRockwool" id="AwRoofRoofInsulationRockwool">
                                      <option selected disabled ></option>
                                      <option value="0">0</option>
                                      <option value="2" >2</option>
                                      </select>
                                    </td> --}}
                                    <td> <input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="AwRoofRoofInsulationRockwool" id="AwRoofRoofInsulationRockwool"></td>            
                                    {{-- <td><input onblur="findTotalConstructed()" type="number" min="0" max="2" class="arkitek_construction" name="Cons_AwRoofRoofInsulationRockwool" id="Cons_AwRoofRoofInsulationRockwool"></td>             --}}
                                    {{-- <td><input onblur="findTotalAwarded()" type="number" min="0" max="2" class="arkitek_awarded" name="Awarded_AwRoofRoofInsulationRockwool" id="Awarded_AwRoofRoofInsulationRockwool"></td>              --}}
                                    <td><input type="text" name="Remark_AwRoofRoofInsulationRockwool" id="Remark_AwRoofRoofInsulationRockwool"></td>                    
                                    <td><input type="file" name="Remark_AwRoofRoofInsulationRockwool" id="Remark_AwRoofRoofInsulationRockwool"></td>                    
                                  </tr>
                        
                                  <tr>
                                    <td >Glasswool</td>
                                    <td >2</td>
                                    {{-- <td >
                                      <select onblur="findTotal()" class="arkitek" name="AwRoofRoofInsulationGlasswool" id="AwRoofRoofInsulationGlasswool">
                                      <option selected disabled ></option>
                                      <option value="0">0</option>
                                      <option value="2" >2</option>
                                      </select>
                                    </td> --}}
                                    <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="AwRoofRoofInsulationGlasswool" id="AwRoofRoofInsulationGlasswool"></td>            
                                    {{-- <td><input onblur="findTotalConstructed()" type="number" min="0" max="2" class="arkitek_construction" name="Cons_AwRoofRoofInsulationGlasswool" id="Cons_AwRoofRoofInsulationGlasswool"></td>             --}}
                                    {{-- <td><input onblur="findTotalAwarded()" type="number" min="0" max="2" class="arkitek_awarded" name="Awarded_AwRoofRoofInsulationGlasswool" id="Awarded_AwRoofRoofInsulationGlasswool"></td>              --}}
                                    <td><input type="text" name="Remark_AwRoofRoofInsulationGlasswool" id="Remark_AwRoofRoofInsulationGlasswool"></td>                    
                                    <td><input type="file" name="Remark_AwRoofRoofInsulationGlasswool" id="Remark_AwRoofRoofInsulationGlasswool"></td>                    
                                  </tr>
                        
                                  <tr>
                                    <td >Foam</td>
                                    <td >2</td>
                                    {{-- <td >
                                      <select onblur="findTotal()" class="arkitek" name="AwRoofRoofInsulationFoam" id="AwRoofRoofInsulationFoam">
                                      <option selected disabled ></option>
                                      <option value="0">0</option>
                                      <option value="2" >2</option>
                                      </select>
                                    </td> --}}
                                    <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="AwRoofRoofInsulationFoam" id="AwRoofRoofInsulationFoam"></td>            
                                    {{-- <td><input onblur="findTotalConstructed()" type="number" min="0" max="2" class="arkitek_construction" name="Cons_AwRoofRoofInsulationFoam" id="Cons_AwRoofRoofInsulationFoam"></td>             --}}
                                    {{-- <td><input onblur="findTotalAwarded()" type="number" min="0" max="2" class="arkitek_awarded" name="Awarded_AwRoofRoofInsulationFoam" id="Awarded_AwRoofRoofInsulationFoam"></td>              --}}
                                    <td><input type="text"name="Remark_AwRoofRoofInsulationFoam" id="Remark_AwRoofRoofInsulationFoam"></td>                    
                                    <td><input type="file"name="Remark_AwRoofRoofInsulationFoam" id="Remark_AwRoofRoofInsulationFoam"></td>                    
                                  </tr>
                        
                                  <tr>
                                    <td >Aluminium Foil</td>
                                    <td >2</td>
                                    {{-- <td >
                                      <select onblur="findTotal()" class="arkitek" name="AwRoofRoofInsulationAlumFoil" id="AwRoofRoofInsulationAlumFoil">
                                      <option selected disabled ></option>
                                      <option value="0">0</option>
                                      <option value="2" >2</option>
                                      </select>
                                    </td> --}}
                                    <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="AwRoofRoofInsulationAlumFoil" id="AwRoofRoofInsulationAlumFoil"></td>            
                                    {{-- <td><input onblur="findTotalConstructed()" type="number" min="0" max="2" class="arkitek_construction" name="Cons_AwRoofRoofInsulationAlumFoil" id="Cons_AwRoofRoofInsulationAlumFoil"></td>             --}}
                                    {{-- <td><input onblur="findTotalAwarded()" type="number" min="0" max="2" class="arkitek_awarded" name="Awarded_AwRoofRoofInsulationAlumFoil" id="Awarded_AwRoofRoofInsulationAlumFoil"></td>              --}}
                                    <td><input type="text" name="Remark_AwRoofRoofInsulationAlumFoil" id="Remark_AwRoofRoofInsulationAlumFoil"></td>                    
                                    <td><input type="file" name="Remark_AwRoofRoofInsulationAlumFoil" id="Remark_AwRoofRoofInsulationAlumFoil"></td>                    
                                  </tr>
                        
                                  <tr>
                                    <td >Undersheeting</td>
                                    <td >2</td>
                                    {{-- <td >
                                      <select onblur="findTotal()" class="arkitek" name="AwRoofRoofInsulationUndersheeting" id="AwRoofRoofInsulationUndersheeting">
                                      <option selected disabled ></option>
                                      <option value="0">0</option>
                                      <option value="2" >2</option>
                                      </select>
                                    </td> --}}
                                    <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="AwRoofRoofInsulationUndersheeting" id="AwRoofRoofInsulationUndersheeting"></td>            
                                    {{-- <td><input onblur="findTotalConstructed()" type="number" min="0" max="2" class="arkitek_construction" name="Cons_AwRoofRoofInsulationUndersheeting" id="Cons_AwRoofRoofInsulationUndersheeting"></td>             --}}
                                    {{-- <td><input onblur="findTotalAwarded()" type="number" min="0" max="2" class="arkitek_awarded" name="Awarded_AwRoofRoofInsulationUndersheeting" id="Awarded_AwRoofRoofInsulationUndersheeting"></td>              --}}
                                    <td><input type="text" name="Remark_AwRoofRoofInsulationUndersheeting" id="Remark_AwRoofRoofInsulationUndersheeting"></td>                    
                                    <td><input type="file" name="Remark_AwRoofRoofInsulationUndersheeting" id="Remark_AwRoofRoofInsulationUndersheeting"></td>                    
                                  </tr>
                        
                                  <tr>
                                    <td rowspan="3">3</td>
                                    <td rowspan="3">Roof Eaves</td>
                                    <td >Metal</td>
                                    <td >2</td>
                                    {{-- <td >
                                      <select onblur="findTotal()" class="arkitek" name="AwRoofRoofEavesMetal" id="AwRoofRoofEavesMetal">
                                      <option selected disabled ></option>
                                      <option value="0">0</option>
                                      <option value="2" >2</option>
                                      </select>
                                    </td> --}}
                                    <td> <input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="AwRoofRoofEavesMetal" id="AwRoofRoofEavesMetal"></td>            
                                    {{-- <td><input onblur="findTotalConstructed()" type="number" min="0" max="2" class="arkitek_construction" name="Cons_AwRoofRoofEavesMetal" id="Cons_AwRoofRoofEavesMetal"></td>             --}}
                                    {{-- <td><input onblur="findTotalAwarded()" type="number" min="0" max="2" class="arkitek_awarded" name="Awarded_AwRoofRoofEavesMetal" id="Awarded_AwRoofRoofEavesMetal"></td>              --}}
                                    <td><input type="text"name="Remark_AwRoofRoofEavesMetal" id="Remark_AwRoofRoofEavesMetal"></td>                    
                                    <td><input type="file"name="Remark_AwRoofRoofEavesMetal" id="Remark_AwRoofRoofEavesMetal"></td>                    
                                  </tr>
                        
                                  <tr>
                                    <td >Fiber cement</td>
                                    <td >2</td>
                                    {{-- <td >
                                      <select onblur="findTotal()" class="arkitek" name="AwRoofRoofEavesFiberCement" id="AwRoofRoofEavesFiberCement">
                                      <option selected disabled ></option>
                                      <option value="0">0</option>
                                      <option value="2" >2</option>
                                      </select>
                                    </td> --}}
                                    <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="AwRoofRoofEavesFiberCement" id="AwRoofRoofEavesFiberCement"></td>            
                                    {{-- <td><input onblur="findTotalConstructed()" type="number" min="0" max="2" class="arkitek_construction" name="Cons_AwRoofRoofEavesFiberCement" id="Cons_AwRoofRoofEavesFiberCement"></td>             --}}
                                    {{-- <td><input onblur="findTotalAwarded()" type="number" min="0" max="2" class="arkitek_awarded" name="Awarded_AwRoofRoofEavesFiberCement" id="Awarded_AwRoofRoofEavesFiberCement"></td>              --}}
                                    <td><input type="text" name="Remark_AwRoofRoofEavesFiberCement" id="Remark_AwRoofRoofEavesFiberCement"></td>                    
                                    <td><input type="file" name="Remark_AwRoofRoofEavesFiberCement" id="Remark_AwRoofRoofEavesFiberCement"></td>                    
                                  </tr>
                        
                                  <tr>
                                    <td >Plasterboard</td>
                                    <td >2</td>
                                    {{-- <td >
                                      <select onblur="findTotal()" class="arkitek" name="AwRoofRoofEavesPlasterboard" id="AwRoofRoofEavesPlasterboard">
                                      <option selected disabled ></option>
                                      <option value="0">0</option>
                                      <option value="2" >2</option>
                                      </select>
                                    </td> --}}
                                    <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="AwRoofRoofEavesPlasterboard" id="AwRoofRoofEavesPlasterboard"></td>            
                                    {{-- <td><input onblur="findTotalConstructed()" type="number" min="0" max="2" class="arkitek_construction" name="Cons_AwRoofRoofEavesPlasterboard" id="Cons_AwRoofRoofEavesPlasterboard"></td>             --}}
                                    {{-- <td><input onblur="findTotalAwarded()" type="number" min="0" max="2" class="arkitek_awarded" name="Awarded_AwRoofRoofEavesPlasterboard" id="Awarded_AwRoofRoofEavesPlasterboard"></td>              --}}
                                    <td><input type="text" name="Remark_AwRoofRoofEavesPlasterboard" id="Remark_AwRoofRoofEavesPlasterboard"></td>                    
                                    <td><input type="file" name="Remark_AwRoofRoofEavesPlasterboard" id="Remark_AwRoofRoofEavesPlasterboard"></td>                    
                                  </tr>
                        
                                  <tr>
                                    
                                    <td rowspan="4">4</td>
                                    <td rowspan="4">Fascia boards</td>
                                    <td >Metal</td>
                                    <td >2</td>
                                    {{-- <td >
                                      <select onblur="findTotal()" class="arkitek" name="AwRoofFascialBoardsMetal" id="AwRoofFascialBoardsMetal">
                                      <option selected disabled ></option>
                                      <option value="0">0</option>
                                      <option value="2" >2</option>
                                      </select>
                                    </td> --}}
                                    <td> <input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="AwRoofFascialBoardsMetal" id="AwRoofFascialBoardsMetal"></td>            
                                    {{-- <td><input onblur="findTotalConstructed()" type="number" min="0" max="2" class="arkitek_construction" name="Cons_AwRoofFascialBoardsMetal" id="Cons_AwRoofFascialBoardsMetal"></td>             --}}
                                    {{-- <td><input onblur="findTotalAwarded()" type="number" min="0" max="2" class="arkitek_awarded" name="Awarded_AwRoofFascialBoardsMetal" id="Awarded_AwRoofFascialBoardsMetal"></td>              --}}
                                    <td><input type="text" name="Remark_AwRoofFascialBoardsMetal" id="Remark_AwRoofFascialBoardsMetal"></td> 
                                    <td><input type="file" name="Remark_AwRoofFascialBoardsMetal" id="Remark_AwRoofFascialBoardsMetal"></td> 
                        
                                  </tr>
                        
                                  <tr>
                                    <td >Fibre cement</td>
                                    <td >2</td>
                                    {{-- <td >
                                      <select onblur="findTotal()" class="arkitek" name="AwRoofFascialBoardsFiberCement" id="AwRoofFascialBoardsFiberCement">
                                      <option selected disabled ></option>
                                      <option value="0">0</option>
                                      <option value="2" >2</option>
                                      </select>
                                    </td> --}}
                                    <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="AwRoofFascialBoardsFiberCement" id="AwRoofFascialBoardsFiberCement"></td>            
                                    {{-- <td><input onblur="findTotalConstructed()" type="number" min="0" max="2" class="arkitek_construction" name="Cons_AwRoofFascialBoardsFiberCement" id="Cons_AwRoofFascialBoardsFiberCement"></td>             --}}
                                    {{-- <td><input onblur="findTotalAwarded()" type="number" min="0" max="2" class="arkitek_awarded" name="Awarded_AwRoofFascialBoardsFiberCement" id="Awarded_AwRoofFascialBoardsFiberCement"></td>              --}}
                                    <td><input type="text" name="Remark_AwRoofFascialBoardsFiberCement" id="Remark_AwRoofFascialBoardsFiberCement"></td>                    
                                    <td><input type="file" name="Remark_AwRoofFascialBoardsFiberCement" id="Remark_AwRoofFascialBoardsFiberCement"></td>                    
                                  </tr>
                        
                                  <tr>
                                    <td >Plasterboard</td>
                                    <td >2</td>
                                    {{-- <td >
                                      <select onblur="findTotal()" class="arkitek" name="AwRoofFascialBoardsPlasterboard" id="AwRoofFascialBoardsPlasterboard">
                                      <option selected disabled ></option>
                                      <option value="0">0</option>
                                      <option value="2" >2</option>
                                      </select>
                                    </td> --}}
                                    <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="AwRoofFascialBoardsPlasterboard" id="AwRoofFascialBoardsPlasterboard"></td>            
                                    {{-- <td><input onblur="findTotalConstructed()" type="number" min="0" max="2" class="arkitek_construction" name="Cons_AwRoofFascialBoardsPlasterboard" id="Cons_AwRoofFascialBoardsPlasterboard"></td>             --}}
                                    {{-- <td><input onblur="findTotalAwarded()" type="number" min="0" max="2" class="arkitek_awarded" name="Awarded_AwRoofFascialBoardsPlasterboard" id="Awarded_AwRoofFascialBoardsPlasterboard"></td>              --}}
                                    <td><input type="text" name="Remark_AwRoofFascialBoardsPlasterboard" id="Remark_AwRoofFascialBoardsPlasterboard"></td>                    
                                    <td><input type="file" name="Remark_AwRoofFascialBoardsPlasterboard" id="Remark_AwRoofFascialBoardsPlasterboard"></td>                    
                                  </tr>
                        
                                  <tr>
                                    <td >Timber</td>
                                    <td >2</td>
                                    {{-- <td >
                                      <select onblur="findTotal()" class="arkitek" name="AwRoofFascialBoardsTimber" id="AwRoofFascialBoardsTimber">
                                      <option selected disabled ></option>
                                      <option value="0">0</option>
                                      <option value="2" >2</option>
                                      </select>
                                    </td> --}}
                                    <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="AwRoofFascialBoardsTimber" id="AwRoofFascialBoardsTimber"></td>            
                                    {{-- <td><input onblur="findTotalConstructed()" type="number" min="0" max="2" class="arkitek_construction" name="Cons_AwRoofFascialBoardsTimber" id="Cons_AwRoofFascialBoardsTimber"></td>             --}}
                                    {{-- <td><input onblur="findTotalAwarded()" type="number" min="0" max="2" class="arkitek_awarded" name="Awarded_AwRoofFascialBoardsTimber" id="Awarded_AwRoofFascialBoardsTimber"></td>              --}}
                                    <td><input type="text" name="Remark_AwRoofFascialBoardsTimber" id="Remark_AwRoofFascialBoardsTimber"></td>                    
                                    <td><input type="file" name="Remark_AwRoofFascialBoardsTimber" id="Remark_AwRoofFascialBoardsTimber"></td>                    
                                  </tr>
                        
                                  <tr>
                                    
                                    <td rowspan="4">5</td>
                                    <td rowspan="4">Gutter</td>
                                    <td >Upvc</td>
                                    <td >2</td>
                                    {{-- <td >
                                      <select onblur="findTotal()" class="arkitek" name="AwRoofGutterUpvc" id="AwRoofGutterUpvc">
                                      <option selected disabled ></option>
                                      <option value="0">0</option>
                                      <option value="2" >2</option>
                                      </select>
                                    </td> --}}
                                    <td> <input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="AwRoofGutterUpvc" id="AwRoofGutterUpvc"></td>            
                                    {{-- <td><input onblur="findTotalConstructed()" type="number" min="0" max="2" class="arkitek_construction" name="Cons_AwRoofGutterUpvc" id="Cons_AwRoofGutterUpvc"></td>             --}}
                                    {{-- <td><input onblur="findTotalAwarded()" type="number" min="0" max="2" class="arkitek_awarded" name="Awarded_AwRoofGutterUpvc" id="Awarded_AwRoofGutterUpvc"></td>              --}}
                                    <td><input type="text" name="Remark_AwRoofGutterUpvc" id="Remark_AwRoofGutterUpvc"></td> 
                                    <td><input type="file" name="Remark_AwRoofGutterUpvc" id="Remark_AwRoofGutterUpvc"></td> 
                        
                                  </tr>
                        
                                  <tr>
                                    <td >Galvanised iron</td>
                                    <td >2</td>
                                    {{-- <td >
                                      <select onblur="findTotal()" class="arkitek" name="AwRoofGutterGallron" id="AwRoofGutterGallron">
                                      <option selected disabled ></option>
                                      <option value="0">0</option>
                                      <option value="2" >2</option>
                                      </select>
                                    </td> --}}
                                    <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="AwRoofGutterGallron" id="AwRoofGutterGallron"></td>            
                                    {{-- <td><input onblur="findTotalConstructed()" type="number" min="0" max="2" class="arkitek_construction" name="Cons_AwRoofGutterGallron" id="Cons_AwRoofGutterGallron"></td>             --}}
                                    {{-- <td><input onblur="findTotalAwarded()" type="number" min="0" max="2" class="arkitek_awarded" name="Awarded_AwRoofGutterGallron" id="Awarded_AwRoofGutterGallron"></td>              --}}
                                    <td><input type="text" name="Remark_AwRoofGutterGallron" id="Remark_AwRoofGutterGallron"></td>                    
                                    <td><input type="file" name="Remark_AwRoofGutterGallron" id="Remark_AwRoofGutterGallron"></td>                    
                                  </tr>
                        
                                  <tr>
                                    <td >Aluminium</td>
                                    <td >2</td>
                                    {{-- <td >
                                      <select onblur="findTotal()" class="arkitek" name="AwRoofGutterAluminium" id="AwRoofGutterAluminium">
                                      <option selected disabled ></option>
                                      <option value="0">0</option>
                                      <option value="2" >2</option>
                                      </select>
                                    </td> --}}
                                    <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="AwRoofGutterAluminium" id="AwRoofGutterAluminium"></td>            
                                    {{-- <td><input onblur="findTotalConstructed()" type="number" min="0" max="2" class="arkitek_construction" name="Cons_AwRoofGutterAluminium" id="Cons_AwRoofGutterAluminium"></td>             --}}
                                    {{-- <td><input onblur="findTotalAwarded()" type="number" min="0" max="2" class="arkitek_awarded" name="Awarded_AwRoofGutterAluminium" id="Awarded_AwRoofGutterAluminium"></td>              --}}
                                    <td><input type="text" name="Remark_AwRoofGutterAluminium" id="Remark_AwRoofGutterAluminium"></td>                    
                                    <td><input type="file" name="Remark_AwRoofGutterAluminium" id="Remark_AwRoofGutterAluminium"></td>                    
                                  </tr>
                        
                                  <tr>
                                    <td >Stainless steel</td>
                                    <td >2</td>
                                    {{-- <td >
                                      <select onblur="findTotal()" class="arkitek" name="AwRoofGutterStainSteel" id="AwRoofGutterStainSteel">
                                      <option selected disabled ></option>
                                      <option value="0">0</option>
                                      <option value="2" >2</option>
                                      </select>
                                    </td> --}}
                                    <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="AwRoofGutterStainSteel" id="AwRoofGutterStainSteel"></td>            
                                    {{-- <td><input onblur="findTotalConstructed()" type="number" min="0" max="2" class="arkitek_construction" name="Cons_AwRoofGutterStainSteel" id="Cons_AwRoofGutterStainSteel"></td>             --}}
                                    {{-- <td><input onblur="findTotalAwarded()" type="number" min="0" max="2" class="arkitek_awarded" name="Awarded_AwRoofGutterStainSteel" id="Awarded_AwRoofGutterStainSteel"></td>             --}}
                                    <td><input type="text" name="Remark_AwRoofGutterStainSteel" id="Remark_AwRoofGutterStainSteel"></td>                    
                                    <td><input type="file" name="Remark_AwRoofGutterStainSteel" id="Remark_AwRoofGutterStainSteel"></td>                    
                                  </tr>
                        
                                  <tr>
                                    
                                    <td rowspan="4">6</td>
                                    <td rowspan="4">Rainwater down pipes</td>
                                    <td >Upvc</td>
                                    <td >2</td>
                                    {{-- <td >
                                      <select onblur="findTotal()" class="arkitek" name="AwRoofRainPipesUpvc" id="AwRoofRainPipesUpvc">
                                      <option selected disabled ></option>
                                      <option value="0">0</option>
                                      <option value="2" >2</option>
                                      </select>
                                    </td> --}}
                                    <td> <input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="AwRoofRainPipesUpvc" id="AwRoofRainPipesUpvc"></td>            
                                    {{-- <td><input onblur="findTotalConstructed()" type="number" min="0" max="2" class="arkitek_construction" name="Cons_AwRoofRainPipesUpvc" id="Cons_AwRoofRainPipesUpvc"></td>             --}}
                                    {{-- <td><input onblur="findTotalAwarded()" type="number" min="0" max="2" class="arkitek_awarded" name="Awarded_AwRoofRainPipesUpvc" id="Awarded_AwRoofRainPipesUpvc"></td>              --}}
                                    <td><input type="text" name="Remark_AwRoofRainPipesUpvc" id="Remark_AwRoofRainPipesUpvc"></td> 
                                    <td><input type="file" name="Remark_AwRoofRainPipesUpvc" id="Remark_AwRoofRainPipesUpvc"></td> 
                        
                                  </tr>
                        
                                  <tr>
                                    <td >Galvanised iron</td>
                                    <td >2</td>
                                    {{-- <td >
                                      <select onblur="findTotal()" class="arkitek" name="AwRoofRainPipesGallron" id="AwRoofRainPipesGallron">
                                      <option selected disabled ></option>
                                      <option value="0">0</option>
                                      <option value="2" >2</option>
                                      </select>
                                    </td> --}}
                                    <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="AwRoofRainPipesGallron" id="AwRoofRainPipesGallron"></td>            
                                    {{-- <td><input onblur="findTotalConstructed()" type="number" min="0" max="2" class="arkitek_construction" name="Cons_AwRoofRainPipesGallron" id="Cons_AwRoofRainPipesGallron"></td>             --}}
                                    {{-- <td><input onblur="findTotalAwarded()" type="number" min="0" max="2" class="arkitek_awarded" name="Awarded_AwRoofRainPipesGallron" id="Awarded_AwRoofRainPipesGallron"></td>             --}}
                                    <td><input type="text" name="Remark_AwRoofRainPipesGallron" id="Remark_AwRoofRainPipesGallron"></td>                    
                                    <td><input type="file" name="Remark_AwRoofRainPipesGallron" id="Remark_AwRoofRainPipesGallron"></td>                    
                                  </tr>
                        
                                  <tr>
                                    <td >Aluminium</td>
                                    <td >2</td>
                                    {{-- <td >
                                      <select onblur="findTotal()" class="arkitek" name="AwRoofRainPipesAluminium" id="AwRoofRainPipesAluminium">
                                      <option selected disabled ></option>
                                      <option value="0">0</option>
                                      <option value="2" >2</option>
                                      </select>
                                    </td> --}}
                                    <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="AwRoofRainPipesAluminium" id="AwRoofRainPipesAluminium"></td>            
                                    {{-- <td><input onblur="findTotalConstructed()" type="number" min="0" max="2" class="arkitek_construction" name="Cons_AwRoofRainPipesAluminium" id="Cons_AwRoofRainPipesAluminium"></td>             --}}
                                    {{-- <td><input onblur="findTotalAwarded()" type="number" min="0" max="2" class="arkitek_awarded" name="Awarded_AwRoofRainPipesAluminium" id="Awarded_AwRoofRainPipesAluminium"></td>              --}}
                                    <td><input type="text" name="Remark_AwRoofRainPipesAluminium" id="Remark_AwRoofRainPipesAluminium"></td>                    
                                    <td><input type="file" name="Remark_AwRoofRainPipesAluminium" id="Remark_AwRoofRainPipesAluminium"></td>                    
                                  </tr>
                        
                                  <tr>
                                    <td >Stainless steel</td>
                                    <td >2</td>
                                    {{-- <td >
                                      <select onblur="findTotal()" class="arkitek" name="AwRoofRainPipesStainSteel" id="AwRoofRainPipesStainSteel">
                                      <option selected disabled ></option>
                                      <option value="0">0</option>
                                      <option value="2" >2</option>
                                      </select>
                                    </td> --}}
                                    <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="AwRoofRainPipesStainSteel" id="AwRoofRainPipesStainSteel"></td>            
                                    {{-- <td><input onblur="findTotalConstructed()" type="number" min="0" max="2" class="arkitek_construction" name="Cons_AwRoofRainPipesStainSteel" id="Cons_AwRoofRainPipesStainSteel"></td>             --}}
                                    {{-- <td><input onblur="findTotalAwarded()" type="number" min="0" max="2" class="arkitek_awarded" name="Awarded_AwRoofRainPipesStainSteel" id="Awarded_AwRoofRainPipesStainSteel"></td>              --}}
                                    <td><input type="text" name="Remark_AwRoofRainPipesStainSteel" id="Remark_AwRoofRainPipesStainSteel"></td>                    
                                    <td><input type="file" name="Remark_AwRoofRainPipesStainSteel" id="Remark_AwRoofRainPipesStainSteel"></td>                    
                                  </tr>
                        
                                  <tr>
                                    
                                    <td rowspan="3">7</td>
                                    <td rowspan="3">Gutter</td>
                                    <td >Plasterboard</td>
                                    <td >2</td>
                                    {{-- <td >
                                      <select onblur="findTotal()" class="arkitek" name="AwRoofCellingPlasterboards" id="AwRoofCellingPlasterboards">
                                      <option selected disabled ></option>
                                      <option value="0">0</option>
                                      <option value="2" >2</option>
                                      </select>
                                    </td> --}}
                                    <td> <input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="AwRoofCellingPlasterboards" id="AwRoofCellingPlasterboards"></td>            
                                    {{-- <td><input onblur="findTotalConstructed()" type="number" min="0" max="2" class="arkitek_construction" name="Cons_AwRoofCellingPlasterboards" id="Cons_AwRoofCellingPlasterboards"></td>             --}}
                                    {{-- <td><input onblur="findTotalAwarded()" type="number" min="0" max="2" class="arkitek_awarded" name="Awarded_AwRoofCellingPlasterboards" id="Awarded_AwRoofCellingPlasterboards"></td>             --}}
                                    <td><input type="text" name="Remark_AwRoofCellingPlasterboards" id="Remark_AwRoofCellingPlasterboards"></td> 
                                    <td><input type="file" name="Remark_AwRoofCellingPlasterboards" id="Remark_AwRoofCellingPlasterboards"></td> 
                        
                                  </tr>
                        
                                  <tr>
                                    <td >Fibre cement board</td>
                                    <td >2</td>
                                    {{-- <td >
                                      <select onblur="findTotal()" class="arkitek" name="AwRoofCellingFibreCement" id="AwRoofCellingFibreCement">
                                      <option selected disabled ></option>
                                      <option value="0">0</option>
                                      <option value="2" >2</option>
                                      </select>
                                    </td> --}}
                                    <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="AwRoofCellingFibreCement" id="AwRoofCellingFibreCement"></td>            
                                    {{-- <td><input onblur="findTotalConstructed()" type="number" min="0" max="2" class="arkitek_construction" name="Cons_AwRoofCellingFibreCement" id="Cons_AwRoofCellingFibreCement"></td>             --}}
                                    {{-- <td><input onblur="findTotalAwarded()" type="number" min="0" max="2" class="arkitek_awarded" name="Awarded_AwRoofCellingFibreCement" id="Awarded_AwRoofCellingFibreCement"></td>              --}}
                                    <td><input type="text" name="Remark_AwRoofCellingFibreCement" id="Remark_AwRoofCellingFibreCement"></td>                    
                                    <td><input type="file" name="Remark_AwRoofCellingFibreCement" id="Remark_AwRoofCellingFibreCement"></td>                    
                                  </tr>
                        
                                  <tr>
                                    <td >Metal strip</td>
                                    <td >2</td>
                                    {{-- <td >
                                      <select onblur="findTotal()" class="arkitek" name="AwRoofCellingMetalStrip" id="AwRoofCellingMetalStrip">
                                      <option selected disabled ></option>
                                      <option value="0">0</option>
                                      <option value="2" >2</option>
                                      </select>
                                    </td> --}}
                                    <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="AwRoofCellingMetalStrip" id="AwRoofCellingMetalStrip"></td>            
                                    {{-- <td><input onblur="findTotalConstructed()" type="number" min="0" max="2" class="arkitek_construction" name="Cons_AwRoofCellingMetalStrip" id="Cons_AwRoofCellingMetalStrip"></td>             --}}
                                    {{-- <td><input onblur="findTotalAwarded()" type="number" min="0" max="2" class="arkitek_awarded" name="Awarded_AwRoofCellingMetalStrip" id="Awarded_AwRoofCellingMetalStrip"></td>             --}}
                                    <td><input type="text" name="Remark_AwRoofCellingMetalStrip" id="Remark_AwRoofCellingMetalStrip"></td>                    
                                    <td><input type="file" name="Remark_AwRoofCellingMetalStrip" id="Remark_AwRoofCellingMetalStrip"></td>                    
                                  </tr>
                        
                                  <tr>
                                    
                                    <td rowspan="2">8</td>
                                    <td rowspan="2">Truss system</td>
                                    <td >Timber</td>
                                    <td >2</td>
                                    {{-- <td >
                                      <select onblur="findTotal()" class="arkitek" name="AwRoofTrussTimber" id="AwRoofTrussTimber">
                                      <option selected disabled ></option>
                                      <option value="0">0</option>
                                      <option value="2" >2</option>
                                      </select>
                                    </td> --}}
                                    <td> <input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="AwRoofTrussTimber" id="AwRoofTrussTimber"></td>            
                                    {{-- <td><input onblur="findTotalConstructed()" type="number" min="0" max="2" class="arkitek_construction" name="Cons_AwRoofTrussTimber" id="Cons_AwRoofTrussTimber"></td>             --}}
                                    {{-- <td><input onblur="findTotalAwarded()" type="number" min="0" max="2" class="arkitek_awarded" name="Awarded_AwRoofTrussTimber" id="Awarded_AwRoofTrussTimber"></td>              --}}
                                    <td><input type="text" name="Remark_AwRoofTrussTimber" id="Remark_AwRoofTrussTimber"></td> 
                                    <td><input type="file" name="Remark_AwRoofTrussTimber" id="Remark_AwRoofTrussTimber"></td> 
                        
                                  </tr>
                        
                                  <tr>
                                    <td >Metal</td>
                                    <td >2</td>
                                    {{-- <td >
                                      <select onblur="findTotal()" class="arkitek" name="AwRoofTrussMetal" id="AwRoofTrussMetal">
                                      <option selected disabled ></option>
                                      <option value="0">0</option>
                                      <option value="2" >2</option>
                                      </select>
                                    </td> --}}
                                    <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="AwRoofTrussMetal" id="AwRoofTrussMetal"></td>            
                                    {{-- <td><input onblur="findTotalConstructed()" type="number" min="0" max="2" class="arkitek_construction" name="Cons_AwRoofTrussMetal" id="Cons_AwRoofTrussMetal"></td>             --}}
                                    {{-- <td><input onblur="findTotalAwarded()" type="number" min="0" max="2" class="arkitek_awarded" name="Awarded_AwRoofTrussMetal" id="Awarded_AwRoofTrussMetal"></td>              --}}
                                    <td><input type="text" name="Remark_AwRoofTrussMetal" id="Remark_AwRoofTrussMetal"></td>                    
                                    <td><input type="file" name="Remark_AwRoofTrussMetal" id="Remark_AwRoofTrussMetal"></td>                    
                                  </tr>
                      
                                  <tr style="display: none">
                                    <td>markahPRAwRoof<input type="text" name="markahPRAwRoof" id="markahPRAwRoof" /></td>            
                                  </tr>
                      
                                  <tr style="display: none">
                                    <td>markahPRAwRoofConstruction<input type="text" name="Cons_markahPRAwRoof" id="Cons_markahPRAwRoof" /></td>            
                                  </tr>
                      
                                  <tr style="display: none">
                                    <td>markahPRAwRoofAwarded<input type="text" name="Awarded_markahPRAwRoof" id="Awarded_markahPRAwRoof" /></td>            
                                  </tr>
                      
                      
                                  {{-- New table for wall system --}}
                                  <tr class="text-white bg-orange-jkr">
                                    <th colspan="8">List of products for architectural works - Wall System</th>
                                  </tr>
                        
                                  <tr>
                                    
                                    <td rowspan="10">1</td>
                                    <td rowspan="10">Wall types</td>
                                    <td >Bricks</td>
                                    <td >2</td>
                                    {{-- <td >
                                      <select onblur="findTotalWall()" class="prawwall" name="AwWallWallTypesBricks" id="AwWallWallTypesBricks">
                                      <option selected disabled ></option>
                                      <option value="0">0</option>
                                      <option value="2" >2</option>
                                      </select>
                                    </td> --}}
                                    <td> <input onblur="findTotalWall()" type="number" min="0" max="2" class="prawwall" name="AwWallWallTypesBricks" id="AwWallWallTypesBricks"></td>            
                                    {{-- <td><input onblur="findTotalConstructedWall()" type="number" min="0" max="2" class="prawwall_construction" name="Cons_AwWallWallTypesBricks" id="Cons_AwWallWallTypesBricks"></td>             --}}
                                    {{-- <td><input onblur="findTotalAwardedWall()" type="number" min="0" max="2" class="prawwall_awarded" name="Awarded_AwWallWallTypesBricks" id="Awarded_AwWallWallTypesBricks"></td>              --}}
                                    <td><input type="text" name="Remark_AwWallWallTypesBricks" id="Remark_AwWallWallTypesBricks"></td> 
                                    <td><input type="file" name="Remark_AwWallWallTypesBricks" id="Remark_AwWallWallTypesBricks"></td> 
                        
                                  </tr>
                        
                                  <tr>
                                    <td >Timberwork</td>
                                    <td >2</td>
                                    {{-- <td >
                                      <select onblur="findTotalWall()" class="prawwall" name="AwWallWallTypesTimber" id="AwWallWallTypesTimber">
                                      <option selected disabled ></option>
                                      <option value="0">0</option>
                                      <option value="2" >2</option>
                                      </select>
                                    </td> --}}
                                    <td><input onblur="findTotalWall()" type="number" min="0" max="2" class="prawwall " name="AwWallWallTypesTimber" id="AwWallWallTypesTimber"></td>            
                                    {{-- <td><input onblur="findTotalConstructedWall()" type="number" min="0" max="2" class="prawwall_construction" name="Cons_AwWallWallTypesTimber" id="Cons_AwWallWallTypesTimber"></td>             --}}
                                    {{-- <td><input onblur="findTotalAwardedWall()" type="number" min="0" max="2" class="prawwall_awarded" name="Awarded_AwWallWallTypesTimber" id="Awarded_AwWallWallTypesTimber"></td>             --}}
                                    <td><input type="text" name="Remark_AwWallWallTypesTimber" id="Remark_AwWallWallTypesTimber"></td>                    
                                    <td><input type="file" name="Remark_AwWallWallTypesTimber" id="Remark_AwWallWallTypesTimber"></td>                    
                                  </tr>
                        
                                  <tr>
                                    <td >Clay bricks</td>
                                    <td >2</td>
                                    {{-- <td >
                                      <select onblur="findTotalWall()" class="prawwall" name="AwWallWallTypesClay" id="AwWallWallTypesClay">
                                      <option selected disabled ></option>
                                      <option value="0">0</option>
                                      <option value="2" >2</option>
                                      </select>
                                    </td> --}}
                                    <td><input onblur="findTotalWall()" type="number" min="0" max="2" class="prawwall" name="AwWallWallTypesClay" id="AwWallWallTypesClay"></td>            
                                    {{-- <td><input onblur="findTotalConstructedWall()" type="number" min="0" max="2" class="prawwall_construction" name="Cons_AwWallWallTypesClay" id="Cons_AwWallWallTypesClay"></td>             --}}
                                    {{-- <td><input onblur="findTotalAwardedWall()" type="number" min="0" max="2" class="prawwall_awarded" name="Awarded_AwWallWallTypesClay" id="Awarded_AwWallWallTypesClay"></td>             --}}
                                    <td><input type="text" name="Remark_AwWallWallTypesClay" id="Remark_AwWallWallTypesClay"></td>                    
                                    <td><input type="file" name="Remark_AwWallWallTypesClay" id="Remark_AwWallWallTypesClay"></td>                    
                                  </tr>
                        
                                  <tr>
                                    <td >Blockwork</td>
                                    <td >2</td>
                                    {{-- <td >
                                      <select onblur="findTotalWall()" class="prawwall" name="AwWallWallTypesBlockwork" id="AwWallWallTypesBlockwork">
                                      <option selected disabled ></option>
                                      <option value="0">0</option>
                                      <option value="2" >2</option>
                                      </select>
                                    </td> --}}
                                    <td><input onblur="findTotalWall()" type="number" min="0" max="2" class="prawwall" name="AwWallWallTypesBlockwork" id="AwWallWallTypesBlockwork"></td>            
                                    {{-- <td><input onblur="findTotalConstructedWall()" type="number" min="0" max="2" class="prawwall_construction" name="Cons_AwWallWallTypesBlockwork" id="Cons_AwWallWallTypesBlockwork"></td>             --}}
                                    {{-- <td><input onblur="findTotalAwardedWall()" type="number" min="0" max="2" class="prawwall_awarded" name="Awarded_AwWallWallTypesBlockwork" id="Awarded_AwWallWallTypesBlockwork"></td>             --}}
                                    <td><input type="text" name="Remark_AwWallWallTypesBlockwork" id="Remark_AwWallWallTypesBlockwork"></td>                    
                                    <td><input type="file" name="Remark_AwWallWallTypesBlockwork" id="Remark_AwWallWallTypesBlockwork"></td>                    
                                  </tr>
                        
                                  <tr>
                                    <td >Reinforce concrete</td>
                                    <td >2</td>
                                    {{-- <td >
                                      <select onblur="findTotalWall()" class="prawwall" name="AwWallWallTypesReinforce" id="AwWallWallTypesReinforce">
                                      <option selected disabled ></option>
                                      <option value="0">0</option>
                                      <option value="2" >2</option>
                                      </select>
                                    </td> --}}
                                    <td><input onblur="findTotalWall()" type="number" min="0" max="2" class="prawwall" name="AwWallWallTypesReinforce" id="AwWallWallTypesReinforce"></td>            
                                    {{-- <td><input onblur="findTotalConstructedWall()" type="number" min="0" max="2" class="prawwall_construction" name="Cons_AwWallWallTypesReinforce" id="Cons_AwWallWallTypesReinforce"></td>             --}}
                                    {{-- <td><input onblur="findTotalAwardedWall()" type="number" min="0" max="2" class="prawwall_awarded" name="Awarded_AwWallWallTypesReinforce" id="Awarded_AwWallWallTypesReinforce"></td>             --}}
                                    <td><input type="text" name="Remark_AwWallWallTypesReinforce" id="Remark_AwWallWallTypesReinforce"></td>                    
                                    <td><input type="file" name="Remark_AwWallWallTypesReinforce" id="Remark_AwWallWallTypesReinforce"></td>                    
                                  </tr>
                        
                                  <tr>
                                    <td >Aerated concrete</td>
                                    <td >2</td>
                                    {{-- <td >
                                      <select onblur="findTotalWall()" class="prawwall" name="AwWallWallTypesAerated" id="AwWallWallTypesAerated">
                                      <option selected disabled ></option>
                                      <option value="0">0</option>
                                      <option value="2" >2</option>
                                      </select>
                                    </td> --}}
                                    <td><input onblur="findTotalWall()" type="number" min="0" max="2" class="prawwall" name="AwWallWallTypesAerated" id="AwWallWallTypesAerated"></td>            
                                    {{-- <td><input onblur="findTotalConstructedWall()" type="number" min="0" max="2" class="prawwall_construction" name="Cons_AwWallWallTypesAerated" id="Cons_AwWallWallTypesAerated"></td>             --}}
                                    {{-- <td><input onblur="findTotalAwardedWall()" type="number" min="0" max="2" class="prawwall_awarded" name="Awarded_AwWallWallTypesAerated" id="Awarded_AwWallWallTypesAerated"></td>             --}}
                                    <td><input type="text" name="Remark_AwWallWallTypesAerated" id="Remark_AwWallWallTypesAerated"></td>                    
                                    <td><input type="file" name="Remark_AwWallWallTypesAerated" id="Remark_AwWallWallTypesAerated"></td>                    
                                  </tr>
                        
                                  <tr>
                                    <td >Glass</td>
                                    <td >2</td>
                                    {{-- <td >
                                      <select onblur="findTotalWall()" class="prawwall" name="AwWallWallTypesGlass" id="AwWallWallTypesGlass">
                                      <option selected disabled ></option>
                                      <option value="0">0</option>
                                      <option value="2" >2</option>
                                      </select>
                                    </td> --}}
                                    <td><input onblur="findTotalWall()" type="number" min="0" max="2" class="prawwall" name="AwWallWallTypesGlass" id="AwWallWallTypesGlass"></td>            
                                    {{-- <td><input onblur="findTotalConstructedWall()" type="number" min="0" max="2" class="prawwall_construction" name="Cons_AwWallWallTypesGlass" id="Cons_AwWallWallTypesGlass"></td>             --}}
                                    {{-- <td><input onblur="findTotalAwardedWall()" type="number" min="0" max="2" class="prawwall_awarded" name="Awarded_AwWallWallTypesGlass" id="Awarded_AwWallWallTypesGlass"></td>             --}}
                                    <td><input type="text" name="Remark_AwWallWallTypesGlass" id="Remark_AwWallWallTypesGlass"></td>                    
                                    <td><input type="file" name="Remark_AwWallWallTypesGlass" id="Remark_AwWallWallTypesGlass"></td>                    
                                  </tr>
                        
                                  <tr>
                                    <td >Gypsum board</td>
                                    <td >2</td>
                                    {{-- <td >
                                      <select onblur="findTotalWall()" class="prawwall" name="AwWallWallTypesGypsum" id="AwWallWallTypesGypsum">
                                      <option selected disabled ></option>
                                      <option value="0">0</option>
                                      <option value="2" >2</option>
                                      </select>
                                    </td> --}}
                                    <td><input onblur="findTotalWall()" type="number" min="0" max="2" class="prawwall" name="AwWallWallTypesGypsum" id="AwWallWallTypesGypsum"></td>            
                                    {{-- <td><input onblur="findTotalConstructedWall()" type="number" min="0" max="2" class="prawwall_construction" name="Cons_AwWallWallTypesGypsum" id="Cons_AwWallWallTypesGypsum"></td>             --}}
                                    {{-- <td><input onblur="findTotalAwardedWall()" type="number" min="0" max="2" class="prawwall_awarded" name="Awarded_AwWallWallTypesGypsum" id="Awarded_AwWallWallTypesGypsum"></td>             --}}
                                    <td><input type="text" name="Remark_AwWallWallTypesGypsum" id="Remark_AwWallWallTypesGypsum"></td>                    
                                    <td><input type="file" name="Remark_AwWallWallTypesGypsum" id="Remark_AwWallWallTypesGypsum"></td>                    
                                  </tr>
                        
                                  <tr>
                                    <td >Cement board</td>
                                    <td >2</td>
                                    {{-- <td >
                                      <select onblur="findTotalWall()" class="prawwall" name="AwWallWallTypesCement" id="AwWallWallTypesCement">
                                      <option selected disabled ></option>
                                      <option value="0">0</option>
                                      <option value="2" >2</option>
                                      </select>
                                    </td> --}}
                                    <td><input onblur="findTotalWall()" type="number" min="0" max="2" class="prawwall" name="AwWallWallTypesCement" id="AwWallWallTypesCement"></td>            
                                    {{-- <td><input onblur="findTotalConstructedWall()" type="number" min="0" max="2" class="prawwall_construction" name="Cons_AwWallWallTypesCement" id="Cons_AwWallWallTypesCement"></td>             --}}
                                    {{-- <td><input onblur="findTotalAwardedWall()" type="number" min="0" max="2" class="prawwall_awarded" name="Awarded_AwWallWallTypesCement" id="Awarded_AwWallWallTypesCement"></td>             --}}
                                    <td><input type="text" name="Remark_AwWallWallTypesCement" id="Remark_AwWallWallTypesCement"></td>                    
                                    <td><input type="file" name="Remark_AwWallWallTypesCement" id="Remark_AwWallWallTypesCement"></td>                    
                                  </tr>
                        
                                  <tr>
                                    <td >Fibre cement</td>
                                    <td >2</td>
                                    {{-- <td >
                                      <select onblur="findTotalWall()" class="prawwall" name="AwWallWallTypesFibreCement" id="AwWallWallTypesFibreCement">
                                      <option selected disabled ></option>
                                      <option value="0">0</option>
                                      <option value="2" >2</option>
                                      </select>
                                    </td> --}}
                                    <td><input onblur="findTotalWall()" type="number" min="0" max="2" class="prawwall" name="AwWallWallTypesFibreCement" id="AwWallWallTypesFibreCement"></td>            
                                    {{-- <td><input onblur="findTotalConstructedWall()" type="number" min="0" max="2" class="prawwall_construction" name="Cons_AwWallWallTypesFibreCement" id="Cons_AwWallWallTypesFibreCement"></td>             --}}
                                    {{-- <td><input onblur="findTotalAwardedWall()" type="number" min="0" max="2" class="prawwall_awarded" name="Awarded_AwWallWallTypesFibreCement" id="Awarded_AwWallWallTypesFibreCement"></td>             --}}
                                    <td><input type="text" name="Remark_AwWallWallTypesFibreCement" id="Remark_AwWallWallTypesFibreCement"></td>                    
                                    <td><input type="file" name="Remark_AwWallWallTypesFibreCement" id="Remark_AwWallWallTypesFibreCement"></td>                    
                                  </tr>
                        
                                  <tr>
                                    
                                    <td rowspan="12">2</td> 
                                    <td rowspan="12">Finishes</td>
                                    <td >Paints</td>
                                    <td >2</td>
                                    {{-- <td >
                                      <select onblur="findTotalWall()" class="prawwall" name="AwWallFinishesPaints" id="AwWallFinishesPaints">
                                      <option selected disabled ></option>
                                      <option value="0">0</option>
                                      <option value="2" >2</option>
                                      </select>
                                    </td> --}}
                                    <td> <input onblur="findTotalWall()" type="number" min="0" max="2" class="prawwall" name="AwWallFinishesPaints" id="AwWallFinishesPaints"></td>            
                                    {{-- <td><input onblur="findTotalConstructedWall()" type="number" min="0" max="2" class="prawwall_construction" name="Cons_AwWallFinishesPaints" id="Cons_AwWallFinishesPaints"></td>             --}}
                                    {{-- <td><input onblur="findTotalAwardedWall()" type="number" min="0" max="2" class="prawwall_awarded" name="Awarded_AwWallFinishesPaints" id="Awarded_AwWallFinishesPaints"></td>             --}}
                                    <td><input type="text" name="Remark_AwWallFinishesPaints" id="Remark_AwWallFinishesPaints"></td> 
                                    <td><input type="file" name="Remark_AwWallFinishesPaints" id="Remark_AwWallFinishesPaints"></td> 
                        
                        
                                  </tr>
                        
                                  <tr>
                                    <td >Composite panel</td>
                                    <td >2</td>
                                    {{-- <td >
                                      <select onblur="findTotalWall()" class="prawwall" name="AwWallFinishesComposite" id="AwWallFinishesComposite">
                                      <option selected disabled ></option>
                                      <option value="0">0</option>
                                      <option value="2" >2</option>
                                      </select>
                                    </td> --}}
                                    <td><input onblur="findTotalWall()" type="number" min="0" max="2" class="prawwall" name="AwWallFinishesComposite" id="AwWallFinishesComposite"></td>            
                                    {{-- <td><input onblur="findTotalConstructedWall()" type="number" min="0" max="2" class="prawwall_construction" name="Cons_AwWallFinishesComposite" id="Cons_AwWallFinishesComposite"></td>             --}}
                                    {{-- <td><input onblur="findTotalAwardedWall()" type="number" min="0" max="2" class="prawwall_awarded" name="Awarded_AwWallFinishesComposite" id="Awarded_AwWallFinishesComposite"></td>             --}}
                                    <td><input type="text" name="Remark_AwWallFinishesComposite" id="Remark_AwWallFinishesComposite"></td>                    
                                    <td><input type="file" name="Remark_AwWallFinishesComposite" id="Remark_AwWallFinishesComposite"></td>                    
                                  </tr>
                        
                                  <tr>
                                    <td >Wall paper</td>
                                    <td >2</td>
                                    {{-- <td >
                                      <select onblur="findTotalWall()" class="prawwall" name="AwWallFinishesWallpaper" id="AwWallFinishesWallpaper">
                                      <option selected disabled ></option>
                                      <option value="0">0</option>
                                      <option value="2" >2</option>
                                      </select>
                                    </td> --}}
                                    <td><input onblur="findTotalWall()" type="number" min="0" max="2" class="prawwall" name="AwWallFinishesWallpaper" id="AwWallFinishesWallpaper"></td>            
                                    {{-- <td><input onblur="findTotalConstructedWall()" type="number" min="0" max="2" class="prawwall_construction" name="Cons_AwWallFinishesWallpaper" id="Cons_AwWallFinishesWallpaper"></td>             --}}
                                    {{-- <td><input onblur="findTotalAwardedWall()" type="number" min="0" max="2" class="prawwall_awarded" name="Awarded_AwWallFinishesWallpaper" id="Awarded_AwWallFinishesWallpaper"></td>             --}}
                                    <td><input type="text" name="Remark_AwWallFinishesWallpaper" id="Remark_AwWallFinishesWallpaper"></td>                    
                                    <td><input type="file" name="Remark_AwWallFinishesWallpaper" id="Remark_AwWallFinishesWallpaper"></td>                    
                                  </tr>
                        
                                  <tr>
                                    <td >Ceramic tiles</td>
                                    <td >2</td>
                                    {{-- <td >
                                      <select onblur="findTotalWall()" class="prawwall" name="AwWallFinishesCeramic" id="AwWallFinishesCeramic">
                                      <option selected disabled ></option>
                                      <option value="0">0</option>
                                      <option value="2" >2</option>
                                      </select>
                                    </td> --}}
                                    <td><input onblur="findTotalWall()" type="number" min="0" max="2" class="prawwall" name="AwWallFinishesCeramic" id="AwWallFinishesCeramic"></td>            
                                    {{-- <td><input onblur="findTotalConstructedWall()" type="number" min="0" max="2" class="prawwall_construction" name="Cons_AwWallFinishesCeramic" id="Cons_AwWallFinishesCeramic"></td>             --}}
                                    {{-- <td><input onblur="findTotalAwardedWall()" type="number" min="0" max="2" class="prawwall_awarded" name="Awarded_AwWallFinishesCeramic" id="Awarded_AwWallFinishesCeramic"></td>             --}}
                                    <td><input type="text" name="Remark_AwWallFinishesCeramic" id="Remark_AwWallFinishesCeramic"></td>                    
                                    <td><input type="file" name="Remark_AwWallFinishesCeramic" id="Remark_AwWallFinishesCeramic"></td>                    
                                  </tr>
                        
                                  <tr>
                                    <td >Stones</td>
                                    <td >2</td>
                                    {{-- <td >
                                      <select onblur="findTotalWall()" class="prawwall" name="AwWallFinishesStones" id="AwWallFinishesStones">
                                      <option selected disabled ></option>
                                      <option value="0">0</option>
                                      <option value="2" >2</option>
                                      </select>
                                    </td> --}}
                                    <td><input onblur="findTotalWall()" type="number" min="0" max="2" class="prawwall" name="AwWallFinishesStones" id="AwWallFinishesStones"></td>            
                                    {{-- <td><input onblur="findTotalConstructedWall()" type="number" min="0" max="2" class="prawwall_construction" name="Cons_AwWallFinishesStones" id="Cons_AwWallFinishesStones"></td>             --}}
                                    {{-- <td><input onblur="findTotalAwardedWall()" type="number" min="0" max="2" class="prawwall_awarded" name="Awarded_AwWallFinishesStones" id="Awarded_AwWallFinishesStones"></td>             --}}
                                    <td><input type="text" name="Remark_AwWallFinishesStones" id="Remark_AwWallFinishesStones"></td>                    
                                    <td><input type="file" name="Remark_AwWallFinishesStones" id="Remark_AwWallFinishesStones"></td>                    
                                  </tr>
                        
                                  <tr>
                                    <td >Pebblewash</td>
                                    <td >2</td>
                                    {{-- <td >
                                      <select onblur="findTotalWall()" class="prawwall" name="AwWallFinishesPebblewash" id="AwWallFinishesPebblewash">
                                      <option selected disabled ></option>
                                      <option value="0">0</option>
                                      <option value="2" >2</option>
                                      </select>
                                    </td> --}}
                                    <td><input onblur="findTotalWall()" type="number" min="0" max="2" class="prawwall" name="AwWallFinishesPebblewash" id="AwWallFinishesPebblewash"></td>            
                                    {{-- <td><input onblur="findTotalConstructedWall()" type="number" min="0" max="2" class="prawwall_construction" name="Cons_AwWallFinishesPebblewash" id="Cons_AwWallFinishesPebblewash"></td>             --}}
                                    {{-- <td><input onblur="findTotalAwardedWall()" type="number" min="0" max="2" class="prawwall_awarded" name="Awarded_AwWallFinishesPebblewash" id="Awarded_AwWallFinishesPebblewash"></td>             --}}
                                    <td><input type="text" name="Remark_AwWallFinishesPebblewash" id="Remark_AwWallFinishesPebblewash"></td>                    
                                    <td><input type="file" name="Remark_AwWallFinishesPebblewash" id="Remark_AwWallFinishesPebblewash"></td>                    
                                  </tr>
                        
                                  <tr>
                                    <td >Granite</td>
                                    <td >2</td>
                                    {{-- <td >
                                      <select onblur="findTotalWall()" class="prawwall" name="AwWallFinishesGranite" id="AwWallFinishesGranite">
                                      <option selected disabled ></option>
                                      <option value="0">0</option>
                                      <option value="2" >2</option>
                                      </select>
                                    </td> --}}
                                    <td><input onblur="findTotalWall()" type="number" min="0" max="2" class="prawwall" name="AwWallFinishesGranite" id="AwWallFinishesGranite"></td>            
                                    {{-- <td><input onblur="findTotalConstructedWall()" type="number" min="0" max="2" class="prawwall_construction" name="Cons_AwWallFinishesGranite" id="Cons_AwWallFinishesGranite"></td>             --}}
                                    {{-- <td><input onblur="findTotalAwardedWall()" type="number" min="0" max="2" class="prawwall_awarded" name="Awarded_AwWallFinishesGranite" id="Awarded_AwWallFinishesGranite"></td>             --}}
                                    <td><input type="text" name="Remark_AwWallFinishesGranite" id="Remark_AwWallFinishesGranite"></td>                    
                                    <td><input type="file" name="Remark_AwWallFinishesGranite" id="Remark_AwWallFinishesGranite"></td>                    
                                  </tr>
                        
                                  <tr>
                                    <td >Glass</td>
                                    <td >2</td>
                                    {{-- <td >
                                      <select onblur="findTotalWall()" class="prawwall" name="AwWallFinishesGlass" id="AwWallFinishesGlass">
                                      <option selected disabled ></option>
                                      <option value="0">0</option>
                                      <option value="2" >2</option>
                                      </select>
                                    </td> --}}
                                    <td><input onblur="findTotalWall()" type="number" min="0" max="2" class="prawwall" name="AwWallFinishesGlass" id="AwWallFinishesGlass"></td>            
                                    {{-- <td><input onblur="findTotalConstructedWall()" type="number" min="0" max="2" class="prawwall_construction" name="Cons_AwWallFinishesGlass" id="Cons_AwWallFinishesGlass"></td>             --}}
                                    {{-- <td><input onblur="findTotalAwardedWall()" type="number" min="0" max="2" class="prawwall_awarded" name="Awarded_AwWallFinishesGlass" id="Awarded_AwWallFinishesGlass"></td>            --}}
                                    <td><input type="text" name="Remark_AwWallFinishesGlass" id="Remark_AwWallFinishesGlass"></td>                    
                                    <td><input type="file" name="Remark_AwWallFinishesGlass" id="Remark_AwWallFinishesGlass"></td>                    
                                  </tr>
                        
                                  <tr>
                                    <td >Glass block</td>
                                    <td >2</td>
                                    {{-- <td >
                                      <select onblur="findTotalWall()" class="prawwall" name="AwWallFinishesGlassBlock" id="AwWallFinishesGlassBlock">
                                      <option selected disabled ></option>
                                      <option value="0">0</option>
                                      <option value="2" >2</option>
                                      </select>
                                    </td> --}}
                                    <td><input onblur="findTotalWall()" type="number" min="0" max="2" class="prawwall" name="AwWallFinishesGlassBlock" id="AwWallFinishesGlassBlock"></td>            
                                    {{-- <td><input onblur="findTotalConstructedWall()" type="number" min="0" max="2" class="prawwall_construction" name="Cons_AwWallFinishesGlassBlock" id="Cons_AwWallFinishesGlassBlock"></td>             --}}
                                    {{-- <td><input onblur="findTotalAwardedWall()" type="number" min="0" max="2" class="prawwall_awarded" name="Awarded_AwWallFinishesGlassBlock" id="Awarded_AwWallFinishesGlassBlock"></td>            --}}
                                    <td><input type="text" name="Remark_AwWallFinishesGlassBlock" id="Remark_AwWallFinishesGlassBlock"></td>                    
                                    <td><input type="file" name="Remark_AwWallFinishesGlassBlock" id="Remark_AwWallFinishesGlassBlock"></td>                    
                                  </tr>
                        
                                  <tr>
                                    <td >Timber panelling</td>
                                    <td >2</td>
                                    {{-- <td >
                                      <select onblur="findTotalWall()" class="prawwall" name="AwWallFinishesTimber" id="AwWallFinishesTimber">
                                      <option selected disabled ></option>
                                      <option value="0">0</option>
                                      <option value="2" >2</option>
                                      </select>
                                    </td> --}}
                                    <td><input onblur="findTotalWall()" type="number" min="0" max="2" class="prawwall" name="AwWallFinishesTimber" id="AwWallFinishesTimber"></td>            
                                    {{-- <td><input onblur="findTotalConstructedWall()" type="number" min="0" max="2" class="prawwall_construction" name="Cons_AwWallFinishesTimber" id="Cons_AwWallFinishesTimber"></td>             --}}
                                    {{-- <td><input onblur="findTotalAwardedWall()" type="number" min="0" max="2" class="prawwall_awarded" name="Awarded_AwWallFinishesTimber" id="Awarded_AwWallFinishesTimber"></td>             --}}
                                    <td><input type="text" name="Remark_AwWallFinishesTimber" id="Remark_AwWallFinishesTimber"></td>                    
                                    <td><input type="file" name="Remark_AwWallFinishesTimber" id="Remark_AwWallFinishesTimber"></td>                    
                                  </tr>
                        
                                  <tr>
                                    <td >Plaster</td>
                                    <td >2</td>
                                    {{-- <td >
                                      <select onblur="findTotalWall()" class="prawwall" name="AwWallFinishesPaster" id="AwWallFinishesPaster">
                                      <option selected disabled ></option>
                                      <option value="0">0</option>
                                      <option value="2" >2</option>
                                      </select>
                                    </td> --}}
                                    <td><input onblur="findTotalWall()" type="number" min="0" max="2" class="prawwall" name="AwWallFinishesPaster" id="AwWallFinishesPaster"></td>            
                                    {{-- <td><input onblur="findTotalConstructedWall()" type="number" min="0" max="2" class="prawwall_construction" name="Cons_AwWallFinishesPaster" id="Cons_AwWallFinishesPaster"></td>             --}}
                                    {{-- <td><input onblur="findTotalAwardedWall()" type="number" min="0" max="2" class="prawwall_awarded" name="Awarded_AwWallFinishesPaster" id="Awarded_AwWallFinishesPaster"></td>             --}}
                                    <td><input type="text" name="Remark_AwWallFinishesPaster" id="Remark_AwWallFinishesPaster"></td>                    
                                    <td><input type="file" name="Remark_AwWallFinishesPaster" id="Remark_AwWallFinishesPaster"></td>                    
                                  </tr>
                        
                                  <tr>
                                    <td >Growall</td>
                                    <td >2</td>
                                    {{-- <td >
                                      <select onblur="findTotalWall()" class="prawwall" name="AwWallFinishesGrowall" id="AwWallFinishesGrowall">
                                      <option selected disabled ></option>
                                      <option value="0">0</option>
                                      <option value="2" >2</option>
                                      </select>
                                    </td> --}}
                                    <td><input onblur="findTotalWall()" type="number" min="0" max="2" class="prawwall" name="AwWallFinishesGrowall" id="AwWallFinishesGrowall"></td>            
                                    {{-- <td><input onblur="findTotalConstructedWall()" type="number" min="0" max="2" class="prawwall_construction" name="Cons_AwWallFinishesGrowall" id="Cons_AwWallFinishesGrowall"></td>             --}}
                                    {{-- <td><input onblur="findTotalAwardedWall()" type="number" min="0" max="2" class="prawwall_awarded" name="Awarded_AwWallFinishesGrowall" id="Awarded_AwWallFinishesGrowall"></td>              --}}
                                    <td><input type="text" name="Remark_AwWallFinishesGrowall" id="Remark_AwWallFinishesGrowall"></td>                    
                                    <td><input type="file" name="Remark_AwWallFinishesGrowall" id="Remark_AwWallFinishesGrowall"></td>                    
                                  </tr>
                      
                                  <tr style="display: none">
                                    <td>markahPRAwWall <input type="text" name="markahPRAwWall" id="markahPRAwWall" /></td>            
                                  </tr>
                      
                                  <tr style="display: none">
                                    <td>markahPRAwWallConstruction <input type="text" name="Cons_markahPRAwWall" id="Cons_markahPRAwWall" /></td>            
                                  </tr>
                      
                                  <tr style="display: none">
                                    <td>markahPRAwWallAwarded <input type="text" name="Awarded_markahPRAwWall" id="Awarded_markahPRAwWall" /></td>            
                                  </tr>

                                  <tr class="text-center">
                                    <td rowspan="4" >1</td>
                                    <td rowspan="4">Frames</td>
                                    <td >Aluminium</td>
                                    <td >2</td>
                                    <td><input onblur="findTotalWindow()" min="0" max="2" type="number" class="arkitek" name="AwWindowFramesAluminium" id="AwWindowFramesAluminium"></td>            
                                    {{-- <td><input onblur="findTotalWindowConstruction()" min="0" max="2" type="number" class="window_construction" name="Cons_AwWindowFramesAluminium" id="Cons_AwWindowFramesAluminium"></td>             --}}
                                    {{-- <td><input onblur="findTotalWindowAwarded()" min="0" max="2" type="number" class="window_awarded" name="Awarded_AwWindowFramesAluminium" id="Awarded_AwWindowFramesAluminium"></td>                         --}}
                                    <td><input type="text" name="Remark_AwWindowFramesAluminium" id="Remark_AwWindowFramesAluminium"></td>                    
                                    <td><input type="file" name="Remark_AwWindowFramesAluminium" id="Remark_AwWindowFramesAluminium"></td>                    
                                  </tr>
                        
                                  <tr>
                                    <td >Mild steel</td>
                                    <td >2</td>
                                    <td><input onblur="findTotalWindow()" type="number" min="0" max="2" class="arkitek" name="AwWindowFramesMildSteel" id="AwWindowFramesMildSteel"></td>            
                                    {{-- <td><input onblur="findTotalWindowConstruction()" min="0" max="2" type="number" class="window_construction" name="Cons_AwWindowFramesMildSteel" id="Cons_AwWindowFramesMildSteel"></td>             --}}
                                    {{-- <td><input onblur="findTotalWindowAwarded()" min="0" max="2" type="number" class="window_awarded" name="Awarded_AwWindowFramesMildSteel" id="Awarded_AwWindowFramesMildSteel"></td>             --}}
                                    <td><input type="text" name="Remark_AwWindowFramesMildSteel" id="Remark_AwWindowFramesMildSteel"></td>                    
                                    <td><input type="file" name="Remark_AwWindowFramesMildSteel" id="Remark_AwWindowFramesMildSteel"></td>                    
                                  </tr>
                        
                                  <tr>
                                    
                                    <td >Timber</td>
                                    <td >2</td>
                                    <td><input onblur="findTotalWindow()" type="number" min="0" max="2" class="arkitek" name="AwWindowFramesTimber" id="AwWindowFramesTimber"></td>            
                                    {{-- <td><input onblur="findTotalWindowConstruction()" min="0" max="2" type="number" class="window_construction" name="Cons_AwWindowFramesTimber" id="Cons_AwWindowFramesTimber"></td>             --}}
                                    {{-- <td><input onblur="findTotalWindowAwarded()" min="0" max="2" type="number" class="window_awarded" name="Awarded_AwWindowFramesTimber" id="Awarded_AwWindowFramesTimber"></td>             --}}
                                    <td><input type="text" name="Remark_AwWindowFramesTimber" id="Remark_AwWindowFramesTimber"></td>                    
                                    <td><input type="file" name="Remark_AwWindowFramesTimber" id="Remark_AwWindowFramesTimber"></td>                    
                                  </tr>
                        
                                  <tr>
                                    <td >UPVC</td>
                                    <td >2</td>
                                    <td><input onblur="findTotalWindow()" type="number" min="0" max="2" class="arkitek" name="AwWindowFramesUpvc" id="AwWindowFramesUpvc"></td>            
                                    {{-- <td><input onblur="findTotalWindowConstruction()" min="0" max="2" type="number" class="window_construction" name="Cons_AwWindowFramesUpvc" id="Cons_AwWindowFramesUpvc"></td>             --}}
                                    {{-- <td><input onblur="findTotalWindowAwarded()" min="0" max="2" type="number" class="window_awarded" name="Awarded_AwWindowFramesUpvc" id="Awarded_AwWindowFramesUpvc"></td>             --}}
                                    <td><input type="text" name="Remark_AwWindowFramesUpvc" id="Remark_AwWindowFramesUpvc"></td>                    
                                    <td><input type="file" name="Remark_AwWindowFramesUpvc" id="Remark_AwWindowFramesUpvc"></td>                    
                                  </tr>
                                  
                                  <tr>
                                    <td rowspan="4">2</td>
                                    <td rowspan="4">Sub component (panel)</td>
                                    <td >Glass</td>
                                    <td >2</td>
                                    <td><input onblur="findTotalWindow()" type="number" min="0" max="2" class="arkitek" name="AwWindowPanelGlass" id="AwWindowPanelGlass"></td>            
                                    {{-- <td><input onblur="findTotalWindowConstruction()" min="0" max="2" type="number" class="window_construction" name="Cons_AwWindowPanelGlass" id="Cons_AwWindowPanelGlass"></td>             --}}
                                    {{-- <td><input onblur="findTotalWindowAwarded()" min="0" max="2" type="number" class="window_awarded" name="Awarded_AwWindowPanelGlass" id="Awarded_AwWindowPanelGlass"></td>             --}}
                                    <td><input type="text" name="Remark_AwWindowPanelGlass" id="Remark_AwWindowPanelGlass"></td>                    
                                    <td><input type="file" name="Remark_AwWindowPanelGlass" id="Remark_AwWindowPanelGlass"></td>                    
                                  </tr>
                        
                                  <tr>
                                    <td >Timber</td>
                                    <td >2</td>
                                    <td><input onblur="findTotalWindow()" type="number" min="0" max="2" class="arkitek" name="AwWindowPanelTimber" id="AwWindowPanelTimber"></td>            
                                    {{-- <td><input onblur="findTotalWindowConstruction()" min="0" max="2" type="number" class="window_construction" name="Cons_AwWindowPanelTimber" id="Cons_AwWindowPanelTimber"></td>             --}}
                                    {{-- <td><input onblur="findTotalWindowAwarded()" min="0" max="2" type="number" class="window_awarded" name="Awarded_AwWindowPanelTimber" id="Awarded_AwWindowPanelTimber"></td>             --}}
                                    <td><input type="text" name="Remark_AwWindowPanelTimber" id="Remark_AwWindowPanelTimber"></td>                    
                                    <td><input type="file" name="Remark_AwWindowPanelTimber" id="Remark_AwWindowPanelTimber"></td>                    
                                  </tr>
                        
                                  <tr>
                                    <td >Aluminium</td>
                                    <td >2</td>
                                    <td><input onblur="findTotalWindow()" type="number" min="0" max="2" class="arkitek" name="AwWindowPanelAluminium" id="AwWindowPanelAluminium"></td>            
                                    {{-- <td><input onblur="findTotalWindowConstruction()" min="0" max="2" type="number" class="window_construction" name="Cons_AwWindowPanelAluminium" id="Cons_AwWindowPanelAluminium"></td>             --}}
                                    {{-- <td><input onblur="findTotalWindowAwarded()" min="0" max="2" type="number" class="window_awarded" name="Awarded_AwWindowPanelAluminium" id="Awarded_AwWindowPanelAluminium"></td>             --}}
                                    <td><input type="text" name="Remark_AwWindowPanelAluminium" id="Remark_AwWindowPanelAluminium"></td>                    
                                    <td><input type="file" name="Remark_AwWindowPanelAluminium" id="Remark_AwWindowPanelAluminium"></td>                    
                                  </tr>
                        
                                  <tr>
                                    <td >Steel</td>
                                    <td >2</td>
                                    <td><input onblur="findTotalWindow()" type="number" min="0" max="2" class="arkitek" name="AwWindowPanelSteel" id="AwWindowPanelSteel"></td>            
                                    {{-- <td><input onblur="findTotalWindowConstruction()" min="0" max="2" type="number" class="window_construction" name="Cons_AwWindowPanelAluminium" id="Cons_AwWindowPanelAluminium"></td>             --}}
                                    {{-- <td><input onblur="findTotalWindowAwarded()" min="0" max="2" type="number" class="window_awarded" name="Awarded_AwWindowPanelAluminium" id="Awarded_AwWindowPanelAluminium"></td>             --}}
                                    <td><input type="text" name="Remark_AwWindowPanelAluminium" id="Remark_AwWindowPanelAluminium"></td>                    
                                    <td><input type="FILE" name="Remark_AwWindowPanelAluminium" id="Remark_AwWindowPanelAluminium"></td>                    
                                  </tr>
                        
                                  <tr>
                                    <td rowspan="4">3</td>
                                    <td rowspan="4">Ironmongeries</td>
                                    <td >Friction Stay</td>
                                    <td >2</td>
                                    <td><input onblur="findTotalWindow()" type="number" min="0" max="2" class="arkitek" name="AwWindowIronFriction" id="AwWindowIronFriction"></td>            
                                    {{-- <td><input onblur="findTotalWindowConstruction()" min="0" max="2" type="number" class="window_construction" name="Cons_AwWindowIronFriction" id="Cons_AwWindowIronFriction"></td>             --}}
                                    {{-- <td><input onblur="findTotalWindowAwarded()" min="0" max="2" type="number" class="window_awarded" name="Awarded_AwWindowIronFriction" id="Awarded_AwWindowIronFriction"></td>             --}}
                                    <td><input type="text" name="Remark_AwWindowIronFriction" id="Remark_AwWindowIronFriction"></td>                    
                                    <td><input type="file" name="Remark_AwWindowIronFriction" id="Remark_AwWindowIronFriction"></td>                    
                                  </tr>
                        
                                  <tr>
                                    <td >Hinges</td>
                                    <td >2</td>
                                    <td><input onblur="findTotalWindow()" type="number" min="0" max="2" class="arkitek" name="AwWindowIronHinges" id="AwWindowIronHinges"></td>            
                                    {{-- <td><input onblur="findTotalWindowConstruction()" min="0" max="2" type="number" class="window_construction" name="Cons_AwWindowIronHinges" id="Cons_AwWindowIronHinges"></td>             --}}
                                    {{-- <td><input onblur="findTotalWindowAwarded()" min="0" max="2" type="number" class="window_awarded" name="Awarded_AwWindowIronHinges" id="Awarded_AwWindowIronHinges"></td>             --}}
                                    <td><input type="text" name="Remark_AwWindowIronHinges" id="Remark_AwWindowIronHinges"></td>                    
                                    <td><input type="file" name="Remark_AwWindowIronHinges" id="Remark_AwWindowIronHinges"></td>                    
                                  </tr>
                        
                                  <tr>
                                    <td >Handle</td>
                                    <td >2</td>
                                    <td><input onblur="findTotalWindow()" type="number" min="0" max="2" class="arkitek" name="AwWindowIronHandle" id="AwWindowIronHandle"></td>            
                                    {{-- <td><input onblur="findTotalWindowConstruction()" min="0" max="2" type="number" class="window_construction" name="Cons_AwWindowIronHandle" id="Cons_AwWindowIronHandle"></td>             --}}
                                    {{-- <td><input onblur="findTotalWindowAwarded()" min="0" max="2" type="number" class="window_awarded" name="Awarded_AwWindowIronHandle" id="Awarded_AwWindowIronHandle"></td>             --}}
                                    <td><input type="text" name="Remark_AwWindowIronHandle" id="Remark_AwWindowIronHandle"></td>                    
                                    <td><input type="file" name="Remark_AwWindowIronHandle" id="Remark_AwWindowIronHandle"></td>                    
                                  </tr>
                        
                                  <tr>
                                    <td >Rubber Gasket</td>
                                    <td >2</td>
                                    <td><input onblur="findTotalWindow()" type="number" min="0" max="2" class="arkitek" name="AwWindowIronRubber" id="AwWindowIronRubber"></td>            
                                    {{-- <td><input onblur="findTotalWindowConstruction()" min="0" max="2" type="number" class="window_construction" name="Cons_AwWindowIronRubber" id="Cons_AwWindowIronRubber"></td>             --}}
                                    {{-- <td><input onblur="findTotalWindowAwarded()" min="0" max="2" type="number" class="window_awarded" name="Awarded_AwWindowIronRubber" id="Awarded_AwWindowIronRubber"></td>            --}}
                                    <td><input type="text" name="Remark_AwWindowIronRubber" id="Remark_AwWindowIronRubber"></td>                    
                                    <td><input type="file" name="Remark_AwWindowIronRubber" id="Remark_AwWindowIronRubber"></td>                    
                                  </tr>
                        
                                  <tr>
                                    <td rowspan="3">4</td>
                                    <td rowspan="3">Finishes</td>
                                    <td >Anodised Coatings</td>
                                    <td >2</td>
                                    <td> <input onblur="findTotalWindow()" type="number" min="0" max="2" class="arkitek" name="AwWindowFinishesAnodised" id="AwWindowFinishesAnodised"></td>            
                                    {{-- <td><input onblur="findTotalWindowConstruction()" min="0" max="2" type="number" class="window_construction" name="Cons_AwWindowFinishesAnodised" id="Cons_AwWindowFinishesAnodised"></td>             --}}
                                    {{-- <td><input onblur="findTotalWindowAwarded()" min="0" max="2" type="number" class="window_awarded" name="Awarded_AwWindowFinishesAnodised" id="Awarded_AwWindowFinishesAnodised"></td> --}}
                                    <td><input type="text" name="Remark_AwWindowFinishesAnodised" id="Remark_AwWindowFinishesAnodised"></td>                    
                                    <td><input type="file" name="Remark_AwWindowFinishesAnodised" id="Remark_AwWindowFinishesAnodised"></td>                    
                                  </tr>
                        
                                  <tr>
                                    <td >Paint</td>
                                    <td >2</td>
                                    <td><input onblur="findTotalWindow()" type="number" min="0" max="2" class="arkitek" name="AwWindowFinishesPaint" id="AwWindowFinishesPaint"></td>            
                                    {{-- <td><input onblur="findTotalWindowConstruction()" min="0" max="2" type="number" class="window_construction" name="Cons_AwWindowFinishesPaint" id="Cons_AwWindowFinishesPaint"></td>             --}}
                                    {{-- <td><input onblur="findTotalWindowAwarded()" min="0" max="2" type="number" class="window_awarded" name="Awarded_AwWindowFinishesPaint" id="Awarded_AwWindowFinishesPaint"></td>            --}}
                                    <td><input type="text" name="Remark_AwWindowFinishesPaint" id="Remark_AwWindowFinishesPaint"></td>                    
                                    <td><input type="file" name="Remark_AwWindowFinishesPaint" id="Remark_AwWindowFinishesPaint"></td>                    
                                  </tr>
                        
                                  <tr>
                                    <td >Varnish/shellac</td>
                                    <td >2</td>
                                    <td><input onblur="findTotalWindow()" type="number" min="0" max="2" class="arkitek" name="AwWindowFinishesVarnish" id="AwWindowFinishesVarnish"></td>            
                                    {{-- <td><input onblur="findTotalWindowConstruction()" min="0" max="2" type="number" class="window_construction" name="Cons_AwWindowFinishesVarnish" id="Cons_AwWindowFinishesVarnish"></td>             --}}
                                    {{-- <td><input onblur="findTotalWindowAwarded()" min="0" max="2" type="number" class="window_awarded" name="Awarded_AwWindowFinishesVarnish" id="Awarded_AwWindowFinishesVarnish"></td>             --}}
                                    <td><input type="text" name="Remark_AwWindowFinishesVarnish" id="Remark_AwWindowFinishesVarnish"></td>                    
                                    <td><input type="file" name="Remark_AwWindowFinishesVarnish" id="Remark_AwWindowFinishesVarnish"></td>                    
                                  </tr>
                        
                                  <tr style="display: none">
                                    <td>markahPRAwWindow <input type="text" name="markahPRAwWindow" id="markahPRAwWindow" /></td>            
                                  </tr>
                        
                                  <tr style="display: none">
                                    <td>markahPRAwWindowConstruction <input type="text" name="Cons_markahPRAwWindow" id="Cons_markahPRAwWindow" /></td>            
                                  </tr>
                        
                                  <tr style="display: none">
                                    <td>markahPRAwWindowAwarded <input type="text" name="Awarded_markahPRAwWindow" id="Awarded_markahPRAwWindow" /></td>            
                                  </tr>
                        
                                  {{-- New table for door --}}
                                  <tr class="text-white bg-orange-jkr">
                                    <th colspan="8">List of products for architectural works - Door</th>
                                  </tr>
                        
                                  <tr>
                                    <td rowspan="4">1</td>
                                    <td rowspan="4">Frames</td>
                                    <td >Aluminium</td>
                                    <td >2</td>
                                    <td> <input onblur="findTotalDoor()" type="number" min="0" max="2" class="door" name="AwDoorFramesAluminium" id="AwDoorFramesAluminium"></td>            
                                    {{-- <td> <input onblur="findTotalDoorConstruction()" type="number" min="0" max="2" class="door_construction" name="Cons_AwDoorFramesAluminium" id="Cons_AwDoorFramesAluminium"></td>             --}}
                                    {{-- <td> <input onblur="findTotalDoorAwarded()" type="number" min="0" max="2" class="door_awarded" name="Awarded_AwDoorFramesAluminium" id="Awarded_AwDoorFramesAluminium"></td>             --}}
                                    <td><input type="text" name="Remark_AwDoorFramesAluminium" id="Remark_AwDoorFramesAluminium"></td>                    
                                    <td><input type="file" name="Remark_AwDoorFramesAluminium" id="Remark_AwDoorFramesAluminium"></td>                    
                                  </tr>
                        
                                  <tr>
                                    <td >Mild steel</td>
                                    <td >2</td>
                                    <td><input onblur="findTotalDoor()" type="number" min="0" max="2" class="door" name="AwDoorFramesMildSteel" id="AwDoorFramesMildSteel"></td>            
                                    {{-- <td> <input onblur="findTotalDoorConstruction()" type="number" min="0" max="2" class="door_construction" name="Cons_AwDoorFramesMildSteel" id="Cons_AwDoorFramesMildSteel"></td>             --}}
                                    {{-- <td> <input onblur="findTotalDoorAwarded()" type="number" min="0" max="2" class="door_awarded" name="Awarded_AwDoorFramesMildSteel" id="Awarded_AwDoorFramesMildSteel"></td>             --}}
                                    <td><input type="text" name="Remark_AwDoorFramesMildSteel" id="Remark_AwDoorFramesMildSteel"></td>                    
                                    <td><input type="file" name="Remark_AwDoorFramesMildSteel" id="Remark_AwDoorFramesMildSteel"></td>                    
                                  </tr>
                        
                                  <tr>
                                    <td >Timber</td>
                                    <td >2</td>
                                    <td><input onblur="findTotalDoor()" type="number" min="0" max="2" class="door" name="AwDoorFramesTimber" id="AwDoorFramesTimber"></td>            
                                    {{-- <td> <input onblur="findTotalDoorConstruction()" type="number" min="0" max="2" class="door_construction" name="Cons_AwDoorFramesTimber" id="Cons_AwDoorFramesTimber"></td>             --}}
                                    {{-- <td> <input onblur="findTotalDoorAwarded()" type="number" min="0" max="2" class="door_awarded" name="Awarded_AwDoorFramesTimber" id="Awarded_AwDoorFramesTimber"></td>             --}}
                                    <td><input type="text" name="Remark_AwDoorFramesTimber" id="Remark_AwDoorFramesTimber"></td>                    
                                    <td><input type="file" name="Remark_AwDoorFramesTimber" id="Remark_AwDoorFramesTimber"></td>                    
                                  </tr>
                        
                                  <tr>
                                    <td >Upvc</td>
                                    <td >2</td>
                                    <td><input onblur="findTotalDoor()" type="number" min="0" max="2" class="door" name="AwDoorFramesUpvc" id="AwDoorFramesUpvc"></td>            
                                    {{-- <td> <input onblur="findTotalDoorConstruction()" type="number" min="0" max="2" class="door_construction" name="Cons_AwDoorFramesUpvc" id="Cons_AwDoorFramesUpvc"></td>             --}}
                                    {{-- <td> <input onblur="findTotalDoorAwarded()" type="number" min="0" max="2" class="door_awarded" name="Awarded_AwDoorFramesUpvc" id="Awarded_AwDoorFramesUpvc"></td>             --}}
                                    <td><input type="text" name="Remark_AwDoorFramesUpvc" id="Remark_AwDoorFramesUpvc"></td>
                                    <td><input type="file" name="Remark_AwDoorFramesUpvc" id="Remark_AwDoorFramesUpvc"></td>
                                  </tr>
                        
                                  <tr>
                                    <td rowspan="5">2</td>
                                    <td rowspan="5">Sub component (Panel)</td>
                                    <td >Timber</td>
                                    <td >2</td>
                                    <td><input onblur="findTotalDoor()" type="number" min="0" max="2" class="door" name="AwDoorPanelTimber" id="AwDoorPanelTimber"></td>            
                                    {{-- <td> <input onblur="findTotalDoorConstruction()" type="number" min="0" max="2" class="door_construction" name="Cons_AwDoorPanelTimber" id="Cons_AwDoorPanelTimber"></td>             --}}
                                    {{-- <td> <input onblur="findTotalDoorAwarded()" type="number" min="0" max="2" class="door_awarded" name="Awarded_AwDoorPanelTimber" id="Awarded_AwDoorPanelTimber"></td>             --}}
                                    <td><input type="text" name="Remark_AwDoorPanelTimber" id="Remark_AwDoorPanelTimber"></td>                   
                                    <td><input type="file" name="Remark_AwDoorPanelTimber" id="Remark_AwDoorPanelTimber"></td>                   
                                  </tr>
                        
                                  <tr>
                                    <td >Aluminium</td>
                                    <td >2</td>
                                    <td><input onblur="findTotalDoor()" type="number" min="0" max="2" class="door" name="AwDoorPanelAluminium" id="AwDoorPanelAluminium"></td>            
                                    {{-- <td> <input onblur="findTotalDoorConstruction()" type="number" min="0" max="2" class="door_construction" name="Cons_AwDoorPanelAluminium" id="Cons_AwDoorPanelAluminium"></td>             --}}
                                    {{-- <td> <input onblur="findTotalDoorAwarded()" type="number" min="0" max="2" class="door_awarded" name="Awarded_AwDoorPanelAluminium" id="Awarded_AwDoorPanelAluminium"></td>             --}}
                                    <td><input type="text" name="Remark_AwDoorPanelAluminium" id="Remark_AwDoorPanelAluminium"></td>
                                    <td><input type="file" name="Remark_AwDoorPanelAluminium" id="Remark_AwDoorPanelAluminium"></td>
                                  </tr>
                        
                                  <tr>
                                    <td >Upvc</td>
                                    <td >2</td>
                                    <td><input onblur="findTotalDoor()" type="number" min="0" max="2" class="door" name="AwDoorPanelUpvc" id="AwDoorPanelUpvc"></td>            
                                    {{-- <td> <input onblur="findTotalDoorConstruction()" type="number" min="0" max="2" class="door_construction" name="Cons_AwDoorPanelAluminium" id="Cons_AwDoorPanelAluminium"></td>             --}}
                                    {{-- <td> <input onblur="findTotalDoorAwarded()" type="number" min="0" max="2" class="door_awarded" name="Awarded_AwDoorPanelAluminium" id="Awarded_AwDoorPanelAluminium"></td>             --}}
                                    <td><input type="text" name="Remark_AwDoorPanelAluminium" id="Remark_AwDoorPanelAluminium"></td>
                                    <td><input type="file" name="Remark_AwDoorPanelAluminium" id="Remark_AwDoorPanelAluminium"></td>
                                  </tr>
                        
                                  <tr>
                                    <td >Steel</td>
                                    <td >2</td>
                                    <td><input onblur="findTotalDoor()" type="number" min="0" max="2" class="door" name="AwDoorPanelSteel" id="AwDoorPanelSteel"></td>            
                                    {{-- <td> <input onblur="findTotalDoorConstruction()" type="number" min="0" max="2" class="door_construction" name="Cons_AwDoorPanelSteel" id="Cons_AwDoorPanelSteel"></td>             --}}
                                    {{-- <td> <input onblur="findTotalDoorAwarded()" type="number" min="0" max="2" class="door_awarded" name="Awarded_AwDoorPanelSteel" id="Awarded_AwDoorPanelSteel"></td>             --}}
                                    <td><input type="text" name="Remark_AwDoorPanelSteel" id="Remark_AwDoorPanelSteel"></td>                    
                                    <td><input type="file" name="Remark_AwDoorPanelSteel" id="Remark_AwDoorPanelSteel"></td>                    
                                  </tr>
                        
                                  <tr>
                                    <td >Glass</td>
                                    <td >2</td>
                                    <td><input onblur="findTotalDoor()" type="number" min="0" max="2" class="door" name="AwDoorPanelGlass" id="AwDoorPanelGlass"></td>            
                                    {{-- <td> <input onblur="findTotalDoorConstruction()" type="number" min="0" max="2" class="door_construction" name="Cons_AwDoorPanelGlass" id="Cons_AwDoorPanelGlass"></td>             --}}
                                    {{-- <td> <input onblur="findTotalDoorAwarded()" type="number" min="0" max="2" class="door_awarded" name="Awarded_AwDoorPanelGlass" id="Awarded_AwDoorPanelGlass"></td>             --}}
                                    <td><input type="text" name="Remark_AwDoorPanelGlass" id="Remark_AwDoorPanelGlass"></td>                    
                                    <td><input type="file" name="Remark_AwDoorPanelGlass" id="Remark_AwDoorPanelGlass"></td>                    
                                  </tr>
                        
                                  <tr>
                                    <td rowspan="3">3</td>
                                    <td rowspan="3">Ironmongeries</td>
                                    <td >Lockset</td>
                                    <td >2</td>
                                    <td> <input onblur="findTotalDoor()" type="number" min="0" max="2" class="door" name="AwDoorIronLockset" id="AwDoorIronLockset"></td>            
                                    {{-- <td> <input onblur="findTotalDoorConstruction()" type="number" min="0" max="2" class="door_construction" name="Cons_AwDoorIronLockset" id="Cons_AwDoorIronLockset"></td>             --}}
                                    {{-- <td> <input onblur="findTotalDoorAwarded()" type="number" min="0" max="2" class="door_awarded" name="Awarded_AwDoorIronLockset" id="Awarded_AwDoorIronLockset"></td>             --}}
                                    <td><input type="text" name="Remark_AwDoorIronLockset" id="Remark_AwDoorIronLockset"></td>
                                    <td><input type="file" name="Remark_AwDoorIronLockset" id="Remark_AwDoorIronLockset"></td>
                                  </tr>
                        
                                  <tr>
                                    <td >Door closer</td>
                                    <td >2</td>
                                    <td><input onblur="findTotalDoor()" type="number" min="0" max="2" class="door" name="AwDoorIronDoorCloser" id="AwDoorIronDoorCloser"></td>            
                                    {{-- <td> <input onblur="findTotalDoorConstruction()" type="number" min="0" max="2" class="door_construction" name="Cons_AwDoorIronDoorCloser" id="Cons_AwDoorIronDoorCloser"></td>             --}}
                                    {{-- <td> <input onblur="findTotalDoorAwarded()" type="number" min="0" max="2" class="door_awarded" name="Awarded_AwDoorIronDoorCloser" id="Awarded_AwDoorIronDoorCloser"></td>             --}}
                                    <td><input type="text" name="Remark_AwDoorIronDoorCloser" id="Remark_AwDoorIronDoorCloser"></td>                   
                                    <td><input type="file" name="Remark_AwDoorIronDoorCloser" id="Remark_AwDoorIronDoorCloser"></td>                   
                                  </tr>
                        
                                  <tr>
                                    <td >Hinges</td>
                                    <td >2</td>
                                    <td><input onblur="findTotalDoor()" type="number" min="0" max="2" class="door" name="AwDoorIronHinges" id="AwDoorIronHinges"></td>            
                                    {{-- <td> <input onblur="findTotalDoorConstruction()" type="number" min="0" max="2" class="door_construction" name="Cons_AwDoorIronHinges" id="Cons_AwDoorIronHinges"></td>             --}}
                                    {{-- <td> <input onblur="findTotalDoorAwarded()" type="number" min="0" max="2" class="door_awarded" name="Awarded_AwDoorIronHinges" id="Awarded_AwDoorIronHinges"></td>             --}}
                                    <td><input type="text" name="Remark_AwDoorIronHinges" id="Remark_AwDoorIronHinges"></td>
                                    <td><input type="file" name="Remark_AwDoorIronHinges" id="Remark_AwDoorIronHinges"></td>
                                  </tr>
                        
                                  <tr>
                                    <td rowspan="3">4</td>
                                    <td rowspan="3">Finishes</td>
                                    <td >Anodised coatings</td>
                                    <td >2</td>
                                    <td> <input onblur="findTotalDoor()" type="number" min="0" max="2" class="door" name="AwDoorFinishesAnodised" id="AwDoorFinishesAnodised"></td>            
                                    {{-- <td> <input onblur="findTotalDoorConstruction()" type="number" min="0" max="2" class="door_construction" name="Cons_AwDoorFinishesAnodised" id="Cons_AwDoorFinishesAnodised"></td>             --}}
                                    {{-- <td> <input onblur="findTotalDoorAwarded()" type="number" min="0" max="2" class="door_awarded" name="Awarded_AwDoorFinishesAnodised" id="Awarded_AwDoorFinishesAnodised"></td>             --}}
                                    <td><input type="text" name="Remark_AwDoorFinishesAnodised" id="Remark_AwDoorFinishesAnodised"></td>                   
                                    <td><input type="file" name="Remark_AwDoorFinishesAnodised" id="Remark_AwDoorFinishesAnodised"></td>                   
                                  </tr>
                        
                                  <tr>
                                    <td >Paint</td>
                                    <td >2</td>
                                    <td><input onblur="findTotalDoor()" type="number" min="0" max="2" class="door" name="AwDoorFinishesPaint" id="AwDoorFinishesPaint"></td>            
                                    {{-- <td> <input onblur="findTotalDoorConstruction()" type="number" min="0" max="2" class="door_construction" name="Cons_AwDoorFinishesPaint" id="Cons_AwDoorFinishesPaint"></td>             --}}
                                    {{-- <td> <input onblur="findTotalDoorAwarded()" type="number" min="0" max="2" class="door_awarded" name="Awarded_AwDoorFinishesPaint" id="Awarded_AwDoorFinishesPaint"></td>             --}}
                                    <td><input type="text" name="Remark_AwDoorFinishesPaint" id="Remark_AwDoorFinishesPaint"></td>                    
                                    <td><input type="file" name="Remark_AwDoorFinishesPaint" id="Remark_AwDoorFinishesPaint"></td>                    
                                  </tr>
                        
                                  <tr>
                                    <td >Varnish/shellac</td>
                                    <td >2</td>
                                    <td><input onblur="findTotalDoor()" type="number" min="0" max="2" class="door" name="AwDoorFinishesVarnish" id="AwDoorFinishesVarnish"></td>            
                                    {{-- <td> <input onblur="findTotalDoorConstruction()" type="number" min="0" max="2" class="door_construction" name="Cons_AwDoorFinishesVarnish" id="Cons_AwDoorFinishesVarnish"></td>             --}}
                                    {{-- <td> <input onblur="findTotalDoorAwarded()" type="number" min="0" max="2" class="door_awarded" name="Awarded_AwDoorFinishesVarnish" id="Awarded_AwDoorFinishesVarnish"></td>             --}}
                                    <td><input type="text" name="Remark_AwDoorFinishesVarnish" id="Remark_AwDoorFinishesVarnish"></td>
                                    <td><input type="file" name="Remark_AwDoorFinishesVarnish" id="Remark_AwDoorFinishesVarnish"></td>
                                  </tr>
                        
                                  <tr style="display: none">
                                    <td>markahPRAwDoor<input type="text" name="markahPRAwDoor" id="markahPRAwDoor" />
                                    </td>
                                  </tr>
                        
                                  <tr style="display: none">
                                    <td>Cons_markahPRAwDoor<input type="text" name="Cons_markahPRAwDoor" id="Cons_markahPRAwDoor" />
                                    </td>
                                  </tr>
                        
                                  <tr style="display: none">
                                    <td>Awarded_markahPRAwDoor<input type="text" name="Awarded_markahPRAwDoor" id="Awarded_markahPRAwDoor" />
                                    </td>
                                  </tr>

                                  <tr class="text-center">
                                    <td rowspan="18" >1</td>
                                    <td rowspan="18">Floor</td>
                                    <td >Epoxy paint</td>
                                    <td >2</td>
                                    <td><input onblur="findTotalFloor()" type="number" min="0" max="2" class="floor" name="AwFloorFloorEpoxy" id="AwFloorFloorEpoxy"></td>            
                                    {{-- <td><input onblur="findTotalFloorConstruction()" type="number" min="0" max="2" class="floor_construction" name="Cons_AwFloorFloorEpoxy" id="Cons_AwFloorFloorEpoxy"></td>             --}}
                                    {{-- <td><input onblur="findTotalFloorAwarded()" type="number" min="0" max="2" class="floor_awarded" name="Awarded_AwFloorFloorEpoxy" id="Awarded_AwFloorFloorEpoxy"></td>             --}}
                                    <td><input type="text" name="Remark_AwFloorFloorEpoxy" id="Remark_AwFloorFloorEpoxy"></td>                    
                                    <td><input type="file" name="Remark_AwFloorFloorEpoxy" id="Remark_AwFloorFloorEpoxy"></td>                    
                                  </tr>
                        
                                  <tr>
                                    <td >Floor hardener</td>
                                    <td >2</td>
                                    <td><input onblur="findTotalFloor()" type="number" min="0" max="2" class="floor" name="AwFloorFloorFloorHardener" id="AwFloorFloorFloorHardener"></td>            
                                    {{-- <td><input onblur="findTotalFloorConstruction()" type="number" min="0" max="2" class="floor_construction" name="Cons_AwFloorFloorFloorHardener" id="Cons_AwFloorFloorFloorHardener"></td>             --}}
                                    {{-- <td><input onblur="findTotalFloorAwarded()" type="number" min="0" max="2" class="floor_awarded" name="Awarded_AwFloorFloorFloorHardener" id="Awarded_AwFloorFloorFloorHardener"></td>             --}}
                                    <td><input type="text" name="Remark_AwFloorFloorFloorHardener" id="Remark_AwFloorFloorFloorHardener"></td>                   
                                    <td><input type="file" name="Remark_AwFloorFloorFloorHardener" id="Remark_AwFloorFloorFloorHardener"></td>                   
                                  </tr>
                        
                                  <tr>
                                    
                                    <td >Ceramic tiles</td>
                                    <td >2</td>
                                    <td><input onblur="findTotalFloor()" type="number" min="0" max="2" class="floor" name="AwFloorFloorCeramic" id="AwFloorFloorCeramic"></td>            
                                    {{-- <td><input onblur="findTotalFloorConstruction()" type="number" min="0" max="2" class="floor_construction" name="Cons_AwFloorFloorCeramic" id="Cons_AwFloorFloorCeramic"></td>             --}}
                                    {{-- <td><input onblur="findTotalFloorAwarded()" type="number" min="0" max="2" class="floor_awarded" name="Awarded_AwFloorFloorCeramic" id="Awarded_AwFloorFloorCeramic"></td>             --}}
                                    <td><input type="text" name="Remark_AwFloorFloorCeramic" id="Remark_AwFloorFloorCeramic"></td>                   
                                    <td><input type="file" name="Remark_AwFloorFloorCeramic" id="Remark_AwFloorFloorCeramic"></td>                   
                                  </tr>
                        
                                  <tr>
                                    <td >Stones</td>
                                    <td >2</td>
                                    <td><input onblur="findTotalFloor()" type="number" min="0" max="2" class="floor" name="AwFloorFloorStones" id="AwFloorFloorStones"></td>            
                                    {{-- <td><input onblur="findTotalFloorConstruction()" type="number" min="0" max="2" class="floor_construction" name="Cons_AwFloorFloorStones" id="Cons_AwFloorFloorStones"></td>             --}}
                                    {{-- <td><input onblur="findTotalFloorAwarded()" type="number" min="0" max="2" class="floor_awarded" name="Awarded_AwFloorFloorStones" id="Awarded_AwFloorFloorStones"></td>             --}}
                                    <td><input type="text" name="Remark_AwFloorFloorStones" id="Remark_AwFloorFloorStones"></td>                    
                                    <td><input type="file" name="Remark_AwFloorFloorStones" id="Remark_AwFloorFloorStones"></td>                    
                                  </tr>
                        
                                  <tr>
                                    <td >Granites</td>
                                    <td >2</td>
                                    <td><input onblur="findTotalFloor()" type="number" min="0" max="2" class="floor" name="AwFloorFloorGranite" id="AwFloorFloorGranite"></td>            
                                    {{-- <td><input onblur="findTotalFloorConstruction()" type="number" min="0" max="2" class="floor_construction" name="Cons_AwFloorFloorGranite" id="Cons_AwFloorFloorGranite"></td>             --}}
                                    {{-- <td><input onblur="findTotalFloorAwarded()" type="number" min="0" max="2" class="floor_awarded" name="Awarded_AwFloorFloorGranite" id="Awarded_AwFloorFloorGranite"></td>             --}}
                                    <td><input type="text" name="Remark_AwFloorFloorGranite" id="Remark_AwFloorFloorGranite"></td>                    
                                    <td><input type="file" name="Remark_AwFloorFloorGranite" id="Remark_AwFloorFloorGranite"></td>                    
                                  </tr>
                        
                                  <tr>
                                    <td >Marble</td>
                                    <td >2</td>
                                    <td><input onblur="findTotalFloor()" type="number" min="0" max="2" class="floor" name="AwFloorFloorMarble" id="AwFloorFloorMarble"></td>            
                                    {{-- <td><input onblur="findTotalFloorConstruction()" type="number" min="0" max="2" class="floor_construction" name="Cons_AwFloorFloorMarble" id="Cons_AwFloorFloorMarble"></td>             --}}
                                    {{-- <td><input onblur="findTotalFloorAwarded()" type="number" min="0" max="2" class="floor_awarded" name="Awarded_AwFloorFloorMarble" id="Awarded_AwFloorFloorMarble"></td>             --}}
                                    <td><input type="text" name="Remark_AwFloorFloorMarble" id="Remark_AwFloorFloorMarble"></td>                   
                                    <td><input type="file" name="Remark_AwFloorFloorMarble" id="Remark_AwFloorFloorMarble"></td>                   
                                  </tr>
                        
                                  <tr>
                                    <td >Carpet</td>
                                    <td >2</td>
                                    <td><input onblur="findTotalFloor()" type="number" min="0" max="2" class="floor" name="AwFloorFloorCarpet" id="AwFloorFloorCarpet"></td>            
                                    {{-- <td><input onblur="findTotalFloorConstruction()" type="number" min="0" max="2" class="floor_construction" name="Cons_AwFloorFloorCarpet" id="Cons_AwFloorFloorCarpet"></td>             --}}
                                    {{-- <td><input onblur="findTotalFloorAwarded()" type="number" min="0" max="2" class="floor_awarded" name="Awarded_AwFloorFloorCarpet" id="Awarded_AwFloorFloorCarpet"></td>             --}}
                                    <td><input type="text" name="Remark_AwFloorFloorCarpet" id="Remark_AwFloorFloorCarpet"></td>                   
                                    <td><input type="file" name="Remark_AwFloorFloorCarpet" id="Remark_AwFloorFloorCarpet"></td>                   
                                  </tr>
                        
                                  <tr>
                                    <td >Carpet underlay</td>
                                    <td >2</td>
                                    <td><input onblur="findTotalFloor()" type="number" min="0" max="2" class="floor" name="AwFloorFloorUnderlay" id="AwFloorFloorUnderlay"></td>            
                                    {{-- <td><input onblur="findTotalFloorConstruction()" type="number" min="0" max="2" class="floor_construction" name="Cons_AwFloorFloorUnderlay" id="Cons_AwFloorFloorUnderlay"></td>             --}}
                                    {{-- <td><input onblur="findTotalFloorAwarded()" type="number" min="0" max="2" class="floor_awarded" name="Awarded_AwFloorFloorUnderlay" id="Awarded_AwFloorFloorUnderlay"></td>             --}}
                                    <td><input type="text" name="Remark_AwFloorFloorUnderlay" id="Remark_AwFloorFloorUnderlay"></td>                    
                                    <td><input type="file" name="Remark_AwFloorFloorUnderlay" id="Remark_AwFloorFloorUnderlay"></td>                    
                                  </tr>
                        
                                  <tr>
                                    <td >Vinyl</td>
                                    <td >2</td>
                                    <td><input onblur="findTotalFloor()" type="number" min="0" max="2" class="floor" name="AwFloorFloorVinyl" id="AwFloorFloorVinyl"></td>            
                                    {{-- <td><input onblur="findTotalFloorConstruction()" type="number" min="0" max="2" class="floor_construction" name="Cons_AwFloorFloorVinyl" id="Cons_AwFloorFloorVinyl"></td>             --}}
                                    {{-- <td><input onblur="findTotalFloorAwarded()" type="number" min="0" max="2" class="floor_awarded" name="Awarded_AwFloorFloorVinyl" id="Awarded_AwFloorFloorVinyl"></td>             --}}
                                    <td><input type="text" name="Remark_AwFloorFloorVinyl" id="Remark_AwFloorFloorVinyl"></td>                   
                                    <td><input type="file" name="Remark_AwFloorFloorVinyl" id="Remark_AwFloorFloorVinyl"></td>                   
                                  </tr>
                        
                                  <tr>
                                    <td >Timber</td>
                                    <td >2</td>
                                    <td><input onblur="findTotalFloor()" type="number" min="0" max="2" class="floor" name="AwFloorFloorTimber" id="AwFloorFloorTimber"></td>            
                                    {{-- <td><input onblur="findTotalFloorConstruction()" type="number" min="0" max="2" class="floor_construction" name="Cons_AwFloorFloorTimber" id="Cons_AwFloorFloorTimber"></td>             --}}
                                    {{-- <td><input onblur="findTotalFloorAwarded()" type="number" min="0" max="2" class="floor_awarded" name="Awarded_AwFloorFloorTimber" id="Awarded_AwFloorFloorTimber"></td>             --}}
                                    <td><input type="text" name="Remark_AwFloorFloorTimber" id="Remark_AwFloorFloorTimber"></td>                   
                                    <td><input type="file" name="Remark_AwFloorFloorTimber" id="Remark_AwFloorFloorTimber"></td>                   
                                  </tr>
                        
                                  <tr>
                                    <td >Interlocking pavers</td>
                                    <td >2</td>
                                    <td><input onblur="findTotalFloor()" type="number" min="0" max="2" class="floor" name="AwFloorFloorPavers" id="AwFloorFloorPavers"></td>            
                                    {{-- <td><input onblur="findTotalFloorConstruction()" type="number" min="0" max="2" class="floor_construction" name="Cons_AwFloorFloorPavers" id="Cons_AwFloorFloorPavers"></td>             --}}
                                    {{-- <td><input onblur="findTotalFloorAwarded()" type="number" min="0" max="2" class="floor_awarded" name="Awarded_AwFloorFloorPavers" id="Awarded_AwFloorFloorPavers"></td>             --}}
                                    <td><input type="text" name="Remark_AwFloorFloorPavers" id="Remark_AwFloorFloorPavers"></td>                    
                                    <td><input type="file" name="Remark_AwFloorFloorPavers" id="Remark_AwFloorFloorPavers"></td>                    
                                  </tr>
                        
                                  <tr>
                                    <td >Pebble wash</td>
                                    <td >2</td>
                                    <td><input onblur="findTotalFloor()" type="number" min="0" max="2" class="floor" name="AwFloorFloorPebble" id="AwFloorFloorPebble"></td>            
                                    {{-- <td><input onblur="findTotalFloorConstruction()" type="number" min="0" max="2" class="floor_construction" name="Cons_AwFloorFloorPebble" id="Cons_AwFloorFloorPebble"></td>             --}}
                                    {{-- <td><input onblur="findTotalFloorAwarded()" type="number" min="0" max="2" class="floor_awarded" name="Awarded_AwFloorFloorPebble" id="Awarded_AwFloorFloorPebble"></td>             --}}
                                    <td><input type="text" name="Remark_AwFloorFloorPebble" id="Remark_AwFloorFloorPebble"></td>                   
                                    <td><input type="file" name="Remark_AwFloorFloorPebble" id="Remark_AwFloorFloorPebble"></td>                   
                                  </tr>
                        
                                  <tr>
                                    <td >Bamboo</td>
                                    <td >2</td>
                                    <td><input onblur="findTotalFloor()" type="number" min="0" max="2" class="floor" name="AwFloorFloorBamboo" id="AwFloorFloorBamboo"></td>            
                                    {{-- <td><input onblur="findTotalFloorConstruction()" type="number" min="0" max="2" class="floor_construction" name="Cons_AwFloorFloorBamboo" id="Cons_AwFloorFloorBamboo"></td>             --}}
                                    {{-- <td><input onblur="findTotalFloorAwarded()" type="number" min="0" max="2" class="floor_awarded" name="Awarded_AwFloorFloorBamboo" id="Awarded_AwFloorFloorBamboo"></td>             --}}
                                    <td><input type="text" name="Remark_AwFloorFloorBamboo" id="Remark_AwFloorFloorBamboo"></td>                  
                                    <td><input type="file" name="Remark_AwFloorFloorBamboo" id="Remark_AwFloorFloorBamboo"></td>                  
                                  </tr>
                        
                                  <tr>
                                    <td >Cement render</td>
                                    <td >2</td>
                                    <td><input onblur="findTotalFloor()" type="number" min="0" max="2" class="floor" name="AwFloorFloorCement" id="AwFloorFloorCement"></td>            
                                    {{-- <td><input onblur="findTotalFloorConstruction()" type="number" min="0" max="2" class="floor_construction" name="Cons_AwFloorFloorCement" id="Cons_AwFloorFloorCement"></td>             --}}
                                    {{-- <td><input onblur="findTotalFloorAwarded()" type="number" min="0" max="2" class="floor_awarded" name="Awarded_AwFloorFloorCement" id="Awarded_AwFloorFloorCement"></td>             --}}
                                    <td><input type="text" name="Remark_AwFloorFloorCement" id="Remark_AwFloorFloorCement"></td>                    
                                    <td><input type="file" name="Remark_AwFloorFloorCement" id="Remark_AwFloorFloorCement"></td>                    
                                  </tr>
                        
                                  <tr>
                                    <td >Marmoleum</td>
                                    <td >2</td>
                                    <td><input onblur="findTotalFloor()" type="number" min="0" max="2" class="floor" name="AwFloorFloorMarmoleum" id="AwFloorFloorMarmoleum"></td>            
                                    {{-- <td><input onblur="findTotalFloorConstruction()" type="number" min="0" max="2" class="floor_construction" name="Cons_AwFloorFloorMarmoleum" id="Cons_AwFloorFloorMarmoleum"></td>             --}}
                                    {{-- <td><input onblur="findTotalFloorAwarded()" type="number" min="0" max="2" class="floor_awarded" name="Awarded_AwFloorFloorMarmoleum" id="Awarded_AwFloorFloorMarmoleum"></td>             --}}
                                    <td><input type="text" name="Remark_AwFloorFloorMarmoleum" id="Remark_AwFloorFloorMarmoleum"></td>                    
                                    <td><input type="file" name="Remark_AwFloorFloorMarmoleum" id="Remark_AwFloorFloorMarmoleum"></td>                    
                                  </tr>
                        
                                  <tr>
                                    <td >Rubber mat(playgrouubd)</td>
                                    <td >2</td>
                                    <td><input onblur="findTotalFloor()" type="number" min="0" max="2" class="floor" name="AwFloorFloorRubber" id="AwFloorFloorRubber"></td>            
                                    {{-- <td><input onblur="findTotalFloorConstruction()" type="number" min="0" max="2" class="floor_construction" name="Cons_AwFloorFloorRubber" id="Cons_AwFloorFloorRubber"></td>             --}}
                                    {{-- <td><input onblur="findTotalFloorAwarded()" type="number" min="0" max="2" class="floor_awarded" name="Awarded_AwFloorFloorRubber" id="Awarded_AwFloorFloorRubber"></td>             --}}
                                    <td><input type="text" name="Remark_AwFloorFloorRubber" id="Remark_AwFloorFloorRubber"></td>                    
                                    <td><input type="file" name="Remark_AwFloorFloorRubber" id="Remark_AwFloorFloorRubber"></td>                    
                                  </tr>
                        
                                  <tr>
                                    <td >Concrete imprint</td>
                                    <td >2</td>
                                    <td><input onblur="findTotalFloor()" type="number" min="0" max="2" class="floor" name="AwFloorFloorConcrete" id="AwFloorFloorConcrete"></td>            
                                    {{-- <td><input onblur="findTotalFloorConstruction()" type="number" min="0" max="2" class="floor_construction" name="Cons_AwFloorFloorConcrete" id="Cons_AwFloorFloorConcrete"></td>             --}}
                                    {{-- <td><input onblur="findTotalFloorAwarded()" type="number" min="0" max="2" class="floor_awarded" name="Awarded_AwFloorFloorConcrete" id="Awarded_AwFloorFloorConcrete"></td>             --}}
                                    <td><input type="text" name="Remark_AwFloorFloorConcrete" id="Remark_AwFloorFloorConcrete"></td>                   
                                    <td><input type="file" name="Remark_AwFloorFloorConcrete" id="Remark_AwFloorFloorConcrete"></td>                   
                                  </tr>
                        
                                  <tr>
                                    <td >Laminated flooring</td>
                                    <td >2</td>
                                    <td><input onblur="findTotalFloor()" type="number" min="0" max="2" class="floor" name="AwFloorFloorLaminate" id="AwFloorFloorLaminate"></td>            
                                    {{-- <td><input onblur="findTotalFloorConstruction()" type="number" min="0" max="2" class="floor_construction" name="Cons_AwFloorFloorLaminate" id="Cons_AwFloorFloorLaminate"></td>             --}}
                                    {{-- <td><input onblur="findTotalFloorAwarded()" type="number" min="0" max="2" class="floor_awarded" name="Awarded_AwFloorFloorLaminate" id="Awarded_AwFloorFloorLaminate"></td>             --}}
                                    <td><input type="text" name="Remark_AwFloorFloorLaminate" id="Remark_AwFloorFloorLaminate"></td>                   
                                    <td><input type="file" name="Remark_AwFloorFloorLaminate" id="Remark_AwFloorFloorLaminate"></td>                   
                                  </tr>
                                  
                                  <tr>
                                    <td rowspan="3">2</td>
                                    <td rowspan="3">Water proofing</td>
                                    <td >Adhesive</td>
                                    <td >2</td>
                                    <td> <input onblur="findTotalFloor()" type="number" min="0" max="2" class="floor" name="AwFloorProofingAdhesive" id="AwFloorProofingAdhesive"></td>            
                                    {{-- <td><input onblur="findTotalFloorConstruction()" type="number" min="0" max="2" class="floor_construction" name="Cons_AwFloorProofingAdhesive" id="Cons_AwFloorProofingAdhesive"></td>             --}}
                                    {{-- <td><input onblur="findTotalFloorAwarded()" type="number" min="0" max="2" class="floor_awarded" name="Awarded_AwFloorProofingAdhesive" id="Awarded_AwFloorProofingAdhesive"></td>             --}}
                                    <td><input type="text" name="Remark_AwFloorProofingAdhesive" id="Remark_AwFloorProofingAdhesive"></td>                    
                                    <td><input type="file" name="Remark_AwFloorProofingAdhesive" id="Remark_AwFloorProofingAdhesive"></td>                    
                                  </tr>
                        
                                  <tr>
                                    <td >Sealant</td>
                                    <td >2</td>
                                    <td><input onblur="findTotalFloor()" type="number" min="0" max="2" class="floor" name="AwFloorProofingSealant" id="AwFloorProofingSealant"></td>            
                                    {{-- <td><input onblur="findTotalFloorConstruction()" type="number" min="0" max="2" class="floor_construction" name="Cons_AwFloorProofingSealant" id="Cons_AwFloorProofingSealant"></td>             --}}
                                    {{-- <td><input onblur="findTotalFloorAwarded()" type="number" min="0" max="2" class="floor_awarded" name="Awarded_AwFloorProofingSealant" id="Awarded_AwFloorProofingSealant"></td>             --}}
                                    <td><input type="text" name="Remark_AwFloorProofingSealant" id="Remark_AwFloorProofingSealant"></td>                  
                                    <td><input type="file" name="Remark_AwFloorProofingSealant" id="Remark_AwFloorProofingSealant"></td>                  
                                  </tr>
                        
                                  <tr>
                                    <td >Grout</td>
                                    <td >2</td>
                                    <td><input onblur="findTotalFloor()" type="number" min="0" max="2" class="floor" name="AwFloorProofingGrout" id="AwFloorProofingGrout"></td>            
                                    {{-- <td><input onblur="findTotalFloorConstruction()" type="number" min="0" max="2" class="floor_construction" name="Cons_AwFloorProofingGrout" id="Cons_AwFloorProofingGrout"></td>             --}}
                                    {{-- <td><input onblur="findTotalFloorAwarded()" type="number" min="0" max="2" class="floor_awarded" name="Awarded_AwFloorProofingGrout" id="Awarded_AwFloorProofingGrout"></td>             --}}
                                    <td><input type="text" name="Remark_AwFloorProofingGrout" id="Remark_AwFloorProofingGrout"></td>                    
                                    <td><input type="file" name="Remark_AwFloorProofingGrout" id="Remark_AwFloorProofingGrout"></td>                    
                                  </tr>
                      
                                  <tr style="display: none">
                                    <td>markahPRAwFloor<input type="text" name="markahPRAwFloor" id="markahPRAwFloor" /></td>
                                  </tr>
                      
                                  <tr style="display: none">
                                    <td> Cons_markahPRAwFloor <input type="text" name="Cons_markahPRAwFloor" id="Cons_markahPRAwFloor" /></td>
                                  </tr>
                      
                                  <tr style="display: none">
                                    <td> Awarded_markahPRAwFloor <input type="text" name="Awarded_markahPRAwFloor" id="Awarded_markahPRAwFloor" /></td>
                                  </tr>
                        
                                  {{-- New table for wall system --}}
                                  <tr class="text-white bg-orange-jkr">
                                    <th colspan="8">List of products for architectural works - System Furniture</th>
                                  </tr>
                        
                                  <tr>
                                    
                                    <td rowspan="5">1</td>
                                    <td rowspan="5">Built in furniture (system furniture)</td>
                                    <td >Office workstation</td>
                                    <td >2</td>
                                    <td> <input onblur="findTotalSystem()" type="number" min="0" max="2" class="prawsystem" name="AwSystemBuiltOffice" id="AwSystemBuiltOffice"></td>            
                                    {{-- <td> <input onblur="findTotalSystemConstruction()" type="number" min="0" max="2" class="prawsystem_construction" name="Cons_AwSystemBuiltOffice" id="Cons_AwSystemBuiltOffice"></td>             --}}
                                    {{-- <td> <input onblur="findTotalSystemAwarded()" type="number" min="0" max="2" class="prawsystem_awarded" name="Awarded_AwSystemBuiltOffice" id="Awarded_AwSystemBuiltOffice"></td>             --}}
                                    <td><input type="text" name="Remark_AwSystemBuiltOffice" id="Remark_AwSystemBuiltOffice"></td> 
                                    <td><input type="file" name="Remark_AwSystemBuiltOffice" id="Remark_AwSystemBuiltOffice"></td> 
                        
                                  </tr>
                        
                                  <tr>
                                    <td >Toilet cubicle</td>
                                    <td >2</td>
                                    <td><input onblur="findTotalSystem()" type="number" min="0" max="2" class="prawsystem " name="AwSystemBuiltToilet" id="AwSystemBuiltToilet"></td>            
                                    {{-- <td> <input onblur="findTotalSystemConstruction()" type="number" min="0" max="2" class="prawsystem_construction" name="Cons_AwSystemBuiltToilet" id="Cons_AwSystemBuiltToilet"></td>             --}}
                                    {{-- <td> <input onblur="findTotalSystemAwarded()" type="number" min="0" max="2" class="prawsystem_awarded" name="Awarded_AwSystemBuiltToilet" id="Awarded_AwSystemBuiltToilet"></td>             --}}
                                    <td><input type="text" name="Remark_AwSystemBuiltToilet" id="Remark_AwSystemBuiltToilet"></td>                   
                                    <td><input type="file" name="Remark_AwSystemBuiltToilet" id="Remark_AwSystemBuiltToilet"></td>                   
                                  </tr>
                        
                                  <tr>
                                    <td >Institutional seating</td>
                                    <td >2</td>
                                    <td><input onblur="findTotalSystem()" type="number" min="0" max="2" class="prawsystem" name="AwSystemBuiltInstitutional" id="AwSystemBuiltInstitutional"></td>            
                                    {{-- <td> <input onblur="findTotalSystemConstruction()" type="number" min="0" max="2" class="prawsystem_construction" name="Cons_AwSystemBuiltInstitutional" id="Cons_AwSystemBuiltInstitutional"></td>             --}}
                                    {{-- <td> <input onblur="findTotalSystemAwarded()" type="number" min="0" max="2" class="prawsystem_awarded" name="Awarded_AwSystemBuiltInstitutional" id="Awarded_AwSystemBuiltInstitutional"></td>             --}}
                                    <td><input type="text" name="Remark_AwSystemBuiltInstitutional" id="Remark_AwSystemBuiltInstitutional"></td>                   
                                    <td><input type="file" name="Remark_AwSystemBuiltInstitutional" id="Remark_AwSystemBuiltInstitutional"></td>                   
                                  </tr>
                        
                                  <tr>
                                    <td >Built-in cupboards</td>
                                    <td >2</td>
                                    <td><input onblur="findTotalSystem()" type="number" min="0" max="2" class="prawsystem" name="AwSystemBuiltCupboards" id="AwSystemBuiltCupboards"></td>            
                                    {{-- <td> <input onblur="findTotalSystemConstruction()" type="number" min="0" max="2" class="prawsystem_construction" name="Cons_AwSystemBuiltCupboards" id="Cons_AwSystemBuiltCupboards"></td>             --}}
                                    {{-- <td> <input onblur="findTotalSystemAwarded()" type="number" min="0" max="2" class="prawsystem_awarded" name="Awarded_AwSystemBuiltCupboards" id="Awarded_AwSystemBuiltCupboards"></td>             --}}
                                    <td><input type="text" name="Remark_AwSystemBuiltCupboards" id="Remark_AwSystemBuiltCupboards"></td>                    
                                    <td><input type="file" name="Remark_AwSystemBuiltCupboards" id="Remark_AwSystemBuiltCupboards"></td>                    
                                  </tr>
                        
                                  <tr>
                                    <td >Sport facilities seating</td>
                                    <td >2</td>
                                    <td><input onblur="findTotalSystem()" type="number" min="0" max="2" class="prawsystem" name="AwSystemBuiltSport" id="AwSystemBuiltSport"></td>            
                                    {{-- <td> <input onblur="findTotalSystemConstruction()" type="number" min="0" max="2" class="prawsystem_construction" name="Cons_AwSystemBuiltSport" id="Cons_AwSystemBuiltSport"></td>             --}}
                                    {{-- <td> <input onblur="findTotalSystemAwarded()" type="number" min="0" max="2" class="prawsystem_awarded" name="Awarded_AwSystemBuiltSport" id="Awarded_AwSystemBuiltSport"></td>             --}}
                                    <td><input type="text" name="Remark_AwSystemBuiltSport" id="Remark_AwSystemBuiltSport"></td>                    
                                    <td><input type="file" name="Remark_AwSystemBuiltSport" id="Remark_AwSystemBuiltSport"></td>                    
                                  </tr>
                      
                                  <tr style="display: none">
                                    <td>markahPRAwSystem<input type="text" name="markahPRAwSystem" id="markahPRAwSystem" /></td>
                                  </tr>
                      
                                  <tr style="display: none">
                                    <td>Cons_markahPRAwSystem<input type="text" name="Cons_markahPRAwSystem" id="Cons_markahPRAwSystem" /></td>
                                  </tr>
                      
                                  <tr style="display: none">
                                    <td>Awarded_markahPRAwSystem<input type="text" name="Awarded_markahPRAwSystem" id="Awarded_markahPRAwSystem" /></td>
                                  </tr>

                                  <tr class="text-center">
                                    <td rowspan="9" >1</td>
                                    <td rowspan="9">Sanitary Features</td>
                                    <td >Tap fitting</td>
                                    <td >2</td>
                                    <td><input onblur="findTotalSanitary()" type="number" min="0" max="2" class="sanitary" name="AwSanitaryTapFitting" id="AwSanitaryTapFitting"></td>            
                                    {{-- <td><input onblur="findTotalSanitaryConstruction()" type="number" min="0" max="2" class="sanitary_construction" name="Cons_AwSanitaryTapFitting" id="Cons_AwSanitaryTapFitting"></td>             --}}
                                    {{-- <td><input onblur="findTotalSanitaryAwarded()" type="number" min="0" max="2" class="sanitary_awarded" name="Awarded_AwSanitaryTapFitting" id="Awarded_AwSanitaryTapFitting"></td>             --}}
                                    <td><input type="text" name="Remark_AwSanitaryTapFitting" id="Remark_AwSanitaryTapFitting"></td>            
                                    <td><input type="file" name="Remark_AwSanitaryTapFitting" id="Remark_AwSanitaryTapFitting"></td>            
                                                       
                                  </tr>
                        
                                  <tr>
                                    <td >Water closet</td>
                                    <td >2</td>
                                    <td><input onblur="findTotalSanitary()" type="number" min="0" max="2" class="sanitary" name="AwSanitaryWaterCloset" id="AwSanitaryWaterCloset"></td>            
                                    {{-- <td><input onblur="findTotalSanitaryConstruction()" type="number" min="0" max="2" class="sanitary_construction" name="Cons_AwSanitaryWaterCloset" id="Cons_AwSanitaryWaterCloset"></td>             --}}
                                    {{-- <td><input onblur="findTotalSanitaryAwarded()" type="number" min="0" max="2" class="sanitary_awarded" name="Awarded_AwSanitaryWaterCloset" id="Awarded_AwSanitaryWaterCloset"></td>             --}}
                                    <td><input type="text" name="Remark_AwSanitaryWaterCloset" id="Remark_AwSanitaryWaterCloset"></td>                   
                                    <td><input type="file" name="Remark_AwSanitaryWaterCloset" id="Remark_AwSanitaryWaterCloset"></td>                   
                                  </tr>
                        
                                  <tr>
                                    
                                    <td >Water basin</td>
                                    <td >2</td>
                                    <td><input onblur="findTotalSanitary()" type="number" min="0" max="2" class="sanitary" name="AwSanitaryWaterBasin" id="AwSanitaryWaterBasin"></td>            
                                    {{-- <td><input onblur="findTotalSanitaryConstruction()" type="number" min="0" max="2" class="sanitary_construction" name="Cons_AwSanitaryWaterBasin" id="Cons_AwSanitaryWaterBasin"></td>             --}}
                                    {{-- <td><input onblur="findTotalSanitaryAwarded()" type="number" min="0" max="2" class="sanitary_awarded" name="Awarded_AwSanitaryWaterBasin" id="Awarded_AwSanitaryWaterBasin"></td>             --}}
                                    <td><input type="text" name="Remark_AwSanitaryWaterBasin" id="Remark_AwSanitaryWaterBasin"></td>                   
                                    <td><input type="file" name="Remark_AwSanitaryWaterBasin" id="Remark_AwSanitaryWaterBasin"></td>                   
                                  </tr>
                        
                                  <tr>
                                    <td >Sink</td>
                                    <td >2</td>
                                    <td><input onblur="findTotalSanitary()" type="number" min="0" max="2" class="sanitary" name="AwSanitarySink" id="AwSanitarySink"></td>            
                                    {{-- <td><input onblur="findTotalSanitaryConstruction()" type="number" min="0" max="2" class="sanitary_construction" name="Cons_AwSanitarySink" id="Cons_AwSanitarySink"></td>             --}}
                                    {{-- <td><input onblur="findTotalSanitaryAwarded()" type="number" min="0" max="2" class="sanitary_awarded" name="Awarded_AwSanitarySink" id="Awarded_AwSanitarySink"></td>             --}}
                                    <td><input type="text" name="Remark_AwSanitarySink" id="Remark_AwSanitarySink"></td>                    
                                    <td><input type="file" name="Remark_AwSanitarySink" id="Remark_AwSanitarySink"></td>                    
                                  </tr>
                        
                                  <tr>
                                    <td >Urinal</td>
                                    <td >2</td>
                                    <td><input onblur="findTotalSanitary()" type="number" min="0" max="2" class="sanitary" name="AwSanitaryUrinal" id="AwSanitaryUrinal"></td>            
                                    {{-- <td><input onblur="findTotalSanitaryConstruction()" type="number" min="0" max="2" class="sanitary_construction" name="Cons_AwSanitaryUrinal" id="Cons_AwSanitaryUrinal"></td>             --}}
                                    {{-- <td><input onblur="findTotalSanitaryAwarded()" type="number" min="0" max="2" class="sanitary_awarded" name="Awarded_AwSanitaryUrinal" id="Awarded_AwSanitaryUrinal"></td>             --}}
                                    <td><input type="text" name="Remark_AwSanitaryUrinal" id="Remark_AwSanitaryUrinal"></td>                    
                                    <td><input type="file" name="Remark_AwSanitaryUrinal" id="Remark_AwSanitaryUrinal"></td>                    
                                  </tr>
                        
                                  <tr>
                                    <td >Bidet</td>
                                    <td >2</td>
                                    <td><input onblur="findTotalSanitary()" type="number" min="0" max="2" class="sanitary" name="AwSanitaryBidet" id="AwSanitaryBidet"></td>            
                                    {{-- <td><input onblur="findTotalSanitaryConstruction()" type="number" min="0" max="2" class="sanitary_construction" name="Cons_AwSanitaryBidet" id="Cons_AwSanitaryBidet"></td>             --}}
                                    {{-- <td><input onblur="findTotalSanitaryAwarded()" type="number" min="0" max="2" class="sanitary_awarded" name="Awarded_AwSanitaryBidet" id="Awarded_AwSanitaryBidet"></td>             --}}
                                    <td><input type="text" name="Remark_AwSanitaryBidet" id="Remark_AwSanitaryBidet"></td>                   
                                    <td><input type="file" name="Remark_AwSanitaryBidet" id="Remark_AwSanitaryBidet"></td>                   
                                  </tr>
                        
                                  <tr>
                                    <td >Floor trap</td>
                                    <td >2</td>
                                    <td><input onblur="findTotalSanitary()" type="number" min="0" max="2" class="sanitary" name="AwSanitaryFloorTrap" id="AwSanitaryFloorTrap"></td>            
                                    {{-- <td><input onblur="findTotalSanitaryConstruction()" type="number" min="0" max="2" class="sanitary_construction" name="Cons_AwSanitaryFloorTrap" id="Cons_AwSanitaryFloorTrap"></td>             --}}
                                    {{-- <td><input onblur="findTotalSanitaryAwarded()" type="number" min="0" max="2" class="sanitary_awarded" name="Awarded_AwSanitaryFloorTrap" id="Awarded_AwSanitaryFloorTrap"></td>             --}}
                                    <td><input type="text" name="Remark_AwSanitaryFloorTrap" id="Remark_AwSanitaryFloorTrap"></td>                    
                                    <td><input type="file" name="Remark_AwSanitaryFloorTrap" id="Remark_AwSanitaryFloorTrap"></td>                    
                                  </tr>
                        
                                  <tr>
                                    <td >Shower</td>
                                    <td >2</td>
                                    <td><input onblur="findTotalSanitary()" type="number" min="0" max="2" class="sanitary" name="AwSanitaryShower" id="AwSanitaryShower"></td>            
                                    {{-- <td><input onblur="findTotalSanitaryConstruction()" type="number" min="0" max="2" class="sanitary_construction" name="Cons_AwSanitaryShower" id="Cons_AwSanitaryShower"></td>             --}}
                                    {{-- <td><input onblur="findTotalSanitaryAwarded()" type="number" min="0" max="2" class="sanitary_awarded" name="Awarded_AwSanitaryShower" id="Awarded_AwSanitaryShower"></td>             --}}
                                    <td><input type="text" name="Remark_AwSanitaryShower" id="Remark_AwSanitaryShower"></td>
                                    <td><input type="file" name="Remark_AwSanitaryShower" id="Remark_AwSanitaryShower"></td>
                                  </tr>
                        
                                  <tr>
                                    <td >Faucet</td>
                                    <td >2</td>
                                    <td><input onblur="findTotalSanitary()" type="number" min="0" max="2" class="sanitary" name="AwSanitaryFaucet" id="AwSanitaryFaucet"></td>            
                                    {{-- <td><input onblur="findTotalSanitaryConstruction()" type="number" min="0" max="2" class="sanitary_construction" name="Cons_AwSanitaryFaucet" id="Cons_AwSanitaryFaucet"></td>             --}}
                                    {{-- <td><input onblur="findTotalSanitaryAwarded()" type="number" min="0" max="2" class="sanitary_awarded" name="Awarded_AwSanitaryFaucet" id="Awarded_AwSanitaryFaucet"></td>             --}}
                                    <td><input type="text" name="Remark_AwSanitaryFaucet" id="Remark_AwSanitaryFaucet"></td>                   
                                    <td><input type="file" name="Remark_AwSanitaryFaucet" id="Remark_AwSanitaryFaucet"></td>                   
                                  </tr>
                      
                                  <tr style="display: none">
                                    <td><input type="text" name="markahPRAwSanitary" id="markahPRAwSanitary" /></td>
                                  </tr>
                      
                                  <tr style="display: none">
                                    <td>Cons_markahPRAwSanitary<input type="text" name="Cons_markahPRAwSanitary" id="Cons_markahPRAwSanitary" /></td>
                                  </tr>
                      
                                  <tr style="display: none">
                                    <td>Awarded_markahPRAwSanitary<input type="text" name="Awarded_markahPRAwSanitary" id="Awarded_markahPRAwSanitary" /></td>
                                  </tr>

                                  <thead class="text-white bg-orange-jkr">
            
                                    <tr>
                                      <th colspan="8">List of products for civil works</th>
                                    </tr>
                                    <tr>
                                      <th>No.</th>
                                      <th >Component</th>
                                      <th>Product</th>
                                      <th>Point Allocated</th>
                                      <th>Point Requested (design)</th>
                                      {{-- <th>Point Requested (construction)</th>
                                      <th>Point Awarded</th> --}}
                                      <th >Remark</th>
                                      <th >Supporting Documents</th>
                                    </tr>
                                  </thead>

                                  <tr class="text-center">
                                    <td rowspan="6" >1</td>
                                    <td rowspan="6">Common items</td>
                                    <td >Cement</td>
                                    <td >2</td>
                                    <td>
                                      <input onblur="findTotalmarkahPRCw()" type="number" min="0" max="2" class="civil" name="CwCommonCement" id="CwCommonCement">
                                    </td>            
                                             
                                    <td><input type="text" name="CwCommonCement" id="CwCommonCement"></td>                    
                                    <td><input type="file" name="CwCommonCement" id="CwCommonCement"></td>                    
                                  </tr>
                    
                                  <tr>
                                    <td >Timber</td>
                                    <td >2</td>
                                    <td>
                                      <input onblur="findTotalmarkahPRCw()" type="number" min="0" max="2" class="civil" name="CwCommonTimber" id="CwCommonTimber">
                                    </td>            
                                             
                                    <td><input type="text" name="CwCommonTimber" id="CwCommonTimber"></td>                    
                                    <td><input type="file" name="CwCommonTimber" id="CwCommonTimber"></td>                    
                                  </tr>
                    
                                  <tr>
                                    <td >Reinforcement bar</td>
                                    <td >2</td>
                                    <td>
                                      <input onblur="findTotalmarkahPRCw()" type="number" min="0" max="2" class="civil" name="CwCommonBar" id="CwCommonBar">
                                    </td>            
                                              
                                    <td><input type="text" name="CwCommonBar" id="CwCommonBar"></td>                    
                                    <td><input type="file" name="CwCommonBar" id="CwCommonBar"></td>                    
                                  </tr>
                    
                                  <tr>
                                    <td >Sand</td>
                                    <td >2</td>
                                    <td>
                                      <input onblur="findTotalmarkahPRCw()" type="number" min="0" max="2" class="civil" name="CwCommonSand" id="CwCommonSand">
                                    </td>            
                                              
                                    <td><input type="text" name="CwCommonSand" id="CwCommonSand"></td>                    
                                    <td><input type="file" name="CwCommonSand" id="CwCommonSand"></td>                    
                                  </tr>
                    
                                  <tr>
                                    <td >Aggregate</td>
                                    <td >2</td>
                                    <td>
                                      <input onblur="findTotalmarkahPRCw()" type="number" min="0" max="2" class="civil" name="CwCommonAggregate" id="CwCommonAggregate">
                                    </td>            
                                             
                                    <td><input type="text" name="CwCommonAggregate" id="CwCommonAggregate"></td>                    
                                    <td><input type="file" name="CwCommonAggregate" id="CwCommonAggregate"></td>                    
                                  </tr>
                    
                                  <tr>
                                    <td >Stone/rock</td>
                                    <td >2</td>
                                    <td>
                                      <input onblur="findTotalmarkahPRCw()" type="number" min="0" max="2" class="civil" name="CwCommonStone" id="CwCommonStone">
                                    </td>            
                                              
                                    <td><input type="text" name="CwCommonStone" id="CwCommonStone"></td>                    
                                    <td><input type="file" name="CwCommonStone" id="CwCommonStone"></td>                    
                                  </tr>
                    
                                  <tr class="text-center">
                                    <td rowspan="6" >2</td>
                                    <td rowspan="6">Earthworks/erosion sediment control</td>
                                    <td >Geotextile</td>
                                    <td >2</td>
                                    <td>
                                      <input onblur="findTotalmarkahPRCw()" type="number" min="0" max="2" class="civil" name="CwEarthworksGeotextile" id="CwEarthworksGeotextile">
                                    </td>            
                                               
                                    <td><input type="text" name="CwEarthworksGeotextile" id="CwEarthworksGeotextile"></td>                    
                                    <td><input type="file" name="CwEarthworksGeotextile" id="CwEarthworksGeotextile"></td>                    
                                  </tr>
                    
                                  <tr>
                                    <td >Erosion mat</td>
                                    <td >2</td>
                                    <td>
                                      <input onblur="findTotalmarkahPRCw()" type="number" min="0" max="2" class="civil" name="CwEarthworksErosion" id="CwEarthworksErosion">
                                    </td>            
                                               
                                    <td><input type="text" name="CwEarthworksErosion" id="CwEarthworksErosion"></td>                    
                                    <td><input type="file" name="CwEarthworksErosion" id="CwEarthworksErosion"></td>                    
                                  </tr>
                    
                                  <tr>
                                    <td >Geogrid</td>
                                    <td >2</td>
                                    <td>
                                      <input onblur="findTotalmarkahPRCw()" type="number" min="0" max="2" class="civil" name="CwEarthworksGeogrid" id="CwEarthworksGeogrid">
                                    </td>            
                                              
                                    <td><input type="text" name="CwEarthworksGeogrid" id="CwEarthworksGeogrid"></td>                    
                                    <td><input type="file" name="CwEarthworksGeogrid" id="CwEarthworksGeogrid"></td>                    
                                  </tr>
                    
                                  <tr>
                                    <td >Mulching</td>
                                    <td >2</td>
                                    <td>
                                      <input onblur="findTotalmarkahPRCw()" type="number" min="0" max="2" class="civil" name="CwEarthworksMulching" id="CwEarthworksMulching">
                                    </td>            
                                               
                                    <td><input type="text" name="CwEarthworksMulching" id="CwEarthworksMulching"></td>                    
                                    <td><input type="file" name="CwEarthworksMulching" id="CwEarthworksMulching"></td>                    
                                  </tr>
                    
                                  <tr>
                                    <td >Gabion</td>
                                    <td >2</td>
                                    <td>
                                      <input onblur="findTotalmarkahPRCw()" type="number" min="0" max="2" class="civil" name="CwEarthworksGabion" id="CwEarthworksGabion">
                                    </td>            
                                              
                                    <td><input type="text" name="CwEarthworksGabion" id="CwEarthworksGabion"></td>                    
                                    <td><input type="file" name="CwEarthworksGabion" id="CwEarthworksGabion"></td>                    
                                  </tr>
                    
                                  <tr>
                                    <td >Hydroseeding</td>
                                    <td >2</td>
                                    <td>
                                      <input onblur="findTotalmarkahPRCw()" type="number" min="0" max="2" class="civil" name="CwEarthworksHydroseeding" id="CwEarthworksHydroseeding">
                                    </td>            
                                             
                                    <td><input type="text" name="CwEarthworksHydroseeding" id="CwEarthworksHydroseeding"></td>                    
                                    <td><input type="file" name="CwEarthworksHydroseeding" id="CwEarthworksHydroseeding"></td>                    
                                  </tr>
                    
                                  <tr class="text-center">
                                    <td rowspan="6" >3</td>
                                    <td rowspan="6">Drainage works</td>
                                    <td >Drain culvert</td>
                                    <td >2</td>
                                    <td>
                                      <input onblur="findTotalmarkahPRCw()" type="number" min="0" max="2" class="civil" name="CwDrainageCulvert" id="CwDrainageCulvert">
                                    </td>            
                                               
                                    <td><input type="text" name="CwDrainageCulvert" id="CwDrainageCulvert"></td>                    
                                    <td><input type="file" name="CwDrainageCulvert" id="CwDrainageCulvert"></td>                    
                                  </tr>
                    
                                  <tr>
                                    <td >Sump</td>
                                    <td >2</td>
                                    <td>
                                      <input onblur="findTotalmarkahPRCw()" type="number" min="0" max="2" class="civil" name="CwDrainageSump" id="CwDrainageSump">
                                    </td>            
                                               
                                    <td><input type="text" name="CwDrainageSump" id="CwDrainageSump"></td>                    
                                    <td><input type="file" name="CwDrainageSump" id="CwDrainageSump"></td>                    
                                  </tr>
                    
                                  <tr>
                                    <td >Pipe</td>
                                    <td >2</td>
                                    <td>
                                      <input onblur="findTotalmarkahPRCw()" type="number" min="0" max="2" class="civil" name="CwDrainagePipe" id="CwDrainagePipe">
                                    </td>            
                                               
                                    <td><input type="text" name="CwDrainagePipe" id="CwDrainagePipe"></td>                    
                                    <td><input type="file" name="CwDrainagePipe" id="CwDrainagePipe"></td>                    
                                  </tr>
                    
                                  <tr>
                                    <td >Modular tank</td>
                                    <td >2</td>
                                    <td>
                                      <input onblur="findTotalmarkahPRCw()" type="number" min="0" max="2" class="civil" name="CwDrainageTank" id="CwDrainageTank">
                                    </td>            
                                              
                                    <td><input type="text" name="CwDrainageTank" id="CwDrainageTank"></td>                    
                                    <td><input type="file" name="CwDrainageTank" id="CwDrainageTank"></td>                    
                                  </tr>
                    
                                  <tr>
                                    <td >Geotextile</td>
                                    <td >2</td>
                                    <td>
                                      <input onblur="findTotalmarkahPRCw()" type="number" min="0" max="2" class="civil" name="CwDrainageGeotextile" id="CwDrainageGeotextile">
                                    </td>            
                                              
                                    <td><input type="text" name="CwDrainageGeotextile" id="CwDrainageGeotextile"></td>                    
                                    <td><input type="file" name="CwDrainageGeotextile" id="CwDrainageGeotextile"></td>                    
                                  </tr>
                    
                                  <tr>
                                    <td >Grating</td>
                                    <td >2</td>
                                    <td>
                                      <input onblur="findTotalmarkahPRCw()" type="number" min="0" max="2" class="civil" name="CwDrainageGrating" id="CwDrainageGrating">
                                    </td>            
                                               
                                    <td><input type="text" name="CwDrainageGrating" id="CwDrainageGrating"></td>                    
                                    <td><input type="file" name="CwDrainageGrating" id="CwDrainageGrating"></td>                    
                                  </tr>
                    
                                  <tr class="text-center">
                                    <td rowspan="15" >7</td>
                                    <td rowspan="15">Pavement/road furniture</td>
                                    <td >Asphalt concrete</td>
                                    <td >2</td>
                                    <td><input onblur="findTotalmarkahPRCw()" type="number" min="0" max="2" class="civil" name="" id=""></td>            
                                               
                                    <td><input type="text" name="" id=""></td>                    
                                    <td><input type="file" name="" id=""></td>                    
                                  </tr>
                    
                                  <tr>
                                    <td >Porous asphalt</td>
                                    <td >2</td>
                                    <td><input onblur="findTotalmarkahPRCw()" type="number" min="0" max="2" class="civil" name="" id=""></td>            
                                             
                                    <td><input type="text" name="" id=""></td>                    
                                    <td><input type="file" name="" id=""></td>                    
                                  </tr>
                    
                                  <tr>
                                    <td >Prime coat</td>
                                    <td >2</td>
                                    <td>
                                      <input onblur="findTotalmarkahPRCw()" type="number" min="0" max="2" class="civil" name="CwPavementsPrime" id="CwPavementsPrime">
                                    </td>            
                                            
                                    <td><input type="text" name="CwPavementsPrime" id="CwPavementsPrime"></td>                    
                                    <td><input type="file" name="CwPavementsPrime" id="CwPavementsPrime"></td>                    
                                  </tr>
                    
                                  <tr>
                                    <td >Tack coat</td>
                                    <td >2</td>
                                    <td>
                                      <input onblur="findTotalmarkahPRCw()" type="number" min="0" max="2" class="civil" name="CwPavementsTack" id="CwPavementsTack">
                                    </td>            
                                               
                                    <td><input type="text" name="CwPavementsTack" id="CwPavementsTack"></td>                    
                                    <td><input type="file" name="CwPavementsTack" id="CwPavementsTack"></td>                    
                                  </tr>
                    
                                  <tr>
                                    <td >Retroreflective sheeting</td>
                                    <td >2</td>
                                    <td>
                                      <input onblur="findTotalmarkahPRCw()" type="number" min="0" max="2" class="civil" name="" id="">
                                    </td>            
                                              
                                    <td><input type="text" name="" id=""></td>                    
                                    <td><input type="file" name="" id=""></td>                    
                                  </tr>
                    
                                  <tr>
                                    <td >Road paint</td>
                                    <td >2</td>
                                    <td>
                                      <input onblur="findTotalmarkahPRCw()" type="number" min="0" max="2" class="civil" name="CwRoadPaint" id="CwRoadPaint">
                                    </td>            
                                               
                                    <td><input type="text" name="CwRoadPaint" id="CwRoadPaint"></td>                    
                                    <td><input type="file" name="CwRoadPaint" id="CwRoadPaint"></td>                    
                                  </tr>
                    
                                  <tr>
                                    <td >Paver block</td>
                                    <td >2</td>
                                    <td>
                                      <input onblur="findTotalmarkahPRCw()" type="number" min="0" max="2" class="civil" name="" id="">
                                    </td>            
                                             
                                    <td><input type="text" name="" id=""></td>                    
                                    <td><input type="file" name="" id=""></td>                    
                                  </tr>
                    
                                  <tr>
                                    <td >Permeable paver</td>
                                    <td >2</td>
                                    <td>
                                      <input onblur="findTotalmarkahPRCw()" type="number" min="0" max="2" class="civil" name="" id="">
                                    </td>            
                                               
                                    <td><input type="text" name="" id=""></td>                    
                                    <td><input type="file" name="" id=""></td>                    
                                  </tr>
                    
                                  <tr>
                                    <td >Kerb</td>
                                    <td >2</td>
                                    <td>
                                      <input onblur="findTotalmarkahPRCw()" type="number" min="0" max="2" class="civil" name="" id="">
                                    </td>            
                                              
                                    <td><input type="text" name="" id=""></td>                    
                                    <td><input type="file" name="" id=""></td>                    
                                  </tr>
                    
                                  <tr>
                                    <td >Road stud</td>
                                    <td >2</td>
                                    <td>
                                      <input onblur="findTotalmarkahPRCw()" type="number" min="0" max="2" class="civil" name="CwRoadStud" id="CwRoadStud">
                                    </td>            
                                           
                                    <td><input type="text" name="CwRoadStud" id="CwRoadStud"></td>                    
                                    <td><input type="file" name="CwRoadStud" id="CwRoadStud"></td>                    
                                  </tr>
                    
                                  <tr>
                                    <td >Chevron delineator</td>
                                    <td >2</td>
                                    <td>
                                      <input onblur="findTotalmarkahPRCw()" type="number" min="0" max="2" class="civil" name="CwRoadChevron" id="CwRoadChevron">
                                    </td>            
                                              
                                    <td><input type="text" name="CwRoadChevron" id="CwRoadChevron"></td>                    
                                    <td><input type="file" name="CwRoadChevron" id="CwRoadChevron"></td>                    
                                  </tr>
                    
                                  <tr>
                                    <td >Guardrail</td>
                                    <td >2</td>
                                    <td>
                                      <input onblur="findTotalmarkahPRCw()" type="number" min="0" max="2" class="civil" name="CwRoadGuardrails" id="CwRoadGuardrails">
                                    </td>            
                                               
                                    <td><input type="text" name="CwRoadGuardrails" id="CwRoadGuardrails"></td>                    
                                    <td><input type="file" name="CwRoadGuardrails" id="CwRoadGuardrails"></td>                    
                                  </tr>
                    
                                  <tr>
                                    <td >Railing</td>
                                    <td >2</td>
                                    <td>
                                      <input onblur="findTotalmarkahPRCw()" type="number" min="0" max="2" class="civil" name="CwRoadRailings" id="CwRoadRailings">
                                    </td>            
                                              
                                    <td><input type="text" name="CwRoadRailings" id="CwRoadRailings"></td>                    
                                    <td><input type="file" name="CwRoadRailings" id="CwRoadRailings"></td>                    
                                  </tr>
                    
                                  <tr>
                                    <td >Wire rope</td>
                                    <td >2</td>
                                    <td>
                                      <input onblur="findTotalmarkahPRCw()" type="number" min="0" max="2" class="civil" name="CwRoadGuardrails" id="CwRoadGuardrails">
                                    </td>            
                                              
                                    <td><input type="text" name="CwRoadGuardrails" id="CwRoadGuardrails"></td>                    
                                    <td><input type="file" name="CwRoadGuardrails" id="CwRoadGuardrails"></td>                    
                                  </tr>
                    
                                  <tr>
                                    <td >Signages</td>
                                    <td >2</td>
                                    <td>
                                      <input onblur="findTotalmarkahPRCw()" type="number" min="0" max="2" class="civil" name="CwRoadSignages" id="CwRoadSignages">
                                    </td>            
                                               
                                    <td><input type="text" name="CwRoadSignages" id="CwRoadSignages"></td>                    
                                    <td><input type="file" name="CwRoadSignages" id="CwRoadSignages"></td>                    
                                  </tr>
                    
                                  <tr class="text-center">
                                    <td rowspan="7" >5</td>
                                    <td rowspan="7">Water reticulation works</td>
                                    <td >Pipes</td>
                                    <td >2</td>
                                    <td><input onblur="findTotalmarkahPRCw()" type="number" min="0" max="2" class="civil" name="CwWaterPipes" id="CwWaterPipes"></td>            
                                              
                                    <td><input type="text" name="CwWaterPipes" id="CwWaterPipes"></td>                    
                                    <td><input type="file" name="CwWaterPipes" id="CwWaterPipes"></td>                    
                                  </tr>
                    
                                  <tr>
                                    <td >Bulk meter</td>
                                    <td >2</td>
                                    <td><input onblur="findTotalmarkahPRCw()" type="number" min="0" max="2" class="civil" name="CwWaterBulk" id="CwWaterBulk"></td>            
                                               
                                    <td><input type="text" name="CwWaterBulk" id="CwWaterBulk"></td>                    
                                    <td><input type="file" name="CwWaterBulk" id="CwWaterBulk"></td>                    
                                  </tr>
                    
                                  <tr>
                                    <td >Valves</td>
                                    <td >2</td>
                                    <td>
                                      <input onblur="findTotalmarkahPRCw()" type="number" min="0" max="2" class="civil" name="CwWaterValves" id="CwWaterValves">
                                    </td>            
                                              
                                    <td><input type="text" name="CwWaterValves" id="CwWaterValves"></td>                    
                                    <td><input type="file" name="CwWaterValves" id="CwWaterValves"></td>                    
                                  </tr>
                    
                                  <tr>
                                    <td >Tank</td>
                                    <td >2</td>
                                    <td>
                                      <input onblur="findTotalmarkahPRCw()" type="number" min="0" max="2" class="civil" name="CwWaterTank" id="CwWaterTank">
                                    </td>            
                                              
                                    <td><input type="text" name="CwWaterTank" id="CwWaterTank"></td>                    
                                    <td><input type="file" name="CwWaterTank" id="CwWaterTank"></td>                    
                                  </tr>
                    
                                  <tr>
                                    <td >Pump</td>
                                    <td >2</td>
                                    <td>
                                      <input onblur="findTotalmarkahPRCw()" type="number" min="0" max="2" class="civil" name="CwWaterPump" id="CwWaterPump">
                                    </td>            
                                             
                                    <td><input type="text" name="CwWaterPump" id="CwWaterPump"></td>                    
                                    <td><input type="file" name="CwWaterPump" id="CwWaterPump"></td>                    
                                  </tr>
                    
                                  <tr>
                                    <td >First flush filter</td>
                                    <td >2</td>
                                    <td>
                                      <input onblur="findTotalmarkahPRCw()" type="number" min="0" max="2" class="civil" name="CwWaterFirstFlush" id="CwWaterFirstFlush">
                                    </td>            
                                             
                                    <td><input type="text" name="CwWaterFirstFlush" id="CwWaterFirstFlush"></td>                    
                                    <td><input type="file" name="CwWaterFirstFlush" id="CwWaterFirstFlush"></td>                    
                                  </tr>
                    
                                  <tr>
                                    <td >Sand filter</td>
                                    <td >2</td>
                                    <td>
                                      <input onblur="findTotalmarkahPRCw()" type="number" min="0" max="2" class="civil" name="CwWaterSand" id="CwWaterSand">
                                    </td>            
                                              
                                    <td><input type="text" name="CwWaterSand" id="CwWaterSand"></td>                    
                                    <td><input type="file" name="CwWaterSand" id="CwWaterSand"></td>                    
                                  </tr>
                    
                                  <tr class="text-center">
                                    <td rowspan="4" >6</td>
                                    <td rowspan="4">Sewerage works</td>
                                    <td >Pipes</td>
                                    <td >2</td>
                                    <td><input onblur="findTotalmarkahPRCw()" type="number" min="0" max="2" class="civil" name="CwSeveragePipes" id="CwSeveragePipes"></td>            
                                              
                                    <td><input type="text" name="CwSeveragePipes" id="CwSeveragePipes"></td>                    
                                    <td><input type="file" name="CwSeveragePipes" id="CwSeveragePipes"></td>                    
                                  </tr>
                    
                                  <tr>
                                    <td >Tank</td>
                                    <td >2</td>
                                    <td><input onblur="findTotalmarkahPRCw()" type="number" min="0" max="2" class="civil" name="CwSeverageTank" id="CwSeverageTank"></td>            
                                             
                                    <td><input type="text" name="CwSeverageTank" id="CwSeverageTank"></td>                    
                                    <td><input type="file" name="CwSeverageTank" id="CwSeverageTank"></td>                    
                                  </tr>
                    
                                  <tr>
                                    <td >Pump</td>
                                    <td >2</td>
                                    <td>
                                      <input onblur="findTotalmarkahPRCw()" type="number" min="0" max="2" class="civil" name="CwSeveragePump" id="CwSeveragePump">
                                    </td>            
                                              
                                    <td><input type="text" name="CwSeveragePump" id="CwSeveragePump"></td>                    
                                    <td><input type="file" name="CwSeveragePump" id="CwSeveragePump"></td>                    
                                  </tr>
                    
                                  <tr>
                                    <td >Manhole</td>
                                    <td >2</td>
                                    <td>
                                      <input onblur="findTotalmarkahPRCw()" type="number" min="0" max="2" class="civil" name="CwSeverageManhole" id="CwSeverageManhole">
                                    </td>            
                                             
                                    <td><input type="text" name="CwSeverageManhole" id="CwSeverageManhole"></td>                    
                                    <td><input type="file" name="CwSeverageManhole" id="CwSeverageManhole"></td>                    
                                  </tr>
                    
                                  <tr style="display: none">
                                    <td><input type="text" name="markahPRCw" id="markahPRCw" /></td>
                                  </tr>

                                  <tr class="text-center">
                                    <td rowspan="5" >1</td>
                                    <td rowspan="5">Common items</td>
                                    <td >Cement</td>
                                    <td >2</td>
                                    <td><input onblur="findTotalmarkahPRSw()" type="number" min="0" max="2" class="structure" name="SwCommonCement" id="SwCommonCement"></td>            
                                                
                                    <td><input type="text"></td>                    
                                    <td><input type="file"></td>                    
                                  </tr>
                      
                                  <tr>
                                    <td >Reinforcement bar</td>
                                    <td >2</td>
                                    <td>
                                      <input onblur="findTotalmarkahPRSw()" type="number" min="0" max="2" class="structure" name="SwCommonBar" id="SwCommonBar">
                                    </td>            
                                               
                                    <td><input type="text"></td>                    
                                    <td><input type="file"></td>                    
                                  </tr>
                      
                                  <tr>
                                    <td >Sand</td>
                                    <td >2</td>
                                    <td>
                                      <input onblur="findTotalmarkahPRSw()" type="number" min="0" max="2" class="structure" name="SwCommonSand" id="SwCommonSand">
                                    </td>            
                                              
                                    <td><input type="text"></td>                    
                                    <td><input type="file"></td>                    
                                  </tr>
                      
                                  <tr>
                                    <td >Aggregate</td>
                                    <td >2</td>
                                    <td>
                                      <input onblur="findTotalmarkahPRSw()" type="number" min="0" max="2" class="structure" name="SwCommonAggregate" id="SwCommonAggregate">
                                    </td>            
                                              
                                    <td><input type="text"></td>                    
                                    <td><input type="file"></td>                    
                                  </tr>
                      
                                  <tr>
                                    <td >Timber</td>
                                    <td >2</td>
                                    <td>
                                      <input onblur="findTotalmarkahPRSw()" type="number" min="0" max="2" class="structure" name="SwCommonTimber" id="SwCommonTimber">
                                    </td>            
                                             
                                    <td><input type="text"></td>                    
                                    <td><input type="file"></td>                    
                                  </tr>
                        
                                    <tr class="text-center">
                                      <td rowspan="7" >2</td>
                                      <td rowspan="7">Super structure</td>
                                      <td >Concrete</td>
                                      <td >2</td>
                                      <td>
                                        <input onblur="findTotalmarkahPRSw()" type="number" min="0" max="2" class="structure" name="SwSuperConcrete" id="SwSuperConcrete">
                                      </td>            
                                                
                                      <td><input type="text"></td>                    
                                      <td><input type="file"></td>                    
                                    </tr>
                      
                                    <tr>
                                      <td >Reinforcement bar</td>
                                      <td >2</td>
                                      <td>
                                        <input onblur="findTotalmarkahPRSw()" type="number" min="0" max="2" class="structure" name="SwSuperBar" id="SwSuperBar">
                                      </td>            
                                               
                                      <td><input type="text"></td>                    
                                      <td><input type="file"></td>                    
                                    </tr>
                      
                                    <tr>
                                      <td >Steel</td>
                                      <td >2</td>
                                      <td>
                                        <input onblur="findTotalmarkahPRSw()" type="number" min="0" max="2" class="structure" name="SwSuperSteel" id="SwSuperSteel">
                                      </td>            
                                                
                                      <td><input type="text"></td>                    
                                      <td><input type="file"></td>                    
                                    </tr>
                      
                                    <tr>
                                      <td >Water stop</td>
                                      <td >2</td>
                                      <td>
                                        <input onblur="findTotalmarkahPRSw()" type="number" min="0" max="2" class="structure" name="SwSuperWater" id="SwSuperWater">
                                      </td>            
                                                
                                      <td><input type="text"></td>                    
                                      <td><input type="file"></td>                    
                                    </tr>
                      
                                    <tr>
                                      <td >Damp proof membrane</td>
                                      <td >2</td>
                                      <td>
                                        <input onblur="findTotalmarkahPRSw()" type="number" min="0" max="2" class="structure" name="SwSuperDamp" id="SwSuperDamp">
                                      </td>            
                                              
                                      <td><input type="text"></td>                    
                                      <td><input type="file"></td>                    
                                    </tr>
                      
                                    <tr>
                                      <td >Plastic sheeting</td>
                                      <td >2</td>
                                      <td>
                                        <input onblur="findTotalmarkahPRSw()" type="number" min="0" max="2" class="structure" name="SwSuperPlastic" id="SwSuperPlastic">
                                      </td>            
                                                
                                      <td><input type="text"></td>                    
                                      <td><input type="file"></td>                    
                                    </tr>
                      
                                    <tr>
                                      <td >Sealant</td>
                                      <td >2</td>
                                      <td>
                                        <input onblur="findTotalmarkahPRSw()" type="number" min="0" max="2" class="structure" name="SwSuperSealant" id="SwSuperSealant">
                                      </td>            
                                                  
                                      <td><input type="text"></td>                    
                                      <td><input type="file"></td>                    
                                    </tr>
                      
                                    <tr class="text-center">
                                      <td rowspan="6" >3</td>
                                      <td rowspan="6">Roof trusses</td>
                                      <td >Steel</td>
                                      <td >2</td>
                                      <td>
                                        <input onblur="findTotalmarkahPRSw()" type="number" min="0" max="2" class="structure" name="SwRoofSteel" id="SwRoofSteel">
                                      </td>            
                                                 
                                      <td><input type="text"></td>                    
                                      <td><input type="file"></td>                    
                                    </tr>
                      
                                    <tr>
                                      <td >Timber</td>
                                      <td >2</td>
                                      <td>
                                        <input onblur="findTotalmarkahPRSw()" type="number" min="0" max="2" class="structure" name="SwRoofTimber" id="SwRoofTimber">
                                      </td>            
                                                  
                                      <td><input type="text"></td>                    
                                      <td><input type="file"></td>                    
                                    </tr>
                      
                                    <tr>
                                      <td >Aluminium</td>
                                      <td >2</td>
                                      <td>
                                        <input onblur="findTotalmarkahPRSw()" type="number" min="0" max="2" class="structure" name="SwRoofAluminium" id="SwRoofAluminium">
                                      </td>            
                                               
                                      <td><input type="text"></td>                    
                                      <td><input type="file"></td>                    
                                    </tr>
                      
                                    <tr>
                                      <td >Bolt</td>
                                      <td >2</td>
                                      <td>
                                        <input onblur="findTotalmarkahPRSw()" type="number" min="0" max="2" class="structure" name="SwRoofBolt" id="SwRoofBolt">
                                      </td>            
                                                 
                                      <td><input type="text"></td>                    
                                      <td><input type="file"></td>                    
                                    </tr>
                      
                                    <tr>
                                      <td >Plates</td>
                                      <td >2</td>
                                      <td>
                                        <input onblur="findTotalmarkahPRSw()" type="number" min="0" max="2" class="structure" name="SwRoofPlates" id="SwRoofPlates">
                                      </td>            
                                                 
                                      <td><input type="text"></td>                    
                                      <td><input type="file"></td>                    
                                    </tr>
                      
                                    <tr>
                                      <td >Membrane</td>
                                      <td >2</td>
                                      <td>
                                        <input onblur="findTotalmarkahPRSw()" type="number" min="0" max="2" class="structure" name="SwRoofMembrane" id="SwRoofMembrane">
                                      </td>            
                                               
                                      <td><input type="text"></td>                    
                                      <td><input type="file"></td>                    
                                    </tr>
                      
                                    <tr style="display: none">
                                      <td><input type="text" name="markahPRSw" id="markahPRSw" /></td>
                                    </tr>

                                    <thead class="text-white bg-orange-jkr">
            
                                        <tr>
                                          <th colspan="8">List of products for electrical works</th>
                                        </tr>
                                        <tr>
                                          <th>No.</th>
                                          <th >Component</th>
                                          <th>Product</th>
                                          <th>Point Allocated</th>
                                          <th>Point Requested (design)</th>
                                          {{-- <th>Point Requested (construction)</th>
                                          <th>Point Awarded</th> --}}
                                          <th >Remark</th>
                                          <th >Supporting Documents</th>
                                        </tr>
                                      </thead>

                                      <tr class="text-center">
                                        <td rowspan="1" >1</td>
                                        <td rowspan="1">Generator set</td>
                                        <td >Generator set</td>
                                        <td >2</td>
                                        <td>
                                          <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwGeneratorSet" id="EwGeneratorSet">
                                        </td>                       
                                        <td><input type="text" name="EwGeneratorSet" id="EwGeneratorSet"></td>                    
                                        <td><input type="file" name="EwGeneratorSet" id="EwGeneratorSet"></td>                    
                                      </tr>
                            
                                      
                            
                            
                                      <tr class="text-center">
                                          <td rowspan="1" >2</td>
                                          <td rowspan="1">Transformer</td>
                                          <td >11kV dry type distribution transformer</td>
                                          <td >2</td>
                                          <td>
                                            <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwTransformer" id="EwTransformer">
                                          </td>            
                                                   
                                          <td><input type="text" name="EwTransformer" id="EwTransformer"></td>                    
                                          <td><input type="file" name="EwTransformer" id="EwTransformer"></td>                    
                                        </tr>
                          
                                        <tr class="text-center">
                                          <td rowspan="1" >3</td>
                                          <td rowspan="1">Surge Protective Device (PSD)</td>
                                          <td >Surge Protective Device (PSD)</td>
                                          <td >2</td>
                                          <td>
                                            <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwSPD" id="EwSPD">
                                          </td>            
                                                    
                                          <td><input type="text" name="EwSPD" id="EwSPD"></td>                    
                                          <td><input type="file" name="EwSPD" id="EwSPD"></td>                    
                                        </tr>
                          
                                        <tr class="text-center">
                                          <td rowspan="4" >5</td>
                                          <td rowspan="4">Protection relays</td>
                                          <td >Combined overcurrent and earth fault relay</td>
                                          <td >2</td>
                                          <td>
                                            <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwRelayCombined" id="EwRelayCombined">
                                          </td>            
                                                   
                                          <td><input type="text" name="EwRelayCombined" id="EwRelayCombined"></td>                    
                                          <td><input type="file" name="EwRelayCombined" id="EwRelayCombined"></td>                    
                                        </tr>
                          
                                        <tr>
                                          <td >Overcurrent relay</td>
                                          <td >2</td>
                                          <td>
                                            <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwRelayOvercurrent" id="EwRelayOvercurrent">
                                          </td>            
                                                    
                                          <td><input type="text" name="EwRelayOvercurrent" id="EwRelayOvercurrent"></td>                    
                                          <td><input type="file" name="EwRelayOvercurrent" id="EwRelayOvercurrent"></td>                    
                                        </tr>
                          
                                        <tr>
                                          <td >Earth fault relay</td>
                                          <td >2</td>
                                          <td>
                                            <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwRelayEarthFault" id="EwRelayEarthFault">
                                          </td>            
                                                   
                                          <td><input type="text" name="EwRelayEarthFault" id="EwRelayEarthFault"></td>                    
                                          <td><input type="file" name="EwRelayEarthFault" id="EwRelayEarthFault"></td>                    
                                        </tr>
                          
                                        <tr>
                                          <td >Earth fault leakage</td>
                                          <td >2</td>
                                          <td>
                                            <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwRelayEarthLeakage" id="EwRelayEarthLeakage">
                                          </td>            
                                                  
                                          <td><input type="text" name="EwRelayEarthLeakage" id="EwRelayEarthLeakage"></td>                    
                                          <td><input type="file" name="EwRelayEarthLeakage" id="EwRelayEarthLeakage"></td>                    
                                        </tr>
                          
                                        <tr class="text-center">
                                          <td rowspan="3" >5</td>
                                          <td rowspan="3">Circuit breaker</td>
                                          <td >Air Circuit Breaker(ACB)</td>
                                          <td >2</td>
                                          <td>
                                            <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwCircuitACB" id="EwCircuitACB">
                                          </td>            
                                                 
                                          <td><input type="text" name="EwCircuitACB" id="EwCircuitACB"></td>                    
                                          <td><input type="file" name="EwCircuitACB" id="EwCircuitACB"></td>                    
                                        </tr>
                          
                                        <tr>
                                          <td >Moulded Case Circuit Breaker(MCCB)</td>
                                          <td >2</td>
                                          <td>
                                            <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwCircuitMCCB" id="EwCircuitMCCB">
                                          </td>            
                                                 
                                          <td><input type="text" name="EwCircuitMCCB" id="EwCircuitMCCB"></td>                    
                                          <td><input type="file" name="EwCircuitMCCB" id="EwCircuitMCCB"></td>                    
                                        </tr>
                          
                                        <tr>
                                          <td >Miniature Circuit Breaker(MCB)</td>
                                          <td >2</td>
                                          <td>
                                            <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwCircuitMCB" id="EwCircuitMCB">
                                          </td>            
                                                    
                                          <td><input type="text" name="EwCircuitMCB" id="EwCircuitMCB"></td>                    
                                          <td><input type="file" name="EwCircuitMCB" id="EwCircuitMCB"></td>                    
                                        </tr>
                          
                                        <tr class="text-center">
                                          <td rowspan="1" >6</td>
                                          <td rowspan="1">Residual current devices</td>
                                          <td >Residual Current Operated Circuit Breaker with Integral o/c protection(RCBO)</td>
                                          <td >2</td>
                                          <td><input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwResidualRCBO" id="EwResidualRCBO"></td>            
                                                    
                                          <td><input type="text" name="EwResidualRCBO" id="EwResidualRCBO"></td>                    
                                          <td><input type="file" name="EwResidualRCBO" id="EwResidualRCBO"></td>                    
                                        </tr>
                          
                                        <tr class="text-center">
                                          <td rowspan="5" >7</td>
                                          <td rowspan="5">Switchboard</td>
                                          <td >Metal enclosure</td>
                                          <td >2</td>
                                          <td><input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwResidualRCBO" id="EwResidualRCBO"></td>            
                                                   
                                          <td><input type="text" name="EwResidualRCBO" id="EwResidualRCBO"></td>                    
                                          <td><input type="file" name="EwResidualRCBO" id="EwResidualRCBO"></td>                    
                                        </tr>
                          
                                        <tr>
                                          <td >Busbar support</td>
                                          <td >2</td>
                                          <td><input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwSwitchboardBusbar" id="EwSwitchboardBusbar"></td>            
                                                    
                                          <td><input type="text" name="EwSwitchboardBusbar" id="EwSwitchboardBusbar"></td>                    
                                          <td><input type="file" name="EwSwitchboardBusbar" id="EwSwitchboardBusbar"></td>                    
                                        </tr>
                          
                                        <tr>
                                          <td >Cables</td>
                                          <td >2</td>
                                          <td>
                                            <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwSwitchboardCables" id="EwSwitchboardCables">
                                          </td>            
                                                    
                                          <td><input type="text" name="EwSwitchboardCables" id="EwSwitchboardCables"></td>                    
                                          <td><input type="file" name="EwSwitchboardCables" id="EwSwitchboardCables"></td>                    
                                        </tr>
                          
                                        <tr>
                                          <td >Busbar</td>
                                          <td >2</td>
                                          <td>
                                            <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwSwitchboardCables" id="EwSwitchboardCables">
                                          </td>            
                                                  
                                          <td><input type="text" name="EwSwitchboardCables" id="EwSwitchboardCables"></td>                    
                                          <td><input type="file" name="EwSwitchboardCables" id="EwSwitchboardCables"></td>                    
                                        </tr>
                          
                                        <tr>
                                          <td >Consumer unit</td>
                                          <td >2</td>
                                          <td>
                                            <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwSwitchboardConsumer" id="EwSwitchboardConsumer">
                                          </td>            
                                                 
                                          <td><input type="text" name="EwSwitchboardConsumer" id="EwSwitchboardConsumer"></td>                    
                                          <td><input type="file" name="EwSwitchboardConsumer" id="EwSwitchboardConsumer"></td>                    
                                        </tr>
                          
                                        <tr class="text-center">
                                          <td rowspan="4" >8</td>
                                          <td rowspan="4">Lamp</td>
                                          <td >Compact fluorescent lamp(CFL)</td>
                                          <td >2</td>
                                          <td><input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwLampCFL" id="EwLampCFL"></td>            
                                                   
                                          <td><input type="text" name="EwLampCFL" id="EwLampCFL"></td>                    
                                          <td><input type="file" name="EwLampCFL" id="EwLampCFL"></td>                    
                                        </tr>
                          
                                        <tr>
                                          <td >Fluorescent lamp(T5)</td>
                                          <td >2</td>
                                          <td><input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwLampT5" id="EwLampT5"></td>            
                                                   
                                          <td><input type="text" name="EwLampT5" id="EwLampT5"></td>                    
                                          <td><input type="file" name="EwLampT5" id="EwLampT5"></td>                    
                                        </tr>
                          
                                        <tr>
                                          <td >LED tubes</td>
                                          <td >2</td>
                                          <td>
                                            <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwLampLEDTube" id="EwLampLEDTube">
                                          </td>            
                                                    
                                          <td><input type="text" name="EwLampLEDTube" id="EwLampLEDTube"></td>                    
                                          <td><input type="file" name="EwLampLEDTube" id="EwLampLEDTube"></td>                    
                                        </tr>
                          
                                        <tr>
                                          <td >LED bulb</td>
                                          <td >2</td>
                                          <td>
                                            <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwLampLEDBulb" id="EwLampLEDBulb">
                                          </td>            
                                                    
                                          <td><input type="text" name="EwLampLEDBulb" id="EwLampLEDBulb"></td>                    
                                          <td><input type="file" name="EwLampLEDBulb" id="EwLampLEDBulb"></td>                    
                                        </tr>
                          
                                        <tr class="text-center">
                                          <td rowspan="6" >9</td>
                                          <td rowspan="6">Indoor luminaires</td>
                                          <td >LED downlight</td>
                                          <td >2</td>
                                          <td><input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwIndoorLEDDownlight" id="EwIndoorLEDDownlight"></td>            
                                                      
                                          <td><input type="text" name="EwIndoorLEDDownlight" id="EwIndoorLEDDownlight"></td>                    
                                          <td><input type="file" name="EwIndoorLEDDownlight" id="EwIndoorLEDDownlight"></td>                    
                                        </tr>
                          
                                        <tr>
                                          <td >LED recessed luminaires</td>
                                          <td >2</td>
                                          <td><input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwIndoorLEDRecessed" id="EwIndoorLEDRecessed"></td>            
                                                    
                                          <td><input type="text" name="EwIndoorLEDRecessed" id="EwIndoorLEDRecessed"></td>                    
                                          <td><input type="file" name="EwIndoorLEDRecessed" id="EwIndoorLEDRecessed"></td>                    
                                        </tr>
                          
                                        <tr>
                                          <td >Fluorescent luminaires(T5)</td>
                                          <td >2</td>
                                          <td>
                                            <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwIndoorT5" id="EwIndoorT5">
                                          </td>            
                                                    
                                          <td><input type="text" name="EwIndoorT5" id="EwIndoorT5"></td>                    
                                          <td><input type="file" name="EwIndoorT5" id="EwIndoorT5"></td>                    
                                        </tr>
                          
                                        <tr>
                                          <td >Fluorescent luminaires(T8) c/w electronic ballast</td>
                                          <td >2</td>
                                          <td>
                                            <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwIndoorT8" id="EwIndoorT8">
                                          </td>            
                                                    
                                          <td><input type="text" name="EwIndoorT8" id="EwIndoorT8"></td>                    
                                          <td><input type="file" name="EwIndoorT8" id="EwIndoorT8"></td>                    
                                        </tr>
                          
                                        <tr>
                                          <td >Electronic ballast</td>
                                          <td >2</td>
                                          <td>
                                            <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwIndoorBallast" id="EwIndoorBallast">
                                          </td>            
                                                    
                                          <td><input type="text" name="EwIndoorBallast" id="EwIndoorBallast"></td>                    
                                          <td><input type="file" name="EwIndoorBallast" id="EwIndoorBallast"></td>                    
                                        </tr>
                          
                                        <tr>
                                          <td >LED driver</td>
                                          <td >2</td>
                                          <td>
                                            <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwIndoorLEDDriver" id="EwIndoorLEDDriver">
                                          </td>            
                                                    
                                          <td><input type="text" name="EwIndoorLEDDriver" id="EwIndoorLEDDriver"></td>                    
                                          <td><input type="file" name="EwIndoorLEDDriver" id="EwIndoorLEDDriver"></td>                    
                                        </tr>
                          
                                        <tr class="text-center">
                                          <td rowspan="5" >10</td>
                                          <td rowspan="5">Outdoor luminaires</td>
                                          <td >Road lighting luminaires(HPSV)</td>
                                          <td >2</td>
                                          <td><input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwOutdoorHPSV" id="EwOutdoorHPSV"></td>            
                                                     
                                          <td><input type="text" name="EwOutdoorHPSV" id="EwOutdoorHPSV"></td>                    
                                          <td><input type="file" name="EwOutdoorHPSV" id="EwOutdoorHPSV"></td>                    
                                        </tr>
                          
                                        <tr>
                                          <td >Road lighting luminaires(Induction)</td>
                                          <td >2</td>
                                          <td><input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwOutdoorInduction" id="EwOutdoorInduction"></td>            
                                                    
                                          <td><input type="text" name="EwOutdoorInduction" id="EwOutdoorInduction"></td>                    
                                          <td><input type="file" name="EwOutdoorInduction" id="EwOutdoorInduction"></td>                    
                                        </tr>
                          
                                        <tr>
                                          <td >Road lighting luminaires(LED)</td>
                                          <td >2</td>
                                          <td>
                                            <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwOutdoorLED" id="EwOutdoorLED">
                                          </td>            
                                       
                                          <td><input type="text" name="EwOutdoorLED" id="EwOutdoorLED"></td>                    
                                          <td><input type="file" name="EwOutdoorLED" id="EwOutdoorLED"></td>                    
                                        </tr>
                          
                                        <tr>
                                          <td >Ballast for discharge lamp</td>
                                          <td >2</td>
                                          <td>
                                            <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwOutdoorBallast" id="EwOutdoorBallast">
                                          </td>            
                                                   
                                          <td><input type="text" name="EwOutdoorBallast" id="EwOutdoorBallast"></td>                    
                                          <td><input type="file" name="EwOutdoorBallast" id="EwOutdoorBallast"></td>                    
                                        </tr>
                          
                                        <tr>
                                          <td >Lighting columns</td>
                                          <td >2</td>
                                          <td>
                                            <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwOutdoorLighting" id="EwOutdoorLighting">
                                          </td>            
                                                    
                                          <td><input type="text" name="EwOutdoorLighting" id="EwOutdoorLighting"></td>                    
                                          <td><input type="file" name="EwOutdoorLighting" id="EwOutdoorLighting"></td>                    
                                        </tr>
                          
                                        <tr class="text-center">
                                          <td rowspan="3" >11</td>
                                          <td rowspan="3">Traffic light</td>
                                          <td > Controller</td>
                                          <td >2</td>
                                          <td><input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwTrafficController" id="EwTrafficController"></td>            
                                                   
                                          <td><input type="text" name="EwTrafficController" id="EwTrafficController"></td>                    
                                          <td><input type="file" name="EwTrafficController" id="EwTrafficController"></td>                    
                                        </tr>
                          
                                        <tr>
                                          <td >Traffic signal module</td>
                                          <td >2</td>
                                          <td><input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwTrafficSignal" id="EwTrafficSignal"></td>            
                                                  
                                          <td><input type="text" name="EwTrafficSignal" id="EwTrafficSignal"></td>                    
                                          <td><input type="file" name="EwTrafficSignal" id="EwTrafficSignal"></td>                    
                                        </tr>
                          
                                        <tr>
                                          <td >Lighting columns</td>
                                          <td >2</td>
                                          <td>
                                            <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwTrafficLighting" id="EwTrafficLighting">
                                          </td>            
                                                    
                                          <td><input type="text" name="EwTrafficLighting" id="EwTrafficLighting"></td>                    
                                          <td><input type="file" name="EwTrafficLighting" id="EwTrafficLighting"></td>                    
                                        </tr>
                          
                                        <tr class="text-center">
                                          <td rowspan="2" >12</td>
                                          <td rowspan="2">Switches and socket outlet</td>
                                          <td > Switches</td>
                                          <td >2</td>
                                          <td><input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwSwitches" id="EwSwitches"></td>            
                                                    
                                          <td><input type="text" name="EwSwitches" id="EwSwitches"></td>                    
                                          <td><input type="file" name="EwSwitches" id="EwSwitches"></td>                    
                                        </tr>
                          
                                        <tr>
                                          <td >Switches socket outlet</td>
                                          <td >2</td>
                                          <td><input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwSwitchesSocket" id="EwSwitchesSocket"></td>            
                                                    
                                          <td><input type="text" name="EwSwitchesSocket" id="EwSwitchesSocket"></td>                    
                                          <td><input type="file" name="EwSwitchesSocket" id="EwSwitchesSocket"></td>                    
                                        </tr>
                          
                                        <tr class="text-center">
                                          <td rowspan="3" >13</td>
                                          <td rowspan="3">Cables</td>
                                          <td > Low voltage cable</td>
                                          <td >2</td>
                                          <td><input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwCablesLow" id="EwCablesLow"></td>            
                                                    
                                          <td><input type="text" name="EwCablesMedium" id="EwCablesMedium"></td>                    
                                          <td><input type="file" name="EwCablesMedium" id="EwCablesMedium"></td>                    
                                        </tr>
                          
                                        <tr>
                                          <td >Medium voltage cable</td>
                                          <td >2</td>
                                          <td><input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwCablesMedium" id="EwCablesMedium"></td>            
                                                    
                                          <td><input type="text" name="EwCablesMedium" id="EwCablesMedium"></td>                    
                                          <td><input type="file" name="EwCablesMedium" id="EwCablesMedium"></td>                    
                                        </tr>
                          
                                        <tr>
                                          <td >High voltage cable</td>
                                          <td >2</td>
                                          <td>
                                            <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwCablesHigh" id="EwCablesHigh">
                                          </td>            
                                                    
                                          <td><input type="text" name="EwCablesHigh" id="EwCablesHigh"></td>                    
                                          <td><input type="file" name="EwCablesHigh" id="EwCablesHigh"></td>                    
                                        </tr>
                          
                                        <tr class="text-center">
                                          <td rowspan="4" >14</td>
                                          <td rowspan="4">G. S conduit & High Impact PVC conduit/trunking/tray</td>
                                          <td >Rigid high impact PVC conduit</td>
                                          <td >2</td>
                                          <td>
                                            <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwTrayPVC" id="EwTrayPVC">
                                          </td>            
                                                    
                                          <td><input type="text" name="EwTrayPVC" id="EwTrayPVC"></td>                    
                                          <td><input type="file" name="EwTrayPVC" id="EwTrayPVC"></td>                    
                                        </tr>
                            
                                        <tr>
                                          <td >Galvanised steel conduit</td>
                                          <td >2</td>
                                          <td>
                                            <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwTrayGalvanised" id="EwTrayGalvanised">
                                          </td>            
                                                    
                                          <td><input type="text" name="EwTrayGalvanised" id="EwTrayGalvanised"></td>                    
                                          <td><input type="file" name="EwTrayGalvanised" id="EwTrayGalvanised"></td>                    
                                        </tr>
                            
                                        <tr>
                                          <td >Trunking</td>
                                          <td >2</td>
                                          <td>
                                            <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwTrayTrunking" id="EwTrayTrunking">
                                          </td>            
                                                     
                                          <td><input type="text" name="EwTrayTrunking" id="EwTrayTrunking"></td>                    
                                          <td><input type="file" name="EwTrayTrunking" id="EwTrayTrunking"></td>                    
                                        </tr>
                            
                                        <tr>
                                          <td >Cable tray</td>
                                          <td >2</td>
                                          <td>
                                            <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwTrayCableTray" id="EwTrayCableTray">
                                          </td>            
                                                   
                                          <td><input type="text" name="EwTrayCableTray" id="EwTrayCableTray"></td>                    
                                          <td><input type="file" name="EwTrayCableTray" id="EwTrayCableTray"></td>                    
                                        </tr>
                              
                                          <tr class="text-center">
                                            <td rowspan="3" >15</td>
                                            <td rowspan="3">Fan</td>
                                            <td >Ceiling fan</td>
                                            <td >2</td>
                                            <td>
                                              <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwFanCeiling" id="EwFanCeiling">
                                            </td>            
                                                       
                                            <td><input type="text" name="EwFanCeiling" id="EwFanCeiling"></td>                    
                                            <td><input type="file" name="EwFanCeiling" id="EwFanCeiling"></td>                    
                                          </tr>
                            
                                          <tr>
                                            <td >Wall fan</td>
                                            <td >2</td>
                                            <td>
                                              <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwFanWall" id="EwFanWall">
                                            </td>            
                                                     
                                            <td><input type="text" name="EwFanWall" id="EwFanWall"></td>                    
                                            <td><input type="file" name="EwFanWall" id="EwFanWall"></td>                    
                                          </tr>
                            
                                          <tr>
                                            <td >Oscillating fan</td>
                                            <td >2</td>
                                            <td>
                                              <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwFanOscillating" id="EwFanOscillating">
                                            </td>            
                                                      
                                            <td><input type="text" name="EwFanOscillating" id="EwFanOscillating"></td>                    
                                            <td><input type="file" name="EwFanOscillating" id="EwFanOscillating"></td>                    
                                          </tr>
                            
                                          <tr class="text-center">
                                            <td rowspan="2" >16</td>
                                            <td rowspan="2">Power factor correction</td>
                                            <td >Capacitor for power factor correction</td>
                                            <td >2</td>
                                            <td>
                                              <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwPowerCapasitor" id="EwPowerCapasitor">
                                            </td>            
                                                       
                                            <td><input type="text" name="EwPowerCapasitor" id="EwPowerCapasitor"></td>                    
                                            <td><input type="file" name="EwPowerCapasitor" id="EwPowerCapasitor"></td>                    
                                          </tr>
                            
                                          <tr>
                                            <td >Power factor regulator</td>
                                            <td >2</td>
                                            <td>
                                              <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwPowerRegulator" id="EwPowerRegulator">
                                            </td>            
                                                   
                                            <td><input type="text" name="EwPowerRegulator" id="EwPowerRegulator"></td>                    
                                            <td><input type="file" name="EwPowerRegulator" id="EwPowerRegulator"></td>                    
                                          </tr>
                            
                                          <tr class="text-center">
                                            <td rowspan="2" >17</td>
                                            <td rowspan="2">Emergency light & luminous sign</td>
                                            <td >'KELUAR' sign LED</td>
                                            <td >2</td>
                                            <td>
                                              <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwEmergencyKeluar" id="EwEmergencyKeluar">
                                            </td>            
                                                      
                                            <td><input type="text" name="EwEmergencyKeluar" id="EwEmergencyKeluar"></td>                    
                                            <td><input type="file" name="EwEmergencyKeluar" id="EwEmergencyKeluar"></td>                    
                                          </tr>
                            
                                          <tr>
                                            <td >Emergency light LED</td>
                                            <td >2</td>
                                            <td>
                                              <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwEmergencyLED" id="EwEmergencyLED">
                                            </td>            
                                                       
                                            <td><input type="text" name="EwEmergencyLED" id="EwEmergencyLED"></td>                    
                                            <td><input type="file" name="EwEmergencyLED" id="EwEmergencyLED"></td>                    
                                          </tr>
                            
                                          <tr class="text-center">
                                            <td rowspan="1" >18</td>
                                            <td rowspan="1">Switchgear</td>
                                            <td >11kV metal enclosed Switchgear - VCB</td>
                                            <td >2</td>
                                            <td><input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwSwithcgearVCB" id="EwSwithcgearVCB"></td>            
                                                      
                                            <td><input type="text" name="EwSwithcgearVCB" id="EwSwithcgearVCB"></td>                    
                                            <td><input type="file" name="EwSwithcgearVCB" id="EwSwithcgearVCB"></td>                    
                                          </tr>
                            
                                          <tr class="text-center">
                                            <td rowspan="4" >19</td>
                                            <td rowspan="4">Renewable energy system</td>
                                            <td >Solar panel</td>
                                            <td >2</td>
                                            <td><input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwRenewableSolar" id="EwRenewableSolar"></td>            
                                                      
                                            <td><input type="text" name="EwRenewableSolar" id="EwRenewableSolar"></td>                    
                                            <td><input type="file" name="EwRenewableSolar" id="EwRenewableSolar"></td>                    
                                          </tr>
                            
                                          <tr>
                                            <td >Battery</td>
                                            <td >2</td>
                                            <td><input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwRenewableBattery" id="EwRenewableBattery"></td>            
                                                      
                                            <td><input type="text" name="EwRenewableBattery" id="EwRenewableBattery"></td>                    
                                            <td><input type="file" name="EwRenewableBattery" id="EwRenewableBattery"></td>                    
                                          </tr>
                            
                                          <tr>
                                            <td >Inverter</td>
                                            <td >2</td>
                                            <td>
                                              <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwRenewableInverter" id="EwRenewableInverter">
                                            </td>            
                                                      
                                            <td><input type="text" name="EwRenewableInverter" id="EwRenewableInverter"></td>                    
                                            <td><input type="file" name="EwRenewableInverter" id="EwRenewableInverter"></td>                    
                                          </tr>
                            
                                          <tr>
                                            <td >Low voltage cable</td>
                                            <td >2</td>
                                            <td>
                                              <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwRenewableLowCable" id="EwRenewableLowCable">
                                            </td>            
                                                       
                                            <td><input type="text" name="EwRenewableLowCable" id="EwRenewableLowCable"></td>                    
                                            <td><input type="file" name="EwRenewableLowCable" id="EwRenewableLowCable"></td>                    
                                          </tr>
                          
                                          <tr style="display: none">
                                            <td><input type="text" name="markahPREw" id="markahPREw" /></td>
                                          </tr>

                                          <thead class="text-white bg-orange-jkr">
            
                                            <tr>
                                              <th colspan="8">List of products for mechanical works</th>
                                            </tr>
                                            <tr>
                                              <th>No.</th>
                                              <th >Component</th>
                                              <th>Product</th>
                                              <th >Point Allocated</th>
                                              <th>Point Requested (design)</th>
                                              {{-- <th>Point Requested (construction)</th>
                                              <th>Point Awarded</th> --}}
                                              <th >Remark</th>
                                              <th >Supporting Documents</th>
                                            </tr>
                                          </thead>

                                          <tr class="text-center">
                                            <td rowspan="5">1</td>
                                            <td rowspan="5">Water cooled chiller system</td>
                                            <td>Compressor <li>Refrigerant</li></td>
                                            <td>2</td>
                                            <td><input onblur="findTotalmarkahPRMw()" type="number" min="0" max="2" class="mekanikal" name="MwWaterSystemCompressor" id="MwWaterSystemCompressor"></td>                        
                                            <td><input type="text" name="MwWaterSystemCompressor" id="MwWaterSystemCompressor"></td>                    
                                            <td><input type="file" name="MwWaterSystemCompressor" id="MwWaterSystemCompressor"></td>                    
                                          </tr>
                                
                                          <tr>
                                            <td >Air side <li>Air handling unit</li></td>
                                            <td >2</td>
                                            <td><input onblur="findTotalmarkahPRMw()" type="number" min="0" max="2" class="mekanikal" name="MwWaterSystemAirSide" id="MwWaterSystemAirSide"></td>            
                                            <td><input type="text" name="MwWaterSystemAirSide" id="MwWaterSystemAirSide"></td>                    
                                            <td><input type="file" name="MwWaterSystemAirSide" id="MwWaterSystemAirSide"></td>                    
                                          </tr>
                                
                                          <tr>
                                            <td>Water side 
                                              <li>Pump</li>
                                            </td>
                                            <td >2</td>
                                            <td><input onblur="findTotalmarkahPRMw()" type="number" min="0" max="2" class="mekanikal" name="MwWaterSystemPump" id="MwWaterSystemPump"></td>                       
                                            <td><input type="text" name="MwWaterSystemPump" id="MwWaterSystemPump"></td>                    
                                            <td><input type="file" name="MwWaterSystemPump" id="MwWaterSystemPump"></td>                    
                                          </tr>
                              
                                          <tr>
                                            <td><li>Cooling tower</li></td>
                                            <td>2</td>
                                            <td><input onblur="findTotalmarkahPRMw()" type="number" min="0" max="2" class="mekanikal" name="MwWaterSystemCoolingTower" id="MwWaterSystemCoolingTower"></td>                       
                                            <td><input type="text" name="MwWaterSystemCoolingTower" id="MwWaterSystemCoolingTower"></td>            
                                            <td><input type="file" name="MwWaterSystemCoolingTower" id="MwWaterSystemCoolingTower"></td>            
                                            
                                          </tr>
                              
                                          <tr>
                                            <td><li>Electronic water descater</li></td>
                                            <td>2</td>
                                            <td><input onblur="findTotalmarkahPRMw()" type="number" min="0" max="2" class="mekanikal" name="MwWaterSystemElectronicWater" id="MwWaterSystemElectronicWater"></td>                        
                                            <td><input type="text" name="MwWaterSystemElectronicWater" id="MwWaterSystemElectronicWater"></td>            
                                            <td><input type="file" name="MwWaterSystemElectronicWater" id="MwWaterSystemElectronicWater"></td>            
                                          </tr>
                                
                                          <tr class="text-center">
                                              <td rowspan="3" >2</td>
                                              <td rowspan="3">Multiple air-conditioning system</td>
                                              <td >Compressor <li>Refrigerant</li></td>
                                              <td >2</td>
                                              <td><input onblur="findTotalmarkahPRMw()" type="number" min="0" max="2" class="mekanikal" name="MwACCompressor" id="MwACCompressor"></td>                        
                                              <td><input type="text" name="MwACCompressor" id="MwACCompressor"></td>                    
                                              <td><input type="file" name="MwACCompressor" id="MwACCompressor"></td>                    
                                            </tr>
                                
                                          <tr>
                                            <td >Air side <li>Air handling unit</li></td>
                                            <td >2</td>
                                            <td><input onblur="findTotalmarkahPRMw()" type="number" min="0" max="2" class="mekanikal " name="MwACAirHandling" id="MwACAirHandling"></td>            
                                            <td><input type="text" name="MwACAirHandling" id="MwACAirHandling"></td>                    
                                            <td><input type="file" name="MwACAirHandling" id="MwACAirHandling"></td>                    
                                          </tr>
                              
                                          <tr>
                                            <td><li>Outdoor unit</li></td>
                                            <td>2</td>
                                            <td><input onblur="findTotalmarkahPRMw()" type="number" min="0" max="2" class="mekanikal" name="MwACOutdoorUnit" id="MwACOutdoorUnit"></td>                       
                                            <td><input type="text" name="MwACOutdoorUnit" id="MwACOutdoorUnit"></td>            
                                            <td><input type="file" name="MwACOutdoorUnit" id="MwACOutdoorUnit"></td>            
                                          </tr>
                              
                                        
                              
                                          <tr class="text-center">
                                              <td rowspan="1" >3</td>
                                              <td rowspan="1">Split unit</td>
                                              <td >Compressor <li>Refrigerant</li></td>
                                              <td >2</td>
                                              <td><input onblur="findTotalmarkahPRMw()" type="number" min="0" max="2" class="mekanikal" name="MwSplitCompressor" id="MwSplitCompressor"></td>                       
                                              <td><input type="text" name="MwSplitCompressor" id="MwSplitCompressor"></td>                    
                                              <td><input type="file" name="MwSplitCompressor" id="MwSplitCompressor"></td>                    
                                            </tr>
                              
                                            <tr class="text-center">
                                              <td rowspan="1" >4</td>
                                              <td rowspan="1">Lift</td>
                                              <td >Lift motor</td>
                                              <td >2</td>
                                              <td><input onblur="findTotalmarkahPRMw()" type="number" min="0" max="2" class="mekanikal" name="MwLiftMotor" id="MwLiftMotor"></td>            
                                              <td><input type="text" name="MwLiftMotor" id="MwLiftMotor"></td>                    
                                              <td><input type="file" name="MwLiftMotor" id="MwLiftMotor"></td>                    
                                            </tr>
                              
                                            <tr class="text-center">
                                              <td rowspan="4" >5</td>
                                              <td rowspan="4">Firefighting system</td>
                                              <td >Clean agent <li>Mist</li></td>
                                              <td >2</td>
                                              <td><input onblur="findTotalmarkahPRMw()" type="number" min="0" max="2" class="mekanikal" name="MwFireSystemMist" id="MwFireSystemMist"></td>            
                                              <td><input type="text" name="MwFireSystemMist" id="MwFireSystemMist"></td>                    
                                              <td><input type="file" name="MwFireSystemMist" id="MwFireSystemMist"></td>                    
                                            </tr>
                              
                                            <tr>
                                              <td >Hose reel <li>Pump</li></td>
                                              <td >2</td>
                                              <td><input onblur="findTotalmarkahPRMw()" type="number" min="0" max="2" class="mekanikal" name="MwFireSystemHosePump" id="MwFireSystemHosePump"></td>            
                                              <td><input type="text" name="MwFireSystemHosePump" id="MwFireSystemHosePump"></td>                    
                                              <td><input type="file" name="MwFireSystemHosePump" id="MwFireSystemHosePump"></td>                    
                                            </tr>
                              
                                            <tr>
                                              <td >Sprinkler <li>Pump</li></td>
                                              <td >2</td>
                                              <td>
                                                <input onblur="findTotalmarkahPRMw()" type="number" min="0" max="2" class="mekanikal" name="MwFireSystemSpriklerPump" id="MwFireSystemSpriklerPump">
                                              </td>                       
                                              <td><input type="text" name="MwFireSystemSpriklerPump" id="MwFireSystemSpriklerPump"></td>                    
                                              <td><input type="file" name="MwFireSystemSpriklerPump" id="MwFireSystemSpriklerPump"></td>                    
                                            </tr>
                              
                                            <tr>
                                              <td >Wet or dry riser <li>Pump</li></td>
                                              <td >2</td>
                                              <td>
                                                <input onblur="findTotalmarkahPRMw()" type="number" min="0" max="2" class="mekanikal" name="MwFireSystemWetPump" id="MwFireSystemWetPump">
                                              </td>            
                                              <td><input type="text" name="MwFireSystemWetPump" id="MwFireSystemWetPump"></td>                    
                                              <td><input type="file" name="MwFireSystemWetPump" id="MwFireSystemWetPump"></td>                    
                                            </tr>
                              
                                            <tr class="text-center">
                                              <td rowspan="2" >6</td>
                                              <td rowspan="2">Cold water system</td>
                                              <td >Pump</td>
                                              <td >2</td>
                                              <td>
                                                <input onblur="findTotalmarkahPRMw()" type="number" min="0" max="2" class="mekanikal" name="MwColdSystemPump" id="MwColdSystemPump">
                                              </td>                       
                                              <td><input type="text" name="MwColdSystemPump" id="MwColdSystemPump"></td>                    
                                              <td><input type="file" name="MwColdSystemPump" id="MwColdSystemPump"></td>                    
                                            </tr>
                              
                                            <tr>
                                              <td >Water tank</td>
                                              <td >2</td>
                                              <td>
                                                <input onblur="findTotalmarkahPRMw()" type="number" min="0" max="2" class="mekanikal" name="MwColdSystemWaterTank" id="MwColdSystemWaterTank">
                                              </td>                       
                                              <td><input type="text" name="MwColdSystemWaterTank" id="MwColdSystemWaterTank"></td>                    
                                              <td><input type="file" name="MwColdSystemWaterTank" id="MwColdSystemWaterTank"></td>                    
                                            </tr>
                              
                                            <tr class="text-center">
                                              <td rowspan="1" >7</td>
                                              <td rowspan="1">Innovation</td>
                                              <td >Rain water harvesting</td>
                                              <td >2</td>
                                              <td><input onblur="findTotalmarkahPRMw()" type="number" min="0" max="2" class="mekanikal" name="MwInnovationRainHarvesting" id="MwInnovationRainHarvesting"></td>                        
                                              <td><input type="text" name="MwInnovationRainHarvesting" id="MwInnovationRainHarvesting"></td>                    
                                              <td><input type="file" name="MwInnovationRainHarvesting" id="MwInnovationRainHarvesting"></td>                    
                                            </tr>
                              
                                            <tr style="display: none">
                                              <td><input type="text" name="markahPRMw" id="markahPRMw" /></td>
                                            </tr>
                                  
                                </tbody>
                                </form>
                              </table>

                              <div align="center" class="mt-3">
                                <button class="btn btn-primary" type="submit" title="Simpan">Simpan</button>
                                <button class="btn btn-primary" type="submit" title="Simpan">Sah</button>
                                <button class="btn btn-primary" type="submit" title="Simpan">Jana Keputusan</button>
                                <button class="btn btn-primary" type="submit" title="Simpan">Jana Sijil</button>
                                {{-- <a href="/penilaian_reka_bentuk_jalan/isi_skor_kad_page2" type="button" class="btn btn-primary">Seterusnya</a>           --}}
                              </div>
                      
                              {{-- <div align="right" class="mt-3">
                                <button class="btn btn-primary" type="submit" title="Simpan">Simpan</button>
                                <a href="/penilaian_reka_bentuk_gpss/skor_penilaian_arkitek_page2/create" type="button" class="btn btn-secondary">Seterusnya</a>          
                              </div> --}}
                      
                            </div>
                      
                      </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection