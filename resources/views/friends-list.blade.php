<h3 class="font-bold text-lg">Following</h3>
<ul>
@forelse (auth()->user()->follows as $user)
    <li class="mb-4">
        <a href="{{route('profile', $user)}}" class="flex items-center text-sm">
        <img class="rounded-full mr-2" width="40px" src="https://i.pravatar.cc/50?u={{$user->email}}" alt="">
            {{$user->name}}
        </a>
    </li>

@empty
    <li>No Friends Yet! Follow someone.</li>
@endforelse
</ul>