<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class EventController extends Controller {
    public function index(){
        return View('welcome');
    }

    public function create(){
        return view('events.create');
    }
}
