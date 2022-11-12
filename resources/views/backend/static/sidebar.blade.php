<header class="header-section body-collapse">
        <div class="overlay">
            <div class="container-fruid">
                <div class="row d-flex header-area">
                    <div class="navbar-area d-flex align-items-center justify-content-between">
                        <div class="sidebar-icon">
                            <img src="{{ URL::asset('public/backend/images/icon/menu.png')}}" alt="icon">
                        </div>
                        <form action="#" class="flex-fill">
                            <div class="form-group d-flex align-items-center">
                                <img src="{{ URL::asset('public/backend/images/icon/search.png')}}" alt="icon">
                                <input type="text" placeholder="Type to search...">
                            </div>
                        </form>
                        <div class="dashboard-nav">
                         
                          
                            <div class="single-item user-area">
                                <div class="profile-area d-flex align-items-center">
                                    <span class="user-profile">
                                        <img src="{{ URL::asset('public/backend/images/avatar.png')}}" alt="User">
                                    </span>
                                    <i class="fa-solid fa-sort-down"></i>
                                </div>
                                <div class="main-area user-content">
                                    <div class="head-area d-flex align-items-center">
                                        <div class="profile-img">
                                            <img src="{{ URL::asset('public/backend/images/user-profile.png')}}" alt="User">
                                        </div>
                                        <div class="profile-head">
                                            <a href="settings.html">
                                                <h5>{{Auth::user()->name}}</h5>
                                            </a>
                                            <p class="wallet-id">Wallet ID: 6264849965</p>
                                        </div>
                                    </div>
                                    <ul>
                                        <li class="border-area">
                                            <a href="javascript:void(0)"><i class="fas fa-cog"></i>Settings</a>
                                        </li>
                                        <li>
                                            <a href="{{route('login')}}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="fas fa-sign-out"></i>Logout</a>
                                                         <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sidebar-wrapper">
                        <div class="close-btn">
                            <i class="fa-solid fa-xmark"></i>
                        </div>
                        <div class="sidebar-logo">
                            <a href="{{route('home')}}"><img src="{{ URL::asset('public/backend/images/logo.png')}}" alt="logo"></a>
                        </div>
                        <ul>
                            <li class="active">
                                <a href="{{route('home')}}">
                                    <img src="{{ URL::asset('public/backend/images/icon/dashboard.png')}}" alt="Dashboard"> <span>Dashboard</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="{{ URL::asset('public/backend/images/icon/transactions.png')}}" alt="Transactions"> <span>Transactions</span>
                                </a>
                            </li>
                          
                        
                         
                            <li>
                                <a href="{{route('wallet')}}">
                                    <img src="{{ URL::asset('public/backend/images/icon/deposit.png')}}" alt="Deposit"> <span>Deposit Money</span>
                                </a>
                            </li>
                          
                        </ul>
                        <ul class="bottom-item">
                            <li>
                                <a href="#">
                                    <img src="{{ URL::asset('public/backend/images/icon/account.png')}}" alt="Account"> <span>Account</span>
                                </a>
                            </li>
                           
                            <li>
                                <a href="{{route('logout')}}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    <img src="{{ URL::asset('public/backend/images/icon/quit.png')}}" alt="Quit"> <span>Quit</span>
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                            </li>
                        </ul>
                     
                    </div>
                </div>
            </div>
        </div>
    </header>