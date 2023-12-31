@extends('layouts.default')

@section('content')

<div class="panel-header bg-primary-gradient">
	<div class="page-inner py-5">
		<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
			<div>
				<h2 class="text-white pb-2 fw-bold">Dashboard</h2>
				<h5 class="text-white op-7 mb-2">Halaman {{ Auth::user()->level }}</h5>
			</div>
			<div class="ml-md-auto py-2 py-md-0">
			</div>
		</div>
	</div>
</div>
<div class="page-inner mt--5">
	<div class="row">
		<div class="col-sm-6 col-md-3">
			<a href="{{ url('/artikel') }}">
				<div class="card card-stats card-round">
					<div class="card-body">
						<div class="row align-items-center">
							<div class="col-icon">
								<div class="icon-big text-center icon-info bubble-shadow-small">
									<i class="far fa-newspaper"></i>
								</div>
							</div>
							<div class="col col-stats ml-3 ml-sm-0">
								<div class="numbers">
									<p class="card-category">Artikel</p>
									<h4 class="card-title">{{ $artikel }}</h4>
								</div>
							</div>
						</div>
					</div>
				</div>
			</a>
		</div>
		<div class="col-sm-6 col-md-3">
			<a href="{{ url('/kategori') }}">
				<div class="card card-stats card-round">
					<div class="card-body">
						<div class="row align-items-center">
							<div class="col-icon">
								<div class="icon-big text-center icon-success bubble-shadow-small">
									<i class="fas fa-tags"></i>
								</div>
							</div>
							<div class="col col-stats ml-3 ml-sm-0">
								<div class="numbers">
									<p class="card-category">Kategori</p>
									<h4 class="card-title">{{ $kategori }}</h4>
								</div>
							</div>
						</div>
					</div>
				</div>
			</a>
		</div>
		<div class="col-sm-6 col-md-3">
			<a href="{{ url('/slide') }}">
				<div class="card card-stats card-round">
					<div class="card-body">
						<div class="row align-items-center">
							<div class="col-icon">
								<div class="icon-big text-center icon-warning bubble-shadow-small">
									<i class="fas fa-book"></i>
								</div>
							</div>
							<div class="col col-stats ml-3 ml-sm-0">
								<div class="numbers">
									<p class="card-category">slide</p>
									<h4 class="card-title">{{ $slide }}</h4>
								</div>
							</div>
						</div>
					</div>
				</div>
			</a>
		</div>
		@if (Auth::user()->level == 'admin')
		<div class="col-sm-6 col-md-3">
			<a href="{{ url('/iklan') }}">
				<div class="card card-stats card-round">
					<div class="card-body">
						<div class="row align-items-center">
							<div class="col-icon">
								<div class="icon-big text-center icon-info bubble-shadow-small">
									<i class="flaticon-interface-6"></i>
								</div>
							</div>
							<div class="col col-stats ml-3 ml-sm-0">
								<div class="numbers">
									<p class="card-category">iklan</p>
									<h4 class="card-title">{{ $iklan }}</h4>
								</div>
							</div>
						</div>
					</div>
				</div>
			</a>
		</div>
		<div class="col-sm-6 col-md-3">
			<a href="{{ url('/user') }}">
				<div class="card card-stats card-round">
					<div class="card-body ">
						<div class="row align-items-center">
							<div class="col-icon">
								<div class="icon-big text-center icon-primary bubble-shadow-small">
									<i class="fas fa-users"></i>
								</div>
							</div>
							<div class="col col-stats ml-3 ml-sm-0">
								<div class="numbers">
									<p class="card-category">User</p>
									<h4 class="card-title">{{ $imut }}</h4>
								</div>
							</div>
						</div>
					</div>
				</div>
			</a>
		</div>
		@endif
	</div>
</div>
@endsection