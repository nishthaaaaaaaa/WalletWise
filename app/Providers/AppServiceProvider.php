<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Category;
use App\Models\contactUs;
use App\Models\Expense;
use App\Models\User;
use App\Models\Income;
use App\Models\reminder;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot()
    {
        $categories = Category::all();
        $users = User::all();
        $income = Income::all();
        $expense = Expense::all();
        $reminder = reminder::all();
        $suggestions = contactUs::all();
        View::share([
            'categories' => $categories,
            'members' => $users,
            'incomeReport' => $income,
            'expenseReport' => $expense,
            'reminder' => $reminder,
            'suggestions' => $suggestions,
        ]);
    }
}
