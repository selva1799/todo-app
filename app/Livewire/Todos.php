<?php

namespace App\Livewire;

use Livewire\Component;
use App\Events\Todocreate;
use Livewire\Attributes\On;

class Todos extends Component
{
    public $title = 'Todo list';
    
    public $todo ='';

    public $todos = [];


    #[On('echo:create-todo,Todocreate')]
    public function listenForMessage($data){
       $this->todos[] = $data['todo'];
    }


    public function addTodo()
    {
        $this->validate([
            'todo' => 'required|min:2',
        ]);

        event(new Todocreate($this->todo));

        $this->todo = '';
    }

    public function render()
    {
        return view('livewire.todos');
    }
}
