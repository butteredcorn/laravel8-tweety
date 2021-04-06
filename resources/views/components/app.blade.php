<x-master>
<section class="px-8">
    <main class="container mx-auto">
        <div class="lg:flex lg:justify-between">
            <!-- leftside nav bar -->
            <div class="lg:w-1/6">
                @include("sidebar-links")
            </div>

            <!-- main dashboard -->
            <div class="lg:flex-1 lg:mx-10" style="max-width: 700px;">
                {{$slot}}
            </div>


            <!-- right side friends list -->
            <div class="lg:w-1/6 bg-blue-100 rounded-lg p-4 border border-gray-300">
                @include("friends-list")
            </div>
        </div>
    </main>
</section>
</x-master>