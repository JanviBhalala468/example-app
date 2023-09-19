<?php

namespace App\View\Components;

use Illuminate\View\Component;

class damo extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $d;
    public function __construct($data)
    {
        $this->d = $data;

        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.damo');
    }
}