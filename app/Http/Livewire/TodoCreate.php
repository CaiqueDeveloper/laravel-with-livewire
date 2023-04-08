<?php

namespace App\Http\Livewire;

use App\Models\Todo;
use App\Models\User;
use Livewire\Component;
use PhpParser\Node\Expr\Cast\Object_;

class TodoCreate extends Component
{
    public String $title;
    
    protected $rules = [
        'title' => 'required|min:3',
    ];
    
    public function render()
    {
        return view('livewire.todo-create');
    }

    public function save(){
        
        $this->validate();


        auth()->user()->todos()->create(['title' => $this->title]);
        $this->title = '';
        $this->emitTo(TodoList::class, 'created');
        
    }
}
