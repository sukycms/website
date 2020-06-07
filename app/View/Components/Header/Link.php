<?php

namespace App\View\Components\Header;

use Illuminate\View\Component;

class Link extends Component
{
    public $url = '/';

    /**
     * Create a new component instance.
     *
     * @param string $url
     */
    public function __construct(string $url)
    {
        $this->url = $url;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.header.link');
    }
}
