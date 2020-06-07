<?php

namespace App\View\Components\Forms;

use Illuminate\View\Component;

class Label extends Component
{
    public $for;

    /**
     * Create a new component instance.
     *
     * @param string $for
     */
    public function __construct(string $for)
    {
        $this->for = $for;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.forms.label');
    }
}
