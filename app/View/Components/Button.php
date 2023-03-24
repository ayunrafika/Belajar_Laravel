<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Button extends Component
{
    // pendefinisian teks, warna, dan ukuran button
    public $text;
    public $color;
    public $size;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($text = "Button", $color = "Primary", $size = "")
    {
        $this->text = $text;
        $this->color = $color;
        $this->size = $size;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.button');
    }
}
