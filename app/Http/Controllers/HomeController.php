<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        

        $user_id = Auth::user()->id;
        

        $posts = DB::table('posts')
            ->join('users', 'users.id', 'posts.user_id')
            ->get();
        return view('home')->with('posts', $posts);
    }
    public function uploadPosts()
    {
        return auth()->user;
    }
}
