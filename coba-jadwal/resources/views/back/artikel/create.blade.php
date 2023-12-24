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
                        <div class="card-title">Form Artikel</div>
                        <a href="{{ route('artikel.index') }}" class="btn btn-warning ml-auto">Back</a>
                    </div>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('artikel.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="artikel">Judul Artikel</label>
                            <input type="text" name="judul" class="form-control" id="text" placeholder="Masukkan judul artikel">
                        </div>
                        <div class="form-group">
                            <label for="body">Body</label>
                            <textarea name="body" id="editor" class="form-control"> </textarea>
                        </div>
                        <div class="form-group">
                            <label for="kategori">Kategori</label>
                            <select name="kategori_id" class="form-control">
                                @foreach ($kategori as $row)
                                <option value="{{ $row->id }}">{{ $row->nama_kategori }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="input-group">
                            <span class="input-group-btn">
                                <a class="btn btn-light" data-input="gambar_artikel" data-preview="holder" onclick="openFileManager()">
                                    Pilih Gambar
                                </a>
                            </span>
                            <input id="thumbnail" class="form-control" type="text" name="filepath">
                          </div>
                          <img id="holder" style="margin-top:15px;max-height:100px;">
         
                        <div class="form-group">
                            <label for="status">Status</label>
                            <select name="is_active" class="form-control">
                                <option value="1">Publish</option>
                                <option value="0">Draft</option>
                            </select>
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