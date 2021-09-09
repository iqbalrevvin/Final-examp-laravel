
@extends('layouts/master')
@section('content')
<div class="" >
  <div class="row">
      <div class="col-12 d-flex no-block align-items-center">
          <h4 class="page-title">Form Input Pengeluaran</h4>
          <div class="ml-auto text-right">
              <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="/home">Home</a></li>
                      <li class="breadcrumb-item active" aria-current="page">Library</li>
                  </ol>
              </nav>
          </div>
      </div>
  </div>
</div>
<div class="card">
  <form action="{{route('Create_Pengeluaran')}}" method="POST" class="form-horizontal" >
    {{ csrf_field() }}
      <div class="card-body">
          <h4 class="card-title">Form Input Pengeluaran</h4>
          <div class="form-group row">
              <label for="fname" class="col-sm-3 text-right control-label col-form-label">Jenis_Kebutuhan</label>
              <div class="col-sm-9">
                  <input type="text" class="form-control" name="Jenis_kebutuhan" id="" placeholder="Jenis_Kebutuhan">
              </div>
          </div>
          <div class="form-group row">
              <label for="lname" class="col-sm-3 text-right control-label col-form-label">Nominal</label>
              <div class="col-sm-9">
                  <input type="text" class="form-control" name="Nominal" id="" placeholder="Nominal">
              </div>
          </div>
          <div class="form-group row">
              <label for="lname" class="col-sm-3 text-right control-label col-form-label">Date</label>
              <div class="col-sm-9">
                  <input type="date" class="form-control" name="created_at" id="" placeholder="Enter Date">
              </div>
          </div>
      </div>
      
      <div class="border-top">
          <div class="card-body">
              <button type="submit" class="btn btn-primary">Tambah</button>
          </div>
      </div>
  </form>
</div>
@endsection