@extends('layouts.default')

@section('content')

<div class="panel-header bg-primary-gradient">
    <div class="page-inner py-5">
        <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">

        </div>
    </div>
</div>
<div class="page-inner mt--5">
    <div class="row">
        <div class="col-md-12">
            <div class="card full-height">
                <div class="card-header">
                    <div class="card-head-row">
                        <div class="card-title">Data user</div>
                        <a href="{{ route('user.create') }}" class="btn btn-primary ml-auto">
                            <i class="fas fa-plus"></i> Tambah user
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    @if (Session::has('success'))
                    <div class="alert alert-primary">
                        {{ Session('success') }}
                    </div>
                    @endif
                    <div class="table-responsive">
                        <table id="example1" class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Nomor</th>
                                    <th>ID</th>
                                    <th>Nama</th>
                                    <th>email</th>
                                    <th>password</th>
                                    <th>level</th>
                                    <th>action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($pengguna as $key => $row)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $row -> id }}</td>
                                    <td>{{ $row -> name }}</td>
                                    <td>{{ $row -> email }}</td>
                                    <td>{{ $row -> password }}</td>
                                    <td>{{ $row -> level }}</td>
                                    <td>
                                        <form action="{{ route('user.destroy', $row->id) }}" method="POST">
                                            @csrf
                                            @method('delete')
                                            <button class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus pengguna ini?')">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="8" class="text-center">Data Masih Kosong</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection