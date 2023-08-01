<?php

namespace App\Http\Controllers\Documentation;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;

class DocumentationController extends Controller
{
    public function index()
    {
        $this->spladeTitle('Documentation');

        return view('documentation.index');
    }

    // ! HELPERS DOCUMENTATION ---------------------------------------------------------------

    /**
     * Documentation for controller helper.
     * 
     * @return \Illuminate\View\View
     */
    public function controllerHelper(): View
    {
        $this->spladeTitle('Controller Helper');

        return view('documentation.controller-helper');
    }

    /**
     * Documentation for upload file helper.
     * 
     * @return \Illuminate\View\View
     */
    public function uploadFileHelper()
    {
        $this->spladeTitle('Upload File Helper');

        return view('documentation.upload-file-helper');
    }

    /**
     * Documentation for splade helper.
     * 
     * @return \Illuminate\View\View
     */
    public function spladeHelper()
    {
        $this->spladeTitle('Splade Helper');

        return view('documentation.splade-helper');
    }

    // ! / END HELPERS DOCUMENTATION ---------------------------------------------------------------

    // ! PAGES DOCUMENTATION ---------------------------------------------------------------
    /**
     * Documentation for sidebar.
     * 
     * @return \Illuminate\View\View
     */
    public function color()
    {
        $this->spladeTitle('Custom Color');

        return view('documentation.color');
    }

    /**
     * Documentation for sidebar.
     * 
     * @return \Illuminate\View\View
     */
    public function sidebar()
    {
        $this->spladeTitle('Sidebar');

        return view('documentation.sidebar');
    }

    /**
     * Documentation for config.
     * 
     * @return \Illuminate\View\View
     */
    public function config()
    {
        $this->spladeTitle('Config');

        return view('documentation.config');
    }
    // ! / END PAGES DOCUMENTATION ---------------------------------------------------------------

    // ! COMPONENTS DOCUMENTATION ---------------------------------------------------------------
    /**
     * Documentation for alert.
     * 
     * @return \Illuminate\View\View
     */
    public function alert()
    {
        $this->spladeTitle('Alert');

        return view('documentation.alert');
    }

    /**
     * Documentation for badge.
     * 
     * @return \Illuminate\View\View
     */
    public function badge()
    {
        $this->spladeTitle('Badge');

        return view('documentation.badge');
    }

    /**
     * Documentation for breadcrumb.
     * 
     * @return \Illuminate\View\View
     */
    public function breadcrumb()
    {
        $this->spladeTitle('Breadcrumb');

        return view('documentation.breadcrumb');
    }

    /**
     * Documentation for button.
     * 
     * @return \Illuminate\View\View
     */
    public function button()
    {
        $this->spladeTitle('Button');

        return view('documentation.button');
    }

    /**
     * Documentation for card.
     * 
     * @return \Illuminate\View\View
     */
    public function card()
    {
        $this->spladeTitle('Card');

        return view('documentation.card');
    }

    /**
     * Documentation for collapse.
     * 
     * @return \Illuminate\View\View
     */
    public function collapse()
    {
        $this->spladeTitle('Collapse');

        return view('documentation.collapse');
    }

    /**
     * Documentation for modal.
     * 
     * @return \Illuminate\View\View
     */
    public function modal()
    {
        $this->spladeTitle('Modal');

        return view('documentation.modal');
    }

    /**
     * Documentation for tooltip.
     * 
     * @return \Illuminate\View\View
     */
    public function tooltip()
    {
        $this->spladeTitle('Tooltip');

        return view('documentation.tooltip');
    }
    // ! / END COMPONENTS DOCUMENTATION ---------------------------------------------------------------

    // ! SPLADE COMPONENT DOCUMENTATION ---------------------------------------------------------------
    /**
     * Documentation for splade flash.
     * 
     * @return \Illuminate\View\View
     */
    public function flash()
    {
        $this->spladeTitle('Flash');

        return view('documentation.flash');
    }

    /**
     * Documentation for splade toast.
     * 
     * @return \Illuminate\View\View
     */
    public function toast()
    {
        $this->spladeTitle('Toast');

        return view('documentation.toast');
    }

    /**
     * Documentation for splade form.
     * 
     * @return \Illuminate\View\View
     */
    public function form()
    {
        $this->spladeTitle('Form');

        return view('documentation.form');
    }

    /**
     * Documentation for splade link.
     * 
     * @return \Illuminate\View\View
     */
    public function link()
    {
        $this->spladeTitle('Link');

        return view('documentation.link');
    }

    /**
     * Documentation for splade script.
     * 
     * @return \Illuminate\View\View
     */
    public function script()
    {
        $this->spladeTitle('Script');

        return view('documentation.script');
    }

    /**
     * Documentation for splade toggle.
     * 
     * @return \Illuminate\View\View
     */
    public function toggle()
    {
        $this->spladeTitle('Toggle');

        return view('documentation.toggle');
    }

    /**
     * Documentation for splade transition.
     * 
     * @return \Illuminate\View\View
     */
    public function transition()
    {
        $this->spladeTitle('Transition');

        return view('documentation.transition');
    }

    /**
     * Documentation for splade teleport.
     * 
     * @return \Illuminate\View\View
     */
    public function teleport()
    {
        $this->spladeTitle('Teleport');

        return view('documentation.teleport');
    }
    // ! / END SPLADE COMPONENT DOCUMENTATION ---------------------------------------------------------------

    // ! SPLADE INPUT COMPONENT DOCUMENTATION ---------------------------------------------------------------
    /**
     * Documentation for splade input.
     * 
     * @return \Illuminate\View\View
     */
    public function inputOverview()
    {
        $this->spladeTitle('Input Overview');

        return view('documentation.input-overview');
    }

    /**
     * Documentation for splade input.
     * 
     * @return \Illuminate\View\View
     */
    public function input()
    {
        $this->spladeTitle('Input');

        return view('documentation.input');
    }

    /**
     * Documentation for splade input.
     * 
     * @return \Illuminate\View\View
     */
    public function inputFloat()
    {
        $this->spladeTitle('Input Float');

        return view('documentation.input-float');
    }

    /**
     * Documentation for splade textarea.
     * 
     * @return \Illuminate\View\View
     */
    public function textarea()
    {
        $this->spladeTitle('Textarea');

        return view('documentation.textarea');
    }

    /**
     * Documentation for splade select.
     * 
     * @return \Illuminate\View\View
     */
    public function select()
    {
        $this->spladeTitle('Select');

        return view('documentation.select');
    }

    /**
     * Documentation for splade checkbox.
     * 
     * @return \Illuminate\View\View
     */
    public function checkbox()
    {
        $this->spladeTitle('Checkbox');

        return view('documentation.checkbox');
    }

    /**
     * Documentation for splade radio.
     * 
     * @return \Illuminate\View\View
     */
    public function radio()
    {
        $this->spladeTitle('Radio');

        return view('documentation.radio');
    }

    /**
     * Documentation for splade file.
     * 
     * @return \Illuminate\View\View
     */
    public function file()
    {
        $this->spladeTitle('File');

        return view('documentation.file');
    }

    /**
     * Documentation for splade group.
     * 
     * @return \Illuminate\View\View
     */
    public function group()
    {
        $this->spladeTitle('Group');

        return view('documentation.group');
    }

    /**
     * Documentation for splade submit.
     * 
     * @return \Illuminate\View\View
     */
    public function submit()
    {
        $this->spladeTitle('Submit');

        return view('documentation.submit');
    }

    /**
     * Documentation for splade wysiwyg.
     * 
     * @return \Illuminate\View\View
     */
    public function wysiwyg()
    {
        $this->spladeTitle('Wysiwyg');

        return view('documentation.wysiwyg');
    }

    /**
     * Documentation for splade model binding.
     * 
     * @return \Illuminate\View\View
     */
    public function modelBinding()
    {
        $this->spladeTitle('Model Binding');

        return view('documentation.model-binding');
    }

    // ! / END SPLADE INPUT COMPONENT DOCUMENTATION ---------------------------------------------------------------

    // ! SPLADE TABLE COMPONENT DOCUMENTATION ---------------------------------------------------------------
    /**
     * Documentation for splade table.
     * 
     * @return \Illuminate\View\View
     */
    public function tableOverview()
    {
        $this->spladeTitle('Table Overview');

        return view('documentation.table-overview');
    }

    /**
     * Documentation for splade table Query Builder.
     * 
     * @return \Illuminate\View\View
     */
    public function tableQueryBuilder()
    {
        $this->spladeTitle('Table Query Builder');

        return view('documentation.table-query-builder');
    }

    /**
     * Documentation for splade table Bulk Action.
     * 
     * @return \Illuminate\View\View
     */
    public function tableBulkAction()
    {
        $this->spladeTitle('Table Bulk Action');

        return view('documentation.table-bulk-action');
    }

    /**
     * Documentation for splade table Export.
     * 
     * @return \Illuminate\View\View
     */
    public function tableExport()
    {
        $this->spladeTitle('Table Export');

        return view('documentation.table-export');
    }

    /**
     * Documentation for splade table Spatie Query Builder.
     * 
     * @return \Illuminate\View\View
     */
    public function tableSpatieQueryBuilder()
    {
        $this->spladeTitle('Table Spatie Query Builder');

        return view('documentation.table-spatie-query-builder');
    }
    // ! / END SPLADE TABLE COMPONENT DOCUMENTATION ---------------------------------------------------------------
}
