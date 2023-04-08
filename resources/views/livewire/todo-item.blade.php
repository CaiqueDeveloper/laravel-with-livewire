
<div class="content-todo w-full flex justify-between h-10 my-3 items-center">
    <div class="space-x-3 ">
        <input type="checkbox" id="todo-item-{{$todo->id}}" wire:model="todo.completed"  >
        <label for="todo-item-{{$todo->id}}" class="cursor-pointer @if($todo->completed) line-through text-gray-300 @endif">{{$todo->title}}</label>
    </div>
    
    <livewire:todo-delete :todo="$todo" :key="$todo->id .'-delete'" />
</div>

