<li class="media mt-4 mb-4">
  <div class="media-body">
    <h5 class="mt-0 mb-1">{{ $user->name }} <small> / {{ $status->created_at->diffForHumans() }}</small></h5>
    {{ $status->content }}
  </div>
  @can('destroy', $status)
<form method="POST" action="{{ route('statuses.destroy', $status->id) }}">
  {{ csrf_field() }}
  {{ method_field('DELETE') }}
  <button type="submit" class="btn btn-sm btn-danger">删除</button>
</form>
  @endcan
</li>
