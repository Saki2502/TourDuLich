<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TourdulichController extends Controller
{
    public function index(){
        return view('tourdulich.index');
    }

    public function login(){
        return view('tourdulich.login');
    }

    public function register(){
        return view('tourdulich.register');
    }
}
