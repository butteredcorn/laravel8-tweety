<!-- single tweet -->
    <div class="flex p-4 {{$loop->last ? '' : 'border-b border-b-gray-400'}}">
        <div class="mr-2 flex-shrink-0">
            <a href="{{route('profile', $tweet->user)}}">
                <img class="rounded-full mr-2" width="50px" src="{{$tweet->user->avatar}}" alt="">
            </a>
        </div>
        <div>
            <h5 class="font-bold mb-5">
                <a href="{{route('profile', $tweet->user)}}" >
                {{$tweet->user->name}}
                </a>
            </h5>
            <p class="text-sm">
                {{$tweet->body}}
            </p>

            <x-like-dislike :tweet="$tweet"></x-like-dislike>
        </div>
    </div>