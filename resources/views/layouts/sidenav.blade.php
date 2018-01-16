
<div class="col-md-3">
	<div class="panel panel-default">
		<div class="panel-heading">
		   <img src="{{ asset(auth()->user()->avatar) }}" alt="" style="border-radius: 50%"  width="30px" height="30px"/>	{{ auth()->user()->name }}
		</div>
		<div class="panel-footer">
			{{ auth()->user()->email }}
		</div>
	</div>
    <ul class="nav nav-pills nav-stacked">
        <li role="presentation" class="active"><a href="#"><span class="fa fa-home"></span> Home</a></li>
        <li role="presentation"><a href="/products"><span class="fa fa-tasks"></span> Products</a></li>
        <li role="presentation"><a href="/product_types"><span class="fa fa-tags"></span> Product Types</a></li>
        <li role="presentation"><a href="/packages"><span class="fa fa-window-restore"></span> Packages</a></li>
        <li role="presentation"><a href="/invoices"><span class="fa fa-file-text-o"></span> Invoices</a></li>
        <li role="presentation"><a href="/payments"><span class="fa fa-credit-card"></span> Payments</a></li>
        <li role="presentation"><a href="#"><span class="fa fa-envelope"></span> Messages</a></li>
    </ul>

    @if(!auth()->user()->hasRole('establishment.admin'))

        <a href="/establishments" class="btn btn-success btn-block"><span class="fa fa-building"></span> Register Establishment Here</a>
    @endif
</div>