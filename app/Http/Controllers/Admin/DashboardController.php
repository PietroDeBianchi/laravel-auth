<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// Check Route::middleware(['auth', 'verified']) in routes/web.php
class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard');
    }
}
