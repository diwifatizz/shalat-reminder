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
                        <div class="card-title">Edit Artikel {{ $artikel->judul }}</div>
                        <a href="{{ route ('artikel.index') }}" class="btn btn-warning ml-auto">Back</a>
                    </div>
                </div>
                <div class="card-body">
                    <form method="post" action="{{ route('artikel.update',$artikel->id) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="artikel">Judul Artikel</label>
                            <input type="text" name="judul" class="form-control" id="text" value="{{ $artikel->judul }}">
                        </div>
                        <div class="form-group">
                            <label for="body">Body</label>
                            <textarea name="body" id="editor" class="form-control">{{ $artikel->body}}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="kategori">Kategori </label>

                            <select name="kategori_id" class="form-control">
                                @foreach ($kategori as $row)    
                                @if ($row->id == $artikel->kategori_id)
                                <option value={{ $row->id }} selected = 'selected' >{{ $row->nama_kategori }}</option>
                                @else
                                <option value="{{ $row->id }}">
                                    {{ $row->nama_kategori }}</option>
                                @endif
                                
                                
                                @endforeach
                            </select>
                        </div>
                         <div class="form-group">
                            <label for="status">Status </label>
                            <select name="is_active" class="form-control">
                                <option value="1" {{ $artikel->is_active ==  '1' ? 'selected' : '' }}>Publish</option>
                                <option value="0" {{ $artikel->is_active ==  '0' ? 'selected' : '' }}>Draft</option>
                            </select>
                        </div> 

                        <div class="form-group">
                            <label for="gambar_artikel">Gambar Artikel </label>
                            <div class="input-group">
                                <input type="text" name="gambar_artikel" id="gambar_artikel" class="form-control" value="{{ $artikel->gambar_artikel }}" readonly>
                                <span class="input-group-btn">
                                    <a class="btn btn-light" data-input="gambar_artikel" data-preview="holder" onclick="openFileManager()">
                                        Pilih Gambar
                                    </a>
                                </span>
                            </div>
                            <br>
                            <label for="gambar_artikel">Gambar Saat ini </label> <br>
                            <img src="{{ asset('uploads/'. $artikel->gambar_artikel) }}" alt="" width="150">
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary " type="submit">Save</button>
                            <button class="btn btn-danger " type="reset">Reset</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<script src="https://cdn.ckeditor.com/4.22.1/standard/ckeditor.js"></script>

{{-- file manage --}}
<script>
    function openFileManager() {
        window.open('/laravel-filemanager?type=Images', 'FileManager', 'width=900,height=600');
    }

    // Fungsi ini akan dipanggil oleh Laravel File Manager setelah pemilihan file
    function SetFileField(file_path) {
        document.getElementById('gambar_artikel').value = file_path;
    }
</script>

<script>
    var options = {
        filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
        filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
        filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
        filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token=',
    };

    CKEDITOR.replace('editor', options);
</script>

@endsection