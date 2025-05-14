<?php

namespace App\Livewire;
use Livewire\Component;
use App\Models\Post;

class Catagory extends Component
{

    public $selectedCatagory = "all";

    public function selectCatagory($catagory)
    {

        $selectedCatagory = $catagory;
        
        exit;
        
    }

    public function render()
    {
        return view('livewire.catagory');
    }
}
