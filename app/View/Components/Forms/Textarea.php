<?php

namespace App\View\Components\Forms;

use Illuminate\View\Component;

class Textarea extends Component
{
    public $id;
    public $name;
    public $label;

    /**
     * Create a new component instance.
     *
     * @param string      $name
     * @param string|null $label
     */
    public function __construct(string $name, ?string $label = null)
    {
        $this->name = $name;
        $this->id = strtolower($name);
        $this->label = $label ?? ucfirst($name);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.forms.textarea');
    }
}
