<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;


class UploadPhoto extends Component
{
    use WithFileUploads;

    public $pictures = [];

    public function save()
    {
        $this->validate([
            'pictures.*' => 'required|mimes:jpeg,png,jpg,gif',
        ]);

        foreach ($this->pictures as $key => $item) {
            $item->store('photos');
        }
    }

    public function render()
    {
        return view('livewire.upload-photo');
    }
}
