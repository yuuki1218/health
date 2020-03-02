<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\HTML;
use App\Profile;
use Carbon\Carbon;

class ProfileController extends Controller
{
    public function index(Request $request)
    {
        $posts = Profile::all();
        
        return view('profile.index', ['posts' => $posts]);
    }
    
}
