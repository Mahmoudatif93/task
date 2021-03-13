<?php

namespace App\Http\Controllers\Dashboard;

use App\Category;

use App\Courses;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class WelcomeController extends Controller
{
    public function index()
    {

        $categories_count = Category::count();
        $products_count = Courses::count();

        $users_count = User::whereRoleIs('admin')->count();


$clients_count=0;
$sales_data=0;
        return view('dashboard.welcome', compact('categories_count', 'products_count', 'clients_count', 'users_count', 'sales_data'));
    } //end of index

}//end of controller
