@if ($message = session('message'))
    <div class="alert alert-success alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
        </button>
        <strong>Success!</strong> {{ $message }}
    </div>
@elseif ($error_message = session('error_message'))
    <div class="alert alert-danger alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
        </button>
        <strong>Error!</strong> {{ $error_message }}
    </div>
@elseif ($errors->any())
    <div class="alert alert-danger alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
        </button>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@elseif (auth()->user())
    @if (auth()->user()->hasRole('establishment.admin') && auth()->user()->establishment->status == 0)
    <div class="alert alert-danger alert-dismissible" role="alert">
        <strong>Sorry!</strong> Your account is not yet active
    </div>
    @endif
@endif