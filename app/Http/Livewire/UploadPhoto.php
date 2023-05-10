<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;


class UploadPhoto extends Component
{
    use WithFileUploads;

    public $photo;

    public function save()
    {

        $this->validate([
            'photo' => 'required|mimes:jpeg,png,jpg,gif', // 1MB Max
        ]);

        $this->photo->store('photos');
    }

    public function render()
    {
        return view('livewire.upload-photo');
    }
}
