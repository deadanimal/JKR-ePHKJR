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
                        <h5 class="h6" style="font-weight: 700;">Projek Jalan DASH</h5>
                    </div>

                    <div class="col-4 mb-2">
                        <h5 class="h6">Alamat Projek:</h5>
                    </div>
                    <div class="col-8 mb-2">
                        <h5 class="h6" style="font-weight: 700;">Damansara Perdana</h5>
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
                        <form action="">
                          <table>
                            <div class="row3 mx-4 table-responsive scrollbar">
                                <div class="col">
                                  <table class="table table-bordered line-table text-center" style="width: 100%">
                                    <thead class="text-white bg-orange-jkr">
                                      <tr>
                            
                                        
                                        <th colspan="3"></th>
                                       
                                        <th colspan="4">VERIFICATION</th>
                                        
                         
                                      </tr>
                                      <tr>
                                        
                                        <th colspan="3">TOTAL POINTS (CORE)</th>
                                        
                                        <th >MAX </th>
                                        <th >TARGET </th>
                                        <th >ASSESSMENT </th>
                                      </tr>
                    
                                    </thead>
                                    <tbody>
                  
                    
                                      <tr>
                                        <td colspan="1">SM</td>
                                        <td colspan="2">SUSTAINABLE SITE PLANNING AND MANAGEMENT</td>
                                        {{-- <td></td> --}}
                                        <td>18</td>
                                        <td>0</td>
                                        <td>0</td>
                                      </tr>
                
                                      <tr>
                                        <td colspan="1">PT</td>
                                        <td colspan="2">PAVEMENT TECHNOLOGIES</td>
                                        {{-- <td></td> --}}
                                        <td>12</td>
                                        <td>0</td>
                                        <td>0</td>
                                      </tr>
                    
                                      <tr>
                                        <td colspan="1">EW</td>
                                        <td colspan="2">ENVIRONMENT & WATER</td>
                                        {{-- <td></td> --}}
                                        <td>5</td>
                                        <td>0</td>
                                        <td>0</td>
                                      </tr>
                
                                      <tr>
                                        <td colspan="1">AE</td>
                                        <td colspan="2">ACCESS & EQUITY</td>
                                        {{-- <td></td> --}}
                                        <td>5</td>
                                        <td>0</td>
                                        <td>0</td>
                                      </tr>
                
                                      <tr>
                                        <td colspan="1">CA</td>
                                        <td colspan="2">CONSTRUCTION ACTIVITIES</td>
                                        {{-- <td></td> --}}
                                        <td>22</td>
                                        <td>0</td>
                                        <td>0</td>
                                      </tr>
                
                                      <tr>
                                        <td colspan="1">MR</td>
                                        <td colspan="2">MATERIAL AND RESOURCES</td>
                                        {{-- <td></td> --}}
                                        <td>12</td>
                                        <td>0</td>
                                        <td>0</td>
                                      </tr>
                
                                      <tr>
                                        <td colspan="1">EC</td>
                                        <td colspan="2">ELECTIVE CRITERIA</td>
                                        {{-- <td></td> --}}
                                        <td>27</td>
                                        <td>0</td>
                                        <td>0</td>
                                      </tr>
                
                                      <tr>
                                        <td colspan="1">IN</td>
                                        <td colspan="2">INOVATION</td>
                                        {{-- <td></td> --}}
                                        <td>5</td>
                                        <td>0</td>
                                        <td>0</td>
                                      </tr>
                
                                      <tr>
                                        <td colspan="3">TOTAL CORE POINTS	</td>
                                        {{-- <td></td> --}}
                                        <td>74</td>
                                        <td>0</td>
                                        <td>0</td>
                                      </tr>
                
                                      <tr>
                                        <td colspan="3">TOTAL ELECTIVE & INNOVATION POINTS	</td>
                                        {{-- <td></td> --}}
                                        <td>15</td>
                                        <td>0</td>
                                        <td>0</td>
                                      </tr>
                                      
                  
                                    </tbody>
                
                                  </table>
                  
                                  
                        </form>
                        </div> 
                
                        <div>
                            <form action="">
                              <table>
                                <div class="row3 mx-4 table-responsive scrollbar">
                                    <div class="col">
                                      <table class="table table-bordered line-table text-center" style="width: 100%">
                                        <thead class="text-white bg-orange-jkr">
                                         
                                          <tr>
                                             <th></th>
                                            <th colspan="3" rowspan="3">TARGET SUMMARY</th>
                                            <th colspan="3" rowspan="3">SCORING VERIFICATION SUMMARY</th>
                                            
                                            
                                          </tr>
                        
                                        </thead>
                                        <tbody>
                      
                        
                                          <tr>
                                            <td colspan="1">TOTAL SCORE (%)</td>
                                            <td colspan="2">0</td>
                                            <td colspan="2">0</td>
                
                                          </tr>
                    
                                          <tr>
                                            <td colspan="1" rowspan="3">pH JKR RATING</td>
                                            <td colspan="2" >0<span class="star">&starf;</span></td>
                                            <td colspan="2" >0<span class="star">&starf;</span></td>
                                            
                                          </tr>
                                          
                                          <tr>
                                              <td colspan="2">NO RECOGNITION</td>
                                              <td colspan="2">NO RECOGNITION</td>
                                          </tr> 
                      
                                        </tbody>
                                        
                                      </table>
                      
                                      {{-- <div align="center" class="mt-3">
                                        <button class="btn btn-primary" type="submit" title="Simpan">Batal</button>
                                        <a href="/verifikasi_permarkahan_jalan/isi_skor_kad_verifikasi2" type="button" class="btn btn-primary">Simpan</a>          
                                      </div> --}}
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
                    <h2 class="h2 mb-3">BORANG PENILAIAN REKA BENTUK JALAN</h2>
                </div>
                <div class="col">
                    <div>
                        <form action="/penilaian_reka_bentuk_jalan/simpan_isi_skor_kad/{$id}" method="post" enctype="multipart/form-data">
                          @method('POST')
                          @csrf
                          <table>
                            <div class="row3 mx-4 table-responsive scrollbar">
                                <div class="col">
                                  <table class="table table-bordered line-table text-center" style="width: 100%">
                                    <thead class="text-white bg-orange-jkr">
                                      <tr>
                            
                                        
                                        <th >Kod</th>
                                        <th >Kriteria</th>
                                        <th >Responsibility</th>
                                        <th colspan="3">Design</th>
                                        
                         
                                      </tr>
                                      <tr>
                                        
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th >MAX POINT</th>
                                        <th >TARGET POINT</th>
                                        {{-- <th >ASSESSMENT POINT</th> --}}
                                        <th>COMMENT BY ASSESSOR</th>
                                      </tr>
                    
                                    </thead>
                                    <tbody>
                  
                                      <tr>
                                        <td>SM</td>
                                        <td colspan="" align="left">SUSTAINABLE SITE PLANNING AND MANAGEMENT</td>  
                                      </tr>
                    
                                      <tr>
                                        <td colspan="1" rowspan="12">SM1</td>
                                        <td colspan="2">REQUIREMENT FOR ROAD WORKS DESIGN</td>
                                        <td>7</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td></td>
                                        
                                        
                                      </tr>
                    
                                      <tr>
                                        <td >Traffic study</td>
                                        <td rowspan="7">CJ</td>
                                        <td>1</td>
                                        <td><input onblur="findTargetPointSM1()" type="number" min="0" max="2" class="targetPointSM1" ></td>
                                        {{-- <td><input onblur="findAssessmentPointSM()" type="number" min="0" max="2" class="assessmentPointSM"></td> --}}
                                        <td><input onblur="commentSM1()" type="text" min="0" max="2" class="road" name="" id=""></td>
                                      </tr>
                    
                                      <tr>
                                        <td >Site investigation data</td>
                                        <td>1</td>
                                        <td><input onblur="findTargetPointSM1()" type="number" min="0" max="2" class="targetPointSM1" ></td>
                                        {{-- <td><input onblur="findAssessmentPointSM()" type="number" min="0" max="2" class="assessmentPointSM"></td> --}}
                                        <td><input onblur="commentSM1()" type="text" min="0" max="2" class="road" name="" id=""></td>
                                       
                                      </tr>
                  
                                      <tr>
                                        <td >Flood records</td>
                                        <td>1</td>
                                        <td><input onblur="findTargetPointSM1()" type="number" min="0" max="2" class="targetPointSM1" ></td>
                                        {{-- <td><input onblur="findAssessmentPointSM()" type="number" min="0" max="2" class="assessmentPointSM"></td> --}}
                                        <td><input onblur="commentSM1()" type="text" min="0" max="2" class="road" name="" id=""></td>
                                        
                                      </tr>
                    
                                      <tr>
                                        <td >Response to public complaints or requests from public, local authority & etc.</td>
                                        <td>1</td>
                                        <td><input onblur="findTargetPointSM1()" type="number" min="0" max="2" class="targetPointSM1" ></td>
                                        {{-- <td><input onblur="findAssessmentPointSM()" type="number" min="0" max="2" class="assessmentPointSM"></td> --}}
                                        <td><input onblur="commentSM1()" type="text" min="0" max="2" class="road" name="" id=""></td>
                                        
                                      </tr>
                  
                                      <tr>
                                        <td >Value Management (VM)</td>
                                        <td>1</td>
                                        <td><input onblur="findTargetPointSM1()" type="number" min="0" max="2" class="targetPointSM1" ></td>
                                        {{-- <td><input onblur="findAssessmentPointSM()" type="number" min="0" max="2" class="assessmentPointSM"></td> --}}
                                        <td><input onblur="commentSM1()" type="text" min="0" max="2" class="road" name="" id=""></td>
                                   
                                      </tr>
                  
                                      <tr>
                                        <td >Survey Drawing</td>
                                        <td>1</td>
                                        <td><input onblur="findTargetPointSM1()" type="number" min="0" max="2" class="targetPointSM1" ></td>
                                        {{-- <td><input onblur="findAssessmentPointSM()" type="number" min="0" max="2" class="assessmentPointSM"></td> --}}
                                        <td><input onblur="commentSM1()" type="text" min="0" max="2" class="road" name="" id=""></td>
                                        
                                    
                                      </tr>
                  
                                      <tr>
                                        <td >As Built Drawings</td>
                                        <td>1</td>
                                        <td><input onblur="findTargetPointSM1()" type="number" min="0" max="2" class="targetPointSM1" ></td>
                                        {{-- <td><input onblur="findAssessmentPointSM()" type="number" min="0" max="2" class="assessmentPointSM"></td> --}}
                                        <td><input onblur="commentSM1()" type="text" min="0" max="2" class="road" name="" id=""></td>
                                  
                                      </tr>
                  
                                      <tr>
                                        <td >Accident Reports</td>
                                        <td>CSFJ</td>
                                        <td>1</td>
                                        <td><input onblur="findTargetPointSM1()" type="number" min="0" max="2" class="targetPointSM1" ></td>
                                        {{-- <td><input onblur="findAssessmentPointSM()" type="number" min="0" max="2" class="assessmentPointSM"></td> --}}
                                        <td><input onblur="commentSM1()" type="text" min="0" max="2" class="road" name="" id=""></td>
                                        
                                      </tr>
                  
                                      <tr>
                                        <td >Structure Replacement</td>
                                        <td rowspan="3">CJ</td>
                                        <td>1</td>
                                        <td><input onblur="findTargetPointSM1()" type="number" min="0" max="2" class="targetPointSM1" ></td>
                                        {{-- <td><input onblur="findAssessmentPointSM()" type="number" min="0" max="2" class="assessmentPointSM"></td> --}}
                                        <td><input onblur="commentSM1()" type="text" min="0" max="2" class="road" name="" id=""></td>
                                        
                                      </tr>
                  
                                      <tr>
                                        <td >Forensic Report</td>
                                        <td>1</td>
                                        <td><input onblur="findTargetPointSM1()" type="number" min="0" max="2" class="targetPointSM1" ></td>
                                        {{-- <td><input onblur="findAssessmentPointSM()" type="number" min="0" max="2" class="assessmentPointSM"></td> --}}
                                        <td><input onblur="commentSM1()" type="text" min="0" max="2" class="road" name="" id=""></td>
                                        
                                      </tr>
                  
                                      <tr>
                                        <td >Pavement Evaluation</td>
                                        <td>1</td>
                                        <td><input onblur="findTargetPointSM1()" type="number" min="0" max="2" class="targetPointSM1" ></td>
                                        {{-- <td><input onblur="findAssessmentPointSM()" type="number" min="0" max="2" class="assessmentPointSM"></td> --}}
                                        <td><input onblur="commentSM1()" type="text" min="0" max="2" class="road" name="" id=""></td>
                                      </tr>
                  
                                      <td style="display: none">markahSM1<input type="text" name="markahSM1" id="markahSM1" /></td>            
                  
                  
                                     
                  
                                      <tr>
                                        <td colspan="1" rowspan="9">SM2</td>
                                        <td colspan="2">ROAD ALIGNMENT</td>
                                        <td>6</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td></td>
                                        
                                        
                                      </tr>
                    
                                      <tr>
                                        <td >Slope not more than 6 berms</td>
                                        <td rowspan="7">CJ</td>
                                        <td>1</td>
                                        <td><input onblur="findTargetPointSM2()" type="number" min="0" max="2" class="targetPointSM2" ></td>
                                        {{-- <td><input onblur="findAssessmentPointSM()" type="number" min="0" max="2" class="assessmentPointSM"></td> --}}
                                        <td><input onblur="commentSM2()" type="text" min="0" max="2" class="road" name="" id=""></td>
                                      </tr>
                    
                                      <tr>
                                        <td >Cut slope not steeper than 1:1.5 or Rock slope not steeper than 4:1 </td>
                                        {{-- <td rowspan="7">CKG</td> --}}
                                        <td>1</td>
                                        <td><input onblur="findTargetPointSM2()" type="number" min="0" max="2" class="targetPointSM2" ></td>
                                        {{-- <td><input onblur="findAssessmentPointSM()" type="number" min="0" max="2" class="assessmentPointSM"></td> --}}
                                        <td><input onblur="commentSM2()" type="text" min="0" max="2" class="road" name="" id=""></td>
                                       
                                      </tr>
                  
                                      <tr>
                                        <td >Fill slope not steeper than 1:2</td>
                                        <td>1</td>
                                        <td><input onblur="findTargetPointSM2()" type="number" min="0" max="2" class="targetPointSM2" ></td>
                                        {{-- <td><input onblur="findAssessmentPointSM()" type="number" min="0" max="2" class="assessmentPointSM"></td> --}}
                                        <td><input onblur="commentSM2()" type="text" min="0" max="2" class="road" name="" id=""></td>
                                        
                                      </tr>
                    
                                      <tr>
                                        <td >Height of slope not more than 6m</td>
                                        <td>1</td>
                                        <td><input onblur="findTargetPointSM2()" type="number" min="0" max="2" class="targetPointSM2" ></td>
                                        {{-- <td><input onblur="findAssessmentPointSM()" type="number" min="0" max="2" class="assessmentPointSM"></td> --}}
                                        <td><input onblur="commentSM2()" type="text" min="0" max="2" class="road" name="" id=""></td>
                                        
                                      </tr>
                  
                                      <tr>
                                        <td >Maximum grade less than 7%</td>
                                        <td>1</td>
                                        <td><input onblur="findTargetPointSM2()" type="number" min="0" max="2" class="targetPointSM2" ></td>
                                        {{-- <td><input onblur="findAssessmentPointSM()" type="number" min="0" max="2" class="assessmentPointSM"></td> --}}
                                        <td><input onblur="commentSM2()" type="text" min="0" max="2" class="road" name="" id=""></td>
                                   
                                      </tr>
                  
                                      <tr>
                                        <td >No reclamation involved existing water bodies</td>
                                        <td>1</td>
                                        <td><input onblur="findTargetPointSM2()" type="number" min="0" max="2" class="targetPointSM2" ></td>
                                        {{-- <td><input onblur="findAssessmentPointSM()" type="number" min="0" max="2" class="assessmentPointSM"></td> --}}
                                        <td><input onblur="commentSM2()" type="text" min="0" max="2" class="road" name="" id=""></td>
                                        
                                    
                                      </tr>
                  
                                      <tr>
                                        <td >Provide added uphill lane (climbing lane) where the length of critical grade exceeds 5%</td>
                                        <td>1</td>
                                        <td><input onblur="findTargetPointSM2()" type="number" min="0" max="2" class="targetPointSM2" ></td>
                                        {{-- <td><input onblur="findAssessmentPointSM()" type="number" min="0" max="2" class="assessmentPointSM"></td> --}}
                                        <td><input onblur="commentSM2()" type="text" min="0" max="2" class="road" name="" id=""></td>
                                  
                                      </tr>
                  
                                      <tr>
                                        <td >Not in Sensitive Area OR Sensitive area with mitigation plan</td>
                                        <td>CASKT</td>
                                        <td>1</td>
                                        <td><input onblur="findTargetPointSM2()" type="number" min="0" max="2" class="targetPointSM2" ></td>
                                        {{-- <td><input onblur="findAssessmentPointSM()" type="number" min="0" max="2" class="assessmentPointSM"></td> --}}
                                        <td><input onblur="commentSM2()" type="text" min="0" max="2" class="road" name="" id=""></td>
                                        
                                      </tr>
                  
                                      <td style="display: none">markahSM2<input type="text" name="markahSM2" id="markahSM2" /></td>            
                  
                  
                                    
                  
                                      <tr>
                                        <td colspan="1" rowspan="8">SM3</td>
                                        <td colspan="2">SITE VEGETATION</td>
                                        <td>3</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td></td>
                     
                                      </tr>
                    
                                      <tr>
                                        <td >Slope not more than 6 berms</td>
                                        <td rowspan="7">CJ</td>
                                        <td>1</td>
                                        <td><input onblur="findTargetPointSM3()" type="number" min="0" max="2" class="targetPointSM3" ></td>
                                        {{-- <td><input onblur="findAssessmentPointSM()" type="number" min="0" max="2" class="assessmentPointSM"></td> --}}
                                        <td><input onblur="commentSM3()" type="text" min="0" max="2" class="road" name="" id=""></td>
                                      </tr>
                    
                                      <tr>
                                        <td >Use non-invasive plant species(example: grass/creeper) </td>
                                        <td>1</td>
                                        <td><input onblur="findTargetPointSM3()" type="number" min="0" max="2" class="targetPointSM3" ></td>
                                        {{-- <td><input onblur="findAssessmentPointSM()" type="number" min="0" max="2" class="assessmentPointSM"></td> --}}
                                        <td><input onblur="commentSM3()" type="text" min="0" max="2" class="road" name="" id=""></td>
                                       
                                      </tr>
                  
                                      <tr>
                                        <td >Use bio-engineering techniques (example: vetiver grass, creeper and regeneration of natural plants and material )</td>
                                        <td>1</td>
                                        <td><input onblur="findTargetPointSM3()" type="number" min="0" max="2" class="targetPointSM3" ></td>
                                        {{-- <td><input onblur="findAssessmentPointSM()" type="number" min="0" max="2" class="assessmentPointSM"></td> --}}
                                        <td><input onblur="commentSM3()" type="text" min="0" max="2" class="road" name="" id=""></td>
                                        
                                      </tr>
                    
                                      <tr>
                                        <td >Use native plant species</td>
                                        <td>1</td>
                                        <td><input onblur="findTargetPointSM3()" type="number" min="0" max="2" class="targetPointSM3" ></td>
                                        {{-- <td><input onblur="findAssessmentPointSM()" type="number" min="0" max="2" class="assessmentPointSM"></td> --}}
                                        <td><input onblur="commentSM3()" type="text" min="0" max="2" class="road" name="" id=""></td>
                                        
                                      </tr>
                  
                                      <tr>
                                        <td >Use of grass/creeper for slope protection /unpaved shoulder</td>
                                        <td>1</td>
                                        <td><input onblur="findTargetPointSM3()" type="number" min="0" max="2" class="targetPointSM3" ></td>
                                        {{-- <td><input onblur="findAssessmentPointSM()" type="number" min="0" max="2" class="assessmentPointSM"></td> --}}
                                        <td><input onblur="commentSM3()" type="text" min="0" max="2" class="road" name="" id=""></td>
                                   
                                      </tr>
                  
                                      <tr>
                                        <td >Hydroseeding with Bio-degradable Erosion Control Blanket(BECB) on slope</td>
                                        <td>1</td>
                                        <td><input onblur="findTargetPointSM3()" type="number" min="0" max="2" class="targetPointSM3" ></td>
                                        {{-- <td><input onblur="findAssessmentPointSM()" type="number" min="0" max="2" class="assessmentPointSM"></td> --}}
                                        <td><input onblur="commentSM3()" type="text" min="0" max="2" class="road" name="" id=""></td>
                                        
                                      </tr>
                  
                                      <tr>
                                        <td >Preservation of existing tree/vegetation</td>
                                        <td>1</td>
                                        <td><input onblur="findTargetPointSM3()" type="number" min="0" max="2" class="targetPointSM3" ></td>
                                        {{-- <td><input onblur="findAssessmentPointSM()" type="number" min="0" max="2" class="assessmentPointSM"></td> --}}
                                        <td><input onblur="commentSM3()" type="text" min="0" max="2" class="road" name="" id=""></td>
                                  
                                      </tr>
                  
                                      <td style="display: none">markahSM3<input type="text" name="markahSM3" id="markahSM3" /></td>            
                  
                  
                  
                                     
                  
                  
                                      <td colspan="1" rowspan="4">SM4</td>
                                      <td colspan="2">NOISE MITIGATION PLAN</td>
                                      <td>2</td>
                                      <td>0</td>
                                      <td>0</td>
                                      <td></td>
                   
                                    </tr>
                  
                                    <tr>
                                      <td >Supply and install noise barrier including maintenance during the construction and defects liability period</td>
                                      <td rowspan="7">CJ</td>
                                      <td>1</td>
                                      <td><input onblur="findTargetPointSM4()" type="number" min="0" max="2" class="targetPointSM4" ></td>
                                      {{-- <td><input onblur="findAssessmentPointSM()" type="number" min="0" max="2" class="assessmentPointSM"></td> --}}
                                      <td><input onblur="commentSM4()" type="text" min="0" max="2" class="road" name="" id=""></td>
                                    </tr>
                  
                                    <tr>
                                      <td >To ensure that all site equipment are in using low decibel to control noise pollution </td>
                                      <td>1</td>
                                      <td><input onblur="findTargetPointSM4()" type="number" min="0" max="2" class="targetPointSM4" ></td>
                                      {{-- <td><input onblur="findAssessmentPointSM()" type="number" min="0" max="2" class="assessmentPointSM"></td> --}}
                                      <td><input onblur="commentSM4()" type="text" min="0" max="2" class="road" name="" id=""></td>
                                     
                                    </tr>
                  
                                    <tr>
                                      <td >To ensure using all machineryon site are low decibel to minimize the amount of noise generated </td>
                                      <td>1</td>
                                      <td><input onblur="findTargetPointSM4()" type="number" min="0" max="2" class="targetPointSM4" ></td>
                                      {{-- <td><input onblur="findAssessmentPointSM()" type="number" min="0" max="2" class="assessmentPointSM"></td> --}}
                                      <td><input onblur="commentSM4()" type="text" min="0" max="2" class="road" name="" id=""></td>
                                      
                                    </tr>
                  
                                    <td style="display: none">markahSM4<input type="text" name="markahSM4" id="markahSM4" /></td>            
                  
                  
                                    <tr >
                                      <td colspan="3"> SUB TOTAL SM POINT</td>
                                      <td>18</td>
                                      <td></td>
                                      <td></td>
                                      <td></td>
                                    </tr>

                                    <tr>
                                        <td>PT</td>
                                        <td colspan="6" align="left">PAVEMENT TECHNOLOGIES</td>
                                       
                                        
                                        
                                        
                                      </tr>
                    
                                      <tr>
                                        <td colspan="1" rowspan="6">PT1</td>
                                        <td colspan="2">EXISTING PAVEMENT EVALUATION</td>
                                        {{-- <td></td> --}}
                                        <td>3</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td></td>
                                        
                                        
                                      </tr>
                    
                                      <tr>
                                        <td>Surface Condition Survey</td>
                                        <td rowspan="5">CSFJ</td>
                                        <td>1</td>
                                        <td><input onblur="findTargetPointPT1()" type="number" min="0" max="2" class="targetPointPT1" ></td>
                                        {{-- <td><input onblur="findAssessmentPointPT1()" type="number" min="0" max="2" class="assessmentPointPT1"></td> --}}
                                        <td><input onblur="commentPT1()" type="text" min="0" max="2" class="road" name="" id=""></td>
                                      </tr>
                    
                                      <tr>
                                        <td >Coring & Dynamic Cone Penetrometer test</td>
                                        <td>1</td>
                                        <td><input onblur="findTargetPointPT1()" type="number" min="0" max="2" class="targetPointPT1" ></td>
                                        {{-- <td><input onblur="findAssessmentPointPT1()" type="number" min="0" max="2" class="assessmentPointPT1"></td> --}}
                                        <td><input onblur="commentPT1()" type="text" min="0" max="2" class="road" name="" id=""></td>
                                      </tr>
                  
                                      <tr>
                                        <td >Deflection test</td>
                                        <td>1</td>
                                        <td><input onblur="findTargetPointPT1()" type="number" min="0" max="2" class="targetPointPT1" ></td>
                                        {{-- <td><input onblur="findAssessmentPointPT1()" type="number" min="0" max="2" class="assessmentPointPT1"></td> --}}
                                        <td><input onblur="commentPT1()" type="text" min="0" max="2" class="road" name="" id=""></td>
                                      </tr>
                    
                                      <tr>
                                        <td >Trial pit & Laboratory</td>
                                        <td>1</td>
                                        <td><input onblur="findTargetPointPT1()" type="number" min="0" max="2" class="targetPointPT1" ></td>
                                        {{-- <td><input onblur="findAssessmentPointPT1()" type="number" min="0" max="2" class="assessmentPointPT1"></td> --}}
                                        <td><input onblur="commentPT1()" type="text" min="0" max="2" class="road" name="" id=""></td>
                                      </tr>
                  
                                      <tr>
                                        <td >Surface Regularity Test (International Roughness Index, IRI)</td>
                                        <td>1</td>
                                        <td><input onblur="findTargetPointPT1()" type="number" min="0" max="2" class="targetPointPT1" ></td>
                                        {{-- <td><input onblur="findAssessmentPointPT1()" type="number" min="0" max="2" class="assessmentPointPT1"></td> --}}
                                        <td><input onblur="commentPT1()" type="text" min="0" max="2" class="road" name="" id=""></td>
                                      </tr>
                  
                                      <tr >
                                        <td style="display: none">markahPT1<input type="text" name="markahPT1" id="markahPT1" /></td>            
                                      </tr>
                  
                                      
                  
                                      <tr>
                                        <td colspan="1" rowspan="4">PT 2</td>
                                        <td colspan="2">PERMEABLE PAVEMENT</td>
                                        {{-- <td></td> --}}
                                        <td>3</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td></td>
                                        
                                        
                                      </tr>
                    
                                      {{-- <tr>
                                        <td rowspan="9">SM2</td>
                                        <td colspan="2">Road alignment</td>
                                        <td>6</td>
                                        
                                        <td><input onblur="roadWorks()" type="number" min="0" max="2" class="road" name="" id=""></td>
                                        <td><input onblur="roadWorks()" type="number" min="0" max="2" class="road" name="" id=""></td>
                                        <td><input onblur="roadWorks()" type="text" min="0" max="2" class="road" name="" id=""></td>
                                      </tr> --}}
                  
                                      <tr>
                                        <td >use of permeable (porous) pavement mix design</td>
                                        <td></td>
                                        <td>1</td>
                                        <td><input onblur="findTargetPointPT2()" type="number" min="0" max="2" class="targetPointPT2" ></td>
                                        {{-- <td><input onblur="findAssessmentPointPT2()" type="number" min="0" max="2" class="assessmentPointPT2"></td> --}}
                                        <td><input onblur="commentPT2()" type="text" min="0" max="2" class="road" name="" id=""></td>
                                      </tr>
                                      <tr>
                                        <td >Pavement crossfall 2.5% and min unpaved shoulder to drain</td>
                                        <td></td>
                                        <td>1</td>
                                        <td><input onblur="findTargetPointPT2()" type="number" min="0" max="2" class="targetPointPT2" ></td>
                                        {{-- <td><input onblur="findAssessmentPointPT2()" type="number" min="0" max="2" class="assessmentPointPT2"></td> --}}
                                        <td><input onblur="commentPT2()" type="text" min="0" max="2" class="road" name="" id=""></td>
                                      </tr>
                                      <tr>
                                        <td >Drainability of porous asphalt wearing course having a minimum thickness of 50mm</td>
                                        <td></td>
                                        <td>1</td>
                                        <td><input onblur="findTargetPointPT2()" type="number" min="0" max="2" class="targetPointPT2" ></td>
                                        {{-- <td><input onblur="findAssessmentPointPT2()" type="number" min="0" max="2" class="assessmentPointPT2"></td> --}}
                                        <td><input onblur="commentPT2()" type="text" min="0" max="2" class="road" name="" id=""></td>
                                      </tr>
                  
                                      <tr >
                                        <td style="display: none">markahPT2<input type="text" name="markahPT2" id="markahPT2" /></td>            
                                      </tr>
                                      
                  
                                      <tr>
                                        <td colspan="1" rowspan="2">PT 3</td>
                                        <td colspan="2">PAVEMENT PERFORMANCE TRACKING</td>
                                        {{-- <td></td> --}}
                                        <td>2</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td></td>
                                        
                                        
                                      </tr>
                  
                                      <tr>
                                        <td >Use a process that allows construction quality measurements and long-term pavement performance measurements</td>
                                        <td></td>
                                        <td>2</td>
                                        <td><input onblur="findTargetPointPT3()" type="number" min="0" max="2" class="targetPointPT3" name="" id=""></td>
                                        {{-- <td><input onblur="findAssessmentPointPT3()" type="number" min="0" max="2" class="assessmentPointPT3" name="" id=""></td> --}}
                                        <td><input onblur="commentPT3()" type="text" min="0" max="2" class="road" name="" id=""></td>
                                      </tr>
                  
                                      <tr >
                                        <td style="display: none">markahPT3<input type="text" name="markahPT3" id="markahPT3" /></td>            
                                      </tr>
                                      
                  
                                      <tr>
                                        <td colspan="1" rowspan="5">PT 4</td>
                                        <td colspan="2">LONG-LIFE PAVEMENT</td>
                                        {{-- <td></td> --}}
                                        <td>4</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td></td>
                                        
                                        
                                      </tr>
                  
                                      <tr>
                                        <td >Meet the requirements of Arahan Teknik Jalan</td>
                                        <td></td>
                                        <td>1</td>
                                        <td><input onblur="findTargetPointPT4()" type="number" min="0" max="2" class="targetPointPT4"></td>
                                        {{-- <td><input onblur="findAssessmentPointPT4()" type="number" min="0" max="2" class="assessmentPointPT4"></td> --}}
                                        <td><input onblur="commentPT4()" type="text" min="0" max="2" class="road" name="" id=""></td>
                                      </tr>
                                      <tr>
                                        <td >Pavement design is in accordance</td>
                                        <td></td>
                                        <td>1</td>
                                        <td><input onblur="findTargetPointPT4()" type="number" min="0" max="2" class="targetPointPT4"></td>
                                        {{-- <td><input onblur="findAssessmentPointPT4()" type="number" min="0" max="2" class="assessmentPointPT4"></td> --}}
                                        <td><input onblur="commentPT4()" type="text" min="0" max="2" class="road" name="" id=""></td>
                                      </tr>
                                      <tr>
                                        <td >Drainability surface runoff</td>
                                        <td></td>
                                        <td>1</td>
                                        <td><input onblur="findTargetPointPT4()" type="number" min="0" max="2" class="targetPointPT4"></td>
                                        {{-- <td><input onblur="findAssessmentPointPT4()" type="number" min="0" max="2" class="assessmentPointPT4"></td> --}}
                                        <td><input onblur="commentPT4()" type="text" min="0" max="2" class="road" name="" id=""></td>
                                      </tr>
                  
                                      <tr>
                                        <td >Riqid Pavement > 40 years design life</td>
                                        <td></td>
                                        <td>2</td>
                                        <td><input onblur="findTargetPointPT4()" type="number" min="0" max="2" class="targetPointPT4"></td>
                                        {{-- <td><input onblur="findAssessmentPointPT4()" type="number" min="0" max="2" class="assessmentPointPT4"></td> --}}
                                        <td><input onblur="commentPT4()" type="text" min="0" max="2" class="road" name="" id=""></td>
                                      </tr>
                  
                                      <tr >
                                        <td style="display: none">markahPT4<input type="text" name="markahPT4" id="markahPT4" /></td>            
                                      </tr>
                  
                                      <tr >
                                        <td colspan="3"> SUB TOTAL PT POINT</td>
                                        <td>12</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                      </tr>

                                      <tr>
                                        <td>EW</td>
                                        <td colspan="6" align="left">ENVIRONMENT & WATER</td>
                                       
                                        
                                        
                                        
                                      </tr>
                    
                                      <tr>
                                        <td colspan="1" rowspan="2">EW1</td>
                                        <td colspan="2">ENVIRONMENTAL MANAGEMENT SYSTEM</td>
                                        {{-- <td></td> --}}
                                        <td>3</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td></td>
                                        
                                        
                                      </tr>
                    
                                      <tr>
                                        <td>Provision of EPW in contract (Design Stage)</td>
                                        <td rowspan="1">CSFJ</td>
                                        <td>3</td>
                                        <td><input onblur="findTargetPointEW1()" type="number" min="0" max="2" class="targetPointEW1" ></td>
                                        {{-- <td><input onblur="findAssessmentPointEW1()" type="number" min="0" max="2" class="assessmentPointEW1"></td> --}}
                                        <td><input onblur="commentEW1()" type="text" min="0" max="2" class="road" name="" id=""></td>
                                      </tr>
                  
                                      <tr >
                                        <td style="display: none">markahEW1<input type="text" name="markahEW1" id="markahEW1" /></td>            
                                      </tr>
                    
                                      
                  
                                      
                  
                                      <tr>
                                        <td colspan="1" rowspan="3">EW2</td>
                                        <td colspan="2">STORMWATER MANAGEMENT</td>
                                        {{-- <td></td> --}}
                                        <td>2</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td></td>
                                        
                                        
                                      </tr>
                  
                                      
                    
                                      {{-- <tr>
                                        <td rowspan="9">SM2</td>
                                        <td colspan="2">Road alignment</td>
                                        <td>6</td>
                                        
                                        <td><input onblur="roadWorks()" type="number" min="0" max="2" class="road" name="" id=""></td>
                                        <td><input onblur="roadWorks()" type="number" min="0" max="2" class="road" name="" id=""></td>
                                        <td><input onblur="roadWorks()" type="text" min="0" max="2" class="road" name="" id=""></td>
                                      </tr> --}}
                  
                                      <tr>
                                        <td >Develop a stormwater management documents and frawing plans</td>
                                        <td rowspan="2">CKAS</td>
                                        <td>1</td>
                                        <td><input onblur="findTargetPointEW2()" type="number" min="0" max="2" class="targetPointEW2" ></td>
                                        {{-- <td><input onblur="findAssessmentPointEW2()" type="number" min="0" max="2" class="assessmentPointEW2"></td> --}}
                                        <td><input onblur="commentEW2()" type="text" min="0" max="2" class="road" name="" id=""></td>
                                      </tr>
                                      <tr>
                                        <td >Develop a stromwater management plan for the site using stormwater</td>
                                        {{-- <td></td> --}}
                                        <td>1</td>
                                        <td><input onblur="findTargetPointEW2()" type="number" min="0" max="2" class="targetPointEW2" ></td>
                                        {{-- <td><input onblur="findAssessmentPointEW2()" type="number" min="0" max="2" class="assessmentPointEW2"></td> --}}
                                        <td><input onblur="commentEW2()" type="text" min="0" max="2" class="road" name="" id=""></td>
                                      </tr>
                  
                                      <tr >
                                        <td style="display: none">markahEW2<input type="text" name="markahEW2" id="markahEW2" /></td>            
                                      </tr>
                                      
                                      <tr >
                                        <td colspan="3"> SUB TOTAL EW POINT</td>
                                        <td>5</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                      </tr>
                  
                                      <tr>
                                        <td>AE</td>
                                        <td colspan="6" align="left">ACCESS & EQUITY</td>
                                       
                                        
                                        
                                        
                                      </tr>
                    
                                      <tr>
                                        <td colspan="1" rowspan="5">AE 1</td>
                                        <td colspan="2">SAFETY AUDIT</td>
                                        {{-- <td></td> --}}
                                        <td>5</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td></td>
                                        
                                        
                                      </tr>
                  
                                      <tr>
                                        <td >Road Safety Audit (During Design Stage)</td>
                                        <td></td>
                                        <td>3</td>
                                        <td><input onblur="findTargetPointAE1()" type="number" min="0" max="2" class="targetPointAE1" ></td>
                                        {{-- <td><input onblur="findAssessmentPointAE1()" type="number" min="0" max="2" class="assessmentPointAE1" ></td> --}}
                                        <td><input onblur="commentAE1()" type="text" min="0" max="2" class="road" name="" id=""></td>
                                      </tr>
                  
                                      <tr>
                                        <td >Road Safety Audit (During Construction Stage)</td>
                                        <td></td>
                                        <td>3</td>
                                        <td><input onblur="findTargetPointAE1()" type="number" min="0" max="2" class="targetPointAE1" ></td>
                                        {{-- <td><input onblur="findAssessmentPointAE1()" type="number" min="0" max="2" class="assessmentPointAE1" ></td> --}}
                                        <td><input onblur="commentAE1()" type="text" min="0" max="2" class="road" name="" id=""></td>
                                      </tr>
                  
                                      <tr>
                                        <td >Additional Audit For Traffic Management Safety Report During Construction</td>
                                        <td></td>
                                        <td>1</td>
                                        <td><input onblur="findTargetPointAE1()" type="number" min="0" max="2" class="targetPointAE1" ></td>
                                        {{-- <td><input onblur="findAssessmentPointAE1()" type="number" min="0" max="2" class="assessmentPointAE1" ></td> --}}
                                        <td><input onblur="commentAE1()" type="text" min="0" max="2" class="road" name="" id=""></td>
                                      </tr>
                  
                                      <tr>
                                        <td >Road Safety Audit (During Operational Stage)</td>
                                        <td></td>
                                        <td>1</td>
                                        <td><input onblur="findTargetPointAE1()" type="number" min="0" max="2" class="targetPointAE1" ></td>
                                        {{-- <td><input onblur="findAssessmentPointAE1()" type="number" min="0" max="2" class="assessmentPointAE1" ></td> --}}
                                        <td><input onblur="commentAE1()" type="text" min="0" max="2" class="road" name="" id=""></td>
                                      </tr>
                  
                                      <tr >
                                        <td style="display: none">markahAE1<input type="text" name="markahAE1" id="markahAE1" /></td>            
                                      </tr>
                  
                                      <tr >
                                        <td colspan="3"> SUB TOTAL AE POINT</td>
                                        <td>5</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                      </tr>
                  
                                      <tr>
                                        <td>CA</td>
                                        <td colspan="6" align="left">CONSTRUCTION ACTIVITY</td>
                                        
                                      </tr>
                                      
                  
                                      <tr>
                                        <td colspan="1" rowspan="2">CA1</td>
                                        <td colspan="2">REQUIREMENT FOR ROAD WORKS DESIGN</td>
                                        {{-- <td></td> --}}
                                        <td>3</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td></td>
                                        
                                        
                                      </tr>
                  
                                      <tr>
                                        <td >MS ISO 9001:2008 or (latest version) certification for main contractor</td>
                                        <td></td>
                                        <td>3</td>
                                        <td><input onblur="findTargetPointCA1()" type="number" min="0" max="2" class="targetPointCA1"></td>
                                        {{-- <td><input onblur="findAssessmentPointCA1()" type="number" min="0" max="2" class="assessmentPointCA1" ></td> --}}
                                        <td><input onblur="commentCA1()" type="text" min="0" max="2" class="road" name="" id=""></td>
                                      </tr>
                  
                                      <tr >
                                        <td style="display: none">markahCA1<input type="text" name="markahCA1" id="markahCA1" /></td>            
                                      </tr>
                  
                                      <tr>
                                        <td colspan="1" rowspan="3">CA2</td>
                                        <td colspan="2">OCCUPTIONAL HEALTH AND SAFETY MANAGEMENT SYSTEM</td>
                                        {{-- <td></td> --}}
                                        <td>3</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td></td>
                                        
                                        
                                      </tr>
                  
                                      <tr>
                                        <td >OHSAS 18001:2007 0r (latest version) certification for main contractor</td>
                                        <td></td>
                                        <td>2</td>
                                        <td><input onblur="findTargetPointCA2()" type="number" min="0" max="2" class="targetPointCA2"></td>
                                        {{-- <td><input onblur="findAssessmentPointCA2()" type="number" min="0" max="2" class="assessmentPointCA2" ></td> --}}
                                        <td><input onblur="commentCA2()" type="text" min="0" max="2" class="road" name="" id=""></td>
                                      </tr>
                                      <tr>
                                        <td >To provide site safety and health officer with certification by DOSH</td>
                                        <td></td>
                                        <td>1</td>
                                        <td><input onblur="findTargetPointCA2()" type="number" min="0" max="2" class="targetPointCA2"></td>
                                        {{-- <td><input onblur="findAssessmentPointCA2()" type="number" min="0" max="2" class="assessmentPointCA2" ></td> --}}
                                        <td><input onblur="commentCA2()" type="text" min="0" max="2" class="road" name="" id=""></td>
                                      </tr>
                  
                                      <tr >
                                        <td style="display: none">markahCA2<input type="text" name="markahCA2" id="markahCA2" /></td>            
                                      </tr>
                  
                                      <tr>
                                        <td colspan="1" rowspan="5">CA 3</td>
                                        <td colspan="2">OCONSTRUCTION WASTE MANAGEMENT PLAN	</td>
                                        {{-- <td></td> --}}
                                        <td>4</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td></td>
                                        
                                        
                                      </tr>
                  
                                      <tr>
                                        <td >Create, establish, implement and maintain a formal construction waste management plan during road construction</td>
                                        <td></td>
                                        <td>2</td>
                                        <td><input onblur="findTargetPointCA3()" type="number" min="0" max="2" class="targetPointCA3"></td>
                                        {{-- <td><input onblur="findAssessmentPointCA3()" type="number" min="0" max="2" class="assessmentPointCA3" ></td> --}}
                                        <td><input onblur="commentCA3()" type="text" min="0" max="2" class="road" name="" id=""></td>
                                      </tr>
                  
                                      <tr>
                                        <td >Provision of Waste Management Plan in the contract (BQ)</td>
                                        <td></td>
                                        <td>2</td>
                                        <td><input onblur="findTargetPointCA3()" type="number" min="0" max="2" class="targetPointCA3"></td>
                                        {{-- <td><input onblur="findAssessmentPointCA3()" type="number" min="0" max="2" class="assessmentPointCA3" ></td> --}}
                                        <td><input onblur="commentCA3()" type="text" min="0" max="2" class="road" name="" id=""></td>
                                      </tr>
                  
                                      <tr>
                                        <td >Provide a designated location to segregate construction waste on-site</td>
                                        <td></td>
                                        <td>1</td>
                                        <td><input onblur="findTargetPointCA3()" type="number" min="0" max="2" class="targetPointCA3"></td>
                                        {{-- <td><input onblur="findAssessmentPointCA3()" type="number" min="0" max="2" class="assessmentPointCA3" ></td> --}}
                                        <td><input onblur="commentCA3()" type="text" min="0" max="2" class="road" name="" id=""></td>
                                      </tr>
                  
                                      <tr>
                                        <td >Appoint the licensed contractor(s) to collect the construction waste </td>
                                        <td></td>
                                        <td>1</td>
                                        <td><input onblur="findTargetPointCA3()" type="number" min="0" max="2" class="targetPointCA3"></td>
                                        {{-- <td><input onblur="findAssessmentPointCA3()" type="number" min="0" max="2" class="assessmentPointCA3" ></td> --}}
                                        <td><input onblur="commentCA3()" type="text" min="0" max="2" class="road" name="" id=""></td>
                                      </tr>
                  
                                      <tr >
                                        <td style="display: none">markahCA3<input type="text" name="markahCA3" id="markahCA3" /></td>            
                                      </tr>
                  
                                      <tr>
                                        <td colspan="1" rowspan="4">CA 4</td>
                                        <td colspan="2">TRAFFIC MANAGEMENT PLAN</td>
                                        {{-- <td></td> --}}
                                        <td>4</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td></td>
                                        
                                        
                                      </tr>
                  
                                      <tr>
                                        <td >Create, establish and implement a formal traffic management plan during Design and road construction stage</td>
                                        <td></td>
                                        <td>2</td>
                                        <td><input onblur="findTargetPointCA4()" type="number" min="0" max="2" class="targetPointCA4"></td>
                                        {{-- <td><input onblur="findAssessmentPointCA4()" type="number" min="0" max="2" class="assessmentPointCA4" ></td> --}}
                                        <td><input onblur="commentCA4()" type="text" min="0" max="2" class="road" name="" id=""></td>
                                      </tr>
                  
                                      <tr>
                                        <td >Provision of Traffic Management Officer in the contract document (BQ)</td>
                                        <td></td>
                                        <td>1</td>
                                        <td><input onblur="findTargetPointCA4()" type="number" min="0" max="2" class="targetPointCA4"></td>
                                        {{-- <td><input onblur="findAssessmentPointCA4()" type="number" min="0" max="2" class="assessmentPointCA4" ></td> --}}
                                        <td><input onblur="commentCA4()" type="text" min="0" max="2" class="road" name="" id=""></td>
                                      </tr>
                  
                                      <tr>
                                        <td >Provision of third party auditor for Traffic Management Plan (TMP)</td>
                                        <td></td>
                                        <td>1</td>
                                        <td><input onblur="findTargetPointCA4()" type="number" min="0" max="2" class="targetPointCA4"></td>
                                        {{-- <td><input onblur="findAssessmentPointCA4()" type="number" min="0" max="2" class="assessmentPointCA4" ></td> --}}
                                        <td><input onblur="commentCA4()" type="text" min="0" max="2" class="road" name="" id=""></td>
                                      </tr>
                  
                                      <tr >
                                        <td style="display: none">markahCA4<input type="text" name="markahCA4" id="markahCA4" /></td>            
                                      </tr>
                  
                                      <tr>
                                        <td colspan="1" rowspan="2">CA 5</td>
                                        <td colspan="2">SITE ROUTINE MAINTENANCE PLAN 	</td>
                                        {{-- <td></td> --}}
                                        <td>2</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td></td>
                                        
                                        
                                      </tr>
                  
                                      <tr>
                                        <td >Create, establish, implement routine maintenanace for road project </td>
                                        <td></td>
                                        <td>2</td>
                                        <td><input onblur="findTargetPointCA5()" type="number" min="0" max="2" class="targetPointCA5"></td>
                                        <td><input onblur="findAssessmentPointCA5()" type="number" min="0" max="2" class="assessmentPointCA5" ></td>
                                        <td><input onblur="commentCA5()" type="text" min="0" max="2" class="road" name="" id=""></td>
                                      </tr>
                  
                                      <tr >
                                        <td style="display: none">markahCA5<input type="text" name="markahCA5" id="markahCA5" /></td>            
                                      </tr>
                  
                                      <tr>
                                        <td colspan="1" rowspan="2">CA 6</td>
                                        <td colspan="2">HOUSEKEEPING 	</td>
                                        {{-- <td></td> --}}
                                        <td>2</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td></td>
                                        
                                        
                                      </tr>
                  
                                      <tr>
                                        <td >"Provision Housekeeping implementation in the contract document/ BQ
                                          OR
                                          Establish and implement housekeeping during construction "</td>
                                        <td></td>
                                        <td>2</td>
                                        <td><input onblur="findTargetPointCA6()" type="number" min="0" max="2" class="targetPointCA6"></td>
                                        {{-- <td><input onblur="findAssessmentPointCA6()" type="number" min="0" max="2" class="assessmentPointCA6" ></td> --}}
                                        <td><input onblur="commentCA6()" type="text" min="0" max="2" class="road" name="" id=""></td>
                                      </tr>
                  
                                      <tr >
                                        <td style="display: none">markahCA6<input type="text" name="markahCA6" id="markahCA6" /></td>            
                                      </tr>
                  
                                      <tr>
                                        <td colspan="1" rowspan="4">CA 7</td>
                                        <td colspan="2">HOUSEKEEPING 	</td>
                                        {{-- <td></td> --}}
                                        <td>4</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td></td>
                                        
                                        
                                      </tr>
                  
                                      <tr>
                                        <td >Perform scheduled maintenance of construction machineries</td>
                                        <td></td>
                                        <td>2</td>
                                        <td><input onblur="findTargetPointCA7()" type="number" min="0" max="2" class="targetPointCA7"></td>
                                        {{-- <td><input onblur="findAssessmentPointCA7()" type="number" min="0" max="2" class="assessmentPointCA7" ></td> --}}
                                        <td><input onblur="commentCA7()" type="text" min="0" max="2" class="road" name="" id=""></td>
                                      </tr>
                                      <tr>
                                        <td >Use high performance machineries with low fuel consumption and low air emission</td>
                                        <td></td>
                                        <td>2</td>
                                        <td><input onblur="findTargetPointCA7()" type="number" min="0" max="2" class="targetPointCA7"></td>
                                        {{-- <td><input onblur="findAssessmentPointCA7()" type="number" min="0" max="2" class="assessmentPointCA7" ></td> --}}
                                        <td><input onblur="commentCA7()" type="text" min="0" max="2" class="road" name="" id=""></td>
                                      </tr>
                                      <tr>
                                        <td >Provision of ESCP and Environmental Monitoring Report (EMR) – (eg. Water/ Air/ Noise Quality ) in the contract</td>
                                        <td></td>
                                        <td>2</td>
                                        <td><input onblur="findTargetPointCA7()" type="number" min="0" max="2" class="targetPointCA7"></td>
                                        {{-- <td><input onblur="findAssessmentPointCA7()" type="number" min="0" max="2" class="assessmentPointCA7" ></td> --}}
                                        <td><input onblur="commentCA7()" type="text" min="0" max="2" class="road" name="" id=""></td>
                                      </tr>
                  
                                      <tr >
                                        <td style="display: none">markahCA7<input type="text" name="markahCA7" id="markahCA7" /></td>            
                                      </tr>
                  
                                     
                  
                                      <tr >
                                        <td colspan="3"> SUB TOTAL CA POINT</td>
                                        <td>22</td>
                                        <td style="display: none">markahCA<input type="text" name="markahCA" id="markahCA" /></td>            
                                        <td></td>
                                        <td></td>
                                      </tr>

                                      <tr>
                                        <td>MR</td>
                                        <td colspan="6" align="left">MATERIAL & RESOURCES</td>
                                       
                                        
                                        
                                        
                                      </tr>
                    
                                      <tr>
                                        <td colspan="1" rowspan="6">MR 1</td>
                                        <td colspan="2">MATERIAL REUSE	</td>
                                        {{-- <td></td> --}}
                                        <td>5</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td></td>
                                        
                                        
                                      </tr>
                    
                                      <tr>
                                        <td>Reuse at a minimum 30% of existing pavement materials by estimated volume</td>
                                        <td rowspan="4">CJ</td>
                                        <td>2</td>
                                        <td><input onblur="findTargetPointMR1()" type="number" min="0" max="2" class="targetPointMR1"></td>
                                        {{-- <td><input onblur="findAssessmentPointMR1()" type="number" min="0" max="2" class="assessmentPointMR1"></td> --}}
                                        <td><input onblur="commentMR1()" type="text" min="0" max="2" class="road"></td>
                                      </tr>
                  
                                      <tr>
                                        <td>Reuse of existing material other than pavement materials </td>
                                        <td>1</td>
                                        <td><input onblur="findTargetPointMR1()" type="number" min="0" max="2" class="targetPointMR1"></td>
                                        {{-- <td><input onblur="findAssessmentPointMR1()" type="number" min="0" max="2" class="assessmentPointMR1"></td> --}}
                                        <td><input onblur="commentMR1()" type="text" min="0" max="2" class="road"></td>
                                      </tr>
                  
                                      <tr>
                                        <td>Earthwork balance </td>
                                        <td>1</td>
                                        <td><input onblur="findTargetPointMR1()" type="number" min="0" max="2" class="targetPointMR1"></td>
                                        {{-- <td><input onblur="findAssessmentPointMR1()" type="number" min="0" max="2" class="assessmentPointMR1"></td> --}}
                                        <td><input onblur="commentMR1()" type="text" min="0" max="2" class="road"></td>
                                      </tr>
                  
                                      <tr>
                                        <td>Fiber Roll Netting using biodegradable material at site for erosion control (eg. Wooden dust, coconut fiber)</td>
                                        <td>1</td>
                                        <td><input onblur="findTargetPointMR1()" type="number" min="0" max="2" class="targetPointMR1"></td>
                                        {{-- <td><input onblur="findAssessmentPointMR1()" type="number" min="0" max="2" class="assessmentPointMR1"></td> --}}
                                        <td><input onblur="commentMR1()" type="text" min="0" max="2" class="road"></td>
                                      </tr>
                  
                                      <tr>
                                        <td>To use reusable formwork for structure (eg: steel/ fiber formwork)</td>
                                        <td ></td>
                                        <td>1</td>
                                        <td><input onblur="findTargetPointMR1()" type="number" min="0" max="2" class="targetPointMR1"></td>
                                        {{-- <td><input onblur="findAssessmentPointMR1()" type="number" min="0" max="2" class="assessmentPointMR1"></td> --}}
                                        <td><input onblur="commentMR1()" type="text" min="0" max="2" class="road"></td>
                                      </tr>
                  
                                      <tr >
                                        <td style="display: none">markahMR1<input type="text" name="markahMR1" id="markahMR1" /></td>            
                                      </tr>
                  
                                      <tr>
                                        <td colspan="1" rowspan="5">MR 2</td>
                                        <td colspan="2">GREEN PRODUCT</td>
                                        {{-- <td></td> --}}
                                        <td>4</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td></td>
                                        
                                        
                                      </tr>
                  
                                      <tr>
                                        <td >Green Products Scoring System (GPSS) of 70% - 100%</td>
                                        <td rowspan="4">CASKT</td>
                                        <td>4</td>
                                        <td><input onblur="findTargetPointMR2()" type="number" min="0" max="2" class="targetPointMR2"></td>
                                        {{-- <td><input onblur="findAssessmentPointMR2()" type="number" min="0" max="2" class="assessmentPointMR2"></td> --}}
                                        <td><input onblur="commentMR()" type="text" min="0" max="2" class="road"></td>
                                      </tr>
                                      <tr>
                                        <td >Green Products Scoring System (GPSS) of 50% - 69%</td>
                                        {{-- <td></td> --}}
                                        <td>3</td>
                                        <td><input onblur="findTargetPointMR2()" type="number" min="0" max="2" class="targetPointMR2"></td>
                                        {{-- <td><input onblur="findAssessmentPointMR2()" type="number" min="0" max="2" class="assessmentPointMR2"></td> --}}
                                        <td><input onblur="commentMR2()" type="text" min="0" max="2" class="road"></td>
                                      </tr>
                                      <tr>
                                        <td >Green Products Scoring System (GPSS) of 40% - 49%</td>
                                        {{-- <td></td> --}}
                                        <td>2</td>
                                        <td><input onblur="findTargetPointMR2()" type="number" min="0" max="2" class="targetPointMR2"></td>
                                        {{-- <td><input onblur="findAssessmentPointMR2()" type="number" min="0" max="2" class="assessmentPointMR2"></td> --}}
                                        <td><input onblur="commentMR2()" type="text" min="0" max="2" class="road"></td>
                                      </tr>
                                      <tr>
                                        <td >Use Green Product Scoring System (GPSS)</td>
                                        {{-- <td></td> --}}
                                        <td>1</td>
                                        <td><input onblur="findTargetPointMR2()" type="number" min="0" max="2" class="targetPointMR2"></td>
                                        {{-- <td><input onblur="findAssessmentPointMR2()" type="number" min="0" max="2" class="assessmentPointMR2"></td> --}}
                                        <td><input onblur="commentMR2()" type="text" min="0" max="2" class="road"></td>
                                      </tr>
                  
                                      <tr >
                                        <td style="display: none">markahMR2<input type="text" name="markahMR2" id="markahMR2" /></td>            
                                      </tr>
                  
                                      <tr>
                                        <td colspan="1" rowspan="3">MR 3</td>
                                        <td colspan="2">ROAD INVENTORIES</td>
                                        {{-- <td></td> --}}
                                        <td>2</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td></td>
                                        
                                        
                                      </tr>
                  
                                      <tr>
                                        <td >Provide updated master inventory of road asset / warranty of material/product after completion of road works</td>
                                        <td rowspan="2">CSFJ</td>
                                        <td>1</td>
                                        <td><input onblur="findTargetPointMR3()" type="number" min="0" max="2" class="targetPointMR3"></td>
                                        {{-- <td><input onblur="findAssessmentPointMR3()" type="number" min="0" max="2" class="assessmentPointMR3"></td> --}}
                                        <td><input onblur="commentMR3()" type="text" min="0" max="2" class="road"></td>
                                      </tr>
                                      <tr>
                                        <td >Provide established master inventory of  road asset / warranty of material/product of existing road </td>
                                        {{-- <td></td> --}}
                                        <td>1</td>
                                        <td><input onblur="findTargetPointMR3()" type="number" min="0" max="2" class="targetPointMR3"></td>
                                        {{-- <td><input onblur="findAssessmentPointMR3()" type="number" min="0" max="2" class="assessmentPointMR3"></td> --}}
                                        <td><input onblur="commentMR3()" type="text" min="0" max="2" class="road"></td>
                                      </tr>
                  
                                      <tr >
                                        <td style="display: none">markahMR3<input type="text" name="markahMR3" id="markahMR3" /></td>            
                                      </tr>
                  
                                      <tr>
                                        <td colspan="1" rowspan="2">MR 4</td>
                                        <td colspan="2">EFFICIENT ROAD LIGHTINGS</td>
                                        {{-- <td></td> --}}
                                        <td>1</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td></td>
                                        
                                        
                                      </tr>
                  
                                      <tr>
                                        <td >All systems should be designed to use energy efficient road lightings, while complying to standard and specification for road lightings (eg. MS 825 part 1:2007)</td>
                                        <td rowspan="1">CKE</td>
                                        <td>1</td>
                                        <td><input onblur="findTargetPointMR4()" type="number" min="0" max="2" class="targetPointMR4"></td>
                                        {{-- <td><input onblur="findAssessmentPointMR4()" type="number" min="0" max="2" class="assessmentPointMR4"></td> --}}
                                        <td><input onblur="commentMR4()" type="text" min="0" max="2" class="road"></td>
                                      </tr>
                  
                                      <tr >
                                        <td style="display: none">markahMR4<input type="text" name="markahMR4" id="markahMR4" /></td>            
                                      </tr>
                  
                                      <tr >
                                        <td colspan="3"> SUB TOTAL MR POINT</td>
                                        <td>12</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                      </tr>
                  
                                      <tr >
                                        <td colspan="3"> TOTAL CORE POINT</td>
                                        <td>69</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                      </tr>
                  
                                      <tr>
                                        <td>EC</td>
                                        <td colspan="6" align="left">ELECTIVE CRITERIAS</td>
                                       
                                        
                                        
                                        
                                      </tr>
                    
                                      <tr>
                                        <td colspan="1" rowspan="4">SM 5 - EC</td>
                                        <td colspan="2">SERVICES FOR DISABLED USERS	</td>
                                        {{-- <td></td> --}}
                                        <td>3</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td></td>
                                        
                                        
                                      </tr>
                  
                                      <tr>
                                        <td >Crossing for disabled users with noise making devices installed</td>
                                        <td></td>
                                        <td>1</td>
                                        <td><input onblur="findTargetPointSM5EC()" type="number" min="0" max="2" class="targetPointSM5EC"></td>
                                        <td><input onblur="findAssessmentPointSM5EC()" type="number" min="0" max="2" class="assessmentPointSM5EC"></td>
                                        <td><input onblur="commentSM5EC()" type="text" min="0" max="2" class="road"></td>
                                      </tr>
                  
                                      <tr>
                                        <td >Walkway access for disabled users by providing sidewalks sloped for easy access</td>
                                        <td></td>
                                        <td>1</td>
                                        <td><input onblur="findTargetPointSM5EC()" type="number" min="0" max="2" class="targetPointSM5EC"></td>
                                        <td><input onblur="findAssessmentPointSM5EC()" type="number" min="0" max="2" class="assessmentPointEC"></td>
                                        <td><input onblur="commentSM5EC()" type="text" min="0" max="2" class="road"></td>
                                      </tr>
                  
                                      <tr>
                                        <td >Tac tile on the pedestrian pathway and access for disabled users</td>
                                        <td></td>
                                        <td>1</td>
                                        <td><input onblur="findTargetPointSM5EC()" type="number" min="0" max="2" class="targetPointSM5EC"></td>
                                        <td><input onblur="findAssessmentPointSM5EC()" type="number" min="0" max="2" class="assessmentPointSM5EC"></td>
                                        <td><input onblur="commentSM5EC()" type="text" min="0" max="2" class="road"></td>
                                      </tr>
                  
                                      <tr >
                                        <td style="display: none">markahSM5EC<input type="text" name="markahSM5EC" id="markahSM5EC" /></td>            
                                      </tr>
                  
                                      <tr>
                                        <td colspan="1" rowspan="4">SM 6 - EC</td>
                                        <td colspan="2">NOISE CONTROL	</td>
                                        {{-- <td></td> --}}
                                        <td>2</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td></td>
                                        
                                        
                                      </tr>
                  
                                      <tr>
                                        <td >The pavement mix design  by using quiet pavement</td>
                                        <td></td>
                                        <td>2</td>
                                        <td><input onblur="findTargetPointSM6EC()" type="number" min="0" max="2" class="targetPointSM6EC"></td>
                                        {{-- <td><input onblur="findAssessmentPointSM6EC()" type="number" min="0" max="2" class="assessmentPointSM6EC"></td> --}}
                                        <td><input onblur="commentSM6EC()" type="text" min="0" max="2" class="road"></td>
                                      </tr>
                  
                                      <tr>
                                        <td >Noise barrier shall be provided in sensitive areas such as housing situated beside busy roads or highways, schools and hospitals</td>
                                        <td></td>
                                        <td>2</td>
                                        <td><input onblur="findTargetPointSM6EC()" type="number" min="0" max="2" class="targetPointSM6EC"></td>
                                        {{-- <td><input onblur="findAssessmentPointSM6EC()" type="number" min="0" max="2" class="assessmentPointSM6EC"></td> --}}
                                        <td><input onblur="commentSM6EC()" type="text" min="0" max="2" class="road"></td>
                                      </tr>
                  
                                      <tr>
                                        <td >Buffer Zone </td>
                                        <td></td>
                                        <td>2</td>
                                        <td><input onblur="findTargetPointSM6EC()" type="number" min="0" max="2" class="targetPointSM6EC"></td>
                                        {{-- <td><input onblur="findAssessmentPointSM6EC()" type="number" min="0" max="2" class="assessmentPointSM6EC"></td> --}}
                                        <td><input onblur="commentSM6EC()" type="text" min="0" max="2" class="road"></td>
                                      </tr>
                  
                                      <tr >
                                        <td style="display: none">markahSM6EC<input type="text" name="markahSM6EC" id="markahSM6EC" /></td>            
                                      </tr>
                  
                                      <tr>
                                        <td colspan="1" rowspan="2">EW 3 - EC</td>
                                        <td colspan="2">ECOLOGICAL CONNECTIVITY		</td>
                                        {{-- <td></td> --}}
                                        <td>5</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td></td>
                                        
                                        
                                      </tr>
                  
                                      <tr>
                                        <td >"Provide dedicated wildlife crossing structures and protective fencing as determined by Environmental Impact Assessment (EIA) report 
                                          OR
                                          Provide sound barrier at sensitive area for wildlife"</td>
                                        <td></td>
                                        <td>5</td>
                                        <td><input onblur="findTargetPointEW3EC()" type="number" min="0" max="2" class="targetPointEW3EC"></td>
                                        {{-- <td><input onblur="findAssessmentPointEW3EC()" type="number" min="0" max="2" class="assessmentPointEW3EC"></td> --}}
                                        <td><input onblur="commentEW3EC()" type="text" min="0" max="2" class="road"></td>
                                      </tr>
                  
                                      <tr >
                                        <td style="display: none">markahEW3EC<input type="text" name="markahEW3EC" id="markahEW3EC" /></td>            
                                      </tr>
                  
                                      <tr>
                                        <td colspan="1" rowspan="2">AE 2 - EC</td>
                                        <td colspan="2"> SCENIC VIEWS </td>
                                        {{-- <td></td> --}}
                                        <td>5</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td></td>
                                        
                                        
                                      </tr>
                  
                                      <tr>
                                        <td >"Provide dedicated wildlife crossing structures and protective fencing as determined by Environmental Impact Assessment (EIA) report 
                                          OR
                                          Provide sound barrier at sensitive area for wildlife"</td>
                                        <td></td>
                                        <td>5</td>
                                        <td><input onblur="findTargetPointAE2EC()" type="number" min="0" max="2" class="targetPointAE2EC"></td>
                                        {{-- <td><input onblur="findAssessmentPointAE2EC()" type="number" min="0" max="2" class="assessmentPointAE2EC"></td> --}}
                                        <td><input onblur="commentAE2EC()" type="text" min="0" max="2" class="road"></td>
                                      </tr>
                  
                                      <tr >
                                        <td style="display: none">markahAE2EC<input type="text" name="markahAE2EC" id="markahAE2EC" /></td>            
                                      </tr>
                  
                                      <tr>
                                        <td colspan="1" rowspan="5">AE 3 - EC</td>
                                        <td colspan="2"> PEDESTRIAN ACCESS </td>
                                        {{-- <td></td> --}}
                                        <td>5</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td></td>
                                        
                                        
                                      </tr>
                  
                                      <tr>
                                        <td >Zebra Crossing or Signalised Pedestrian Crossing  and Refuge Island</td>
                                        <td></td>
                                        <td>1</td>
                                        <td><input onblur="findTargetPointAE3EC()" type="number" min="0" max="2" class="targetPointAE3EC"></td>
                                        {{-- <td><input onblur="findAssessmentPointAE3EC()" type="number" min="0" max="2" class="assessmentPointAE3EC"></td> --}}
                                        <td><input onblur="commentAE3EC()" type="text" min="0" max="2" class="road"></td>
                                      </tr>
                  
                                      <tr>
                                        <td >Overhead Pedestrian Bridge</td>
                                        <td></td>
                                        <td>2</td>
                                        <td><input onblur="findTargetPointAE3EC()" type="number" min="0" max="2" class="targetPointAE3EC"></td>
                                        {{-- <td><input onblur="findAssessmentPointAE3EC()" type="number" min="0" max="2" class="assessmentPointAE3EC"></td> --}}
                                        <td><input onblur="commentAE3EC()" type="text" min="0" max="2" class="road"></td>
                                      </tr>
                                      <tr>
                                        <td >Sidewalk / Walkway and Raised Crosswalk</td>
                                        <td></td>
                                        <td>1</td>
                                        <td><input onblur="findTargetPointAE3EC()" type="number" min="0" max="2" class="targetPointAE3EC"></td>
                                        {{-- <td><input onblur="findAssessmentPointAE3EC()" type="number" min="0" max="2" class="assessmentPointAE3EC"></td> --}}
                                        <td><input onblur="commentAE3EC()" type="text" min="0" max="2" class="road"></td>
                                      </tr>
                                      <tr>
                                        <td >Covered walkway</td>
                                        <td></td>
                                        <td>1</td>
                                        <td><input onblur="findTargetPointAE3EC()" type="number" min="0" max="2" class="targetPointAE3EC"></td>
                                        {{-- <td><input onblur="findAssessmentPointAE3EC()" type="number" min="0" max="2" class="assessmentPointAE3EC"></td> --}}
                                        <td><input onblur="commentAE3EC()" type="text" min="0" max="2" class="road"></td>
                                      </tr>
                  
                                      <tr >
                                        <td style="display: none">markahAE3EC<input type="text" name="markahAE3EC" id="markahAE3EC" /></td>            
                                      </tr>
                  
                                      <tr>
                                        <td colspan="1" rowspan="5">AE 4 - EC</td>
                                        <td colspan="2"> MOTORCYCLE LANE </td>
                                        {{-- <td></td> --}}
                                        <td>6</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td></td>
                                        
                                        
                                      </tr>
                  
                                      <tr>
                                        <td >Paved shoulder, non-exclusive motorcycle lane and end treatment at junction</td>
                                        <td></td>
                                        <td>1</td>
                                        <td><input onblur="findTargetPointAE4EC()" type="number" min="0" max="2" class="targetPointAE4EC"></td>
                                        {{-- <td><input onblur="findAssessmentPointEC()" type="number" min="0" max="2" class="assessmentPointEC"></td> --}}
                                        <td><input onblur="commentAE4EC()" type="text" min="0" max="2" class="road"></td>
                                      </tr>
                  
                                      <tr>
                                        <td >Exclusive motorcycle lane</td>
                                        <td></td>
                                        <td>2</td>
                                        <td><input onblur="findTargetPointAE4EC()" type="number" min="0" max="2" class="targetPointAE4EC"></td>
                                        {{-- <td><input onblur="findAssessmentPointEC()" type="number" min="0" max="2" class="assessmentPointEC"></td> --}}
                                        <td><input onblur="commentAE4EC()" type="text" min="0" max="2" class="road"></td>
                                      </tr>
                                      <tr>
                                        <td >Overhead motorcycle bridge</td>
                                        <td></td>
                                        <td>2</td>
                                        <td><input onblur="findTargetPointAE4EC()" type="number" min="0" max="2" class="targetPointAE4EC"></td>
                                        {{-- <td><input onblur="findAssessmentPointEC()" type="number" min="0" max="2" class="assessmentPointEC"></td> --}}
                                        <td><input onblur="commentAE4EC()" type="text" min="0" max="2" class="road"></td>
                                      </tr>
                                      <tr>
                                        <td >Motorcycle shelter</td>
                                        <td></td>
                                        <td>1</td>
                                        <td><input onblur="findTargetPointAE4EC()" type="number" min="0" max="2" class="targetPointAE4EC"></td>
                                        {{-- <td><input onblur="findAssessmentPointEC()" type="number" min="0" max="2" class="assessmentPointEC"></td> --}}
                                        <td><input onblur="commentAE4EC()" type="text" min="0" max="2" class="road"></td>
                                      </tr>
                  
                                      <tr >
                                        <td style="display: none">markahAE4EC<input type="text" name="markahAE4EC" id="markahAE4EC" /></td>            
                                      </tr>
                  
                                      <tr>
                                        <td colspan="1" rowspan="2">AE 5 - EC</td>
                                        <td colspan="2"> REST AREA </td>
                                        {{-- <td></td> --}}
                                        <td>2</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td></td>
                                        
                                        
                                      </tr>
                  
                                      <tr>
                                        <td >Provide or maintain existing rest area facilities along the road </td>
                                        <td></td>
                                        <td>2</td>
                                        <td><input onblur="findTargetPointAE5EC()" type="number" min="0" max="2" class="targetPointAE5EC"></td>
                                        {{-- <td><input onblur="findAssessmentPointAE5EC()" type="number" min="0" max="2" class="assessmentPointEC"></td> --}}
                                        <td><input onblur="commentAE5EC()" type="text" min="0" max="2" class="road"></td>
                                      </tr>
                  
                                      <tr >
                                        <td style="display: none">markahAE5EC<input type="text" name="markahAE5EC" id="markahAE5EC" /></td>            
                                      </tr>
                  
                                      <tr>
                                        <td colspan="1" rowspan="3">AE 6 - EC</td>
                                        <td colspan="2"> BICYCLE ASSESS </td>
                                        {{-- <td></td> --}}
                                        <td>2</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td></td>
                                        
                                        
                                      </tr>
                  
                                      <tr>
                                        <td >Implement physical or constructed changes to the roadway structure, dimensions, or form that provide bicycle-only facilities with dedicated access (such as bicycle lane). Lanes shared with motorized vehicles do not meet this requirement </td>
                                        <td></td>
                                        <td>1</td>
                                        <td><input onblur="findTargetPointAE6EC()" type="number" min="0" max="2" class="targetPointAE6EC"></td>
                                        {{-- <td><input onblur="findAssessmentPointAE6EC()" type="number" min="0" max="2" class="assessmentPointEC"></td> --}}
                                        <td><input onblur="commentAE6EC()" type="text" min="0" max="2" class="road"></td>
                                      </tr>
                  
                                      <tr>
                                        <td >Implement physical or constructed changes to the roadway structure, dimensions, or form that provide bicycle-only facilities with dedicated access (such as bicycle lane). Lanes shared with motorized vehicles do not meet this requirement</td>
                                        <td></td>
                                        <td>2</td>
                                        <td><input onblur="findTargetPointAE6EC()" type="number" min="0" max="2" class="targetPointAE6EC"></td>
                                        {{-- <td><input onblur="findAssessmentPointAE6EC()" type="number" min="0" max="2" class="assessmentPointAE6EC"></td> --}}
                                        <td><input onblur="commentAE6EC()" type="text" min="0" max="2" class="road"></td>
                                      </tr>
                  
                                      <tr >
                                        <td style="display: none">markahAE6EC<input type="text" name="markahAE6EC" id="markahAE6EC" /></td>            
                                      </tr>
                  
                                      
                  
                                      <tr >
                                        <td colspan="3"> TOTAL ELECTIVE POINT</td>
                                        <td>27</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                      </tr>

                                      <tr>
                                        <td>IN</td>
                                        <td colspan="6" align="left">INNOVATION</td>
                                       
                                        
                                        
                                        
                                      </tr>
                    
                                      <tr>
                                        <td colspan="1" rowspan="2">IN 1</td>
                                        <td colspan="2">ANY RELATED INNOVATION</td>
                                        {{-- <td></td> --}}
                                        <td>5</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td></td>
                                        
                                        
                                      </tr>
                    
                                      <tr>
                                        <td>Come up with an idea for a design or construction best practice for road that is not currently included in Manual pH JKR and is more sustainable than standard or conventional practices</td>
                                        <td rowspan="1">ANY</td>
                                        <td>5</td>
                                        <td><input onblur="findTargetPointIN()" type="number" min="0" max="2" class="targetPointIN"></td>
                                        {{-- <td><input onblur="findAssessmentPointIN()" type="number" min="0" max="2" class="assessmentPointIN"></td> --}}
                                        <td><input onblur="commentIN()" type="text" min="0" max="2" class="road" name="" id=""></td>
                                      </tr>
                  
                                      <tr >
                                        <td colspan="3"> TOTAL INNOVATION POINT</td>
                                        <td><input type="text" name="markahIN" id="markahIN" /></td> 
                                        <td></td>           
                                        <td></td>
                                        <td></td>
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
                    <h2 class="h2 mb-3">BORANG VERIFIKASI PERMARKAHAN JALAN</h2>
                </div>

                <div class="col">
                    <div>
                        <form action="/penilaian_reka_bentuk_jalan/simpan_isi_skor_kad/{$id}" method="post" enctype="multipart/form-data">
                          @method('POST')
                          @csrf
                          <table>
                            <div class="row3 mx-4 table-responsive scrollbar">
                                <div class="col">
                                  <table class="table table-bordered line-table text-center" style="width: 100%">
                                    <thead class="text-white bg-orange-jkr">
                                      <tr>
                            
                                        
                                        <th >Kod</th>
                                        <th >Kriteria</th>
                                        <th >Responsibility</th>
                                        <th colspan="3">Design</th>
                                        
                         
                                      </tr>
                                      <tr>
                                        
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th >MAX POINT</th>
                                        <th >TARGET POINT</th>
                                        {{-- <th >ASSESSMENT POINT</th> --}}
                                        <th>COMMENT BY ASSESSOR</th>
                                      </tr>
                    
                                    </thead>
                                    <tbody>
                  
                                      <tr>
                                        <td>SM</td>
                                        <td colspan="" align="left">SUSTAINABLE SITE PLANNING AND MANAGEMENT</td>  
                                      </tr>
                    
                                      <tr>
                                        <td colspan="1" rowspan="12">SM1</td>
                                        <td colspan="2">REQUIREMENT FOR ROAD WORKS DESIGN</td>
                                        <td>7</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td></td>
                                        
                                        
                                      </tr>
                    
                                      <tr>
                                        <td >Traffic study</td>
                                        <td rowspan="7">CJ</td>
                                        <td>1</td>
                                        <td><input onblur="findTargetPointSM1()" type="number" min="0" max="2" class="targetPointSM1" ></td>
                                        {{-- <td><input onblur="findAssessmentPointSM()" type="number" min="0" max="2" class="assessmentPointSM"></td> --}}
                                        <td><input onblur="commentSM1()" type="text" min="0" max="2" class="road" name="" id=""></td>
                                      </tr>
                    
                                      <tr>
                                        <td >Site investigation data</td>
                                        <td>1</td>
                                        <td><input onblur="findTargetPointSM1()" type="number" min="0" max="2" class="targetPointSM1" ></td>
                                        {{-- <td><input onblur="findAssessmentPointSM()" type="number" min="0" max="2" class="assessmentPointSM"></td> --}}
                                        <td><input onblur="commentSM1()" type="text" min="0" max="2" class="road" name="" id=""></td>
                                       
                                      </tr>
                  
                                      <tr>
                                        <td >Flood records</td>
                                        <td>1</td>
                                        <td><input onblur="findTargetPointSM1()" type="number" min="0" max="2" class="targetPointSM1" ></td>
                                        {{-- <td><input onblur="findAssessmentPointSM()" type="number" min="0" max="2" class="assessmentPointSM"></td> --}}
                                        <td><input onblur="commentSM1()" type="text" min="0" max="2" class="road" name="" id=""></td>
                                        
                                      </tr>
                    
                                      <tr>
                                        <td >Response to public complaints or requests from public, local authority & etc.</td>
                                        <td>1</td>
                                        <td><input onblur="findTargetPointSM1()" type="number" min="0" max="2" class="targetPointSM1" ></td>
                                        {{-- <td><input onblur="findAssessmentPointSM()" type="number" min="0" max="2" class="assessmentPointSM"></td> --}}
                                        <td><input onblur="commentSM1()" type="text" min="0" max="2" class="road" name="" id=""></td>
                                        
                                      </tr>
                  
                                      <tr>
                                        <td >Value Management (VM)</td>
                                        <td>1</td>
                                        <td><input onblur="findTargetPointSM1()" type="number" min="0" max="2" class="targetPointSM1" ></td>
                                        {{-- <td><input onblur="findAssessmentPointSM()" type="number" min="0" max="2" class="assessmentPointSM"></td> --}}
                                        <td><input onblur="commentSM1()" type="text" min="0" max="2" class="road" name="" id=""></td>
                                   
                                      </tr>
                  
                                      <tr>
                                        <td >Survey Drawing</td>
                                        <td>1</td>
                                        <td><input onblur="findTargetPointSM1()" type="number" min="0" max="2" class="targetPointSM1" ></td>
                                        {{-- <td><input onblur="findAssessmentPointSM()" type="number" min="0" max="2" class="assessmentPointSM"></td> --}}
                                        <td><input onblur="commentSM1()" type="text" min="0" max="2" class="road" name="" id=""></td>
                                        
                                    
                                      </tr>
                  
                                      <tr>
                                        <td >As Built Drawings</td>
                                        <td>1</td>
                                        <td><input onblur="findTargetPointSM1()" type="number" min="0" max="2" class="targetPointSM1" ></td>
                                        {{-- <td><input onblur="findAssessmentPointSM()" type="number" min="0" max="2" class="assessmentPointSM"></td> --}}
                                        <td><input onblur="commentSM1()" type="text" min="0" max="2" class="road" name="" id=""></td>
                                  
                                      </tr>
                  
                                      <tr>
                                        <td >Accident Reports</td>
                                        <td>CSFJ</td>
                                        <td>1</td>
                                        <td><input onblur="findTargetPointSM1()" type="number" min="0" max="2" class="targetPointSM1" ></td>
                                        {{-- <td><input onblur="findAssessmentPointSM()" type="number" min="0" max="2" class="assessmentPointSM"></td> --}}
                                        <td><input onblur="commentSM1()" type="text" min="0" max="2" class="road" name="" id=""></td>
                                        
                                      </tr>
                  
                                      <tr>
                                        <td >Structure Replacement</td>
                                        <td rowspan="3">CJ</td>
                                        <td>1</td>
                                        <td><input onblur="findTargetPointSM1()" type="number" min="0" max="2" class="targetPointSM1" ></td>
                                        {{-- <td><input onblur="findAssessmentPointSM()" type="number" min="0" max="2" class="assessmentPointSM"></td> --}}
                                        <td><input onblur="commentSM1()" type="text" min="0" max="2" class="road" name="" id=""></td>
                                        
                                      </tr>
                  
                                      <tr>
                                        <td >Forensic Report</td>
                                        <td>1</td>
                                        <td><input onblur="findTargetPointSM1()" type="number" min="0" max="2" class="targetPointSM1" ></td>
                                        {{-- <td><input onblur="findAssessmentPointSM()" type="number" min="0" max="2" class="assessmentPointSM"></td> --}}
                                        <td><input onblur="commentSM1()" type="text" min="0" max="2" class="road" name="" id=""></td>
                                        
                                      </tr>
                  
                                      <tr>
                                        <td >Pavement Evaluation</td>
                                        <td>1</td>
                                        <td><input onblur="findTargetPointSM1()" type="number" min="0" max="2" class="targetPointSM1" ></td>
                                        {{-- <td><input onblur="findAssessmentPointSM()" type="number" min="0" max="2" class="assessmentPointSM"></td> --}}
                                        <td><input onblur="commentSM1()" type="text" min="0" max="2" class="road" name="" id=""></td>
                                      </tr>
                  
                                      <td style="display: none">markahSM1<input type="text" name="markahSM1" id="markahSM1" /></td>            
                  
                  
                                     
                  
                                      <tr>
                                        <td colspan="1" rowspan="9">SM2</td>
                                        <td colspan="2">ROAD ALIGNMENT</td>
                                        <td>6</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td></td>
                                        
                                        
                                      </tr>
                    
                                      <tr>
                                        <td >Slope not more than 6 berms</td>
                                        <td rowspan="7">CJ</td>
                                        <td>1</td>
                                        <td><input onblur="findTargetPointSM2()" type="number" min="0" max="2" class="targetPointSM2" ></td>
                                        {{-- <td><input onblur="findAssessmentPointSM()" type="number" min="0" max="2" class="assessmentPointSM"></td> --}}
                                        <td><input onblur="commentSM2()" type="text" min="0" max="2" class="road" name="" id=""></td>
                                      </tr>
                    
                                      <tr>
                                        <td >Cut slope not steeper than 1:1.5 or Rock slope not steeper than 4:1 </td>
                                        {{-- <td rowspan="7">CKG</td> --}}
                                        <td>1</td>
                                        <td><input onblur="findTargetPointSM2()" type="number" min="0" max="2" class="targetPointSM2" ></td>
                                        {{-- <td><input onblur="findAssessmentPointSM()" type="number" min="0" max="2" class="assessmentPointSM"></td> --}}
                                        <td><input onblur="commentSM2()" type="text" min="0" max="2" class="road" name="" id=""></td>
                                       
                                      </tr>
                  
                                      <tr>
                                        <td >Fill slope not steeper than 1:2</td>
                                        <td>1</td>
                                        <td><input onblur="findTargetPointSM2()" type="number" min="0" max="2" class="targetPointSM2" ></td>
                                        {{-- <td><input onblur="findAssessmentPointSM()" type="number" min="0" max="2" class="assessmentPointSM"></td> --}}
                                        <td><input onblur="commentSM2()" type="text" min="0" max="2" class="road" name="" id=""></td>
                                        
                                      </tr>
                    
                                      <tr>
                                        <td >Height of slope not more than 6m</td>
                                        <td>1</td>
                                        <td><input onblur="findTargetPointSM2()" type="number" min="0" max="2" class="targetPointSM2" ></td>
                                        {{-- <td><input onblur="findAssessmentPointSM()" type="number" min="0" max="2" class="assessmentPointSM"></td> --}}
                                        <td><input onblur="commentSM2()" type="text" min="0" max="2" class="road" name="" id=""></td>
                                        
                                      </tr>
                  
                                      <tr>
                                        <td >Maximum grade less than 7%</td>
                                        <td>1</td>
                                        <td><input onblur="findTargetPointSM2()" type="number" min="0" max="2" class="targetPointSM2" ></td>
                                        {{-- <td><input onblur="findAssessmentPointSM()" type="number" min="0" max="2" class="assessmentPointSM"></td> --}}
                                        <td><input onblur="commentSM2()" type="text" min="0" max="2" class="road" name="" id=""></td>
                                   
                                      </tr>
                  
                                      <tr>
                                        <td >No reclamation involved existing water bodies</td>
                                        <td>1</td>
                                        <td><input onblur="findTargetPointSM2()" type="number" min="0" max="2" class="targetPointSM2" ></td>
                                        {{-- <td><input onblur="findAssessmentPointSM()" type="number" min="0" max="2" class="assessmentPointSM"></td> --}}
                                        <td><input onblur="commentSM2()" type="text" min="0" max="2" class="road" name="" id=""></td>
                                        
                                    
                                      </tr>
                  
                                      <tr>
                                        <td >Provide added uphill lane (climbing lane) where the length of critical grade exceeds 5%</td>
                                        <td>1</td>
                                        <td><input onblur="findTargetPointSM2()" type="number" min="0" max="2" class="targetPointSM2" ></td>
                                        {{-- <td><input onblur="findAssessmentPointSM()" type="number" min="0" max="2" class="assessmentPointSM"></td> --}}
                                        <td><input onblur="commentSM2()" type="text" min="0" max="2" class="road" name="" id=""></td>
                                  
                                      </tr>
                  
                                      <tr>
                                        <td >Not in Sensitive Area OR Sensitive area with mitigation plan</td>
                                        <td>CASKT</td>
                                        <td>1</td>
                                        <td><input onblur="findTargetPointSM2()" type="number" min="0" max="2" class="targetPointSM2" ></td>
                                        {{-- <td><input onblur="findAssessmentPointSM()" type="number" min="0" max="2" class="assessmentPointSM"></td> --}}
                                        <td><input onblur="commentSM2()" type="text" min="0" max="2" class="road" name="" id=""></td>
                                        
                                      </tr>
                  
                                      <td style="display: none">markahSM2<input type="text" name="markahSM2" id="markahSM2" /></td>            
                  
                  
                                    
                  
                                      <tr>
                                        <td colspan="1" rowspan="8">SM3</td>
                                        <td colspan="2">SITE VEGETATION</td>
                                        <td>3</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td></td>
                     
                                      </tr>
                    
                                      <tr>
                                        <td >Slope not more than 6 berms</td>
                                        <td rowspan="7">CJ</td>
                                        <td>1</td>
                                        <td><input onblur="findTargetPointSM3()" type="number" min="0" max="2" class="targetPointSM3" ></td>
                                        {{-- <td><input onblur="findAssessmentPointSM()" type="number" min="0" max="2" class="assessmentPointSM"></td> --}}
                                        <td><input onblur="commentSM3()" type="text" min="0" max="2" class="road" name="" id=""></td>
                                      </tr>
                    
                                      <tr>
                                        <td >Use non-invasive plant species(example: grass/creeper) </td>
                                        <td>1</td>
                                        <td><input onblur="findTargetPointSM3()" type="number" min="0" max="2" class="targetPointSM3" ></td>
                                        {{-- <td><input onblur="findAssessmentPointSM()" type="number" min="0" max="2" class="assessmentPointSM"></td> --}}
                                        <td><input onblur="commentSM3()" type="text" min="0" max="2" class="road" name="" id=""></td>
                                       
                                      </tr>
                  
                                      <tr>
                                        <td >Use bio-engineering techniques (example: vetiver grass, creeper and regeneration of natural plants and material )</td>
                                        <td>1</td>
                                        <td><input onblur="findTargetPointSM3()" type="number" min="0" max="2" class="targetPointSM3" ></td>
                                        {{-- <td><input onblur="findAssessmentPointSM()" type="number" min="0" max="2" class="assessmentPointSM"></td> --}}
                                        <td><input onblur="commentSM3()" type="text" min="0" max="2" class="road" name="" id=""></td>
                                        
                                      </tr>
                    
                                      <tr>
                                        <td >Use native plant species</td>
                                        <td>1</td>
                                        <td><input onblur="findTargetPointSM3()" type="number" min="0" max="2" class="targetPointSM3" ></td>
                                        {{-- <td><input onblur="findAssessmentPointSM()" type="number" min="0" max="2" class="assessmentPointSM"></td> --}}
                                        <td><input onblur="commentSM3()" type="text" min="0" max="2" class="road" name="" id=""></td>
                                        
                                      </tr>
                  
                                      <tr>
                                        <td >Use of grass/creeper for slope protection /unpaved shoulder</td>
                                        <td>1</td>
                                        <td><input onblur="findTargetPointSM3()" type="number" min="0" max="2" class="targetPointSM3" ></td>
                                        {{-- <td><input onblur="findAssessmentPointSM()" type="number" min="0" max="2" class="assessmentPointSM"></td> --}}
                                        <td><input onblur="commentSM3()" type="text" min="0" max="2" class="road" name="" id=""></td>
                                   
                                      </tr>
                  
                                      <tr>
                                        <td >Hydroseeding with Bio-degradable Erosion Control Blanket(BECB) on slope</td>
                                        <td>1</td>
                                        <td><input onblur="findTargetPointSM3()" type="number" min="0" max="2" class="targetPointSM3" ></td>
                                        {{-- <td><input onblur="findAssessmentPointSM()" type="number" min="0" max="2" class="assessmentPointSM"></td> --}}
                                        <td><input onblur="commentSM3()" type="text" min="0" max="2" class="road" name="" id=""></td>
                                        
                                      </tr>
                  
                                      <tr>
                                        <td >Preservation of existing tree/vegetation</td>
                                        <td>1</td>
                                        <td><input onblur="findTargetPointSM3()" type="number" min="0" max="2" class="targetPointSM3" ></td>
                                        {{-- <td><input onblur="findAssessmentPointSM()" type="number" min="0" max="2" class="assessmentPointSM"></td> --}}
                                        <td><input onblur="commentSM3()" type="text" min="0" max="2" class="road" name="" id=""></td>
                                  
                                      </tr>
                  
                                      <td style="display: none">markahSM3<input type="text" name="markahSM3" id="markahSM3" /></td>            
                  
                  
                  
                                     
                  
                  
                                      <td colspan="1" rowspan="4">SM4</td>
                                      <td colspan="2">NOISE MITIGATION PLAN</td>
                                      <td>2</td>
                                      <td>0</td>
                                      <td>0</td>
                                      <td></td>
                   
                                    </tr>
                  
                                    <tr>
                                      <td >Supply and install noise barrier including maintenance during the construction and defects liability period</td>
                                      <td rowspan="7">CJ</td>
                                      <td>1</td>
                                      <td><input onblur="findTargetPointSM4()" type="number" min="0" max="2" class="targetPointSM4" ></td>
                                      {{-- <td><input onblur="findAssessmentPointSM()" type="number" min="0" max="2" class="assessmentPointSM"></td> --}}
                                      <td><input onblur="commentSM4()" type="text" min="0" max="2" class="road" name="" id=""></td>
                                    </tr>
                  
                                    <tr>
                                      <td >To ensure that all site equipment are in using low decibel to control noise pollution </td>
                                      <td>1</td>
                                      <td><input onblur="findTargetPointSM4()" type="number" min="0" max="2" class="targetPointSM4" ></td>
                                      {{-- <td><input onblur="findAssessmentPointSM()" type="number" min="0" max="2" class="assessmentPointSM"></td> --}}
                                      <td><input onblur="commentSM4()" type="text" min="0" max="2" class="road" name="" id=""></td>
                                     
                                    </tr>
                  
                                    <tr>
                                      <td >To ensure using all machineryon site are low decibel to minimize the amount of noise generated </td>
                                      <td>1</td>
                                      <td><input onblur="findTargetPointSM4()" type="number" min="0" max="2" class="targetPointSM4" ></td>
                                      {{-- <td><input onblur="findAssessmentPointSM()" type="number" min="0" max="2" class="assessmentPointSM"></td> --}}
                                      <td><input onblur="commentSM4()" type="text" min="0" max="2" class="road" name="" id=""></td>
                                      
                                    </tr>
                  
                                    <td style="display: none">markahSM4<input type="text" name="markahSM4" id="markahSM4" /></td>            
                  
                  
                                    <tr >
                                      <td colspan="3"> SUB TOTAL SM POINT</td>
                                      <td>18</td>
                                      <td></td>
                                      <td></td>
                                      <td></td>
                                    </tr>

                                    <tr>
                                        <td>PT</td>
                                        <td colspan="6" align="left">PAVEMENT TECHNOLOGIES</td>
                                       
                                        
                                        
                                        
                                      </tr>
                    
                                      <tr>
                                        <td colspan="1" rowspan="6">PT1</td>
                                        <td colspan="2">EXISTING PAVEMENT EVALUATION</td>
                                        {{-- <td></td> --}}
                                        <td>3</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td></td>
                                        
                                        
                                      </tr>
                    
                                      <tr>
                                        <td>Surface Condition Survey</td>
                                        <td rowspan="5">CSFJ</td>
                                        <td>1</td>
                                        <td><input onblur="findTargetPointPT1()" type="number" min="0" max="2" class="targetPointPT1" ></td>
                                        {{-- <td><input onblur="findAssessmentPointPT1()" type="number" min="0" max="2" class="assessmentPointPT1"></td> --}}
                                        <td><input onblur="commentPT1()" type="text" min="0" max="2" class="road" name="" id=""></td>
                                      </tr>
                    
                                      <tr>
                                        <td >Coring & Dynamic Cone Penetrometer test</td>
                                        <td>1</td>
                                        <td><input onblur="findTargetPointPT1()" type="number" min="0" max="2" class="targetPointPT1" ></td>
                                        {{-- <td><input onblur="findAssessmentPointPT1()" type="number" min="0" max="2" class="assessmentPointPT1"></td> --}}
                                        <td><input onblur="commentPT1()" type="text" min="0" max="2" class="road" name="" id=""></td>
                                      </tr>
                  
                                      <tr>
                                        <td >Deflection test</td>
                                        <td>1</td>
                                        <td><input onblur="findTargetPointPT1()" type="number" min="0" max="2" class="targetPointPT1" ></td>
                                        {{-- <td><input onblur="findAssessmentPointPT1()" type="number" min="0" max="2" class="assessmentPointPT1"></td> --}}
                                        <td><input onblur="commentPT1()" type="text" min="0" max="2" class="road" name="" id=""></td>
                                      </tr>
                    
                                      <tr>
                                        <td >Trial pit & Laboratory</td>
                                        <td>1</td>
                                        <td><input onblur="findTargetPointPT1()" type="number" min="0" max="2" class="targetPointPT1" ></td>
                                        {{-- <td><input onblur="findAssessmentPointPT1()" type="number" min="0" max="2" class="assessmentPointPT1"></td> --}}
                                        <td><input onblur="commentPT1()" type="text" min="0" max="2" class="road" name="" id=""></td>
                                      </tr>
                  
                                      <tr>
                                        <td >Surface Regularity Test (International Roughness Index, IRI)</td>
                                        <td>1</td>
                                        <td><input onblur="findTargetPointPT1()" type="number" min="0" max="2" class="targetPointPT1" ></td>
                                        {{-- <td><input onblur="findAssessmentPointPT1()" type="number" min="0" max="2" class="assessmentPointPT1"></td> --}}
                                        <td><input onblur="commentPT1()" type="text" min="0" max="2" class="road" name="" id=""></td>
                                      </tr>
                  
                                      <tr >
                                        <td style="display: none">markahPT1<input type="text" name="markahPT1" id="markahPT1" /></td>            
                                      </tr>
                  
                                      
                  
                                      <tr>
                                        <td colspan="1" rowspan="4">PT 2</td>
                                        <td colspan="2">PERMEABLE PAVEMENT</td>
                                        {{-- <td></td> --}}
                                        <td>3</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td></td>
                                        
                                        
                                      </tr>
                    
                                      {{-- <tr>
                                        <td rowspan="9">SM2</td>
                                        <td colspan="2">Road alignment</td>
                                        <td>6</td>
                                        
                                        <td><input onblur="roadWorks()" type="number" min="0" max="2" class="road" name="" id=""></td>
                                        <td><input onblur="roadWorks()" type="number" min="0" max="2" class="road" name="" id=""></td>
                                        <td><input onblur="roadWorks()" type="text" min="0" max="2" class="road" name="" id=""></td>
                                      </tr> --}}
                  
                                      <tr>
                                        <td >use of permeable (porous) pavement mix design</td>
                                        <td></td>
                                        <td>1</td>
                                        <td><input onblur="findTargetPointPT2()" type="number" min="0" max="2" class="targetPointPT2" ></td>
                                        {{-- <td><input onblur="findAssessmentPointPT2()" type="number" min="0" max="2" class="assessmentPointPT2"></td> --}}
                                        <td><input onblur="commentPT2()" type="text" min="0" max="2" class="road" name="" id=""></td>
                                      </tr>
                                      <tr>
                                        <td >Pavement crossfall 2.5% and min unpaved shoulder to drain</td>
                                        <td></td>
                                        <td>1</td>
                                        <td><input onblur="findTargetPointPT2()" type="number" min="0" max="2" class="targetPointPT2" ></td>
                                        {{-- <td><input onblur="findAssessmentPointPT2()" type="number" min="0" max="2" class="assessmentPointPT2"></td> --}}
                                        <td><input onblur="commentPT2()" type="text" min="0" max="2" class="road" name="" id=""></td>
                                      </tr>
                                      <tr>
                                        <td >Drainability of porous asphalt wearing course having a minimum thickness of 50mm</td>
                                        <td></td>
                                        <td>1</td>
                                        <td><input onblur="findTargetPointPT2()" type="number" min="0" max="2" class="targetPointPT2" ></td>
                                        {{-- <td><input onblur="findAssessmentPointPT2()" type="number" min="0" max="2" class="assessmentPointPT2"></td> --}}
                                        <td><input onblur="commentPT2()" type="text" min="0" max="2" class="road" name="" id=""></td>
                                      </tr>
                  
                                      <tr >
                                        <td style="display: none">markahPT2<input type="text" name="markahPT2" id="markahPT2" /></td>            
                                      </tr>
                                      
                  
                                      <tr>
                                        <td colspan="1" rowspan="2">PT 3</td>
                                        <td colspan="2">PAVEMENT PERFORMANCE TRACKING</td>
                                        {{-- <td></td> --}}
                                        <td>2</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td></td>
                                        
                                        
                                      </tr>
                  
                                      <tr>
                                        <td >Use a process that allows construction quality measurements and long-term pavement performance measurements</td>
                                        <td></td>
                                        <td>2</td>
                                        <td><input onblur="findTargetPointPT3()" type="number" min="0" max="2" class="targetPointPT3" name="" id=""></td>
                                        {{-- <td><input onblur="findAssessmentPointPT3()" type="number" min="0" max="2" class="assessmentPointPT3" name="" id=""></td> --}}
                                        <td><input onblur="commentPT3()" type="text" min="0" max="2" class="road" name="" id=""></td>
                                      </tr>
                  
                                      <tr >
                                        <td style="display: none">markahPT3<input type="text" name="markahPT3" id="markahPT3" /></td>            
                                      </tr>
                                      
                  
                                      <tr>
                                        <td colspan="1" rowspan="5">PT 4</td>
                                        <td colspan="2">LONG-LIFE PAVEMENT</td>
                                        {{-- <td></td> --}}
                                        <td>4</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td></td>
                                        
                                        
                                      </tr>
                  
                                      <tr>
                                        <td >Meet the requirements of Arahan Teknik Jalan</td>
                                        <td></td>
                                        <td>1</td>
                                        <td><input onblur="findTargetPointPT4()" type="number" min="0" max="2" class="targetPointPT4"></td>
                                        {{-- <td><input onblur="findAssessmentPointPT4()" type="number" min="0" max="2" class="assessmentPointPT4"></td> --}}
                                        <td><input onblur="commentPT4()" type="text" min="0" max="2" class="road" name="" id=""></td>
                                      </tr>
                                      <tr>
                                        <td >Pavement design is in accordance</td>
                                        <td></td>
                                        <td>1</td>
                                        <td><input onblur="findTargetPointPT4()" type="number" min="0" max="2" class="targetPointPT4"></td>
                                        {{-- <td><input onblur="findAssessmentPointPT4()" type="number" min="0" max="2" class="assessmentPointPT4"></td> --}}
                                        <td><input onblur="commentPT4()" type="text" min="0" max="2" class="road" name="" id=""></td>
                                      </tr>
                                      <tr>
                                        <td >Drainability surface runoff</td>
                                        <td></td>
                                        <td>1</td>
                                        <td><input onblur="findTargetPointPT4()" type="number" min="0" max="2" class="targetPointPT4"></td>
                                        {{-- <td><input onblur="findAssessmentPointPT4()" type="number" min="0" max="2" class="assessmentPointPT4"></td> --}}
                                        <td><input onblur="commentPT4()" type="text" min="0" max="2" class="road" name="" id=""></td>
                                      </tr>
                  
                                      <tr>
                                        <td >Riqid Pavement > 40 years design life</td>
                                        <td></td>
                                        <td>2</td>
                                        <td><input onblur="findTargetPointPT4()" type="number" min="0" max="2" class="targetPointPT4"></td>
                                        {{-- <td><input onblur="findAssessmentPointPT4()" type="number" min="0" max="2" class="assessmentPointPT4"></td> --}}
                                        <td><input onblur="commentPT4()" type="text" min="0" max="2" class="road" name="" id=""></td>
                                      </tr>
                  
                                      <tr >
                                        <td style="display: none">markahPT4<input type="text" name="markahPT4" id="markahPT4" /></td>            
                                      </tr>
                  
                                      <tr >
                                        <td colspan="3"> SUB TOTAL PT POINT</td>
                                        <td>12</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                      </tr>

                                      <tr>
                                        <td>EW</td>
                                        <td colspan="6" align="left">ENVIRONMENT & WATER</td>
                                       
                                        
                                        
                                        
                                      </tr>
                    
                                      <tr>
                                        <td colspan="1" rowspan="2">EW1</td>
                                        <td colspan="2">ENVIRONMENTAL MANAGEMENT SYSTEM</td>
                                        {{-- <td></td> --}}
                                        <td>3</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td></td>
                                        
                                        
                                      </tr>
                    
                                      <tr>
                                        <td>Provision of EPW in contract (Design Stage)</td>
                                        <td rowspan="1">CSFJ</td>
                                        <td>3</td>
                                        <td><input onblur="findTargetPointEW1()" type="number" min="0" max="2" class="targetPointEW1" ></td>
                                        {{-- <td><input onblur="findAssessmentPointEW1()" type="number" min="0" max="2" class="assessmentPointEW1"></td> --}}
                                        <td><input onblur="commentEW1()" type="text" min="0" max="2" class="road" name="" id=""></td>
                                      </tr>
                  
                                      <tr >
                                        <td style="display: none">markahEW1<input type="text" name="markahEW1" id="markahEW1" /></td>            
                                      </tr>
                    
                                      
                  
                                      
                  
                                      <tr>
                                        <td colspan="1" rowspan="3">EW2</td>
                                        <td colspan="2">STORMWATER MANAGEMENT</td>
                                        {{-- <td></td> --}}
                                        <td>2</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td></td>
                                        
                                        
                                      </tr>
                  
                                      
                    
                                      {{-- <tr>
                                        <td rowspan="9">SM2</td>
                                        <td colspan="2">Road alignment</td>
                                        <td>6</td>
                                        
                                        <td><input onblur="roadWorks()" type="number" min="0" max="2" class="road" name="" id=""></td>
                                        <td><input onblur="roadWorks()" type="number" min="0" max="2" class="road" name="" id=""></td>
                                        <td><input onblur="roadWorks()" type="text" min="0" max="2" class="road" name="" id=""></td>
                                      </tr> --}}
                  
                                      <tr>
                                        <td >Develop a stormwater management documents and frawing plans</td>
                                        <td rowspan="2">CKAS</td>
                                        <td>1</td>
                                        <td><input onblur="findTargetPointEW2()" type="number" min="0" max="2" class="targetPointEW2" ></td>
                                        {{-- <td><input onblur="findAssessmentPointEW2()" type="number" min="0" max="2" class="assessmentPointEW2"></td> --}}
                                        <td><input onblur="commentEW2()" type="text" min="0" max="2" class="road" name="" id=""></td>
                                      </tr>
                                      <tr>
                                        <td >Develop a stromwater management plan for the site using stormwater</td>
                                        {{-- <td></td> --}}
                                        <td>1</td>
                                        <td><input onblur="findTargetPointEW2()" type="number" min="0" max="2" class="targetPointEW2" ></td>
                                        {{-- <td><input onblur="findAssessmentPointEW2()" type="number" min="0" max="2" class="assessmentPointEW2"></td> --}}
                                        <td><input onblur="commentEW2()" type="text" min="0" max="2" class="road" name="" id=""></td>
                                      </tr>
                  
                                      <tr >
                                        <td style="display: none">markahEW2<input type="text" name="markahEW2" id="markahEW2" /></td>            
                                      </tr>
                                      
                                      <tr >
                                        <td colspan="3"> SUB TOTAL EW POINT</td>
                                        <td>5</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                      </tr>
                  
                                      <tr>
                                        <td>AE</td>
                                        <td colspan="6" align="left">ACCESS & EQUITY</td>
                                       
                                        
                                        
                                        
                                      </tr>
                    
                                      <tr>
                                        <td colspan="1" rowspan="5">AE 1</td>
                                        <td colspan="2">SAFETY AUDIT</td>
                                        {{-- <td></td> --}}
                                        <td>5</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td></td>
                                        
                                        
                                      </tr>
                  
                                      <tr>
                                        <td >Road Safety Audit (During Design Stage)</td>
                                        <td></td>
                                        <td>3</td>
                                        <td><input onblur="findTargetPointAE1()" type="number" min="0" max="2" class="targetPointAE1" ></td>
                                        {{-- <td><input onblur="findAssessmentPointAE1()" type="number" min="0" max="2" class="assessmentPointAE1" ></td> --}}
                                        <td><input onblur="commentAE1()" type="text" min="0" max="2" class="road" name="" id=""></td>
                                      </tr>
                  
                                      <tr>
                                        <td >Road Safety Audit (During Construction Stage)</td>
                                        <td></td>
                                        <td>3</td>
                                        <td><input onblur="findTargetPointAE1()" type="number" min="0" max="2" class="targetPointAE1" ></td>
                                        {{-- <td><input onblur="findAssessmentPointAE1()" type="number" min="0" max="2" class="assessmentPointAE1" ></td> --}}
                                        <td><input onblur="commentAE1()" type="text" min="0" max="2" class="road" name="" id=""></td>
                                      </tr>
                  
                                      <tr>
                                        <td >Additional Audit For Traffic Management Safety Report During Construction</td>
                                        <td></td>
                                        <td>1</td>
                                        <td><input onblur="findTargetPointAE1()" type="number" min="0" max="2" class="targetPointAE1" ></td>
                                        {{-- <td><input onblur="findAssessmentPointAE1()" type="number" min="0" max="2" class="assessmentPointAE1" ></td> --}}
                                        <td><input onblur="commentAE1()" type="text" min="0" max="2" class="road" name="" id=""></td>
                                      </tr>
                  
                                      <tr>
                                        <td >Road Safety Audit (During Operational Stage)</td>
                                        <td></td>
                                        <td>1</td>
                                        <td><input onblur="findTargetPointAE1()" type="number" min="0" max="2" class="targetPointAE1" ></td>
                                        {{-- <td><input onblur="findAssessmentPointAE1()" type="number" min="0" max="2" class="assessmentPointAE1" ></td> --}}
                                        <td><input onblur="commentAE1()" type="text" min="0" max="2" class="road" name="" id=""></td>
                                      </tr>
                  
                                      <tr >
                                        <td style="display: none">markahAE1<input type="text" name="markahAE1" id="markahAE1" /></td>            
                                      </tr>
                  
                                      <tr >
                                        <td colspan="3"> SUB TOTAL AE POINT</td>
                                        <td>5</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                      </tr>
                  
                                      <tr>
                                        <td>CA</td>
                                        <td colspan="6" align="left">CONSTRUCTION ACTIVITY</td>
                                        
                                      </tr>
                                      
                  
                                      <tr>
                                        <td colspan="1" rowspan="2">CA1</td>
                                        <td colspan="2">REQUIREMENT FOR ROAD WORKS DESIGN</td>
                                        {{-- <td></td> --}}
                                        <td>3</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td></td>
                                        
                                        
                                      </tr>
                  
                                      <tr>
                                        <td >MS ISO 9001:2008 or (latest version) certification for main contractor</td>
                                        <td></td>
                                        <td>3</td>
                                        <td><input onblur="findTargetPointCA1()" type="number" min="0" max="2" class="targetPointCA1"></td>
                                        {{-- <td><input onblur="findAssessmentPointCA1()" type="number" min="0" max="2" class="assessmentPointCA1" ></td> --}}
                                        <td><input onblur="commentCA1()" type="text" min="0" max="2" class="road" name="" id=""></td>
                                      </tr>
                  
                                      <tr >
                                        <td style="display: none">markahCA1<input type="text" name="markahCA1" id="markahCA1" /></td>            
                                      </tr>
                  
                                      <tr>
                                        <td colspan="1" rowspan="3">CA2</td>
                                        <td colspan="2">OCCUPTIONAL HEALTH AND SAFETY MANAGEMENT SYSTEM</td>
                                        {{-- <td></td> --}}
                                        <td>3</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td></td>
                                        
                                        
                                      </tr>
                  
                                      <tr>
                                        <td >OHSAS 18001:2007 0r (latest version) certification for main contractor</td>
                                        <td></td>
                                        <td>2</td>
                                        <td><input onblur="findTargetPointCA2()" type="number" min="0" max="2" class="targetPointCA2"></td>
                                        {{-- <td><input onblur="findAssessmentPointCA2()" type="number" min="0" max="2" class="assessmentPointCA2" ></td> --}}
                                        <td><input onblur="commentCA2()" type="text" min="0" max="2" class="road" name="" id=""></td>
                                      </tr>
                                      <tr>
                                        <td >To provide site safety and health officer with certification by DOSH</td>
                                        <td></td>
                                        <td>1</td>
                                        <td><input onblur="findTargetPointCA2()" type="number" min="0" max="2" class="targetPointCA2"></td>
                                        {{-- <td><input onblur="findAssessmentPointCA2()" type="number" min="0" max="2" class="assessmentPointCA2" ></td> --}}
                                        <td><input onblur="commentCA2()" type="text" min="0" max="2" class="road" name="" id=""></td>
                                      </tr>
                  
                                      <tr >
                                        <td style="display: none">markahCA2<input type="text" name="markahCA2" id="markahCA2" /></td>            
                                      </tr>
                  
                                      <tr>
                                        <td colspan="1" rowspan="5">CA 3</td>
                                        <td colspan="2">OCONSTRUCTION WASTE MANAGEMENT PLAN	</td>
                                        {{-- <td></td> --}}
                                        <td>4</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td></td>
                                        
                                        
                                      </tr>
                  
                                      <tr>
                                        <td >Create, establish, implement and maintain a formal construction waste management plan during road construction</td>
                                        <td></td>
                                        <td>2</td>
                                        <td><input onblur="findTargetPointCA3()" type="number" min="0" max="2" class="targetPointCA3"></td>
                                        {{-- <td><input onblur="findAssessmentPointCA3()" type="number" min="0" max="2" class="assessmentPointCA3" ></td> --}}
                                        <td><input onblur="commentCA3()" type="text" min="0" max="2" class="road" name="" id=""></td>
                                      </tr>
                  
                                      <tr>
                                        <td >Provision of Waste Management Plan in the contract (BQ)</td>
                                        <td></td>
                                        <td>2</td>
                                        <td><input onblur="findTargetPointCA3()" type="number" min="0" max="2" class="targetPointCA3"></td>
                                        {{-- <td><input onblur="findAssessmentPointCA3()" type="number" min="0" max="2" class="assessmentPointCA3" ></td> --}}
                                        <td><input onblur="commentCA3()" type="text" min="0" max="2" class="road" name="" id=""></td>
                                      </tr>
                  
                                      <tr>
                                        <td >Provide a designated location to segregate construction waste on-site</td>
                                        <td></td>
                                        <td>1</td>
                                        <td><input onblur="findTargetPointCA3()" type="number" min="0" max="2" class="targetPointCA3"></td>
                                        {{-- <td><input onblur="findAssessmentPointCA3()" type="number" min="0" max="2" class="assessmentPointCA3" ></td> --}}
                                        <td><input onblur="commentCA3()" type="text" min="0" max="2" class="road" name="" id=""></td>
                                      </tr>
                  
                                      <tr>
                                        <td >Appoint the licensed contractor(s) to collect the construction waste </td>
                                        <td></td>
                                        <td>1</td>
                                        <td><input onblur="findTargetPointCA3()" type="number" min="0" max="2" class="targetPointCA3"></td>
                                        {{-- <td><input onblur="findAssessmentPointCA3()" type="number" min="0" max="2" class="assessmentPointCA3" ></td> --}}
                                        <td><input onblur="commentCA3()" type="text" min="0" max="2" class="road" name="" id=""></td>
                                      </tr>
                  
                                      <tr >
                                        <td style="display: none">markahCA3<input type="text" name="markahCA3" id="markahCA3" /></td>            
                                      </tr>
                  
                                      <tr>
                                        <td colspan="1" rowspan="4">CA 4</td>
                                        <td colspan="2">TRAFFIC MANAGEMENT PLAN</td>
                                        {{-- <td></td> --}}
                                        <td>4</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td></td>
                                        
                                        
                                      </tr>
                  
                                      <tr>
                                        <td >Create, establish and implement a formal traffic management plan during Design and road construction stage</td>
                                        <td></td>
                                        <td>2</td>
                                        <td><input onblur="findTargetPointCA4()" type="number" min="0" max="2" class="targetPointCA4"></td>
                                        {{-- <td><input onblur="findAssessmentPointCA4()" type="number" min="0" max="2" class="assessmentPointCA4" ></td> --}}
                                        <td><input onblur="commentCA4()" type="text" min="0" max="2" class="road" name="" id=""></td>
                                      </tr>
                  
                                      <tr>
                                        <td >Provision of Traffic Management Officer in the contract document (BQ)</td>
                                        <td></td>
                                        <td>1</td>
                                        <td><input onblur="findTargetPointCA4()" type="number" min="0" max="2" class="targetPointCA4"></td>
                                        {{-- <td><input onblur="findAssessmentPointCA4()" type="number" min="0" max="2" class="assessmentPointCA4" ></td> --}}
                                        <td><input onblur="commentCA4()" type="text" min="0" max="2" class="road" name="" id=""></td>
                                      </tr>
                  
                                      <tr>
                                        <td >Provision of third party auditor for Traffic Management Plan (TMP)</td>
                                        <td></td>
                                        <td>1</td>
                                        <td><input onblur="findTargetPointCA4()" type="number" min="0" max="2" class="targetPointCA4"></td>
                                        {{-- <td><input onblur="findAssessmentPointCA4()" type="number" min="0" max="2" class="assessmentPointCA4" ></td> --}}
                                        <td><input onblur="commentCA4()" type="text" min="0" max="2" class="road" name="" id=""></td>
                                      </tr>
                  
                                      <tr >
                                        <td style="display: none">markahCA4<input type="text" name="markahCA4" id="markahCA4" /></td>            
                                      </tr>
                  
                                      <tr>
                                        <td colspan="1" rowspan="2">CA 5</td>
                                        <td colspan="2">SITE ROUTINE MAINTENANCE PLAN 	</td>
                                        {{-- <td></td> --}}
                                        <td>2</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td></td>
                                        
                                        
                                      </tr>
                  
                                      <tr>
                                        <td >Create, establish, implement routine maintenanace for road project </td>
                                        <td></td>
                                        <td>2</td>
                                        <td><input onblur="findTargetPointCA5()" type="number" min="0" max="2" class="targetPointCA5"></td>
                                        <td><input onblur="findAssessmentPointCA5()" type="number" min="0" max="2" class="assessmentPointCA5" ></td>
                                        <td><input onblur="commentCA5()" type="text" min="0" max="2" class="road" name="" id=""></td>
                                      </tr>
                  
                                      <tr >
                                        <td style="display: none">markahCA5<input type="text" name="markahCA5" id="markahCA5" /></td>            
                                      </tr>
                  
                                      <tr>
                                        <td colspan="1" rowspan="2">CA 6</td>
                                        <td colspan="2">HOUSEKEEPING 	</td>
                                        {{-- <td></td> --}}
                                        <td>2</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td></td>
                                        
                                        
                                      </tr>
                  
                                      <tr>
                                        <td >"Provision Housekeeping implementation in the contract document/ BQ
                                          OR
                                          Establish and implement housekeeping during construction "</td>
                                        <td></td>
                                        <td>2</td>
                                        <td><input onblur="findTargetPointCA6()" type="number" min="0" max="2" class="targetPointCA6"></td>
                                        {{-- <td><input onblur="findAssessmentPointCA6()" type="number" min="0" max="2" class="assessmentPointCA6" ></td> --}}
                                        <td><input onblur="commentCA6()" type="text" min="0" max="2" class="road" name="" id=""></td>
                                      </tr>
                  
                                      <tr >
                                        <td style="display: none">markahCA6<input type="text" name="markahCA6" id="markahCA6" /></td>            
                                      </tr>
                  
                                      <tr>
                                        <td colspan="1" rowspan="4">CA 7</td>
                                        <td colspan="2">HOUSEKEEPING 	</td>
                                        {{-- <td></td> --}}
                                        <td>4</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td></td>
                                        
                                        
                                      </tr>
                  
                                      <tr>
                                        <td >Perform scheduled maintenance of construction machineries</td>
                                        <td></td>
                                        <td>2</td>
                                        <td><input onblur="findTargetPointCA7()" type="number" min="0" max="2" class="targetPointCA7"></td>
                                        {{-- <td><input onblur="findAssessmentPointCA7()" type="number" min="0" max="2" class="assessmentPointCA7" ></td> --}}
                                        <td><input onblur="commentCA7()" type="text" min="0" max="2" class="road" name="" id=""></td>
                                      </tr>
                                      <tr>
                                        <td >Use high performance machineries with low fuel consumption and low air emission</td>
                                        <td></td>
                                        <td>2</td>
                                        <td><input onblur="findTargetPointCA7()" type="number" min="0" max="2" class="targetPointCA7"></td>
                                        {{-- <td><input onblur="findAssessmentPointCA7()" type="number" min="0" max="2" class="assessmentPointCA7" ></td> --}}
                                        <td><input onblur="commentCA7()" type="text" min="0" max="2" class="road" name="" id=""></td>
                                      </tr>
                                      <tr>
                                        <td >Provision of ESCP and Environmental Monitoring Report (EMR) – (eg. Water/ Air/ Noise Quality ) in the contract</td>
                                        <td></td>
                                        <td>2</td>
                                        <td><input onblur="findTargetPointCA7()" type="number" min="0" max="2" class="targetPointCA7"></td>
                                        {{-- <td><input onblur="findAssessmentPointCA7()" type="number" min="0" max="2" class="assessmentPointCA7" ></td> --}}
                                        <td><input onblur="commentCA7()" type="text" min="0" max="2" class="road" name="" id=""></td>
                                      </tr>
                  
                                      <tr >
                                        <td style="display: none">markahCA7<input type="text" name="markahCA7" id="markahCA7" /></td>            
                                      </tr>
                  
                                     
                  
                                      <tr >
                                        <td colspan="3"> SUB TOTAL CA POINT</td>
                                        <td>22</td>
                                        <td style="display: none">markahCA<input type="text" name="markahCA" id="markahCA" /></td>            
                                        <td></td>
                                        <td></td>
                                      </tr>

                                      <tr>
                                        <td>MR</td>
                                        <td colspan="6" align="left">MATERIAL & RESOURCES</td>
                                       
                                        
                                        
                                        
                                      </tr>
                    
                                      <tr>
                                        <td colspan="1" rowspan="6">MR 1</td>
                                        <td colspan="2">MATERIAL REUSE	</td>
                                        {{-- <td></td> --}}
                                        <td>5</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td></td>
                                        
                                        
                                      </tr>
                    
                                      <tr>
                                        <td>Reuse at a minimum 30% of existing pavement materials by estimated volume</td>
                                        <td rowspan="4">CJ</td>
                                        <td>2</td>
                                        <td><input onblur="findTargetPointMR1()" type="number" min="0" max="2" class="targetPointMR1"></td>
                                        {{-- <td><input onblur="findAssessmentPointMR1()" type="number" min="0" max="2" class="assessmentPointMR1"></td> --}}
                                        <td><input onblur="commentMR1()" type="text" min="0" max="2" class="road"></td>
                                      </tr>
                  
                                      <tr>
                                        <td>Reuse of existing material other than pavement materials </td>
                                        <td>1</td>
                                        <td><input onblur="findTargetPointMR1()" type="number" min="0" max="2" class="targetPointMR1"></td>
                                        {{-- <td><input onblur="findAssessmentPointMR1()" type="number" min="0" max="2" class="assessmentPointMR1"></td> --}}
                                        <td><input onblur="commentMR1()" type="text" min="0" max="2" class="road"></td>
                                      </tr>
                  
                                      <tr>
                                        <td>Earthwork balance </td>
                                        <td>1</td>
                                        <td><input onblur="findTargetPointMR1()" type="number" min="0" max="2" class="targetPointMR1"></td>
                                        {{-- <td><input onblur="findAssessmentPointMR1()" type="number" min="0" max="2" class="assessmentPointMR1"></td> --}}
                                        <td><input onblur="commentMR1()" type="text" min="0" max="2" class="road"></td>
                                      </tr>
                  
                                      <tr>
                                        <td>Fiber Roll Netting using biodegradable material at site for erosion control (eg. Wooden dust, coconut fiber)</td>
                                        <td>1</td>
                                        <td><input onblur="findTargetPointMR1()" type="number" min="0" max="2" class="targetPointMR1"></td>
                                        {{-- <td><input onblur="findAssessmentPointMR1()" type="number" min="0" max="2" class="assessmentPointMR1"></td> --}}
                                        <td><input onblur="commentMR1()" type="text" min="0" max="2" class="road"></td>
                                      </tr>
                  
                                      <tr>
                                        <td>To use reusable formwork for structure (eg: steel/ fiber formwork)</td>
                                        <td ></td>
                                        <td>1</td>
                                        <td><input onblur="findTargetPointMR1()" type="number" min="0" max="2" class="targetPointMR1"></td>
                                        {{-- <td><input onblur="findAssessmentPointMR1()" type="number" min="0" max="2" class="assessmentPointMR1"></td> --}}
                                        <td><input onblur="commentMR1()" type="text" min="0" max="2" class="road"></td>
                                      </tr>
                  
                                      <tr >
                                        <td style="display: none">markahMR1<input type="text" name="markahMR1" id="markahMR1" /></td>            
                                      </tr>
                  
                                      <tr>
                                        <td colspan="1" rowspan="5">MR 2</td>
                                        <td colspan="2">GREEN PRODUCT</td>
                                        {{-- <td></td> --}}
                                        <td>4</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td></td>
                                        
                                        
                                      </tr>
                  
                                      <tr>
                                        <td >Green Products Scoring System (GPSS) of 70% - 100%</td>
                                        <td rowspan="4">CASKT</td>
                                        <td>4</td>
                                        <td><input onblur="findTargetPointMR2()" type="number" min="0" max="2" class="targetPointMR2"></td>
                                        {{-- <td><input onblur="findAssessmentPointMR2()" type="number" min="0" max="2" class="assessmentPointMR2"></td> --}}
                                        <td><input onblur="commentMR()" type="text" min="0" max="2" class="road"></td>
                                      </tr>
                                      <tr>
                                        <td >Green Products Scoring System (GPSS) of 50% - 69%</td>
                                        {{-- <td></td> --}}
                                        <td>3</td>
                                        <td><input onblur="findTargetPointMR2()" type="number" min="0" max="2" class="targetPointMR2"></td>
                                        {{-- <td><input onblur="findAssessmentPointMR2()" type="number" min="0" max="2" class="assessmentPointMR2"></td> --}}
                                        <td><input onblur="commentMR2()" type="text" min="0" max="2" class="road"></td>
                                      </tr>
                                      <tr>
                                        <td >Green Products Scoring System (GPSS) of 40% - 49%</td>
                                        {{-- <td></td> --}}
                                        <td>2</td>
                                        <td><input onblur="findTargetPointMR2()" type="number" min="0" max="2" class="targetPointMR2"></td>
                                        {{-- <td><input onblur="findAssessmentPointMR2()" type="number" min="0" max="2" class="assessmentPointMR2"></td> --}}
                                        <td><input onblur="commentMR2()" type="text" min="0" max="2" class="road"></td>
                                      </tr>
                                      <tr>
                                        <td >Use Green Product Scoring System (GPSS)</td>
                                        {{-- <td></td> --}}
                                        <td>1</td>
                                        <td><input onblur="findTargetPointMR2()" type="number" min="0" max="2" class="targetPointMR2"></td>
                                        {{-- <td><input onblur="findAssessmentPointMR2()" type="number" min="0" max="2" class="assessmentPointMR2"></td> --}}
                                        <td><input onblur="commentMR2()" type="text" min="0" max="2" class="road"></td>
                                      </tr>
                  
                                      <tr >
                                        <td style="display: none">markahMR2<input type="text" name="markahMR2" id="markahMR2" /></td>            
                                      </tr>
                  
                                      <tr>
                                        <td colspan="1" rowspan="3">MR 3</td>
                                        <td colspan="2">ROAD INVENTORIES</td>
                                        {{-- <td></td> --}}
                                        <td>2</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td></td>
                                        
                                        
                                      </tr>
                  
                                      <tr>
                                        <td >Provide updated master inventory of road asset / warranty of material/product after completion of road works</td>
                                        <td rowspan="2">CSFJ</td>
                                        <td>1</td>
                                        <td><input onblur="findTargetPointMR3()" type="number" min="0" max="2" class="targetPointMR3"></td>
                                        {{-- <td><input onblur="findAssessmentPointMR3()" type="number" min="0" max="2" class="assessmentPointMR3"></td> --}}
                                        <td><input onblur="commentMR3()" type="text" min="0" max="2" class="road"></td>
                                      </tr>
                                      <tr>
                                        <td >Provide established master inventory of  road asset / warranty of material/product of existing road </td>
                                        {{-- <td></td> --}}
                                        <td>1</td>
                                        <td><input onblur="findTargetPointMR3()" type="number" min="0" max="2" class="targetPointMR3"></td>
                                        {{-- <td><input onblur="findAssessmentPointMR3()" type="number" min="0" max="2" class="assessmentPointMR3"></td> --}}
                                        <td><input onblur="commentMR3()" type="text" min="0" max="2" class="road"></td>
                                      </tr>
                  
                                      <tr >
                                        <td style="display: none">markahMR3<input type="text" name="markahMR3" id="markahMR3" /></td>            
                                      </tr>
                  
                                      <tr>
                                        <td colspan="1" rowspan="2">MR 4</td>
                                        <td colspan="2">EFFICIENT ROAD LIGHTINGS</td>
                                        {{-- <td></td> --}}
                                        <td>1</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td></td>
                                        
                                        
                                      </tr>
                  
                                      <tr>
                                        <td >All systems should be designed to use energy efficient road lightings, while complying to standard and specification for road lightings (eg. MS 825 part 1:2007)</td>
                                        <td rowspan="1">CKE</td>
                                        <td>1</td>
                                        <td><input onblur="findTargetPointMR4()" type="number" min="0" max="2" class="targetPointMR4"></td>
                                        {{-- <td><input onblur="findAssessmentPointMR4()" type="number" min="0" max="2" class="assessmentPointMR4"></td> --}}
                                        <td><input onblur="commentMR4()" type="text" min="0" max="2" class="road"></td>
                                      </tr>
                  
                                      <tr >
                                        <td style="display: none">markahMR4<input type="text" name="markahMR4" id="markahMR4" /></td>            
                                      </tr>
                  
                                      <tr >
                                        <td colspan="3"> SUB TOTAL MR POINT</td>
                                        <td>12</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                      </tr>
                  
                                      <tr >
                                        <td colspan="3"> TOTAL CORE POINT</td>
                                        <td>69</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                      </tr>
                  
                                      <tr>
                                        <td>EC</td>
                                        <td colspan="6" align="left">ELECTIVE CRITERIAS</td>
                                       
                                        
                                        
                                        
                                      </tr>
                    
                                      <tr>
                                        <td colspan="1" rowspan="4">SM 5 - EC</td>
                                        <td colspan="2">SERVICES FOR DISABLED USERS	</td>
                                        {{-- <td></td> --}}
                                        <td>3</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td></td>
                                        
                                        
                                      </tr>
                  
                                      <tr>
                                        <td >Crossing for disabled users with noise making devices installed</td>
                                        <td></td>
                                        <td>1</td>
                                        <td><input onblur="findTargetPointSM5EC()" type="number" min="0" max="2" class="targetPointSM5EC"></td>
                                        <td><input onblur="findAssessmentPointSM5EC()" type="number" min="0" max="2" class="assessmentPointSM5EC"></td>
                                        <td><input onblur="commentSM5EC()" type="text" min="0" max="2" class="road"></td>
                                      </tr>
                  
                                      <tr>
                                        <td >Walkway access for disabled users by providing sidewalks sloped for easy access</td>
                                        <td></td>
                                        <td>1</td>
                                        <td><input onblur="findTargetPointSM5EC()" type="number" min="0" max="2" class="targetPointSM5EC"></td>
                                        <td><input onblur="findAssessmentPointSM5EC()" type="number" min="0" max="2" class="assessmentPointEC"></td>
                                        <td><input onblur="commentSM5EC()" type="text" min="0" max="2" class="road"></td>
                                      </tr>
                  
                                      <tr>
                                        <td >Tac tile on the pedestrian pathway and access for disabled users</td>
                                        <td></td>
                                        <td>1</td>
                                        <td><input onblur="findTargetPointSM5EC()" type="number" min="0" max="2" class="targetPointSM5EC"></td>
                                        <td><input onblur="findAssessmentPointSM5EC()" type="number" min="0" max="2" class="assessmentPointSM5EC"></td>
                                        <td><input onblur="commentSM5EC()" type="text" min="0" max="2" class="road"></td>
                                      </tr>
                  
                                      <tr >
                                        <td style="display: none">markahSM5EC<input type="text" name="markahSM5EC" id="markahSM5EC" /></td>            
                                      </tr>
                  
                                      <tr>
                                        <td colspan="1" rowspan="4">SM 6 - EC</td>
                                        <td colspan="2">NOISE CONTROL	</td>
                                        {{-- <td></td> --}}
                                        <td>2</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td></td>
                                        
                                        
                                      </tr>
                  
                                      <tr>
                                        <td >The pavement mix design  by using quiet pavement</td>
                                        <td></td>
                                        <td>2</td>
                                        <td><input onblur="findTargetPointSM6EC()" type="number" min="0" max="2" class="targetPointSM6EC"></td>
                                        {{-- <td><input onblur="findAssessmentPointSM6EC()" type="number" min="0" max="2" class="assessmentPointSM6EC"></td> --}}
                                        <td><input onblur="commentSM6EC()" type="text" min="0" max="2" class="road"></td>
                                      </tr>
                  
                                      <tr>
                                        <td >Noise barrier shall be provided in sensitive areas such as housing situated beside busy roads or highways, schools and hospitals</td>
                                        <td></td>
                                        <td>2</td>
                                        <td><input onblur="findTargetPointSM6EC()" type="number" min="0" max="2" class="targetPointSM6EC"></td>
                                        {{-- <td><input onblur="findAssessmentPointSM6EC()" type="number" min="0" max="2" class="assessmentPointSM6EC"></td> --}}
                                        <td><input onblur="commentSM6EC()" type="text" min="0" max="2" class="road"></td>
                                      </tr>
                  
                                      <tr>
                                        <td >Buffer Zone </td>
                                        <td></td>
                                        <td>2</td>
                                        <td><input onblur="findTargetPointSM6EC()" type="number" min="0" max="2" class="targetPointSM6EC"></td>
                                        {{-- <td><input onblur="findAssessmentPointSM6EC()" type="number" min="0" max="2" class="assessmentPointSM6EC"></td> --}}
                                        <td><input onblur="commentSM6EC()" type="text" min="0" max="2" class="road"></td>
                                      </tr>
                  
                                      <tr >
                                        <td style="display: none">markahSM6EC<input type="text" name="markahSM6EC" id="markahSM6EC" /></td>            
                                      </tr>
                  
                                      <tr>
                                        <td colspan="1" rowspan="2">EW 3 - EC</td>
                                        <td colspan="2">ECOLOGICAL CONNECTIVITY		</td>
                                        {{-- <td></td> --}}
                                        <td>5</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td></td>
                                        
                                        
                                      </tr>
                  
                                      <tr>
                                        <td >"Provide dedicated wildlife crossing structures and protective fencing as determined by Environmental Impact Assessment (EIA) report 
                                          OR
                                          Provide sound barrier at sensitive area for wildlife"</td>
                                        <td></td>
                                        <td>5</td>
                                        <td><input onblur="findTargetPointEW3EC()" type="number" min="0" max="2" class="targetPointEW3EC"></td>
                                        {{-- <td><input onblur="findAssessmentPointEW3EC()" type="number" min="0" max="2" class="assessmentPointEW3EC"></td> --}}
                                        <td><input onblur="commentEW3EC()" type="text" min="0" max="2" class="road"></td>
                                      </tr>
                  
                                      <tr >
                                        <td style="display: none">markahEW3EC<input type="text" name="markahEW3EC" id="markahEW3EC" /></td>            
                                      </tr>
                  
                                      <tr>
                                        <td colspan="1" rowspan="2">AE 2 - EC</td>
                                        <td colspan="2"> SCENIC VIEWS </td>
                                        {{-- <td></td> --}}
                                        <td>5</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td></td>
                                        
                                        
                                      </tr>
                  
                                      <tr>
                                        <td >"Provide dedicated wildlife crossing structures and protective fencing as determined by Environmental Impact Assessment (EIA) report 
                                          OR
                                          Provide sound barrier at sensitive area for wildlife"</td>
                                        <td></td>
                                        <td>5</td>
                                        <td><input onblur="findTargetPointAE2EC()" type="number" min="0" max="2" class="targetPointAE2EC"></td>
                                        {{-- <td><input onblur="findAssessmentPointAE2EC()" type="number" min="0" max="2" class="assessmentPointAE2EC"></td> --}}
                                        <td><input onblur="commentAE2EC()" type="text" min="0" max="2" class="road"></td>
                                      </tr>
                  
                                      <tr >
                                        <td style="display: none">markahAE2EC<input type="text" name="markahAE2EC" id="markahAE2EC" /></td>            
                                      </tr>
                  
                                      <tr>
                                        <td colspan="1" rowspan="5">AE 3 - EC</td>
                                        <td colspan="2"> PEDESTRIAN ACCESS </td>
                                        {{-- <td></td> --}}
                                        <td>5</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td></td>
                                        
                                        
                                      </tr>
                  
                                      <tr>
                                        <td >Zebra Crossing or Signalised Pedestrian Crossing  and Refuge Island</td>
                                        <td></td>
                                        <td>1</td>
                                        <td><input onblur="findTargetPointAE3EC()" type="number" min="0" max="2" class="targetPointAE3EC"></td>
                                        {{-- <td><input onblur="findAssessmentPointAE3EC()" type="number" min="0" max="2" class="assessmentPointAE3EC"></td> --}}
                                        <td><input onblur="commentAE3EC()" type="text" min="0" max="2" class="road"></td>
                                      </tr>
                  
                                      <tr>
                                        <td >Overhead Pedestrian Bridge</td>
                                        <td></td>
                                        <td>2</td>
                                        <td><input onblur="findTargetPointAE3EC()" type="number" min="0" max="2" class="targetPointAE3EC"></td>
                                        {{-- <td><input onblur="findAssessmentPointAE3EC()" type="number" min="0" max="2" class="assessmentPointAE3EC"></td> --}}
                                        <td><input onblur="commentAE3EC()" type="text" min="0" max="2" class="road"></td>
                                      </tr>
                                      <tr>
                                        <td >Sidewalk / Walkway and Raised Crosswalk</td>
                                        <td></td>
                                        <td>1</td>
                                        <td><input onblur="findTargetPointAE3EC()" type="number" min="0" max="2" class="targetPointAE3EC"></td>
                                        {{-- <td><input onblur="findAssessmentPointAE3EC()" type="number" min="0" max="2" class="assessmentPointAE3EC"></td> --}}
                                        <td><input onblur="commentAE3EC()" type="text" min="0" max="2" class="road"></td>
                                      </tr>
                                      <tr>
                                        <td >Covered walkway</td>
                                        <td></td>
                                        <td>1</td>
                                        <td><input onblur="findTargetPointAE3EC()" type="number" min="0" max="2" class="targetPointAE3EC"></td>
                                        {{-- <td><input onblur="findAssessmentPointAE3EC()" type="number" min="0" max="2" class="assessmentPointAE3EC"></td> --}}
                                        <td><input onblur="commentAE3EC()" type="text" min="0" max="2" class="road"></td>
                                      </tr>
                  
                                      <tr >
                                        <td style="display: none">markahAE3EC<input type="text" name="markahAE3EC" id="markahAE3EC" /></td>            
                                      </tr>
                  
                                      <tr>
                                        <td colspan="1" rowspan="5">AE 4 - EC</td>
                                        <td colspan="2"> MOTORCYCLE LANE </td>
                                        {{-- <td></td> --}}
                                        <td>6</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td></td>
                                        
                                        
                                      </tr>
                  
                                      <tr>
                                        <td >Paved shoulder, non-exclusive motorcycle lane and end treatment at junction</td>
                                        <td></td>
                                        <td>1</td>
                                        <td><input onblur="findTargetPointAE4EC()" type="number" min="0" max="2" class="targetPointAE4EC"></td>
                                        {{-- <td><input onblur="findAssessmentPointEC()" type="number" min="0" max="2" class="assessmentPointEC"></td> --}}
                                        <td><input onblur="commentAE4EC()" type="text" min="0" max="2" class="road"></td>
                                      </tr>
                  
                                      <tr>
                                        <td >Exclusive motorcycle lane</td>
                                        <td></td>
                                        <td>2</td>
                                        <td><input onblur="findTargetPointAE4EC()" type="number" min="0" max="2" class="targetPointAE4EC"></td>
                                        {{-- <td><input onblur="findAssessmentPointEC()" type="number" min="0" max="2" class="assessmentPointEC"></td> --}}
                                        <td><input onblur="commentAE4EC()" type="text" min="0" max="2" class="road"></td>
                                      </tr>
                                      <tr>
                                        <td >Overhead motorcycle bridge</td>
                                        <td></td>
                                        <td>2</td>
                                        <td><input onblur="findTargetPointAE4EC()" type="number" min="0" max="2" class="targetPointAE4EC"></td>
                                        {{-- <td><input onblur="findAssessmentPointEC()" type="number" min="0" max="2" class="assessmentPointEC"></td> --}}
                                        <td><input onblur="commentAE4EC()" type="text" min="0" max="2" class="road"></td>
                                      </tr>
                                      <tr>
                                        <td >Motorcycle shelter</td>
                                        <td></td>
                                        <td>1</td>
                                        <td><input onblur="findTargetPointAE4EC()" type="number" min="0" max="2" class="targetPointAE4EC"></td>
                                        {{-- <td><input onblur="findAssessmentPointEC()" type="number" min="0" max="2" class="assessmentPointEC"></td> --}}
                                        <td><input onblur="commentAE4EC()" type="text" min="0" max="2" class="road"></td>
                                      </tr>
                  
                                      <tr >
                                        <td style="display: none">markahAE4EC<input type="text" name="markahAE4EC" id="markahAE4EC" /></td>            
                                      </tr>
                  
                                      <tr>
                                        <td colspan="1" rowspan="2">AE 5 - EC</td>
                                        <td colspan="2"> REST AREA </td>
                                        {{-- <td></td> --}}
                                        <td>2</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td></td>
                                        
                                        
                                      </tr>
                  
                                      <tr>
                                        <td >Provide or maintain existing rest area facilities along the road </td>
                                        <td></td>
                                        <td>2</td>
                                        <td><input onblur="findTargetPointAE5EC()" type="number" min="0" max="2" class="targetPointAE5EC"></td>
                                        {{-- <td><input onblur="findAssessmentPointAE5EC()" type="number" min="0" max="2" class="assessmentPointEC"></td> --}}
                                        <td><input onblur="commentAE5EC()" type="text" min="0" max="2" class="road"></td>
                                      </tr>
                  
                                      <tr >
                                        <td style="display: none">markahAE5EC<input type="text" name="markahAE5EC" id="markahAE5EC" /></td>            
                                      </tr>
                  
                                      <tr>
                                        <td colspan="1" rowspan="3">AE 6 - EC</td>
                                        <td colspan="2"> BICYCLE ASSESS </td>
                                        {{-- <td></td> --}}
                                        <td>2</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td></td>
                                        
                                        
                                      </tr>
                  
                                      <tr>
                                        <td >Implement physical or constructed changes to the roadway structure, dimensions, or form that provide bicycle-only facilities with dedicated access (such as bicycle lane). Lanes shared with motorized vehicles do not meet this requirement </td>
                                        <td></td>
                                        <td>1</td>
                                        <td><input onblur="findTargetPointAE6EC()" type="number" min="0" max="2" class="targetPointAE6EC"></td>
                                        {{-- <td><input onblur="findAssessmentPointAE6EC()" type="number" min="0" max="2" class="assessmentPointEC"></td> --}}
                                        <td><input onblur="commentAE6EC()" type="text" min="0" max="2" class="road"></td>
                                      </tr>
                  
                                      <tr>
                                        <td >Implement physical or constructed changes to the roadway structure, dimensions, or form that provide bicycle-only facilities with dedicated access (such as bicycle lane). Lanes shared with motorized vehicles do not meet this requirement</td>
                                        <td></td>
                                        <td>2</td>
                                        <td><input onblur="findTargetPointAE6EC()" type="number" min="0" max="2" class="targetPointAE6EC"></td>
                                        {{-- <td><input onblur="findAssessmentPointAE6EC()" type="number" min="0" max="2" class="assessmentPointAE6EC"></td> --}}
                                        <td><input onblur="commentAE6EC()" type="text" min="0" max="2" class="road"></td>
                                      </tr>
                  
                                      <tr >
                                        <td style="display: none">markahAE6EC<input type="text" name="markahAE6EC" id="markahAE6EC" /></td>            
                                      </tr>
                  
                                      
                  
                                      <tr >
                                        <td colspan="3"> TOTAL ELECTIVE POINT</td>
                                        <td>27</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                      </tr>

                                      <tr>
                                        <td>IN</td>
                                        <td colspan="6" align="left">INNOVATION</td>
                                       
                                        
                                        
                                        
                                      </tr>
                    
                                      <tr>
                                        <td colspan="1" rowspan="2">IN 1</td>
                                        <td colspan="2">ANY RELATED INNOVATION</td>
                                        {{-- <td></td> --}}
                                        <td>5</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td></td>
                                        
                                        
                                      </tr>
                    
                                      <tr>
                                        <td>Come up with an idea for a design or construction best practice for road that is not currently included in Manual pH JKR and is more sustainable than standard or conventional practices</td>
                                        <td rowspan="1">ANY</td>
                                        <td>5</td>
                                        <td><input onblur="findTargetPointIN()" type="number" min="0" max="2" class="targetPointIN"></td>
                                        {{-- <td><input onblur="findAssessmentPointIN()" type="number" min="0" max="2" class="assessmentPointIN"></td> --}}
                                        <td><input onblur="commentIN()" type="text" min="0" max="2" class="road" name="" id=""></td>
                                      </tr>
                  
                                      <tr >
                                        <td colspan="3"> TOTAL INNOVATION POINT</td>
                                        <td><input type="text" name="markahIN" id="markahIN" /></td> 
                                        <td></td>           
                                        <td></td>
                                        <td></td>
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
                        </form>
                        </div> 
                </div>
                {{-- <div class="col">
                </div> --}}
            </div>
        </div>
    </div>
</div>

<div class="row mb-3">
    <div class="col">
        <div class="card">
            <div class="card-body">
                <div class="col mb-">
                    <h2 class="h2 mb-3">BORANG PERMOHONAN RAYUAN JALAN</h2>
                </div>

                <div class="col">
                    <div>
                        <form action="/penilaian_reka_bentuk_jalan/simpan_isi_skor_kad/{$id}" method="post" enctype="multipart/form-data">
                          @method('POST')
                          @csrf
                          <table>
                            <div class="row3 mx-4 table-responsive scrollbar">
                                <div class="col">
                                  <table class="table table-bordered line-table text-center" style="width: 100%">
                                    <thead class="text-white bg-orange-jkr">
                                      <tr>
                            
                                        
                                        <th >Kod</th>
                                        <th >Kriteria</th>
                                        <th >Responsibility</th>
                                        <th colspan="3">Design</th>
                                        
                         
                                      </tr>
                                      <tr>
                                        
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th >MAX POINT</th>
                                        <th >TARGET POINT</th>
                                        {{-- <th >ASSESSMENT POINT</th> --}}
                                        <th>COMMENT BY ASSESSOR</th>
                                      </tr>
                    
                                    </thead>
                                    <tbody>
                  
                                      <tr>
                                        <td>SM</td>
                                        <td colspan="" align="left">SUSTAINABLE SITE PLANNING AND MANAGEMENT</td>  
                                      </tr>
                    
                                      <tr>
                                        <td colspan="1" rowspan="12">SM1</td>
                                        <td colspan="2">REQUIREMENT FOR ROAD WORKS DESIGN</td>
                                        <td>7</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td></td>
                                        
                                        
                                      </tr>
                    
                                      <tr>
                                        <td >Traffic study</td>
                                        <td rowspan="7">CJ</td>
                                        <td>1</td>
                                        <td><input onblur="findTargetPointSM1()" type="number" min="0" max="2" class="targetPointSM1" ></td>
                                        {{-- <td><input onblur="findAssessmentPointSM()" type="number" min="0" max="2" class="assessmentPointSM"></td> --}}
                                        <td><input onblur="commentSM1()" type="text" min="0" max="2" class="road" name="" id=""></td>
                                      </tr>
                    
                                      <tr>
                                        <td >Site investigation data</td>
                                        <td>1</td>
                                        <td><input onblur="findTargetPointSM1()" type="number" min="0" max="2" class="targetPointSM1" ></td>
                                        {{-- <td><input onblur="findAssessmentPointSM()" type="number" min="0" max="2" class="assessmentPointSM"></td> --}}
                                        <td><input onblur="commentSM1()" type="text" min="0" max="2" class="road" name="" id=""></td>
                                       
                                      </tr>
                  
                                      <tr>
                                        <td >Flood records</td>
                                        <td>1</td>
                                        <td><input onblur="findTargetPointSM1()" type="number" min="0" max="2" class="targetPointSM1" ></td>
                                        {{-- <td><input onblur="findAssessmentPointSM()" type="number" min="0" max="2" class="assessmentPointSM"></td> --}}
                                        <td><input onblur="commentSM1()" type="text" min="0" max="2" class="road" name="" id=""></td>
                                        
                                      </tr>
                    
                                      <tr>
                                        <td >Response to public complaints or requests from public, local authority & etc.</td>
                                        <td>1</td>
                                        <td><input onblur="findTargetPointSM1()" type="number" min="0" max="2" class="targetPointSM1" ></td>
                                        {{-- <td><input onblur="findAssessmentPointSM()" type="number" min="0" max="2" class="assessmentPointSM"></td> --}}
                                        <td><input onblur="commentSM1()" type="text" min="0" max="2" class="road" name="" id=""></td>
                                        
                                      </tr>
                  
                                      <tr>
                                        <td >Value Management (VM)</td>
                                        <td>1</td>
                                        <td><input onblur="findTargetPointSM1()" type="number" min="0" max="2" class="targetPointSM1" ></td>
                                        {{-- <td><input onblur="findAssessmentPointSM()" type="number" min="0" max="2" class="assessmentPointSM"></td> --}}
                                        <td><input onblur="commentSM1()" type="text" min="0" max="2" class="road" name="" id=""></td>
                                   
                                      </tr>
                  
                                      <tr>
                                        <td >Survey Drawing</td>
                                        <td>1</td>
                                        <td><input onblur="findTargetPointSM1()" type="number" min="0" max="2" class="targetPointSM1" ></td>
                                        {{-- <td><input onblur="findAssessmentPointSM()" type="number" min="0" max="2" class="assessmentPointSM"></td> --}}
                                        <td><input onblur="commentSM1()" type="text" min="0" max="2" class="road" name="" id=""></td>
                                        
                                    
                                      </tr>
                  
                                      <tr>
                                        <td >As Built Drawings</td>
                                        <td>1</td>
                                        <td><input onblur="findTargetPointSM1()" type="number" min="0" max="2" class="targetPointSM1" ></td>
                                        {{-- <td><input onblur="findAssessmentPointSM()" type="number" min="0" max="2" class="assessmentPointSM"></td> --}}
                                        <td><input onblur="commentSM1()" type="text" min="0" max="2" class="road" name="" id=""></td>
                                  
                                      </tr>
                  
                                      <tr>
                                        <td >Accident Reports</td>
                                        <td>CSFJ</td>
                                        <td>1</td>
                                        <td><input onblur="findTargetPointSM1()" type="number" min="0" max="2" class="targetPointSM1" ></td>
                                        {{-- <td><input onblur="findAssessmentPointSM()" type="number" min="0" max="2" class="assessmentPointSM"></td> --}}
                                        <td><input onblur="commentSM1()" type="text" min="0" max="2" class="road" name="" id=""></td>
                                        
                                      </tr>
                  
                                      <tr>
                                        <td >Structure Replacement</td>
                                        <td rowspan="3">CJ</td>
                                        <td>1</td>
                                        <td><input onblur="findTargetPointSM1()" type="number" min="0" max="2" class="targetPointSM1" ></td>
                                        {{-- <td><input onblur="findAssessmentPointSM()" type="number" min="0" max="2" class="assessmentPointSM"></td> --}}
                                        <td><input onblur="commentSM1()" type="text" min="0" max="2" class="road" name="" id=""></td>
                                        
                                      </tr>
                  
                                      <tr>
                                        <td >Forensic Report</td>
                                        <td>1</td>
                                        <td><input onblur="findTargetPointSM1()" type="number" min="0" max="2" class="targetPointSM1" ></td>
                                        {{-- <td><input onblur="findAssessmentPointSM()" type="number" min="0" max="2" class="assessmentPointSM"></td> --}}
                                        <td><input onblur="commentSM1()" type="text" min="0" max="2" class="road" name="" id=""></td>
                                        
                                      </tr>
                  
                                      <tr>
                                        <td >Pavement Evaluation</td>
                                        <td>1</td>
                                        <td><input onblur="findTargetPointSM1()" type="number" min="0" max="2" class="targetPointSM1" ></td>
                                        {{-- <td><input onblur="findAssessmentPointSM()" type="number" min="0" max="2" class="assessmentPointSM"></td> --}}
                                        <td><input onblur="commentSM1()" type="text" min="0" max="2" class="road" name="" id=""></td>
                                      </tr>
                  
                                      <td style="display: none">markahSM1<input type="text" name="markahSM1" id="markahSM1" /></td>            
                  
                  
                                     
                  
                                      <tr>
                                        <td colspan="1" rowspan="9">SM2</td>
                                        <td colspan="2">ROAD ALIGNMENT</td>
                                        <td>6</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td></td>
                                        
                                        
                                      </tr>
                    
                                      <tr>
                                        <td >Slope not more than 6 berms</td>
                                        <td rowspan="7">CJ</td>
                                        <td>1</td>
                                        <td><input onblur="findTargetPointSM2()" type="number" min="0" max="2" class="targetPointSM2" ></td>
                                        {{-- <td><input onblur="findAssessmentPointSM()" type="number" min="0" max="2" class="assessmentPointSM"></td> --}}
                                        <td><input onblur="commentSM2()" type="text" min="0" max="2" class="road" name="" id=""></td>
                                      </tr>
                    
                                      <tr>
                                        <td >Cut slope not steeper than 1:1.5 or Rock slope not steeper than 4:1 </td>
                                        {{-- <td rowspan="7">CKG</td> --}}
                                        <td>1</td>
                                        <td><input onblur="findTargetPointSM2()" type="number" min="0" max="2" class="targetPointSM2" ></td>
                                        {{-- <td><input onblur="findAssessmentPointSM()" type="number" min="0" max="2" class="assessmentPointSM"></td> --}}
                                        <td><input onblur="commentSM2()" type="text" min="0" max="2" class="road" name="" id=""></td>
                                       
                                      </tr>
                  
                                      <tr>
                                        <td >Fill slope not steeper than 1:2</td>
                                        <td>1</td>
                                        <td><input onblur="findTargetPointSM2()" type="number" min="0" max="2" class="targetPointSM2" ></td>
                                        {{-- <td><input onblur="findAssessmentPointSM()" type="number" min="0" max="2" class="assessmentPointSM"></td> --}}
                                        <td><input onblur="commentSM2()" type="text" min="0" max="2" class="road" name="" id=""></td>
                                        
                                      </tr>
                    
                                      <tr>
                                        <td >Height of slope not more than 6m</td>
                                        <td>1</td>
                                        <td><input onblur="findTargetPointSM2()" type="number" min="0" max="2" class="targetPointSM2" ></td>
                                        {{-- <td><input onblur="findAssessmentPointSM()" type="number" min="0" max="2" class="assessmentPointSM"></td> --}}
                                        <td><input onblur="commentSM2()" type="text" min="0" max="2" class="road" name="" id=""></td>
                                        
                                      </tr>
                  
                                      <tr>
                                        <td >Maximum grade less than 7%</td>
                                        <td>1</td>
                                        <td><input onblur="findTargetPointSM2()" type="number" min="0" max="2" class="targetPointSM2" ></td>
                                        {{-- <td><input onblur="findAssessmentPointSM()" type="number" min="0" max="2" class="assessmentPointSM"></td> --}}
                                        <td><input onblur="commentSM2()" type="text" min="0" max="2" class="road" name="" id=""></td>
                                   
                                      </tr>
                  
                                      <tr>
                                        <td >No reclamation involved existing water bodies</td>
                                        <td>1</td>
                                        <td><input onblur="findTargetPointSM2()" type="number" min="0" max="2" class="targetPointSM2" ></td>
                                        {{-- <td><input onblur="findAssessmentPointSM()" type="number" min="0" max="2" class="assessmentPointSM"></td> --}}
                                        <td><input onblur="commentSM2()" type="text" min="0" max="2" class="road" name="" id=""></td>
                                        
                                    
                                      </tr>
                  
                                      <tr>
                                        <td >Provide added uphill lane (climbing lane) where the length of critical grade exceeds 5%</td>
                                        <td>1</td>
                                        <td><input onblur="findTargetPointSM2()" type="number" min="0" max="2" class="targetPointSM2" ></td>
                                        {{-- <td><input onblur="findAssessmentPointSM()" type="number" min="0" max="2" class="assessmentPointSM"></td> --}}
                                        <td><input onblur="commentSM2()" type="text" min="0" max="2" class="road" name="" id=""></td>
                                  
                                      </tr>
                  
                                      <tr>
                                        <td >Not in Sensitive Area OR Sensitive area with mitigation plan</td>
                                        <td>CASKT</td>
                                        <td>1</td>
                                        <td><input onblur="findTargetPointSM2()" type="number" min="0" max="2" class="targetPointSM2" ></td>
                                        {{-- <td><input onblur="findAssessmentPointSM()" type="number" min="0" max="2" class="assessmentPointSM"></td> --}}
                                        <td><input onblur="commentSM2()" type="text" min="0" max="2" class="road" name="" id=""></td>
                                        
                                      </tr>
                  
                                      <td style="display: none">markahSM2<input type="text" name="markahSM2" id="markahSM2" /></td>            
                  
                  
                                    
                  
                                      <tr>
                                        <td colspan="1" rowspan="8">SM3</td>
                                        <td colspan="2">SITE VEGETATION</td>
                                        <td>3</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td></td>
                     
                                      </tr>
                    
                                      <tr>
                                        <td >Slope not more than 6 berms</td>
                                        <td rowspan="7">CJ</td>
                                        <td>1</td>
                                        <td><input onblur="findTargetPointSM3()" type="number" min="0" max="2" class="targetPointSM3" ></td>
                                        {{-- <td><input onblur="findAssessmentPointSM()" type="number" min="0" max="2" class="assessmentPointSM"></td> --}}
                                        <td><input onblur="commentSM3()" type="text" min="0" max="2" class="road" name="" id=""></td>
                                      </tr>
                    
                                      <tr>
                                        <td >Use non-invasive plant species(example: grass/creeper) </td>
                                        <td>1</td>
                                        <td><input onblur="findTargetPointSM3()" type="number" min="0" max="2" class="targetPointSM3" ></td>
                                        {{-- <td><input onblur="findAssessmentPointSM()" type="number" min="0" max="2" class="assessmentPointSM"></td> --}}
                                        <td><input onblur="commentSM3()" type="text" min="0" max="2" class="road" name="" id=""></td>
                                       
                                      </tr>
                  
                                      <tr>
                                        <td >Use bio-engineering techniques (example: vetiver grass, creeper and regeneration of natural plants and material )</td>
                                        <td>1</td>
                                        <td><input onblur="findTargetPointSM3()" type="number" min="0" max="2" class="targetPointSM3" ></td>
                                        {{-- <td><input onblur="findAssessmentPointSM()" type="number" min="0" max="2" class="assessmentPointSM"></td> --}}
                                        <td><input onblur="commentSM3()" type="text" min="0" max="2" class="road" name="" id=""></td>
                                        
                                      </tr>
                    
                                      <tr>
                                        <td >Use native plant species</td>
                                        <td>1</td>
                                        <td><input onblur="findTargetPointSM3()" type="number" min="0" max="2" class="targetPointSM3" ></td>
                                        {{-- <td><input onblur="findAssessmentPointSM()" type="number" min="0" max="2" class="assessmentPointSM"></td> --}}
                                        <td><input onblur="commentSM3()" type="text" min="0" max="2" class="road" name="" id=""></td>
                                        
                                      </tr>
                  
                                      <tr>
                                        <td >Use of grass/creeper for slope protection /unpaved shoulder</td>
                                        <td>1</td>
                                        <td><input onblur="findTargetPointSM3()" type="number" min="0" max="2" class="targetPointSM3" ></td>
                                        {{-- <td><input onblur="findAssessmentPointSM()" type="number" min="0" max="2" class="assessmentPointSM"></td> --}}
                                        <td><input onblur="commentSM3()" type="text" min="0" max="2" class="road" name="" id=""></td>
                                   
                                      </tr>
                  
                                      <tr>
                                        <td >Hydroseeding with Bio-degradable Erosion Control Blanket(BECB) on slope</td>
                                        <td>1</td>
                                        <td><input onblur="findTargetPointSM3()" type="number" min="0" max="2" class="targetPointSM3" ></td>
                                        {{-- <td><input onblur="findAssessmentPointSM()" type="number" min="0" max="2" class="assessmentPointSM"></td> --}}
                                        <td><input onblur="commentSM3()" type="text" min="0" max="2" class="road" name="" id=""></td>
                                        
                                      </tr>
                  
                                      <tr>
                                        <td >Preservation of existing tree/vegetation</td>
                                        <td>1</td>
                                        <td><input onblur="findTargetPointSM3()" type="number" min="0" max="2" class="targetPointSM3" ></td>
                                        {{-- <td><input onblur="findAssessmentPointSM()" type="number" min="0" max="2" class="assessmentPointSM"></td> --}}
                                        <td><input onblur="commentSM3()" type="text" min="0" max="2" class="road" name="" id=""></td>
                                  
                                      </tr>
                  
                                      <td style="display: none">markahSM3<input type="text" name="markahSM3" id="markahSM3" /></td>            
                  
                  
                  
                                     
                  
                  
                                      <td colspan="1" rowspan="4">SM4</td>
                                      <td colspan="2">NOISE MITIGATION PLAN</td>
                                      <td>2</td>
                                      <td>0</td>
                                      <td>0</td>
                                      <td></td>
                   
                                    </tr>
                  
                                    <tr>
                                      <td >Supply and install noise barrier including maintenance during the construction and defects liability period</td>
                                      <td rowspan="7">CJ</td>
                                      <td>1</td>
                                      <td><input onblur="findTargetPointSM4()" type="number" min="0" max="2" class="targetPointSM4" ></td>
                                      {{-- <td><input onblur="findAssessmentPointSM()" type="number" min="0" max="2" class="assessmentPointSM"></td> --}}
                                      <td><input onblur="commentSM4()" type="text" min="0" max="2" class="road" name="" id=""></td>
                                    </tr>
                  
                                    <tr>
                                      <td >To ensure that all site equipment are in using low decibel to control noise pollution </td>
                                      <td>1</td>
                                      <td><input onblur="findTargetPointSM4()" type="number" min="0" max="2" class="targetPointSM4" ></td>
                                      {{-- <td><input onblur="findAssessmentPointSM()" type="number" min="0" max="2" class="assessmentPointSM"></td> --}}
                                      <td><input onblur="commentSM4()" type="text" min="0" max="2" class="road" name="" id=""></td>
                                     
                                    </tr>
                  
                                    <tr>
                                      <td >To ensure using all machineryon site are low decibel to minimize the amount of noise generated </td>
                                      <td>1</td>
                                      <td><input onblur="findTargetPointSM4()" type="number" min="0" max="2" class="targetPointSM4" ></td>
                                      {{-- <td><input onblur="findAssessmentPointSM()" type="number" min="0" max="2" class="assessmentPointSM"></td> --}}
                                      <td><input onblur="commentSM4()" type="text" min="0" max="2" class="road" name="" id=""></td>
                                      
                                    </tr>
                  
                                    <td style="display: none">markahSM4<input type="text" name="markahSM4" id="markahSM4" /></td>            
                  
                  
                                    <tr >
                                      <td colspan="3"> SUB TOTAL SM POINT</td>
                                      <td>18</td>
                                      <td></td>
                                      <td></td>
                                      <td></td>
                                    </tr>

                                    <tr>
                                        <td>PT</td>
                                        <td colspan="6" align="left">PAVEMENT TECHNOLOGIES</td>
                                       
                                        
                                        
                                        
                                      </tr>
                    
                                      <tr>
                                        <td colspan="1" rowspan="6">PT1</td>
                                        <td colspan="2">EXISTING PAVEMENT EVALUATION</td>
                                        {{-- <td></td> --}}
                                        <td>3</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td></td>
                                        
                                        
                                      </tr>
                    
                                      <tr>
                                        <td>Surface Condition Survey</td>
                                        <td rowspan="5">CSFJ</td>
                                        <td>1</td>
                                        <td><input onblur="findTargetPointPT1()" type="number" min="0" max="2" class="targetPointPT1" ></td>
                                        {{-- <td><input onblur="findAssessmentPointPT1()" type="number" min="0" max="2" class="assessmentPointPT1"></td> --}}
                                        <td><input onblur="commentPT1()" type="text" min="0" max="2" class="road" name="" id=""></td>
                                      </tr>
                    
                                      <tr>
                                        <td >Coring & Dynamic Cone Penetrometer test</td>
                                        <td>1</td>
                                        <td><input onblur="findTargetPointPT1()" type="number" min="0" max="2" class="targetPointPT1" ></td>
                                        {{-- <td><input onblur="findAssessmentPointPT1()" type="number" min="0" max="2" class="assessmentPointPT1"></td> --}}
                                        <td><input onblur="commentPT1()" type="text" min="0" max="2" class="road" name="" id=""></td>
                                      </tr>
                  
                                      <tr>
                                        <td >Deflection test</td>
                                        <td>1</td>
                                        <td><input onblur="findTargetPointPT1()" type="number" min="0" max="2" class="targetPointPT1" ></td>
                                        {{-- <td><input onblur="findAssessmentPointPT1()" type="number" min="0" max="2" class="assessmentPointPT1"></td> --}}
                                        <td><input onblur="commentPT1()" type="text" min="0" max="2" class="road" name="" id=""></td>
                                      </tr>
                    
                                      <tr>
                                        <td >Trial pit & Laboratory</td>
                                        <td>1</td>
                                        <td><input onblur="findTargetPointPT1()" type="number" min="0" max="2" class="targetPointPT1" ></td>
                                        {{-- <td><input onblur="findAssessmentPointPT1()" type="number" min="0" max="2" class="assessmentPointPT1"></td> --}}
                                        <td><input onblur="commentPT1()" type="text" min="0" max="2" class="road" name="" id=""></td>
                                      </tr>
                  
                                      <tr>
                                        <td >Surface Regularity Test (International Roughness Index, IRI)</td>
                                        <td>1</td>
                                        <td><input onblur="findTargetPointPT1()" type="number" min="0" max="2" class="targetPointPT1" ></td>
                                        {{-- <td><input onblur="findAssessmentPointPT1()" type="number" min="0" max="2" class="assessmentPointPT1"></td> --}}
                                        <td><input onblur="commentPT1()" type="text" min="0" max="2" class="road" name="" id=""></td>
                                      </tr>
                  
                                      <tr >
                                        <td style="display: none">markahPT1<input type="text" name="markahPT1" id="markahPT1" /></td>            
                                      </tr>
                  
                                      
                  
                                      <tr>
                                        <td colspan="1" rowspan="4">PT 2</td>
                                        <td colspan="2">PERMEABLE PAVEMENT</td>
                                        {{-- <td></td> --}}
                                        <td>3</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td></td>
                                        
                                        
                                      </tr>
                    
                                      {{-- <tr>
                                        <td rowspan="9">SM2</td>
                                        <td colspan="2">Road alignment</td>
                                        <td>6</td>
                                        
                                        <td><input onblur="roadWorks()" type="number" min="0" max="2" class="road" name="" id=""></td>
                                        <td><input onblur="roadWorks()" type="number" min="0" max="2" class="road" name="" id=""></td>
                                        <td><input onblur="roadWorks()" type="text" min="0" max="2" class="road" name="" id=""></td>
                                      </tr> --}}
                  
                                      <tr>
                                        <td >use of permeable (porous) pavement mix design</td>
                                        <td></td>
                                        <td>1</td>
                                        <td><input onblur="findTargetPointPT2()" type="number" min="0" max="2" class="targetPointPT2" ></td>
                                        {{-- <td><input onblur="findAssessmentPointPT2()" type="number" min="0" max="2" class="assessmentPointPT2"></td> --}}
                                        <td><input onblur="commentPT2()" type="text" min="0" max="2" class="road" name="" id=""></td>
                                      </tr>
                                      <tr>
                                        <td >Pavement crossfall 2.5% and min unpaved shoulder to drain</td>
                                        <td></td>
                                        <td>1</td>
                                        <td><input onblur="findTargetPointPT2()" type="number" min="0" max="2" class="targetPointPT2" ></td>
                                        {{-- <td><input onblur="findAssessmentPointPT2()" type="number" min="0" max="2" class="assessmentPointPT2"></td> --}}
                                        <td><input onblur="commentPT2()" type="text" min="0" max="2" class="road" name="" id=""></td>
                                      </tr>
                                      <tr>
                                        <td >Drainability of porous asphalt wearing course having a minimum thickness of 50mm</td>
                                        <td></td>
                                        <td>1</td>
                                        <td><input onblur="findTargetPointPT2()" type="number" min="0" max="2" class="targetPointPT2" ></td>
                                        {{-- <td><input onblur="findAssessmentPointPT2()" type="number" min="0" max="2" class="assessmentPointPT2"></td> --}}
                                        <td><input onblur="commentPT2()" type="text" min="0" max="2" class="road" name="" id=""></td>
                                      </tr>
                  
                                      <tr >
                                        <td style="display: none">markahPT2<input type="text" name="markahPT2" id="markahPT2" /></td>            
                                      </tr>
                                      
                  
                                      <tr>
                                        <td colspan="1" rowspan="2">PT 3</td>
                                        <td colspan="2">PAVEMENT PERFORMANCE TRACKING</td>
                                        {{-- <td></td> --}}
                                        <td>2</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td></td>
                                        
                                        
                                      </tr>
                  
                                      <tr>
                                        <td >Use a process that allows construction quality measurements and long-term pavement performance measurements</td>
                                        <td></td>
                                        <td>2</td>
                                        <td><input onblur="findTargetPointPT3()" type="number" min="0" max="2" class="targetPointPT3" name="" id=""></td>
                                        {{-- <td><input onblur="findAssessmentPointPT3()" type="number" min="0" max="2" class="assessmentPointPT3" name="" id=""></td> --}}
                                        <td><input onblur="commentPT3()" type="text" min="0" max="2" class="road" name="" id=""></td>
                                      </tr>
                  
                                      <tr >
                                        <td style="display: none">markahPT3<input type="text" name="markahPT3" id="markahPT3" /></td>            
                                      </tr>
                                      
                  
                                      <tr>
                                        <td colspan="1" rowspan="5">PT 4</td>
                                        <td colspan="2">LONG-LIFE PAVEMENT</td>
                                        {{-- <td></td> --}}
                                        <td>4</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td></td>
                                        
                                        
                                      </tr>
                  
                                      <tr>
                                        <td >Meet the requirements of Arahan Teknik Jalan</td>
                                        <td></td>
                                        <td>1</td>
                                        <td><input onblur="findTargetPointPT4()" type="number" min="0" max="2" class="targetPointPT4"></td>
                                        {{-- <td><input onblur="findAssessmentPointPT4()" type="number" min="0" max="2" class="assessmentPointPT4"></td> --}}
                                        <td><input onblur="commentPT4()" type="text" min="0" max="2" class="road" name="" id=""></td>
                                      </tr>
                                      <tr>
                                        <td >Pavement design is in accordance</td>
                                        <td></td>
                                        <td>1</td>
                                        <td><input onblur="findTargetPointPT4()" type="number" min="0" max="2" class="targetPointPT4"></td>
                                        {{-- <td><input onblur="findAssessmentPointPT4()" type="number" min="0" max="2" class="assessmentPointPT4"></td> --}}
                                        <td><input onblur="commentPT4()" type="text" min="0" max="2" class="road" name="" id=""></td>
                                      </tr>
                                      <tr>
                                        <td >Drainability surface runoff</td>
                                        <td></td>
                                        <td>1</td>
                                        <td><input onblur="findTargetPointPT4()" type="number" min="0" max="2" class="targetPointPT4"></td>
                                        {{-- <td><input onblur="findAssessmentPointPT4()" type="number" min="0" max="2" class="assessmentPointPT4"></td> --}}
                                        <td><input onblur="commentPT4()" type="text" min="0" max="2" class="road" name="" id=""></td>
                                      </tr>
                  
                                      <tr>
                                        <td >Riqid Pavement > 40 years design life</td>
                                        <td></td>
                                        <td>2</td>
                                        <td><input onblur="findTargetPointPT4()" type="number" min="0" max="2" class="targetPointPT4"></td>
                                        {{-- <td><input onblur="findAssessmentPointPT4()" type="number" min="0" max="2" class="assessmentPointPT4"></td> --}}
                                        <td><input onblur="commentPT4()" type="text" min="0" max="2" class="road" name="" id=""></td>
                                      </tr>
                  
                                      <tr >
                                        <td style="display: none">markahPT4<input type="text" name="markahPT4" id="markahPT4" /></td>            
                                      </tr>
                  
                                      <tr >
                                        <td colspan="3"> SUB TOTAL PT POINT</td>
                                        <td>12</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                      </tr>

                                      <tr>
                                        <td>EW</td>
                                        <td colspan="6" align="left">ENVIRONMENT & WATER</td>
                                       
                                        
                                        
                                        
                                      </tr>
                    
                                      <tr>
                                        <td colspan="1" rowspan="2">EW1</td>
                                        <td colspan="2">ENVIRONMENTAL MANAGEMENT SYSTEM</td>
                                        {{-- <td></td> --}}
                                        <td>3</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td></td>
                                        
                                        
                                      </tr>
                    
                                      <tr>
                                        <td>Provision of EPW in contract (Design Stage)</td>
                                        <td rowspan="1">CSFJ</td>
                                        <td>3</td>
                                        <td><input onblur="findTargetPointEW1()" type="number" min="0" max="2" class="targetPointEW1" ></td>
                                        {{-- <td><input onblur="findAssessmentPointEW1()" type="number" min="0" max="2" class="assessmentPointEW1"></td> --}}
                                        <td><input onblur="commentEW1()" type="text" min="0" max="2" class="road" name="" id=""></td>
                                      </tr>
                  
                                      <tr >
                                        <td style="display: none">markahEW1<input type="text" name="markahEW1" id="markahEW1" /></td>            
                                      </tr>
                    
                                      
                  
                                      
                  
                                      <tr>
                                        <td colspan="1" rowspan="3">EW2</td>
                                        <td colspan="2">STORMWATER MANAGEMENT</td>
                                        {{-- <td></td> --}}
                                        <td>2</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td></td>
                                        
                                        
                                      </tr>
                  
                                      
                    
                                      {{-- <tr>
                                        <td rowspan="9">SM2</td>
                                        <td colspan="2">Road alignment</td>
                                        <td>6</td>
                                        
                                        <td><input onblur="roadWorks()" type="number" min="0" max="2" class="road" name="" id=""></td>
                                        <td><input onblur="roadWorks()" type="number" min="0" max="2" class="road" name="" id=""></td>
                                        <td><input onblur="roadWorks()" type="text" min="0" max="2" class="road" name="" id=""></td>
                                      </tr> --}}
                  
                                      <tr>
                                        <td >Develop a stormwater management documents and frawing plans</td>
                                        <td rowspan="2">CKAS</td>
                                        <td>1</td>
                                        <td><input onblur="findTargetPointEW2()" type="number" min="0" max="2" class="targetPointEW2" ></td>
                                        {{-- <td><input onblur="findAssessmentPointEW2()" type="number" min="0" max="2" class="assessmentPointEW2"></td> --}}
                                        <td><input onblur="commentEW2()" type="text" min="0" max="2" class="road" name="" id=""></td>
                                      </tr>
                                      <tr>
                                        <td >Develop a stromwater management plan for the site using stormwater</td>
                                        {{-- <td></td> --}}
                                        <td>1</td>
                                        <td><input onblur="findTargetPointEW2()" type="number" min="0" max="2" class="targetPointEW2" ></td>
                                        {{-- <td><input onblur="findAssessmentPointEW2()" type="number" min="0" max="2" class="assessmentPointEW2"></td> --}}
                                        <td><input onblur="commentEW2()" type="text" min="0" max="2" class="road" name="" id=""></td>
                                      </tr>
                  
                                      <tr >
                                        <td style="display: none">markahEW2<input type="text" name="markahEW2" id="markahEW2" /></td>            
                                      </tr>
                                      
                                      <tr >
                                        <td colspan="3"> SUB TOTAL EW POINT</td>
                                        <td>5</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                      </tr>
                  
                                      <tr>
                                        <td>AE</td>
                                        <td colspan="6" align="left">ACCESS & EQUITY</td>
                                       
                                        
                                        
                                        
                                      </tr>
                    
                                      <tr>
                                        <td colspan="1" rowspan="5">AE 1</td>
                                        <td colspan="2">SAFETY AUDIT</td>
                                        {{-- <td></td> --}}
                                        <td>5</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td></td>
                                        
                                        
                                      </tr>
                  
                                      <tr>
                                        <td >Road Safety Audit (During Design Stage)</td>
                                        <td></td>
                                        <td>3</td>
                                        <td><input onblur="findTargetPointAE1()" type="number" min="0" max="2" class="targetPointAE1" ></td>
                                        {{-- <td><input onblur="findAssessmentPointAE1()" type="number" min="0" max="2" class="assessmentPointAE1" ></td> --}}
                                        <td><input onblur="commentAE1()" type="text" min="0" max="2" class="road" name="" id=""></td>
                                      </tr>
                  
                                      <tr>
                                        <td >Road Safety Audit (During Construction Stage)</td>
                                        <td></td>
                                        <td>3</td>
                                        <td><input onblur="findTargetPointAE1()" type="number" min="0" max="2" class="targetPointAE1" ></td>
                                        {{-- <td><input onblur="findAssessmentPointAE1()" type="number" min="0" max="2" class="assessmentPointAE1" ></td> --}}
                                        <td><input onblur="commentAE1()" type="text" min="0" max="2" class="road" name="" id=""></td>
                                      </tr>
                  
                                      <tr>
                                        <td >Additional Audit For Traffic Management Safety Report During Construction</td>
                                        <td></td>
                                        <td>1</td>
                                        <td><input onblur="findTargetPointAE1()" type="number" min="0" max="2" class="targetPointAE1" ></td>
                                        {{-- <td><input onblur="findAssessmentPointAE1()" type="number" min="0" max="2" class="assessmentPointAE1" ></td> --}}
                                        <td><input onblur="commentAE1()" type="text" min="0" max="2" class="road" name="" id=""></td>
                                      </tr>
                  
                                      <tr>
                                        <td >Road Safety Audit (During Operational Stage)</td>
                                        <td></td>
                                        <td>1</td>
                                        <td><input onblur="findTargetPointAE1()" type="number" min="0" max="2" class="targetPointAE1" ></td>
                                        {{-- <td><input onblur="findAssessmentPointAE1()" type="number" min="0" max="2" class="assessmentPointAE1" ></td> --}}
                                        <td><input onblur="commentAE1()" type="text" min="0" max="2" class="road" name="" id=""></td>
                                      </tr>
                  
                                      <tr >
                                        <td style="display: none">markahAE1<input type="text" name="markahAE1" id="markahAE1" /></td>            
                                      </tr>
                  
                                      <tr >
                                        <td colspan="3"> SUB TOTAL AE POINT</td>
                                        <td>5</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                      </tr>
                  
                                      <tr>
                                        <td>CA</td>
                                        <td colspan="6" align="left">CONSTRUCTION ACTIVITY</td>
                                        
                                      </tr>
                                      
                  
                                      <tr>
                                        <td colspan="1" rowspan="2">CA1</td>
                                        <td colspan="2">REQUIREMENT FOR ROAD WORKS DESIGN</td>
                                        {{-- <td></td> --}}
                                        <td>3</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td></td>
                                        
                                        
                                      </tr>
                  
                                      <tr>
                                        <td >MS ISO 9001:2008 or (latest version) certification for main contractor</td>
                                        <td></td>
                                        <td>3</td>
                                        <td><input onblur="findTargetPointCA1()" type="number" min="0" max="2" class="targetPointCA1"></td>
                                        {{-- <td><input onblur="findAssessmentPointCA1()" type="number" min="0" max="2" class="assessmentPointCA1" ></td> --}}
                                        <td><input onblur="commentCA1()" type="text" min="0" max="2" class="road" name="" id=""></td>
                                      </tr>
                  
                                      <tr >
                                        <td style="display: none">markahCA1<input type="text" name="markahCA1" id="markahCA1" /></td>            
                                      </tr>
                  
                                      <tr>
                                        <td colspan="1" rowspan="3">CA2</td>
                                        <td colspan="2">OCCUPTIONAL HEALTH AND SAFETY MANAGEMENT SYSTEM</td>
                                        {{-- <td></td> --}}
                                        <td>3</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td></td>
                                        
                                        
                                      </tr>
                  
                                      <tr>
                                        <td >OHSAS 18001:2007 0r (latest version) certification for main contractor</td>
                                        <td></td>
                                        <td>2</td>
                                        <td><input onblur="findTargetPointCA2()" type="number" min="0" max="2" class="targetPointCA2"></td>
                                        {{-- <td><input onblur="findAssessmentPointCA2()" type="number" min="0" max="2" class="assessmentPointCA2" ></td> --}}
                                        <td><input onblur="commentCA2()" type="text" min="0" max="2" class="road" name="" id=""></td>
                                      </tr>
                                      <tr>
                                        <td >To provide site safety and health officer with certification by DOSH</td>
                                        <td></td>
                                        <td>1</td>
                                        <td><input onblur="findTargetPointCA2()" type="number" min="0" max="2" class="targetPointCA2"></td>
                                        {{-- <td><input onblur="findAssessmentPointCA2()" type="number" min="0" max="2" class="assessmentPointCA2" ></td> --}}
                                        <td><input onblur="commentCA2()" type="text" min="0" max="2" class="road" name="" id=""></td>
                                      </tr>
                  
                                      <tr >
                                        <td style="display: none">markahCA2<input type="text" name="markahCA2" id="markahCA2" /></td>            
                                      </tr>
                  
                                      <tr>
                                        <td colspan="1" rowspan="5">CA 3</td>
                                        <td colspan="2">OCONSTRUCTION WASTE MANAGEMENT PLAN	</td>
                                        {{-- <td></td> --}}
                                        <td>4</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td></td>
                                        
                                        
                                      </tr>
                  
                                      <tr>
                                        <td >Create, establish, implement and maintain a formal construction waste management plan during road construction</td>
                                        <td></td>
                                        <td>2</td>
                                        <td><input onblur="findTargetPointCA3()" type="number" min="0" max="2" class="targetPointCA3"></td>
                                        {{-- <td><input onblur="findAssessmentPointCA3()" type="number" min="0" max="2" class="assessmentPointCA3" ></td> --}}
                                        <td><input onblur="commentCA3()" type="text" min="0" max="2" class="road" name="" id=""></td>
                                      </tr>
                  
                                      <tr>
                                        <td >Provision of Waste Management Plan in the contract (BQ)</td>
                                        <td></td>
                                        <td>2</td>
                                        <td><input onblur="findTargetPointCA3()" type="number" min="0" max="2" class="targetPointCA3"></td>
                                        {{-- <td><input onblur="findAssessmentPointCA3()" type="number" min="0" max="2" class="assessmentPointCA3" ></td> --}}
                                        <td><input onblur="commentCA3()" type="text" min="0" max="2" class="road" name="" id=""></td>
                                      </tr>
                  
                                      <tr>
                                        <td >Provide a designated location to segregate construction waste on-site</td>
                                        <td></td>
                                        <td>1</td>
                                        <td><input onblur="findTargetPointCA3()" type="number" min="0" max="2" class="targetPointCA3"></td>
                                        {{-- <td><input onblur="findAssessmentPointCA3()" type="number" min="0" max="2" class="assessmentPointCA3" ></td> --}}
                                        <td><input onblur="commentCA3()" type="text" min="0" max="2" class="road" name="" id=""></td>
                                      </tr>
                  
                                      <tr>
                                        <td >Appoint the licensed contractor(s) to collect the construction waste </td>
                                        <td></td>
                                        <td>1</td>
                                        <td><input onblur="findTargetPointCA3()" type="number" min="0" max="2" class="targetPointCA3"></td>
                                        {{-- <td><input onblur="findAssessmentPointCA3()" type="number" min="0" max="2" class="assessmentPointCA3" ></td> --}}
                                        <td><input onblur="commentCA3()" type="text" min="0" max="2" class="road" name="" id=""></td>
                                      </tr>
                  
                                      <tr >
                                        <td style="display: none">markahCA3<input type="text" name="markahCA3" id="markahCA3" /></td>            
                                      </tr>
                  
                                      <tr>
                                        <td colspan="1" rowspan="4">CA 4</td>
                                        <td colspan="2">TRAFFIC MANAGEMENT PLAN</td>
                                        {{-- <td></td> --}}
                                        <td>4</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td></td>
                                        
                                        
                                      </tr>
                  
                                      <tr>
                                        <td >Create, establish and implement a formal traffic management plan during Design and road construction stage</td>
                                        <td></td>
                                        <td>2</td>
                                        <td><input onblur="findTargetPointCA4()" type="number" min="0" max="2" class="targetPointCA4"></td>
                                        {{-- <td><input onblur="findAssessmentPointCA4()" type="number" min="0" max="2" class="assessmentPointCA4" ></td> --}}
                                        <td><input onblur="commentCA4()" type="text" min="0" max="2" class="road" name="" id=""></td>
                                      </tr>
                  
                                      <tr>
                                        <td >Provision of Traffic Management Officer in the contract document (BQ)</td>
                                        <td></td>
                                        <td>1</td>
                                        <td><input onblur="findTargetPointCA4()" type="number" min="0" max="2" class="targetPointCA4"></td>
                                        {{-- <td><input onblur="findAssessmentPointCA4()" type="number" min="0" max="2" class="assessmentPointCA4" ></td> --}}
                                        <td><input onblur="commentCA4()" type="text" min="0" max="2" class="road" name="" id=""></td>
                                      </tr>
                  
                                      <tr>
                                        <td >Provision of third party auditor for Traffic Management Plan (TMP)</td>
                                        <td></td>
                                        <td>1</td>
                                        <td><input onblur="findTargetPointCA4()" type="number" min="0" max="2" class="targetPointCA4"></td>
                                        {{-- <td><input onblur="findAssessmentPointCA4()" type="number" min="0" max="2" class="assessmentPointCA4" ></td> --}}
                                        <td><input onblur="commentCA4()" type="text" min="0" max="2" class="road" name="" id=""></td>
                                      </tr>
                  
                                      <tr >
                                        <td style="display: none">markahCA4<input type="text" name="markahCA4" id="markahCA4" /></td>            
                                      </tr>
                  
                                      <tr>
                                        <td colspan="1" rowspan="2">CA 5</td>
                                        <td colspan="2">SITE ROUTINE MAINTENANCE PLAN 	</td>
                                        {{-- <td></td> --}}
                                        <td>2</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td></td>
                                        
                                        
                                      </tr>
                  
                                      <tr>
                                        <td >Create, establish, implement routine maintenanace for road project </td>
                                        <td></td>
                                        <td>2</td>
                                        <td><input onblur="findTargetPointCA5()" type="number" min="0" max="2" class="targetPointCA5"></td>
                                        <td><input onblur="findAssessmentPointCA5()" type="number" min="0" max="2" class="assessmentPointCA5" ></td>
                                        <td><input onblur="commentCA5()" type="text" min="0" max="2" class="road" name="" id=""></td>
                                      </tr>
                  
                                      <tr >
                                        <td style="display: none">markahCA5<input type="text" name="markahCA5" id="markahCA5" /></td>            
                                      </tr>
                  
                                      <tr>
                                        <td colspan="1" rowspan="2">CA 6</td>
                                        <td colspan="2">HOUSEKEEPING 	</td>
                                        {{-- <td></td> --}}
                                        <td>2</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td></td>
                                        
                                        
                                      </tr>
                  
                                      <tr>
                                        <td >"Provision Housekeeping implementation in the contract document/ BQ
                                          OR
                                          Establish and implement housekeeping during construction "</td>
                                        <td></td>
                                        <td>2</td>
                                        <td><input onblur="findTargetPointCA6()" type="number" min="0" max="2" class="targetPointCA6"></td>
                                        {{-- <td><input onblur="findAssessmentPointCA6()" type="number" min="0" max="2" class="assessmentPointCA6" ></td> --}}
                                        <td><input onblur="commentCA6()" type="text" min="0" max="2" class="road" name="" id=""></td>
                                      </tr>
                  
                                      <tr >
                                        <td style="display: none">markahCA6<input type="text" name="markahCA6" id="markahCA6" /></td>            
                                      </tr>
                  
                                      <tr>
                                        <td colspan="1" rowspan="4">CA 7</td>
                                        <td colspan="2">HOUSEKEEPING 	</td>
                                        {{-- <td></td> --}}
                                        <td>4</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td></td>
                                        
                                        
                                      </tr>
                  
                                      <tr>
                                        <td >Perform scheduled maintenance of construction machineries</td>
                                        <td></td>
                                        <td>2</td>
                                        <td><input onblur="findTargetPointCA7()" type="number" min="0" max="2" class="targetPointCA7"></td>
                                        {{-- <td><input onblur="findAssessmentPointCA7()" type="number" min="0" max="2" class="assessmentPointCA7" ></td> --}}
                                        <td><input onblur="commentCA7()" type="text" min="0" max="2" class="road" name="" id=""></td>
                                      </tr>
                                      <tr>
                                        <td >Use high performance machineries with low fuel consumption and low air emission</td>
                                        <td></td>
                                        <td>2</td>
                                        <td><input onblur="findTargetPointCA7()" type="number" min="0" max="2" class="targetPointCA7"></td>
                                        {{-- <td><input onblur="findAssessmentPointCA7()" type="number" min="0" max="2" class="assessmentPointCA7" ></td> --}}
                                        <td><input onblur="commentCA7()" type="text" min="0" max="2" class="road" name="" id=""></td>
                                      </tr>
                                      <tr>
                                        <td >Provision of ESCP and Environmental Monitoring Report (EMR) – (eg. Water/ Air/ Noise Quality ) in the contract</td>
                                        <td></td>
                                        <td>2</td>
                                        <td><input onblur="findTargetPointCA7()" type="number" min="0" max="2" class="targetPointCA7"></td>
                                        {{-- <td><input onblur="findAssessmentPointCA7()" type="number" min="0" max="2" class="assessmentPointCA7" ></td> --}}
                                        <td><input onblur="commentCA7()" type="text" min="0" max="2" class="road" name="" id=""></td>
                                      </tr>
                  
                                      <tr >
                                        <td style="display: none">markahCA7<input type="text" name="markahCA7" id="markahCA7" /></td>            
                                      </tr>
                  
                                     
                  
                                      <tr >
                                        <td colspan="3"> SUB TOTAL CA POINT</td>
                                        <td>22</td>
                                        <td style="display: none">markahCA<input type="text" name="markahCA" id="markahCA" /></td>            
                                        <td></td>
                                        <td></td>
                                      </tr>

                                      <tr>
                                        <td>MR</td>
                                        <td colspan="6" align="left">MATERIAL & RESOURCES</td>
                                       
                                        
                                        
                                        
                                      </tr>
                    
                                      <tr>
                                        <td colspan="1" rowspan="6">MR 1</td>
                                        <td colspan="2">MATERIAL REUSE	</td>
                                        {{-- <td></td> --}}
                                        <td>5</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td></td>
                                        
                                        
                                      </tr>
                    
                                      <tr>
                                        <td>Reuse at a minimum 30% of existing pavement materials by estimated volume</td>
                                        <td rowspan="4">CJ</td>
                                        <td>2</td>
                                        <td><input onblur="findTargetPointMR1()" type="number" min="0" max="2" class="targetPointMR1"></td>
                                        {{-- <td><input onblur="findAssessmentPointMR1()" type="number" min="0" max="2" class="assessmentPointMR1"></td> --}}
                                        <td><input onblur="commentMR1()" type="text" min="0" max="2" class="road"></td>
                                      </tr>
                  
                                      <tr>
                                        <td>Reuse of existing material other than pavement materials </td>
                                        <td>1</td>
                                        <td><input onblur="findTargetPointMR1()" type="number" min="0" max="2" class="targetPointMR1"></td>
                                        {{-- <td><input onblur="findAssessmentPointMR1()" type="number" min="0" max="2" class="assessmentPointMR1"></td> --}}
                                        <td><input onblur="commentMR1()" type="text" min="0" max="2" class="road"></td>
                                      </tr>
                  
                                      <tr>
                                        <td>Earthwork balance </td>
                                        <td>1</td>
                                        <td><input onblur="findTargetPointMR1()" type="number" min="0" max="2" class="targetPointMR1"></td>
                                        {{-- <td><input onblur="findAssessmentPointMR1()" type="number" min="0" max="2" class="assessmentPointMR1"></td> --}}
                                        <td><input onblur="commentMR1()" type="text" min="0" max="2" class="road"></td>
                                      </tr>
                  
                                      <tr>
                                        <td>Fiber Roll Netting using biodegradable material at site for erosion control (eg. Wooden dust, coconut fiber)</td>
                                        <td>1</td>
                                        <td><input onblur="findTargetPointMR1()" type="number" min="0" max="2" class="targetPointMR1"></td>
                                        {{-- <td><input onblur="findAssessmentPointMR1()" type="number" min="0" max="2" class="assessmentPointMR1"></td> --}}
                                        <td><input onblur="commentMR1()" type="text" min="0" max="2" class="road"></td>
                                      </tr>
                  
                                      <tr>
                                        <td>To use reusable formwork for structure (eg: steel/ fiber formwork)</td>
                                        <td ></td>
                                        <td>1</td>
                                        <td><input onblur="findTargetPointMR1()" type="number" min="0" max="2" class="targetPointMR1"></td>
                                        {{-- <td><input onblur="findAssessmentPointMR1()" type="number" min="0" max="2" class="assessmentPointMR1"></td> --}}
                                        <td><input onblur="commentMR1()" type="text" min="0" max="2" class="road"></td>
                                      </tr>
                  
                                      <tr >
                                        <td style="display: none">markahMR1<input type="text" name="markahMR1" id="markahMR1" /></td>            
                                      </tr>
                  
                                      <tr>
                                        <td colspan="1" rowspan="5">MR 2</td>
                                        <td colspan="2">GREEN PRODUCT</td>
                                        {{-- <td></td> --}}
                                        <td>4</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td></td>
                                        
                                        
                                      </tr>
                  
                                      <tr>
                                        <td >Green Products Scoring System (GPSS) of 70% - 100%</td>
                                        <td rowspan="4">CASKT</td>
                                        <td>4</td>
                                        <td><input onblur="findTargetPointMR2()" type="number" min="0" max="2" class="targetPointMR2"></td>
                                        {{-- <td><input onblur="findAssessmentPointMR2()" type="number" min="0" max="2" class="assessmentPointMR2"></td> --}}
                                        <td><input onblur="commentMR()" type="text" min="0" max="2" class="road"></td>
                                      </tr>
                                      <tr>
                                        <td >Green Products Scoring System (GPSS) of 50% - 69%</td>
                                        {{-- <td></td> --}}
                                        <td>3</td>
                                        <td><input onblur="findTargetPointMR2()" type="number" min="0" max="2" class="targetPointMR2"></td>
                                        {{-- <td><input onblur="findAssessmentPointMR2()" type="number" min="0" max="2" class="assessmentPointMR2"></td> --}}
                                        <td><input onblur="commentMR2()" type="text" min="0" max="2" class="road"></td>
                                      </tr>
                                      <tr>
                                        <td >Green Products Scoring System (GPSS) of 40% - 49%</td>
                                        {{-- <td></td> --}}
                                        <td>2</td>
                                        <td><input onblur="findTargetPointMR2()" type="number" min="0" max="2" class="targetPointMR2"></td>
                                        {{-- <td><input onblur="findAssessmentPointMR2()" type="number" min="0" max="2" class="assessmentPointMR2"></td> --}}
                                        <td><input onblur="commentMR2()" type="text" min="0" max="2" class="road"></td>
                                      </tr>
                                      <tr>
                                        <td >Use Green Product Scoring System (GPSS)</td>
                                        {{-- <td></td> --}}
                                        <td>1</td>
                                        <td><input onblur="findTargetPointMR2()" type="number" min="0" max="2" class="targetPointMR2"></td>
                                        {{-- <td><input onblur="findAssessmentPointMR2()" type="number" min="0" max="2" class="assessmentPointMR2"></td> --}}
                                        <td><input onblur="commentMR2()" type="text" min="0" max="2" class="road"></td>
                                      </tr>
                  
                                      <tr >
                                        <td style="display: none">markahMR2<input type="text" name="markahMR2" id="markahMR2" /></td>            
                                      </tr>
                  
                                      <tr>
                                        <td colspan="1" rowspan="3">MR 3</td>
                                        <td colspan="2">ROAD INVENTORIES</td>
                                        {{-- <td></td> --}}
                                        <td>2</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td></td>
                                        
                                        
                                      </tr>
                  
                                      <tr>
                                        <td >Provide updated master inventory of road asset / warranty of material/product after completion of road works</td>
                                        <td rowspan="2">CSFJ</td>
                                        <td>1</td>
                                        <td><input onblur="findTargetPointMR3()" type="number" min="0" max="2" class="targetPointMR3"></td>
                                        {{-- <td><input onblur="findAssessmentPointMR3()" type="number" min="0" max="2" class="assessmentPointMR3"></td> --}}
                                        <td><input onblur="commentMR3()" type="text" min="0" max="2" class="road"></td>
                                      </tr>
                                      <tr>
                                        <td >Provide established master inventory of  road asset / warranty of material/product of existing road </td>
                                        {{-- <td></td> --}}
                                        <td>1</td>
                                        <td><input onblur="findTargetPointMR3()" type="number" min="0" max="2" class="targetPointMR3"></td>
                                        {{-- <td><input onblur="findAssessmentPointMR3()" type="number" min="0" max="2" class="assessmentPointMR3"></td> --}}
                                        <td><input onblur="commentMR3()" type="text" min="0" max="2" class="road"></td>
                                      </tr>
                  
                                      <tr >
                                        <td style="display: none">markahMR3<input type="text" name="markahMR3" id="markahMR3" /></td>            
                                      </tr>
                  
                                      <tr>
                                        <td colspan="1" rowspan="2">MR 4</td>
                                        <td colspan="2">EFFICIENT ROAD LIGHTINGS</td>
                                        {{-- <td></td> --}}
                                        <td>1</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td></td>
                                        
                                        
                                      </tr>
                  
                                      <tr>
                                        <td >All systems should be designed to use energy efficient road lightings, while complying to standard and specification for road lightings (eg. MS 825 part 1:2007)</td>
                                        <td rowspan="1">CKE</td>
                                        <td>1</td>
                                        <td><input onblur="findTargetPointMR4()" type="number" min="0" max="2" class="targetPointMR4"></td>
                                        {{-- <td><input onblur="findAssessmentPointMR4()" type="number" min="0" max="2" class="assessmentPointMR4"></td> --}}
                                        <td><input onblur="commentMR4()" type="text" min="0" max="2" class="road"></td>
                                      </tr>
                  
                                      <tr >
                                        <td style="display: none">markahMR4<input type="text" name="markahMR4" id="markahMR4" /></td>            
                                      </tr>
                  
                                      <tr >
                                        <td colspan="3"> SUB TOTAL MR POINT</td>
                                        <td>12</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                      </tr>
                  
                                      <tr >
                                        <td colspan="3"> TOTAL CORE POINT</td>
                                        <td>69</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                      </tr>
                  
                                      <tr>
                                        <td>EC</td>
                                        <td colspan="6" align="left">ELECTIVE CRITERIAS</td>
                                       
                                        
                                        
                                        
                                      </tr>
                    
                                      <tr>
                                        <td colspan="1" rowspan="4">SM 5 - EC</td>
                                        <td colspan="2">SERVICES FOR DISABLED USERS	</td>
                                        {{-- <td></td> --}}
                                        <td>3</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td></td>
                                        
                                        
                                      </tr>
                  
                                      <tr>
                                        <td >Crossing for disabled users with noise making devices installed</td>
                                        <td></td>
                                        <td>1</td>
                                        <td><input onblur="findTargetPointSM5EC()" type="number" min="0" max="2" class="targetPointSM5EC"></td>
                                        <td><input onblur="findAssessmentPointSM5EC()" type="number" min="0" max="2" class="assessmentPointSM5EC"></td>
                                        <td><input onblur="commentSM5EC()" type="text" min="0" max="2" class="road"></td>
                                      </tr>
                  
                                      <tr>
                                        <td >Walkway access for disabled users by providing sidewalks sloped for easy access</td>
                                        <td></td>
                                        <td>1</td>
                                        <td><input onblur="findTargetPointSM5EC()" type="number" min="0" max="2" class="targetPointSM5EC"></td>
                                        <td><input onblur="findAssessmentPointSM5EC()" type="number" min="0" max="2" class="assessmentPointEC"></td>
                                        <td><input onblur="commentSM5EC()" type="text" min="0" max="2" class="road"></td>
                                      </tr>
                  
                                      <tr>
                                        <td >Tac tile on the pedestrian pathway and access for disabled users</td>
                                        <td></td>
                                        <td>1</td>
                                        <td><input onblur="findTargetPointSM5EC()" type="number" min="0" max="2" class="targetPointSM5EC"></td>
                                        <td><input onblur="findAssessmentPointSM5EC()" type="number" min="0" max="2" class="assessmentPointSM5EC"></td>
                                        <td><input onblur="commentSM5EC()" type="text" min="0" max="2" class="road"></td>
                                      </tr>
                  
                                      <tr >
                                        <td style="display: none">markahSM5EC<input type="text" name="markahSM5EC" id="markahSM5EC" /></td>            
                                      </tr>
                  
                                      <tr>
                                        <td colspan="1" rowspan="4">SM 6 - EC</td>
                                        <td colspan="2">NOISE CONTROL	</td>
                                        {{-- <td></td> --}}
                                        <td>2</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td></td>
                                        
                                        
                                      </tr>
                  
                                      <tr>
                                        <td >The pavement mix design  by using quiet pavement</td>
                                        <td></td>
                                        <td>2</td>
                                        <td><input onblur="findTargetPointSM6EC()" type="number" min="0" max="2" class="targetPointSM6EC"></td>
                                        {{-- <td><input onblur="findAssessmentPointSM6EC()" type="number" min="0" max="2" class="assessmentPointSM6EC"></td> --}}
                                        <td><input onblur="commentSM6EC()" type="text" min="0" max="2" class="road"></td>
                                      </tr>
                  
                                      <tr>
                                        <td >Noise barrier shall be provided in sensitive areas such as housing situated beside busy roads or highways, schools and hospitals</td>
                                        <td></td>
                                        <td>2</td>
                                        <td><input onblur="findTargetPointSM6EC()" type="number" min="0" max="2" class="targetPointSM6EC"></td>
                                        {{-- <td><input onblur="findAssessmentPointSM6EC()" type="number" min="0" max="2" class="assessmentPointSM6EC"></td> --}}
                                        <td><input onblur="commentSM6EC()" type="text" min="0" max="2" class="road"></td>
                                      </tr>
                  
                                      <tr>
                                        <td >Buffer Zone </td>
                                        <td></td>
                                        <td>2</td>
                                        <td><input onblur="findTargetPointSM6EC()" type="number" min="0" max="2" class="targetPointSM6EC"></td>
                                        {{-- <td><input onblur="findAssessmentPointSM6EC()" type="number" min="0" max="2" class="assessmentPointSM6EC"></td> --}}
                                        <td><input onblur="commentSM6EC()" type="text" min="0" max="2" class="road"></td>
                                      </tr>
                  
                                      <tr >
                                        <td style="display: none">markahSM6EC<input type="text" name="markahSM6EC" id="markahSM6EC" /></td>            
                                      </tr>
                  
                                      <tr>
                                        <td colspan="1" rowspan="2">EW 3 - EC</td>
                                        <td colspan="2">ECOLOGICAL CONNECTIVITY		</td>
                                        {{-- <td></td> --}}
                                        <td>5</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td></td>
                                        
                                        
                                      </tr>
                  
                                      <tr>
                                        <td >"Provide dedicated wildlife crossing structures and protective fencing as determined by Environmental Impact Assessment (EIA) report 
                                          OR
                                          Provide sound barrier at sensitive area for wildlife"</td>
                                        <td></td>
                                        <td>5</td>
                                        <td><input onblur="findTargetPointEW3EC()" type="number" min="0" max="2" class="targetPointEW3EC"></td>
                                        {{-- <td><input onblur="findAssessmentPointEW3EC()" type="number" min="0" max="2" class="assessmentPointEW3EC"></td> --}}
                                        <td><input onblur="commentEW3EC()" type="text" min="0" max="2" class="road"></td>
                                      </tr>
                  
                                      <tr >
                                        <td style="display: none">markahEW3EC<input type="text" name="markahEW3EC" id="markahEW3EC" /></td>            
                                      </tr>
                  
                                      <tr>
                                        <td colspan="1" rowspan="2">AE 2 - EC</td>
                                        <td colspan="2"> SCENIC VIEWS </td>
                                        {{-- <td></td> --}}
                                        <td>5</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td></td>
                                        
                                        
                                      </tr>
                  
                                      <tr>
                                        <td >"Provide dedicated wildlife crossing structures and protective fencing as determined by Environmental Impact Assessment (EIA) report 
                                          OR
                                          Provide sound barrier at sensitive area for wildlife"</td>
                                        <td></td>
                                        <td>5</td>
                                        <td><input onblur="findTargetPointAE2EC()" type="number" min="0" max="2" class="targetPointAE2EC"></td>
                                        {{-- <td><input onblur="findAssessmentPointAE2EC()" type="number" min="0" max="2" class="assessmentPointAE2EC"></td> --}}
                                        <td><input onblur="commentAE2EC()" type="text" min="0" max="2" class="road"></td>
                                      </tr>
                  
                                      <tr >
                                        <td style="display: none">markahAE2EC<input type="text" name="markahAE2EC" id="markahAE2EC" /></td>            
                                      </tr>
                  
                                      <tr>
                                        <td colspan="1" rowspan="5">AE 3 - EC</td>
                                        <td colspan="2"> PEDESTRIAN ACCESS </td>
                                        {{-- <td></td> --}}
                                        <td>5</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td></td>
                                        
                                        
                                      </tr>
                  
                                      <tr>
                                        <td >Zebra Crossing or Signalised Pedestrian Crossing  and Refuge Island</td>
                                        <td></td>
                                        <td>1</td>
                                        <td><input onblur="findTargetPointAE3EC()" type="number" min="0" max="2" class="targetPointAE3EC"></td>
                                        {{-- <td><input onblur="findAssessmentPointAE3EC()" type="number" min="0" max="2" class="assessmentPointAE3EC"></td> --}}
                                        <td><input onblur="commentAE3EC()" type="text" min="0" max="2" class="road"></td>
                                      </tr>
                  
                                      <tr>
                                        <td >Overhead Pedestrian Bridge</td>
                                        <td></td>
                                        <td>2</td>
                                        <td><input onblur="findTargetPointAE3EC()" type="number" min="0" max="2" class="targetPointAE3EC"></td>
                                        {{-- <td><input onblur="findAssessmentPointAE3EC()" type="number" min="0" max="2" class="assessmentPointAE3EC"></td> --}}
                                        <td><input onblur="commentAE3EC()" type="text" min="0" max="2" class="road"></td>
                                      </tr>
                                      <tr>
                                        <td >Sidewalk / Walkway and Raised Crosswalk</td>
                                        <td></td>
                                        <td>1</td>
                                        <td><input onblur="findTargetPointAE3EC()" type="number" min="0" max="2" class="targetPointAE3EC"></td>
                                        {{-- <td><input onblur="findAssessmentPointAE3EC()" type="number" min="0" max="2" class="assessmentPointAE3EC"></td> --}}
                                        <td><input onblur="commentAE3EC()" type="text" min="0" max="2" class="road"></td>
                                      </tr>
                                      <tr>
                                        <td >Covered walkway</td>
                                        <td></td>
                                        <td>1</td>
                                        <td><input onblur="findTargetPointAE3EC()" type="number" min="0" max="2" class="targetPointAE3EC"></td>
                                        {{-- <td><input onblur="findAssessmentPointAE3EC()" type="number" min="0" max="2" class="assessmentPointAE3EC"></td> --}}
                                        <td><input onblur="commentAE3EC()" type="text" min="0" max="2" class="road"></td>
                                      </tr>
                  
                                      <tr >
                                        <td style="display: none">markahAE3EC<input type="text" name="markahAE3EC" id="markahAE3EC" /></td>            
                                      </tr>
                  
                                      <tr>
                                        <td colspan="1" rowspan="5">AE 4 - EC</td>
                                        <td colspan="2"> MOTORCYCLE LANE </td>
                                        {{-- <td></td> --}}
                                        <td>6</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td></td>
                                        
                                        
                                      </tr>
                  
                                      <tr>
                                        <td >Paved shoulder, non-exclusive motorcycle lane and end treatment at junction</td>
                                        <td></td>
                                        <td>1</td>
                                        <td><input onblur="findTargetPointAE4EC()" type="number" min="0" max="2" class="targetPointAE4EC"></td>
                                        {{-- <td><input onblur="findAssessmentPointEC()" type="number" min="0" max="2" class="assessmentPointEC"></td> --}}
                                        <td><input onblur="commentAE4EC()" type="text" min="0" max="2" class="road"></td>
                                      </tr>
                  
                                      <tr>
                                        <td >Exclusive motorcycle lane</td>
                                        <td></td>
                                        <td>2</td>
                                        <td><input onblur="findTargetPointAE4EC()" type="number" min="0" max="2" class="targetPointAE4EC"></td>
                                        {{-- <td><input onblur="findAssessmentPointEC()" type="number" min="0" max="2" class="assessmentPointEC"></td> --}}
                                        <td><input onblur="commentAE4EC()" type="text" min="0" max="2" class="road"></td>
                                      </tr>
                                      <tr>
                                        <td >Overhead motorcycle bridge</td>
                                        <td></td>
                                        <td>2</td>
                                        <td><input onblur="findTargetPointAE4EC()" type="number" min="0" max="2" class="targetPointAE4EC"></td>
                                        {{-- <td><input onblur="findAssessmentPointEC()" type="number" min="0" max="2" class="assessmentPointEC"></td> --}}
                                        <td><input onblur="commentAE4EC()" type="text" min="0" max="2" class="road"></td>
                                      </tr>
                                      <tr>
                                        <td >Motorcycle shelter</td>
                                        <td></td>
                                        <td>1</td>
                                        <td><input onblur="findTargetPointAE4EC()" type="number" min="0" max="2" class="targetPointAE4EC"></td>
                                        {{-- <td><input onblur="findAssessmentPointEC()" type="number" min="0" max="2" class="assessmentPointEC"></td> --}}
                                        <td><input onblur="commentAE4EC()" type="text" min="0" max="2" class="road"></td>
                                      </tr>
                  
                                      <tr >
                                        <td style="display: none">markahAE4EC<input type="text" name="markahAE4EC" id="markahAE4EC" /></td>            
                                      </tr>
                  
                                      <tr>
                                        <td colspan="1" rowspan="2">AE 5 - EC</td>
                                        <td colspan="2"> REST AREA </td>
                                        {{-- <td></td> --}}
                                        <td>2</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td></td>
                                        
                                        
                                      </tr>
                  
                                      <tr>
                                        <td >Provide or maintain existing rest area facilities along the road </td>
                                        <td></td>
                                        <td>2</td>
                                        <td><input onblur="findTargetPointAE5EC()" type="number" min="0" max="2" class="targetPointAE5EC"></td>
                                        {{-- <td><input onblur="findAssessmentPointAE5EC()" type="number" min="0" max="2" class="assessmentPointEC"></td> --}}
                                        <td><input onblur="commentAE5EC()" type="text" min="0" max="2" class="road"></td>
                                      </tr>
                  
                                      <tr >
                                        <td style="display: none">markahAE5EC<input type="text" name="markahAE5EC" id="markahAE5EC" /></td>            
                                      </tr>
                  
                                      <tr>
                                        <td colspan="1" rowspan="3">AE 6 - EC</td>
                                        <td colspan="2"> BICYCLE ASSESS </td>
                                        {{-- <td></td> --}}
                                        <td>2</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td></td>
                                        
                                        
                                      </tr>
                  
                                      <tr>
                                        <td >Implement physical or constructed changes to the roadway structure, dimensions, or form that provide bicycle-only facilities with dedicated access (such as bicycle lane). Lanes shared with motorized vehicles do not meet this requirement </td>
                                        <td></td>
                                        <td>1</td>
                                        <td><input onblur="findTargetPointAE6EC()" type="number" min="0" max="2" class="targetPointAE6EC"></td>
                                        {{-- <td><input onblur="findAssessmentPointAE6EC()" type="number" min="0" max="2" class="assessmentPointEC"></td> --}}
                                        <td><input onblur="commentAE6EC()" type="text" min="0" max="2" class="road"></td>
                                      </tr>
                  
                                      <tr>
                                        <td >Implement physical or constructed changes to the roadway structure, dimensions, or form that provide bicycle-only facilities with dedicated access (such as bicycle lane). Lanes shared with motorized vehicles do not meet this requirement</td>
                                        <td></td>
                                        <td>2</td>
                                        <td><input onblur="findTargetPointAE6EC()" type="number" min="0" max="2" class="targetPointAE6EC"></td>
                                        {{-- <td><input onblur="findAssessmentPointAE6EC()" type="number" min="0" max="2" class="assessmentPointAE6EC"></td> --}}
                                        <td><input onblur="commentAE6EC()" type="text" min="0" max="2" class="road"></td>
                                      </tr>
                  
                                      <tr >
                                        <td style="display: none">markahAE6EC<input type="text" name="markahAE6EC" id="markahAE6EC" /></td>            
                                      </tr>
                  
                                      
                  
                                      <tr >
                                        <td colspan="3"> TOTAL ELECTIVE POINT</td>
                                        <td>27</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                      </tr>

                                      <tr>
                                        <td>IN</td>
                                        <td colspan="6" align="left">INNOVATION</td>
                                       
                                        
                                        
                                        
                                      </tr>
                    
                                      <tr>
                                        <td colspan="1" rowspan="2">IN 1</td>
                                        <td colspan="2">ANY RELATED INNOVATION</td>
                                        {{-- <td></td> --}}
                                        <td>5</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td></td>
                                        
                                        
                                      </tr>
                    
                                      <tr>
                                        <td>Come up with an idea for a design or construction best practice for road that is not currently included in Manual pH JKR and is more sustainable than standard or conventional practices</td>
                                        <td rowspan="1">ANY</td>
                                        <td>5</td>
                                        <td><input onblur="findTargetPointIN()" type="number" min="0" max="2" class="targetPointIN"></td>
                                        {{-- <td><input onblur="findAssessmentPointIN()" type="number" min="0" max="2" class="assessmentPointIN"></td> --}}
                                        <td><input onblur="commentIN()" type="text" min="0" max="2" class="road" name="" id=""></td>
                                      </tr>
                  
                                      <tr >
                                        <td colspan="3"> TOTAL INNOVATION POINT</td>
                                        <td><input type="text" name="markahIN" id="markahIN" /></td> 
                                        <td></td>           
                                        <td></td>
                                        <td></td>
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
                        </form>
                        </div> 
                </div>
                {{-- <div class="col">
                </div> --}}
            </div>
        </div>
    </div>
</div>

{{-- utk borang PRB jalan --}}
<script>
    function findTargetPointSM1(){
    var arr = document.getElementsByClassName('targetPointSM1');
    // add new var 
    var tot=0;
    for(var i=0;i<arr.length;i++){
        if(parseFloat(arr[i].value))
            tot += parseFloat(arr[i].value);
            // add tot2
    }
    document.getElementById('markahSM1').value = tot;
  } 
    </script> 

<script>
function findTargetPointSM2(){
var arr = document.getElementsByClassName('targetPointSM2');
// add new var 
var tot=0;
for(var i=0;i<arr.length;i++){
  if(parseFloat(arr[i].value))
      tot += parseFloat(arr[i].value);
      // add tot2
}
document.getElementById('markahSM2').value = tot;
} 
</script> 

<script>
function findTargetPointSM3(){
var arr = document.getElementsByClassName('targetPointSM3');
// add new var 
var tot=0;
for(var i=0;i<arr.length;i++){
  if(parseFloat(arr[i].value))
      tot += parseFloat(arr[i].value);
      // add tot2
}
document.getElementById('markahSM3').value = tot;
} 
</script> 

<script>
function findTargetPointSM4(){
var arr = document.getElementsByClassName('targetPointSM4');
// add new var 
var tot=0;
for(var i=0;i<arr.length;i++){
  if(parseFloat(arr[i].value))
      tot += parseFloat(arr[i].value);
      // add tot2
}
document.getElementById('markahSM4').value = tot;
} 
</script>

<script>
    function findTargetPointPT1(){
    var arr = document.getElementsByClassName('targetPointPT1');
    // add new var 
    var tot=0;
    for(var i=0;i<arr.length;i++){
        if(parseFloat(arr[i].value))
            tot += parseFloat(arr[i].value);
            // add tot2
    }
    document.getElementById('markahPT1').value = tot;
  } 
    </script> 

  <script>
    function findTargetPointPT3(){
    var arr = document.getElementsByClassName('targetPointPT3');
    // add new var 
    var tot=0;
    for(var i=0;i<arr.length;i++){
        if(parseFloat(arr[i].value))
            tot += parseFloat(arr[i].value);
            // add tot2
    }
    document.getElementById('markahPT3').value = tot;
  } 
    </script> 

  <script>
    function findTargetPointPT4(){
    var arr = document.getElementsByClassName('targetPointPT4');
    // add new var 
    var tot=0;
    for(var i=0;i<arr.length;i++){
        if(parseFloat(arr[i].value))
            tot += parseFloat(arr[i].value);
            // add tot2
    }
    document.getElementById('markahPT4').value = tot;
  } 
    </script> 

<script>
    function findTargetPointEW1(){
    var arr = document.getElementsByClassName('targetPointEW1');
    // add new var 
    var tot=0;
    for(var i=0;i<arr.length;i++){
        if(parseFloat(arr[i].value))
            tot += parseFloat(arr[i].value);
            // add tot2
    }
    document.getElementById('markahEW1').value = tot;
  } 
    </script> 

<script>
function findTargetPointEW2(){
var arr = document.getElementsByClassName('targetPointEW2');
// add new var 
var tot=0;
for(var i=0;i<arr.length;i++){
    if(parseFloat(arr[i].value))
        tot += parseFloat(arr[i].value);
        // add tot2
}
document.getElementById('markahEW2').value = tot;
} 
</script> 

<script>
function findTargetPointAE1(){
var arr = document.getElementsByClassName('targetPointAE1');
// add new var 
var tot=0;
for(var i=0;i<arr.length;i++){
    if(parseFloat(arr[i].value))
        tot += parseFloat(arr[i].value);
        // add tot2
}
document.getElementById('markahAE1').value = tot;
} 
</script> 

<script>
function findTargetPointCA1(){
var arr = document.getElementsByClassName('targetPointCA1');
// add new var 
var tot=0;
for(var i=0;i<arr.length;i++){
    if(parseFloat(arr[i].value))
        tot += parseFloat(arr[i].value);
        // add tot2
}
document.getElementById('markahCA1').value = tot;
} 
</script> 

<script>
function findTargetPointCA2(){
var arr = document.getElementsByClassName('targetPointCA2');
// add new var 
var tot=0;
for(var i=0;i<arr.length;i++){
  if(parseFloat(arr[i].value))
      tot += parseFloat(arr[i].value);
      // add tot2
}
document.getElementById('markahCA2').value = tot;
} 
</script> 

<script>
function findTargetPointCA3(){
var arr = document.getElementsByClassName('targetPointCA3');
// add new var 
var tot=0;
for(var i=0;i<arr.length;i++){
  if(parseFloat(arr[i].value))
      tot += parseFloat(arr[i].value);
      // add tot2
}
document.getElementById('markahCA3').value = tot;
} 
</script> 

<script>
function findTargetPointCA4(){
var arr = document.getElementsByClassName('targetPointCA4');
// add new var 
var tot=0;
for(var i=0;i<arr.length;i++){
  if(parseFloat(arr[i].value))
      tot += parseFloat(arr[i].value);
      // add tot2
}
document.getElementById('markahCA4').value = tot;
} 
</script>

<script>
function findTargetPointCA5(){
var arr = document.getElementsByClassName('targetPointCA5');
// add new var 
var tot=0;
for(var i=0;i<arr.length;i++){
  if(parseFloat(arr[i].value))
      tot += parseFloat(arr[i].value);
      // add tot2
}
document.getElementById('markahCA5').value = tot;
} 
</script>

<script>
function findTargetPointCA6(){
var arr = document.getElementsByClassName('targetPointCA6');
// add new var 
var tot=0;
for(var i=0;i<arr.length;i++){
  if(parseFloat(arr[i].value))
      tot += parseFloat(arr[i].value);
      // add tot2
}
document.getElementById('markahCA6').value = tot;
} 
</script>

<script>
function findTargetPointCA7(){
var arr = document.getElementsByClassName('targetPointCA7');
// add new var 
var tot=0;
for(var i=0;i<arr.length;i++){
  if(parseFloat(arr[i].value))
      tot += parseFloat(arr[i].value);
      // add tot2
}
document.getElementById('markahCA7').value = tot;
} 
</script>

<script>
    function findTargetPointMR1(){
    var arr = document.getElementsByClassName('targetPointMR1');
    // add new var 
    var tot=0;
    for(var i=0;i<arr.length;i++){
        if(parseFloat(arr[i].value))
            tot += parseFloat(arr[i].value);
            // add tot4
    }
    document.getElementById('markahMR1').value = tot;
  } 
    </script> 

<script>
function findTargetPointMR2(){
var arr = document.getElementsByClassName('targetPointMR2');
// add new var 
var tot=0;
for(var i=0;i<arr.length;i++){
  if(parseFloat(arr[i].value))
      tot += parseFloat(arr[i].value);
      // add tot4
}
document.getElementById('markahMR2').value = tot;
} 
</script>

<script>
function findTargetPointMR3(){
var arr = document.getElementsByClassName('targetPointMR3');
// add new var 
var tot=0;
for(var i=0;i<arr.length;i++){
  if(parseFloat(arr[i].value))
      tot += parseFloat(arr[i].value);
      // add tot4
}
document.getElementById('markahMR3').value = tot;
} 
</script>

<script>
function findTargetPointMR4(){
var arr = document.getElementsByClassName('targetPointMR4');
// add new var 
var tot=0;
for(var i=0;i<arr.length;i++){
  if(parseFloat(arr[i].value))
      tot += parseFloat(arr[i].value);
      // add tot4
}
document.getElementById('markahMR4').value = tot;
} 
</script>

<script>
  function findTargetPointSM5EC(){
  var arr = document.getElementsByClassName('targetPointSM5EC');
  // add new var 
  var tot=0;
  for(var i=0;i<arr.length;i++){
      if(parseFloat(arr[i].value))
          tot += parseFloat(arr[i].value);
          // add tot4
  }
  document.getElementById('markahSM5EC').value = tot;
} 
  </script> 

<script>
function findTargetPointSM6EC(){
var arr = document.getElementsByClassName('targetPointSM6EC');
// add new var 
var tot=0;
for(var i=0;i<arr.length;i++){
  if(parseFloat(arr[i].value))
      tot += parseFloat(arr[i].value);
      // add tot4
}
document.getElementById('markahSM6EC').value = tot;
} 
</script> 

<script>
function findTargetPointEW3EC(){
var arr = document.getElementsByClassName('targetPointEW3EC');
// add new var 
var tot=0;
for(var i=0;i<arr.length;i++){
  if(parseFloat(arr[i].value))
      tot += parseFloat(arr[i].value);
      // add tot4
}
document.getElementById('markahEW3EC').value = tot;
} 
</script> 

<script>
function findTargetPointAE2EC(){
var arr = document.getElementsByClassName('targetPointAE2EC');
// add new var 
var tot=0;
for(var i=0;i<arr.length;i++){
  if(parseFloat(arr[i].value))
      tot += parseFloat(arr[i].value);
      // add tot4
}
document.getElementById('markahAE2EC').value = tot;
} 
</script> 

<script>
function findTargetPointAE3EC(){
var arr = document.getElementsByClassName('targetPointAE3EC');
// add new var 
var tot=0;
for(var i=0;i<arr.length;i++){
  if(parseFloat(arr[i].value))
      tot += parseFloat(arr[i].value);
      // add tot4
}
document.getElementById('markahAE3EC').value = tot;
} 
</script> 

<script>
function findTargetPointAE4EC(){
var arr = document.getElementsByClassName('targetPointAE4EC');
// add new var 
var tot=0;
for(var i=0;i<arr.length;i++){
  if(parseFloat(arr[i].value))
      tot += parseFloat(arr[i].value);
      // add tot4
}
document.getElementById('markahAE4EC').value = tot;
} 
</script> 

<script>
function findTargetPointAE5EC(){
var arr = document.getElementsByClassName('targetPointAE5EC');
// add new var 
var tot=0;
for(var i=0;i<arr.length;i++){
  if(parseFloat(arr[i].value))
      tot += parseFloat(arr[i].value);
      // add tot4
}
document.getElementById('markahAE5EC').value = tot;
} 
</script> 

<script>
function findTargetPointAE6EC(){
var arr = document.getElementsByClassName('targetPointAE6EC');
// add new var 
var tot=0;
for(var i=0;i<arr.length;i++){
  if(parseFloat(arr[i].value))
      tot += parseFloat(arr[i].value);
      // add tot4
}
document.getElementById('markahAE6EC').value = tot;
} 
</script> 

<script>
    function findTargetPointIN(){
    var arr = document.getElementsByClassName('targetPointIN');
    // add new var 
    var tot=0;
    for(var i=0;i<arr.length;i++){
        if(parseFloat(arr[i].value))
            tot += parseFloat(arr[i].value);
            // add tot2
    }
    document.getElementById('markahIN').value = tot;
  } 
    </script> 

<!--Container Fluid-->
        <!--JS-->
        <!--JS BUTTON TOOLTIPS-->
        <script>
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
        var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl)
        })
        </script>


@endsection