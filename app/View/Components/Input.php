<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Input extends Component
{
    /**
     * The input name
     *
     * @var string[]
     */
    public $name;

    /**
     * The input type.
     *
     * @var string
     */
    public $type;

    /**
     * The input placeholder.
     *
     * @var string
     */
    public $placeholder;

    /**
     * The input options for select (dropdown).
     *
     * @var string[]
     */
    public $options;

    /**
     * Create the component instance.
     *
     * @param  string  $type
     * @param  string  $message
     * @return void
     */
    public function __construct($type, $placeholder, $name, $options = [],)
    {
        $this->type = $type;
        $this->placeholder = $placeholder;
        $this->options = $options;
        $this->name = $name;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.input');
    }
}
