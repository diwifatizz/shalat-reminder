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
                        <div class="card-title">Edit Iklan {{ $iklan->judul }}</div>
                        <a href="{{ route ('iklan.index') }}" class="btn btn-warning ml-auto">Back</a>
                    </div>
                </div>
                <div class="card-body">
                    <form method="post" action="{{ route('iklan.update',$iklan->id) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="judul">Judul Iklan</label>
                            <input type="text" name="judul" class="form-control" id="judul" value="{{ $iklan->judul }}">
                        </div>
                        <div class="form-group">
                            <label for="link">Link</label>
                            <input type="text" name="link" class="form-control" id="link" value="{{ $iklan->link }}">
                        </div>
                        <div class="form-group">
                            <label for="status">Status </label>
                            <select name="status" class="form-control">
                                <option value="1" {{ $iklan->status ==  '1' ? 'selected' : '' }}>Publish</option>
                                <option value="0" {{ $iklan->status ==  '0' ? 'selected' : '' }}>Draft</option>
                            </select>
                        </div>

                        <!-- Form create/edit -->
                        <div class="form-group">
                            <label for="gambar">Gambar iklan</label>
                            <div class="input-group">
                                <span class="input-group-btn">
                                    <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-light">
                                        <i class="fa fa-picture-o"></i>Pilih gambar
                                    </a>
                                </span>
                                <input id="thumbnail" class="form-control" type="text" name="gambar_iklan" value="{{ asset($iklan->gambar_iklan) }}">
                            </div>
                        </div>
                        <img id="holder" style="margin-top:15px;max-height:100px;">

                        <!-- Logika untuk menentukan apakah gambar ada atau tidak di database -->
                        @if ($iklan->gambar_iklan)
                        <div class="form-group">
                            <label for="existing-image">Gambar saat ini</label>
                            <img src="{{ asset($iklan->gambar_iklan) }}" alt="Existing Image" style="max-height: 100px;">
                        </div>
                        @endif
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

@endsection

@section('script')

<script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>

<script>
    $('#lfm').filemanager('image', {
        prefix: '/laravel-filemanager'
    });
</script>
    
@endsection