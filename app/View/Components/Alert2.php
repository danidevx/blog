<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Alert2 extends Component
{
    public $class;
    /**
     * Create a new component instance.
     */
    public function __construct($type = 'info')
    {
        switch ($type){
    case 'info':
        $class='text-blue-800 bg-blue-50 dark:bg-gray-800 dark:text-blue-400';
    break;

    case 'danger':
        $class='text-red-800 bg-red-50 dark:bg-gray-800 dark:text-red-400';

    break;

    default :

        $class='text-yellow-800 border-yellow-300 rounded-lg bg-yellow-50 dark:bg-gray-800';    

    break;
}

$this->class = $class;

    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.alert2');
    }
}
