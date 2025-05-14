<?php


namespace App\Livewire;
use Livewire\Component;
use App\Models\Post;

class Login extends Component
{

    // public function selectCatagory($catagory)
    // {

    //     $selectedCatagory = $catagory;
        
    //     exit;
        
    // }

    public function login()
    {
        return view('livewire.login');
    }
}
