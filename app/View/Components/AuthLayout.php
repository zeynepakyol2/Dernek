<?php

namespace App\View\Components;

use Illuminate\Console\View\Components\Component;

class AuthLayout extends Component
{
    public function render()
    {
        return view('components.auth-layout');
    }
}
