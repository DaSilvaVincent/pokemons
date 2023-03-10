<?php

namespace App\View\Components;

use Illuminate\View\Component;

class MessageInfo extends Component
{
    public $type;
    public $message;

    /**
     * Create a new component instance.
     *
     * @param $type
     * @param $message
     */
    public function __construct($type, $message) {
        $this->type = $type;
        $this->message = $message;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.message-info');
    }
}
