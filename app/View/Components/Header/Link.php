<?php

namespace App\View\Components\Header;

use Illuminate\View\Component;

class Link extends Component
{
    public string $url = '/';

    public string $title = '';

    /**
     * Create a new component instance.
     *
     * @param string $url
     * @param string $title
     */
    public function __construct(string $url, string $title)
    {
        $this->url = $url;
        $this->title = $title;
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
