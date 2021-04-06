<x-app>

<div>
    @foreach ( $users as $user)
    <a href="{{$user->path()}}" class="flex items-center mb-5">
        <img class="rounded-lg" src="{{$user->avatar}}" alt="avatar for {{$user->username}}" width="80" class="mr-4">
        <div>
            <h4 class="font-bold">{{'@' . $user->username}}</h4>
        </div>
    </a>

    @endforeach

    {{$users->links()}}
</div>
</x-app>