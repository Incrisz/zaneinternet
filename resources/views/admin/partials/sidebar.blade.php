      <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="deznav">
            <div class="deznav-scroll">
				<ul class="metismenu" id="menu">
                    <li><a class="has-arrow ai-icon" href="javascript:void(0);" aria-expanded="false">
							<i class="flaticon-381-networking"></i>
							<span class="nav-text">Dashboard</span>
						</a>
                        <ul aria-expanded="false">
							<li><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
							<li><a href="{{ route('admin.users')}}">Users</a></li>
							<li><a href="{{ route('admin.services')}}">Transactions</a></li>
							<li><a href="{{ route('admin.products')}}">Products</a></li>

							<li><a href="#">Services</a></li>

							<li><a href="#">Blog</a></li>
							<li><a href="#">Category</a></li>
						</ul>
                    </li>
				
                </ul>
				<div class="copyright">
					<p>Tixia Ticketing Admin Dashboard <br/>© 2022 All Rights Reserved</p>
					<p class="op5">Made with <span class="heart"></span> by DexignZone</p>
				</div>
			</div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->