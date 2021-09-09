@extends('layouts/master')
@section('content')
<div class="" >
  <div class="row">
      <div class="col-12 d-flex no-block align-items-center">
          <h4 class="page-title">Tabel Pengeluaran</h4>
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
  <div class="card-body">
      <a class="btn btn-success" href="{{route('Form_pengeluaran')}}" role="button">Tambah Data</a>
  </div>
  <table class="table">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Jenis_Kebutuhan</th>
            <th scope="col">Nominal</th>
            <th scope="col">Create_at</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($pengeluaran as $item)
          <tr>
            <th>{{$loop->iteration}}</th>
            <td>{{$item->Jenis_kebutuhan}}</td>
            <td>{{$item->Nominal}}</td>
            <td>{{$item->created_at}}</td>
          </tr>
          @endforeach
         
        </tbody>
  </table>
</div>
@endsection