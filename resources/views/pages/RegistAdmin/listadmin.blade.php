@extends('layouts/master')

@section('listadmin')
<div class="" >
  <div class="row">
      <div class="col-12 d-flex no-block align-items-center">
          <h4 class="page-title">List Admin</h4>
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
    <a class="btn btn-success" href="{{route('register')}}" role="button">Tambah Data</a>
  </div>
  <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Username</th>
            <th scope="col">Email</th>
            <th scope="col">Level</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($useradmin as $item)
          <tr>
            <th>{{$loop->iteration}}</th>
            <td>{{$item->name}}</td>
            <td>{{$item->username}}</td>
            <td>{{$item->email}}</td>
            <td>{{$item->level}}</td>
            <td>
              <a href="{{url('EditAkun',$item->id)}}">Edit</a> ||
              <a href="{{url('DeleteAkun',$item->id)}}">Delete</a>
            </td>
              

          </tr>
          @endforeach
        </tbody>
  </table>
  <div class="card-footer">
{{$useradmin->links()}}
  </div>
</div>

@endsection