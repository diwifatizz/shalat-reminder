@extends('layouts.default')

@section('content')

<div class="panel-header bg-primary-gradient">
    <div class="page-inner py-5">
        <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
            <!-- Content inside panel-header, if any -->
        </div>
    </div>
</div>

<div class="page-inner mt--5">
    <div class="row">
        <div class="col-md-12">
            <div class="card full-height">
                <div class="card-header">
                    <div class="card-head-row">
                        <div class="card-title">Form user</div>
                        <a href="{{ route('user') }}" class="btn btn-warning ml-auto">Back</a>
                    </div>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('user') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" name="nama" class="form-control" id="nama" placeholder="Masukkan nama pengguna">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" class="form-control" id="email" placeholder="Masukkan alamat email">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" name="password" class="form-control" id="password" placeholder="Masukkan password">
                        </div>
                        <div class="form-group">
                            <label for="level">Level</label>
                            <input type="text" name="level" class="form-control" id="level" placeholder="Masukkan level pengguna">
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary" type="submit">Save</button>
                            <button class="btn btn-danger" type="reset">Reset</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
