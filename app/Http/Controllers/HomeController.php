<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Tweet;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    
}
