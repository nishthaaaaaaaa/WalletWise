<?php

namespace App\Http\Controllers;
use  App\Models\ExpenseController;
use  App\Models\incomeController;
use Illuminate\Http\Request;
use App\Models\User; // Import the User model

class AdminDashboardController extends Controller
{
    public function index() {
        $totalUsers = User::all(); 
        return view('admin.dashboard', compact('totalUsers'));
    }
    
}
