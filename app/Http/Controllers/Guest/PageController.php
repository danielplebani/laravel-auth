<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;

class PageController extends Controller
{
    public function index(){
        return view('welcome');
    }
    public function contacts(){
        return view('contacts');
    }
    public function help(){
        return view('help');
    }
}
