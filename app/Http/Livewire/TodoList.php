<?php

namespace App\Http\Livewire;

use App\Models\Continent;
use App\Models\Todolists;
use Livewire\Component;

class TodoList extends Component
{
    public string $todo_lists = '';
    public $todos;

    public function mount()
    {
        $this->todoLists();
    }

    public function todoLists()
    {
        $this->todos = Todolists::orderBy('created_at', 'DESC')->get();
    }

    public function addTodoList()
    {
        if ($this->todo_lists) {
            $create = Todolists::create([
                'title' => $this->todo_lists,
                'complated' => false,
            ]);
            $this->todo_lists = '';
            $this->todoLists();
        }
    }

    public function toggleTodoList($id)
    {
        $toggle = Todolists::where('id', $id)->first();
        if (!$toggle) {
            return;
        }
        $toggle->complated = !$toggle->complated;
        $toggle->save();
        $this->todoLists();
    }

    public function distoryTodoList($id)
    {
        $find_item = Todolists::find($id);
        if (!$find_item) {
            return;
        }
        $find_item->delete();
        $this->todoLists();
    }

    public function render()
    {
        return view('livewire.todo-list');
    }
}
