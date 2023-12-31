{{-- @extends('layouts.default')

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
						<div class="card-title">Form Iklan</div>
                        <a href="{{ route ('iklan.index') }}" class="btn btn-warning ml-auto">Back</a>
					</div>
				</div>
				<div class="card-body">
                    <form method="POST" action="{{ route('iklan.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="judul">Judul Iklan</label>
                            <input type="text" name="judul" class="form-control" id="judul">
                        </div>
                        <div class="form-group">
                            <label for="link">Link</label>
                            <input type="text" name="link" class="form-control" id="link">
                        </div>
                        <div class="form-group">
                            <label for="status">Status </label>
                            <select name="status" class="form-control" id="status">
                                <option value="1">Publish</option>
                                <option value="0">Draft</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="gambar">Gambar Iklan </label>
                            <input type="file" name="gambar_iklan" class="form-control">
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary " type="submit">Save</button>
                        </div>
                    </form>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection --}}