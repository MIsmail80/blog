<?php

namespace App\Http\View\Composers;

use App\Models\Category;
use App\Repositories\UserRepository;
use Illuminate\View\View;

class MainMenuComposer
{
    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with('categories', Category::all())
            ->with('myName', 'Mohamed Ismail');
    }
}