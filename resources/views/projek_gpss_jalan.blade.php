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
                        <h5 class="h6" style="font-weight: 700;">Projek GPSS Jalan DASH</h5>
                    </div>

                    <div class="col-4 mb-2">
                        <h5 class="h6">Alamat Projek:</h5>
                    </div>
                    <div class="col-8 mb-2">
                        <h5 class="h6" style="font-weight: 700;">Damansara Mutiara</h5>
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

<div class="row mb-3">
    <div class="col">
        <div class="card">
            <div class="card-body">
                <div class="col mb-">
                    <h2 class="h2 mb-3">BORANG PENILAIAN GPSS JALAN</h2>
                </div>

                <div class="col">
                    <div class="row mb-3">
                        <div class="col">
                            <nav style="--falcon-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%23748194'/%3E%3C/svg%3E&#34;);"
                                aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item text-dark-green-jkr" style="font-weight: 700" aria-current="page">
                                        Electrical Works (Ew)
                                    </li>
                                </ol>
                            </nav>
                        </div>
                      </div>
                      
                      <div class="row3 mx-1  text-center">
                        <form action= "/penilaian_reka_bentuk_gpss/simpan_skor_penilaian_elektrikal/{id}" method="post" enctype="multipart/form-data">
                          @method('POST')
                            @csrf
                      
                            <div class="col">
                              <table class="table table-bordered line-table text-center" style="width: 100%">
                                <thead class="text-white bg-orange-jkr">
                                  
                                  <tr>
                                    <th colspan="8">List of products for electrical works (EW)</th>
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
                                <tbody>
                                  
                                  <tr class="text-center">
                                    <td rowspan="1" >1</td>
                                    <td rowspan="1">Generator set</td>
                                    <td >Generator set</td>
                                    <td >2</td>
                                    <td>
                                      <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwGeneratorSet" id="EwGeneratorSet">
                                    </td>                       
                                    <td><input type="text"></td>                    
                                    <td><input type="file"></td>                    
                                  </tr>
                        
                                  
                        
                        
                                  <tr class="text-center">
                                      <td rowspan="1" >2</td>
                                      <td rowspan="1">Transformer</td>
                                      <td >11kV dry type distribution transformer</td>
                                      <td >2</td>
                                      <td>
                                        <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwTransformer" id="EwTransformer">
                                      </td>            
                                               
                                      <td><input type="text"></td>                    
                                      <td><input type="file"></td>                    
                                    </tr>
                      
                                    <tr class="text-center">
                                      <td rowspan="1" >3</td>
                                      <td rowspan="1">Surge Protective Device (PSD)</td>
                                      <td >Surge Protective Device (PSD)</td>
                                      <td >2</td>
                                      <td>
                                        <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwSPD" id="EwSPD">
                                      </td>            
                                                
                                      <td><input type="text"></td>                    
                                      <td><input type="file"></td>                    
                                    </tr>
                      
                                    <tr class="text-center">
                                      <td rowspan="4" >5</td>
                                      <td rowspan="4">Protection relays</td>
                                      <td >Combined overcurrent and earth fault relay</td>
                                      <td >2</td>
                                      <td>
                                        <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwRelayCombined" id="EwRelayCombined">
                                      </td>            
                                               
                                      <td><input type="text"></td>                    
                                      <td><input type="file"></td>                    
                                    </tr>
                      
                                    <tr>
                                      <td >Overcurrent relay</td>
                                      <td >2</td>
                                      <td>
                                        <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwRelayOvercurrent" id="EwRelayOvercurrent">
                                      </td>            
                                                
                                      <td><input type="text"></td>                    
                                      <td><input type="file"></td>                    
                                    </tr>
                      
                                    <tr>
                                      <td >Earth fault relay</td>
                                      <td >2</td>
                                      <td>
                                        <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwRelayEarthFault" id="EwRelayEarthFault">
                                      </td>            
                                               
                                      <td><input type="text"></td>                    
                                      <td><input type="file"></td>                    
                                    </tr>
                      
                                    <tr>
                                      <td >Earth fault leakage</td>
                                      <td >2</td>
                                      <td>
                                        <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwRelayEarthLeakage" id="EwRelayEarthLeakage">
                                      </td>            
                                              
                                      <td><input type="text"></td>                    
                                      <td><input type="file"></td>                    
                                    </tr>
                      
                                    <tr class="text-center">
                                      <td rowspan="3" >5</td>
                                      <td rowspan="3">Circuit breaker</td>
                                      <td >Air Circuit Breaker(ACB)</td>
                                      <td >2</td>
                                      <td>
                                        <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwCircuitACB" id="EwCircuitACB">
                                      </td>            
                                             
                                      <td><input type="text"></td>                    
                                      <td><input type="file"></td>                    
                                    </tr>
                      
                                    <tr>
                                      <td >Moulded Case Circuit Breaker(MCCB)</td>
                                      <td >2</td>
                                      <td>
                                        <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwCircuitMCCB" id="EwCircuitMCCB">
                                      </td>            
                                             
                                      <td><input type="text"></td>                    
                                      <td><input type="file"></td>                    
                                    </tr>
                      
                                    <tr>
                                      <td >Miniature Circuit Breaker(MCB)</td>
                                      <td >2</td>
                                      <td>
                                        <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwCircuitMCB" id="EwCircuitMCB">
                                      </td>            
                                                
                                      <td><input type="text"></td>                    
                                      <td><input type="file"></td>                    
                                    </tr>
                      
                                    <tr class="text-center">
                                      <td rowspan="1" >6</td>
                                      <td rowspan="1">Residual current devices</td>
                                      <td >Residual Current Operated Circuit Breaker with Integral o/c protection(RCBO)</td>
                                      <td >2</td>
                                      <td><input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwResidualRCBO" id="EwResidualRCBO"></td>            
                                                
                                      <td><input type="text"></td>                    
                                      <td><input type="file"></td>                    
                                    </tr>
                      
                                    <tr class="text-center">
                                      <td rowspan="5" >7</td>
                                      <td rowspan="5">Switchboard</td>
                                      <td >Metal enclosure</td>
                                      <td >2</td>
                                      <td><input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwResidualRCBO" id="EwResidualRCBO"></td>            
                                               
                                      <td><input type="text"></td>                    
                                      <td><input type="file"></td>                    
                                    </tr>
                      
                                    <tr>
                                      <td >Busbar support</td>
                                      <td >2</td>
                                      <td><input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwSwitchboardBusbar" id="EwSwitchboardBusbar"></td>            
                                                
                                      <td><input type="text"></td>                    
                                      <td><input type="file"></td>                    
                                    </tr>
                      
                                    <tr>
                                      <td >Cables</td>
                                      <td >2</td>
                                      <td>
                                        <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwSwitchboardCables" id="EwSwitchboardCables">
                                      </td>            
                                                
                                      <td><input type="text"></td>                    
                                      <td><input type="file"></td>                    
                                    </tr>
                      
                                    <tr>
                                      <td >Busbar</td>
                                      <td >2</td>
                                      <td>
                                        <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwSwitchboardCables" id="EwSwitchboardCables">
                                      </td>            
                                              
                                      <td><input type="text"></td>                    
                                      <td><input type="file"></td>                    
                                    </tr>
                      
                                    <tr>
                                      <td >Consumer unit</td>
                                      <td >2</td>
                                      <td>
                                        <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwSwitchboardConsumer" id="EwSwitchboardConsumer">
                                      </td>            
                                             
                                      <td><input type="text"></td>                    
                                      <td><input type="file"></td>                    
                                    </tr>
                      
                                    <tr class="text-center">
                                      <td rowspan="4" >8</td>
                                      <td rowspan="4">Lamp</td>
                                      <td >Compact fluorescent lamp(CFL)</td>
                                      <td >2</td>
                                      <td><input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwLampCFL" id="EwLampCFL"></td>            
                                               
                                      <td><input type="text"></td>                    
                                      <td><input type="file"></td>                    
                                    </tr>
                      
                                    <tr>
                                      <td >Fluorescent lamp(T5)</td>
                                      <td >2</td>
                                      <td><input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwLampT5" id="EwLampT5"></td>            
                                               
                                      <td><input type="text"></td>                    
                                      <td><input type="file"></td>                    
                                    </tr>
                      
                                    <tr>
                                      <td >LED tubes</td>
                                      <td >2</td>
                                      <td>
                                        <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwLampLEDTube" id="EwLampLEDTube">
                                      </td>            
                                                
                                      <td><input type="text"></td>                    
                                      <td><input type="file"></td>                    
                                    </tr>
                      
                                    <tr>
                                      <td >LED bulb</td>
                                      <td >2</td>
                                      <td>
                                        <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwLampLEDBulb" id="EwLampLEDBulb">
                                      </td>            
                                                
                                      <td><input type="text"></td>                    
                                      <td><input type="file"></td>                    
                                    </tr>
                      
                                    <tr class="text-center">
                                      <td rowspan="6" >9</td>
                                      <td rowspan="6">Indoor luminaires</td>
                                      <td >LED downlight</td>
                                      <td >2</td>
                                      <td><input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwIndoorLEDDownlight" id="EwIndoorLEDDownlight"></td>            
                                                  
                                      <td><input type="text"></td>                    
                                      <td><input type="file"></td>                    
                                    </tr>
                      
                                    <tr>
                                      <td >LED recessed luminaires</td>
                                      <td >2</td>
                                      <td><input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwIndoorLEDRecessed" id="EwIndoorLEDRecessed"></td>            
                                                
                                      <td><input type="text"></td>                    
                                      <td><input type="file"></td>                    
                                    </tr>
                      
                                    <tr>
                                      <td >Fluorescent luminaires(T5)</td>
                                      <td >2</td>
                                      <td>
                                        <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwIndoorT5" id="EwIndoorT5">
                                      </td>            
                                                
                                      <td><input type="text"></td>                    
                                      <td><input type="file"></td>                    
                                    </tr>
                      
                                    <tr>
                                      <td >Fluorescent luminaires(T8) c/w electronic ballast</td>
                                      <td >2</td>
                                      <td>
                                        <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwIndoorT8" id="EwIndoorT8">
                                      </td>            
                                                
                                      <td><input type="text"></td>                    
                                      <td><input type="file"></td>                    
                                    </tr>
                      
                                    <tr>
                                      <td >Electronic ballast</td>
                                      <td >2</td>
                                      <td>
                                        <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwIndoorBallast" id="EwIndoorBallast">
                                      </td>            
                                                
                                      <td><input type="text"></td>                    
                                      <td><input type="file"></td>                    
                                    </tr>
                      
                                    <tr>
                                      <td >LED driver</td>
                                      <td >2</td>
                                      <td>
                                        <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwIndoorLEDDriver" id="EwIndoorLEDDriver">
                                      </td>            
                                                
                                      <td><input type="text"></td>                    
                                      <td><input type="file"></td>                    
                                    </tr>
                      
                                    <tr class="text-center">
                                      <td rowspan="5" >10</td>
                                      <td rowspan="5">Outdoor luminaires</td>
                                      <td >Road lighting luminaires(HPSV)</td>
                                      <td >2</td>
                                      <td><input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwOutdoorHPSV" id="EwOutdoorHPSV"></td>            
                                                 
                                      <td><input type="text"></td>                    
                                      <td><input type="file"></td>                    
                                    </tr>
                      
                                    <tr>
                                      <td >Road lighting luminaires(Induction)</td>
                                      <td >2</td>
                                      <td><input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwOutdoorInduction" id="EwOutdoorInduction"></td>            
                                                
                                      <td><input type="text"></td>                    
                                      <td><input type="file"></td>                    
                                    </tr>
                      
                                    <tr>
                                      <td >Road lighting luminaires(LED)</td>
                                      <td >2</td>
                                      <td>
                                        <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwOutdoorLED" id="EwOutdoorLED">
                                      </td>            
                                   
                                      <td><input type="text"></td>                    
                                      <td><input type="file"></td>                    
                                    </tr>
                      
                                    <tr>
                                      <td >Ballast for discharge lamp</td>
                                      <td >2</td>
                                      <td>
                                        <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwOutdoorBallast" id="EwOutdoorBallast">
                                      </td>            
                                               
                                      <td><input type="text"></td>                    
                                      <td><input type="file"></td>                    
                                    </tr>
                      
                                    <tr>
                                      <td >Lighting columns</td>
                                      <td >2</td>
                                      <td>
                                        <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwOutdoorLighting" id="EwOutdoorLighting">
                                      </td>            
                                                
                                      <td><input type="text"></td>                    
                                      <td><input type="file"></td>                    
                                    </tr>
                      
                                    <tr class="text-center">
                                      <td rowspan="3" >11</td>
                                      <td rowspan="3">Traffic light</td>
                                      <td > Controller</td>
                                      <td >2</td>
                                      <td><input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwTrafficController" id="EwTrafficController"></td>            
                                               
                                      <td><input type="text"></td>                    
                                      <td><input type="file"></td>                    
                                    </tr>
                      
                                    <tr>
                                      <td >Traffic signal module</td>
                                      <td >2</td>
                                      <td><input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwTrafficSignal" id="EwTrafficSignal"></td>            
                                              
                                      <td><input type="text"></td>                    
                                      <td><input type="file"></td>                    
                                    </tr>
                      
                                    <tr>
                                      <td >Lighting columns</td>
                                      <td >2</td>
                                      <td>
                                        <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwTrafficLighting" id="EwTrafficLighting">
                                      </td>            
                                                
                                      <td><input type="text"></td>                    
                                      <td><input type="file"></td>                    
                                    </tr>
                      
                                    <tr class="text-center">
                                      <td rowspan="2" >12</td>
                                      <td rowspan="2">Switches and socket outlet</td>
                                      <td > Switches</td>
                                      <td >2</td>
                                      <td><input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwSwitches" id="EwSwitches"></td>            
                                                
                                      <td><input type="text"></td>                    
                                      <td><input type="file"></td>                    
                                    </tr>
                      
                                    <tr>
                                      <td >Switches socket outlet</td>
                                      <td >2</td>
                                      <td><input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwSwitchesSocket" id="EwSwitchesSocket"></td>            
                                                
                                      <td><input type="text"></td>                    
                                      <td><input type="file"></td>                    
                                    </tr>
                      
                                    <tr class="text-center">
                                      <td rowspan="3" >13</td>
                                      <td rowspan="3">Cables</td>
                                      <td > Low voltage cable</td>
                                      <td >2</td>
                                      <td><input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwCablesLow" id="EwCablesLow"></td>            
                                                
                                      <td><input type="text"></td>                    
                                      <td><input type="file"></td>                    
                                    </tr>
                      
                                    <tr>
                                      <td >Medium voltage cable</td>
                                      <td >2</td>
                                      <td><input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwCablesMedium" id="EwCablesMedium"></td>            
                                                
                                      <td><input type="text"></td>                    
                                      <td><input type="file"></td>                    
                                    </tr>
                      
                                    <tr>
                                      <td >High voltage cable</td>
                                      <td >2</td>
                                      <td>
                                        <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwCablesHigh" id="EwCablesHigh">
                                      </td>            
                                                
                                      <td><input type="text"></td>                    
                                      <td><input type="file"></td>                    
                                    </tr>
                      
                                    <tr class="text-center">
                                      <td rowspan="4" >14</td>
                                      <td rowspan="4">G. S conduit & High Impact PVC conduit/trunking/tray</td>
                                      <td >Rigid high impact PVC conduit</td>
                                      <td >2</td>
                                      <td>
                                        <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwTrayPVC" id="EwTrayPVC">
                                      </td>            
                                                
                                      <td><input type="text"></td>                    
                                      <td><input type="file"></td>                    
                                    </tr>
                        
                                    <tr>
                                      <td >Galvanised steel conduit</td>
                                      <td >2</td>
                                      <td>
                                        <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwTrayGalvanised" id="EwTrayGalvanised">
                                      </td>            
                                                
                                      <td><input type="text"></td>                    
                                      <td><input type="file"></td>                    
                                    </tr>
                        
                                    <tr>
                                      <td >Trunking</td>
                                      <td >2</td>
                                      <td>
                                        <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwTrayTrunking" id="EwTrayTrunking">
                                      </td>            
                                                 
                                      <td><input type="text"></td>                    
                                      <td><input type="file"></td>                    
                                    </tr>
                        
                                    <tr>
                                      <td >Cable tray</td>
                                      <td >2</td>
                                      <td>
                                        <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwTrayCableTray" id="EwTrayCableTray">
                                      </td>            
                                               
                                      <td><input type="text"></td>                    
                                      <td><input type="file"></td>                    
                                    </tr>
                          
                                      <tr class="text-center">
                                        <td rowspan="3" >15</td>
                                        <td rowspan="3">Fan</td>
                                        <td >Ceiling fan</td>
                                        <td >2</td>
                                        <td>
                                          <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwFanCeiling" id="EwFanCeiling">
                                        </td>            
                                                   
                                        <td><input type="text"></td>                    
                                        <td><input type="file"></td>                    
                                      </tr>
                        
                                      <tr>
                                        <td >Wall fan</td>
                                        <td >2</td>
                                        <td>
                                          <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwFanWall" id="EwFanWall">
                                        </td>            
                                                 
                                        <td><input type="text"></td>                    
                                        <td><input type="file"></td>                    
                                      </tr>
                        
                                      <tr>
                                        <td >Oscillating fan</td>
                                        <td >2</td>
                                        <td>
                                          <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwFanOscillating" id="EwFanOscillating">
                                        </td>            
                                                  
                                        <td><input type="text"></td>                    
                                        <td><input type="file"></td>                    
                                      </tr>
                        
                                      <tr class="text-center">
                                        <td rowspan="2" >16</td>
                                        <td rowspan="2">Power factor correction</td>
                                        <td >Capacitor for power factor correction</td>
                                        <td >2</td>
                                        <td>
                                          <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwPowerCapasitor" id="EwPowerCapasitor">
                                        </td>            
                                                   
                                        <td><input type="text"></td>                    
                                        <td><input type="file"></td>                    
                                      </tr>
                        
                                      <tr>
                                        <td >Power factor regulator</td>
                                        <td >2</td>
                                        <td>
                                          <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwPowerRegulator" id="EwPowerRegulator">
                                        </td>            
                                               
                                        <td><input type="text"></td>                    
                                        <td><input type="file"></td>                    
                                      </tr>
                        
                                      <tr class="text-center">
                                        <td rowspan="2" >17</td>
                                        <td rowspan="2">Emergency light & luminous sign</td>
                                        <td >'KELUAR' sign LED</td>
                                        <td >2</td>
                                        <td>
                                          <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwEmergencyKeluar" id="EwEmergencyKeluar">
                                        </td>            
                                                  
                                        <td><input type="text"></td>                    
                                        <td><input type="file"></td>                    
                                      </tr>
                        
                                      <tr>
                                        <td >Emergency light LED</td>
                                        <td >2</td>
                                        <td>
                                          <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwEmergencyLED" id="EwEmergencyLED">
                                        </td>            
                                                   
                                        <td><input type="text"></td>                    
                                        <td><input type="file"></td>                    
                                      </tr>
                        
                                      <tr class="text-center">
                                        <td rowspan="1" >18</td>
                                        <td rowspan="1">Switchgear</td>
                                        <td >11kV metal enclosed Switchgear - VCB</td>
                                        <td >2</td>
                                        <td><input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwSwithcgearVCB" id="EwSwithcgearVCB"></td>            
                                                  
                                        <td><input type="text"></td>                    
                                        <td><input type="file"></td>                    
                                      </tr>
                        
                                      <tr class="text-center">
                                        <td rowspan="4" >19</td>
                                        <td rowspan="4">Renewable energy system</td>
                                        <td >Solar panel</td>
                                        <td >2</td>
                                        <td><input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwRenewableSolar" id="EwRenewableSolar"></td>            
                                                  
                                        <td><input type="text"></td>                    
                                        <td><input type="file"></td>                    
                                      </tr>
                        
                                      <tr>
                                        <td >Battery</td>
                                        <td >2</td>
                                        <td><input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwRenewableBattery" id="EwRenewableBattery"></td>            
                                                  
                                        <td><input type="text"></td>                    
                                        <td><input type="file"></td>                    
                                      </tr>
                        
                                      <tr>
                                        <td >Inverter</td>
                                        <td >2</td>
                                        <td>
                                          <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwRenewableInverter" id="EwRenewableInverter">
                                        </td>            
                                                  
                                        <td><input type="text"></td>                    
                                        <td><input type="file"></td>                    
                                      </tr>
                        
                                      <tr>
                                        <td >Low voltage cable</td>
                                        <td >2</td>
                                        <td>
                                          <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwRenewableLowCable" id="EwRenewableLowCable">
                                        </td>            
                                                   
                                        <td><input type="text"></td>                    
                                        <td><input type="file"></td>                    
                                      </tr>
                      
                                      <tr style="display: none">
                                        <td><input type="text" name="markahPREw" id="markahPREw" /></td>
                                      </tr>


                                      <thead class="text-white bg-orange-jkr">
                                        <tr>          
                                          <th colspan="8">Green Product Scoring Sheet</th>
                                        </tr>
                                        <tr>
                                          <th colspan="8">List of products for road structure works(SW)</th>
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

                                      {{-- sambungan --}}
                                      <tr class="text-center">
                                        <td rowspan="6" >1</td>
                                        <td rowspan="6">Road structure (bridge)</td>
                                        <td >Abutment</td>
                                        <td >2</td>
                                        <td><input onblur="findTotal()" type="number" min="0" max="2" min="0" max="2" class="arkitek" name="STwBridgeAbutment" id="STwBridgeAbutment"></td>            
                                        <td><input type="text" name="Remark_STwBridgeAbutment" id="Remark_STwBridgeAbutment"></td>                    
                                        <td><input type="file" name="Remark_STwBridgeAbutment" id="Remark_STwBridgeAbutment"></td>                    
                                      </tr>
                            
                                      <tr>
                                        <td >Pier</td>
                                        <td >2</td>
                                        <td><input onblur="findTotal()" type="number" min="0" max="2" min="0" max="2" class="arkitek" name="STwStructureBridgePier" id="STwStructureBridgePier"></td>            
                                        <td><input type="text" name="Remark_STwStructureBridgePier" id="Remark_STwStructureBridgePier"></td>                    
                                        <td><input type="file" name="Remark_STwStructureBridgePier" id="Remark_STwStructureBridgePier"></td>                    
                                      </tr>
                            
                                      <tr>
                                        
                                        <td >Bearing pad</td>
                                        <td >2</td>
                                        <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="STwStructureBridgeBearing" id="STwStructureBridgeBearing"></td>            
                                        <td><input type="text" name="Remark_STwStructureBridgeBearing" id="Remark_STwStructureBridgeBearing"></td>                    
                                        <td><input type="file" name="Remark_STwStructureBridgeBearing" id="Remark_STwStructureBridgeBearing"></td>                    
                                      </tr>
                            
                                      <tr>
                                        <td >Decking</td>
                                        <td >2</td>
                                        <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="STwStructureBridgeDecking" id="STwStructureBridgeDecking"></td>            
                                        <td><input type="text" name="Remark_STwStructureBridgeDecking" id="Remark_STwStructureBridgeDecking"></td>                    
                                        <td><input type="file" name="Remark_STwStructureBridgeDecking" id="Remark_STwStructureBridgeDecking"></td>                    
                                      </tr>
                          
                                      <tr>
                                        <td >Expansion joint</td>
                                        <td >2</td>
                                        <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="STwStructureBridgeExpansion" id="STwStructureBridgeExpansion"></td>            
                                        <td><input type="text" name="Remark_STwStructureBridgeExpansion" id="Remark_STwStructureBridgeExpansion"></td>                    
                                        <td><input type="file" name="Remark_STwStructureBridgeExpansion" id="Remark_STwStructureBridgeExpansion"></td>                    
                                      </tr>
                          
                                      <tr>
                                        <td >Parapet wall</td>
                                        <td >2</td>
                                        <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="STwStructureBridgeParapet" id="STwStructureBridgeParapet"></td>            
                                        <td><input type="text" name="Remark_STwStructureBridgeParapet" id="Remark_STwStructureBridgeParapet"></td>                    
                                        <td><input type="file" name="Remark_STwStructureBridgeParapet" id="Remark_STwStructureBridgeParapet"></td>                    
                                      </tr>
                          
                           
                          
                                      {{-- dye tak show --}}
                                      <tr style="display: none">
                                        <td>markahPRAwRoof<input type="text" name="markahPRAwRoof" id="markahPRAwRoof" /></td>            
                                      </tr>
                          
                                      <tr style="display: none">
                                        <td>markahPRAwRoofConstruction<input type="text" name="Cons_markahPRAwRoof" id="Cons_markahPRAwRoof" /></td>            
                                      </tr>
                          
                                      <tr style="display: none">
                                        <td>markahPRAwRoofAwarded<input type="text" name="Awarded_markahPRAwRoof" id="Awarded_markahPRAwRoof" /></td>            
                                      </tr>

                                      <thead class="text-white bg-orange-jkr">
                                        <tr>          
                                          <th colspan="8">Green Product Scoring Sheet</th>
                                        </tr>
                                        <tr>
                                          <th colspan="8">List of products for road structure works(RW)</th>
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

                                      {{-- sambungan jalan --}}
                                      <tr class="text-center">
                                        <td rowspan="6" >1</td>
                                        <td rowspan="6">Common items</td>
                                        <td >Cement</td>
                                        <td >2</td>
                                        <td><input onblur="findTotal()" type="number" min="0" max="2" min="0" max="2" class="arkitek" name="RwCommonCement" id="RwCommonCement"></td>            
                                        <td><input type="text" name="Remark_RwCommonCement" id="Remark_RwCommonCement"></td>                    
                                        <td><input type="file" name="Remark_RwCommonCement" id="Remark_RwCommonCement"></td>                    
                                      </tr>
                            
                                      <tr>
                                        <td >Formwork</td>
                                        <td >2</td>
                                        <td><input onblur="findTotal()" type="number" min="0" max="2" min="0" max="2" class="arkitek" name="RwCommonFormwork" id="RwCommonFormwork"></td>            
                                        <td><input type="text" name="Remark_RwCommonFormwork" id="Remark_RwCommonFormwork"></td>                    
                                        <td><input type="file" name="Remark_RwCommonFormwork" id="Remark_RwCommonFormwork"></td>                    
                                      </tr>
                            
                                      <tr>
                                        
                                        <td >Steel fabric</td>
                                        <td >2</td>
                                        <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="RwCommonSteel" id="RwCommonSteel"></td>            
                                        <td><input type="text" name="Remark_RwCommonSteel" id="Remark_RwCommonSteel"></td>                    
                                        <td><input type="file" name="Remark_RwCommonSteel" id="Remark_RwCommonSteel"></td>                    
                                      </tr>
                            
                                      <tr>
                                        <td >Piles</td>
                                        <td >2</td>
                                        <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="RwCommonPiles" id="RwCommonPiles"></td>            
                                        <td><input type="text" name="Remark_RwCommonPiles" id="Remark_RwCommonPiles"></td>                    
                                        <td><input type="file" name="Remark_RwCommonPiles" id="Remark_RwCommonPiles"></td>                    
                                      </tr>
                          
                                      <tr>
                                        <td >Steel reinforcement bar</td>
                                        <td >2</td>
                                        <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="RwCommonSteelBar" id="RwCommonSteelBar"></td>            
                                        <td><input type="text" name="Remark_RwCommonSteelBar" id="Remark_RwCommonSteelBar"></td>                    
                                        <td><input type="file" name="Remark_RwCommonSteelBar" id="Remark_RwCommonSteelBar"></td>                    
                                      </tr>
                          
                                      <tr>
                                        <td >Silicone sealant</td>
                                        <td >2</td>
                                        <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="RwCommonSilicone" id="RwCommonSilicone"></td>            
                                        <td><input type="text" name="Remark_RwCommonSilicone" id="Remark_RwCommonSilicone"></td>                    
                                        <td><input type="file" name="Remark_RwCommonSilicone" id="Remark_RwCommonSilicone"></td>                    
                                      </tr>
                          
                                      <tr class="text-center">
                                        <td rowspan="6" >2</td>
                                        <td rowspan="6">Slope protection/geotechnical works</td>
                                        <td >Geotextile</td>
                                        <td >2</td>
                                        <td><input onblur="findTotal()" type="number" min="0" max="2" min="0" max="2" class="arkitek" name="RwSlopeGeotextile" id="RwSlopeGeotextile"></td>            
                                        <td><input type="text" name="Remark_RwSlopeGeotextile" id="Remark_RwSlopeGeotextile"></td>                    
                                        <td><input type="file" name="Remark_RwSlopeGeotextile" id="Remark_RwSlopeGeotextile"></td>                    
                                      </tr>
                            
                                      <tr>
                                        <td >Geogrid</td>
                                        <td >2</td>
                                        <td><input onblur="findTotal()" type="number" min="0" max="2" min="0" max="2" class="arkitek" name="RwSlopeGeogrid" id="RwSlopeGeogrid"></td>            
                                        <td><input type="text" name="Remark_RwSlopeGeogrid" id="Remark_RwSlopeGeogrid"></td>                    
                                        <td><input type="file" name="Remark_RwSlopeGeogrid" id="Remark_RwSlopeGeogrid"></td>                    
                                      </tr>
                            
                                      <tr>
                                        
                                        <td >Prefabricated vertical</td>
                                        <td >2</td>
                                        <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="RwSlopePrefabricated" id="RwSlopePrefabricated"></td>            
                                        <td><input type="text" name="Remark_RwSlopePrefabricated" id="Remark_RwSlopePrefabricated"></td>                    
                                        <td><input type="file" name="Remark_RwSlopePrefabricated" id="Remark_RwSlopePrefabricated"></td>                    
                                      </tr>
                            
                                      <tr>
                                        <td >Blanket</td>
                                        <td >2</td>
                                        <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="RwSlopeBlanket" id="RwSlopeBlanket"></td>            
                                        <td><input type="text" name="Remark_RwSlopeBlanket" id="Remark_RwSlopeBlanket"></td>                    
                                        <td><input type="file" name="Remark_RwSlopeBlanket" id="Remark_RwSlopeBlanket"></td>                    
                                      </tr>
                          
                                      <tr>
                                        <td >Sheeting</td>
                                        <td >2</td>
                                        <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="" id=""></td>            
                                        <td><input type="text" name="" id=""></td>                    
                                        <td><input type="file" name="" id=""></td>                    
                                      </tr>
                          
                                      <tr>
                                        <td >Fibro mat</td>
                                        <td >2</td>
                                        <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="RwSlopeFibroMat" id="RwSlopeFibroMat"></td>            
                                        <td><input type="text" name="Remark_RwSlopeFibroMat" id="Remark_RwSlopeFibroMat"></td>                    
                                        <td><input type="file" name="Remark_RwSlopeFibroMat" id="Remark_RwSlopeFibroMat"></td>                    
                                      </tr>
                          
                                      <tr class="text-center">
                                        <td rowspan="9" >3</td>
                                        <td rowspan="9">Drainage works</td>
                                        <td >Precast reinforced</td>
                                        <td >2</td>
                                        <td><input onblur="findTotal()" type="number" min="0" max="2" min="0" max="2" class="arkitek" name="RwDrainagePrecast" id="RwDrainagePrecast"></td>            
                                        <td><input type="text" name="Remark_RwDrainagePrecast" id="Remark_RwDrainagePrecast"></td>                    
                                        <td><input type="file" name="Remark_RwDrainagePrecast" id="Remark_RwDrainagePrecast"></td>                    
                                      </tr>
                            
                                      <tr>
                                        <td >Pipes</td>
                                        <td >2</td>
                                        <td><input onblur="findTotal()" type="number" min="0" max="2" min="0" max="2" class="arkitek" name="RwDrainagePipes" id="RwDrainagePipes"></td>            
                                        <td><input type="text" name="Remark_RwDrainagePipes" id="Remark_RwDrainagePipes"></td>                    
                                        <td><input type="file" name="Remark_RwDrainagePipes" id="Remark_RwDrainagePipes"></td>                    
                                      </tr>
                            
                                      <tr>
                                        
                                        <td >Drains</td>
                                        <td >2</td>
                                        <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="RwDrainageDrains" id="RwDrainageDrains"></td>            
                                        <td><input type="text" name="Remark_RwDrainageDrains" id="Remark_RwDrainageDrains"></td>                    
                                        <td><input type="file" name="Remark_RwDrainageDrains" id="Remark_RwDrainageDrains"></td>                    
                                      </tr>
                            
                                      <tr>
                                        <td >Bricks</td>
                                        <td >2</td>
                                        <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="RwDrainageBricks" id="RwDrainageBricks"></td>            
                                        <td><input type="text" name="Remark_RwDrainageBricks" id="Remark_RwDrainageBricks"></td>                    
                                        <td><input type="file" name="Remark_RwDrainageBricks" id="Remark_RwDrainageBricks"></td>                    
                                      </tr>
                          
                                      <tr>
                                        <td >Precast subsoil drain</td>
                                        <td >2</td>
                                        <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="RwDrainagePrecastDrain" id="RwDrainagePrecastDrain"></td>            
                                        <td><input type="text" name="RwDrainagePrecastDrain" id="RwDrainagePrecastDrain"></td>                    
                                        <td><input type="file" name="RwDrainagePrecastDrain" id="RwDrainagePrecastDrain"></td>                    
                                      </tr>
                          
                                      <tr>
                                        <td >Bricks</td>
                                        <td >2</td>
                                        <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="RwDrainageBricks" id="RwDrainageBricks"></td>            
                                        <td><input type="text" name="Remark_RwDrainageBricks" id="Remark_RwDrainageBricks"></td>                    
                                        <td><input type="file" name="Remark_RwDrainageBricks" id="Remark_RwDrainageBricks"></td>                    
                                      </tr>
                          
                                      <tr>
                                        <td >Gabion cage</td>
                                        <td >2</td>
                                        <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="RwDrainageGabionCage" id="RwDrainageGabionCage"></td>            
                                        <td><input type="text" name="Remark_RwDrainageGabionCage" id="Remark_RwDrainageGabionCage"></td>                    
                                        <td><input type="file" name="Remark_RwDrainageGabionCage" id="Remark_RwDrainageGabionCage"></td>                    
                                      </tr>
                          
                                      <tr>
                                        <td >Grating</td>
                                        <td >2</td>
                                        <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="RwDrainageGrating" id="RwDrainageGrating"></td>            
                                        <td><input type="text" name="RwDrainageGrating" id="RwDrainageGrating"></td>                    
                                        <td><input type="file" name="RwDrainageGrating" id="RwDrainageGrating"></td>                    
                                      </tr>
                          
                                      <tr>
                                        <td >Water stop</td>
                                        <td >2</td>
                                        <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="RwDrainageWaterStop" id="RwDrainageWaterStop"></td>            
                                        <td><input type="text" name="Remark_RwDrainageWaterStop" id="Remark_RwDrainageWaterStop"></td>                    
                                        <td><input type="file" name="Remark_RwDrainageWaterStop" id="Remark_RwDrainageWaterStop"></td>                    
                                      </tr>
                          
                                      <tr class="text-center">
                                        <td rowspan="10" >4</td>
                                        <td rowspan="10">Pavements</td>
                                        <td >Prime coat</td>
                                        <td >2</td>
                                        <td><input onblur="findTotal()" type="number" min="0" max="2" min="0" max="2" class="arkitek" name="RwPavementsPrime" id="RwPavementsPrime"></td>            
                                        <td><input type="text" name="Remark_RwPavementsPrime" id="Remark_RwPavementsPrime"></td>                    
                                        <td><input type="file" name="Remark_RwPavementsPrime" id="Remark_RwPavementsPrime"></td>                    
                                      </tr>
                            
                                      <tr>
                                        <td >Tack coat</td>
                                        <td >2</td>
                                        <td><input onblur="findTotal()" type="number" min="0" max="2" min="0" max="2" class="arkitek" name="RwPavementsTack" id="RwPavementsTack"></td>            
                                        <td><input type="text" name="Remark_RwPavementsTack" id="Remark_RwPavementsTack"></td>                    
                                        <td><input type="file" name="Remark_RwPavementsTack" id="Remark_RwPavementsTack"></td>                    
                                      </tr>
                            
                                      <tr>
                                        
                                        <td >Bitumen</td>
                                        <td >2</td>
                                        <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="RwPavementsBitumen" id="RwPavementsBitumen"></td>            
                                        <td><input type="text" name="Remark_RwPavementsBitumen" id="Remark_RwPavementsBitumen"></td>                    
                                        <td><input type="file" name="Remark_RwPavementsBitumen" id="Remark_RwPavementsBitumen"></td>                    
                                      </tr>
                            
                                      <tr>
                                        <td >Bitumen additives</td>
                                        <td >2</td>
                                        <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="RwPavementsAdditives" id="RwPavementsAdditives"></td>            
                                        <td><input type="text" name="Remark_RwPavementsAdditives" id="Remark_RwPavementsAdditives"></td>                    
                                        <td><input type="file" name="Remark_RwPavementsAdditives" id="Remark_RwPavementsAdditives"></td>                    
                                      </tr>
                          
                                      <tr>
                                        <td >Aggregate</td>
                                        <td >2</td>
                                        <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="RwPavementsAggregate" id="RwPavementsAggregate"></td>            
                                        <td><input type="text" name="RwPavementsAggregate" id="RwPavementsAggregate"></td>                    
                                        <td><input type="file" name="RwPavementsAggregate" id="RwPavementsAggregate"></td>                    
                                      </tr>
                          
                                      <tr>
                                        <td >Cement</td>
                                        <td >2</td>
                                        <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="RwPavementsCement" id="RwPavementsCement"></td>            
                                        <td><input type="text" name="Remark_RwPavementsCement" id="Remark_RwPavementsCement"></td>                    
                                        <td><input type="file" name="Remark_RwPavementsCement" id="Remark_RwPavementsCement"></td>                    
                                      </tr>
                          
                                      <tr>
                                        <td >Reinforcement bar</td>
                                        <td >2</td>
                                        <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="RwPavementsBar" id="RwPavementsBar"></td>            
                                        <td><input type="text" name="Remark_RwPavementsBar" id="Remark_RwPavementsBar"></td>                    
                                        <td><input type="file" name="Remark_RwPavementsBar" id="Remark_RwPavementsBar"></td>                    
                                      </tr>
                          
                                      <tr>
                                        <td >Wire mesh</td>
                                        <td >2</td>
                                        <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="RwPavementsWire" id="RwPavementsWire"></td>            
                                        <td><input type="text" name="RwPavementsWire" id="RwPavementsWire"></td>                    
                                        <td><input type="file" name="RwPavementsWire" id="RwPavementsWire"></td>                    
                                      </tr>
                          
                                      <tr>
                                        <td >Paving block</td>
                                        <td >2</td>
                                        <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="RwPavementsPaving" id="RwPavementsPaving"></td>            
                                        <td><input type="text" name="Remark_RwPavementsPaving" id="Remark_RwPavementsPaving"></td>                    
                                        <td><input type="file" name="Remark_RwPavementsPaving" id="Remark_RwPavementsPaving"></td>                    
                                      </tr>
                          
                                      <tr>
                                        <td >Soil stabiliser</td>
                                        <td >2</td>
                                        <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="RwPavementsSoil" id="RwPavementsSoil"></td>            
                                        <td><input type="text" name="Remark_RwPavementsSoil" id="Remark_RwPavementsSoil"></td>                    
                                        <td><input type="file" name="Remark_RwPavementsSoil" id="Remark_RwPavementsSoil"></td>                    
                                      </tr>
                          
                          
                                      <tr class="text-center">
                                        <td rowspan="18" >5</td>
                                        <td rowspan="18">Road furnitures</td>
                                        <td >Guardrails</td>
                                        <td >2</td>
                                        <td><input onblur="findTotal()" type="number" min="0" max="2" min="0" max="2" class="arkitek" name="RwRoadGuardrails" id="RwRoadGuardrails"></td>            
                                        <td><input type="text" name="Remark_RwRoadGuardrails" id="Remark_RwRoadGuardrails"></td>                    
                                        <td><input type="file" name="Remark_RwRoadGuardrails" id="Remark_RwRoadGuardrails"></td>                    
                                      </tr>
                            
                                      <tr>
                                        <td >Railings</td>
                                        <td >2</td>
                                        <td><input onblur="findTotal()" type="number" min="0" max="2" min="0" max="2" class="arkitek" name="RwRoadRailings" id="RwRoadRailings"></td>            
                                        <td><input type="text" name="Remark_RwRoadRailings" id="Remark_RwRoadRailings"></td>                    
                                        <td><input type="file" name="Remark_RwRoadRailings" id="Remark_RwRoadRailings"></td>                    
                                      </tr>
                            
                                      <tr>
                                        
                                        <td >Precast concrete</td>
                                        <td >2</td>
                                        <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="RwRoadPrecast" id="RwRoadPrecast"></td>            
                                        <td><input type="text" name="Remark_RwRoadPrecast" id="Remark_RwRoadPrecast"></td>                    
                                        <td><input type="file" name="Remark_RwRoadPrecast" id="Remark_RwRoadPrecast"></td>                    
                                      </tr>
                            
                                      <tr>
                                        <td >Wire rope</td>
                                        <td >2</td>
                                        <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="RwRoadWire" id="RwRoadWire"></td>            
                                        <td><input type="text" name="Remark_RwRoadWire" id="Remark_RwRoadWire"></td>                    
                                        <td><input type="file" name="Remark_RwRoadWire" id="Remark_RwRoadWire"></td>                    
                                      </tr>
                          
                                      <tr>
                                        <td >Thermoplastic</td>
                                        <td >2</td>
                                        <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="RwRoadThermoplastic" id="RwRoadThermoplastic"></td>            
                                        <td><input type="text" name="RwRoadThermoplastic" id="RwRoadThermoplastic"></td>                    
                                        <td><input type="file" name="RwRoadThermoplastic" id="RwRoadThermoplastic"></td>                    
                                      </tr>
                          
                                      <tr>
                                        <td >Road paint</td>
                                        <td >2</td>
                                        <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="RwRoadPaint" id="RwRoadPaint"></td>            
                                        <td><input type="text" name="Remark_RwRoadPaint" id="Remark_RwRoadPaint"></td>                    
                                        <td><input type="file" name="Remark_RwRoadPaint" id="Remark_RwRoadPaint"></td>                    
                                      </tr>
                          
                                      <tr>
                                        <td >Anti-glare screen</td>
                                        <td >2</td>
                                        <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="RwRoadAntiGlare" id="RwRoadAntiGlare"></td>            
                                        <td><input type="text" name="Remark_RwRoadAntiGlare" id="Remark_RwRoadAntiGlare"></td>                    
                                        <td><input type="file" name="Remark_RwRoadAntiGlare" id="Remark_RwRoadAntiGlare"></td>                    
                                      </tr>
                          
                                      <tr>
                                        <td >Sound barrier</td>
                                        <td >2</td>
                                        <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="RwRoadSoundBarrier" id="RwRoadSoundBarrier"></td>            
                                        <td><input type="text" name="RwRoadSoundBarrier" id="RwRoadSoundBarrier"></td>                    
                                        <td><input type="file" name="RwRoadSoundBarrier" id="RwRoadSoundBarrier"></td>                    
                                      </tr>
                          
                                      <tr>
                                        <td >Paving block</td>
                                        <td >2</td>
                                        <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="RwRoadPaving" id="RwRoadPaving"></td>            
                                        <td><input type="text" name="Remark_RwRoadPaving" id="Remark_RwRoadPaving"></td>                    
                                        <td><input type="file" name="Remark_RwRoadPaving" id="Remark_RwRoadPaving"></td>                    
                                      </tr>
                          
                                      <tr>
                                        <td >Precast concrete kerb</td>
                                        <td >2</td>
                                        <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="" id=""></td>            
                                        <td><input type="text" name="Remark_" id="Remark_"></td>                    
                                        <td><input type="file" name="Remark_" id="Remark_"></td>                    
                                      </tr>
                            
                                      <tr>
                                        <td >Road stud</td>
                                        <td >2</td>
                                        <td><input onblur="findTotal()" type="number" min="0" max="2" min="0" max="2" class="arkitek" name="RwRoadStud" id="RwRoadStud"></td>            
                                        <td><input type="text" name="Remark_RwRoadStud" id="Remark_RwRoadStud"></td>                    
                                        <td><input type="file" name="Remark_RwRoadStud" id="Remark_RwRoadStud"></td>                    
                                      </tr>
                            
                                      <tr>
                                        
                                        <td >Chevron delineators</td>
                                        <td >2</td>
                                        <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="RwRoadChevron" id="RwRoadChevron"></td>            
                                        <td><input type="text" name="Remark_RwRoadChevron" id="Remark_RwRoadChevron"></td>                    
                                        <td><input type="file" name="Remark_RwRoadChevron" id="Remark_RwRoadChevron"></td>                    
                                      </tr>
                            
                                      <tr>
                                        <td >Flexible post</td>
                                        <td >2</td>
                                        <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="RwRoadPost" id="RwRoadPost"></td>            
                                        <td><input type="text" name="Remark_RwRoadPost" id="Remark_RwRoadPost"></td>                    
                                        <td><input type="file" name="Remark_RwRoadPost" id="Remark_RwRoadPost"></td>                    
                                      </tr>
                          
                                      <tr>
                                        <td >Impact attenuator</td>
                                        <td >2</td>
                                        <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="RwRoadImpact" id="RwRoadImpact"></td>            
                                        <td><input type="text" name="RwRoadImpact" id="RwRoadImpact"></td>                    
                                        <td><input type="file" name="RwRoadImpact" id="RwRoadImpact"></td>                    
                                      </tr>
                          
                                      <tr>
                                        <td >Signages</td>
                                        <td >2</td>
                                        <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="RwRoadSignages" id="RwRoadSignages"></td>            
                                        <td><input type="text" name="Remark_RwRoadSignages" id="Remark_RwRoadSignages"></td>                    
                                        <td><input type="file" name="Remark_RwRoadSignages" id="Remark_RwRoadSignages"></td>                    
                                      </tr>
                          
                                      <tr>
                                        <td >Amber light</td>
                                        <td >2</td>
                                        <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="RwRoadAmber" id="RwRoadAmber"></td>            
                                        <td><input type="text" name="Remark_RwRoadAmber" id="Remark_RwRoadAmber"></td>                    
                                        <td><input type="file" name="Remark_RwRoadAmber" id="Remark_RwRoadAmber"></td>                    
                                      </tr>
                          
                                      <tr>
                                        <td >Traffic light</td>
                                        <td >2</td>
                                        <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="RwRoadTraffic" id="RwRoadTraffic"></td>            
                                        <td><input type="text" name="RwRoadTraffic" id="RwRoadTraffic"></td>                    
                                        <td><input type="file" name="RwRoadTraffic" id="RwRoadTraffic"></td>                    
                                      </tr>
                          
                                      <tr>
                                        <td >Street light</td>
                                        <td >2</td>
                                        <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="RwRoadStreet" id="RwRoadStreet"></td>            
                                        <td><input type="text" name="Remark_RwRoadStreet" id="Remark_RwRoadStreet"></td>                    
                                        <td><input type="file" name="Remark_RwRoadStreet" id="Remark_RwRoadStreet"></td>                    
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
                      
                                </tbody>
                              </table>
                      
                      
                              <div align="center" class="mt-3">
                                <button class="btn btn-primary" type="submit" title="Simpan">Simpan</button>
                                <button class="btn btn-primary" type="submit" title="Simpan">Sah</button>
                                <button class="btn btn-primary" type="submit" title="Simpan">Jana Keputusan</button>
                                <button class="btn btn-primary" type="submit" title="Simpan">Jana Sijil</button>
                                {{-- <a href="/penilaian_reka_bentuk_jalan/isi_skor_kad_page2" type="button" class="btn btn-primary">Seterusnya</a>           --}}
                              </div>
                        
                             
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
                    <h2 class="h2 mb-3">BORANG VERIFIKASI GPSS JALAN</h2>
                </div>

                <div class="col">
                    <div class="row mb-3">
                        <div class="col">
                            <nav style="--falcon-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%23748194'/%3E%3C/svg%3E&#34;);"
                                aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item text-dark-green-jkr" style="font-weight: 700" aria-current="page">
                                        Electrical Works (Ew)
                                    </li>
                                </ol>
                            </nav>
                        </div>
                      </div>
                      
                      <div class="row3 mx-1  text-center">
                        <form action= "/penilaian_reka_bentuk_gpss/simpan_skor_penilaian_elektrikal/{id}" method="post" enctype="multipart/form-data">
                          @method('POST')
                            @csrf
                      
                            <div class="col">
                              <table class="table table-bordered line-table text-center" style="width: 100%">
                                <thead class="text-white bg-orange-jkr">
                                  
                                  <tr>
                                    <th colspan="8">List of products for electrical works(EW)</th>
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
                                <tbody>
                                  
                                  <tr class="text-center">
                                    <td rowspan="1" >1</td>
                                    <td rowspan="1">Generator set</td>
                                    <td >Generator set</td>
                                    <td >2</td>
                                    <td>
                                      <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwGeneratorSet" id="EwGeneratorSet">
                                    </td>                       
                                    <td><input type="text"></td>                    
                                    <td><input type="file"></td>                    
                                  </tr>
                        
                                  
                        
                        
                                  <tr class="text-center">
                                      <td rowspan="1" >2</td>
                                      <td rowspan="1">Transformer</td>
                                      <td >11kV dry type distribution transformer</td>
                                      <td >2</td>
                                      <td>
                                        <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwTransformer" id="EwTransformer">
                                      </td>            
                                               
                                      <td><input type="text"></td>                    
                                      <td><input type="file"></td>                    
                                    </tr>
                      
                                    <tr class="text-center">
                                      <td rowspan="1" >3</td>
                                      <td rowspan="1">Surge Protective Device (PSD)</td>
                                      <td >Surge Protective Device (PSD)</td>
                                      <td >2</td>
                                      <td>
                                        <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwSPD" id="EwSPD">
                                      </td>            
                                                
                                      <td><input type="text"></td>                    
                                      <td><input type="file"></td>                    
                                    </tr>
                      
                                    <tr class="text-center">
                                      <td rowspan="4" >5</td>
                                      <td rowspan="4">Protection relays</td>
                                      <td >Combined overcurrent and earth fault relay</td>
                                      <td >2</td>
                                      <td>
                                        <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwRelayCombined" id="EwRelayCombined">
                                      </td>            
                                               
                                      <td><input type="text"></td>                    
                                      <td><input type="file"></td>                    
                                    </tr>
                      
                                    <tr>
                                      <td >Overcurrent relay</td>
                                      <td >2</td>
                                      <td>
                                        <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwRelayOvercurrent" id="EwRelayOvercurrent">
                                      </td>            
                                                
                                      <td><input type="text"></td>                    
                                      <td><input type="file"></td>                    
                                    </tr>
                      
                                    <tr>
                                      <td >Earth fault relay</td>
                                      <td >2</td>
                                      <td>
                                        <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwRelayEarthFault" id="EwRelayEarthFault">
                                      </td>            
                                               
                                      <td><input type="text"></td>                    
                                      <td><input type="file"></td>                    
                                    </tr>
                      
                                    <tr>
                                      <td >Earth fault leakage</td>
                                      <td >2</td>
                                      <td>
                                        <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwRelayEarthLeakage" id="EwRelayEarthLeakage">
                                      </td>            
                                              
                                      <td><input type="text"></td>                    
                                      <td><input type="file"></td>                    
                                    </tr>
                      
                                    <tr class="text-center">
                                      <td rowspan="3" >5</td>
                                      <td rowspan="3">Circuit breaker</td>
                                      <td >Air Circuit Breaker(ACB)</td>
                                      <td >2</td>
                                      <td>
                                        <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwCircuitACB" id="EwCircuitACB">
                                      </td>            
                                             
                                      <td><input type="text"></td>                    
                                      <td><input type="file"></td>                    
                                    </tr>
                      
                                    <tr>
                                      <td >Moulded Case Circuit Breaker(MCCB)</td>
                                      <td >2</td>
                                      <td>
                                        <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwCircuitMCCB" id="EwCircuitMCCB">
                                      </td>            
                                             
                                      <td><input type="text"></td>                    
                                      <td><input type="file"></td>                    
                                    </tr>
                      
                                    <tr>
                                      <td >Miniature Circuit Breaker(MCB)</td>
                                      <td >2</td>
                                      <td>
                                        <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwCircuitMCB" id="EwCircuitMCB">
                                      </td>            
                                                
                                      <td><input type="text"></td>                    
                                      <td><input type="file"></td>                    
                                    </tr>
                      
                                    <tr class="text-center">
                                      <td rowspan="1" >6</td>
                                      <td rowspan="1">Residual current devices</td>
                                      <td >Residual Current Operated Circuit Breaker with Integral o/c protection(RCBO)</td>
                                      <td >2</td>
                                      <td><input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwResidualRCBO" id="EwResidualRCBO"></td>            
                                                
                                      <td><input type="text"></td>                    
                                      <td><input type="file"></td>                    
                                    </tr>
                      
                                    <tr class="text-center">
                                      <td rowspan="5" >7</td>
                                      <td rowspan="5">Switchboard</td>
                                      <td >Metal enclosure</td>
                                      <td >2</td>
                                      <td><input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwResidualRCBO" id="EwResidualRCBO"></td>            
                                               
                                      <td><input type="text"></td>                    
                                      <td><input type="file"></td>                    
                                    </tr>
                      
                                    <tr>
                                      <td >Busbar support</td>
                                      <td >2</td>
                                      <td><input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwSwitchboardBusbar" id="EwSwitchboardBusbar"></td>            
                                                
                                      <td><input type="text"></td>                    
                                      <td><input type="file"></td>                    
                                    </tr>
                      
                                    <tr>
                                      <td >Cables</td>
                                      <td >2</td>
                                      <td>
                                        <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwSwitchboardCables" id="EwSwitchboardCables">
                                      </td>            
                                                
                                      <td><input type="text"></td>                    
                                      <td><input type="file"></td>                    
                                    </tr>
                      
                                    <tr>
                                      <td >Busbar</td>
                                      <td >2</td>
                                      <td>
                                        <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwSwitchboardCables" id="EwSwitchboardCables">
                                      </td>            
                                              
                                      <td><input type="text"></td>                    
                                      <td><input type="file"></td>                    
                                    </tr>
                      
                                    <tr>
                                      <td >Consumer unit</td>
                                      <td >2</td>
                                      <td>
                                        <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwSwitchboardConsumer" id="EwSwitchboardConsumer">
                                      </td>            
                                             
                                      <td><input type="text"></td>                    
                                      <td><input type="file"></td>                    
                                    </tr>
                      
                                    <tr class="text-center">
                                      <td rowspan="4" >8</td>
                                      <td rowspan="4">Lamp</td>
                                      <td >Compact fluorescent lamp(CFL)</td>
                                      <td >2</td>
                                      <td><input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwLampCFL" id="EwLampCFL"></td>            
                                               
                                      <td><input type="text"></td>                    
                                      <td><input type="file"></td>                    
                                    </tr>
                      
                                    <tr>
                                      <td >Fluorescent lamp(T5)</td>
                                      <td >2</td>
                                      <td><input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwLampT5" id="EwLampT5"></td>            
                                               
                                      <td><input type="text"></td>                    
                                      <td><input type="file"></td>                    
                                    </tr>
                      
                                    <tr>
                                      <td >LED tubes</td>
                                      <td >2</td>
                                      <td>
                                        <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwLampLEDTube" id="EwLampLEDTube">
                                      </td>            
                                                
                                      <td><input type="text"></td>                    
                                      <td><input type="file"></td>                    
                                    </tr>
                      
                                    <tr>
                                      <td >LED bulb</td>
                                      <td >2</td>
                                      <td>
                                        <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwLampLEDBulb" id="EwLampLEDBulb">
                                      </td>            
                                                
                                      <td><input type="text"></td>                    
                                      <td><input type="file"></td>                    
                                    </tr>
                      
                                    <tr class="text-center">
                                      <td rowspan="6" >9</td>
                                      <td rowspan="6">Indoor luminaires</td>
                                      <td >LED downlight</td>
                                      <td >2</td>
                                      <td><input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwIndoorLEDDownlight" id="EwIndoorLEDDownlight"></td>            
                                                  
                                      <td><input type="text"></td>                    
                                      <td><input type="file"></td>                    
                                    </tr>
                      
                                    <tr>
                                      <td >LED recessed luminaires</td>
                                      <td >2</td>
                                      <td><input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwIndoorLEDRecessed" id="EwIndoorLEDRecessed"></td>            
                                                
                                      <td><input type="text"></td>                    
                                      <td><input type="file"></td>                    
                                    </tr>
                      
                                    <tr>
                                      <td >Fluorescent luminaires(T5)</td>
                                      <td >2</td>
                                      <td>
                                        <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwIndoorT5" id="EwIndoorT5">
                                      </td>            
                                                
                                      <td><input type="text"></td>                    
                                      <td><input type="file"></td>                    
                                    </tr>
                      
                                    <tr>
                                      <td >Fluorescent luminaires(T8) c/w electronic ballast</td>
                                      <td >2</td>
                                      <td>
                                        <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwIndoorT8" id="EwIndoorT8">
                                      </td>            
                                                
                                      <td><input type="text"></td>                    
                                      <td><input type="file"></td>                    
                                    </tr>
                      
                                    <tr>
                                      <td >Electronic ballast</td>
                                      <td >2</td>
                                      <td>
                                        <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwIndoorBallast" id="EwIndoorBallast">
                                      </td>            
                                                
                                      <td><input type="text"></td>                    
                                      <td><input type="file"></td>                    
                                    </tr>
                      
                                    <tr>
                                      <td >LED driver</td>
                                      <td >2</td>
                                      <td>
                                        <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwIndoorLEDDriver" id="EwIndoorLEDDriver">
                                      </td>            
                                                
                                      <td><input type="text"></td>                    
                                      <td><input type="file"></td>                    
                                    </tr>
                      
                                    <tr class="text-center">
                                      <td rowspan="5" >10</td>
                                      <td rowspan="5">Outdoor luminaires</td>
                                      <td >Road lighting luminaires(HPSV)</td>
                                      <td >2</td>
                                      <td><input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwOutdoorHPSV" id="EwOutdoorHPSV"></td>            
                                                 
                                      <td><input type="text"></td>                    
                                      <td><input type="file"></td>                    
                                    </tr>
                      
                                    <tr>
                                      <td >Road lighting luminaires(Induction)</td>
                                      <td >2</td>
                                      <td><input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwOutdoorInduction" id="EwOutdoorInduction"></td>            
                                                
                                      <td><input type="text"></td>                    
                                      <td><input type="file"></td>                    
                                    </tr>
                      
                                    <tr>
                                      <td >Road lighting luminaires(LED)</td>
                                      <td >2</td>
                                      <td>
                                        <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwOutdoorLED" id="EwOutdoorLED">
                                      </td>            
                                   
                                      <td><input type="text"></td>                    
                                      <td><input type="file"></td>                    
                                    </tr>
                      
                                    <tr>
                                      <td >Ballast for discharge lamp</td>
                                      <td >2</td>
                                      <td>
                                        <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwOutdoorBallast" id="EwOutdoorBallast">
                                      </td>            
                                               
                                      <td><input type="text"></td>                    
                                      <td><input type="file"></td>                    
                                    </tr>
                      
                                    <tr>
                                      <td >Lighting columns</td>
                                      <td >2</td>
                                      <td>
                                        <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwOutdoorLighting" id="EwOutdoorLighting">
                                      </td>            
                                                
                                      <td><input type="text"></td>                    
                                      <td><input type="file"></td>                    
                                    </tr>
                      
                                    <tr class="text-center">
                                      <td rowspan="3" >11</td>
                                      <td rowspan="3">Traffic light</td>
                                      <td > Controller</td>
                                      <td >2</td>
                                      <td><input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwTrafficController" id="EwTrafficController"></td>            
                                               
                                      <td><input type="text"></td>                    
                                      <td><input type="file"></td>                    
                                    </tr>
                      
                                    <tr>
                                      <td >Traffic signal module</td>
                                      <td >2</td>
                                      <td><input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwTrafficSignal" id="EwTrafficSignal"></td>            
                                              
                                      <td><input type="text"></td>                    
                                      <td><input type="file"></td>                    
                                    </tr>
                      
                                    <tr>
                                      <td >Lighting columns</td>
                                      <td >2</td>
                                      <td>
                                        <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwTrafficLighting" id="EwTrafficLighting">
                                      </td>            
                                                
                                      <td><input type="text"></td>                    
                                      <td><input type="file"></td>                    
                                    </tr>
                      
                                    <tr class="text-center">
                                      <td rowspan="2" >12</td>
                                      <td rowspan="2">Switches and socket outlet</td>
                                      <td > Switches</td>
                                      <td >2</td>
                                      <td><input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwSwitches" id="EwSwitches"></td>            
                                                
                                      <td><input type="text"></td>                    
                                      <td><input type="file"></td>                    
                                    </tr>
                      
                                    <tr>
                                      <td >Switches socket outlet</td>
                                      <td >2</td>
                                      <td><input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwSwitchesSocket" id="EwSwitchesSocket"></td>            
                                                
                                      <td><input type="text"></td>                    
                                      <td><input type="file"></td>                    
                                    </tr>
                      
                                    <tr class="text-center">
                                      <td rowspan="3" >13</td>
                                      <td rowspan="3">Cables</td>
                                      <td > Low voltage cable</td>
                                      <td >2</td>
                                      <td><input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwCablesLow" id="EwCablesLow"></td>            
                                                
                                      <td><input type="text"></td>                    
                                      <td><input type="file"></td>                    
                                    </tr>
                      
                                    <tr>
                                      <td >Medium voltage cable</td>
                                      <td >2</td>
                                      <td><input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwCablesMedium" id="EwCablesMedium"></td>            
                                                
                                      <td><input type="text"></td>                    
                                      <td><input type="file"></td>                    
                                    </tr>
                      
                                    <tr>
                                      <td >High voltage cable</td>
                                      <td >2</td>
                                      <td>
                                        <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwCablesHigh" id="EwCablesHigh">
                                      </td>            
                                                
                                      <td><input type="text"></td>                    
                                      <td><input type="file"></td>                    
                                    </tr>
                      
                                    <tr class="text-center">
                                      <td rowspan="4" >14</td>
                                      <td rowspan="4">G. S conduit & High Impact PVC conduit/trunking/tray</td>
                                      <td >Rigid high impact PVC conduit</td>
                                      <td >2</td>
                                      <td>
                                        <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwTrayPVC" id="EwTrayPVC">
                                      </td>            
                                                
                                      <td><input type="text"></td>                    
                                      <td><input type="file"></td>                    
                                    </tr>
                        
                                    <tr>
                                      <td >Galvanised steel conduit</td>
                                      <td >2</td>
                                      <td>
                                        <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwTrayGalvanised" id="EwTrayGalvanised">
                                      </td>            
                                                
                                      <td><input type="text"></td>                    
                                      <td><input type="file"></td>                    
                                    </tr>
                        
                                    <tr>
                                      <td >Trunking</td>
                                      <td >2</td>
                                      <td>
                                        <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwTrayTrunking" id="EwTrayTrunking">
                                      </td>            
                                                 
                                      <td><input type="text"></td>                    
                                      <td><input type="file"></td>                    
                                    </tr>
                        
                                    <tr>
                                      <td >Cable tray</td>
                                      <td >2</td>
                                      <td>
                                        <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwTrayCableTray" id="EwTrayCableTray">
                                      </td>            
                                               
                                      <td><input type="text"></td>                    
                                      <td><input type="file"></td>                    
                                    </tr>
                          
                                      <tr class="text-center">
                                        <td rowspan="3" >15</td>
                                        <td rowspan="3">Fan</td>
                                        <td >Ceiling fan</td>
                                        <td >2</td>
                                        <td>
                                          <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwFanCeiling" id="EwFanCeiling">
                                        </td>            
                                                   
                                        <td><input type="text"></td>                    
                                        <td><input type="file"></td>                    
                                      </tr>
                        
                                      <tr>
                                        <td >Wall fan</td>
                                        <td >2</td>
                                        <td>
                                          <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwFanWall" id="EwFanWall">
                                        </td>            
                                                 
                                        <td><input type="text"></td>                    
                                        <td><input type="file"></td>                    
                                      </tr>
                        
                                      <tr>
                                        <td >Oscillating fan</td>
                                        <td >2</td>
                                        <td>
                                          <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwFanOscillating" id="EwFanOscillating">
                                        </td>            
                                                  
                                        <td><input type="text"></td>                    
                                        <td><input type="file"></td>                    
                                      </tr>
                        
                                      <tr class="text-center">
                                        <td rowspan="2" >16</td>
                                        <td rowspan="2">Power factor correction</td>
                                        <td >Capacitor for power factor correction</td>
                                        <td >2</td>
                                        <td>
                                          <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwPowerCapasitor" id="EwPowerCapasitor">
                                        </td>            
                                                   
                                        <td><input type="text"></td>                    
                                        <td><input type="file"></td>                    
                                      </tr>
                        
                                      <tr>
                                        <td >Power factor regulator</td>
                                        <td >2</td>
                                        <td>
                                          <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwPowerRegulator" id="EwPowerRegulator">
                                        </td>            
                                               
                                        <td><input type="text"></td>                    
                                        <td><input type="file"></td>                    
                                      </tr>
                        
                                      <tr class="text-center">
                                        <td rowspan="2" >17</td>
                                        <td rowspan="2">Emergency light & luminous sign</td>
                                        <td >'KELUAR' sign LED</td>
                                        <td >2</td>
                                        <td>
                                          <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwEmergencyKeluar" id="EwEmergencyKeluar">
                                        </td>            
                                                  
                                        <td><input type="text"></td>                    
                                        <td><input type="file"></td>                    
                                      </tr>
                        
                                      <tr>
                                        <td >Emergency light LED</td>
                                        <td >2</td>
                                        <td>
                                          <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwEmergencyLED" id="EwEmergencyLED">
                                        </td>            
                                                   
                                        <td><input type="text"></td>                    
                                        <td><input type="file"></td>                    
                                      </tr>
                        
                                      <tr class="text-center">
                                        <td rowspan="1" >18</td>
                                        <td rowspan="1">Switchgear</td>
                                        <td >11kV metal enclosed Switchgear - VCB</td>
                                        <td >2</td>
                                        <td><input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwSwithcgearVCB" id="EwSwithcgearVCB"></td>            
                                                  
                                        <td><input type="text"></td>                    
                                        <td><input type="file"></td>                    
                                      </tr>
                        
                                      <tr class="text-center">
                                        <td rowspan="4" >19</td>
                                        <td rowspan="4">Renewable energy system</td>
                                        <td >Solar panel</td>
                                        <td >2</td>
                                        <td><input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwRenewableSolar" id="EwRenewableSolar"></td>            
                                                  
                                        <td><input type="text"></td>                    
                                        <td><input type="file"></td>                    
                                      </tr>
                        
                                      <tr>
                                        <td >Battery</td>
                                        <td >2</td>
                                        <td><input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwRenewableBattery" id="EwRenewableBattery"></td>            
                                                  
                                        <td><input type="text"></td>                    
                                        <td><input type="file"></td>                    
                                      </tr>
                        
                                      <tr>
                                        <td >Inverter</td>
                                        <td >2</td>
                                        <td>
                                          <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwRenewableInverter" id="EwRenewableInverter">
                                        </td>            
                                                  
                                        <td><input type="text"></td>                    
                                        <td><input type="file"></td>                    
                                      </tr>
                        
                                      <tr>
                                        <td >Low voltage cable</td>
                                        <td >2</td>
                                        <td>
                                          <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwRenewableLowCable" id="EwRenewableLowCable">
                                        </td>            
                                                   
                                        <td><input type="text"></td>                    
                                        <td><input type="file"></td>                    
                                      </tr>
                      
                                      <tr style="display: none">
                                        <td><input type="text" name="markahPREw" id="markahPREw" /></td>
                                      </tr>


                                      <thead class="text-white bg-orange-jkr">
                                        <tr>          
                                          <th colspan="8">Green Product Scoring Sheet</th>
                                        </tr>
                                        <tr>
                                          <th colspan="8">List of products for road structure works(SW)</th>
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

                                      {{-- sambungan --}}
                                      <tr class="text-center">
                                        <td rowspan="6" >1</td>
                                        <td rowspan="6">Road structure (bridge)</td>
                                        <td >Abutment</td>
                                        <td >2</td>
                                        <td><input onblur="findTotal()" type="number" min="0" max="2" min="0" max="2" class="arkitek" name="STwBridgeAbutment" id="STwBridgeAbutment"></td>            
                                        <td><input type="text" name="Remark_STwBridgeAbutment" id="Remark_STwBridgeAbutment"></td>                    
                                        <td><input type="file" name="Remark_STwBridgeAbutment" id="Remark_STwBridgeAbutment"></td>                    
                                      </tr>
                            
                                      <tr>
                                        <td >Pier</td>
                                        <td >2</td>
                                        <td><input onblur="findTotal()" type="number" min="0" max="2" min="0" max="2" class="arkitek" name="STwStructureBridgePier" id="STwStructureBridgePier"></td>            
                                        <td><input type="text" name="Remark_STwStructureBridgePier" id="Remark_STwStructureBridgePier"></td>                    
                                        <td><input type="file" name="Remark_STwStructureBridgePier" id="Remark_STwStructureBridgePier"></td>                    
                                      </tr>
                            
                                      <tr>
                                        
                                        <td >Bearing pad</td>
                                        <td >2</td>
                                        <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="STwStructureBridgeBearing" id="STwStructureBridgeBearing"></td>            
                                        <td><input type="text" name="Remark_STwStructureBridgeBearing" id="Remark_STwStructureBridgeBearing"></td>                    
                                        <td><input type="file" name="Remark_STwStructureBridgeBearing" id="Remark_STwStructureBridgeBearing"></td>                    
                                      </tr>
                            
                                      <tr>
                                        <td >Decking</td>
                                        <td >2</td>
                                        <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="STwStructureBridgeDecking" id="STwStructureBridgeDecking"></td>            
                                        <td><input type="text" name="Remark_STwStructureBridgeDecking" id="Remark_STwStructureBridgeDecking"></td>                    
                                        <td><input type="file" name="Remark_STwStructureBridgeDecking" id="Remark_STwStructureBridgeDecking"></td>                    
                                      </tr>
                          
                                      <tr>
                                        <td >Expansion joint</td>
                                        <td >2</td>
                                        <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="STwStructureBridgeExpansion" id="STwStructureBridgeExpansion"></td>            
                                        <td><input type="text" name="Remark_STwStructureBridgeExpansion" id="Remark_STwStructureBridgeExpansion"></td>                    
                                        <td><input type="file" name="Remark_STwStructureBridgeExpansion" id="Remark_STwStructureBridgeExpansion"></td>                    
                                      </tr>
                          
                                      <tr>
                                        <td >Parapet wall</td>
                                        <td >2</td>
                                        <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="STwStructureBridgeParapet" id="STwStructureBridgeParapet"></td>            
                                        <td><input type="text" name="Remark_STwStructureBridgeParapet" id="Remark_STwStructureBridgeParapet"></td>                    
                                        <td><input type="file" name="Remark_STwStructureBridgeParapet" id="Remark_STwStructureBridgeParapet"></td>                    
                                      </tr>
                          
                           
                          
                                      {{-- dye tak show --}}
                                      <tr style="display: none">
                                        <td>markahPRAwRoof<input type="text" name="markahPRAwRoof" id="markahPRAwRoof" /></td>            
                                      </tr>
                          
                                      <tr style="display: none">
                                        <td>markahPRAwRoofConstruction<input type="text" name="Cons_markahPRAwRoof" id="Cons_markahPRAwRoof" /></td>            
                                      </tr>
                          
                                      <tr style="display: none">
                                        <td>markahPRAwRoofAwarded<input type="text" name="Awarded_markahPRAwRoof" id="Awarded_markahPRAwRoof" /></td>            
                                      </tr>

                                      <thead class="text-white bg-orange-jkr">
                                        <tr>          
                                          <th colspan="8">Green Product Scoring Sheet</th>
                                        </tr>
                                        <tr>
                                          <th colspan="8">List of products for road structure works(RW)</th>
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

                                      {{-- sambungan jalan --}}
                                      <tr class="text-center">
                                        <td rowspan="6" >1</td>
                                        <td rowspan="6">Common items</td>
                                        <td >Cement</td>
                                        <td >2</td>
                                        <td><input onblur="findTotal()" type="number" min="0" max="2" min="0" max="2" class="arkitek" name="RwCommonCement" id="RwCommonCement"></td>            
                                        <td><input type="text" name="Remark_RwCommonCement" id="Remark_RwCommonCement"></td>                    
                                        <td><input type="file" name="Remark_RwCommonCement" id="Remark_RwCommonCement"></td>                    
                                      </tr>
                            
                                      <tr>
                                        <td >Formwork</td>
                                        <td >2</td>
                                        <td><input onblur="findTotal()" type="number" min="0" max="2" min="0" max="2" class="arkitek" name="RwCommonFormwork" id="RwCommonFormwork"></td>            
                                        <td><input type="text" name="Remark_RwCommonFormwork" id="Remark_RwCommonFormwork"></td>                    
                                        <td><input type="file" name="Remark_RwCommonFormwork" id="Remark_RwCommonFormwork"></td>                    
                                      </tr>
                            
                                      <tr>
                                        
                                        <td >Steel fabric</td>
                                        <td >2</td>
                                        <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="RwCommonSteel" id="RwCommonSteel"></td>            
                                        <td><input type="text" name="Remark_RwCommonSteel" id="Remark_RwCommonSteel"></td>                    
                                        <td><input type="file" name="Remark_RwCommonSteel" id="Remark_RwCommonSteel"></td>                    
                                      </tr>
                            
                                      <tr>
                                        <td >Piles</td>
                                        <td >2</td>
                                        <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="RwCommonPiles" id="RwCommonPiles"></td>            
                                        <td><input type="text" name="Remark_RwCommonPiles" id="Remark_RwCommonPiles"></td>                    
                                        <td><input type="file" name="Remark_RwCommonPiles" id="Remark_RwCommonPiles"></td>                    
                                      </tr>
                          
                                      <tr>
                                        <td >Steel reinforcement bar</td>
                                        <td >2</td>
                                        <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="RwCommonSteelBar" id="RwCommonSteelBar"></td>            
                                        <td><input type="text" name="Remark_RwCommonSteelBar" id="Remark_RwCommonSteelBar"></td>                    
                                        <td><input type="file" name="Remark_RwCommonSteelBar" id="Remark_RwCommonSteelBar"></td>                    
                                      </tr>
                          
                                      <tr>
                                        <td >Silicone sealant</td>
                                        <td >2</td>
                                        <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="RwCommonSilicone" id="RwCommonSilicone"></td>            
                                        <td><input type="text" name="Remark_RwCommonSilicone" id="Remark_RwCommonSilicone"></td>                    
                                        <td><input type="file" name="Remark_RwCommonSilicone" id="Remark_RwCommonSilicone"></td>                    
                                      </tr>
                          
                                      <tr class="text-center">
                                        <td rowspan="6" >2</td>
                                        <td rowspan="6">Slope protection/geotechnical works</td>
                                        <td >Geotextile</td>
                                        <td >2</td>
                                        <td><input onblur="findTotal()" type="number" min="0" max="2" min="0" max="2" class="arkitek" name="RwSlopeGeotextile" id="RwSlopeGeotextile"></td>            
                                        <td><input type="text" name="Remark_RwSlopeGeotextile" id="Remark_RwSlopeGeotextile"></td>                    
                                        <td><input type="file" name="Remark_RwSlopeGeotextile" id="Remark_RwSlopeGeotextile"></td>                    
                                      </tr>
                            
                                      <tr>
                                        <td >Geogrid</td>
                                        <td >2</td>
                                        <td><input onblur="findTotal()" type="number" min="0" max="2" min="0" max="2" class="arkitek" name="RwSlopeGeogrid" id="RwSlopeGeogrid"></td>            
                                        <td><input type="text" name="Remark_RwSlopeGeogrid" id="Remark_RwSlopeGeogrid"></td>                    
                                        <td><input type="file" name="Remark_RwSlopeGeogrid" id="Remark_RwSlopeGeogrid"></td>                    
                                      </tr>
                            
                                      <tr>
                                        
                                        <td >Prefabricated vertical</td>
                                        <td >2</td>
                                        <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="RwSlopePrefabricated" id="RwSlopePrefabricated"></td>            
                                        <td><input type="text" name="Remark_RwSlopePrefabricated" id="Remark_RwSlopePrefabricated"></td>                    
                                        <td><input type="file" name="Remark_RwSlopePrefabricated" id="Remark_RwSlopePrefabricated"></td>                    
                                      </tr>
                            
                                      <tr>
                                        <td >Blanket</td>
                                        <td >2</td>
                                        <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="RwSlopeBlanket" id="RwSlopeBlanket"></td>            
                                        <td><input type="text" name="Remark_RwSlopeBlanket" id="Remark_RwSlopeBlanket"></td>                    
                                        <td><input type="file" name="Remark_RwSlopeBlanket" id="Remark_RwSlopeBlanket"></td>                    
                                      </tr>
                          
                                      <tr>
                                        <td >Sheeting</td>
                                        <td >2</td>
                                        <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="" id=""></td>            
                                        <td><input type="text" name="" id=""></td>                    
                                        <td><input type="file" name="" id=""></td>                    
                                      </tr>
                          
                                      <tr>
                                        <td >Fibro mat</td>
                                        <td >2</td>
                                        <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="RwSlopeFibroMat" id="RwSlopeFibroMat"></td>            
                                        <td><input type="text" name="Remark_RwSlopeFibroMat" id="Remark_RwSlopeFibroMat"></td>                    
                                        <td><input type="file" name="Remark_RwSlopeFibroMat" id="Remark_RwSlopeFibroMat"></td>                    
                                      </tr>
                          
                                      <tr class="text-center">
                                        <td rowspan="9" >3</td>
                                        <td rowspan="9">Drainage works</td>
                                        <td >Precast reinforced</td>
                                        <td >2</td>
                                        <td><input onblur="findTotal()" type="number" min="0" max="2" min="0" max="2" class="arkitek" name="RwDrainagePrecast" id="RwDrainagePrecast"></td>            
                                        <td><input type="text" name="Remark_RwDrainagePrecast" id="Remark_RwDrainagePrecast"></td>                    
                                        <td><input type="file" name="Remark_RwDrainagePrecast" id="Remark_RwDrainagePrecast"></td>                    
                                      </tr>
                            
                                      <tr>
                                        <td >Pipes</td>
                                        <td >2</td>
                                        <td><input onblur="findTotal()" type="number" min="0" max="2" min="0" max="2" class="arkitek" name="RwDrainagePipes" id="RwDrainagePipes"></td>            
                                        <td><input type="text" name="Remark_RwDrainagePipes" id="Remark_RwDrainagePipes"></td>                    
                                        <td><input type="file" name="Remark_RwDrainagePipes" id="Remark_RwDrainagePipes"></td>                    
                                      </tr>
                            
                                      <tr>
                                        
                                        <td >Drains</td>
                                        <td >2</td>
                                        <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="RwDrainageDrains" id="RwDrainageDrains"></td>            
                                        <td><input type="text" name="Remark_RwDrainageDrains" id="Remark_RwDrainageDrains"></td>                    
                                        <td><input type="file" name="Remark_RwDrainageDrains" id="Remark_RwDrainageDrains"></td>                    
                                      </tr>
                            
                                      <tr>
                                        <td >Bricks</td>
                                        <td >2</td>
                                        <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="RwDrainageBricks" id="RwDrainageBricks"></td>            
                                        <td><input type="text" name="Remark_RwDrainageBricks" id="Remark_RwDrainageBricks"></td>                    
                                        <td><input type="file" name="Remark_RwDrainageBricks" id="Remark_RwDrainageBricks"></td>                    
                                      </tr>
                          
                                      <tr>
                                        <td >Precast subsoil drain</td>
                                        <td >2</td>
                                        <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="RwDrainagePrecastDrain" id="RwDrainagePrecastDrain"></td>            
                                        <td><input type="text" name="RwDrainagePrecastDrain" id="RwDrainagePrecastDrain"></td>                    
                                        <td><input type="file" name="RwDrainagePrecastDrain" id="RwDrainagePrecastDrain"></td>                    
                                      </tr>
                          
                                      <tr>
                                        <td >Bricks</td>
                                        <td >2</td>
                                        <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="RwDrainageBricks" id="RwDrainageBricks"></td>            
                                        <td><input type="text" name="Remark_RwDrainageBricks" id="Remark_RwDrainageBricks"></td>                    
                                        <td><input type="file" name="Remark_RwDrainageBricks" id="Remark_RwDrainageBricks"></td>                    
                                      </tr>
                          
                                      <tr>
                                        <td >Gabion cage</td>
                                        <td >2</td>
                                        <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="RwDrainageGabionCage" id="RwDrainageGabionCage"></td>            
                                        <td><input type="text" name="Remark_RwDrainageGabionCage" id="Remark_RwDrainageGabionCage"></td>                    
                                        <td><input type="file" name="Remark_RwDrainageGabionCage" id="Remark_RwDrainageGabionCage"></td>                    
                                      </tr>
                          
                                      <tr>
                                        <td >Grating</td>
                                        <td >2</td>
                                        <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="RwDrainageGrating" id="RwDrainageGrating"></td>            
                                        <td><input type="text" name="RwDrainageGrating" id="RwDrainageGrating"></td>                    
                                        <td><input type="file" name="RwDrainageGrating" id="RwDrainageGrating"></td>                    
                                      </tr>
                          
                                      <tr>
                                        <td >Water stop</td>
                                        <td >2</td>
                                        <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="RwDrainageWaterStop" id="RwDrainageWaterStop"></td>            
                                        <td><input type="text" name="Remark_RwDrainageWaterStop" id="Remark_RwDrainageWaterStop"></td>                    
                                        <td><input type="file" name="Remark_RwDrainageWaterStop" id="Remark_RwDrainageWaterStop"></td>                    
                                      </tr>
                          
                                      <tr class="text-center">
                                        <td rowspan="10" >4</td>
                                        <td rowspan="10">Pavements</td>
                                        <td >Prime coat</td>
                                        <td >2</td>
                                        <td><input onblur="findTotal()" type="number" min="0" max="2" min="0" max="2" class="arkitek" name="RwPavementsPrime" id="RwPavementsPrime"></td>            
                                        <td><input type="text" name="Remark_RwPavementsPrime" id="Remark_RwPavementsPrime"></td>                    
                                        <td><input type="file" name="Remark_RwPavementsPrime" id="Remark_RwPavementsPrime"></td>                    
                                      </tr>
                            
                                      <tr>
                                        <td >Tack coat</td>
                                        <td >2</td>
                                        <td><input onblur="findTotal()" type="number" min="0" max="2" min="0" max="2" class="arkitek" name="RwPavementsTack" id="RwPavementsTack"></td>            
                                        <td><input type="text" name="Remark_RwPavementsTack" id="Remark_RwPavementsTack"></td>                    
                                        <td><input type="file" name="Remark_RwPavementsTack" id="Remark_RwPavementsTack"></td>                    
                                      </tr>
                            
                                      <tr>
                                        
                                        <td >Bitumen</td>
                                        <td >2</td>
                                        <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="RwPavementsBitumen" id="RwPavementsBitumen"></td>            
                                        <td><input type="text" name="Remark_RwPavementsBitumen" id="Remark_RwPavementsBitumen"></td>                    
                                        <td><input type="file" name="Remark_RwPavementsBitumen" id="Remark_RwPavementsBitumen"></td>                    
                                      </tr>
                            
                                      <tr>
                                        <td >Bitumen additives</td>
                                        <td >2</td>
                                        <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="RwPavementsAdditives" id="RwPavementsAdditives"></td>            
                                        <td><input type="text" name="Remark_RwPavementsAdditives" id="Remark_RwPavementsAdditives"></td>                    
                                        <td><input type="file" name="Remark_RwPavementsAdditives" id="Remark_RwPavementsAdditives"></td>                    
                                      </tr>
                          
                                      <tr>
                                        <td >Aggregate</td>
                                        <td >2</td>
                                        <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="RwPavementsAggregate" id="RwPavementsAggregate"></td>            
                                        <td><input type="text" name="RwPavementsAggregate" id="RwPavementsAggregate"></td>                    
                                        <td><input type="file" name="RwPavementsAggregate" id="RwPavementsAggregate"></td>                    
                                      </tr>
                          
                                      <tr>
                                        <td >Cement</td>
                                        <td >2</td>
                                        <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="RwPavementsCement" id="RwPavementsCement"></td>            
                                        <td><input type="text" name="Remark_RwPavementsCement" id="Remark_RwPavementsCement"></td>                    
                                        <td><input type="file" name="Remark_RwPavementsCement" id="Remark_RwPavementsCement"></td>                    
                                      </tr>
                          
                                      <tr>
                                        <td >Reinforcement bar</td>
                                        <td >2</td>
                                        <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="RwPavementsBar" id="RwPavementsBar"></td>            
                                        <td><input type="text" name="Remark_RwPavementsBar" id="Remark_RwPavementsBar"></td>                    
                                        <td><input type="file" name="Remark_RwPavementsBar" id="Remark_RwPavementsBar"></td>                    
                                      </tr>
                          
                                      <tr>
                                        <td >Wire mesh</td>
                                        <td >2</td>
                                        <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="RwPavementsWire" id="RwPavementsWire"></td>            
                                        <td><input type="text" name="RwPavementsWire" id="RwPavementsWire"></td>                    
                                        <td><input type="file" name="RwPavementsWire" id="RwPavementsWire"></td>                    
                                      </tr>
                          
                                      <tr>
                                        <td >Paving block</td>
                                        <td >2</td>
                                        <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="RwPavementsPaving" id="RwPavementsPaving"></td>            
                                        <td><input type="text" name="Remark_RwPavementsPaving" id="Remark_RwPavementsPaving"></td>                    
                                        <td><input type="file" name="Remark_RwPavementsPaving" id="Remark_RwPavementsPaving"></td>                    
                                      </tr>
                          
                                      <tr>
                                        <td >Soil stabiliser</td>
                                        <td >2</td>
                                        <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="RwPavementsSoil" id="RwPavementsSoil"></td>            
                                        <td><input type="text" name="Remark_RwPavementsSoil" id="Remark_RwPavementsSoil"></td>                    
                                        <td><input type="file" name="Remark_RwPavementsSoil" id="Remark_RwPavementsSoil"></td>                    
                                      </tr>
                          
                          
                                      <tr class="text-center">
                                        <td rowspan="18" >5</td>
                                        <td rowspan="18">Road furnitures</td>
                                        <td >Guardrails</td>
                                        <td >2</td>
                                        <td><input onblur="findTotal()" type="number" min="0" max="2" min="0" max="2" class="arkitek" name="RwRoadGuardrails" id="RwRoadGuardrails"></td>            
                                        <td><input type="text" name="Remark_RwRoadGuardrails" id="Remark_RwRoadGuardrails"></td>                    
                                        <td><input type="file" name="Remark_RwRoadGuardrails" id="Remark_RwRoadGuardrails"></td>                    
                                      </tr>
                            
                                      <tr>
                                        <td >Railings</td>
                                        <td >2</td>
                                        <td><input onblur="findTotal()" type="number" min="0" max="2" min="0" max="2" class="arkitek" name="RwRoadRailings" id="RwRoadRailings"></td>            
                                        <td><input type="text" name="Remark_RwRoadRailings" id="Remark_RwRoadRailings"></td>                    
                                        <td><input type="file" name="Remark_RwRoadRailings" id="Remark_RwRoadRailings"></td>                    
                                      </tr>
                            
                                      <tr>
                                        
                                        <td >Precast concrete</td>
                                        <td >2</td>
                                        <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="RwRoadPrecast" id="RwRoadPrecast"></td>            
                                        <td><input type="text" name="Remark_RwRoadPrecast" id="Remark_RwRoadPrecast"></td>                    
                                        <td><input type="file" name="Remark_RwRoadPrecast" id="Remark_RwRoadPrecast"></td>                    
                                      </tr>
                            
                                      <tr>
                                        <td >Wire rope</td>
                                        <td >2</td>
                                        <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="RwRoadWire" id="RwRoadWire"></td>            
                                        <td><input type="text" name="Remark_RwRoadWire" id="Remark_RwRoadWire"></td>                    
                                        <td><input type="file" name="Remark_RwRoadWire" id="Remark_RwRoadWire"></td>                    
                                      </tr>
                          
                                      <tr>
                                        <td >Thermoplastic</td>
                                        <td >2</td>
                                        <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="RwRoadThermoplastic" id="RwRoadThermoplastic"></td>            
                                        <td><input type="text" name="RwRoadThermoplastic" id="RwRoadThermoplastic"></td>                    
                                        <td><input type="file" name="RwRoadThermoplastic" id="RwRoadThermoplastic"></td>                    
                                      </tr>
                          
                                      <tr>
                                        <td >Road paint</td>
                                        <td >2</td>
                                        <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="RwRoadPaint" id="RwRoadPaint"></td>            
                                        <td><input type="text" name="Remark_RwRoadPaint" id="Remark_RwRoadPaint"></td>                    
                                        <td><input type="file" name="Remark_RwRoadPaint" id="Remark_RwRoadPaint"></td>                    
                                      </tr>
                          
                                      <tr>
                                        <td >Anti-glare screen</td>
                                        <td >2</td>
                                        <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="RwRoadAntiGlare" id="RwRoadAntiGlare"></td>            
                                        <td><input type="text" name="Remark_RwRoadAntiGlare" id="Remark_RwRoadAntiGlare"></td>                    
                                        <td><input type="file" name="Remark_RwRoadAntiGlare" id="Remark_RwRoadAntiGlare"></td>                    
                                      </tr>
                          
                                      <tr>
                                        <td >Sound barrier</td>
                                        <td >2</td>
                                        <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="RwRoadSoundBarrier" id="RwRoadSoundBarrier"></td>            
                                        <td><input type="text" name="RwRoadSoundBarrier" id="RwRoadSoundBarrier"></td>                    
                                        <td><input type="file" name="RwRoadSoundBarrier" id="RwRoadSoundBarrier"></td>                    
                                      </tr>
                          
                                      <tr>
                                        <td >Paving block</td>
                                        <td >2</td>
                                        <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="RwRoadPaving" id="RwRoadPaving"></td>            
                                        <td><input type="text" name="Remark_RwRoadPaving" id="Remark_RwRoadPaving"></td>                    
                                        <td><input type="file" name="Remark_RwRoadPaving" id="Remark_RwRoadPaving"></td>                    
                                      </tr>
                          
                                      <tr>
                                        <td >Precast concrete kerb</td>
                                        <td >2</td>
                                        <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="" id=""></td>            
                                        <td><input type="text" name="Remark_" id="Remark_"></td>                    
                                        <td><input type="file" name="Remark_" id="Remark_"></td>                    
                                      </tr>
                            
                                      <tr>
                                        <td >Road stud</td>
                                        <td >2</td>
                                        <td><input onblur="findTotal()" type="number" min="0" max="2" min="0" max="2" class="arkitek" name="RwRoadStud" id="RwRoadStud"></td>            
                                        <td><input type="text" name="Remark_RwRoadStud" id="Remark_RwRoadStud"></td>                    
                                        <td><input type="file" name="Remark_RwRoadStud" id="Remark_RwRoadStud"></td>                    
                                      </tr>
                            
                                      <tr>
                                        
                                        <td >Chevron delineators</td>
                                        <td >2</td>
                                        <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="RwRoadChevron" id="RwRoadChevron"></td>            
                                        <td><input type="text" name="Remark_RwRoadChevron" id="Remark_RwRoadChevron"></td>                    
                                        <td><input type="file" name="Remark_RwRoadChevron" id="Remark_RwRoadChevron"></td>                    
                                      </tr>
                            
                                      <tr>
                                        <td >Flexible post</td>
                                        <td >2</td>
                                        <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="RwRoadPost" id="RwRoadPost"></td>            
                                        <td><input type="text" name="Remark_RwRoadPost" id="Remark_RwRoadPost"></td>                    
                                        <td><input type="file" name="Remark_RwRoadPost" id="Remark_RwRoadPost"></td>                    
                                      </tr>
                          
                                      <tr>
                                        <td >Impact attenuator</td>
                                        <td >2</td>
                                        <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="RwRoadImpact" id="RwRoadImpact"></td>            
                                        <td><input type="text" name="RwRoadImpact" id="RwRoadImpact"></td>                    
                                        <td><input type="file" name="RwRoadImpact" id="RwRoadImpact"></td>                    
                                      </tr>
                          
                                      <tr>
                                        <td >Signages</td>
                                        <td >2</td>
                                        <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="RwRoadSignages" id="RwRoadSignages"></td>            
                                        <td><input type="text" name="Remark_RwRoadSignages" id="Remark_RwRoadSignages"></td>                    
                                        <td><input type="file" name="Remark_RwRoadSignages" id="Remark_RwRoadSignages"></td>                    
                                      </tr>
                          
                                      <tr>
                                        <td >Amber light</td>
                                        <td >2</td>
                                        <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="RwRoadAmber" id="RwRoadAmber"></td>            
                                        <td><input type="text" name="Remark_RwRoadAmber" id="Remark_RwRoadAmber"></td>                    
                                        <td><input type="file" name="Remark_RwRoadAmber" id="Remark_RwRoadAmber"></td>                    
                                      </tr>
                          
                                      <tr>
                                        <td >Traffic light</td>
                                        <td >2</td>
                                        <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="RwRoadTraffic" id="RwRoadTraffic"></td>            
                                        <td><input type="text" name="RwRoadTraffic" id="RwRoadTraffic"></td>                    
                                        <td><input type="file" name="RwRoadTraffic" id="RwRoadTraffic"></td>                    
                                      </tr>
                          
                                      <tr>
                                        <td >Street light</td>
                                        <td >2</td>
                                        <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="RwRoadStreet" id="RwRoadStreet"></td>            
                                        <td><input type="text" name="Remark_RwRoadStreet" id="Remark_RwRoadStreet"></td>                    
                                        <td><input type="file" name="Remark_RwRoadStreet" id="Remark_RwRoadStreet"></td>                    
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
                      
                                </tbody>
                              </table>
                      
                      
                              <div align="center" class="mt-3">
                                <button class="btn btn-primary" type="submit" title="Simpan">Simpan</button>
                                <button class="btn btn-primary" type="submit" title="Simpan">Sah</button>
                                <button class="btn btn-primary" type="submit" title="Simpan">Jana Keputusan</button>
                                <button class="btn btn-primary" type="submit" title="Simpan">Jana Sijil</button>
                                {{-- <a href="/penilaian_reka_bentuk_jalan/isi_skor_kad_page2" type="button" class="btn btn-primary">Seterusnya</a>           --}}
                              </div>
                        
                             
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
                    <h2 class="h2 mb-3">BORANG PERMOHONAN RAYUAN GPSS JALAN</h2>
                </div>

                <div class="col">
                    <div class="row mb-3">
                        <div class="col">
                            <nav style="--falcon-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%23748194'/%3E%3C/svg%3E&#34;);"
                                aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item text-dark-green-jkr" style="font-weight: 700" aria-current="page">
                                        Electrical Works (Ew)
                                    </li>
                                </ol>
                            </nav>
                        </div>
                      </div>
                      
                      <div class="row3 mx-1  text-center">
                        <form action= "/penilaian_reka_bentuk_gpss/simpan_skor_penilaian_elektrikal/{id}" method="post" enctype="multipart/form-data">
                          @method('POST')
                            @csrf
                      
                            <div class="col">
                              <table class="table table-bordered line-table text-center" style="width: 100%">
                                <thead class="text-white bg-orange-jkr">
                                  
                                  <tr>
                                    <th colspan="8">List of products for electrical works(EW)</th>
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
                                <tbody>
                                  
                                  <tr class="text-center">
                                    <td rowspan="1" >1</td>
                                    <td rowspan="1">Generator set</td>
                                    <td >Generator set</td>
                                    <td >2</td>
                                    <td>
                                      <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwGeneratorSet" id="EwGeneratorSet">
                                    </td>                       
                                    <td><input type="text"></td>                    
                                    <td><input type="file"></td>                    
                                  </tr>
                        
                                  
                        
                        
                                  <tr class="text-center">
                                      <td rowspan="1" >2</td>
                                      <td rowspan="1">Transformer</td>
                                      <td >11kV dry type distribution transformer</td>
                                      <td >2</td>
                                      <td>
                                        <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwTransformer" id="EwTransformer">
                                      </td>            
                                               
                                      <td><input type="text"></td>                    
                                      <td><input type="file"></td>                    
                                    </tr>
                      
                                    <tr class="text-center">
                                      <td rowspan="1" >3</td>
                                      <td rowspan="1">Surge Protective Device (PSD)</td>
                                      <td >Surge Protective Device (PSD)</td>
                                      <td >2</td>
                                      <td>
                                        <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwSPD" id="EwSPD">
                                      </td>            
                                                
                                      <td><input type="text"></td>                    
                                      <td><input type="file"></td>                    
                                    </tr>
                      
                                    <tr class="text-center">
                                      <td rowspan="4" >5</td>
                                      <td rowspan="4">Protection relays</td>
                                      <td >Combined overcurrent and earth fault relay</td>
                                      <td >2</td>
                                      <td>
                                        <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwRelayCombined" id="EwRelayCombined">
                                      </td>            
                                               
                                      <td><input type="text"></td>                    
                                      <td><input type="file"></td>                    
                                    </tr>
                      
                                    <tr>
                                      <td >Overcurrent relay</td>
                                      <td >2</td>
                                      <td>
                                        <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwRelayOvercurrent" id="EwRelayOvercurrent">
                                      </td>            
                                                
                                      <td><input type="text"></td>                    
                                      <td><input type="file"></td>                    
                                    </tr>
                      
                                    <tr>
                                      <td >Earth fault relay</td>
                                      <td >2</td>
                                      <td>
                                        <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwRelayEarthFault" id="EwRelayEarthFault">
                                      </td>            
                                               
                                      <td><input type="text"></td>                    
                                      <td><input type="file"></td>                    
                                    </tr>
                      
                                    <tr>
                                      <td >Earth fault leakage</td>
                                      <td >2</td>
                                      <td>
                                        <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwRelayEarthLeakage" id="EwRelayEarthLeakage">
                                      </td>            
                                              
                                      <td><input type="text"></td>                    
                                      <td><input type="file"></td>                    
                                    </tr>
                      
                                    <tr class="text-center">
                                      <td rowspan="3" >5</td>
                                      <td rowspan="3">Circuit breaker</td>
                                      <td >Air Circuit Breaker(ACB)</td>
                                      <td >2</td>
                                      <td>
                                        <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwCircuitACB" id="EwCircuitACB">
                                      </td>            
                                             
                                      <td><input type="text"></td>                    
                                      <td><input type="file"></td>                    
                                    </tr>
                      
                                    <tr>
                                      <td >Moulded Case Circuit Breaker(MCCB)</td>
                                      <td >2</td>
                                      <td>
                                        <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwCircuitMCCB" id="EwCircuitMCCB">
                                      </td>            
                                             
                                      <td><input type="text"></td>                    
                                      <td><input type="file"></td>                    
                                    </tr>
                      
                                    <tr>
                                      <td >Miniature Circuit Breaker(MCB)</td>
                                      <td >2</td>
                                      <td>
                                        <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwCircuitMCB" id="EwCircuitMCB">
                                      </td>            
                                                
                                      <td><input type="text"></td>                    
                                      <td><input type="file"></td>                    
                                    </tr>
                      
                                    <tr class="text-center">
                                      <td rowspan="1" >6</td>
                                      <td rowspan="1">Residual current devices</td>
                                      <td >Residual Current Operated Circuit Breaker with Integral o/c protection(RCBO)</td>
                                      <td >2</td>
                                      <td><input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwResidualRCBO" id="EwResidualRCBO"></td>            
                                                
                                      <td><input type="text"></td>                    
                                      <td><input type="file"></td>                    
                                    </tr>
                      
                                    <tr class="text-center">
                                      <td rowspan="5" >7</td>
                                      <td rowspan="5">Switchboard</td>
                                      <td >Metal enclosure</td>
                                      <td >2</td>
                                      <td><input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwResidualRCBO" id="EwResidualRCBO"></td>            
                                               
                                      <td><input type="text"></td>                    
                                      <td><input type="file"></td>                    
                                    </tr>
                      
                                    <tr>
                                      <td >Busbar support</td>
                                      <td >2</td>
                                      <td><input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwSwitchboardBusbar" id="EwSwitchboardBusbar"></td>            
                                                
                                      <td><input type="text"></td>                    
                                      <td><input type="file"></td>                    
                                    </tr>
                      
                                    <tr>
                                      <td >Cables</td>
                                      <td >2</td>
                                      <td>
                                        <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwSwitchboardCables" id="EwSwitchboardCables">
                                      </td>            
                                                
                                      <td><input type="text"></td>                    
                                      <td><input type="file"></td>                    
                                    </tr>
                      
                                    <tr>
                                      <td >Busbar</td>
                                      <td >2</td>
                                      <td>
                                        <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwSwitchboardCables" id="EwSwitchboardCables">
                                      </td>            
                                              
                                      <td><input type="text"></td>                    
                                      <td><input type="file"></td>                    
                                    </tr>
                      
                                    <tr>
                                      <td >Consumer unit</td>
                                      <td >2</td>
                                      <td>
                                        <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwSwitchboardConsumer" id="EwSwitchboardConsumer">
                                      </td>            
                                             
                                      <td><input type="text"></td>                    
                                      <td><input type="file"></td>                    
                                    </tr>
                      
                                    <tr class="text-center">
                                      <td rowspan="4" >8</td>
                                      <td rowspan="4">Lamp</td>
                                      <td >Compact fluorescent lamp(CFL)</td>
                                      <td >2</td>
                                      <td><input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwLampCFL" id="EwLampCFL"></td>            
                                               
                                      <td><input type="text"></td>                    
                                      <td><input type="file"></td>                    
                                    </tr>
                      
                                    <tr>
                                      <td >Fluorescent lamp(T5)</td>
                                      <td >2</td>
                                      <td><input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwLampT5" id="EwLampT5"></td>            
                                               
                                      <td><input type="text"></td>                    
                                      <td><input type="file"></td>                    
                                    </tr>
                      
                                    <tr>
                                      <td >LED tubes</td>
                                      <td >2</td>
                                      <td>
                                        <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwLampLEDTube" id="EwLampLEDTube">
                                      </td>            
                                                
                                      <td><input type="text"></td>                    
                                      <td><input type="file"></td>                    
                                    </tr>
                      
                                    <tr>
                                      <td >LED bulb</td>
                                      <td >2</td>
                                      <td>
                                        <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwLampLEDBulb" id="EwLampLEDBulb">
                                      </td>            
                                                
                                      <td><input type="text"></td>                    
                                      <td><input type="file"></td>                    
                                    </tr>
                      
                                    <tr class="text-center">
                                      <td rowspan="6" >9</td>
                                      <td rowspan="6">Indoor luminaires</td>
                                      <td >LED downlight</td>
                                      <td >2</td>
                                      <td><input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwIndoorLEDDownlight" id="EwIndoorLEDDownlight"></td>            
                                                  
                                      <td><input type="text"></td>                    
                                      <td><input type="file"></td>                    
                                    </tr>
                      
                                    <tr>
                                      <td >LED recessed luminaires</td>
                                      <td >2</td>
                                      <td><input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwIndoorLEDRecessed" id="EwIndoorLEDRecessed"></td>            
                                                
                                      <td><input type="text"></td>                    
                                      <td><input type="file"></td>                    
                                    </tr>
                      
                                    <tr>
                                      <td >Fluorescent luminaires(T5)</td>
                                      <td >2</td>
                                      <td>
                                        <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwIndoorT5" id="EwIndoorT5">
                                      </td>            
                                                
                                      <td><input type="text"></td>                    
                                      <td><input type="file"></td>                    
                                    </tr>
                      
                                    <tr>
                                      <td >Fluorescent luminaires(T8) c/w electronic ballast</td>
                                      <td >2</td>
                                      <td>
                                        <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwIndoorT8" id="EwIndoorT8">
                                      </td>            
                                                
                                      <td><input type="text"></td>                    
                                      <td><input type="file"></td>                    
                                    </tr>
                      
                                    <tr>
                                      <td >Electronic ballast</td>
                                      <td >2</td>
                                      <td>
                                        <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwIndoorBallast" id="EwIndoorBallast">
                                      </td>            
                                                
                                      <td><input type="text"></td>                    
                                      <td><input type="file"></td>                    
                                    </tr>
                      
                                    <tr>
                                      <td >LED driver</td>
                                      <td >2</td>
                                      <td>
                                        <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwIndoorLEDDriver" id="EwIndoorLEDDriver">
                                      </td>            
                                                
                                      <td><input type="text"></td>                    
                                      <td><input type="file"></td>                    
                                    </tr>
                      
                                    <tr class="text-center">
                                      <td rowspan="5" >10</td>
                                      <td rowspan="5">Outdoor luminaires</td>
                                      <td >Road lighting luminaires(HPSV)</td>
                                      <td >2</td>
                                      <td><input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwOutdoorHPSV" id="EwOutdoorHPSV"></td>            
                                                 
                                      <td><input type="text"></td>                    
                                      <td><input type="file"></td>                    
                                    </tr>
                      
                                    <tr>
                                      <td >Road lighting luminaires(Induction)</td>
                                      <td >2</td>
                                      <td><input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwOutdoorInduction" id="EwOutdoorInduction"></td>            
                                                
                                      <td><input type="text"></td>                    
                                      <td><input type="file"></td>                    
                                    </tr>
                      
                                    <tr>
                                      <td >Road lighting luminaires(LED)</td>
                                      <td >2</td>
                                      <td>
                                        <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwOutdoorLED" id="EwOutdoorLED">
                                      </td>            
                                   
                                      <td><input type="text"></td>                    
                                      <td><input type="file"></td>                    
                                    </tr>
                      
                                    <tr>
                                      <td >Ballast for discharge lamp</td>
                                      <td >2</td>
                                      <td>
                                        <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwOutdoorBallast" id="EwOutdoorBallast">
                                      </td>            
                                               
                                      <td><input type="text"></td>                    
                                      <td><input type="file"></td>                    
                                    </tr>
                      
                                    <tr>
                                      <td >Lighting columns</td>
                                      <td >2</td>
                                      <td>
                                        <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwOutdoorLighting" id="EwOutdoorLighting">
                                      </td>            
                                                
                                      <td><input type="text"></td>                    
                                      <td><input type="file"></td>                    
                                    </tr>
                      
                                    <tr class="text-center">
                                      <td rowspan="3" >11</td>
                                      <td rowspan="3">Traffic light</td>
                                      <td > Controller</td>
                                      <td >2</td>
                                      <td><input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwTrafficController" id="EwTrafficController"></td>            
                                               
                                      <td><input type="text"></td>                    
                                      <td><input type="file"></td>                    
                                    </tr>
                      
                                    <tr>
                                      <td >Traffic signal module</td>
                                      <td >2</td>
                                      <td><input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwTrafficSignal" id="EwTrafficSignal"></td>            
                                              
                                      <td><input type="text"></td>                    
                                      <td><input type="file"></td>                    
                                    </tr>
                      
                                    <tr>
                                      <td >Lighting columns</td>
                                      <td >2</td>
                                      <td>
                                        <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwTrafficLighting" id="EwTrafficLighting">
                                      </td>            
                                                
                                      <td><input type="text"></td>                    
                                      <td><input type="file"></td>                    
                                    </tr>
                      
                                    <tr class="text-center">
                                      <td rowspan="2" >12</td>
                                      <td rowspan="2">Switches and socket outlet</td>
                                      <td > Switches</td>
                                      <td >2</td>
                                      <td><input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwSwitches" id="EwSwitches"></td>            
                                                
                                      <td><input type="text"></td>                    
                                      <td><input type="file"></td>                    
                                    </tr>
                      
                                    <tr>
                                      <td >Switches socket outlet</td>
                                      <td >2</td>
                                      <td><input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwSwitchesSocket" id="EwSwitchesSocket"></td>            
                                                
                                      <td><input type="text"></td>                    
                                      <td><input type="file"></td>                    
                                    </tr>
                      
                                    <tr class="text-center">
                                      <td rowspan="3" >13</td>
                                      <td rowspan="3">Cables</td>
                                      <td > Low voltage cable</td>
                                      <td >2</td>
                                      <td><input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwCablesLow" id="EwCablesLow"></td>            
                                                
                                      <td><input type="text"></td>                    
                                      <td><input type="file"></td>                    
                                    </tr>
                      
                                    <tr>
                                      <td >Medium voltage cable</td>
                                      <td >2</td>
                                      <td><input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwCablesMedium" id="EwCablesMedium"></td>            
                                                
                                      <td><input type="text"></td>                    
                                      <td><input type="file"></td>                    
                                    </tr>
                      
                                    <tr>
                                      <td >High voltage cable</td>
                                      <td >2</td>
                                      <td>
                                        <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwCablesHigh" id="EwCablesHigh">
                                      </td>            
                                                
                                      <td><input type="text"></td>                    
                                      <td><input type="file"></td>                    
                                    </tr>
                      
                                    <tr class="text-center">
                                      <td rowspan="4" >14</td>
                                      <td rowspan="4">G. S conduit & High Impact PVC conduit/trunking/tray</td>
                                      <td >Rigid high impact PVC conduit</td>
                                      <td >2</td>
                                      <td>
                                        <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwTrayPVC" id="EwTrayPVC">
                                      </td>            
                                                
                                      <td><input type="text"></td>                    
                                      <td><input type="file"></td>                    
                                    </tr>
                        
                                    <tr>
                                      <td >Galvanised steel conduit</td>
                                      <td >2</td>
                                      <td>
                                        <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwTrayGalvanised" id="EwTrayGalvanised">
                                      </td>            
                                                
                                      <td><input type="text"></td>                    
                                      <td><input type="file"></td>                    
                                    </tr>
                        
                                    <tr>
                                      <td >Trunking</td>
                                      <td >2</td>
                                      <td>
                                        <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwTrayTrunking" id="EwTrayTrunking">
                                      </td>            
                                                 
                                      <td><input type="text"></td>                    
                                      <td><input type="file"></td>                    
                                    </tr>
                        
                                    <tr>
                                      <td >Cable tray</td>
                                      <td >2</td>
                                      <td>
                                        <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwTrayCableTray" id="EwTrayCableTray">
                                      </td>            
                                               
                                      <td><input type="text"></td>                    
                                      <td><input type="file"></td>                    
                                    </tr>
                          
                                      <tr class="text-center">
                                        <td rowspan="3" >15</td>
                                        <td rowspan="3">Fan</td>
                                        <td >Ceiling fan</td>
                                        <td >2</td>
                                        <td>
                                          <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwFanCeiling" id="EwFanCeiling">
                                        </td>            
                                                   
                                        <td><input type="text"></td>                    
                                        <td><input type="file"></td>                    
                                      </tr>
                        
                                      <tr>
                                        <td >Wall fan</td>
                                        <td >2</td>
                                        <td>
                                          <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwFanWall" id="EwFanWall">
                                        </td>            
                                                 
                                        <td><input type="text"></td>                    
                                        <td><input type="file"></td>                    
                                      </tr>
                        
                                      <tr>
                                        <td >Oscillating fan</td>
                                        <td >2</td>
                                        <td>
                                          <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwFanOscillating" id="EwFanOscillating">
                                        </td>            
                                                  
                                        <td><input type="text"></td>                    
                                        <td><input type="file"></td>                    
                                      </tr>
                        
                                      <tr class="text-center">
                                        <td rowspan="2" >16</td>
                                        <td rowspan="2">Power factor correction</td>
                                        <td >Capacitor for power factor correction</td>
                                        <td >2</td>
                                        <td>
                                          <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwPowerCapasitor" id="EwPowerCapasitor">
                                        </td>            
                                                   
                                        <td><input type="text"></td>                    
                                        <td><input type="file"></td>                    
                                      </tr>
                        
                                      <tr>
                                        <td >Power factor regulator</td>
                                        <td >2</td>
                                        <td>
                                          <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwPowerRegulator" id="EwPowerRegulator">
                                        </td>            
                                               
                                        <td><input type="text"></td>                    
                                        <td><input type="file"></td>                    
                                      </tr>
                        
                                      <tr class="text-center">
                                        <td rowspan="2" >17</td>
                                        <td rowspan="2">Emergency light & luminous sign</td>
                                        <td >'KELUAR' sign LED</td>
                                        <td >2</td>
                                        <td>
                                          <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwEmergencyKeluar" id="EwEmergencyKeluar">
                                        </td>            
                                                  
                                        <td><input type="text"></td>                    
                                        <td><input type="file"></td>                    
                                      </tr>
                        
                                      <tr>
                                        <td >Emergency light LED</td>
                                        <td >2</td>
                                        <td>
                                          <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwEmergencyLED" id="EwEmergencyLED">
                                        </td>            
                                                   
                                        <td><input type="text"></td>                    
                                        <td><input type="file"></td>                    
                                      </tr>
                        
                                      <tr class="text-center">
                                        <td rowspan="1" >18</td>
                                        <td rowspan="1">Switchgear</td>
                                        <td >11kV metal enclosed Switchgear - VCB</td>
                                        <td >2</td>
                                        <td><input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwSwithcgearVCB" id="EwSwithcgearVCB"></td>            
                                                  
                                        <td><input type="text"></td>                    
                                        <td><input type="file"></td>                    
                                      </tr>
                        
                                      <tr class="text-center">
                                        <td rowspan="4" >19</td>
                                        <td rowspan="4">Renewable energy system</td>
                                        <td >Solar panel</td>
                                        <td >2</td>
                                        <td><input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwRenewableSolar" id="EwRenewableSolar"></td>            
                                                  
                                        <td><input type="text"></td>                    
                                        <td><input type="file"></td>                    
                                      </tr>
                        
                                      <tr>
                                        <td >Battery</td>
                                        <td >2</td>
                                        <td><input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwRenewableBattery" id="EwRenewableBattery"></td>            
                                                  
                                        <td><input type="text"></td>                    
                                        <td><input type="file"></td>                    
                                      </tr>
                        
                                      <tr>
                                        <td >Inverter</td>
                                        <td >2</td>
                                        <td>
                                          <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwRenewableInverter" id="EwRenewableInverter">
                                        </td>            
                                                  
                                        <td><input type="text"></td>                    
                                        <td><input type="file"></td>                    
                                      </tr>
                        
                                      <tr>
                                        <td >Low voltage cable</td>
                                        <td >2</td>
                                        <td>
                                          <input onblur="findTotalmarkahPREw()" type="number" min="0" max="2" class="elektrikal" name="EwRenewableLowCable" id="EwRenewableLowCable">
                                        </td>            
                                                   
                                        <td><input type="text"></td>                    
                                        <td><input type="file"></td>                    
                                      </tr>
                      
                                      <tr style="display: none">
                                        <td><input type="text" name="markahPREw" id="markahPREw" /></td>
                                      </tr>


                                      <thead class="text-white bg-orange-jkr">
                                        <tr>          
                                          <th colspan="8">Green Product Scoring Sheet</th>
                                        </tr>
                                        <tr>
                                          <th colspan="8">List of products for road structure works(SW)</th>
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

                                      {{-- sambungan --}}
                                      <tr class="text-center">
                                        <td rowspan="6" >1</td>
                                        <td rowspan="6">Road structure (bridge)</td>
                                        <td >Abutment</td>
                                        <td >2</td>
                                        <td><input onblur="findTotal()" type="number" min="0" max="2" min="0" max="2" class="arkitek" name="STwBridgeAbutment" id="STwBridgeAbutment"></td>            
                                        <td><input type="text" name="Remark_STwBridgeAbutment" id="Remark_STwBridgeAbutment"></td>                    
                                        <td><input type="file" name="Remark_STwBridgeAbutment" id="Remark_STwBridgeAbutment"></td>                    
                                      </tr>
                            
                                      <tr>
                                        <td >Pier</td>
                                        <td >2</td>
                                        <td><input onblur="findTotal()" type="number" min="0" max="2" min="0" max="2" class="arkitek" name="STwStructureBridgePier" id="STwStructureBridgePier"></td>            
                                        <td><input type="text" name="Remark_STwStructureBridgePier" id="Remark_STwStructureBridgePier"></td>                    
                                        <td><input type="file" name="Remark_STwStructureBridgePier" id="Remark_STwStructureBridgePier"></td>                    
                                      </tr>
                            
                                      <tr>
                                        
                                        <td >Bearing pad</td>
                                        <td >2</td>
                                        <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="STwStructureBridgeBearing" id="STwStructureBridgeBearing"></td>            
                                        <td><input type="text" name="Remark_STwStructureBridgeBearing" id="Remark_STwStructureBridgeBearing"></td>                    
                                        <td><input type="file" name="Remark_STwStructureBridgeBearing" id="Remark_STwStructureBridgeBearing"></td>                    
                                      </tr>
                            
                                      <tr>
                                        <td >Decking</td>
                                        <td >2</td>
                                        <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="STwStructureBridgeDecking" id="STwStructureBridgeDecking"></td>            
                                        <td><input type="text" name="Remark_STwStructureBridgeDecking" id="Remark_STwStructureBridgeDecking"></td>                    
                                        <td><input type="file" name="Remark_STwStructureBridgeDecking" id="Remark_STwStructureBridgeDecking"></td>                    
                                      </tr>
                          
                                      <tr>
                                        <td >Expansion joint</td>
                                        <td >2</td>
                                        <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="STwStructureBridgeExpansion" id="STwStructureBridgeExpansion"></td>            
                                        <td><input type="text" name="Remark_STwStructureBridgeExpansion" id="Remark_STwStructureBridgeExpansion"></td>                    
                                        <td><input type="file" name="Remark_STwStructureBridgeExpansion" id="Remark_STwStructureBridgeExpansion"></td>                    
                                      </tr>
                          
                                      <tr>
                                        <td >Parapet wall</td>
                                        <td >2</td>
                                        <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="STwStructureBridgeParapet" id="STwStructureBridgeParapet"></td>            
                                        <td><input type="text" name="Remark_STwStructureBridgeParapet" id="Remark_STwStructureBridgeParapet"></td>                    
                                        <td><input type="file" name="Remark_STwStructureBridgeParapet" id="Remark_STwStructureBridgeParapet"></td>                    
                                      </tr>
                          
                           
                          
                                      {{-- dye tak show --}}
                                      <tr style="display: none">
                                        <td>markahPRAwRoof<input type="text" name="markahPRAwRoof" id="markahPRAwRoof" /></td>            
                                      </tr>
                          
                                      <tr style="display: none">
                                        <td>markahPRAwRoofConstruction<input type="text" name="Cons_markahPRAwRoof" id="Cons_markahPRAwRoof" /></td>            
                                      </tr>
                          
                                      <tr style="display: none">
                                        <td>markahPRAwRoofAwarded<input type="text" name="Awarded_markahPRAwRoof" id="Awarded_markahPRAwRoof" /></td>            
                                      </tr>

                                      <thead class="text-white bg-orange-jkr">
                                        <tr>          
                                          <th colspan="8">Green Product Scoring Sheet</th>
                                        </tr>
                                        <tr>
                                          <th colspan="8">List of products for road structure works(RW)</th>
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

                                      {{-- sambungan jalan --}}
                                      <tr class="text-center">
                                        <td rowspan="6" >1</td>
                                        <td rowspan="6">Common items</td>
                                        <td >Cement</td>
                                        <td >2</td>
                                        <td><input onblur="findTotal()" type="number" min="0" max="2" min="0" max="2" class="arkitek" name="RwCommonCement" id="RwCommonCement"></td>            
                                        <td><input type="text" name="Remark_RwCommonCement" id="Remark_RwCommonCement"></td>                    
                                        <td><input type="file" name="Remark_RwCommonCement" id="Remark_RwCommonCement"></td>                    
                                      </tr>
                            
                                      <tr>
                                        <td >Formwork</td>
                                        <td >2</td>
                                        <td><input onblur="findTotal()" type="number" min="0" max="2" min="0" max="2" class="arkitek" name="RwCommonFormwork" id="RwCommonFormwork"></td>            
                                        <td><input type="text" name="Remark_RwCommonFormwork" id="Remark_RwCommonFormwork"></td>                    
                                        <td><input type="file" name="Remark_RwCommonFormwork" id="Remark_RwCommonFormwork"></td>                    
                                      </tr>
                            
                                      <tr>
                                        
                                        <td >Steel fabric</td>
                                        <td >2</td>
                                        <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="RwCommonSteel" id="RwCommonSteel"></td>            
                                        <td><input type="text" name="Remark_RwCommonSteel" id="Remark_RwCommonSteel"></td>                    
                                        <td><input type="file" name="Remark_RwCommonSteel" id="Remark_RwCommonSteel"></td>                    
                                      </tr>
                            
                                      <tr>
                                        <td >Piles</td>
                                        <td >2</td>
                                        <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="RwCommonPiles" id="RwCommonPiles"></td>            
                                        <td><input type="text" name="Remark_RwCommonPiles" id="Remark_RwCommonPiles"></td>                    
                                        <td><input type="file" name="Remark_RwCommonPiles" id="Remark_RwCommonPiles"></td>                    
                                      </tr>
                          
                                      <tr>
                                        <td >Steel reinforcement bar</td>
                                        <td >2</td>
                                        <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="RwCommonSteelBar" id="RwCommonSteelBar"></td>            
                                        <td><input type="text" name="Remark_RwCommonSteelBar" id="Remark_RwCommonSteelBar"></td>                    
                                        <td><input type="file" name="Remark_RwCommonSteelBar" id="Remark_RwCommonSteelBar"></td>                    
                                      </tr>
                          
                                      <tr>
                                        <td >Silicone sealant</td>
                                        <td >2</td>
                                        <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="RwCommonSilicone" id="RwCommonSilicone"></td>            
                                        <td><input type="text" name="Remark_RwCommonSilicone" id="Remark_RwCommonSilicone"></td>                    
                                        <td><input type="file" name="Remark_RwCommonSilicone" id="Remark_RwCommonSilicone"></td>                    
                                      </tr>
                          
                                      <tr class="text-center">
                                        <td rowspan="6" >2</td>
                                        <td rowspan="6">Slope protection/geotechnical works</td>
                                        <td >Geotextile</td>
                                        <td >2</td>
                                        <td><input onblur="findTotal()" type="number" min="0" max="2" min="0" max="2" class="arkitek" name="RwSlopeGeotextile" id="RwSlopeGeotextile"></td>            
                                        <td><input type="text" name="Remark_RwSlopeGeotextile" id="Remark_RwSlopeGeotextile"></td>                    
                                        <td><input type="file" name="Remark_RwSlopeGeotextile" id="Remark_RwSlopeGeotextile"></td>                    
                                      </tr>
                            
                                      <tr>
                                        <td >Geogrid</td>
                                        <td >2</td>
                                        <td><input onblur="findTotal()" type="number" min="0" max="2" min="0" max="2" class="arkitek" name="RwSlopeGeogrid" id="RwSlopeGeogrid"></td>            
                                        <td><input type="text" name="Remark_RwSlopeGeogrid" id="Remark_RwSlopeGeogrid"></td>                    
                                        <td><input type="file" name="Remark_RwSlopeGeogrid" id="Remark_RwSlopeGeogrid"></td>                    
                                      </tr>
                            
                                      <tr>
                                        
                                        <td >Prefabricated vertical</td>
                                        <td >2</td>
                                        <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="RwSlopePrefabricated" id="RwSlopePrefabricated"></td>            
                                        <td><input type="text" name="Remark_RwSlopePrefabricated" id="Remark_RwSlopePrefabricated"></td>                    
                                        <td><input type="file" name="Remark_RwSlopePrefabricated" id="Remark_RwSlopePrefabricated"></td>                    
                                      </tr>
                            
                                      <tr>
                                        <td >Blanket</td>
                                        <td >2</td>
                                        <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="RwSlopeBlanket" id="RwSlopeBlanket"></td>            
                                        <td><input type="text" name="Remark_RwSlopeBlanket" id="Remark_RwSlopeBlanket"></td>                    
                                        <td><input type="file" name="Remark_RwSlopeBlanket" id="Remark_RwSlopeBlanket"></td>                    
                                      </tr>
                          
                                      <tr>
                                        <td >Sheeting</td>
                                        <td >2</td>
                                        <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="" id=""></td>            
                                        <td><input type="text" name="" id=""></td>                    
                                        <td><input type="file" name="" id=""></td>                    
                                      </tr>
                          
                                      <tr>
                                        <td >Fibro mat</td>
                                        <td >2</td>
                                        <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="RwSlopeFibroMat" id="RwSlopeFibroMat"></td>            
                                        <td><input type="text" name="Remark_RwSlopeFibroMat" id="Remark_RwSlopeFibroMat"></td>                    
                                        <td><input type="file" name="Remark_RwSlopeFibroMat" id="Remark_RwSlopeFibroMat"></td>                    
                                      </tr>
                          
                                      <tr class="text-center">
                                        <td rowspan="9" >3</td>
                                        <td rowspan="9">Drainage works</td>
                                        <td >Precast reinforced</td>
                                        <td >2</td>
                                        <td><input onblur="findTotal()" type="number" min="0" max="2" min="0" max="2" class="arkitek" name="RwDrainagePrecast" id="RwDrainagePrecast"></td>            
                                        <td><input type="text" name="Remark_RwDrainagePrecast" id="Remark_RwDrainagePrecast"></td>                    
                                        <td><input type="file" name="Remark_RwDrainagePrecast" id="Remark_RwDrainagePrecast"></td>                    
                                      </tr>
                            
                                      <tr>
                                        <td >Pipes</td>
                                        <td >2</td>
                                        <td><input onblur="findTotal()" type="number" min="0" max="2" min="0" max="2" class="arkitek" name="RwDrainagePipes" id="RwDrainagePipes"></td>            
                                        <td><input type="text" name="Remark_RwDrainagePipes" id="Remark_RwDrainagePipes"></td>                    
                                        <td><input type="file" name="Remark_RwDrainagePipes" id="Remark_RwDrainagePipes"></td>                    
                                      </tr>
                            
                                      <tr>
                                        
                                        <td >Drains</td>
                                        <td >2</td>
                                        <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="RwDrainageDrains" id="RwDrainageDrains"></td>            
                                        <td><input type="text" name="Remark_RwDrainageDrains" id="Remark_RwDrainageDrains"></td>                    
                                        <td><input type="file" name="Remark_RwDrainageDrains" id="Remark_RwDrainageDrains"></td>                    
                                      </tr>
                            
                                      <tr>
                                        <td >Bricks</td>
                                        <td >2</td>
                                        <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="RwDrainageBricks" id="RwDrainageBricks"></td>            
                                        <td><input type="text" name="Remark_RwDrainageBricks" id="Remark_RwDrainageBricks"></td>                    
                                        <td><input type="file" name="Remark_RwDrainageBricks" id="Remark_RwDrainageBricks"></td>                    
                                      </tr>
                          
                                      <tr>
                                        <td >Precast subsoil drain</td>
                                        <td >2</td>
                                        <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="RwDrainagePrecastDrain" id="RwDrainagePrecastDrain"></td>            
                                        <td><input type="text" name="RwDrainagePrecastDrain" id="RwDrainagePrecastDrain"></td>                    
                                        <td><input type="file" name="RwDrainagePrecastDrain" id="RwDrainagePrecastDrain"></td>                    
                                      </tr>
                          
                                      <tr>
                                        <td >Bricks</td>
                                        <td >2</td>
                                        <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="RwDrainageBricks" id="RwDrainageBricks"></td>            
                                        <td><input type="text" name="Remark_RwDrainageBricks" id="Remark_RwDrainageBricks"></td>                    
                                        <td><input type="file" name="Remark_RwDrainageBricks" id="Remark_RwDrainageBricks"></td>                    
                                      </tr>
                          
                                      <tr>
                                        <td >Gabion cage</td>
                                        <td >2</td>
                                        <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="RwDrainageGabionCage" id="RwDrainageGabionCage"></td>            
                                        <td><input type="text" name="Remark_RwDrainageGabionCage" id="Remark_RwDrainageGabionCage"></td>                    
                                        <td><input type="file" name="Remark_RwDrainageGabionCage" id="Remark_RwDrainageGabionCage"></td>                    
                                      </tr>
                          
                                      <tr>
                                        <td >Grating</td>
                                        <td >2</td>
                                        <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="RwDrainageGrating" id="RwDrainageGrating"></td>            
                                        <td><input type="text" name="RwDrainageGrating" id="RwDrainageGrating"></td>                    
                                        <td><input type="file" name="RwDrainageGrating" id="RwDrainageGrating"></td>                    
                                      </tr>
                          
                                      <tr>
                                        <td >Water stop</td>
                                        <td >2</td>
                                        <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="RwDrainageWaterStop" id="RwDrainageWaterStop"></td>            
                                        <td><input type="text" name="Remark_RwDrainageWaterStop" id="Remark_RwDrainageWaterStop"></td>                    
                                        <td><input type="file" name="Remark_RwDrainageWaterStop" id="Remark_RwDrainageWaterStop"></td>                    
                                      </tr>
                          
                                      <tr class="text-center">
                                        <td rowspan="10" >4</td>
                                        <td rowspan="10">Pavements</td>
                                        <td >Prime coat</td>
                                        <td >2</td>
                                        <td><input onblur="findTotal()" type="number" min="0" max="2" min="0" max="2" class="arkitek" name="RwPavementsPrime" id="RwPavementsPrime"></td>            
                                        <td><input type="text" name="Remark_RwPavementsPrime" id="Remark_RwPavementsPrime"></td>                    
                                        <td><input type="file" name="Remark_RwPavementsPrime" id="Remark_RwPavementsPrime"></td>                    
                                      </tr>
                            
                                      <tr>
                                        <td >Tack coat</td>
                                        <td >2</td>
                                        <td><input onblur="findTotal()" type="number" min="0" max="2" min="0" max="2" class="arkitek" name="RwPavementsTack" id="RwPavementsTack"></td>            
                                        <td><input type="text" name="Remark_RwPavementsTack" id="Remark_RwPavementsTack"></td>                    
                                        <td><input type="file" name="Remark_RwPavementsTack" id="Remark_RwPavementsTack"></td>                    
                                      </tr>
                            
                                      <tr>
                                        
                                        <td >Bitumen</td>
                                        <td >2</td>
                                        <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="RwPavementsBitumen" id="RwPavementsBitumen"></td>            
                                        <td><input type="text" name="Remark_RwPavementsBitumen" id="Remark_RwPavementsBitumen"></td>                    
                                        <td><input type="file" name="Remark_RwPavementsBitumen" id="Remark_RwPavementsBitumen"></td>                    
                                      </tr>
                            
                                      <tr>
                                        <td >Bitumen additives</td>
                                        <td >2</td>
                                        <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="RwPavementsAdditives" id="RwPavementsAdditives"></td>            
                                        <td><input type="text" name="Remark_RwPavementsAdditives" id="Remark_RwPavementsAdditives"></td>                    
                                        <td><input type="file" name="Remark_RwPavementsAdditives" id="Remark_RwPavementsAdditives"></td>                    
                                      </tr>
                          
                                      <tr>
                                        <td >Aggregate</td>
                                        <td >2</td>
                                        <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="RwPavementsAggregate" id="RwPavementsAggregate"></td>            
                                        <td><input type="text" name="RwPavementsAggregate" id="RwPavementsAggregate"></td>                    
                                        <td><input type="file" name="RwPavementsAggregate" id="RwPavementsAggregate"></td>                    
                                      </tr>
                          
                                      <tr>
                                        <td >Cement</td>
                                        <td >2</td>
                                        <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="RwPavementsCement" id="RwPavementsCement"></td>            
                                        <td><input type="text" name="Remark_RwPavementsCement" id="Remark_RwPavementsCement"></td>                    
                                        <td><input type="file" name="Remark_RwPavementsCement" id="Remark_RwPavementsCement"></td>                    
                                      </tr>
                          
                                      <tr>
                                        <td >Reinforcement bar</td>
                                        <td >2</td>
                                        <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="RwPavementsBar" id="RwPavementsBar"></td>            
                                        <td><input type="text" name="Remark_RwPavementsBar" id="Remark_RwPavementsBar"></td>                    
                                        <td><input type="file" name="Remark_RwPavementsBar" id="Remark_RwPavementsBar"></td>                    
                                      </tr>
                          
                                      <tr>
                                        <td >Wire mesh</td>
                                        <td >2</td>
                                        <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="RwPavementsWire" id="RwPavementsWire"></td>            
                                        <td><input type="text" name="RwPavementsWire" id="RwPavementsWire"></td>                    
                                        <td><input type="file" name="RwPavementsWire" id="RwPavementsWire"></td>                    
                                      </tr>
                          
                                      <tr>
                                        <td >Paving block</td>
                                        <td >2</td>
                                        <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="RwPavementsPaving" id="RwPavementsPaving"></td>            
                                        <td><input type="text" name="Remark_RwPavementsPaving" id="Remark_RwPavementsPaving"></td>                    
                                        <td><input type="file" name="Remark_RwPavementsPaving" id="Remark_RwPavementsPaving"></td>                    
                                      </tr>
                          
                                      <tr>
                                        <td >Soil stabiliser</td>
                                        <td >2</td>
                                        <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="RwPavementsSoil" id="RwPavementsSoil"></td>            
                                        <td><input type="text" name="Remark_RwPavementsSoil" id="Remark_RwPavementsSoil"></td>                    
                                        <td><input type="file" name="Remark_RwPavementsSoil" id="Remark_RwPavementsSoil"></td>                    
                                      </tr>
                          
                          
                                      <tr class="text-center">
                                        <td rowspan="18" >5</td>
                                        <td rowspan="18">Road furnitures</td>
                                        <td >Guardrails</td>
                                        <td >2</td>
                                        <td><input onblur="findTotal()" type="number" min="0" max="2" min="0" max="2" class="arkitek" name="RwRoadGuardrails" id="RwRoadGuardrails"></td>            
                                        <td><input type="text" name="Remark_RwRoadGuardrails" id="Remark_RwRoadGuardrails"></td>                    
                                        <td><input type="file" name="Remark_RwRoadGuardrails" id="Remark_RwRoadGuardrails"></td>                    
                                      </tr>
                            
                                      <tr>
                                        <td >Railings</td>
                                        <td >2</td>
                                        <td><input onblur="findTotal()" type="number" min="0" max="2" min="0" max="2" class="arkitek" name="RwRoadRailings" id="RwRoadRailings"></td>            
                                        <td><input type="text" name="Remark_RwRoadRailings" id="Remark_RwRoadRailings"></td>                    
                                        <td><input type="file" name="Remark_RwRoadRailings" id="Remark_RwRoadRailings"></td>                    
                                      </tr>
                            
                                      <tr>
                                        
                                        <td >Precast concrete</td>
                                        <td >2</td>
                                        <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="RwRoadPrecast" id="RwRoadPrecast"></td>            
                                        <td><input type="text" name="Remark_RwRoadPrecast" id="Remark_RwRoadPrecast"></td>                    
                                        <td><input type="file" name="Remark_RwRoadPrecast" id="Remark_RwRoadPrecast"></td>                    
                                      </tr>
                            
                                      <tr>
                                        <td >Wire rope</td>
                                        <td >2</td>
                                        <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="RwRoadWire" id="RwRoadWire"></td>            
                                        <td><input type="text" name="Remark_RwRoadWire" id="Remark_RwRoadWire"></td>                    
                                        <td><input type="file" name="Remark_RwRoadWire" id="Remark_RwRoadWire"></td>                    
                                      </tr>
                          
                                      <tr>
                                        <td >Thermoplastic</td>
                                        <td >2</td>
                                        <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="RwRoadThermoplastic" id="RwRoadThermoplastic"></td>            
                                        <td><input type="text" name="RwRoadThermoplastic" id="RwRoadThermoplastic"></td>                    
                                        <td><input type="file" name="RwRoadThermoplastic" id="RwRoadThermoplastic"></td>                    
                                      </tr>
                          
                                      <tr>
                                        <td >Road paint</td>
                                        <td >2</td>
                                        <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="RwRoadPaint" id="RwRoadPaint"></td>            
                                        <td><input type="text" name="Remark_RwRoadPaint" id="Remark_RwRoadPaint"></td>                    
                                        <td><input type="file" name="Remark_RwRoadPaint" id="Remark_RwRoadPaint"></td>                    
                                      </tr>
                          
                                      <tr>
                                        <td >Anti-glare screen</td>
                                        <td >2</td>
                                        <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="RwRoadAntiGlare" id="RwRoadAntiGlare"></td>            
                                        <td><input type="text" name="Remark_RwRoadAntiGlare" id="Remark_RwRoadAntiGlare"></td>                    
                                        <td><input type="file" name="Remark_RwRoadAntiGlare" id="Remark_RwRoadAntiGlare"></td>                    
                                      </tr>
                          
                                      <tr>
                                        <td >Sound barrier</td>
                                        <td >2</td>
                                        <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="RwRoadSoundBarrier" id="RwRoadSoundBarrier"></td>            
                                        <td><input type="text" name="RwRoadSoundBarrier" id="RwRoadSoundBarrier"></td>                    
                                        <td><input type="file" name="RwRoadSoundBarrier" id="RwRoadSoundBarrier"></td>                    
                                      </tr>
                          
                                      <tr>
                                        <td >Paving block</td>
                                        <td >2</td>
                                        <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="RwRoadPaving" id="RwRoadPaving"></td>            
                                        <td><input type="text" name="Remark_RwRoadPaving" id="Remark_RwRoadPaving"></td>                    
                                        <td><input type="file" name="Remark_RwRoadPaving" id="Remark_RwRoadPaving"></td>                    
                                      </tr>
                          
                                      <tr>
                                        <td >Precast concrete kerb</td>
                                        <td >2</td>
                                        <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="" id=""></td>            
                                        <td><input type="text" name="Remark_" id="Remark_"></td>                    
                                        <td><input type="file" name="Remark_" id="Remark_"></td>                    
                                      </tr>
                            
                                      <tr>
                                        <td >Road stud</td>
                                        <td >2</td>
                                        <td><input onblur="findTotal()" type="number" min="0" max="2" min="0" max="2" class="arkitek" name="RwRoadStud" id="RwRoadStud"></td>            
                                        <td><input type="text" name="Remark_RwRoadStud" id="Remark_RwRoadStud"></td>                    
                                        <td><input type="file" name="Remark_RwRoadStud" id="Remark_RwRoadStud"></td>                    
                                      </tr>
                            
                                      <tr>
                                        
                                        <td >Chevron delineators</td>
                                        <td >2</td>
                                        <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="RwRoadChevron" id="RwRoadChevron"></td>            
                                        <td><input type="text" name="Remark_RwRoadChevron" id="Remark_RwRoadChevron"></td>                    
                                        <td><input type="file" name="Remark_RwRoadChevron" id="Remark_RwRoadChevron"></td>                    
                                      </tr>
                            
                                      <tr>
                                        <td >Flexible post</td>
                                        <td >2</td>
                                        <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="RwRoadPost" id="RwRoadPost"></td>            
                                        <td><input type="text" name="Remark_RwRoadPost" id="Remark_RwRoadPost"></td>                    
                                        <td><input type="file" name="Remark_RwRoadPost" id="Remark_RwRoadPost"></td>                    
                                      </tr>
                          
                                      <tr>
                                        <td >Impact attenuator</td>
                                        <td >2</td>
                                        <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="RwRoadImpact" id="RwRoadImpact"></td>            
                                        <td><input type="text" name="RwRoadImpact" id="RwRoadImpact"></td>                    
                                        <td><input type="file" name="RwRoadImpact" id="RwRoadImpact"></td>                    
                                      </tr>
                          
                                      <tr>
                                        <td >Signages</td>
                                        <td >2</td>
                                        <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="RwRoadSignages" id="RwRoadSignages"></td>            
                                        <td><input type="text" name="Remark_RwRoadSignages" id="Remark_RwRoadSignages"></td>                    
                                        <td><input type="file" name="Remark_RwRoadSignages" id="Remark_RwRoadSignages"></td>                    
                                      </tr>
                          
                                      <tr>
                                        <td >Amber light</td>
                                        <td >2</td>
                                        <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="RwRoadAmber" id="RwRoadAmber"></td>            
                                        <td><input type="text" name="Remark_RwRoadAmber" id="Remark_RwRoadAmber"></td>                    
                                        <td><input type="file" name="Remark_RwRoadAmber" id="Remark_RwRoadAmber"></td>                    
                                      </tr>
                          
                                      <tr>
                                        <td >Traffic light</td>
                                        <td >2</td>
                                        <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="RwRoadTraffic" id="RwRoadTraffic"></td>            
                                        <td><input type="text" name="RwRoadTraffic" id="RwRoadTraffic"></td>                    
                                        <td><input type="file" name="RwRoadTraffic" id="RwRoadTraffic"></td>                    
                                      </tr>
                          
                                      <tr>
                                        <td >Street light</td>
                                        <td >2</td>
                                        <td><input onblur="findTotal()" type="number" min="0" max="2" class="arkitek" name="RwRoadStreet" id="RwRoadStreet"></td>            
                                        <td><input type="text" name="Remark_RwRoadStreet" id="Remark_RwRoadStreet"></td>                    
                                        <td><input type="file" name="Remark_RwRoadStreet" id="Remark_RwRoadStreet"></td>                    
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
                      
                                </tbody>
                              </table>
                      
                      
                              <div align="center" class="mt-3">
                                <button class="btn btn-primary" type="submit" title="Simpan">Simpan</button>
                                <button class="btn btn-primary" type="submit" title="Simpan">Sah</button>
                                <button class="btn btn-primary" type="submit" title="Simpan">Jana Keputusan</button>
                                <button class="btn btn-primary" type="submit" title="Simpan">Jana Sijil</button>
                                {{-- <a href="/penilaian_reka_bentuk_jalan/isi_skor_kad_page2" type="button" class="btn btn-primary">Seterusnya</a>           --}}
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