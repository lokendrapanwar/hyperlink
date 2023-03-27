<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
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



    public function contacts()
    {
        return view('admin.contacts');
    }

    public function editContact()
    {
        return view('admin.edit_cotacts');
    }

    public function deleteContact()
    {
        return view('admin.cotacts');
    }
}
