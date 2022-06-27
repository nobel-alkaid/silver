<?php

namespace App\View\Components;

use Illuminate\View\Component;

class DashLayout extends Component
{
    public bool $auth;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(bool $auth = false)
    {
        $this->auth = $auth;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('layouts.dash');
    }
}
