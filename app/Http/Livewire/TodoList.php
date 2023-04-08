<?php

namespace App\Http\Livewire;
use Livewire\Component;

class TodoList extends Component
{
    
    public String $filter = 'all';

    protected $listeners = [
        'created' => '$refresh',
        'updated' => '$refresh',
        'deleted' => '$refresh',
    ];
    
    public function render()
    {

        return view('livewire.todo-list', [
            'todos' => auth()->user()->todos()
                ->when($this->filter == 'uncompleted', fn($query) => $query->where('completed', false))
                ->when($this->filter == 'completed', fn($query) => $query->where('completed', true))
                ->orderBy('completed')
                ->get(),
        ]);
    }
}
