<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header">
                <div class="dropdown profile-element"> <span>
                    <img alt="image" class="img-circle" style="max-width:64px;" src="{{ asset(auth()->user()->avatar) }}" />
                </span>
                <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                    <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">{{ auth()->user()->name }}</strong>
                    </span> <span class="text-muted text-xs block">{{ auth()->user()->email }} <b class="caret"></b></span> </span> </a>
                    <ul class="dropdown-menu animated fadeInRight m-t-xs">
                        <li><a href="profile.html">Profile</a></li>
                        <li>
                            <a href="/change_password"> Change Password</a>
                        </li>
                        @role('establishment.admin')
                            <li>
                                <a href="/establishment/edit">My Establishment</a>
                            </li>
                        @endrole
                        <li class="divider"></li>
                        <li>
                            <a href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                Logout
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    </ul>
                </div>
                <div class="logo-element">
                    BO
                </div>
            </li>
            <li {{ url()->current() == url('home') ? 'class=active' : '' }}>
                <a href="/home">
                    <i class="fa fa-home"></i>
                    <span class="nav-label">Home</span>
                </a>
            </li>

            @role('establishment.admin')
                <li {{ url()->current() == url('product_types') || url()->current() == url('product_types/create') ? 'class=active' : '' }}>
                    <a href="/product_types">
                        <i class="fa fa-tags"></i>

                        <span class="nav-label">Product Types</span>
                    </a>
                </li>
                <li {{ url()->current() == url('products') || url()->current() == url('products/create') ? 'class=active' : '' }}>
                    <a href="/products">
                        <i class="fa fa-tasks"></i>

                        <span class="nav-label">Products</span>
                    </a>
                </li>
                <li {{ url()->current() == url('services') ? 'class=active' : '' }}>
                    <a href="/services">
                        <i class="fa fa-tags"></i>

                        <span class="nav-label">Services</span>
                    </a>
                </li>
                <li {{ url()->current() == url('packages') ? 'class=active' : '' }}>
                    <a href="/packages">
                        <i class="fa fa-package"></i>

                        <span class="nav-label">Packages</span>
                    </a>
                </li>
                <li {{ url()->current() == url('ratings') ? 'class=active' : '' }}>
                    <a href="/ratings">
                        <i class="fa fa-star"></i>

                        <span class="nav-label">Ratings</span>
                    </a>
                </li>
            @endrole

            @role('superadmin')
                <li {{ url()->current() == url('establishment_types') ? 'class=active' : '' }}>
                    <a href="/establishment_types">
                        <i class="fa fa-file-text-o"></i>

                        <span class="nav-label">Establishment Types</span>
                    </a>
                </li>
                <li {{ url()->current() == url('establishments') ? 'class=active' : '' }}>
                    <a href="/establishments">
                        <i class="fa fa-building"></i>

                        <span class="nav-label">Establishments</span>
                    </a>
                </li>
                <li {{ url()->current() == url('customers') ? 'class=active' : '' }}>
                    <a href="/customers">
                        <i class="fa fa-group"></i>

                        <span class="nav-label">Customers</span>
                    </a>
                </li>
                <li {{ url()->current() == url('administrators') ? 'class=active' : '' }}>
                    <a href="/administrators">
                        <i class="fa fa-user"></i>

                        <span class="nav-label">Administrators</span>
                    </a>
                </li>
            @endrole

            @role('customer', 'establishment.admin')
                <li {{ url()->current() == url('payments') ? 'class=active' : '' }}>
                    <a href="/payments">
                        <i class="fa fa-credit-card"></i>

                        <span class="nav-label">Payments</span>
                    </a>
                </li>
                <li {{ url()->current() == url('invoices') ? 'class=active' : '' }}>
                    <a href="/invoices">
                        <i class="fa fa-envelope"></i>
                        <span class="nav-label">Invoices</span>
                    </a>
                </li>
                <li {{ url()->current() == url('messages') ? 'class=active' : '' }}>
                    <a href="/messages">
                        <i class="fa fa-tasks"></i>
                        <span class="nav-label">Messages</span>
                    </a>
                </li>
            @endrole

            <li {{ url()->current() == url('reports') ? 'class=active' : '' }}>
                <a href="/reports">
                    <i class="fa fa-flag"></i>

                    <span class="nav-label">Reports</span>
                </a>
            </li>
            <li {{ url()->current() == url('notifications') ? 'class=active' : '' }}>
                <a href="/notifications"><i class="fa fa-globe"></i>
                    <span class="nav-label">Notifications</span>
                    @if (count(Auth::user()->unreadNotifications))
                        <span class="label label-danger pull-right">{{ count(Auth::user()->unreadNotifications) }}</span>
                    @endif

                </a>
            </li>

            @if(!auth()->user()->hasRole('establishment.admin') && !auth()->user()->hasRole('superadmin'))
                @if($establishment = \App\Establishment::where('user_id', auth()->user()->id)->first())
                    <li class="special_link">
                        <a href="/#" class="disabled"><i class="fa fa-plus"></i> <span class="nav-label">Establishment Pending</span></a>
                    </li>
                @else
                    <li class="special_link">
                        <a href="/establishments/create"><i class="fa fa-plus"></i> <span class="nav-label">Register Establishment</span></a>
                    </li>
                @endif
            @endif

        </ul>

    </div>
</nav>