@extends('layouts/master')

@section('register')
    <div class="" >
    <div class=" row">
        <div class="col-12 d-flex no-block align-items-center">
            <h4 class="page-title">Register Admin</h4>
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
    <form class="form-horizontal m-t-20" action="{{ route('CreateAkun') }}" method="POST">
        {{ csrf_field() }}
        <div class="row p-b-30">
            <div class="col-12">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text bg-success text-white" id="basic-addon1"><em
                                class="ti-user"></em></span>
                    </div>
                    <input type="text" class="form-control form-control-lg" placeholder="Name" aria-label="name" name="name"
                        aria-describedby="basic-addon1" required>
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text bg-success text-white" id="basic-addon1"><em
                                class="ti-user"></em></span>
                    </div>
                    <input type="text" class="form-control form-control-lg" name="username" placeholder="Username"
                        aria-label="Username" aria-describedby="basic-addon1" required>
                </div>
                <!-- email -->
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text bg-danger text-white" id="basic-addon1"><em
                                class="ti-email"></em></span>
                    </div>
                    <input type="text" class="form-control form-control-lg" name="email" placeholder="Email"
                        aria-label="Email" aria-describedby="basic-addon1" required>
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text bg-warning text-white" id="basic-addon2"><em
                                class="ti-pencil"></em></span>
                    </div>
                    <input type="text" class="form-control form-control-lg" name="password" placeholder="Password"
                        aria-label="Password" aria-describedby="basic-addon1" required>
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text bg-info text-white" id="basic-addon2"><em
                                class="ti-pencil"></em></span>
                    </div>
                    <input type="text" class="form-control form-control-lg" name="level" placeholder="Level"
                        aria-label="Level" aria-describedby="basic-addon1" required>
                </div>
            </div>
        </div>
        <div class="row border-top border-secondary">
            <div class="col-12">
                <div class="form-group">
                    <div class="p-t-20">
                        <button class="btn btn-block btn-lg btn-info" type="submit">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
