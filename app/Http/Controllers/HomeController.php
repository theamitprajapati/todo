<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Blog;
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
        return view('home');
    }
    
    public function datatable(Request $request)
    {

        $flight = Blog::firstOrCreate(
            ['userID' => 1],
            ['title' => 'this is title',
            ]
        );
        dd(User::find(1)->getblog);

        return view('datatable');
    }
}
