<div class="col-md-2">
    <div class="panel panel-default">
        <div class="panel-heading">
           <img src="{{ asset(auth()->user()->avatar) }}" alt="" style="border-radius: 50%"  width="30px" height="30px"/>   {{ auth()->user()->name }}
        </div>
        <div class="panel-footer">
            {{ auth()->user()->email }}
        </div>
    </div>
    <ul class="nav nav-pills nav-stacked">
        <li role="presentation" class="active"><a href="/dashboard"><span class="fa fa-home"></span> Dashboard</a></li>
        @role('establishment.admin')
            <li role="presentation"><a href="/product_types"><span class="fa fa-tags"></span> Product Types</a></li>
            <li role="presentation"><a href="/products"><span class="fa fa-tasks"></span> Products</a></li>
            <li role="presentation"><a href="/services"><span class="fa fa-tags"></span> Services</a></li>
            <li role="presentation"><a href="/packages"><span class="fa fa-window-restore"></span> Packages</a></li>
            <li role="presentation"><a href="/ratings"><span class="fa fa-star"></span> Ratings</a></li>
        @endrole
        @role('superadmin')
            <li role="presentation"><a href="/establishment_types"><span class="fa fa-file-text-o"></span> Establishment Types</a></li>
            <li role="presentation"><a href="/establishments"><span class="fa fa-building"></span> Establishments</a></li>
            <li role="presentation"><a href="/customers"><span class="fa fa-group"></span> Customers</a></li>

            <li role="presentation"><a href="/administrators"><span class="fa fa-user"></span> Administrators</a></li>
        @endrole
        @role('customer', 'establishment.admin')
            <li role="presentation"><a href="#"><span class="fa fa-credit-card"></span> Payments</a></li>
            <li role="presentation"><a href="#"><span class="fa fa-envelope"></span> Invoices</a></li>
            <li role="presentation"><a href="/messages"><span class="fa fa-envelope"></span> Messages</a></li>
        @endrole
        <li role="presentation"><a href="/reports"><span class="fa fa-flag"></span> Reports</a></li>
        <li role="presentation">
            <a href="/notifications"><span class="fa fa-globe"></span> Notifications
                @if (count(Auth::user()->unreadNotifications))
                    <span class="label label-danger">{{ count(Auth::user()->unreadNotifications) }}</span>
                @endif
            </a>
        </li>
    </ul>

    @if(!auth()->user()->hasRole('establishment.admin') && !auth()->user()->hasRole('superadmin'))
        <a href="/establishments/create" class="btn btn-success btn-block
            @if($establishment = \App\Establishment::where('user_id', auth()->user()->id)->first())
                disabled
            @endif
            ">
            <span class="fa fa-building"></span> Register Establishment Here
        </a>
    @endif
</div>

