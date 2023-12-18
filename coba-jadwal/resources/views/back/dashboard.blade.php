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
				{{-- <a href="#" class="btn btn-white btn-border btn-round mr-2">Manage</a>
				<a href="#" class="btn btn-secondary btn-round">Add Customer</a> --}}
			</div>
		</div>
	</div>
</div>
<div class="page-inner mt--5">
	<div class="row">
		<div class="col-sm-6 col-md-3">
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
		</div>
		<div class="col-sm-6 col-md-3">
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
		</div>
		<div class="col-sm-6 col-md-3">
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
		</div>
		<div class="col-sm-6 col-md-3">
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
		</div>
	</div>
</div>

<div class="custom-template">
	<div class="title">Settings</div>
	<div class="custom-content">
		<div class="switcher">
			<div class="switch-block">
				<h4>Logo Header</h4>
				<div class="btnSwitch">
					<button type="button" class="changeLogoHeaderColor" data-color="dark"></button>
					<button type="button" class="changeLogoHeaderColor" data-color="blue"></button>
					<button type="button" class="changeLogoHeaderColor" data-color="purple"></button>
					<button type="button" class="changeLogoHeaderColor" data-color="light-blue"></button>
					<button type="button" class="changeLogoHeaderColor" data-color="green"></button>
					<button type="button" class="changeLogoHeaderColor" data-color="orange"></button>
					<button type="button" class="changeLogoHeaderColor" data-color="red"></button>
					<button type="button" class="changeLogoHeaderColor" data-color="white"></button>
					<br>
					<button type="button" class="changeLogoHeaderColor" data-color="dark2"></button>
					<button type="button" class="changeLogoHeaderColor selected" data-color="blue2"></button>
					<button type="button" class="changeLogoHeaderColor" data-color="purple2"></button>
					<button type="button" class="changeLogoHeaderColor" data-color="light-blue2"></button>
					<button type="button" class="changeLogoHeaderColor" data-color="green2"></button>
					<button type="button" class="changeLogoHeaderColor" data-color="orange2"></button>
					<button type="button" class="changeLogoHeaderColor" data-color="red2"></button>
				</div>
			</div>
			<div class="switch-block">
				<h4>Navbar Header</h4>
				<div class="btnSwitch">
					<button type="button" class="changeTopBarColor" data-color="dark"></button>
					<button type="button" class="changeTopBarColor" data-color="blue"></button>
					<button type="button" class="changeTopBarColor selected" data-color="purple"></button>
					<button type="button" class="changeTopBarColor" data-color="light-blue"></button>
					<button type="button" class="changeTopBarColor" data-color="green"></button>
					<button type="button" class="changeTopBarColor" data-color="orange"></button>
					<button type="button" class="changeTopBarColor" data-color="red"></button>
					<button type="button" class="changeTopBarColor" data-color="white"></button>
					<br>
					<button type="button" class="changeTopBarColor" data-color="dark2"></button>
					<button type="button" class="changeTopBarColor" data-color="blue2"></button>
					<button type="button" class="changeTopBarColor" data-color="purple2"></button>
					<button type="button" class="changeTopBarColor" data-color="light-blue2"></button>
					<button type="button" class="changeTopBarColor" data-color="green2"></button>
					<button type="button" class="changeTopBarColor" data-color="orange2"></button>
					<button type="button" class="changeTopBarColor" data-color="red2"></button>
				</div>
			</div>
			<div class="switch-block">
				<h4>Sidebar</h4>
				<div class="btnSwitch">
					<button type="button" class="changeSideBarColor" data-color="white"></button>
					<button type="button" class="changeSideBarColor selected" data-color="dark"></button>
					<button type="button" class="changeSideBarColor" data-color="dark2"></button>
				</div>
			</div>
			<div class="switch-block">
				<h4>Background</h4>
				<div class="btnSwitch">
					<button type="button" class="changeBackgroundColor" data-color="bg2"></button>
					<button type="button" class="changeBackgroundColor selected" data-color="bg1"></button>
					<button type="button" class="changeBackgroundColor" data-color="bg3"></button>
					<button type="button" class="changeBackgroundColor" data-color="dark"></button>
				</div>
			</div>
		</div>
	</div>
	<div class="custom-toggle toggled">
		<i class="flaticon-settings"></i>
	</div>
</div>
@endsection