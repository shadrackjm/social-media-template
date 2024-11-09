<?php

namespace App\Livewire;

use Livewire\Component;

class FollowersList extends Component
{
    public $followers;

    public function mount()
    {
        // Fetch followers from the database or API
        $this->followers = [
            ['name' => 'John Doe', 'username' => '@johndoe'],
            ['name' => 'Jane Smith', 'username' => '@janesmith'],
            // Add more mock data or fetch from a data source
        ];
    }

    public function render()
    {
        return view('livewire.followers-list');
    }
}
