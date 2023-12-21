@extends('layouts.default') <!-- Extends the default layout -->

@section('content') <!-- Define content section -->

<div class="panel-header bg-primary-gradient">
    <div class="page-inner py-5">
        <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
            <!-- Panel header content -->
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
                        <!-- Link to create new article -->
                    </div>
                </div>
                <div class="card-body">
                    @if (Session::has('success'))
                    <div class="alert alert-primary">
                        {{ Session('success') }}
                    </div>
                    @endif
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Nomor</th>
                                    <th>Nama Artikel</th>
                                    <th>Slug</th>
                                    <th>Kategori</th>
                                    <th>Author</th>
                                    <th>Gambar</th>
                                    <th>status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($artikel as $key => $row)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $row->judul }}</td>
                                    <td>{{ $row->slug }}</td>
                                    <td>{{ $row->kategori->nama_kategori }}</td>
                                    <td>{{ $row->users->name }}</td>
                                    <td> <img src="{{ asset('uploads/'. $row->gambar_artikel) }}" alt="" width="150"></td>
                                    <td>
                                        <form action="{{ route('artikel.update-status', $row->id) }}" method="POST">
                                            @csrf
                                            @method('PUT') <!-- Tambahkan ini -->
                                            <label for="status"></label>
                                            <select style="font-size: 13px; padding: 9px;" id="status" name="status" onchange="updateStatus(this)">
                                                <option value="publish" {{ $row->status === 'publish' ? 'selected' : '' }}>publish</option>
                                                <option value="draft" {{ $row->status === 'draft' ? 'selected' : '' }}>draft</option>
                                            </select>
                                        </form>
                                    </td>
                                    <td>
                                        <a href="{{ route('artikel.edit', $row->id) }}" class="btn btn-warning btn-sm"><i class="fas fa-pen"></i></a>
                                        <!-- Link to edit article -->
                                        <form action="{{ route('artikel.destroy', $row->id) }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('delete')
                                            <button class="btn btn-danger btn-sm ">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                        </form>
                                        <!-- Form to delete article -->
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="8" class="text-center">Data Masih Kosong</td>
                                    <!-- Display message if no data -->
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
@endsection <!-- End of content section -->
<script>
    // Function to handle onchange event for status selection
    function updateStatus(selectElement) {
        selectElement.form.submit(); // Submit the form when status is changed
    }
</script>