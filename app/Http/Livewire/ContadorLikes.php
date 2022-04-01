<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ContadorLikes extends Component
{
    public $count = 0;

    public $name = "Maria";

    public function render()
    {
        return view('livewire.contador-likes');
    }

    public function increment()
    {
        $this->count++;
    }
}
