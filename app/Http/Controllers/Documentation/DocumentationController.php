<?php

namespace App\Http\Controllers\Documentation;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DocumentationController extends Controller
{
    public function index()
    {
        $this->spladeTitle('Documentation');

        return view('documentation.index');
    }

    /**
     * Show the documentation for sidebar
     */
    public function sidebar()
    {
        $this->spladeTitle('Sidebar Documentation');

        return view('documentation.sidebar');
    }

    /**
     * Show the documentation for card
     */
    public function card()
    {
        return view('documentation.card');
    }

    /**
     * Show the documentation for button
     */
    public function button()
    {
        return view('documentation.button');
    }

    /**
     * Show the documentation for input
     */
    public function input()
    {
        return view('documentation.input');
    }
    /**
     * Show the documentation for input
     */
    public function controllerHelper()
    {
        return view('documentation.controller-helper');
    }

    /**
     * Show the documentation for input
     */
    public function uploadFileHelper()
    {
        return view('documentation.upload-file-helper');
    }

    /**
     * Show the documentation for input
     */
    public function spladeHelper()
    {
        return view('documentation.splade-helper');
    }
}
