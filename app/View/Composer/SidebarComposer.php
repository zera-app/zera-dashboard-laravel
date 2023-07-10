<?php

namespace App\View\Composer;

use App\View\Composer\Sidebar\SidebarContent;
use Illuminate\Contracts\View\View;

class SidebarComposer
{
    /**
     * Create sidebar composer.
     */
    public function compose(View $view)
    {
        if (!is_null(request()->route())) {
            $pageName = request()->route()->getName();
            $routePrefix = explode('.', $pageName)[0] ?? '';
            $routeName = explode('.', $pageName)[1] ?? '';
            $routeAction = explode('.', $pageName)[2] ?? '';

            $view->with('sidebarMenu', SidebarContent::dashboard());

            $view->with('routePrefix', $routePrefix);
            $view->with('routeName', $routeName);
            $view->with('routeAction', $routeAction);
        }
    }
}
