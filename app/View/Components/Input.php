<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Input extends Component
{
    public $label;
    public $name;
    public $type;
    public $demo;
    /**
     * Create a new component instance.
     */
    public function __construct($label,$name,$type,$demo=0)
    {
        $this->label=$label;
        $this->type=$type;
        $this->name=$name;      
        $this->demo=$demo;  

    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.input');
    }
}
