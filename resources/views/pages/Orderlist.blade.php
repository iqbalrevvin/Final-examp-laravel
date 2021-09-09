                   
                   @extends('layouts/master')
                   @section('content')
                   <div class="card">
                      <div class="card-body">
                        <h5 class="card-title">Basic Datatable</h5>
                        <div class="table-responsive">
                          <div id="zero_config_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">
                            <div class="row">
                              <div class="col-sm-12 col-md-6">
                                <div class="dataTables_length" id="zero_config_length"><label>Show <select name="zero_config_length" aria-controls="zero_config" class="form-control form-control-sm">
                                      <option value="10">10</option>
                                      <option value="25">25</option>
                                      <option value="50">50</option>
                                      <option value="100">100</option>
                                    </select> entries</label></div>
                              </div>
                              <div class="col-sm-12 col-md-6">
                                <div id="zero_config_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="zero_config"></label></div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-sm-12">
                                <table id="zero_config" class="table table-striped table-bordered dataTable" role="grid" aria-describedby="zero_config_info">
                                  <thead>
                                    <tr role="row">
                                      <th class="sorting_asc" id="orderlist" tabindex="0" aria-controls="zero_config" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 142.375px;">No</th>
                                      <th class="sorting_asc" id="orderlist" tabindex="0" aria-controls="zero_config" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 142.375px;">Name_Pelanggan</th>
                                      <th class="sorting" id="orderlist" tabindex="0" aria-controls="zero_config" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 232.047px;">Nomor_Pesanan</th>
                                      <th class="sorting" id="orderlist" tabindex="0" aria-controls="zero_config" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 107.109px;">Total_harga</th>
                                      <th class="sorting" id="orderlist" tabindex="0" aria-controls="zero_config" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 107.109px;">Aksi</th>
                                      {{-- <th id="orderlist" class="sorting" tabindex="0" aria-controls="zero_config" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 43.4844px;">Age</th>
                                      <th id="orderlist" class="sorting" tabindex="0" aria-controls="zero_config" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 88.5156px;">Start date</th>
                                      <th id="orderlist" class="sorting" tabindex="0" aria-controls="zero_config" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 82.4688px;">Salary</th> --}}
                                    </tr>
                                  </thead>
                                  <tbody>
                                    @foreach ($orderlist as $item)
                                    <tr role="row" class="odd">
                                      <th id="orderlist">{{$loop->iteration}}</th>
                                      <td class="sorting_1">{{$item->Nama_Pelanggan}}</td>
                                      <td>A.{{$item->Nomor_Pesanan}}</td>
                                      <td>Rp.{{$item->Total_Harga}}</td>
                                      <td>
                                        <a class= "btn btn-success" role="button" href="#" >Detail</a>
                                      </td>
                                      {{-- <td>33</td>
                                      <td>2008/11/28</td>
                                      <td>$162,700</td> --}}
                                    </tr>
                                    @endforeach
                                  </tbody>
                                  <tfoot>
                                    <tr>
                                      <th id="orderlist" rowspan="1" colspan="1">No</th>
                                      <th id="orderlist" rowspan="1" colspan="1">Name_Pelanggan</th>
                                      <th id="orderlist" rowspan="1" colspan="1">Nomor_Pesanan</th>
                                      <th id="orderlist" rowspan="1" colspan="1">Total_harga</th>
                                      <th id="orderlist" rowspan="1" colspan="1">Aksi</th>
                                      {{-- <th id="orderlist" rowspan="1" colspan="1">Age</th>
                                      <th id="orderlist" rowspan="1" colspan="1">Start date</th>
                                      <th id="orderlist" rowspan="1" colspan="1">Salary</th> --}}
                                    </tr>
                                  </tfoot>
                                </table>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-sm-12 col-md-5">
                                {{$orderlist->links()}}
                              </div>
                              <div class="col-sm-12 col-md-7">
                                <div class="dataTables_paginate paging_simple_numbers" id="zero_config_paginate">
                                  <ul class="pagination">
                                   
                                  </ul>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>

                      </div>
                    </div>
                    @endsection