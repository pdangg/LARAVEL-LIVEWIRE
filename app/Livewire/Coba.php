<?php

namespace App\Livewire;

use Livewire\Component;

class Coba extends Component
{

    public $count = 1; 

    public function tambah() {
        $this -> count++;
    }

    public function kurang() {
        $this -> count--;
    }

    public function render()
    {
        return view('livewire.coba');
    }
}
