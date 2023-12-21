<div class="sidebar sidebar-style-2">			
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <div class="user">
                <div class="avatar-sm float-left mr-2">
                    <img src="{{  asset('back/img/profile.jpg')}}" alt="..." class="avatar-img rounded-circle">
                </div>
                <div class="info">
                    <a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
                        <span>
                            {{ Auth::user()->name }}
                            <span class="user-level">{{ Auth::user()->level }}</span>
                        
                        </span>
                    </a>
                   <div class="clearfix"></div>

                     {{-- <div class="collapse in" id="collapseExample">
                        <ul class="nav">
                            <li>
                                <a href="#profile">
                                    <span class="link-collapse">My Profile</span>
                                </a>
                            </li>
                        </ul>
                    </div> --}}
                </div>
            </div>

            <ul class="nav nav-primary">
                <li class="nav-section">
                    <span class="sidebar-mini-icon">
                        <i class="fa fa-ellipsis-h"></i>
                    </span>
                    <h4 class="text-section">Halaman utama {{ Auth::user()->level }}</h4>
                </li>

                <li class="nav-item">
                    <a href="/dashboard">
                        <i class="fa fa-pause"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-section">
                    <span class="sidebar-mini-icon">
                        <i class="fa fa-ellipsis-h"></i>
                    </span>
                    <h4 class="text-section">Master Data</h4>
                </li>

                
                <li class="nav-item">
                    <a href="{{ route('artikel.index') }}">
                        <i class="fas fa-book"></i>
                        <p>Artikel</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('slide.index') }}">
                        <i class="fas fa-image"></i>
                        <p>Slide Banner</p>
                    </a>
                </li>
    
                <li class="nav-item">
                    <a href="{{ route('iklan.index') }}">
                        <i class="fas fa-link  "></i>
                        <p>Iklan</p>
                    </a>
                </li>
                @if (Auth::user()->level == 'admin')
        
               <li class="nav-item">
                <a href="{{ route('kategori.index') }}">
                    <i class="fas fa-desktop"></i>
                    <p>Kategori</p>
                </a>
               </li>

                <li class="nav-section">
                    <span class="sidebar-mini-icon">
                        <i class="fa fa-ellipsis-h"></i>
                    </span>
                    <h4 class="text-section">Master Jadwal</h4>
                </li>

                
               <li class="nav-item">
                <a href="{{ route('Jadwal.index') }}">
                    <i class="fas fa-archway"></i>
                    <p>Jadwal-shalat</p>
                </a>
               </li> 

               <li class="nav-section">
                <span class="sidebar-mini-icon">
                    <i class="fa fa-ellipsis-h"></i>
                </span>
                <h4 class="text-section">Back</h4>
            </li>
         
               @endif
                <li class="nav-item">
					<a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
						<i class="fas fa-undo"></i>
						<p>{{ __('Logout') }}</p>
					</a>
					<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
						@csrf
					</form>
            	</li>   
            </ul>
        </div>
    </div>
</div>