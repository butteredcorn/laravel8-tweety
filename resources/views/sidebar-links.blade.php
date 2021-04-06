<ul>
    <li><a class="font-bold text-lg mb-4 block" href="{{route('home')}}">Home</a></li>
    <li><a class="font-bold text-lg mb-4 block" href="/explore">Explore</a></li>
    <!-- <li><a class="font-bold text-lg mb-4 block" href="/notifications">Notifications</a></li>
    <li><a class="font-bold text-lg mb-4 block" href="/messages">Messages</a></li>
    <li><a class="font-bold text-lg mb-4 block" href="/bookmarks">Bookmarks</a></li>
    <li><a class="font-bold text-lg mb-4 block" href="/lists">lists</a></li> -->
    <li><a class="font-bold text-lg mb-4 block" href="{{route('profile', auth()->user())}}">Profile</a></li>
    <li>
        <form method="POST" action="/logout">
        @csrf
        <button type="submit" class="font-bold text-lg mb-4 block" href="/more">Logout</button>
        </form>
    </li>
</ul>