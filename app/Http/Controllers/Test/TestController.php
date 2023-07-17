<?php

namespace App\Http\Controllers\Test;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Traits\UploadFile;
use GuzzleHttp\Psr7\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TestController extends Controller
{
    public function index()
    {
        $this->spladeTitle('Splade Helper Documetation');

        // ...
    }
}
