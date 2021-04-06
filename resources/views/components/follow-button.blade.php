@if (auth()->user()->isNot($user))
<form method="POST" action="/profiles/{{ $user->username }}/follow">
@csrf
    <button type="submit" href="" class="bg-blue-500 rounded-full shadow py-2 px-2 text-xs text-white">
        {{current_user()->following($user) ? 'Unfollow Me' : 'Follow Me'}}
    </button>
</form>
@endif