<a href="/home">
    <div>
        <i class="fa fa-envelope fa-fw"></i> {{ $notification->data['message'] }}: <strong>{{ $notification->data['name'] }}
        <span class="pull-right text-muted small">{{ $notification->created_at->diffForHumans() }}</span>
    </div>
</a>