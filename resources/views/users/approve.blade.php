@if($user->approved_at)
    <span>{{ $user->approved_at }}</span>
@else
    <a href="{{ route('users.approve', $user->id) }}" class="btn btn-primary btn-sm">
        <i class="fa fa-user-check"></i> Approuver
    </a>
@endif
