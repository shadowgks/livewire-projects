<?php

namespace App\Http\Livewire;

use App\Models\Continent;
use App\Models\Country;
use Livewire\Component;
use PhpParser\Node\Stmt\TryCatch;

class CascadingDropdown extends Component
{
    public $continents = [];
    public $countries = [];
    public $getValueContinent;

    public function mount()
    {
        $this->continents = Continent::all();
    }

    public function selectedContinent()
    {
        try {
            if($this->getValueContinent !== -1){
                $this->countries = Country::where('continent_id', $this->getValueContinent)->get();
            }
        } catch (\Throwable $th) {
            return;
        }

    }

    public function render()
    {
        return view('livewire.cascading-dropdown');
    }
}
