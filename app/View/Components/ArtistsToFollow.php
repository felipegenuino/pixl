<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ArtistsToFollow extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $artists = [
            ['name' => 'alessia_draws', 'image' => 'alessia.png', 'alt' => 'Avatar of Alessia'],
            ['name' => 'just_anne', 'image' => 'anne.png', 'alt' => 'Avatar of Anne'],
            ['name' => 'Mr. Anderson', 'image' => 'mr-anderson.png', 'alt' => 'Avatar of Mr. Anderson'],
            ['name' => 'Michael', 'image' => 'michael.png', 'alt' => 'Avatar of Michael'],
        ];
        return view('components.artists-to-follow', compact('artists'));
    }
}
