@extends('layouts.default')

@section('content')

<div class="panel-header bg-primary-gradient">
	<div class="page-inner py-5">
		<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
			<div>
				<h2 class="text-white pb-2 fw-bold">Tabel artikel</h2>
				<h5 class="text-white op-7 mb-2">Halaman untuk {{ Auth::user()->level }}</h5>
			</div>
			<div class="ml-md-auto py-2 py-md-0">
			</div>
		</div>
	</div>
</div>
<div class="page-inner mt--5">
    <div class="row">
        <div class="col-md-12">
            <div class="card full-height">
                <div class="card-header">
                    <div class="card-head-row">
                        <div class="card-title">Data Artikel</div>
                        <a href="{{ route ('artikel.create') }}" class="btn btn-primary ml-auto"> <i class="fas fa-plus"></i> Tambah artikel</a>
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
                                    <th>No</th>
                                    <th>Nama Artikel</th>
                                    <th>Slug</th>
                                    <th>Kategori</th>
                                    <th>Author</th>
                                    <th>status</th>
                                    <th>Gambar</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($artikel as $key => $row)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $row->judul }}</td>
                                        <td>{{ $row->slug }}</td>
                                        <td>{{ $row->kategori ? $row->kategori->nama_kategori : 'N/A' }}</td>
                                        <td>{{ $row->users ? $row->users->name : 'not available' }}</td>
                                        <!-- Periksa apakah relasi pengguna ada sebelum mengakses propertinya -->
                                        <td>
                                            @if ($row->is_active == '1')
                                                Active
                                            @else
                                                Draft
                                            @endif
                                        </td>
                                        <td><img src="{{ asset($row->gambar_artikel) }}" alt="" width="150"></td>
                                        <td>
                                            <a href="{{ route('artikel.edit', $row->id) }}" class="btn btn-warning btn-sm">
                                                <i class="fas fa-pen"></i>
                                            </a>
                                            <form action="{{ route('artikel.destroy', $row->id) }}" method="POST" class="d-inline">
                                                @csrf
                                                @method('delete')
                                                <button class="btn btn-danger btn-sm">
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