<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\View\View;

class AppLayout extends Component
{
    public function render(): View
    {
        // Ubah dari 'components.layouts.app' ke 'layouts.app'
        return view('layouts.app');
    }
}
