<?php

namespace App\Http\Livewire;

use App\Models\Todo;
use Livewire\Component;

class TodoItem extends Component
{
    public Todo $todo;
    
    protected $rules = [
        'todo.completed' => 'boolean' 
    ];

    public function render()
    {
        return view('livewire.todo-item');
    }
    public function updated(){

        $this->todo->save();
        $this->emitTo(TodoList::class, 'updated');
    }
}
