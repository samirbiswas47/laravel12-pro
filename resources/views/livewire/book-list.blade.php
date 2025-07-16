<div class="px-4">
    <nav class="text-sm text-gray-400 mb-4" aria-label="Breadcrumb">
        <ol class="list-reset flex">
            <li class="flex items-center">
                <span class="text-white">Dashboard</span>
                <span class="mx-2 text-gray-500">/</span>
            </li>
            <li class="flex items-center">
                <a wire:navigate href="{{route('dashboard')}}" class="text-gray-400 hover:text-white">Book List</a>
                <span class="mx-2 text-gray-500">/</span>
            </li>
            <li class="flex items-center">
                <a wire:navigate href="{{route('user')}}" class="text-gray-400 hover:text-white">Book Create</a>
            </li>
        </ol>
    </nav>
    <div class="flex justify-between my-4">
        <h2 class="text-xl font-bold">Book List </h2>
        <input class="p-1 text-black" type="text" wire:model.live.debounce.500ms="term" placeholder="Search.."/>
    </div>
    <div class="my-4">Search term : {{$term}}</div>
    <ul>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 gap-6 my-4">
            @foreach ($books as $book)
                <div wire:key="{{$book->id}}"  class="flex justify-between bg-[#1e293b] p-4 rounded-xl shadow hover:shadow-lg transition duration-300 relative">
                    <div class="absolute right-2">
                        <button wire:click="delete({{$book->id}})" class="text-sm bg-red-600 text-white px-3 py-1 rounded hover:bg-red-700 transition">
                            Delete
                        </button>
                    </div>
                    <div class="">
                        <h3 class="text-lg font-semibold text-white mb-2">{{ $book->name }}</h3>
                        <p class="text-sm text-gray-300">{{ $book->genre }}</p>
                    </div>
                </div>
            @endforeach
        </div>

        {{$books->links()}}
    </ul>
</div>
