<?php

namespace Foostart\Front\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use URL,
    Route,
    Redirect;

class FrontController extends Controller
{
    public $data = array();
    public function __construct() {
    }

    public function index(Request $request)
    {
        $this->data = array(
            'request' => $request,
        );
        return view('front::page.vi.home', $this->data);
    }

}