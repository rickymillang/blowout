
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
        <li role="presentation" class="active"><a href="#">Home</a></li>
        <li role="presentation"><a href="/products">Products</a></li>
        <li role="presentation"><a href="/product_types">Product Types</a></li>
        <li role="presentation"><a href="/packages">Packages</a></li>
        <li role="presentation"><a href="/invoices">Invoices</a></li>
        <li role="presentation"><a href="/payments">Payments</a></li>
        <li role="presentation"><a href="#">Messages</a></li>
    </ul>
</div>