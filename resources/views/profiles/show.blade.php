<x-app>
<div>

    <header class="mb-6 relative">
        <div class="relative">
            <img class="mb-2 rounded-xl" src="/images/default-profile-banner.jpg" alt="profile-banner">
            <img class="rounded-full mr-2 absolute bottom-0 transform -translate-x-1/2 translate-y-1/2" style="left: 50%" width="150px" src="{{$user->avatar}}" alt="">
        </div>

        <div class="flex justify-between">
            <div style="max-width: 270px;">
                <h2 class="font-bold text-2xl mb-1">{{$user->name}}</h2>
                <p class="text-sm">Joined {{$user->created_at->diffForHumans()}}</p>
            </div>
            <div class="flex ">
                @can('edit', $user)<div><a href="{{$user->path('edit')}}" class="rounded-full border border-gray-300 py-2 px-2 text-xs text-black">Edit Profile</a></div>@endcan
                <x-follow-button :user="$user"/>
            </div>
            
        </div>
        <p class="text-sm mt-6">
                Lorem Ipsum user description here.
        </p>
    </header>
    @include('timeline', [
        'tweets' => $tweets
    ])
</div>
</x-app>
