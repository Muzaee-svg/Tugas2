<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Layout extends Component
{
    public string $judul;

    public function __construct(string $judul = 'My Blog')
    {
        $this->judul = $judul;
    }

    public function render(): View|Closure|string
    {
        return view('components.layout');
    }
}
