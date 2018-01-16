
<div class="col-md-3">
	<div class="panel panel-default">
		<div class="panel-heading">
			{{ auth()->user()->name }}
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


        <a href="/establishment" class="btn btn-success btn-block"><span class="fa fa-building"></span> Register Establishment Here</a>

</div>