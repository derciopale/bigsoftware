<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;

class PrincipalController extends Controller
{
    
    public function home(){
        $posts = Post::latest()->paginate(5);
        
        return view('principal', compact('posts'))
                ->with('i', (request()->input('page', 1) - 1) * 5);
    
}


    
}
