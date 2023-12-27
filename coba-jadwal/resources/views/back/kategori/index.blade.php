@extends('layouts.default')

@section('content')
    
<div class="panel-header bg-primary-gradient">
	<div class="page-inner py-5">
		<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
			<div>
				<h2 class="text-white pb-2 fw-bold">Tabel Kategori</h2>
				<h5 class="text-white op-7 mb-2"></h5>
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
						<div class="card-title">DataKategori</div>
                        <a href="{{ route('kategori.create') }}" class="btn btn-primary sm ml-auto"><i class="fas fa-plus"></i> Tambah Kategori</a>
					</div>
				</div>
				<div class="card-body">

                    @if(Session::has('success'))
                    <div class="alert alert-primary">
                        {{ Session('success') }}
                    </div>

                    @endif

					<div class="table-responsive">
					<table id="example1" class="table table-bordered">
                        <thead>
                            <tr>
                                <th> id</th>
                                <th> Nama kategori</th>
                                <th> Slug</th>
                                <th> action</th>
                            </tr>
                        </thead>

                        <tbody>
                            @forelse ($kategori as $row)

                            <tr>
                                <td>{{ $row->id }}</td>
                                <td>{{ $row->nama_kategori }}</td>
                                <td>{{ $row->slug }}</td>
                                <td>
                                    <a href="{{ route('kategori.edit', $row->id) }}" class="btn btn-warning btn-sm" style="margin:auto"><i class="fas fa-pen"></i></a>
                                    
                                    <form action="{{ route('kategori.destroy', $row->id) }}" method="post" class="d-inline" style="margin:auto">
                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-danger btn-sm">
                                            <i class="fas fa-trash"></i>
                                    </form>

                                </td>
                            </tr>
                            @empty

                            <tr>
                                <td>Data masih kosong</td>
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