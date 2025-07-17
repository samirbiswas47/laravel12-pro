<div class="px-4">
    <nav class="text-sm text-gray-400 mb-4" aria-label="Breadcrumb">
        <ol class="list-reset flex">
            <li class="flex items-center">
                <span class="dark:text-white">Dashboard</span>
                <span class="mx-2 text-gray-500">/</span>
            </li>
            <li class="flex items-center">
                <a wire:navigate href="{{route('booklist')}}" class="text-gray-400 hover:text-black dark:hover:text-white">Book List</a>
                <span class="mx-2 text-gray-500">/</span>
            </li>
            <li class="flex items-center">
                <a wire:navigate href="{{route('bookcreate')}}" class="flex items-center text-blue-700 dark:text-blue-400 font-semibold">Book Create</a>
            </li>
        </ol>
    </nav>
    <div class="flex justify-between my-4">
        <h2 class="text-xl font-bold">Book Create </h2>
    </div>
    <div>

   
        <form wire:submit="save" class="space-y-4">
            <div>
                <label for="name" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">
                    Name
                </label>
                <input 
                    type="text" 
                    placeholder="Enter name..." 
                    wire:model="name"
                    class="w-[50%] px-4 py-2 rounded-lg border border-gray-300 dark:border-gray-600 
                        bg-white dark:bg-gray-800 text-gray-900 dark:text-gray-100 
                        placeholder-gray-400 dark:placeholder-gray-500 
                        focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 
                        transition duration-200 ease-in-out shadow-sm"
                />
                @error('name')
                    <div class="error">{{$message}}</div>
                @enderror
            </div>
            <div>
                <label for="name" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">
                    Genre
                </label>
                <input 
                    type="text" 
                    placeholder="Enter name..." 
                    wire:model="genre"
                    class="w-[50%] px-4 py-2 rounded-lg border border-gray-300 dark:border-gray-600 
                        bg-white dark:bg-gray-800 text-gray-900 dark:text-gray-100 
                        placeholder-gray-400 dark:placeholder-gray-500 
                        focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 
                        transition duration-200 ease-in-out shadow-sm"
                />
                @error('genre')
                    <div class="error">{{$message}}</div>
                @enderror
            </div>
            <div class="">
                <label for="name" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">
                    Author ID
                </label>
                <select 
                    type="number" 
                    placeholder="Enter name..." 
                    wire:model="author_id"
                    class="w-[50%] px-4 py-2 rounded-lg border border-gray-300 dark:border-gray-600 
                        bg-white dark:bg-gray-800 text-gray-900 dark:text-gray-100 
                        placeholder-gray-400 dark:placeholder-gray-500 
                        focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 
                        transition duration-200 ease-in-out shadow-sm max-h-10 overflow-y-auto"
                >
                <option value="">Select</option>
                @if(!empty($authorList))
                @foreach($authorList as $author)
                    <option value="{{$author->id}}">{{$author->name}}</option>
                @endforeach
                @endif
                </select>
                @error('author_id')
                    <div class="error">{{$message}}</div>
                @enderror
            </div>

            <button 
                class="inline-flex items-center px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white 
                    text-sm font-medium rounded-lg shadow-sm transition duration-150 ease-in-out 
                    focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500"
            >
                Submit
            </button>
        </form>

    </div>

    
</div>
