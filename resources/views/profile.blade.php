<div class="uer_profile"></div>
<p>::{{ $user->name }}</p>


<div>
<a class="btn" href="{{ route('users.edit', ['id' => \Auth::user()->id]) }}" method="POST">Edit</a>
@method('POST')
@csrf
</div>
/