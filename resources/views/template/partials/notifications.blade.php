<li class="dropdown">
    <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
        <i class="fa fa-bell"></i>
        @if (count(Auth::user()->unreadNotifications))
            <span class="label label-danger">{{ count(Auth::user()->unreadNotifications) }}</span>
        @endif
    </a>
    <ul class="dropdown-menu dropdown-alerts">
        @foreach(Auth::user()->unreadNotifications as $notification)
            @include ('notifications.' . snake_case(class_basename($notification->type)))
        @endforeach

        <li>
            <div class="text-center link-block">
                <a href="/notifications">
                    <strong>See All Notifications</strong>
                    <i class="fa fa-angle-right"></i>
                </a>
            </div>
        </li>
    </ul>
</li>