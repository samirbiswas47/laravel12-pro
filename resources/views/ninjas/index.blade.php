
<x-layout :props="['books' => $books]">
  <div class="p-4">
        <h2 class="text-xl font-bold mb-4">Book List</h2>
        <ul>
            {{print_r($books)}}
            
        </ul>
    </div>
    
</x-layout> 

