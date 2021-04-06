<div class="border border-gray-300 rounded-lg">
    @forelse($tweets as $tweet)
        @include("tweet")   
    @empty
    <p class="p-4">No Tweets Yet!</p>
    @endforelse
    <div class="flex justify-between p-4 mx-auto">{{$tweets->links()}}</div>
</div>