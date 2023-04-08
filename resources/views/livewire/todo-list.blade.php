<div>
    <livewire:todo-create />
    <h2 class="my-4">Filter</h2>
    <div class="w-full flex justify-between ">
        <div class="space-x-3 cursor-pointer">
            <input type="radio" name="todo-filter-all" id="todo-filter-all" wire:model="filter"  value="all">
            <label for="todo-filter-all">All</label>
        </div>
        <div class="space-x-3 cursor-pointer">
            <input type="radio" name="todo-filter-completed" id="todo-filter-completed" wire:model="filter" value="completed">
            <label for="todo-filter-completed" >Done</label>
        </div>
        <div class="space-x-3 cursor-pointer">
            <input type="radio" name="todo-filter-uncompleted" id="todo-filter-uncompleted" wire:model="filter" value="uncompleted">
            <label for="todo-filter-uncompleted">Uncompleted</label>
        </div>

    </div>
    <hr class="text-gray-400 my-3">

    @forelse ($todos as $todo)

        <livewire:todo-item :todo="$todo" :key="$todo->id"/>

    @empty
        <div class="flex p-4 mb-4 text-sm text-yellow-800 rounded-lg bg-yellow-50 dark:bg-gray-800 dark:text-yellow-300 my-8" role="alert">
            <svg aria-hidden="true" class="flex-shrink-0 inline w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
            <span class="sr-only">Info</span>
            <div>
                <span class="font-medium">Warning alert!</span> Task not found
            </div>
        </div>
    @endforelse
</div>
