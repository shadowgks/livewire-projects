<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;


class ProductsSearch extends Component
{
    use WithPagination;

    public string $search = '';
    protected $queryString = ['search']; // if you need show search in url

    public function updated($e)
    {
        $this->resetPage();
    }

    public function render()
    {
        $query = Product::query();
        if ($this->search) {
            $query = Product::where('title', 'like', '%' . $this->search . '%')
                ->orWhere('description', 'like', '%' . $this->search . '%')
                ->orWhere('price', 'like', '%' . $this->search . '%');
        }
        return view('livewire.products-search', [
            'products' => $query->paginate(10)
        ]);
    }
}
