@include('template.partials.head')
@include('template.partials.sidebar')

<div id="page-wrapper" class="gray-bg">
    <div class="row border-bottom">
        @include('template.partials.navbar')
    </div>
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-sm-12">
            <h2>@yield('title') <a href="{{ url()->previous() }}" class="btn btn-primary pull-right"><span class="fa fa-arrow-left"></span> Back</a></h2>

            <ol class="breadcrumb">
                @yield('breadcrumbs')
            </ol>
        </div>

    </div>

    <div class="wrapper wrapper-content">
        <div class="row">
            <div class="col-lg-12">
                @include('template.partials.alerts')
                @yield('content')
            </div>
        </div>
    </div>

    @include('template.partials.footer')
@include('template.partials.foot')
