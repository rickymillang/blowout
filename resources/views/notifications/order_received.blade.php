<a href="/orders">
    <div>
        <i class="fa fa-envelope fa-fw"></i> {{ $notification->data['message'] }}: <strong>{{ $notification->data['order'] }}
        <span class="pull-right text-muted small">{{ $notification->created_at->diffForHumans() }}</span>
    </div>
</a>