<?php

namespace App\Http\Livewire;

use App\Models\Todo;
use Livewire\Component;

class TodoDelete extends Component
{
    public Todo $todo;

    public function render()
    {
        return view('livewire.todo-delete');
    }

    public function destroy(){
        
        $this->todo->delete();
        $this->emitTo(TodoList::class , 'deleted');
    }
}
