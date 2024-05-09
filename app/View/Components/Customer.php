<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Customer extends Component
{
    public $label;
    public $name;
    public $type;
    public $value;
    public function __construct($label,$name,$type,$value)
    {
        $this->label=$label;
        $this->name=$name;
        $this->type=$type;
        $this->value=$value;

    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.customer');
    }
}
