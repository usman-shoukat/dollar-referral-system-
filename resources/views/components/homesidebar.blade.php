
		

		<!-- main-sidebar opened -->
		<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
		<aside class="main-sidebar app-sidebar sidebar-scroll">
			<div class="main-sidebar-header">
				
				<a class="desktop-logo icon-logo active"href="index.html"><img src="home/assets/img/brand/favicon.png" class="logo-icon"></a>


				<a class="active" style="margin-left: 25px;" href="{{route('dashboard')}}"><img height="60px" src="home/assets/img/brand/logo-white.png" alt="logo"></a>



				<a class="logo-icon mobile-logo icon-dark active" href="index.html"><img src="home/assets/img/brand/favicon-white.png" class="logo-icon dark-theme" alt="logo"></a>
			</div><!-- /logo -->
			<div class="main-sidebar-loggedin">
				<div class="app-sidebar__user">
					<div class="dropdown user-pro-body text-center">
						
						<div class="user-info">
							<h6 class=" mb-0 "> {{ Auth::user()->name }}</h6>
							
						</div>
					</div>
				</div>
			</div><!-- /user -->
			<div class="sidebar-navs">
				<ul class="nav  nav-pills-circle">
					<li class="nav-item" data-toggle="tooltip" data-placement="top" title="" data-original-title="Settings" aria-describedby="tooltip365540">
						<a class="nav-link text-center m-2">
							<i class="fe fe-settings"></i>
						</a>
					</li>
					<li class="nav-item" data-toggle="tooltip" data-placement="top" title="" data-original-title="Chat">
						<a class="nav-link text-center m-2">
							<i class="fe fe-mail"></i>
						</a>
					</li>
					<li class="nav-item" data-toggle="tooltip" data-placement="top" title="" data-original-title="Followers">
						<a class="nav-link text-center m-2">
							<i class="fe fe-user"></i>
						</a>
					</li>
					
					<li class="nav-item" data-toggle="tooltip" data-placement="top" title="" data-original-title="Logout">
						 <a class="nav-link text-center m-2" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <i class="fe fe-power"></i>
                                    </a>
                                     <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
					</li>
				</ul>
			</div>
			<div class="main-sidebar-body">
				<ul class="side-menu ">
					<li class="slide">
						<a class="side-menu__item" href="{{route('dashboard')}}"><i class="side-menu__icon fe fe-airplay"></i><span class="side-menu__label">Dashboard</span></a>
					</li>
					<li class="slide">
						<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fe fe-package "></i><span class="side-menu__label">Referrals</span><i class="angle fe fe-chevron-down"></i></a>
						<ul class="slide-menu">
							@if(auth()->user()->oceanpack == 0)
							<li><a class="slide-item" href="#">Buy Plan Firstly</a></li>
							@else
							<li><a class="slide-item" href="{{asset('referral')}}">Ocean Referral</a></li>
							@endif

						    @if(auth()->user()->skypack == 0)
							<li><a class="slide-item" href="#">Buy Plan Firstly</a></li>
	                        @else
							<li><a class="slide-item" href="{{asset('sreferral')}}">Sky Referral</a></li>
							@endif
                           
                            @if(auth()->user()->heavenpack == 0)
                            <li><a class="slide-item" href="#">Buy Plan Firstly</a></li>
                            @else
                            <li><a class="slide-item" href="{{asset('hreferral')}}">Heaven Referral</a></li>
                            @endif

						</ul>
					</li>
				
						<li class="slide">
						<a class="side-menu__item" href="{{asset('deposit')}}"><i class="side-menu__icon fe fe-award"></i><span class="side-menu__label">How To Deposit</span></a>
					</li>
					
					<li class="slide">
						<a class="side-menu__item"  href="{{asset('plans')}}"><i class="side-menu__icon fe fe-layout"></i><span class="side-menu__label">Plans</span></a>
					
					</li>
					<li class="slide">
						<a class="side-menu__item" href="{{asset('wallet')}}"><i class="side-menu__icon fe fe-database"></i><span class="side-menu__label">Wallet</span></a>
					</li>
				
					<li class="slide">
						<a class="side-menu__item"  href="{{asset('withdraw')}}"><i class="side-menu__icon fe fe-box"></i><span class="side-menu__label">Withdraw</span></a>
						
					</li>
					<li class="slide">
						<a class="side-menu__item"  href="{{asset('withdrawtransaction')}}"><i class="side-menu__icon fe fe-box"></i><span class="side-menu__label">Withdraw Transactions</span></a>
						
					</li>
					
					<li class="slide">
						<a href="https://wa.link/gj32hb" class="material-icons floating-btn"><i class="fa fa-whatsapp" aria-hidden="true"></i></a>

						
					</li>
				
					
					
				</ul>
			</div>
		</aside>
		<!-- /main-sidebar -->