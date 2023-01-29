<?php

namespace App\View\Components;

use App\Models\Item;
use Illuminate\View\Component;

class section extends Component
{
    public $items;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->items = $this->getItems();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.section');
    }

    private function getItems()
    {
        return Item::latest()->take(3)->get();
    }
}
