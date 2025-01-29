<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Application;

class FrontendController extends Controller
{
    public function index (){
       
            return Inertia::render('Home', [
                'canLogin' => Route::has('login'),
                'canRegister' => Route::has('register'),
            
            ]);
    }
}