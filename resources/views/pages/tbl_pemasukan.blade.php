@extends('layouts/master')
@section('content')
    <div class="" >
  <div class=" row">
        <div class="col-12 d-flex no-block align-items-center">
            <h4 class="page-title">Tabel Pemasukan</h4>
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
            <h5 class="card-title m-b-0">Static Table</h5>
        </div>
        <div class="col-sm-12 col-md-6">
            <form action="{{ route('search') }}" method="post">
                {{ csrf_field() }}
                <div id="zero_config_filter" class="dataTables_filter">
                    <label>Start Date:<input type="date" name="start_date" value="{{ 'start_date' }}"
                            class="form-control form-control-sm" placeholder="search" aria-controls="zero_config"></label>
                    <label>End Date:<input type="date" name="end_date" value="{{ 'end_date' }}"
                            class="form-control form-control-sm" placeholder="search" aria-controls="zero_config"></label>
                    <button type="submit" class="btn btn-primary">search</button>
                </div>
            </form>
            <table class="table" aria-describedby="mydesc">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Pemasukan</th>
                        <th scope="col">Create_at</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pemasukan as $item)
                        <tr>
                            <th id="iteration">{{ $loop->iteration }}</th>
                            <td>Rp.{{ $item->pemasukan }}</td>
                            <td>{{ $item->created_at }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="card-footer">
                {{ $pemasukan->links() }}
            </div>
            {{-- <style> 
      .card-footer{
        width: 20%;
      }
      </style> --}}
        </div>

    @endsection
